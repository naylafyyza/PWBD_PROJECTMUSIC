<!DOCTYPE html>
<html>
    <head>
        <title>cry baby</title>
        <style>
          body {
            background-color: #A0DEFF;
            font-family: 'Poppons', sans-serif;
          }

          p{
            color: #645CAA;
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
            <h1>Dont Cryyy..</h1>
            <p> 
                Playlist ini dibuat untuk menemani sedihmu<br>
                Hope you enjoyed guysss...
            </p>
              <div class="kelas">
                <div class="player">
                  <div class="imgbox">
                    <img src="img/tampar.jpg" alt="AW"/>
                  </div>
                  <audio src="aud/tampar.mp3" type="audio/mp3" controls></audio>
                  <p class="desk">
                    <strong>Tampar</strong><br>
                    by Juicy Luicy
                  </p>
                </div>
                <div class="player">
                  <div class="imgbox">
                    <img src="img/sial.jpg" alt="AW"/>
                  </div>
                  <audio src="aud/sial.mp3" type="audio/mp3" controls></audio>
                  <p class="desk">
                    <strong>Sial</strong><br>
                    by Mahalini
                  </p>
                </div>
                <div class="player">
                  <div class="imgbox">
                    <img src="img/terlalu manis.jpg" alt="AW"/>
                  </div>
                  <audio src="aud/terlalu manis.mp3" type="audio/mp3" controls></audio>
                  <p class="desk">
                    <strong>Terlalu Manis</strong><br>
                    by Slank
                  </p>
                </div>
              </div>
              <a href="/">🏡</a>
        </div>
        <hr>
        <small>Pemrograman Web dan Basis Data | UTS &copy 2024</small>
    </body>
</html>