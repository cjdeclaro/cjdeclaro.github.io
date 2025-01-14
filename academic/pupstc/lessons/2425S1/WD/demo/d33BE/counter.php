<?php
$visitQuery = "INSERT INTO visits(page) VALUES ('$page')";
executeQuery($visitQuery);
?>