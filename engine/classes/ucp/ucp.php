<?php
if (isset($_SESSION['Nick'])){ 
    class ucp extends hf {
      public function get_content() { 
        global $tabl;
        global $org;   
        global $connect; 
		if (isset($_SESSION['Nick'])){
			$nick = $_SESSION['Nick'];
			$query = mysqli_query($connect, "SELECT * FROM ".$tabl['table']." where ".$tabl['name']." = '".$nick."'");
			$data = mysqli_fetch_assoc($query);	
            $_SESSION['alevel'] = $data["$tabl[admin]"];
            $skin = $data["$tabl[skin]"];
            if($data["$tabl[online]"] == 1){$online = "В разработке";}else { $online = "В разработке";}
            if($data["$tabl[ban]"] == 1){$ban = "Забанен";}else { $ban = "Активен";}
            if($data["$tabl[house]"] == 255){$house = "Нет";}else { $house = "<span>".$data["$tabl[house]"]."<span>";}
            if($data["$tabl[biz]"] == 255){$biz = "Нет";}else { $biz = "<span>".$data["$tabl[biz]"]."<span>";}
            if($data["$tabl[warn]"] == 0){$warn = "Нет";}else { $warn = "<span>".$data["$tabl[warn]"]."<span>";}
            if($data["$tabl[member]"] == 0){$member = "Нет";}else { $member = "<span>".$org[$data["$tabl[member]"]]."<span>";}
            if($data["$tabl[car]"] == 0){$car = "Нет";}else { $car = "<span>".$data["$tabl[car]"]."<span>";}
            if($data["$tabl[rank]"] == 0){$rank = "Нет";}else { $rank = "<span>".$data["$tabl[rank]"]."<span>";}
            $nick = explode("_", $nick);
    	  }        
        include "app/view/ucp/ucp.php"; 
      }
    }
}    
else{
    echo "<META HTTP-EQUIV='REFRESH' CONTENT='0;?ucp=login'>";
} 
?>
