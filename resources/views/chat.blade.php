<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>chat app</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Fonts -->
    <link href="{{('css/app.css')}}" rel="stylesheet">

</head>
<body >
   <div class="container">
       <div class="row" id="app">

           <ul class="list-group offset-4 col-6">
               <li class="list-group-item active">chat room</li>
              <message  v-for="value in chat.message">
                  @{{ value }}
              </message>
               <input type="text" class="form-control" placeholder="type your message here..." v-model = "message" @keyup.enter="send">
           </ul>
       </div>
   </div>
<script src="{{('js/app.js')}}"></script>
</body>
</html>
