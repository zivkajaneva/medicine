<div class='main'> 
<?php 
echo form_open(base_url().'lekar/prikaziPregledi');
?>

<p align='center'> Од дата: <input type='date' name='odData'> </p>
<p align='center'> До дата: <input type='date' name='doData'> </p>
<p align='center'><input type='reset' name='reset' value='Ресетирај'> <input type='submit' name='submit' value='Внеси'> </p>

<?php  
	 if($pod != 0)
	{
		?> <table border='1'> 
		<tr> <td colspan='3'> Основни податоци за прегледот</td>
			 <td colspan='2'> Лични податоци за корисникот </td> 
			 <td> Дијагнози </td>
			 <td> Рецепти </td>
			 <td> Упати </td>
			 <td colspan="2"> Боледувања </td>
			 <td> Платена партиципација </td>
		</tr>
		<tr> <td> Број на картон </td> <td> Датум </td> <td> Здравствена Услуга </td>
			<td> Име и Презиме </td> <td> ЕМБГ </td>
			<td> Опис на дијагноза </td> <td> Број </td> <td> Број </td>
			<td> Од </td> <td> До </td>    <td> Платено до: </td>
		</tr>

		<?php  foreach($pod as $row) {
	?>
		
		<tr> <td> <?php echo $row->karton; ?> </td> <td> <?php $date = date('d-m-Y',$row->pregled); echo $date;   ?> </td>
		<td> <?php echo $row->zdravstvena_usluga; ?> </td> <td> <?php echo $row->pime; echo $row->pprezime; ?> </td>
		<td> <?php echo $row->embg; ?> </td> <td> <?php echo $row->dijagniza; ?> </td>
		<td> <?php echo $row->recept; ?> </td>
		<td> <?php echo $row->upat; ?> </td><td> <?php echo $row->od; ?> </td> <td> <?php echo $row->do; ?> </td>
		<td> <?php echo $row->osigoruvanje; ?> </td>
	<?php
	}
    }

?>

</div>


