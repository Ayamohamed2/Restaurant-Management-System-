
var screen = document.getElementById("screen");

var values = {prev : null, new: null ,total:null };

   function getNumbers(num){
       screen.value = num;
       

       if(values.prev){
          values.new = num;
       } 
       else {
               values.prev = num;
            }
           }

 function getOperator(oper){
       operType = oper;
       }

   function calculate(){
       
       if(!values.new){
           return;
        }
       if(values.new && values.prev && operType){
           if(operType === '+'){
               screen.value=values.prev + values.new
                  values.prev=values.prev + values.new 
               
           }  
       }
   }
   