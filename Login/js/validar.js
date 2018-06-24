

$(document).ready(function () {
    $("input:submit").click(function () {
        return false;
    })


});

function showSignUp() {
    $('#formSigIn').hide('200');
    $('#formSignUp').show('200');
};

function showSignIn() {
    $('#formSignUp').hide('200');
    $('#formSigIn').show('200');

}
