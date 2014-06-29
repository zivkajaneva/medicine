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
<br>
<h2 align='center'> Промена на матичен лекар </h2>
<br> <br> <br> 
<?php 
echo form_open(base_url().'lekar/novPacient');
?><table align='center'><tr><td>
 Внесете го Матичниот број:  <input type='number' size='13' name='mbr' required autofocus> <br> 
</td><td> </td></tr>
<tr><td> Внесете број на картон: <input type='number' size='13' name='karton' required></td><td>  <input type='submit' value='Промени' name='submit'> 
</td></tr>
</div>