document.addEventListener('DOMContentLoaded', () => {
    console.log("Home JS");
    $.ajax({
        url: "./app/controllers/GetUsersDataController.php",
        type: "GET",
        success: function (response) {
            console.log("AAAAAA",response);
        }
    });

});