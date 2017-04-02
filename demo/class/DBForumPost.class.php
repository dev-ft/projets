<?php

require_once 'DBTool.class.php';
require_once 'DBUserManager.class.php';
require_once 'User.class.php';
require_once 'ForumPost.class.php';

/**
 * Manage storage of some forum post
 */
class DBForumPost extends DBTool {

    public function __construct() {
        parent::__construct();
    }

    /**
     * Add a post to a database
     * @param ForumPost $inPost
     */
    public function addPost(ForumPost $inPost) {
        // TODO: Test insert in table
        $uManager = new DBUserManager();
        $auhtorId = $uManager->getAuthorId($inPost->getAuthor());
        if ($auhtorId) {
            $query = 'INSERT INTO post (author_id, subject, contents, date, category) VALUES (';
            $query .= $this->dbHandle->quote($auhtorId) . ',';
            $query .= $this->dbHandle->quote($inPost->getSubject()) . ',';
            $query .= $this->dbHandle->quote($inPost->getContents()) . ',';
            $query .= $this->dbHandle->quote($inPost->getCreationDate()) . ',';
            $query .= $this->dbHandle->quote($inPost->getCategory());
            $query .= ')';

            try {
                error_log(__FUNCTION__.' '.$query);
                $this->dbHandle->exec($query);
            } catch (Exception $exc) {
                echo $exc->getTraceAsString();
            }
        }
    }

    /**
     * Delete the post object
     * @param ForumPost $inPost
     */
    public function deletePost(ForumPost $inPost) {
        // TODO: Write DELETE in table
    }

    /**
     * Delete the post with the gven id
     * @param type $inPostID
     */
    public function deletePostID($inPostID) {
        // TODO: Write DELETE in table
    }

    /**
     * Return an array of ForumPost for the given day
     * @param type $inTimeStamp
     * @return \ForumPost
     */
    public function getPostsOnDay($inTimeStamp) {
        $start = mktime(0, 0, 0, date("m", $inTimeStamp), date("d", $inTimeStamp), date("Y", $inTimeStamp));
        $end = $start + (3600 * 24);

        $query = 'SELECT * FROM post WHERE date>=' . $start . ' AND date<=' . $end . ' ORDER BY date ASC';
        try {
            $statement = $this->dbHandle->query($query);
            $data = $statement->fetchAll();

            $toReturn = array();
            foreach ($data as $rawPost) {
                $author = $this->getUserFromId($rawPost['author_id']);
                $post = new ForumPost();
                $post->fillWithData($rawPost, $author);
                $toReturn[] = $post;
            }

            return $toReturn;
        } catch (Exception $exc) {
            // TODO: handle errors correctly
            echo $exc->getTraceAsString();
        }
        return null;
    }

    /**
     * Retrieve the user object given the user id.
     * @param integer $inUserID
     * @return User Null if error or not found
     */
    private function getUserFromId($inUserID) {

        $query = 'SELECT * FROM user WHERE id=' . $inUserID;

        try {
            $statement = $this->dbHandle->query($query);
            $data = $statement->fetchAll();

            if (isset($data) && count($data)) {
                $usr = new User();
                return $usr->fillWithDb($data[0]);
            }
        } catch (Exception $exc) {
            // TODO: handle errors correctly
            echo $exc->getTraceAsString();
        }
        return null;
    }

}
