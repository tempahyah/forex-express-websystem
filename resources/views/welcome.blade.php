<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
            
        <!--Import materialize.css-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <link rel="stylesheet" href="css/main.css">
        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      
        <script src="https://kit.fontawesome.com/98dc47e44f.js"></script>
      
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'ForexExpress') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <!-- Styles -->
        <link href="{{ asset('css/footercss.css') }}" rel="stylesheet">


        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .section-follow .fa-4x{
                margin: 5px 10px;
                
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
            

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    
    <body id="home" class="scrollspy">

       <div class="navbar-fixed">
          <nav class="light-blue darken-3">
            <div class="container">
              <div class="nav-wrapper">
                <a class="navbar-brand" href="{{ url('/') }}">
                  <img src="https://lh3.googleusercontent.com/birUkcYfJ99k9YifIijq4lJnBgKMKh5Y7Qa04rx5pSKJel8Y3c9jFlMVQV_qsGgefkjarFIIccjMr7VBi3aBPN0tdJJuhonCQtJmZKb-ux30qzb-7XZBFgYbMX1jsM0QziJwuBDzs87o0LdZaJLdFqT-qGwQT5zkObq7EpM-oK-vx24Bqy1QCeWKqUZ0HBEfSi4rl9ZcS516740heaKohSPrTzfeD_ZKhJl1NecbbqiarlI0VymsjDsOViTFkxlKstXZPeDrcyMoF7-o2VQxX0lig8MRr_M7ubKVQf9DMGT-_H4StX7f8hI_xz21TC37NdjH2_LilF8t-Y2SPpDi8MiiXnwjpqI6TOlk21EVm13BWKKSn8y654QN_bJ3uJf_LcQjRBDxjZ_HcXF6y0TJNaS5DO38e48i5dEcsfseJgxeUlTdPROcUlmVIxXL_kal26wAXKCCLnnrgTSmeXFjUsJ0Q7uvwugv958bT6BpMVJkOU_MCAUVuW8yLiP58j7ePnXmuuC0ZezX-ImzfVe9UFpPH54IUIgiKhhfo1iCf5taNF08udoSWRnFIUnKA3A2VRRuFd5lKAb-6vX-1hud3Hxy9yGTuhIW6GuywhCS4IiOAghn1zZc8Y5E686u6mYK3j1TBz9rqEjES6k28gDgb8nH8hur0zefbk7mw7PwWkjs7axJNqrdwb7d6GveggPAu5QY2nyAYTOxfy7Q3U9HDG-N=w796-h645-no" style="width:25px; height:20px">
                  {{ config('app.name', 'ForexExpress') }}                </a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                  <span class="navbar-toggler-icon"></span>
              </button>
                   
                  @if (Route::has('login'))
                  

                    <div class="top-right links">
                      @auth
                        <a class="white-text" href="{{ url('/bureaus') }}">Bureaus</a>
                        <a class="white-text" href="#">Services</a>
                        <a class="white-text" href="/team">Our Team</a>
                        <a class="white-text" href="{{ url('/about') }}">About</a>
                        <a class="white-text" href="{{ url('/contact') }}">Contact Us</a>
                        <a class="white-text"href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                     <i class="fas fa-sign-out-alt"></i> {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>


                      @else
                      <a class="white-text" href="{{ url('/bureaus') }}">Bureaus</a>
                      <a class="white-text" href="#">Services</a>
                      <a class="white-text" href="/team">Our Team</a>
                      <a class="white-text" href="{{ url('/about') }}">About</a>
                      <a class="white-text" href="{{ url('/contact') }}">Contact Us</a>
                        <a class="white-text" href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                          <a class="white-text" href="{{ route('register') }}">Register</a>
                        @endif
                      @endauth
                    </div>

                  @endif
      
                      
                  </div>
                </div>
              </nav>
            </div>
            <ul class="sidenav" id="mobile-nav">
                <li>
                  <a href="#home">Home</a>
                </li>
                <li>
                    <a href="#login">Login</a>
                </li>
                <li>
                    <a href="#register">Register</a>
                </li>
                
              </ul>
              
              <!-- Section Slider-->
              <section class="slider">
                  <ul class="slides">
                        <li>
                                <img src="https://media.istockphoto.com/photos/businessman-using-laptop-for-analyzing-data-stock-market-forex-graph-picture-id1069549614?k=6&m=1069549614&s=612x612&w=0&h=5SXOc3MyNYm0OpcEWxfJv9WMG3AhU-sySwfK9zYImE4="> <!-- random image -->
                                <div class="caption center-align">
                                  <h2>Flexible Online Access to Current rates</h2>
                                  <h5 class="light grey-text text-lighten-3 hide-on-sm-only">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Velit veritatis in voluptatibus quo asperiores assumenda, distinctio voluptatum nostrum facilis porro?</h5>
                                  @if (!Auth::check())
                                    <div style="height:50px">

                                    </div>
                                    <div>
                                      <h2><a href="{{ route('login') }}"class="btn btn-primary">Login</a> &nbsp; &nbsp; &nbsp;  <a href="{{ route('register') }}"class="btn btn-success">Register</a></h2>
                                    </div> 
                                  @endif
                                 
                                  

                                </div>
                        </li>
                      <li>
                        <img src="https://media.istockphoto.com/photos/businessman-checking-stock-market-data-picture-id826058232?k=6&m=826058232&s=612x612&w=0&h=vDFH9jbZ96cvKT51f0dbBK2640vYb0D2ukOVzf6hYX4="> <!-- random image -->
                        <div class="caption center-align">
                          <h2>Online Forex Trading</h2>
                          <h5 class="light grey-text text-lighten-3 hide-on-sm-only">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Velit veritatis in voluptatibus quo asperiores assumenda, distinctio voluptatum nostrum facilis porro?</h5>
                        </div>
                      </li>
                      <li>
                        <img src="https://media.istockphoto.com/photos/world-currency-exchange-table-graph-picture-id818517624?k=6&m=818517624&s=612x612&w=0&h=IkYFC36nPWUMReJC3w_Wu78y-Hs0GAZ46Eef_FmnbLs="> <!-- random image -->
                        <div class="caption left-align">
                          <h2>We Provide you with latest rates for all Forex Bureaus</h2>
                          <h5 class="light grey-text text-lighten-3 hide-on-sm-only">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Explicabo corrupti velit illo obcaecati accusamus incidunt rerum error eveniet, porro voluptates.</h5>
                        </div>
                      </li>
                      <li>
                            <img src="https://media.istockphoto.com/photos/dices-cubes-to-trader-picture-id481457829?k=6&m=481457829&s=612x612&w=0&h=yyZD7A8SHy8AsSX4yQqwJUyrNPTR4BeOQgj9cFIlfF4="> <!-- random image -->
                            <div class="caption right-align">
                              <h2>Convert Currency</h2>
                              <h5 class="light grey-text text-lighten-3 hide-on-sm-only">Here is our small slogan.</h5>
                            </div>
                          </li>
                      <li>
                        <img src="https://media.istockphoto.com/photos/financial-and-technical-data-analysis-graph-showing-stock-market-picture-id943292690?k=6&m=943292690&s=612x612&w=0&h=AqwqtxoCVyAmgi1sYfGwsYKHpb_6pT19AVHmzmGg-a4="> <!-- random image -->
                        <div class="caption right-align">
                          <h2>Check performance of individual Rates</h2>
                          <h5 class="light grey-text text-lighten-3 hide-on-sm-only">Here's our small slogan.</h5>
                        </div>
                      </li>
                    </ul>
              </section>
      
      
              <!--Section: Icon Boxes -->
              <section class="section section-icons grey lighten-4 center">
                <div class="container">
                  <div class="row">
                    <div class="col s12 m6">
                      <div class="card-panel" style="height:280px">
                        <i class="material-icons large teal-text">
                            today
                        </i>
                        <h4>Rates</h4>
                        <p>View the Current Rates for Different Forex Bureaus</p>
                      </div>
                    </div>
                    <div class="col s12 m6">
                        <div class="card-panel"style="height:280px">
                          <i class="material-icons large teal-text">
                            monetization_on
                          </i>
                          <h4>Convert Currency</h4>
                          <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minus optio modi delectus.</p>
                        </div>
                    </div>
                    <div class="col s12 m6">
                        <div class="card-panel"style="height:280px">
                                <i class="fas fa-chart-bar fa-7x"></i>
                          <h4>Bureau Ranking</h4>
                          <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minus optio modi delectus.</p>
                      </div>
                    </div>

                    <div class="col s12 m6">
                            <div class="card-panel" style="height:280px">
                                <i class="fas fa-chart-line fa-7x"></i>
                                <h4>Statistics</h4>
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minus optio modi delectus.</p>
                          </div>
                        </div>
                    

                        
                  </div>
                </div>
              </section>

              
              
              @include('footer.footer')
      
            <!--JavaScript at end of body for optimized loading-->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
              <script>
                //sidenav
                const sideNav= document.querySelector('.sidenav');
                M.Sidenav.init(sideNav, {});
      
                //slider
                const slider = document.querySelector('.slider');
                M.Slider.init(slider,{
                  indicators: false,
                  height:500,
                  transition: 500, 
                  interval:6000
                });
      
                // Auto-Complete
                const ac= document.querySelector('.autocomplete');
                M.Autocomplete.init(ac,{
                  data:{
                    "Kampala": null,
                    "Jinja": null,
                    "Mbale": null,
                    "Mbarara": null,
                    "Kaliro": null,
                    "Iganga": null,
                    "Tororo": null,
                    "Bugiri": null,
                    "Mayuge": null,
                    "Masaka": null,
                  }
                });
      
                //Material Box
                const mb = document.querySelectorAll('.materialboxed');
                M.Materialbox.init(mb,{});
      
                // ScrollSpy
                const ss = document.querySelectorAll('.scrollspy');
                M.Scrollspy.init(ss,{});
      
              </script>
          </body>
</html>
