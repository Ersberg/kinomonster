
$( document ).ready(function(){

    $('#content').css("display", "none");
    $('#users').css("display", "none");

    $('#user').on("click", function(){  
        $('#users').css("display", "block"); 
        $('#content').css("display", "none");
    });

    $('#films').on("click", function(){  
    $('#content').css("display", "block"); 
    $('#users').css("display", "none"); 
    });
});


   























