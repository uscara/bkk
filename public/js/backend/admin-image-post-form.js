$(document).ready(function(){$(".fm-open").fancybox({width:900,height:600,type:"iframe",autoSize:!1,afterClose:function(){url=$(':text[name="image_url"]').val(),""!=url&&$("#post-image").attr("src",url)}})});