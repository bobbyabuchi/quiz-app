<?php

# Submit Test -------------------------------------------------------------
if (isset($_POST['submit'])) {
	#$contact_id = $_GET['contact_id'];
	@$name = $connect_db->real_escape_string($_POST['name']);
	@$gender = $connect_db->real_escape_string($_POST['gender']);
	@$email = $connect_db->real_escape_string($_POST['email']);
	@$Q1 = $connect_db->real_escape_string($_POST['Q1']);
	@$Q2 = $connect_db->real_escape_string($_POST['Q2']);
	@$Q3 = $connect_db->real_escape_string($_POST['Q3']);
	@$Q4 = $connect_db->real_escape_string($_POST['Q4']);
	@$Q5 = $connect_db->real_escape_string($_POST['Q5']);
	@$Q6 = $connect_db->real_escape_string($_POST['Q6']);
	@$Q7 = $connect_db->real_escape_string($_POST['Q7']);
	@$Q8 = $connect_db->real_escape_string($_POST['Q8']);
	@$Q9 = $connect_db->real_escape_string($_POST['Q9']);
	@$Q10 = $connect_db->real_escape_string($_POST['Q10']);
	@$Q11 = $connect_db->real_escape_string($_POST['Q11']);
	@$Q12 = $connect_db->real_escape_string($_POST['Q12']);
	@$Q13 = $connect_db->real_escape_string($_POST['Q13']);
	@$Q14 = $connect_db->real_escape_string($_POST['Q14']);
	@$Q15 = $connect_db->real_escape_string($_POST['Q15']);
	@$Q16 = $connect_db->real_escape_string($_POST['Q16']);
	@$Q17 = $connect_db->real_escape_string($_POST['Q17']);
	@$Q18 = $connect_db->real_escape_string($_POST['Q18']);
	@$Q19 = $connect_db->real_escape_string($_POST['Q19']);
	@$Q20 = $connect_db->real_escape_string($_POST['Q20']);
	@$Q21 = $connect_db->real_escape_string($_POST['Q21']);

	/*
	foreach ($answers as $answer) {
		# code...
		if ($answer >= 50 ) {
			# code...
			echo $answer . "<br>";
		}
	}
	*/
	//$score = $Q1 + $Q2;
	

	# Validation
	
	if ($gender == '' or $Q1 == '' or $Q2 == '' or $Q3 == '' or $Q4 == '' or $Q5 == '' or $Q6 == '' or $Q7 == '' or $Q8 == '' or $Q9 == '' or $Q10 == '' or $Q11 == '' or $Q12 == '' or $Q13 == '' or $Q14 == '' or $Q15 == '' or $Q16 == '' or $Q17 == '' or $Q18 == '' or $Q19 == '' or $Q20 == '' or $Q21 == '') {
			$sysMsg = '<span style="color:red;">Please kindly provide answer for all the questions</span>';
	}else {
			$answers = array($Q1, $Q2, $Q3, $Q4, $Q5, $Q6, $Q7, $Q8, $Q9, $Q10, $Q11, $Q12, $Q13, $Q14, $Q16, $Q17, $Q18, $Q19, $Q20, $Q21);
			$score = array_sum($answers);

			$UserScore = "You scored " . $score."!";

			$save_resp = "INSERT INTO response (name, gender, Q1, Q2, Q3, Q4, Q5, Q6, Q7, Q8, Q9, Q10, Q11, Q12, Q13, Q14, Q15, Q16, Q17, Q18, Q19, Q20, Q21, email, country, timezone, network, score) VALUES ('$name', '$gender', '$Q1', '$Q2', '$Q3', '$Q4', '$Q5', '$Q6', '$Q7', '$Q8', '$Q9', '$Q10', '$Q11', '$Q12', '$Q13', '$Q14', '$Q15', '$Q16', '$Q17', '$Q18', '$Q19', '$Q20', '$Q21', '$email', '$country', '$timezone', '$network', '$score')";
			if($connect_db->query($save_resp) != TRUE){
				$sysMsg = "There was a problem <br />";
				$sysMsg .= $connect_db->error; // the .= will append this line to the prev line 
			}else{//if score is above show well done etc...
				if ($score >= 1000) {
					# code...
					$thanks = '<div class="col-lg-8 alert alert-dismissible alert-success smg"><button type="button" class="close" data-dismiss="alert">&times;</button><b>You are amazing!</b></div>';
				}else {
					$thanks = '<div class="col-lg-8 alert alert-dismissible alert-success smg"><button type="button" class="close" data-dismiss="alert">&times;</button><b>Thank You!</b></div>';
				}
				//header("location: index.php");
			}
		}
	//$connect_db->close();
}


