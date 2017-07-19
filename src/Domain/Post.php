<?php
namespace PlatziPHP\Domain;

class Post
{
    private $id;
    /**
     * @parm Author
     */
    private $author;

    /**
     * @parm string
     */
    private $title;

    /**
     * @parm string
     */
    private $body;

    public function __construct($authorId, $title, $body, $id)
    {
        $this->author = $authorId;
        $this->title = $this;
        $this->body = $body;
        $this->id = $id;
    }

    public static function create(Author $author, $title, $body)
    {
        $post = new Post($author, $title, $body);

        return $post;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getBody()
    {
        return $this->body;
    }

    public function getAuthor()
    {
        return 'by ' . $this->author->getFirstName();
    }
}