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
    <div class="row g-4 align-items-stretch min-vh-100">
      
      <!-- Left Column (Image Carousel) -->
      <div class="col-lg-6">
        <div class="image-section">
          <div id="imageCarousel" class="carousel slide image-carousel-container">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="images/choir.jpg" class="carousel-image" alt="Choir Performance">
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Right Column (Music Player) -->
      <div class="col-lg-6">
        <div class="flip-container" id="flipContainer">
          <div class="flipper">
            
            <!-- FRONT - Main Player -->
            <div class="front player-section">
              <div class="player-content">
                
                <div class="header-section text-center mb-4">
                  <h2 class="main-title">Download and Listen to Songs Here</h2>
                </div>
                
                <div class="now-playing-section text-center mb-4">
                  <h4 id="trackTitle" class="track-title">Now Playing: I'm Not Gonna Worry</h4>
                </div>
                
                <!-- Audio Player and View Songs Container -->
                <div class="audio-container mb-4">
                  <div class="audio-player-wrapper">
                    <audio id="audioPlayer" controls class="custom-audio">
                      <source id="audioSource" src="music/Bill When I Cry.mp3" type="audio/mpeg">
                      Your browser does not support the audio element.
                    </audio>
                  </div>
                  <button class="view-songs-btn" id="viewSongsBtn">
                    <i class="fa-solid fa-list"></i> View Songs
                  </button>
                </div>

                <!-- Custom Music Controls -->
                <div class="custom-controls text-center">
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
            </div>

            <!-- BACK - Song List -->
            <div class="back player-section">
              <div class="player-content">
                
                <div class="header-section text-center mb-4">
                  <h2 class="main-title">🎵 Available Songs</h2>
                </div>
                
                <div class="track-list-container">
                  <div id="trackList" class="track-list"></div>
                </div>
                
                <!-- Back Controls -->
                <div class="now-playing-section text-center mb-3">
                  <h5 id="trackTitleBack" class="track-title-small">Now Playing: I'm Not Gonna Worry</h5>
                </div>
                
                <div class="custom-controls text-center mb-4">
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
* {
  box-sizing: border-box;
}

