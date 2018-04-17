<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->

    <title>{{ config('app.name', 'LaraveL') }}</title>

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ url('css/style.css')}}">
    


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
</head>


<body background="">
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        ChatBot
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                   
                    </ul>
                </div>
            </div>
        </nav>

  <div class="container" id="task-about">
    <h1 class="display-3">What is Bioinformatics ChatBot ?</h1>
    <p class="lead">A simple chat bot application</p>
  </div>
</div>

<div class="container">
		<table class="row" id="about-card">

            <th>
            <div class="card" style="width: 20rem;">
              <img class="card-img-top" src="images/sql.png" alt="Card image cap">
              <div class="card-body">
                <p class="card-text">Integrated with SQL Databases</p>
              </div>
            </div>
            </th>

			<th>
			<div class="card" style="width: 20rem;">
			  <img class="card-img-top" src="images/laravel.png" alt="Card image cap">
			  <div class="card-body">
			    <p class="card-text">Using Laravel Framework</p>
			  </div>
			</div>
			</th>

			<th>
            <div class="card" style="width: 20rem;">
              <img class="card-img-top" src="images/botman.png" alt="Card image cap">
              <div class="card-body">
                <p class="card-text">Using BotMan PHP chatbot framework</p>
              </div>
            </div>
            </th>

			<th>
			<div class="card" style="width: 20rem;">
			  <img class="card-img-top" src="images/bootstrap.png" alt="Card image cap">
			  <div class="card-body">
			    <p class="card-text">Using Bootstrap Framework</p>
			  </div>
			</div>
			</th>

			

			<th>
			<div class="card" style="width: 20rem;">
			  <img class="card-img-top" src="images/php.png" alt="Card image cap">
			  <div class="card-body">
			    <p class="card-text">Using PHP programming language</p>
			  </div>
			</div>
			</th>

		</table>
</div>
</body>
</html>