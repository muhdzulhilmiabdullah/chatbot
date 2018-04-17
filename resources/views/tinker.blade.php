<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

    <title>ChatBot</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <style>
        body {
            font-family: 'Open Sans', sans-serif;
            margin: 0;
            padding: 0;
            background: #9e9c93;
            font-size: 14px;
        }

        #containerbesar{
            display: flex;
            height: 100%;
            width: 100%;
           
        }

        .content {
         
            margin: 0;
            height: 100%;
            width: 100%;
        }

        h6{
            margin-top:0px;
            text-align: left;
            opacity: 50%;
            color: #fff;
        }

        h4{
            
            color: #fff;
            text-align: center;
            margin-top: 20px;
            margin-bottom:20px;
        }

        a:hover{
            color: #c9c9c9;
            text-decoration: none;
        }

        h4:hover{
            color: #c9c9c9;
        }
    </style>
</head>
<body>

    <a href="/"><h4>Bioinformatics ChatBot v0.1</h4></a>
<div class="container" id="containerbesar">
    <div class="content" id="app">
     <botman-tinker></botman-tinker>
    </div>
</div>

<script src="/js/app.js"></script>
<script src="./dist/vue-chat-scroll.js"></script>
</body>
</html>