# Fetch Performance Statistics -------------------------------------------------------------

# test count
$tcq = "SELECT COUNT(*) FROM response";
$tc = $connect_db->query($tcq);
$tc = $tc->fetch_array();
$show_test_count = $tc[0];

# males
$mcq = "SELECT COUNT(*) FROM response WHERE gender = 'male'";
$mc = $connect_db->query($mcq);
$mc = $mc->fetch_array();
$show_mc = $mc[0];

# pass males
$mpq = "SELECT COUNT(*) FROM response WHERE score > 875 AND gender = 'male'";
$mp = $connect_db->query($mpq);
$mp = $mp->fetch_array();
$show_mp = $mp[0];

# fail males
$mfq = "SELECT COUNT(*) FROM response WHERE score < 875 AND gender = 'male'";
$mf = $connect_db->query($mfq);
$mf = $mf->fetch_array();
$show_mf = $mf[0];

# females
$fcq = "SELECT COUNT(*) FROM response WHERE gender = 'female'";
$fc = $connect_db->query($fcq);
$fc = $fc->fetch_array();
$show_fc = $fc[0];

# pass females
$fpq = "SELECT COUNT(*) FROM response WHERE score > 735 AND gender = 'female'";
$fp = $connect_db->query($fpq);
$fp = $fp->fetch_array();
$show_fp = $fp[0];

# fail females
$ffq = "SELECT COUNT(*) FROM response WHERE score < 735 AND gender = 'female'";
$ff = $connect_db->query($ffq);
$ff = $ff->fetch_array();
$show_ff = $ff[0];

# total pass
$show_tp = $show_mp + $show_fp;

# total fail
$show_tf = $show_mf + $show_ff;


# Overall questions statistics ------------------------------------------------------
$t = $show_test_count;

# Career
$cq = "SELECT COUNT(Q2) FROM response WHERE Q2 = 50";
$career = $connect_db->query($cq);
$career = $career->fetch_array();
if ($career[0]!=0) {
	// code...
	$career = ($career[0]/$t)*100;
}

# Enterprise
$eq = "SELECT COUNT(Q3) FROM response WHERE Q3 = 50";
$ent = $connect_db->query($eq);
$ent = $ent->fetch_array();
if ($ent[0]!=0) {
	// code...
	$ent = ($ent[0]/$t)*100;
}

# Assets
$aq = "SELECT COUNT(Q4) FROM response WHERE Q4 = 50";
$asset = $connect_db->query($cq);
$asset = $asset->fetch_array();
if ($asset[0]!=0) {
	$asset = ($asset[0]/$t)*100;
}


# Family
$fam_q = "SELECT COUNT(Q5) FROM response WHERE Q5 = 50";
$family = $connect_db->query($fam_q);
$family = $family->fetch_array();
if ($family[0]!=0) {
	$family = ($family[0]/$t)*100;
}

# Co-workers
$wq = "SELECT COUNT(Q6) FROM response WHERE Q6 = 50";
$work = $connect_db->query($wq);
$work = $work->fetch_array();
if ($work[0]!=0) {
	$work = ($work[0]/$t)*100;
}


# LocalChurch
$ch_q = "SELECT COUNT(Q7) FROM response WHERE Q7 = 50";
$church = $connect_db->query($cq);
$church = $church->fetch_array();
if ($church[0]!=0) {
	$church = ($church[0]/$t)*100;
}


