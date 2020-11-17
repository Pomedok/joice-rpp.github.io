<?php
if (!isset($_SESSION['Nick'])){ 
    class login extends hf {
    	public function get_content() {				
    		include "app/view/ucp/login.php"; 
    	}
    }
}
else{
    echo "<META HTTP-EQUIV='REFRESH' CONTENT='0;?ucp=ucp'>";
} 
?>
