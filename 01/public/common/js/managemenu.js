/**
 * Created by A.J on 2016/10/8.
 */
$(document).ready(function(){
    $('table a.twitter').confirm({
        title: $('#quedingshanchu').text(),
        content: $('#bukehuifu').text(),
        confirmButton: $('#jixu').text(),
        cancelButton: $('#quxiao').text()
    });
});