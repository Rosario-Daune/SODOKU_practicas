<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php

$error=0;

$a1=$_POST['a1'];           /*$b1=$_POST['b1'];*/       $c1=$_POST['c1'];
$a2=$_POST['a2'];           $b2=$_POST['b2'];           $c2=$_POST['c2'];
/*$a3=$_POST['a3'];*/       $b3=$_POST['b3'];           $c3=$_POST['c3'];
$a4=$_POST['a4'];           $b4=$_POST['b4'];           /*$c4=$_POST['c4'];*/
$a5=$_POST['a5'];           $b5=$_POST['b5'];           /*$c5=$_POST['c5'];*/
$a6=$_POST['a6'];           /*$b5=$_POST['b6'];*/       $c6=$_POST['c6'];
/*$a5=$_POST['a7'];*/       /*$b5=$_POST['b7'];*/       $c7=$_POST['c7'];

$d1=$_POST['d1'];           /*$e1=$_POST['e1'];*/       $f1=$_POST['f1'];
$d2=$_POST['d2'];           $e2=$_POST['e2'];           /*$f2=$_POST['f2'];*/
/*$d3=$_POST['d3'];*/       $e3=$_POST['e3'];           /*$f3=$_POST['f3'];*/
$d4=$_POST['d4'];           /*$e4=$_POST['e4'];*/       $f4=$_POST['f4'];
$d5=$_POST['d5'];           $e5=$_POST['e5'];           $f5=$_POST['f5'];
/*$d6=$_POST['d6'];*/       $e6=$_POST['e6'];           /*$f6=$_POST['f6'];*/
$d7=$_POST['d7'];           /*$e7=$_POST['e7'];*/       $f7=$_POST['f7'];

$g1=$_POST['g1'];
$g2=$_POST['g2'];
/*$g3=$_POST['g3'];*/
$g4=$_POST['g4'];
$g5=$_POST['g5'];
$g6=$_POST['g6'];
/*$g7=$_POST['g7'];*/


if ($a6 != 1 || $b4 != 1 || $c2 != 1 || $d7 != 1 || $e5 != 1 || $g1 != 1) {

    $error=$error + 1;
    

}
elseif ($a2 != 2 || $g4 != 2) {

    $error=$error + 1;


}
elseif ($b5 != 3 || $c3 != 3 || $d1 != 3 || $e6 != 3 || $f4 != 3 || $g2 != 3) {
    
    $error=$error + 1;
   

}
elseif ($a1 != 4 || $d2 != 4 || $f5 != 4) {
    
    $error=$error + 1; 

}
elseif ($a5 != 5 || $b3 != 5 || $c1 != 5) {
    
    $error=$error + 1;

}
elseif ($a4 != 6 || $b2 != 6 || $c7 != 6 || $d5 != 6 || $e3 != 6 || $f1 != 6 || $g6 != 6) {
    
    $error=$error + 1;

}
elseif ($c6 != 7 || $d4 != 7 || $e2 != 7 || $f7 != 7 || $g5 != 7) {
    
    $error=$error + 1;

}
else {

    ?> 
    <div>
    <h1>Completaste el nivel correctamente </h1>

    <form method="post" class="botones">
        <input type="submit" value="Avanzar al siguiente nivel"> 
        <input type="submit" value="Volver"> 
        <!--<input type="submit" value="Ver Niveles">-->
    </form>    
    </div>
    <?php
}

