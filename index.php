 <?php include 'inc/header.php'; ?>

 <?php include 'inc/navigation.php'; ?>
 <?php include 'inc/slider.php'; ?>


<!-- Page Content -->
<div class="container">

			<!-- Portfolio Section -->
    <h2 class="text-center">Portfolio</h2>
		
		
		<?php 
		$query="select * from post limit 2 ";
		$post=$db->select($query);
		if($post){
			while($result =$post->fetch_assoc()){
			
		?>
		
		<div class="album py-5 bg-light">
                  <div class="container">
				
                    <div class="row">
                      <div class="col-md-12">
                        <div class="card mb-4 shadow-sm">
						 
                          <div>
		
	
		 <a href="#"><img style="width:100%;" src="admin/<?php echo $result['image']; ?>" alt="post image"/></a>
			</div>
		 	 <div class="card-body">

				<p class="text-center"><h3 class="mdb-color white-text"><a href="post.php?id=<?php echo $result['id']; ?>"><?php echo $result['title'];?></a></h3></p>
			
						</div>
				
						</div>
						</div>
						</div>
						
  </div>
  </div>
				
				
				
			
				
				
				
			
			
			
			   
	   
		
				
				
				
				
				
			
			<?php } ?>
			
			
			
		<?php } else { header("Localhost:404.php");} ?>			
		</div>	
		
 
			  
			
 <?php include 'inc/footer.php'; ?>