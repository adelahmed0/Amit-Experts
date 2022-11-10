function change(element) {
    element.parentElement.style.opacity = 0.5;
}


$(document).ready(function () {

    var request;


    $("#login-form").submit(function (event) {

        event.preventDefault();

        if (request) {
            request.abort();
        }
        var $form = $(this);

        var $inputs = $form.find("input");

        var serializedData = $form.serialize();

        $inputs.prop("disabled", true);

        request = $.ajax({
            url: "./login.php",
            type: "post",
            data: serializedData
        });

        request.done(function (response, textStatus, jqXHR) {
            console.log(response, textStatus, jqXHR);
            if (JSON.parse(response)['status']) {
                location.href = "admin.php";

                console.log("Hooray, it worked!");
            }
        });

        request.fail(function (jqXHR, textStatus, errorThrown) {

            console.error(
                "The following error occurred: " +
                textStatus, errorThrown
            );
        });

        request.always(function () {
            
            $inputs.prop("disabled", false);
        });

    });
});




