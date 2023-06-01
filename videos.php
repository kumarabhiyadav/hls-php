<!DOCTYPE html>
<html>

<head>
    <style>
        .center {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        div.container {
            text-align: center;
        }

        ul.myUL {
            display: inline-block;
            text-align: left;
        }

        .p-1{
            padding: 1rem;
        }
    </style>
</head>

<body>
    <div class="center">
        <h3>All Videos</h3>
    </div>

    <div class="container">
  <ul class="myUL">

        <?php
        $json = file_get_contents('videos.json');
        $json_data = json_decode($json, true);

        foreach ($json_data as $videoLink) {
            $splittedName = explode('/', $videoLink);
            echo "  <li class= \"p-1\"> <a href='video_player.php?id=" . $videoLink . "'>$splittedName[0]</a> </li> ";
        }
        ?>
  </ul>
</div>
</body>

</html>