jQuery(document).ready(function () {

    addOrientationEventListener();
    initView();
    // 執行拍照, 並關閉鏡頭
    jQuery(".js-shot-photo-button").click(function (e) {
        e.preventDefault();

        Webcam.snap(function (data_uri) {
            jQuery(".js-camera-photo")
                .html('<img src="' + data_uri + '"/>')
                .show();
            document.querySelector(".js-camera-photo img").style.objectFit =
                "contain";
        });
        Webcam.reset();
        jQuery(".js-camera-container").hide();

        jQuery(".js-shot-photo-button").hide();
        jQuery(".js-reshot-photo-button").show();
        jQuery(".js-confirm-photo-button").show();
    });

    // 重新開啟鏡頭
    jQuery(".js-reshot-photo-button").click(function (e) {
        e.preventDefault();

        Webcam.attach(".js-camera-container");
        jQuery(".js-camera-photo").hide();
        jQuery(".js-camera-container").show();

        jQuery(".js-shot-photo-button").show();
        jQuery(".js-reshot-photo-button").hide();
        jQuery(".js-confirm-photo-button").hide();
    });

    // 拍照完成
    jQuery(".js-confirm-photo-button").click(function (e) {
        e.preventDefault();

        let cameraWindowId = assessmentHandler.parseCameraWindowId();
        assessmentHandler.info.photos[cameraWindowId - 1] = jQuery(
            ".js-camera-photo img"
        ).attr("src");
        assessmentHandler.save();

        window.location.replace("/");
    });

    function initView() {
        assessmentHandler.load();

        let cameraWindowId = assessmentHandler.parseCameraWindowId();

        if (
            cameraWindowId > 0 &&
            cameraWindowId <= assessmentHandler.cameraTips.length
        ) {
            jQuery(".js-camera-window-id").text(cameraWindowId);
            jQuery(".js-camera-window-total").text(
                assessmentHandler.cameraTips.length
            );

            let cameraTipsTitle =
                assessmentHandler.cameraTips[cameraWindowId - 1].title;
            let cameraTipsDescription = assessmentHandler.cameraTips[
                cameraWindowId - 1
            ].description.replace("\n", "<br>");
            jQuery(".js-camera-tips-text").html(
                "<span>" + cameraTipsTitle + "</span>" + cameraTipsDescription
            );
            jQuery(".js-camera-tips-picture").attr(
                "src",
                assessmentHandler.cameraTips[cameraWindowId - 1]
                    .previewPictureUrl
            );

            initCamera();

            jQuery(".js-camera-container").show();
            Webcam.attach(".js-camera-container");
            jQuery(".js-camera-photo").hide();

            jQuery(".js-shot-photo-button").show();
            jQuery(".js-reshot-photo-button").hide();
            jQuery(".js-confirm-photo-button").hide();
        } else {
            window.location.replace("/");
        }
    }

    function addOrientationEventListener() {
        let portrait = window.matchMedia("(orientation: portrait)");
        portrait.addEventListener("change", function (e) {
            initCamera();
        });
    }

    function initCamera() {
        Webcam.on("live", function () {
            // TODO: 開啟浮水印
            //document.getElementById("videoElement").classList.remove('watermarkHidden');
        });

        Webcam.on("error", function (e) {
            console.log(e);
            alert(
                "Oops!! 發生錯誤!! \n\n若您有封鎖相機存取, 本站將無法正常執行拍照功能, 請先解除封鎖後重新整理頁面, 再嘗試允許相機存取, 謝謝!!"
            );
        });

        let width;
        let height;
        if (window.matchMedia("(orientation: landscape)").matches) {
            width = 320;
            height = 240;
        } else {
            width = 240;
            height = 320;
        }

        Webcam.set({
            width: width,
            height: height,
            dest_width: width,
            dest_height: height,
            crop_width: width,
            crop_height: height,
            image_format: "jpeg",
            jpeg_quality: 90,
            force_flash: false,
            flip_horiz: true,
            fps: 45,
        });
    }
});
