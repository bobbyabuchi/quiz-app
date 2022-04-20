<div class="row">
	
	<div class="col-lg-8 im" align="left">
	
		<div class="row">
			<div class="col-lg-8 alert alert-dismissible alert-info smg">
				<button type="button" class="close" data-dismiss="alert">&times;</button>
				<strong>Heads up!</strong> This was supposed to be a sort of marriage score card, but to be honest, one cannot judge preparedness by these questions alone. You are ready when it is God's time and God's will for you.	
			</div>
			<?php echo $thanks; ?>
			<div class="col-lg-8 alert alert-dismissible alert-warning smg">
				<button type="button" class="close" data-dismiss="alert">&times;</button>
			    It is our prayer that God Who makes all things beautiful in His time, will guide you and make your marriage beautiful in His time. Seek Him and put Him first in all you do. God bless.
				
				<br /><b><?php echo $UserScore; ?></b>	
			</div>				
		</div>

		<div class="row">
			<div class="col-lg-8">
				<?php require 'pages/questions.php' ?>
			</div>
		</div>	

		<div class="row">
			<div class="col-lg-8">
				<br />
				<div>
					...
				</div>
			</div>
		
		</div>
	</div>

	<div class="col-lg-4">

		<div class="row card text-dark bg-white mb-3 smg-top">
			<div class="card-header">Stats</div>
			<div class="card-title">
				<table class="table table-hover">
					<thead class="text-info">
						<th>Test Count</th>
						<th><?php echo $show_test_count; ?></th>
					</thead>
					<tbody>
						<tr>
						<th>Males</th>
						<th><?php echo $show_mc; ?></th>
						</tr>
						<tr>
						<td> - Pass</td>
						<td class="text-success"><?php echo $show_mp; ?></td>
						</tr>
						<tr>
						<td> - Fail</td>
						<td class="text-danger"><?php echo $show_mf; ?></td>
						</tr>
						<tr>
						<th>Females</th>
						<th><?php echo $show_fc; ?></th>
						</tr>
						<tr>
						<td> - Pass</td>
						<td class="text-success"><?php echo $show_fp; ?></td>
						</tr>
						<tr>
						<td> - Fail</td>
						<td class="text-danger"><?php echo $show_ff; ?></td>
						</tr>
						<tr>
						<th class="text-primary">Total Pass</th>
						<th class="text-success"><?php echo $show_tp; ?></th>
						</tr>
						<tr>
						<th class="text-primary">Total Fail</th>
						<th class="text-danger"><?php echo $show_tf; ?></th>
						</tr>
					</tbody>
				</table>

			</div> 
		</div>

		<br />
		<div class="row card text-dark bg-white mb-3 smg-top">
			<div>
				<div>
                	<!--<div class="card-header">
                		<strong class="mr-auto"></strong>
                	</div>-->
                	 <div class="card-body">
                  		<table class="table table-hover">
							<thead class="text-info">
								<th>Question Area</th>
								<th>Progression</th>
							</thead>
							<tbody>
								<tr>
								<td>Career</td>
								<td>
									<div class="progress">
						                <div class="progress-bar bg-success" role="progressbar" style="width: <?php echo $career; ?>%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
						                	
						                </div>
						             </div>
						         </td>
								</tr>
								<tr>
								<td>Enterprise</td>
								<td>
									<div class="progress">
						                <div class="progress-bar bg-success" role="progressbar" style="width: <?php echo $ent; ?>%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
						                	
						                </div>
						             </div>
								</td>
								</tr>
								<tr>
								<td>Asset(s)</td>
								<td>
									<div class="progress">
						                <div class="progress-bar bg-success" role="progressbar" style="width: <?php echo $asset; ?>%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
						                	
						                </div>
						             </div>
								</td>
								</tr>
								<tr>
								<td>Relationships</td>
								<td></td>
								</tr>
								<tr>
								<td> - With Family Members</td>
								<td>
									<div class="progress">
						                <div class="progress-bar bg-success" role="progressbar" style="width: <?php echo $family; ?>%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
						                	
						                </div>
						             </div>
								</td>
								</tr>
								<tr>
								<td> - With Co-Workers</td>
								<td>
									<div class="progress">
						                <div class="progress-bar bg-success" role="progressbar" style="width: <?php echo $work; ?>%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
						                	
						                </div>
						             </div>
								</td>
								</tr>
								<tr>
								<td> - With Local Church</td>
								<td>
									<div class="progress">
						                <div class="progress-bar bg-success" role="progressbar" style="width: <?php echo $church; ?>%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
						                	
						                </div>
						             </div>
								</td>
								</tr>
								<tr>
								<td> - Onine (on the Internet)</td>
								<td>
									<div class="progress">
						                <div class="progress-bar bg-success" role="progressbar" style="width: <?php echo $internet; ?>%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
						                	
						                </div>
						             </div>
								</td>
								</tr>
								<tr>
								<td>Giving</td>
								<td>
									<div class="progress">
						                <div class="progress-bar bg-success" role="progressbar" style="width: <?php echo $giving; ?>%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
						                	
						                </div>
						             </div>
								</td>
								</tr>
								<tr>
								<td>Submission to Authority</td>
								<td>
									<div class="progress">
						                <div class="progress-bar bg-success" role="progressbar" style="width: <?php echo $elder; ?>%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
						                	
						                </div>
						             </div>
								</td>
								</tr>
								<tr>
								<td>Bible Knowledge</td>
								<td>
									<div class="progress">
						                <div class="progress-bar bg-success" role="progressbar" style="width: <?php echo $bk; ?>%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
						                	
						                </div>
						             </div>
								</td>
								</tr>
								<tr>
								<td>Following the Bible</td>
								<td>
									<div class="progress">
						                <div class="progress-bar bg-success" role="progressbar" style="width: <?php echo $fb; ?>%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
						                	
						                </div>
						             </div>
								</td>
								</tr>
								<tr>
								<td>Fasting</td>
								<td>
									<div class="progress">
						                <div class="progress-bar bg-success" role="progressbar" style="width: <?php echo $fasting; ?>%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
						                	
						                </div>
						             </div>
								</td>
								</tr>
								<tr>
								<td>Leading of the Spirit</td>
								<td>
									<div class="progress">
						                <div class="progress-bar bg-success" role="progressbar" style="width: <?php echo $ls; ?>%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
						                	
						                </div>
						             </div>
								</td>
								</tr>
								<tr>
								<td>Liberty to Serve God</td>
								<td>
									<div class="progress">
						                <div class="progress-bar bg-success" role="progressbar" style="width: <?php echo $liberty; ?>%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
						                	
						                </div>
						             </div>
								</td>
								</tr>
								<tr>
								<td>Prayer Life</td>
								<td>
									<div class="progress">
						                <div class="progress-bar bg-success" role="progressbar" style="width: <?php echo $pl; ?>%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
						                	
						                </div>
						             </div>
								</td>
								</tr>
								<tr>
								<td>Sharing Bible Knowledge</td>
								<td>
									<div class="progress">
						                <div class="progress-bar bg-success" role="progressbar" style="width: <?php echo $sbk; ?>%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
						                	
						                </div>
						             </div>
								</td>
								</tr>
								<tr>
								<td>In line with purpose of God</td>
								<td>
									<div class="progress">
						                <div class="progress-bar bg-success" role="progressbar" style="width: <?php echo $purpose; ?>%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
						                	
						                </div>
						             </div>
								</td>
								</tr>
								<tr>
								<td>God's Approval</td>
								<td>
									<div class="progress">
						                <div class="progress-bar bg-success" role="progressbar" style="width: <?php echo $ga; ?>%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
						                	
						                </div>
						             </div>
								</td>
								</tr>
								<tr>
								<td>Family Approval</td>
								<td>
									<div class="progress">
						                <div class="progress-bar bg-success" role="progressbar" style="width: <?php echo $fam; ?>%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
						                	
						                </div>
						             </div>
								</td>
								</tr>
								<tr>
								<td>Received Jesus Christ</td>
								<td>
									<div class="progress">
						                <div class="progress-bar bg-success" role="progressbar" style="width: <?php echo $jesus; ?>%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
						                	
						                </div>
						             </div>
								</td>
								</tr>
							</tbody>
						</table>
                	</div>
                </div>
			</div>
		</div>
		<div align="left">
		<b>Useful Links</b>
		<hr />
		<a href="https://www.youtube.com/watch?v=uXY45Ek3CkA">Jesus the Purpose of God<a>
		    <audio controls><source src = "jesus.mp3" type = "audio/mpeg"></audio>
		<br /><br /><a href="https://www.austin-sparks.net/english/christ.html">Learn More About Jesus Christ<a>
		<br />
		<p />
		<br />About the Holy Spirit
		<br /><a href="https://www.austin-sparks.net/english/000642.html"> > The Holy Spirit in the Life of a Child of God </a>
		<br /><a href="https://www.austin-sparks.net/english/000482.html"> > Life in the Spirit </a>
		<br /><a href="https://www.austin-sparks.net/english/004776.html"> > An Outline of the Teaching Concerning the Holy Spirit <a>
		<br /><a href="https://www.youtube.com/watch?v=gxJyMbXE2YU"> > The Holy Spirit (Video)<a>     
		<br /><a href="https://www.youtube.com/watch?v=RQ7MAS4mR0g"> > The Holy Spirit in the life of a disciple (Video)<a>
		<br /><a href="https://www.youtube.com/watch?v=K_Hfu1OH3y4"> > God's work by the Holy Spirit (Video)<a>      
		</div>
	</div>
</div>