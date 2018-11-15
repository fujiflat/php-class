
<nav class="navbar navbar-expand-lg navbar-light bg-dark taxt-muted">
        <div class="container">
        <a class="navbar-brand text-light" href="#">{{config('app.name','Kazuaki')}}</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbar">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link text-light" href="/">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-light" href="/about">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-light" href="/services">Service</a>
                  </li>
            <li class="nav-item">
                <a class="nav-link text-light" href="/practice">practice</a>
            </li>
            <li class="nav-item">
                 <a class="nav-link text-light" href="/posts">posts</a>
             </li>
                      
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a class="text-dark btn btn-light" href="/posts/create">Create Posts</a></li>
          </ul>
        </div>
        </div>
      </nav>