<?php
include 'connection.php';
include 'trait/DatabaseTrait.php';

class Schema
{
    use DatabaseTrait;

    private $connect;
    private $resultConnect;
    private $table;

    public function __construct($name, $pass, $table)
    {
        $this->connect = new Connect($name, $pass);
        $this->resultConnect = $this->connect->connect();
        $this->table = $table;
    }

    public function createTable()
    {
            return $this->resultConnect
                ->query("CREATE TABLE" . " " . $this->table
                    . $this->increment() . " "

                    . $this->timestamp('created_at')

                );
        }
}

$new_table = new Schema( 'root', '123', 'posts');
$new_table->createTable();
