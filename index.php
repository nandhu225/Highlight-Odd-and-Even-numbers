<!DOCTYPE html>
<html>
	<head>
		<title>Highlight Even and Odd numbers</title>
		<meta name="viewport" content="width=device-width, intial-scale=1"/>
		<style>
			.head{
				position: absolute;
				top: 6%;
				left: 33%;
			}

			.change{
				position: absolute;
				top: 20%;
				left: 48%;
			}

			.table{
				position: absolute;
				top: 35%;
				left: 42%;
			}
		</style>
	</head>
	<body>
		<div class="head">
			<h1>Highlight Even and Odd numbers</h1>
		</div>
		<form method="get">
			<div class="change">
				<button onclick="document.getElementById('hide').style.display='none'" name="change">Highlight</button>
			</div>
		</form>
		<div class="table" id="hide">
			<?php
				$array=array(array(1,2,3,4,5,6),array(8,7,10,9,12,11),array(13,14,15,16,17,18),array(20,19,22,21,24,23),array(25,26,27,28,29,30),array(32,31,34,33,36,35));
				echo "<table border='1' cellpadding='9%'>
					<tr>";
				for($i=0;$i<6;$i++){
					for($j=0;$j<6;$j++)
						echo "<td>".$array[$i][$j]."</td>";
					echo "</tr>";
				}
				echo "</table>";
			?>
		</div>
		<div class="table">
			<?php
				if(isset($_GET['change'])){
					echo "<table border='1' cellpadding='9%'>
						<tr>";
					for($i=0;$i<6;$i++){
						for($j=0;$j<6;$j++){
							if($array[$i][$j]%2==0)
								echo "<td bgcolor='green'>".$array[$i][$j]."</td>";
							else
								echo "<td bgcolor='red'>".$array[$i][$j]."</td>";
						}
						echo "</tr>";
					}
					echo "</table>";
				}
			?>
		</div>
	</body>
</html>
