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

  <h1>CURRENCY CONVERTER</h1>

  <form action="/currency" method="post">
      @csrf
      <br><br>
      <br><br>

      <h1>
          {{$errorForSameCurrency}}
      </h1>
      Choose a currency to change<input type="text" name="currencyToChange" id="currencyToChange"><span id="toChange"></span><br><br>
     

      @if ($errors->any())
      <div class="alert alert-danger" >
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>
  @endif

  

 
      Enter amount to convert: <input type="text" name="amountToConvert"  value="{{$amountToConvert}}">
      <br><br>
      Choose a currency to change in<input type="text" name="currencyToChangeIn" id="currencyToChangeIn"><span id="toChangeIn"></span><br><br>

      <br>
      
      <br>
      Amount after Conversion: <input type="text" name="converted_Currency_Output" value="{{$finalResult}}">
      <br><br>
      <input type="submit" value="submitt">

      
</form >


<!--
    <h1>
        {{$errorForSameCurrency}}
    </h1>
    <form action="/currency" method="post">
    <table>
        <tr>
            <td>Choose a currency to change:</td>
            <td><input type="text" name="currencyToChange" id="currencyToChange"><span id="toChange"></span></td>
        </tr>
        <tr>
            <td>Enter amount to convert:</td>
            <td><input type="text" name="amountToConvert"  value="{{$amountToConvert}}"></td>
        </tr>
        <tr>
            <td>Choose a currency to change in:</td>
            <td><input type="text" name="currencyToChangeIn" id="currencyToChangeIn"><span id="toChangeIn"></span></td>
        </tr>
        <tr>
            <td>Amount after Conversion:</td>
        <td><input type="text" name="converted_Currency_Output" value="{{$finalResult}}"></td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" value="submitt"></td>
            
        </tr>
    </table>
    @if ($errors->any())
        <div class="alert alert-danger" >
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
</form>
-->
    


   
    <script>


     $("document").ready(function() {
    $( "#currencyToChange" ).autocomplete({

        source: function(reques, response) {
            $.ajax({
            url:  "/currency/autocomplete",
            data: {
                    term : reques.term
             },
            dataType: "json",
            success: function(data){
               var resp = $.map(data,function(obj){
                    return obj.currency_choose;
               }); 
  
               response(resp);
            }
        });
    },
   

    minLength: 1
 });

 $( "#currencyToChangeIn" ).autocomplete({
  
  source: function(request, response) {
      $.ajax({
      url:  "/currency/autocomplete",
      data: {
              term : request.term
       },
      dataType: "json",
      success: function(data){
         var resp = $.map(data,function(obj){
              return obj.currency_choose;
         }); 

         response(resp);
      }
  });
},
minLength: 1
});
});

     

        </script>
</body>
</html>

