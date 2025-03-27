<?php

function getPreference($defaultValue, $userId, $preferenceKind)
{
  $preference = $defaultValue;
  $preferenceQuery = "SELECT * FROM userPreferences WHERE userId = '$userId' AND preferenceKind = '$preferenceKind'";
  $preferenceResult = executeQuery($preferenceQuery);
  while ($preferenceRow = mysqli_fetch_assoc($preferenceResult)) {
    $preference = $preferenceRow['preferenceValue'];
  }
  return $preference;
}

?>