<html>
<body>

<?php
  $commandText = '/usr/bin/python3 /var/www/html/sendMessage.py '.$_POST["user_message"];
  $output = shell_exec($commandText." 2>&1");
  if(!$output){
    echo "python exec failed";
    echo "<pre>$output</pre>";
  }
  else{
    echo "<br />";
    echo "successfully executed!";
  }
?>

<p>
You sent: <?php echo $_POST["user_message"]; ?>
</p>

</body>
</html>
