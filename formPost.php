<div class="content-vip-panel">
    
    <!-- Link Path { -->
    
    <div class="link-path">
        <div style="float: left; color:#fff;">
            <a href="/trang-chu">Trang chủ</a> » Đăng rao vặt
        </div>
        <div style="float: right;">
            <a class="link-back" title="Quay lại trang trước" href="javascript:history.back(-1);">Quay lại</a>
        </div>
        <div class="clear-both"></div>
    </div>
    <!-- } Link Path -->
    <div style="margin: 10px 0px 10px 0px; height: auto; overflow: hidden;">
        <!-- Content Post { -->
        

        <div class="item-content-edit-bg">
            <div class="item-content-edit content-normal">
                <div class="field" style="padding-left: 10px; padding-top: 5px !important; padding-bottom: 35px !important;">
                    <span style="font-size:16px; font-weight:bold;">ĐĂNG TIN MIỄN PHÍ</span> 
                    tới 15 ngày<i style="color: #666">, ít nhất 2 ngày chờ duyệt đăng &nbsp;
                        <!-- <a id="linkPolicy" href="#linkPolicyData" style="float:right; font-size:12px; -webkit-border-radius: 3px;-moz-border-radius: 3px; border-radius: 3px; background-color:#1294f6; padding:5px 10px; color:#fff !important;">Hướng dẫn</a> -->
                        <div style="display:none">
                            <div id="linkPolicyData" style="padding: 10px; background-color: #f2f2f2; width: auto; height: auto;">
                                <p style="line-height: 22px; text-align: justify">
                                    <b>THỂ LỆ ĐĂNG RAO VẶT:</b>
                                    <br>
                                    - Tất cả rao vặt điều được đăng online miễn phí 15 ngày.    
                                    - Khi đăng rao vặt rao bán xe, nội dung rao vặt phải ghi rõ bảng số xe (license plate#) hoặc số sườn (VIN)<br>
                                    - Người đăng rao vặt phải chịu trách nhiệm hoàn toàn nội dung rao vặt đã đăng. Chúng tôi sẽ không chịu trách nhiệm bất kỳ những thiệt hại liên đới nào gây ra do việc đăng sai hoặc đăng sót.<br>
                                    - Nội dung rao vặt là từ người đăng, chúng tôi miễn trừ trách nhiệm<br>
                                    - Người đăng rao vặt muốn dừng đăng rao vặt, vui lòng gửi yêu cầu vào info@raovat.io để thông báo cho chúng tôi dừng rao vặt<br>
                                    - Rao vặt online của quý vị có thể được Google lưu trữ cached lại, chúng tôi miễn trừ trách nhiệm về việc này<br>	
                                    - Chúng tôi giữ toàn quyền thay đổi, ngưng, từ chối đăng một rao vặt bất kỳ mà không cần thông báo trước và không cần nên lý do.<br>
                                    - Chúng tôi chỉ đăng bù rao vặt cho những rao vặt có nội dung sai số điện thoại, địa chỉ hoặc sai sót ngày.<br>
                                    - Đối với rao vặt đăng lên Raovat.io:<br>
                                    &nbsp;&nbsp;&nbsp;+ Quảng cáo đã lên báo, nếu khách muốn STOP trước thời hạn, chúng tôi chỉ credit lại bằng quảng cáo cho lần sau tương đương với số tiền còn lại của qui khách (sẽ không credit lại nếu quảng cáo đã được đăng lên trên 3 ngày)<br>
                                    &nbsp;&nbsp;&nbsp;+ Tất cả các quảng cáo muốn đăng hoặc sửa cho ngày hôm sau phải được gởi đến toàn soạn trước 4:00pm<br>
                                    <br>
                                </p>
                            </div>
                        </div> 
                    </i></div><i style="color: #666">
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
                       <textarea name="txtItemSummary" cols="" rows="" maxlength="10000" style="height: 100px; background-color: #fffddd"></textarea>
                   </div>
                   <!-- <div style="padding-bottom: 5px;">
                    <div id="limitCounter" style="margin-left: 40px; color: #ff0000; line-height: 16px;">Tối đa <b style="color: green">30</b> chữ cho Rao vặt FREE (trả thêm <b>10 xu (cents)</b> cho mỗi 1 chữ tiếp theo)</div>
                </div> -->
                <div class="field">
                   <label>Số phone:</label>
                   <input name="txtPhone" value="" type="text" class="txt" style="width: 120px">
                   <span style="padding-left: 18px; color:#555555;">Tên liên lạc:</span>
                   <input name="txtFullName" value="" type="text" class="txt" style="width: 150px">
               </div>
               <div class="field">
                   <label>Địa chỉ liên lạc:</label>
                   <input name="txtAddress" value="" type="text" class="txt">
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
       </i></div><i style="color: #666">
       </i></div><i style="color: #666">
        <!-- } Content Post -->
        
        <div class="right-panel-ads">
            <div style="height: auto; overflow: hidden; margin: 0px 0px 10px 0px">
                <a href="http://raovat.io/dang-tin.html" target="_blank" title="">
                    <img alt="" src="/res/quangcao/Image/15/300x250_dangtin.jpg" width="300" height="250">
                </a>
            </div>

            
        </div>

    </i></div><i style="color: #666">

    </i></div>
