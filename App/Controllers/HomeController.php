<?php
namespace Controllers;

use Core\Controller;
use Core\View;
use Models\Post;

class HomeController extends Controller
{
    public function index(){
        $post = new Post();

        $postData = $post->selectAllPost();

        View::render('home/index.php', ['data' => $postData]);
    }
}