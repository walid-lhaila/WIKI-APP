$(document).ready(function() {
    function fetshCategory(response) {
        $("#editForm").empty();
        $.each(response, function(index, row){
            $("#editForm").append(`

           
                <!-- Update Form (hidden by default) -->
                            <form class="update-form  bg-yellow-900 ">
                            <!-- Include input fields with old data -->
                            <input type="hidden" name="categoryId" value="${row.categoryId}">
                            
                            <div class="mb-4">
                                <label for="categoryName" class="text-white text-sm font-medium block">Category Name:</label>
                                <input type="text" name="categoryName" value="${row.categoryName}" class="w-full px-3 py-2.5 text-sm text-gray-900 bg-transparent border-b-2 border-gray-300 focus:outline-none focus:border-orange-600 text-white">
                            </div>
                            
                            <div class="mb-4">
                                <label for="categoryDesc" class="text-white text-sm font-medium block">Description:</label>
                                <textarea name="categoryDesc" class="w-full px-3 py-2.5 text-sm text-gray-900 bg-transparent border-b-2 border-gray-300 focus:outline-none focus:border-orange-600 text-white">${row.categoryDesc}</textarea>
                            </div>
                        
                            <div class="flex justify-between">
                                <button type="button" class="update-btn bg-orange-600 hover:bg-orange-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center text-white">Update</button>
                                <button type="button" class="cancel-btn text-white text-sm font-medium">cancel</button>
                            </div>
                        </form>


            `);
        });
    }
    $("#editForm").on("click", ".edit-btn", function() {
        // Hide all update forms
        $(".update-form").hide();
    
        // Show the clicked category's update form
        var form = $(this).closest("div").find(".update-form");
        form.show();
    
        // Show the edit form container in the center of the page
        $("#edit-form-container").removeClass("scale-0").addClass("scale-100");
    });
    
    $(document).on("click", "#rmForm", function() {
        // Hide the edit form container when Cancel is clicked
        $("#edit-form-container").removeClass("scale-100").addClass("scale-0");
    });
    
    $("#editForm").on("click", ".update-btn", function() {
        var form = $(this).closest("form.update-form");
        var categoryId = form.find('input[name="categoryId"]').val();
        var categoryName = form.find('input[name="categoryName"]').val();
        var categoryDesc = form.find('textarea[name="categoryDesc"]').val();
    
        // Perform AJAX request to update category
        $.ajax({
            url: "http://localhost/wiki/admin/updateCategory",
            type: "POST",
            data: {
                categoryId: categoryId,
                categoryName: categoryName,
                categoryDesc: categoryDesc
            },
            dataType: "json",
            success: function(response) {
                fetshCategory(response);
                // Hide the update form after successful update
                form.hide();
            }
        });
    });


    
});