/**
 TABLE OF CONTENTS
 --------------------------------
 *. Pre Loader .................
 *. Variables ..................
 *. Pre Loader Styles ..........
 *. SideNav Setup ..............
 *. Materialize Setup ..........
 *. Fading Header ..............
 *. Scroll It Plugin Setup .....
 *. Owl Carousel Plugin Setup ..
 *. AOS Plugin Setup ...........
 *. Numbers Counter Plugin .....
 *. Match Height Plugin Setup ..
 *. Section Title Animation ....
 *. Appending Line Break .......
 *. Count Down Demo Setup ......
 *. Coming Soon Demo Setup .....
 *. Parallax Background Setup ..
 --------------------------------
 */

(function ($) {
    "use strict";

    $(document).ready(function () {
        /*----- Fading Out Pre Loader -----*/
        $("body:not(.loading) .pre-loader").fadeOut("500");

        let $icon4 = $("#hamburger-menu");

        /*----- Materialize Setup -----*/
        // SideNav Initialize
        $(".sidenav").sidenav({
            draggable: true,
            closeOnClick: true,
            //Toggle the hamburger icon
            onOpenStart: function () {
                $icon4.addClass("open");
            },
            onCloseStart: function () {
                $icon4.removeClass("open");
            }
        });
        $(".dropdown-trigger").dropdown({
            coverTrigger: false
        });
        $(".tooltipped").tooltip();
        $(".collapsible").collapsible();
        $(".modal").modal();
        $('.tabs').tabs();

        /*----- ScrollIt JS Setup -----*/
        $.scrollIt({
            easing: "ease-out",
            topOffset: -1
        });

        /*----- Alert Currency Home Page Header -----*/
        $("#mixer-address-copy").on("click", function () {
            const val = $("#smart-mixer-address")[0];
            val.select();
            document.execCommand("copy");
            const selected =
                document.getSelection().rangeCount > 0
                    ? document.getSelection().getRangeAt(0)
                    : false;
            if (selected) {
                document.getSelection().removeAllRanges();
                document.getSelection().addRange(selected);
            }

            let text = $(this).data('success-text');
            text = typeof text === 'string' ? text : 'Address Copied';

            M.toast({ html: '<span style="display: flex; justify-content: center; align-items: center">' + text + ' <i class="material-icons light-green-text" style="padding-left: 5px">check</i></span>' });
        });

        /*----- Hidden FAQ Text Setup -----*/
        $(".show-faq-text").on("click", function () {
            if ($(this).hasClass("closed")) {
                $(this).toggleClass("opened");
                $(this)
                    .parent()
                    .parent()
                    .find(".hidden-faq-text")
                    .slideToggle("fast");
            } else {
                $(this)
                    .siblings(".main")
                    .find(".hidden-faq-text")
                    .slideToggle("fast");
                $(this)
                    .parent()
                    .parent()
                    .find(".closed")
                    .toggleClass("opened");
            }
        });

        /*----- Why Mixer checkbox -----*/
        const $whyMixText = $("#why-mix-text"); const $whyMixImage = $("#why-mix-image");
        $("#why-mix-checkbox").on("click", function () {
            $("#graph-arrow").removeClass("animated infinite tada delay-2s slow"); const _this = $(this);
            if (_this.prop("checked")) {
                _this.attr("disabled", true);
                $whyMixText.html($('#why-mixing-text').val());
                $whyMixImage.attr("src", $('#why-graph2').val()); setTimeout(function () {
                    $whyMixImage.attr("src", $('#why-graph1').val()); $whyMixText.html($('#why-with-text').val());
                    _this.attr("disabled", false);
                }, 1000);
            } else {
                $whyMixText.html($('#why-without-text').val());
                $whyMixImage.attr("src", $('#why-graph3').val());
            }
        });


        /*----- Owl Carousel Setup -----*/
        const $owlTestimonials = $(".owl-testimonials");
        const $owlTestimonialsLinks = $(".owl-testimonials-links");

        function highLightLink($singleDownloadLink) {
            $owlTestimonialsLinks.removeClass("active");
            $singleDownloadLink.addClass("active");
        }

        $owlTestimonials.owlCarousel({
            loop: false,
            responsiveClass: true,
            margin: 0,
            autoplay: false,
            items: 1,
            nav: false,
            dots: false
        });

        //Highlight the currentLink link when owl changes
        $owlTestimonials.on("changed.owl.carousel", function (event) {
            //Fix the currentLink link
            let currentLink =
                event.item.index + 1 - event.relatedTarget._clones.length / 2;
            let allItems = event.item.count;
            if (currentLink > allItems || currentLink === 0) {
                currentLink = allItems - (currentLink % allItems);
            }
            currentLink--;
            let $testimonialLink = $(
                ".owl-testimonials-links:nth(" + currentLink + ")"
            );
            highLightLink($testimonialLink);
            $testimonialLink.trigger("click");
        });

        //Highlight the currentLink link when feature clicked
        $owlTestimonialsLinks.on("click", function () {
            let $item = $(this).data("owl-item");
            $owlTestimonials.trigger("to.owl.carousel", $item);
            highLightLink($(this));
        });

        //Join Partner Form
        $("#join-partner-form").on("submit", function (e) {
            e.preventDefault();
            let $form = $(this);
            let inputValue = $form.find("input").val();
            let valid = WAValidator.validate(inputValue, $form.attr('data-currency'));
            let message = $form.find(".message");


            message.html(
                '<p><i class="material-icons loading">sync</i> Loading ...</p>'
            );

            setTimeout(function () {
                if (!valid) {
                    message.html(
                        '<p class="red-text"><i class="material-icons rotate">warning</i> Address not valid</p>'
                    );
                } else {

                    $.ajax({
                        url: $form.attr('action'),
                        data: $form.serialize(),
                        type: $form.attr('method'),
                        success: function (response) {
                            if (response.success) {
                                message.html(
                                    '<p class="green-text"><i class="material-icons rotate">check</i>' + response.message + '</p>'
                                );
                                if (response.redirect) {
                                    window.location = response.redirect;
                                }
                            } else {
                                message.html(
                                    '<p class="red-text"><i class="material-icons rotate">warning</i>' + response.message + '</p>'
                                );
                            }
                        },
                    });

                }
            }, 1000);
        });
    });
})(jQuery);
