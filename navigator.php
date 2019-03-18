<div class="top-navigate-holder" style="margin-bottom: 10px;">
    <div class="navigate-header-bg" style="text-align: left;">
        <a title="Về trang chủ" href="trang-chu.html">DANH MỤC RAO VẶT</a>
    </div>
    <div class="navigate-content" id="navigate-content" style="height:160px;">
                
        <div style="float: left; width: 266px; margin-left: 5px; margin-right: 5px; height: auto; overflow: hidden">
            <?php 
                $sqlCategory = 'SELECT * FROM category';
                $queryCategory = mysqli_query($con, $sqlCategory);
                while ($rowCategory = mysqli_fetch_array($queryCategory)) {
            ?>
            <a title="Click để xem Rao Vặt theo mục này"  href="category.php?id=<?php echo $rowCategory['id'] ?>">
                <div class="top-navigate-sub-item">
                    <!-- <img align="absmiddle" src="res/images/cate/950.png" /> -->
                    <?php echo $rowCategory['name'] ?>
                </div>
            </a>
            <?php } ?>
        </div>
    </div>
    <div class="navigate-more"><a class="more" href="javascript:void(0);">Xem thêm</a></div>
    <div class="clear-both"></div>
</div>
<script language="javascript" type="text/javascript">
    $(document).ready(function () {
        var _navigateContent = $('#navigate-content');
        var _height = _navigateContent.height();
        var _heightDiv = _navigateContent.find('div').height();
        var _heightA = _navigateContent.find('a').height();
        //_navigateContent.css('height', _heightA * 5 + 'px');
        $('.navigate-more a').click(function () {
            _height = _navigateContent.height();
            _heightDiv = _navigateContent.find('div').height();
            _heightA = _navigateContent.find('a').height();
            if (_height < _heightDiv) {
                $('#navigate-content').animate({ height: _heightDiv + 'px' }, 500);
                $('.navigate-more a').attr('class', 'down');
                $('.navigate-more a').text('Thu gọn');
            }
            else {
                $('#navigate-content').animate({ height: '160px' }, 500);
                $('.navigate-more a').attr('class', 'more');
                $('.navigate-more a').text('Xem thêm');
            }
        });
    });
</script>