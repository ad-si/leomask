function checkform(form)
{
  // ** START **
  if(form.email.value == ""){
    alert( "Please enter your email address." );
    form.email.focus();
    return false
  }
  
  if(EMail(form.email.value)){
  return true ;
  }else{
  return false ;
  }
}


function EMail(s)
{
 var a = false;
 var res = false;
 if(typeof(RegExp) == 'function')
 {
  var b = new RegExp('abc');
  if(b.test('abc') == true){a = true;}
  }

 if(a == true)
 {
  reg = new RegExp('^([a-zA-Z0-9\\-\\.\\_]+)'+
                   '(\\@)([a-zA-Z0-9\\-\\.]+)'+
                   '(\\.)([a-zA-Z]{2,4})$');
  res = (reg.test(s));
 }
 else
 {
  res = (s.search('@') >= 1 &&
         s.lastIndexOf('.') > s.search('@') &&
         s.lastIndexOf('.') >= s.length-5)
 }
 return(res);
} 
