<?php
include('connect.php');
if(isset($_SESSION['uid']))
{
    $uid = $_SESSION['uid'];
}
?>
<div class="fix blog_feature_area">
<div class="fix blog_feature">
<div class="fix feature_videos floatleft">
    
    
				<h2>Featured Movies</h2>
                                                
                                                
<div class="fix feature_video_container">
<?php 
   //echo $_SESSION["uid"];

	   $sql = "SELECT * FROM movie ";
$result = mysqli_query($conn, $sql);


    while($row = mysqli_fetch_assoc($result)) {
      
		?>
		
						
			<div class="fix single_cat">
				<div class="play-small"></div>
                                                                
                                <a href=$row['Image']><img src="<?php echo $row['Image']; ?>" height='100' width='100'/></a>
                                                                        
				<div class="fix single_cat_meta">
				<a href="viewinfo.php?id=<?php echo $row["id"]; ?>&im=<?php echo $row['Image']; ?>"><?php echo $row["Name"]; ?></a>
								
					</div>
					<div class="fix single_cat_rating">
					<span>Ratings</span>
					<div class="single_cat_star">
						<a href=""></a>
						<a href=""></a>
						<a href=""></a>
                                                <a href=""></a>
						
						</div>
					</div>
				</div>
							
						
							
						
					
		<?php
		

   
}
   

   ?></div>
   </div>

					
<?php include('sidebar.php');
?>
	<?php include('feature_bottom_add.php');
?>