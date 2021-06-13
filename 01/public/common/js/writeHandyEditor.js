/**
 * Created by A.J on 2018/7/11.
 */
$(document).ready(function(){
    var UA = navigator.userAgent.toLowerCase();
    var ver = 100,autoHt = true;
    if(UA.indexOf("chrome")>0){
        ver = parseInt(UA.match(/chrome\/([\d]+)/)[1]);
    }
    if(ver < 63){
        autoHt = false;
    }
    var he = HE.getEditor('zhengwen',{
        autoHeight : autoHt,
        autoFloat : true,
        topOffset : 51,
        uploadPhoto : true,
        uploadPhotoHandler : 'uploadWrite',
        uploadPhotoSize : 2000,
        uploadPhotoType : 'gif,png,jpg,jpeg',
        uploadPhotoSizeError : $("#sizeError").text(),
        uploadPhotoTypeError : $("#typeError").text(),
        skin : 'catfish'
    });
    //保存
    $("#baocun").click(function(){
        if($.catfish()){
            $("#zhengwen").text(he.getHtml());
            if($("#zhaiyao").val() == ''){
                if(he.getText().length > 500){
                    $("#zhaiyao").val(he.getText().replace(/\n/g, " ").substr(0,500)+'...');
                }
                else{
                    $("#zhaiyao").val(he.getText().replace(/\n/g, " "));
                }
            }
        }
    });
});