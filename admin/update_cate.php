<?php 
	require "config.php";
	
	//update
	if(isset($_POST["update"]))
	{
		$cate_id = $_POST["id"];
		$name = $_POST["Name"];
		$status = $_POST["Status"];
		$sql = "update tbl_category set Cate_Name=N'".$name."',Cate_Status=N'".$status."' where Cate_ID=".$cate_id;

		if ($conn->query($sql) == TRUE){
			header("Location:index.php");
		}else{
			echo "Error update record: " . $conn->error;
		}
	}
?>
<html>
	<head>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	</head>
	<body>
	<div class="container">
		<h1 style="text-align:center; font-size:25px; margin:20px 0px;">Cập nhật danh mục </h1>
		<div class="row">
			<form action="update_cate.php" class="col-6" method="post">
					<?php
						if(isset($_GET["id"]))
						{
							$id = $_GET["id"];		
							$sql = "SELECT * FROM tbl_category where Cate_ID=".$id;
							$result = mysqli_query($conn, $sql);

							if (mysqli_num_rows($result) > 0) {
									  // output data of each row
									  while($row = mysqli_fetch_assoc($result)) 
									  {
										  echo "<input type='hidden'  name='id' value='".$row["Cate_ID"]."'>";
										  echo "Cập nhật tên danh mục";
										  echo "<input type='text' class='form-control' name='Name' value='".$row["Cate_Name"]."'>";
										  echo "Cập nhật trạng thái";
										  echo "<input type='text' class='form-control' name='Status' value='".$row["Cate_Status"]."'>";
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

