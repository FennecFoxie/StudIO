function get_ahedule(url){
  var request; 
  if(window.XMLHttpRequest){ 
      request = new XMLHttpRequest(); 
  } else if(window.ActiveXObject){ 
      request = new ActiveXObject("Microsoft.XMLHTTP");  
  } else { 
      return; 
  } 
  
  request.onreadystatechange = function(){
        switch (request.readyState) {
          case 1: print_console("<br/><em>1: Подготовка к отправке...</em>"); break
          case 2: print_console("<br/><em>2: Отправлен...</em>"); break
          case 3: print_console("<br/><em>3: Идет обмен..</em>"); break
          case 4:{
           if(request.status==200){     
                        print_console("<br/><em>4: Обмен завершен.</em>"); 
                        alert("sdfjs;ldkf");
                     }else if(request.status==404){
                        alert("Ошибка: запрашиваемый скрипт не найден!");
                     }
                      else alert("Ошибка: сервер вернул статус: "+ request.status);
           
            break
            }
        }       
    } 
    request.open ('GET', url, true); 
    request.send (''); 
  } 


// <a href="#" onclick="startAjax('handler_script.php');">Запустить php скрипт</a>  
// <div id="console" style="border: 1px solid gray; width:250px; height: 110px; padding: 10px; background:lightgray;">
// Консоль выполнения запроса:
// </div>
// <br/>
// <div id="printResult">
// После нажатия на ссылку, тут будет сообщение с сервера!
// </div>