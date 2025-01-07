{{-- fix_menu --}}
<div class="fix_menu shadow-sm" id="showpc">
    <div class="fix_menu_in">
        <div id="logo"><img src="{{ asset('images/logo.png') }}"></div>
    </div>
    <div class="list py-3">
        <ul id="accordion" class="accordion">
            <li>
                <a href="#" class="link"><span class="txt_color1 font15"><i class="fas fa-desktop"></i></span>
                    首頁設定<div class="font10 txt_color6 float-end pe-1 me-2">▼</div></a>
                <ul class="submenu" style="">
                    <li><a href="{{ route('backend.carousel.index') }}">輪播banner</a></li>
                    <li><a href="{{ route('backend.video.index') }}">影片設定</a></li>
                    <li><a href="">診療心得分享</a></li>
                    <li><a href="{{ route('backend.question.index') }}">Q&A</a></li>
                    <li><a href="">首頁內容設定</a></li>
                </ul>
            </li>
            <li><a href="#" class="link"><span class="txt_color4 font15"><i class="fab fa-microblog"></i></span>
                    案例分享</a></li>
            <li><a href="{{ route('backend.clinic.index') }}" class="link"><span class="txt_color4 font15"><i
                            class="fas fa-map-marked-alt"></i></span> 診所地圖</a></li>
            <li><a href="#" class="link"><span class="txt_color4 font15"><i class="fas fa-th-list"></i></span>
                    評估單管理</a></li>
        </ul>
    </div>
    <i class="fas fa-file-invoice-dollar"></i>
</div>

<div class="clear"></div>
