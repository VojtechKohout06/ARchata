<?php
$model = "default";
$fileArray = [];

echo('<!DOCTYPE html>
<html>
  <script src="https://aframe.io/releases/1.3.0/aframe.min.js"></script>
  <!-- we import arjs version without NFT but with marker + location based support -->
  <script src="https://raw.githack.com/AR-js-org/AR.js/master/aframe/build/aframe-ar.js"></script>
  <body style="margin : 0px; overflow: hidden;">');
    
    if (isset($_GET['model'])){
        $model = $_GET['model'];
    }else{
        if (is_dir('markers')) {
            $files = scandir("markers");
            
            // Filter out '.' and '..' and substring name from suffix
            // toDo: substring name from suffix
            foreach ($files as $file) {
                if ($file !== '.' && $file !== '..') {
                    $file = substr($file, 0, strlen($file) - 5);
                    $fileArray[] = $file;
                }
            }
        }
        var_dump($fileArray);
    }
    
      echo('
  </body>
</html>');