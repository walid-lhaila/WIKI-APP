<?php require APPROOT."/views/incFile/header.php"; ?>

<!--
  This example requires Tailwind CSS v2.0+

  The alpine.js code is *NOT* production ready and is included to preview
  possible interactivity
-->
<div class="bg-white">
    
  <!--
  This example requires updating your template:

  ```
  <html class="h-full bg-gray-100">
  <body class="h-full">
  ```
  -->
  <div class="min-h-full">
    <div class="bg-white pb-32">
      <nav x-data="{ open: false }" class="bg-black border-b border-black border-opacity-25 lg:border-none">
        <div class="max-w-7xl mx-auto px-2 sm:px-4 lg:px-8">
          <div class="relative h-16 flex items-center justify-between lg:border-b lg:border-indigo-400 lg:border-opacity-25">
            <div class="px-2 flex items-center lg:px-0">
              <div class="flex-shrink-0">
                <img class="block h-10 w-10" src="<?php echo URLROOT?>/img/icons8-wiki-48.png"> 
              </div>
              <div class="hidden lg:block lg:ml-10">
                <div class="flex space-x-4">
                  
                    <a href="#" class="text-white rounded-md py-2 px-3 text-sm font-medium hover:bg-orange-500" >
                      Dashboard
                    </a>
                  
                    <a href="#" class="text-white hover:bg-orange-500  rounded-md py-2 px-3 text-sm font-medium" x-state-description="undefined: &quot;bg-indigo-700 text-white&quot;, undefined: &quot;text-white hover:bg-indigo-500 hover:bg-opacity-75&quot;">
                      Team
                    </a>
                  
                    <a href="#" class="text-white hover:bg-orange-500 rounded-md py-2 px-3 text-sm font-medium" x-state-description="undefined: &quot;bg-indigo-700 text-white&quot;, undefined: &quot;text-white hover:bg-indigo-500 hover:bg-opacity-75&quot;">
                      Projects
                    </a>
                  
                    <a href="#" class="text-white hover:bg-orange-500 rounded-md py-2 px-3 text-sm font-medium" x-state-description="undefined: &quot;bg-indigo-700 text-white&quot;, undefined: &quot;text-white hover:bg-indigo-500 hover:bg-opacity-75&quot;">
                      Calendar
                    </a>
                  
                    <a href="#" class="text-white hover:bg-orange-500 rounded-md py-2 px-3 text-sm font-medium" x-state-description="undefined: &quot;bg-indigo-700 text-white&quot;, undefined: &quot;text-white hover:bg-indigo-500 hover:bg-opacity-75&quot;">
                      Reports
                    </a>
                  
                </div>
              </div>
            </div>
            <div class="flex-1 px-2 flex justify-center lg:ml-6 lg:justify-end">
              <div class="max-w-lg w-full lg:max-w-xs">
                <label for="search" class="sr-only">Search</label>
                <div class="relative text-gray-400 focus-within:text-gray-600">
                  <div class="pointer-events-none absolute inset-y-0 left-0 pl-3 flex items-center">
                    <svg class="h-5 w-5" x-description="Heroicon name: solid/search" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
  <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
</svg>
                  </div>
                  <input id="search" class="block w-full bg-white py-2 pl-10 pr-3 border border-transparent rounded-md leading-5 text-gray-900 placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-indigo-600 focus:ring-white focus:border-white sm:text-sm" placeholder="Search" type="search" name="search">
                </div>
              </div>
            </div>
            <div class="flex lg:hidden">
              <!-- Mobile menu button -->
              <button type="button" class="bg-indigo-600 p-2 rounded-md inline-flex items-center justify-center text-indigo-200 hover:text-white hover:bg-indigo-500 hover:bg-opacity-75 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-indigo-600 focus:ring-white" aria-controls="mobile-menu" @click="open = !open" aria-expanded="false" x-bind:aria-expanded="open.toString()">
                <span class="sr-only">Open main menu</span>
                <svg x-state:on="Menu open" x-state:off="Menu closed" class="block h-6 w-6" :class="{ 'hidden': open, 'block': !(open) }" x-description="Heroicon name: outline/menu" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
</svg>
                <svg x-state:on="Menu open" x-state:off="Menu closed" class="hidden h-6 w-6" :class="{ 'block': open, 'hidden': !(open) }" x-description="Heroicon name: outline/x" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
