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
    
                        <input type="text" class="w-[500px] py-1 pl-10 pr-4 text-gray-700 placeholder-gray-300 bg-white border-b border-gray-600 dark:placeholder-gray-300 dark:focus:border-gray-300 lg:w-56 lg:border-transparent dark:bg-gray-900 dark:text-gray-300 focus:outline-none focus:border-gray-600" placeholder="Search">
                    </div>
                </div>

                <div class="flex gap-4">
                <div x-data="Components.menu({ open: false })" x-init="init()" @keydown.escape.stop="open = false; focusButton()" @click.away="onClickAway($event)" class="ml-3 relative">
            <div>
              <button type="button" id="btnDrop"  class="bg-gray-800 flex text-sm rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white" x-ref="button" @click="onButtonClick()" @keyup.space.prevent="onButtonEnter()" @keydown.enter.prevent="onButtonEnter()" aria-expanded="false" aria-haspopup="true" x-bind:aria-expanded="open.toString()" @keydown.arrow-up.prevent="onArrowUp()" @keydown.arrow-down.prevent="onArrowDown()">
                <span class="sr-only">Open user menu</span>
                <img  class="h-8 w-8 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80" alt="">
              </button>
            </div>
            
              <div id="dropDown" x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5 focus:outline-none scale-100 duration-500" x-ref="menu-items" x-description="Dropdown menu, show/hide based on menu state." x-bind:aria-activedescendant="activeDescendant" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1" @keydown.arrow-up.prevent="onArrowUp()" @keydown.arrow-down.prevent="onArrowDown()" @keydown.tab="open = false" @keydown.enter.prevent="open = false; focusButton()" @keyup.space.prevent="open = false; focusButton()">
                <a href="<?php echo URLROOT?> /customer/wikisOfAuthor" class="block px-4 py-2 text-sm text-gray-700 hover:text-blue-600" x-state:on="Active" x-state:off="Not Active" :class="{ 'bg-gray-100': activeIndex === 0 }" role="menuitem" tabindex="-1" id="user-menu-item-0" @mouseenter="activeIndex = 0" @mouseleave="activeIndex = -1" @click="open = false; focusButton()">My Wikis</a>
                <a href="<?php echo URLROOT?> /customer/addWiki" class="block px-4 py-2 text-sm text-gray-700 hover:text-blue-600" :class="{ 'bg-gray-100': activeIndex === 1 }" role="menuitem" tabindex="-1" id="user-menu-item-1" @mouseenter="activeIndex = 1" @mouseleave="activeIndex = -1" @click="open = false; focusButton()">Add wiki</a>
                <a href="<?php echo URLROOT?> /pages/login" class="block px-4 py-2 text-sm text-gray-700 hover:text-red-600" :class="{ 'bg-gray-100': activeIndex === 2 }" role="menuitem" tabindex="-1" id="user-menu-item-2" @mouseenter="activeIndex = 2" @mouseleave="activeIndex = -1" @click="open = false; focusButton()">Sign out</a>
              </div>
            
          </div>
    
                <div class="flex justify-center mt-8 lg:flex hover:text-blue-500 lg:mt-0 lg:-mx-2">
                    <a href="<?php echo URLROOT?>/pages/login" class=" flex gap-2 mx-2 text-gray-600 transition-colors duration-300 transform dark:text-gray-300 hover:text-red-600 dark:hover:text-red-600" aria-label="Reddit">
                    <svg class="w-6 h-6 text-gray-800 dark:text-white mt-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 15">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 7.5h11m0 0L8 3.786M12 7.5l-4 3.714M12 1h3c.53 0 1.04.196 1.414.544.375.348.586.82.586 1.313v9.286c0 .492-.21.965-.586 1.313A2.081 2.081 0 0 1 15 14h-3"/>
                    </svg>
                    <p class="font-bold mt-1">LOG OUT</p>

                    </a>
                </div>
                </div>


            </div>
        </div>
    </div>
</nav>




