@extends('layout.master')

@section('content')
<div class="page_banner"></div>

<div class="breadcrumbs1_wrapper">
    <div class="container">
        <div class="breadcrumbs1"><a href="{{ url('/') }}">Home</a><span>/</span>About</div>
    </div>
</div>

<div id="why1">
    <div class="container">

        <h2 class="animated" data-animation="fadeInUp" data-animation-delay="200">WHY WE ARE THE BEST</h2>

        <div class="title1 animated" data-animation="fadeInUp" data-animation-delay="300">Lorem ipsum dolor sit amet,
            consectetuer adipiscing elit, sed diam nonummy nibh euismod <br>tincidunt ut laoreet dolore magna aliquam
            erat volutpat.</div>

        <br><br>

        <div class="row">
            <div class="col-sm-3">
                <div class="thumb2 animated" data-animation="flipInY" data-animation-delay="300">
                    <div class="thumbnail clearfix">
                        <a href="#">
                            <figure class="">
                                <img src="{{ url('assest/images/why1.png') }}" alt=""
                                    class="img1 img-responsive">
                                <img src="{{ url('assest/images/why1_hover.png') }}" alt=""
                                    class="img2 img-responsive">
                            </figure>
                            <div class="caption">
                                <div class="txt1">Amazing Travel</div>
                                <div class="txt2">Nam liber tempor cum soluta nobis eleifend option congue nihil
                                    imperdiet doming id quod mazim.</div>
                                <div class="txt3">Read More</div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="thumb2 animated" data-animation="flipInY" data-animation-delay="400">
                    <div class="thumbnail clearfix">
                        <a href="#">
                            <figure class="">
                                <img src="{{ url('assest/images/why2.png') }}" alt=""
                                    class="img1 img-responsive">
                                <img src="{{ url('assest/images/why2_hover.png') }}" alt=""
                                    class="img2 img-responsive">
                            </figure>
                            <div class="caption">
                                <div class="txt1">Discover</div>
                                <div class="txt2">Nam liber tempor cum soluta nobis eleifend option congue nihil
                                    imperdiet doming id quod mazim.</div>
                                <div class="txt3">Read More</div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="thumb2 animated" data-animation="flipInY" data-animation-delay="500">
                    <div class="thumbnail clearfix">
                        <a href="#">
                            <figure class="">
                                <img src="{{ url('assest/images/why3.png') }}" alt=""
                                    class="img1 img-responsive">
                                <img src="{{ url('assest/images/why3_hover.png') }}" alt=""
                                    class="img2 img-responsive">
                            </figure>
                            <div class="caption">
                                <div class="txt1">Book Your Trip</div>
                                <div class="txt2">Nam liber tempor cum soluta nobis eleifend option congue nihil
                                    imperdiet doming id quod mazim.</div>
                                <div class="txt3">Read More</div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="thumb2 animated" data-animation="flipInY" data-animation-delay="600">
                    <div class="thumbnail clearfix">
                        <a href="#">
                            <figure class="">
                                <img src="{{ url('assest/images/why4.png') }}" alt=""
                                    class="img1 img-responsive">
                                <img src="{{ url('assest/images/why4_hover.png') }}" alt=""
                                    class="img2 img-responsive">
                            </figure>
                            <div class="caption">
                                <div class="txt1">Nice Support</div>
                                <div class="txt2">Nam liber tempor cum soluta nobis eleifend option congue nihil
                                    imperdiet doming id quod mazim.</div>
                                <div class="txt3">Read More</div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="what1">
    <div class="container">

        <h2 class="animated" data-animation="fadeInUp" data-animation-delay="200">WHAT WE OFFER ?</h2>

        <div class="title1 animated" data-animation="fadeInUp" data-animation-delay="300">Lorem ipsum dolor sit amet,
            consectetuer adipiscing elit, sed diam nonummy nibh euismod <br>tincidunt ut laoreet dolore magna aliquam
            erat volutpat.</div>

        <br>

        <div class="row">
            <div class="col-sm-6 animated" data-animation="fadeInLeft" data-animation-delay="400">
                <ul class="ul2">
                    <li><a href="#">Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet;</a>
                    </li>
                    <li><a href="#">Option congue nihil imperdiet doming id quod mazim placerat facer;</a></li>
                    <li><a href="#">Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes;</a>
                    </li>
                    <li><a href="#">Investigationes demonstraverunt lectores</a></li>
                </ul>
            </div>
            <div class="col-sm-6 animated" data-animation="fadeInRight" data-animation-delay="400">
                <blockquote class="blockquote0">
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut
                    laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation
                    ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Eodem modo typi, qui nunc
                    nobis videntur parum clari, fiant sollemnes in futurum. Ut wisi enim ad minim veniam, quis nostrud
                    exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
                </blockquote>
            </div>
        </div>

    </div>
