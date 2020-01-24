<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css" type="text/css"/>
    <link rel="stylesheet" href="css/fontello.css" type="text/css"/>
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab|Lato&display=swap" rel="stylesheet">

    <title>Projekt</title>
    <style>
    button{
        float: left;
        background-color: rgb(255, 0, 0);
        border: rgb(119, 2, 2);
        margin-left: 70px;
        font-family:Verdana, Geneva, Tahoma, sans-serif;
        margin-top: 35px;
        font-size: 30px;
    }
    table{
        float:left;
        margin: 5px;
        height: 30px;
        width: 30px;
        background-color: aqua;
    }
    .circle{
        background-color; white;
        color;black;
        border-radius: 50%;
        border: 2px solid black;
    }
    </style>
</head>
<body>

<?php

    $rzeczy = $_POST['rzeczy'];
    $jedzenie = $_POST['jedzenie'];

?>


    <div class="container">
        
        <div class="prostokat">
            <div id="logo">Łukasz Ruzicki</div>
            <div id="zegar"><button>Kliknij!</button>
                <script src="main.js"></script></div>
            <div style="clear:both;"></div>
        </div>

        <div class="kwadrat">
            <div class="kafelek1"><i class="icon-cloud"></i><br/>Chmura</div>
            <div class="kafelek1"><i class="icon-flash"><br/>Błysk</i></div>
            <div style="clear:both;"></div>

            <div class="kafelek2"><i class="icon-flight"><br/>Samolot</i></div>
            <div class="kafelek3"><i class="icon-moon"><br/>Księżyc</i></div>
            <div style="clear:both;"></div>
            <div class="kafelek4"><i class="icon-child"></i><br/>Człowiek</i></div>
            <div style="clear:both;"></div>

        </div>
        <div class="kwadrat">
            <div class="kafelek5"><a href="https://twoja-sztuka.pl/" target="blank" title="Sklep z obrazami"><img src="dwa.jpg"></a></div>
            <div class="yt"><i class="icon-gplus"></i></div>
            <div class="fb"><i class="icon-facebook"></i></div>
            <div class="github"><i class="icon-github-circled"></i></div>
            <div class="twitter"><i class="icon-twitter"></i></div>
            <div style="clear:both;"></div>

        </div>
        <div style="clear:both;"></div>

        

    </div>
    <div class="container">
        <div class="tekst">
            <h1>Lorem ipsum</h1> dolor sit amet, consectetur adipiscing elit.<br/>
             Nunc accumsan hendrerit sem. Sed vel ultrices magna. Donec
              hendrerit aliquam nunc at tristique. Cras at dignissim ip
              sum. Vivamus tincidunt mi orci, id iaculis tortor bibendum 
              in. Sed dui augue, consequat sit amet fringilla ac, consect
              <br/><br/><br/><br/><br/><br/><br/><br/><h2>Etur eu lacus</h2> Duis ante est, efficitur sit amet pharetra in,
               gravida et mi. Vestibulum sed magna magna. Maecenas pharetra s
               apien quis libero pulvinar, <b>id ultrices magna sodales.</b> Nulla po
               suere, purus a mattis bibendum, odio arcu sollicitudin velit, non s
               agittis nisi lorem id ante. Lorem ipsum dolor sit amet, consectetu
               r adipiscing elit. Vestibulum a massa ut neque.
        </div>
        <div class="lista">
            <h1>Lista numerowana:</h1>
            <ol>
                <li>Punkt pierwszy</li>
                <li>Punkt drugi</li>
                <li>Punkt trzeci</li>
                <li>Punkt czwarty</li>
                <li>Punkt piąty</li>
                <li>Punkt szósty</li>
                <li>Punkt siódmy</li>
                <li>Punkt ósmy</li>
                <li>Punkt dziewiąty</li>
                </ol>
                <h1>Zamowienie online</h1>
                <form action="order.php" method="post">
                    Ile sztuk:
                    <input type="text" name="rzeczy"/>
                    <br/><br/>
                    Ile kg:
                    <input type="text" name="jedzenie"/>
                    <br/><br/>
                    <input type="submit" value="Wyslij zamowienie"/>
                </form>
        </div>
        <div style="clear: both;"></div>
        <div class="prostokat">
            <footer >2020&copy; Łukasz Ruzicki student</footer >
        </div>
    </div>
</body>
</html>