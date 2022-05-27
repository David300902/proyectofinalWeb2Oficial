@extends("welcome")

@section('title', 'Index')

@section('content')

<style>
    .img-div {
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .inicia {
        display: flex;
        flex-direction: row;
        font-size: 24pt;
        color: black;
        background-color: white;
        justify-content: space-evenly;
        height: 300px;
        width: 98%;
        margin: 10px 0 10px 1%;
        border-radius: 20px;
        background-color: rgba(221, 192, 255, 0.37);
    }
    .inicia button {
        height: 100px;
        margin-top: 105px;
    }
    .inicia h1 {
        margin-top: 120px;
    }
    h1 {
        font-size: 1.5em;
    }
    .btn-c {
        width: 24%;
        font-size: 1.5em;
    }
    #banner {
        background: url(https://img.freepik.com/foto-gratis/fondo-bloques-voronoi-extruido-azul-abstracto-muro-corporativo-limpio-luz-minima-ilustracion-superficie-geometrica-3d-desplazamiento-elementos-poligonales_1217-2510.jpg);
        height: 250px;
        color: white;
        font-size: 100px;
        text-align: center;
        padding: 35px;
        border-radius: 0 0 20px 20px;
    }
    .cuerpo-cajas {
        display: flex;
        flex-direction: column;
        font-size: 24pt;
        color: black;
        background-color: rgba(255, 255, 255, 0.274);
        justify-content: space-evenly;
        width: 98%;
        margin: 0 0 0 1%;
    }
    #caja-inicio {
        border-radius: 20px 20px 0 0;
        display: flex;
        flex-direction: row;
        height: 500px;
    }
    #caja-inicio img{
        width: 30%;
        height: 300px;
        margin-top: 100px;
    }
    #caja-media {
        flex-direction: column;
        font-size: 28px;
        font-weight: bold;
        align-items: center;
        color: black;
        height: 600px;
    }
    #caja-media .carta-i{
        width: 70%;
        text-align: center;
        
    }
    .carta-cartas{
        display: flex;
        flex-direction: row;
        font-weight: lighter;
        text-align: center;
    }
    .carta {
        margin: 25px;
        padding: 20px;
        border-radius: 20px;
        background-color: rgba(255, 255, 255, 0.137);
        box-shadow: 10px 10px rgba(0, 0, 0, 0.781);
    }
    #caja-fin {
        border-radius: 0 0 20px 20px;
        align-items: center;
        height: 400px;
    }
    #caja-fin p {
        width: 85%;
        border: 2px solid black;
        border-radius: 20px;
        padding: 20px;
    }
</style>

<div id="banner">
    E-Blog
</div>

<div class="inicia">
    <h1>Bienvenido al Blog</h1>
    <button class="btn btn-danger btn-c" id="btnEmpezar">Empezar</button>
</div>

<div class="cuerpo-cajas" id="caja-inicio">
    <img src="https://blogely.com/wp-content/uploads/brizy/imgs/Business-grow-221x196x0x13x221x170x1625646776.png" alt="">
    <img src="https://blogely.com/wp-content/uploads/2020/06/4-2marketing-expert.svg" alt="">
    <img src="https://blogely.com/wp-content/uploads/2020/06/12-collaboration-2.svg" alt="">
</div>

<div class="cuerpo-cajas" id="caja-media">
    <div class="carta-i">
        <p>Easiest way to repurpose your entire blog
            SYNC YOUR ENTIRE BLOG SITE LIST AND BEGIN IMPROVING YOUR CONTENT IN MINUTES.</p>
    </div>
    <div class="carta-cartas">
        <div class="carta">
            Sync your blog site
            Sync your entire blog list in seconds with just one click. The system creates two-way sync with your current
            content.
        </div>
        <div class="carta">
            Optimize & improve
            Import specific articles (one at a time) that you want to improve and SEO optimize (or re-optimize). Easily
            track the progress.
        </div>
        <div class="carta">
            Re-publish
            Ready to post it back? One-click of the Publish button and your improved article content is back on your
            WordPress blog.
        </div>
    </div>
</div>

<div class="cuerpo-cajas" id="caja-fin">
    <p>Explora las distintas opciones de plantillas de sitios web para encontrar la que mejor represente tu marca.
        Todas las plantillas se pueden personalizar para adaptarlas a tu estilo personal de contar una historia.</p>
</div>

<script>
    document.querySelector("#btnEmpezar").addEventListener("click", () => {
        window.location.href = "/login";
    })
</script>

@stop