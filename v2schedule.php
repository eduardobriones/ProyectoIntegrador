<html>
<head>
	<title>TeacherOnLine</title>
	<meta charset="utf-8">
		
		<?php
		include('HeaderBar.html');
	?>
	
		<tr align="right">
				<td align="right" colspan="8"><button onclick="updateSchedule()">Save</button></td>
			
			<tr align="right">
				<td align="right" colspan="8"><button >Save</button></td>
			</tr>
	</table>

	</div>

	<?php

		$con=mysql_connect("localhost","root","");
		mysql_select_db("cal",$con);
		$sql ="select * from calen";
		$datos=mysql_query($sql,$con);
		echo "<h1>Asesorias</h1>";

			while ($row=mysql_fetch_array($datos)){
				$e_mail=$row['email'];
				
			}
			mysql_close($con);
			echo '<iframe id="google" src="https://www.google.com/calendar/embed?src=' . $e_mail . '" style="border: 0" width="800" height="600" frameborder="0" scrolling="no"></iframe>'

	?>


	
</body>
</html>