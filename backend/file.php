<?php 
session_start();
    $status;
    // $filename = "../../../../barcode.txt";
    $filename = "barcode.txt";
    $handle = fopen($filename, "r") or die("Unable to open file!");
    $contents = fread($handle, filesize($filename));
    fclose($handle);

    $url = 'assets/json/file.json';
    $json = file_get_contents($url);
    $data = json_decode($json,true);


    foreach($data['Videos'] as $key => $value){
        
        if($value['Barcode'] == $contents){

            $_SESSION['name'] = $value['Name'];
            $_SESSION['author'] = $value['Author'];
            $_SESSION['description'] = $value['Description'];
            $_SESSION['thumbnail'] = $value['Thumbnail'];
            $_SESSION['video_url'] = $value['Video_url'];
            $_SESSION['barcode'] = $value['Barcode'];
            
            echo"
            <script>
                var status = 1;
            </script>
            ";
            break;
        }
        else{
            echo"
            <script>
                var status = 0;
            </script>
            ";
        }
    }

    echo "
    <script>
        $(document).ready(function(){            
            if(status == 1){
                $('#content').load('view/video.php');
            }
            else if(status == 0){
                $('#content').load('view/slider.php');
            }
        });
    </script>
    ";
?>
