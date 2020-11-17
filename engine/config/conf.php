<?php
$config = array(
	'sitename' => 'Joice RolePlay' ,// Название вашего сайта. 
	'siteurl' => 'Joice-rp',// URL адрес сайта.
	'vk1' => '-',// Ссылка на группу ВК |Пример https://vk.com/pawninfo
	'vk2' => '-',// Ссылка на группу ВК |Пример https://vk.com/pawninfo
	'meta' => 'gta, san andreas по интернету, gta, samp, widerp.ru, wide rp, multiplayer, rp',
	'' => '', // Номер сервера в ,Пример: 10378 || А не так - http://samp-stats.ru/server/10378/ 
	'unitpay' => '60933-1d78a', // 
    'forum' => 'http://forum.attract-rp.ru',// URL адрес форума. 
	'ipserver' => '217.20.167.57:7777',// IP адрес вашего сервера. 
	'youtube' => 'https://www.youtube.com/embed/pdWIjZ5txLQ',// Ссылка на видео,на главной странице.
	//База 
	'host' => 'localhost',
	'user' => 'root',
	'pass' => 'root',
	'db' => 'samp',
	//text
	'text1' => '',// Донат - полезная информация
	'text2' => '', // Личный кабинет - полезная информация
	// На главной странице
	'text3' => '',
	'text4' => 'Joice RolePlay - игровая платформа SA:MP в жанре RolePlay. Основная задача сервера - золотая середина между интересной игрой, то есть местом, где игроки будут с удовольствием проводить время друг с другом качественной RP-игрой.  В на­сто­я­щее вре­мя у нас ра­бо­та­ют 2 сер­ве­ра, а увле­ка­тель­ные осо­бен­но­сти иг­ро­во­го про­цес­са при­вле­ка­ют всё боль­ше и боль­ше но­вых иг­ро­ков. Мы по­ста­ра­лись объ­еди­нить луч­шие эле­мен­ты ро­ле­вой иг­ры SA-MP с но­вы­ми иде­я­ми и ши­ро­ки­ми воз­мож­но­стя­ми для всех иг­ро­ков.',
	'text6' => '',
	'text7' => 'Joice RolePlay © 2020 г.'
 );
$connect = mysqli_connect("$config[host]", "$config[user]", "$config[pass]", "$config[db]");
if (mysqli_connect_errno()) {
    printf("Не удалось подключиться: %s\n", mysqli_connect_error());
    exit();
}
$tabl = array (
	'table' => 'accounts',
	'id' => 'id',
	'key' => 'password',
	'name' => 'nickname',
	'level' => 'level',
	'admin' => 'admin',
	'alevel' => '8',//Максимальный адм.уровень
	'cash' => 'money',
	'money' => 'bank',	
	'leader' => 'fraction',
	'car' => 'cars',
	'hmoney' => 'pBank',	
	'house' => 'house',
	'biz' => 'business',
	'mobile' => 'phone',
	'rank' => 'rank',
	'member' => 'member',
	'donate' => 'newdonate',
	'warn' => 'warn',
	'skin' => 'skin',
	'online' => 'pOnlineLid',
	'mail' => 'email',
	'exp' => 'exp',
	'getondate' => 'lastdate',
	'zakon' => 'zakon',
	'ban' => 'ban',
	//оружия
	'sdpistol' => 'skills',
	'desert' => 'skills',
	'shot' => 'skills',
	'mp5' => 'skills',
	'ak47' => 'skills',
	'm4' => 'skills');
$news = array(
	'id' => 'id', 
	'time' => 'time', 
	'title' => 'title', 
	'title2' => 'title2', 
	'text' => 'text');
$org = array(  // Просто нужно дополнить!!
	'1' => 'Инструкторы', 
	'2' => 'Министерство Здравоохранения',
	'0' => 'Гражданин', 
	'3' => 'The Ballas', 
	'4' => 'Grove Streer',
	'5' => 'Aztecas',
	'6' => 'Vagos', 
	'7' => 'Rifa', 
	'8' => 'Министерство Обороны',
	'9' => 'Министерство Внутрених Дел', 
	'10' => 'Средство Масовой Информации', 
	'11' => 'Администрация Презедента',
	'12' => 'ФБР', 
	'13' => 'Yakuza', 
	'14' => 'Мексиканская Мафия', 
	'15' => 'Колумбийская Мафия',
	'16' => 'СМИ SA', 
	'17' => 'Aztecas', 
	'18' => 'Rifa', 
	'19' => 'Армия SA',
	'20' => '', 
	'21' => 'LVPD', 
	'22' => 'Black People');
$adm = array(// Просто нужно дополнить!!
	'1' => 'Начинающий модератор', // Вместо второй 1 можете писать,н-р: Гл.модератор и так со всеми
	'2' => 'Модератор', 
	'3' => 'Старший модератор', 
	'4' => 'Младший Администратор', 	
	'5' => 'Старший Администратор', 
	'6' => 'Управляющий Администратор', 
	'7' => 'Смотрящий Администратор', 
	'8' => 'Главный Администратор', 
	'9' => 'Спец Администратор', 
	'10' => 'Руководитель Проекта', 
	'11' => '11', 
	'12' => '12', 
	'13' => '13', 
	'14' => '14');
?>