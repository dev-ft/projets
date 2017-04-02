<?php
require_once 'User.class.php';
require_once 'StringUtils.class.php';

/**
 * Description of ForumPost
 *
 * @author gilles
 */
class ForumPost {

    /**
     * Author of the post
     * @var User 
     */
    private $author;
    private $subject;
    private $contents;
    private $creationDate;
    private $category;

    public function __construct() {
        $this->creationDate = time();
        $this->author = null;
        $this->subject = null;
        $this->contents = null;
        $this->category = null;
    }

    public function getAuthor() {
        return $this->author;
    }

    public function getSubject() {
        return $this->subject;
    }

    public function getContents() {
        return $this->contents;
    }

    public function getCreationDate() {
        return $this->creationDate;
    }

    public function getCategory() {
        return $this->category;
    }

    public function setAuthor(User $author) {
        $this->author = $author;
        return $this;
    }

    public function setSubject($subject) {
        $this->subject = StringUtils::cleanString($subject);
        return $this;
    }

    public function setContents($contents) {
        $this->contents = StringUtils::cleanString($contents);
        return $this;
    }

    public function setCreationDate($timestamp) {
        $this->creationDate = intval($timestamp);
        return $this;
    }

    public function setCategory($category) {
        $this->category = $category;
        return $this;
    }
    
    public function fillWithData($inDBData, User $inAuthor) {
        $this->setAuthor($inAuthor);
        $this->setCategory($inDBData['category']);
        $this->setContents($inDBData['contents']);
        $this->setCreationDate($inDBData['date']);
        $this->setSubject($inDBData['subject']);
        
        return $this;
    }

}