</div>

<div id="company1">
    <div class="container">

        <h2 class="animated" data-animation="fadeInUp" data-animation-delay="200">ABOUT OUR COMPANY</h2>

        <div class="title1 animated" data-animation="fadeInUp" data-animation-delay="300">Lorem ipsum dolor sit amet,
            consectetuer adipiscing elit, sed diam nonummy nibh euismod <br>tincidunt ut laoreet dolore magna aliquam
            erat volutpat.</div>

        <br>

        <div class="row">
            <div class="col-sm-12 col-md-6 col-md-push-6">
                <div class="content">
                    <div class="txt1 animated" data-animation="fadeIn" data-animation-delay="300">TRAVEL AGENCY</div>
                    <div class="txt2 animated" data-animation="fadeIn" data-animation-delay="300">Lorem ipsum dolor
                        sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet
                        dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation
                        ullamcorper suscipit.</div>




                    <div class="distance1 animated" data-animation="fadeInUp" data-animation-delay="0">
                        <div class="txt">Flights</div>
                        <div class="bg">
                            <div class="animated-distance" data-num="94" data-duration="1300"
                                data-animation-delay="0"><span></span></div>
                        </div>
                    </div>

                    <div class="distance1 animated" data-animation="fadeInUp" data-animation-delay="100">
                        <div class="txt">Hotels</div>
                        <div class="bg">
                            <div class="animated-distance" data-num="87" data-duration="1300"
                                data-animation-delay="100"><span></span></div>
                        </div>
                    </div>

                    <div class="distance1 animated" data-animation="fadeInUp" data-animation-delay="200">
                        <div class="txt">Cars</div>
                        <div class="bg">
                            <div class="animated-distance" data-num="45" data-duration="1300"
                                data-animation-delay="200"><span></span></div>
                        </div>
                    </div>

                    <div class="distance1 animated" data-animation="fadeInUp" data-animation-delay="300">
                        <div class="txt">Cruises</div>
                        <div class="bg">
                            <div class="animated-distance" data-num="51" data-duration="1300"
                                data-animation-delay="300"><span></span></div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-md-pull-6">
                <img src="{{ url('assest/images/company1.png') }}" alt=""
                    class="img1 img-responsive animated" data-animation="fadeInLeft" data-animation-delay="300">
            </div>
        </div>
    </div>
</div>

<div id="team1">
    <div class="container">

        <h2 class="animated" data-animation="fadeInUp" data-animation-delay="200">OUR TEAM</h2>

        <div class="title1 animated" data-animation="fadeInUp" data-animation-delay="300">Lorem ipsum dolor sit amet,
            consectetuer adipiscing elit, sed diam nonummy nibh euismod <br>tincidunt ut laoreet dolore magna aliquam
            erat volutpat.</div>

        <br>

        <div class="row">
            <div class="col-sm-3">
                <div class="thumb3 animated" data-animation="flipInY" data-animation-delay="300">
                    <div class="thumbnail clearfix">
                        <figure class="">
                            <img src="{{ url('assest/images/team01.jpg') }}" alt="" class="img-responsive">
                            <div class="over">Marketing Manager</div>
                        </figure>
                        <div class="caption">
                            <div class="txt1">Jynda Martin</div>
                            <div class="txt2">Nam liber tempor cum soluta nobis eleifend option congue nihil
                                imperdiet doming id quod mazim.</div>
                            <div class="social_sm_wrapper">
                                <ul class="social_sm clearfix">
                                    <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                    <li><a href="#"><i class="fa fa-vimeo-square"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="thumb3 animated" data-animation="flipInY" data-animation-delay="400">
                    <div class="thumbnail clearfix">
                        <figure class="">
                            <img src="{{ url('assest/images/team02.jpg') }}" alt="" class="img-responsive">
                            <div class="over">Site Administrator</div>
                        </figure>
                        <div class="caption">
                            <div class="txt1">George Smith</div>
                            <div class="txt2">Nam liber tempor cum soluta nobis eleifend option congue nihil
                                imperdiet doming id quod mazim.</div>
                            <div class="social_sm_wrapper">
                                <ul class="social_sm clearfix">
                                    <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                    <li><a href="#"><i class="fa fa-vimeo-square"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="thumb3 animated" data-animation="flipInY" data-animation-delay="500">
                    <div class="thumbnail clearfix">
                        <figure class="">
                            <img src="{{ url('assest/images/team03.jpg') }}" alt="" class="img-responsive">
                            <div class="over">Tour Operator</div>
                        </figure>
                        <div class="caption">
                            <div class="txt1">Bill Amadeus</div>
                            <div class="txt2">Nam liber tempor cum soluta nobis eleifend option congue nihil
                                imperdiet doming id quod mazim.</div>
                            <div class="social_sm_wrapper">
                                <ul class="social_sm clearfix">
                                    <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                    <li><a href="#"><i class="fa fa-vimeo-square"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="thumb3 animated" data-animation="flipInY" data-animation-delay="600">
                    <div class="thumbnail clearfix">
                        <figure class="">
                            <img src="{{ url('assest/images/team04.jpg') }}" alt="" class="img-responsive">
                            <div class="over">Director</div>
                        </figure>
                        <div class="caption">
                            <div class="txt1">Amanda Stoun</div>
                            <div class="txt2">Nam liber tempor cum soluta nobis eleifend option congue nihil
                                imperdiet doming id quod mazim.</div>
                            <div class="social_sm_wrapper">
                                <ul class="social_sm clearfix">
                                    <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                    <li><a href="#"><i class="fa fa-vimeo-square"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    </div>
