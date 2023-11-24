$(function(){
    // clicking button with class "category-button"
    $(".category-button").click(function(){
        // get the data-filter value of the button

        $('.btn').click(function(){
            $('.btn').removeClass('active').addClass('inactive');
            $(this).removeClass('inactive').addClass('active');
        });


        var filterValue = $(this).attr('data-filter');

        // show all items
        if(filterValue == "all"){$(".all").slideDown("slow").addClass("active");}

        else{
            // hide all items
            $(".all").not('.'+filterValue).slideUp("slow");
            // and then, show only items with selected data-filter value
            $(".all").filter('.'+filterValue).slideDown("slow");
        }
    });
});