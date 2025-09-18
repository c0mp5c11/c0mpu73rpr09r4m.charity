$(function () {
    $('.redirect').click(function () {
        redirect(this);
    });
});

function redirect(x) {
    var url = $(x).data('url');
    document.location.href = url;
}