<!DOCTYPE html>
<?php
    function createDirectory()
    {
        $add = $_POST["add"];
        mkdir(" ".$add);
        echo "<script type = 'text/javascript'>alert('Done!');</script>";
    }
?>
 
<html>
	<head>
		<link rel="stylesheet" href="css/style.css">
		<title>
			Create directory and Image Upload 
		</title>
	</head>
	
	<body>
	<?php
        if (!isset($_POST['submit'])) {
            ?>
						
		<form action = " " method = "post" class="file_form">
			
			<table>
			<tr>
				<td style = " border-style: none;"></td>
				<td style = "font-weight: bold">
					Enter Dummy Text and Then Press 'Create Directory'
				</td>
				
				<td >
					<input type = "text" style = "width: 220px;"
					class = "form-control" name = "add" id = "add" />
				</td>
				
				<td colspan = "2">
					<input type = "submit" name = "submit"
						value = "Create directory" />
				</td>
			</tr>
			</table>
		</form>
	<?php
        } else {
            createDirectory();
        }
?>
	
	<form action="uploadImg.php" method="post" enctype="multipart/form-data" class="file_form">
  Select image to upload:
  <input type="file" name="fileToUpload" id="fileToUpload">
  <input type="submit" value="Upload Image" name="submit">

	
</form>
	</body>
</html>
