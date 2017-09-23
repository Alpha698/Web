
var a=prompt("Введите число A", "");
var b=prompt("Введите число B", "");
var c=prompt("Введите число C", "");

a=parseFloat(a);
b=parseFloat(b);
c=parseFloat(c);

if (a>0 && b>0 && c>0){
  b=b*b+a;
} else {
  b=1+c;
}

document.write("Ваш резeльтат, B=",b);
document.write("<br>");

//2 0 3   4 2 
//B=B^2+A,		если A>0; B>0; C>0
//B=1+C			в противном случае