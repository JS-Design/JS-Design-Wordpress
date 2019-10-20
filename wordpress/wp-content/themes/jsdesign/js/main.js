var $play_animation = sessionStorage.getItem("play_animation");

$(document).ready(function(){
    // Session Storage example
    // if (typeof(Storage) !== "undefined") {
    // sessionStorage.setItem("lastname", "Smith");
    // document.getElementById("result").innerHTML = sessionStorage.getItem("lastname");
    // } else {
    //     document.getElementById("result").innerHTML = "Sorry, your browser does
    // }
    if ($('body').hasClass('home')) {
        
        $('footer').css('display', 'none');
        $('.footer-triangle').css('display', 'none');
        
        if ($play_animation == null) {
            
            $('.top-nav').addClass('hidden');
            $('.transition-elements').addClass('first-animation');

            setTimeout(function(){
                
                $('.logo-wrapper-fixed').removeClass('hidden');
                $('.logo-text').removeClass('hidden');

                setTimeout(function(){

                        $('body').on("wheel touchmove click", function() {
                            
                            setTimeout(function(){
                                
                                $('.logo-wrapper-fixed').addClass('slide-out');
                                $('.banner-quote-div').removeClass('hidden');
                                $('.top-nav').removeClass('hidden');
                                $('.home').removeClass('no-scroll');
        
                            }, 1000);
        
                            if (typeof(Storage) !== "undefined") {
        
                                sessionStorage.setItem("play_animation", false);
                                $play_animation = sessionStorage.getItem("play_animation");
                        
                            };
                    });
                    
                },1000);

            }, 2000);
            
        } else {
            
            $('.transition-elements').addClass('default');
            
            setTimeout(function() {

                $('.banner-quote-div').removeClass('hidden');

            },2000);

        };
        
    };
    
    if ($play_animation !== null) {

        //If the user has seen initial animation play default transtion
        $('.transition-elements').addClass('default');

    };

    if ($('body').hasClass('page-template-sub-page')) {

        $('#top-nav').addClass('scrolled');

        //Changes images on sub-page
        $('.extra-content-btn').each(function() {

            $(this).hover(
                function(){
                    var proj = $(this).attr('data-project');
                    $('.default-image').addClass('hide-img');
                    $('.proj-img[data-img="' + proj + '"]').addClass('show-img');
                },
                function(){
                    $('.proj-img').removeClass('show-img');
                    $('.default-image').removeClass('hide-img');
                    $('.default-image').addClass('show-img');
                }
            );
        });

        $('body').on("scroll", function () {

            $('#catch-content').toggleClass("toggled", $(this).scrollTop() > 900);
        //    $('.default-image').toggleClass("hide-img", $(this).scrollTop() > 370);
        
        });
    
        // This is the new and improoved way of moving the shark and ball
        // using only javascript(Much simpler & efficient)
        //Moves elements in sub-page relative to the mouse
        if( jQuery('#catch-content').length ) {
            let moving_image = document.getElementById("catch-content");
            moving_image.addEventListener('mousemove', e => {
                var sharkx = e.pageX*-0.1;
                var sharky = e.pageY*-0.1;
                var shark = $("#moving-image-1");
                shark.css('position', 'absolute');
                shark.css("left", sharkx);
                shark.css("bottom", sharky);

                var ballx = e.pageX*0.04;
                var bally = e.pageY*0.04;
                var ball = $("#moving-image-2");
                ball.css('position', 'absolute');
                ball.css("left", ballx);
                ball.css("bottom", bally);
            });
        };

        // This is the old way of making the shark and Ball move, i have not removed it
        // because i didnt want to
        // its more complex and less efficient than the other one as it uses css and JS
        /////////////////////////////////////////////////////////////
        // let root = document.documentElement;
        // let moving_image = document.getElementById("catch-content");

        // moving_image.addEventListener("mousemove", e => {
        //   console.log(e);
        //   root.style.setProperty('--mouse-x', e.pageX - moving_image.offsetLeft + "px");
        //   root.style.setProperty('--mouse-y', e.pageY - moving_image.offsetTop + "px");
        // });
    
    };

    $('.slider-for').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        dots: true,
        autoplay: true,
        speed: 3000,
        autoplaySpeed: 4500,
        fade: true,
    });

    //Hide and show images in Extra-content (Sub-page.php)

    // Simpler way of adding page transitions, however
    // There is more work in the HTML styling
    // $('.go-to-link').click(function(e) {
    //     e.preventDefault();
    //     $('.animation-elements').addClass('toggled');
    //     var url = $(this).attr('href');
    //     setTimeout(function() {
    //         window.location = url;
    //     }, 1000);
    // });

    // Play Animation on <a> click globally
    $('a').each(function() { /* [1] */
        if ( location.hostname === this.hostname || !this.hostname.length ) { /* [1] */
            var link = $(this).attr("href"); /* [2] */
            if ( link.match("^#") ) { /* [3] */
                $(this).click(function() {
                    var target = $(link); /* [4] */ 
                    target = target.length ? target : $('[name=' + this.hash.slice(1) +']'); /* [4] */ 
                    if (target.length) {
                        $('html,body').animate({ /* [5] */ 
                            scrollTop: target.offset().top - 70 /* [5] */ 
                        }, 1000); return false; /* [5] */ 
                    }
                });
            } else if ( link.match("^mailto") ) { /* [6] */ 
                // Act as normal  /* [6] */ 
            } else {
                $(this).click(function(e) {
                    e.preventDefault(); /* [7] */ 
                    $('.transition-elements').removeClass('default'); /* [8] */ 
                    $('.transition-elements').addClass('toggled'); /* [8] */ 
                    setTimeout(function() { /* [9] */
                        window.location = link; /* [9] */
                    }, 1000); /* [9] */
                });
            }
        }
    });

    var c, currentScrollTop = 0,
         navbar = $('#top-nav');
  
    $('body').scroll(function () {
        var a = $(this).scrollTop();
        var b = navbar.height();
       
        currentScrollTop = a;
       
        if (c < currentScrollTop && a > b + b) {
          navbar.addClass("hidden");
        } else if (c > currentScrollTop && !(a <= b)) {
          navbar.removeClass("hidden");
        }
        c = currentScrollTop;
    });

});

// $('.top-level-home-page-button').hover(
//     function () {
//         var slideNo = $(this).attr('data-slick-index');
//         // console.log(slideNo);
//         $('.banner-slider').slick('slickGoTo', slideNo - 1);
//     },
//     function () {
//         // $(this).find('.overlay').removeClass('show');
//     }
// );

