<?php

require_once 'StringUtils.class.php';

/**
 * Generic user management
 *
 */
class User {

    private $fName;
    private $lName;
    private $mail;
    private $passwd;

    public function __construct() {
        $this->fName = NULL;
        $this->lName = NULL;
        $this->mail = NULL;
        $this->passwd = NULL;
    }

    public function getFName() {
        return $this->fName;
    }

    public function getLName() {
        return $this->lName;
    }

    public function getMail() {
        return $this->mail;
    }

    public function setFName($fName) {

        $this->fName = StringUtils::cleanName($fName);
        return $this;
    }

    public function setLName($lName) {
        $this->lName = StringUtils::cleanName($lName);
        return $this;
    }

    public function setMail($mail) {
        $this->mail = StringUtils::cleanMail($mail);
        return $this;
    }

    private function setPasswd($passwd) {
        $this->passwd = $passwd;
        return $this;
    }

    public function getPasswd() {
        return $this->passwd;
    }

    /**
     * Check user passsword
     * @param string $inClearPassword
     * @return boolean True is password is correct
     */
    public function isPasswordCorrect($inClearPassword) {
//        error_log(__FUNCTION__.' '.$inClearPassword.' '.$this->getPasswd());
        return password_verify($inClearPassword, $this->getPasswd());
    }

    /**
     * Fill existing object with database data.
     * @param array $inDbData keys first_name, last_name, mail
     * @return \User
     */
    public function fillWithDb($inDbData) {
        $this->setFName($inDbData['first_name']);
        $this->setLName($inDbData['last_name']);
        $this->setMail($inDbData['mail']);
        $this->setPasswd($inDbData['passwd']);

        return $this;
    }

}
