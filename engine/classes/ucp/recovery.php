<?php
if (!isset($_SESSION['Nick'])){ 
    class recovery extends hf {
    	public function get_content() { 				
    		include "app/view/ucp/recovery.php"; 
    	}
    }
}    
else{
    echo "<META HTTP-EQUIV='REFRESH' CONTENT='0;?ucp=login'>";
}
?>
