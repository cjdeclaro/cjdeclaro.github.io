<?php
  $ids = "1,2,3, 4,     5";
  $ids = str_replace(" ", "", $ids);

  $ar = explode(",",$ids);
  echo implode("-", $ar);
?>