<?php
	require "config.php";
	//insert
	if(isset($_POST["insert"]))
	{
		$News_ID = $_POST["News_ID"];
		$cate_id = $_POST["cate_id"];
		$News_Name = $_POST["News_Name"];
        $Time = $_POST["Time"];
		$Descrip_Demo = $_POST["Descrip_Demo"];
		$description = $_POST["description"];
		$target_dir = "struc_img/";
		$target_file = $target_dir . basename($_FILES["img"]["name"]);
		 if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file))
		  {
	 
			$sql = "insert into tbl_news(News_ID, Cate_ID, News_Name, Time, Descrip_Demo, Description, Image) values('".$News_ID."',".$cate_id.",N'".$News_Name."', ".$Time.", N'".$Descrip_Demo."', N'".$description."','".$target_file."')";

			if (mysqli_query($conn, $sql)) {
			  header("location:News.php");
			} else {
			  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			}
		  }
		  else
		  {
			echo "Sorry, there was an error uploading your file.";
		  }
	}
	
	//delete
	if(isset($_GET["task"] )&& $_GET["task"]=="delete")
	{
		$news_ID = $_GET["ID"];
		$sql = "DELETE  FROM tbl_news WHERE News_ID='".$news_ID."'";

		if (mysqli_query($conn, $sql)) {
		  echo "Record deleted successfully";
		  header ("Location:News.php");
		} else {
		  echo "Error deleting record: " . mysqli_error($conn);
		}
	}
?>
<html>
	<head>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
		<script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
	</head>
	<style>
		.text a{
			font-size:20px;
			margin:20px 0px;
			text-decoration: none;
			display: inline;
			text-align: center;
			padding:6px 8px 8px 8px;
			border: 1px solid black;
			border-radius: 3px;
		}
	</style>
	<body>
	<div class="container">
		<h1 style="text-align:center; font-size:35px; margin:20px 0px;">Trang quản trị Admin</h1>
		<div class="text" style="padding-bottom: 20px; text-align: center; ">
			<a href="index.php">Quản lý danh mục</a>
			<a href="Structures.php">Quản lý công trình</a>
            <a href="News.php" style="color:#AB6393;">Quản lý tin tức</a>
		</div>
		<div class="row">
			<form action="News.php" class="col-6" method="post" enctype="multipart/form-data">
				Nhập vào mã bài viết
				<input type="text" class="form-control" name="News_ID">
				Chọn mục 
				<select name="cate_id" class="form-control">
					<?php
						$sql = "SELECT * FROM tbl_category order by Cate_ID DESC";
						$result = mysqli_query($conn, $sql);
						if (mysqli_num_rows($result) >0){
							while($row = mysqli_fetch_assoc($result))
							{
								echo"<option value='".$row["Cate_ID"]."'>".$row["Cate_Name"]."</option>";
							}
						}
					?>

				</select>
				<br/>
				Nhập vào tên bài viết
				<input type="text" class="form-control" name="News_Name">
                Thời gian đăng
                <input type="text" class="form-control" name="Time">
				Mô tả demo
				<input type="text" class="form-control" name="Descrip_Demo">
				Mô tả nội dung
				<textarea name="description"></textarea>
                <script>
                        CKEDITOR.replace( 'description' );
                </script>
				Chọn ảnh mô tả
				<input  type="file" name="img">
				<br/>
				<input  type="submit" name="insert" value="Thêm mới" class="btn btn-primary">
				<br/>
				Tìm kiếm 
				<input type="text" class="form-control" name="txt_search">
				<input type="submit" name="search" value="Tìm kiếm"  class="btn btn-danger">
			</form>
		</div>
		<table  class="table table-striped">
			<tr>
				<th>Mã bài viết</th>
				<th>Loại </th>
				<th>Tên bài viết</th>
                <th>Thời gian đăng</th>
				<th>Mô tả demo</th>
				<th>Mô tả</th>
				<th>Ảnh</th>
				<th>Hành động</th>
			</tr>
			<?php
				$sql = "";
				if(isset($_POST["search"]))
				{
					$txt_search = $_POST["txt_search"];
					$sql = "select * from tbl_news where News_Name like '%".$txt_search."%'";
				}
				else{
					$sql = "SELECT * FROM tbl_News ";
				}
					$result1 = mysqli_query($conn, $sql);

					if (mysqli_num_rows($result1) > 0) {
					// output data of each row
					while($row = mysqli_fetch_assoc($result1)) 
					{
						echo "<tr>";
						echo "<td>".$row["News_ID"]."</td>";
						echo "<td>".$row["Cate_ID"]."</td>";
						echo "<td>".$row["News_Name"]."</td>";
                        echo "<td>".$row["Time"]."</td>";
						echo "<td>".$row["Descrip_Demo"]."</td>";
						echo "<td>".$row["Description"]."</td>";
						echo "<td><img   src='".$row["Image"]."'/></td>";
						echo "<td><a href='News.php?task=delete&ID=".$row["News_ID"]."' class='btn btn-danger'>Xóa</a></td>";
						echo "</tr>";
					}
					} 
					else 
					{
					echo "0 results";
					}
			?>

		</table>

	</div>
	</body>
</html>

