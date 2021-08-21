function validate(email,password){
    if (email == "")
    {
        alert("emailmust be filled out");
        return false
    }

    if (email == "xyz@gmail.com")
    {
         var a = (password  == "xyz123") ? "login successfully":"incorrect password";
        alert(a);
    }
    else
    {
        alert("invalid email and password");
    }
}