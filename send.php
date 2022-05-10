<?php

$msg = $_GET["msg"];
if (strlen($msg) > 400) {echo "<script>alert('The max limit of message should be 400 letters.'); window.location = 'index.php' </script>"; die;}
if ($msg == NULL) {echo "<script>alert('Please fill up message-box.'); window.location = 'index.php'</script>"; die;}
header('location: index.php');
echo $msg;
echo urldecode($msg);
$mfile = fopen("chat.txt", "a") or die("Sorry somthing is not working"); 
fwrite($mfile, ($_SERVER["REMOTE_ADDR"] . ":" . $_COOKIE["usr"] . ": " . $msg . "\n"));
fclose($mfile);


?>