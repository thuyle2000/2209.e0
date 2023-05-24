<?php

declare(strict_types=1);

//thuc hien thao tac CRUD tren bang tbModules
class Module
{
    //cac thuoc tinh
    public $id, $sname, $lname, $hours, $fee;

    //ham dung
    function __construct($id = null, $sname = '', $lname = '', $hours = 10, $fee = 10)
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

    //1a. doc du lieu trong bang tbModule -> mang ds
    public static function get()
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



    //1b. tim du lieu trong bang tbModule theo sname
    public static function getBySName(string $sname)
    {

        //1. tao ket noi den CSDL
        $cn = getConnect();

        $sql = "SELECT * FROM `tbmodules` WHERE `sname` LIKE '$sname'";

        //3. goi ham thi hanh lenh SELECT sql
        $r = $cn->query($sql);
        $monHoc = null;

        if ($r == false) {
            echo "<p> >> ERROR: cannot retrieve data ! </p>";
            die("<p> " . $cn->error . "</p>");
        } else {
            //doc ket qua tra ve luu vo bien ds
            if ($row = $r->fetch_array()) {
                $monHoc = new Module($row['id'], $row['sname'], $row['lname'], $row['hours'], $row['fee']);
            }
        }

        //4. dong ket noi
        $cn->close();
        return $monHoc;
    }

    //1c. tim du lieu trong bang tbModule theo id
    public static function getByid(string $id)
    {
        //1. tao ket noi den CSDL
        $cn = getConnect();

        $sql = "SELECT * FROM `tbmodules` WHERE `id` = $id";

        //3. goi ham thi hanh lenh SELECT sql
        $r = $cn->query($sql);
        $monHoc = null;

        if ($r == false) {
            echo "<p> >> ERROR: cannot retrieve data ! </p>";
            die("<p> " . $cn->error . "</p>");
        } else {
            //doc ket qua tra ve luu vo bien ds
            if ($row = $r->fetch_array()) {
                $monHoc = new Module($row['id'], $row['sname'], $row['lname'], $row['hours'], $row['fee']);
            }
        }

        //4. dong ket noi
        $cn->close();
        return $monHoc;
    }


    //2. xoa 1 dong trong bang tbModule theo ma so 
    public static function delete($id)
    {
        //1. tao ket noi den CSDL
        $cn = getConnect();

        $sql = "DELETE FROM `tbmodules` WHERE `id` LIKE '$id'";

        //2. goi ham thi hanh lenh DELETE sql
        $r = $cn->query($sql);

        if ($r == false) {
            echo "<p> >> ERROR: cannot delete data ! </p>";
            die("<p> " . $cn->error . "</p>");
        }

        //3. dong ket noi
        mysqli_close($cn);
    }

    //3. them 1 mon hoc moi trong bang tbModule
    public static function insert(Module $m)
    {
        //1. tao ket noi den CSDL
        $cn = getConnect();
        $sql = "INSERT INTO `tbmodules`(`id`, `sname`, `lname`, `hours`, `fee`) VALUES (null, '$m->sname' ,'$m->lname',$m->hours,$m->fee)";

        //2. goi ham thi hanh lenh INSERT sql
        $r = $cn->query($sql);

        if ($r == false) {
            echo "<p> >> ERROR: cannot insert new data ! </p>";
            die("<p> " . $cn->error . "</p>");
        }

        //3. dong ket noi
        mysqli_close($cn);
    }


        //4. update thong tin mon hoc tbModule theo ma so 
        public static function update(Module $mh)
        {
            //1. tao ket noi den CSDL
            $cn = getConnect();
    
            $sql = "UPDATE `tbmodules` SET `lname`='$mh->lname',`hours`=$mh->hours,`fee`=$mh->fee WHERE `id` = $mh->id";
    
            //2. goi ham thi hanh lenh UPDATE sql
            $r = $cn->query($sql);
    
            if ($r == false) {
                echo "<p> >> ERROR: cannot update data ! </p>";
                die("<p> " . $cn->error . "</p>");
            }
    
            //3. dong ket noi
            mysqli_close($cn);
        }
}
