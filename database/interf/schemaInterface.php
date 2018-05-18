<?php

interface schemaInterface
{
    public function createTable();

    public function string($column, $type, $length);
}