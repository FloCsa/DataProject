$(function() {

    $('#login-form-link').click(function(e) {
        $("#login-form").delay(100).fadeIn(100);
        $("#register-form").fadeOut(100);
        $('#register-form-link').removeClass('active');
        $(this).addClass('active');
        e.preventDefault();
    });
    $('#register-form-link').click(function(e) {
        $("#register-form").delay(100).fadeIn(100);
        $("#login-form").fadeOut(100);
        $('#login-form-link').removeClass('active');
        $(this).addClass('active');
        e.preventDefault();
    });

});







jQuery(document).ready(function() {

    var registerModal = $('#register-form');



    //so we have some input fields
    registerModal.bind('submit', function(e, that) {
        e.preventDefault();

        registerModal.find('.btn-primary').prop('disabled', true); //prevent sending the formular again while we check it

        hasError = false; //we are positive...

        if(typeof that === 'undefined') {
            that = registerModal.find('.btn-primary').get(0);
        }

        var nonEmptyFields = ['#email1', '#password1', '#confirm-password'];

        for(i = 0; i < nonEmptyFields.length; i++) {
            if($(nonEmptyFields[i]).val() == '') {
                hasError = true;
                $(nonEmptyFields[i]).closest('.form-group').addClass('has-error');
            }
        }

        if(!hasError) {
            //check if pwd is long enough...
            if($('#password1').val().length < 8) {
                $('#password1').addClass('has-error');
                hasError = true;
            }
            else {

                if($('#password1').val() != $('#confirm-password').val()) {
                    $('#confirm-password').addClass('has-error');
                    hasError = true;

                } else {
                    //everything fine

                    $.ajax({
                        'url': $(this).attr('action'),
                        'method': $(this).attr('method'),
                        'data': $(this).serialize(),
                        'dataType': "json",
                        'success': function (receivedData) {

                            if(receivedData.result)
                            {
                                toastr.success(receivedData.message);

                                window.setTimeout(function() {
                                    location.reload();
                                }, 2500);

                            }
                            else
                            {
                                registerModal.find('.has-error').removeClass('has-error');

                                $.each(receivedData.data.errorFields, function(key, errorMsg) {
                                    $('#'+key).addClass('has-error');

                                    console.log(errorMsg);
                                    toastr.error(errorMsg);
                                });
                            }


                        }
                    });

                }
            }
        }




    });



});