<?php
namespace PlatziPHP;

class Post
{
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

    public function __construct(Author $author, $title, $body)
    {
        $this->author = $author;
        $this->title = $title;
        $this->body = $body;
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