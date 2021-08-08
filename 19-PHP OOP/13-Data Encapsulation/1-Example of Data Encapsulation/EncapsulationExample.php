<?php

//Model of Post Table from the Database
class Post{
    private $post = "";

    public function setPost($post) : void{
        $this->post = $post;
    }

    public function getPost() : string{
        return $this->post;
    }

}

$post1 = new Post();
$post1->setPost("This is a text posts");
echo $post1->getPost();