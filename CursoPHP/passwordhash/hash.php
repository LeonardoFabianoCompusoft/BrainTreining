<?php

$senha = "leo@123";

$hash = password_hash($senha, PASSWORD_DEFAULT);

echo var_dump($hash);

$senhaGuardada = '';

echo var_dump(password_verify($senha, $senhaGuardada));