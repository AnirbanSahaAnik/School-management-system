function validation(){
  var name = document.getElementById("name").value;
  var email = document.getElementById("email").value;
  var error_messege = document.getElementById("error_messege");
  var text;

  if(name == "" || emaill == ""){
    text = "Please fill all the field";
    error_messege.innerHTML = text;
    return false;
  }
    if (name.length<2) {
      text = "Length of name is too short";
      error_messege.innerHTML = text;
      return false;
    }
    text = "Information is Sucessfully Updated";
    error_messege.innerHTML = text;
    return true;
}
