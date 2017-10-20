function OnLoad()
{
//Создание объекта XMLHttpRequest
httpRequest = new XMLHttpRequest();
//Метод для инициализации
httpRequest.open("GET", "test.txt", true);
//Работа с асинхронным запросом, необходимо обработать событие readystatechange
httpRequest.onreadystatechange = OnRequestStateChange;
//После инициализации запроса, отправляем запрос
httpRequest.send(null);

}

function OnRequestStateChange()
{
//свойство readyState для хранения состояния запроса
if (httpRequest.readyState != 4)
  return;
//проверка кода статуса результата запроса
if (httpRequest.status != 200)
  return;
//вывод в блок содержимого обьекта
document.getElementById("textPlace").innerHTML = httpRequest.responseText;

/*document.write('<table border="0">'); 
for (i=0;i<httpRequest.length;i++)
   { 
     document.write('<tr><td>' + httpRequest[i].getElementsByTagName('title') + '</td></tr>');
   }
document.write('</table>');*/
}