$(function () {

    let clipboards = new ClipboardJS('.cs-copy-btn');

    $(document).on('click', '.cs-copy-btn', function (e) {
        let $trigger = $(this);
        let content = $trigger.text();
        let color = $trigger.css('background-color');
        $trigger.text('check');
        $trigger.css({
            'background-color': '#12bb3e',
        });
        setTimeout(function () {
            $trigger.text(content);
            $trigger.css({
                'background-color': color,
            });
        }, 500);
    });


    $(document).on('submit', '.referral-payout-balance-form', function (e) {
        e.preventDefault();
        let $form = $(this);
        let $output = $('#referral-payout-output');

        $.ajax({
            url: $form.attr('action'),
            data: $form.serialize(),
            type: $form.attr('method'),
            success: function (response) {
                if (response.success) {
                    $output.html(
                        '<p class="green-text"><i class="material-icons vertical-align-sub">check</i>&nbsp;' + response.message + '</p>'
                    );
                } else {
                    $output.html(
                        '<p class="red-text"><i class="material-icons vertical-align-sub">warning</i>&nbsp;' + response.message + '</p>'
                    );
                }
            },
        });

    });

    $(document).on('click', '.single-faq', function (e) {
        console.log('Clicked FAQ');
        let $faqElement = $(this);
        let isOpened = $faqElement.find('.circle-plus').hasClass('opened');

        let $previewElement = $faqElement.find('.faq--preview');
        let $fullElement = $faqElement.find('.faq--full');

        if (isOpened) {
            $previewElement.hide();
            $fullElement.show();
        } else {
            $previewElement.show();
            $fullElement.hide();
        }

    });


    $(document).on('click', '.prevent--default', function (e) {
        e.preventDefault();
    });

    $(document).on('submit', '#support-form', function (e) {
        e.preventDefault();
        let $form = $(this);
        let $supportErrorElement = $('#support-error-out');

        $.ajax({
            url: $form.attr('action'),
            data: $form.serialize(),
            type: $form.attr('method'),
            success: function (response) {
                if (response.success) {

                    let $supportModal = $("#support-modal");
                    let $supportForm = $("#support-form");
                    let $supportFormOverlay = $("#support-modal .preloader-overlay");
                    let $supportFormSuccess = $("#support-modal .support-form-success");
                    let _this = $form;
                    _this
                        .find("button")
                        .html(
                            '<i class="material-icons">chat_bubble_outline</i> sending message'
                        );
                    $supportModal.addClass("loading");
                    $supportModal.animate(
                        {
                            scrollTop: 0
                        },
                        1
                    );
                    $supportFormOverlay.fadeIn("slow", function () {
                        $(this).removeClass("hidden");
                    });
                    setTimeout(function () {
                        $supportModal.removeClass("loading");
                        _this.fadeOut("slow", function () {
                            _this.addClass("hidden");
                            $supportFormSuccess.removeClass("hidden");
                        });
                        $supportFormOverlay.fadeOut("slow", function () {
                            $(this).addClass("hidden");
                        });
                    }, 2000);
                    $supportErrorElement.html('');

                    // let link = response.data["supportLink"];
                    // console.log(link);
                    // let $linkElement = $('#support-target-link');
                    // $linkElement.text('https://smartmixer.io' + link);
                    // $linkElement.attr('href', link);
                } else {
                    $supportErrorElement.html(
                        '<p class="red-text"><i class="material-icons vertical-align-sub">warning</i>&nbsp;' + response.message + '</p>'
                    );
                }
            },
        });


    });

    $(document).on('change', '#file-letter-support', function (e) {
        openLetter(e);
    });

    function openLetter(event) {
        let input = event.target;
        let reader = new FileReader();
        reader.onload = function () {
            let text = reader.result;
            try {
                $('#letter-content').prop('value', text);
            } catch (e) {
                $('#file-path-validation-support').val('Invalid Letter of Guarantee');
            }
        };
        if (input.files.length > 0) {
            reader.readAsText(input.files[0]);
        } else {
            $('#letter-content').val('');
        }
    }


    $(document).on('click', '.ad-add-cart-listener', function (e) {
        $.fn.projectAddFb('AddToCart');
        $.fn.projectAddGTag('AddToCart');
    });


    $.fn.projectAddFb = function (key) {
        if (typeof $.cookie('showAd') !== 'undefined') {
            try {
                fbq('track', key);
            } catch (e) {
                console.log('Warning FB: ' + key);
            }
        }
    };


    $.fn.projectAddGTag = function (key) {
        if (typeof $.cookie('showAd') !== 'undefined') {
            try {
                dataLayer.push({ 'event': key });
            } catch (e) {
                console.log('Warning GTAG: ' + key);
            }
        }
    };


});