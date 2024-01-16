<?php require APPROOT."/views/incFile/header.php"; ?>

<!--
  This example requires Tailwind CSS v2.0+

  The alpine.js code is *NOT* production ready and is included to preview
  possible interactivity
-->
<div class="bg-gray-200">
    <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
      <div class="max-w-3xl mx-auto">
    <div id="form">
  <form id="form" method="post" class="space-y-8 divide-y divide-gray-200">
    <div class="space-y-8 divide-y divide-gray-200">
      <div class="flex justify-center">
        <img class="h-44 w-48" src="<?php echo URLROOT?>/img/wikipedia-removebg-preview.png" alt="">
      </div>

      <div class="pt-8">
        <div>
          <h3 class="text-lg leading-6 font-medium text-gray-900">
            Create a Acoount
          </h3>
          <p class="mt-1 text-sm text-gray-500">
            Use a permanent address where you can receive mail.
          </p>
        </div>
        <div class="mt-6 grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6">
          <div class="sm:col-span-3">
            <label for="first-name" class="block text-sm font-medium text-gray-700">
              Username
            </label>
            <div class="mt-1 ">
              <input type="text" name="username" id="username" autocomplete="given-name" class=" py-2 px-2 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
              <p id="usernameError" class="text-red-600 font-medium"></p>
            </div>
          </div>

          <div class="sm:col-span-3">
            <label for="last-name" class="block text-sm font-medium text-gray-700">
              Password
            </label>
            <div class="mt-1">
              <input type="password" name="pw" id="pw" autocomplete="family-name" class=" py-2 px-2 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
              <p id="pwError" class="text-red-600 font-medium"></p>
            </div>
          </div>

          <div class="sm:col-span-4">
            <label for="email" class="block text-sm font-medium text-gray-700">
              Email address
            </label>
            <div class="mt-1">
              <input id="email" name="email" type="email" autocomplete="email" class="py-2 px-2 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-[770px] sm:text-sm border-gray-300 rounded-md">
              <p id="emailError" class="text-red-600 font-medium"></p>
            </div>
          </div>

         
      </div>

      
    </div>

    <div class="pt-5">
      <div class="flex justify-center">
        <a href="<?php echo URLROOT?> /customer/home"><button type="button" class="bg-white py-2 px-4 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
          Cancel
        </button></a>
        <button type="submit" name="addRegister" class="ml-3 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-gray-800 hover:bg-black focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
          Save
        </button>
      </div>
    </div>
  </form>
  </div>

      </div>
    </div>
  </div>









<?php require APPROOT."/views/incFile/footer.php"; ?>