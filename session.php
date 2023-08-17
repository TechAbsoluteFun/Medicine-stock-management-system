  <Table width="100%">
  <tr>
  <td>
  <?php if(isset ($_SESSION['username'])) ?>
  </td>
    <td>
	<?php
	if(isset($_SESSION['username']))
	{
	 echo "<div align=\"right\"><strong><a href=\"index.php\"> Home </a>|<a href=\"signout.php\">Signout</a></strong></div>";
	 }
	 else
	 {
	 	echo "&nbsp;";
	 }
	?>
	
  </tr>
  
</table>