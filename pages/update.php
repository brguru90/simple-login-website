<html>
<!--------------------------------------header-------------------------------------------->
<?php include("header.php"); ?>
<!--------------------------------------header-------------------------------------------->
<div id="wrapper">
	<div id="page-wrapper">
		<div id="page">
			<div id="content">
			<style>
			th,td{text-align:left;font-size:18px;border:solid 1px silver;border-radius:5px;height:45px;background:violet}
			th{padding-left:20px;padding-right:20px;}
			tr{border-radius:5px;}
			table{border:solid 2px silver;background:lime;}
			#forminput{height:40px;margin:0px 40px 0px 10px;border-radius:10px;background:aqua;}
			.formbutton2{height:40px;width:80px;border-radius:10px;}
			</style>
			
			<form action="updt.php" method="post" enctype='multipart/form-data'>
			<table>
			<tr>
				<th>
				enter details to be updated:
				register no:
				</th>
				<td><input type="text" value="139cs13011" name="reg" id="forminput" /></td>
			</tr>
			<tr>
				<th>
				name:
				</th>
				<td><input type="text" value="guru" name="name" id="forminput" /></td>
			</tr>
			<tr>
				<th>
				sem:
				</th>
				<td>
				<select name="sem">
				<option>1</option>
				<option>2</option>
				<option>3</option>
				<option>4</option>
				<option>5</option>
				<option>6</option>
				</select>
				</td>
			</tr>
			<tr>
				<th>
				branch:
				</th>
				<td>
				<select name="branch">
				<option>computer science & engg</option>
				<option>civil</option>
				<option>electronic & communication</option>
				<option>commercial practice</option>
				<option>mechanical</option>
				<option>information science</option>
				</select>
				</td>
			</tr>
			<tr>
				<th>
				Select image to upload:
				</th>
				<td><input type="file" name="fileToUpload" id="fileToUpload"  class="formbutton2" /></td>
			</tr>
				</table>
				<input type="submit" value="update" name="update" id="formbutton" />
			</form>
			</div>
<!--------------------------------------notification-------------------------------------------->
			<?php include("notification.php"); ?>
<!--------------------------------------notification-------------------------------------------->
		</div>
	</div>
</div>
<!--------------------------------------footer-------------------------------------------->
<?php include("footer.php"); ?>
<!--------------------------------------footer-------------------------------------------->
</html>