<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Music Player</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>

<div class="music-player-wrapper">
  <div class="container-fluid">
    <!-- 🔹 Use align-items-stretch so both columns align in height -->
    <div class="row g-4 align-items-stretch justify-content-center">
      
      <!-- Left Column (Image Carousel) -->
      <div class="col-lg-5 col-md-6">
        <div class="image-section h-100">
          <div id="imageCarousel" class="carousel slide image-carousel-container h-100">
            <div class="carousel-inner h-100">
              <div class="carousel-item active h-100">
                <img src="images/choir.jpg" class="carousel-image h-100 w-100" alt="Choir Performance">
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Right Column (Music Player) -->
      <div class="col-lg-5 col-md-6">
        <div class="flip-container h-100" id="flipContainer">
          <div class="flipper h-100">
            
            <!-- FRONT - Main Player -->
            <div class="front player-section h-100">
              <div class="player-content">

                <div class="header-section text-center mb-3">
                  <h2 class="main-title">Download and Listen to Songs Here</h2>
                </div>
                
                <div class="now-playing-section text-center mb-3">
                  <h4 id="trackTitle" class="track-title">Now Playing: I'm Not Gonna Worry</h4>
                </div>
                
                <div class="audio-container mb-3">
                  <div class="audio-player-wrapper">
                    <audio id="audioPlayer" controls class="custom-audio">
                      <source id="audioSource" src="music/Bill When I Cry.mp3" type="audio/mpeg">
                      Your browser does not support the audio element.
                    </audio>
                    
                    <div class="integrated-controls">
                      <button onclick="prevTrack()" class="control-btn" title="Previous">
                        <i class="fa-solid fa-backward-step"></i>
                      </button>
                      <button onclick="playTrack()" class="control-btn play-btn" id="playPauseBtn" title="Play/Pause">
                        <i class="fa-solid fa-play" id="playPauseIcon"></i>
                      </button>
                      <button onclick="nextTrack()" class="control-btn" title="Next">
                        <i class="fa-solid fa-forward-step"></i>
                      </button>
                    </div>
                  </div>
                  
                  <button class="view-songs-btn" id="viewSongsBtn">
                    <i class="fa-solid fa-list"></i> View Songs
                  </button>
                </div>
                
              </div>
            </div>

            <!-- BACK - Song List -->
            <div class="back player-section h-100">
              <div class="player-content">
                
                <div class="header-section text-center mb-3">
                  <h2 class="main-title">🎵 Available Songs</h2>
                </div>
                
                <div class="track-list-container">
                  <div id="trackList" class="track-list"></div>
                </div>
                
                <div class="now-playing-section text-center mb-2">
                  <h5 id="trackTitleBack" class="track-title-small">Now Playing: I'm Not Gonna Worry</h5>
                </div>
                
                <div class="integrated-controls mb-3">
                  <button onclick="prevTrack()" class="control-btn" title="Previous">
                    <i class="fa-solid fa-backward-step"></i>
                  </button>
                  <button onclick="playTrack()" class="control-btn play-btn" id="playPauseBtnBack" title="Play/Pause">
                    <i class="fa-solid fa-play" id="playPauseIconBack"></i>
                  </button>
                  <button onclick="nextTrack()" class="control-btn" title="Next">
                    <i class="fa-solid fa-forward-step"></i>
                  </button>
                </div>

                <div class="text-center">
                  <button class="back-btn" id="backBtn">
                    <i class="fa-solid fa-arrow-left"></i> Back to Player
                  </button>
                </div>
                
              </div>
            </div>
            
          </div>
        </div>
      </div>
      
    </div>
  </div>
</div>

<style>
/* General Wrapper */
.music-player-wrapper {
  background: linear-gradient(135deg, #1e7e34 0%, #28a745 50%, #34ce57 100%);
  padding: 25px;
  border-radius: 20px;
  margin: 30px auto;
  max-width: 950px;
  box-shadow: 0 20px 40px rgba(30, 126, 52, 0.2);
  position: relative;
  overflow: hidden;
}

/* Image Section */
.image-carousel-container {
  border-radius: 15px;
  overflow: hidden;
  box-shadow: 0 15px 35px rgba(0, 0, 0, 0.3);
  border: 2px solid rgba(255, 255, 255, 0.2);
  background: white;
}

.carousel-image {
  object-fit: cover;
  object-position: center;
}

/* Player Section */
.player-section {
  background: rgba(255, 255, 255, 0.95);
  backdrop-filter: blur(20px);
  border-radius: 15px;
  box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
  border: 1px solid rgba(255, 255, 255, 0.3);
  display: flex;
  align-items: center;
}

.player-content {
  padding: 20px;
  width: 100%;
}

/* Flip Animation */
.flip-container {
  perspective: 1000px;
}

.flipper {
  transition: 0.8s;
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
</style>

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
    const iconClass = isPlaying ? 'fa-solid fa-pause' : 'fa-solid fa-play';
    if (playPauseIcon) playPauseIcon.className = iconClass;
    if (playPauseIconBack) playPauseIconBack.className = iconClass;
  }

  function displayAvailableTracks() {
    const trackList = document.getElementById('trackList');
    trackList.innerHTML = '';
    tracks.forEach((track, index) => {
      const trackDiv = document.createElement('div');
      trackDiv.classList.add('track-item');
      if (index === currentTrack) trackDiv.classList.add('active');

      const infoWrapper = document.createElement('div');
      infoWrapper.style.display = 'flex';
      infoWrapper.style.alignItems = 'center';
      infoWrapper.style.flex = '1';

      const titleSpan = document.createElement('span');
      titleSpan.className = 'track-title';
      titleSpan.textContent = track.title;

      const icon = document.createElement('i');
      icon.className = (index === currentTrack && !audio.paused) ? 'fa fa-pause track-icon' : 'fa fa-play track-icon';

      infoWrapper.appendChild(titleSpan);
      infoWrapper.appendChild(icon);

      const downloadLink = document.createElement('a');
      downloadLink.href = track.file;
      downloadLink.download = track.title + '.mp3';
      downloadLink.className = 'download-button';
      downloadLink.innerHTML = '<i class="fa-solid fa-download"></i>';
      downloadLink.onclick = (e) => e.stopPropagation();

      trackDiv.appendChild(infoWrapper);
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
    displayAvailableTracks();
  });

  audio.addEventListener('ended', nextTrack);
  audio.addEventListener('play', () => { updatePlayIcon(true); displayAvailableTracks(); });
  audio.addEventListener('pause', () => { updatePlayIcon(false); displayAvailableTracks(); });
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
