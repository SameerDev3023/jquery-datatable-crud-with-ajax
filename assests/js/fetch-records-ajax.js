$(document).ready(function () {
  let BtnSubmit = document.querySelector("#btn-submit");
  let table = new DataTable("#myTable", {
    responsive: true,
    theme: "bootstrap",
    ajax: "includes/fetch-records.php",
    columns: [
      { data: "id" },
      {
        data: "image",
        render: function (data, type, row) {
          return '<img src="assests/uploads/' + data + '" width="100"/>';
        },
      },
      { data: "name" },
      { data: "email" },
      { data: "phone" },
      { data: "country" },
      { data: "state" },
      { data: "city" },

      { data: "pass" },
      {
        render: function (data, type, row) {
          return (
            '<button class="delete-btn btn btn-danger delete" data-id="' +
            row.id +
            '">DELETE</button>'
          );
        },
      },
      {
        render: function (data, type, row) {
          return (
            '<button class="edit-btn btn btn-success edit" data-id="' +
            row.id +
            '">EDIT</button>'
          );
        },
      },
    ],
  });
  $("#myTable").on("click", ".delete", function () {
    var id = $(this).data("id");
    $.ajax({
      url: "includes/delete.php",
      method: "post",
      data: { id: id },
      success: function (response) {
        $("#message").css("display", "block");
        $("#message").html("User deleted successfully.");
        table.ajax.reload();
        setTimeout(function () {
          $("#message").hide();
        }, 1000);
      },
    });
  });

  $("#myTable").on("click", ".edit", function () {
    var id = $(this).data("id");
    console.log(id);
    // Send AJAX request to get user data
    $.ajax({
      url: "includes/upate-records.php",
      type: "POST",
      data: { id: id },
      success: function (user) {
        // Populate the form fields with the user's data
        $("#update-wrapper").html(user);
        $("#update-wrapper").show(1000);
      },
    });
    // Show the modal dialog
   
  });
});
