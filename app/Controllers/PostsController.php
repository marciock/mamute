<?php
namespace App\Controllers;

class PostsController{

    public function index(){
        echo "posts";
    }
    public function show($id,$request){
        echo $id.'<br>';

        echo $request->get->nome.'<br>';
        echo $request->get->sexo.'<br>';
    }
}