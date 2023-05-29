<?php

declare(strict_types=1);

class User
{
    public string $uid, $password;
    public int $role;

    public function __construct(string $uid = '', string $password = '', int $role = 2)
    {
        $this->uid = $uid;
        $this->password = $password;
        $this->role = $role;
    }
}

include_once("../myconnect.php");
class UserDAO
{
    //1c. tim du lieu trong bang tbUSer theo user-id
    public static function getByid(string $userID)
    {
        //1. tao ket noi den CSDL
        $cn = getConnect();

        $sql = "SELECT * FROM `tbUser` WHERE `uid` = '$userID'";

        //3. goi ham thi hanh lenh SELECT sql
        $r = $cn->query($sql);
        $user = null;

        if ($r == false) {
            echo "<p> >> ERROR: cannot retrieve data ! </p>";
            die("<p> " . $cn->error . "</p>");
        } else {
            //doc ket qua tra ve luu vo bien ds
            if ($row = $r->fetch_array()) {
                $user = new User($row['uid'], $row['password'], intval($row['role']));
            }
        }

        //4. dong ket noi
        $cn->close();
        return $user;
    }
}
