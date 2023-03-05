<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ArenaGames</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        a{
            text-decoration: none;
            color: black;
        }

        body {
        font-family: 'helvetica', 'sans-serif';
        margin: 0;
    }

    /* start: global style rules */
    h1,
    h2,
    h3,
    h4,
    h5 {
        line-height: 1.5;
        font-weight: 300;
        margin: 0.5em 0;
    }

    h1 {
        font-size: 2.5em;
    }

    h2 {
        font-size: 2em;
    }

    h3 {
        font-size: 1.6em;
    }

    h4 {
        font-size: 1.4em;
    }

    h5 {
        font-size: 1.2em;
    }

    a {
        text-decoration: none;
    }

    p,
    label,
    strong {
        line-height: 2;
        font-size: 0.85em;
        font-weight: 300;
    }

    .flex {
        display: flex;
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 15px;
        justify-content: space-between;
    }

    .badge {
        padding: 9px 20px;
        color: #eee;
        display: inline-block;
        text-transform: uppercase;
        font-weight: 600;
        text-align: center;
        font-size: 0.75em;
    }

    .badge.new {
        background-color: #FF205F;
    }

    .badge.strategy {
        background-color: #4EAE60;
    }

    .badge.racing {
        background-color: #694EAE;
    }

    .badge.rpg,
    .badge.adventure {
        background-color: #40ABF5;
    }

    .badge.tournaments {
        background-color: #FB6E10;
    }

    .badge.premium-tournament {
        background-color: #FFB320;
        color: #252525;
    }

    .shade {
        position: absolute;
        z-index: 1;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        background: rgba(0, 0, 0, 0.7);
    }

    /* end: global style rules */

    /* start: header styles */
    header {
        background-color: #131313;
        padding: 20px 0;
        position: relative;
        border-bottom: 1px solid #FFB320;
    }

    .hamburger-menu {
        background-color: transparent;
        border: 1px solid #FFB320;
        padding: 3px 5px;
        width: 30px;
        cursor: pointer;
        display: none;
    }

    .hamburger-menu .strip {
        display: block;
        height: 1px;
        background-color: #FFB320;
        margin: 4px 0;
    }

    nav ul {
        list-style-type: none;
        padding: 0;
        margin: 10px 0 0;
    }

    nav ul li {
        display: inline-block;
        font-size: 1em;
        margin: 0 18px;
    }

    nav ul li a {
        color: #eee;
        font-weight: 600;
    }

    nav ul li a:hover {
        color: #FFB320;
    }

    #login-register-button {
        background-color: #FFB320;
        color: #131313;
        border-radius: 20px;
        padding: 10px 15px;
        font-size: 0.85em;
        font-weight: 600;
    }
    </style>
</head>
<header class="sticky-top">
    <div class="flex" >
        <div class="logo">
            <a href="/inicio" style="color: white;font-size: 1.8em">ARENA  <span style="color: #FFB320">GAMES</span></a>
        </div>
        <nav>
            <button id="nav-toggle" class="hamburger-menu">
                <span class="strip"></span>
                <span class="strip"></span>
                <span class="strip"></span>
            </button>
            <ul id="nav-menu-container">
                <li><a href="/inicio">HOME</a></li>
                <li><a href="/juegos">JUEGOS</a></li>
                <li><a href="/torneos">TORNEOS</a></li>
                <li><a href="/equipos">EQUIPOS</a></li>
            </ul>
        </nav>
        @auth 
      <a id="login-register-button" href="/profile">PERFIL</a>
      @else
        <li style="list-style: none"> 
          <a id="login-register-button" href="{{ route('login') }}" id="login-register-button">LOGIN</a>
          @if (Route::has('register'))
            <a id="login-register-button" href="{{ route('register') }}">REGISTRARSE</a>
          @endif
        </li>
      @endauth
        
    </div>
