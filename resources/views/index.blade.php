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
    <?php
    if (Auth::user()) {   // Check is user logged in
        echo '<a href="/fotoUpload">Foto toevoegen</a>
              <a href="/logout">Uitloggen</a>';
    } else {
        echo '<a href="/login">Inloggen</a>
              <a href="/register">Registreren</a>';
    }
    ?>
</div>
</body>
</html>
