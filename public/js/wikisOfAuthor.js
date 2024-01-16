$(document).ready(function() {


    $("#wiki").on("click",'.deleteWiki',function(){
        let id = $(this).closest(".delete-container").data("id");
        // alert(id);
       $.ajax({
           url  : "http://localhost/wiki/customer/deleteWiki",
           type : "POST",
           dataType : "json",
           data : {
               'delete' : 1,
               'id' : id
           },
           success: function(response){
               fetshWiki(response)
           }  
       })
   })

    function fetshWiki(response){
        $("#wiki").empty();
        $.each(response, function(index, row){
            $("#wiki").append(`
            <div class="w-[450px] px-8 py-4 bg-white rounded-lg shadow-md dark:bg-gray-800">
    <div class="flex items-center justify-between">
        <span class="text-sm font-light text-gray-600 dark:text-gray-400">${row.created_at}</span>
        <a class="px-3 py-1 text-sm font-bold text-gray-100 transition-colors duration-300 transform bg-gray-600 rounded cursor-pointer hover:bg-gray-500" tabindex="0" role="button">${row.categoryName}</a>
    </div>

    <div class="mt-2">
        <a href="#" class="text-xl font-bold text-gray-700 dark:text-white hover:text-gray-600 dark:hover:text-gray-200 hover:underline" tabindex="0" role="link">${row.title}</a>
        <p class="mt-2 text-gray-600 dark:text-gray-300">${row.content}</p>
    </div>

    <div class="flex items-center justify-between mt-4 delete-container" data-id="${row.wikiId}">
        <button type="button" class="px-[0.4rem] py-[0.2rem] bg-red-500 text-white fonr-medium rounded lg deleteWiki">Delete</button>
        <div class="flex items-center">
            <img class="hidden object-cover w-10 h-10 mx-4 rounded-full sm:block" src="https://images.unsplash.com/photo-1502980426475-b83966705988?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=40&q=80" alt="avatar">
            <a class="font-bold text-gray-700 cursor-pointer dark:text-gray-200" tabindex="0" role="link">${row.username}</a>
        </div>
    </div>
</div>
            
            `);
        });
    }

    $.ajax({
        url: "http://localhost/wiki/customer/displayWikisOfAuthor",
        type: "GET",
        dataType: "json",
        success: function(response){
            fetshWiki(response)
        }

    })


});