# Internet
$int_q = "SELECT COUNT(Q8) FROM response WHERE Q8 = 50";
$internet = $connect_db->query($int_q);
$internet = $internet->fetch_array();
if ($internet[0]!=0) {
	$internet = ($internet[0]/$t)*100;
}


# Giving
$giv_q = "SELECT COUNT(Q9) FROM response WHERE Q9 = 50";
$giving = $connect_db->query($giv_q);
$giving = $giving->fetch_array();
if ($giving[0]!=0) {
	$giving = ($giving[0]/$t)*100;
}


# Submission to Elder
$eld_q = "SELECT COUNT(Q10) FROM response WHERE Q10 = 50";
$elder = $connect_db->query($cq);
$elder = $elder->fetch_array();
if ($elder[0]!=0) {
	$elder = ($elder[0]/$t)*100;
}


# Bible Knowledge 
$bk_q = "SELECT COUNT(Q11) FROM response WHERE Q11 = 50";
$bk = $connect_db->query($bk_q);
$bk = $bk->fetch_array();
if ($bk[0]!=0) {
	$bk = ($bk[0]/$t)*100;
}


# Following the Bible
$fb_q = "SELECT COUNT(Q12) FROM response WHERE Q12 = 50";
$fb = $connect_db->query($fb_q);
$fb = $fb->fetch_array();
if ($fb[0]!=0) {
	$fb = ($fb[0]/$t)*100;
}


# Fasting 
$fas_q = "SELECT COUNT(Q13) FROM response WHERE Q13 = 50";
$fasting = $connect_db->query($fas_q);
$fasting = $fasting->fetch_array();
if ($fasting[0]!=0) {
	$fasting = ($fasting[0]/$t)*100;
}


# Leading of the Spirit 
$ls_q = "SELECT COUNT(Q14) FROM response WHERE Q14 = 50";
$ls = $connect_db->query($ls_q);
$ls = $ls->fetch_array();
if ($ls[0]!=0) {
	$ls = ($ls[0]/$t)*100;
}


# Liberty to serve God
$lib_q = "SELECT COUNT(Q15) FROM response WHERE Q15 = 50";
$liberty = $connect_db->query($lib_q);
$liberty = $liberty->fetch_array();
if ($liberty[0]!=0) {
	$liberty = ($liberty[0]/$t)*100;
}


# Prayer Life 
$pl_q = "SELECT COUNT(Q16) FROM response WHERE Q16 = 50";
$pl = $connect_db->query($pl_q);
$pl = $pl->fetch_array();
if ($pl[0]!=0) {
	$pl = ($pl[0]/$t)*100;
}


# Sharing Bible knowledge
$sbk_q = "SELECT COUNT(Q17) FROM response WHERE Q17 = 50";
$sbk = $connect_db->query($sbk_q);
$sbk = $sbk->fetch_array();
if ($sbk[0]!=0) {
	$sbk = ($sbk[0]/$t)*100;
}


# In line with the purpose of God
$purp_q = "SELECT COUNT(Q18) FROM response WHERE Q18 = 50";
$purpose = $connect_db->query($purp_q);
$purpose = $purpose->fetch_array();
if ($purpose[0]!=0) {
	$purpose = ($purpose[0]/$t)*100;
}


# God's approval
$ga_q = "SELECT COUNT(Q19) FROM response WHERE Q19 = 50";
$ga = $connect_db->query($ga_q);
$ga = $ga->fetch_array();
if ($ga[0]!=0) {
	$ga = ($ga[0]/$t)*100;
}


# Family aproval
$fam_q = "SELECT COUNT(Q20) FROM response WHERE Q20 = 50";
$fam = $connect_db->query($fam_q);
$fam = $fam->fetch_array();
if ($fam[0]!=0) {
	$fam = ($fam[0]/$t)*100;
}


# Receiving Jesus Christ 
$j_q = "SELECT COUNT(Q21) FROM response WHERE Q21 = 50";
$jesus = $connect_db->query($j_q);
$jesus = $jesus->fetch_array();
if ($jesus[0]!=0) {
	$jesus = ($jesus[0]/$t)*100;
}


$connect_db->close();

?>