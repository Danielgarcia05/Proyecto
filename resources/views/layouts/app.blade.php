<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>CornMovie</title>
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
</style>
</head>
<body>
   <header id="pageHeader">
       <img src="https://cdn.pixabay.com/photo/2013/07/13/14/03/film-162029_960_720.png" alt="Logo"/>
      <h1>Disfruta de tus peliculas favoritas</h1>
   </header>
    <article>
        @yield('content')
        <div class="icon-bar">
            <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
            <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
            <a href="#" class="insta"><i class="fa fa-instagram" id="insta" aria-hidden="true"></i></a>
            <a href="#" class="google"><i class="fa fa-google"></i></a>
            <a href="#" class="youtube"><i class="fa fa-youtube"></i></a>
        </div>
    </article>
    <footer id="pageFooter">
       <img src="https://cdn.pixabay.com/photo/2013/07/13/14/03/film-162029_960_720.png" alt="Logo"/>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.19.0/axios.min.js"> </script>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
