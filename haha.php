<style type="text/css">
	.image{
		height: 200px;
		width:140px;
		float: left;
		border:1px solid #ccc;
		margin:10px;
		overflow:auto;
	}
.image img{
	width: 130px;
	height: 160px;
	margin-left: 4.5px;
	margin-top: 6.5px;

}
</style>
<?php
$conn=mysqli_connect("localhost","root","","student_information");
$sql="select * from data";
$result=mysqli_query($conn,$sql);
  while($row=mysqli_fetch_object($result))
    {
?>
<div class="image"><a href=""><img src="<?php echo $row->Image;?>" height="150" width="120"></a>
</div>
<?php
}
?>
