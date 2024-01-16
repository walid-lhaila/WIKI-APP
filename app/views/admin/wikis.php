<?php require APPROOT."/views/incFile/header.php"; ?>
<?php require APPROOT."/views/incFile/sideBar.php"; ?>
<main class="flex-1">
        <div class="py-6">
          <div class=" flex justify-between max-w-7xl mx-auto px-4 sm:px-6 md:px-8">
            <h1 class="text-2xl font-bold text-gray-900">Wikis</h1>
            <div>
            <!-- <button id="btn" class="w-full bg-gray-700 flex items-center justify-center border border-transparent rounded-md py-2 px-4 text-base font-medium text-white hover:bg-orange">Add Wiki</button> -->
            </div>
          </div>
          <div id="wiki" class=" flex flex-wrap gap-5 max-w-7xl mx-auto px-4 mt-10 sm:px-6 md:px-8">
          
          
            
            
            
          </div>
            

          




            

<div id="formulaire" class="absolute w-full h-full inset-0 bg-opacity-50 backdrop-filter backdrop-blur-md flex justify-center items-center bg-gray-500 scale-0 duration-300">           
<div id="" class="bg-gray-900 w-[560px] ml-[20px] ">
<form class="max-w-md mx-auto bg-gray-900 py-10">
  <div class="flex justify-end" >
    <svg id="rmForm"  class="w-6 h-6 text-white dark:text-white cursor-pointer" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m13 7-6 6m0-6 6 6m6-3a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
  </svg>
    
  </div>
  <div class="flex justify-center">
  <h1 class="text-white font-bold text-2xl">Add Wiki</h1>
  </div>
  <div class="relative z-0 w-full mt-5 mb-5 group">
      <input type="title" name="title" id="title" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-orange-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
      <label for="title" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-2 scale-75 top-2 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-orange-600 peer-focus:dark:text-orange-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Title</label>
  </div>
  <div class="relative z-0 w-full mb-5 group">
      <input type="content" name="content" id="content" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-orange-500 focus:outline-none focus:ring-0 focus:border-orange-600 peer" placeholder=" " required />
      <label for="content" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-2 scale-75 top-2 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-orange-600 peer-focus:dark:text-orange-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Content</label>
  </div>
  <div class="relative z-0 w-full mb-5 group">
    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400" for="user_avatar">Upload file</label>
    <input class="bg-transparent border-0 border-b-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" aria-describedby="user_avatar_help" id="user_avatar" type="file">
  </div>
  <div class="grid md:grid-cols-2 md:gap-6">
    <div class="relative z-0 w-full mb-5 group">
    <label for="userId" class="block mb-2 text-sm font-medium text-gray-400">Select User</label>
    <select id="userId" name="userId" class="bg-transparent border-0 border-b-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">

  </select>
    </div>
    <div class="relative z-0 w-full mb-5 group">
    <label for="countries" class="block mb-2 text-sm font-medium text-gray-400 ">Select Categorie</label>
  <select id="countries" name="categoryId" class="bg-transparent border-0 border-b-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">

  </select>
    </div>
  </div>
  <div class="flex justify-center">
  <button type="submit" class="text-white bg-orange-600 hover:bg-orange-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Submit</button>
  </div>
</form>
</div>
          
          </div>
        </div>
      </main>

<script defer src="<?php echo URLROOT?>/js/wiki.js"></script>

<?php require APPROOT."/views/incFile/footer.php"; ?>