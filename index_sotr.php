<?php
    session_start();
    if(!isset($_SESSION['login'])){
        header("Location: auth.php");
        exit;
        }
    include "inc/header.php";
    include "function/function.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Личынй кабинет</title>
    <link rel="stylesheet" href="style/index.css">
</head>
<body>
<section class="">
    <div class="title234">
        <h1 class="text25">Личный кабинет сотрудника</h1>
        </div>
        <?php
            echo fnGetProfile2($_SESSION['login']);
            echo fnGetCardProfile2($_SESSION['login']);
        ?>
</section>
        
</body>
<style>
    .button255{
       padding-top:5px;
    }
    .title234{
        width:400px;
        height: 120px;
        padding: 25px;
        font-size:15px;
        color: white;
        text-align:start;
        margin-top:20px;
        margin-left:auto;
        margin-right:auto;
        background-color: #00AB76;
        border-radius: 20px 20px 20px 20px;
        font-family: Verdana, Geneva, Tahoma, sans-serif;
        box-sizing: border-box;
        border: 2px solid black;
    }
    .text25{
        text-align:center;
        
    }
    body{
        background: url(/images/fon3.jpg);
    }
    .okno23{

    margin-left:auto;
    margin-right:auto;
    }
    .okno{
    text-align:center;
    border: 5px solid lime;
    width: 450px;
    height: 115px;
    padding: 50px;  
    margin-top: 25px;

    background-color:#00AB76;
    }
    .card255{
    padding: 20px;
    margin-top: 50px;
    display: flex;
    flex-direction: column;
    justify-content:space-around;
    width: 450px;
    background: white;
    text-align: center;
    box-shadow: 0px 2px 7px 0px #3cff3c;
    height: 120px;

    }
    .card255:hover{
    box-shadow: 0px 10px 30px 0px #3cff3c;
    }
</style>

</html>