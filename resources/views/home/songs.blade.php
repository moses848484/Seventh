<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Styled Music Player</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body style="background:#111;">

<div class="container-wrapper py-5">
  <div class="container12">
    <div class="row align-items-stretch g-4">
      
      <!-- Left Column (Image Carousel) -->
      <div class="col-lg-6">
        <div id="imageCarousel" class="carousel slide h-100" data-bs-ride="carousel">
          <div class="carousel-inner h-100">
            <div class="carousel-item active">
              <img src="images/choir.jpg" class="d-block w-100 img-fluid object-fit-cover" alt="Choir Performance">
            </div>
            <div class="carousel-item">
              <img src="images/choir2.jpg" class="d-block w-100 img-fluid object-fit-cover" alt="Choir Performance 2">
            </div>
          </div>
        </div>
      </div>

      <!-- Right Column (Flip Card Music Player) -->
      <div class="col-lg-6">
        <div class="flip-container h-100" id="flipContainer">
          <div class="flipper h-100 position-relative">
            
            <!-- FRONT -->
            <div class="front text-area6 h-100 overflow-auto">
              <h4 class="heading7 mb-4">Download and Listen to Songs Here</h4>

              <h5 id="trackTitle" class="text1">Now Playing:</h5>

              <audio id="audioPlayer" class="w-100 mt-2" controls>
                <source id="audioSource" src="music/Bill When I Cry.mp3" type="audio/mpeg">
                Your browser does not support the audio element.
              </audio>

              <!-- Styled Controls -->
              <div class="music-controls mt-4 text-center">
                <button onclick="prevTrack()" class="btn btn-outline-light btn-lg mx-2">
                  <i class="fa-solid fa-square-caret-left"></i>
                </button>
                <button onclick="playTrack()" class="btn btn-outline-light btn-lg mx-2" id="playPauseBtn">
                  <i class="fa-solid fa-circle-play" id="playPauseIcon"></i>
                </button>
                <button onclick="nextTrack()" class="btn btn-outline-light btn-lg mx-2">
                  <i class="fa-solid fa-square-caret-right"></i>
                </button>
              </div>

              <div class="text-center mt-4">
                <button class="btn7" id="viewSongsBtn"><i class="fa-solid fa-eye"></i> View Songs</button>
              </div>
            </div>

            <!-- BACK -->
            <div class="back text-area6 h-100 overflow-auto">
              <h4 class="text1 mt-2">🎵 Available Songs</h4>
              <div id="trackList" class="track-list"></div>

              <!-- Back-side Controls -->
              <h5 id="trackTitleBack" class="text1">Now Playing:</h5>
              <div class="music-controls mt-3 text-center">
                <button onclick="prevTrack()" class="btn btn-outline-light btn-lg mx-2">
                  <i class="fa-solid fa-square-caret-left"></i>
                </button>
                <button onclick="playTrack()" class="btn btn-outline-light btn-lg mx-2" id="playPauseBtnBack">
                  <i class="fa-solid fa-circle-play" id="playPauseIconBack"></i>
                </button>
                <button onclick="nextTrack()" class="btn btn-outline-light btn-lg mx-2">
                  <i class="fa-solid fa-square-caret-right"></i>
                </button>
              </div>

              <div class="text-center mt-4">
                <button class="btn7" id="backBtn"><i class="fa-solid fa-arrow-left"></i> Back</button>
              </div>
            </div>

          </div>
        </div>
      </div>

    </div>
  </div>
</div>

<!-- STYLES -->
<style>
  .text-area6 {
    background: rgba(255, 255, 255, 0.08);
    backdrop-filter: blur(15px);
    padding: 30px;
    border-radius: 15px;
    box-shadow: 0 8px 30px rgba(0,0,0,0.2);
    color: white;
  }

  .btn7 {
    background-color: #fff;
    color: #000;
    border: none;
    padding: 12px 30px;
    border-radius: 5px;
    font-size: 16px;
    margin: 10px;
    transition: background 0.3s ease;
  }
  .btn7:hover {
    background-color: #ddd;
  }

  .text1 {
    color: #fff;
    margin-top: 15px;
  }

  .track-list {
    margin-top: 20px;
  }
  .track-item {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 10px 14px;
    border-bottom: 1px solid rgba(255, 255, 255, 0.2);
    cursor: pointer;
    transition: background 0.2s ease;
    color: white;
  }
  .track-item:hover {
    background: rgba(255,255,255,0.1);
  }
  .track-item.active {
    font-weight: bold;
    background: rgba(255,255,255,0.15);
  }

  .flip-container {
    perspective: 1000px;
    width: 100%;
  }
  .flipper {
    transition: 0.7s;
    transform-style: preserve-3d;
    position: relative;
    width: 100%;
    height: 100%;
  }
  .flip-container.flip .flipper {
    transform: rotateY(180deg);
  }
  .front, .back {
    backface-visibility: hidden;
    position: absolute;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
  }
  .back {
    transform: rotateY(180deg);
  }
  .object-fit-cover {
    object-fit: cover;
    height: 100%;
  }
  .fa-circle-play, .fa-circle-pause {
    font-size: 45px;
    color: white;
  }
  .fa-square-caret-left, .fa-square-caret-right {
    font-size: 35px;
    color: white;
  }
