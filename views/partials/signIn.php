<section id="singIn" class="py-4 mb-2 my-auto dark:bg-black/50 fixed top-0 right-0 left-0 z-50">
    <div class="lg:w-[70%] md:w-[80%] xs:w-[92%] mx-auto flex">
        <div class="lg:w-[80%] md:w-[70%] sm:w-[80%] xs:w-full mx-auto shadow-2xl rounded-xl self-center dark:bg-gray-800 p-4 mb-2 relative">
          <a href="/" type="button"
                  class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center popup-close"><svg
                      aria-hidden="true" class="w-5 h-5" fill="#c6c7c7" viewBox="0 0 20 20"
                      xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd"
                          d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                          cliprule="evenodd"></path>
                  </svg>
                  <span class="sr-only">Close popup</span>
        </a>
            <div >
                <h1 class="lg:text-2xl md:text-xl sm:text-lg xs:text-lg font-serif font-extrabold mb-2 dark:text-white">
                    Profile
                </h1>
                <h2 class="text-grey text-sm mb-2 dark:text-gray-400">Create Profile</h2>
                <form method="POST" action="">
                    <!-- Cover Image -->
                    <div class="w-full rounded-sm mb-2 bg-[url('https://images.unsplash.com/photo-1449844908441-8829872d2607?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NzEyNjZ8MHwxfHNlYXJjaHw2fHxob21lfGVufDB8MHx8fDE3MTA0MDE1NDZ8MA&ixlib=rb-4.0.3&q=80&w=1080')] bg-cover bg-center bg-no-repeat items-center">
                        <!-- Profile Image -->
                        <div class="mx-auto flex justify-center w-[120px] h-[120px] bg-blue-300/20 rounded-full bg-[url('https://images.unsplash.com/photo-1438761681033-6461ffad8d80?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NzEyNjZ8MHwxfHNlYXJjaHw4fHxwcm9maWxlfGVufDB8MHx8fDE3MTEwMDM0MjN8MA&ixlib=rb-4.0.3&q=80&w=1080')] bg-cover bg-center bg-no-repeat mb-2">
                            <div class="bg-white/90 rounded-full w-5 h-5 text-center ml-24 mt-4">
                                <input type="file" name="photoP" id="upload_profile" hidden >
                                <label for="upload_profile">
                                    <svg data-slot="icon" class="w-5 h-5 text-blue-700" fill="none" stroke-width="1.5" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6.827 6.175A2.31 2.31 0 0 1 5.186 7.23c-.38.054-.757.112-1.134.175C2.999 7.58 2.25 8.507 2.25 9.574V18a2.25 2.25 0 0 0 2.25 2.25h15A2.25 2.25 0 0 0 21.75 18V9.574c0-1.067-.75-1.994-1.802-2.169a47.865 47.865 0 0 0-1.134-.175 2.31 2.31 0 0 1-1.64-1.055l-.822-1.316a2.192 2.192 0 0 0-1.736-1.039 48.774 48.774 0 0 0-5.232 0 2.192 2.192 0 0 0-1.736 1.039l-.821 1.316Z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 12.75a4.5 4.5 0 1 1-9 0 4.5 4.5 0 0 1 9 0ZM18.75 10.5h.008v.008h-.008V10.5Z"></path>
                                    </svg>
                                </label>
                            </div>
                        </div>
                        <div class="flex justify-end mb-2">
                            <input type="file" name="photoC" id="upload_cover" hidden>
                            <div class="bg-white flex items-center gap-1 rounded-tl-md px-2 text-center font-semibold">
                                <label for="upload_cover" class="inline-flex items-center gap-1 cursor-pointer">Cover
                                    <svg data-slot="icon" class="w-5 h-5 text-blue-700" fill="none" stroke-width="1.5" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6.827 6.175A2.31 2.31 0 0 1 5.186 7.23c-.38.054-.757.112-1.134.175C2.999 7.58 2.25 8.507 2.25 9.574V18a2.25 2.25 0 0 0 2.25 2.25h15A2.25 2.25 0 0 0 21.75 18V9.574c0-1.067-.75-1.994-1.802-2.169a47.865 47.865 0 0 0-1.134-.175 2.31 2.31 0 0 1-1.64-1.055l-.822-1.316a2.192 2.192 0 0 0-1.736-1.039 48.774 48.774 0 0 0-5.232 0 2.192 2.192 0 0 0-1.736 1.039l-.821 1.316Z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 12.75a4.5 4.5 0 1 1-9 0 4.5 4.5 0 0 1 9 0ZM18.75 10.5h.008v.008h-.008V10.5Z"></path>
                                    </svg>
                                </label>
                            </div>
                        </div>
                    </div>
                    <h2 class="text-center mt-1 font-semibold dark:text-gray-300 mb-2">Upload Profile and Cover Image</h2>
                    <div class="flex lg:flex-row md:flex-col sm:flex-col xs:flex-col gap-2 justify-center w-full">
                        <div class="w-full mb-2">
                            <label for="" class="mb-2 dark:text-gray-300">Your Name</label>
                            <input name="name" type="text" class="mt-2 p-3 w-full border-2 rounded-lg dark:text-gray-200 dark:border-gray-600 dark:bg-gray-800" placeholder="Your Name">
                        </div>
                        <div class="w-full mb-2">
                            <label for="" class="dark:text-gray-300">Email</label>
                            <input name="email" type="email" class="mt-2 p-3 w-full border-2 rounded-lg dark:text-gray-200 dark:border-gray-600 dark:bg-gray-800" placeholder="email">
                        </div>
                    </div>
                    <div class="flex lg:flex-row md:flex-col sm:flex-col xs:flex-col gap-2 justify-center w-full mb-2">
                      <div class="w-full">
                            <h3 class="dark:text-gray-300 mb-2">Password</h3>
                            <input name="password" type="password" class="text-grey p-3 w-full border-2 rounded-lg dark:text-gray-200 dark:border-gray-600 dark:bg-gray-800">
                        </div>
                        <div class="w-full">
                            <h3 class="dark:text-gray-300 mb-2">Sex</h3>
                            <select name="sex" class="w-full text-grey border-2 rounded-lg p-3 pl-2 pr-2 dark:text-gray-200 dark:border-gray-600 dark:bg-gray-800">
                                <option disabled value="">Select Sex</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>
                        
                    </div>
                    <?php if(!empty($errorMessage)){
                      echo "<p class='text-red-500'> $errorMessage </p>";
                    }?>
                    <div class="w-full rounded-lg bg-blue-500 mt-2 text-white text-lg font-semibold mb-2">
                        <button type="submit" class="w-full p-3">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
