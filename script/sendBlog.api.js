let content = document.getElementById("contentNewBlog");
let title = document.getElementById("titleNewBlog");
let picture = document.getElementById("pictureNewBlog");
let bntNewBlog = document.getElementById("createBlog");
 

function veriferForm(e){
    if(content.value == '' || title.value  == ''){
        e.preventDefault()
        alert("Remplire tous les champs")
    }else{
        
    }
}

