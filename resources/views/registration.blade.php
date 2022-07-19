<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
   
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
   
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</head>
<body>
  @include('header')

   
    <form action="/registration" method="POST" style="position:absolute;left:28%;right:28%">
        @csrf
        <br><br>
        

        <div class="mb-3">
          <label for="InputUsernam1" class="form-label">User Name</label>
          <input type="text" class="form-control" id="InputUsernam1" name="username" value="{{old('username')}}" >
        </div>
        <span style='color:red' >
            
          @error('username'){{$message}}@enderror
            
      </span>

        <div class="mb-3">
          <label for="InputEmail1" class="form-label">Email address</label>
          <input type="email" class="form-control" id="InputEmail1" name="email" aria-describedby="emailHelp" value="{{old('email')}}" >
          <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <span style='color:red' >
            
          @error('email'){{$message}}@enderror
            
      </span>

        <div class="mb-3">
          <label for="InputPassword1" class="form-label">Password</label>
          <input type="password" class="form-control" name="password" id="InputPassword1" >
        </div>
        <span style='color:red' >
            
          @error('password'){{$message}}@enderror
            
      </span>

      <div class="mb-3">
        <label for="InputPassword2" class="form-label">Confirm Password</label>
        <input type="password" class="form-control" name="password_confirmation" id="InputPassword2" >
      </div>    <span id="message"></span>
      <span style='color:red' >
          
        @error('password_confirmation'){{$message}}@enderror
          
    </span>

        {{-- @if ($errors->any())
        <div class="alert alert-danger" >
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif --}}
       
        <button type="submit" class="btn btn-primary">Register</button>
      </form>

      <script>
$(' #InputPassword2').on('keyup', function () {
  if ($('#InputPassword1').val() == $('#InputPassword2').val()) {
    $('#message').html('Matching').css('color', 'green');
  } else 
    $('#message').html('Not Matching').css('color', 'red');
});        

        </script>
        

</body>
</html>

