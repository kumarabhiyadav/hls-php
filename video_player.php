<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Video.js + hls.js</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- https://getbootstrap.com -->
    <link href="https://vjs.zencdn.net/5.19.2/video-js.css" rel="stylesheet"><!-- https://videojs.com -->
    <style type="text/css">
        .video-js {
            font-size: 1rem;
        }
    </style>
</head>

<body class="bg-light">
    <div class="container">
        <div class="my-5 embed-responsive embed-responsive-16by9">
            <video id="video" class="embed-responsive-item video-js vjs-default-skin" width="640" height="360" autoplay
                controls></video>
        </div>

    </div>
    <script src="https://vjs.zencdn.net/5.19.2/video.js"></script><!-- https://videojs.com -->
    <script src="js/hls.min.js?v=v0.9.1"></script><!-- https://github.com/video-dev/hls.js -->
    <script src="js/videojs5-hlsjs-source-handler.min.js?v=0.3.1"></script>
    <!-- https://github.com/streamroot/videojs-hlsjs-plugin -->
    <script src="js/vjs-quality-picker.js?v=v0.0.2"></script>
    <!-- https://github.com/streamroot/videojs-quality-picker -->
    <script>

        const queryString = window.location.search;
        console.log(queryString);
        const urlParams = new URLSearchParams(queryString);

        var player = videojs('video');

        player.qualityPickerPlugin();

        player.src({
            src: urlParams.get('id'),
            type: 'application/x-mpegURL'
        });

        player.play();
    </script>
</body>

</html>