<div class='main'>
<div align="center">
<h2> Администратор </h2>
<?php
foreach ($pod as $row) 
{
	?> <table  width='500px' border="1">
			   <tr align="center"> <td> <b>Име</b> </td> <td>     <?php echo $row->ime; ?> </td></tr>
			   <tr align="center"> <td> <b>Презиме</b> </td> <td> <?php echo $row->prezime; ?> </td> </tr>
			   <tr align="center"> <td> <b>Е-маил</b> </td> <td>  <?php echo $row->email; ?> </td> </tr>
			   <tr align="center"> <td> <b>Телефон</b> </td> <td> <?php echo $row->telefon; ?> </td> </tr>
			   <tr align="center"> <td> <b>Место</b> </td> <td>    <?php echo $row->grad; ?> </td> </tr>
	   </table>
<?php
}
?>
</div>
</div>