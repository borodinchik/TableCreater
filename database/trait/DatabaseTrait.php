<?php

trait DatabaseTrait
{

    public function string($column, $number , $type = "VARCHAR")
    {
        if ($number == null) {
            $concat = $column . " " . $type . "(255)" . " NOT NULL, ";
        }else{
            $concat = $column . " " . $type  . "(".$number.")". " NOT NULL, ";
            }
        return $concat;
    }

    public function text($column, $type = 'TEXT')
    {
        $concat = $column .  " "  . $type . " NOT NULL, ";
        return $concat;
    }

    public function integer($column, $type = 'INT')
    {
        $concat = $column . " " . $type . " NOT NULL, ";
        return $concat;
    }

    public function float($column, $type = 'FLOAT')
    {
        $concat = $column . " " . $type . " NOT NULL, ";
        return $concat;
    }

    public function timestamp($column, $type = 'TIMESTAMP')
    {
        $concat = $column . " " . $type . ")";
        return $concat;
    }

    public function increment()
    {
        $concat = " (id INT AUTO_INCREMENT PRIMARY KEY, ";
        return $concat;
    }
}