</svg>
              </button>
            </div>
            <div class="hidden lg:block lg:ml-4">
              <div class="flex items-center">

                                                  <!--REGESTRATION-->
                <a href="<?php echo URLROOT?>/pages/registration"><button type="button" class=" font-medium bg-white flex-shrink-0 rounded-lg p-1 text-black hover:bg-red focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-indigo-600 focus:ring-white">Create an Account</button></a>
                  
                <!-- Profile dropdown -->
                <div x-data="Components.menu({ open: false })" x-init="init()" @keydown.escape.stop="open = false; focusButton()" @click.away="onClickAway($event)" class="ml-3 relative flex-shrink-0">
                  <div>

                                                             <!--LOGIN-->
                    <a href="<?php echo URLROOT?>/pages/login"><button type="button" class=" font-medium bg-white flex-shrink-0 rounded-lg p-1 text-black hover:bg-orange">
                      Log In
                    </button></a>
                  </div>
                  
                  
                </div>
              </div>
            </div>
          </div>
        </div>

        <div x-description="Mobile menu, show/hide based on menu state." class="lg:hidden" id="mobile-menu" x-show="open">
          <div class="px-2 pt-2 pb-3 space-y-1">
            
              <a href="#" class="bg-indigo-700 text-white block rounded-md py-2 px-3 text-base font-medium" aria-current="page" x-state:on="Current" x-state:off="Default" x-state-description="Current: &quot;bg-indigo-700 text-white&quot;, Default: &quot;text-white hover:bg-indigo-500 hover:bg-opacity-75&quot;">
                Dashboard
              </a>
            
              <a href="#" class="text-white hover:bg-indigo-500 hover:bg-opacity-75 block rounded-md py-2 px-3 text-base font-medium" x-state-description="undefined: &quot;bg-indigo-700 text-white&quot;, undefined: &quot;text-white hover:bg-indigo-500 hover:bg-opacity-75&quot;">
                Team
              </a>
            
              <a href="#" class="text-white hover:bg-indigo-500 hover:bg-opacity-75 block rounded-md py-2 px-3 text-base font-medium" x-state-description="undefined: &quot;bg-indigo-700 text-white&quot;, undefined: &quot;text-white hover:bg-indigo-500 hover:bg-opacity-75&quot;">
                Projects
              </a>
            
              <a href="#" class="text-white hover:bg-indigo-500 hover:bg-opacity-75 block rounded-md py-2 px-3 text-base font-medium" x-state-description="undefined: &quot;bg-indigo-700 text-white&quot;, undefined: &quot;text-white hover:bg-indigo-500 hover:bg-opacity-75&quot;">
                Calendar
              </a>
            
              <a href="#" class="text-white hover:bg-indigo-500 hover:bg-opacity-75 block rounded-md py-2 px-3 text-base font-medium" x-state-description="undefined: &quot;bg-indigo-700 text-white&quot;, undefined: &quot;text-white hover:bg-indigo-500 hover:bg-opacity-75&quot;">
                Reports
              </a>
            
          </div>
          <div class="pt-4 pb-3 border-t border-indigo-700">
            <div class="px-5 flex items-center">
              <div class="flex-shrink-0">
                <img class="rounded-full h-10 w-10" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80" alt="">
              </div>
              <div class="ml-3">
                <div class="text-base font-medium text-white">Tom Cook</div>
                <div class="text-sm font-medium text-indigo-300">tom@example.com</div>
              </div>
              <button type="button" class="ml-auto bg-indigo-600 flex-shrink-0 rounded-full p-1 text-indigo-200 hover:text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-indigo-600 focus:ring-white">
                <span class="sr-only">View notifications</span>
                <svg class="h-6 w-6" x-description="Heroicon name: outline/bell" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path>
