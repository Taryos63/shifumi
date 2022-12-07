<?php
session_start();

echo ('<br>');
if ($_SESSION["pcScore"]){
    $_SESSION["pcScore"] = 0;
}

if (!(isset($_SESSION["score"]))){
    $_SESSION["score"] = 0;
}
$pcScore = $_SESSION["pcScore"];
$score = $_SESSION["pcScore"];

$moveArray = array("Pierre", "Feuille", "Ciseau");

$r = rand(0, 2);

$pcMove = $moveArray[$r];
echo($pcMove);
echo('<br>');

foreach($_POST as $move){
    if ($move == "Pierre") {
        if ($pcMove == "Pierre"){
            echo("Égalité.");
        } elseif ($pcMove == "Feuille"){
            $pcScore += 1;
            echo("Perdu...");
        } else {
            echo("Gagné !");
            $score += 1;
        }
    } elseif ($move == "Feuille") {
        if ($pcMove == "Pierre"){
            $score += 1;
            echo("Gagné !");
        } elseif ($pcMove == "Feuille"){
            echo("Égalité.");
        } else {
            $pcScore += 1;
            echo("Perdu...");
        }
    } elseif ($move == "Ciseau") {
        if ($pcMove == "Pierre"){
            $pcScore += 1;
            echo("Perdu...");
        } elseif ($pcMove == "Feuille"){
            $score += 1;
            echo("Gagné !");
        } else {
            echo("Égalité");
        }
    }
}














?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=devicewidth,initial-scale=1.0">
    <title>Index</title>
</head>
<body>
<br>
<?php echo $score." ".$pcScore;?>


<form action="" method = "post">
    <input type="submit" value="Pierre" name='p'>
    <input type="submit" value="Feuille" name='f'>
    <input type="submit" value="Ciseau" name='c'>
</form>
</body>
</html>