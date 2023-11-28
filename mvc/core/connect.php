<?php

class Connect
{
    public $dbConnect;
    protected $dbServerName = '';
    protected $dbUserName = '';
    protected $dbPassword = '';
    protected $dbDatabase = '';

    public function __construct()
    {
        //  $this->dbConnect = new mysqli($this->dbServerName,
        //    $this->dbUserName,
        //    $this->dbPassword,
        //    $this->dbDatabase
        // );
        //  $this->dbConnect->query("SET NAMES 'utf8'");
    }
}
