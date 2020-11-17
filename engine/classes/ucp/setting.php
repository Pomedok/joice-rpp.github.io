<?php
if (isset($_SESSION['Nick'])){
    class setting extends hf {
    	public function get_content() { 
    	global $connect,$tabl;
    	if(!empty($_POST['che'])){
		$pinche = mysqli_real_escape_string($connect,$_POST['pinche']);
		$nick = $_SESSION['Nick'];
		$new = $_SESSION['enewemail'];
		if($_SESSION['pin'] == $pinche)
			{
				$query = mysqli_query($connect, "UPDATE `{$tabl['table']}` SET `{$tabl['mail']}` = '{$new}' WHERE `{$tabl['name']}` = '$nick'");                   
                  $inf = "E-mail был изменен!";
                  $_SESSION['pin'] = '';
				
			} else {
				$inf = "Ошибка";
				$_SESSION['pin'] = '';
			}
         }				
    		include "app/view/ucp/setting.php"; 
    	}
    }
}    
else{
    echo "<META HTTP-EQUIV='REFRESH' CONTENT='0;?ucp=login'>";
}     
?>
