<?php
function view($filename, $data =[]){

    extract($data);
    return require "views/{$filename}.view.php";
}