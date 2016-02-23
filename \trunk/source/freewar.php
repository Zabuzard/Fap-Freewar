<html>
<head>
<title>Freewar - <?php echo htmlspecialchars($_GET["world"]); ?></title>
<script language='javascript'>

function doIt() {
	div = document.getElementById("extra");
	div.style.height = (screen.height - 275) / 1.75;
	div.style.width = screen.width - 800;
	height = div.style.height;
	height = height.substring(0, height.length - 2);
	width = div.style.width;
	width = width.substring(0, width.length - 2);
	div.style.top = -200 -23 -23 - height;
	div.style.left = screen.width - 280 - 17 - width;
	button = document.getElementById("button");
	button.style.top = -200 - 23 - 23;
	button.style.left = screen.width - 280 - 17 - 54;
	button.style.display = "block";
	hrefbutton = document.getElementById("href");
	hrefbutton.style.top = -200 - 22;
	hrefbutton.style.left = screen.width - 280 - 17 - 54 - 56;
	hrefbutton.style.display = "block";
}

function toogle() {
	if(div.style.display == "none") {
		hrefbutton.style.top = -200 - 22 - height ;
		button.style.top = -200 - 23 -23 - height ;
		button.value = "hide";
		div.style.display = "block";
	} else {
		div.style.display = "none";
		hrefbutton.style.top = -200 - 22;
		button.style.top = -200 -23 -23;
		button.value = "show";
	}
}

function href() {
	var adress = window.prompt("Type in a webadress.","http://");
	if(adress != null && adress != "http://" && adress != "") {
		document.getElementById("search").src = adress;
	}
}
</script>
<style type="text/css">
html, body, iframe, table { margin:0; padding:0; height:100%; width:100%;}
div {padding-right:15px;padding-bottom:2px; resize:both; overflow:auto;}
body {overflow:hidden;}
iframe { display:block; border:none;}
table {border-spacing:0; border-collapse:collapse;}
table td {margin:0; padding:0px;}
</style>
</head>
<body onload="doIt()">
<table border="0">
<tr>
<td>
	<table border ="0">
	<tr><td>
		<table border ="0">
		<tr><td style="height:75px">
			<iframe src="http://<?php echo htmlspecialchars($_GET["world"]); ?>.freewar.de/freewar/internal/banner.php" name="bannerFrame" scrolling="no"></iframe>
		</td></tr>
		<tr><td>
			<iframe src="http://<?php echo htmlspecialchars($_GET["world"]); ?>.freewar.de/freewar/internal/main.php" name="mainFrame" scrolling="auto"></iframe>
		</td></tr>
		</table>
	</td></tr>
	<tr><td style="height:200px">
		<table border ="0">
		<tr><td>
			<table border ="0">
			<tr><td>
				<iframe src="http://<?php echo htmlspecialchars($_GET["world"]); ?>.freewar.de/freewar/internal/chattext.php#bancor" name="chattextFrame" scrolling="auto" noresize></iframe>
			</td></tr>
			<tr><td style="height:35px">
				<iframe src="http://<?php echo htmlspecialchars($_GET["world"]); ?>.freewar.de/freewar/internal/chatform.php" name="chatformFrame" scrolling="no" noresize></iframe>
			</td></tr>
			</table>
		</td></tr>
		<tr><td style="height:0px">
			<table border ="0">
			<tr><td>
			<iframe src="http://<?php echo htmlspecialchars($_GET["world"]); ?>.freewar.de/freewar/internal/refresh.php" name="reloadChatFrame" style="width:0px; height:0px;" scrolling="no" noresize></iframe>
			</td></tr>
			<tr><td style="height:0px">
			<iframe src="http://<?php echo htmlspecialchars($_GET["world"]); ?>.freewar.de/freewar/internal/chatupdate.php" name="chatupdateFrame" style="width:0px; height:0px;" scrolling="no" noresize></iframe>
			</td></tr>
			</table>
		</td></tr>
		</table>
	</td></tr>
	</table>
</td>
<td style="width:280px">
	<table border ="0">
	<tr><td>
	<iframe src="http://<?php echo htmlspecialchars($_GET["world"]); ?>.freewar.de/freewar/internal/item.php" name="itemFrame" scrolling="auto" noresize></iframe>
	</td></tr>
	<tr><td style="height:360px">
		<table border ="0">
		<tr><td>
			<iframe src="http://<?php echo htmlspecialchars($_GET["world"]); ?>.freewar.de/freewar/internal/map.php?reload=1" name="mapFrame" scrolling="no" noresize></iframe>
		</td></tr>
		<tr><td style="height:65px">
			<iframe src="http://<?php echo htmlspecialchars($_GET["world"]); ?>.freewar.de/freewar/internal/menu.php" name="menuFrame" scrolling="no" noresize></iframe>
		</td></tr>
		</table>
	</td></tr>
	</table>
</td>
</tr>
</table>
<input id="href" type="button" name="href" value="href" onclick="href()" style="display:none; position:relative;">
<input id="button" type="button" name="toogle" value="show" onclick="toogle()" style="display:none; position:relative;">
<div style="position:relative; display:none; background-color:white;" id="extra"><iframe src="http://www.bing.com/" id="search" scrolling="auto" noresize></iframe></div>
</body>
</html>