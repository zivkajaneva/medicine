<div class='main'>
<br> <br> <br> <br> <br>
<h2 align='center'> Најавен корисник: </h2>

<?php
foreach($pod as $row)
{
	echo "<div align='center' style='font-size:20px';> $row->ime  $row->prezime,   $row->grad</div> ";
}

?>

</div>