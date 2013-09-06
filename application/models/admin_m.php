<?php
Class Admin_m extends CI_Model
{
	function add_donor($post, $files)
	{
			
		$path = str_replace('system/', '', BASEPATH);
		$allowedExts = array("gif", "jpeg", "jpg", "png");
		$temp = explode(".", $files["file"]["name"]);
		$extension = end($temp);
		if ((($files["file"]["type"] == "image/gif")
		|| ($files["file"]["type"] == "image/jpeg")
		|| ($files["file"]["type"] == "image/jpg")
		|| ($files["file"]["type"] == "image/pjpeg")
		|| ($files["file"]["type"] == "image/x-png")
		|| ($files["file"]["type"] == "image/png"))
		&& ($files["file"]["size"] < 2000000)
		&& in_array($extension, $allowedExts))
	  	{
		  	if ($files["file"]["error"] > 0)
		    {
		    	$data['return']= "Return Code: " . $files["file"]["error"] . "<br>";
		    }
			else
	   		{
			    /*echo "Upload: " . $files["file"]["name"] . "<br>";
			    echo "Type: " . $files["file"]["type"] . "<br>";
			    echo "Size: " . ($files["file"]["size"] / 1024) . " kB<br>";
			    echo "Temp file: " . $files["file"]["tmp_name"] . "<br>";*/
			   

		  	  if (file_exists($path."uploads/" . $files["file"]["name"]))
		      {
		     	 $data['return']= $files["file"]["name"] . " already exists. ";
		      }
		    	else
		      {
				  $filename = $files["file"]["name"];
			      move_uploaded_file($files["file"]["tmp_name"], $path."uploads/" . $files["file"]["name"]);
			      //echo "Stored in: " . $path."upload/" . $files["file"]["name"];
			      $password = md5($post['password']);
			   	  $this->db->query("insert into users(name, email, is_donor, logo, username, password)values('$post[name]', '$post[email]', '1', '$filename', '$post[username]', '$password')");
			      $data['return']= "Added successfully!";
		      }
		  }
		  }
			else
		  {
		 	 $data['return']= "Invalid file";
		  }	
	  
			//redirect(base_url().'index.php/admin');
	}
}