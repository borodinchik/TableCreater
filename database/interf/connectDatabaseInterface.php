<?php

interface connectDatabaseInterface
{
    /**
     * @param $name
     * @param $pass
     * @return mixed
     */
    public function connect();

    /**
     * @return mixed
     */
    public function isError();

}