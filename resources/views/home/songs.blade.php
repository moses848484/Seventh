<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Music Player</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  <style>
/* General Wrapper */
.music-player-wrapper {
  background: linear-gradient(135deg, #1e7e34 0%, #28a745 50%, #34ce57 100%);
  padding: 30px;
  border-radius: 20px;
  margin: 0;
  max-width: 100%;
  box-shadow: 0 20px 40px rgba(30, 126, 52, 0.2);
  overflow: hidden;
}

/* Image Section */
.image-carousel-container {
  border-radius: 20px;
  overflow: hidden;
  box-shadow: 0 15px 35px rgba(0, 0, 0, 0.3);
  border: 2px solid rgba(255, 255, 255, 0.2);
  height: 100%;
}

.carousel-image {
  object-fit: cover;
  object-position: center;
}

/* Player Section */
.player-section {
  background: rgba(255, 255, 255, 0.2);
  backdrop-filter: blur(15px);
  border-radius: 20px;
  padding: 25px;
  height: 100%;
  box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
  display: flex;
  flex-direction: column;
  justify-content: center;
}

.player-content {
  width: 100%;
}

/* Headings */
.main-title {
  font-weight: 700;
  font-size: 1.5rem;
  color: #fff;
}

.track-title {
  font-weight: 600;
  color: #fff;
}

/* Custom Controls */
.integrated-controls {
  display: flex;
  justify-content: center;
  align-items: center;
  gap: 15px;
  margin: 15px 0;
}

.control-btn {
  background: rgba(255, 255, 255, 0.25);
  border: none;
  color: #fff;
  font-size: 1.3rem;
  padding: 12px 16px;
  border-radius: 50%;
  cursor: pointer;
  transition: 0.3s;
}

.control-btn:hover {
  background: rgba(255, 255, 255, 0.4);
  transform: scale(1.1);
}

.play-btn {
  font-size: 1.6rem;
  padding: 14px 18px;
  background: #28a745;
}

.play-btn:hover {
  background: #34ce57;
}

/* View Songs Button */
.view-songs-btn, .back-btn {
  background: rgba(255, 255, 255, 0.25);
  border: none;
  color: #fff;
  padding: 10px 18px;
  border-radius: 25px;
  font-size: 1rem;
  cursor: pointer;
  transition: 0.3s;
}

.view-songs-btn:hover, .back-btn:hover {
  background: rgba(255, 255, 255, 0.4);
}

/* Song List */
.track-list {
  max-height: 250px;
  overflow-y: auto;
  padding: 10px;
}

.track-item {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 8px 12px;
  margin-bottom: 8px;
  border-radius: 12px;
  cursor: pointer;
  background: rgba(255, 255, 255, 0.15);
  color: #fff;
  transition: 0.3s;
}

.track-item:hover {
  background: rgba(255, 255, 255, 0.3);
}

.track-item.active {
  background: #28a745;
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
</head>
<body>

<div class="music-player-wrapper">
  <div class="container-fluid">
    <div class="row g-4 align-items-stretch justify-content-center">
      
      <!-- Left Column (Image Carousel) -->
      <div class="col-lg-6 col-md-6">
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
      <div class="col-lg-6 col-md-6">
        <div class="flip-container h-100" id="flipContainer">
          <div class="flipper h-100">
            
            <!-- FRONT - Main Player -->
            <div class="front player-section h-100">
              <div class="player-content text-center">
                <h2 class="main-title">Download and Listen to Songs Here</h2>
                <h4 id="trackTitle" class="track-title">Now Playing: I'm Not Gonna Worry</h4>
                
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

                <button class="view-songs-btn mt-3" id="viewSongsBtn">
                  <i class="fa-solid fa-list"></i> View Songs
                </button>
              </div>
            </div>

            <!-- BACK - Song List -->
            <div class="back player-section h-100">
              <div class="player-content">
                <h2 class="main-title text-center">🎵 Available Songs</h2>
                <div id="trackList" class="track-list"></div>
                <button class="back-btn mt-3 d-block mx-auto" id="backBtn">
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

<script>
  const tracks = [
    { title: "I'm Not Gonna Worry", file: "music/Gaither Vocal Band - Im Not Gonna Worry [Live] ft. Gaither Vocal Band.mp3" },
    { title: "When I Cry", file: "music/Bill When I Cry.mp3" }
  ];

  let currentTrack = 0;
  const audio = new Audio(tracks[0].file);
  const trackTitle = document.getElementById('trackTitle');
  const playPauseIcon = document.getElementById('playPauseIcon');

  function loadTrack(index) {
    currentTrack = index;
    audio.src = tracks[index].file;
    trackTitle.textContent = "Now Playing: " + tracks[index].title;
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
    playPauseIcon.className = isPlaying ? 'fa-solid fa-pause' : 'fa-solid fa-play';
  }

  function displayAvailableTracks() {
    const trackList = document.getElementById('trackList');
    trackList.innerHTML = '';
    tracks.forEach((track, index) => {
      const trackDiv = document.createElement('div');
      trackDiv.classList.add('track-item');
      if (index === currentTrack) trackDiv.classList.add('active');
      trackDiv.innerHTML = `<span>${track.title}</span>`;
      trackDiv.onclick = () => {
        loadTrack(index);
        audio.play();
        updatePlayIcon(true);
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
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
