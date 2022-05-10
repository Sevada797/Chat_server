<?php
if(!isset($_COOKIE["usr"])) {
echo "<script>let d = new Date(); d.setFullYear(d.getFullYear() + 10); function setusr() {let usrname = prompt('Գրեք ձեր անունը կամ nick֊ը'); if (usrname == '' || usrname == null || usrname == undefined) { alert('Խնդրում եմ լրացրեք վանդակը, եթե ուզում եք մուտք գործել այս կայք'); setusr() } else { document.cookie = `usr=${usrname}; path=/; expires=${d.toUTCString()}`} } setusr()</script>";
}

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>
</title>
<style>
html {height: 100%;
}
body {
height: 100%;
margin:0px;
background-color: black
}
.txt1 {
color: green;
text-align: center;
font-size: 32px;
margin: 0px
}
textarea {
background-color: black;
border-color: green;
color: green; 
width: 515px;
height: 140px;
padding: 20px 22px;
font-size: 18px;
resize: none;
border: solid 3px;
outline: none;
}
textarea::-webkit-scrollbar {display: none;}
textarea::placeholder {color: green}
.h2div {
padding-top: 60px;
padding-bottom: 100px
}
.txtdiv {
width: 100%;
display: flex;
justify-content: center;
padding: 0px
}
.forchat {
width: 100%;
height: 430px;  
display: flex;
justify-content: center}
.chat {
height: 100%;
width: 545px;
padding-left: 20px
}
iframe {
width: 100%;
border: none;
height: 400px
}
</style>
</head>
<body>
<div class="h2div"><h2 class="txt1">Sevada's chat server</h2>
</div>
<div class="forchat" id="msgs">
<div class="chat">
<iframe src="msgs.php"></iframe>

</div>
</div>
<div class="txtdiv">
    <textarea name="msg" id="inp" placeholder="Chat here">
</textarea>
</div>

<script>
let txtbox = document.getElementById("inp");
txtbox.addEventListener("keypress", function(event) {if (event.key == "Enter") {window.location.href = "send.php?msg=" + encodeURIComponent(txtbox.value)/*binary instead or anothrt get req*/;}} );



</script>
</body></html>
