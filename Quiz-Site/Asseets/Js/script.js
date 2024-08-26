$(document).ready(function () {
    validate();
});

function validate() {
    $("#userName").click(function () {
        var name = $("#name").val();

        if (name == "") {
            $("#errorName").text("Please enter your name");
            $('#name').css('border', 'solid 1px red');
        }

        else {
            localStorage.setItem("myValue", name);
            window.location.href ="index-1.php";
        }
    });
}

function myInput() {
    $("#errorName").text(" ");
    $('#name').css('border', 'solid 1px green');
}