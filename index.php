<?php 
$sysMsg = $UserScore = $thanks = $show_test_count = $show_mc = $show_mp = $show_mf = $show_fc = $show_fp = $show_ff = $show_tp = $show_tf = $career = $ent = $asset = $family = $work = $church = $internet = $giving = $elder = $bk = $fb = $fasting = $ls = $liberty = $pl = $sbk = $purpose = $ga = $fam = $jesus = NULL; 

include 'includes/db_config.php';
include 'includes/location.php';
include 'includes/model.php';
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Home</title>
		<?php include 'includes/links.php'; ?>
	</head>
	<body>
		<div class="container" align="center">

				<div class="header">
					<?php include 'includes/header.php' ?>
				</div>

				<div class="navi">
					<?php include 'includes/nav.php' ?>
				</div>

				<p />	
				<div class="pad">
					[<strong class=""><span class="small"> Status: </span> <span style="color: green;">:: :: <?php if ($UserScore != NULL) {
						echo $UserScore;
					}else echo $sysMsg; ?> :: :: </span></strong> <!--||
					<span class="small">Location >>></span> :: :: <?php //echo $country; ?> ||
					<span class="small">IP Address >>></span> :: :: <?php //echo $user_ip; ?> ||
					<span class="small">Timezone >>></span> :: :: <?php //echo $timezone; ?> ||
					<span class="small">Network >>></span> :: :: <?php //echo $network; ?> -->]
				</div>

				<div class="stats">
					 <?php include 'pages/statshome.php' ?>	
				</div>

				<div class="footer">
					<?php include 'includes/footer.php' ?>
				</div>

		</div>
	</body>
</html>