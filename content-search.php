<div class="search-panel">
    <div class="search-panel-header">
        TÌM KIẾM RAO VẶT
    </div>
    <div style="padding:10px 15px 10px 15px; border: solid 1px #0b803a">
        <div style="padding-bottom: 3px;">Chọn mục rao vặt:</div>
        <div style="padding-bottom: 10px;">
             <select name="ddlCategory" id="ddlCategory" style="width: 221px; height: 25px; border: solid 1px #ccc">
                <option value="">(Tất cả mục rao vặt)</option>
                <?php 
                    $sqlCategory = 'SELECT * FROM category';
                    $queryCategory = mysqli_query($con, $sqlCategory);
                    while ($rowCategory = mysqli_fetch_array($queryCategory)) {
                ?>
                <option value="<?php echo $rowCategory['id'] ?>"><?php echo $rowCategory['name'] ?></option>
                <?php } ?>
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
                        window.location.href= 'https://www.google.com/search?q=' + encodeURIComponent($('#txtKeyword').val());
                     }       
                }
              </script>
        </div>
    </div>
</div>