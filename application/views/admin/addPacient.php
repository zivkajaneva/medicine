<div class='main'>

<h2 align='center'> Додај пациент во системот </h2>
<?php 
echo form_open(base_url().'admin/addPacient');
?>
<table align='center' width='500px'>
		<tr> <td> Име*      </td> <td align='center'> <input type='text' name='ime' pattern="[a-zA-Zа-шА-Ш]{3,}" autofocus required> </td></tr>
		<tr> <td> Презиме* </td> <td align='center'>  <input type='text' name='prezime' pattern="[a-zA-Zа-шА-Ш]{3,}" required > </td> </tr>
		<tr> <td> Име на родител (мајка)* </td align='center'> <td align='center'> <input type='text' name='majka' pattern="[a-zA-Zа-шА-Ш]{3,}" required > </td> </tr>
		<tr> <td> Име на родител (татко)* </td align='center'> <td align='center'> <input type='text' name='tatko' pattern="[a-zA-Zа-шА-Ш]{3,}" required > </td> </tr>
		<tr> <td> Моминско презиме </td align='center'> <td align='center'> <input type='text' name='mominsko' pattern="[a-zA-Zа-шА-Ш]{3,}" > </td> </tr>
		<tr> <td> Дата на рагање *</td align='center'> <td align='center'> <input type='date' name='data' required > </td> </tr>
		<tr> <td> Место на рагање *</td align='center'> <td align='center'> <input type='text' name='mestorag' required > </td> </tr>
		<tr> <td> Матичен број *</td align='center'> <td align='center'> <input type='number' name='mbr' size='15' pattern="[0-9]{3,}" required > </td> </tr>
		<tr> <td> Време на рагање(саат:минути:секунди)* </td align='center'> <td align='center'> <input type='time' name='vreme' required > </td> </tr>
		<tr> <td> Телефон </td> <td align='center'> <input type='number' name='telefon' > </td> </tr>
		<tr> <td> Место на живеење(улица-град)* </td> <td align='center'> <input type='text' name='mesto'> </td> </tr>
		<tr> <td>  </td> 
			<td align='center'> 
								<input type='reset' value='Ресетирај' name='reset'>
								<input type='submit' value='Внеси' name='submit'>
			</td>
		</tr>
</table> 



</div>