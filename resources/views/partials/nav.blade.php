<?php use MaxMind\Db\Reader; ?>
<?php
        $location = GeoIP::getLocation();
        $country = $location['country'];
        $city = $location['city'];
        $state = $location['state'];
        $lat = $location['lat'];
        $lng = $location['lon'];
?>
<header>
    <div class="top-nav clearfix">
      <div class="top-nav-left">
          <a href="/"><img src="{{ asset('img/logo.png') }}"></a>
          @if (! (request()->is('/')))
          @include('partials.menus.search')
          @endif
      </div>
      <div class="top-nav-right">
            <div class="nav-location">
                @if($state) 
                    <a href="" id="user-location">{{ $city }}, {{ $state }}, {{ $country }}</a>
                @else
                    <a href="" id="user-location">{{ $city }}, {{ $country }}</a>
                @endif
                <div id="location-dropdown">
                    <button id="current-location">Get Current Location</button>
                    <a href="" id="city-input-toggle">Enter City</a>
                    <div id="city-input-container">
                            <p id="close-btn">&times;</p>
                            <label for="city-input">City</label>
                            <input type="text" placeholder="Enter city" id="city-input">
                            <button type="submit" id="change-location">Change Location</button>
                            <p id="nav-error-message"></p>
                    </div>
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path style="fill: #12A8DE" d="M12 0c-4.198 0-8 3.403-8 7.602 0 4.198 3.469 9.21 8 16.398 4.531-7.188 8-12.2 8-16.398 0-4.199-3.801-7.602-8-7.602zm0 11c-1.657 0-3-1.343-3-3s1.343-3 3-3 3 1.343 3 3-1.343 3-3 3z"/></svg>
            </div>
            <ul class="main-nav">
                <li>
                    <a href="">Why Tix4Cause?</a>
                </li>
                <li>
                    <a href="">Concerts</a>
                    <ul class="sub-menu wide concerts">
                        <li><a href="">Country</a></li>
                        <li><a href="">Pop</a></li>
                        <li><a href="">Rock</a></li>
                        <li><a href="">Rap/Hip Hop</a></li>
                        <li><a href="">Comedy</a></li>
                        <li>
                            <a href="">Other</a>
                            <ul class="sub-submenu">
                                <li><a href="">R&B</a></li>
                                <li><a href="">Children & Family</a></li>
                                <li><a href="">Alternative</a></li>
                                <li><a href="">Festival/Tour</a></li>
                                <li><a href="">Jazz/Blues</a></li>
                                <li><a href="">Latin</a></li>
                                <li><a href="">Classical</a></li>
                                <li><a href="">Holiday</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="">Sports</a>
                    <ul class="sub-menu wide sports">
                        <li><a href="">NFL</a></li>
                        <li><a href="">NBA</a></li>
                        <li><a href="">MLB</a></li>
                        <li><a href="">NHL</a></li>
                        <li><a href="">NCAAF</a></li>
                        <li>
                            <a href="">Other</a>
                            <ul class="sub-submenu">
                                <li><a href="">NCAAB</a></li>
                                <li><a href="">Soccer</a></li>
                                <li><a href="">WWE</a></li>
                                <li><a href="">PGA</a></li>
                                <li><a href="">NASCAR</a></li>
                                <li><a href="">MMA</a></li>
                                <li><a href="">Boxing</a></li>
                                <li><a href="">Tennis</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="">Arts & Theater</a>
                    <ul class="sub-menu arts-theater">
                        <li><a href="">Broadway</a></li>
                        <li><a href="">Children/Family</a></li>
                        <li><a href="">Musical/Play</a></li>
                        <li><a href="">Opera</a></li>
                        <li><a href="">Ballet & Dance</a></li>
                        <li><a href="">Off-Broadway</a></li>
                    </ul>
                </li>
                <li>
                    <a href="">Other Tickets</a>
                    <ul class="sub-menu other-tickets">
                            <li><a href="">Las Vegas Shows</a></li>
                            <li><a href="">Fairs/Festivals</a></li>
                            <li><a href="">Circus</a></li>
                            <li><a href="">Magic Shows</a></li>
                            <li><a href="">Lecture</a></li>
                        </ul>
                </li>
            </ul>
            <input type="checkbox" id="nav-toggle"/>
            <label id="nav-toggle-label" for="nav-toggle">
                <div id="hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <div id="cross">
                    <span></span>
                    <span></span>
                </div>
            </label>
            <ul class="mobile-nav" id="mobile" style="display:none;">
                <li>
                    <a href="">Why Tix4Cause?</a>
                </li>
                <li>
                    <a class="subnav-toggle" data-category="concerts">Concerts<svg id="svg-concerts" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"><path style="fill:#12A8DE" d="M0 7.33l2.829-2.83 9.175 9.339 9.167-9.339 2.829 2.83-11.996 12.17z"/></svg></a>
                    <ul class="sub-menu" id="submenu-concerts">
                        <li><a href="">Country</a></li>
                        <li><a href="">Pop</a></li>
                        <li><a href="">Rock</a></li>
                        <li><a href="">Rap/Hip Hop</a></li>
                        <li><a href="">Comedy</a></li>
                        <li><a href="">R&B</a></li>
                        <li><a href="">Children & Family</a></li>
                        <li><a href="">Alternative</a></li>
                        <li><a href="">Festival/Tour</a></li>
                        <li><a href="">Jazz/Blues</a></li>
                        <li><a href="">Latin</a></li>
                        <li><a href="">Classical</a></li>
                        <li><a href="">Holiday</a></li>
                    </ul>
                </li>
                <li>
                    <a class="subnav-toggle" data-category="sports">Sports<svg id="svg-sports" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"><path style="fill:#12A8DE" d="M0 7.33l2.829-2.83 9.175 9.339 9.167-9.339 2.829 2.83-11.996 12.17z"/></svg></a>
                    <ul class="sub-menu" id="submenu-sports">
                        <li><a href="">NFL</a></li>
                        <li><a href="">NBA</a></li>
                        <li><a href="">MLB</a></li>
                        <li><a href="">NHL</a></li>
                        <li><a href="">NCAAF</a></li>
                        <li><a href="">NCAAB</a></li>
                        <li><a href="">Soccer</a></li>
                        <li><a href="">WWE</a></li>
                        <li><a href="">PGA</a></li>
                        <li><a href="">NASCAR</a></li>
                        <li><a href="">MMA</a></li>
                        <li><a href="">Boxing</a></li>
                        <li><a href="">Tennis</a></li>
                    </ul>
                </li>
                <li>
                    <a class="subnav-toggle" data-category="arts">Arts & Theater<svg id="svg-arts" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"><path style="fill:#12A8DE" d="M0 7.33l2.829-2.83 9.175 9.339 9.167-9.339 2.829 2.83-11.996 12.17z"/></svg></a>
                    <ul class="sub-menu" id="submenu-arts">
                        <li><a href="">Broadway</a></li>
                        <li><a href="">Children/Family</a></li>
                        <li><a href="">Musical/Play</a></li>
                        <li><a href="">Opera</a></li>
                        <li><a href="">Ballet & Dance</a></li>
                        <li><a href="">Off-Broadway</a></li>
                    </ul>
                </li>
                <li>
                    <a class="subnav-toggle" data-category="other">Other Tickets<svg id="svg-other" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"><path style="fill:#12A8DE" d="M0 7.33l2.829-2.83 9.175 9.339 9.167-9.339 2.829 2.83-11.996 12.17z"/></svg></a>
                    <ul class="sub-menu" id="submenu-other">
                            <li><a href="">Las Vegas Shows</a></li>
                            <li><a href="">Fairs/Festivals</a></li>
                            <li><a href="">Circus</a></li>
                            <li><a href="">Magic Shows</a></li>
                            <li><a href="">Lecture</a></li>
                        </ul>
                </li>
            </ul>
      </div>
    </div> <!-- end top-nav -->
