<?php
session_start();
    // $filename = "../../../../../barcode.txt";
    $filename = "../barcode.txt";
    $handle = fopen($filename, "w+") or die("Unable to open file!");
    $txt = "00000";
    fwrite($handle, $txt);
    fclose($handle);

    $video_url = $_SESSION['video_url'];

    echo"
    <video id='video' width='100%' controls autoplay>
        <source src='$video_url' type='video/mp4'>
    </video>

    <script>
    document.getElementById('video').addEventListener('ended', myHandler, false);

    function myHandler(e){
        status = 0;
        $('#content').load('view/slider.php');
    }
    </script>
    ";
?>
