<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>exo4</title>
  </head>
  <body>
    <p>
      <?php
        function number($number1, $number2){
    if ($number1 > $number2) {
        return 'Le premier nombre est plus grand';
    } elseif ($number1 < $number2) {
        return 'le premier nombre est plus petit';
    } elseif ($number1 == $number2) {
        return 'les nombres sont égaux';
    }
}
echo number(21, 18);
      ?>
    </p>
  </body>
</html>
