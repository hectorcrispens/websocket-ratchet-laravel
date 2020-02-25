<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->

</head>
<body>
<form method="POST" action="/sendAll">
    @csrf

   <label>nombre</label>
   <input type="text" name="nombre">
   <label>texto</label>
   <input type="text" name="texto">
   <input type="submit" value="send">
</form>
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
