$(function () {
    var foglalas="";
    console.log("hel");
    $('td').on("click",function() {
        $('td').removeClass('blue');
        $(this).addClass('blue');
        foglalas=$(this).html();
    });

    $('#foglal').on("click",function() {
        window.location = '/order/'+foglalas;
    });
});
