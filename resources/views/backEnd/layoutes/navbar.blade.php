<!--start-Navbar-->
<nav class="navbar navbar-expand-lg navbar-light fixed-top justify-content-between">
    <div class= "container">
          <img class="ml-2" src="{{url('imgs/logo.svg')}}" width="60" alt="Responsive image">
          <h3 class="h3 ml-lg-3 mt-2 font-weight-bold text-uppercase">Patient Medical History</h3>
        {{-- </a> --}}
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="col-md-6">
            </div>
            <div class="col-md-6">
            <div>
                @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                        <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}" class=" float-right Lang form-control col-3 btn my-2 my-sm-0">{{ $properties['native'] }}</a><div class="toggle_container"><div class="block"></div></div>
                @endforeach
            </div>
              <button class=" float-right getapp form-control col-3 btn my-2 my-sm-0">Get App</button>
            </div>
            </div>
          </div>
        </div>
  </nav>
<!--End-Navbar-->
