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
                <a href="">Chicago, IL</a>
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
                    <ul class="sub-menu">
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
                    <ul class="sub-menu">
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
                    <a href="">Concerts</a>
                    <ul class="sub-menu">
                        <li><a href="">Country</a></li>
                        <li><a href="">Pop</a></li>
                        <li><a href="">Rock</a></li>
                        <li><a href="">Rap/Hip Hop</a></li>
                        <li><a href="">Comedy</a></li>
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
                    <a href="">Sports</a>
                    <ul class="sub-menu">
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
                    <ul class="sub-menu">
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
                    <ul class="sub-menu">
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

<script>
    document.getElementById('nav-toggle-label').addEventListener("click", openMenu);

    function openMenu() {
        var mobileMenu = document.getElementById("mobile");
        if (mobileMenu.style.display === "none") {
            mobileMenu.style.display = "inline-block";
        } else {
            mobileMenu.style.display = "none";
        }
    }
</script>