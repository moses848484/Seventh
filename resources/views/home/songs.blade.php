<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spotify-Style Music Player</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Circular+Std:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Circular Std', -apple-system, BlinkMacSystemFont, sans-serif;
            background: #ffffff;
            min-height: 100vh;
            overflow-x: hidden;
        }

        .spotify-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 2rem;
            min-height: 100vh;
            display: flex;
            align-items: center;
        }

        .player-wrapper {
            width: 100%;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 3rem;
            align-items: stretch;
        }

        /* Album Art Section */
        .album-section {
            position: relative;
            border-radius: 24px;
            overflow: hidden;
            background: #f8f9fa;
            box-shadow: 0 25px 50px rgba(0,0,0,0.1);
            border: 1px solid #e0e0e0;
        }

        .album-art {
            width: 100%;
            aspect-ratio: 1;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .album-art:hover {
            transform: scale(1.05);
        }

        .album-overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: linear-gradient(transparent, rgba(0,0,0,0.9));
            padding: 2rem;
            color: white;
        }

        .album-title {
            font-size: 1.5rem;
            font-weight: 700;
            margin-bottom: 0.5rem;
        }

        .album-artist {
            font-size: 1rem;
            opacity: 0.8;
        }

        /* Player Section */
        .player-section {
            background: #ffffff;
            border-radius: 24px;
            padding: 2.5rem;
            box-shadow: 0 25px 50px rgba(0,0,0,0.1);
            border: 1px solid #e0e0e0;
            position: relative;
            overflow: hidden;
        }

        .player-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 3px;
            background: linear-gradient(90deg, #1db954, #1ed760);
        }

        .flip-container {
            height: 100%;
            perspective: 1000px;
        }

        .flipper {
            position: relative;
            width: 100%;
            height: 100%;
            transition: transform 0.8s cubic-bezier(0.4, 0, 0.2, 1);
            transform-style: preserve-3d;
        }

        .flip-container.flip .flipper {
            transform: rotateY(180deg);
        }

        .front, .back {
            position: absolute;
            width: 100%;
            height: 100%;
            backface-visibility: hidden;
            display: flex;
            flex-direction: column;
        }

        .back {
            transform: rotateY(180deg);
        }

        /* Header */
        .player-header {
            text-align: center;
            margin-bottom: 2rem;
        }

        .player-title {
            color: #1db954;
            font-size: 1.5rem;
            font-weight: 700;
            margin-bottom: 1rem;
        }

        .action-buttons {
            display: flex;
            gap: 1rem;
            justify-content: center;
            flex-wrap: wrap;
        }

        .spotify-btn {
            background: linear-gradient(135deg, #1db954, #1ed760);
            color: white;
            border: none;
            padding: 12px 24px;
            border-radius: 50px;
            font-weight: 600;
            font-size: 14px;
            cursor: pointer;
            transition: all 0.3s ease;
            text-transform: uppercase;
            letter-spacing: 1px;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .spotify-btn:hover {
            background: linear-gradient(135deg, #1ed760, #21e065);
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(29, 185, 84, 0.4);
        }

        .spotify-btn.secondary {
            background: #f8f9fa;
            color: #333333;
            border: 1px solid #e0e0e0;
        }

        .spotify-btn.secondary:hover {
            background: #e8f5e8;
            border-color: #1db954;
            color: #1db954;
            box-shadow: 0 10px 25px rgba(29, 185, 84, 0.2);
        }

        /* Now Playing */
        .now-playing {
            text-align: center;
            margin: 2rem 0;
        }

        .track-info {
            color: #333333;
            font-size: 1.2rem;
            font-weight: 600;
            margin-bottom: 0.5rem;
        }

        .track-title {
            color: #1db954;
            font-size: 1rem;
            opacity: 0.9;
        }

        /* Audio Player */
        .audio-wrapper {
            margin: 1.5rem 0;
        }

        #audioPlayer {
            width: 100%;
            height: 50px;
            border-radius: 25px;
            outline: none;
        }

        #audioPlayer::-webkit-media-controls-panel {
            background: linear-gradient(135deg, rgba(29, 185, 84, 0.2), rgba(30, 215, 96, 0.2));
            border-radius: 25px;
        }

        /* Controls */
        .music-controls {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 1.5rem;
            margin: 1rem 0;
        }

        .control-btn {
            background: #f8f9fa;
            border: 1px solid #e0e0e0;
            color: #666666;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            cursor: pointer;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .control-btn:hover {
            background: #e8f5e8;
            border-color: #1db954;
            color: #1db954;
            transform: scale(1.1);
        }

        .control-btn.play-pause {
            background: linear-gradient(135deg, #1db954, #1ed760);
            width: 60px;
            height: 60px;
            font-size: 1.5rem;
        }

        .control-btn.play-pause:hover {
            background: linear-gradient(135deg, #1ed760, #21e065);
            box-shadow: 0 10px 25px rgba(29, 185, 84, 0.4);
        }

        /* Track List */
        .track-list-header {
            color: #333333;
            font-size: 1.5rem;
            font-weight: 700;
            margin-bottom: 1.5rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .track-list {
            flex: 1;
            overflow-y: auto;
            margin-bottom: 2rem;
            max-height: 400px;
            min-height: 300px;
        }

        .track-item {
            display: flex;
            align-items: center;
            padding: 1rem;
            margin-bottom: 0.5rem;
            background: #f8f9fa;
            border-radius: 12px;
            cursor: pointer;
            transition: all 0.3s ease;
            border-left: 3px solid transparent;
            border: 1px solid #e0e0e0;
        }

        .track-item:hover {
            background: #e8f5e8;
            transform: translateX(5px);
            border-color: #c8e6c9;
        }

        .track-item.active {
            background: #e8f5e8;
            border-left-color: #1db954;
            border-color: #1db954;
        }

        .track-info-wrapper {
            flex: 1;
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .track-number {
            color: #666666;
            font-weight: 600;
            min-width: 20px;
        }

        .track-item.active .track-number {
            color: #1db954;
        }

        .track-title-text {
            color: #333333;
            font-weight: 500;
        }

        .track-item.active .track-title-text {
            color: #1db954;
            font-weight: 600;
        }

        .track-icon {
            color: #666666;
            margin-left: auto;
            margin-right: 1rem;
        }

        .track-item.active .track-icon {
            color: #1db954;
        }

        .download-button {
            background: #f8f9fa;
            color: #666666;
            border: 1px solid #e0e0e0;
            padding: 8px 12px;
            border-radius: 20px;
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
            display: flex;
            align-items: center;
        }

        .download-button:hover {
            background: #1db954;
            color: white;
            transform: scale(1.05);
        }

        /* Swipe Indicators */
        .swipe-indicator {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            font-size: 2rem;
            color: rgba(29, 185, 84, 0.6);
            opacity: 0;
            transition: all 0.3s ease;
            pointer-events: none;
            z-index: 10;
            background: rgba(0,0,0,0.5);
            border-radius: 50%;
            width: 60px;
            height: 60px;
            display: flex;
            align-items: center;
            justify-content: center;
            backdrop-filter: blur(10px);
        }

        .swipe-indicator.left {
            left: 20px;
        }

        .swipe-indicator.right {
            right: 20px;
        }

        /* Progress Bar */
        .progress-container {
            width: 100%;
            height: 4px;
            background: #e0e0e0;
            border-radius: 2px;
            margin: 1rem 0;
            overflow: hidden;
        }

        .progress-bar {
            height: 100%;
            background: linear-gradient(90deg, #1db954, #1ed760);
            width: 0%;
            transition: width 0.1s ease;
            border-radius: 2px;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .player-wrapper {
                grid-template-columns: 1fr;
                gap: 2rem;
            }

            .spotify-container {
                padding: 1rem;
            }

            .player-section {
                padding: 1.5rem;
            }

            .action-buttons {
                flex-direction: column;
                align-items: center;
            }

            .spotify-btn {
                min-width: 200px;
                justify-content: center;
            }
        }

        /* Scrollbar Styling */
        .track-list::-webkit-scrollbar {
            width: 8px;
        }

        .track-list::-webkit-scrollbar-track {
            background: #f0f0f0;
            border-radius: 4px;
        }

        .track-list::-webkit-scrollbar-thumb {
            background: linear-gradient(135deg, #1db954, #1ed760);
            border-radius: 4px;
        }

        .track-list::-webkit-scrollbar-thumb:hover {
            background: linear-gradient(135deg, #1ed760, #21e065);
        }

        /* Animation for active track */
        @keyframes pulse {
            0%, 100% { opacity: 1; }
            50% { opacity: 0.6; }
        }

        .track-item.active .track-icon {
            animation: pulse 2s infinite;
        }
    </style>
</head>
<body>
    <div class="spotify-container">
        <div class="player-wrapper">
            
            <!-- Album Art Section -->
            <div class="album-section">
                <img src="https://images.unsplash.com/photo-1493225457124-a3eb161ffa5f?w=600&h=600&fit=crop" alt="Album Art" class="album-art" id="albumArt">
                <div class="album-overlay">
                    <div class="album-title" id="albumTitle">Gospel Collection</div>
                    <div class="album-artist" id="albumArtist">Various Artists</div>
                </div>
            </div>

            <!-- Player Section -->
            <div class="player-section">
                <div class="flip-container" id="flipContainer">
                    <div class="flipper">
                        
                        <!-- FRONT: Main Player -->
                        <div class="front">
                            <div class="player-header">
                                <h2 class="player-title">🎵 Music Player</h2>
                                <div class="action-buttons">
                                    <button class="spotify-btn" onclick="playTrack()">
                                        <i class="fa-solid fa-play"></i>
                                        Listen Now
                                    </button>
                                    <button class="spotify-btn secondary" id="viewSongsBtn">
                                        <i class="fa-solid fa-list"></i>
                                        View Songs
                                    </button>
                                </div>
                            </div>

                            <div class="now-playing">
                                <div class="track-info" id="trackTitle">Now Playing:</div>
                                <div class="track-title" id="currentTrackName">Select a track</div>
                            </div>

                            <div class="audio-wrapper">
                                <audio id="audioPlayer" controls>
                                    <source id="audioSource" src="" type="audio/mpeg">
                                    Your browser does not support the audio element.
                                </audio>
                            </div>

                            <div class="progress-container">
                                <div class="progress-bar" id="progressBar"></div>
                            </div>

                            <div class="music-controls">
                                <button onclick="prevTrack()" class="control-btn">
                                    <i class="fa-solid fa-backward-step"></i>
                                </button>
                                <button onclick="playTrack()" class="control-btn play-pause" id="playPauseBtn">
                                    <i class="fa-solid fa-play" id="playPauseIcon"></i>
                                </button>
                                <button onclick="nextTrack()" class="control-btn">
                                    <i class="fa-solid fa-forward-step"></i>
                                </button>
                            </div>

                            <!-- Swipe indicators -->
                            <div class="swipe-indicator left" id="swipeLeft">
                                <i class="fa-solid fa-chevron-left"></i>
                            </div>
                            <div class="swipe-indicator right" id="swipeRight">
                                <i class="fa-solid fa-chevron-right"></i>
                            </div>
                        </div>

                        <!-- BACK: Song List -->
                        <div class="back">
                            <div class="track-list-header">
                                <i class="fa-solid fa-music"></i>
                                Available Songs
                            </div>
                            
                            <div class="track-list" id="trackList"></div>

                            <div class="now-playing">
                                <div class="track-info" id="trackTitleBack">Now Playing:</div>
                                <div class="track-title" id="currentTrackNameBack">Select a track</div>
                            </div>

                            <div class="music-controls">
                                <button onclick="prevTrack()" class="control-btn">
                                    <i class="fa-solid fa-backward-step"></i>
                                </button>
                                <button onclick="playTrack()" class="control-btn play-pause" id="playPauseBtnBack">
                                    <i class="fa-solid fa-play" id="playPauseIconBack"></i>
                                </button>
                                <button onclick="nextTrack()" class="control-btn">
                                    <i class="fa-solid fa-forward-step"></i>
                                </button>
                            </div>

                            <div class="action-buttons" style="margin-top: 2rem;">
                                <button class="spotify-btn secondary" id="backBtn">
                                    <i class="fa-solid fa-arrow-left"></i>
                                    Back to Player
                                </button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>

    <script>
        // Sample tracks - replace with actual file paths
        const tracks = [
            { 
                title: "I'm Not Gonna Worry", 
                file: "{{ asset('music/Gaither Vocal Band - Im Not Gonna Worry [Live] ft. Gaither Vocal Band.mp3') }}",
                artist: "Gaither Vocal Band",
                album: "Gospel Classics",
                cover: "https://images.unsplash.com/photo-1493225457124-a3eb161ffa5f?w=600&h=600&fit=crop"
            },
            { 
                title: "When I Cry", 
                file: "{{ asset('music/Bill When I Cry.mp3') }}",
                artist: "Bill Gaither",
                album: "Inspirational Songs",
                cover: "https://images.unsplash.com/photo-1516280440614-37939bbacd81?w=600&h=600&fit=crop"
            },
            { 
                title: "When The Time Comes", 
                file: "{{ asset('music/Heritage Singers - When The Time Comes.mp3') }}",
                artist: "Heritage Singers",
                album: "Hymns of Faith",
                cover: "https://images.unsplash.com/photo-1571974599782-87624638275c?w=600&h=600&fit=crop"
            },

                     { 
                title: "It takes your everything to serve the Lord with Lyrics", 
                file: "{{ asset('music/It takes your everything to serve the Lord with - Heritage Singers.mp3') }}",
                artist: "Heritage Singers - Duane Hamilton",
                album: "Hymns of Faith",
                cover: "https://images.unsplash.com/photo-1571974599782-87624638275c?w=600&h=600&fit=crop"
            },

                 { 
                title: "Little Flowers", 
                file: "{{ asset('music/Heritage Singers - Little Flowers.mp3') }}",
                artist: "Heritage Singers",
                album: "Hymns of Faith",
                cover: "https://images.unsplash.com/photo-1571974599782-87624638275c?w=600&h=600&fit=crop"
            }
        ];

        let currentTrack = 0;
        const audio = document.getElementById('audioPlayer');
        const source = document.getElementById('audioSource');
        const trackTitle = document.getElementById('trackTitle');
        const trackTitleBack = document.getElementById('trackTitleBack');
        const currentTrackName = document.getElementById('currentTrackName');
        const currentTrackNameBack = document.getElementById('currentTrackNameBack');
        const playPauseIcon = document.getElementById('playPauseIcon');
        const playPauseIconBack = document.getElementById('playPauseIconBack');
        const flipContainer = document.getElementById('flipContainer');
        const frontContainer = document.querySelector('.front');
        const trackList = document.getElementById('trackList');
        const swipeLeft = document.getElementById('swipeLeft');
        const swipeRight = document.getElementById('swipeRight');
        const progressBar = document.getElementById('progressBar');
        const albumArt = document.getElementById('albumArt');
        const albumTitle = document.getElementById('albumTitle');
        const albumArtist = document.getElementById('albumArtist');

        let touchStartX = 0, touchStartY = 0, touchEndX = 0, touchEndY = 0, swipeStartTime = 0;

        // Load track
        function loadTrack(index) {
            currentTrack = index;
            const track = tracks[index];
            source.src = track.file;
            audio.load();
            
            trackTitle.textContent = "Now Playing:";
            trackTitleBack.textContent = "Now Playing:";
            currentTrackName.textContent = track.title;
            currentTrackNameBack.textContent = track.title;
            
            // Update album art
            albumArt.src = track.cover;
            albumTitle.textContent = track.album;
            albumArtist.textContent = track.artist;
            
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

        // Display song list
        function displayAvailableTracks() {
            trackList.innerHTML = '';
            tracks.forEach((track, index) => {
                const trackDiv = document.createElement('div');
                trackDiv.className = 'track-item';
                if (index === currentTrack) trackDiv.classList.add('active');

                trackDiv.innerHTML = `
                    <div class="track-info-wrapper">
                        <div class="track-number">${(index + 1).toString().padStart(2, '0')}</div>
                        <div>
                            <div class="track-title-text">${track.title}</div>
                            <div style="color: #666666; font-size: 0.9rem;">${track.artist}</div>
                        </div>
                        <i class="track-icon ${index === currentTrack && !audio.paused ? 'fa fa-pause' : 'fa fa-play'}"></i>
                    </div>
                    <a href="${track.file}" download class="download-button">
                        <i class="fa-solid fa-download"></i>
                    </a>
                `;

                trackDiv.onclick = (e) => {
                    if (!e.target.closest('.download-button')) {
                        if (index === currentTrack) {
                            playTrack();
                        } else {
                            loadTrack(index);
                            audio.play();
                            updatePlayIcon(true);
                        }
                    }
                };

                trackList.appendChild(trackDiv);
            });
        }

        // Progress bar update
        function updateProgress() {
            if (audio.duration) {
                const progress = (audio.currentTime / audio.duration) * 100;
                progressBar.style.width = progress + '%';
            }
        }

        // Flip buttons
        document.getElementById("viewSongsBtn").addEventListener("click", () => {
            flipContainer.classList.add("flip");
            displayAvailableTracks();
        });

        document.getElementById("backBtn").addEventListener("click", () => {
            flipContainer.classList.remove("flip");
        });

        // Swipe gestures for flip
        flipContainer.addEventListener('touchstart', e => {
            touchStartX = e.changedTouches[0].screenX;
            touchStartY = e.changedTouches[0].screenY;
        }, false);

        flipContainer.addEventListener('touchend', e => {
            touchEndX = e.changedTouches[0].screenX;
            touchEndY = e.changedTouches[0].screenY;
            const deltaX = touchEndX - touchStartX;
            const deltaY = touchEndY - touchStartY;
            
            if (Math.abs(deltaX) > Math.abs(deltaY) && Math.abs(deltaX) > 50) {
                if (deltaX < 0) {
                    flipContainer.classList.add('flip');
                } else {
                    flipContainer.classList.remove('flip');
                }
            }
        }, false);

        // Prevent flip when interacting with track list
        trackList.addEventListener('touchstart', e => e.stopPropagation(), false);
        trackList.addEventListener('touchmove', e => e.stopPropagation(), false);
        trackList.addEventListener('touchend', e => e.stopPropagation(), false);

        // Track skip swipe
        frontContainer.addEventListener('touchstart', e => {
            touchStartX = e.changedTouches[0].screenX;
            swipeStartTime = Date.now();
        }, false);

        frontContainer.addEventListener('touchend', e => {
            const swipeEndX = e.changedTouches[0].screenX;
            const swipeEndTime = Date.now();
            handleFrontSwipe(swipeEndX - touchStartX, swipeEndTime - swipeStartTime);
        }, false);

        function handleFrontSwipe(distance, duration) {
            if (Math.abs(distance) > 50) {
                const velocity = Math.min(Math.abs(distance / duration), 2);
                const slideAmount = 15 + 20 * velocity;
                const opacity = 0.3 + 0.7 * velocity / 2;

                if (distance < 0) { // Swipe left - next track
                    swipeRight.style.transform = `translateY(-50%) translateX(${slideAmount}px)`;
                    swipeRight.style.opacity = opacity;
                    nextTrack();
                } else { // Swipe right - previous track
                    swipeLeft.style.transform = `translateY(-50%) translateX(-${slideAmount}px)`;
                    swipeLeft.style.opacity = opacity;
                    prevTrack();
                }

                setTimeout(() => {
                    swipeLeft.style.transform = 'translateY(-50%) translateX(0)';
                    swipeRight.style.transform = 'translateY(-50%) translateX(0)';
                    swipeLeft.style.opacity = 0;
                    swipeRight.style.opacity = 0;
                }, 500);
            }
        }

        // Event listeners
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
        audio.addEventListener('timeupdate', updateProgress);
    </script>
</body>
</html>