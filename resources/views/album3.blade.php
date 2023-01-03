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
        <?php
        foreach ($album as $image){
            echo '<div style="padding: 20px; border: red; height: 200px; width: 200px; display: inline-block">
                    <img src="' .$image->imageURL.'" alt="'.$image->promptUsed.'" height="100%" width="100%">
                  </div>';
        }
        ?>
    </div>
</div>
</body>
</html>
