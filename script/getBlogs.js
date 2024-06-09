fetch("./api/getBlog.api.php").then((response)=>{

     return response.json()

}).then((data)=>{
blogs = data['blogs']
id = data['idSession']
blogs.forEach((element)=>{
    if(element['idU'] == id){
        document.getElementById("conatainerBlogs").innerHTML+=
        `<div id='${element['idBlog']}' class="bg-white border border-gray-300 rounded-lg p-4 m-3 max-w-xl w-full">
        <input type="hidden" value='${element['idBlog']}' />
        <input type="hidden" value="${element['idU']}" />
        <div class="flex items-center justify-between">
            <div class="flex items-center">
                <img src="${element['photoP']}" alt="Subreddit Icon" class="w-10 h-10 rounded-full" />
                <span class="ml-2 text-black hover:underline font-bold text-lg">${element['nomU']}</span>
                <span class="ml-2 text-gray-600 text-sm">${element['dateB']}</span>
            </div>
            <div class="flex items-center space-x-4">
                <a onclick="deleteBlog(event)" class='text-gray-600 hover:text-black'>
                    <i class='fa-regular fa-trash-can text-xl'></i>
                </a>
                <a onclick="editBlog(event)" class='text-gray-600 hover:text-black'>
                    <i class='fa-solid fa-pen text-xl'></i>
                </a>
                <button class="text-blue-500 font-semibold">Join</button>
            </div>
        </div>
        <div class="mt-4">
            <h2 class="text-lg font-bold text-gray-800">${element['titre']}</h2>
        </div>
        <div class="mt-4">
            <h2 class="text-sm text-gray-800">${element['contenu']}</h2>
        </div>
        <div class="mt-4">
            <img src='${element['photoBlog']}' alt="GPU Image" class="w-full rounded-lg" />
        </div>
        <div class="flex items-center justify-between mt-4 text-gray-500 text-sm">
            <div class="flex items-center">
                <button class="flex items-center mr-4">
                    <i class="fa-regular fa-heart text-xl text-red-600 mr-1"></i> 8
                </button>
                <button class="flex items-center mr-4">
                    <i class="fa-regular fa-comment text-xl mr-1"></i> 9
                </button>
            </div>
        </div>
    </div>
    `    
    }else{
        document.getElementById("conatainerBlogs").innerHTML+=
            `<div class="bg-white border border-gray-300 rounded-lg p-4 m-3 max-w-xl w-full relative">
         <input type="hidden" value='${element['idBlog']}'  />
             <input type="hidden" value="${element['idU']}" />
         <div class="flex items-center justify-between ">
         <div class="flex items-center">
             <img src="${element['photoP']}" alt="Subreddit Icon" class="w-10 h-10 rounded-full"/>
             <span class="ml-2 text-black hover:underline font-bold text-lg">${element['nomU']}</span>
             <span class="ml-2 text-gray-600 text-sm">${element['dateB']}</span>
         </div>
         <button class="text-blue-500 font-semibold">Join</button>
         </div>
         <div class="mt-4">
         <h2 class="text-lg font-bold text-gray-800">${element['titre']}</h2>
         </div>
         <div class="mt-4">
         <h2 class="text-sm  text-gray-800">${element['contenu']}</h2>
         </div>
         <div class="mt-4">
         <img src='${element['photoBlog']}' alt="GPU Image" class="w-full rounded-lg"/>
         </div>
         <div class="flex items-center justify-between mt-4 text-gray-500 text-sm">
         <div class="flex items-center">
             <button class="flex items-center mr-4 ">
             <i class="  fa-regular fa-heart text-xl text-red-600  mr-1"></i>
             8
             </button>
             <button class="flex items-center mr-4  ">
             <i class="fa-regular text-xl fa-comment mr-1"></i>
             9
             </button>
         </div>
         </div>
     </div>`
    }
})
}).catch((error)=>{
    console.log(error);
})