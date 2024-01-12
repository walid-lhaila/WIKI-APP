$(document).ready(function() {
    function fetshCategory(response) {
        $("#category").empty();
        $.each(response, function(index, row){
            $("#category").append(`

            <div class="w-96 px-8 py-4 bg-white rounded-lg shadow-md dark:bg-gray-800">
            <div class="flex items-center justify-between">
                <span class="text-sm font-light text-gray-600 dark:text-gray-400">${row.created_at}</span>
                <h1 class="px-3 py-1 text-sm font-bold text-gray-100 transition-colors duration-300 transform bg-cyan-600 rounded cursor-pointer  hover:bg-orange-600">Category</h1>
            </div>

            <div class="mt-2">
                <p class="text-xl font-bold text-gray-700 dark:text-white hover:text-gray-700 dark:hover:text-gray-200 ">${row.categoryName}</p>
                <p class="mt-2 text-gray-600 dark:text-gray-300">${row.categoryDesc}</p>
            </div>

            <div class="flex justify-center gap-8 mt-4">
            <button>
            <svg class="w-6 h-6 dark:text-yellow-400 hover:text-yellow-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                <path d="M12.687 14.408a3.01 3.01 0 0 1-1.533.821l-3.566.713a3 3 0 0 1-3.53-3.53l.713-3.566a3.01 3.01 0 0 1 .821-1.533L10.905 2H2.167A2.169 2.169 0 0 0 0 4.167v11.666A2.169 2.169 0 0 0 2.167 18h11.666A2.169 2.169 0 0 0 16 15.833V11.1l-3.313 3.308Zm5.53-9.065.546-.546a2.518 2.518 0 0 0 0-3.56 2.576 2.576 0 0 0-3.559 0l-.547.547 3.56 3.56Z"/>
                <path d="M13.243 3.2 7.359 9.081a.5.5 0 0 0-.136.256L6.51 12.9a.5.5 0 0 0 .59.59l3.566-.713a.5.5 0 0 0 .255-.136L16.8 6.757 13.243 3.2Z"/>
            </svg>
                </button>
            <div>
            <form class="delete-form">
                <input type="hidden" name="categoryId" value="${row.categoryId}">
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

    $("#category").on("click", ".delete-btn", function() {
        var form = $(this).closest("form.delete-form");
        var categoryId = form.find('input[name="categoryId"]').val();

        $.ajax({
            url: "http://localhost/wiki/admin/deleteCategory",
            type: "POST",
            data: { categoryId: categoryId },
            dataType: "json",
            success: function(response) {
                fetshCategory(response);
            }
        });
    });

    $.ajax({
        url : "http://localhost/wiki/admin/displayCategory",
        type: "GET",
        dataType: "json",
        success: function(response) {
            fetshCategory(response);
        }
        
    })
});