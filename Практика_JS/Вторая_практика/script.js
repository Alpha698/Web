//19.	Определить произведение элементов массива B(n), имеющих нечетные индексы (n=9).

//html <input type="number" id="ff1" value="555">
//input = document.getElementById('ff1'); //находим инпут с id "ff1"
//var ff = []; //создаем массив ff
//ff.push(input.value); //добавляем значение инпута в массив
//document.body.innerHTML +=ff[0]; //выводим первый элемент массива в конец документа


var myarray = new Array(1,6,3,8,3.5,4,2,1.3);
var pro = 1;
myarray.forEach(function(e,n){ if(!(n % 2)) pro *= e;});   //forEach готовая функция для перебора массива
alert("Произведение = "+pro);

