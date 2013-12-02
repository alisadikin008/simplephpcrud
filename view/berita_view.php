<html>
	<head>
		<script src="js/jquery-1.10.2.min.js"></script>
		<script src="ckeditor/ckeditor.js"></script>
		<link rel="stylesheet" type="text/css" href="css/layout.css"/>
		<script>
		$(function()
		{
		$(".form_input").hide();$("#close_button").hide();
		});
		function closeForm()
		{
		$("#add_button").show();$("#close_button").hide();$(".form_input").hide();
		}
		function addNews()
		{
		$("#add_button").hide();$("#close_button").show();$(".form_input").show();
		}
		</script>
	</head>
	<body>
		<div id="frame">
			<button id="add_button" onclick="addNews()">Add News</button><button id="close_button" onclick="closeForm()">Close Form</button><p>
			<div class="form_input">
				<form action="<?php $_SERVER['PHP_SELF']?>" method="post">
					<fieldset>
						<legend>Input New News</legend>
						<table>
						<tr>
							<td>News Title</td>
							<td>:</td>
							<td><input type="text" name="title" required/></td>
						</tr>
						<tr>
							<td>News Content</td>
							<td>:</td>
							<td><textarea name="content"></textarea></td>
							<script>CKEDITOR.replace('content');</script>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td><input class="submit" type="submit" name="save" value="Save"/></td>
						</tr>
					</table>
					</fieldset>					
				</form>
			</div>
			<div class="form_value">
				<table class="list">
					<tr>
						<th width=40>NO</th>
						<th width=250>Title</th>
						<th width=400>Content New</th>
						<th width=150>Action</th>
					</tr>
					<?php					
					$no=1;
					$sql="SELECT * FROM berita ORDER BY id DESC";
					$result=mysql_query($sql);
					
					while($row=mysql_fetch_array($result))
					{					
					echo"
					<tr>
						<td>$no</td>
						<td>".$row['title']."</td>
						<td>".word_limiter($row['content'],10)."</td>
						<td><a href='editnews.php?id=".$row['id']."'>Edit</a> | <a href='readnews.php?id=".$row['id']."'>Read</a> |
						<a href='deletenews.php?id=".$row['id']."'>Delete</a>
						</td>
					</tr>";
					$no++;
					}					
					?>
				</table>
			</div>
		</div>
	</body>
</html>