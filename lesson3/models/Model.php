<?php
namespace app\models;

use app\interfaces\IModel;
use app\engine\Db;

abstract class Model implements IModel
{
    protected $db;


    public function __construct()
    {
        $this->db = Db::getInstance();
    }

    public function insert() {
        $tableName = $this->getTableName();

        $sql1 = 'INSERT INTO ' .$tableName.' (';
        $sql2 = " VALUES (";
        foreach ($this as $key => $value){
            if (!($key == "id" or $key == "db" ))
            {
                $sql1 = $sql1 .$key. ", ";
                $sql2 = $sql2 . "'" .$value. "'". ", ";
            }
        }

        $sql1 = substr($sql1, 0, -2) . ") ";
        $sql2 = substr($sql2, 0, -2)  . ") ";
        $sql =  $sql1 . $sql2;
        //var_dump($sql);

        $this->db->execute($sql);
        $this->id = $this->db->lastInsertId();

    }

    public function delete() {
        $tableName = $this->getTableName();
        $sql =  'DELETE FROM ' .$tableName.'  WHERE id =' . $this->id;

       // var_dump($sql);
        $this->db->execute($sql);
    }
    public function update() {
        $tableName = $this->getTableName();

        $sql = 'UPDATE ' .$tableName.' SET  ';
        foreach ($this as $key => $value){
            if (!($key == "id" or $key == "db" ))
            {
                $sql = $sql . $key. ' = ' . "'" .$value. "'". ', ';
            }
        }

        $sql = substr($sql, 0, -2) . " ";
        $sql = $sql . '  WHERE id =' . $this->id;

        //var_dump($sql);

        $this->db->execute($sql);
    }

    public function getOne($id) {
        $tableName = $this->getTableName();
        $sql = "SELECT * FROM {$tableName} WHERE id = :id";
        return $this->db->queryOne($sql, ['id' => $id]);
    }
    public function getAll() {
        $tableName = $this->getTableName();
        $sql = "SELECT * FROM {$tableName}";
        return $this->db->queryAll($sql);
    }

}