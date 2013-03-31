<?php 
$pointValue = $_REQUEST["pointValue"];
$lotteryNumber = $_REQUEST["lotteryNumber"];

$broadway2 =  "38";
$claremont3 = "3";
$claremont4 = "5";
$claremont5 = "1";
$claremont6 = "1";
$claremont7 = "10";
$ec2 = "8";
$ecflat = "24";
$ec4 = "7";
$ec5 = "7";
$ecx = "56";
$ec6town = "22";
$ec6high = "6";
$ec6double = "6";
$furnald2 = "1";
$harmony2 = "1";
$hogan4 = "12";
$hogan5 = "10";
$hogan6 = "1";
$mcbain2 = "173";
$nuss2 = "50";
$nuss2pb = "5";
$nuss2wpb = "8";
$nuss2spb = "15";
$rugg4 = "4";
$rugg6 = "8";
$rugg8a = "2";
$rugg8b = "12";
$schapiro2 = "64";
$schapiro2w = "29";
$symposium = "8";
$wattstudio = "53";
$watt1 = "12";
$watt2 = "11";
$wien2 = "18";
$wien2w = "28";
$wood1 = "75";
$wood2 = "3";

if($pointValue > 30 || $pointValue < 10 || $lotteryNumber < 1 || $lotteryNumber > 3010) {
	if($pointValue > 30 || $pointValue < 10) {
		echo "<p class='alert-box'>Your point value is a little off!</p>";
	}

	else if($lotteryNumber < 1 || $lotteryNumber > 3010) {
		echo "<p class='alert-box'>You entered the wrong lottery number!</p>";
	}
}

