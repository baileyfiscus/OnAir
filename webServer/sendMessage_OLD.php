<html>
<body>

<?php
  $commandText = '/usr/bin/python3 /usr/custom/sendMessage.py '.$_POST["user_message"];
  $command = escapeshellcmd($commandText);
  $output = shell_exec($command);
  $output;
  if(!$output){
    echo "python exec failed";
  }
  else{
    echo "<br />";
    echo "successfully executed!";
  }
  echo $output;
?>

<p>
You sent: <?php echo $_POST["user_message"]; ?>
</p>

<?php
  $testVar = '/usr/bin/python3 /usr/custom/sendMessage.py '.$_POST["user_message"];
  echo $testVar;
?>
</body>
</html>
