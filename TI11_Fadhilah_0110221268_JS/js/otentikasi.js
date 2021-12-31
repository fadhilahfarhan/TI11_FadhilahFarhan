function Login() {
    let User = document.getElementById("user").value;
    let Pass = document.getElementById("pass").value;
    if (User == "Fadhilah123" && Pass == "fadh21268") {
        alert("Login Was Succesful");
        document.write('Login Was Succes')
    }
    else {
        alert("Username or Password is wrong")
    }
}