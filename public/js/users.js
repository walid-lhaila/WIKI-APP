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
                    <td>
                        <button class="text-yellow-600">update</button>
                        <button class="text-red-600">delete</button>
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
});