</svg>
              </button>
            </div>
            <div class="mt-3 px-2 space-y-1">
              
                <a href="#" class="block rounded-md py-2 px-3 text-base font-medium text-white hover:bg-indigo-500 hover:bg-opacity-75">
                  Your Profile
                </a>
              
                <a href="#" class="block rounded-md py-2 px-3 text-base font-medium text-white hover:bg-indigo-500 hover:bg-opacity-75">
                  Settings
                </a>
              
                <a href="#" class="block rounded-md py-2 px-3 text-base font-medium text-white hover:bg-indigo-500 hover:bg-opacity-75">
                  Sign out
                </a>
              
            </div>
          </div>
        </div>
      </nav>
      
    </div>

    <main class="-mt-32">
      <div class="max-w-7xl mx-auto pb-12 px-4 sm:px-6 lg:px-8">
        <!-- Replace with your content -->
        <!--
  This example requires Tailwind CSS v2.0+

  The alpine.js code is *NOT* production ready and is included to preview
  possible interactivity
-->
<div class="relative py-16 bg-white overflow-hidden">
    <div class="hidden lg:block lg:absolute lg:inset-y-0 lg:h-full lg:w-full">
      <div class="relative h-full text-lg max-w-prose mx-auto" aria-hidden="true">
        <svg class="absolute top-12 left-full transform translate-x-32" width="404" height="384" fill="none" viewBox="0 0 404 384">
          <defs>
            <pattern id="74b3fd99-0a6f-4271-bef2-e80eeafdf357" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
              <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor"></rect>
            </pattern>
          </defs>
          <rect width="404" height="384" fill="url(#74b3fd99-0a6f-4271-bef2-e80eeafdf357)"></rect>
        </svg>
        <svg class="absolute top-1/2 right-full transform -translate-y-1/2 -translate-x-32" width="404" height="384" fill="none" viewBox="0 0 404 384">
          <defs>
            <pattern id="f210dbf6-a58d-4871-961e-36d5016a0f49" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
              <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor"></rect>
            </pattern>
          </defs>
          <rect width="404" height="384" fill="url(#f210dbf6-a58d-4871-961e-36d5016a0f49)"></rect>
        </svg>
        <svg class="absolute bottom-12 left-full transform translate-x-32" width="404" height="384" fill="none" viewBox="0 0 404 384">
          <defs>
            <pattern id="d3eb07ae-5182-43e6-857d-35c643af9034" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
              <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor"></rect>
            </pattern>
          </defs>
          <rect width="404" height="384" fill="url(#d3eb07ae-5182-43e6-857d-35c643af9034)"></rect>
        </svg>
      </div>
    </div>
    <div class="relative px-4 sm:px-6 lg:px-8">
      <div class="text-lg max-w-prose mx-auto">
        <h1>
          <span class="block text-base text-center text-indigo-600 font-semibold tracking-wide uppercase">Introducing</span>
          <span class="mt-2 block text-3xl text-center leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">Bienvenue sur Wiki</span>
        </h1>
        <p class="mt-8 text-xl text-gray-500 leading-8">Aliquet nec orci mattis amet quisque ullamcorper neque, nibh sem. At arcu, sit dui mi, nibh dui, diam eget aliquam. Quisque id at vitae feugiat egestas ac. Diam nulla orci at in viverra scelerisque eget. Eleifend egestas fringilla sapien.</p>
      </div>
      <div class="mt-6 prose prose-indigo prose-lg text-gray-500 mx-auto">
        <p>Faucibus commodo massa rhoncus, volutpat. <strong>Dignissim</strong> sed <strong>eget risus enim</strong>. Mattis mauris semper sed amet vitae sed turpis id. Id dolor praesent donec est. Odio penatibus risus viverra tellus varius sit neque erat velit. Faucibus commodo massa rhoncus, volutpat. Dignissim sed eget risus enim. <a href="#">Mattis mauris semper</a> sed amet vitae sed turpis id.</p>
        <ul role="list">
          <li>Quis elit egestas venenatis mattis dignissim.</li>
          <li>Cras cras lobortis vitae vivamus ultricies facilisis tempus.</li>
          <li>Orci in sit morbi dignissim metus diam arcu pretium.</li>
        </ul>
        <p>Quis semper vulputate aliquam venenatis egestas sagittis quisque orci. Donec commodo sit viverra aliquam porttitor ultrices gravida eu. Tincidunt leo, elementum mattis elementum ut nisl, justo, amet, mattis. Nunc purus, diam commodo tincidunt turpis. Amet, duis sed elit interdum dignissim.</p>
        <h2>From beginner to expert in 30 days</h2>
        <p>Id orci tellus laoreet id ac. Dolor, aenean leo, ac etiam consequat in. Convallis arcu ipsum urna nibh. Pharetra, euismod vitae interdum mauris enim, consequat vulputate nibh. Maecenas pellentesque id sed tellus mauris, ultrices mauris. Tincidunt enim cursus ridiculus mi. Pellentesque nam sed nullam sed diam turpis ipsum eu a sed convallis diam.</p>
        <blockquote>
          <p>Sagittis scelerisque nulla cursus in enim consectetur quam. Dictum urna sed consectetur neque tristique pellentesque. Blandit amet, sed aenean erat arcu morbi.</p>
        </blockquote>
        <p>Faucibus commodo massa rhoncus, volutpat. Dignissim sed eget risus enim. Mattis mauris semper sed amet vitae sed turpis id. Id dolor praesent donec est. Odio penatibus risus viverra tellus varius sit neque erat velit.</p>
        <figure>
          <div class="flex justify-center">
          <img class=" w-96 rounded-lg h-72 " src="<?php echo URLROOT?>/img/wikipedia-removebg-preview.png" >
          </div>
          <figcaption>Sagittis scelerisque nulla cursus in enim consectetur quam.</figcaption>
        </figure>
        <h2>Everything you need to get up and running</h2>
        <p>Purus morbi dignissim senectus mattis <a href="#">adipiscing</a>. Amet, massa quam varius orci dapibus volutpat cras. In amet eu ridiculus leo sodales cursus tristique. Tincidunt sed tempus ut viverra ridiculus non molestie. Gravida quis fringilla amet eget dui tempor dignissim. Facilisis auctor venenatis varius nunc, congue erat ac. Cras fermentum convallis quam.</p>
        <p>Faucibus commodo massa rhoncus, volutpat. Dignissim sed eget risus enim. Mattis mauris semper sed amet vitae sed turpis id. Id dolor praesent donec est. Odio penatibus risus viverra tellus varius sit neque erat velit.</p>
      </div>
    </div>
  </div>

  <!--
  This example requires Tailwind CSS v2.0+

  The alpine.js code is *NOT* production ready and is included to preview
  possible interactivity
