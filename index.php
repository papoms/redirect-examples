<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Redirect Examples</title>
     <!--[if IE]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>

<body id="home">

    <h1>Redirect Examples</h1>

<?php
    $redirectDir = '/redirect-examples/';
    $files = array_values(array_diff(scandir(__DIR__ . $redirectDir), array('.', '..')));

    if ($files) {
        echo "<ul>\n";
        foreach ( $files as $fileName ) {
            printf("<li><a href=\"%s\">%s</a></li>\n", $redirectDir . $fileName, $fileName);
        }
        echo "</ul>\n";
    }
    
?>

</body>
</html>