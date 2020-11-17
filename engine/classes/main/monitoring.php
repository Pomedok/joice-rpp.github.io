<?php
class monitoring extends hf {
	public function get_content() {
       global $org,$adm,$connect,$tabl;
			 $thlid = array();
			 $tdlid = array();
			 $thadm = array();
			 $tdadm = array();
			 	 $connect = mysqli_connect('localhost', 'root', 'root', 'samp');

				 /* APPLE */

         $query = mysqli_query($connect,"SELECT `{$tabl['id']}`, `{$tabl['name']}`,`{$tabl['getondate']}`,`{$tabl['leader']}`, `{$tabl['online']}` FROM `{$tabl['table']}` WHERE `{$tabl['leader']}` >= '1' ORDER BY {$tabl['leader']} ASC");
		   $thlid[0] = " <tr>
                 <th class='table-mon-head'>Ник</th>
                 <th class='table-mon-head'>Фракция</th>
                 <th class='table-mon-head'>Статус</th>
                 <th class='table-mon-head'>Последний вход</th>
                </tr>";
         while ($lid = mysqli_fetch_assoc($query)) {
            if($lid["$tabl[online]"] == 1 ){$online = "В разработке";}else{$online = "В разработке";}
          $tdlid[0] .= "<tr>
                  <td class='table-mon-value'>".$lid["$tabl[name]"]."</td>
                  <td class='table-mon-value'>".$org[$lid["$tabl[leader]"]]."</td>
                  <td class='table-mon-value'>".$online."</td>
                  <td class='table-mon-value'>".$lid["$tabl[getondate]"]."</td>
                </tr>";
                }
         $query = mysqli_query($connect,"SELECT `{$tabl['id']}`, `{$tabl['name']}`,`{$tabl['getondate']}`, `{$tabl['admin']}`, `{$tabl['online']}` FROM `{$tabl['table']}` WHERE `{$tabl['admin']}` >= '1' ORDER BY {$tabl['admin']} DESC");
         $thadm[0] = " <tr>
                 <th class='table-mon-head'>Ник</th>
                 <th class='table-mon-head'>Уровень</th>
                 <th class='table-mon-head'>Статус</th>
                 <th class='table-mon-head'>Последний вход</th>
                </tr>";
         while ($admq = mysqli_fetch_assoc($query)) {
            if($admq["$tabl[online]"] == 1 ){$online = "В разработке";}else{$online = "В разработке";}
          $tdadm[0] .= "<tr>
                  <td class='table-mon-value'>".$admq["$tabl[name]"]."</td>
                  <td class='table-mon-value'>".$adm[$admq["$tabl[admin]"]]."</td>
                  <td class='table-mon-value'>".$online."</td>
                  <td class='table-mon-value'>".$admq["$tabl[getondate]"]."</td>
                </tr>";
                }


		include "app/view/main/monitoring.php";
	}
}
?>
