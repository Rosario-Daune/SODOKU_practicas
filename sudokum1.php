<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sudoku Game</title>
    <link rel="stylesheet" href="style.css">
</head>
<header>
    <h1>Sudoku</h1>
</header>
<body>

    <h2>Nivel 1</h2>

    <div id="game">

        <form action="sudokubkm1.php" method="post">

            <table>

                <tr>
                    <td><input type="number" class="contenedor" min="1" max="7" maxlength="1" name="a1" id="a1" required></td>
                    <td><input type="number" class="contenedor" min="1" max="7" maxlength="1" name="a2" id="a2" required></td>
                    <td><p class="numero">7</p><!--<input type="number" min="1" max="5" name="a3" id="a3">--></td>
                    <td><input type="number" class="contenedor" min="1" max="7" maxlength="1" name="a4" id="a4" required></td>
                    <td><input type="number" class="contenedor" min="1" max="7" maxlength="1" name="a5" id="a5" required></td>
                    <td><input type="number" class="contenedor" min="1" max="7" maxlength="1" name="a6" id="a6" required></td>
                    <td><p class="numero">3</p><!--<input type="number" class="contenedor" min="1" max="7" maxlength="1" name="a7" id="a7" required>--></td>
                </tr>
                <tr>
                    <td><p class="numero">7</p><!--<input type="number" class="contenedor" min="1" max="7" maxlength="1" name="b1" id="b1" required>--></td>
                    <td><input type="number" class="contenedor" min="1" max="7" maxlength="1" name="b2" id="b2" required></td>
                    <td><input type="number" class="contenedor" min="1" max="7" maxlength="1" name="b3" id="b3" required></td>
                    <td><input type="number" class="contenedor" min="1" max="7" maxlength="1" name="b4" id="b4" required></td>
                    <td><input type="number" class="contenedor" min="1" max="7" maxlength="1" name="b5" id="b5" required></td>
                    <td><p class="numero">4</p><!--<input type="number" class="contenedor" min="1" max="7" maxlength="1" name="b6" id="b6" required>--></td>
                    <td><p class="numero">2</p><!--<input type="number" class="contenedor" min="1" max="7" maxlength="1" name="b7" id="b7" required>--></td>
                </tr>
                <tr>
                    <td><input type="number" class="contenedor" min="1" max="7" maxlength="1" name="c1" id="c1" required></td>
                    <td><input type="number" class="contenedor" min="1" max="7" maxlength="1" name="c2" id="c2" required></td>
                    <td><input type="number" class="contenedor" min="1" max="7" maxlength="1" name="c3" id="c3" required></td>
                    <td><p class="numero">4</p><!--<input type="number" class="contenedor" min="1" max="7" maxlength="1" name="c4" id="c4" required>--></td>
                    <td><p class="numero">2</p><!--<input type="number" class="contenedor" min="1" max="7" maxlength="1" name="c5" id="c5" required>--></td>
                    <td><input type="number" class="contenedor" min="1" max="7" maxlength="1" name="c6" id="c6" required></td>
                    <td><input type="number" class="contenedor" min="1" max="7" maxlength="1" name="c7" id="c7" required></td>
                </tr>
                <tr>
                    <td><input type="number" class="contenedor" min="1" max="7" maxlength="1" name="d1" id="d1" required></td>
                    <td><input type="number" class="contenedor" min="1" max="7" maxlength="1" name="d2" id="d2" required></td>
                    <td><p class="numero">2</p><!--<input type="number" class="contenedor" min="1" max="7" maxlength="1" name="d3" id="d3" required>--></td>
                    <td><input type="number" class="contenedor" min="1" max="7" maxlength="1" name="d4" id="d4" required></td>
                    <td><input type="number" class="contenedor" min="1" max="7" maxlength="1" name="d5" id="d5" required></td>
                    <td><p class="numero">5</p><!--<input type="number" class="contenedor" min="1" max="7" maxlength="1" name="d7" id="d7" required>--></td>
                    <td><input type="number" class="contenedor" min="1" max="7" maxlength="1" name="d7" id="d7" required></td>
                </tr>
                <tr>
                    <td><p class="numero">2</p><!--<input type="number" class="contenedor" min="1" max="7" maxlength="1" name="e1" id="e1" required>--></td>
                    <td><input type="number" class="contenedor" min="1" max="7" maxlength="1" name="e2" id="e2" required></td>
                    <td><input type="number" class="contenedor" min="1" max="7" maxlength="1" name="e3" id="e3" required></td>
                    <td><p class="numero">5</p><!--<input type="number" class="contenedor" min="1" max="7" maxlength="1" name="e4" id="e4" required>--></td>
                    <td><input type="number" class="contenedor" min="1" max="7" maxlength="1" name="e5" id="e5" required></td>
                    <td><input type="number" class="contenedor" min="1" max="7" maxlength="1" name="e6" id="e6" required></td>
                    <td><p class="numero">4</p><!--<input type="number" class="contenedor" min="1" max="7" maxlength="1" name="e7" id="e7" required>--></td>
                </tr>
                <tr>
                    <td><input type="number" class="contenedor" min="1" max="7" maxlength="1" name="f1" id="f1" required></td>
                    <td><p class="numero">5</p><!--<input type="number" class="contenedor" min="1" max="7" maxlength="1" name="f2" id="f2" required>--></td>
                    <td><p class="numero">1</p><!--<input type="number" class="contenedor" min="1" max="7" maxlength="1" name="f3" id="f3" required>--></td>
                    <td><input type="number" class="contenedor" min="1" max="7" maxlength="1" name="f4" id="f4" required></td>
                    <td><input type="number" class="contenedor" min="1" max="7" maxlength="1" name="f5" id="f5" required></td>
                    <td><p class="numero">2</p><!--<input type="number" class="contenedor" min="1" max="7" maxlength="1" name="f6" id="f6" required>--></td>
                    <td><input type="number" class="contenedor" min="1" max="7" maxlength="1" name="f7" id="f7" required></td>
                </tr>
                <tr>
                    <td><input type="number" class="contenedor" min="1" max="7" maxlength="1" name="g1" id="g1" required></td>
                    <td><input type="number" class="contenedor" min="1" max="7" maxlength="1" name="g2" id="g2" required></td>
                    <td><p class="numero">4</p><!--<input type="number" class="contenedor" min="1" max="7" maxlength="1" name="g3" id="g3" required>--></td>
                    <td><input type="number" class="contenedor" min="1" max="7" maxlength="1" name="g4" id="g4" required></td>
                    <td><input type="number" class="contenedor" min="1" max="7" maxlength="1" name="g5" id="g5" required></td>
                    <td><input type="number" class="contenedor" min="1" max="7" maxlength="1" name="g6" id="g6" required></td>
                    <td><p class="numero">5</p><!--<input type="number" class="contenedor" min="1" max="7" maxlength="1" name="g7" id="g7" required>--></td>
                </tr>
                
            </table>

            <br><button type="reset" value="Restaurar">Restaurar</button> <input type="submit" value="Verificar">

        </form>

    </div>
</body>
</html>