<?php
include 'db.php';

$id = $_GET['id'];

$deletequery = "delete from request where id=$id ";


$query = mysqli_query($connection,$deletequery);

if($query){
	?>
	<script>
		alert("deleted successfully");
	</script>
	<?php
}else{
	?>
	<script>
		alert("not deleted");
	</script>
	<?php
}

header('location:info.php');

?>
<?php
include 'db.php';

$id = $_GET['id'];

$deletequery = "delete from donate where id=$id ";


$query = mysqli_query($connection,$deletequery);

if($query){
	?>
	<script>
		alert("deleted successfully");
	</script>
	<?php
}else{
	?>
	<script>
		alert("not deleted");
	</script>
	<?php
}

header('location:info.php');

?>