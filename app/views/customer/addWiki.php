<?php require APPROOT . '/views/incFile/header.php'; ?>
<?php require APPROOT . '/views/incFile/navBar.php'; ?>

<!-- component -->
<!--
  UI Design Prototype
  Link : https://dribbble.com/shots/10452538-React-UI-Components
-->
<div class="">
<div class="bg-gray-200 mt-14 py-8 flex flex-col justify-center ">
  <div class="relative py-3 sm:max-w-xl sm:mx-auto">
    <div class="relative px-4 py-10 bg-white w-[500px] shadow rounded-3xl sm:p-10">
      <div class="max-w-md mx-auto">
      <form id="addWikiForm" method="post">
                    <div class="flex items-center space-x-5">
                        <div class="flex items-center pl-2 font-semibold text-xl text-gray-700">
                            <h2 class="">Add Wiki</h2>
                        </div>
                    </div>
                    <div class="divide-y divide-gray-200">
                        <div class="py-8 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7">
                            <div class="flex flex-col">
                                <label class="leading-loose">Title</label>
                                <input type="text" id="title" name="title" class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600" placeholder="Event title">
                                <p id="titleErr" class="text-red-500 text-sm mt-1"></p>
                            </div>
                            <div class="flex flex-col">
                                <label class="leading-loose">Content</label>
                                <input type="text" id="content" name="content" class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600" placeholder="Optional">
                                <p id="contentErr" class="text-red-500 text-sm mt-1"></p>
                            </div>
                            <div id="tagsBox" class="flex gap-[10px] wikiTags">
                                <!-- Tags will be dynamically populated here -->
                            </div>
                            <div class="flex flex-col">
                                <label class="leading-loose">Category</label>
                                <select id="categoryBox" name="category" class="focus:outline-none shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 bg-gray-50 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light">
                                    <option value="">Select Category</option>
                                </select>
                                <p id="categoryErr" class="text-red-500 text-sm mt-1"></p>
                            </div>
                        </div>
                        <div class="pt-4 flex items-center space-x-4">
                            <p id="wikiErr" class="font-medium text-red-500"></p>
                            <p id="validation" class="font-medium text-violet-500"></p>
                            <button class="flex justify-center items-center w-full text-gray-900 px-4 py-3 rounded-md focus:outline-none">
                                <svg class="w-6 h-6 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg> Cancel
                            </button>
                            <button id="submitForm" class="bg-blue-500 flex justify-center items-center w-full text-white px-4 py-3 rounded-md focus:outline-none">Add New Wiki</button>
                        </div>
                    </div>
                </form>
      </div>
    </div>
  </div>
</div>
</div>

<script defer src="<?php echo URLROOT?>/js/tag.js"></script>
<script defer src="<?php echo URLROOT?>/js/category.js"></script>
<script defer src="<?php echo URLROOT?>/js/postWiki.js"></script>

</body>


