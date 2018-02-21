<?php


include 'shapes/autoload.php';

$program = new Program();
$renderer = new SvgRenderer(1200, 1200, 'black');



?>

<html>
    <head>
        <meta charset="utf-8">
        <title>Painter</title>
    </head>

<body>

<?php $program->run($renderer); ?>


<!--
    <svg width="900" height="900">
        <rect x="100" y="180" width="250" height="120" fill = "rgba(220, 20, 60, 0.7)" />
        <circle cx="400" cy="450" r="200" stroke-width="0" fill="rgba(240, 230, 140, 0.7)" />
        <polygon points="120,220 120,450 300,450" fill = "rgba(139, 0, 139, 0.7)" />
        <rect x="520" y="400" width="100" height="100" fill = "rgba(0, 191, 255, 0.7)" />
        <ellipse cx="720" cy="360" rx="40" ry="80" fill = "rgba(46, 139, 87, 0.7)" />

    </svg>
 -->




</body>
</html>
