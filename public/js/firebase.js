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
    var numberval = document.getElementById('number').value;
    var appVerifier  = window.recaptchaVerifier;
    var ranamCode = ra
    firebase.auth().signInWithPhoneNumber(numberval, appVerifier)
    .then(function (confirmationResult) {
      // SMS sent. Prompt user to type the code from the message, then sign the
      // user in with confirmationResult.confirm(code).
      window.confirmationResult = confirmationResult;
      alert('msg is sent');
    }).catch(function (error) {
      // Error; SMS not sent
      // ...
      console.log(error.message);
    });
}
function codevervcation(){
    var code = document.getElementById('verfcation').value;
    confirmationResult.confirm(code).then(function(result){
        alert('success register');
        var user = result.user;
        console.log(user);
    }).catch(function(error){
        console.log(error.message);
    });
    var credential = firebase.auth.PhoneAuthProvider.credential(confirmationResult.verificationId, code);
    firebase.auth().signInWithCredential(credential);
}

