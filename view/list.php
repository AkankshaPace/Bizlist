<html>
<head></head>

<body>

<table>
	<tr><td>Title</td><td>Location</td><td>Description</td></tr>
	<?php 

		foreach ($lists as $title => $list)
		{
			echo '<tr><td><a href="index.php?list='.$list->title.'">'.$list->title.'</a></td><td>'.$list->location.'</td><td>'.$list->description.'</td></tr>';
		}

	?>
</table>

</body>
</html>