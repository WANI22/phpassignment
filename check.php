<!DOCTYPE html>
<html>
<head>
    <title>Check Page</title>
</head>
<body>
<h1>Check Page</h1>

<pre>
<?php
    if (ini_get('display_errors')) {
        echo "display_errors=1\n";
        echo "It is all good......";
    } else {
        echo "display_errors=0\n";
        echo "Please enable display_errors in php.ini";
    }
?>
</pre>

</body>
</html>