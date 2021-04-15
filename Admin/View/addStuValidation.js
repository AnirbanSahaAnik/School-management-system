function validation(){
  var id = document.getElementById("id").value;
  var name = document.getElementById("name").value;
  var email = document.getElementById("email").value;
  var mobile = document.getElementById("mobile").value;
  var password = document.getElementById("password").value;
  var repass = document.getElementById("repass").value;
  var gender = document.getElementById("gender").value;
  var dob = document.getElementById("dob").value;
  var p_address = document.getElementById("p_address").value;
  var class = document.getElementById("class").value;
  var section = document.getElementById("section").value;
  var roll = document.getElementById("roll").value;
  var error_messege = document.getElementById("error_messege");
  var text;


  if(id == "" || name == "" || email == "" || password == "" || repass == ""
  || mobile == "" || gender == "" || dob == "" || class == "" || section == "" || roll == "" || p_address == "" ){
    text = "Please fill all the field";
    error_messege.innerHTML = text;
    return false;
  }else {
    if (password.length < 8){
      text = "Password should be atleast 8 characters long!";
      error_messege.innerHTML = text;
      return false;
    }else {
      if (password != repass){
        text = "Password and Confirm password should match!";
        error_messege.innerHTML = text;
        return false;
      }else {
        if (email.length < 6){
          text = "Please Enter the Valid Email";
          error_messege.innerHTML = text;
          return false;
        }
        else {
          if (id.length != 4){
            text = "ID must be 4 digit";
            error_messege.innerHTML = text;
            return false;
          }
          if (mobile.length != 11){
            text = "Mobile Number must be 11 digit";
            error_messege.innerHTML = text;
            return false;
          }

          if (name.length<2){
            text = "Length of name is too short";
            error_messege.innerHTML = text;
            return false;
          }
          alert("Form Submited Sucessfully!")
          return true;
        }
      }
    }
  }
}
