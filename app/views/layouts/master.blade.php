<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Leigusíðan</title>
    {{ HTML::style('assets/stylesheets/app.css') }}
    {{ HTML::script('assets/bower_components/modernizr/modernizr.js') }}
  </head>
  <body>
    <div id="header-wrapper">
      <div class="row">
        <div class="medium-4 columns show-for-medium-up">
          <a href="#">{{ HTML::image('assets/images/logo.png') }}</a>
        </div>
        <div class="small-12 medium-8 columns">
          <div class="row">
            <div class="small-12 columns">
              <p id="header-top-right" class="right">Innskráning/Nýskráning eða eitthvað</p>
            </div>
          </div>
          <div class="row">
            <div class="small-12 columns">
              <nav class="top-bar" data-topbar role="navigation">
                <ul class="title-area">
                  <li class="name show-for-small-only">
                    <h1><a href="#">Leigusíðan</a></h1>
                  </li>
                   <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
                  <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
                </ul>

                <section class="top-bar-section">
                  <!-- Right Nav Section -->
                  <ul class="right">
                    <li class="active"><a href="#">Heim</a></li>
                    <li><a href="#">Skrá fasteign</a></li>
                    <li class="has-dropdown">
                      <a href="#">Prófíll</a>
                      <ul class="dropdown">
                        <li><a href="#">Skoða</a></li>
                        <li class="active"><a href="#">Breyta</a></li>
                      </ul>
                    </li>
                    <li><a href="#">Innskráning</a></li>
                    <li><a href="#">Nýskráning</a></li>
                  </ul>
                </section>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>

    @yield('content')

    {{ HTML::script('assets/bower_components/jquery/dist/jquery.min.js') }}
    {{ HTML::script('assets/bower_components/foundation/js/foundation.min.js') }}
    {{ HTML::script('assets/js/app.js') }}
  </body>
</html>
