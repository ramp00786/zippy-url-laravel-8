
<!DOCTYPE html>
<html lang="en">

<head>
    <title>ZippyURL - Free URL Shortener Service | Link Less, Achieve More</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="keywords" content="URL shortener, short URL, link shortener, free URL shortener, ZippyURL">
    <meta name="description" content="ZippyURL offers a free URL shortening service. Create short links quickly and easily with our secure platform. Link Less, Achieve More.">

    

    <link rel="stylesheet" href="{{url('/')}}/theme/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{url('/')}}/theme/css/all.min.css">
    <link rel="stylesheet" href="{{url('/')}}/theme/css/animate.css">
    <link rel="stylesheet" href="{{url('/')}}/theme/css/nice-select.css">
    <link rel="stylesheet" href="{{url('/')}}/theme/css/owl.min.css">
    <link rel="stylesheet" href="{{url('/')}}/theme/css/magnific-popup.css">
    <link rel="stylesheet" href="{{url('/')}}/theme/css/flaticon.css">
    <link rel="stylesheet" href="{{url('/')}}/theme/css/main.css">

    <link rel="apple-touch-icon" sizes="180x180" href="{{url('/theme/favicon_io')}}/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="{{url('/theme/favicon_io')}}/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="{{url('/theme/favicon_io')}}/favicon-16x16.png">
    <link rel="manifest" href="{{url('/theme/favicon_io')}}/site.webmanifest">

    <script type="application/ld+json">
        {
          "@context": "https://schema.org",
          "@type": "WebPage",
          "name": "ZippyURL - Free URL Shortener Service",
          "description": "ZippyURL offers a free URL shortening service. Create short links quickly and easily with our secure platform.",
          "url": "https://pro.intactautomation.com/zippy-url"
        }
        </script>

        

</head>

