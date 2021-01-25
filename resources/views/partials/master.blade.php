
<!doctype html>
<html class="no-js" lang="en">

  <head>
    @include('partials._head')
  </head>

<body>

  @include('partials._navbar')

  


<div class="preloader">
    <div class="loader">
      <div class="ytp-spinner">
        <div class="ytp-spinner-container">
          <div class="ytp-spinner-rotator">
            <div class="ytp-spinner-left">
              <div class="ytp-spinner-circle"></div>
            </div>
            <div class="ytp-spinner-right">
            <div class="ytp-spinner-circle"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


@yield('content')


@include('partials._javascript')

</body>
</html>
