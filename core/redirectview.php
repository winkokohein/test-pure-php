<?php 

function view($page,$data = [])
{
    extract($data);
    require "views/{$page}.view.php";
}

function redirect($page)
{         
    header("Location: /{$page}");
}