function deleteBlog(event){
    let t = confirm('vous etes sur ???')
    if(t){
        parrentBtnSupprimer   = event.target.parentElement.parentElement.parentElement.parentElement
        blogId = (parrentBtnSupprimer.querySelectorAll('input[type=hidden]')[0].value)
        userId = (parrentBtnSupprimer.querySelectorAll('input[type=hidden]')[1].value)
        let data = {
            blogId : blogId ,
            userId : userId
        }
        data = JSON.stringify(data)

        let options = {
            method : 'POST',
            headers : {
                'content-type':'application/JSON'
            },
            body : data  
        }
        
        fetch("./api/supprimerBlog.api.php",options).then((response)=>{

            return response.text()

        }).then((data)=>{
        console.log(data)
        }).catch((error)=>{
            console.log(error);
        })
        document.getElementById(blogId).remove()
        function tt(){
            document.getElementById("messegeSupprimer").classList.add("hidden")
        }
        document.getElementById("messegeSupprimer").classList.remove("hidden")
        t = setTimeout(tt,3000)
        }else{
            console.log("suppression anuller")
        }
}