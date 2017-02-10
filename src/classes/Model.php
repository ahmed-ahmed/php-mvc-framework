<?php

abstract class Model{
    protected $dbh;
    protected $stmt;

    /**
     * Model constructor.
     */
    public function __construct()
    {
        $this->dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME, DB_PASS, DB_PASS);
    }


}