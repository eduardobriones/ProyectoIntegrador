<html>
<head>
	<title>TeacherOnLine</title>
	<meta charset="utf-8">
		<title>jQuery UI Selectable - Default functionality</title>
		<link rel="stylesheet" href="//code.jquery.com/ui/1.11.1/themes/smoothness/jquery-ui.css">
		<script src="//code.jquery.com/jquery-1.10.2.js"></script>
		<script src="//code.jquery.com/ui/1.11.1/jquery-ui.js"></script>
		<link rel="stylesheet" href="/resources/demos/style.css">
		<style>
		.feedback { font-size: 1.4em; }
		.selectable .ui-selecting { background: #2ECCFA; }
		.selectable .ui-selected { background: #04B431; color: white; }
		.selectable { list-style-type: none; margin: 0; padding: 0; width: 1%; }
		.selectable li { margin: 0px; font-size: 1.4em; width: 5em; height: 2em;}
		</style>
		<script>
		$(function() {
		$( ".selectable" ).selectable();
		});
		</script>
</head>
<body>
	
	<?php
		include('HeaderBar.html');
	?>

	<div>

	<table border="0">
			<tr align="right">
				<td align="right" colspan="8"><button onclick="updateSchedule()">Save</button></td>
			</tr>
			<tr>
				<th></th>
				<th>Lunes</th>
				<th>Martes</th>
				<th>Mi&eacute;rcoles</th>
				<th>Jueves</th>
				<th>Viernes</th>
				<th>S&aacute;bado</th>
				<th>Domingo</th>
			</tr>
			<tr>
				<td>
					7:30
				</td>
				<?php 
					for ($j=0; $j < 7; $j++) { 
						echo "<td rowspan='27'>
							<ol class='selectable'>";
								for ($i=0; $i < 26; $i++) { 
									echo "<li class='ui-widget-content'></li>";
								}
						echo "<ol>
							</td>";	
					}

				?>
			</tr>
			<?php 
				for ($i=8; $i < 21; $i++) { 
					echo "<tr>
						<td>
							".$i.":00
						</td>
					</tr>";	
					echo "<tr>
						<td>
							".$i.":30
						</td>
					</tr>";
				}
				
			?>
			<tr align="right">
				<td align="right" colspan="8"><button >Save</button></td>
			</tr>
	</table>

	</div>


	
</body>
</html>