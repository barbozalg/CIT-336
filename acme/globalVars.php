<?php

$folders = [
    'common/',  // 0 - Snippets, functions (PHP)
    'css/',     // 1 - CSS style sheets
    'images/',  // 2 - Images (jpg, png, gif)
    'scripts/'  // 3 - Scripts (JS, JSON, AJAX, XML)
];
$title = ["Acme, inc."];
$menu = [
    ["home.php","Home"],
    ["javascript:void","Cannon"],
    ["javascript:void","Explosive"],
    ["javascript:void","Misc"],
    ["javascript:void","Rocket"],
    ["javascript:void","Trap"]
];
$links = [
    ["javascript:void","My Account"]
];


// <head> HTML doc
function headHTML($title){
global $folders;
    return '
<head>

<meta charset="utf-8">
<meta name="description" content="ACME Products">
<meta name="author" content="Luis Barboza">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="theme-color" content="#ffffff">

<title>'.$title.'</title>

<link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
<link href="'.$folders[1].'normalize.css" rel="stylesheet" type="text/css" media="screen">
<link href="'.$folders[1].'small.css" rel="stylesheet" type="text/css" media="screen">
<link href="'.$folders[1].'medium.css" rel="stylesheet" type="text/css" media="screen">
<link href="'.$folders[1].'large.css" rel="stylesheet" type="text/css" media="screen">
<link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">

</head>';
}


?>