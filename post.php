<?php include 'inc/header.php'; ?>
 <?php include 'inc/navigation.php'; ?>

<div class="container">



<?php
if(!isset($_GET['id']) || ($_GET['id']) == NULL){
	header("Location: 404.php");
}else{
	$id = $_GET['id'];
}
?>

	
			<?php			
			$query="select * from post where id=$id";
			$post= $db->select($query);
		if($post){
			while($result =$post->fetch_assoc()){
			
			
			?>
				<h2 class="text-center"><?php echo $result['title']; ?></h2>	
		
				
					
				
					
					<?php 
					$catid=$result['cat'];
					$queryrelated="select * from post where cat='$catid' order by rand()limit 50";
					$relatedpost= $db->select($queryrelated);
					if($relatedpost){
					while($rresult =$relatedpost->fetch_assoc()){
					
					?>

					<a href="post.php?id=<?php echo $rresult['id']; ?>">
					<img class="img-thumbnail" src="admin/<?php echo $rresult['image']; ?>" alt="post image"/>
					</a>
					
					<?php }} else { echo "Nema dostaveno nikakvi informacii!!" ;} ?>
					
			
		<?php } } else { header("Localhost:404.php");} ?>
	
	
		
			
			<?php include"inc/footer.php"; ?>
	