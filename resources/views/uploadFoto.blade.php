<?php
?>
<h1>Foto uploaden</h1>
<form enctype="multipart/form-data" method="post" action="{{route('fotoSubmit')}}">
    @csrf
    <label>Foto naam</label>
    <input type="text" name="photoName"><br><br>
    <label>Gebruikte prompt</label>
    <input type="text" name="promptUsed"><br><br>
    <label>Bestand</label>
    <input type="file" name="image"><br><br>
    <label>Album</label>
   <select name="uploadTo">
       @foreach($album as $albumOption)
            <option value="{{$albumOption->albumID}}">{{$albumOption->themeName}}</option>
       @endforeach
   </select>
    <br><br>
   <a href="{{route('index')}}"><button type="button">Terug</button></a>
    <input type="submit" name="submit">
</form>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@if(session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
@endif
