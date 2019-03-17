<?php include_once ( 'header.php' ) ?>

    <div class="page-body-container">
<div class="TopBannerCSS">
    <div style='height: auto; overflow: hidden; margin: 0px 0px 0px 0px'>
<a href="http://raovat.io/dang-tin.html" target="_blank" title="" >
<img alt="" src="res/quangcao/Image/9/APR03_1100X250_3.jpg" width="1100" height="250" />
</a>
</div>
</div>
        <div class="page-wrapper">
         <!-- body { -->
        <div class="page-body">
            <!-- body-left { -->
            <?php include_once ('left.php') ?>
            <!-- } body-left -->
            <div class="body-right-content">
                 <!-- navigator {-->
<?php include_once ('content-detail.php') ?>
                <!-- } navigator -->
                <div class="content-normal-panel">
    <!-- Content Normal { -->
           <div class="content-normal">
                <div class="normal-header">
                    RAO VẶT HÔM NAY
                </div>
                <div id="magazie" class="content-normal" style="padding-top: 5px;"> 
                    <!-- content item -->
                    <div class="content-item content-item-grid">
                        <div style="padding: 10px 10px 10px 10px; margin: 0 !important" class="item-rows" onmouseover="this.className='item-rows-over';" onmouseout="this.className='item-rows';">
                            <div class="cate-panel">
                                100 - Nhà Cho Thuê
                            </div>
                            <div class="date-panel">
                                <span style="color: #fe1010;">Ngày đăng:</span> 1 giờ trước 
                            </div>
                            <div class="summary-panel">
                                <a href="index.html">
                                    ahihi the dog 
                                </a>
                            </div>
                            <div class="clear-both"></div>
                        </div>
                    </div><!-- .content-item -->
                    
                </div>
                <div class="normal-footer">
                     <div class="paging">
                        <!-- Paging { -->
                        <span class="current-none">1</span>
<a href="index.html">2</a>
<a href="index.html">3</a>
<a href="index.html">4</a>
<a href="index.html">5</a>
<a href="index.html">6</a>
<a href="index.html">7</a>
<a href="index.html">8</a>
<a href="index.html">9</a>
<a href="index.html">...</a>
<a href="index.html" class="fpnl-page">Next &raquo;</a>
<a href="index.html" class="fpnl-page">Last</a>
                        <!-- } Paging -->
                    </div>
                </div>
            </div>
            <script language="javascript" type="text/javascript">
                function loadMasonry()
                {
                    docReady( function() {
                      // document is ready, let's do some fun stuff!
                      var container = document.querySelector('#magazie');
                      var msnry = new Masonry( container );
                      itemSelector: '.content-item'
                    });
                }
                jQuery(window).load(function(){
                   loadMasonry();
                });
            </script>
    <!-- } Content Normal -->
                </div>
            </div>
        </div>
        <!-- } body -->
        </div>
    </div>
<?php include_once ( 'footer.php' ) ?>