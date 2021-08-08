<?php


class Posts
{
    public $postContent;
    public $postID;

    function addPost($data) : bool {
        //Write Logic to Add the Posts to Database or File
    }

    function updatePost($id, $data) : bool {
        ////Write Logic to Update the Posts to Database or File
    }

    function deletePost($id) : bool {
        //Delete Posts
    }

    function fetchPost($id) : string {
        //Fetch Posts
    }
}