</header>
<body>
  
  @yield('main')

  <footer>
    <!-- Footer -->
    <footer class="text-center text-lg-start  text-light" style="background-color: #131313">
        <!-- Section: Social media -->
        <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
            <!-- Left -->
            <div class="me-5 d-none d-lg-block">
                <span>ARENA GAMES</span>
            </div>
            <!-- Left -->

            <!-- Right -->
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="me-4 text-reset bi bi-google" viewBox="0 0 16 16">
                    <path
                        d="M15.545 6.558a9.42 9.42 0 0 1 .139 1.626c0 2.434-.87 4.492-2.384 5.885h.002C11.978 15.292 10.158 16 8 16A8 8 0 1 1 8 0a7.689 7.689 0 0 1 5.352 2.082l-2.284 2.284A4.347 4.347 0 0 0 8 3.166c-2.087 0-3.86 1.408-4.492 3.304a4.792 4.792 0 0 0 0 3.063h.003c.635 1.893 2.405 3.301 4.492 3.301 1.078 0 2.004-.276 2.722-.764h-.003a3.702 3.702 0 0 0 1.599-2.431H8v-3.08h7.545z" />
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="me-4 text-reset bi bi-facebook" viewBox="0 0 16 16">
                    <path
                        d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="me-4 text-reset bi bi-twitter" viewBox="0 0 16 16">
                    <path
                        d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="me-4 text-reset bi bi-instagram" viewBox="0 0 16 16">
                    <path
                        d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="me-4 text-reset bi bi-steam" viewBox="0 0 16 16">
                    <path
                        d="M.329 10.333A8.01 8.01 0 0 0 7.99 16C12.414 16 16 12.418 16 8s-3.586-8-8.009-8A8.006 8.006 0 0 0 0 7.468l.003.006 4.304 1.769A2.198 2.198 0 0 1 5.62 8.88l1.96-2.844-.001-.04a3.046 3.046 0 0 1 3.042-3.043 3.046 3.046 0 0 1 3.042 3.043 3.047 3.047 0 0 1-3.111 3.044l-2.804 2a2.223 2.223 0 0 1-3.075 2.11 2.217 2.217 0 0 1-1.312-1.568L.33 10.333Z" />
                    <path
                        d="M4.868 12.683a1.715 1.715 0 0 0 1.318-3.165 1.705 1.705 0 0 0-1.263-.02l1.023.424a1.261 1.261 0 1 1-.97 2.33l-.99-.41a1.7 1.7 0 0 0 .882.84Zm3.726-6.687a2.03 2.03 0 0 0 2.027 2.029 2.03 2.03 0 0 0 2.027-2.029 2.03 2.03 0 0 0-2.027-2.027 2.03 2.03 0 0 0-2.027 2.027Zm2.03-1.527a1.524 1.524 0 1 1-.002 3.048 1.524 1.524 0 0 1 .002-3.048Z" />
                </svg>
            </div>
            <!-- Right -->
        </section>
        <!-- Section: Social media -->

        <!-- Section: Links  -->
        <section class="">
            <div class="container text-center text-md-start mt-5">
                <!-- Grid row -->
                <div class="row mt-3">
                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                        <!-- Content -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            <i class="fas fa-gem me-3"></i>NOSOTROS
                        </h6>
                        <p>
                            ArenaGames es una página en donde podrás planear con tus amigos distintos torneos, unirte, conocer nuevos grupos y 
                            competir demostrando todo tu potencial.
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            Principal
                        </h6>
                        <p>
                            <a class="text-reset" aria-current="page" href="/juegos">JUEGOS</a>
                        </p>
                        <p>
                            <a class="text-reset" aria-current="page" href="/torneos">TORNEOS</a>
                        </p>


                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            ENLACES
                        </h6>
                        <p>
                            <a href="#!" class="text-reset">INSTAGRAM</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">TWITTER</a>
                        </p>


                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">CONTACTO</h6>
                        <p><i class="fas fa-home me-3"></i> Cuevas del Almanzora, Spain</p>
                        <p>
                            <i class="fas fa-envelope me-3"></i>
                            lati@gmail.com
                        </p>

                    </div>
                    <!-- Grid column -->
                </div>
                <!-- Grid row -->
            </div>
        </section>
        <!-- Section: Links  -->

        <!-- Copyright -->
        <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
            © 2023 Copyright:
            <a class="text-reset fw-bold" href="https://mdbootstrap.com/">arenaGames.com</a>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer -->
</footer>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</body>

</html>