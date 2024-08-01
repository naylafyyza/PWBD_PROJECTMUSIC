<!DOCTYPE html>
<html>
    <head>
        <title>swag</title>
        <style>
          body {
            background-color: #902424;
            font-family: 'Poppons', sans-serif;
          }

          p{
            color: #ECB390;
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
            <h1>COME ON BRUH!!</h1>
            <p> 
                Playlist apa ya iniii?? 😎<br>
                Hope you enjoyed guysss...
            </p>
              <div class="kelas">
                <div class="player">
                  <div class="imgbox">
                    <img src="img/hanya memuji.jpg" alt="AW"/>
                  </div>
                  <audio src="aud/hanya memuji.mp3" type="audio/mp3" controls></audio>
                  <p class="desk">
                    <strong>Hanya Memuji</strong><br>
                    by Shanty
                  </p>
                </div>
                <div class="player">
                  <div class="imgbox">
                    <img src="img/505.jpg" alt="AW"/>
                  </div>
                  <audio src="aud/505.mp3" type="audio/mp3" controls></audio>
                  <p class="desk">
                    <strong>505</strong><br>
                    by Arctic Monkeys
                  </p>
                </div>
                <div class="player">
                  <div class="imgbox">
                    <img src="img/backyardboy.jpg" alt="AW"/>
                  </div>
                  <audio src="aud/backyard boy.mp3" type="audio/mp3" controls></audio>
                  <p class="desk">
                    <strong>Backyard Boy</strong><br>
                    by Claire Rosinkranz, Jeremy Zucker
                  </p>
                </div>
              </div>
              <a href="/">🏡</a>
        </div>
        <hr>
        <small>Pemrograman Web dan Basis Data | UTS &copy 2024</small>
    </body>
</html>