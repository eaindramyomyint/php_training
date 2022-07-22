<!doctype html>
<html>
<head>
   <meta charset="UTF-8">
   <title>Read Contents</title>
   <link rel="stylesheet" href="css/rest.css">
   <link rel="stylesheet" href="css/style.css">

</head>

<body>
<div id="container">
	<h1>Show Contents by reading from directory</h1>
  <table class="sortable">
	    <thead>
		<tr>
			<th class="name">Filename</th>
			
		</tr>
	    </thead>
	    <tbody>

	<?php
       
  	// Checks to see if veiwing hidden files is enabled
	if($_SERVER['QUERY_STRING']=="hidden")
	{$hide="";
	 $ahref="./";
	 $atext="Hide";}
	else
	{$hide=".";
	 $ahref="./?hidden";
	 $atext="Show";}

$dir = "Public";
chmod("$dir",0644);// Read and write for owner, read for everybody else
// Open a directory, and read its contents
if (is_dir($dir)){
  if ($dh = opendir($dir)){
    while (($file = readdir($dh)) !== false){
      if($file!='.' && $file!='..'){
       
      echo '<tr><td><a href ="'.$dir.'/' . $file .'">'.$file.'</td></tr>';
      
      }
    }
    closedir($dh);
  }
}
	            
	        
	    
	    ?>

	

	   </tbody>
	</table>
</div>
</body>
</html>