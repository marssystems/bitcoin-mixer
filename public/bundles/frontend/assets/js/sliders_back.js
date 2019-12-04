(function ($) {
    "use strict";

    $(document).ready(function () {
        let addressCodeNum = 2;
        const $reversePercent = $(".reserve-percent");
        const $reverseAlpha = $(".reserve-alpha");
        const $percentageDist = $("#percentage-distribution");
        const transferSliders = $(".slider-transfer");
        const delaySliders = $(".slider-delay");
        const reserveSlider = $("#slider-reserve");
        const $sendAddressInput = $("#sendAddress");
        const $sliderStrength = $("#slider-strength");
        const $mixerForm = $("#mixer-form");
        const $mixerConfirmForm = $("#mixer-confirm-form");
        const $formErrorMsg = $(".form-error-msg");
        const $calculatorStep = $("#calculator-container");
        const $allStepsContainer = $(".step-container");
        const $durationDays = $("#duration-days");
        const $durationHours = $("#duration-hours");
        const $durationMinutes = $("#duration-minutes");
        const $durationSeconds = $("#duration-seconds");
        const $durationDaysName = $("#days-name");
        const $durationHoursName = $("#hours-name");
        const $durationMinutesName = $("#minutes-name");
        const $durationSecondsName = $("#seconds-name");
        const $mixingLoaderBar = $(".mixing-loader-bar div");
        const $reservePercent = $("#reserve-percent");
        const $singleStep = $(".step");

        ///MIXING_PERCENTAGE SHOULD CHANGE DEPENDING ON THE CURRENCY TYPE
        let MIXING_PERCENTAGE;
        const acceptedCurrencies = ["btc", "bch", "ltc"];

        let exactAmount = false;
        let globalSubmitForm = false;
        let allAddresses = [];
        let slidersInitialised;
        let globalStepNumber = 1;
        let isOrderDetailPage = $('#orderMixingContainer').attr('data-view') === 'orderDetail';

        //Get and Set Currency Param from Link
        const urlParams = new URLSearchParams(window.location.search);
        let currencyParam = urlParams.get("currency");
        let currencyName;


        let paymentStatusInterval = null;
        let overViewInterval = null;
        let addressTimer = null;

        function setRightCurrency() {
            switch (currencyParam) {
                case "BCH":
                    currencyName = "Bitcoin Cash";
                    break;
                case "LTC":
                    currencyName = "Litecoin";
                    break;
                case "ETH":
                    currencyName = "Ethereum";
                    break;
                case "BTC":
                    currencyName = "Bitcoin";
            }
            MIXING_PERCENTAGE = Number(
                $("#feePerAddress_" + currencyParam.toLowerCase()).val()
            );
            $("#currency-percentage").html(MIXING_PERCENTAGE);
            $("#currency-name").html(currencyName);
            $(".currency-param").html(currencyParam);
            $("#mixing-duration-image").attr(
                "src",
                `./assets/images/mixer/step_5_gifs/${currencyParam}.gif`
            );
        }

        if (isOrderDetailPage) {
            showRightStep(4);
        } else if (!currencyParam) {
            showRightStep(1);
        } else {
            showRightStep(2);
            setRightCurrency();
        }

        function showRightStep(stepNumber) {
            globalStepNumber = stepNumber;
            //Hide preloader
            $(".pre-loader").fadeOut("300");
            //Hide all steps
            $allStepsContainer.hide();
            $('*[data-show-always="true"]').show();
            //Show loader for 300ms
            window.scrollTo(0, 0);
            $("body").addClass("loading");
            setTimeout(function () {
                $("body").removeClass("loading");
            }, 300);
            //Show right step
            $(`#step-${stepNumber}`).show();
            if (stepNumber === 2 || stepNumber === 4 || stepNumber === 5) {
                $calculatorStep.show();
            } else {
                $calculatorStep.hide();
            }

            if (stepNumber === 4) {
                showDepositQrCode();
                updatePaymentStatus();
                paymentStatusInterval = setInterval(updatePaymentStatus, 30000);
                overViewInterval = setInterval(updateOverview, 30000);
            } else if (paymentStatusInterval !== null) {
                clearInterval(paymentStatusInterval);
                clearInterval(overViewInterval);
            }

            if (stepNumber === 5) {
                showFinishStep(parseInt($('#orderWaitingTime').val()));
                updateOverview();
                overViewInterval = setInterval(updateOverview, 30000);
            } else if (overViewInterval !== null) {
                clearInterval(overViewInterval);
            }


            $singleStep.each(function () {
                const elementStepNumber = Number($(this).attr("data-step"));
                if (elementStepNumber < stepNumber) {
                    $(this)
                        .addClass("finished")
                        .removeClass("active");
                } else if (elementStepNumber === stepNumber) {
                    $(this)
                        .removeClass("finished")
                        .addClass("active");
                } else {
                    $(this).removeClass("finished active");
                }
            });
        }


        function showDepositQrCode() {
            let $qrWrapper = $('.deposit-qr-code');

            if ($qrWrapper.attr('data-init') === 'false') {
                $qrWrapper.qrcode({
                    text: $qrWrapper.attr('data-value'),
                    width: $qrWrapper.attr('data-width'),
                    height: $qrWrapper.attr('data-height'),
                });
                $qrWrapper.attr('data-init', 'true');
            }
        }

        //Check if Array is Unique
        function checkIfArrayIsUnique(arr) {
            let map = {},
                i,
                size;

            for (i = 0, size = arr.length; i < size; i++) {
                if (map[arr[i]]) {
                    return false;
                }

                map[arr[i]] = true;
            }

            return true;
        }

        //Calculate Strength Slider and Its Color
        function calculateStrength(checkedArr) {
            if (slidersInitialised) {
                let totalStrength = 0;
                let x = 100 / 3;

                if (checkedArr.length > 3) {
                    x = 20;
                }

                for (let i = 0; i < checkedArr.length; i++) {
                    if (checkedArr[i]) {
                        totalStrength += x;
                    }
                }
                if (totalStrength === 0) {
                    totalStrength = 7;
                    $sliderStrength
                        .removeClass("smart strong good decent")
                        .addClass("weak");
                } else if (totalStrength > 90) {
                    $sliderStrength
                        .removeClass("weak strong good decent")
                        .addClass("smart");
                } else if (totalStrength > 64) {
                    $sliderStrength
                        .removeClass("smart weak good decent")
                        .addClass("strong");
                } else if (totalStrength > 40) {
                    $sliderStrength
                        .removeClass("smart weak strong decent")
                        .addClass("good");
                } else {
                    $sliderStrength
                        .removeClass("smart weak strong good")
                        .addClass("decent");
                }
                $sliderStrength.slider("value", totalStrength);
            }
        }

        //Generate Percentages for Percentage Distribution Slider
        function generatePer(num = 1) {
            if (num === 0) {
                return 49;
            }

            let newPr = 100 / num;
            let rng = 0.9;
            let t, incr;

            do {
                t = [];
                incr = 0;
                let val, vHalf;

                for (let i = 0; i < num - 1; i++) {
                    val = newPr + Number((Math.random() * (-rng - rng) + rng).toFixed(2));
                    vHalf = parseFloat(val.toFixed(2));
                    t.push(vHalf);
                    incr += val;
                }

                val = 100 - incr;
                t.push(parseFloat(val.toFixed(2)));
                incr += val;
            } while (incr !== 100);

            let newArr = [];
            let lastVal = 0;

            for (let i = 0; i <= t.length; i++) {
                if (i < t.length - 1) {
                    lastVal += t[i];
                    newArr.push(lastVal);
                }
            }

            return newArr;
        }

        //Calculate and populate the received value
        function calculateReceived(ignoreInput) {

            if (isOrderDetailPage) {
                return;
            }


            const sentValue = Number($sendAddressInput.val());
            const serviceFee = Number($reservePercent.html().replace("%", "")) / 100;
            const totalAddresses = addressCodeNum - 1;
            const finalTotalValue = (
                sentValue * (1 - serviceFee) -
                MIXING_PERCENTAGE * totalAddresses
            ).toFixed(8);
            if (sentValue || (sentValue === 0 && finalTotalValue > 0)) {
                if (addressCodeNum === 2) {
                    $("#calculator-form .all-addresses input").each(function (i) {
                        if (ignoreInput === i + 1) {
                            return;
                        }
                        $(this).val(finalTotalValue);
                    });
                } else {
                    let transferValues = transferSliders[
                        addressCodeNum - 3
                    ].noUiSlider.get();
                    if (!Array.isArray(transferValues)) {
                        $("#calculator-form .all-addresses input").each(function (i) {
                            if (ignoreInput === i + 1) {
                                return;
                            }
                            if (i === 0) {
                                $(this).val(
                                    ((finalTotalValue * transferValues) / 100).toFixed(8)
                                );
                            } else {
                                $(this).val(
                                    ((finalTotalValue * (100 - transferValues)) / 100).toFixed(8)
                                );
                            }
                        });
                    } else {
                        transferValues.unshift(0);
                        transferValues.push(100);
                        $("#calculator-form .all-addresses input").each(function (i) {
                            if (ignoreInput === i + 1) {
                                return;
                            }
                            $(this).val(
                                (
                                    (finalTotalValue *
                                        (transferValues[i + 1] - transferValues[i])) /
                                    100
                                ).toFixed(8)
                            );
                        });
                    }
                }
            }
        }

        //Calculate and populate the sent value
        function calculateSent(e) {
            const serviceFee = Number($reservePercent.html().replace("%", "")) / 100;
            const totalAddresses = addressCodeNum - 1;
            //If NOT Exact amount
            if (!exactAmount) {
                let inputId = e.target.id[e.target.id.length - 1];
                let newSendValue = 0;
                if (addressCodeNum > 3) {
                    let transferValues = transferSliders[
                        addressCodeNum - 3
                    ].noUiSlider.get();
                    transferValues.unshift(0);
                    transferValues.push(100);
                    newSendValue =
                        (100 / (transferValues[inputId] - transferValues[inputId - 1])) *
                        e.target.value;
                } else {
                    if (addressCodeNum > 2) {
                        let transferValues = transferSliders[
                            addressCodeNum - 3
                        ].noUiSlider.get();
                        if (Number(inputId) === 1) {
                            newSendValue = (100 / transferValues) * e.target.value;
                        } else {
                            newSendValue = (100 / (100 - transferValues)) * e.target.value;
                        }
                    } else {
                        newSendValue = e.target.value;
                    }
                }
                $sendAddressInput.val(
                    (
                        (Number(newSendValue) + totalAddresses * MIXING_PERCENTAGE) /
                        (1 - serviceFee)
                    ).toFixed(8)
                );
                calculateReceived(Number(inputId));
                //Else if Exact amount
            } else {
                let allInputsFilled = true;
                let allInputs = [];
                let totalInputsVal = 0;
                $("#calculator-form .all-addresses input").each(function () {
                    allInputs.push($(this).val());
                    if ($(this).val() === "") {
                        allInputsFilled = false;
                    }
                });
                setExactValuesForInputs();
                if (!allInputsFilled) {
                    $sendAddressInput.val("");
                    return;
                }
                for (let i = 0; i < allInputs.length; i++) {
                    totalInputsVal += Number(allInputs[i]);
                }
                $sendAddressInput.val(
                    (
                        (Number(totalInputsVal) + totalAddresses * MIXING_PERCENTAGE) /
                        (1 - serviceFee)
                    ).toFixed(8)
                );
            }
        }

        function setExactValuesForInputs() {
            let newArr = [];
            $("#calculator-form .all-addresses input").each(function () {
                newArr.push(Number($(this).val()).toFixed(6) || 0.0);
            });
            $(".address-percentage").each(function (i) {
                $(this).html(newArr[i]);
            });
        }

        //Reset Tooltip content for Strength Slider Meter
        function resetStrengthTooltip() {
            let hasSeveralAddress;
            let serviceFeeIsNotMin = true;
            let transferDelayIsNotMin = true;
            let percentageAreNotSame = true;
            let delaysAreNotSame = true;

            //Get Transfer Percentages if any and check is not the same
            if (addressCodeNum > 2) {
                let transferValues = transferSliders[
                    addressCodeNum - 3
                ].noUiSlider.get();
                if (Array.isArray(transferValues)) {
                    let percentages = [];
                    $("#mixer-form .address-percentage").each(function () {
                        let htmlPercentage = $(this).html();
                        htmlPercentage.slice(0, -2);
                        percentages.push(htmlPercentage);
                    });
                    percentageAreNotSame = checkIfArrayIsUnique(percentages);
                } else {
                    percentageAreNotSame = Number(transferValues) !== 50;
                }
            }

            //Get Transfer Delays and Service Fee
            if (slidersInitialised) {
                let transferDelay = delaySliders[addressCodeNum - 2].noUiSlider.get();
                let finalServiceFree = reserveSlider.slider("value");
                //Check has several address
                hasSeveralAddress = Array.isArray(transferDelay);
                //Check service fee is not minimum
                serviceFeeIsNotMin = finalServiceFree > 1;
                //Check Transfer delay is minimum or the same
                if (Array.isArray(transferDelay)) {
                    delaysAreNotSame = checkIfArrayIsUnique(transferDelay);
                    transferDelayIsNotMin = !transferDelay.includes("0.00");
                } else {
                    transferDelayIsNotMin = Number(transferDelay) > 0;
                }
            }


            let $tooltip = $('#strength-dom-helper');
            $tooltip.html($("#transfer-strength img").attr("data-tooltip"));

            $tooltip.find('.tooltip-strength-meter-attr').each(function (index) {
                let $element = $(this);
                let attr = $element.attr('data-attr');

                let compareValue = false;

                switch (attr) {
                    case 'severalReceivingAddress':
                        compareValue = hasSeveralAddress;
                        break;
                    case 'serviceFee':
                        compareValue = serviceFeeIsNotMin;
                        break;
                    case 'transferDelay':
                        compareValue = transferDelayIsNotMin;
                        break;
                    case 'percentageSame':
                        compareValue = percentageAreNotSame;
                        break;
                    case 'transferDelaySame':
                        compareValue = delaysAreNotSame;
                        break;
                }

                if (compareValue) {
                    $element.removeClass('red-text');
                    $element.addClass('green-text');
                    $element.text('check');
                } else {
                    $element.addClass('red-text');
                    $element.removeClass('green-text');
                    $element.text('error');
                }


            });

            $("#transfer-strength img").attr('data-tooltip', $tooltip.html());


            if (addressCodeNum > 2) {
                calculateStrength([
                    hasSeveralAddress,
                    serviceFeeIsNotMin,
                    transferDelayIsNotMin,
                    percentageAreNotSame,
                    delaysAreNotSame
                ]);
            } else {
                calculateStrength([
                    hasSeveralAddress,
                    serviceFeeIsNotMin,
                    transferDelayIsNotMin
                ]);
            }
        }

        //Toggling Exact amount radio check
        function toggleExactAmount() {
            exactAmount = !exactAmount;
            if (!exactAmount) {
                for (let i = 0; i < transferSliders.length; i++) {
                    transferSliders[i].removeAttribute("disabled");
                }
                $sendAddressInput.attr("disabled", false);
                $(".address-receive-container").show();
                showRightTransferSliderAndUpdatePercentages(addressCodeNum - 2);
                resetSliders();
                calculateReceived();
                resetStrengthTooltip();
            } else {
                for (let i = 0; i < transferSliders.length; i++) {
                    transferSliders[i].setAttribute("disabled", true);
                }
                $(".address-receive-container").hide();
                $("#calculator-form input").val("");
                $sendAddressInput.attr("disabled", true);
                setExactValuesForInputs();
            }
        }

        //Fix Calculator Values to BTC address
        function setCalculatorToValue() {
            let shouldSubmitForm = true;

            allAddresses = [];
            $("#mixer-form .address-container input").each(function (i) {
                let x = i + 1;
                allAddresses.push($(this).val());
                let valid = WAValidator.validate($(this).val(), currencyParam);
                if (currencyParam.toLowerCase() === 'bch') {
                    valid = true;
                }

                if (!valid) {
                    shouldSubmitForm = false;
                    $(this).addClass("alert");
                } else {
                    $(this).removeClass("alert");
                }
                let transTo = $('#trans-step2-to').val();
                $(`#calculator-to-address${x}`).html(transTo + ": " + $(this).val());
            });
            globalSubmitForm = shouldSubmitForm;
        }

        //On Mixer Form submit
        function submitMixerForm(e) {
            e.preventDefault();
            if (!globalSubmitForm) {
                $formErrorMsg
                    .removeClass("hidden")
                    .find("span")
                    .html("Some addresses are not valid!");
                $("#mixer-form .address-container .alert")[0].focus();
                return;
            }
            if (!checkIfArrayIsUnique(allAddresses)) {
                $formErrorMsg
                    .removeClass("hidden")
                    .find("span")
                    .html("You can't have duplicate addresses!");
                $("#mixer-form .address-container input")[0].focus();
                return;
            }

            $.ajax({
                url: $("#mixture-order-request").val(),
                data: formatInputForRequest(),
                headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                type: "POST",
                beforeSend: function () {
                    $("#step-3-request-submit").hide();
                    $("#step-3-request-loader").show();
                },
                success: function (response) {
                    if (response.success) {
                        $('#mixer-confirm-form').attr('action', response.data.link);
                        $.fn.projectAddFb('InitiateCheckout');
                        $.fn.projectAddGTag('InitiateCheckout');
                        showRightStep(3);
                    } else {
                        $formErrorMsg
                            .removeClass("hidden")
                            .find("span")
                            .html(response.message);
                    }
                },
                complete: function () {
                    $("#step-3-request-submit").show();
                    $("#step-3-request-loader").hide();
                }
            });
        }

        function setWashingDurationTime(times) {

            if (times[0] < 0 || times[1] < 0 || times[2] < 0 || times[3] < 0) {
                return;
            }

            $durationDays.html(
                times[0].toString().length > 1 ? times[0] : "0" + times[0]
            );
            $durationHours.html(
                times[1].toString().length > 1 ? times[1] : "0" + times[1]
            );
            $durationMinutes.html(
                times[2].toString().length > 1 ? times[2] : "0" + times[2]
            );
            $durationSeconds.html(
                times[3].toString().length > 1 ? times[3] : "0" + times[3]
            );
            $durationDaysName.html(times[0] > 1 ? "Days" : "Day");
            $durationHoursName.html(times[1] > 1 ? "Hours" : "Hour");
            $durationMinutesName.html(times[2] > 1 ? "Minutes" : "Minute");
            $durationSecondsName.html(times[3] > 1 ? "Seconds" : "Second");
        }

        function submitConfirmTerms(e) {
            e.preventDefault();
            let shouldSubmitForm = true;
            $("#mixer-confirm-form input").each(function (i, el) {
                if (!el.checked) {
                    shouldSubmitForm = false;
                    $(this).addClass("alert");
                }
            });

            if (shouldSubmitForm) {
                var orderId = $(this).attr('action');
                $.ajax({
                    url: $("#confirm-order-request").val(),
                    data: {orderId:orderId},
                    headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            },
                    type: "POST",
                    beforeSend: function () {
                        $("#step-4-request-submit").hide();
                        $("#step-4-request-loader").show();
                    },
                    success: function (response) {
                        if (response.success) {
                            $('#order-qr-code').prop('src', response.qrcode);
                            window.location = ($("#qr-url").val()).replace("address_to_replace", orderId);
                            // showRightStep(4);
                        } else {
                            $formErrorMsg
                                .removeClass("hidden")
                                .find("span")
                                .html(response.message);
                        }
                    },
                    complete: function () {
                        $("#step-4-request-submit").show();
                        $("#step-4-request-loader").hide();
                    }
                });
            }
        }


        function showFinishStep(washingDuration) {


            //Start Duration Time
            setInterval(function () {
                let seconds, mins, hours, days;
                washingDuration -= 1;
                seconds = washingDuration;
                if (washingDuration > 86400) {
                    days = Math.floor(washingDuration / 86400);
                    seconds -= days * 3600 * 24;
                    hours = Math.floor(seconds / 3600);
                    seconds -= hours * 3600;
                    mins = Math.floor(seconds / 60);
                    seconds -= mins * 60;
                    setWashingDurationTime([days, hours, mins, seconds]);
                } else if (washingDuration > 3600) {
                    hours = Math.floor(seconds / 3600);
                    seconds -= hours * 3600;
                    mins = Math.floor(seconds / 60);
                    seconds -= mins * 60;
                    setWashingDurationTime(["00", hours, mins, seconds]);
                } else if (washingDuration > 60) {
                    mins = Math.floor(seconds / 60);
                    seconds -= mins * 60;
                    setWashingDurationTime(["00", "00", mins, seconds]);
                } else {
                    setWashingDurationTime(["00", "00", "00", washingDuration]);
                }
            }, 1000);
            //Start showing steps
            setTimeout(function () {
                $(".single-action").each(function (i) {
                    setTimeout(() => {
                        $(this).addClass("animated fadeInDown");
                    }, i * 3000 - 500);
                    // setTimeout(() => {
                    //   $(this).addClass("complete");
                    // }, i * 3000 + 1500);
                    i !== 10 &&
                        setTimeout(() => {
                            $(this)
                                .removeClass("animated fadeInDown")
                                .addClass("animated fadeOutDown");
                            $mixingLoaderBar.animate(
                                {
                                    width: `${(i + 1) * 10}%`
                                },
                                0
                            );
                        }, i * 3000 + 1900);
                    setTimeout(() => {
                        $(".mixing-loader").addClass("complete");
                    }, 30000);
                });
            }, 2000);
        }

        // Setup the Service Fee Slider
        reserveSlider.slider({
            range: "min",
            value: 3.7287,
            min: Number($("#minimumPercentageFee_btc").val()),
            max: Number($("#maximumPercentageFee_btc").val()),
            animate: "fast",
            step: 0.0001,
            slide: function (event, ui) {
                $reversePercent.html(ui.value.toFixed(4) + "%");
                resetStrengthTooltip();
                if (!exactAmount) {
                    calculateReceived();
                } else {
                    calculateSent();
                }
                if (ui.value < 2) {
                    $reverseAlpha.html("Standard Pool");
                } else if (ui.value > 2 && ui.value < 3.9999) {
                    $reverseAlpha.html("Smart Pool");
                } else {
                    $reverseAlpha.html("Stealth Pool");
                }
            },
            stop: function () {
                resetStrengthTooltip();
            }
        });

        //Setup The transfer sliders for the percentage
        for (let i = 0; i < transferSliders.length; i++) {
            let connectArr = [true, true];

            if (i >= 1) {
                for (let y = 0; y < i; y++) {
                    connectArr.push(true);
                }
            }

            let startValue = i === 0 ? 49 : generatePer(i + 2);
            let connectValue = i === 0 ? [true, true] : connectArr;

            noUiSlider.create(transferSliders[i], {
                start: startValue,
                connect: connectValue,
                range: {
                    min: [1],
                    max: [99]
                },
                step: 0.1,
                margin: 1
            });

            //On slider Value Change
            transferSliders[i].noUiSlider.on("update", function (values, handle) {
                if (!exactAmount) {
                    calculateReceived();
                    if (values.length === addressCodeNum - 2) {
                        let oldHandle = handle + 1;
                        $(
                            `.all-addresses .address-container:nth-of-type(${oldHandle}) .address-percentage`
                        ).html(
                            (values[handle] - (values[handle - 1] || 0)).toFixed(2) + " %"
                        );
                        let newHandle = handle + 2;
                        $(
                            `.all-addresses .address-container:nth-of-type(${newHandle}) .address-percentage`
                        ).html(
                            ((values[handle + 1] || 100) - values[handle]).toFixed(2) + " %"
                        );
                        $(
                            `.all-addresses .address-container:nth-of-type(${oldHandle}) .address-receive`
                        ).html(
                            (values[handle] - (values[handle - 1] || 0)).toFixed(2) + " %"
                        );
                        $(
                            `.all-addresses .address-container:nth-of-type(${newHandle}) .address-receive`
                        ).html(
                            ((values[handle + 1] || 100) - values[handle]).toFixed(2) + " %"
                        );
                    }
                }
                resetStrengthTooltip();
            });

            //Add Classes for colors
            let connect = transferSliders[i].querySelectorAll(".noUi-connect");
            let classes = [
                "c-1-color",
                "c-2-color",
                "c-3-color",
                "c-4-color",
                "c-5-color",
                "c-6-color",
                "c-7-color",
                "c-8-color"
            ];
            for (let i = 0; i < connect.length; i++) {
                connect[i].classList.add(classes[i]);
            }
        }

        //Setup The delay sliders for the time
        for (let i = 0; i < delaySliders.length; i++) {
            let startArr = [];

            if (i >= 1) {
                for (let y = 0; y < i; y++) {
                    const partial = 180;
                    if (y === 0) {
                        startArr.push(partial * (y + 1), partial * (y + 2));
                    } else {
                        startArr.push(partial * (y + 2));
                    }
                }
            }

            let startValue = i === 0 ? 180 : startArr;

            noUiSlider.create(delaySliders[i], {
                start: startValue,
                range: {
                    min: [0],
                    max: [4320]
                },
                step: 1,
                behaviour: "unconstrained"
            });

            //On slider Value Change
            delaySliders[i].noUiSlider.on("update", function (values, handle) {
                resetStrengthTooltip();
                let mins = values[handle] % 60;
                let hours = (values[handle] - (values[handle] % 60)) / 60;
                $(
                    `#mixer-form .all-addresses .address-container:nth-of-type(${handle +
                    1}) .address-timer`
                ).html(`${hours}hr. ${mins}min.`);
                $(
                    `#calculator-form .all-addresses .address-container:nth-of-type(${handle +
                    1}) .receive-timer`
                ).html(`${hours}hr. ${mins}min.`);
            });
        }

        $sliderStrength.slider({
            range: "min",
            value: 30,
            min: 1,
            max: 100,
            animate: "fast",
            step: 1,
            disabled: true
        });

        //adjust the percentage ratio
        $(".timer-container > p:first-of-type").html(100 + " %");

        //Show the right slider and adjust the percentage ratio
        function showRightTransferSliderAndUpdatePercentages(newCodeNum) {
            transferSliders.hide();
            $("#slider-transfer" + newCodeNum).show();
            let timer = (100 / (newCodeNum + 1)).toFixed(2) + " %";
            if (!exactAmount) {
                $(".timer-container > p:first-of-type").html(timer);
            } else {
                setExactValuesForInputs();
            }
            delaySliders.hide();
            let newCodeNumForDelaySlider = newCodeNum + 1;
            $("#slider-delay" + newCodeNumForDelaySlider).show();
            for (let i = 1; i < 9; i++) {
                const totalTimeStep = i * 180;
                let mins = totalTimeStep % 60;
                let hours = (totalTimeStep - (totalTimeStep % 60)) / 60;
                $("#address-timer" + i).html(`${hours}hr. ${mins}min.`);
            }

            if (newCodeNum > 0) {
                $percentageDist.show();
            } else {
                $percentageDist.hide();
            }
        }

        //Reset Percentage Slider and Delay Slider
        function resetSliders() {
            for (let i = 0; i < delaySliders.length; i++) {
                delaySliders[i].noUiSlider.reset();
            }
            for (let i = 0; i < transferSliders.length; i++) {
                transferSliders[i].noUiSlider.reset();
            }
            let $addressTimers = $(".address-timer");
            $addressTimers.each(function (index) {
                const totalTimeStep = (index + 1) * 180;
                let mins = totalTimeStep % 60;
                let hours = (totalTimeStep - (totalTimeStep % 60)) / 60;
                $(this).html(`${hours}hr. ${mins}min.`);
            });
        }

        //When adding new address
        $("#add-address").on("click", function () {

            let transAfter = $('#trans-step2-after').val();
            let transTo = $('#trans-step2-to').val();
            let transReceiving = $('#trans-step2-placeholder-receiving-address');

            if (addressCodeNum < 9) {
                $("#mixer-form .all-addresses")
                    .append(` <div class="address-container address${addressCodeNum}">
            <div class="timer-container colored-details">
              <p id="address-percentage${addressCodeNum}" class="address-percentage">100%</p>
              <p><i class="material-icons">access_time</i> ${transAfter} &nbsp;<span id="address-timer${addressCodeNum}" class="address-timer"></span></p>
            </div>
            <div class="input-field">
              <input type="text" id="addressCode${addressCodeNum}" placeholder="${transReceiving}" class="addressCode" required>
              <i class="material-icons remove-icon">close</i>
            </div>
          </div>`);

                $("#calculator-form .all-addresses")
                    .append(` <div class="address-container">
            <div class="input-field">
              <input type="number" id="addressReceive${addressCodeNum}" placeholder="" class="addressCode" required>
            </div>
            <div class="timer-receive-container colored-details">
              <p>${currencyParam} <span class="address-receive-container">&nbsp;(&nbsp;<span class="address-receive" id="address-receive${addressCodeNum}">100%</span>&nbsp;)&nbsp;</span>${transAfter}&nbsp;<span id="receive-timer${addressCodeNum}" class="receive-timer">17hr. 13min</span></p>
              <p id="calculator-to-address${addressCodeNum}">${transTo}: </p>
            </div>
          </div>`);
                showRightTransferSliderAndUpdatePercentages(addressCodeNum - 1);
                addressCodeNum++;
                resetSliders();
                resetStrengthTooltip();
                setCalculatorToValue();
                if (!exactAmount) {
                    calculateReceived();
                } else {
                    $(".address-receive-container").hide();
                    $sendAddressInput.val("");
                }
            }
        });

        //When removing address
        $(".all-addresses").on("click", ".remove-icon", function () {
            $(this)
                .parent()
                .parent()
                .remove();
            $("#calculator-form .all-addresses .address-container")
                .last()
                .remove();
            addressCodeNum--;
            showRightTransferSliderAndUpdatePercentages(addressCodeNum - 2);
            resetSliders();
            if (!exactAmount) {
                calculateReceived();
            } else {
                calculateSent();
            }
            resetStrengthTooltip();
            setCalculatorToValue();
        });

        //On calculator input change
        $sendAddressInput.on("input", calculateReceived);

        //On changing addresses update calculator To field
        $mixerForm.on("input", ".address-container input", setCalculatorToValue);

        //On changing calculator inputs
        $("#calculator-form .all-addresses").on("input", "input", calculateSent);

        //On Toggle exact amount
        $("#exact-amount")
            .find("input[type=checkbox]")
            .on("change", toggleExactAmount);

        //On submit mixer Form on step 2
        $mixerForm.on("submit", submitMixerForm);

        //On submit terms Form on step 3
        $mixerConfirmForm.on("submit", submitConfirmTerms);

        //On Clicking on currency Icons
        $(".single-icon").on("click", function (e) {
            if ($(this).data('prevent') === true) {
                e.preventDefault();
            }
            let currencyContraction = $(this)
                .attr("data-currency")
                .trim()
                .toLowerCase();

            if ($.inArray(currencyContraction, acceptedCurrencies) === -1) {
                $("#output-step-1").show();
                return;
            } else {
                $("#output-step-1").hide();
            }

            if (currencyParam !== currencyContraction) {
                $(".addressCode").val("");
            }
            currencyParam = currencyContraction;
            setRightCurrency();
            showRightStep(2);
        });

        //On clicking on finished steps to go back to a specific step
        $singleStep.on("click", function (e) {
            e.preventDefault();
            if (globalStepNumber > 3) {
                return;
            }
            if ($(this).hasClass("finished")) {
                showRightStep(Number($(this).attr("data-step")));
            }
        });

        //Set sliders to initialized
        slidersInitialised = true;
        //Calculate strength
        calculateStrength([true, true, false]);

        function formatInputForRequest() {
            let allAddressesObj = {
                currency: currencyParam,
                smartCode: $("#mixerCode").val(),
                serviceFee: Number($reservePercent.html().replace("%", "")),
                exactAmount: exactAmount,
                output: []
            };

            if (exactAmount) {
                allAddresses.map((address, i) => {
                    allAddressesObj.output.push({
                        address: address,
                        amount: Number(
                            $(".address-percentage")[i].innerHTML.replace(" %", "")
                        ),
                        delay: $(".address-timer")
                        [i].innerHTML.replace("hr.", "")
                            .replace("min.", "")
                            .split(" ")
                            .map((delay, i) => {
                                return i === 0 ? Number(delay) * 60 : Number(delay);
                            })
                            .reduce((total, num) => total + num)
                    });
                });
            } else {
                allAddresses.map((address, i) => {
                    allAddressesObj.output.push({
                        address: address,
                        percentage: Number(
                            $(".address-percentage")[i].innerHTML.replace(" %", "")
                        ),
                        delay: $(".address-timer")
                        [i].innerHTML.replace("hr.", "")
                            .replace("min.", "")
                            .split(" ")
                            .map((delay, i) => {
                                return i === 0 ? Number(delay) * 60 : Number(delay);
                            })
                            .reduce((total, num) => total + num)
                    });
                });
            }

            return allAddressesObj;
        }


        function updatePaymentStatus() {
            let orderKey = $('#stepsOrderKey').val();
            $.ajax({
                url: $('#paymentStatusUrl').val(),
                data: {
                    orderKey: orderKey,
                },
                type: "POST",
                success: function (response) {
                    $('#step4-payment-status').html(response.html);

                    if (response.completed) {
                        setTimeout(function () {
                            $.fn.projectAddFb('Purchase');
                            $.fn.projectAddGTag('Purchase');
                            showRightStep(5);
                        }, 2000);
                    }
                },
            });

        }

        function updateOverview() {
            let orderKey = $('#stepsOrderKey').val();
            $.ajax({
                url: $('#overViewStatusUrl').val(),
                data: {
                    orderKey: orderKey,
                },
                type: "POST",
                success: function (response) {
                    $('#overview-container').html(response.html);
                },
            });
        }


    });
})(jQuery);
