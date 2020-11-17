<?php
class index extends js {
	public function get_content() { 
		global $tabl;
	    if($_SESSION['alevel'] >= $tabl['alevel']){				
		    include "app/view/admin/index.php"; 
	    }else {echo "<META HTTP-EQUIV='REFRESH' CONTENT='0;?ucp=ucp'";}
	}
}
?>
