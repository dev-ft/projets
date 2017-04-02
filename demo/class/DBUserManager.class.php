<?php

require_once 'DBTool.class.php';
require_once 'User.class.php';

/**
 * Manage storage of User class in Database
 */
class DBUserManager extends DBTool {

    private $defaultSessionTime;

    public function __construct($defaultConnectionTime = 3600) {
        parent::__construct();
        $this->defaultSessionTime = $defaultConnectionTime;
    }

    /**
     * Add a new user to Database
     * @param \User $inUser
     */
    public function addUser(User $inUser) {
        // TODO: Create real request
        $query = 'INSERT INTO user (first_name, last_name, mail, passwd) VALUES (';
        $query .= $this->dbHandle->quote($inUser->getFName()) . ',';
        $query .= $this->dbHandle->quote($inUser->getLName()) . ',';
        $query .= $this->dbHandle->quote($inUser->getMail()) . ',';
        $query .= $this->dbHandle->quote($inUser->getPasswd());
        $query .= ')';

        // Do not try catch, just throw the error
        $this->dbHandle->exec($query);
    }

    /**
     * Delete a User from database.
     * @param \User $inUser
     */
    public function deleteUser(User $inUser) {
        // TODO: Create real request
        $query = 'DELETE FROM user WHERE';
        $query .= ' `first_name`==' . $this->dbHandle->quote($inUser->getFName()) . ' AND';
        $query .= ' `last_name`==' . $this->dbHandle->quote($inUser->getLName()) . ' AND';
        $query .= ' `mail`==' . $this->dbHandle->quote($inUser->getMail());

        // Do not try catch, just throw the error
        $this->dbHandle->exec($query);
    }

    /**
     * Update information for a user in the database
     * @param \User $inUser
     */
    public function updateUser(User $inUser) {
        // TODO: Create real request
    }

    /**
     * Try to find the user corresponding to mail.
     * @param string $inMail
     * @return \User if found, null otherwise
     */
    public function getUserWithMail($inMail) {
        $this->clearExpiredConnexion();
        $query = 'SELECT * FROM user WHERE mail=' . $this->dbHandle->quote($inMail);
        try {
            $statement = $this->dbHandle->query($query);
            $data = $statement->fetchAll();

            if (isset($data) && count($data)) {
                // a user is found
                $user = new User();
                $user->fillWithDb($data[0]);
                return $user;
            }
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }

        return NULL;
    }

    /**
     * Try to find the user corresponding to token.
     * @param string $inToken
     * @return \User if found, null otherwise
     */
    public function getUserWithToken($inToken) {
        $this->clearExpiredConnexion();

        $query = 'SELECT * FROM user WHERE conn_token=' . $this->dbHandle->quote($inToken);
        try {
            $statement = $this->dbHandle->query($query);
            $data = $statement->fetchAll();

            if (isset($data) && count($data)) {
                // a user is found
                $user = new User();
                $user->fillWithDb($data[0]);
                return $user;
            }
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }

        return NULL;
    }

    /**
     * Get dn id of user
     * @param User $inUser
     * @return integer or null if not found
     */
    function getAuthorId(User $inUser) {
        $this->clearExpiredConnexion();

        $query = 'SELECT id FROM user WHERE mail=' . $this->dbHandle->quote($inUser->getMail());
        try {
            $statement = $this->dbHandle->query($query);
            $data = $statement->fetchAll();

            if (isset($data) && count($data)) {
                // a user is found
                return $data[0]['id'];
            }
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }

        return NULL;
    }


    /**
     * Check a user session
     * @param string $inConnectionToken
     * @return boolean true if logged, false if connection expired.
     */
    public function isUserLogged($inConnectionToken) {
        $this->clearExpiredConnexion();
        $query = 'SELECT conn_time FROM user WHERE conn_token=' . $this->dbHandle->quote($inConnectionToken);

        try {
            $statement = $this->dbHandle->query($query);
            $data = $statement->fetchAll();

            if (isset($data) && count($data)) {
                // a user is found
                $delta = time() - intval($data[0]['conn_time']);

                if ($delta > $this->defaultSessionTime) {
                    return false;
                }
                return true;
            }
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }

        return false;
    }

    private function clearExpiredConnexion() {
        $maxTime = time()-$this->defaultSessionTime;
        $this->dbHandle->exec('UPDATE user SET conn_token=null, conn_time=0 WHERE conn_time<'.$maxTime);
    }

    /**
     * Create a new token for the user
     * @param User $inUser
     * @return string user token
     */
    function createTokenForUser(User $inUser) {
        $token = $this->generateToken();
        $query = 'UPDATE user SET ';
        $query .= 'conn_token=';
        $query .= $this->dbHandle->quote($token) . ', ';
        $query .= 'conn_time=' . time();
        $query .= ' WHERE mail=';
        $query .= $this->dbHandle->quote($inUser->getMail());

        try {
            $this->dbHandle->exec($query);
        } catch (Exception $exc) {
            error_log(__FUNCTION__ . ' ' . $query);
            throw $exc;
        }

        return $token;
    }

    /**
     * Generate a stupid token
     * @param type $inMaxLength
     * @return type
     */
    private function generateToken($inMaxLength = 255) {

        return substr(crypt(uniqid() . uniqid() . uniqid(), rand(10000, 90000)), 0, $inMaxLength);
    }

}
