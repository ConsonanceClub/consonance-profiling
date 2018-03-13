/* Author	:	Kayc */
!function (e) {
    "use strict";
    var a = e(window), i = e("body");
    i.hasClass("overflow-scroll") || i.addClass("overflow-scroll"), e('a.nav-item[href*="#"]:not([href="#"])').on("click", function () {
        if (location.pathname.replace(/^\//, "") === this.pathname.replace(/^\//, "") && location.hostname === this.hostname) {
            var a = e(this.hash), i = !!this.hash.slice(1) && e("[name=" + this.hash.slice(1) + "]");
            if ((a = a.length ? a : i).length)return e("html, body").animate({scrollTop: a.offset().top - 70}, 1e3, "easeInOutExpo"), !1
        }
    }), e(".nav-item").on("click", function () {
        e(".navbar-collapse").collapse("hide"), e(".dropdown").removeClass("open").children(".dropdown-menu").removeAttr("style")
    });
    var l = e(".dropdown");
    l.length > 0 && (l.on("mouseover", function () {
        a.width() > 991 && (e(".dropdown-menu", this).not(".in .dropdown-menu").stop().fadeIn("400"), e(this).addClass("open"))
    }), l.on("mouseleave", function () {
        a.width() > 991 && (e(".dropdown-menu", this).not(".in .dropdown-menu").stop().fadeOut("400"), e(this).removeClass("open"))
    }), l.on("click", function () {
        if (a.width() < 991)return e(this).children(".dropdown-menu").slideToggle(500), !1
    })), a.on("resize", function () {
        e(".navbar-collapse").removeClass("in"), l.children(".dropdown-menu").fadeOut("400")
    }), i.scrollspy({target: "#navigation", offset: 90});
    var t = e(".video-play");
    t.length > 0 && t.magnificPopup({type: "iframe", removalDelay: 160, preloader: !0, fixedContentPos: !1});
    var n = e(".content-popup");
    n.length > 0 && n.magnificPopup({
        type: "inline",
        preloader: !0,
        removalDelay: 400,
        mainClass: "mfp-fade bg-gradiant"
    });
    var r = e(".has-carousel");
    r.length > 0 && r.each(function () {
        var a = e(this), i = a.data("items") ? a.data("items") : 4, l = i >= 3 ? 3 : i, t = l >= 2 ? 2 : l, n = a.data("delay") ? a.data("delay") : 6e3, r = !!a.data("auto"), s = !!a.data("loop"), d = !!a.data("dots"), o = !!a.data("navs"), h = !!a.data("center"), m = a.data("margin") ? a.data("margin") : 30, f = a.data("animateOut") ? a.data("animateOut") : "fadeOut";
        a.owlCarousel({
            navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
            items: i,
            loop: s,
            nav: o,
            dots: d,
            margin: m,
            center: h,
            animateOut: f,
            autoplay: r,
            autoplayTimeout: n,
            autoplaySpeed: 300,
            responsive: {0: {items: 1}, 480: {items: t}, 768: {items: l}, 1170: {items: i}}
        })
    });
    var s = e(".imagebg");
    s.length > 0 && s.each(function () {
        var a = e(this), i = a.parent(), l = a.data("overlay"), t = a.children("img").attr("src"), n = void 0 !== l && "" !== l && l.split("-");
        void 0 !== t && "" !== t && (i.hasClass("has-bg-image") || i.addClass("has-bg-image"), "" !== n && "dark" === n[0] && (i.hasClass("light") || i.addClass("light")), a.css("background-image", 'url("' + t + '")').addClass("bg-image-loaded"))
    });
    var d = e(".video-background");
    d.length > 0 && d.each(function () {
        e(this).parent().addClass("has-bg-video")
    });
    var o = e("#contact-form");
    if (o.length > 0) {
        if (!e().validate || !e().ajaxSubmit)return console.log("quoteForm: jQuery Form or Form Validate not Defined."), !0;
        if (o.length > 0) {
            var h = o.find("select.required"), m = o.find(".form-results");
            o.validate({
                invalidHandler: function () {
                    m.slideUp(400)
                }, submitHandler: function (a) {
                    m.slideUp(400), e(a).ajaxSubmit({
                        target: m, dataType: "json", success: function (i) {
                            var l = "error" === i.result ? "alert-danger" : "alert-success";
                            m.removeClass("alert-danger alert-success").addClass("alert " + l).html(i.message).slideDown(400), "error" !== i.result && e(a).clearForm()
                        }
                    })
                }
            }), h.on("change", function () {
                e(this).valid()
            })
        }
    }
    var f = e("#preloader");
    f.length > 0 && e(window).on("load", function () {
        f.children().fadeOut(300), f.delay(150).fadeOut(500), e("body").delay(100).css({overflow: "visible"})
    }), (new WOW).init(), e("#particles-js").length > 0 && particlesJS("particles-js", {
        particles: {
            number: {
                value: 80,
                density: {enable: !0, value_area: 800}
            },
            color: {value: "#ffffff"},
            shape: {
                type: "circle",
                stroke: {width: 0, color: "#000000"},
                polygon: {nb_sides: 5},
                image: {src: "img/github.svg", width: 100, height: 100}
            },
            opacity: {value: .5, random: !1, anim: {enable: !1, speed: 1, opacity_min: .1, sync: !1}},
            size: {value: 3, random: !0, anim: {enable: !1, speed: 40, size_min: .1, sync: !1}},
            line_linked: {enable: !0, distance: 150, color: "#ffffff", opacity: .4, width: 1.3},
            move: {
                enable: !0,
                speed: 6,
                direction: "none",
                random: !1,
                straight: !1,
                out_mode: "out",
                bounce: !1,
                attract: {enable: !1, rotateX: 600, rotateY: 1200}
            }
        },
        interactivity: {
            detect_on: "canvas",
            events: {onhover: {enable: !0, mode: "repulse"}, onclick: {enable: !0, mode: "push"}, resize: !0},
            modes: {
                grab: {distance: 400, line_linked: {opacity: 1}},
                bubble: {distance: 400, size: 40, duration: 2, opacity: 8, speed: 3},
                repulse: {distance: 200, duration: .4},
                push: {particles_nb: 4},
                remove: {particles_nb: 2}
            }
        },
        retina_detect: !0
    });
    // var c = window.location.href;
    // e(".dropdown li a").each(function () {
    //     c === this.href && e(this).closest("li").addClass("active")
    // })
}(jQuery);