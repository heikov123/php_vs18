<?php
function htmlFromFile($fileName){
    $fp = fopen($fileName, 'r');
    $content = fread($fp, filesize($fileName));
    echo $content
    fclose($fp);
    return $content;

}