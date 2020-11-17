$(document).ready(function(){
	$("#auth").click(function(){
		$("#info").html('Загрузка...');
		var nickname = $("#nickname").val();
		var password = $("#password").val();
		var auth = $("#auth").val();
		$.post("/engine/classes/obr.php", {nickname: nickname, password: password, auth: auth}, function(data){
			if(data == "notfound") $("#info").html('Bы ввели некорректные данные');
			else if(data == "success") $("#info").html('Bы успешно авторизовались! <META HTTP-EQUIV="REFRESH" CONTENT="1;/?ucp=ucp">');
		    else if(data == "pole") $("#info").html('Заполните все поля! </div>');
		});
	});	
	$("#rec").click(function(){	
		var recnick = $("#recnick").val();
		var recemail = $("#recemail").val();
		var rec = $("#rec").val();
		$("#info").html('Загрузка...');
		$.post("/engine/classes/obr.php", {recnick: recnick, recemail: recemail,rec: rec}, function(data){
			if(data == "notfound") $("#info").html('Bы ввели некорректные данные');
			else if(data == "success") $("#info").html('На ваш E-mail отправлен пароль! <META HTTP-EQUIV="REFRESH" CONTENT="1;/?ucp=login">');
		    else if(data == "pole") $("#info").html('Заполните все поля! </div>');
		});
	});	
 if (window.location.search == '?ucp=setting')
  {
	$("#changepass").click(function(){	
		var oldpassword = $("#oldpassword").val();
		var newpassword = $("#newpassword").val();
		var changepass = $("#changepass").val();
		$("#pinfo").html('Загрузка...');
		$.post("/engine/classes/obr.php", {changepass: changepass,oldpassword: oldpassword, newpassword: newpassword}, 
		function(html){			
			$("#pinfo").html(html); 
		});
	});	
	$("#changeemail").click(function(){	
		var oldemail = $("#oldemail").val();
		var newemail = $("#newemail").val();
		var changeemail = $("#changeemail").val();
		$("#einfo").html('Загрузка...');
		$.post("/engine/classes/obr.php", {changeemail: changeemail,oldemail: oldemail, newemail: newemail}, 	
			function(html){
			if(html == "not" || html == "pole") $("#einfo").html('Ошибка!');
			if (html != "not" && html != "pole"){ $("#einfo").html('PIN-код отправлен!'); $("#ef").html(html);}
	  });	
	});		
  }	
 if (window.location.search == '?admin=news')
  {
	$("#news").click(function(){	
		var title = $("#title").val();
		var url = $("#url").val();
		var text = $("#text").val();
		var news = $("#news").val();
		$("#info").html('Загрузка...');
		$.post("/engine/classes/obr.php", {title: title, text: text,news: news,url:url}, function(data){			
			if(data == "success") $("#info").html('Новость успешно добавлена! <META HTTP-EQUIV="REFRESH" CONTENT="1;/?main=news">');
		    else if(data == "pole") $("#info").html('Заполните все поля!');
		});
	});	
  }
 if (window.location.search == '?main=news')
  {    
  		var newsid = '1';
  		var id = newsid+1;
	    var butid = $("#butid").val();
		$("#col").html('Загрузка...');
            $.post("/engine/classes/obr.php",{newsid: newsid},
            function(html){
            	$("#col").html(html);             
              });             
   }         	
 if (window.location.search == '?admin=index')
  {    
  		var findid = '1';
		$("#findacc").html('Загрузка...');
            $.post("/engine/classes/obr.php",{findid: findid},
            function(html){
            	$("#findacc").html(html);             
              });             
            $("#find").click(function(){
            	var findid = '1';
            	var findnick = $("#findnick").val();
            	var find = $("#find").val();
                $.post("/engine/classes/obr.php", {findid: findid, findnick: findnick, find: find}, 
                function(html){
            	   $("#findacc").html(html);             
                 }); 
        });

   }         					
});