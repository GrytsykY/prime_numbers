<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    .container {
      width: 80%;
      margin: 0 auto;
    }
  </style>
</head>

<body>
  <div class="container">
    <form action="index.php" method="POST">
      <input type="number" min="2" name="number" placeholder="Insert the number" />
      <button type="submit">send</button>
    </form><br>
    <?php
    $n = $_POST['number'];

    function sumNumber($n)
    {
      $f = 0;
      $sum = 0;
      $array = array();
      for ($i = 2; $i < $n; $i++) {
        for ($j = 2; $j <= $i; $j++) {
          if ($i % $j == 0) {
            $f++;
          }
        }
        if ($f <= 1) {
          $array[] = $i;
          $sum += $i;
        }
        $f = 0;
      }

      if ($array) {
        echo "<b>Entered number: " . $n . "<br><br>";
        echo "Prime numbers: </b>";
        foreach ($array as $value) {
          echo $value . " ";
        }
        echo "<b><br><br> Sum prime numbers = " . $sum;
      }
    }


    sumNumber($n);
    ?>
  </div>
</body>

</html>