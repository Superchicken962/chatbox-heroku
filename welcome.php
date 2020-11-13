<?php
   include('session.php');
?>
<html">
<head>

<title>Private Chatbox</title>

<link rel='stylesheet' href='cb.css'>



</head>

<body>

<div id="container">

<div id="chatResults">
</div>

<div id="chat">
<input type="text" id="author" name="author"><br>
<input type="text" id="text" name="text" size="100"><br>
<input type="submit" value="Talk!" id="submitter">
</div>
</div>
<script type="text/javascript" src="jquery-1.6.1.min.js"></script>
<script type="text/javascript" src="cb.js"></script>
<a href="https://chat-box.cf">Return to Public Chatbox</a>
</body>
</html>
