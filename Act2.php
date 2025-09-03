<?php
$username = "Jerome";
$role = "member";           
$active = false;            
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

if (! $active) {
    echo "Your account is inactive. Please contact support to reactivate.";
    return;
}

if ($role === "administrator") {
    echo "Hello Admin—manage the system wisely.";
}
elseif ($role === "moderator") {
    echo "Hello Moderator—thank you for helping maintain the community.";
    if ($premium) {
        echo " As a premium moderator, you have extra privileges!";
    }
}
elseif ($role === "member") {
    echo "Hello Member—welcome back.";
    if ($premium) {
        echo " Thank you for being a premium member!";
    }
}
else {
    echo "Hello Guest—please consider signing up!";
}



$notificationPreference = "sms";  

switch ($notificationPreference) {
    case "email":
        echo "You will receive notifications via Email.";
        break;
    case "sms":
        echo "You will receive notifications via SMS.";
        break;
    case "both":
        echo "You will receive notifications via both Email and SMS.";
        break;
    case "none":
        echo "You will not receive any notifications.";
        break;
    default:
        echo "Preference unrecognized. Please set to Email, SMS, Both, or None.";
        break;
}
?>