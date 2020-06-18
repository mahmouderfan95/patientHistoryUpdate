window.onload = function() {
    // Listening for auth state changes.
    // firebase.auth().onAuthStateChanged(function(user) {
    //     // console.log(firebase.auth());
    //   if (user) {
    //     // User is signed in.
    //     var uid = user.uid;
    //     var email = user.email;
    //     var photoURL = user.photoURL;
    //     var phoneNumber = user.phoneNumber;
    //     var isAnonymous = user.isAnonymous;
    //     var displayName = user.displayName;
    //     var providerData = user.providerData;
    //     var emailVerified = user.emailVerified;
    //   }
    //   updateSignInButtonUI();
    //   updateSignInFormUI();
    //   updateSignOutButtonUI();
    //   updateSignedInUserStatusUI();
    //   updateVerificationCodeFormUI();
    // });
    // document.getElementById('sign-out-button').addEventListener('click', onSignOutClick);
    // document.getElementById('phone-number').addEventListener('keyup', updateSignInButtonUI);
    // document.getElementById('phone-number').addEventListener('change', updateSignInButtonUI);
    // document.getElementById('verification-code').addEventListener('keyup', updateVerifyCodeButtonUI);
    // document.getElementById('verification-code').addEventListener('change', updateVerifyCodeButtonUI);
    // document.getElementById('verification-code-form').addEventListener('submit', onVerifyCodeSubmit);
    // document.getElementById('cancel-verify-code-button').addEventListener('click', cancelVerification);

    window.recaptchaVerifier = new firebase.auth.RecaptchaVerifier('sign-in-button', {
      'size': 'invisible',
      'callback': function(response) {
        onSignInSubmit();
      }
    });

    recaptchaVerifier.render().then(function(widgetId) {
      window.recaptchaWidgetId = widgetId;
      updateSignInButtonUI();
    });
  };
  function onSignInSubmit() {
    if (isPhoneNumberValid()) {
      window.signingIn = true;
      updateSignInButtonUI();
      var phoneNumber = getPhoneNumberFromUserInput();
      var appVerifier = window.recaptchaVerifier;
      firebase.auth().signInWithPhoneNumber(phoneNumber, appVerifier)
          .then(function (confirmationResult) {

            window.confirmationResult = confirmationResult;
            window.signingIn = false;
            updateSignInButtonUI();
            updateVerificationCodeFormUI();
            updateVerifyCodeButtonUI();
            updateSignInFormUI();
          }).catch(function (error) {

            console.error('Error during signInWithPhoneNumber', error);
            window.alert('Error during signInWithPhoneNumber:\n\n'
                + error.code + '\n\n' + error.message);
            window.signingIn = false;
            updateSignInFormUI();
            updateSignInButtonUI();
          });
    }
  }
  function onVerifyCodeSubmit(e) {
    e.preventDefault();
    if (!!getCodeFromUserInput()) {
      window.verifyingCode = true;
      updateVerifyCodeButtonUI();
      var code = getCodeFromUserInput();
      confirmationResult.confirm(code).then(function (result) {
        // User signed in successfully.
        var user = result.user;
        window.verifyingCode = false;
        window.confirmationResult = null;
        updateVerificationCodeFormUI();
      }).catch(function (error) {
        // User couldn't sign in (bad verification code?)
        console.error('Error while checking the verification code', error);
        window.alert('Error while checking the verification code:\n\n'
            + error.code + '\n\n' + error.message);
        window.verifyingCode = false;
        updateSignInButtonUI();
        updateVerifyCodeButtonUI();
      });
    }
  }
  // coding ...
