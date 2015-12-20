<!DOCTYPE html>
<html>
<head>
	<title>Script: Welcome</title>
	<link rel="stylesheet" href="/assets/bootstrap.min.css">
	<script src="/assets/jquery-2.1.4.min.js"></script>
	<script src="/assets/bootstrap.min.js"></script>
	<script src="/assets/refreshOutputView.js"></script>
</head>
<body>
	<div class="container" style="margin-top:20px;">
		<div class="row">
			<div class="col-md-9">
				<div class="jumbotron">
					<h1>Script Status Checker</h1>
					<p>View progress below. (<a href="/">Home</a>)</p>
				</div>
				<div class="panel panel-default">
					<div class="panel-body">
						
						<pre id="ouptut_view"></pre>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="jumbotron" style="min-height:400px;">
					<p style="font-size:.7em;">Todays Date: 
					<?php
					$logDate = date('l jS \of F Y h:i:s A');
					echo $logDate;
					// $myfile = file_put_contents('script/log.log', "Script Accessed: ".$logDate.PHP_EOL , FILE_APPEND);
					?>
					</p>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
