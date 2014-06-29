<div class='menu'>
<?php
if($this->session->userdata('userl')==1)
{ ?>

<a href=<?php echo base_url(); ?>admin><?php echo "Почетна"; ?> </a>
<a href=<?php echo base_url(); ?>admin/addAdmin><?php echo "Додај Aдминистратор"; ?> </a>
<a href=<?php echo base_url(); ?>admin/addLekar><?php echo "Додај Лекар"; ?> </a>
<a href=<?php echo base_url(); ?>admin/addPacient><?php echo "Додај Пациент"; ?> </a>
<a href=<?php echo base_url(); ?>admin/delete><?php echo "Избриши корисник"; ?> </a>
<a id='logout' href=<?php echo base_url(); ?>logout><?php echo "Одјави се"; ?></a>
<?php
}

if($this->session->userdata('userl')==2)
{
	?> 
	<a href=<?php echo base_url();?>lekar> <?php echo "Почетна"; ?> </a>
	<a href=<?php echo base_url();?>lekar/pregled> <?php echo "Преглед"; ?> </a>
	<a href=<?php echo base_url();?>lekar/novPacient> <?php echo "Додај Пациент"; ?> </a>
	<a href=<?php echo base_url();?>lekar/prikaziPregledi> <?php echo "Сите прегледи"; ?> </a>
	<a id='logout' href=<?php echo base_url(); ?>logout><?php echo "Одјави се"; ?></a>

<?php
}
?>
</div>