


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous" ></script>
        <!-- Wow -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.js" integrity="sha512-Rd5Gf5A6chsunOJte+gKWyECMqkG8MgBYD1u80LOOJBfl6ka9CtatRrD4P0P5Q5V/z/ecvOCSYC8tLoWNrCpPg==" crossorigin="anonymous"></script>
        <!-- owl -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js" integrity="sha512-gY25nC63ddE0LcLPhxUJGFxa2GoIyA5FLym4UJqHDEMHjp8RET6Zn/SHo1sltt3WuVtqfyxECP38/daUc/WVEA==" crossorigin="anonymous" referrerpolicy="no-referrer" ></script>
        <!-- smoth Scrollbar -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/smooth-scrollbar/8.6.1/smooth-scrollbar.js" integrity="sha512-3Csz15JaSnj/L3/crtY2nJ0SJusskVc+wjv6qqC31RKV+JRLnV0kXZhodM+pkOKT71UZjJauQjSJuErMsrro+g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/smooth-scrollbar/8.6.1/smooth-scrollbar.min.js" integrity="sha512-UmrYi6FvCoDgKRTzLOvAj/egIrJtoTIQV0u/stO1h5f4DQNcXnhwnY0rel5zduc3CNqO6LfVI8ZaGUKCrLIo7g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js" integrity="sha512-qTXRIMyZIFb8iQcfjXWCO8+M5Tbc38Qi5WzdPOYZHIlZpzBHG3L3by84BBBOiRGiEb7KKtAOAs5qYdUiZiQNNQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script>
            if (screen.width >= 1024 && !navigator.userAgent.includes('Firefox'))
            {
                $('body').css({'height':'6000px'});
                Scrollbar.init(document.querySelector('.my-scrollbar'));
            }
            $('.topcarop').owlCarousel({
                center: true,
                items:2,
                loop:true,
                margin:10,
                dots:false,
                responsive:{
                    0:{
                        items:1
                    },
                    600:{
                        items:3
                    },
                    1000:{
                        items:3
                    }
                }
            });
            $('.videos').owlCarousel({
                center: true,
                items:1,
                loop:true,
                margin:0,
                dots:false,
                responsive:{
                    0:{
                        items:1
                    },
                    600:{
                        items:1
                    },
                    1000:{
                        items:1
                    }
                }
            });
            $('.artivle').owlCarousel({
                loop:true,
                margin:10,
                nav:false,
                dots:false,
                autoplay:true,
                autoplayTimeout:4000,
                autoplayHoverPause:true,
                responsive:{
                    0:{
                        items:1
                    },
                    600:{
                        items:3
                    },
                    1000:{
                        items:4
                    }
                }
            })
            var Scrollbar = window.Scrollbar;
            const options = {
                damping: 0.5,
                thumbMinSize: 20,
                renderByPixels: !('ontouchstart' in document),
                alwaysShowTracks: false,
                continuousScrolling: true,
            };
            new WOW().init();


            // var body = document.getElementsByTagName('body')[0];
            // var js = document.createElement("script");

            // js.type = "text/javascript";
            // if(url.includes('dashboard'))
            // {
            //     js.src = "../assets/js/main.js";
            // }
            // else
            // {
            //     js.src = "assets/js/main.js";
            // }

            // body.appendChild(js);

        </script>
        <script type="text/javascript" src="{{ URL::asset('js/main.js') }}"></script>
        <noscript>Your browser does not support JavaScript!</noscript>
