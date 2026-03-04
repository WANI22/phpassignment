<!DOCTYPE html>
<html>
<head>
    <title>Failure Page</title>
</head>
<body>
<h1>Failure Page</h1>
<p>This page shows a fatal error as requested on the question.</p>

<?php
    echo "This is the fatal error below. <br>   ";
    
    // Calling a function that does not exist (this causes Fatal error)
    undefined_function();
?>

</body>
</html>