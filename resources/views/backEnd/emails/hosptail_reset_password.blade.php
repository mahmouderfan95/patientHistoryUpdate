<!DOCTYPE html>
<html>
  <head>
    <title>Welcome in patientHistory</title>
  </head>
  <body>
    <h2>Reset password your email : {{$hosptail_reset->email}}</h2>
    <br/>
    Your token is :   Please click on the below link to verify your email account
    <br/>
    <p>Your account type is : {{$hosptail_reset->role}}</p>
    <a href="{{route('update_new_password_page',$hosptail_reset->role)}}">Reset password</a>
  </body>
</html>
