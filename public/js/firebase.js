window.onload = function(){
    render();
}
function render(){
    window.recaptchaVerifier = new firebase.auth.RecaptchaVerifier('recaptcha-container');
    recaptchaVerifier.render().then(function(widgetId) {
        window.recaptchaWidgetId = widgetId;
    });
}
function phoneAuth(){
    // $('#register').submit(function(event) {
    //     event.preventDefault();
    //     event.stopImmediatePropagation();
    //     var career_submit = document.getElementById("save");
    //     //career_submit.disabled = true;
    //     console.log('login');
    //     var formData = new FormData(this);
    //     $.ajax({
    //             type: 'POST',
    //             url: 'register',
    //             dataType: 'json',
    //             data: formData,
    //             beforeSend: function() {
    //                 console.log("before");
    //                 $("#loading").show();
    //             },
    //             success: function (response) {
    //                     console.log("after");
    //                     if(response.errors) {
    //                         console.log(response.errors);
    //                         var error_msg = document.getElementById("error_msg");
    //                         $('#error_msg').removeClass("alert alert-success");
    //                         $('#error_msg').addClass( "alert alert-danger hideit" );
    //                         error_msg.innerHTML= response.errors;
    //                                 $("#loading").hide();
    //                                 $("#error_msg").fadeIn(2000);
    //                     }

    //                     if(response.message) {
    //                         //console.log(response.message);
    //                         var error_msg = document.getElementById("error_msg");
    //                         $('#error_msg').removeClass("alert alert-danger hideit");
    //                         $('#error_msg').addClass( "alert alert-success hideit" );
    //                         //error_msg.innerHTML= response.message;
    //                         $("#loading").hide();
    //                         // window.location = base_url;
    //                         console.log(response.code);
    //                         console.log(response.mobile);
    //                         console.log(response.message);
                    var numberval = document.getElementById('mobile-number').textContent;
                    console.log(numberval);
                    var appVerifier  = window.recaptchaVerifier;
                    firebase.auth().signInWithPhoneNumber(numberval, appVerifier)
                    .then(function (confirmationResult) {
                    // SMS sent. Prompt user to type the code from the message, then sign the
                    // user in with confirmationResult.confirm(code).
                    window.confirmationResult = confirmationResult;
                    alert('msg is sent');
                    console.log(confirmationResult);
                    $('.show-verify').show();
                    $('.reca-div').hide();
                    // $('#error_msg').removeClass("alert alert-danger hideit");
                    // $('#error_msg').addClass( "alert alert-success hideit" );
                    //error_msg.innerHTML= response.message;
                    // $("#loading").hide();

                    }).catch(function (error) {
                    // Error; SMS not sent
                    // ...
                    console.log(error.message);
                    });
                }
                /* end of function phone auth */
                /* function codevervcation */
                function codevervcation(){
                    //     // $('#ve').submit(function(event) {
                    //         // event.preventDefault();
                    //         // event.stopImmediatePropagation();
                    //         //var career_submit = document.getElementById("save");
                    //         //career_submit.disabled = true;
                                console.log('login');
                                    //e.preventDefault();
                                    var code = document.getElementById('verify-code').value;
                                    confirmationResult.confirm(code).then(function(result){
                                        console.log('success register');
                                        // window.location.href = "{{url('/index')}}";
                                        $('.suc-Reg').show();
                                        // $.ajax({
                                        //     method : 'POST',
                                        //     url:'{{route("patient_verifcationCode")}}',
                                        //     data:{
                                        //         code:code,

                                        //     },
                                        //     dataType:'text',
                                        //     success:function(){
                                        //         console.log('success message');
                                        //         window.location = "{{url('/index')}}";
                                        //     },
                                        //     error:function(){
                                        //         console.log('error message');
                                        //     }
                                        //     });
                                        var user = result.user;
                                        console.log(user);
                                    }).catch(function(error){
                                        $(".danger-Reg").show().text(error.message);
                                        // console.log(error.message);
                                    });
                                    var credential = firebase.auth.PhoneAuthProvider.credential(confirmationResult.verificationId, code);
                                    firebase.auth().signInWithCredential(credential);

                        }
                        /* end of function */








    /* end of function one */
    /* send request ajax */
    // var formData = new FormData($('#verifcation_code'));