</div>

<div class="bot1_wrapper">
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="logo2_wrapper">
                    <a href="{{ url('/') }}" class="logo2">
                        <img src="{{ url('assest/images/logo2.png') }}" alt="" class="img-responsive">
                    </a>
                </div>
                <p>
                    Nam liber tempor cum soluta nobis option congue nihil imperdiet doming id quod mazim. Lorem ipsum
                    dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet
                    dolore magna.
                </p>
                <p>
                    <a href="#" class="btn-default btn2">Read More</a>
                </p>
            </div>
            <div class="col-sm-3">
                <div class="bot1_title">Travel Specialists</div>
                <ul class="ul1">
                    <li><a href="#">First Class Flights</a></li>
                    <li><a href="#">Accessible Travel</a></li>
                    <li><a href="#">Amazing Cruises</a></li>
                </ul>

                <div class="social2_wrapper">
                    <ul class="social2 clearfix">
                        <li class="nav1"><a href="#"></a></li>
                        <li class="nav2"><a href="#"></a></li>
                        <li class="nav3"><a href="#"></a></li>
                        <li class="nav4"><a href="#"></a></li>
                        <li class="nav5"><a href="#"></a></li>
                        <li class="nav6"><a href="#"></a></li>
                    </ul>
                </div>

            </div>
            <div class="col-sm-3">
                <div class="bot1_title">Our Twitter</div>
                <div class="twits1">
                    <div class="twit1">
                        <a href="#"> @travel</a> Lorem ipsum dolor sit amet, consectetuer adipiscing elit
                        <div class="date">5 minutes ago</div>
                    </div>
                    <div class="twit1">
                        <a href="#">@leo</a> Nam liber tempor cum soluta nobis option congue nihil imperdiet
                        doming id quod mazim.
                        <div class="date">2 days ago</div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="bot1_title">Newsletter</div>
                <div class="newsletter_block">
                    <div class="txt1">Inspiration, ideas, news and your feedback.</div>
                    <div class="newsletter-wrapper clearfix">
                        <form class="newsletter" action="javascript:;">
                            <input type="text" name="s" value='Email Address'
                                onBlur="if(this.value=='') this.value='Email Address'"
                                onFocus="if(this.value =='Email Address' ) this.value=''">
                            <a href="#" class="btn-default btn3">SUBMIT</a>
                        </form>
                    </div>
                </div>
                <div class="phone2">1-917-338-6831</div>
                <div class="support1"><a href="#">support-support.com</a></div>
            </div>
        </div>
    </div>
</div>

<div class="bot2_wrapper">
    <div class="container">
        <div class="left_side">
            Copyright © 2017 <a href="#" target="_blank"><strong>MECOVACHE</strong></a> <span>|</span> <a
                href="#">Privacy Policy</a> <span>|</span> <a href="#">About Us</a> <span>|</span> <a
                href="#">FAQ</a> <span>|</span> <a href="#">Contact Support</a>
        </div>
        <div class="right_side">Designed by <a href="#" target="_blank"><strong>MECOVACHE</strong></a></div>
    </div>
</div>
@endsection





















</div>
<script src="{{ url('assest/') }/js/bootstrap.min.js"></script>
</body>

<!-- Mirrored from demo.gridgum.com/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 14 Aug 2023 06:35:50 GMT -->

</html>
