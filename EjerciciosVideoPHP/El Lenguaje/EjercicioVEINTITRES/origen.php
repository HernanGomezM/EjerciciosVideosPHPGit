<?php
echo "yo soy el contenido original";
include "incluido.php";
include "incluido2.php";
echo "Error ↑ que deja continuar <br />";
echo "Error ↓ que NO (require) deja continuar";
require "incluido2.php";
echo "No mostrare este mensaje";
?>