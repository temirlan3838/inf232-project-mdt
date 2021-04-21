$(document).ready(function () {
    //---------------------------------------------------
    // $(".cart").on("click", function () {
    //     alert("Cart button is clicked");
    // });
    // $(".view").on("click", function () {
    //     alert("View button is clicked");
    // });
    $(".subscribe").on("click", function () {
        document.getElementById("em").value = "";
        $(".mes_n").animate(
            {
                opacity: "1",
            },
            800
        );
    });
    $(".close").on("click", function () {
        $(".mes_n").animate(
            {
                opacity: "0",
            },
            800
        );
    });
    $(".v_det").hide();
    $(".v_det2").hide();
    $(".detail").on("click", function () {
        event.preventDefault();
        $(".v_det").show(700);
    });
    $(".detail2").on("click", function () {
        event.preventDefault();
        $(".v_det2").show(700);
    });
    var cnt = 0;
    var cnt1 = 0;
    $(".addto1").on("click", function () {
        event.preventDefault();
        if (cnt < 1) {
            alert("Product is added to cart!");
        }
        if (cnt >= 1) {
            alert("Product already added to the cart!");
        }
        cnt++;
    });
    $(".addto2").on("click", function () {
        event.preventDefault();
        if (cnt1 < 1) {
            alert("Product is added to cart!");
        }
        if (cnt1 >= 1) {
            alert("Product already added to the cart!");
        }
        cnt1++;
    });
    $(".learn").on("click", function () {
        event.preventDefault();
        $(".learn_more").show(700);
        $(".ler").animate(
            {
                opacity: "1",
            },
            800
        );
    });
    $(".ler").on("click", function () {
        event.preventDefault();
        $(".learn_more").hide(700);
        $(".ler").animate(
            {
                opacity: "0",
            },
            800
        );
    });
    $(".learn_more").hide();
    $(".more").on("click", function () {
        event.preventDefault();
        alert("Learn more is clicked.");
    });
    //-----------------------------------------------------------
    var header = $("#header"),
        introH = $("#intro").innerHeight(),
        scrollOffset = $(window).scrollTop();
    /* Fixed Header */
    checkScroll(scrollOffset);
    $(window).on("scroll", function () {
        scrollOffset = $(this).scrollTop();
        checkScroll(scrollOffset);
    });

    function checkScroll(scrollOffset) {
        if (scrollOffset >= introH) {
            header.addClass("fixed");
        } else {
            header.removeClass("fixed");
        }
    }
    // CONTACT US FORM

    // Burger menu
    $("#burger").on("click", function (event) {
        event.preventDefault();
        $(this).toggleClass("active");
        $("#nav").toggleClass("active");
    });
    // SCROLL EFFECt
    $("[data-scroll]").on("click", function (event) {
        event.preventDefault();
        var $this = $(this),
            blockId = $this.data("scroll"),
            blockOffset = $(blockId).offset().top;
        $("#nav a").removeClass("active");
        $this.addClass("active");
        $("html, body").animate(
            {
                scrollTop: blockOffset,
            },
            750
        );
    });
});
