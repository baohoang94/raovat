<div id="navigate-holder" class="navigate-holder">
    <div class="navigate-header-bg">
        <a title="Về trang chủ" href="/">XEM THEO DANH MỤC</a>
    </div>
    <div class="clear-both"></div>
    <div class="navigate-content">
        <?php 
            $sql_pr_id = 'SELECT * FROM parentsCategory';
            $query_pr_id = mysqli_query($con, $sql_pr_id);
            while ($row_pr_id = mysqli_fetch_array($query_pr_id)) {
        ?>
            <div class="navigate-item">
                <a href="#"><?php echo $row_pr_id['name'] ?></a>
            </div>
                <?php 
                    $sqlCategory = 'SELECT * FROM category WHERE parentCategoryId = ' . $row_pr_id['id'];
                    $queryCategory = mysqli_query($con, $sqlCategory);
                    while ($rowCategory = mysqli_fetch_array($queryCategory)) {
                ?>
                <div class="navigate-line"></div> 
                <a title="Click để xem Rao Vặt theo mục này" href="category.php?id=<?php echo $rowCategory['id'] ?>">
                    <div class="navigate-sub-item">
                        <!-- <img align="absmiddle" src="res/images/cate/100.png"> -->
                        <?php echo $rowCategory['name'] ?>
                    </div>
                </a>
        <?php }} ?>
    </div>
</div>