<?php require_once("includes/base.php") ?>
<?php require_once("includes/functions.php") ?>
<?php require_once("includes/connection.php") ?>
<?php
	if(isset($_POST['submit']))
	{
		$sub_category_name=$_POST['sub_category_name'];
		$category_name=$_POST['category_name'];
		$query="INSERT INTO Category (Cat_name) VALUES ('{$category_name}')";
		mysql_query($query);

		$queryii = mysql_query("SELECT * FROM Category WHERE Cat_name = '$category_name'");
		if(!$queryii)
		{
			echo mysql_error();
		}
		$q1="SELECT * FROM Category Where Cat_name='$category_name'";
		$qr = mysql_query($q1);
		if(!$qr)
		{
			echo mysql_error();
		}
		$Cat_id=mysql_result($qr,0,'Cat_id');
		$q2="INSERT INTO Subcategory (Sub_name,Cat_id) VALUES ('{$sub_category_name}','{$Cat_id}')";
		$er = mysql_query($q2);
		if(!$er)
		{
			echo mysql_error();
		}
	}
?>

<html>
	<form action="add_category.php?user=<?php echo $username; ?>;" method="post">
		<h3>Sub category name:</h3>
		<input name="sub_category_name" placeholder="Enter a new sub category" type="text"></input>
		<h3>Category name:</h3>
		<input name="category_name" placeholder="Enter a new category" type="text"></input>
		<button type="submit" name="submit"> Add </button>
	</form>
</html>