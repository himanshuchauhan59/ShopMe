<?php
abstract class configration
{
    abstract public function connect();
    abstract public function insert($table , $image, $p_name, $price, $brand,$p_info, $p_des, $discount, $total_ammount, $select);
    abstract public function update($id, $table , $p_name, $brand, $price, $p_info, $p_des, $discount, $total_ammount, $select);
    abstract public function delete($id, $table);
    abstract public function select($id, $table);
    abstract public function split_fun($table , $val);
    abstract public function checking($table , $arr);
    abstract public function edit($table , $col , $value , $id);
    abstract public function Insert_fun($table, $val);
}
trait connection
{
    public $connection;

    public function connect()
    {
        $this->connection = mysqli_connect($this->ser_name, $this->user_name, $this->pass, $this->db_name);

        if (!$this->connection) {
            echo "connection not establish";
        }
    }
}
