<?php require './views/partials/head.php' ?>
<nav class="relative rounded w-[99%] m-auto flex items-center justify-between sm:h-10 md:justify-center  bg-cyan-700 mb-2  py-6 px-4 ">
    <div class="flex items-center flex-1 md:absolute md:inset-y-0 md:left-0">
        <div class="flex items-center justify-between w-full md:w-auto ml-2">
            <a href="" aria-label="Home">
                <img src="https://www.svgrepo.com/show/491978/gas-costs.svg" height="40" width="40" />
            </a>
            <div class="-mr-2 flex items-center md:hidden">
                <button type="button" id="main-menu" aria-label="Main menu" aria-haspopup="true" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg stroke="currentColor" fill="none" viewBox="0 0 24 24" class="h-6 w-6"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
                </button>
            </div>
        </div>
    </div>
    <div class="hidden md:flex md:space-x-10">
        <a href="#features"
            class="font-medium underline text-white hover:text-gray-900 transition duration-150 ease-in-out">Profile</a>
        <a href="/blog"
            class="font-medium text-white hover:text-gray-900 transition duration-150 ease-in-out">Blog</a>
    </div>
    <div class="hidden md:absolute md:flex md:items-center md:justify-end md:inset-y-0 md:right-0">
        <span class="inline-flex">
            <a href="/signOut" class="inline-flex items-center px-4 py-2 border border-transparent text-base leading-6 font-medium text-red-600 hover:text-red-500 focus:outline-none transition duration-150 ease-in-out">
              Sign Out
            </a>
        </span>
    </div>
</nav>
<div>
    <!-- part profile -->
