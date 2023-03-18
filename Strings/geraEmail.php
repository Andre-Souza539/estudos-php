<?php



function geraEmail($n,$d,$i,$l,$p,$a){

    $nome = $n;
    $data = $d;
    $idade = $i;
    $link = $l ;
    $porcentagem = 99;
    $assinatura = $a;

    $conteudoEmail = "Olá {$nome}" . PHP_EOL . PHP_EOL. "Estamos entrando em contato para informar que na data {$data} a sua
Assinatura conosco completa {$idade} anos, e para comemorar tal feito estamos com uma promoção imperdível, um desconto 
de {$porcentagem}% na sua mensalidade, mas para garantir é preciso que você clique no link: {$link} gratos pela atenção"
        . PHP_EOL . PHP_EOL . "Atensiosamente {$assinatura}";

    return $conteudoEmail;
}

echo geraEmail(
    "André",
    "17/03/2020",
    3,
    "https://url-para-garantir-desconto.com.br/uuid:?81928-819283-27183-28741",
    99,
    "Banda Dejavu");

