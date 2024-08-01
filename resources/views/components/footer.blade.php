<footer class="sticky-top">
    <div class="music-player">
        <div class="song-bar">
            <div class="song-infos">
                <div class="image-container">
                    <img src="img/Jurus Rahasia.jpg" alt="" />
                </div>
                <div class="song-description">
                    <p class="title">
                        Hissatsu Teleport (Jurus Rahasia Teleport)
                    </p>
                    <p class="artist">JKT48</p>
                </div>
            </div>
            <div class="icons">
                <i class="far fa-heart"></i>
                <i class="fas fa-compress"></i>
            </div>
        </div>
        <div class="progress-controller">
            <div class="control-buttons">
                <div class="control-buttons"><i class="fas fa-random"></i></div>
                <div class="control-buttons"><i class="fas fa-step-backward"></i></div>
                <div class="control-buttons" onclick="playPause()"><i class="play-pause fas fa-play" id="ctrlIcon"></i></div>
                <div class="control-buttons"><i class="fas fa-step-forward"></i></div>
                <div class="control-buttons"><i class="fas fa-undo-alt"></i></div>
            </div>

            <audio  id="song">
                <source src="aud/Jurus Rahasia Teleport.mp3" type="audio/mpeg">
            </audio>

            <div class="progress-container">
                <input type="range" value="0" id="progress">
            </div>
        </div>
        <div class="other-features">
            <i class="fas fa-list-ul"></i>
            <i class="fas fa-desktop"></i>
            <div class="volume-bar">
                <i class="fas fa-volume-down"></i>
                    <input type="range" id="progress">
                </div>
            </div>
        </div>
    </div>

    <script>
        let progress = document.getElementById("progress");
        let song = document.getElementById("song");
        let ctrlIcon = document.getElementById("ctrlIcon");
        let volumeSlider = document.getElementById("volume-slider");
        let volumeIcon = document.getElementById("volumeIcon");
        let muted = false;

        song.onloadedmetadata = function(){
            progress.max = song.duration;
            progress.value = song.currentTime;
        }

        function playPause(){
            if(ctrlIcon.classList.contains("fa-pause")){
                song.pause();
                ctrlIcon.classList.remove("fa-pause");
                ctrlIcon.classList.add("fa-play");
            } else {
                song.play();
                ctrlIcon.classList.add("fa-pause");
                ctrlIcon.classList.remove("fa-play");
            }
        }

        song.addEventListener('timeupdate', () => {
            progress.value = song.currentTime;
        });


        progress.onchange = function () {
            song.play()
            song.currentTime = progress.value;
            ctrlIcon.classList.add("fa-pause");
            ctrlIcon.classList.remove("fa-play");
        };

        volumeSlider.addEventListener('input', () => {
            song.volume = volumeSlider.value;
        });

        volumeIcon.addEventListener('click', () => {
            if(!muted){
                volumeIcon.classList.remove('fa-volume-down');
                volumeIcon.classList.add('fa-volume-mute');
                song.volume = 0;
                volumeSlider.value = 0;
                muted = true;
            } else {
                volumeIcon.classList.add('fa-volume-down');
                volumeIcon.classList.remove('fa-volume-mute');
                song.volume = 1;
                volumeSlider.value = 1;
                muted = false;
            }
        });
    </script>
</footer>