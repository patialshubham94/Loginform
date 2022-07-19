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


   
    <h1><span value="">{{session()->get('name');}}</span> user login</h1>
    {{-- <h1>{{route('currency')}}</h1> --}}
   
    <a href=""><h3>Currency conversion Calculator</h3></a>
    <button type="button"><a href="/logout">Logout</a></button>
    {{-- <span>{{$message}}</span> --}}
</body>
</html>

