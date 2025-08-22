<?
$cmd = $_GET['command'];
$escapedCmd = escapeshellarg($cmd);
passthru('SomeAp2p.exe '.$escapedCmd);
?>
