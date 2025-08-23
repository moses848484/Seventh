<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Styled Music Player</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body style="background:#fff; color:#000;">

<div class="container-wrapper py-5">
  <div class="container">
    <div class="row align-items-stretch g-4">
      
      <!-- Left Column (Image Carousel) -->
      <div class="col-lg-6">
        <div id="imageCarousel" class="carousel slide h-100" data-bs-ride="carousel">
          <div class="carousel-inner h-100">
            <div class="carousel-item active">
              <img src="images/choir.jpg" class="d-block w-100 img-fluid object-fit-cover rounded" alt="Choir Performance">
            </div>
            <div class="carousel-item">
              <img src="images/choir2.jpg" class="d-block w-100 img-fluid object-fit-cover rounded" alt="Choir Performance 2">
            </div>
          </div>
        </div>
      </div>

      <!-- Right Column (Flip Card Music Player) -->
      <div class="col-lg-6">
        <div class="flip-container h-100" id="flipContainer">
          <div class="flipper h-100 position-relative">
            
            <!-- FRONT -->
            <div class="front text-area6 h-100 overflow-auto p-4">
              <h4 class="heading7 mb-4 text-dark">Download and Listen to Songs Here</h4>

              <h5 id="trackTitle" class="text-dark">Now Playing:</h5>

              <audio id="audioPlayer" class="w-100 mt-2" controls>
                <source id="audioSource" src="music/Bill When I Cry.mp3" type="audio/mpeg">
                Your browser does not support the audio element.
              </audio>

              <div class="music-controls mt-4 text-center">
                <button onclick="prevTrack()" class="btn btn-outline-dark btn-lg mx-2">
                  <i class="fa-solid fa-square-caret-left"></i>
                </button>
                <button onclick="playTrack()" class="btn btn-outline-dark btn-lg mx-2" id="playPauseBtn">
                  <i class="fa-solid fa-circle-play" id="playPauseIcon"></i>
                </button>
                <button onclick="nextTrack()" class="btn btn-outline-dark btn-lg mx-2">
                  <i class="fa-solid fa-square-caret-right"></i>
                </button>
              </div>

              <div class="text-center mt-4">
                <button class="btn7" id="viewSongsBtn"><i class="fa-solid fa-eye"></i> View Songs</button>
              </div>
            </div>

            <!-- BACK -->
            <div class="back text-area6 h-100 overflow-auto p-4">
              <h4 class="text-dark mt-2">🎵 Available Songs</h4>
              <div id="trackList" class="track-list"></div>

              <h5 id="trackTitleBack" class="text-dark">Now Playing:</h5>
              <div class="music-controls mt-3 text-center">
                <button onclick="prevTrack()" class="btn btn-outline-dark btn-lg mx-2">
                  <i class="fa-solid fa-square-caret-left"></i>
                </button>
                <button onclick="playTrack()" class="btn btn-outline-dark btn-lg mx-2" id="playPauseBtnBack">
                  <i class="fa-solid fa-circle-play" id="playPauseIconBack"></i>
                </button>
                <button onclick="nextTrack()" class="btn btn-outline-dark btn-lg mx-2">
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

<style>
  .text-area6 {
    background: rgba(0, 0, 0, 0.05);
    padding: 30px;
    border-radius: 15px;
    box-shadow: 0 8px 20px rgba(0,0,0,0.1);
    color: #000;
    height: 100%;
  }

  .btn7 {
    background-color: #000;
    color: #fff;
    border: none;
    padding: 12px 30px;
    border-radius: 5px;
    font-size: 16px;
    margin: 10px;
    transition: background 0.3s ease;
  }
  .btn7:hover {
    background-color: #333;
  }

  .text1 {
    color: #000;
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
    border-bottom: 1px solid rgba(0, 0, 0, 0.1);
    cursor: pointer;
    transition: background 0.2s ease;
    color: #000;
  }
  .track-item:hover {
    background: rgba(0,0,0,0.05);
  }
  .track-item.active {
    font-weight: bold;
    background: rgba(0,0,0,0.1);
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
    border-radius: 15px;
  }
  .fa-circle-play, .fa-circle-pause {
    font-size: 45px;
    color: #000;
  }
  .fa-square-caret-left, .fa-square-caret-right {
    font-size: 35px;
    color: #000;
  }
</style>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
  // Your existing JS code stays the same
</script>
</body>
</html>
