<!DOCTYPE html>
<?php
    function createDirectory()
    {
        $add = $_POST["add"];
        mkdir(" ".$add);
        echo "<script type = 'text/javascript'>alert('Uploaded Complete');</script>";
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
        if (!isset($_POST['save'])) {
            ?>
            
		<form action = " " method = "post" class="file_form">
            <h1>Image Upload</h1>
                Images ( JPG, PNG, GIF, JPEG ): 
            <input type="file" name="images" /><br /><br />
			
			<input type = "text" style = "width: 220px;"
					class = "form-control" name = "add" id = "add" vlaue="text" /><br /><br />
				
			<input type = "submit" name = "save"
						value = "save" />

            <?php
                if (isset($_POST['save'])) {
                    $img_name=$_FILES['images']['name'];
                    $img_type=$_FILES['images']['type'];
                    $img_size=$_FILES['images']['size'];
                    $tmp_img_name=$_FILES['images']['tmp_name'];
                    $img_store="./".$img_name;

                    if ($img_type!="image/jpeg") {
                        echo "Only JPG images allowed";
                    } elseif ($img_size >200000) {
                        echo "Your file is too large";
                    } else {
                         move_uploaded_file($tmp_img_name, $img_store);
                            
                        }
                        echo "Uploaded Complete";
                    }
  
            ?>
				
		</form>
	<?php
        } else {
            createDirectory();
        }
?>
		
	</body>
</html>
