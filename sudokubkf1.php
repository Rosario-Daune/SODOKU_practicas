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

$a1=$_POST['a1'];            /*$b1=$_POST['b1'];*/        $c1=$_POST['c1'];
$a2=$_POST['a2'];            $b2=$_POST['b2'];            /*$c2=$_POST['c2'];*/
/*$a3=$_POST['a3'];*/        $b3=$_POST['b3'];            $c3=$_POST['c3'];
$a4=$_POST['a4'];            /*$b4=$_POST['b4'];*/        $c4=$_POST['c4'];
/*$a5=$_POST['a5'];*/        $b5=$_POST['b5'];            /*$c5=$_POST['c5'];*/

/*$d1=$_POST['d1'];*/        /*$e1=$_POST['e1'];*/
$d2=$_POST['d2'];            /*$e2=$_POST['e2'];*/
$d3=$_POST['d3'];            $e3=$_POST['e3'];
/*$d4=$_POST['d4'];*/        $e4=$_POST['e4'];
/*$d5=$_POST['d5'];*/        $e5=$_POST['e5'];



if ($a2 != 1 || $c1 != 1 || $d3 != 1 || $e5 != 1) {

    $error=$error + 1;
    

}
elseif ($a4 != 2 || $c3 != 2) {

    $error=$error + 1;


}
elseif ($b2 != 3) {
    
    $error=$error + 1;
   

}
elseif ($b3 != 4 || $e4 != 4) {
    
    $error=$error + 1; 

}
elseif ($a1 != 5 || $c4 != 5 || $d2 != 5 || $e3 != 5) {
    
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
        <td <?php if (isset ($a1)) { if ($a1 != 5) { ?> class="error" <?php } else { ?> class="noterror" <?php } } else { ?> class="noterror" <?php } ?>><p class="numero">5</p></td>
        <td <?php if (isset ($a2)) { if ($a2 != 1) { ?> class="error" <?php } else { ?> class="noterror" <?php } } else { ?> class="noterror" <?php } ?>><p class="numero">1</p></td>
        <td <?php if (isset ($a3)) { if ($a3 != 3) { ?> class="error" <?php } else { ?> class="noterror" <?php } } else { ?> class="noterror" <?php } ?>><p class="numero">3</p></td>
        <td <?php if (isset ($a4)) { if ($a4 != 2) { ?> class="error" <?php } else { ?> class="noterror" <?php } } else { ?> class="noterror" <?php } ?>><p class="numero">2</p></td>
        <td <?php if (isset ($a5)) { if ($a5 != 4) { ?> class="error" <?php } else { ?> class="noterror" <?php } } else { ?> class="noterror" <?php } ?>><p class="numero">4</p></td>
    </tr>
    <tr>
        <td <?php if (isset ($b1)) { if ($b1 != 2) { ?> class="error" <?php } else { ?> class="noterror" <?php } } else { ?> class="noterror" <?php } ?>><p class="numero">2</p></td>
        <td <?php if (isset ($b2)) { if ($b2 != 3) { ?> class="error" <?php } else { ?> class="noterror" <?php } } else { ?> class="noterror" <?php } ?>><p class="numero">3</p></td>
        <td <?php if (isset ($b3)) { if ($b3 != 4) { ?> class="error" <?php } else { ?> class="noterror" <?php } } else { ?> class="noterror" <?php } ?>><p class="numero">4</p></td>
        <td <?php if (isset ($b4)) { if ($b4 != 1) { ?> class="error" <?php } else { ?> class="noterror" <?php } } else { ?> class="noterror" <?php } ?>><p class="numero">1</p></td>
        <td <?php if (isset ($b5)) { if ($b5 != 5) { ?> class="error" <?php } else { ?> class="noterror" <?php } } else { ?> class="noterror" <?php } ?>><p class="numero">5</p></td>
    </tr>
    <tr>
        <td <?php if (isset ($c1)) { if ($c1 != 1) { ?> class="error" <?php } else { ?> class="noterror" <?php } } else { ?> class="noterror" <?php } ?>><p class="numero">1</p></td>
        <td <?php if (isset ($c2)) { if ($c2 != 4) { ?> class="error" <?php } else { ?> class="noterror" <?php } } else { ?> class="noterror" <?php } ?>><p class="numero">4</p></td>
        <td <?php if (isset ($c3)) { if ($c3 != 2) { ?> class="error" <?php } else { ?> class="noterror" <?php } } else { ?> class="noterror" <?php } ?>><p class="numero">2</p></td>
        <td <?php if (isset ($c4)) { if ($c4 != 5) { ?> class="error" <?php } else { ?> class="noterror" <?php } } else { ?> class="noterror" <?php } ?>><p class="numero">5</p></td>
        <td <?php if (isset ($c5)) { if ($c5 != 3) { ?> class="error" <?php } else { ?> class="noterror" <?php } } else { ?> class="noterror" <?php } ?>><p class="numero">3</p></td>
    </tr>
    <tr>
        <td <?php if (isset ($d1)) { if ($d1 != 4) { ?> class="error" <?php } else { ?> class="noterror" <?php } } else { ?> class="noterror" <?php } ?>><p class="numero">4</p></td>
        <td <?php if (isset ($d2)) { if ($d2 != 5) { ?> class="error" <?php } else { ?> class="noterror" <?php } } else { ?> class="noterror" <?php } ?>><p class="numero">5</p></td>
        <td <?php if (isset ($d3)) { if ($d3 != 1) { ?> class="error" <?php } else { ?> class="noterror" <?php } } else { ?> class="noterror" <?php } ?>><p class="numero">1</p></td>
        <td <?php if (isset ($d4)) { if ($d4 != 3) { ?> class="error" <?php } else { ?> class="noterror" <?php } } else { ?> class="noterror" <?php } ?>><p class="numero">3</p></td>
        <td <?php if (isset ($d5)) { if ($d5 != 2) { ?> class="error" <?php } else { ?> class="noterror" <?php } } else { ?> class="noterror" <?php } ?>><p class="numero">2</p></td>
    </tr>
    <tr>
        <td <?php if (isset ($e1)) { if ($e1 != 3) { ?> class="error" <?php } else { ?> class="noterror" <?php } } else { ?> class="noterror" <?php } ?>><p class="numero">3</p></td>
        <td <?php if (isset ($e2)) { if ($e2 != 2) { ?> class="error" <?php } else { ?> class="noterror" <?php } } else { ?> class="noterror" <?php } ?>><p class="numero">2</p></td>
        <td <?php if (isset ($e3)) { if ($e3 != 5) { ?> class="error" <?php } else { ?> class="noterror" <?php } } else { ?> class="noterror" <?php } ?>><p class="numero">5</p></td>
        <td <?php if (isset ($e4)) { if ($e4 != 4) { ?> class="error" <?php } else { ?> class="noterror" <?php } } else { ?> class="noterror" <?php } ?>><p class="numero">4</p></td>
        <td <?php if (isset ($e5)) { if ($e5 != 1) { ?> class="error" <?php } else { ?> class="noterror" <?php } } else { ?> class="noterror" <?php } ?>><p class="numero">1</p></td>
    </tr>

</table><br><br>
  
<div>
    <form method="post" class="botones">
        <input type="submit" value="Repetir Nivel" formaction="sudokuf1.php"> 
        <input type="submit" value="Volver" formaction="dificultad.php">  
        <!--<input type="submit" value="Ver Niveles">-->
    </form>
</div>

</body>
</html>

<?php

}

?>