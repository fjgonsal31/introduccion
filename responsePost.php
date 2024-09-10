<?php

declare(strict_types=1);

include 'includes/header.php';
?>

<h2>Response POST</h2>

<?php
if (isset($_POST['nombre'])) {
    echo $_POST['nombre'];
}

echo '<br>';

if (isset($_POST['apellido'])) {
    echo $_POST['apellido'];
}

include 'includes/footer.php';
