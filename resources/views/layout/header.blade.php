<div class="top2_wrapper">
    <div class="container">
        <div class="top2 clearfix">
            <header>
                <div class="logo_wrapper">
                    <a href="index.html" class="logo">
                        <img src="images/logo.png" alt="" class="img-responsive">
                    </a>
                </div>
            </header>
            <div class="navbar navbar_ navbar-default">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="navbar-collapse navbar-collapse_ collapse">
                    <ul class="nav navbar-nav sf-menu clearfix">
                        <li class="sub-menu sub-menu-1 active"><a href="{{ url('/') }}">Home<em></em></a>

                        </li>
                        <li><a href="{{ url('about') }}">About Us</a></li>
                        <li><a href="{{ url('gallery') }}">Gallery</a></li>
                        <li class="sub-menu sub-menu-1"><a href="#">Pages<em></em></a>
                            <ul>
                                <li><a href="flights.html">Flights</a>
                                    <ul>
                                        <li><a href="{{ url('search-flights') }}">Search Flights</a></li>
                                        <li><a href="{{ url('booking-flights') }}">Booking Flights</a></li>
                                        <li><a href="{{ url('booking-flights-page') }}">Flights Checkout</a></li>
                                    </ul>
                                </li>


                                <li><a href="hotels.html">Hotels</a>
                                    <ul>
                                        <li><a href="{{ url('search-hotel') }}">Search Hotels</a></li>
                                        <li><a href="{{ url('booking-hotel') }}">Booking Hotel</a></li>
                                        <li><a href="{{ url('booking-hotel-page') }}">Hotel Reservation</a></li>
                                    </ul>
                                </li>

                                <li><a href="{{ url('cars') }}">Rent a Car</a>
                                    <ul>
                                        <li><a href="{{ url('search-cars') }}">Search Cars</a></li>
                                        <li><a href="{{ url('booking-cars') }}">Booking Car</a></li>
                                        <li><a href="{{ url('booking-cars-page') }}">Car Reservation</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{ url('cruises') }}">Cruises</a>
                                    <ul>
                                        <li><a href="{{ url('search-cruise') }}">Search Cruise</a></li>
                                        <li><a href="{{ url('booking-cruise') }}">Booking Cruise</a></li>
                                        <li><a href="{{ url('booking-cruise-page') }}">Cruise Checkout</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>

                        <li class="sub-menu sub-menu-1"><a href="#">Blog<em></em></a>
                            <ul>
                                <li><a href="{{ url('blog') }}">Right Blog</a></li>
                                <li><a href="{{ url('left-blog') }}">Left Blog</a></li>
                                <li><a href="{{ url('post') }}">Right Post</a></li>
                                <li><a href="{{ url('left-post') }}">Left Post</a></li>
                                <li><a href="{{ url('full-post') }}">Full Post</a></li>
                            </ul>
                        </li>
                        <li><a href="{{ url('contacts') }}">Contacts</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
