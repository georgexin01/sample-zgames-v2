// default main js
$(function () {
    if($('.lazyload').length > 0){
        $('.lazyload').each(function () {
            if (!$(this).attr('src')) {
                $(this).attr(
                'src',
                'data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw=='
                );
            }
        });
    }
});

//document ready
$(document).ready(function ($) {
  
    
      
  
});
