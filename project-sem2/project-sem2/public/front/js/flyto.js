let itemList=$("#itemList").offset().left;
let cartPos=$("#cart").offset().left;
var flyTo;
// console.log(cartPos)

$(".btn-fly").click(function(){
    let item=$(this).closest(".item-fly");
    let img=item.find("img").attr("src");
    let itemX=item.offset().left-itemList;
    let itemY=item.offset().top;
    TweenMax.killTweensOf('#show');

    $("#show")
        .css({
            left: itemX+250,
            top: itemY,
            width: 200,
            opacity: 1
        })
        .find("img").attr("src", img)

    TweenMax.to("#show", 1.5, {left:cartPos-itemList, top: 10, width: 20});
    TweenMax.to("#show", .3, {
        css:{
            opacity: 0
        }, delay:0.5})

});
