<?php

declare(strict_types=1);

use function PHPSTORM_META\type;

include 'includes/header.php';

echo '<h2 id="variables">Variables</h2>';

$nombre = 'Fran';
echo 'hola ' . $nombre;
// --------------------------------------

echo '<h2 id="tiposDatos">Tipos de datos</h2>';

var_dump($nombre);
echo '<br>';

$booleano = false;

var_dump($booleano);
echo '<br>';

$num = 31;

var_dump($num);
echo '<br>';

$float = 31.28;

var_dump($float);
echo '<br>';

$array = ['hola', 'y'];

array_push($array, 'adios');
var_dump($array);
// --------------------------------------

echo '<h2 id="operadores">Operadores</h2>';
echo 'Igual que JS.';
echo '<br>';
echo 4 ** 3 . ' (potencia 4 elevado a 3)';
// --------------------------------------

echo '<h2 id="comparaciones">Comparaciones</h2>';

echo 'Igual que JS.';
echo '<br>';
echo '<=> (menor igual mayor que)';
// --------------------------------------

echo '<h2 id="metodosStrings">Métodos strings</h2>';

$texto = 'Soy una cadena y mi longitud es: ';
$longitud = strlen($texto);

echo $texto . ' ' . $longitud . ' caracteres';
echo '<br>';

$texto = 'Soy Una Cadena';

echo strtoupper($texto);
echo '<br>';
echo strtolower($texto);
echo '<br>';
echo str_replace('Una', 'la', $texto);
echo '<br>';
echo strpos($texto, 'Una');
// --------------------------------------

echo '<h2 id="arrays">Arrays</h2>';

$array = ['rojo', 'azul', 'verde'];

echo '<pre>';
var_dump($array);
echo '</pre>';
print_r($array);
echo '<br>';

$array[3] = 'blanco';

print_r($array);
echo '<br>';
array_push($array, 'naranja');
echo '<br>';
array_unshift($array, 'amarillo');
print_r($array);
// --------------------------------------

echo '<h2 id="asociativos">Arrays asociativos</h2>';
$array = [
    'nombre' => 'Fran',
    'edad' => 34,
    'estado' => [
        'casado' => false,
        'soltero' => true
    ]
];

$array['id'] = 31;

print_r($array);
echo '<br>';
var_dump($array);
echo '<br>';
echo '<pre>';
var_dump($array);
echo '</pre>';
echo '<br>';
echo $array['estado']['soltero'];
echo '<br>';
print_r($array);
// --------------------------------------
echo '<h2 id="issetEmpty">Isset & empty</h2>';

$usuarios = [];
$usuarios2 = ['juan', 'pepe', 'alberto'];

var_dump(isset($array['nombre']));
echo '<br>';
var_dump(isset($usuarios2222));
echo '<br>';
var_dump(empty($usuarios));
echo '<br>';
var_dump(empty($usuarios2));
// --------------------------------------

echo '<h2 id="metodosArrays">Métodos arrays</h2>';

$exists = in_array('juasss', $usuarios2);

if ($exists) {
    echo 'existe!!';
} else {
    echo 'no existe!!';
}

echo '<br>';
sort($usuarios2);
var_dump($usuarios2);
// --------------------------------------

echo '<h2 id="foreach">Foreach</h2>';

$colors = ['rojo', 'azul', 'verde'];

var_dump($colors);
echo '<br>';
echo count($colors);
echo '<br>';
echo sizeof($colors);
echo '<br>';

foreach ($colors as $key => $value) {
    echo $key . ' ' . $value . '<br>';
}

$worker = [
    'nombre' => 'Fran',
    'edad' => 34
];

foreach ($worker as $key => $value) {
    echo $key . ': ' . $value . '<br>';
}

$cars = [
    [
        'marca' => 'honda',
        'color' => 'white'
    ],
    [
        'marca' => 'lexus',
        'color' => 'black'
    ],
    [
        'marca' => 'toyota',
        'color' => 'grey'
    ]
];

?>
<div class="articles">
    <ol>
        <?php
        foreach ($cars as $key => $value) {
        ?>
            <li id="<?php echo $value['color']; ?>">
                <?php
                echo $value['marca'] . ' ' . $value['color'];
                ?>
            </li>
        <?php
        }
        ?>
    </ol>
</div>
<?php
// --------------------------------------

echo '<h2 id="bucles">Bucles</h2>';

for ($i = 0; $i < 10; $i++) {
    echo $i;
}

echo '<br>';

$a = 0;

while ($a < 10) {
    echo $a;
    $a++;
}

echo '<br>';

$b = 0;

switch ($b) {
    case 0:
        echo $b . ' cero';
        break;
}
// --------------------------------------

echo '<h2 id="fizzbuzz">Ejercicio FIZZ BUZZ</h2>';
$num = 16;

for ($i = 0; $i <= $num; $i++) {
    echo $i;

    if ($i % 15 === 0) {
        echo ' FIZZ BUZZ';
    } else if ($i % 3 === 0) {
        echo ' FIZZ';
    } else if ($i % 5 === 0) {
        echo ' BUZZ';
    }

    echo '<br>';
}
// --------------------------------------

echo '<h2 id="funciones">Funciones</h2>';

function sumar(int $n1, int $n2): int
{
    return $n1 + $n2;
}

echo sumar(2, 3);
// --------------------------------------

