<!DOCTYPE html>
<html>
  <head>
    <title>Welcome in patientHistory</title>
  </head>
  <body>
    <h2>Reset password your email : {{$reset->email}}</h2>
    <br/>
    Your token is :  {{$reset->token}} , Please click on the below link to verify your email account
    <br/>
    <p>Your account type is : {{$reset->accountType}}</p>
    <a href="{{route('get_update_password',$reset->accountType)}}">Reset password</a>
  </body>
</html>
