<html>

<body>
<?php
$date = $_POST['year'];

echo htmlspecialchars($_GET['https://statsapi.web.nhl.com/api/v1/standings?season='+ $date]);

 ?>




</body>

</html>
