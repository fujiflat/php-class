<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Accounts & Diary</title>

        {{-- bootstrap --}}
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

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
    <body>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <a class="navbar-brand" href="#">Accounts & Diary</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                      <ul class="navbar-nav">
                        <li class="nav-item active">
                          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#">Features</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#">Pricing</a>
                        </li>
                        <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Dropdown link
                          </a>
                          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                          </div>
                        </li>
                      </ul>
                    </div>
            </nav>

                  <section class="jumbotron h-50" style="background-image: url({{ asset('/img/piggy-2889041_1280.jpg')}}); background-repeat:no-repeat;">
                    <div>
                        <div class="container">
                          <h1 class="jumbotron-heading">Accounts & Diary</h1>
                          <p class="lead text-muted w-25">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don't simply skip over it entirely.</p>
                          <p>
                            <div style="margin-top:70px">
                                <a href="#" class="btn btn-primary my-2">Add New Account</a>
                            </div>
                          </p>
                        </div>
                    </div>
                 </section>

                        <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
                          <h1 class="display-4">Pricing</h1>
                          <p class="lead">Quickly build an effective pricing table for .</p>
                        </div>
        <div class="container marketing">

        <!-- Three columns of text below the carousel -->
        <div class="row">
          <div class="col-lg-6 text-center">
            <img src="{{ asset('/img/account.png') }}" alt="Generic placeholder image" width="140" height="140">
            <h2>Account</h2>
            <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
            <p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>
          </div><!-- /.col-lg-6 -->
          <div class="col-lg-6 text-center">
            <img src="{{ asset('/img/diary.png') }}" alt="Generic placeholder image" alt="Generic placeholder image" width="140" height="140">
            <h2>Diary</h2>
            <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
            <p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>
          </div><!-- /.col-lg-6 -->
          

        </div><!-- /.row -->

                          <div class="card-deck mb-3 text-center">
                            <div class="card mb-4 box-shadow">
                              <div class="card-header">
                                <h4 class="my-0 font-weight-normal">Free</h4>
                              </div>
                              <div class="card-body">
                                <h1 class="card-title pricing-card-title">$0 <small class="text-muted">/ mo</small></h1>
                                <ul class="list-unstyled mt-3 mb-4">
                                  <li>10 users included</li>
                                  <li>2 GB of storage</li>
                                  <li>Email support</li>
                                  <li>Help center access</li>
                                </ul>
                                <button type="button" class="btn btn-lg btn-block btn-outline-primary">Sign up for free</button>
                              </div>
                            </div>
                            <div class="card mb-4 box-shadow">
                              <div class="card-header">
                                <h4 class="my-0 font-weight-normal">Pro</h4>
                              </div>
                              <div class="card-body">
                                <h1 class="card-title pricing-card-title">$15 <small class="text-muted">/ mo</small></h1>
                                <ul class="list-unstyled mt-3 mb-4">
                                  <li>20 users included</li>
                                  <li>10 GB of storage</li>
                                  <li>Priority email support</li>
                                  <li>Help center access</li>
                                </ul>
                                <button type="button" class="btn btn-lg btn-block btn-primary">Get started</button>
                              </div>
                            </div>
                            <div class="card mb-4 box-shadow">
                              <div class="card-header">
                                <h4 class="my-0 font-weight-normal">Enterprise</h4>
                              </div>
                              <div class="card-body">
                                <h1 class="card-title pricing-card-title">$29 <small class="text-muted">/ mo</small></h1>
                                <ul class="list-unstyled mt-3 mb-4">
                                  <li>30 users included</li>
                                  <li>15 GB of storage</li>
                                  <li>Phone and email support</li>
                                  <li>Help center access</li>
                                </ul>
                                <button type="button" class="btn btn-lg btn-block btn-primary">Contact us</button>
                              </div>
                            </div>
                          </div>
                    
                          <footer class="pt-4 my-md-5 pt-md-5 border-top">
                            <div class="row">
                              <div class="col-12 col-md">
                                <img class="mb-2" src="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-solid.svg" alt="" width="24" height="24">
                                <small class="d-block mb-3 text-muted">© 2017-2018</small>
                              </div>
                              <div class="col-6 col-md">
                                <h5>Features</h5>
                                <ul class="list-unstyled text-small">
                                  <li><a class="text-muted" href="#">Cool stuff</a></li>
                                  <li><a class="text-muted" href="#">Random feature</a></li>
                                  <li><a class="text-muted" href="#">Team feature</a></li>
                                  <li><a class="text-muted" href="#">Stuff for developers</a></li>
                                  <li><a class="text-muted" href="#">Another one</a></li>
                                  <li><a class="text-muted" href="#">Last time</a></li>
                                </ul>
                              </div>
                              <div class="col-6 col-md">
                                <h5>Resources</h5>
                                <ul class="list-unstyled text-small">
                                  <li><a class="text-muted" href="#">Resource</a></li>
                                  <li><a class="text-muted" href="#">Resource name</a></li>
                                  <li><a class="text-muted" href="#">Another resource</a></li>
                                  <li><a class="text-muted" href="#">Final resource</a></li>
                                </ul>
                              </div>
                              <div class="col-6 col-md">
                                <h5>About</h5>
                                <ul class="list-unstyled text-small">
                                  <li><a class="text-muted" href="#">Team</a></li>
                                  <li><a class="text-muted" href="#">Locations</a></li>
                                  <li><a class="text-muted" href="#">Privacy</a></li>
                                  <li><a class="text-muted" href="#">Terms</a></li>
                                </ul>
                              </div>
                            </div>
                          </footer>
                        </div>
                    
                    
                        <!-- Bootstrap core JavaScript
                        ================================================== -->
                        <!-- Placed at the end of the document so the pages load faster -->
                        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
                        <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
                        <script src="../../assets/js/vendor/popper.min.js"></script>
                        <script src="../../dist/js/bootstrap.min.js"></script>
                        <script src="../../assets/js/vendor/holder.min.js"></script>
                        <script>
                          Holder.addTheme('thumb', {
                            bg: '#55595c',
                            fg: '#eceeef',
                            text: 'Thumbnail'
                          });
                        </script>

    </body>
</html>
