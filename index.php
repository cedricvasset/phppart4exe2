<?php
$bigstring = 'Le dolmen du Coll de la Llosa est une construction mégalithique située à la limite des communes de Bouleternère, Casefabre et Saint-Michel-de-Llotes dans le département français des Pyrénées-Orientales en région Occitanie. ';
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <title>php part3 exe2</title>
  <link rel="stylesheet" href="style.css" />
</head>
<body>
  <?php
  function string($string){
    return  $string;
  }
  echo string($bigstring);
  ?>
</body>
</html>
