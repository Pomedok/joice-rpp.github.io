<?php
session_start();
require_once ("../config/conf.php");
global $tabl;
global $org;
if(!empty($_POST['auth'])){
	    $OLD = '12222';
		$password = mysqli_real_escape_string($connect,$_POST['password']);
		$login = mysqli_real_escape_string($connect,$_POST['nickname']);
		if(!empty($password) && !empty($login))
		{
			$query = mysqli_query($connect, "SELECT `{$tabl['id']}`, `{$tabl['key']}` FROM `{$tabl['table']}` WHERE `{$tabl['name']}`='{$login}' LIMIT 1");
			$data = mysqli_fetch_assoc($query);
			if($data["$tabl[key]"] == $password)
			{
				session_start();
				$_SESSION['Nick'] = $login;
				echo "success";
				
			} else {
				echo "notfound";
			}
		}
		else {
			echo "pole";}
}	
if(!empty($_POST['newsid'])){
	    $id = mysqli_real_escape_string($connect,$_POST['newsid']);
		 /*switch ($id) {
			case 1:$id = 1;
       		break;
       		case 2:$id = 15;
       		break;
       		case 3:$id = 30;
       		break;
       		case 4:$id = 45;
       		break;
       		case 5:$id = 60;
       		break;   
       		case 5:$id = 75;
       		break;     

         } */
         $query = mysqli_query($connect,"SELECT `ID`, `title`,`url`,`text`, `time` FROM `news_ucp` WHERE `id` >= '$id' ORDER BY ID DESC LIMIT 15");
		 while ($newsq = mysqli_fetch_assoc($query)) {
			$text = nl2br($newsq['text']);
		    $news = "
		    <div class='news-container wow animated zoomIn'> 
                    <div class='title-news'>
                        <h1>$newsq[title]</h1>
		                <h2>$newsq[time]</h2>
		             </div>
		             <div class='news-content'>
                         <p>$text</p>
                      <div class='news-btn'>
                         <a href=\"$newsq[url]\" class='btn-sub'>Подробнее</a>
                      </div>
                    </div>
                    <div class='clear'></div>
                    </div>
                 ";
                 echo "$news";
            }  
}       
if(!empty($_POST['findid'])){
	if(!empty($_POST['find'])){
	     $fnick = mysqli_real_escape_string($connect,$_POST['findnick']);
         $query = mysqli_query($connect,"SELECT `{$tabl['id']}`, `{$tabl['name']}`,`{$tabl['level']}`,`{$tabl['member']}`, `{$tabl['admin']}`, `{$tabl['ban']}`, `{$tabl['warn']}`, `{$tabl['online']}` FROM `{$tabl['table']}` WHERE `{$tabl['name']}` = '{$fnick}' LIMIT 1");
		 $admins = "<tr><th class='table-ap-head'>Номер аккаута</th>
            <th class='table-ap-head'>Ник</th>
            <th class='table-ap-head'>Уровень</th>
            <th class='table-ap-head'>Фракция</th>
                  <th class='table-ap-head'>Уровень администратора</th>
                  <th class='table-ap-head'>Варнов</th>
                  <th class='table-ap-head'>Статус</th>
                  <th class='table-ap-head'>Состояние</th></tr>";
         echo "$admins";
		 while ($admin = mysqli_fetch_assoc($query)) {
		 	if($admin["$tabl[online]"] = 1){$online = "В игре";}else{$online = "Не в игре";}
		 	if($admin["$tabl[ban]"] = 1){$ban = "Забанен";}else{$ban = "Активен";}
		    $admint = "<tr>
		     <td class='table-ap-head'><a href='?admin=edit&nickf=".$admin["$tabl[name]"]."'>".$admin["$tabl[id]"]."</a></td>
		     <td class='table-ap-head'><a href='?admin=edit&nickf=".$admin["$tabl[name]"]."'>".$admin["$tabl[name]"]."</a></td>
             <td class='table-ap-head'>".$admin["$tabl[level]"]."</td>
             <td class='table-ap-head'>".$org[$admin["$tabl[member]"]]."</td>
             <td class='table-ap-head'>".$admin["$tabl[admin]"]."</td>
             <td class='table-ap-head'>".$admin["$tabl[warn]"]."</td>
             <td class='table-ap-head'>".$online."</td>
             <td class='table-ap-head'>".$ban."</td>
             </tr>";             
                 echo "$admint";
             }
    }else{
         $query = mysqli_query($connect,"SELECT `{$tabl['id']}`, `{$tabl['name']}`,`{$tabl['level']}`,`{$tabl['member']}`, `{$tabl['admin']}`, `{$tabl['ban']}`, `{$tabl['warn']}`, `{$tabl['online']}` FROM `{$tabl['table']}` WHERE `{$tabl['id']}` >= '1' ORDER BY `{$tabl['id']}` DESC LIMIT 15");
		 $admins = "<tr><th class='table-ap-head'>Номер аккаута</th>
            <th class='table-ap-head'>Ник</th>
            <th class='table-ap-head'>Уровень</th>
            <th class='table-ap-head'>Фракция</th>
                  <th class='table-ap-head'>Уровень администратора</th>
                  <th class='table-ap-head'>Варнов</th>
                  <th class='table-ap-head'>Статус</th>
                  <th class='table-ap-head'>Состояние</th></tr>";
         echo "$admins";
		 while ($admin = mysqli_fetch_assoc($query)) {
		 	if($admin["$tabl[online]"] == 1){$online = "В игре";}else{$online = "Не в игре";}
		 	if($admin["$tabl[ban]"] == 1){$ban = "Забанен";}else{$ban = "Активен";}		 	
		    $admint = "<tr>
		     <td class='table-ap-head'><a href='?admin=edit&nickf=".$admin["$tabl[name]"]."'>".$admin["$tabl[id]"]."</a></td>
		     <td class='table-ap-head'><a href='?admin=edit&nickf=".$admin["$tabl[name]"]."'>".$admin["$tabl[name]"]."</a></td>
             <td class='table-ap-head'>".$admin["$tabl[level]"]."</td>
             <td class='table-ap-head'>".$org[$admin["$tabl[member]"]]."</td>
             <td class='table-ap-head'>".$admin["$tabl[admin]"]."</td>
             <td class='table-ap-head'>".$admin["$tabl[warn]"]."</td>
             <td class='table-ap-head'>".$online."</td>
             <td class='table-ap-head'>".$ban."</td>
             </tr>";             
                 //
                 echo "$admint";    
        }         
    }
}   
if(!empty($_POST['changepass'])){

		$oldpassword = mysqli_real_escape_string($connect,$_POST['oldpassword']);
		$newpassword = mysqli_real_escape_string($connect,$_POST['newpassword']);
		$nick = $_SESSION['Nick'];
		if(!empty($oldpassword) && !empty($newpassword))
		{
			$query = mysqli_query($connect, "SELECT `{$tabl['id']}`, `{$tabl['key']}` FROM `{$tabl['table']}` WHERE `{$tabl['name']}`='{$nick}' LIMIT 1");
			$data = mysqli_fetch_assoc($query);
			if($data["$tabl[key]"] == $oldpassword)
			{
				$mdpass =  $newpassword;
				$query = mysqli_query($connect, "UPDATE `{$tabl['table']}` SET `{$tabl['key']}` = '{$mdpass}' WHERE `{$tabl['name']}` = '$nick'");                  
				echo "Пароль успешно изменен!";    
				
			} else {
				echo "Старый пароль неверный!";
			}
		}
		else {
			echo "Заполните все поля!";}
}
if(!empty($_POST['changeemail'])){

		$oldemail = mysqli_real_escape_string($connect,$_POST['oldemail']);
		$newemail = mysqli_real_escape_string($connect,$_POST['newemail']);
		$nick = $_SESSION['Nick'];
		if(!empty($oldemail) && !empty($newemail))
		{
			$query = mysqli_query($connect, "SELECT `{$tabl['id']}`, `{$tabl['mail']}` FROM `{$tabl['table']}` WHERE `{$tabl['name']}`='{$nick}' LIMIT 1");
			$data = mysqli_fetch_assoc($query);
			if($data["$tabl[mail]"] == $oldemail)
			{
				$chars="qazxswedcvfrtgbnhyujmkiolp1234567890QAZXSWEDCVFRTGBNHYUJMKIOLP"; 
				$max=8; 
				$size=StrLen($chars)-1; 
				$password=null; 
				while($max--) 
			    $_SESSION['pin'] .= $chars[rand(0,$size)];
			    $_SESSION['enewemail'] = $newemail;
			    $message = '
                  PIN-код '.$_SESSION['pin'].'';
                    mail($newemail, "Смена E-mail", $message);    
				$tre = "<input type='text' name='pinche' id='pinche' class='inner-input' placeholder='Введите пин-код который отправлен на новый Email'>
                  <button class='btn-sub' type='submit' name='che' id='che' value='che'>Продолжить</button>";  
                  echo "$tre";  
				
			} else {
				echo "not";
			}
		}
		else {
			echo "pole";}
}
if(!empty($_POST['recnick'])){
		$rnick = mysqli_real_escape_string($connect,$_POST['recnick']);
		$remail = mysqli_real_escape_string($connect,$_POST['recemail']);
		if(!empty($rnick) && !empty($remail))
		{
			$query = mysqli_query($connect, "SELECT ".$tabl['id'].", ".$tabl['mail'].", ".$tabl['key']." FROM ".$tabl['table']." WHERE ".$tabl['name']."='".$rnick."' LIMIT 1");
			$data = mysqli_fetch_assoc($query);
			if($data["$tabl[mail]"] == $remail)
			{
			    $chars="qazxswedcvfrtgbnhyujmkiolp1234567890QAZXSWEDCVFRTGBNHYUJMKIOLP"; 
				$max=10; 
				$size=StrLen($chars)-1; 
				$password=null; 
				while($max--) 
				$password.=$chars[rand(0,$size)]; 
				$mdpass = $password;
				$query = mysqli_query($connect, "UPDATE `{$tabl['table']}` SET `{$tabl['key']}` = '{$mdpass}' WHERE `{$tabl['name']}` = '$rnick'");
				$message = '
                  Ваш ник: '.$rnick.'
                  <br>
                  Ваш пароль: '.$password.'';
                    mail($remail, "Восстановление пароля", $message);                     
				echo "success";    
				
			} else {
				echo "notfound";
			}
		}
		else {
			echo "pole";}
}	
if(!empty($_POST['news'])){
		$title = mysqli_real_escape_string($connect,$_POST['title']);
		$url = mysqli_real_escape_string($connect,$_POST['url']);
		$text = mysqli_real_escape_string($connect,$_POST['text']);
		$data = date("Y-n-j");
		if(!empty($text))
		  {
			 $query = mysqli_query($connect, "insert into news_ucp(title,url, text, time) values ('".$title."', '".$url."','".$text."','".$data."')");
		     echo "success";
		   }else{
		       	echo "pole";}
}
?>
