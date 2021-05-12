<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>chat app</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Fonts -->
    <link href="{{('css/app.css')}}" rel="stylesheet">
     <style>
         .list-group{
             overflow-y: scroll;

             height: 200px;
         }

     </style>
</head>
<body >
   <div class="container">
           <div class="row" id="app">
                        <div class="offset-4 col-4">
                            <li class="list-group-item active">chat room<span class="badge badge-pill badge-danger">@{{ numberOfUsers}}</span></li>
                            <div class="badge badge-pill badge-primary">@{{ typing }}</div>
                            <ul class="list-group " v-chat-scroll>
                                <message
                                    v-for="value,index in chat.message"
                                    :key=value.index
                                    :color= chat.color[index]
                                    :user = chat.user[index]
                                    :time = chat.time[index]

                                >
                                    @{{ value }}
                                </message>
                            </ul>
                            <input type="text" class="form-control" placeholder="type your message here..." v-model = "message" @keyup.enter="send">

                        </div>



            </div>
   </div>
   <!-- Insert the vue core before vue-toasted -->
   <script src="https://unpkg.com/vue-toasted"></script>


   <script src="{{('js/app.js')}}"></script>
</body>
</html>
