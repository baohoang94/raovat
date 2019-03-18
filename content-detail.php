<?php 
    if (!empty($_GET['id'])) {
        $sqlNews = "SELECT * FROM news WHERE id = ".$_GET['id'];
        $queryNews = mysqli_query($con, $sqlNews);
        $rowNews = mysqli_fetch_array($queryNews);
    }
?>
<div class="content-vip-panel">
                    
    <!-- Link Path { -->
    <div id="linkPathDetail">
    
<div class="link-path">
    <div style="float: left; color:#fff;">
        <a href="index.php">Trang chủ</a> <!-- » <a class="linkPath" href="/chuyen-muc/cho-thue-chothue.html">Cho Thuê</a> » <a class="linkPath" href="/chuyen-muc/100-nha-cho-thue-100.html">100 - Nhà Cho Thuê</a> --> » Nội dung rao vặt
    </div>
    <div style="float: right;">
        <a class="link-back" title="Quay lại trang trước" href="javascript:history.back(-1);">Quay lại</a>
    </div>
    <div class="clear-both"></div>
</div>
    </div>
    <!-- } Link Path -->
    <div style="margin: 10px 0px 10px 0px; height: auto; overflow: hidden;">
        <!-- Item Content { -->
        

<div class="detail-holder" style="margin-bottom: 0px !important">
    <div style="height: 80px; width: 530px; background-color: #ff0000; margin-bottom: 10px; overflow: hidden; display: none">
        <!-- <img width="530px" height="80px" alt="" src="res/fckfolder/yeo.jpg">     -->
    </div>
    <div class="content-normal content-normal-detail">
    <div class="detail-content">
        <div class="detail-date">
            Ngày đăng: <?php echo @date('d/m/Y H:i:s', $rowNews['created']) ?>
        </div>
        <div class="detail-panel">
            <div id="heighDetail" style="height: auto; overflow: hidden">
            <div style="height: auto; overflow: hidden">
                <?php echo $rowNews['content'] ?>
                <div class="clear-both"></div>
            </div>
            <div style="height: auto; overflow: hidden; margin-top: 10px; margin-bottom: 10px">
                 <div style="float:left; margin-right:8px;">
                <div class="g-plus" data-action="share" data-annotation="none" data-gapiscan="true" data-onload="true" data-gapistub="true"></div> 
                <iframe id="twitter-widget-0" scrolling="no" frameborder="0" allowtransparency="true" class="twitter-share-button twitter-share-button-rendered twitter-tweet-button" style="position: static; visibility: visible; width: 60px; height: 20px;" title="Twitter Tweet Button" src="https://platform.twitter.com/widgets/tweet_button.2e9f365dae390394eb8d923cba8c5b11.en.html#dnt=false&amp;id=twitter-widget-0&amp;lang=en&amp;original_referer=http%3A%2F%2Fraovat.io%2Fhkzjk-kjzkj-jdzdlka-adklkadlk-x04qT8IZ.html&amp;size=m&amp;text=hkzjk%20kjzkj%20jdzdlka%20adklkadlk%20-%20hkzjk%20kjzkj%20jdzdlka%20adklkadlk%20%7C%20Chuy%C3%AAn%20trang%20Rao%20V%E1%BA%B7t&amp;time=1552753795952&amp;type=share&amp;url=http://<?php echo $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"]; ?>" __idm_frm__="1017"></iframe>
                </div> 
	            <div style="float:left;" class="fb-share-button fb_iframe_widget" data-href="http://raovat.io/hkzjk-kjzkj-jdzdlka-adklkadlk-x04qT8IZ.html" data-layout="button" fb-xfbml-state="rendered" fb-iframe-plugin-query="app_id=&amp;container_width=0&amp;href=http%3A%2F%2Fraovat.io%2Fhkzjk-kjzkj-jdzdlka-adklkadlk-x04qT8IZ.html&amp;layout=button&amp;locale=vi_VN&amp;sdk=joey"><span style="vertical-align: bottom; width: 68px; height: 20px;"><iframe name="f1465ff3481e2ec" width="1000px" height="1000px" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" title="fb:share_button Facebook Social Plugin" src="https://www.facebook.com/plugins/share_button.php?app_id=&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter%2Fr%2Fm5nTkygCewO.js%3Fversion%3D44%23cb%3Df3d90e1ccb2054%26domain%3Draovat.io%26origin%3Dhttp%253A%252F%252Fraovat.io%252Ff2b2dfd25f807cc%26relation%3Dparent.parent&amp;container_width=0&amp;href=http%3A%2F%2F<?php echo $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"]; ?>&amp;layout=button&amp;locale=vi_VN&amp;sdk=joey" style="border: none; visibility: visible; width: 68px; height: 20px;" __idm_frm__="1020" class=""></iframe></span></div>
                <div class="clear-both"></div>
                <script type="text/javascript">
    (function () {
        var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
        po.src = 'https://apis.google.com/js/platform.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
    })();
