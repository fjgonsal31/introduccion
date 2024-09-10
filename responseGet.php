<?php

declare(strict_types=1);

include 'includes/header.php';
?>

<h2>Response GET</h2>

<?php
if (isset($_GET['nombre'])) {
    echo $_GET['nombre'];
}

echo '<br>';

if (isset($_GET['apellido'])) {
    echo $_GET['apellido'];
}

include 'includes/footer.php';
