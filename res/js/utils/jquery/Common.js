
function CharLimitCounter(elementChecking,totalLimit,counter)
{
    var value=$(elementChecking).val();
    var len=value.length;
    if(len>=totalLimit)
    {
        $(elementChecking).val(value.substring(0,totalLimit-1));
        $(counter).html('Đã đủ <b style="color: green">'+totalLimit+'</b> ký tự');
    }
    else if(len==0)
    {
        $(counter).html('Tối đa <b style="color: green">'+totalLimit+'</b> ký tự');
       
    }
    else
    {
        $(counter).html('Còn lại <b style="color: green">'+(totalLimit-len)+'</b> ký tự');
    }
}

function WordLimitCounter(elementChecking,totalLimit,counter)
{
    var content=$(elementChecking).val().trim();
    
    if(content != '')
    {
        //var wordCount=content.split(/\b[\s,\.-:;_]*/).length;
        var wordCount=content.split(/[_,:;&\.\-\n\x20\x2f\x5c\x7c]/g).length;
        
        if(wordCount>=totalLimit)
        {
            var addMoreWords=wordCount-totalLimit;
            //$(elementChecking).val(value.substring(0,totalLimit-1));
            if(addMoreWords <=0)
            {
                $('#chkItemAddLength').attr('checked', false);
                $(counter).html('Đã đủ <b style="color: green">'+totalLimit+'</b> chữ cho Rao vặt FREE (trả thêm <b>' + (chargePerWordAddMore*100) + ' xu (cents)</b> cho mỗi 1 chữ tiếp theo)');
            }
            else
            {
                $('#chkItemAddLength').attr('checked', true);
                $(counter).html('Ngoài <b style="color: green">'+totalLimit+'</b> chữ Rao vặt được đăng FREE, bạn phải trả thêm <b>$' + parseFloat(chargePerWordAddMore*100*addMoreWords)/100 + '</b> cho <b>'+ addMoreWords +'</b> chữ tiếp theo');
            }
        }
        else if(wordCount<=0)
        {
            $('#chkItemAddLength').attr('checked', false);
            $(counter).html('Tối đa <b style="color: green">'+totalLimit+'</b> chữ cho Rao vặt FREE (trả thêm <b>' + (chargePerWordAddMore*100) + ' xu (cents)</b> cho mỗi 1 chữ tiếp theo)');
        }
        else
        {
            $('#chkItemAddLength').attr('checked', false);
            $(counter).html('Còn lại <b style="color: green">'+(totalLimit-wordCount)+'</b> chữ cho Rao vặt FREE (trả thêm <b>' + (chargePerWordAddMore*100) + ' xu (cents)</b> cho mỗi 1 chữ tiếp theo)');
        }
    }
    else
    {
        $(counter).html('Tối đa <b style="color: green">'+totalLimit+'</b> chữ cho Rao vặt FREE (trả thêm <b>' + (chargePerWordAddMore*100) + ' xu (cents)</b> cho mỗi 1 chữ tiếp theo)');
    }
}

var defaultPhone = "";


/* ************************************** */
function load(elem) {
    /*
	
    */
    //    $(elem).val(defaultPhone);
    //    $(elem).focus();

    processPhone(elem);
}


// -------------------------------------------------------------------------   
function clickPhone(elem) {
    /*
	
    Called when the phone box is clicked
	
    */

    if ($(elem).val() == defaultPhone) {
        $(elem).val('');
    }

    processPhone(elem);
}


// -------------------------------------------------------------------------   
function processPhone(elem) {

    var phone = $(elem).val();
    $(elem).val(formatLocal('US', phone));

}