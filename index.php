<!DOCTYPE html>
<html>
<head>
    <title>Omer Mohammed PHP</title>
    <!-- <style>
        div a + a {
            display: block;
            margin-bottom: 20px;
  }
  
</style> -->

</head>
<body>
    <h1>Omer Mohammed PHP</h1>
    <p>
      <?php
        $name = 'Omer Mohammed';
        $hash = hash('sha256', $name);
        echo "The SHA256 hash of  '$name' is  $hash";
    ?>
    </p>
<pre>
<?php  
echo "ASCII ART:\n\n";
      $name = "Omer";
      $letter = substr($name, 0, 1);
      $art = array(
      "    ***    ",
      "   *   *   ",
      "   *   *   ",
      "   *   *   ",
      "   *   *   ",
      "    ***    "
    );
  
    foreach ($art as $line) {
        for ($i=0; $i<strlen($line); $i++) {
            echo $line[$i];
        }
        echo "\n";
    }
  
?>
</pre>

 <div>
        <a href="fail.php ">Click here to check the error setting</a></br>
        <a href="check.php">Click here to cause a traceback</a>
    </div>
</body>
</html>
