<?php

class Connect implements connectDatabaseInterface
{
    protected $name;
    protected $pass;

    public function __construct($name, $pass)
    {
        $this->name = $name;
        $this->pass = $pass;
    }

    public function connect()
    {
        return new PDO('mysql:host=localhost;dbname=test_db' , $this->name, $this->pass);
    }

    public function isError()
    {
        try {

            $this->connect();

        }catch (PDOException $exception){
            print 'Error!' . $exception->getMessage() . '<br/>';
            die();
        }
    }

}

