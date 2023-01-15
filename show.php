<!DOCTYPE html>
<html>

<body>
    <?php
        $name = $_GET["name"];
        $age = $_GET["age"];
        $gender = $_GET["gender"];
        $marrital_status = $_GET["marrital_status"];
        $name_title = "";
        $male = "male";
        $female = "female";
        $married = "married";
        $widowed = "widowed";
        
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
            else if ($marrital_status==$married||$marrital_status==$widowed)
            {
                $name_title = "นาง";
            }
            else
            {
                $name_title = "นางสาว";
            }
        }
        echo $name_title."   ".$name."    ".$age."    ".$gender."    ".$marrital_status;
    ?>
</body>

</html>