else {
	if (($handle = fopen("whiteboard13.csv", "r")) !== FALSE) {
		$foundLotteryNumber = 0;
	    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
			if($pointValue == $data[0] && $lotteryNumber == $data[1]) {
				$foundLotteryNumber = 1;
				$count = 3;
				$claremont3 = $data[$count++];
				$claremont4 = $data[$count++];
				$claremont5 = $data[$count++];
				$claremont6 = $data[$count++];
				$claremont7= $data[$count++];
				$symposium = $data[$count++];
				$nuss2 = $data[$count++];
				$nuss2pb = $data[$count++];
				$nuss2wpb = $data[$count++];
				$nuss2spb = $data[$count++];
				$broadway2 = $data[$count++];
				$ecflat = $data[$count++];
				$ec4 = $data[$count++];
				$ec5 = $data[$count++];
				$ecx = $data[$count++];
				$ec6high = $data[$count++];
				$ec6town = $data[$count++];
				$ec6double = $data[$count++];
				$ec2 = $data[$count++];
				$furnald2 = $data[$count++];
				$harmony2 = $data[$count++];
				$hogan4 = $data[$count++];
				$hogan5 = $data[$count++];
				$hogan6 = $data[$count++];
				$mcbain2 = $data[$count++];
				$rugg4 = $data[$count++];
				$rugg6 = $data[$count++];
				$rugg8a = $data[$count++];
				$rugg8b = $data[$count++];
				$schapiro2 = $data[$count++];
				$schapiro2w = $data[$count++];
				$watt1 = $data[$count++];
				$watt2 = $data[$count++];
				$wattstudio = $data[$count++];
				$wien2 = $data[$count++];
				$wien2w = $data[$count++];
				$wood1 = $data[$count++];
				$wood2 = $data[$count++];
			}
	    }
	    fclose($handle);
	}
	if($foundLotteryNumber == 1) {
		
	echo "<ul class='small-block-grid-2'>
		<li>
			<ul class='pricing-table'>
			  <li class='price'>Broadway</li>
			  <li class='bullet-item'>
				<p class='suite'>Double: </p>
				<p class='count'>$broadway2</p></li>
			</ul>
		</li>
		<li>
			<ul class='pricing-table'>
			  <li class='price'>Claremont</li>
			  <li class='bullet-item'>
				<p class='suite'>3-Person Suite: </p>
				<p class='count'>$claremont3</p></li>
				<li class='bullet-item'>
				<p class='suite'>4-Person Suite: </p>
				<p class='count'>$claremont4</p></li>
				<li class='bullet-item'>
				<p class='suite'>5-Person Suite: </p>
				<p class='count'>$claremont5</p></li>
				<li class='bullet-item'>
				<p class='suite'>6-Person Suite: </p>
				<p class='count'>$claremont6</p></li>
			  <li class='bullet-item'>
				<p class='suite'>7-Person Suite: </p>
				<p class='count'>$claremont7</p></li>
			</ul>
		</li>
		<li>
			<ul class='pricing-table'>
				<li class='price'>East Campus</li>
				<li class='bullet-item'>
				<p class='suite'>6-Person Double: </p>
				<p class='count'>$ec2</p></li>
				<li class='bullet-item'>
				<p class='suite'>2-Person Flat: </p>
				<p class='count'>$ecflat</p></li>
				<li class='bullet-item'>
				<p class='suite'>4-Person Townhouse: </p>
				<p class='count'>$ec4</p></li>
				<li class='bullet-item'>
				<p class='suite'>5-Person All-Single Suite: </p>
				<p class='count'>$ec5</p></li>
				<li class='bullet-item'>
				<p class='suite'>5-Person Suite w/ 1 Double: </p>
				<p class='count'>$ecx</p></li>
				<li class='bullet-item'>
				<p class='suite'>6-Person All-Single Suite: </p>
				<p class='count'>$ec6high</p></li>
				<li class='bullet-item'>
				<p class='suite'>6-Per All-Single Townhouse: </p>
				<p class='count'>$ec6town</p></li>
				<li class='bullet-item'>
				<p class='suite'>6-Person Suite w/ 1 Double: </p>
				<p class='count'>$ec6double</p></li>	
			</ul>
		</li>
		<li>
			<ul class='pricing-table'>
			  <li class='price'>Furnald</li>
			  <li class='bullet-item'>
				<p class='suite'>Double: </p>
				<p class='count'>$furnald2</p></li>
			</ul>
		</li>
		<li>
			<ul class='pricing-table'>
			  <li class='price'>Harmony</li>
			  <li class='bullet-item'>
				<p class='suite'>Double: </p>
				<p class='count'>$harmony2</p></li>
			</ul>
		</li>
		<li>
			<ul class='pricing-table'>
			  <li class='price'>Hogan</li>
			  <li class='bullet-item'>
				<p class='suite'>4-Person Suite: </p>
				<p class='count'>$hogan4</p></li>
			  <li class='bullet-item'>
				<p class='suite'>5-Person Suite: </p>
				<p class='count'>$hogan5</p></li>
			  <li class='bullet-item'>
				<p class='suite'>6-Person Suite: </p>
				<p class='count'>$hogan6</p></li>
			</ul>
		</li>
		<li>
			<ul class='pricing-table'>
			  <li class='price'>McBain</li>
			  <li class='bullet-item'>
				<p class='suite'>Double: </p>
				<p class='count'>$mcbain2</p></li>
			</ul>
		</li>
		<li>
			<ul class='pricing-table'>
			  <li class='price'>Nussbaum</li>
			  <li class='bullet-item'>
				<p class='suite'>Double: </p>
				<p class='count'>$nuss2</p></li>
			  <li class='bullet-item'>
				<p class='suite'>Dbl w/ Private Bathroom: </p>
				<p class='count'>$nuss2pb</p></li>
			  <li class='bullet-item'>
				<p class='suite'>W/T Dbl w/ Private Bathroom: </p>
				<p class='count'>$nuss2wpb</p></li>
			  <li class='bullet-item'>
				<p class='suite'>Dbl w/ Semi-Priv Bathroom: </p>
				<p class='count'>$nuss2spb</p></li>
			</ul>
		</li>
		<li>
			<ul class='pricing-table'>
			  <li class='price'>Ruggles</li>
			  <li class='bullet-item'>
				<p class='suite'>4-Person Suite: </p>
				<p class='count'>$rugg4</p></li>
			  <li class='bullet-item'>
				<p class='suite'>6-Person Suite: </p>
				<p class='count'>$rugg6</p></li>
			  <li class='bullet-item'>
				<p class='suite'>8-Person Suite w/ 2 Doubles: </p>
				<p class='count'>$rugg8a</p></li>
			  <li class='bullet-item'>
				<p class='suite'>8-Person Suite w/ 3 Doubles: </p>
				<p class='count'>$rugg8b</p></li>

			</ul>
		</li>
		<li>
			<ul class='pricing-table'>
			  <li class='price'>Schapiro</li>
			  <li class='bullet-item'>
				<p class='suite'>Double: </p>
				<p class='count'>$schapiro2</p></li>
			  <li class='bullet-item'>
				<p class='suite'>Walkthrough Double: </p>
				<p class='count'>$schapiro2w</p></li>
			</ul>
		</li>
		<li>
			<ul class='pricing-table'>
			  <li class='price'>Symposium</li>
			  <li class='bullet-item'>
				<p class='suite'>Studio Double: </p>
				<p class='count'>$symposium</p></li>
			</ul>
		</li>
		<li>
			<ul class='pricing-table'>
			  <li class='price'>Watt</li>
			  <li class='bullet-item'>
				<p class='suite'>Studio Double: </p>
				<p class='count'>$wattstudio</p></li>
			  <li class='bullet-item'>
				<p class='suite'>1-Bedroom: </p>
				<p class='count'>$watt1</p></li>
			  <li class='bullet-item'>
				<p class='suite'>2-Bedroom: </p>
				<p class='count'>$watt2</p></li>
			</ul>
		</li>
		<li>
			<ul class='pricing-table'>
			  <li class='price'>Wien</li>
			  <li class='bullet-item'>
				<p class='suite'>Double: </p>
				<p class='count'>$wien2</p></li>
			  <li class='bullet-item'>
				<p class='suite'>Walkthrough Double: </p>
				<p class='count'>$wien2w</p></li>
			</ul>
		</li>
		<li>
			<ul class='pricing-table'>
			  <li class='price'>Woodbridge</li>
			  <li class='bullet-item'>
				<p class='suite'>1-Bedroom: </p>
				<p class='count'>$wood1</p></li>
			  <li class='bullet-item'>
				<p class='suite'>2-Bedroom: </p>
				<p class='count'>$wood2</p></li>
			</ul>
		</li>
	</ul>";
	}
	else {
		echo "<p class='alert-box'>We couldn't find your lottery number.</p>";
	}
}
?>