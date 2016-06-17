$(document).ready(function(){
    
    var schoolListHeight = $('.school-list').height();
    var schoolList = $('.school-list');
    var elementHeight = $("li").height();
    
    setTimeout(initClickMore,500);

    
});

// deze wordt nu uitgeveord na 500ms dat moet op een event uit angular
    function initClickMore()
    {
        
        var button = $('.more-button');
        
        if ($('.school-image').length >= pagina_kolommen*2){
            $(button).click(clickMore);
        }else{
           $(button).hide();
        }
        
        console.log("image length:" + $('.school-image').length);
    }
    var nr_of_times_user_clicked_click_more=0;
    function clickMore()
    {
        function maxHeight(){
            
            
               
        }
        
        nr_of_times_user_clicked_click_more++;
        var new_height=682*(nr_of_times_user_clicked_click_more+1);
        $('.school-list').height(new_height+"px");
        
    }