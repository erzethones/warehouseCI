function thousandSeparator(object){
  a     = object.value;
  b     = a.replace(/[^\d]/g,"");
  c     = "";
  long  = b.length;
  j     = 0;
  for(i=long;i>0;i--){
    j = j+1;
    if(((j%3)==1)&&(j!=1)){
      c = b.substr(i-1,1)+"."+c;
    }else{
      c = b.substr(i-1,1)+c;
    }
  }
  object.value = c;
}

function addClass(el, className) {
  if (el.classList)
    el.classList.add(className)
  else if (!hasClass(el, className)) el.className += " " + className
}

function removeClass(el, className) {
  if (el.classList)
    el.classList.remove(className)
  else if (hasClass(el, className)) {
    var reg = new RegExp('(\\s|^)' + className + '(\\s|$)')
    el.className=el.className.replace(reg, ' ')
  }
}

function lolol(){
  return alert("lol");
}