<?php

?>
<html>
<head></head>
<body>
<div>
    <a href="{{ route('index') }}">Home</a>
    <a href="{{ route('Album1') }}">Album 1</a>
    <a href="{{ route('Album2') }}">Album 2</a>
</div>
<div>
    <h1>Album 3</h1>
    <div style="border: 2px solid black; height: 70vh;width: 80vw;  margin: auto;">
        @foreach($album as $image)
            <div style="padding: 20px; height: 300px; width: 200px; display: inline-block">
                <img src="{{$image->imageURL}}" alt="{{$image->promptUsed}}" height="200px" width="200px"><br>
                <span><b>Auteur:</b>{{$image->authorName}}1</span>
                <span><b>Fotonaam:</b>{{$image->imageName}}</span><br>
                <span><b>Prompt:</b>{{$image->promptUsed}}</span><br>
                <span><b>Website:</b>{{$image->websiteUsed}}</span><br>
                <span><b>Hoogte:</b>{{$image->fotoHeight}}</span>
                <span><b>Breedte:</b>{{$image->fotoWidth}}</span><br>
            </div>
        @endforeach
    </div>
</div>
</body>
</html>
