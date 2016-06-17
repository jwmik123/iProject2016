$( document ).ready(fix_layout);


$(window).resize(function () {
   fix_layout();
});

var pagina_kolommen=5;
function fix_layout()
{
    

    $(".school-list").css("position","relative");
    var width= $(".school-list").width();

    
    var marge=5;
    var kolommen=Math.floor(width/(300+marge));

    pagina_kolommen=kolommen;
    console.log("aantal kolommen:" + kolommen);
    
    var totale_breedte=kolommen*300+(kolommen-1)*marge;

    
    var marge_links=(width-totale_breedte)/2;
    
    $(".center-li").css("margin-left",marge_links+"px");
    $(".center-li").css("width",totale_breedte+"px");
        
    // pos-abs heeft breedte 300px
    //$( ".center-li" ).each(function( index ) 
     //   {
      //      console.log( index + ": " );
    //    });
}
