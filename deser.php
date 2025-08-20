<?php
// Command Injection Vulnerability (Critical)
if (isset($_GET['ip'])) {
    $ip = $_GET['ip'];
    $output = shell_exec("ping -c 4 " . $ip);
    echo "<pre>$output</pre>";
}
?>
