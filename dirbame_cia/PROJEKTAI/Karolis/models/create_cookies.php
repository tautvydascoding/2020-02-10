<?php

$default = 'master.css'; // define stylesheets
$darkcss = 'dark.css';
$lightcss = 'light.css';

$expire = time()+60*60*24*30; // how long to remember css choice (60*60*24*30 = 30 days)

if ( (isset($_POST['css'])) && ($_POST['css'] == $lightcss) ) { // set cookie for light css
    $_SESSION['css'] = $_POST['css'];
    setcookie('css', $_POST['css'], $expire);
    }

if ( (isset($_POST['css'])) && ($_POST['css'] == $darkcss) ) { // set cookie for dark css
    $_SESSION['css'] = $_POST['css'];
    setcookie('css', $_POST['css'], $expire);
    }

if ( (isset($_POST['css'])) && ($_POST['css'] == $default) ) { // set cookie for default css
    $_SESSION['css'] = $_POST['css'];
    setcookie('css', $_POST['css'], $expire);
    }

if (isset($_COOKIE['css'])) { // check for css stored in cookie
    $savedcss = $_COOKIE['css'];
    } else {
    $savedcss = $default;
    }

if ($_SESSION['css']) { // use session css else use cookie css
    $css = $_SESSION['css'];
    } else {
    $css = $savedcss;
    }

// the filename of the stylesheet is now stored in $css

echo '<link rel="stylesheet" href="/path/to/styles/'.$css.'">';
if ( (isset($_POST['css'])) && ($_POST['css'] == $lightcss) ) { // set cookie for light css
    $_SESSION['css'] = $_POST['css'];
    setcookie('css', $_POST['css'], $expire);
    }
echo '<link rel="stylesheet" href="/path/to/styles/'.$css.'">';
?>
