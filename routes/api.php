<?php

use App\Http\Resources\EquipoResource;
use App\Http\Resources\TorneoResource;
use App\Http\Resources\UserResource;
use App\Models\Equipo;
use App\Models\Torneo;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use PhpParser\Node\Stmt\Foreach_;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//////////////////////////////////////////////////


Route::middleware('auth:sanctum')->group(function () {

    //encontrar un torneo en especifico
    Route::get('torneos/{id}',  function ($id) {
        /*
        $grupo = Grupo::find($id);
        if ($grupo == null) {
            return response()->json([ 'msg:' => 'Error, grupo no encontrado']);
        } else {
            return new GrupoResource(Grupo::findOrFail($id));
        }
        */
        return new TorneoResource(Torneo::findOrFail($id));
    });

    //devuelve todos los torneos
    Route::get('torneos/',  function () {
        return TorneoResource::collection(Torneo::all());
    });
    //JSON con todos los torneos abiertos
    Route::get('torneos/open/open',  function () {
        return TorneoResource::collection(Torneo::where('estado', 'activo')->get());
    });

    //JSON con los equipos inscritos en un torneo y sus jugadores
    Route::get('torneos/{id}/equipos',  function ($id) {
        $torneo = Torneo::findOrFail($id);
        $equiposTorneo = $torneo->equipos()->get();
        foreach ($equiposTorneo as $equipo) {
            $usuarios = $equipo->componentes()->get();
        }
        return new TorneoResource(['torneos' => $torneo, 'equipos' => $equipo, 'usuarios' => $usuarios]);
    });

    //JSON con todos los equipos completos (con todos sus integrantes) de la modalidad 1vs1. Hacer para todas las modalidades.
    Route::get('equipos/1',  function () {
        $equipos = Equipo::where('modalidad', '1')->get();
        foreach ($equipos as $equipo) {
            $usuarios = $equipo->componentes()->get();
        }
        return new EquipoResource(['equipos' => $equipos, 'usuarios' => $usuarios]);
    });
    Route::get('equipos/2',  function () {
        $equipos = Equipo::where('modalidad', '2')->get();
        foreach ($equipos as $equipo) {
            $usuarios = $equipo->componentes()->get();
        }
        return new EquipoResource(['equipos' => $equipos, 'usuarios' => $usuarios]);
    });
    Route::get('equipos/3',  function () {
        $equipos = Equipo::where('modalidad', '3')->get();
        foreach ($equipos as $equipo) {
            $usuarios = $equipo->componentes()->get();
        }
        return new EquipoResource(['equipos' => $equipos, 'usuarios' => $usuarios]);
    });
    Route::get('equipos/4',  function () {
        $equipos = Equipo::where('modalidad', '4')->get();
        foreach ($equipos as $equipo) {
            $usuarios = $equipo->componentes()->get();
        }
        return new EquipoResource(['equipos' => $equipos, 'usuarios' => $usuarios]);
    });
    Route::get('equipos/5',  function () {
        $equipos = Equipo::where('modalidad', '5')->get();
        foreach ($equipos as $equipo) {
            $usuarios = $equipo->componentes()->get();
        }
        return new EquipoResource(['equipos' => $equipos, 'usuarios' => $usuarios]);
    });
    //JSON con los equipos abiertos para inscribirse y los jugadores actualmente inscritos
    Route::get('/equipos/abierto',  function () {
        $equipos = Equipo::where('estado', 'abierto')->get();
        foreach ($equipos as $equipo) {
            $usuarios = $equipo->componentes()->get();
        }
        return new EquipoResource(['equipos' => $equipos, 'usuarios' => $usuarios]);
    });

    //JSON con nick, país imagen, nivel de todos los jugadores
    Route::get('/jugadores',  function () {
        return UserResource::collection(User::all());
    });

    //JSON con nick, país imagen, nivel de todos los jugadores de un nivel
    Route::get('/jugadores/{nivel}',  function ($nivel) {
        return UserResource::collection(User::where('nivel', $nivel)->get());
    });

    //POST para inscribir un equipo en un torneo abierto de la misma modalidad.
    Route::post('torneos/{id}/registrar',  function (Request $request, $id) {
        $torneo = Torneo::find($id);
        $equipo_id = $request->equipo;
        $torneo->equipos()->attach($equipo_id);
        return response()->json(['msg:' => 'Equipo agregado']);
    });

   
});


//CREAR TOKEN
Route::post('/tokens/create', function (Request $request) {

    $user = User::where('email', $request->email)->first();

    if (!$user || !Hash::check($request->password, $user->password)) {
        return response()->json(['error' => 'Usuario o contraseña incorrectos']);
        /*
        throw ValidationException::withMessages([
          'email' => ['The provided credentials are incorrect.'],
        ]);
        */
    }

    $token = $user->createToken($request->email);

    return response()->json(['token' => $token->plainTextToken]);
});
