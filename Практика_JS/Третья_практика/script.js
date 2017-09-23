function Calc(){
var a=parseFloat(document.fm.a.value);
var b=parseFloat(document.fm.b.value);
var c=parseFloat(document.fm.c.value);

if (a>0 && b>0 && c>0){
document.fm.rez.value=b*b+a;
} else { 
document.fm.rez.value=1+c;
}

}

function doClear(){
if(confirm('Обнулить поля формы?'))
document.fm.reset()
}

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

function Calcto(){
var myarray = new Array(1,6,3,8,3.5,4,2,1.3);
var pro = 1;
myarray.forEach(function(e,n){ if(!(n % 2)) pro *= e;});   //forEach готовая функция для перебора массива
document.dm.rez2.value=pro;
}

function doClear2(){
if(confirm('Обнулить поля формы?'))
document.dm.reset()
}

