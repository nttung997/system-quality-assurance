<?php
if (!isset($_SESSION)) {
    session_start();
    //die('2');
}
var_dump($_SESSION);
//die('1');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Group 9</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="assets\bootstrap-4.3.1-dist\css\bootstrap.css">
  <script src="assets\bootstrap-4.3.1-dist\js\jquery-3.3.1.js"></script>
  <script src="assets\bootstrap-4.3.1-dist\js\bootstrap.js"></script>
</head>
<body>

<?php
include "controller/index.php";
?>

</body>
</html>