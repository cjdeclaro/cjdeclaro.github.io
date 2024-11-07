<?php
  function remove_spaces($string) {
    return str_replace(" ", "+", $string);
  }

  if(isset($_GET['quote'])){
    // $website = 'https://cjdeclaro.com/demo/bugtawcoffee/quote/?quote='.remove_spaces($_GET['quote']).'&author='.remove_spaces($_GET['author']).'&book='.remove_spaces($_GET['book']);
    $website = 'https://cjdeclaro.com/demo/bugtawcoffee/quote/?quote='.remove_spaces($_GET['quote']);
		$url = 'https://api.qrserver.com/v1/create-qr-code/?size=200x200&data='.$website;
		header('Content-type: image/png');
		imagejpeg(imagecreatefrompng($url));
	} else {
    header('Location: ../manage');
  }
?>
