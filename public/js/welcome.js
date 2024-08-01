let progress = document.getElementById("progress");
let song = document.getElementById("song");
let ctrlIcon = document.getElementById("ctrlIcon");
        
song.onloadedmetadata = function(){
    progress.max = song.duration;
    progress.value = song.currentTime;
}
        
function playPause(){
    if(ctrlIcon.classList.contains("fa-pause")){
        song.pause();
        ctrlIcon.classList.remove("fa-pause");
        ctrlIcon.classList.add("fa-play");
    }
    else{
        song.play();
        ctrlIcon.classList.add("fa-pause");
        ctrlIcon.classList.remove("fa-play");
    }
}

if(song.play()){
    setInterval(()=>{
        progress.value = song.currentTime;
    },500);
}

progress.onchange = function(){
    song.play();
    song.currentTime = progress.value;
    ctrlIcon.classList.add("fa-pause");
    ctrlIcon.classList.remove("fa-play");
}

let volume = document.getElementById('volume-slider');
volume.addEventListener("change", function(e) {
    song.volume = e.currentTarget.value / 100;
})

const stickyTop = document.querySelector('.sticky-top');
const offcanvas = document.querySelector('.offcanvas');

offcanvas.addEventListener('show.bs.offcanvas', function() {
    stickyTop.style.overflow = 'visible';
});

offcanvas.addEventListener('hidden.bs.offcanvas', function() {
    stickyTop.style.overflow = 'hidden';
});
