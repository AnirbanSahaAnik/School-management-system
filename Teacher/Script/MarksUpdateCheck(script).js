function Marks(){
    //var form = document.getElementById("RegistrationForm").value;
    var marks = document.getElementById("marks").value;
    var error_messege = document.getElementById("error_messege");
    var text;
  
    if(marks == ""){
      text = "**Please write something**";
      error_messege.innerHTML = text;
      return false;
    }else {

        if(!(marks.length >= 2) || !(marks.length <= 3) || !(marks <= 100))
        {
            text = "**Marks length not valid**";
            error_messege.innerHTML = text;
            return false;

        }else{
                
            for(i=0; i<marks.length; i++)
            {
              ch = marks.charAt(i);
              if((ch >= 'a' && ch <= 'z') && (ch >= 'A' && ch <= 'Z') && (ch == ' '))
              {
    
                text = "**Marks should be integer only**";
                error_messege.innerHTML = text;
                return false;
    
              }else{
                      
                     alert("Successfully Uploaded!!")
                     return true;
    
                   }
            }

             }
        
      
       }

  }