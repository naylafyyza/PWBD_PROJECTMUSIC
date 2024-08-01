<!DOCTYPE html>
<html>
    <head>
        <title>konser</title>
        <style>
          body {
            background-color: #0F2C59;
            font-family: 'Poppons', sans-serif;
          }

          p{
            color: #DAC0A3;
          }

          h1{
            color: #fff;
          }

          a{
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

          .player{
            position: relative;
            width: 300px;
            background: #f1f3f4;
            border-radius: 20px;
            margin: 10px;
          }

          .player .imgbox{
            position: relative;
            width: 100%;
            height: 225px;
          }

          .player .imgbox img{
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-top-left-radius: 20px;
            border-top-right-radius: 20px;
          }

          .player audio{
            width: 100%;
            outline: none;
          }
        </style>
    </head>
    <body>
        <div align="center">
            <h1>Make Some Noisee!!</h1>
            <p> 
                Dengrin sama temen - temen seruu siihh<br>
                Hope you enjoyed guysss...
            </p>
              <div class="kelas">
                <div class="player">
                  <div class="imgbox">
                    <img src="img/vierra.jpg" alt="AW"/>
                  </div>
                  <audio controls>
                  <source src="aud/vierra.mp3" type="audio/mp3" >
                  </audio>
                  <p class="desk">
                    <strong>Jadi Yang Kuinginkan</strong><br>
                    by Vierra
                  </p>
                </div>
                <div class="player">
                  <div class="imgbox">
                    <img src="img/pilihanku.jpg" alt="AW"/>
                  </div>
                  <audio src="aud/pilihanku.mp3" type="audio/mp3" controls></audio>
                  <p class="desk">
                    <strong>Pilihanku</strong><br>
                    by MALIQ & D'Essentials
                  </p>
                </div>
                <div class="player">
                  <div class="imgbox">
                    <img src="img/bunga hati.jpg" alt="AW"/>
                  </div>
                  <audio src="aud/bunga hati.mp3" type="audio/mp3" controls></audio>
                  <p class="desk">
                    <strong>Bunga Hati</strong><br>
                    by Salma Salsabil
                  </p>
                </div>
              </div>
              <a href="/">🏡</a>
        </div>
        <hr>
        <small>Pemrograman Web dan Basis Data | UTS &copy 2024</small>
    </body>
</html>