<?php 
    $arquivos = glob("{*.apk}", GLOB_BRACE);
    foreach($arquivos as $apk){
        //echo "<button type='button' class='list-group-item'> <a href='$apk'>$apk</a></button><br><br>";
        echo "<script>window.open('$apk');</script>";
    }
?>