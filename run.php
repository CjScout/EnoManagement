<?php
if($_REQUEST['webserver']=="Restart NGINX") {
    shell_exec('systemctl restart nginx');
}
if($_REQUEST['webserver']=="Update Files") {
    shell_exec('/autorun.sh');
}
if($_REQUEST['webserver']=="Restart Host") {
    shell_exec('sudo reboot');
}


if($_REQUEST['derry']=="Ping") {
    $output = shell_exec('ping 10.1.10.2');
    echo "<p>$output</p>";
}
if($_REQUEST['derry']=="Wake") {
    shell_exec('wake MAC');
}


if($_REQUEST['concord']=="Ping") {
    $output = shell_exec('ping 10.1.10.3');
    echo "<p>$output</p>";
}
if($_REQUEST['concord']=="Wake") {
    shell_exec('wake MAC');
}


if($_REQUEST['cloudnine']=="Ping") {
    $output = shell_exec('ping 10.1.10.8');
    echo "<p>$output</p>";
}
if($_REQUEST['cloudnine']=="Wake") {
    shell_exec('wake MAC');
}


if($_REQUEST['hooksett']=="Ping") {
    $output = shell_exec('ping 10.1.10.9');
    echo "<p>$output</p>";
}
if($_REQUEST['hooksett']=="Wake") {
    shell_exec('wake MAC');
}


if($_REQUEST['apone']=="Ping") {
    $output = shell_exec('ping 10.1.10.10');
    echo "<p>$output</p>";
}
if($_REQUEST['aptwo']=="Ping") {
    $output = shell_exec('ping 10.1.10.11');
    echo "<p>$output</p>";
}


if($_REQUEST['chester']=="Ping") {
    $output = shell_exec('ping 10.1.10.15');
    echo "<p>$output</p>";
}
if($_REQUEST['chester']=="Wake") {
    shell_exec('wake MAC');
}


if($_REQUEST['sandown']=="Ping") {
    $output = shell_exec('ping 10.1.10.17');
    echo "<p>$output</p>";
}
if($_REQUEST['sandown']=="Wake") {
    shell_exec('wake MAC');
}


if($_REQUEST['fremont']=="Ping") {
    $output = shell_exec('ping 10.1.10.18');
    echo "<p>$output</p>";
}
if($_REQUEST['fremont']=="Wake") {
    shell_exec('wake MAC');
}
?>
