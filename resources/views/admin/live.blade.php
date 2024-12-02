<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Youtube Video Player</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
        }
        
        body {
            width: 100vw;
            height: 100vh;
            background: #ffffff;
            font-family: 'Roboto', sans-serif;
        }
        
        .video-container {
            position: relative;
            width: 100%;
            height: 65vh;
            background: #000000;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        
        .video-container video {
            width: 100%;
            height: 100%;
        }
        
        .video-container .controls-container {
            position: absolute;
            bottom: 0;
            /* width: 98vw;  */
            margin: auto;
        }
        
        .video-container .controls-container .progress-controls {
            width: 100%;
            height: 6px;
            display: flex;
            align-items: center;
        }
        
        .video-container .controls-container .progress-controls .progress-bar {
            position: relative;
            width: 100%;
            height: 3.5px;
            background: #424242;
            display: flex;
            align-items: center;
        }
        
        .video-container .controls-container .progress-controls .progress-bar .progress {
            position: absolute;
            left: 0;
            display: flex;
            align-items: center;
            width: 100%;
            height: 100%;
            cursor: pointer;
        }
        
        .video-container .controls-container .progress-controls .progress-bar .progress .watched-progress {
            position: relative;
            display: flex;
            align-items: center;
            width: 100%;
            height: 100%;
            cursor: pointer;
        }
        
        .video-container .controls-container .progress-controls .progress-bar .progress .watched-bar {
            background: #e31221;
            width: 0%;
            height: 100%;
            transition: height 0.2s;
        }
        
        .video-container .controls-container .progress-controls .progress-bar .progress .playhead {
            position: absolute;
            background: #e31221;
            width: 0px;
            height: 0px;
            border-radius: 50%;
            transform: translateX(-50%);
            transition: width 0.2s, height 0.2s;
        }
        
        .video-container .controls-container .progress-controls:hover>.progress-bar {
            height: 5px;
        }
        
        .video-container .controls-container .progress-controls:hover>.progress-bar .progress .playhead {
            width: 15px;
            height: 15px;
        }
        
        .video-container .controls-container .controls {
            position: relative;
            height: 45px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .video-container .controls-container .controls .btn {
            width: 45px;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
            user-select: none;
        }
        
        .video-container .controls-container .controls .left-side-controls {
            display: flex;
            justify-content: flex-start;
            align-items: center;
            height: 100%;
            flex-grow: 2;
        }
        
        [type="range"] {
            margin: 0;
            padding: 0;
            width: 52px;
            height: 1.5em;
            background: transparent;
            outline: none;
        }
        
        [type="range"],
        [type="range"]::-webkit-slider-thumb {
            -webkit-appearance: none;
        }
        
        [type="range"]::-webkit-slider-thumb {
            box-sizing: border-box;
            border: none;
            width: 12px;
            height: 12px;
            border-radius: 50%;
            background: #fff;
        }
        
        [type="range"]::-moz-range-thumb {
            box-sizing: border-box;
            border: none;
            width: 12px;
            height: 12px;
            border-radius: 50%;
            background: #fff;
        }
        
        .video-container .controls-container .controls .left-side-controls .volume-control {
            height: 100%;
            display: flex;
        }
        
        .video-container .controls-container .controls .left-side-controls .volume-control .volume-panel {
            position: relative;
            width: 0px;
            transition: width .2s;
            overflow: hidden;
        }
        
        .video-container .controls-container .controls .left-side-controls .volume-control .volume-panel .input-div {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
            width: 52px;
            height: 3px;
        }
        
        .video-container .controls-container .controls .left-side-controls .volume-control .volume-panel .input-div .volume-input-div {
            position: relative;
            width: 100%;
            height: 100%;
            background: #424242;
        }
        
        .video-container .controls-container .controls .left-side-controls .volume-control .volume-panel .input-div .volume-input-div input {
            position: absolute;
            top: -8.5px;
            cursor: pointer;
        }
        
        .video-container .controls-container .controls .left-side-controls .volume-control .volume-panel .input-div .volume-input-div .volume-progress {
            background: #fff;
            width: 52px;
            height: 100%;
        }
        
        .video-container .controls-container .controls .left-side-controls .time-display {
            color: #ffffff;
            font-size: 13px;
            padding: 0 5px;
            height: 100%;
            display: flex;
            align-items: center;
            pointer-events: none;
            user-select: none;
        }
        
        .video-container .controls-container .controls .right-side-controls {
            display: flex;
            justify-content: flex-end;
            align-items: center;
            height: 100%;
        }
    </style>
</head>

<body>
    <div class="video-container">
        <video>
            <!-- <source src="./large-video.mp4" type="video/mp4" > -->
            <source src="{{asset('videos/Best.mp4')}}" type="video/mp4" >
            <!-- <source src="./small-video.mp4" type="video/mp4" > -->
        </video>

        <div class="controls-container">
            <div class="progress-controls">
                <div class="progress-bar">
                    <div class="progress">
                        <div class="watched-progress">
                            <div class="watched-bar"></div>
                            <div class="playhead"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="controls">
                <div class="left-side-controls">
                    <div class="play-pause-btn btn">
                        <img draggable="false" class="play" src="{{asset('videos/play.svg')}}" alt="" width="20px">
                        <img draggable="false" class="pause" src="{{asset('videos/pause.svg')}}" alt="" width="20px">
                    </div>
                    <div class="next-video-btn btn">
                        <img draggable="false" src="{{asset('videos/next.svg')}}" alt="" width="15px">
                    </div>
                    <div class="volume-control">
                        <div class="volume-btn btn">
                            <img draggable="false" class="full-volume" src="{{asset('videos/volume.svg')}}" alt="" width="20px">
                            <img draggable="false" class="half-volume" src="{{asset('videos/half-volume.svg')}}" alt="" width="20px">
                            <img draggable="false" class="muted" src="{{asset('videos/mute.svg')}}" alt="" width="20px">
                        </div>
                        <div class="volume-panel">
                            <div class="input-div">
                                <div class="volume-input-div">
                                    <input type="range" value="100" step="5">
                                    <div class="volume-progress"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="time-display">
                        <span class="current-time">0:00</span>
                        <span class="time-separator">&nbsp/&nbsp</span>
                        <span class="video-duration">0:00</span>
                    </div>
                </div>

                <div class="right-side-controls">
                    <div class="settings-btn btn">
                        <img draggable="false" src="{{asset('videos/settings.svg')}}" alt="" width="20px">
                    </div>
                    <div class="full-screen-btn btn">
                        <img draggable="false" class="maximize" src="{{asset('videos/maximize-screen.svg')}}" alt="" width="18px">
                        <img draggable="false" class="minimize" src="{{asset('videos/minimize-screen.svg')}}" alt="" width="20px">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <button onclick="setVideoTime('00:00:10', '00:00:20')">00:00:10 - 00:00:20</button><br>
    <button onclick="setVideoTime('00:00:15', '00:00:25')">00:00:15 - 00:00:25</button><br>
    <button onclick="setVideoTime('00:00:20', '00:00:32')">00:00:20 - 00:00:32</button><br>
    <button onclick="setVideoTime('00:01:10', '00:02:20')">00:01:10 - 00:02:20</button><br>
    <button onclick="setVideoTime('00:02:15', '00:03:25')">00:02:15 - 00:03:25</button><br>
    <button onclick="setVideoTime('00:04:20', '00:05:00')">00:04:20 - 00:05:00</button><br>


    <script>
        const videoContainer = document.querySelector('.video-container');
        const video = document.querySelector('.video-container video');

        const controlsContainer = document.querySelector('.controls-container');
        const leftSideControls = document.querySelector('.left-side-controls');

        const volumeControl = document.querySelector('.volume-control');
        const volumePanel = document.querySelector('.volume-panel');
        const volumeRange = volumePanel.querySelector('input');
        const volumeProgress = volumePanel.querySelector('.volume-progress');

        const playPauseButton = document.querySelector('.play-pause-btn');
        const volumeButton = document.querySelector('.volume-btn');
        const fullScreenButton = document.querySelector('.full-screen-btn');
        const playButton = playPauseButton.querySelector('.play');
        const pauseButton = playPauseButton.querySelector('.pause');
        const fullVolumeButton = volumeButton.querySelector('.full-volume');
        const halfVolumeButton = volumeButton.querySelector('.half-volume');
        const mutedButton = volumeButton.querySelector('.muted');
        const maximizeButton = fullScreenButton.querySelector('.maximize');
        const minimizeButton = fullScreenButton.querySelector('.minimize');

        const progressBar = document.querySelector('.progress-bar');
        const watchedBar = document.querySelector('.watched-bar');
        const playHead = document.querySelector('.playhead');

        const current_time = document.querySelector('.current-time');
        const video_duration = document.querySelector('.video-duration');

        pauseButton.style.display = 'none';
        halfVolumeButton.style.display = 'none';
        mutedButton.style.display = 'none';
        minimizeButton.style.display = 'none';

        window.onresize = function() {
            var width = window.innerWidth - 30;
            controlsContainer.style.width = width + 'px';
        }

        document.addEventListener('DOMContentLoaded', function() {
            var width = window.innerWidth - 30;
            controlsContainer.style.width = width + 'px';
        });

        function setVideoTime(startTime, endTime) {
            const video = document.querySelector('.video-container video');
            video.currentTime = convertTimeToSeconds(startTime);
            video.play();
            setTimeout(function() {
                video.pause();
            }, convertTimeToSeconds(endTime) * 1000 - convertTimeToSeconds(startTime) * 1000); // Convert seconds to milliseconds
        }

        // Function to convert time in format hh:mm:ss to seconds
        function convertTimeToSeconds(time) {
            const parts = time.split(':');
            return parseInt(parts[0]) * 3600 + parseInt(parts[1]) * 60 + parseInt(parts[2]);
        }

        const playPause = () => {
            if (video.paused) {
                video.play();
                playButton.style.display = 'none';
                pauseButton.style.display = '';
            } else {
                video.pause();
                playButton.style.display = '';
                pauseButton.style.display = 'none';
            }
        };

        const toggleMute = () => {
            video.muted = !video.muted;
            if (video.muted) {
                fullVolumeButton.style.display = 'none';
                halfVolumeButton.style.display = 'none';
                mutedButton.style.display = '';
                volumeRange.value = '0';
            } else {
                volumeRange.value = video.volume * 100;

                if (video.volume <= 0.5) {
                    fullVolumeButton.style.display = 'none';
                    halfVolumeButton.style.display = '';
                    mutedButton.style.display = 'none';
                } else if (video.volume > 0.5) {
                    fullVolumeButton.style.display = '';
                    halfVolumeButton.style.display = 'none';
                    mutedButton.style.display = 'none';
                }
            }
        };

        const toggleFullScreen = () => {
            if (!document.fullscreenElement) {
                videoContainer.requestFullscreen();
            } else {
                document.exitFullscreen();
            }
        }

        document.addEventListener('fullscreenchange', function() {
            if (!document.fullscreenElement) {
                maximizeButton.style.display = '';
                minimizeButton.style.display = 'none';
            } else {
                maximizeButton.style.display = 'none';
                minimizeButton.style.display = '';
            }
        });

        video.addEventListener('timeupdate', function() {
            var watched = 100 / video.duration * video.currentTime;
            watchedBar.style.width = watched + '%';
            playHead.style.left = watched + '%';

            // current time
            var currentHours = Math.floor(video.currentTime / 3600);
            var currentMinutes = Math.floor(video.currentTime / 60 % 60);
            var currentSeconds = Math.floor(video.currentTime % 60);
            if ((video.currentTime >= 600) && (currentMinutes < 10)) {
                currentMinutes = '0' + currentMinutes;
            }
            current_time.textContent = `${currentHours ? currentHours+':' : ''}${currentMinutes}:${currentSeconds >= 10 ? currentSeconds : '0'+currentSeconds}`;

            if (video.ended) {
                playButton.style.display = '';
                pauseButton.style.display = 'none';
            }
        });

        // video duration
        var i = setInterval(function() {
            if (video.readyState > 0) {
                var hours = Math.floor(video.duration / 3600);
                var minutes = Math.floor(video.duration / 60 % 60);
                var seconds = Math.floor(video.duration % 60);
                if ((video.duration >= 600) && (minutes < 10)) {
                    minutes = '0' + minutes;
                }
                video_duration.textContent = `${hours ? hours+':' : ''}${minutes}:${seconds >= 10 ? seconds : '0'+seconds}`;
                clearInterval(i);
            }
        });

        progressBar.addEventListener('mousedown', function(event) {
            const pos = (event.pageX - (progressBar.offsetLeft + progressBar.offsetParent.offsetLeft)) / progressBar.offsetWidth;
            video.currentTime = pos * video.duration;
        });


        video.addEventListener('click', playPause);

        video.addEventListener('dblclick', toggleFullScreen);

        playPauseButton.addEventListener('click', playPause);

        volumeButton.addEventListener('click', toggleMute);

        fullScreenButton.addEventListener('click', toggleFullScreen);

        volumeRange.addEventListener('input', function(e) {
            volumeProgress.style.width = volumeRange.value + '%';

            video.volume = volumeRange.value / 100;

            if (volumeRange.value <= 0) {
                fullVolumeButton.style.display = 'none';
                halfVolumeButton.style.display = 'none';
                mutedButton.style.display = '';
            } else if (volumeRange.value <= 50) {
                video.muted = false;
                fullVolumeButton.style.display = 'none';
                halfVolumeButton.style.display = '';
                mutedButton.style.display = 'none';
            } else if (volumeRange.value > 50) {
                video.muted = false;
                fullVolumeButton.style.display = '';
                halfVolumeButton.style.display = 'none';
                mutedButton.style.display = 'none';
            }
        }, false);

        volumeButton.addEventListener('mouseenter', function() {
            volumeControl.style.margin = '0px 2px 0px 0px';
            volumePanel.style.width = '52px';
        });

        leftSideControls.addEventListener('mouseleave', function() {
            volumeControl.style.margin = '0px 0px 0px 0px';
            volumePanel.style.width = '0px';
        });

        setInterval(function() {
            volumeProgress.style.width = volumeRange.value + '%';
        }, 1);
    </script>
</body>

</html>