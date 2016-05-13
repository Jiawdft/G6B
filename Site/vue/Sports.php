<!DOCTYPE html>
<html>
	<head>
		<title>Les Sports</title>
		<link href="../vue/Sports.css" rel="stylesheet" type="text/css" media="screen" />
		<meta http-equiv="content-type" content="text/html" charset="UTF-8" />
	</head>
	<body>
	 
		<?php include("../Header/HOMETOP.php"); ?>

		<div class="Sports">
		    <table>
		    	<tbody>
					<?php
					$a=0;
					foreach($sports as $sport)
					{	
					?>
					<td><a href='../controleur/Fichesporttype.php?sport=<?php echo ($sport['sport'])?>'>  <?php echo mb_strtoupper($sport['sport'])?></a></td>
					<?php
						$a++;
						if($a%3==0)
						{
							?>
							</tr>
							<tr>
							<?php
						}
					}
	    			?>
	 				</tr>
				</tbody>
			</table>
		</div>
		<script type="text/javascript">
			function AfficherMasquer()
		{
			divInfo = document.getElementById('divacacher');
			if (divInfo.style.display == 'none')
			    divInfo.style.display = 'block';
			else
			divInfo.style.display = 'none';
		}
		</script>
		<div id="Plus"  onClick="AfficherMasquer(); scrollTo(0,400)">
			<a>Plus…</a>
		</div>
		<div id="divacacher" style="display:none;">
			<a>AUTRES SPORTS :</a>
		</div>
	</body>
</html>