-->
<div class="bg-gray-50">
    <div class="max-w-7xl mx-auto py-12 px-4 sm:py-16 sm:px-6 lg:px-8">
      <div class="max-w-3xl mx-auto divide-y-2 divide-gray-200">
        <h2 class="text-center text-3xl font-extrabold text-gray-900 sm:text-4xl">
          Frequently asked questions
        </h2>
        <dl class="mt-6 space-y-6 divide-y divide-gray-200">
          
            <div x-data="{ open: true }" class="pt-6">
              <dt class="text-lg">
                <button type="button" x-description="Expand/collapse question button" class="text-left w-full flex justify-between items-start text-gray-400" aria-controls="faq-0" @click="open = !open" aria-expanded="false" x-bind:aria-expanded="open.toString()">
                  <span class="font-medium text-gray-900">
                    What's the best thing about Switzerland?
                  </span>
                  <span class="ml-6 h-7 flex items-center">
                    <svg class="rotate-0 h-6 w-6 transform" x-description="Expand/collapse icon, toggle classes based on question open state.

Heroicon name: outline/chevron-down" x-state:on="Open" x-state:off="Closed" :class="{ '-rotate-180': open, 'rotate-0': !(open) }" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
</svg>
                  </span>
                </button>
              </dt>
              <dd class="mt-2 pr-12" id="faq-0" x-show="open">
                <p class="text-base text-gray-500">
                  I don't know, but the flag is a big plus. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas cupiditate laboriosam fugiat.
                </p>
              </dd>
            </div>
          
            <div x-data="{ open: false }" class="pt-6">
              <dt class="text-lg">
                <button type="button" x-description="Expand/collapse question button" class="text-left w-full flex justify-between items-start text-gray-400" aria-controls="faq-1" @click="open = !open" aria-expanded="false" x-bind:aria-expanded="open.toString()">
                  <span class="font-medium text-gray-900">
                    How do you make holy water?
                  </span>
                  <span class="ml-6 h-7 flex items-center">
                    <svg class="rotate-0 h-6 w-6 transform" x-description="Expand/collapse icon, toggle classes based on question open state.

