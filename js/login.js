function Login(form) {

    if (form.usuario.value == "carlos" && form.password.value == "123"){
        
        window.location.href = "inicio.php"; 
        // form.action = "#";
        return true;
    }

    else if(form.usuario.value == "leo" && form.password.value == "456"){
        window.location.href = "inicio.php"; 
        // form.action = "#";
        return true;
    } 
    
    else {
      alert("Incorrect Password or Username")
      
      document.getElementById("password").value = "";
      document.getElementById("usuario").value = "";
      return false;
    }

}