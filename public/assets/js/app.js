$(document).ready(function (e) {
    
    $("body").on('click', '.js-page-link',function(event){                
        var u = $(this).attr('href');
        var m = 'GET';
        
        jQuery.ajax({
            url: u,
            type: m,            
            success: function(html) {                
                $('.page-main-content').replaceWith(
                    $(html).find('.page-main-content')
                );               
            },
            error: function(xhr, err) {
                window.location = u;
            }
        });
        return false;
     });

     $("body").on('change', '.js-pagination-limit',function(event){                
        var u = $(this).closest('form').attr('action');
        var m = 'GET';
        let formData = $(this).closest('form').serialize();
        
        jQuery.ajax({
            url: u,
            type: m,
            data: formData,            
            success: function(html) {                
                $('.page-main-content').replaceWith(
                    $(html).find('.page-main-content')
                );               
            },
            error: function(xhr, err) {
                $(this).closest('form').submit();
            }
        });
        return false;
     });
     
     $("body").on('change', '.js-sortby',function(event){      
        var u = $(this).closest('form').attr('action');
        var m = 'GET';
        let formData = $(this).closest('form').serialize();
        
        jQuery.ajax({
            url: u,
            type: m,
            data: formData,            
            success: function(html) {                
                $('.page-main-content').replaceWith(
                    $(html).find('.page-main-content')
                );               
            },
            error: function(xhr, err) {
                $(this).closest('form').submit();
            }
        });
        return false;
     });
     
     $("body").on('keyup','.js-search-input', function (e) {          
        if (e.key === 'Enter' || e.keyCode === 13) {
            var u = $(this).closest('form').attr('action');
            var m = 'GET';
            let formData = $(this).closest('form').serialize();
            
            jQuery.ajax({
                url: u,
                type: m,
                data: formData,            
                success: function(html) {                
                    $('.page-main-content').replaceWith(
                        $(html).find('.page-main-content')
                    );               
                },
                error: function(xhr, err) {
                    $(this).closest('form').submit();
                }
            });
            return false;
        }
        e.preventDefault();
    });
    $("#js-filter-form").submit(function(e){
        e.preventDefault();
    });
    var t = "on";
    $("body").on('click', '.js-filter',function(event){ 
        
        if (t === "off") {
            // $(dd).children('span').text("Show Filter");
            $(event).children('span').text("Advance Search");
            t = "on";
          }
          else {
            // $(dd).children('span').text("Hide Filter");
            $(event).children('span').text("Advance Search");
            t = "off";
          }
          $(event).toggleClass('fltIc_rotate');
          $('#filter_box').toggleClass('fl_filter_close');
    });  
    
    
    
});