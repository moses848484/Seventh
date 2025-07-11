<div class="container-wrapper">
    <div class="container12">
  <div class="row align-items-stretch">
    <!-- Left Column (Image Carousel) -->
    <div class="col-md-6 mb-4 mb-md-0">
      <div id="imageCarousel" class="carousel slide h-100" data-ride="carousel">
        <div class="carousel-inner h-100">
          <div class="carousel-item active h-100">
            <img src="images/gvb1.jpg" class="d-block w-100 h-100 object-fit-cover" alt="First Image">
          </div>
        </div>
      </div>
    </div>

 
    <!-- Right Column (Flip Card) -->
    <div class="col-md-6">
      <div class="flip-container h-100" id="flipContainer">
        <div class="flipper h-100 position-relative">
          <!-- FRONT -->
          <div class="front text-area6 h-100 overflow-auto">
            <h4 class="heading7">New Single from University SDA Church</h4>
            <h5 class="heading6">"We Choose Praise"</h5>
            <p>
              God is our source of strength and gives us joy in any season of life.
              This song is an intentional declaration that no matter what life throws at us,
              we can choose to praise Him.
            </p>

            <div class="btn-row mb-3">
              <button class="btn7" onclick="playTrack()">🎧 Listen Now</button>
              <button class="btn7" id="viewSongsBtn"><i class="fa-solid fa-eye"></i> View Songs</button>
            </div>

            <h5 id="trackTitle" class="text1">Now Playing:</h5>
            <audio id="audioPlayer" style="width: 100%;" controls>
              <source id="audioSource" src="{{ asset('music/Bill When I Cry.mp3') }}" type="audio/mpeg">
              Your browser does not support the audio element.
            </audio>

            <div class="music-controls mt-3">
              <button onclick="prevTrack()" class="btn btn-outline-white btn-sm"><i class="fa-solid fa-square-caret-left"></i></button>
              <button onclick="playTrack()" class="btn btn-outline-white btn-sm" id="playPauseBtn">
                <i class="fa-solid fa-circle-play" id="playPauseIcon"></i>
              </button>
              <button onclick="nextTrack()" class="btn btn-outline-white btn-sm"><i class="fa-solid fa-square-caret-right"></i></button>
            </div>
          </div>

          <!-- BACK -->
          <div class="back text-area6 h-100 overflow-auto">
            <h4 class="text1 mt-2">🎵 Available Songs</h4>
            <div id="trackList" class="track-list"></div>
            <button class="btn7 mt-3" id="backBtn"><i class="fa-solid fa-arrow-left"></i> Back</button>
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
    background: rgba(248, 249, 250, 0.11);
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
    color: white;
  }


  .btn7 {
    background-color: #fff;
    color: #000;
    border: none;
    padding: 10px 25px;
    border-radius: 5px;
    font-size: 16px;
    margin-top: 30px;
    margin-right: 10px;
    transition: background-color 0.3s ease;
  }

  .btn7:hover {
    background-color: #ddd;
  }

  .text1 {
    color: #fff;
    margin: 25px;
  }

  .track-list {
    margin-top: 15px;
  }

  .track-item {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 8px 12px;
    border-bottom: 1px solid rgba(255, 255, 255, 0.2);
    cursor: pointer;
    transition: background-color 0.2s ease;
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

  .track-title {
    flex: 1;
  }

  .track-icon {
    margin-left: 10px;
  }

  .flip-container {
    perspective: 1000px;
    margin-top: -30px;
    width: 100%;
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

                .fa-circle-play {
                    font-size: 50px;
                    color: white;
                }

                .fa-square-caret-right {
                    font-size: 35px;
                    color: white;
                }

                .fa-circle-pause {
                    font-size: 50px;
                    color: white;
                }

                .fa-square-caret-left {
                    font-size: 35px;
                    color: white;
                }

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
    {
      title: "Count On Me",
      file: "{{ asset('music/14 Whitney Houston - Count On Me.mp3') }}"
    }
  ];

  let currentTrack = 0;

  const audio = document.getElementById('audioPlayer');
  const source = document.getElementById('audioSource');
  const trackTitle = document.getElementById('trackTitle');
  const playPauseIcon = document.getElementById('playPauseIcon');

  function loadTrack(index) {
    currentTrack = index;
    source.src = tracks[index].file;
    audio.load();
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
    playPauseIcon.className = isPlaying ? 'fa-solid fa-circle-pause' : 'fa-solid fa-circle-play';
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

      trackDiv.appendChild(titleSpan);
      trackDiv.appendChild(icon);

      trackDiv.onclick = () => {
        loadTrack(index);
        audio.play();
        updatePlayIcon(true);
      };

      trackList.appendChild(trackDiv);
    });
  }

  // Flip Events
  document.getElementById("viewSongsBtn").addEventListener("click", () => {
    document.getElementById("flipContainer").classList.add("flip");
    displayAvailableTracks();
  });

  document.getElementById("backBtn").addEventListener("click", () => {
    document.getElementById("flipContainer").classList.remove("flip");
  });

  // Init
  window.addEventListener('DOMContentLoaded', () => {
    loadTrack(currentTrack);
    updatePlayIcon(false);
  });

  // Auto-play next
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










