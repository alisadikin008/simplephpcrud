<html>
	<head>
		<script src="js/jquery-1.10.2.min.js"></script>
		<script src="ckeditor/ckeditor.js"></script>
		<link rel="stylesheet" type="text/css" href="css/layout.css"/>
	</head>
	<body>
		<div id="frame">
			<div class="form_input">
				<form action="<?php $_SERVER['PHP_SELF']?>" method="post">
					<fieldset>
						<legend>Edit News</legend>
						<table>
						<tr>
							<td>News Title</td>
							<td>:</td>
							<td><input type="text" name="title" value="<?php echo $row['title']?>" required/></td>
						</tr>
						<tr>
							<td>News Content</td>
							<td>:</td>
							<td><textarea name="content"><?php echo $row['content']?></textarea></td>
							<script>CKEDITOR.replace('content');</script>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td><input class="submit" type="submit" name="update" value="Save"/></td>
						</tr>
					</table>
					</fieldset>					
				</form>
			</div>			
		</div>
	</body>
</html>