echo '<h2 id="json">JSON</h2>';

$data = array(
    "nombre" => "antoñito",
    "edad" => 30,
    "ciudad" => "Córdoba"
);

$json_data = json_encode($data, JSON_UNESCAPED_UNICODE);

echo $json_data;
echo '<br>';
var_dump($data);
// --------------------------------------

echo '<h2 id="get">GET</h2>';
?>

<h2>Formulario GET</h2>
<form action="responseGet.php" method="GET">
    <fieldset>
        <label>Nombre</label>
        <input type="text" name="nombre"><br><br>
        <label>Apellidos</label>
        <input type="text" name="apellido"><br><br>
        <button type="submit">Enviar</button>
    </fieldset>
</form>
<?php
// --------------------------------------

echo '<h2 id="post">POST</h2>';
?>

<h2>Formulario POST</h2>
<form action="responsePost.php" method="POST">
    <fieldset>
        <label>Nombre</label>
        <input type="text" name="nombre"><br><br>
        <label>Apellidos</label>
        <input type="text" name="apellido"><br><br>
        <button type="submit">Enviar</button>
    </fieldset>
</form>
<?php
// --------------------------------------

echo '<h2 id="ejercicios">Ejercicios</h2>';

// crear array con enteros
$array = [1, 5, 3, 2, 4, 8, 7, 6];

// recorrerlo y mostrarlo
function show($array)
{
    foreach ($array as $key => $value) {
        echo '[' . $key . '] ' . $value . ' ';
    }
}

show($array);
echo '<br>';

// ordenarlo de menor a mayor
sort($array);
show($array);
echo '<br>';

// mostrar su longitud
echo (count($array));
echo '<br>';

// buscar un elemento
$elemento = 4;
echo in_array($elemento, $array) ? $elemento . " existe" : $elemento . " no existe";
echo '<br>';

// añadir valores mientras sea menor a 15 elementos y mostrarlo
$n = 9;

while (count($array) < 15) {
    array_push($array, $n . ' new');
    $n++;
}

show($array);
echo '<br>';
echo '--------------------------------------';
echo '<br>';
// --------------------------------------

// comprobar si una variable está vacía
$var = '';
$var2 = 'HoLa';

echo empty($var) ? 'Está vacía' : 'No está vacía';
echo '<br>';
echo 'Añado este string si está vacío: ' . $var2;
echo '<br>';

// si lo está, rellenarla con texto en minúscula
if (empty($var)) {
    $var = strtolower($var2);
}

echo 'Lo relleno en minúscula y lo muestro: ' . $var;
echo '<br>';

// mostrar en mayúscula y negrita
echo 'Lo muestro en mayúscula y en negrita: <b>' . strtoupper($var) . '</b>';
echo '<br>';
echo '--------------------------------------';
echo '<br>';
// --------------------------------------

// crear 4 variables(string, int, arra, boolean)
// mostrar sus tipos y valores

$string = "hola";
$numero = 1;
$array = [$string, $numero];
$boolean = true;

var_dump($string);
echo '<br>';
echo gettype($string);
echo '<br>';
var_dump($numero);
echo '<br>';
echo gettype($numero);
echo '<br>';
var_dump($array);
echo '<br>';
echo gettype($array);
echo '<br>';
var_dump($boolean);
echo '<br>';
echo gettype($boolean);
echo '<br>';
echo '--------------------------------------';
echo '<br>';
// --------------------------------------

// crea un array con el contenido de la siguiente tabla
// ACCION   AVENTURA    DEPORTES
// gta      assasins    fifa 19
// cod      crash       pes 19
// pubg     pop         moto gp 19

// $array = [
//     'nombres' => ['accion', 'aventura', 'deportes'],
//     'juegos' => ['gta', 'assasins', 'fifa 19', 'cod', 'crash', 'pes 19', 'pubg', 'pop', 'moto gp 19']
// ];

$array = [
    'accion' => ['gta', 'cod', 'pubg'],
    'aventura' => ['assasins', 'crash', 'pop'],
    'deportes' => ['fifa 19', 'pes 19', 'moto gp 19']
];

$maxArray = max(array_map('count', $array));
echo "<table border='1'>";
echo "<tr>";

// foreach ($array['nombres'] as $key => $nombre) {
//     echo "<th style='width: 6rem; text-align: start;'>" . strtoupper($nombre) . "</th>";
// }

foreach ($array as $key => $nombre) {
    echo "<th style='width: 6rem; text-align: start;'>" . strtoupper($key) . "</th>";
}

echo "</tr>";

// $row = ceil(count($array['juegos']) / count($array['nombres']));
// $cont = 0;

// for ($i = 0; $i < $row; $i++) {
//     echo "<tr>";

//     foreach ($array['nombres'] as $key => $nombre) {
//         $index = $i * count($array['nombres']) + $key;
//         echo isset($array['juegos'][$index]) ? "<td>" . $array['juegos'][$index] . "</td>" : "<td></td>";
//     }

//     echo "</tr>";
// }

for ($i = 0; $i < $maxArray; $i++) {
    echo "<tr>";

    foreach ($array as $tipo => $juego) {
        echo "<td>";

        echo isset($juego[$i]) ? $juego[$i] : "";
        echo "</td>";
    }

    echo "</tr>";
}

echo "</table>";

include 'includes/footer.php';
