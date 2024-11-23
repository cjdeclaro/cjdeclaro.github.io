<link rel="stylesheet" href="style.css">

<?php

$i = 0;
for($i = 1; $i<=6; $i++){
  if($i==1 || $i==6){
    echo "<h".$i." id='".$i."' class='bgmaroon'>HELLO</h".$i.">";
  } else {
    echo "<h".$i." id='".$i."'>HELLO</h".$i.">";
  }
  
}

?>

<script>
  document.getElementById("4").innerHTML = "TEST";
  document.getElementById("2").classList.remove("bgmaroon");
  document.getElementById("2").classList.add("bgblack");
</script>