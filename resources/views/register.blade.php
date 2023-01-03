<!DOCTYPE html>
<html>
<body>
<h1>Registreren</h1>
<form action="{{route('registerUser')}}" method="post">
    @csrf
    <label>Auteur naam</label>
    <input type="text" name="authorname"><br><br>
    <label>Gebruikersnaam</label>
    <input type="text" name="username"><br><br>
    <label>Wachtwoord</label>
    <input type="password" name="password"><br><br>
    <br><br>
    <input type="submit" name="submit">
</form>
</body>
</html>
