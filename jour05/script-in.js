$(document).ready(()=>{
   //Get form element
   var form=document.getElementById("formId");
   function submitForm(event){

      //Preventing page refresh
      event.preventDefault();
   }

   //Calling a function during form submission.
   form.addEventListener('btn', submitForm);
});