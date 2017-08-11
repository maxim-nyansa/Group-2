<!DOCTYPE>
<html>
	<head>
		<meta content="text/html; charset=utf-8" />
		<title>Gallery</title>
		
		<style type="text/css">
			img
			{
			 width:auto;
			 box-shadow:0px 0px 20px #cecece;
			 -moz-transform: scale(0.7);
			 -moz-transition-duration: 0.6s; 
			 -webkit-transition-duration: 0.6s;
			 -webkit-transform: scale(0.7);
			 
			 -ms-transform: scale(0.7);
			 -ms-transition-duration: 0.6s; 
			}
			img:hover
			{
			  box-shadow: 20px 20px 20px #dcdcdc;
			 -moz-transform: scale(0.8);
			 -moz-transition-duration: 0.6s;
			 -webkit-transition-duration: 0.6s;
			 -webkit-transform: scale(0.8);
			 
			 -ms-transform: scale(0.8);
			 -ms-transition-duration: 0.6s;
			 
			}

		</style>
	</head>

	<body>
		<?php
		$folder_path = 'images/';

		$num_files = glob("*.{JPG,jpg,gif,png,bmp}", GLOB_BRACE);

		$folder = opendir($folder_path);
		 
		if($num_files > 0){
 			while(false !== ($file = readdir($folder))) 
 		{

			  $file_path = $folder_path.$file;
			  $extension = strtolower(pathinfo($file ,PATHINFO_EXTENSION));
		  		if($extension=='jpg' || $extension =='png' || $extension == 'gif' || $extension == 'bmp'){
   		?>
            		<a href="<?php echo $file_path; ?>"><img src="<?php echo $file_path; ?>"  height="250" /></a>
        <?php
				  }
 			}	
		}

		else{
 			echo "the folder was empty !";
		}

		closedir($folder);
		
		?>
	</body>
</html>