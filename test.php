<?php
include_once('Base58.php');
// https://github.com/sulaco-tech/base58-php
$base58 = new SulacoTech\Base58();

$data = "Hello World!";
$encoded = $base58->encode($data); // "2NEpo7TZRRrLZSi2U"
$decoded = $base58->decode($encoded); // "Hello World!"

//$number = '123456789009876543211234567890';
//$result = base58_encode($number);
//echo('Encoded: ' . $result . '<br>');
//echo('Decoded: ' . base58_decode($result) . '<br>');

function url($filename)
{
    $json = file_get_contents("config/" . $filename . ".json");
//    echo $json;
    $encoded = (new SulacoTech\Base58())->encode($json);
//    echo $encoded;
//    return "http://" . $encoded . ".base58.ipaas.pl/";
    return "http://" . $encoded . ".base64.ipaas.pl/";
}

echo url("tom");
//echo url("jloads");


// tom.project.ipaas.pl
//           =>  base58.ipaas.pl/dfasfsdgdhgfdhfhghhhgfhdfghfdhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh