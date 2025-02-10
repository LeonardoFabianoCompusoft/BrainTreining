<?php
$nome = "Fabiano";

// if ($nome) {
//     echo "esse e o nome";
// } elseif ($nome == "Fabiano") {
//     echo "Opcao 2";
// }

switch ($nome) {
    case "Leonardo":
        echo "Nome Leonardo";
        break;
    case "Fabiano":
        echo "Opcao 2";
        break;
    default:
        echo "..";
}
