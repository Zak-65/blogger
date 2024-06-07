 let errorMessage = document.getElementById('errorMessage')
 const nom = document.getElementById('nom')
 const email = document.getElementById('email')
 const password = document.getElementById('password')
 const sexe = document.getElementById('sexe')
 function verifierF(e){
    if(nom.value =='' || email.value == '' || password.value == '' ||  sexe.value == ''){
        e.preventDefault();
        errorMessage.classList.remove("hidden")
    }else{
        
    }
 }