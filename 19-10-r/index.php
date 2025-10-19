<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    use Soap\Sdl;

    function fib($n)
    {
        if ($n <= 1) {
            return $n;
        }
        return fib($n - 1) + fib($n - 2);
    }
    for ($i = 1; $i <= 20; $i++) {
        echo fib($i) . "</br>";
    }

    // $num = 4;
    // $snum = function () use ($num) {
    //     return $num + 1;
    // };

    // echo $snum($num);

    function validateInput($str)
    {
        $str = (empty($str)) ? throw new Exception("must not empty", 1) : $str;
    }

    try {
        $name = "";
        echo validateInput($name);
    } catch (Exception $error) {
        echo $error->getMessage();
    }

    ?>
</body>

</html>