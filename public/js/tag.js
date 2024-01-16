    $(document).ready(function() {
        function fetshTag(response){
            $("#tags").empty();
            $.each(response, function(index, row){
                $("#tags").append(`

                <div class="w-72 h-96 max-w-xs overflow-hidden bg-white rounded-lg shadow-lg dark:bg-gray-800">
                    <img class="object-cover w-full h-56" src="<?= URLROOT =?>/img/upload.jpg" alt="tag">

                    <div class="py-5 text-center">
                        <h1 class="block text-xl font-bold text-gray-800 dark:text-white" tabindex="0" role="link">${row.tagName}</h1>
                        <span class="text-sm text-gray-700 dark:text-gray-200">${row.created_at}</span>
                    </div>
                    <div class="flex justify-center gap-8 mt-4">
                    
                    <button class="edit">
                    <svg class="w-6 h-6 dark:text-yellow-400 hover:text-yellow-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                      <path d="M12.687 14.408a3.01 3.01 0 0 1-1.533.821l-3.566.713a3 3 0 0 1-3.53-3.53l.713-3.566a3.01 3.01 0 0 1 .821-1.533L10.905 2H2.167A2.169 2.169 0 0 0 0 4.167v11.666A2.169 2.169 0 0 0 2.167 18h11.666A2.169 2.169 0 0 0 16 15.833V11.1l-3.313 3.308Zm5.53-9.065.546-.546a2.518 2.518 0 0 0 0-3.56 2.576 2.576 0 0 0-3.559 0l-.547.547 3.56 3.56Z"/>
                      <path d="M13.243 3.2 7.359 9.081a.5.5 0 0 0-.136.256L6.51 12.9a.5.5 0 0 0 .59.59l3.566-.713a.5.5 0 0 0 .255-.136L16.8 6.757 13.243 3.2Z"/>
                    </svg>
                  </button>
                <div>
                <form class="delete-form">
                    <input type="hidden" name="tagId" value="${row.tagId}">
                    <button type="button" class="text-red-600 delete-btn">
                        <svg class="w-6 h-6 dark:text-red-500 hover:text-red-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h16M7 8v8m4-8v8M7 1h4a1 1 0 0 1 1 1v3H6V2a1 1 0 0 1 1-1ZM3 5h12v13a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V5Z"/>
                        </svg>
                    </button>
                </form>
                    </div>
                </div>
                </div>
                

                `)
            })
        }

        $("#closeEditForm").click(function(){
            $("#editTagForm").addClass("hidden");
            $("#name").val("");
        })

        let tagId ;

        $("#tags").on("click", ".edit", function () {
            $("#editTagForm").removeClass("hidden");
            let tagName = $(this).closest(".py-5").find("h1").text().trim();
            tagId = $(this).closest(".w-72").find('input[name="tagId"]').val();
            $("#name").val(tagName);
        });
        
        $("#editT").on("click", function () {
            let tagName = $("#name").val();
        
            $.ajax({
                url: "http://localhost/wiki/admin/updateTag",
                type: "POST",
                dataType: "json",
                data: {
                    'edit': 1,
                    'id': tagId,
                    'name': tagName
                },
                success: function (response) {
                    $("#editTagForm").addClass("hidden");
                    fetshTag(response);
                }
            });
        });

        
        $("#tags").on("click", ".delete-btn", function(){
            var form = $(this).closest("form.delete-form");
            var tagId = form.find('input[name="tagId"]').val();
        
            $.ajax({
                url: "http://localhost/wiki/admin/deleteTag",
                type: "POST",
                data: { 
                    'delete' : 1,
                    'tagId': tagId 
                },
                dataType: "json",
                success: function(response){
                    fetshTag(response);
                }
            });
        });
        
        
         
        
        $.ajax({
            url: "http://localhost/wiki/admin/displayTag",
            type : "GET",
            dataType : "json",
            success: function(response){
                fetshTag(response);
            }
        })
    });
    $(document).ready(function() {
        function fetchTag(response) {
            $("#tagsBox").empty();
            $.each(response, function(index, row) {
                $("#tagsBox").append(`
                <div class="flex items-center ps-3">
                <input type="checkbox" value="${row.tagId}" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                <label class="w-full py-3 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">${row.tagName}</label>
                 </div>
                `);
            });
        }
    
        $.ajax({
            url: "http://localhost/wiki/admin/displayTag",
            type: "GET",
            dataType: "json",
            success: function(response) {
                fetchTag(response);
            }
        });
    });


  
