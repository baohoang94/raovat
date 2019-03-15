
jQuery(document).ready(function () {

    $('#refresh-antispam').click(function(){
        $('#antispam').attr('src', noCache(appPath +'/API/Captcha.ashx'));
	});

	$('#accept').click(function()
	{  
	    if($('#txtItemSummary').val().trim() == '')
	    {
	        $('#txtItemSummary').focus();
	        alert('Vui lòng nhập Nội dung rao vặt!');
	        return false;
	    }
	    //
	    if($('#txtConfirmCode').val().trim() == '')
	    {
	        alert('Vui lòng nhập chính xác Mã xác nhận!');
	        $('#txtConfirmCode').focus();
	        return false;
	    }
	    //
		$('#hidAction').val('item-add');
		$('form:first').submit();
	});
	
	$('#txtItemSummary').keypress(function()
    {
        WordLimitCounter('#txtItemSummary',maximumFreeWords,'#limitCounter');
        //CharLimitCounter('#txtItemSummary',maximumFreeChars,'#limitCounter');
    });
    
    $('#txtItemSummary').blur(function()
    {
        WordLimitCounter('#txtItemSummary',maximumFreeWords,'#limitCounter');
        //CharLimitCounter('#txtItemSummary',maximumFreeChars,'#limitCounter');
    });
    
    $('#txtItemSummary').focus(function()
    {
        WordLimitCounter('#txtItemSummary',maximumFreeWords,'#limitCounter');
        //CharLimitCounter('#txtItemSummary',maximumFreeChars,'#limitCounter');
    });
	//
	/*
	$('chkItemAddLength').addEvent('click', function()
	{	    
	    $('chkItemAddLength').set('value',$('chkItemAddLength').get('checked'));
	}.bind(this));
	//
	$('chkItemIsHot').addEvent('click', function()
	{	    
	    $('chkItemIsHot').set('value',$('chkItemIsHot').get('checked'));
	}.bind(this));
	*/
});

function noCache(uri){
	return uri.concat(/\?/.test(uri)?"&":"?","noCache=",(new Date).getTime());
}