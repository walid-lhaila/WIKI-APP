
  <?php require APPROOT."/views/incFile/header.php"; ?>
  <?php require APPROOT."/views/incFile/sideBar.php"; ?>
  <main class="flex-1">
          <div class="py-6">
            <div class=" flex justify-between max-w-7xl mx-auto px-4 sm:px-6 md:px-8">
              <h1 class="text-2xl font-bold text-gray-900">Tags</h1>
              <div>
              <button id="btn" class="w-full bg-gray-700 flex items-center justify-center border border-transparent rounded-md py-2 px-4 text-base font-medium text-white hover:bg-orange">Add Tag</button>
              </div>
            </div>
            <div id="tags" class=" flex flex-wrap gap-5 max-w-7xl mx-auto px-4 mt-10 sm:px-6 md:px-8">
              
              <!--CARDS CATEGORY -->
              
              
              
              
                          
              
              
              
              
            </div>
              
            <div id="formulaire" class="absolute w-full h-full inset-0 bg-opacity-50 backdrop-filter backdrop-blur-md flex justify-center items-center bg-gray-500 scale-0 duration-300">
              <div  class="  bg-gray-900 w-[560px] ml-[20px]">
  <form method="post" class="max-w-md mx-auto bg-gray-900 py-10">
    <div class="flex justify-end" >
      <svg id="rmForm"  class="w-6 h-6 text-white dark:text-white cursor-pointer" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m13 7-6 6m0-6 6 6m6-3a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
    </svg>
      
    </div>
    <div class="flex justify-center">
    <h1 class="text-white font-bold text-2xl">Add Tag</h1>
    </div>
    <div class="relative z-0 w-full mt-5 mb-5 group">
        <input type="text" name="tagName" id="tagName" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-orange-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
        <label for="tag" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-2 scale-75 top-2 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-orange-600 peer-focus:dark:text-orange-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Tag Name</label>
    </div>
    
    <div class="flex justify-center">
    <button type="submit" name="addTag" class="text-white bg-orange-600 hover:bg-orange-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Submit</button>
    </div>
  </form>
  </div>
            
            </div>



            <!--edit form-->

              
            <div id="editTagForm" class="absolute w-full h-full inset-0 bg-opacity-50 backdrop-filter backdrop-blur-md flex justify-center items-center bg-gray-500 hidden">
            <div class="container px-4 sm:px-8 mx-auto max-w-lg ">

                <div class="wrapper dark:bg-gray-800 rounded-sm shadow-lg ">
                    <div class="card px-8 py-4">
                        <div class="card-image mt-4 mb-6 flex justify-between flex-row-reverse">
                        
                          <svg id="closeEditForm"  class="w-6 h-6 text-white dark:text-white cursor-pointer" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m13 7-6 6m0-6 6 6m6-3a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                          </svg>
                          <div class="flex justify-center">
                              <h1 class="text-white font-bold text-lg">Update Tag</h1>
                          </div>
                        </div>

                        <div class="card-mail  mt-5  mb-6">
                         
                          <form method="post">
                            <div class="flex">
                              <input type="text" name="name" id="name" class=" border-l border-t border-b border-gray-200 rounded-l-md w-full text-base md:text-lg px-3 py-2 focus:outline-none" placeholder="Tag Name">
                              <button type="submit" class="bg-blue-500 hover:bg-blue-600 hover:border-violet-600 text-white font-bold capitalize px-3 py-2 text-base md:text-lg rounded-r-md border-t border-r border-b border-violet-500" id="editT">Update</button>
                              </form>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
          </div>
        
        </main>

<script defer src="<?php echo URLROOT?>/js/tag.js"></script>
    

  <?php require APPROOT."/views/incFile/footer.php"; ?>