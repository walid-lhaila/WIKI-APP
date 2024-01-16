<?php require APPROOT."/views/incFile/header.php"; ?>
<?php require APPROOT."/views/incFile/sideBar.php"; ?>



<!---===================== FIRST ROW CONTAINING THE  STATS CARD STARTS HERE =============================-->
  <div class="flex justify-center bg-gray-200 py-10 p-14">
    <!---== First Stats Container ====--->
  <div class="container mx-auto pr-4">
    <div class="w-72 bg-white max-w-xs mx-auto rounded-sm overflow-hidden shadow-lg hover:shadow-2xl transition duration-500 transform hover:scale-100 cursor-pointer">
      <div class="h-20 bg-red-400 flex items-center justify-between">
        <p class="mr-0 text-white text-lg pl-5">USERS</p>
      </div>
      <div class="flex justify-between px-5 pt-6 mb-2 text-sm text-gray-600">
        <p>TOTAL</p>
      </div>
      <p id="countUsers" class="py-4 text-3xl ml-5"><?php echo $data['userCount']; ?></p>
      <!-- <hr > -->
    </div>
  </div>
      <!---== First Stats Container ====--->

    <!---== Second Stats Container ====--->
  <div class="container mx-auto pr-4">
    <div class="w-72 bg-white max-w-xs mx-auto rounded-sm overflow-hidden shadow-lg hover:shadow-2xl transition duration-500 transform hover:scale-100 cursor-pointer">
      <div class="h-20 bg-blue-500 flex items-center justify-between">
        <p class="mr-0 text-white text-lg pl-5">WIKIS</p>
      </div>
      <div class="flex justify-between px-5 pt-6 mb-2 text-sm text-gray-600">
        <p>TOTAL</p>
      </div>
      <p class="py-4 text-3xl ml-5"><?php echo $data['wikiCount']; ?></p>
      <!-- <hr > -->
    </div>
  </div>
    <!---== Second Stats Container ====--->

  <!---== Third Stats Container ====--->
  <div class="container mx-auto pr-4">
    <div class="w-72 bg-white max-w-xs mx-auto rounded-sm overflow-hidden shadow-lg hover:shadow-2xl transition duration-500 transform hover:scale-100 cursor-pointer">
      <div class="h-20 bg-purple-400 flex items-center justify-between">
        <p class="mr-0 text-white text-lg pl-5">CATEGORYS</p>
      </div>
      <div class="flex justify-between pt-6 px-5 mb-2 text-sm text-gray-600">
        <p>TOTAL</p>
      </div>
      <p class="py-4 text-3xl ml-5"><?php echo $data['categoryCount']; ?></p>
      <!-- <hr > -->
    </div>
  </div>


  <div class="container mx-auto pr-4">
    <div class="w-72 bg-white max-w-xs mx-auto rounded-sm overflow-hidden shadow-lg hover:shadow-2xl transition duration-500 transform hover:scale-100 cursor-pointer">
      <div class="h-20 bg-purple-400 flex items-center justify-between">
        <p class="mr-0 text-white text-lg pl-5">TAGS</p>
      </div>
      <div class="flex justify-between pt-6 px-5 mb-2 text-sm text-gray-600">
        <p>TOTAL</p>
      </div>
      <p class="py-4 text-3xl ml-5"><?php echo $data['tagCount']; ?></p>
      <!-- <hr > -->
    </div>
  </div>
  <!---== Third Stats Container ====--->

  <!---== Fourth Stats Container ====--->
 
    <!--==== frist div ends here ====--->

    </div>
<!---------===================== SECOND ROW CONTAINING THE TABLE STATS ENDS HERE =============================-->
</body>
</html>





<?php require APPROOT."/views/incFile/footer.php"; ?>

