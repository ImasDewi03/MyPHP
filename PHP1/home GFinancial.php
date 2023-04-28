<?php

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ayo atu keuanganmu disini...</title>
    <link rel="stylesheet" href="stylehome.css">
</head>
<body>
    <nav>
        <div class="wrapper">
            <div class="logo"><a href=''>GFinancial</a></div>
            <div class="menu">
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#courses">Start to Quizz</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <li><a href="#logout" class="tbl-pink">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="wrapper">
         <!-- Untuk Home -->
         <section id="home">
         <img src="https://img.freepik.com/premium-vector/young-man-learning-home-with-help-huge-books-chair-plant-headphones-online-education-concept_65580-475.jpg?size=626&ext=jpg&ga=GA1.2.1376573389.1667741535" />
            <div class="kolom">
                <p class="deskripsi">Melatih diri untuk membedakan antara kebutuhan dan keuangan</p>
                <h2>Atur keuanganmu mulai sekarang</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto, veniam!</p>
                <p><a href="" class="tbl-pink">Pelajari Lebih Lanjut</a></p>
            </div>
        </section>
    </div>