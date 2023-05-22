<?php
//thuc hien thao tac CRUD tren bang tbModules
class Module
{
    //cac thuoc tinh
    public $id, $sname, $lname, $hours, $fee;

    //ham dung
    function __construct($id = 1, $sname = '', $lname = '', $hours = 10, $fee = 10)
    {
        $this->id  = $id;
        $this->sname = $sname;
        $this->lname = $lname;
        $this->hours = $hours;
        $this->fee = $fee;
    }
}

include_once("../myconnect.php");
class ModuleDAO
{

    //1. doc du lieu trong bang tbModule -> mang ds
    function get()
    {
        $ds = [];

        //1. tao ket noi den CSDL
        $cn = getConnect();

        $sql = "SELECT * FROM `tbmodules`";

        //3. goi ham thi hanh lenh SELECT sql
        $r = $cn->query($sql);

        if ($r == false) {
            echo "<p> >> ERROR: cannot retrieve data ! </p>";
            die("<p> " . $cn->error . "</p>");
        } else {
            //doc cac dong trong ket qua tra ve luu vo bien ds[]
            while ($row = $r->fetch_array()) {
                $monhoc = new Module($row['id'], $row['sname'], $row['lname'], $row['hours'], $row['fee']);

                $ds[] = $monhoc;
            }
        }

        //4. dong ket noi
        $cn->close();
        return $ds;
    }



    //2. xoa 1 dong trong bang tbModule theo ma so 
    function delete($id)
    {
        //1. tao ket noi den CSDL
        $cn = getConnect();

        $sql = "DELETE FROM `tbmodules` WHERE `id` LIKE '$id'";

        //3. goi ham thi hanh lenh DELETE sql
        $r = $cn->query($sql);

        if ($r == false) {
            echo "<p> >> ERROR: cannot delete data ! </p>";
            die ("<p> " . $cn->error . "</p>");
        } 

        //4. dong ket noi
        mysqli_close($cn);
    }
}
