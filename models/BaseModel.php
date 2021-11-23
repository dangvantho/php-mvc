<?php
class BaseModel extends Database
{
    private $conn;
    public function __construct()
    {
        $this->conn = $this->connect();
    }
    public function all($table, $select = ["*"], $orderBy = [], $limit = 15)
    {
        $columns = implode(",", $select);
        $orders = "";
        foreach($orderBy as $col => $order)
        {
            $orders .= "${col} ${order} ";
        }
        if (!empty($orders)){
            $sql = "SELECT ${columns} FROM ${table} ORDER BY ${orders} LIMIT ${limit}";
        } else {
            $sql = "SELECT ${columns} FROM ${table}";
        }
        $query = $this->_query($sql);
        $data = array();
        while ($row = mysqli_fetch_assoc($query)) {
            $data[] = $row;
        }
        return $data;
    }
    public function find($select = ["*"], $where = "")
    {
        $columns = implode(",", $select);
        $conditions = implode(" and "); 
    }
    public function store()
    {

    }
    public function update()
    {

    }
    public function delete()
    {

    }
    private function _query($sql)
    {
        return mysqli_query($this->conn, $sql);
    }
}