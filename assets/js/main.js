jQuery(function($) {
    const img_root = "/wp-content/themes/jiro-bikes/assets";

    $("#vegaslide").vegas({
        slides: [
            // 画像の場合
            //{ src: img_root + "/img/slideshow/slide1.png" },
            //{ src: img_root + "/img/slideshow/slide2.png" },
            //動画の場合
            {
                video: {
                    src:[
                        //img_root + '/videos/bicycle_girl.mp4',
                        img_root + '/videos/bicycle_girl02.mp4',
                    ],
                    loop:true,
                    mute:true,
                }        
            }
        ],
        overlay: img_root + "/js/vegas/overlays/01.png",
        animation: 'kenburns'
    });
});

jQuery(function($){
    $('.about-slick').slick({
        dots: false,
        infinite: true,
        autoplay: true,
        autoplaySpeed: 2000,
        slidesToShow: 3,
        slidesToScroll:1,
        prevArrow: '<button class="slide-arrow prev-arrow"></button>',
        nextArrow: '<button class="slide-arrow next-arrow"></button>',
        responsive: [
            {
              breakpoint: 1600,
              settings: {
                slidesToShow:2,
                slidesToScroll:1,
                infinite: true,
                dots: false
              }
            },
            {
              breakpoint: 1120,
              settings: {
                slidesToShow: 1,
                slidesToScroll:1
              }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
          ]
    });
});


jQuery(function($){
    const openbtn = document.querySelector('.openbtn');
    const overlay = document.querySelector('.navcontainer__overlay');

    openbtn.addEventListener('click', () => {
        openbtn.classList.toggle('active');
        overlay.classList.toggle('active');
    });
});




//トグルメニューのファンクション
// jQuery(function($) {
//     const openMenu = document.querySelector(".openbtn");
//     const closeMenu = document.querySelector(".closebtn")

//     openMenu.addEventListener("click", (event)=> {
//         event.preventDefault();
//         $(".navcontainer__overlay").addClass("activeoverlay");
//     });

//     closeMenu.addEventListener("click", (event)=> {
//         event.preventDefault();
//         $(".navcontainer__overlay").removeClass("activeoverlay");
//         //.animate({opacity:0}, 2000)        
//     });
// });