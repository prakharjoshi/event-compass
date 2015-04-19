<?php require_once("includes/base.php") ?>
<?php require_once("includes/functions.php") ?>
<?php require_once("includes/connection.php") ?>
<?php require_once("backend/ifnotlogin.php") ?>
<?php
    $username = $_SESSION['currentuser'];
?>

<?php
if($username!='admin')
{
	echo 'You do not have access to this page!!';    
}
else if(isset($_POST['submit'])&&$username=='admin')
{
	$sub_category_name=$_POST['sub_category_name'];
	$category_name=$_POST['category_name'];
	//$query1="SELECT MAX(Cat_id) AS Cat_id FROM Category";
	//$query_run=mysql_query($query1);
	//$catid=mysql_result($query_run,0,'Cat_id');
	//$catid=$catid+1;
	//$query="INSERT INTO Category (Cat_id,Cat_name) VALUES ('{$cat_id}','{$category_name}')";
	$queryii = mysql_query("SELECT * FROM Category WHERE Cat_name = '$category_name'");
	if(mysql_num_rows($queryii)==0)
	{
		$query="INSERT INTO Category (Cat_name) VALUES ('{$category_name}')";
		mysql_query($query);
	}	
	$queryii = mysql_query("SELECT * FROM Category WHERE Cat_name = '$category_name'");
	if(!$queryii)
	{
		echo mysql_error();
	}
	//echo $category_name;
	//echo $sub_category_name;
	$q1="SELECT * FROM Category Where Cat_name='$category_name'";
	$qr = mysql_query($q1);
	if(!$qr)
	{
		echo mysql_error();
	}
	$Cat_id=mysql_result($qr,0,'Cat_id');
	//echo $Cat_id;
	//$q="SELECT MAX(Cat_id) FROM Category";
	//$qr=mysql_query($q);
	//$Sub_id=mysql_result($query_run,0,'Sub_id');
	//$Sub_id=$Sub_id+1;*/
	$queryii = mysql_query("SELECT * FROM Subcategory WHERE Sub_name = '$sub_category_name'");
	if(mysql_num_rows($queryii)==0)
	{
		$query="INSERT INTO Subcategory (Sub_name,Cat_id) VALUES ('{$sub_category_name}','{$Cat_id}')";
		mysql_query($query);
	}	

}
?>

<html>
<form action="admin.php?user=<?php echo $username;?>" method="post">
<h3>Sub category name:</h3>
<input name="sub_category_name" placeholder="Enter a new sub category" type="text"></input>
<h3>Category name:</h3>
<input name="category_name" placeholder="Enter a new category" type="text"></input>
<button type="submit" name="submit"> Add </button>
</form>
</html>