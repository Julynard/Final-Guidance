<html lang="en-US" class="js"><head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<title>Student Individual Cumulative Record</title>


<link rel="stylesheet" id="cruip-style-css" href="https://cruip.com/wp-content/themes/cruip/style.css?ver=1.0.11" type="text/css" media="all">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<body class="is-boxed has-animations" style="height: 100%;">
    <div class="body-wrap">
        <header class="site-header">
            <div class="container">
                <div class="container">
                    
                </div>
            </div>
        </header>           
                <div class="container">
						<div class="w3-hover-shadow w3-padding-64 w3-center" style="border-radius: 15px 50px;">
                            <h1 class="s">Welcome to Student Individual Cumulative Record</h1>

                            @if (Route::has('login'))
                            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                                @auth
                                    <a href="{{ url('/dashboard') }}" class="button button-primary w3-blue w3-hover-shadow">Dashboard</a>
                                @else
                                <a class="button button-primary w3-blue w3-hover-shadow" href="{{ route('login') }}">Log in</a>
            
                                    @if (Route::has('register'))
                                    <a class="button button-primary w3-light-blue w3-hover-shadow" href="{{ route('register') }}">Register</a></div>
                                    @endif
                                @endif
                            </div>
                            @endif

                          
                </div>
</body></html>