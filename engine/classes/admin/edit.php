<?php
class edit extends js {
	public function get_content() { 
	   global $connect;	
     global $tabl;  
	   global $org;	
     if($_SESSION['alevel'] >= $tabl['alevel']){
	    $ids = mysqli_real_escape_string($connect,$_GET['nickf']);
      if(!empty($_POST['fsave'])){
        $level = mysqli_real_escape_string($connect,$_POST['level']);  
        $nick = mysqli_real_escape_string($connect,$_POST['nick']);  
        $orgs = mysqli_real_escape_string($connect,$_POST['org']);  
        $warn = mysqli_real_escape_string($connect,$_POST['warn']);  
        $ban = mysqli_real_escape_string($connect,$_POST['ban']);  
        $leader = mysqli_real_escape_string($connect,$_POST['leader']);  
        $admin = mysqli_real_escape_string($connect,$_POST['admin']);  
        $car = mysqli_real_escape_string($connect,$_POST['car']);  
        $cash = mysqli_real_escape_string($connect,$_POST['cash']);  
        $bank = mysqli_real_escape_string($connect,$_POST['bank']);  
        $query = mysqli_query($connect, "UPDATE `{$tabl['table']}` SET 
                                                   `{$tabl['level']}` = '{$level}',
                                                    `{$tabl['name']}` = '{$nick}',
                                                     `{$tabl['member']}` = '{$orgs}',
                                                      `{$tabl['warn']}` = '{$warn}',
                                                       `{$tabl['leader']}` = '{$leader}',
                                                        `{$tabl['admin']}` = '{$admin}',
                                                         `{$tabl['car']}` = '{$car}',
                                                          `{$tabl['cash']}` = '{$cash}',
                                                            `{$tabl['ban']}` = '{$ban}',
                                                             `{$tabl['money']}` = '{$bank}' WHERE `{$tabl['name']}` = '$ids'");

      }  	
      $query = mysqli_query($connect,"SELECT `{$tabl['id']}`, 
                                        `{$tabl['name']}`,
                                          `{$tabl['level']}`,
                                           `{$tabl['member']}`, 
                                            `{$tabl['admin']}`,
                                              `{$tabl['ban']}`, 
                                               `{$tabl['warn']}`, 
                                                `{$tabl['leader']}`, 
                                                 `{$tabl['car']}`,
                                                  `{$tabl['cash']}`,
                                                   `{$tabl['money']}`,
                                                `{$tabl['online']}` FROM `{$tabl['table']}` WHERE `{$tabl['name']}` = '{$ids}' LIMIT 1");
	   
      $data = mysqli_fetch_assoc($query);
      if($data["$tabl[leader]"] == 0){$leader = "Нету";}else{$leader = $org[$data["$tabl[leader]"]];}
	    $edit = "<tr>
                    <th class='table-ap-head'>Пункт статистики</th>
                    <th class='table-ap-head'>Поле для заполнения</th>
                  </tr>
                  <tr>
                    <td class='table-ap-value'><label>Уровень игрока</label></td>
                    <td class='table-ap-value'><input type='text' name='level' class='inner-input acc-edit-input' value='".$data["$tabl[level]"]."'></td>
                  </tr>
                  <tr>
                    <td class='table-ap-value'><label>Ник игрока</label></td>
                    <td class='table-ap-value'><input type='text' name='nick' class='inner-input acc-edit-input' value='".$data["$tabl[name]"]."'></td>
                  </tr>
                  <tr>
                    <td class='table-ap-value'><label>Фракция игрока |".$org[$data["$tabl[member]"]]."|</label></td>
                    <td class='table-ap-value'><input type='text' name='org' class='inner-input acc-edit-input' value='".$data["$tabl[member]"]."'></td>
                  </tr>
                  <tr>
                    <td class='table-ap-value'><label>Варнов</label></td>
                    <td class='table-ap-value'><input type='text' name='warn' class='inner-input acc-edit-input' value='".$data["$tabl[warn]"]."'></td>
                  </tr>
                  <tr>
                    <td class='table-ap-value'><label>Банов</label></td>
                    <td class='table-ap-value'><input type='text' name='ban' class='inner-input acc-edit-input' value='".$data["$tabl[ban]"]."'></td>
                  </tr>                  
                  <tr>
                    <td class='table-ap-value'><label>Лидерство|".$leader."|</label></td>
                    <td class='table-ap-value'><input type='text' name='leader' class='inner-input acc-edit-input' value='".$data["$tabl[leader]"]."'></td>
                  </tr>
                  <tr>
                    <td class='table-ap-value'><label>Адм.уровень</label></td>
                    <td class='table-ap-value'><input type='text' name='admin' class='inner-input acc-edit-input' value='".$data["$tabl[admin]"]."'></td>
                  </tr>
                  <tr>
                    <td class='table-ap-value'><label>Машина</label></td>
                    <td class='table-ap-value'><input type='text' name='car' class='inner-input acc-edit-input' value='".$data["$tabl[car]"]."'></td>
                  </tr> 
                  <tr>
                    <td class='table-ap-value'><label>Наличные</label></td>
                    <td class='table-ap-value'><input type='text' name='cash' class='inner-input acc-edit-input' value='".$data["$tabl[cash]"]."'></td>
                  </tr>
                  <tr>
                    <td class='table-ap-value'><label>Банковский счет</label></td>
                    <td class='table-ap-value'><input type='text' name='bank' class='inner-input acc-edit-input' value='".$data["$tabl[money]"]."'></td>
                  </tr> ";

		include "app/view/admin/edit.php"; 
   }else {echo "<META HTTP-EQUIV='REFRESH' CONTENT='0;?ucp=ucp'";}
	}
}
?>
