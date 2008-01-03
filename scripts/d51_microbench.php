#!/@php_bin@
<?php

if (!isset($argv[1]) || !is_file($argv[1]) || !is_readable($argv[1])) {
    echo "usage d51_microbench <file>\n";
    exit(1);
}
 
require_once 'Domain51/Loader.php';

$bench = new Domain51_MicroBench();
$bench->loadFromFile($argv[1]);
$bench->save();