Heroicon name: outline/chevron-down" x-state:on="Open" x-state:off="Closed" :class="{ '-rotate-180': open, 'rotate-0': !(open) }" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
</svg>
                  </span>
                </button>
              </dt>
              <dd class="mt-2 pr-12" id="faq-1" x-show="open">
                <p class="text-base text-gray-500">
                  You boil the hell out of it. Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam aut tempora vitae odio inventore fuga aliquam nostrum quod porro. Delectus quia facere id sequi expedita natus.
                </p>
              </dd>
            </div>
          
            <div x-data="{ open: false }" class="pt-6">
              <dt class="text-lg">
                <button type="button" x-description="Expand/collapse question button" class="text-left w-full flex justify-between items-start text-gray-400" aria-controls="faq-2" @click="open = !open" aria-expanded="false" x-bind:aria-expanded="open.toString()">
                  <span class="font-medium text-gray-900">
                    What do you call someone with no body and no nose?
                  </span>
                  <span class="ml-6 h-7 flex items-center">
                    <svg class="rotate-0 h-6 w-6 transform" x-description="Expand/collapse icon, toggle classes based on question open state.

Heroicon name: outline/chevron-down" x-state:on="Open" x-state:off="Closed" :class="{ '-rotate-180': open, 'rotate-0': !(open) }" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
</svg>
                  </span>
                </button>
              </dt>
              <dd class="mt-2 pr-12" id="faq-2" x-show="open">
                <p class="text-base text-gray-500">
                  Nobody knows. Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa, voluptas ipsa quia excepturi, quibusdam natus exercitationem sapiente tempore labore voluptatem.
                </p>
              </dd>
            </div>
          
            <div x-data="{ open: false }" class="pt-6">
              <dt class="text-lg">
                <button type="button" x-description="Expand/collapse question button" class="text-left w-full flex justify-between items-start text-gray-400" aria-controls="faq-3" @click="open = !open" aria-expanded="false" x-bind:aria-expanded="open.toString()">
                  <span class="font-medium text-gray-900">
                    Why do you never see elephants hiding in trees?
                  </span>
                  <span class="ml-6 h-7 flex items-center">
                    <svg class="rotate-0 h-6 w-6 transform" x-description="Expand/collapse icon, toggle classes based on question open state.

Heroicon name: outline/chevron-down" x-state:on="Open" x-state:off="Closed" :class="{ '-rotate-180': open, 'rotate-0': !(open) }" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
</svg>
                  </span>
                </button>
              </dt>
              <dd class="mt-2 pr-12" id="faq-3" x-show="open">
                <p class="text-base text-gray-500">
                  Because they're so good at it. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas cupiditate laboriosam fugiat.
                </p>
              </dd>
            </div>
          
            <div x-data="{ open: false }" class="pt-6">
              <dt class="text-lg">
                <button type="button" x-description="Expand/collapse question button" class="text-left w-full flex justify-between items-start text-gray-400" aria-controls="faq-4" @click="open = !open" aria-expanded="false" x-bind:aria-expanded="open.toString()">
                  <span class="font-medium text-gray-900">
                    Why can't you hear a pterodactyl go to the bathroom?
                  </span>
                  <span class="ml-6 h-7 flex items-center">
                    <svg class="rotate-0 h-6 w-6 transform" x-description="Expand/collapse icon, toggle classes based on question open state.

Heroicon name: outline/chevron-down" x-state:on="Open" x-state:off="Closed" :class="{ '-rotate-180': open, 'rotate-0': !(open) }" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
</svg>
                  </span>
                </button>
              </dt>
              <dd class="mt-2 pr-12" id="faq-4" x-show="open">
                <p class="text-base text-gray-500">
                  Because the pee is silent. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam, quas voluptatibus ex culpa ipsum, aspernatur blanditiis fugiat ullam magnam suscipit deserunt illum natus facilis atque vero consequatur! Quisquam, debitis error.
                </p>
              </dd>
            </div>
          
            <div x-data="{ open: false }" class="pt-6">
              <dt class="text-lg">
                <button type="button" x-description="Expand/collapse question button" class="text-left w-full flex justify-between items-start text-gray-400" aria-controls="faq-5" @click="open = !open" aria-expanded="false" x-bind:aria-expanded="open.toString()">
                  <span class="font-medium text-gray-900">
                    Why did the invisible man turn down the job offer?
                  </span>
                  <span class="ml-6 h-7 flex items-center">
                    <svg class="rotate-0 h-6 w-6 transform" x-description="Expand/collapse icon, toggle classes based on question open state.

