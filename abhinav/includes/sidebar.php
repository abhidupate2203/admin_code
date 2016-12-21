<div id="sidebar">

<div id="searchbox">
	<form action="search.php" method="get" enctype="multipart/form-data">
	
	<input type="text" name="value" placeholder="Search this site" 
	size="25">
	
	<input type="submit" name="search" value="Search">
	
</form>

<div id = "social">
	<h2> Follow Us On</h2>
	<a href="http://www.facebook.com/" target="blank">
	<img src="images/facebook.jpg"></a>
	<img src="images/googleplus.jpg">
	<img src="images/twitter.jpg">
	<img src="images/flickr.jpg">
</div>
<center><h2>Recent Posts</h2></center>
<div>

<?php
include("includes/connect.php");

$query = "select * from posts order by 1 DESC LIMIT 0,5";

	$run = mysql_query($query);
	while($row=mysql_fetch_array($run))
	{
		$post_id = $row['post_id'];
		$title = $row['post_title'];
		$image = $row['post_image'];

?>
	
	<center>
	
	<a href="pages.php?id=<?php echo $post_id; ?>">
	<h2><?php echo $title; ?></h2></a>
	<a href="pages.php?id=<?php echo $post_id; ?>">
	<img src='images/<?php echo $image; ?>' 
	width='140' height='100'></a>
	</center>
<?php } ?>
</div>
	
</div>