<body>
    <!--============= ScrollToTop Section Starts Here =============-->
    <div class="overlayer" id="overlayer">
        <div class="loader">
            <div class="loader-inner"></div>
        </div>
    </div>
    <a href="#0" class="scrollToTop"><i class="fas fa-angle-up"></i></a>
    <div class="overlay"></div>
    <!--============= ScrollToTop Section Ends Here =============-->


    <!--============= Header Section Starts Here =============-->
    <header class="header-section">
        <div class="container">
            <div class="header-wrapper">
                <div class="logo">
                    <a href="index.html">
                        <img src="{{url('/')}}/theme/favicon_io/android-chrome-512x512.png" alt="logo">
                    </a>
                </div>

                

                {{-- MoES-WithText --}}
                
            </div>
        </div>
    </header>
    <!--============= Header Section Ends Here =============-->


    <!--============= Banner Section Starts Here =============-->
    <section class="banner-section">
        <div class="banner-bg bg_img" data-background="{{url('/')}}/theme/images/banner/banner-bg.jpg">
            <div class="banner-bg-shape"><img src="{{url('/')}}/theme/images/banner/banner-shape.png" alt="banner"></div>
            <div class="round-1">
                <img src="{{url('/')}}/theme/images/banner/01.png" alt="banner">
            </div>
            <div class="round-2">
                <img src="{{url('/')}}/theme/images/banner/02.png" alt="banner">
            </div>
        </div>
        <div class="container">
            <div class="banner-content">
                
                <h1 style="font-size: 30px; margin-bottom: 40px">Welcome to ZippyURL - Free URL Shortener Service</h1>
                <h2 class="title">Short Your URLs</h2>
                <h3 class="cate">Link Less, Achieve More</h3>
                <p style="font-size: 12px;">ZippyURL simplifies your links by converting long URLs into shorter, manageable ones. Whether for personal use or business, our free URL shortening service helps you share links easily and securely. With ZippyURL, Link Less, Achieve More.</p>
                
            </div>
            <div class="banner-form-group"  >
                <h3 class="subtitle">Shorten URL Is Just Simple</h3>
                <form class="banner-form" action="{{route('convert-url')}}" method="post">
                    @csrf
                    <input type="url" placeholder="Past/Enter Your URL here" name="url" required>
                    <button type="submit">Shorten <i class="flaticon-startup"></i></button>
                </form>
                <div class="banner-counter">
                    <div class="counter-item">
                        <h2 class="counter-title"><span class="counter">{{$counter->total_clicked}}</span>+</h2>
                        <p>Links clicked per day</p>
                    </div>
                    <div class="counter-item" >
                        <h2 class="counter-title"><span class="counter">{{$counter->total_shortened}}</span>+</h2>
                        <p>Shortened links in total</p>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
    <!--============= Banner Section Ends Here =============-->

    <section class="feature-section padding-top oh padding-bottom pb-lg-half bg_img pos-rel" id="result" ></section>
 


    <!--============= Feature Section Starts Here =============-->
    <section class="feature-section padding-top oh padding-bottom pb-lg-half bg_img pos-rel" data-background="{{url('/')}}/theme/images/feature/feature-bg.jpg">
        <div class="top-shape d-none d-md-block">
            <img src="{{url('/')}}/theme/css/img/top-shape.png" alt="css">
        </div>
        <div class="bottom-shape d-none d-md-block mw-0">
            <img src="{{url('/')}}/theme/css/img/bottom-shape.png" alt="css">
        </div>
        <div class="ball-2" data-paroller-factor="-0.30" data-paroller-factor-lg="0.60"
        data-paroller-type="foreground" data-paroller-direction="horizontal">
            <img src="{{url('/')}}/theme/images/balls/1.png" alt="balls">
        </div>
        <div class="ball-3" data-paroller-factor="0.30" data-paroller-factor-lg="-0.30"
        data-paroller-type="foreground" data-paroller-direction="horizontal">
            <img src="{{url('/')}}/theme/images/balls/2.png" alt="balls">
        </div>
        <div class="ball-4" data-paroller-factor="0.30" data-paroller-factor-lg="-0.30"
        data-paroller-type="foreground" data-paroller-direction="horizontal">
            <img src="{{url('/')}}/theme/images/balls/3.png" alt="balls">
        </div>
        <div class="ball-5" data-paroller-factor="0.30" data-paroller-factor-lg="-0.30"
        data-paroller-type="foreground" data-paroller-direction="vertical">
            <img src="{{url('/')}}/theme/images/balls/4.png" alt="balls">
        </div>
        <div class="ball-6" data-paroller-factor="-0.30" data-paroller-factor-lg="0.60"
        data-paroller-type="foreground" data-paroller-direction="horizontal">
            <img src="{{url('/')}}/theme/images/balls/5.png" alt="balls">
        </div>
        <div class="ball-7" data-paroller-factor="-0.30" data-paroller-factor-lg="0.60"
        data-paroller-type="foreground" data-paroller-direction="vertical">
            <img src="{{url('/')}}/theme/images/balls/6.png" alt="balls">
        </div>
        <div class="container" >
            <div class="section-header cl-white">
                <!-- <h5 class="cate">Choose a plan that's right for you</h5> -->
                <h2 class="title mt-md-0">Your Shortened URL Here</h2>
                
            </div>
            <div class="tab"  >
                <ul class="tab-menu feature-tab">
                    <li>
                        
                    </li>
                    
                </ul>
                <div class="tab-area" >
                    <div class="tab-item active">
                        <div class="feature-item">
                            
                            <h3 class="title" id="shortened_url" onclick="copyToClipboard()">{{url('/')}}/u/{{$shortenUrls[0]->shortened_url}}</h3>
                            <span id="copied_msg" style="margin-bottom: 10px">&nbsp;</span>
                            <p>{{$shortenUrls[0]->original_url}}</p>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
    <!--============= Feature Section Ends Here =============-->


    


    <!--============= Testimonial Section Starts Here =============-->
    <section class="testimonial-section padding-top padding-bottom pos-rel oh">
        <div class="ball-3 style2 d-none d-lg-block" data-paroller-factor="0.30" data-paroller-factor-lg="-0.30" data-paroller-type="foreground" data-paroller-direction="horizontal">
            <img src="{{url('/')}}/theme/images/client/circle2.png" alt="client">
        </div>
        <div class="ball-6 style2 d-none d-lg-block" data-paroller-factor="-0.30" data-paroller-factor-lg="0.60" data-paroller-type="foreground" data-paroller-direction="horizontal">
            <img src="{{url('/')}}/theme/images/client/circle1.png" alt="client">
        </div>
        <div class="container">
            <div class="row justify-content-between flex-wrap-reverse align-items-center">
                <div class="col-lg-7">
                    <div class="testimonial-wrapper style-two">
                        <a href="#0" class="testi-next trigger">
                            <img src="{{url('/')}}/theme/images/client/left.png" alt="client">
                        </a>
                        <a href="#0" class="testi-prev trigger">
                            <img src="{{url('/')}}/theme/images/client/right.png" alt="client">
                        </a>
                        <div class="testimonial-area testimonial-slider owl-carousel owl-theme">
                            <div class="testimonial-item">
                                <div class="testimonial-thumb">
                                    <div class="thumb">
                                        <img src="{{url('/')}}/theme/images/testimonials/boy.jpg" alt="client">
                                    </div>
                                </div>
                                <div class="testimonial-content">
                                    <div class="ratings">
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                    </div>
                                    <p>
                                        Shorten URL has taken the hassle out of long, clunky links for me.
                                    </p>
                                    <h5 class="title"><a href="#0">Robert John</a></h5>
                                </div>
                            </div>
                            <div class="testimonial-item">
                                <div class="testimonial-thumb">
                                    <div class="thumb">
                                        <img src="{{url('/')}}/theme/images/testimonials/girl.jpg" alt="client">
                                    </div>
                                </div>
                                <div class="testimonial-content">
                                    <div class="ratings">
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                    </div>
                                    <p>
                                        I was impressed with Shorten URL's reliability and uptime.
                                    </p>
                                    <h5 class="title"><a href="#0">Carie Jety</a></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 pl-lg-5">
                    <div class="testi-wrapper">
                        <div class="testi-header">
                            <div class="section-header left-style mb-lg-0">
                                <h5 class="cate">Testimonials</h5>
                                <h2 class="title">Your appreciation is our strength </h2>
                                <a href="#0" class="button-3 active mt-md-2">Leave a review <i class="flaticon-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--============= Testimonial Section Ends Here =============-->

    




    <!--============= Footer Section Starts Here =============-->
    <footer class="footer-section padding-top">
        <div class="footer-bg bg_img" data-background="{{url('/')}}/theme/images/footer/footer-bg.jpg"></div>
        <div class="footer-bg d-md-block d-none"><img src="{{url('/')}}/theme/images/footer/wave.png" alt="footer"></div>
        <div class="container">
            <div class="section-header cl-white-499">
                <h5 class="cate">Contact Us</h5>
                <h2 class="title">Get in touch!</h2>
                <p>We thrive to ensure that you get the most out of your experience</p>
            </div>
            <form class="contact-form" id="contact_form_submit">
                <span id="contact_form_success"></span>
                <div class="alert alert-danger print-error-msg" style="display:none">
                    <ul></ul>
                </div>
                <div class="form-group">
                    <label for="name">Your Full Name</label>
                    <input type="text" name="name" id="full_name" placeholder="Enter Your Full Name">
                </div>
                <div class="form-group">
                    <label for="email">Your Email</label>
                    <input type="text" name="email" id="email" placeholder="Enter Your Email">
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea name="message" id="message" placeholder="Enter Your Message"></textarea>
                </div>
                
                <div class="form-group text-center">
                    <button type="submit" class="btn-submit">Send Message</button>
                </div>
            </form>
            <div class="text-center">
                <h4 class="text-white">Contribute to Development</h4>
                <img src="{{url('/theme/img/qr.jpeg')}}" alt="">
            </div>

            <section class="testimonial-section padding-top padding-bottom pos-rel oh">
                <div class="text-renter text-white" align="center">
                    <ul>
                        <li>- Fast and easy link shortening process</li>
                        <li>- Secure and reliable platform</li>
                        <li>- Customizable short links</li>
                        <li>- Analytics to track link performance</li>
                        <li>- API integration for seamless use across platforms</li>
                        <li>- Open Source</li>
                        <li><a href="{{url('/login')}}" class="btn btn-primary">Login</a> </li>
                    </ul>
                </div>
            </section>

            

            <div class="footer-bottom">
                <div class="footer-bottom-area">
                    <div class="left cl-white">
                        <p><small style="font-size: 14px;"> Developed by: <a target="_blank" class="border-bottom" style="color:white" href="https://www.facebook.com/ramp00786/">Tulsiram Kushwah</a> | For inquiries about the source code, please email me at ramp00786@gmail.com.</small>
                        </p>
                    </div>
                    <ul class="social-icons">
                        <li>
                            <a href="https://www.facebook.com/ramp00786/" target="_blank" class="">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://codecartbazaar.intactautomation.com/tulsiram-kushwah/" target="_blank" class="">
                                <i class="fas fa-globe"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                
            </div>
        </div>
    </footer>
    <!--============= Footer Section Ends Here =============-->


    <script>const app_url = "{{url('/')}}"; </script>
    

    <script src="{{url('/')}}/theme/js/jquery-3.3.1.min.js"></script>
    <script src="{{url('/')}}/theme/js/modernizr-3.6.0.min.js"></script>
    <script src="{{url('/')}}/theme/js/plugins.js"></script>
    <script src="{{url('/')}}/theme/js/bootstrap.min.js"></script>
    <script src="{{url('/')}}/theme/js/wow.min.js"></script>
    <script src="{{url('/')}}/theme/js/waypoints.js"></script>
    <script src="{{url('/')}}/theme/js/nice-select.js"></script>
    <script src="{{url('/')}}/theme/js/counterup.min.js"></script>
    <script src="{{url('/')}}/theme/js/owl.min.js"></script>
    <script src="{{url('/')}}/theme/js/magnific-popup.min.js"></script>
    <script src="{{url('/')}}/theme/js/paroller.js"></script>
    {{-- <script src="{{url('/')}}/theme/js/contact.js"></script> --}}
    <script src="{{url('/')}}/theme/js/main.js"></script>

    <script>
        function copyToClipboard() {
            var link = $('#shortened_url').html();
            navigator.clipboard.writeText(link);
            $('#copied_msg').html('<span id="copied_msg_box">Link copied.</span>&nbsp;');
            $('#copied_msg_box').fadeOut(10000);
        }
    </script>

    <script type="text/javascript">
       

        $(".btn-submit").click(function(e){
    
            e.preventDefault();
        
            var full_name = $("#full_name").val();
            var email = $("#email").val();
            var message = $("#message").val();
            
        
            $.ajax({
            type:'POST',
            url:"{{ route('save-enquiry') }}",
            data:{full_name:full_name, email:email, message:message, "_token": "{{ csrf_token() }}"},
            success:function(data){                    
                    if($.isEmptyObject(data.error)){
                        $(".print-error-msg").html('');
                        $(".print-error-msg").css('display','none');
                        $('#contact_form_success').html('<span id="enquiry_success_box" style="display:block;text-align:center;margin-bottom:20px">Thank you for contact us.!! We will get back to you soon.</span>');
                    }else{
                        printErrorMsg(data.error);
                    }
            },
            error:function(data){
                printErrorMsg(data.responseJSON.errors);
            }
            });

        });

        function printErrorMsg (msg) {
            $(".print-error-msg").find("ul").html('');
            $(".print-error-msg").css('display','block');
            $.each( msg, function( key, value ) {
                $(".print-error-msg").find("ul").append('<li>'+value+'</li>');
            });
        }
        
    </script>


</body>

</html>