Heroicon name: outline/chevron-down" x-state:on="Open" x-state:off="Closed" :class="{ '-rotate-180': open, 'rotate-0': !(open) }" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
</svg>
                  </span>
                </button>
              </dt>
              <dd class="mt-2 pr-12" id="faq-5" x-show="open">
                <p class="text-base text-gray-500">
                  He couldn't see himself doing it. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eveniet perspiciatis officiis corrupti tenetur. Temporibus ut voluptatibus, perferendis sed unde rerum deserunt eius.
                </p>
              </dd>
            </div>
        </dl>
      </div>
    </div>
  </div>

                                          



  <!--
  This example requires Tailwind CSS v2.0+

  The alpine.js code is *NOT* production ready and is included to preview
  possible interactivity
-->
<footer class="bg-white" aria-labelledby="footer-heading">
    <h2 id="footer-heading" class="sr-only">Footer</h2>
    <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8">
      <div class="xl:grid xl:grid-cols-3 xl:gap-8">
        <div class="grid grid-cols-2 gap-8 xl:col-span-2">
          <div class="md:grid md:grid-cols-2 md:gap-8">
            <div>
              <h3 class="text-sm font-semibold text-gray-400 tracking-wider uppercase">
                Solutions
              </h3>
              <ul role="list" class="mt-4 space-y-4">
                
                  <li>
                    <a href="#" class="text-base text-gray-500 hover:text-gray-900">
                      Marketing
                    </a>
                  </li>
                
                  <li>
                    <a href="#" class="text-base text-gray-500 hover:text-gray-900">
                      Analytics
                    </a>
                  </li>
                
                  <li>
                    <a href="#" class="text-base text-gray-500 hover:text-gray-900">
                      Commerce
                    </a>
                  </li>
                
                  <li>
                    <a href="#" class="text-base text-gray-500 hover:text-gray-900">
                      Insights
                    </a>
                  </li>
                
              </ul>
            </div>
            <div class="mt-12 md:mt-0">
              <h3 class="text-sm font-semibold text-gray-400 tracking-wider uppercase">
                Support
              </h3>
              <ul role="list" class="mt-4 space-y-4">
                
                  <li>
                    <a href="#" class="text-base text-gray-500 hover:text-gray-900">
                      Pricing
                    </a>
                  </li>
                
                  <li>
                    <a href="#" class="text-base text-gray-500 hover:text-gray-900">
                      Documentation
                    </a>
                  </li>
                
                  <li>
                    <a href="#" class="text-base text-gray-500 hover:text-gray-900">
                      Guides
                    </a>
                  </li>
                
                  <li>
                    <a href="#" class="text-base text-gray-500 hover:text-gray-900">
                      API Status
                    </a>
                  </li>
                
              </ul>
            </div>
          </div>
          <div class="md:grid md:grid-cols-2 md:gap-8">
            <div>
              <h3 class="text-sm font-semibold text-gray-400 tracking-wider uppercase">
                Company
              </h3>
              <ul role="list" class="mt-4 space-y-4">
                
                  <li>
                    <a href="#" class="text-base text-gray-500 hover:text-gray-900">
                      About
                    </a>
                  </li>
                
                  <li>
                    <a href="#" class="text-base text-gray-500 hover:text-gray-900">
                      Blog
                    </a>
                  </li>
                
                  <li>
                    <a href="#" class="text-base text-gray-500 hover:text-gray-900">
                      Jobs
                    </a>
                  </li>
                
                  <li>
                    <a href="#" class="text-base text-gray-500 hover:text-gray-900">
                      Press
                    </a>
                  </li>
                
                  <li>
                    <a href="#" class="text-base text-gray-500 hover:text-gray-900">
                      Partners
                    </a>
                  </li>
                
              </ul>
            </div>
            <div class="mt-12 md:mt-0">
              <h3 class="text-sm font-semibold text-gray-400 tracking-wider uppercase">
                Legal
              </h3>
              <ul role="list" class="mt-4 space-y-4">
                
                  <li>
                    <a href="#" class="text-base text-gray-500 hover:text-gray-900">
                      Claim
                    </a>
                  </li>
                
                  <li>
                    <a href="#" class="text-base text-gray-500 hover:text-gray-900">
                      Privacy
                    </a>
                  </li>
                
                  <li>
                    <a href="#" class="text-base text-gray-500 hover:text-gray-900">
                      Terms
                    </a>
                  </li>
                
              </ul>
            </div>
          </div>
        </div>
        <div class="mt-8 xl:mt-0">
          <h3 class="text-sm font-semibold text-gray-400 tracking-wider uppercase">
            Subscribe to our newsletter
          </h3>
          <p class="mt-4 text-base text-gray-500">
            The latest news, articles, and resources, sent to your inbox weekly.
          </p>
          <form class="mt-4 sm:flex sm:max-w-md">
            <label for="email-address" class="sr-only">Email address</label>
            <input type="email" name="email-address" id="email-address" autocomplete="email" required="" class="appearance-none min-w-0 w-full bg-white border border-gray-300 rounded-md shadow-sm py-2 px-4 text-base text-gray-900 placeholder-gray-500 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:placeholder-gray-400" placeholder="Enter your email">
            <div class="mt-3 rounded-md sm:mt-0 sm:ml-3 sm:flex-shrink-0">
              <button type="submit" class="w-full bg-black flex items-center justify-center border border-transparent rounded-md py-2 px-4 text-base font-medium text-white hover:bg-orange focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                Subscribe
              </button>
            </div>
          </form>
        </div>
      </div>
      <div class="mt-8 border-t border-gray-200 pt-8 md:flex md:items-center md:justify-between">
        <div class="flex space-x-6 md:order-2">
          
            <a href="#" class="text-gray-400 hover:text-gray-500">
              <span class="sr-only">Facebook</span>
              <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
  <path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd"></path>
