<!DOCTYPE html>
<html>
  <head>
    <title>Welcome in patientHistory</title>
  </head>
  <body>
    <h2>Welcome to the Patient history {{$labs->firstName}}</h2>
    <br/>
    Your registered email-id is {{$labs->email}} , Please click on the below link to verify your email account
    <br/>
    <a href="{{route('verifyClinic',$labs->id)}}">Verify Email</a>
  </body>
</html>
