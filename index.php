<?php
session_start();
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
            margin-left: 500px;
            margin-top: 80px;
            position: absolute;
            font-weight: bold;
        }

        .description-1 {
            font-size: 25px;
            color: black;
            margin-left: 400px;
            margin-top: 130px;
            position: absolute;
        }

        .description-2 {
            font-size: 22px;
            color: black;
            margin-left: 500px;
            margin-top: 200px;
            position: absolute;
        }

        .choices {
            font-size: 22px;
            color: black;
            margin-left: 500px;
            margin-top: 250px;
            position: absolute;
        }

        .description-3 {
            font-size: 22px;
            color: black;
            margin-left: 500px;
            margin-top: 400px;
            position: absolute;
        }

        .text {
            font-size: 22px;
            color: black;
            margin-left: 500px;
            margin-top: 450px;
            position: absolute;
        }

        .inputs input[type=submit] {
            display: inline-block;
            padding: 10px 20px;
            width: 15%;
            margin-top: 40%;
            margin-left: 40%;
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
            position: static;
            clear: both;
            border: none;
        }

        .inputs input[type=text] {
            background: #ffffff;
            padding: 5% 10%;
            width: 100%;
            margin-bottom: 5%;
            /* box-shadow: inset 4px 4px 4px #489dcf,
                inset -1px -1px 1px #62d5ff; */
            clear: both;
            border-radius: 15px;
            border: none;
            color: #2b2b2b;
        }
    </style>
    <title>
        Project name
    </title>
</head>

<body>
    <span class="welcome">Welcome to What-if-Profit!</span>
    <span class="description-1">Let's say, today is January 15, 2020. And you want to invest in a stock</span>

    <form action="HackUGAv2.php" method="POST">
        <span class="description-2">You choose to invest in: </span>
        <div class="inputs">
            <div class="choices">

                <input type="radio" id="GME" name="stock" value="GME">
                <label for="GME">GME (GameStop) <a href="#">Learn More </a></label><br>

                <input type="radio" id="DAR" name="stock" value="DAR">
                <label for="DAR">DAR (Darling Ingredients) <a href="#">Learn More </a></label><br>

                <input type="radio" id="TSLA" name="stock" value="TSLA">
                <label for="TSLA">TSLA (Tesla) <a href="#">Learn More </a></label><br>

                <input type="radio" id="WM" name="stock" value="WM">
                <label for="WM">WM (Waste Management) <a href="HackUGA_WM.php">Learn More </a></label><br>
            </div>

            <span class="description-3">Number of Shares you buy: </span>
            <div class="text">
                <input type="text" id="amount" name="amount" value=""> 
            </div>


            <input type="submit" value="Submit">
        </div>
    </form>
</body>

</html>