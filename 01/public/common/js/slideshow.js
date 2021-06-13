/**
 * Created by A.J on 2016/10/11.
 */
$(document).ready(function(){
    $(".yincang").click(function(){
        var obj = $(this);
        obj.children("span").removeClass("hidden");
        $.post("yincang_qiyong", { id: obj.parent().siblings(":eq(1)").text(), zt: obj.siblings(":first").val(), verification: $("#verification").text()},
            function(data){
                obj.siblings(":first").val(0);
                obj.parent().prev().html('<h5 class="text-muted">'+$('#buxianshi').text()+'</h5>');
                obj.children("span").addClass("hidden");
                obj.addClass("hidden").next().removeClass("hidden");
            });
    });
    $(".qiyong").click(function(){
        var obj = $(this);
        obj.children("span").removeClass("hidden");
        $.post("yincang_qiyong", { id: obj.parent().siblings(":eq(1)").text(), zt: obj.siblings(":first").val(), verification: $("#verification").text()},
            function(data){
                obj.siblings(":first").val(1);
                obj.parent().prev().html('<h5 class="text-success"><span class="glyphicon glyphicon-ok"></span> '+$('#xianshi').text()+'</h5>');
                obj.children("span").addClass("hidden");
                obj.addClass("hidden").prev().removeClass("hidden");
            });
    });
    $('table a.twitter').confirm({
        title: $('#quedingshanchu').text(),
        content: $('#bukehuifu').text(),
        confirmButton: $('#jixu').text(),
        cancelButton: $('#quxiao').text(),
        confirm: function(){
            var obj = this.$target;
            $.post("removeSlide", { id: this.$target.parent().parent().children(":eq(1)").text(), verification: $("#verification").text()},
                function(data){
                    obj.parent().parent().remove();
                });
        }
    });
    $("#slideGroup").change(function(){
        $("#slideGrouphide").val($(this).val());
        $("#slideGroupForm").submit();
    });
});