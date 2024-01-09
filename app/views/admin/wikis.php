<?php require APPROOT."/views/incFile/header.php"; ?>
<?php require APPROOT."/views/incFile/sideBar.php"; ?>
<main class="flex-1">
        <div class="py-6">
          <div class=" flex justify-between max-w-7xl mx-auto px-4 sm:px-6 md:px-8">
            <h1 class="text-2xl font-bold text-gray-900">Categories</h1>
            <div>
            <button class="w-full bg-gray-700 flex items-center justify-center border border-transparent rounded-md py-2 px-4 text-base font-medium text-white hover:bg-orange">Add Categorie</button>
            </div>
          </div>
          <div class="max-w-7xl mx-auto px-4 mt-10 sm:px-6 md:px-8">
            
            <table id="table">
                <thead class="bg-gray-700 text-white">
                    <th>ID</th>
                    <th>TITLE</th>
                    <th>CONTENT</th>
                    <th>IMAGE</th>
                    <th>USER</th>
                    <th>FROM CATEGORY</th>
                    <th>CREATED AT</th>
                </thead>
                <tbody class="bg-gray-300 bg-opacity-50">
                  

                </tbody>
            </table>
          
          </div>
        </div>
      </main>

<?php require APPROOT."/views/incFile/footer.php"; ?>