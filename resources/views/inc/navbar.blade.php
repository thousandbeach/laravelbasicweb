<nav class="navbar navbar-inverse">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/">larabasicweb</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="{{Request::is('about') ? 'active' : ''}}"><a href="/about">私について</a></li>
            <li class="{{Request::is('contact') ? 'active' : ''}}"><a href="/contact">お問い合わせ</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
