<!DOCTYPE html>
<html>
<body>
<h1>Inloggen</h1>
<form action="{{route('loginSubmit')}}" method="post">
    @csrf
    <label>Gebruikersnaam</label>
    <input type="text" name="username"><br><br>
    <label>Wachtwoord</label>
    <input type="password" name="password"><br><br>
    <br><br>
    @if($errors->any())
        {!! implode('', $errors->all('<div>:message</div>')) !!}
    @endif
    <input type="submit" name="submit">
</form>

</body>
</html>
