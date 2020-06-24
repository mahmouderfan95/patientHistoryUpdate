<!DOCTYPE html>
<html>
  <head>
    <title>Welcome in patientHistory</title>
  </head>
  <body>
    <h2>Reset password your email : {{$labs_reset_password->email}}</h2>
    <br/>
    Your token is :   Please click on the below link to verify your email account
    <br/>
    <p>Your account type is : {{$labs_reset_password->role}}</p>
    <a href="{{route('update_new_password_page',$labs_reset_password->role)}}">Reset password</a>
  </body>
</html>
