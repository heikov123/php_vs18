<!doctype html>
<html>
<head>
    <title>Koodi taaskasutamine</title>
    <style>
        * {
            padding: 0;
            margin: 0;
            font-family: Verdana, Geneva, sans-serif;
        }
        #pais {
            background-color: #6C9;
            line-height: 100px;
        }
        #jalus {
            background-color: #F93;
            line-height: 30px;
        }
    </style>
</head>
<body>
<header id="pais">
    <h1>Lorem Ipsum web</h1>
</header>
<div id="sisu">
    <h2>Lorem ipsum</h2>
    <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris lacinia feugiat mi, ac blandit purus hendrerit vel.</p>
</div>
<div class="links">
    <a href="index.php">Avaleht</a>
    <a href="index.php?leht=portfoolio">Portfoolio</a>
    <a href="index.php?leht=kaart">Kaart</a>
    <a href="index.php?leht=kontakt">Kontakt</a>
    <a href="index.php?leht=poleolemas">Pole olemas</a>
</div>


<?php
if(!empty($_GET['leht'])){
    $leht = htmlspecialchars($_GET['leht']);
    $lubatud = array('portfoolio','kaart','kontakt');
    $kontroll = in_array($leht, $lubatud);
    if($kontroll==true){
        include($leht.'.php');
    } else {
        echo 'Seda lehte ei eksisteeri';
    }
} else {
    ?>

    <h2>Lorem ipsum</h2>
    <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris lacinia feugiat mi.</p>
    </div>

    <?php
}
?>

<footer id="jalus">
</footer>
</body>
</html>
</body>
</html>
