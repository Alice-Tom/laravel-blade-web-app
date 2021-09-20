$(document).ready(function() {
    $(".blog-item-to-click").on('click',function(event){
        event.preventDefault();
        console.log("fasd");
        $(".button-read-more").click();
    });

})
