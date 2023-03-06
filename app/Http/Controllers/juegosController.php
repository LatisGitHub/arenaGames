<?php

namespace App\Http\Controllers;

use App\Models\Juego;
use App\Models\Torneo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use function PHPUnit\Framework\isEmpty;

class juegosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (isset(Auth::user()->rol)) {
            if (Auth::user()->rol == 'admin') {
                return view('admin.juegos', ['juegos' => Juego::paginate(4)], ['torneos' => Torneo::all()]);
            } else {
                return view('web.juegos', ['juegos' => Juego::paginate(6)], ['torneos' => Torneo::all()]);
            }
        }
        if (isEmpty(Auth::user())) {
            return view('web.juegos', ['juegos' => Juego::paginate(6)], ['torneos' => Torneo::all()]);
        }
    }

    public function buscarJuego(Request $request)
    {
        $juegos = DB::table('juegos')
            ->where('nombre', 'like', '%'. $request->input('juego') . '%')->paginate(6);

        if (Auth::user()->rol == "admin") {
            return view('admin.juegos', ['juegos' => $juegos], ['torneos' => Torneo::all()]);
        } else {
            return view('web.juegos', ['juegos' => $juegos], ['torneos' => Torneo::all()]);
        }
        if (isEmpty(Auth::user())) {
            return view('web.juegos', ['juegos' => $juegos], ['torneos' => Torneo::all()]);
        }
    }

    public function buscarPlataforma(Request $request)
    {
        $juegos = DB::table('juegos')
            ->where('plataforma', '=', $request->input('plataforma'))->paginate(6);

        if (Auth::user()->rol == "admin") {
            return view('admin.juegos', ['juegos' => $juegos], ['torneos' => Torneo::all()]);
        } else {
            return view('web.juegos', ['juegos' => $juegos], ['torneos' => Torneo::all()]);
        }
        if (isEmpty(Auth::user())) {
            return view('web.juegos', ['juegos' => $juegos], ['torneos' => Torneo::all()]);
        }
    }
    public function inicio() {
        return view('web.inicio', ['juegos' => Juego::paginate(4)], ['torneos' => Torneo::all()]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.formNuevoJuego');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $juego = new Juego();
        $juego->nombre = $request->input('nombre');
        $juego->plataforma = $request->input('plataforma');
        $path = $request->file('imagen')->store('public');
        // /public/nombreimagengenerado.jpg
        //Cambiamos public por storage en la BBDD para que se pueda ver la imagen en la web
        $juego->imagen =  str_replace('public', 'storage', $path);
        $juego->descripcion = $request->input('descripcion');


        $juego->save();

        return redirect('juegos');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Juego $juego)
    {
        if (isset(Auth::user()->rol)) {
            if (Auth::user()->rol == 'admin') {
                return view('admin.juegoDetalle', ['juego' => $juego, 'torneos' => Torneo::all()]);
            } else {
                return view('web.juegoDetalle', ['juego' => $juego, 'torneos' => Torneo::all()]);
            }
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Juego $juego)
    {
        $juego->delete();
        return redirect('/juegos');
    }
}
