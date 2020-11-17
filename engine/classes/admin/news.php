<?php
class news extends js {
	public function get_content() { 
		global $tabl;
	    if($_SESSION['alevel'] >= $tabl['alevel']){						
		    include "app/view/admin/news.php"; 
	    } 
	}
}
?>
