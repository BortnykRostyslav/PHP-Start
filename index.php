<?php

include_once 'function.php';

if(isset($_GET['submit'])){

    $a = $_GET['a'];
    $b = $_GET['b'];
    $c = $_GET['c'];

    if(!empty($a) && !empty($b) && !empty($c)){

        $result = quadratic($a, $b, $c);

        if($result !=false){
            print_r($result);
        } else{
            echo 'Коренів нема <br/>';
        }

        echo "Форма відправлена a = $a, b = $b, $c = c <br/>";

    }


}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
        <form action="index.php" method="get">
            A: <input type="text" name="a"><br>
            B: <input type="text" name="b"><br>
            C: <input type="text" name="c"><br>
            <input type="submit" value="Submit" name="submit">
        </form>
    </div>
</body>
</html>