<div class="search-panel">
    <div class="search-panel-header">
        TÌM KIẾM RAO VẶT
    </div>
    <div style="padding:10px 15px 10px 15px; border: solid 1px #0b803a">
        <div style="padding-bottom: 3px;">Chọn mục rao vặt:</div>
        <div style="padding-bottom: 10px;">
             <select name="ddlCategory" id="ddlCategory" style="width: 221px; height: 25px; border: solid 1px #ccc">
                <option value="all">(Tất cả mục rao vặt)</option>
                <option style="padding-left: 5px; font-weight: bold" value="chothue" >Cho Thuê</option><option style="padding-left: 15px;" value="100" >&nbsp;&nbsp;--100 - Nhà Cho Thuê</option><option style="padding-left: 15px;" value="110" >&nbsp;&nbsp;--110 - Apts/Condos Cho Thuê</option><option style="padding-left: 15px;" value="120" >&nbsp;&nbsp;--120 - Phòng Cho Thuê</option><option style="padding-left: 5px; font-weight: bold" value="bsn" >Bán - Sang Nhượng</option><option style="padding-left: 15px;" value="300" >&nbsp;&nbsp;--300 - Nhà Bán</option><option style="padding-left: 15px;" value="400" >&nbsp;&nbsp;--400 - Xe Bán</option><option style="padding-left: 15px;" value="500" >&nbsp;&nbsp;--500 - Sang Nhượng Cơ Sở, Tiệm</option><option style="padding-left: 5px; font-weight: bold" value="ldvl" >Các Việc Làm</option><option style="padding-left: 15px;" value="600" >&nbsp;&nbsp;--600 - Việc Làm</option><option style="padding-left: 15px;" value="630" >&nbsp;&nbsp;--630 - Việc Nhà</option><option style="padding-left: 15px;" value="640" >&nbsp;&nbsp;--640 - Việc Hãng Xưởng</option><option style="padding-left: 15px;" value="650" >&nbsp;&nbsp;--650 - Việc Hair / Nail</option><option style="padding-left: 15px;" value="660" >&nbsp;&nbsp;--660 - Việc Văn Phòng</option><option style="padding-left: 15px;" value="665" >&nbsp;&nbsp;--665 - Việc Chợ / Nhà Hàng</option><option style="padding-left: 15px;" value="670" >&nbsp;&nbsp;--670 - Việc Thợ May</option><option style="padding-left: 5px; font-weight: bold" value="dvsc" >Dịch Vụ - Sửa chữa</option><option style="padding-left: 15px;" value="700" >&nbsp;&nbsp;--700 - Dịch Vụ</option><option style="padding-left: 15px;" value="702" >&nbsp;&nbsp;--702 - Du Lịch</option><option style="padding-left: 15px;" value="706" >&nbsp;&nbsp;--706 - Bảng Hiệu</option><option style="padding-left: 15px;" value="710" >&nbsp;&nbsp;--710 - Sửa Máy Móc</option><option style="padding-left: 15px;" value="720" >&nbsp;&nbsp;--720 - Sửa Xe</option><option style="padding-left: 15px;" value="740" >&nbsp;&nbsp;--740 - Sửa Nhà, Cơ Sở, Tiệm</option><option style="padding-left: 5px; font-weight: bold" value="dvpt" >Dịch Vụ Phổ Thông</option><option style="padding-left: 15px;" value="742" >&nbsp;&nbsp;--742 - Dọn Nhà</option><option style="padding-left: 15px;" value="744" >&nbsp;&nbsp;--744 - Sửa Ống Nước, Plumping</option><option style="padding-left: 15px;" value="746" >&nbsp;&nbsp;--746 - Làm Vườn</option><option style="padding-left: 15px;" value="747" >&nbsp;&nbsp;--747 - Giặt Thảm</option><option style="padding-left: 15px;" value="750" >&nbsp;&nbsp;--750 - Dạy, Huấn Luyện</option><option style="padding-left: 5px; font-weight: bold" value="tcld" >Tài Chính - Làm Đẹp</option><option style="padding-left: 15px;" value="760" >&nbsp;&nbsp;--760 - Vay Mượn, Đầu Tư</option><option style="padding-left: 15px;" value="770" >&nbsp;&nbsp;--770 - Sức Khỏe, Thẩm Mỹ</option><option style="padding-left: 15px;" value="780" >&nbsp;&nbsp;--780 - Tử Vi, Chiêm Tinh</option><option style="padding-left: 5px; font-weight: bold" value="ltcl" >Linh Tinh Các Loại</option><option style="padding-left: 15px;" value="800" >&nbsp;&nbsp;--800 - Linh Tinh</option><option style="padding-left: 15px;" value="820" >&nbsp;&nbsp;--820 - Dịch Vụ Ăn Uống</option><option style="padding-left: 15px;" value="830" >&nbsp;&nbsp;--830 - Giữ Trẻ</option><option style="padding-left: 15px;" value="850" >&nbsp;&nbsp;--850 - Bán Các Loại</option><option style="padding-left: 15px;" value="900" >&nbsp;&nbsp;--900 - Nhắn Tin, Thông Báo</option><option style="padding-left: 15px;" value="910" >&nbsp;&nbsp;--910 - Lời Nguyện Tôn Giáo</option><option style="padding-left: 15px;" value="920" >&nbsp;&nbsp;--920 - Tìm Người Thân</option><option style="padding-left: 15px;" value="950" >&nbsp;&nbsp;--950 - Tìm Bạn Bốn Phương</option>
            </select>
        </div>
        <div style="padding-bottom: 3px;">Nhập rao vặt muốn tìm:</div>
        <div style="padding-bottom: 10px;">
            <input type="text" id="txtKeyword" name="txtKeyword" placeholder="Số Phone hoặc Keyword bất kỳ" value=""  style="width: 210px; height: 22px; border: solid 1px #ccc; padding: 0px 4px 0px 4px;"/>
        </div>
        <div style="padding-bottom: 3px;">hoặc Xem rao vặt theo ngày:</div>
        <div style="padding-bottom: 10px;">
            <input type="text" id="txtFromDate" name="txtFromDate" value="" placeholder="Từ ngày" style="text-align: center; width: 105px; height: 22px; border: solid 1px #ccc; float: left"/>
            <input type="text" id="txtToDate" name="txtToDate" value="" placeholder="Đến ngày" style="text-align: center; width: 105px; height: 22px; border: solid 1px #ccc; float: right"/>
            <div class="clear-both"></div>
             <script language="javascript" type="text/javascript">
              $(function() {
                $("#txtFromDate").datepicker();
                $("#txtToDate").datepicker();
              });
              </script>
        </div>
        <div style="padding-top: 3px; padding-bottom: 5px; text-align: center;">
            <input id="btnSearch" name="btnSearch" type="button" class="inputsubmit" value="SEARCH" title="Tìm rao vặt bằng RRAOVAT.IO SEARCH ENGINE" />&nbsp;&nbsp;<input id="btnGoogleSearch" name="btnGoogleSearch" class="inputsubmit" type="button" value="GOOGLE SEARCH" title="Tìm rao vặt bằng GOOGLE SEARCH ENGINE" />
            <script language="javascript" type="text/javascript">
                $(function() {
                    $("#btnSearch").click(function( event ) {
                        event.preventDefault();
                            StartSearch();
                      });
                    $("#btnGoogleSearch").click(function( event ) {
                        event.preventDefault();
                            StartSearchWithGoogle();
                      });
                    $('#txtKeyword').keypress(function(event){
                        if(event.which == 13)
                        {
                            StartSearchWithGoogle();
                            return false;  
                        }
                    });
                    $('#txtFromDate').keypress(function(event){
                        if(event.which == 13)
                        {
                            if($('#txtFromDate').val()  != '' && $('#txtToDate').val()  != '')
                            {
                                StartSearch();
                            }
                            return false;  
                        }
                    });
                     $('#txtToDate').keypress(function(event){
                        if(event.which == 13)
                        {
                            if($('#txtFromDate').val()  != '' && $('#txtToDate').val()  != '')
                            {
                                StartSearch();
                            }
                            return false;  
                        }
                    });
                });
                function StartSearch()
                {
                     if ($('#txtKeyword').val() == '' && $('#txtFromDate').val()  == '' && $('#txtToDate').val()  == '')
                     {
                        alert('Nhập Keywords rao vặt muốn tìm hoặc chọn Xem rao vặt theo ngày!');
                     }
                     else
                     {
                        window.location.href= 'search.php?kw=' + encodeURIComponent($('#txtKeyword').val()) + '&muc=' + encodeURIComponent($('#ddlCategory').val()) + '&fd=' + encodeURIComponent($('#txtFromDate').val()) + '&td=' + encodeURIComponent($('#txtToDate').val());
                     }       
                }
                function StartSearchWithGoogle()
                {
                     if ($('#txtKeyword').val() == '')
                     {
                        alert('Nhập Keywords rao vặt muốn tìm với GOOGLE SEARCH!');
                     }
                     else if ($('#txtKeyword').val() == '' && $('#txtFromDate').val() !='' && $('#txtToDate').val() != '')
                     {
                        window.location.href= '/tim-rao-vat.html?kw=' + encodeURIComponent($('#txtKeyword').val()) + '&muc=' + encodeURIComponent($('#ddlCategory').val()) + '&fd=' + encodeURIComponent($('#txtFromDate').val()) + '&td=' + encodeURIComponent($('#txtToDate').val());
                     }
                     else if ($('#txtKeyword').val() != '')
                     {
                        window.location.href= '/tim-rao-vat-google.html?kw=' + encodeURIComponent($('#txtKeyword').val());
                     }       
                }
              </script>
        </div>
    </div>
</div>