body {
  margin: 0;
  padding: 0;
  background: linear-gradient(135deg, #2d5a27 0%, #4a7c59 50%, #5d8a66 100%);
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  min-height: 100vh;
}

.music-player-wrapper {
  min-height: 100vh;
  padding: 20px;
}

/* Image Section Styling */
.image-section {
  height: 100%;
  display: flex;
  align-items: center;
  justify-content: center;
}

.image-carousel-container {
  width: 100%;
  max-width: 600px;
  height: 400px;
  border-radius: 15px;
  overflow: hidden;
  box-shadow: 0 15px 35px rgba(0, 0, 0, 0.3);
  border: 4px solid rgba(255, 255, 255, 0.1);
}

.carousel-image {
  width: 100%;
  height: 400px;
  object-fit: cover;
  object-position: center;
}

/* Player Section Styling */
.player-section {
  background: rgba(255, 255, 255, 0.95);
  backdrop-filter: blur(10px);
  border-radius: 20px;
  box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
  border: 1px solid rgba(255, 255, 255, 0.3);
  min-height: 500px;
  display: flex;
  align-items: center;
}

.player-content {
  padding: 40px;
  width: 100%;
}

/* Typography */
.main-title {
  color: #2d5a27;
  font-weight: 700;
  font-size: 1.8rem;
  margin-bottom: 0;
  text-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.track-title {
  color: #4a7c59;
  font-weight: 600;
  font-size: 1.3rem;
  margin-bottom: 0;
}

.track-title-small {
  color: #4a7c59;
  font-weight: 500;
  font-size: 1.1rem;
  margin-bottom: 0;
}

/* Audio Container */
.audio-container {
  display: flex;
  align-items: center;
  gap: 20px;
  justify-content: center;
  flex-wrap: wrap;
}

.audio-player-wrapper {
  flex: 1;
  min-width: 280px;
}

.custom-audio {
  width: 100%;
  height: 50px;
  border-radius: 25px;
  outline: none;
  background: #f8f9fa;
  border: 2px solid #e9ecef;
}

.custom-audio::-webkit-media-controls-panel {
  background-color: #f8f9fa;
  border-radius: 25px;
}

/* View Songs Button */
.view-songs-btn {
  background: linear-gradient(135deg, #4a7c59 0%, #5d8a66 100%);
  color: white;
  border: none;
  padding: 12px 24px;
  border-radius: 25px;
  font-size: 1rem;
  font-weight: 600;
  cursor: pointer;
  transition: all 0.3s ease;
  box-shadow: 0 4px 15px rgba(74, 124, 89, 0.3);
  white-space: nowrap;
}

.view-songs-btn:hover {
  transform: translateY(-2px);
  box-shadow: 0 6px 20px rgba(74, 124, 89, 0.4);
  background: linear-gradient(135deg, #5d8a66 0%, #4a7c59 100%);
}

/* Custom Controls */
.custom-controls {
  display: flex;
  justify-content: center;
  align-items: center;
  gap: 20px;
}

.control-btn {
  background: rgba(74, 124, 89, 0.1);
  border: 2px solid #4a7c59;
  color: #4a7c59;
  width: 60px;
  height: 60px;
  border-radius: 50%;
  font-size: 1.2rem;
  cursor: pointer;
  transition: all 0.3s ease;
  display: flex;
  align-items: center;
  justify-content: center;
}

.control-btn:hover {
  background: #4a7c59;
  color: white;
  transform: scale(1.1);
}

.play-btn {
  width: 80px;
  height: 80px;
  font-size: 1.8rem;
  background: linear-gradient(135deg, #4a7c59 0%, #5d8a66 100%);
  color: white;
  border: none;
  box-shadow: 0 6px 20px rgba(74, 124, 89, 0.3);
}

.play-btn:hover {
  transform: scale(1.05);
  box-shadow: 0 8px 25px rgba(74, 124, 89, 0.4);
}

/* Back Button */
.back-btn {
  background: #6c757d;
  color: white;
  border: none;
  padding: 12px 30px;
  border-radius: 25px;
  font-size: 1rem;
  font-weight: 500;
  cursor: pointer;
  transition: all 0.3s ease;
}

.back-btn:hover {
  background: #5a6268;
  transform: translateY(-1px);
}

/* Track List */
.track-list-container {
  max-height: 300px;
  overflow-y: auto;
  margin-bottom: 20px;
  border-radius: 10px;
  background: rgba(248, 249, 250, 0.5);
  padding: 10px;
}

.track-item {
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 15px;
  margin-bottom: 8px;
  background: white;
  border-radius: 10px;
  cursor: pointer;
  transition: all 0.3s ease;
  box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
  border: 1px solid rgba(74, 124, 89, 0.1);
}

.track-item:hover {
  background: #f8f9fa;
  transform: translateX(5px);
  box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
}

.track-item.active {
  background: linear-gradient(135deg, #4a7c59 0%, #5d8a66 100%);
  color: white;
  font-weight: 600;
}

.track-title {
  flex: 1;
  font-weight: 500;
}

.track-icon {
  margin-left: 15px;
  font-size: 1.1rem;
}

.download-button {
  color: #4a7c59;
  text-decoration: none;
  padding: 8px 12px;
  border-radius: 5px;
  transition: all 0.3s ease;
  margin-left: 10px;
}

.download-button:hover {
  background: #4a7c59;
  color: white;
}

.track-item.active .download-button {
  color: white;
}

.track-item.active .download-button:hover {
  background: rgba(255, 255, 255, 0.2);
}

/* Flip Animation */
.flip-container {
  perspective: 1000px;
  width: 100%;
  height: 100%;
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

.front,
.back {
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

/* Responsive Design */
@media (max-width: 991px) {
  .music-player-wrapper {
    padding: 15px;
  }
  
  .image-carousel-container {
    height: 300px;
    margin-bottom: 20px;
  }
  
  .carousel-image {
    height: 300px;
  }
  
  .player-content {
    padding: 30px 25px;
  }
  
  .main-title {
    font-size: 1.5rem;
  }
}

@media (max-width: 768px) {
  .audio-container {
    flex-direction: column;
    gap: 15px;
  }
  
  .view-songs-btn {
    width: 100%;
    max-width: 280px;
  }
  
  .image-carousel-container {
    height: 250px;
  }
  
  .carousel-image {
    height: 250px;
  }
  
  .custom-controls {
    gap: 15px;
  }
  
  .control-btn {
    width: 50px;
    height: 50px;
    font-size: 1rem;
  }
  
  .play-btn {
    width: 70px;
    height: 70px;
    font-size: 1.5rem;
  }
}

@media (max-width: 576px) {
  .music-player-wrapper {
    padding: 10px;
  }
  
  .player-content {
    padding: 25px 20px;
  }
  
  .main-title {
    font-size: 1.3rem;
  }
  
  .track-title {
    font-size: 1.1rem;
  }
  
  .image-carousel-container {
    height: 200px;
  }
  
  .carousel-image {
    height: 200px;
  }
}

/* Scrollbar Styling */
.track-list-container::-webkit-scrollbar {
  width: 6px;
}

.track-list-container::-webkit-scrollbar-track {
  background: rgba(0, 0, 0, 0.1);
  border-radius: 3px;
}

.track-list-container::-webkit-scrollbar-thumb {
  background: #4a7c59;
  border-radius: 3px;
}

.track-list-container::-webkit-scrollbar-thumb:hover {
  background: #5d8a66;
}
</style>

<script>
  const tracks = [
    {
      title: "I'm Not Gonna Worry",
      file: "music/Gaither Vocal Band - Im Not Gonna Worry [Live] ft. Gaither Vocal Band.mp3"
    },
    {
      title: "When I Cry",
      file: "music/Bill When I Cry.mp3"
    },
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
    if (trackTitleBack) {
      trackTitleBack.textContent = "Now Playing: " + tracks[index].title;
    }
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

  // Event Listeners
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
  audio.addEventListener('play', () => {
    updatePlayIcon(true);
    displayAvailableTracks();
  });

  audio.addEventListener('pause', () => {
    updatePlayIcon(false);
    displayAvailableTracks();
  });
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>