<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<form action="index.php" method="post">
    <p>Year: <textarea name="year"></textarea></p>
    <p><input type="submit" /></p>
    </form>


    <?php
        $year = $_POST["year"];

        foreach (count_chars($year, 1) as $i => $t) {
        echo  chr($i)."-".$t;
        echo(" ");
        }

    ?>
    

</body>
</html>