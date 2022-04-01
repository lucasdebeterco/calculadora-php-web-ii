<?php

    include_once('class/divisao.class.php');
    include_once('class/soma.class.php');
    include_once('class/subtracao.class.php');
    include_once('class/multiplicacao.class.php');

    $num = "";
    $result = "";
    $cookie_name1 = "num";
    $cookie_value1 = "";
    $cookie_name2 = "op";
    $cookie_value2 = "";

    if(isset($_POST['display'])) {
        $num = $_POST['display'];
    } else {
        $num = "";
    }

    if(isset($_POST['submit'])) {
        $num = $_POST['display'] . $_POST['submit'];
    } else {
        $num = "";
    }

    if (isset($_POST['op'])) {
        $cookie_value1 = $_POST['display'];
        setcookie($cookie_name1, $cookie_value1, time() + (86400 * 30), "/");

        $cookie_value2 = $_POST['op'];
        setcookie($cookie_name2, $cookie_value2, time() + (86400 * 30), "/");

        $num = "";

    }

    if (isset($_POST['equals'])) {
        $num = $_POST['display'];

        switch($_COOKIE['op']) {
            case "*":
                $multiplica = new Multiplicacao();
                $result = $multiplica->multiplica([$num, $_COOKIE['num']]);
                break;

            case "/":
                $divide = new Divisao();
                $result = $divide->divide([$num, $_COOKIE['num']]);
                break;

            case "-":
                $subtrai = new Subtracao();
                $result = $subtrai->subtrai([$num, $_COOKIE['num']]);
                break;

            case "+":
                $soma = new Soma();
                $result = $soma->soma([$num, $_COOKIE['num']]);
                break;
        }
        $num = $result;
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Calculadora PHP</title>
</head>

<body>
    <div class="container">
        <div class="calc-form flex align-center justify-center">
            <form action="" method="post">
                <div class="linha">
                    <input type="text" name="display" class="display" readonly value=<?php echo $num; ?>  >
                </div>
                <div class="calculadora">
                    <div><input type="submit" name="submit" value="7"></div>
                    <div><input type="submit" name="submit" value="8"></div>
                    <div><input type="submit" name="submit" value="9"></div>
                    <div><input type="submit" name="op" class="op" value="/"></div>

                    <div><input type="submit" name="submit" value="4"></div>
                    <div><input type="submit" name="submit" value="5"></div>
                    <div><input type="submit" name="submit" value="6"></div>
                    <div><input type="submit" name="op" class="op" value="+"></div>

                    <div><input type="submit" name="submit" value="1"></div>
                    <div><input type="submit" name="submit" value="2"></div>
                    <div><input type="submit" name="submit" value="3"></div>
                    <div><input type="submit" name="op" class="op" value="-"></div>

                    <div><input type="submit" name="submit" value="0"></div>
                    <div><input type="submit" name="equals" value="="></div>
                    <div><input type="submit" name="submit" value="0"></div>
                    <div><input type="submit" name="op" class="op" value="*"></div>
                </table>
            </form> 
        </div>
    </div>
</body>

</html>