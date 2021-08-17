<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<html lang="eng">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1">
	<title>Curriculum Vitae</title>
</head>

<style>
	
	.content{
		max-width: 960px;
		margin: 0 auto;
	}
		.content div p{
			margin: 5px;
			font-size: 18px;
		}

		#experience {
  display: flex;
  flex-direction: row;
}

.start{
	justify-content: flex-start;
	width: 800px;
  margin: 10px;

}
.end{
	justify-content: flex-end;
	width: 250px;
  margin: 10px;
}



#personal{
	text-align: center;
}
</style>
<body>

	<div class="content">

	<div id="personal">
		<h2><?php echo $_SESSION['fname']; ?></h2>
		<p><?php echo $_SESSION['address']; ?></p>
		<p><?php echo $_SESSION['phone'] ."   "; ?>     <?php echo "   ". $_SESSION['email']; ?></p>
	</div>
	<div id="objective">
		<h3>Objectives</h3>
		<p><?php echo $_SESSION['obj']; ?></p>
	</div>
	<div id="skills">
		<h3>Skills</h3>
		<p><?php echo $_SESSION['skills']; ?></p>
	</div>
	<div>
		<h3>Experience</h3>
		<div id="experience">
		<div class="start" style="margin-top: 0"><h4>(<?php echo $_SESSION['title']; ?>) - (<?php echo $_SESSION['cname']; ?>)</h4>
			<p style="margin: 0"><?php echo $_SESSION['desc_c']; ?></p>
		</div>
  		<div class="end"><h4>From - To</h4>
  			<p style="font-size: 15px"><?php echo str_replace('-', '/', $_SESSION['date_start_c']); ?> - <?php echo str_replace('-', '/', $_SESSION['date_end_c']); ?></p></div>
  		</div>	
	</div>
	<div id="education">
		<h3>Education</h3>
		<div id="experience">
		<div class="start" style="margin-top: 0"><h4>(<?php echo $_SESSION['name_e']; ?>) - (<?php echo $_SESSION['degree']; ?>)</h4>
			<p style="margin: 0"><?php echo $_SESSION['archive']; ?></p>
		</div>
  		<div class="end"><h4>From - To</h4>

  			<p style="font-size: 15px"><?php echo str_replace('-', '/', $_SESSION['date_start_e']); ?> - <?php echo str_replace('-', '/', $_SESSION['date_end_e']); ?></p></div>
  		</div>
	</div>
	<!-- <div id="teamwork">
		<h3>Teamwork</h3>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore.</p>
	</div>
	<div id="professional">
		<h3>Professional certificate</h3>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore.</p>
	</div>
 -->	<div id="interest">
		<h3>Interest</h3>
		<p><?php echo $_SESSION['interest']; ?></p>
	</div>
	<div id="referee" style="max-width: 400px">
		<h3>Referree</h3>
		<p>Upon request</p>
	</div>

	</div>

</body>
</html>