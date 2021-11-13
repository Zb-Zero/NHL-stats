!DOCTYPE HTML
<html>
<head>

</head>
<body>
<h1>NHL Stats Page</h1>

<form method="get" action='https://statsapi.web.nhl.com/api/v1/standings?season=2018'>
    <input type="text" name="text" />
    <input type="submit" value="submit" />
</form>
<?php
if (isset($_GET['text'])) {
    echo $_GET['text'];
}
?>





</body>

</html>
