<?php
if (isset($_SESSION['Nick'])){
    class leader extends hf {
      public function get_content() { 
      global $tabl;
      global $connect;
      $nick = $_SESSION['Nick'];
      $query = mysqli_query($connect, "SELECT `{$tabl['id']}`, `{$tabl['name']}`, `{$tabl['leader']}` FROM `{$tabl['table']}` WHERE `{$tabl['name']}`='{$nick}'");
      $data = mysqli_fetch_assoc($query);
        if ($data["$tabl[leader]"] >= '1')
        {
                if(isset($_POST['up'])){
                $id = mysqli_real_escape_string($connect,$_POST['playerid']);
            	$oldin = mysqli_query($connect, "SELECT `{$tabl['id']}`, `{$tabl['member']}`, `{$tabl['rank']}` FROM `{$tabl['table']}` WHERE `{$tabl['id']}`='{$id}'");
            	$olds = mysqli_fetch_assoc($oldin);
            	$rank = $olds["$tabl[rank]"]+1;
            	$member = $olds["$tabl[member]"];
            	$query = mysqli_query($connect, "SELECT `{$tabl['id']}`, `{$tabl['member']}` FROM `{$tabl['table']}` WHERE `{$tabl['name']}`='{$nick}'");
            	$data = mysqli_fetch_assoc($query);
            	if($data["$tabl[member]"] == $member){
                    if($olds["$tabl[rank]"] <= '8')
            		    {
            		    	$info = "Ранг повышен";
                            $query = mysqli_query($connect, "UPDATE `{$tabl['table']}` SET `{$tabl['rank']}` = '$rank' WHERE `{$tabl['id']}` = '{$id}'");           		    	
            		    		
            		      } else {
            		        	$info = "Ошибка нельзя выше 9-ранга!";
            		    }
                    } else {
                            $info = "Ошибка!";
                        }   
            }
            if(isset($_POST['down'])){
                $id = mysqli_real_escape_string($connect,$_POST['playerid']);
            	$oldin = mysqli_query($connect, "SELECT `{$tabl['id']}`, `{$tabl['member']}`, `{$tabl['rank']}` FROM `{$tabl['table']}` WHERE `{$tabl['id']}`='{$id}'");
            	$olds = mysqli_fetch_assoc($oldin);
            	$rank = $olds["$tabl[rank]"]-1;
            	$member = $olds["$tabl[member]"];
            	$query = mysqli_query($connect, "SELECT `{$tabl['id']}`, `{$tabl['member']}` FROM `{$tabl['table']}` WHERE `{$tabl['name']}`='{$nick}'");
            	$data = mysqli_fetch_assoc($query);
            	if($data["$tabl[member]"] == $member)
            		{
                        if($olds["$tabl[rank]"] >= 2){
            		      	  $info = "Ранг понижен!";
                              $query = mysqli_query($connect, "UPDATE `{$tabl['table']}` SET `{$tabl['rank']}` = '$rank' WHERE `{$tabl['id']}` = '{$id}'");
            		       } else {
                              $info = "Ошибка";
                          }
            				
            		} else {
            			$info = "Ошибка";
            	}
            }
            if(isset($_POST['uninvite'])){
                $id = mysqli_real_escape_string($connect,$_POST['playerid']);
            	$oldin = mysqli_query($connect, "SELECT `{$tabl['id']}`, `{$tabl['member']}`, `{$tabl['rank']}` FROM `{$tabl['table']}` WHERE `{$tabl['id']}`='{$id}'");
            	$olds = mysqli_fetch_assoc($oldin);
            	$member = $olds["$tabl[member]"];
            	$query = mysqli_query($connect, "SELECT `{$tabl['id']}`, `{$tabl['member']}` FROM `{$tabl['table']}` WHERE `{$tabl['name']}`='{$nick}'");
            	$data = mysqli_fetch_assoc($query);
            	if($data["$tabl[member]"] == $member)
            		{
            			$info = "Игрок уволен";
                        $query = mysqli_query($connect, "UPDATE `{$tabl['table']}` SET `{$tabl['rank']}` = '0',`{$tabl['member']}` = '0' WHERE `{$tabl['id']}` = '{$id}'");
            			
            				
            		} else {
            			$info = "Ошибка";
            		}
            }	     	    	    					
		$mylead = mysqli_query($connect, "SELECT `{$tabl['id']}`,`{$tabl['name']}`,`{$tabl['leader']}` FROM ".$tabl['table']." where ".$tabl['name']." = '".$nick."'");
        $old = mysqli_fetch_assoc($mylead);
        $query = mysqli_query($connect, "SELECT `{$tabl['id']}`, `{$tabl['name']}`,`{$tabl['rank']}`, `{$tabl['member']}` FROM `{$tabl['table']}` WHERE `{$tabl['member']}` = '".$old["$tabl[leader]"]."'");        
        while ($date = mysqli_fetch_assoc($query)) {
			   $lid .= "<tr>
			             <form method=\"POST\">
			             <td class='table-players-item'>".$date["$tabl[name]"]."</td>
			             <td class='table-players-value'>".$date["$tabl[rank]"]."</td>
			             <input id='playerid' name='playerid' value='".$date["$tabl[id]"]."' type='hidden'>
			             <td class='table-players-controll'>
			             <button id='up' type='submit' name='up' value='up'<i class='fa fa-level-up' aria-hidden='true'></i> повысить</up>
			             <button id='down' type='submit' name='down' value='down'><i class='fa fa-level-up' aria-hidden='true'></i> понизить</up> |
			             <button id='uninvite' type='submit' name='uninvite' value='uninvite'><i class='fa fa-level-up' aria-hidden='true'></i> уволить</up></td>
			             </form></tr>";
			    }
	include "app/view/ucp/leader.php"; 
}else {echo "<META HTTP-EQUIV='REFRESH' CONTENT='0;?ucp=ucp'>";}
    	}		     
    }
}    
else{
    echo "<META HTTP-EQUIV='REFRESH' CONTENT='0;?ucp=login'>";
} 
?>
