<div class="page-footer">
    <!-- footer { -->   
<div class="page-footer-wrapper">
    <div class="links-footer">
           <a href="trang-chu.html">Trang chủ</a> &nbsp; &bull; &nbsp; <a href="#">Giá đăng rao vặt</a> &nbsp; &bull; &nbsp; <a href="#">Giá đăng quảng cáo</a> &nbsp; &bull; &nbsp; <a href="#">Hướng dẫn sử dụng</a> &nbsp; &bull; &nbsp; <a href="#">Giới thiệu</a> &nbsp; &bull; &nbsp; <a href="#">Qui định sử dụng</a> &nbsp; &bull; &nbsp; <a href="#">Liên lạc</a> &nbsp; &bull; &nbsp; <a href="#">Tin khuyến mãi</a>
    </div>
        <div class="footer-logo">
            <img alt="VienDongDaily.Com" src="res/images/site4/vd-logo.png"/>
            <div style="display:block; text-align:left; padding:5px 0 0 0; color:#ef2f85; margin:0;">
            Tổng hợp thông tin rao vặt người Việt tại Cali
            </div>
            <div style="display:block; text-align:left; padding:5px 0 0 0; color:#b3aeae; margin:0;">
            info@raovat.io
            </div>
        </div>
        <div class="footer-creadit">
            <div>Nhận thanh toán bằng Credit Card và PayPal</div>
            <img style="margin-top:15px;" src="res/images/site4/creadit.png" height="40px" />
        </div>
   <div class="clear-both"></div>
</div>
<script language="javascript" type="text/javascript">
</script>
    <!-- } footer -->
    </div>
    <div id="gototop" title="Về đầu trang">
        <img alt="Về đầu trang" style="width: 48px; height: 48px;" src="res/images/site4/icon_gototop.png" />
    </div>
  <script language="javascript" type="text/javascript">
        jQuery('#gototop').click(function(e)
        { 
            jQuery("html, body").animate({ scrollTop: 0 }, "slow");
        }); 
        /* go to top after 300 pixels down */
        var gototop = $('#gototop');
        //gototop.css('opacity','0');
        /* go to top */
        jQuery(window).scroll(function()
        {
            /*
          if($.browser.msie && $.browser.version=="6.0") {
            gototop.css({
              'position': 'absolute',
              'bottom': window.getPosition().y + 10,
              'width': 100
            });
          }
          */
          //
          if(jQuery(window).scrollTop() > 300)
            gototop.show();
          else
            gototop.hide();
        });
        jQuery('#left-bottom').scrollToFixed({
                marginTop: 50,
                limit: function() {
                    var limit = 0;
                    return limit;
                },
                zIndex: 999
            });
    </script>
    </form>
</body>
</html>
