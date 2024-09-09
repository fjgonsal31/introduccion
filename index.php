<?php

include 'includes/header.php';

echo '<h2>Variables</h2>';

$nombre = 'Fran';
echo 'hola ' . $nombre;
// --------------------------------------

echo '<h2>Tipos de datos</h2>';

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
echo '<h2>Operadores</h2>';
echo 'Igual que JS.';
echo '<br>';
echo 4 ** 3 . ' (potencia 4 elevado a 3)';
// --------------------------------------

echo '<h2>Comparaciones</h2>';

echo 'Igual que JS.';
echo '<br>';
echo '<=> (menor igual mayor que)';
// --------------------------------------

echo '<h2>Algunos métodos para strings</h2>';

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

echo '<h2>Arrays</h2>';

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

echo '<h2>Arrays asociativos</h2>';
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
echo '<h2>Isset & empty</h2>';

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

echo '<h2>Algunos métodos para arrays</h2>';

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

echo '<h2>Foreach</h2>';

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

echo '<h2>Bucles</h2>';

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

echo '<h2>Ejercicio FIZZ BUZZ</h2>';
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

include 'includes/footer.php';
