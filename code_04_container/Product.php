<?php

class Product
{
    private $db;

    public function __construct(ICon $db)
    {
        $this->db = $db->connect();
    }

    public function list()
    {
        $query = "select * from products";

        $stmt = $this->db->prepare($query);
        $stmt->execute();

        return $stmt->fetchAll(\PDO::FETCH_ASSOC);


    }
}