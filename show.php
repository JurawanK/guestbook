<!DOCTYPE html>
<html>

<body>
    <?php
        $name = $_GET["name"];
        $age = $_GET["age"];
        $gender = $_GET["gender"];
        $status = $_GET["status"];
        $name_title = "";
        $male = "male";
        $female = "female";
        $married = "married";
        
        if ($gender == $male)
        {
            if ($age <= 14)
            {
                $name_title = "เด็กชาย";
            }
            else
            {
                $name_title = "นาย";
            }
        }
        else if ($gender == $female)
        {
            if ($age <= 14)
            {
                $name_title = "เด็กหญิง";
            }
            else if ($status==$married)
            {
                $name_title = "นาง";
            }
            else
            {
                $name_title = "นางสาว";
            }
        }
        echo "ชื่อ :".$name_title."   ".$name."    "."อายุ :".$age."    "."เพศ :".$gender."    "."สถานะ :".$status;
    ?>
</body>

</html>