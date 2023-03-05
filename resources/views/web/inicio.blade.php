<!DOCTYPE html>
<html>
<head>
    <title>ARENAGAMES</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="Stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</head>
<style>
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

    /* end: header styles */

    /* start: hero styles */
    #hero-image {
        background: url('https://www.linkpicture.com/q/cropped-1920-1080-1282982.jpg') top center no-repeat;
        height: 820px;
    }

    .hero-marketing-text {
        max-width: 1200px;
        margin: -30px auto 0;
        position: absolute;
        top: 40%;
        left: 0;
        right: 0;
        padding: 0 20px;
    }

    .hero-marketing-text h1 {
        color: #eee;
        font-size: 3.5em;
        font-weight: 300;
        margin: 0.5em 0;
    }

    .hero-marketing-text span {
        color: #FFB320;
    }

    .hero-marketing-text h5 {
        color: #eee;
        font-size: 0.85em;
        font-weight: 300;
        max-width: 500px;
        line-height: 2;
        margin-bottom: 2.5em;
    }

    .hero-marketing-text button {
        background-color: #FFB320;
        color: #131313;
        border-radius: 25px;
        padding: 15px 25px;
        font-size: 0.85em;
        font-weight: 600;
        border: none;
        cursor: pointer;
    }

    /* end: hero styles */

    /* start: latest news styles */
    #latest-news {
        margin-bottom: 75px;
    }

    #latest-news .flex {
        justify-content: flex-start;
        max-width: 100%;
        padding: 0;
    }

    #latest-news .flex h5 {
        flex-basis: 25%;
        background-color: #FFB320;
        padding: 25px;
        margin: 0;
        text-align: right;
        color: #eee;
        font-size: 1.2em;
    }

    #latest-news-container {
        background-color: #131313;
        position: relative;
        flex-basis: 75%;
        padding: 25px;
    }

    #latest-news-container .badge {
        margin-right: 20px;
    }

    #latest-news-container .latest-news-text {
        color: #eee;
    }

    /* end: latest news styles */

    /* start: game types styles */
    #game-types-boxes {
        margin-bottom: 75px;
    }

    #game-types-boxes .box {
        flex-basis: 25%;
        position: relative;
        height: 380px;
    }

    #game-types-boxes .box.new {

        background-size: cover;
    }

    #game-types-boxes .box.new :hover {
        transform: 1.2;
        background-size: cover;
    }

    #game-types-boxes .box.strategy {
        background-size: cover;
    }

    #game-types-boxes .box.rpg {
        background-size: cover;
    }

    #game-types-boxes .box.racing {
        background-size: cover;
    }

    #game-types-boxes .box .badge {
        position: relative;
        z-index: 2;
        top: 20px;
        left: 20px;
    }

    #game-types-boxes .box .contents {
        position: absolute;
        z-index: 2;
        bottom: 20px;
        left: 0;
        color: #eee;
        padding: 0 35px 0 25px;
    }

    #game-types-boxes .box .contents a {
        font-size: 0.8em;
        font-weight: 300;
        color: #999;
    }

    /* end: game types styles */

    /* start: recent games styles */
    #recent-games {
        background: url('https://onclickwebdesign.com/wp-content/uploads/recent_games_bg.png') top center no-repeat;
        background-color: #eef2f6;
        border-top: 1px solid #d6dee7;
        border-bottom: 1px solid #d6dee7;
        padding: 70px 0 120px;
    }

    #recent-games h1 {
        text-align: center;
    }

    #recent-games .box {
        position: relative;
        flex-basis: 31%;
        background-color: #fff;
    }

    #recent-games .box .badge {
        position: absolute;
        top: 20px;
        left: 20px;
        z-index: 2;
    }

    #recent-games .box img {
        width: 100%;
    }

    #recent-games .box .box-lower-section {
        padding: 20px;
    }

    #recent-games .box .box-lower-section p {
        color: #999;
    }

    #recent-games .box .box-lower-section a {
        color: #999;
        font-size: 0.8em;
    }

    /* end: recent games styles */

    /* start: tournaments styles */
    #tournaments {
        background: url('https://onclickwebdesign.com/wp-content/uploads/footer_bg_pattern.png') 0 0 repeat;
        padding: 125px 0 105px;
    }

    #tournaments .flex {
        position: relative;
    }

    #tournaments .badge {
        position: absolute;
        top: 0;
        left: 0;
        z-index: 2;
    }

    #tournaments .badge.tournaments {
        top: -32px;
        left: 15px;
    }

    #tournaments .box {
        background-color: #252525;
        padding: 70px 20px 40px;
        flex-basis: 45%;
        position: relative;
    }

    #tournaments .box .tournaments-image {
        float: left;
        width: 30%;
    }

    #tournaments .box .tournaments-image img {
        width: 100%;
    }

    #tournaments .box .tournaments-content {
        float: left;
        margin-left: 25px;
        width: 60%;
    }

    #tournaments .box .tournaments-content h3 {
        color: #FFB320;
        margin-top: 0;
    }

    #tournaments .box .tournaments-content label {
        color: #999;
        font-size: 0.75em;
    }

    #tournaments .box .tournaments-content label.prizes {
        color: #FFB320;
        display: inline-block;
        margin-top: 12px;
    }

    #tournaments .box .tournaments-content strong {
        color: #eee;
        font-size: 0.75em;
    }

    /* end: tournaments styles */

    /* start: recent reviews styles */
    #recent-reviews {
        background: url('https://onclickwebdesign.com/wp-content/uploads/recent_reviews_bg.png') top right no-repeat;
        background-size: cover;
        padding: 75px 0 50px;
    }

    #recent-reviews h1 {
        text-align: center;
        margin-bottom: 1.65em;
    }

    #recent-reviews .box {
        flex-basis: 23%;
        position: relative;
        text-align: center;
    }

    #recent-reviews .box .rating-badge {
        border-radius: 28px;
        padding: 13px;
        font-size: 1.1em;
        color: #eee;
        font-weight: 600;
        background-color: #FFB320;
        position: absolute;
        top: -30px;
        left: 30px;
    }

    #recent-reviews .box .rating-badge.purple {
        background-color: #694EAE;
    }

    #recent-reviews .box .rating-badge.green {
        background-color: #4EAE60;
    }

    #recent-reviews .box .rating-badge.violet {
        background-color: #FF20AE;
    }

    #recent-reviews .box .recent-reviews-image {
        margin-bottom: 0.75em;
        overflow: hidden;
    }

    #recent-reviews .box .recent-reviews-image img {
        width: 100%;
    }

    #recent-reviews .box p {
        color: #999;
    }

    /* end: recent reviews styles */

    /* start: posts/comments styles */
    #posts-comments {
        background: url('https://www.linkpicture.com/q/7994086-1_1.png') no-repeat;
        padding: 75px 0;
    }

    #posts-comments .game-warrior {
        flex-basis: 32%;
        position: relative;
    }

    #posts-comments .game-warrior p {
        color: #eee;
        font-weight: 600;
    }

    #posts-comments .game-warrior img {
        margin-bottom: 0.5em;
    }

    #posts-comments .game-warrior img.footer-graphic {
        position: absolute;
        margin-bottom: 0;
        width: 115%;
    }

    #posts-comments .posts-comments-box {
        flex-basis: 28%;
        background-color:#06051A;
        border-radius: 15%;
        padding: 20px 20px 25px;
        border: 1px solid #9B5C72;
    }

    #posts-comments .posts-comments-box h3 {
        color: #eee;
    }

    .post-item {
        margin-top: 25px;
    }

    .post-item:first-child {
        margin-top: 0;
    }

    .post-item:after {
        content: "";
        display: table;
        clear: both;
    }

    .post-item img {
        float: left;
        width: 30%;
    }

    .post-item>div {
        float: left;
        margin-left: 5%;
        width: 65%;
    }

    .post-item>div h5 {
        color: #FFB320;
        font-size: 0.8em;
        margin-top: 0;
    }

    .post-item>div p {
        color: #eee;
        margin: 5px 0;
        font-size: 0.8em;
    }

    .post-item>div small {
        color: #999;
        font-size: 0.75em;
    }

    .comments-item {
        margin-top: 1em;
    }

    .comments-item:first-child {
        margin-top: 0;
    }

    .comments-item:after {
        content: "";
        display: table;
        clear: both;
    }

    .comments-item img {
        width: 23%;
        height: auto;
        border-radius: 50%;
        float: left;
    }

    .comments-item>div {
        float: left;
        margin-left: 7%;
        width: 70%;
    }

    .comments-item>div p {
        color: #eee;
        font-size: 0.8em;
        margin: 0 0 5px;
    }

    .comments-item>div p span {
        color: #999;
    }

    .comments-item>div p span.author {
        color: #E92159;
    }

    .comments-item>div h5 {
        color: #FFB320;
        font-size: 0.8em;
        margin-top: 0;
    }

    /* end: posts/comments styles */

    /* start: footer styles */
    footer {
        background-color: #131428;
        padding: 25px 0 20px;
    }

    footer small {
        color: #ddd;
        font-size: 0.9em;
    }

    footer small .footer-heart {
        font-size: 16px;
    }

    footer small a {
        color: #007BDC;
    }

    footer ul {
        list-style-type: none;
        margin: 0;
    }

    footer ul li {
        display: inline-block;
        margin: 0 12px;
    }

    footer ul li a {
        color: #ddd;
        font-size: 0.8em;
    }

    /* end: footer styles */

    /* start: media queries */
    @media (max-width: 1200px) {
        .flex {
            max-width: 1000px;
        }

        .latest-news-item {
            font-size: 0.8em;
        }

        #tournaments .box .tournaments-content {
            margin-left: 15px;
        }

        #tournaments .box .tournaments-content h3 {
            font-size: 1.4em;
            margin-bottom: 0.2em;
        }
    }

    @media (max-width: 991px) {
        .flex {
            max-width: 720px;
        }

        nav ul li {
            margin: 0 12px;
            font-size: 0.85em;
        }

        #latest-news .flex h5 {
            width: 15%;
        }

        #game-types-boxes .flex {
            flex-wrap: wrap;
        }

        #game-types-boxes .box {
            flex-basis: 50%;
        }

        #tournaments .box {
            flex-basis: 42%;
        }

        #tournaments .box .tournaments-image {
            float: none;
            width: 100%;
            margin-bottom: 10px;
            height: 250px;
            overflow: hidden;
        }

        #tournaments .box .tournaments-content {
            margin-left: 0;
            width: 100%;
        }

        #recent-reviews {
            background: none;
        }

        #recent-reviews .flex {
            flex-wrap: wrap;
        }

        #recent-reviews .box {
            flex-basis: 48%;
            margin-bottom: 45px;
        }

        #posts-comments .flex {
            flex-wrap: wrap;
        }

        #posts-comments .game-warrior {
            flex-basis: 100%;
            margin-bottom: 40px;
        }

        #posts-comments .posts-comments-box {
            flex-basis: 43%;
        }

        #posts-comments .game-warrior img.footer-graphic {
            display: none;
        }

        footer .flex {
            flex-wrap: wrap-reverse;
        }

        footer small {
            flex-basis: 100%;
            font-size: 0.75em;
            text-align: center;
            margin-top: 20px;
            line-height: 1.5;
        }

        footer ul {
            flex-basis: 100%;
            text-align: center;
            padding: 0;
        }
    }

    /* end 991px */

    @media (max-width: 767px) {
        h4 {
            font-size: 1.2em;
        }

        .flex {
            max-width: 540px;
        }

        nav ul {
            display: none;
            position: absolute;
            top: 101%;
            width: 100%;
            background-color: #131313;
            left: 0;
            padding: 0;
            margin: 0;
            z-index: 1;
        }

        nav ul li {
            display: block;
            padding: 15px 0 15px 20px;
            border-bottom: 1px solid #FFB320;
            margin: 0;
        }

        nav ul li a {
            font-size: 1em;
        }

        .hamburger-menu {
            display: block;
            margin-top: 2px;
        }

        #hero-image {
            height: 650px;
            background-size: cover;
        }

        .hero-marketing-text {
            margin-top: -85px;
        }

        .hero-marketing-text h1 {
            font-size: 2.5em;
        }

        #latest-news .flex h5 {
            display: none;
        }

        #latest-news-container {
            flex-basis: 100%;
        }

        #recent-games {
            padding: 60px 0;
        }

        #game-types-boxes .box,
        #recent-games .box {
            flex-basis: 100%;
            margin-bottom: 30px;
        }

        #recent-games .flex,
        #tournaments .flex {
            flex-wrap: wrap;
        }

        #tournaments .box {
            flex-basis: 100%;
            margin-bottom: 20px;
        }

        #tournaments .box .tournaments-image {
            height: 400px;
        }

        #recent-reviews .box {
            flex-basis: 100%;
        }

        #recent-reviews .box .recent-reviews-image {
            height: 400px;
        }

        #posts-comments .posts-comments-box {
            flex-basis: 100%;
            margin-bottom: 40px;
        }

        footer ul li {
            margin: 0 10px;
        }

        footer ul li a {
            font-size: 0.75em;
        }
    }

    /* end 767px */

    @media (max-width: 400px) {
        .logo img {
            width: 150px;
            margin-top: 2px;
        }

        #login-register-button {
            padding: 10px;
            font-size: 0.65em;
        }

        #tournaments .box .tournaments-image {
            height: 220px;
        }
    }
    .zoom {
  transition: transform .2s; /* Animation */
 
  margin: 0 auto;
}

