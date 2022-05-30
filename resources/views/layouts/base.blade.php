<!DOCTYPE html>
<html lang="es">
    <head>
    	 <meta charset="UTF-8">
    	 <title> {{ config('app.name') }} </title>
         <meta name="viewport" content="width=device-width, initial-scale=1">
         <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"  rel="stylesheet">
         <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
         @stack('styles')
    <head>
    <body>
    	<header>
        </header>

    	<main role="main" class="main-height">
    	  
          @yield('content')
    	</main>

    	<footer>
    	</footer>


        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    	<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
        @stack('scripts')
    </body>
</html>