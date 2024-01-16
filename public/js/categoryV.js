$(document).ready(function() {
    function fetshCategory(response) {
        $("#category").empty();
        $.each(response, function(index, row){
            $("#category").append(`

            <div class="max-w-2xl overflow-hidden bg-white rounded-lg shadow-md dark:bg-gray-800">
            <img class="object-cover w-full h-56" src="http://localhost/wiki/img/" alt="wikiImg">
        
            <div class="p-6">
                <div>
                    <span class="text-xs font-medium text-blue-600 uppercase dark:text-blue-400">Created at: ${row.created_at}</span>
                    <h1 class="block mt-2 text-xl font-semibold text-gray-800 transition-colors duration-300 transform dark:text-white hover:text-white-600 cursor-pointer" tabindex="0" role="link">${row.categoryName}</h1>
                    <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">${row.categoryDesc}</p>
                </div>
        
               
            </div>
        
        </div>

            `);
        });
    }

   

    $.ajax({
        url : "http://localhost/wiki/admin/displayCategory",
        type: "GET",
        dataType: "json",
        success: function(response) {
            fetshCategory(response);
        }
        
    })
});