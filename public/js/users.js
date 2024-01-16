$(document).ready(function() {
    function fetchUsers(response) {
        $("#users").empty();
        $.each(response, function(index, row) {
            $("#users").append(`
                  <tr>
                    <td>${row.userId}</td>
                    <td>${row.username}</td>
                    <td>${row.email}</td>
                    <td>${row.userImg}</td>
                    <td>${row.created_at}</td>
                    <td class="flex gap-3">

                    

                <div>
                <form class="delete-form mt-1">
                    <input type="hidden" name="userId" value="${row.userId}">
                    <button type="button" class="text-red-600 delete-btn">
                        <svg class="w-6 h-6 dark:text-red-500 hover:text-red-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h16M7 8v8m4-8v8M7 1h4a1 1 0 0 1 1 1v3H6V2a1 1 0 0 1 1-1ZM3 5h12v13a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V5Z"/>
                        </svg>
                    </button>
                </form>
                    </div>
                    </td>
                  </tr>
            `);
        });
    }

    $.ajax({
        url: "http://localhost/wiki/admin/displayUser",
        type: "GET",
        dataType: "json",
        success: function(response) {
            fetchUsers(response);
        },
        error: function(error) {
            console.error("Error fetching users:", error);
        }
    });

    $("#users").on("click", ".delete-btn", function(){
        var form = $(this).closest("form.delete-form");
        var userId = form.find('input[name="userId"]').val();
    
        $.ajax({
            url: "http://localhost/wiki/admin/deleteUser",
            type: "POST",
            data: { 
                'delete' : 1,
                'userId': userId 
            },
            dataType: "json",
            success: function(response){
                fetchUsers(response);
            }
        });
    });


    $.ajax({
        url: "http://localhost/wiki/admin/countUsers",
        type: "GET",
        dataType: "json",
        success: function(response){
            $("#countUsers").text(response.userCount);
        },
        error: function(error){
            console.error("Error fetching user count: ", error);
        }
    });
});




   