.zoom:hover {
  transform: scale(1.3); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
}

    /* end: media queries */
</style>

<body>
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
                    <li><a href="#">HOME</a></li>
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

    <main>
        <section id="hero-image">
            <div class="hero-marketing-text">
                <h1>Los Mejores <span>Torneos</span> de España</h1>
                <h5>Regístrate en nuestra página y encuentra el torneo perfecto para ti. Puedes participar en torneos de eliminación directa, torneos de grupos o torneos de doble eliminación, y si tienes éxito, podrás ganar increíbles premios y subir en la clasificación de los jugadores. </h5>
                <button class="zoom"><a href="/torneos" class="text-light">TORNEOS</a></button>
            </div>
        </section>

        <section id="latest-news">
            <div class="flex">
                <h5>Novedades</h5>
                <div id="latest-news-container">
                    <div class="latest-news-item">
                        <a class="badge new zoom" href="/juegos">JUEGOS</a>
                        <span class="latest-news-text">Explora nuestra gran selección de juegos</span>
                    </div>
                </div>
            </div>
        </section>

        <section id="game-types-boxes">
            <div class="flex">
                @foreach ($juegos as $juego)
                    <div class="box new "
                        style="background: url('{{ $juego->imagen }}') center no-repeat;hover:transform(1.2)">
                        <div class="shade"></div>
                        <a href="/juegos/{{ $juego->id }}" class="badge new zoom">VER</a>
                        <div class="contents" style="">
                            <h4>{{ $juego->nombre }}</h4>
                            <p style="width: 250px;
                            white-space: nowrap;
                            overflow: hidden;
                            text-overflow: ellipsis;">{{ $juego->descripcion }}</p>
                            
                        </div>
                    </div>
                @endforeach

            </div>
        </section>


        <section id="posts-comments" style="height: 700px ">
            <div class="flex">
                <div class="game-warrior">
                    <p style="color: white;font-size: 1.6em">ARENA  <span style="color: #FFB320">GAMES</span></p>
                    <p>Navega en nuestra gran selección de torneos y no dejes de competir, demuestra que eres el mejor</p>
                    <img class="footer-graphic "
                        src="https://images.contentstack.io/v3/assets/bltb6530b271fddd0b1/blt6f1392b30784e029/618d9da0d380f814d61f001c/WebUpdate_Chamber_KeyArt.png" />
                </div>

                <div class="posts-comments-box" >
                    <h3>TOP COMENTARIOS</h3>
                    <div class="post-item">
                        <img src="https://i.pinimg.com/originals/f7/73/1f/f7731f1e15dfa4e67357f73dd94e5a3c.jpg" style="border-radius: 45% 55% 48% 52% / 45% 34% 66% 55% " />
                        <div>
                            <h5>March 8, 2021</h5>
                            <p>Odio a la dueña.</p>
                            <small>By: Carlos</small>
                        </div>
                    </div>

                    <div class="post-item">
                        <img src="https://pbs.twimg.com/media/FZbDm6ZXkAAd6Jm.jpg" style="border-radius: 30% 70% 49% 51% / 65% 52% 48% 35%  "/>
                        <div>
                            <h5>June 21, 2023</h5>
                            <p>Esta vida sólo me hace ir para los lados, nunca avanzo.</p>
                            <small>By: Guille</small>
                        </div>
                    </div>

                    <div class="post-item">
                        <img src="https://ih1.redbubble.net/image.927011316.3128/flat,750x1000,075,f.jpg" style="border-radius: 45% 55% 48% 52% / 45% 34% 66% 55% " />
                        <div>
                            <h5>June 28, 2023</h5>
                            <p>Emilio lo aprueba y Guille dice que falta footer.</p>
                            <small>By: Emilio y Guille</small>
                        </div>
                    </div>
                </div>

                <div class="posts-comments-box">
                    <h3>TOP GRUPOS</h3>
                    <div class="comments-item">
                        <img src="https://pbs.twimg.com/media/FLfZjKrWUAEy3PO.jpg:large" style="border-radius: 41% 59% 47% 53% / 49% 35% 65% 51% " />
                        <div>
                            <p><span class="author">OpTic</span> <span>on</span> Esports Valorant</p>
                            <h5>May 9, 2019</h5>
                        </div>
                    </div>
                    <div class="comments-item">
                        <img src="https://www.elplural.com/uploads/s1/14/36/51/3/fc9xpcwwqaadmwh.jpeg"  style="border-radius: 42% 58% 40% 60% / 60% 29% 71% 40%  "/>
                        <div>
                            <p><span class="author">LOUD</span> <span>on</span> Esports Valorant</p>
                            <h5>June 21, 2019</h5>
                        </div>
                    </div>

                    
                    <div class="comments-item">
                        <img src="https://valo2asia.com/wp-content/uploads/2022/09/52354622127_f2473fefd9_k-1170x780.jpg" />
                        <div>
                            <p><span class="author">DRX</span> <span>on</span> Esports League of Legends</p>
                            <h5>June 25, 2022</h5>
                        </div>
                    </div>
                    <div class="comments-item">
                        <img style="border-radius:71% 29% 40% 60% / 60% 30% 70% 40%  " src="https://gumlet.assettype.com/afkgaming%2F2022-06%2Ffac73304-2a4d-403f-b33a-87115c383db8%2FFVjruyKXoAI8t2G.jpg?compress=true&dpr=1&w=1200" />
                        <div>
                            <p><span class="author">Fnatic</span> <span>on</span> Esports League of Legends</p>
                            <h5>March 16, 2023</h5>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </main>

    <footer>
        <div class="flex mx-5">
          
        </div>
    </footer>

    

    <script>
        document.getElementById('nav-toggle').addEventListener('click', function() {
            let navMenu = document.getElementById('nav-menu-container');
            navMenu.style.display = navMenu.offsetParent === null ? 'block' : 'none';
        });
    </script>
</body>

</html>
