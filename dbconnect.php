<?php

class Database
{
    private $server = '127.0.0.1';
    private $user = 'root';
    private $password = 'root';
    private $dbname = 'crud';

    public function connect()
    {
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->dbname);

        return $conn;
    }

    public function getdata()
    {
        $sql = "select * from user";
        $result = $this->connect()->query($sql);
        return $result;
    }

    public function getProductbyID($id)
    {
        $sql = "select * from user where id = $id";
        $result = $this->connect()->query($sql);
        return $result;
    }

    public function delete($id)
    {
        $sql = "delete from user where id=$id";
        $result = $this->connect()->query($sql);
    }

    public function add($name, $email, $mobile, $image_file)
    {
        $sql = "insert into user (name,email,mobile,image) VALUES ('$name','$email','$mobile','$image_file')";
        $result = $this->connect()->query($sql);

    }

    public function update($id, $name, $email, $mobile,$image_file)
    {
        $sql = "update user set name='$name',email='$email',mobile='$mobile',image='$image_file' where id=$id";
        $result = $this->connect()->query($sql);
    }
}
$obj = new Database();


?>