<?php

include('inc/header4.php');
?>
<?php

        if(isset($_POST["select1"])&&isset($_POST["select2"])&&isset($_POST["radio"])){
            $select1=$_POST["select1"];
            $select2=$_POST["select2"];
            $select3=$_POST["radio"];
            
        }
        
?>
<div class="titlediv px-5">
    <h2 class="title px-5 mx-5">MovieMaven.in</h2>
    <h4 class="px-5 mx-5">Suggesting perfect movies and series</h4>
</div>
<div class="d-flex justify-content-center align-items-center">
    
    
    <div class="px-5 content bg-white">
        <div class="hided py-4" id="myDiv">
            <h5>We have generated some suggestions corresponding to your needs.</h5>
            <h5>Click the below button to see the suggestions.</h5>
        </div>
        <form method="POST">
            <input type="hidden" name="i" value="list down best <?php echo $select1; ?> <?php echo $select2; ?> <?php echo $select3; ?>">

            <input type="submit" class="btn btn-success anim1" id="myButton" value="View Suggestions">
        </form><br><br>
    <?php
        if(isset($_POST["i"])) {	
            include('class/OpenAi.php');
            $openai = new OpenAi();			
            $openai->question = $_POST['i'];
                            
        ?>
            
        
        <h5 class="heading d-inline p-3">Your Results</h5><br><br>
            
    
        
        
        <p class="fs-4 text-dark">
        <?php 
        echo $openai->getAnswer(); 
        ?>
        </p>
        
        		
        <?php
        }			
        ?>
        <a href="index.php" class="btn anim2">Search Again</a>
    </div>
    
</div>
<div class="text-center pt-5">
		<p class="text-white">&copy Sonu,2023</p>
	</div>

    <?php include('inc/footer4.php');?>