//Contact

$(function(){
    $('#formContact').on('submit', function(e){
        e.preventDefault();
        //var
        const url =$('#submit').data('url');
        let name = $('#name').val();
        let mail = $('#mail').val();
        let subject = $('#subject').val();
        let message = $('#message').val();
        let error_name = '';
        let error_mail = '';
        let error_subject = '';
        let error_message = '';
        let regex = /[\w-\.]{2,}@([\w-]{2,}\.)*([\w-]{2,}\.)[\w-]{2,4}/;

        // field name
        if($.trim(name).length == 0){
            error_name = 'Please enter your name';
            $('#error_name').text(error_name);
        }else{
            error_name = '';
            $('#error_name').text(error_name);
        }

        // field e-mail
        if(!regex.test(mail.trim())) {
            error_mail = 'Please enter a valid email';
            $('#error_mail').text(error_mail);
        }else{
            error_mail = '';
            $('#error_mail').text(error_mail);
        }

        // field subject
        if($.trim(subject).length == 0){
            error_subject = 'Please a subject';
            $('#error_subject').text(error_subject);
        }else{
            error_subject = '';
            $('#error_subject').text(error_subject);
        }

        // field subject
        if($.trim(message).length == 0){
            error_message = 'Please a message';
            $('#error_message').text(error_message);
        }else{
            error_message = '';
            $('#error_message').text(error_message);
        }

        if(error_name != '' || error_mail != '' || error_subject != '' || error_message != ''){
            return false;
        }else{
            $.ajax({
                url:url,
                method:'POST',
                data:{'name':name,'mail':mail,'subject':subject,'message':message},
                success: function (request){


                    if(request == 'error'){
                        Swal.fire({
                            icon: 'error',
                            confirmButtonColor: '#2d6f59',
                            title: 'Error',
                            text: 'Something went wrong!',
                        })
                    }else{
                        Swal.fire({
                            icon: 'success',
                            confirmButtonColor: '#2d6f59',
                            title: 'Thank you',
                            text: 'we have received your email, we will contact you as soon as possible',
                        })
                    }

                    $("#name").val("");
                    $("#mail").val("");
                    $("#subject").val("");
                    $("#message").val("");

                }
            });
        }
    });

    // suscription 
    $('#subscribe-form').on('submit', function(e){
        e.preventDefault();

        let subscribeMail = $("#subscribeMail").val();
        let url = $('#subscribeSubmit').data('url');

        if(subscribeMail !== ""){
            $.ajax({
                url:url,
                method:'POST',
                data:{'subscribeMail':subscribeMail},
                success: function (request){
                    if(request.success){
                        Swal.fire({
                            icon: 'success',
                            confirmButtonColor: '#2d6f59',
                            title: 'Thank you',
                            text: 'we have received your subscription.',
                        })
                    }else{
                        Swal.fire({
                            icon: 'error',
                            confirmButtonColor: '#2d6f59',
                            title: 'Error',
                            text: 'Something went wrong!',
                        })
                    }
                    $("#subscribeMail").val("");
                }
            });
        }else if(subscribeMail === ""){
            Swal.fire({
                icon: 'error',
                confirmButtonColor: '#2d6f59',
                title: 'Error',
                text: 'Enter a valid email',
            })
        }
    });
});
