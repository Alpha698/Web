function OnLoad()
{
var per = document.getElementById("p1");
var vto = document.getElementById("p2");
var tre = document.getElementById("p3");
var che = document.getElementById("p4");
var pia = document.getElementById("p5");

document.write("1. " + per.innerText + "</br>");
document.write("2. " + vto.innerText + "</br>");
document.write("3. " + tre.innerText + "</br>");
document.write("4. " + che.innerText + "</br>");
document.write("5. " + pia.innerText + "</br>");

//var elem = document.getElementById("p1");
//var elem = document.getElementById("1");
//document.all.p1[0] = 'red';
//document.all.p1[1].style.background = 'green';
//document.write(elem);
}


















//function OnLoad()
//{
//Создание объекта XMLHttpRequest
//httpRequest = new XMLHttpRequest();
//Метод для инициализации
//httpRequest.open("GET", "test.txt", true);
//Работа с асинхронным запросом, необходимо обработать событие readystatechange
//httpRequest.onreadystatechange = OnRequestStateChange;
//После инициализации запроса, отправляем запрос
//httpRequest.send(null);
//}

//function OnRequestStateChange()
//{
//свойство readyState для хранения состояния запроса
//if (httpRequest.readyState != 4)
//  return;
//проверка кода статуса результата запроса
//if (httpRequest.status != 200)
//  return;
//вывод в блок содержимого обьекта
//document.getElementById("textPlace").innerHTML = httpRequest.responseText;

/*document.write('<table border="0">'); 
for (i=0;i<httpRequest.length;i++)
   { 
     document.write('<tr><td>' + httpRequest[i].getElementsByTagName('title') + '</td></tr>');
   }
document.write('</table>');*/
//}