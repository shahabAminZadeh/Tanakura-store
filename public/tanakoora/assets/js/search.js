const site_url="http://127.0.0.1:8000/";
$("body").on("keyup","#search",function (){
    let text = $("#search").val();

    if (text.length>0)
    {
        $.ajax({
             data:{search:text},
            url:site_url + "search/search_Products",
            method:'post',
            beforeSend: function(request){
                 return request.setRequestHeader('X-CSRF-TOKEN',("meta[name='csrf-token']"))
            },
            success:function (result){
                 $("#searchProducts").html(result);
             }
        });

    }
    if (text.length<1) $("#searchProducts").html("")
});
