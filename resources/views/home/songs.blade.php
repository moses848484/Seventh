<div class="container-wrapper py-4">
  <div class="container">
    <div class="row g-4 align-items-stretch">
      <!-- Left Column (Image Carousel) -->
      <div class="col-md-6">
        <div id="imageCarousel" class="carousel slide h-100" data-bs-ride="carousel">
          <div class="carousel-inner h-100">
            <div class="carousel-item active h-100">
              <img src="images/choir.jpg" class="d-block w-100 h-100 object-fit-cover" alt="Choir Image">
            </div>
          </div>
        </div>
      </div>

      <!-- Right Column (Flip Card / Music Player) -->
      <div class="col-md-6">
        <div class="flip-container h-100" id="flipContainer">
          <div class="flipper h-100 position-relative">
            <!-- FRONT -->
            <div class="front text-area6 d-flex flex-column overflow-auto">
              <h4 class="heading7 mb-3">Download and Listen to Songs Here</h4>
              <div class="btn-row mb-3">
                <button class="btn7 me-2" onclick="playTrack()">🎧 Listen Now</button>
                <button class="btn7" id="viewSongsBtn"><i class="fa-solid fa-eye"></i> View Songs</button>
              </div>

              <h5 id="trackTitle" class="text1 mt-3">Now Playing:</h5>
              <audio id="audioPlayer" class="w-100" controls>
                <source id="audioSource" src="{{ asset('music/Bill When I Cry.mp3') }}" type="audio/mpeg">
                Your browser does not support the audio element.
              </audio>

              <div class="music-controls mt-3 d-flex gap-2">
                <button onclick="prevTrack()" class="btn btn-outline-light btn-sm"><i class="fa-solid fa-square-caret-left"></i></button>
                <button onclick="playTrack()" class="btn btn-outline-light btn-sm" id="playPauseBtn">
                  <i class="fa-solid fa-circle-play" id="playPauseIcon"></i>
                </button>
                <button onclick="nextTrack()" class="btn btn-outline-light btn-sm"><i class="fa-solid fa-square-caret-right"></i></button>
              </div>
            </div>

            <!-- BACK -->
            <div class="back text-area6 d-flex flex-column overflow-auto">
              <h4 class="text1 mt-2 mb-3">🎵 Available Songs</h4>
              <div id="trackList" class="track-list flex-grow-1 overflow-auto"></div>

              <h5 id="trackTitleBack" class="text1 mt-3">Now Playing:</h5>
              <div class="music-controls mt-2 d-flex gap-2">
                <button onclick="prevTrack()" class="btn btn-outline-light btn-sm"><i class="fa-solid fa-square-caret-left"></i></button>
                <button onclick="playTrack()" class="btn btn-outline-light btn-sm" id="playPauseBtnBack">
                  <i class="fa-solid fa-circle-play" id="playPauseIconBack"></i>
                </button>
                <button onclick="nextTrack()" class="btn btn-outline-light btn-sm"><i class="fa-solid fa-square-caret-right"></i></button>
              </div>

              <button class="btn7 mt-3 align-self-start" id="backBtn"><i class="fa-solid fa-arrow-left"></i> Back</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Styles -->
<style>
.container-wrapper { background: #000; min-height: 100vh; }
.object-fit-cover { object-fit: cover; }
.text-area6 { background: rgba(248, 249, 250, 0.1); padding: 25px; border-radius: 10px; box-shadow: 0 4px 20px rgba(0,0,0,0.1); color: white; height: 100%; }
.btn7 { background-color: #fff; color: #000; border: none; padding: 10px 20px; border-radius: 5px; font-size: 16px; transition: 0.3s; }
.btn7:hover { background-color: #ddd; }
.flip-container { perspective: 1000px; height: 100%; }
.flipper { transition: 0.6s; transform-style: preserve-3d; position: relative; height: 100%; }
.flip-container.flip .flipper { transform: rotateY(180deg); }
.front, .back { backface-visibility: hidden; position: absolute; width: 100%; height: 100%; top: 0; left: 0; display: flex; flex-direction: column; }
.back { transform: rotateY(180deg); }
.track-list { flex-grow: 1; overflow-y: auto; margin-top: 10px; }
.music-controls i { font-size: 1.5rem; }
</style>


<!-- SCRIPT -->
<script>
  const tracks = [
    {
      title: "I'm Not Gonna Worry",
      file: "{{ asset('music/Gaither Vocal Band - Im Not Gonna Worry [Live] ft. Gaither Vocal Band.mp3') }}"
    },
    {
      title: "When I Cry",
      file: "{{ asset('music/Bill When I Cry.mp3') }}"
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
      titleSpan.className = 'track-title';
      titleSpan.textContent = track.title;

      const icon = document.createElement('i');
      icon.className = (index === currentTrack && !audio.paused) ? 'fa fa-pause' : 'fa fa-play';
      icon.classList.add('track-icon');

      const infoWrapper = document.createElement('div');
      infoWrapper.className = 'track-info-wrapper';
      infoWrapper.appendChild(titleSpan);
      infoWrapper.appendChild(icon);

      const downloadLink = document.createElement('a');
      downloadLink.href = track.file;
      downloadLink.download = '';
      downloadLink.className = 'download-button';
      downloadLink.innerHTML = '<i class="fa-solid fa-download"></i>';

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