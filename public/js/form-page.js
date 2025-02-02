jQuery(document).ready(function () {

    initView();

    // 每間隔一小段時間自動儲存未送出的資料
    setInterval(() => {
        assessmentHandler.info.windowScrollY = window.scrollY;
        assessmentHandler.save();
    }, 10000);

    // 所有輸入框相關更改
    jQuery('.js-assessment-form').delegate('input', 'change', function () {
        assessmentHandler.info[jQuery(this).attr('name')] = jQuery(this).val();
        assessmentHandler.save();
    });

    // 選擇齒列問題
    jQuery(".js-dentition-problem-section").delegate('.tooth', 'click', function (e) {
        jQuery('.js-dentition-problem-section .tooth').removeClass('active');
        jQuery(this).addClass('active');

        assessmentHandler.info.dentition_problem_option = jQuery(this).data('dentition-problem-option');
        assessmentHandler.save();
    });

    // 拍照按鈕
    jQuery(".js-camera-section").delegate('.camera', 'click', function (e) {
        assessmentHandler.info.windowScrollY = window.scrollY;
        assessmentHandler.save();

        window.location.href = '/evaluationForm/camera/' + jQuery(this).data('id') + '?windowId=' + jQuery(this).data('window-id');
    });

    // 送出表單按鈕
    jQuery('.js-send-button a').click(function (e) {
        e.preventDefault();

        if (jQuery('.js-send-button').hasClass('inactive')) {
            return;
        }
    });

    function initView() {
        console.log(assessmentHandler);
        assessmentHandler.load();

        jQuery(".js-loading-svg").css('display', 'none');
        hideErrorMessageTips();

        jQuery('#name').val(assessmentHandler.info.name);
        jQuery('#email').val(assessmentHandler.info.email);
        jQuery('#mobile').val(assessmentHandler.info.mobile);
        jQuery('#age').val(assessmentHandler.info.age);
        jQuery('#referral').val(assessmentHandler.info.referral);
        jQuery('#line').val(assessmentHandler.info.line);
        jQuery('#expect_improve_problem').val(assessmentHandler.info.expect_improve_problem);
        jQuery('.js-dentition-problem-section .tooth').removeClass('active');
        jQuery('.js-dentition-problem-section .tooth[data-dentition-problem-option="' + assessmentHandler.info.dentition_problem_option + '"]').addClass('active');

        assessmentHandler.info.photos.forEach(function (imageBase64, id) {
            if (imageBase64) {
                jQuery('.js-preview-frame' + (id + 1))
                    .css('background', 'url("' + imageBase64 + '")')
                    .css('background-size', 'contain')
                    .css('background-position', 'center')
                    .css('background-repeat', 'no-repeat');
            } else {
                jQuery('.js-preview-frame' + (id + 1))
                    .css('background', 'url("' + assessmentHandler.cameraTips[id].dummyPictureUrl + '")')
                    .css('background-size', 'contain')
                    .css('background-position', 'center')
                    .css('background-repeat', 'no-repeat');
            }
        });

        jQuery('html').scrollTop(assessmentHandler.info.windowScrollY);
    }

    function showErrorMessageTips(errors) {
        let firstFieldName = '';

        // 處理表單驗證, 錯誤訊息文字提示
        for (fieldName in errors) {
            var message = errors[fieldName];
            console.log(`${fieldName} => ${message}`);

            if (firstFieldName == '') {
                firstFieldName = fieldName;
            }

            jQuery(`p.js-validator-error-message-${fieldName}`).text(message).show();
        }

        // 捲軸帶到驗證錯誤的第一個元素上方
        if (firstFieldName) {
            let selector = `#${firstFieldName}`;
            if (firstFieldName == 'city' || firstFieldName == 'area') {
                selector = `select[name="${firstFieldName}"]`;
            }

            jQuery('html, body').animate({
                scrollTop: jQuery(selector).offset().top - 100,
            }, 500);
            jQuery(selector).trigger('focus');
        }
    }

    function hideErrorMessageTips() {
        jQuery('p[class^="js-validator-error-message"]').text('').hide();
    }

});
