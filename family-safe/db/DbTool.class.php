<?php

class DbTool {
    private $dbName;
    private $host;
    private $user ;
    private $password;
    private $dsn;
    private $dbh ;

  function __construct() {
    $this->dbName = 'family_safe';
    $this->host = 'localhost';
    $this->user = 'root';
    $this->password = 'lenovog50';

    $this->dsn = 'mysql:dbname=' . $this->dbName . ';host=' . $this->host;
    $this->dbh = null;
  }

  public function connectToDb() {

      if ($this->dbh) {
        return $this->dbh;
      }

      try {
        $pdoOptions = array(
        PDO::ATTR_EMULATE_PREPARES => false,
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_AUTOCOMMIT => TRUE,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC);

        $this->dbh = new PDO($this->dsn, $this->user, $this->password, $pdoOptions);

      } catch (PDOException $e) {
        echo 'Connection failed ! : ' . $e->getMessage();
        die(__FILE__ . " " . __FUNCTION__ . " " . __LINE__);
      }

      return $this->dbh;
    }
}

 ?>
