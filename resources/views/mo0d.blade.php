<?php
// Contoh array data untuk musik
$musicTracks = [
    [
        'image' => 'img/Jurus Rahasia.jpg',
        'audio' => 'aud/Jurus Rahasia Teleport.mp3',
        'title' => 'Jurus Rahasia Teleport',
        'artist' => 'JKT48'
    ],
    [
        'image' => 'img/the shade.jpg',
        'audio' => 'aud/the shade.mp3',
        'title' => 'The Shade',
        'artist' => 'Rex Orange County'
    ],
    [
        'image' => 'img/tante linda.jpg',
        'audio' => 'aud/tante linda.mp3',
        'title' => 'Tante Linda',
        'artist' => 'CJR'
    ]
];
?>
<!DOCTYPE html>
<html>
    <head>
        <title>mo0d</title>
        <style>
          body {
            background-color: #D0F5BE;
            font-family: 'Poppons', sans-serif;
          }

          p {
            color: #A4907C;
          }

          a {
            font-size: 50px;
          }

          .kelas {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: row;
            flex-basis: 25%;
            margin-top: 70px;
            margin-bottom: 70px;
          }

          .player {
            position: relative;
            width: 300px;
            background: #f1f3f4;
            border-radius: 20px;
            margin: 10px;
          }

          .player .imgbox {
            position: relative;
            width: 100%;
            height: 225px;
          }

          .player .imgbox img {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-top-left-radius: 20px;
            border-top-right-radius: 20px;
          }

          .player audio {
            width: 100%;
            outline: none;
          }
        </style>
    </head>
    <body>
        <div align="center">
            <h1>hooLaaaa 👋🏻👋🏻</h1>
            <p> 
                Playlist ini dibuat untuk mengembalikan mood-mu<br>
                Hope you enjoyed guysss...
            </p>
            <div class="kelas">
                <?php foreach ($musicTracks as $track): ?>
                <div class="player">
                    <div class="imgbox">
                        <img src="<?php echo $track['image']; ?>" alt="AW"/>
                    </div>
                    <audio controls>
                        <source src="<?php echo $track['audio']; ?>" type="audio/mp3" >
                    </audio>
                    <p class="desk">
                        <strong><?php echo $track['title']; ?></strong><br>
                        by <?php echo $track['artist']; ?>
                    </p>
                </div>
                <?php endforeach; ?>
            </div>
            <a href="/">🏡</a>
        </div>
        <hr>
        <small>Pemrograman Web dan Basis Data | UTS &copy; <?php echo date('Y'); ?></small>
    </body>
</html>
