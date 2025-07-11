<section data-testid="dualcontentzone" class="section1 py-5">
  <div class="container">
    <div class="row align-items-center g-4">
      <!-- Image Column -->
      <div class="col-md-6">
        <div class="arrival_bg_box">
          <img src="images/gvb1.jpg" alt="University SDA Church Song" class="img-fluid w-100 rounded">
        </div>
      </div>

      <!-- Flip Card Column -->
      <div class="col-md-6">
        <div class="flip-container w-100" id="flipContainer">
          <div class="flipper position-relative">
            <!-- FRONT -->
            <div class="front text-area6 p-4 rounded h-100 overflow-auto">
              <h4 class="heading7">New Single from University SDA Church</h4>
              <h5 class="heading6">"We Choose Praise"</h5>
              <p>
                God is our source of strength and gives us joy in any season of life.
                This song is an intentional declaration that no matter what life throws at us,
                we can choose to praise Him.
              </p>

              <div class="btn-row my-3">
                <button class="btn7" onclick="playTrack()">🎧 Listen Now</button>
                <button class="btn7" id="viewSongsBtn"><i class="fa-solid fa-eye"></i> View Songs</button>
              </div>

              <h5 id="trackTitle" class="text1">Now Playing:</h5>
              <audio id="audioPlayer" class="w-100" controls>
                <source id="audioSource" src="{{ asset('music/Bill When I Cry.mp3') }}" type="audio/mpeg">
                Your browser does not support the audio element.
              </audio>

              <div class="music-controls mt-3 d-flex justify-content-start gap-2">
                <button onclick="prevTrack()" class="btn btn-outline-light btn-sm">
                  <i class="fa-solid fa-square-caret-left"></i>
                </button>
                <button onclick="playTrack()" class="btn btn-outline-light btn-sm" id="playPauseBtn">
                  <i class="fa-solid fa-circle-play" id="playPauseIcon"></i>
                </button>
                <button onclick="nextTrack()" class="btn btn-outline-light btn-sm">
                  <i class="fa-solid fa-square-caret-right"></i>
                </button>
              </div>
            </div>

            <!-- BACK -->
            <div class="back text-area6 p-4 rounded h-100 overflow-auto">
              <h4 class="text1 mt-2">🎵 Available Songs</h4>
              <div id="trackList" class="track-list"></div>
              <button class="btn7 mt-3" id="backBtn">
                <i class="fa-solid fa-arrow-left"></i> Back
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
