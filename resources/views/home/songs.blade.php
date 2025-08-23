<div class="container-wrapper">
  <div class="container12">
    <div class="row align-items-stretch">

      <!-- Left Column: Image Carousel -->
      <div class="col-md-6 mb-4 mb-md-0">
        <div id="imageCarousel" class="carousel slide h-100" data-ride="carousel">
          <div class="carousel-inner h-100 position-relative">
            <div class="carousel-item active">
              <img src="images/choir.jpg" class="d-block w-100 img-fluid object-fit-cover" alt="Choir">
            </div>
          </div>
        </div>
      </div>

      <!-- Right Column: Flip Card -->
      <div class="col-md-6 mb-4 mb-md-0">
        <div class="flip-container h-100" id="flipContainer">
          <div class="flipper h-100 position-relative">

            <!-- FRONT: Audio Player -->
            <!-- FRONT: Audio Player -->
            <div class="front text-area6 d-flex flex-column overflow-auto p-3">
              <h4 class="heading7 mb-3 fs-5 text-center">Download and Listen to Songs Here</h4>

              <div class="btn-row mb-3 d-flex flex-wrap gap-2 justify-content-center">
                <button class="btn7" onclick="playTrack()">🎧 Listen Now</button>
                <button class="btn7" id="viewSongsBtn"><i class="fa-solid fa-eye"></i> View Songs</button>
              </div>
            </div>

            <h5 id="trackTitle" class="text1 mt-3 fs-6">Now Playing:</h5>
            <audio id="audioPlayer" class="w-100" controls>
              <source id="audioSource" src="{{ asset('music/Bill When I Cry.mp3') }}" type="audio/mpeg">
              Your browser does not support the audio element.
            </audio>

            <div class="music-controls mt-3 d-flex gap-2">
              <button onclick="prevTrack()" class="btn btn-outline-light btn-sm"><i
                  class="fa-solid fa-square-caret-left"></i></button>
              <button onclick="playTrack()" class="btn btn-outline-light btn-sm" id="playPauseBtn">
                <i class="fa-solid fa-circle-play" id="playPauseIcon"></i>
              </button>
              <button onclick="nextTrack()" class="btn btn-outline-light btn-sm"><i
                  class="fa-solid fa-square-caret-right"></i></button>
            </div>

            <!-- Swipe indicators -->
            <div class="swipe-indicator left" id="swipeLeft">←</div>
            <div class="swipe-indicator right" id="swipeRight">→</div>
          </div>

          <!-- BACK: Song List -->
          <div class="back text-area6 h-100 overflow-auto p-3">
            <h4 class="text1 mt-2">🎵 Available Songs</h4>
            <div id="trackList" class="track-list"></div>

            <h5 id="trackTitleBack" class="text1 mt-3 fs-6">Now Playing:</h5>
            <div class="music-controls mt-2 d-flex gap-2">
              <button onclick="prevTrack()" class="btn btn-outline-light btn-sm"><i
                  class="fa-solid fa-square-caret-left"></i></button>
              <button onclick="playTrack()" class="btn btn-outline-light btn-sm" id="playPauseBtnBack">
                <i class="fa-solid fa-circle-play" id="playPauseIconBack"></i>
              </button>
              <button onclick="nextTrack()" class="btn btn-outline-light btn-sm"><i
                  class="fa-solid fa-square-caret-right"></i></button>
            </div>

            <button class="btn7 mt-4" id="backBtn"><i class="fa-solid fa-arrow-left"></i> Back</button>
          </div>

        </div>
      </div>
    </div>

  </div>
</div>
</div>

