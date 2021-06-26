<?php 

	//include header file
	include ('include/header.php');

?>

<style>
	.size{
		padding: 80px 0px;
	}
	
	.bgcolor{
		background-color:white;
	}

	img{
	width: 440px;
    height: auto;
    margin: 7px 0px 0px -50px;
};
	}
	.rightimg{
	width: 515px;
    height: 280px;
    margin: 75px -47px 0px -10px;
	}
	h2{
		color:rgba(6, 15, 61, 0.911);
	}
	.white{
		background-color: white;
	}
	p{
		font-size: 18px;
	}
	.right{
		float: right;
	}
	h1{
		color: rgba(6, 15, 61, 0.911);
		font-weight: bold;
	}
	.size{
		min-height: 0px;
		padding: 60px 0 40px 0;
		
	}

	hr{
		border-top: 4px solid rgba(6, 15, 61, 0.911);
	}

</style>
<div class="container-fluid bgcolor size">
	<div class="row">
		<div class="col-md-6 offset-md-3">
			<h1 class="text-center">About Us</h1>
			<hr class="white-bar">
		</div>
	</div>
</div>
<div class="container-fluid size">
	
	<div class="container">
		<div class="row">
		<div class="col-md-6"><img src="img/img2.jpg" alt="Our Vission" class="rounded float-left img-fluid"></div>
		<div class="col-md-6">
			<h2 class="text-center">Our Vission</h2>
			<hr class="red-bar">
			<p>
			Help patients schedule appointments and consultations directly through the bot. The bot can quickly connect a patient with the right specialist based on primary evaluation, and book an appointment based on the doctor’s availability.
			</p>
		</div>
	</div>
	</div>
</div>

<div class="container-fluid white size">
	<div class="container ">
	<div class="container">
		<div class="row ">
		<div class="col-md-6">
			<h2 class="text-center">Our Goal</h2>
			<hr class="red-bar">
			<p>
			Use the hospital chatbot to scale up engagement and overall brand awareness by offering an omni-channel conversational experience. Deliver personalized information to the users based on their symptoms, and set up an appointment with the hospital’s GP for a consultation, all in one conversation, on the channel of their choice.
			</p>
			
		</div>
		<div ><img src="img/img3.jpg" alt="Our Vission" class="rounded img-fluid float-right rightimg"></div>
	</div>
	</div>		
</div>
</div>
	

	<div class="container-fluid size">
		<div class="container">
		<div class="row">
		<div class="col-md-6"><img src="img/img4.jpg" alt="Our Vission" class="rounded float-left img-fluid"></div>
		<div class="col-md-6">
			<h2 class="text-center">Our Mission</h2>
			<hr class="red-bar">
			<p>
			Integrate the backend billing and inventory with your hospital chatbot, and give patients quick access to invoices and your billing department. Let the healthcare chatbot address queries on claims, coverage, procedures and more - allowing your team to focus on mission critical tasks.
			</p>
			
		</div>
	</div>
	</div>
	</div>
<?php 

	//include footer file
	include ('include/footer.php');

?>
