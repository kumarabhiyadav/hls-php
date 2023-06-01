<!DOCTYPE html>
<html>

<head>
    <meta charset=utf-8 />
    <title>Videos</title>


    <link href="https://unpkg.com/video.js/dist/video-js.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/video.js/7.21.1/video.min.js"></script>
    <script src="https://unpkg.com/browse/@videojs/http-streaming@2.6.0/dist/videojs-http-streaming.min.js"></script>

</head>

<body>



    <?php
    $json = file_get_contents('videos.json');
    $json_data = json_decode($json, true);
    
    foreach ($json_data as $videoLink) {
  
        echo "
        <div style=\"height:200px; width:400px\">
        <video id=\"my_video_1\" class=\"video-js vjs-fluid vjs-default-skin\" controls preload=\"auto\" data-setup='{}'>
            <source src=\"$videoLink\" type=\"application/x-mpegURL\">
        </video>

    </div>
        ";

    }

    ?>


  
    
    <script>
        var player = new videojs('my_video_1');
        player.play();
    </script>

</body>

</html>