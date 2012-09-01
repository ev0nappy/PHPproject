<html>

<head>

</head>

<body>
	<form name="eventform" method="post" action="<?php $_SERVER		['PHP_SELF'];?>">
	
    	<table width="400px">
    		<tr>
            	<td width="150px">Meeting Place</td>
                <td width="250px"><input type="text" name="textMettingPlace"/></td>
            </tr>
            <tr>
            	<td width="150px">Detail</td>
                <td width = "250px"><textarea name="textDetail"></textarea></td>
            </tr>
            <tr>
            	<td colspan = '2' align="center">
                <input type="submit" name="AddEvent" value="Add Event" />
                </td>

            </tr>
        
    	</table>
    
	</form>
    
</body>

</html>