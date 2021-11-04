$(document).ready(function () {
    $.ajax({
        type: "get",
        url: "http://127.0.0.1:8000/api/producto",
        success: function (response) {
            console.log(response)
        }
    });
});