</style>

<!-- SCRIPT -->
<script>
  const tracks = [
    { title: "I'm Not Gonna Worry", file: "music/Gaither Vocal Band - Im Not Gonna Worry [Live] ft. Gaither Vocal Band.mp3" },
    { title: "When I Cry", file: "music/Bill When I Cry.mp3" }
  ];

  let currentTrack = 0;
  const audio = document.getElementById('audioPlayer');
  const source = document.getElementById('audioSource');
  const trackTitle = document.getElementById('trackTitle');
  const trackTitleBack = document.getElementById('trackTitleBack');
  const playPauseIcon = document.getElementById('playPauseIcon');
  const playPauseIconBack = document.getElementById('playPauseIconBack');

  function loadTrack(index) {
    currentTrack = index;
    source.src = tracks[index].file;
    audio.load();
    trackTitle.textContent = "Now Playing: " + tracks[index].title;
    if (trackTitleBack) trackTitleBack.textContent = "Now Playing: " + tracks[index].title;
    displayAvailableTracks();
  }

  function playTrack() {
    if (audio.paused) {
      audio.play();
      updatePlayIcon(true);
    } else {
      audio.pause();
      updatePlayIcon(false);
    }
  }

  function nextTrack() {
    currentTrack = (currentTrack + 1) % tracks.length;
    loadTrack(currentTrack);
    audio.play();
    updatePlayIcon(true);
  }

  function prevTrack() {
    currentTrack = (currentTrack - 1 + tracks.length) % tracks.length;
    loadTrack(currentTrack);
    audio.play();
    updatePlayIcon(true);
  }

  function updatePlayIcon(isPlaying) {
    if (playPauseIcon) playPauseIcon.className = isPlaying ? 'fa-solid fa-circle-pause' : 'fa-solid fa-circle-play';
    if (playPauseIconBack) playPauseIconBack.className = isPlaying ? 'fa-solid fa-circle-pause' : 'fa-solid fa-circle-play';
  }

  function displayAvailableTracks() {
    const trackList = document.getElementById('trackList');
    trackList.innerHTML = '';
    tracks.forEach((track, index) => {
      const trackDiv = document.createElement('div');
      trackDiv.classList.add('track-item');
      if (index === currentTrack) trackDiv.classList.add('active');

      const titleSpan = document.createElement('span');
      titleSpan.textContent = track.title;

      const downloadLink = document.createElement('a');
      downloadLink.href = track.file;
      downloadLink.download = track.title + ".mp3";
      downloadLink.innerHTML = '<i class="fa-solid fa-download"></i>';
      downloadLink.style.color = "white";

      trackDiv.appendChild(titleSpan);
      trackDiv.appendChild(downloadLink);

      trackDiv.onclick = () => {
        if (index === currentTrack) {
          playTrack();
        } else {
          loadTrack(index);
          audio.play();
          updatePlayIcon(true);
        }
      };

      trackList.appendChild(trackDiv);
    });
  }

  document.getElementById("viewSongsBtn").addEventListener("click", () => {
    document.getElementById("flipContainer").classList.add("flip");
    displayAvailableTracks();
  });

  document.getElementById("backBtn").addEventListener("click", () => {
    document.getElementById("flipContainer").classList.remove("flip");
  });

  window.addEventListener('DOMContentLoaded', () => {
    loadTrack(currentTrack);
    updatePlayIcon(false);
  });

  audio.addEventListener('ended', nextTrack);
  audio.addEventListener('play', () => { updatePlayIcon(true); displayAvailableTracks(); });
  audio.addEventListener('pause', () => { updatePlayIcon(false); displayAvailableTracks(); });
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
