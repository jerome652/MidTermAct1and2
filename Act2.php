<?php
$username = "Alice";
$role = "member";           
$active = true;            
$premium = false;         
$lastLoginDaysAgo = 0;       


$welcome = $role === "admin"
    ? "Welcome, Admin."
    : "Welcome, {$username}!";


$loginMsg = $lastLoginDaysAgo <= 1
    ? "You were last active just now."
    : "You last logged in {$lastLoginDaysAgo} days ago.";

echo $welcome . "\n";
echo $loginMsg . "\n";
?>