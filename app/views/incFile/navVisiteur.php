<nav x-data="{ isOpen: false }" class="bg-white shadow dark:bg-gray-800">
    <div class="container px-6 py-4 mx-auto">
        <div class="lg:flex lg:items-center">
            <div class="flex items-center justify-between">
                <a href="#">
                    <img class="w-9 h-9 " src="<?php echo URLROOT?>/img/icons8-wiki-48.png" alt="">
                </a>

                <!-- Mobile menu button -->
                <div class="flex lg:hidden">
                    <button x-cloak @click="isOpen = !isOpen" type="button" class="text-gray-500 dark:text-gray-200 hover:text-gray-600 dark:hover:text-gray-400 focus:outline-none focus:text-gray-600 dark:focus:text-gray-400" aria-label="toggle menu">
                        <svg x-show="!isOpen" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4 8h16M4 16h16" />
                        </svg>
                
                        <svg x-show="isOpen" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>

            <div x-cloak :class="[isOpen ? 'translate-x-0 opacity-100 ' : 'opacity-0 -translate-x-full']" class="absolute inset-x-0 z-20 flex-1 w-full px-6 py-4 transition-all duration-300 ease-in-out bg-white dark:bg-gray-800 lg:mt-0 lg:p-0 lg:top-0 lg:relative lg:bg-transparent lg:w-auto lg:opacity-100 lg:translate-x-0 lg:flex lg:items-center lg:justify-between">
                <div class="flex flex-col gap-5 text-gray-600 capitalize dark:text-gray-300 lg:flex lg:px-16 lg:-mx-4 lg:flex-row lg:items-center">
                    <div>
                        <a href="#" class="mt-2 transition-colors duration-300 transform lg:mt-0 lg:mx-4 hover:text-gray-900 dark:hover:text-blue-300">Home</a>
                        <a href="#" class="mt-2 transition-colors duration-300 transform lg:mt-0 lg:mx-4 hover:text-gray-900 dark:hover:text-blue-300">AboutUs</a>
                        <a href="#" class="mt-2 transition-colors duration-300 transform lg:mt-0 lg:mx-4 hover:text-gray-900 dark:hover:text-blue-300">Service</a>
                        <a href="#" class="mt-2 transition-colors duration-300 transform lg:mt-0 lg:mx-4 hover:text-gray-900 dark:hover:text-blue-300">Faq</a>
                    </div>
                    <div class="relative mt-4 lg:mt-0 lg:mx-4">
                        <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                            <svg class="w-4 h-4 text-gray-600 dark:text-gray-300" viewBox="0 0 24 24" fill="none">
                                <path d="M21 21L15 15M17 10C17 13.866 13.866 17 10 17C6.13401 17 3 13.866 3 10C3 6.13401 6.13401 3 10 3C13.866 3 17 6.13401 17 10Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                        </span>
    
                        <input type="text" class="w-[500px] py-1 pl-10 pr-4 text-gray-700 placeholder-gray-300 bg-white border-b border-gray-600 dark:placeholder-gray-300 dark:focus:border-gray-300 lg:w-56 lg:border-transparent dark:bg-gray-900 dark:text-gray-300 focus:outline-none focus:border-gray-600" placeholder="Search" id="search_visiteur">
                    </div>
                </div>

                <div class="flex gap-4">
               
    
                <div class="flex justify-center mt-8 lg:flex hover:text-blue-500 lg:mt-0 lg:-mx-2">
                    <a href="<?php echo URLROOT?>/pages/login" class=" flex gap-2 mx-2 text-gray-600 transition-colors duration-300 transform dark:text-gray-300 hover:text-red-600 dark:hover:text-red-600" aria-label="Reddit">
                    <svg class="w-6 h-6 text-gray-800 dark:text-white mt-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 15">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 7.5h11m0 0L8 3.786M12 7.5l-4 3.714M12 1h3c.53 0 1.04.196 1.414.544.375.348.586.82.586 1.313v9.286c0 .492-.21.965-.586 1.313A2.081 2.081 0 0 1 15 14h-3"/>
                    </svg>
                    <p class="font-bold mt-1">LOG IN</p>

                    </a>
                </div>
                </div>


            </div>
        </div>
    </div>
</nav>



<?php require APPROOT . '/views/incFile/footer.php'; ?>

