<?php

class articleModel extends Database {

    public $table = 'article';

    public $fields = array(
        'title' => '',
        'article_content' => '',
        'status' => 0
    );

    public $type_fields = array(
        'title' => 'text',
        'article_content' => 'text',
        'status' => 'int'
    );

    public $conn;

    public function __construct()
    {
        parent::__construct();
        $this->conn = self::$connection;
    }

    public function getInsertLastId() {
        return $this->conn->insert_id;
    }

    public function getRow($id) {

        $sql = "SELECT * FROM " . $this->table . " WHERE id=" . (int) $id;
        $result = $this->conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                return $row;
            }
        }

        return array();
    }

    public function getRows() {
        $sql = "SELECT * FROM " . $this->table;
        $result = $this->conn->query($sql);

        if ($result->num_rows > 0) {
            $data = array();
            // output data of each row
            while($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
            return $data;
        }

        return array();
    }

    public function store($data) {

        $id = isset($data['id']) ? $data['id'] : 0;


        if ($id > 0) {
            $data_old = $this->getRow($id);
            $data = array_merge($data_old, $data);
            unset($data['id']);


            $update = '';
            foreach ($data as $field => $value) {

                if (!$update) {
                    if (is_numeric($value)) {
                        $update .= " " . $field . " = " . (int)$value;
                    } else {
                        $update .= " " . $field . " = '" . mysqli_real_escape_string($this->conn, $value) . "'";
                    }
                } else {
                    if (is_numeric($value)) {
                        $update .= " , " . $field . " = " . (int)$value;
                    } else {
                        $update .= " , " . $field . " = '" . mysqli_real_escape_string($this->conn, $value) . "'";
                    }
                }

            }

            // update
            $sql = "UPDATE ".$this->table." SET ".$update." WHERE id=".(int)$id;



            if ($this->conn->query($sql) === TRUE) {
                return true;
            } else {
                return false;
            }
        } else {
            // insert
            $data = array_merge($this->fields, $data);

            $fields = array_keys($this->fields);

            $values = array();
            foreach ($this->type_fields as $field_name => $field_type) {
                if ($field_type == 'int') {
                    $values[] = (int) $data['status'];
                } else {
                    $values[] = "'".mysqli_real_escape_string($this->conn, $data[$field_name])."'";
                }
            }

            $sql = "INSERT INTO ".$this->table." (".implode(',', $fields).")
VALUES (".implode(',', $values).")";

            if ($this->conn->query($sql) === TRUE) {
                return true;
            } else {
                return false;
            }
        }

       return false;
    }

    public function remove($id) {

        $sql = "DELETE FROM ".$this->table." WHERE id = " . (int) $id;

        if ($this->conn->query($sql) === TRUE) {
            return true;
        }

        return false;
    }
}