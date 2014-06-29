
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">  
<div style='margin-left:35%; margin-top:5%;'> 



    <?php   

            echo "<table width='400px'>";

            echo form_open(base_url().'login/verifikacija');

            echo "<tr> <td>";

            echo '<b> Корисничко име:';

            echo "</td> <td>";

            echo "<input type='text' name='usersname' autofocus required placeholder='Корисничко име'>";

            echo "</td>";

            echo "<tr> <td>";

            echo '<b>Лозинка';

            echo "</td> <td>";

            echo "<input type='password' name='lozinka' required placeholder='Лозинка'>"; 

            echo "</td>";

            echo "<tr> <td/> <td>";

            //echo form_submit('logiranje','Login');

            echo "<input type='submit' name='logiranje' value='Најави се' style='width:90px; height:30px;'>";

            echo form_close();

            echo "</td> </table>";

            

           

    ?>



</div>