<!-- CSS -->
<style>
  .text-area6 {
    background: rgba(248, 249, 250, 0.11);
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
    color: white;
  }

  .btn7 {
    background: #fff;
    color: #000;
    border: none;
    padding: 10px 25px;
    border-radius: 5px;
    font-size: 16px;
    transition: 0.3s;
  }

  .btn7:hover {
    background: #ddd;
  }

  .text1 {
    color: white;
    margin: 25px 0;
  }

  .track-list {
    margin-top: 15px;
  }

  .track-item {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 8px 12px;
    border-bottom: 1px solid rgba(255, 255, 255, 0.2);
    cursor: pointer;
    transition: 0.2s;
    color: white;
  }

  .track-item:hover {
    background-color: rgba(255, 255, 255, 0.1);
  }

  .track-item.active {
    font-weight: bold;
    text-decoration: underline;
    background-color: rgba(255, 255, 255, 0.08);
  }

  .carousel {
    margin-top: 14px;
  }

  .flip-container {
    perspective: 1000px;
    width: 100%;
    margin-top: -30px;
  }

  .flipper {
    transition: 0.6s;
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

  .object-fit-cover {
    object-fit: cover;
  }

  .fa-circle-play,
  .fa-circle-pause {
    font-size: 50px;
    color: white;
  }

  .fa-square-caret-left,
  .fa-square-caret-right {
    font-size: 35px;
    color: white;
  }

  /* Swipe indicators */
  .swipe-indicator {
    position: absolute;
    top: 50%;
    transform: translateY(-50%) translateX(0);
    font-size: 2rem;
    color: rgba(255, 255, 255, 0.5);
    opacity: 0;
    transition: opacity 0.3s, transform 0.3s;
    pointer-events: none;
    z-index: 10;
  }

  .swipe-indicator.left {
    left: 10px;
  }

  .swipe-indicator.right {
    right: 10px;
  }
</style>

<!-- JS -->
<script>
  const tracks = [
    { title: "I'm Not Gonna Worry", file: "{{ asset('music/Gaither Vocal Band - Im Not Gonna Worry [Live] ft. Gaither Vocal Band.mp3') }}" },
    { title: "When I Cry", file: "{{ asset('music/Bill When I Cry.mp3') }}" }
  ];

  let currentTrack = 0;
  const audio = document.getElementById('audioPlayer');
  const source = document.getElementById('audioSource');
  const trackTitle = document.getElementById('trackTitle');
  const trackTitleBack = document.getElementById('trackTitleBack');
  const playPauseIcon = document.getElementById('playPauseIcon');
  const playPauseIconBack = document.getElementById('playPauseIconBack');
  const flipContainer = document.getElementById('flipContainer');
  const frontContainer = document.querySelector('.front');
  const trackList = document.getElementById('trackList');
  const swipeLeft = document.getElementById('swipeLeft');
  const swipeRight = document.getElementById('swipeRight');

  let touchStartX = 0, touchStartY = 0, touchEndX = 0, touchEndY = 0, swipeStartTime = 0;

  // Load track
  function loadTrack(index) {
    currentTrack = index;
    source.src = tracks[index].file;
    audio.load();
    trackTitle.textContent = "Now Playing: " + tracks[index].title;
    if (trackTitleBack) trackTitleBack.textContent = "Now Playing: " + tracks[index].title;
    displayAvailableTracks();
  }

  function playTrack() {
    if (audio.paused) { audio.play(); updatePlayIcon(true); }
    else { audio.pause(); updatePlayIcon(false); }
  }

  function nextTrack() { currentTrack = (currentTrack + 1) % tracks.length; loadTrack(currentTrack); audio.play(); updatePlayIcon(true); }
  function prevTrack() { currentTrack = (currentTrack - 1 + tracks.length) % tracks.length; loadTrack(currentTrack); audio.play(); updatePlayIcon(true); }

  function updatePlayIcon(isPlaying) {
    if (playPauseIcon) playPauseIcon.className = isPlaying ? 'fa-solid fa-circle-pause' : 'fa-solid fa-circle-play';
    if (playPauseIconBack) playPauseIconBack.className = isPlaying ? 'fa-solid fa-circle-pause' : 'fa-solid fa-circle-play';
  }

  // Display song list
  function displayAvailableTracks() {
    trackList.innerHTML = '';
    tracks.forEach((track, index) => {
      const trackDiv = document.createElement('div'); trackDiv.className = 'track-item'; if (index === currentTrack) trackDiv.classList.add('active');
      const titleSpan = document.createElement('span'); titleSpan.className = 'track-title'; titleSpan.textContent = track.title;
      const icon = document.createElement('i'); icon.className = (index === currentTrack && !audio.paused) ? 'fa fa-pause' : 'fa fa-play'; icon.classList.add('track-icon');
      const infoWrapper = document.createElement('div'); infoWrapper.className = 'track-info-wrapper'; infoWrapper.appendChild(titleSpan); infoWrapper.appendChild(icon);
      const downloadLink = document.createElement('a'); downloadLink.href = track.file; downloadLink.download = ''; downloadLink.className = 'download-button'; downloadLink.innerHTML = '<i class="fa-solid fa-download"></i>';
      trackDiv.appendChild(infoWrapper); trackDiv.appendChild(downloadLink);
      trackDiv.onclick = () => { if (index === currentTrack) { playTrack(); } else { loadTrack(index); audio.play(); updatePlayIcon(true); } };
      trackList.appendChild(trackDiv);
    });
  }

  // Flip buttons
  document.getElementById("viewSongsBtn").addEventListener("click", () => { flipContainer.classList.add("flip"); displayAvailableTracks(); });
  document.getElementById("backBtn").addEventListener("click", () => { flipContainer.classList.remove("flip"); });

  // --- Swipe gestures ---
  flipContainer.addEventListener('touchstart', e => { touchStartX = e.changedTouches[0].screenX; touchStartY = e.changedTouches[0].screenY; }, false);
  flipContainer.addEventListener('touchend', e => {
    touchEndX = e.changedTouches[0].screenX; touchEndY = e.changedTouches[0].screenY;
    const deltaX = touchEndX - touchStartX, deltaY = touchEndY - touchStartY;
    if (Math.abs(deltaX) > Math.abs(deltaY) && Math.abs(deltaX) > 50) {
      if (deltaX < 0) flipContainer.classList.add('flip'); else flipContainer.classList.remove('flip');
    }
  }, false);

  trackList.addEventListener('touchstart', e => e.stopPropagation(), false);
  trackList.addEventListener('touchmove', e => e.stopPropagation(), false);
  trackList.addEventListener('touchend', e => e.stopPropagation(), false);

  // Track skip swipe with velocity-based arrows
  frontContainer.addEventListener('touchstart', e => { swipeStartX = e.changedTouches[0].screenX; swipeStartTime = Date.now(); }, false);
  frontContainer.addEventListener('touchend', e => {
    const swipeEndX = e.changedTouches[0].screenX;
    const swipeEndTime = Date.now();
    handleFrontSwipe(swipeEndX - swipeStartX, swipeEndTime - swipeStartTime);
  }, false);

  function handleFrontSwipe(distance, duration) {
    if (Math.abs(distance) > 50) {
      const velocity = Math.min(Math.abs(distance / duration), 2);
      const slideAmount = 15 + 20 * velocity;
      const opacity = 0.3 + 0.7 * velocity / 2;

      if (distance < 0) { // left
        swipeRight.style.transform = `translateY(-50%) translateX(${slideAmount}px)`; swipeRight.style.opacity = opacity; swipeRight.classList.add('show-right'); nextTrack();
      } else { // right
        swipeLeft.style.transform = `translateY(-50%) translateX(-${slideAmount}px)`; swipeLeft.style.opacity = opacity; swipeLeft.classList.add('show-left'); prevTrack();
      }

      setTimeout(() => { swipeLeft.classList.remove('show-left'); swipeRight.classList.remove('show-right'); swipeLeft.style.transform = 'translateY(-50%) translateX(0)'; swipeRight.style.transform = 'translateY(-50%) translateX(0)'; swipeLeft.style.opacity = 0; swipeRight.style.opacity = 0; }, 500);
    }
  }

  window.addEventListener('DOMContentLoaded', () => { loadTrack(currentTrack); updatePlayIcon(false); });
  audio.addEventListener('ended', nextTrack);
  audio.addEventListener('play', () => { updatePlayIcon(true); displayAvailableTracks(); });
  audio.addEventListener('pause', () => { updatePlayIcon(false); displayAvailableTracks(); });
</script>