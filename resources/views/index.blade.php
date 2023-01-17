<?php

use Illuminate\Support\Facades\Auth;

?>
<html>
<head></head>
<body>
<h1>Welkom op de home pagina</h1>
<div>
    <a href="{{ route('Album1') }}">Album 1</a>
    <a href="{{ route('Album2') }}">Album 2</a>
    <a href="{{ route('Album3') }}">Album 3</a>

    @if(Auth::user())
        <a href="{{ route('fotoUpload') }}">Foto toevoegen</a>
        <a href="{{ route('logout') }}">Uitloggen</a>
    @else
        <a href="{{ route('login') }}">Inloggen</a>
        <a href="{{ route('register') }}">Registreren</a>
    @endif

</div>
</body>
</html>
