<div class='main'>

<?php
$msg = $this->session->userdata('msg');
if ($msg)
{
echo "
<script>
alert ('$msg')
</script>";  
$this->session->unset_userdata('msg');
}

?>

<h2 align='center'> Избриши корисник </h2>
<?php echo form_open(base_url().'admin/delete');  ?>
<table align='center' width='300px'> 

<tr> 
<td>  	<input type='text' name='vrednost' placeholder='Пребарувај по име' >    </td>
<td>  	<input type='submit' name='search' value='Пребарај'> </td>
</tr>
</table> 
<br> <br> <br>

<?php   if($pod != 0)
{
	?> <table width="700px" align="center" border="1"> <tr><td>Име </td> <td> Презиме</td><td>Град </td><td>Е-маил </td><td>Телефон </td><td></td></tr> <?php

foreach($pod as $row)
{ ?>  
<tr><td> <?php echo $row->ime; ?> </td>
<td> <?php echo $row->prezime; ?> </td>
<td><?php echo $row->grad; ?> </td>
<td> <?php echo $row->email; ?> </td>
<td><?php echo $row->telefon; ?> </td>
<?php  $id=$row->id;  ?>
<td align="center"> 
<button > <a href="<?php echo base_url(); ?>admin/delete/<?php echo $row->id; ?>" >   Избриши </a> </button>  </td>
</tr>

<?php } ?> </table> <?php 
} 
?>

</div>

