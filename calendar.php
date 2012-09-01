<html>

<head>
<link href="Calendar.css" rel="stylesheet" type="text/css" />
	<script>
		function goLastMonth(month, year)
		{
			if(month == 1)
			{
				--year;
				month = 13;
			}
			document.location.href="<?php $_SERVER['PHP_SELF'];?>?month="+(month-1)+"&year="+(year)+""
		}
		
		function goNextMonth(month, year)
		{
			if(month == 12)
			{
				++year;
				month = 0;
			}
			document.location.href="<?php $_SERVER['PHP_SELF'];?>?month="+(month+1)+"&year="+(year)+""
		}
	</script>	
</head>
	
<body>
	<?php
		if(isset($_GET['day']))
		{
			$day = $_GET['day'];
		}
		else
		{
			$day = date("j");
		}
		if(isset($_GET['month']))
		{
			$month = $_GET['month'];
		}
		else
		{
			$month = date("n");
		}
		if(isset($_GET['year']))
		{
			$year = $_GET['year'];
		}
		else
		{
			$year = date("Y");
		}
		//calendar variables
		$currentTimeStamp = strtotime("$year-$month-$day");
		$monthName = date("F",$currentTimeStamp);
		$numDays = date("t",$currentTimeStamp);
		$counter = 0;
		
		
    ?>
    <table border = '1'>
            <tr>
                <td><input type="button" value="<" name="previousbutton" onClick="goLastMonth(<?php echo $month.",".$year;?>)">
                 </td>
                <td colspan="5"><?php echo $monthName.', '.$year; ?></td>
                <td><input type="button" value=">" name="nextbutton" onClick="goNextMonth(<?php echo $month.",".$year;?>)">
                </td>
            </tr>
            <tr>
                <td>Sun</td>
                <td>Mon</td>
                <td>Tue</td>
                <td>Wed</td>
                <td>Thu</td>
                <td>Fri</td>
                <td>Sat</td>
            </tr>
            <?php
				echo "<tr>";
				
				for($i = 1; $i <= $numDays; $i++, $counter++)
				{
					$timeStamp = strtotime("$year-$month-$i");
					if($i == 1)
					{
						$firstDay = date("w",$timeStamp);
						for($j = 0; $j < $firstDay; $j++, $counter++)
						{
							//blank cell
							echo "<td>&nbsp;</td>";
						}
						
					}
					if($counter%7 == 0)
					{
						echo "<tr></tr>";
					}
					echo "<td align='center'>".$i."</td>";
				}
				
				echo "</tr>";
			?>
    </table>
			
</body>
	
</html>