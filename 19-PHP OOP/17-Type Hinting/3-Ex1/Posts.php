<?php

declare(strict_types=1);

//Type Hinting promotes Good Practise
//You can control the type hinting with strict_types
//Make sure your team follows a standard input and outputs.
class Posts
{

    private $post = "";

    /**
     * @return string
     */
    public function getPost(): string
    {
        return $this->post;
    }

    /**
     * @param string $post
     */
    public function setPost(string $post): void
    {
        $this->post = $post;
    }

    public function savePost() : bool{
        $flag = false;
        echo "Saving Posts in Database" . PHP_EOL;
        $flag = true;
        return $flag;
    }

    public function fetchPost(int $id): array{
        $posts = [];
        echo "Retrieve all the posts" . PHP_EOL;
        $posts = [ 1, "This is a post",
                   2, "Type hinting is good practise"
                 ];
        return $posts;
    }
}

