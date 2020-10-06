<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <button></button>
  <?php
  
  function sumNumber($n) {
    $f = 0; 
    $sum = 0;
    for ( $i = 2; $i < $n ; $i++ )
    {
        for ($j = 2; $j <= $i; $j++)
        {
          if ($i % $j == 0 ) 
          {
              $f++;
          }
        }
        if ($f<=1) 
        {
            echo "<br>".$i . ", ";
            $sum += $i;
        }
        $f =0 ;
    }
    echo "<br> Sum prime numbers = ".$sum;        
  } 
 
  sumNumber(126);      
  ?>
</body>

</html>