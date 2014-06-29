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
<h2 align='center'> Додај лекар во системот </h2>
<?php 
echo form_open(base_url().'admin/addLekar');
?>
<table align='center' width='500px'>
		<tr> <td> Шифра</td> <td align='center'>   <input  name='shifra'  value='<?php echo rand(); ?>'  readonly> </td> </tr>
		<tr> <td> Име*      </td> <td align='center'> <input type='text' name='ime' pattern="[a-zA-Zа-шА-Ш]{3,}" autofocus required> </td></tr>
		<tr> <td> Презиме* </td> <td align='center'> <input type='text' name='prezime' pattern="[a-zA-Zа-шА-Ш]{3,}" required > </td> </tr>
		<tr> <td> Корисничко име* </td align='center'> <td align='center'> <input type='text' name='username' pattern="[a-zA-Zа-шА-Ш0-9]{3,}" required > </td> </tr>
		<tr> <td> Лозинка* </td> <td align='center'> <input type='password' name='lozinka' pattern="[a-zA-Zа-шА-Ш0-9]{3,}" required> </td> </tr>
		<tr> <td> Е-маил* </td> <td align='center'> <input type='email' name='mail' required> </td> </tr>
		<tr> <td> Телефон* </td> <td align='center'> <input type='number' name='telefon' pattern="[0-9]{6,}" required> </td> </tr>
		<tr> <td> Населено место* </td> <td align='center'> <input type='text' name='mesto'> </td> </tr>
		<tr> <td>  </td> 
			<td align='center'> 
								<input type='reset' value='Ресетирај' name='reset'>
								<input type='submit' value='Внеси' name='submit'>
			</td>
		</tr>
</table> 

</div>