<?php
$argv = $_SERVER['argv'];
if ($argv[1] == 'composer' || $argv[1] == 'bash') {
    unset($argv[0]);
    $cmd = implode(' ', $argv);
} else {
    unset($argv[0]);
    $cmd = "php bootstrap.php ".implode(' ', $argv);
}
passthru($cmd, $ret);
exit($ret);
