<?php

require_once 'DBUserManager.class.php';

/**
 * Manage session connection and DB token
 *
 * @author gilles
 */
class ConnectionManager {

    private $userManager;
    private $webroot;
    private $protectedPage;

    public function __construct() {
        $this->userManager = new DBUserManager();
        $this->webroot = '/projets/demo/index.php';
        $this->protectedPage = 'projets/demo/protected.php';
    }

    public function getWebroot() {
        return $this->webroot;
    }

    public function setWebroot($webroot) {
        $this->webroot = $webroot;
        return $this;
    }

    public function getProtectedPage() {
        return $this->protectedPage;
    }

    public function setProtectedPage($protectedPage) {
        $this->protectedPage = $protectedPage;
        return $this;
    }

    function isValidConnection($inToken) {
        return $this->userManager->isUserLogged($inToken);
    }


    /**
     * If password is OK, generate a connection token
     * @param string $inMail
     * @param string $inClearPassword
     * @return string Generated token or null on error
     */
    function verifyConnectionPasswd($inMail, $inClearPassword) {
        $user = $this->userManager->getUserWithMail($inMail);
        if ($user && $user->isPasswordCorrect($inClearPassword)) {
            $token = $this->userManager->createTokenForUser($user);
            return $token;
        } else {
            if ($inMail) {
                error_log(__FUNCTION__ . " User not found ($inMail)");
            } else {
                error_log(__FUNCTION__ . " User not found (mail empty)");
            }
        }

        return null;
    }

}
