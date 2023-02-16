<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex1</title>
</head>
<body>
    
    <!--<form action="index.php" method="post">
    <p>Year: <input type="date" name="year" /></p>
    <p><input type="submit" /></p>
    </form>-->
    <?php
     $year = $_POST['year'];
     $t = strtotime($year);
     $day = idate("w",$t);
     $days = array(1 => "пт",
      2 => "вт",
        3 => "ср",
        4 => "чт",
        5 => "пт",
        6 => "сб",
        7 => "вс");

        $mo = array("01"=> "января",
        "02" => "февраля",
        "03"=> "марта",
        "04"=> "апреля",
        "05"=> "мая",
        "06"=> "июня",
        "07"=> "июля",
        "08" => "августа",
        "09"=> "сентября",
          "10"=> "октября",
          "11" => "ноября",
          "12" => "декабря");
    
     echo date('d')." ".$mo[date('m')]." ".date('Y').", ".$days[idate('w')];
    ?>
    <div>

        
    </div>
</body>
</html>