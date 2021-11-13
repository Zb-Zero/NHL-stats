
<html>
<head>

</head>
<body>
<h1>NHL Stats Page</h1>
<p>Enter the year here</p>

<?php
session_start();
$_SESSION['year'] = $date;
?>

<form method="post" action='getstats.php'>
    <input type="text" name="year" />
    <input type="submit" value="submit" />
</form>







</body>

</html>
