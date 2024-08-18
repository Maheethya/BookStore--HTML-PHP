function validate() {
      
    if( document.myForm.firstname.value == "" ) {
       alert( "Please provide your First Name!" );
       return false;
    }
    if( document.myForm.number.value == "" ) {
       alert( "Please provide your number!" );
      return false;
    }
       if( document.myForm.email.value == "" ) {
         alert( "Please provide your Email!" );
      return false;
   }
   if( document.myForm.msg.value == "") {
     alert( "Please provide your message!" );
  return false;
    }
    return( true );
 }