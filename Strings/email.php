<?php

$email = "aljs.junca@gmail.com";

$positionAt = strpos($email,'@');

$username = substr($email, '0',$positionAt);
$domain = substr($email, $positionAt + 1);
$tam_email = strlen($email);
$upper = strtoupper($username);

echo "O e-mail é {$email}" . PHP_EOL;
echo "O username é {$username}" . PHP_EOL;
echo "O Domínio é {$domain}" . PHP_EOL;
echo "O tamanho é {$tam_email}" . PHP_EOL;
echo "O nome de usuário no banco vai ficar {$upper}" . PHP_EOL;



var_dump($email);
var_dump($username);
var_dump($domain);
var_dump($tam_email);