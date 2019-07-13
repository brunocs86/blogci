const BASE_URL = "192.168.33.10/codeigniter";

function clearErrors() {
    $(".has-error").removeClass("has-error");
    $(".has-block").html("");
}

function showErrors(error_list) {
    clearErrors();

    $.each(error_list, function (id, message) {
        $(id).parent().parent().addClass("has-error");
        $(id).parent().siblings(".help-block").html(message);
    })
}

function loadingImg(message="") {
    return "<i class='fa fa-circle-o-notch fa-spin'></i>&nbsp;" + message;
}