</svg>
            </a>
          
            <a href="#" class="text-gray-400 hover:text-gray-500">
              <span class="sr-only">Instagram</span>
              <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
  <path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd"></path>
</svg>
            </a>
          
            <a href="#" class="text-gray-400 hover:text-gray-500">
              <span class="sr-only">Twitter</span>
              <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
  <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84"></path>
</svg>
            </a>
          
            <a href="#" class="text-gray-400 hover:text-gray-500">
              <span class="sr-only">GitHub</span>
              <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
  <path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd"></path>
</svg>
            </a>
          
            <a href="#" class="text-gray-400 hover:text-gray-500">
              <span class="sr-only">Dribbble</span>
              <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
  <path fill-rule="evenodd" d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10c5.51 0 10-4.48 10-10S17.51 2 12 2zm6.605 4.61a8.502 8.502 0 011.93 5.314c-.281-.054-3.101-.629-5.943-.271-.065-.141-.12-.293-.184-.445a25.416 25.416 0 00-.564-1.236c3.145-1.28 4.577-3.124 4.761-3.362zM12 3.475c2.17 0 4.154.813 5.662 2.148-.152.216-1.443 1.941-4.48 3.08-1.399-2.57-2.95-4.675-3.189-5A8.687 8.687 0 0112 3.475zm-3.633.803a53.896 53.896 0 013.167 4.935c-3.992 1.063-7.517 1.04-7.896 1.04a8.581 8.581 0 014.729-5.975zM3.453 12.01v-.26c.37.01 4.512.065 8.775-1.215.25.477.477.965.694 1.453-.109.033-.228.065-.336.098-4.404 1.42-6.747 5.303-6.942 5.629a8.522 8.522 0 01-2.19-5.705zM12 20.547a8.482 8.482 0 01-5.239-1.8c.152-.315 1.888-3.656 6.703-5.337.022-.01.033-.01.054-.022a35.318 35.318 0 011.823 6.475 8.4 8.4 0 01-3.341.684zm4.761-1.465c-.086-.52-.542-3.015-1.659-6.084 2.679-.423 5.022.271 5.314.369a8.468 8.468 0 01-3.655 5.715z" clip-rule="evenodd"></path>
</svg>
            </a>
          
        </div>
        <p class="mt-8 text-base text-gray-400 md:mt-0 md:order-1">
          © 2024 Wiki, Inc. All rights reserved.
        </p>
      </div>
    </div>
  </footer>
        
        <!-- /End replace -->
      </div>
    </main>
  </div>

  </div>
  


  <?php require APPROOT."/views/incFile/footer.php"; ?>
