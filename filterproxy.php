<!--
##################################

SIMPLE FILTER PROXY WITH PHP

Code by : Mr.Config
FB 		: https://fb.me/mr.config

##################################
-->
<!Doctype HTML>
<html>
	<head>
		<title>FILTER PROXY</title>
	</head>
	<body>
		<hr /><h3>INPUT</h3><hr />
		<form method="post">
			<textarea name="list" cols="100" rows="10"><?php echo (isset($_POST['list']))?$_POST['list']:'';?></textarea><br />
			<input type="submit" name="kirim" value="kirim" />
		</form>
		<hr /><h3>OUTPUT</h3><hr />
<?php
echo "\n\t\t<textarea cols=\"100\" rows=\"10\">";
if (isset($_POST['kirim'])){
	//$data1 = explode("\n",$_POST['list']);
	//$data = preg_replace('!\s+!', ':', $data1);
	//foreach($data as $line)
	//{
		if ( preg_match_all("/\b(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\W+\d{1,5}\b/", $_POST['list'], $out))
		{

			//var_export($out);
			foreach ($out[0] as $value) {
				echo $value."\n";
			}
		}
	//}
}
echo "</textarea>\n";
?>
	</body>
</html>