<?php
namespace Controllers;


use Core\Controller;

class ErrorController extends Controller
{

    public function error404(){
        echo __CLASS__;
        return;
    }
}