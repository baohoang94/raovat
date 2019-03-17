<?php
require_once('connect.php');
if (!empty($_POST)) {
    $categoryID = $_POST['categoryID'];
    $content = $_POST['content'];
    $phone = $_POST['phone'];
    $name = $_POST['name'];
    $address = $_POST['address'];
    $status = 0;
    $vip = 0;
    $created = time();
    if (!empty($_POST)) {
		$sql_insert = "INSERT INTO news(categoryId, content, status, vip, created, phone, name, address) 
		VALUES(
		'".$categoryID."', 
		'".$content."',
		'".$status."',
		'".$vip."',
		'".$created."',
		'".$phone."',
		'".$name."',
		'".$address."'
		)";

		$query_insert = mysqli_query($con, $sql_insert);
		if ($query_insert) {
			echo 'Bản tin đã được thêm thành công<br><a href="index.php">Về trang chủ</a><br>';
		}
	}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Đăng tin</title>
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
</head>
<body style="text-align: center">
	<h1>Đăng tin mới</h1>
	<form action="dang-tin.php" method="post"> 
	    <div class="field">
	       <label><b>*</b> Đăng trong mục:</label>
	       <select style="margin:0; background-color: #fffddd" class="item-input-select" name="categoryID">
	       <?php 
	            $sql_pr_id = 'SELECT * FROM parentsCategory';
	            $query_pr_id = mysqli_query($con, $sql_pr_id);
	            while ($row_pr_id = mysqli_fetch_array($query_pr_id)) {
	        ?>                                          
	        <optgroup label="<?php echo $row_pr_id['name'] ?>">
	            <?php 
	                $sqlCategory = 'SELECT * FROM category WHERE parentCategoryId = ' . $row_pr_id['id'];
	                $queryCategory = mysqli_query($con, $sqlCategory);
	                while ($rowCategory = mysqli_fetch_array($queryCategory)) {
	            ?>
	            <option value="<?php echo $rowCategory['id'] ?>">&nbsp;&nbsp;&nbsp;<?php echo $rowCategory['name'] ?></option>
	            <?php } ?>
	        </optgroup>
	        <?php } ?>
	    </select>
		</div>
		<div class="field">
		   <label><b>*</b> Nội dung:</label>
		   <textarea name="content" required="" cols="" rows="" maxlength="10000" style="height: 100px; background-color: #fffddd"></textarea>
		</div>
	   <!-- <div style="padding-bottom: 5px;">
	    <div id="limitCounter" style="margin-left: 40px; color: #ff0000; line-height: 16px;">Tối đa <b style="color: green">30</b> chữ cho Rao vặt FREE (trả thêm <b>10 xu (cents)</b> cho mỗi 1 chữ tiếp theo)</div>
	</div> -->
	        <div class="field">
	           <label>Số phone:</label>
	           <input name="phone" required="" value="" type="text" class="txt" style="width: 120px"> <br>
	           <span style="padding-left: 18px; color:#555555;">Tên liên lạc:</span>
	           <input name="name" required="" value="" type="text" class="txt" style="width: 150px"> <br>
	       </div>
	       <div class="field">
	           <label>Địa chỉ liên lạc:</label>
	           <input name="address" required="" value="" type="text" class="txt"> <br>
	       </div>
	       

	       <!-- <div class="add-edit-vip-panel">
	        <div class="field" style="padding-left: 10px;">
	            <b>TÍNH NĂNG ĐĂNG TIN VIP</b> <i style="color: #666">(Tin của bạn sẽ nổi bật và được chú ý hơn)</i>
	        </div>  
	        
	        
	        <div class="field" style="line-height: 14px !important">
	            <span style="padding-left:60px;">&nbsp;</span>
	            <input id="chkItemIsHot" name="chkItemIsHot" type="checkbox" value="True"><label class="normal" for="chkItemIsHot">Highlight rao vặt <b>(+ $1)</b></label>
	            <i><a style="color:#6a6869 !important; font-size:12px;" id="linkMoreItemIsHot" href="#linkMoreItemIsHotData">(Tìm hiểu thêm)</a></i>
	            <div style="display:none">
	                <div id="linkMoreItemIsHotData" style="padding: 10px; background-color: #f2f2f2;">
	                    <p style="line-height: 22px; text-align: justify">
	                        Rao vặt của quý vị được kẻ khung đỏ sẽ trở nên nổi bật hơn, dễ tìm thấy hơn trên rao vặt online.<br>
	                        <img src="/res/images/IsHighlighted.png" alt="">
	                    </p>
	                </div>
	            </div>
	        </div>
	        <div class="field" style="line-height: 14px !important">
	            <span style="padding-left:60px;">&nbsp;</span>
	            <input id="chkItemIsBold" name="chkItemIsBold" type="checkbox" value="True"><label class="normal" for="chkItemIsBold">Tô đậm rao vặt <b>(+ $2)</b></label>
	            <i><a style="color:#6a6869 !important; font-size:12px;" id="linkMoreItemIsBold" href="#linkMoreItemIsBoldDate">(Tìm hiểu thêm)</a></i>
	            <div style="display:none">
	                <div id="linkMoreItemIsBoldDate" style="padding: 10px; background-color: #f2f2f2;">
	                    <p style="line-height: 22px; text-align: justify">
	                        Rao vặt của quý vị được in đậm sẽ trở nên nổi bật hơn, dễ tìm thấy hơn trên rao vặt online.<br>
	                        <img src="/res/images/IsBold.png" alt="">
	                    </p>
	                </div>
	            </div>
	        </div>
	        
	        
	        
	        
	        <div class="field" style="line-height: 14px !important">
	            <span style="padding-left:60px;">&nbsp;</span>
	            <input id="chkItemIsTypical" name="chkItemIsTypical" type="checkbox" value="True"><label class="normal" for="chkItemIsTypical">RAO VẶT VIP <b>(+ $3)</b></label>
	            <i><a style="color:#6a6869 !important; font-size:12px;" id="linkMoreIsTypical" href="#linkMoreIsTypicalData">(Tìm hiểu thêm)</a></i>
	            <div style="display:none">
	                <div id="linkMoreIsTypicalData" style="padding: 10px; background-color: #f2f2f2;">
	                    <p style="line-height: 22px; text-align: justify">
	                        - Rao vặt của quý vị luôn ở vị trí nổi bật dễ tìm thấy nhất, có màu background phân biệt với các rao vặt khác.<br>
	                        - Vị trí của Rao Vặt Đặc Biệt hiện thị hầu như trong toàn bộ các trang trên rao vặt online.<br>
	                        - Rao Vặt Đặc Biệt còn được hiện thị trên trang mạng Raovat.io tại địa chỉ <a href="http://www.raovat.io" target="_blank">www.raovat.io</a><br>
	                        <img src="/res/images/IsSpecial.png" alt="">
	                    </p>
	                </div>
	            </div>
	        </div>
	    </div>


	    <div class="field">
	       <label><b>*</b> Mã xác thực:</label>
	       <input id="txtConfirmCode" class="txt" name="txtConfirmCode" type="text" maxlength="4">
	       <img alt="Mã xác nhận" id="antispam" class="img" src="/API/Captcha.ashx" align="absmiddle">
	       <img alt="Change" style="cursor: pointer;" align="absmiddle" title="Đổi mã xác nhận khác" id="refresh-antispam" class="img" src="/res/images/refresh.gif">
	   </div> -->
	   <div class="field">
	       <label>&nbsp;</label>
	       <input type="submit" class="inputsubmit largesubmit" value="Đăng tin">
	   </div>
	</form>
</body>
</html>
	
