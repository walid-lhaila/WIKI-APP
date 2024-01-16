$(document).ready(function() {
    function fetshWiki(response){
        $("#wiki").empty();
        $.each(response, function(index, row){
            $("#wiki").append(`
            <div class="max-w-2xl overflow-hidden bg-white rounded-lg shadow-md dark:bg-gray-800">
            <img class="object-cover w-full h-56" src="http://localhost/wiki/img/${row.wikiImg}" alt="wikiImg">
        
            <div class="p-6">
                <div>
                    <span class="text-xs font-medium text-blue-600 uppercase dark:text-blue-400">Category: ${row.categoryName}</span>
                    <h1 class="block mt-2 text-xl font-semibold text-gray-800 transition-colors duration-300 transform dark:text-white hover:text-white-600 cursor-pointer" tabindex="0" role="link">${row.title}</h1>
                    <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">${row.content}</p>
                </div>
        
                <div class="mt-4">
                    <div class="flex items-center">
                        <div class="flex items-center">
                            <img class="object-cover h-10 rounded-full" src="http://localhost/wiki/img/${row.userImg}" alt="userImg">
                            <a href="#" class="mx-2 font-semibold text-gray-700 dark:text-gray-200" tabindex="0" role="link">${row.username}</a>
                        </div>
                        <span class="mx-1 text-xs text-gray-600 dark:text-gray-300">${row.created_at}</span>
                    </div>
                </div>
            </div>
            <div class="flex justify-center gap-8 mt-1">
                    
                    
                    
                <div>
                <form class="delete-form">
                    <input type="hidden" name="wikiId" value="${row.wikiId}">
                    <button type="button" class="text-red-600 delete-btn">
                        <svg class="w-6 h-6 dark:text-red-500 hover:text-red-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h16M7 8v8m4-8v8M7 1h4a1 1 0 0 1 1 1v3H6V2a1 1 0 0 1 1-1ZM3 5h12v13a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V5Z"/>
                        </svg>
                    </button>
                </form>
                    </div>
                </div>


        </div>
            
            `);
        });
    }

    $("#wiki").on("click", ".delete-btn", function(){
        var form = $(this).closest("form.delete-form");
        var wikiId = form.find('input[name="wikiId"]').val();

        $.ajax({
            url: 'http://localhost/wiki/admin/deleteWiki',
            type: 'POST',
            data: {
                'delete': 1,
                'wikiId': wikiId
            },
            dataType: 'json',
            success: function(response){
                fetshWiki(response);
            }
        });
    });

    $.ajax({
        url: "http://localhost/wiki/admin/displayWiki",
        type: "GET",
        dataType: "json",
        success: function(response){
            fetshWiki(response);
        }

    })

});