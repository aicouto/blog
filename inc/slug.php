<?php
function slug($text,$set=true){
    if($set){
        return str_replace(' ', '_', $text);
    }else{
        return str_replace('_', ' ', $text);
    }
}