</script>
<script>    !function (d, s, id) { var js, fjs = d.getElementsByTagName(s)[0], p = /^http:/.test(d.location) ? 'http' : 'https'; if (!d.getElementById(id)) { js = d.createElement(s); js.id = id; js.src = p + '://platform.twitter.com/widgets.js'; fjs.parentNode.insertBefore(js, fjs); } } (document, 'script', 'twitter-wjs');</script>

            </div>
           <div class="detail-customer"><b style="color:#ef388b;">NGƯỜI ĐĂNG:</b>
<div style="height: auto; padding-top: 10px; font-style:italic;">
<img alt="" src="res/images/site4/contact.png" align="left" style="margin-right: 5px;" height="50px">
<b><?php echo $rowNews['name'] ?> &nbsp;&nbsp; <?php echo $rowNews['phone'] ?></b> <br>
<a href="#" title="Click để xem location trên Google Maps" style="text-decoration: underline"><?php echo $rowNews['address'] ?></a>
<div class="clear-both"></div>
</div>
</div>
            </div>
            
             <div style="height: auto; overflow: hidden; margin-top: 10px; margin-bottom: 10px">
                <!-- Facebook Comments { -->
                <!-- <div class="showcase-title">Bình luận Facebook</div>
                <div class="row">
                    <div class="col-md-12">
                        <div id="fbcomments">
                        <div class="fb-comments fb_iframe_widget fb_iframe_widget_fluid_desktop" data-href="http://www.raovat.io/hkzjk-kjzkj-jdzdlka-adklkadlk-x04qT8IZ.html" data-numposts="5" data-colorscheme="light" data-width="470" fb-xfbml-state="rendered" fb-iframe-plugin-query="app_id=&amp;color_scheme=light&amp;container_width=490&amp;height=100&amp;href=http%3A%2F%2Fwww.raovat.io%2Fhkzjk-kjzkj-jdzdlka-adklkadlk-x04qT8IZ.html&amp;locale=vi_VN&amp;numposts=5&amp;sdk=joey&amp;width=470"><span style="vertical-align: bottom; width: 470px; height: 178px;"><iframe name="fd42081e255d08" width="470px" height="100px" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" title="fb:comments Facebook Social Plugin" src="https://www.facebook.com/plugins/comments.php?app_id=&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter%2Fr%2Fm5nTkygCewO.js%3Fversion%3D44%23cb%3Df163558831344e%26domain%3Draovat.io%26origin%3Dhttp%253A%252F%252Fraovat.io%252Ff2b2dfd25f807cc%26relation%3Dparent.parent&amp;color_scheme=light&amp;container_width=490&amp;height=100&amp;href=http%3A%2F%2Fwww.raovat.io%2Fhkzjk-kjzkj-jdzdlka-adklkadlk-x04qT8IZ.html&amp;locale=vi_VN&amp;numposts=5&amp;sdk=joey&amp;width=470" style="border: none; visibility: visible; width: 470px; height: 178px;" __idm_frm__="1021" class=""></iframe></span></div>
                        </div>
                    </div>
                </div>
                <div id="fb-root" class=" fb_reset"><div style="position: absolute; top: -10000px; width: 0px; height: 0px;"><div><iframe name="fb_xdm_frame_https" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" id="fb_xdm_frame_https" aria-hidden="true" title="Facebook Cross Domain Communication Frame" tabindex="-1" src="https://staticxx.facebook.com/connect/xd_arbiter/r/m5nTkygCewO.js?version=44#channel=f2b2dfd25f807cc&amp;origin=http%3A%2F%2Fraovat.io" style="border: none;" __idm_frm__="1019"></iframe></div><div></div></div></div>
                <script language="javascript" type="text/javascript">
                    (function (d, s, id) {
                        var js, fjs = d.getElementsByTagName(s)[0];
                        if (d.getElementById(id)) return;
                        js = d.createElement(s); js.id = id;
                        js.src = "//connect.facebook.net/vi_VN/all.js#xfbml=1";
                        fjs.parentNode.insertBefore(js, fjs);
                    } (document, 'script', 'facebook-jssdk'));
                </script> -->
                <!-- } Facebook Comments -->
            </div>
        </div>
    </div>
    </div>
</div>
<script type="text/javascript" language="javascript">

   jQuery(document).ready(function() {
        var heightDiv= jQuery("#heighDetail").height();
        if(heightDiv <= 250)
            jQuery("#adsAddin").hide();
        else
            jQuery("#adsAddin").hide();
    });
</script>

        <!-- } Item Content -->
        
<div class="right-panel-ads">
    <div style="height: auto; overflow: hidden; margin: 0px 0px 10px 0px">
<a href="http://raovat.io/dang-tin.html" target="_blank" title="">
<img alt="" src="/res/quangcao/Image/15/300x250_dangtin.jpg" width="300" height="250">
</a>
</div>

            
</div>

    </div>

                </div>