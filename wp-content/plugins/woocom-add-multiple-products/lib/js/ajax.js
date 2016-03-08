jQuery(".wamp_add_order_item").click(function(){
    // ids=["16","16","16","16","16","16","16","16","16","15"];
    
    // var text = document.getElementById("value1Test").value;
    console.log(document.getElementById("Undyne").value);
    ids=[];
    var numberTest = document.getElementById("Undyne").value;
    for (var i = 0; i < numberTest; i++) {
        ids.push("16");
    };
    // ids=["16"];
    
    jQuery.ajax({
        url: WpAjax.ajaxurl,
        type:'POST',
        data:'action=wamp_add_to_cart&ids='+ids,
        beforeSend: function() {
            jQuery('#wamp_add_items_button').attr('disabled', true);
            jQuery('#wamp_add_items_button').after('<img class="wamp_loading_img" style="padding-left: 10px;" src="'+WPURLS.siteurl+'/img/loading.gif"><b class="wamp_loading_text">Please Wait...</b>');
        },
        success:function(results){
            location.reload();
        }
    });
});