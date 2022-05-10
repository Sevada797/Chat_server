<?php
//echo "<script>document.getElementById(\"x\").innerHTML = '';</script>";
$mfile = fopen("admin.txt", "r") or die("Erro");
while(!feof($mfile)) {
    echo "<p style='color: green; font-size: 24px; margin: 0px'>" . fgets($mfile) . "</p>";
}
fclose($mfile);
echo "<script>setTimeout(()=>{window.location=\"msgs.php\"}, 1500)</script>";

?>
