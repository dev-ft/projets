<?php

/**
 * Generic class to connect to MySQL (only).
 * Configuration File used to store server and db informations.
 */
class DBTool {

    /**
     * Errors constants
     * @var type
     */
    public static $DBTOOL_ERRORS = array(
        10 => 'Configuration file not found',
        // Config vars errors
        20 => 'DB_SERVER not defined',
        21 => 'DB_SERVER_PORT not defined',
        22 => 'DB_NAME not defined',
        23 => 'DB_USER_NAME not defined',
        24 => 'DB_USER_PASS not defined',
        // DB error
        50 => 'Impossible to connect to DB',
    );

    /**
     * Internal db handle
     * @var PDO
     */
    protected $dbHandle;

    /**
     * Connect to DB and create database from configuration file if defined.
     *
     * @param string $inConfigFile Path of configuration file
     * @throws Exception Errors codes defined in $DBTOOL_ERRORS
     */
    public function __construct($inConfigFile = 'dbconfig.php') {
        $configPath = __DIR__ . DIRECTORY_SEPARATOR . $inConfigFile;
        //error_log(__FILE__." configuration:  ".$configPath);

        if (file_exists($configPath)) {
            include_once $configPath;
        } else {
            throw new Exception(DBTool::$DBTOOL_ERRORS[10], 10);
        }

        if (empty(DB_SERVER)) {
            throw new Exception(DBTool::$DBTOOL_ERRORS[20], 20);
        }
        if (empty(DB_SERVER_PORT)) {
            throw new Exception(DBTool::$DBTOOL_ERRORS[21], 21);
        }

        if (!defined('DB_NAME')) {
            // it can be null if the user wants a connection
            // without the DB. Just warn the user
            trigger_error(DBTool::$DBTOOL_ERRORS[22], E_USER_NOTICE);
        }
        if (empty(DB_USER_NAME)) {
            throw new Exception(DBTool::$DBTOOL_ERRORS[23], 23);
        }
      /*  if (empty(DB_USER_PASS)) {
            throw new Exception(DBTool::$DBTOOL_ERRORS[24], 24);
        */

        $this->dbHandle = null;
        $dsn = 'mysql:host=' . DB_SERVER . ';port=' . DB_SERVER_PORT . ';charset=UTF8';

        try {
            $pdoOptions = array(
                PDO::ATTR_EMULATE_PREPARES => false,
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_AUTOCOMMIT => TRUE,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC);

            $this->dbHandle = new PDO($dsn, DB_USER_NAME, DB_USER_PASS, $pdoOptions);
        } catch (PDOException $e) {
            throw new Exception(DBTool::$DBTOOL_ERRORS[50] . ' ' . $e->getMessage(), 50);
        }

        // If we have a connection and a DB Name, try to create it
        if (defined('DB_NAME')) {
            // Warning mysql only !
            $query = 'CREATE DATABASE IF NOT EXISTS `' . DB_NAME . '` DEFAULT CHARACTER SET = \'utf8\' DEFAULT COLLATE \'utf8_unicode_ci\'';
            $this->dbHandle->exec($query);
            $this->useDB(DB_NAME);
        }
    }

    /**
     * Get a valid connection to DB, Null otherwise
     * @return PDO
     */
    public function getConnection() {
        return $this->dbHandle;
    }

    /**
     * Switch from a database to an other
     * @param string $inDbName
     */
    public function useDB($inDbName) {
        if (!empty($inDbName) && $this->dbHandle) {
            $this->dbHandle->exec('use `' . $inDbName . '`');
        }
    }

}
