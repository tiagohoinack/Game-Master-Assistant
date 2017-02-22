<?php

$user = "Tiago Hoinack";
$password = "test";

echo "Usuario: {$user}<br/>" ;
echo "Senha: {$password}";
echo "<hr>";

if ($user && $password):
    echo "Tudo certo, usuário logado";

endif;