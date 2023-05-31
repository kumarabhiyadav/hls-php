<?php
function videoConversionForHLS($fileName)
{
    $splittedName = explode('.', $fileName);
    echo $fileName;
    echo $splittedName[0];
    $output = shell_exec("bash convert.sh $fileName $splittedName[0]");
    $json = file_get_contents('videos.json');
    $json_data = json_decode($json, true);
    print_r($json_data);
    array_push($json_data, "$splittedName[0]/master.m3u8");
    print_r($json_data);
    $json = json_encode($json_data);
    file_put_contents("videos.json", $json);
}



?>