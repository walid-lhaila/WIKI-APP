<?php require APPROOT."/views/incFile/header.php"; ?>
<?php require APPROOT."/views/incFile/sideBar.php"; ?>
<main class="flex-1">
        <div class="py-6">
          <div class=" flex justify-between max-w-7xl mx-auto px-4 sm:px-6 md:px-8">
            <h1 class="text-2xl font-bold text-gray-900">Categories</h1>
            <div>
            <button id="btn" class="w-full bg-gray-700 flex items-center justify-center border border-transparent rounded-md py-2 px-4 text-base font-medium text-white hover:bg-orange">Add Categorie</button>
            </div>
          </div>
          <div class="max-w-7xl mx-auto px-4 mt-10 sm:px-6 md:px-8">
            
            <table id="table">
                <thead class="bg-gray-700 text-white">
                    <th>ID</th>
                    <th>NAME</th>
                    <th>DESCRIPTION</th>
                    <th>CREATED AT</th>
                </thead>
                <tbody class="bg-gray-300 bg-opacity-50">
                  

                </tbody>
            </table>


<div id="formulaire" class="bg-gray-900 w-[560px] ml-64 scale-0 duration-700 ">
<form class="max-w-md mx-auto bg-gray-900 py-10">
  <div class="flex justify-end" >
    <svg id="rmForm"  class="w-6 h-6 text-white dark:text-white cursor-pointer" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m13 7-6 6m0-6 6 6m6-3a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
  </svg>
    
  </div>
  <div class="flex justify-center">
  <h1 class="text-white font-bold text-2xl">Add Categorie</h1>
  </div>
  <div class="relative z-0 w-full mt-5 mb-5 group">
      <input type="categoryName" name="categoryName" id="categoryName" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-orange-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
      <label for="categoryName" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-2 scale-75 top-2 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-orange-600 peer-focus:dark:text-orange-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Categorie Name</label>
  </div>
  <div class="relative z-0 w-full mb-5 group">
      <input type="categoryDesc" name="categoryDesc" id="categoryDesc" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-orange-500 focus:outline-none focus:ring-0 focus:border-orange-600 peer" placeholder=" " required />
      <label for="categoryDesc" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-2 scale-75 top-2 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-orange-600 peer-focus:dark:text-orange-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Description</label>
  </div>
  <div class="flex justify-center">
  <button type="submit" name="addCategory" class="text-white bg-orange-600 hover:bg-orange-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Submit</button>
  </div>
</form>
</div>

          
          </div>
          
        </div>
        
      </main>

<?php require APPROOT."/views/incFile/footer.php"; ?>