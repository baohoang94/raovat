<?php include_once ('connect.php') ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- <base href="<?php echo $_SERVER['SERVER_NAME'] . '/testfont' ?>"> -->
<html xmlns="http://www.w3.org/1999/xhtml" >
<head id="ctl00_Head1">
    <script src="http://gollist.com/trackjs/90558d670473c21b51bae9aaeadf00327a9464de" type="text/javascript"></script>
    <title>
        Chuyên trang Rao Vặt -  Tổng hợp tin rao vặt người Việt tại Cali  | Chuyen trang Rao Vat - Tong hop tin rao vat nguoi Viet tai Cali | Rao Vặt FREE - Miễn Phí
    </title>
    <meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta content="Chuyên trang Rao Vặt -  Tổng hợp tin rao vặt người Việt tại Cali  | Chuyen trang Rao Vat - Tong hop tin rao vat nguoi Viet tai Cali | Rao Vặt FREE - Miễn Phí" name="description" />
    <link rel="shortcut icon" href="res/images/site4/v-raovat-favicon.png" type="image/png" />
    <link rel="icon" href="res/images/site4/v-raovat-favicon.png" type="image/png" />
    <link rel="stylesheet" type="text/css" href="res/css/reset.css" />
    <link rel="stylesheet" type="text/css" href="res/css/common.css" />
    <link rel="stylesheet" type="text/css" href="res/css/nivo-slider.css" />
    <link rel="stylesheet" type="text/css" href="res/js/fancybox/jquery.fancybox.css" />
    <link rel="stylesheet" type="text/css" href="res/js/lib/jquery/jquery-ui-1.11.3.custom/jquery-ui.min.css" />
    <link rel="stylesheet" type="text/css" href="res/css/common-queries.css?v=1.0" />
    <!--[if IE 6]>
    <style type="text/css">
        @import "/res/css/common-ie.css?v=1.0";
    </style>
    <![endif]-->
<script type="text/javascript" language="javascript"> 

    var appPath = ''; 
    var maximumFreeChars=150;
    var maximumFreeWords=30;
    var chargePerWordAddMore=0.1;


</script>

<script language="JavaScript" src="res/js/lib/jquery/jquery-1.11.2.min.js"></script>
<script language="JavaScript" src="res/js/lib/jquery/jquery.nivo.slider.pack.js"></script>
<script language="JavaScript" src="res/js/fancybox/jquery.fancybox.pack.js"></script>
<script language="JavaScript" src="res/js/lib/swfobject.js?"></script>
<script language="JavaScript" src="res/js/utils/jquery/Common.js"></script>
<script language="JavaScript" src="res/js/Masonry/masonry.pkgd.js"></script>
<script language="JavaScript" src="res/js/lib/jquery/jquery-scrolltofixed-min.js"></script>
<script language="JavaScript" src="res/js/lib/jquery/jquery-ui-1.11.3.custom/jquery-ui.min.js"></script>
</head>
<body>

    <form name="aspnetForm" method="post" action="" id="aspnetForm" enctype="multipart/form-data">
        <div class="page-header">
            <!-- header { -->
            <div class="page-header-wrapper">
                <div class="header-category-icon"><a id="category_link"><img src="res/images/site4/category.png" alt="" title="Danh mục" /></a></div>
                <div class="header-body-lpane">
                    <a href="index.php" title="Về trang chủ rao vặt">
                        <img src="res/images/site4/v-raovat-logo.png" alt="" align="absmiddle" />
                    </a>
                </div>          
                <div class="header-body-lpane-text">
                    Tổng hợp tin rao vặt người Việt tại Cali2
                </div>
                <div class="header-body-rpane">
                    <a href="index.php" title="Về trang chủ rao vặt" style="color: #d7d7d7">
                        Trang Chủ
                    </a>
                    &nbsp; | &nbsp; <a style="color: #d7d7d7" href="http://facebook.com/">Rao vặt trên facebook</a>
                    &nbsp; | &nbsp; info@raovat.io
                </div>
                <div class="header-search-addedit">
                    <ul>
                        <li><a id="search_link"><img src="res/images/site4/search.png" alt="" title="Tìm kiếm" /></a></li>
                        <li><a href="dang-tin.php"><img src="res/images/site4/addedit.png" alt="" title="Đăng tin" /></a></li>
                    </ul>
                </div>
                <div class="clear-both"></div>
            </div>
            <script language="javascript" type="text/javascript">
                $(document).ready(function () {
                    var _fixTop;
                    $(window).scroll(function () {
                        var _top = $(document).scrollTop() + $('.page-header').height();
                        if (_fixTop > _top) {
                            $('.navigate-content').css('top', _top + 'px');
                            $('.search-panel').css('top', _top + 'px');
                        }
                    });
                    $('a#category_link').click(function () {
                        _fixTop = $(document).scrollTop() + $('.page-header').height();
                        $('.navigate-content').css('top', _fixTop + 'px').toggle();
                        $('.search-panel').hide();
                    });
                    $('#search_link').click(function () {
                        _fixTop = $(document).scrollTop() + $('.page-header').height();
                        $('.search-panel').css('top', _fixTop + 'px').toggle();
                        $('.navigate-content').hide();
                    });
                });
            </script>
            <!-- } header -->
        </div>
