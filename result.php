<?php
session_start();
$stock = isset($_POST['stock']) ? $_POST['stock'] : '';
$amount = isset($_POST['amount']) ? $_POST['amount'] : '';
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width-device-width, intial-scale = 1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        body {
            background-color: #ffc400;
        }

        .welcome {
            font-size: 30px;
            color: black;
            margin-left: 300px;
            margin-top: 80px;
            position: absolute;
            font-weight: bold;
        }

        .profit{
            font-size: 30px;
            color: #057d25;
            margin-left: 630px;
            margin-top: 160px;
            position: absolute;
            font-weight: bold;
        }

        .about-company{
            display: inline-block;
            padding: 10px 20px;
            width: 15%;
            margin-top: 20%;
            margin-left: 45%;
            padding: 1%;
            color: #ebebeb;
            font-size: 1.5vw;
            text-align: center;
            text-decoration: none;
            background: #55b9f3;
            border-radius: 15px;
            /* box-shadow: 30px 30px 30px #489dcf,
                -5px -5px 30px #62d5ff; */
            text-shadow:
                0px 1px 3px rgba(000, 000, 000, 0.3),
                0px 0px 0px rgba(255, 255, 255, 0);
            position: absolute;
            clear: both;
            border: none;
        }

        .stock-chart{
            display: inline-block;
            padding: 10px 20px;
            width: 15%;
            margin-top: 25%;
            margin-left: 45%;
            padding: 1%;
            color: #ebebeb;
            font-size: 1.5vw;
            text-align: center;
            text-decoration: none;
            background: #55b9f3;
            border-radius: 15px;
            /* box-shadow: 30px 30px 30px #489dcf,
                -5px -5px 30px #62d5ff; */
            text-shadow:
                0px 1px 3px rgba(000, 000, 000, 0.3),
                0px 0px 0px rgba(255, 255, 255, 0);
            position: absolute;
            clear: both;
            border: none;
        }

        .invest{
            display: inline-block;
            padding: 10px 20px;
            width: 15%;
            margin-top: 30%;
            margin-left: 45%;
            padding: 1%;
            color: #ebebeb;
            font-size: 1.5vw;
            text-align: center;
            text-decoration: none;
            background: #55b9f3;
            border-radius: 15px;
            /* box-shadow: 30px 30px 30px #489dcf,
                -5px -5px 30px #62d5ff; */
            text-shadow:
                0px 1px 3px rgba(000, 000, 000, 0.3),
                0px 0px 0px rgba(255, 255, 255, 0);
            position: absolute;
            clear: both;
            border: none;
        }
    </style>
    <title>
        Project name
    </title>
</head>

<body>
    <?php
    echo "<div class=\"welcome\">If you had bought $amount share in $stock, you would have made a <br><center>profit of: </center></div>";
    $csv = array();
    if ($stock == "TSLA") {
        if (($handle = fopen("TSLA.csv", "r")) !== FALSE) {
            while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
                $csv[] = $data;
            }
        }

        fclose($handle);

        $row = 253;
        $column = 4;
        $openPrice = 139.98;
        $money = $csv[$row][$column];
        $invested = $amount * $openPrice;
        $priceToday = $money * $amount;
        $profit = $priceToday - $invested;
        echo "<div class=\"profit\"> $profit</div>";
    }

    if ($stock == "DAR") {
        if (($handle = fopen("DAR.csv", "r")) !== FALSE) {
            while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
                $csv[] = $data;
            }
        }

        fclose($handle);

        $row = 13;
        $column = 4;
        $openPrice = 25.89;
        $money = $csv[$row][$column];
        $invested = $amount * $openPrice;
        $priceToday = $money * $amount;
        echo "Profit made:";
        echo ($priceToday - $invested);
    }

    if ($stock == "WM") {
        if (($handle = fopen("WM.csv", "r")) !== FALSE) {
            while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
                $csv[] = $data;
            }
        }

        fclose($handle);

        $row = 13;
        $column = 4;
        $openPrice = 111.839996;
        $money = $csv[$row][$column];
        $invested = $amount * $openPrice;
        $priceToday = $money * $amount;
        echo "Profit made:";
        echo ($priceToday - $invested);
    }
    ?>



    <div class="about-company">About Company</div>
    <div class="stock-chart">Stock Chart</div>
    <div class="invest">Invest</div>
</body>