</header>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>
    // mobile menu
    $('#nav-toggle-label').click(toggleMenu);
    $('.subnav-toggle').click(function(){
       var category = $(this).attr('data-category');
       if ($(`#submenu-${category}`).css('display') === 'none') {
           $('#mobile .sub-menu').hide();
           $('.subnav-toggle svg').css('transform', 'rotate(0)');
           $(`#submenu-${category}`).show();
           $(`#svg-${category}`).css('transform', 'rotate(180deg)');
       } else {
            $(`#submenu-${category}`).hide();
            $(`#svg-${category}`).css('transform', 'rotate(0)');
       }
    });

    $(window).resize(function() {
        if ($('#mobile')[0].style.display === 'inline-block') {
            $('#nav-toggle-label').click();
        }
    });

    function toggleMenu() {
        var mobileMenu = $('#mobile')[0];
        if (mobileMenu.style.display === "none") {
            mobileMenu.style.display = "inline-block";
        } else {
            mobileMenu.style.display = "none";
            $('#mobile .sub-menu').hide();
            $('.subnav-toggle svg').css('transform', 'rotate(0)');
        }
    }

    // if local storage values exist, replace the location in nav with it
    if (window.localStorage.getItem('city')) {
        var userCity = window.localStorage.getItem('city');
        var userState = window.localStorage.getItem('state');
        var userCountry = window.localStorage.getItem('country');

        !!userState ? $('#user-location').html(`${userCity}, ${userState}, ${userCountry}`) : $('#user-location').html(`${userCity}, ${userCountry}`);
    }

    // current location finder
    $('#current-location').click(function(e){
        e.preventDefault();
        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
        jQuery.ajax({
            url: "{{ url('/currentlocation') }}",
                  method: 'post',
                  data: {
                     _token: CSRF_TOKEN,
                  },
                  success: function(result){
                      // reflect it in the navigation
                      if (result['state']) {
                        $('#user-location').html(result['city'] + ', ' + result['state'] + ', ' + result['country']);
                      } else {
                        $('#user-location').html(result['city'] + ', ' + result['country']);
                      }

                      // store in local storage
                      window.localStorage.setItem('city', result['city']);
                      window.localStorage.setItem('country', result['country']);
                      if (result['state']) {
                          window.localStorage.setItem('state', result['state']);
                      }
                  }
                     
        });
    });

    // input location finder
    $('#change-location').click(function(e){
        e.preventDefault();
        var userInput = $('#city-input').val();
        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
        jQuery.ajax({
            url: "{{ url('/inputlocation') }}",
                  method: 'post',
                  data: {
                     _token: CSRF_TOKEN,
                     'userInput': userInput,
                  },
                  success: function(result){
                      // if city matches
                        if (result['city']) {
                            // reflect it in the navigation
                            if (result['state']) {
                                $('#user-location').html(result['city'] + ', ' + result['state'] + ', ' + result['country']);
                            } else {
                                $('#user-location').html(result['city'] + ', ' + result['country']);
                            }

                            // store in local storage
                            window.localStorage.setItem('city', result['city']);
                            window.localStorage.setItem('country', result['country']);
                            if (result['state']) {
                                window.localStorage.setItem('state', result['state']);
                            }
                        } else {
                            console.log('nah');
                        }
                     // else no match then show error message
                  }
        });
    });
</script>