<?php require './views/partials/head.php' ?>
<nav class="relative rounded w-[99%] m-auto flex items-center justify-between sm:h-10 md:justify-center  bg-cyan-600 mb-2  py-6 px-4 ">
    <div class="flex items-center flex-1 md:absolute md:inset-y-0 md:left-0">
        <div class="flex items-center justify-between w-full md:w-auto ml-2">
            <a href="/dashboard" class="font-serif text-xl text-white">
            BlogSpace
            </a>
            <div class="-mr-2 flex items-center md:hidden">
                <button type="button" id="main-menu" aria-label="Main menu" aria-haspopup="true" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg stroke="currentColor" fill="none" viewBox="0 0 24 24" class="h-6 w-6"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
                </button>
            </div>
        </div>
    </div>
    <div class="hidden md:absolute  m-2 rounded md:flex md:items-center md:justify-end md:inset-y-0 md:right-0">
        <span class="inline-flex">
            <a href="/signOut" class="inline-flex items-center px-4 py-2 border border-transparent text-base leading-6 font-medium text-red-600 text-lg hover:text-black focus:outline-none transition duration-150 ease-in-out">
              <i class="fa-solid fa-right-from-bracket ml-3 "></i>
            </a>
        </span>
    </div>
</nav> 
<main class="flex h-[90vh] relative " >
    <aside class="w-[22%] border shadow shadow-xl h-full flex flex-col items-center divide-y divide-gray-400 bg-white p-2 ml-2 rounded ">
        <div class="flex  flex-col justify-center content-center m-4 w-64 gap-2 ">
            <a class="p-2 rounded rounded-lg hover:bg-gray-300"><i class="fa-solid fa-house mr-2"></i>Home</a>
            <a class="p-2 rounded rounded-lg hover:bg-gray-300" href="/dashboard"><i class="fa-solid fa-user mr-1"></i>My Profile</a>
            <a class="p-2 rounded rounded-lg hover:bg-gray-300"><i class="fa-solid fa-users mr-1"></i>My network</a>
            <a class="p-2 rounded rounded-lg hover:bg-gray-300" ><i class="fa-solid fa-magnifying-glass mr-2"></i>Search</a> 
        </div>
        <div class="flex  flex-col content-center m-4 w-64 gap-2 ">
        <a class="p-2 text-gray-500 font-serif "></i>Feel Free</a>
            <a id="addBlog" class="p-2 rounded rounded-lg hover:bg-gray-300"><i class="fa-solid fa-plus mr-2"></i>New blog</a>
        </div>
        <div class="flex  flex-col content-center m-4 w-64 gap-2 ">
        <a class="p-2 text-gray-500 font-serif "></i>Community</a>
           
        </div>
    </aside>
    <section id="conatainerBlogs" class="w-[50%] flex flex-col items-center overflow-auto hide-scrollbar ">
      
    </section>
    <section class="w-[25%] " >
        <div class="flex static justify-center">
            <div id="containerMessagerie" class="flex justify-evenly gap-10 absolute  bottom-0 border w-72 shadow shadow-3xl shadow-gray-600 bg-white h-11 text-center rounded-t-lg">
                <div class="flex justify-evenly gap-10  w-72   h-10 text-center ">
                    <!-- image en ligne -->
                <div class="relative">
                    <img class="w-9 h-9 mt-1  rounded-full " src= <?= $_SESSION['photoP'] ?> alt="">
                    <span class="bottom-0 left-6 absolute  w-3.5 h-3.5 bg-green-400 border-2 border-white dark:border-gray-800 rounded-full"></span>
                </div>
                <p class="mt-2 ml-3">Messagerie</p>
                <span class="mt-2 ml-5" onclick="" href=""><i  id="signSwipeUp" class="fa-solid fa-chevron-up"></i></span>
                </div>
                <input  type="hidden"  value="">
            </div>
        </div>
    </section>
    <!-- The Modal -->
    <div id="blogModal" class="hidden fixed z-50 inset-0 overflow-y-auto">
        <div class="flex items-center justify-center min-h-screen px-4">
            <div class="fixed inset-0 transition-opacity" aria-hidden="true">
                <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
            </div>

            <div class="bg-white rounded-lg overflow-hidden shadow-xl transform transition-all sm:max-w-lg sm:w-full">
                <div class="px-4 py-5 sm:p-6">
                    <div class="flex items-center justify-between">
                        <h3 class="text-lg leading-6 font-medium text-gray-900">New Blog</h3>
                        <button id="closeModalButton" class="text-gray-400 hover:text-gray-500">
                            <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                        </button>
                    </div>
                    <form id="newBlogForm">
                        <div class="mt-4">
                            <label for="blogTitle" class="block text-sm font-medium text-gray-700">Title</label>
                            <input type="text" id="blogTitle" name="title" class="mt-1 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>
                        <div class="mt-4">
                            <label for="blogContent" class="block text-sm font-medium text-gray-700">Content</label>
                            <textarea id="blogContent" name="content" rows="5" class="mt-1 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"></textarea>
                        </div>
                        <div class="mt-4">
                            <label for="blogImage" class="block text-sm font-medium text-gray-700">Image URL</label>
                            <input type="text" id="blogImage" name="image" class="mt-1 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>
                        <div class="mt-5 sm:mt-6">
                            <button type="submit" class="inline-flex justify-center w-full rounded-md border border-transparent shadow-sm px-4 py-2 bg-blue-500 text-base font-medium text-white hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 sm:text-sm">
                                Save
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div id="messegeSupprimer" class="absolute hidden bottom-0 right-2 bg-green-200 px-6 py-4 mx-2 my-4 rounded-md text-lg flex items-center mx-auto  max-w-lg ease-in duration-300 ">
            <svg viewBox="0 0 24 24" class="text-green-600 w-5 h-5 sm:w-5 sm:h-5 mr-3">
                <path fill="currentColor"
                    d="M12,0A12,12,0,1,0,24,12,12.014,12.014,0,0,0,12,0Zm6.927,8.2-6.845,9.289a1.011,1.011,0,0,1-1.43.188L5.764,13.769a1,1,0,1,1,1.25-1.562l4.076,3.261,6.227-8.451A1,1,0,1,1,18.927,8.2Z">
                </path>
            </svg>
            <span class="text-green-800">Your account has been saved.</span>
    </div>
</main>
<script src="../../script/addBlogAccuille.js"></script>
<script src="../../script/getBlogs.js"></script>
<script src="../../script/supprimerBlog.js"></script>
<script src="../script/swipeUpMessenger.js" ></script>
<?php require './views/partials/bottom.php' ?>