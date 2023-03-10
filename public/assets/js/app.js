$(document).ready(function (e) {
    
    $("body").on('click', '.js-page-link',function(event){
        $("body").removeClass('overflow-hidden').addClass('overflow-hidden');
        let loading = '<div class="loader"><img src="assets/img/loading-1.gif" alt=""></div>';
        $("body").append(loading);                
        var u = $(this).attr('href');
        var m = 'GET';
        
        jQuery.ajax({
            url: u,
            type: m,            
            success: function(html) {                
                $('.page-main-content').replaceWith(
                    $(html).find('.page-main-content')
                );
                $("body").removeClass('overflow-hidden');
                $(".loader").remove();
            },
            error: function(xhr, err) {
                window.location = u;
            }
        });
        return false;
     });
     
     $("body").on('change', '.js-pagination-limit',function(event){     
        
        $("body").removeClass('overflow-hidden').addClass('overflow-hidden');
        let loading = '<div class="loader"><img src="assets/img/loading-1.gif" alt=""></div>';
        $("body").append(loading);  

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
                $("body").removeClass('overflow-hidden');
                $(".loader").remove();             
            },
            error: function(xhr, err) {
                $(this).closest('form').submit();
            }
        });
        return false;
     });
     
     $("body").on('change', '.js-sortby',function(event){   
        
        $("body").removeClass('overflow-hidden').addClass('overflow-hidden');
        let loading = '<div class="loader"><img src="assets/img/loading-1.gif" alt=""></div>';
        $("body").append(loading);  

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
                $("body").removeClass('overflow-hidden');
                $(".loader").remove();              
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
            
            $("body").removeClass('overflow-hidden').addClass('overflow-hidden');
            let loading = '<div class="loader"><img src="assets/img/loading-1.gif" alt=""></div>';
            $("body").append(loading);  

            jQuery.ajax({
                url: u,
                type: m,
                data: formData,            
                success: function(html) {                
                    $('.page-main-content').replaceWith(
                        $(html).find('.page-main-content')
                    );  
                    $("body").removeClass('overflow-hidden');
                    $(".loader").remove();             
                },
                error: function(xhr, err) {
                    $(this).closest('form').submit();
                }
            });
            return false;
        }
        e.preventDefault();
    });
    
    $("body").on('change', '.js-category',function(event){   
        
        $("body").removeClass('overflow-hidden').addClass('overflow-hidden');
        let loading = '<div class="loader"><img src="assets/img/loading-1.gif" alt=""></div>';
        $("body").append(loading);  

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
                $("body").removeClass('overflow-hidden');
                $(".loader").remove();              
            },
            error: function(xhr, err) {
                $(this).closest('form').submit();
            }
        });
        return false;
     });

    $("body").on('submit','#js-filter-form', function (e) {  
        e.preventDefault();  
    });
    
    var t = "on";
    $("body").on('click', '.js-filter',function(event){ 
        
        if (t === "off") {            
            $(event).children('span').text("Advance Search");
            t = "on";
          }
          else {           
            $(event).children('span').text("Advance Search");
            t = "off";
          }
          $(event).toggleClass('fltIc_rotate');
          $('#filter_box').toggleClass('fl_filter_close');
    });  
    $("body").on('click', '.js-filter-types',function(event){                 
          $(event).toggleClass('fltIc_rotate');
          $('#filter_box_types').toggleClass('fl_filter_close');
    }); 
    
    // $("body").on('click', '.js-edit-action',function(event){                
    //     var u = $(this).attr('href');
    //     var m = 'GET';
        
    //     jQuery.ajax({
    //         url: u,
    //         type: m,            
    //         success: function(html) {                
    //             $('.page-main-content').replaceWith(
    //                 $(html).find('.page-main-content')
    //             );               
    //         },
    //         error: function(xhr, err) {
    //             window.location = u;
    //         }
    //     });
    //     return false;
    //  });
     
    $("body").on('click', '.js-change-tab',function(event){   
        
        $("body").removeClass('overflow-hidden').addClass('overflow-hidden');
        let loading = '<div class="loader"><img src="assets/img/loading-1.gif" alt=""></div>';
        $("body").append(loading);  

        var u = $(this).attr('data-url');
        var m = 'GET';
        
        jQuery.ajax({
            url: u,
            type: m,            
            success: function(html) {                
                $('.page-main-content').replaceWith(
                    $(html).find('.page-main-content')
                ); 
                $("body").removeClass('overflow-hidden');
                $(".loader").remove();              
            },
            error: function(xhr, err) {
                window.location = u;
            }
        });
        return false;
     });
});