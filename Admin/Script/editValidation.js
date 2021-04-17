function validation(){
  var name = document.getElementById("name").value;
  var email = document.getElementById("email").value;
  var mobile = document.getElementById("mobile").value;
  var gender = document.getElementById("gender").value;
  var dob = document.getElementById("dob").value;
  var error_messege = document.getElementById("error_messege");
  var text;


  if(name == "" || email == "" || mobile == "" || gender == "" || dob == "" ){
    text = "Please fill all the field";
    error_messege.innerHTML = text;
    return false;
  }else {
        if (email.length < 6){
          text = "Please Enter the Valid Email";
          error_messege.innerHTML = text;
          return false;
        }
        else {
          if (mobile.length != 11){
            text = "Mobile Number must be 11 digit";
            error_messege.innerHTML = text;
            return false;
          }

          if (name.length<3){
            text = "Length of name is too short";
            error_messege.innerHTML = text;
            return false;
          }
          alert("User Information Updated Sucessfully!")
          return true;
        }
      }
}
