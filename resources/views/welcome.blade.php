    <!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>ChatBot</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: ;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .panda{
                height: 113px;
                width: 150px;
                margin:0;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            .title{
                color: #fff;
                font-size: 90px;
            }

            .background {
                background-color: #ffffff;
            }

            .links > a{
                color: #7a7a7a;
            }

            .links >a:hover{
                color: #000;
            }

            .fontanimation{
                margin: 0;
                -webkit-animation:colorchange 5s infinite alternate;
            }

             @-webkit-keyframes colorchange {
      0% {
        
        color: red;
      }
      
      10% {
        
        color: yellow; 
      } 
      
      20% {
        
        color: red;
      }
      
      30% {
        
        color: yellow;
      }
      
      40% {
        
        color: red;
      }
      
      50% {
        
        color: yellow;
      }
      
      60% {
        
        color: red;
      }
      
      70% {
        
        color:  yellow;
      }
      80% {
     
        color: red;
      }
      
      90% {
     
        color: yellow;
      }
      
      100% {
        
        color: red;
      }
    }




        </style>
    </head>
    <body class="background">

        <div class="flex-center position-ref full-height">
           
                <div class="top-right links">
                    
                        <a href="{{ url('/chatbot') }}">ChatBot</a>
                    
                </div>
        <div class="flex-center position-ref full-height">

            <div class="content">
                <div class="title m-b-md">
                    <a href="{{url('/bicreate')}}"><img class="panda" src="/panda_face.gif" /></a>
                    <p class="fontanimation">Bioinformatics ChatBot</p>
                </div>
               <div class="links">
                    <a href="{{url('/about')}}">Learn about Bioinformatics ChatBot</a>
                    <!-- <a href="{{url('highchart')}}">Highcharts</a>-->
                    
                </div> 
            </div>
        </div>
    </body>
</html>
