<?php
// hi there
include('inc/header4.php');
?>
<title>MovieMaven</title>
<!-- fgfhjhfjfki -->
<div class="container-fluid p-0 m-0">
	<div class="titlediv px-5 py-2">
		<h2 class="title px-5 mx-5">MovieMaven.in</h2>
		<h4 class="px-5 mx-5">Suggesting perfect movies and series</h4>
	</div>
	<div class="d-flex justify-content-center align-items-center w-100">
		<div class="content bg-light row p-0 m-0">
			<form method="post" action="results.php" class="col-12 col-sm-4 formdiv gradient-border-right">
				<div class="form-group">
					<p class="px-5 filter py-3">Give us your taste..!</p>
				
					<div class="select-container py-2 px-5">
						<select id="select1" name="select1" required class="">
							  <option value="" disabled selected>Select Language</option>
							  <option value="english">Hollywood Movies</option>
							  <option value="malayalam">Malayalam Movies</option>
							  <option value="hindi">Hindi Movies</option>
							  <option value="korean">Korean Movies</option>
							  <option value="spanish">Spanish Movies</option>
							  <option value="japanese">Japanese Movies</option>
						</select>
					<i class="fa fa-search"></i>
					</div>
					<div class="select-container pb-2 px-5">
					<select id="select2" name="select2" required class="">
						  <option value="" disabled selected>Select Genre</option>
						  <option value="horror">Horror</option>
						  <option value="Thriller">Thriller</option>
						  <option value="romance">Romance</option>
						  <option value="family">Family Drama</option>
						  <option value="survival">Survival Thriller</option>
						  <option value="war">Combat</option>
						  <option value="sci-fi">Sci-Fi</option>
						  <option value="animated">Animated</option>
						  <option value="feel good">Feelgood</option>
					</select>
					</div>
					<div class="px-5 d-flex">
						<div class="radio">
							<input type="radio" id="radio1" name="radio" value="Movies" checked>
							<label for="radio1">Movies</label>
						  </div>
						  <div class="radio pb-4">
							<input type="radio" id="radio2" name="radio" value="Series">
							<label for="radio2">Series</label>
						  </div>
						  
						  <!-- blahh 2332-->
					</div>
				</div>					
				<input type="submit" value="Submit" class="btn anim">
			</form>
			<div class="col-12 col-sm-8 p-0 m-0">
				<div id="myCarousel" class="carousel slide">
					<div class="carousel-inner">
					  <div class="carousel-item active">
						<img src="images/slide1.jpg" alt="Slide 1" class="img-fluid w-100 image">
					  </div>
					  <div class="carousel-item">
						<img src="images/slide2.jpg" alt="Slide 2" class="img-fluid w-100 image">
					  </div>
					  <div class="carousel-item">
						<img src="images/slide5.jpg" alt="Slide 3" class="img-fluid w-100 image">
					  </div>
					  <div class="carousel-item">
						<img src="images/slide6.jpg" alt="Slide 3" class="img-fluid w-100 image">
					  </div>
					  <div class="carousel-item">
						<img src="images/slide3.jpg" alt="Slide 3" class="img-fluid w-100 image">
					  </div>
					  <div class="carousel-item">
						<img src="images/slide4.jpg" alt="Slide 3" class="img-fluid w-100 image">
					  </div>
					</div>
				  </div>
				  
				  
				
			  </div>			
		</div>
	</div>
	<div class="text-center pt-5">
		<p class="text-white">&copy Sonu,2023</p>
	</div>	
	
		
	
	
	
</div>	
<?php include('inc/footer4.php');?>



