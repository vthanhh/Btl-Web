<?php 
	require "config.php";
	
	//update
	if(isset($_POST["update"]))
	{
		$Struc_ID = $_POST["id"];
		$Struc_Name = $_POST["Name"];
		$description = $_POST["description"];
		$target_dir = "struc_img/";
		$target_file = $target_dir . basename($_FILES["img"]["name"]);

		$sql = "update tbl_structures set Struc_Name=N'".$name."',Description=N'".$description."', Image= '".$target_file."' where Struc_ID=".$Struc_id;

		if ($conn->query($sql) == TRUE){
			header("Location:Structures.php");
		}else{
			echo "Error update record: " . $conn->error;
		}
	}
?>
<html>
	<head>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
		<script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
	</head>
	<body>
	<div class="container">
		<h1 style="text-align:center; font-size:25px; margin:20px 0px;">Cập nhật công trình </h1>
		<div class="row">
			<form action="update_cate.php" class="col-6" method="post">
					<?php
						if(isset($_GET["id"]))
						{
							$id = $_GET["id"];		
							$sql = "SELECT * FROM tbl_structures where Struc_ID=".$id;
							$result = mysqli_query($conn, $sql);

							if (mysqli_num_rows($result) > 0) {
									  // output data of each row
									  while($row = mysqli_fetch_assoc($result)) 
									  {
										  echo "<input type='hidden'  name='id' value='".$row["Struc_ID"]."'>";
										  echo "Cập nhật tên công trình";
										  echo "<input type='text' class='form-control' name='Name' value='".$row["Struc_Name"]."'>";
										  echo "Cập nhật mô tả";
										  echo "<textarea name='description'></textarea>";
										  echo "<script>";
										  echo "CKEDITOR.replace( 'description' )";
										  echo "</script>";
										  echo "Cập nhật ảnh";
										  echo "<input  type='file' name='img' value='".$row["Image"]."'>";
										  echo "<br>";
									  }
							}
						}
					
					?>				
				<input  type="submit" name="update" value="Cập nhật" class="btn btn-primary" style="margin-top:5px">
			</form>
		</div>
		
		
	</div>
	</body>
</html>