if ($error>0) {

?>

<h1>Te equivocaste tenes que intentarlo nuevamente</h1>

<table>

    <tr>
        <td <?php if (isset ($a1)) { if ($a1 != 4) { ?> class="error" <?php } else { ?> class="noterror" <?php } } else { ?> class="noterror" <?php } ?>><p class="numero">4</p></td>
        <td <?php if (isset ($a2)) { if ($a2 != 2) { ?> class="error" <?php } else { ?> class="noterror" <?php } } else { ?> class="noterror" <?php } ?>><p class="numero">2</p></td>
        <td <?php if (isset ($a3)) { if ($a3 != 7) { ?> class="error" <?php } else { ?> class="noterror" <?php } } else { ?> class="noterror" <?php } ?>><p class="numero">7</p></td>
        <td <?php if (isset ($a4)) { if ($a4 != 6) { ?> class="error" <?php } else { ?> class="noterror" <?php } } else { ?> class="noterror" <?php } ?>><p class="numero">6</p></td>
        <td <?php if (isset ($a5)) { if ($a5 != 5) { ?> class="error" <?php } else { ?> class="noterror" <?php } } else { ?> class="noterror" <?php } ?>><p class="numero">5</p></td>
        <td <?php if (isset ($a6)) { if ($a6 != 1) { ?> class="error" <?php } else { ?> class="noterror" <?php } } else { ?> class="noterror" <?php } ?>><p class="numero">1</p></td>
        <td <?php if (isset ($a7)) { if ($a7 != 3) { ?> class="error" <?php } else { ?> class="noterror" <?php } } else { ?> class="noterror" <?php } ?>><p class="numero">3</p></td>
    </tr>
    <tr>
        <td <?php if (isset ($b1)) { if ($b1 != 7) { ?> class="error" <?php } else { ?> class="noterror" <?php } } else { ?> class="noterror" <?php } ?>><p class="numero">7</p></td>
        <td <?php if (isset ($b2)) { if ($b2 != 6) { ?> class="error" <?php } else { ?> class="noterror" <?php } } else { ?> class="noterror" <?php } ?>><p class="numero">6</p></td>
        <td <?php if (isset ($b3)) { if ($b3 != 5) { ?> class="error" <?php } else { ?> class="noterror" <?php } } else { ?> class="noterror" <?php } ?>><p class="numero">5</p></td>
        <td <?php if (isset ($b4)) { if ($b4 != 1) { ?> class="error" <?php } else { ?> class="noterror" <?php } } else { ?> class="noterror" <?php } ?>><p class="numero">1</p></td>
        <td <?php if (isset ($b5)) { if ($b5 != 3) { ?> class="error" <?php } else { ?> class="noterror" <?php } } else { ?> class="noterror" <?php } ?>><p class="numero">3</p></td>
        <td <?php if (isset ($b6)) { if ($b6 != 4) { ?> class="error" <?php } else { ?> class="noterror" <?php } } else { ?> class="noterror" <?php } ?>><p class="numero">4</p></td>
        <td <?php if (isset ($b7)) { if ($b7 != 2) { ?> class="error" <?php } else { ?> class="noterror" <?php } } else { ?> class="noterror" <?php } ?>><p class="numero">2</p></td>
    </tr>
    <tr>
        <td <?php if (isset ($c1)) { if ($c1 != 5) { ?> class="error" <?php } else { ?> class="noterror" <?php } } else { ?> class="noterror" <?php } ?>><p class="numero">5</p></td>
        <td <?php if (isset ($c2)) { if ($c2 != 1) { ?> class="error" <?php } else { ?> class="noterror" <?php } } else { ?> class="noterror" <?php } ?>><p class="numero">1</p></td>
        <td <?php if (isset ($c3)) { if ($c3 != 3) { ?> class="error" <?php } else { ?> class="noterror" <?php } } else { ?> class="noterror" <?php } ?>><p class="numero">3</p></td>
        <td <?php if (isset ($c4)) { if ($c4 != 4) { ?> class="error" <?php } else { ?> class="noterror" <?php } } else { ?> class="noterror" <?php } ?>><p class="numero">4</p></td>
        <td <?php if (isset ($c5)) { if ($c5 != 2) { ?> class="error" <?php } else { ?> class="noterror" <?php } } else { ?> class="noterror" <?php } ?>><p class="numero">2</p></td>
        <td <?php if (isset ($c6)) { if ($c6 != 7) { ?> class="error" <?php } else { ?> class="noterror" <?php } } else { ?> class="noterror" <?php } ?>><p class="numero">7</p></td>
        <td <?php if (isset ($c7)) { if ($c7 != 6) { ?> class="error" <?php } else { ?> class="noterror" <?php } } else { ?> class="noterror" <?php } ?>><p class="numero">6</p></td>
    </tr>
    <tr>
        <td <?php if (isset ($d1)) { if ($d1 != 3) { ?> class="error" <?php } else { ?> class="noterror" <?php } } else { ?> class="noterror" <?php } ?>><p class="numero">3</p></td>
        <td <?php if (isset ($d2)) { if ($d2 != 4) { ?> class="error" <?php } else { ?> class="noterror" <?php } } else { ?> class="noterror" <?php } ?>><p class="numero">4</p></td>
        <td <?php if (isset ($d3)) { if ($d3 != 2) { ?> class="error" <?php } else { ?> class="noterror" <?php } } else { ?> class="noterror" <?php } ?>><p class="numero">2</p></td>
        <td <?php if (isset ($d4)) { if ($d4 != 7) { ?> class="error" <?php } else { ?> class="noterror" <?php } } else { ?> class="noterror" <?php } ?>><p class="numero">7</p></td>
        <td <?php if (isset ($d5)) { if ($d5 != 6) { ?> class="error" <?php } else { ?> class="noterror" <?php } } else { ?> class="noterror" <?php } ?>><p class="numero">6</p></td>
        <td <?php if (isset ($d6)) { if ($d6 != 5) { ?> class="error" <?php } else { ?> class="noterror" <?php } } else { ?> class="noterror" <?php } ?>><p class="numero">5</p></td>
        <td <?php if (isset ($d7)) { if ($d7 != 1) { ?> class="error" <?php } else { ?> class="noterror" <?php } } else { ?> class="noterror" <?php } ?>><p class="numero">1</p></td>
    </tr>
    <tr>
        <td <?php if (isset ($e1)) { if ($e1 != 2) { ?> class="error" <?php } else { ?> class="noterror" <?php } } else { ?> class="noterror" <?php } ?>><p class="numero">2</p></td>
        <td <?php if (isset ($e2)) { if ($e2 != 7) { ?> class="error" <?php } else { ?> class="noterror" <?php } } else { ?> class="noterror" <?php } ?>><p class="numero">7</p></td>
        <td <?php if (isset ($e3)) { if ($e3 != 6) { ?> class="error" <?php } else { ?> class="noterror" <?php } } else { ?> class="noterror" <?php } ?>><p class="numero">6</p></td>
        <td <?php if (isset ($e4)) { if ($e4 != 5) { ?> class="error" <?php } else { ?> class="noterror" <?php } } else { ?> class="noterror" <?php } ?>><p class="numero">5</p></td>
        <td <?php if (isset ($e5)) { if ($e5 != 1) { ?> class="error" <?php } else { ?> class="noterror" <?php } } else { ?> class="noterror" <?php } ?>><p class="numero">1</p></td>
        <td <?php if (isset ($e6)) { if ($e6 != 3) { ?> class="error" <?php } else { ?> class="noterror" <?php } } else { ?> class="noterror" <?php } ?>><p class="numero">3</p></td>
        <td <?php if (isset ($e7)) { if ($e7 != 4) { ?> class="error" <?php } else { ?> class="noterror" <?php } } else { ?> class="noterror" <?php } ?>><p class="numero">4</p></td>
    </tr>
    <tr>
        <td <?php if (isset ($f1)) { if ($f1 != 6) { ?> class="error" <?php } else { ?> class="noterror" <?php } } else { ?> class="noterror" <?php } ?>><p class="numero">6</p></td>
        <td <?php if (isset ($f2)) { if ($f2 != 5) { ?> class="error" <?php } else { ?> class="noterror" <?php } } else { ?> class="noterror" <?php } ?>><p class="numero">5</p></td>
        <td <?php if (isset ($f3)) { if ($f3 != 1) { ?> class="error" <?php } else { ?> class="noterror" <?php } } else { ?> class="noterror" <?php } ?>><p class="numero">1</p></td>
        <td <?php if (isset ($f4)) { if ($f4 != 3) { ?> class="error" <?php } else { ?> class="noterror" <?php } } else { ?> class="noterror" <?php } ?>><p class="numero">3</p></td>
        <td <?php if (isset ($f5)) { if ($f5 != 4) { ?> class="error" <?php } else { ?> class="noterror" <?php } } else { ?> class="noterror" <?php } ?>><p class="numero">4</p></td>
        <td <?php if (isset ($f6)) { if ($f6 != 2) { ?> class="error" <?php } else { ?> class="noterror" <?php } } else { ?> class="noterror" <?php } ?>><p class="numero">2</p></td>
        <td <?php if (isset ($f7)) { if ($f7 != 7) { ?> class="error" <?php } else { ?> class="noterror" <?php } } else { ?> class="noterror" <?php } ?>><p class="numero">7</p></td>
    </tr>
    <tr>
        <td <?php if (isset ($g1)) { if ($g1 != 1) { ?> class="error" <?php } else { ?> class="noterror" <?php } } else { ?> class="noterror" <?php } ?>><p class="numero">1</p></td>
        <td <?php if (isset ($g2)) { if ($g2 != 3) { ?> class="error" <?php } else { ?> class="noterror" <?php } } else { ?> class="noterror" <?php } ?>><p class="numero">3</p></td>
        <td <?php if (isset ($g3)) { if ($g3 != 4) { ?> class="error" <?php } else { ?> class="noterror" <?php } } else { ?> class="noterror" <?php } ?>><p class="numero">4</p></td>
        <td <?php if (isset ($g4)) { if ($g4 != 2) { ?> class="error" <?php } else { ?> class="noterror" <?php } } else { ?> class="noterror" <?php } ?>><p class="numero">2</p></td>
        <td <?php if (isset ($g5)) { if ($g5 != 7) { ?> class="error" <?php } else { ?> class="noterror" <?php } } else { ?> class="noterror" <?php } ?>><p class="numero">7</p></td>
        <td <?php if (isset ($g6)) { if ($g6 != 6) { ?> class="error" <?php } else { ?> class="noterror" <?php } } else { ?> class="noterror" <?php } ?>><p class="numero">6</p></td>
        <td <?php if (isset ($g7)) { if ($g7 != 5) { ?> class="error" <?php } else { ?> class="noterror" <?php } } else { ?> class="noterror" <?php } ?>><p class="numero">5</p></td>
    </tr>

</table><br><br>
  
<div>
    <form method="post" class="botones">
        <input type="submit" value="Repetir Nivel" formaction="sudokum1.php"> 
        <input type="submit" value="Volver" formaction="dificultad.php"> 
        <!--<input type="submit" value="Ver Niveles">-->
    </form>
</div>

</body>
</html>

<?php

}

?>