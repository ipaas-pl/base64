<?php

$domain = array_shift((explode('.', $_SERVER['HTTP_HOST'])));
var_dump($domain);
