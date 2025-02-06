var assessmentHandler = {

    keyName: 'assessmentDraft',

    info: {
        name: '',
        email: '',
        mobile: '',
        city: '',
        area: '',
        age: '',
        referral: '',
        dentition_problem_option: '8',
        expect_improve_problem: '',
        photos: [],

        windowScrollY: 0,
    },

    cameraTips: [
        {
            title: '正面照',
            description: '自然的咬合並微笑後牙咬緊\n避免下顎刻意與上顎對齊',
            previewPictureUrl: '../../images/frontend/photo1.jpg',
            dummyPictureUrl: '../../images/frontend/frame1.png',
        },
        {
            title: '上排牙齒',
            description: '盡量張開嘴巴避免嘴唇遮擋牙齒',
            previewPictureUrl: '../../images/frontend/photo2.jpg',
            dummyPictureUrl: '../../images/frontend/frame2.png',
        },
        {
            title: '下排牙齒',
            description: '盡量張開嘴巴避免嘴唇遮擋牙齒',
            previewPictureUrl: '../../images/frontend/photo3.jpg',
            dummyPictureUrl: '../../images/frontend/frame3.png',
        },
        {
            title: '側臉照片',
            description: '拍攝您自然闔嘴的側面照片',
            previewPictureUrl: '../../images/frontend/photo4.jpg',
            dummyPictureUrl: '../../images/frontend/frame4.png',
        },
    ],

    init: function () {
        assessmentHandler.info.name = '';
        assessmentHandler.info.email = '';
        assessmentHandler.info.mobile = '';
        assessmentHandler.info.city = '';
        assessmentHandler.info.area = '';
        assessmentHandler.info.age = '';
        assessmentHandler.info.referral = '';
        assessmentHandler.info.line = '';
        assessmentHandler.info.dentition_problem_option = '8';
        assessmentHandler.info.expect_improve_problem = '';
        assessmentHandler.info.photos = new Array(assessmentHandler.cameraTips.length).fill(null);

        assessmentHandler.info.windowScrollY = 0;

        assessmentHandler.save();
    },

    save: function () {
        try {
            window.localStorage.setItem(assessmentHandler.keyName, JSON.stringify(assessmentHandler.info));
        } catch (err) {
            console.log(err);
        }
    },

    remove: function () {
        try {
            window.localStorage.removeItem(assessmentHandler);
        } catch (err) {
            console.log(err);
        }
    },

    load: function () {
        try {
            let data = window.localStorage.getItem(assessmentHandler.keyName);

            if (data) {
                assessmentHandler.info = JSON.parse(data);
            } else {
                assessmentHandler.init();
            }
        } catch (err) {
            assessmentHandler.init();
        }
    },

    parseCameraWindowId: function () {
        let urlSearchParams = new URLSearchParams(window.location.search);
        return parseInt(urlSearchParams.get('windowId'));
    },

    convertDataUriToBlob: function (dataUri) {
        let byteString = atob(dataUri.split(',')[1]);
        let mimeString = dataUri.split(',')[0].split(':')[1].split(';')[0]

        let ab = new ArrayBuffer(byteString.length);
        let ia = new Uint8Array(ab);

        for (let i = 0; i < byteString.length; i++) {
            ia[i] = byteString.charCodeAt(i);
        }

        let blob = new Blob([ab], { type: mimeString });

        return blob;
    },

    isMobileDevice: function () {
        // return (typeof window.orientation !== "undefined") || (navigator.userAgent.indexOf('IEMobile') !== -1);
    },

    // call this function in browser console to fake data, and refresh page.
    fakeFormData: function () {
        assessmentHandler.info.name = 'Paul';
        assessmentHandler.info.email = 'test@example.com';
        assessmentHandler.info.mobile = '0987654321';
        assessmentHandler.info.city = '臺北市';
        assessmentHandler.info.area = '大安區';
        assessmentHandler.info.age = '18';
        assessmentHandler.info.referral = 'Tom';
        assessmentHandler.info.dentition_problem_option = '8';
        assessmentHandler.info.expect_improve_problem = 'None';
        assessmentHandler.info.photos = new Array(assessmentHandler.cameraTips.length).fill(null);

        assessmentHandler.info.windowScrollY = 0;

        assessmentHandler.save();
    },

};