<section class="dark:bg-gray-900 flex overflow-hidden h-[90vh] ">
    <div class="mx-auto h-[86vh] shadow-2xl shadow-black w-[35%] ml-3 ">
        <!-- User Cover IMAGE -->
        <div class="relative">
        <a href=""><i class="fa-solid fa-pen absolute text-white text-xl m-3"></i></a>
            <img src="https://images.unsplash.com/photo-1560697529-7236591c0066?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NzEyNjZ8MHwxfHNlYXJjaHwxMHx8Y292ZXJ8ZW58MHwwfHx8MTcxMDQ4MTEwNnww&ixlib=rb-4.0.3&q=80&w=1080" alt="User Cover"
                    class="w-full xl:h-[10rem] lg:h-[22rem] md:h-[16rem] sm:h-[13rem] xs:h-[9.5rem]" />
        </div>
        <!-- User Profile Image -->
        <div class="w-full mx-auto flex justify-center">
            <img src="https://images.unsplash.com/photo-1463453091185-61582044d556?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NzEyNjZ8MHwxfHNlYXJjaHwxMnx8cGVvcGxlfGVufDB8MHx8fDE3MTA0ODExOTN8MA&ixlib=rb-4.0.3&q=80&w=1080" alt="User Profile"
                    class="rounded-full object-cover xl:w-[10rem] xl:h-[10rem] lg:w-[16rem] lg:h-[16rem] md:w-[12rem] md:h-[12rem] sm:w-[10rem] sm:h-[10rem] xs:w-[8rem] xs:h-[8rem] outline outline-2 outline-offset-2 outline-yellow-500 shadow-xl relative xl:bottom-[7rem] lg:bottom-[8rem] md:bottom-[6rem] sm:bottom-[5rem] xs:bottom-[4.3rem]" />
        </div>

        <div
            class="xl:w-[80%] lg:w-[90%] md:w-[94%] sm:w-[96%] xs:w-[92%] mx-auto flex flex-col gap-3 justify-center items-center relative xl:-top-[6rem] lg:-top-[6rem] md:-top-[4rem] sm:-top-[3rem] xs:-top-[2.2rem]">
            <!-- FullName -->
            <h1 class="text-center text-gray-800 dark:text-white text-4xl font-serif"><?= $_SESSION["nom"] ?></h1>
            <p class="text-md text-gray-400"><?= $_SESSION["email"] ?></p>
            <!-- About -->
            <p class="w-full text-gray-700 dark:text-gray-400 text-md text-pretty sm:text-center xs:text-justify">👋 Welcome to my profile!
            Feel free to add more information or customize it further!
            </p>

            <!-- info flowers -->
            <div class="w-56 mt-3 mb-3">
                <ul class="flex justify-between text-md">
                    <li><i class="fa-solid fa-user-large mr-2 text-blue-500 "></i>10</li>
                    <li><i class="fa-solid fa-heart mr-2 text-red-500"></i>20</li>
                    <li><i class="fa-solid fa-users mr-2 text-gray-600"></i>30</li>
                    <li><i class="fa-regular fa-newspaper mr-2 text-gray-600"></i>30</li>
                </ul>
            </div>
                <div class="col-span-4 sm:col-span-2 md:col-span-2 lg:col-span-1 xl:col-span-1">
                    <!-- social  -->
                <ul class="mb-4 -ml-2 flex md:order-1 md:mb-0">
                    <li>
                        <a class="text-muted inline-flex items-center rounded-lg p-2.5 text-sm hover:bg-gray-100 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-700"
                            aria-label="Twitter" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="h-5 w-5">
                                <path
                                    d="M22 4.01c-1 .49 -1.98 .689 -3 .99c-1.121 -1.265 -2.783 -1.335 -4.38 -.737s-2.643 2.06 -2.62 3.737v1c-3.245 .083 -6.135 -1.395 -8 -4c0 0 -4.182 7.433 4 11c-1.872 1.247 -3.739 2.088 -6 2c3.308 1.803 6.913 2.423 10.034 1.517c3.58 -1.04 6.522 -3.723 7.651 -7.742a13.84 13.84 0 0 0 .497 -3.753c0 -.249 1.51 -2.772 1.818 -4.013z">
                                </path>
                            </svg>
                        </a>
                    </li>

                    <li>
                        <a class="text-muted inline-flex items-center rounded-lg p-2.5 text-sm hover:bg-gray-100 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-700"
                            aria-label="Instagram" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="h-5 w-5">
                                <path d="M4 4m0 4a4 4 0 0 1 4 -4h8a4 4 0 0 1 4 4v8a4 4 0 0 1 -4 4h-8a4 4 0 0 1 -4 -4z"></path>
                                <path d="M12 12m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0"></path>
                                <path d="M16.5 7.5l0 .01"></path>
                            </svg>
                        </a>
                    </li>

                    <li>
                        <a class="text-muted inline-flex items-center rounded-lg p-2.5 text-sm hover:bg-gray-100 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-700"
                            aria-label="Facebook" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="h-5 w-5">
                                <path d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3"></path>
                            </svg>
                        </a>
                    </li>

                    <li>
                        <a class="text-muted inline-flex items-center rounded-lg p-2.5 text-sm hover:bg-gray-100 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-700"
                            aria-label="RSS" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="h-5 w-5">
                                <path d="M5 19m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path>
                                <path d="M4 4a16 16 0 0 1 16 16"></path>
                                <path d="M4 11a9 9 0 0 1 9 9"></path>
                            </svg>
                        </a>
                    </li>

                    <li>
                        <a class="text-muted inline-flex items-center rounded-lg p-2.5 text-sm hover:bg-gray-100 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-700"
                            aria-label="Github" href="https://github.com/onwidget/tailnext"><svg xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" class="h-5 w-5">
                                <path
                                    d="M9 19c-4.3 1.4 -4.3 -2.5 -6 -3m12 5v-3.5c0 -1 .1 -1.4 -.5 -2c2.8 -.3 5.5 -1.4 5.5 -6a4.6 4.6 0 0 0 -1.3 -3.2a4.2 4.2 0 0 0 -.1 -3.2s-1.1 -.3 -3.5 1.3a12.3 12.3 0 0 0 -6.2 0c-2.4 -1.6 -3.5 -1.3 -3.5 -1.3a4.2 4.2 0 0 0 -.1 3.2a4.6 4.6 0 0 0 -1.3 3.2c0 4.6 2.7 5.7 5.5 6c-.6 .6 -.6 1.2 -.5 2v3.5">
                                </path>
                            </svg>
                        </a>
                    </li>

                </ul>

            </div>
        </div>
    </div>
    <!-- part blog -->

    <div class="w-[60%] mr-5 h-[86vh] overflow-auto flex flex-col justify-end items-center">
        <!-- btn  new blog -->
        <button type="button" id='newBlog' class="h-12  m-3 max-w-md flex justify-center items-center bg-cyan-600 hover:bg-cyan-700 focus:ring-blue-500 focus:ring-offset-blue-200 text-white w-full transition ease-in duration-200 text-center text-base font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2 rounded-lg">
                <i class="fa-solid fa-plus mr-2"></i>
            New blog
        </button>
        <div class="overflow-auto flex flex-col  w-[100%] h-[85%] items-center gap-8">
            <!-- part new Blog -->
                <form method="POST" enctype="multipart/form-data" action="../controllers/newBlog.php" onsubmit="veriferForm(event)"  id="new-blog-modal" class="fixed  inset-0 z-50 hidden bg-gray-800 bg-opacity-75 flex justify-center items-center">
                    <div class="bg-white w-1/2  p-6 rounded-lg shadow-lg  animate-modal ">
                        <h2 class="text-2xl mb-4">Create New Blog</h2>
                        <!-- image Blog -->
                            <input name="photoB" type="file" accept="image/*" id="pictureNewBlog" class="rounded-2xl bg-gray-300 dark:bg-gray-700 p-4 sm:pt-28 lg:pt-30  w-[100%]">
                            <div class="mb-4">
                                <label for="title" class="block text-gray-700">Title</label>
                                <input name="titleB" type="text" id="titleNewBlog" name="title" class="w-full px-3 py-2 border rounded" >
                            </div>
                            <div class="mb-4">
                                <label name="contentB" for="content" class="block text-gray-700">Content</label>
                                <textarea id="contentNewBlog" name="content" class="w-full px-3 py-2 border rounded resize-none" rows="5"></textarea>
                            </div>
                            <div class="flex justify-end">
                                <button type="button" id="cancel-button" class="px-4 py-2 mr-2 bg-gray-300 rounded">Cancel</button>
                                <button type="submit"  id="createBlog" class="px-4 py-2 bg-blue-600 text-white rounded cursor-pointer">Create</button>
                            </div>
                    </div>
               </form>
            <!-- post 1 -->
            <?php foreach($blogs as $blog) :?>
                <article class="relative isolate flex flex-col justify-end overflow-hidden rounded-2xl bg-gray-900 dark:bg-gray-700 px-8 py-8 pb-8 pt-80 sm:pt-48 lg:pt-30 w-[90%] article">
                    <input type="hidden" value=<?= $blog['idBlog'] ?>  />
                    <img src= <?= htmlspecialchars($blog['photoBlog']) ?>   alt="" class="absolute inset-0 -z-10 h-full w-full object-cover">
                    <div class="absolute inset-0 -z-10 bg-gradient-to-t from-gray-900 via-gray-900/40"></div>
                    <div class="absolute inset-0 -z-10 rounded-2xl ring-1 ring-inset ring-gray-900/10"></div>
                    <!-- part date -->
                    <div class="flex mt-6 justify-between w-[44%] text-white text-sm " >
                     <p>Cree par :<?= $_SESSION['nom'] ?></p>
                     <p>Le : <?= $blog['dateB'] ?> </p>
                    </div>
                    <h3 class=" text-lg font-semibold leading-6 text-white ">
                        <a href="#"><span class="absolute inset-0 "></span></a>
                        <?= $blog['titre'] ?>
                    </h3>
                    <a href="jfjf" class="icon heart-icon h-16 w-16 text-red-600 fill-current">
                        <i class="fa-regular fa-heart text-3xl"></i>
                    </a>
                    <a href="jfjf" class="icon comment-icon h-16 w-16 text-gray-600 fill-current">
                        <i class="fa-solid fa-comments text-3xl"></i>
                    </a>
                    <a href="#" class="go-to-post-btn">
                        View
                    </a>
                </article>
                <?php endforeach ?>
        </div>
    </div>
</section>
</div>
<script src="../../script/sendBlog.api.js"></script>
<script src="../../script/scriptBlog.js"></script>
<?php require './views/partials/bottom.php' ?>