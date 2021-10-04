//MANAGE  HERE

$(document).ready(function(){


    // CATEGORY STARTS HERE  

    //MANAGE CATEGORY
    manageCategory(2);
    function manageCategory(pn){
        $.ajax(
            {
                url : 'http://localhost/ims/public/includes/process.php',
                method : 'POST',
                data : {manageCategory:1,pageno:pn},                            
                success:function(data){
                        $("#get_category").html(data);
                    }

            }
        )
    }


    //PAGINATION ATTRIBUTE 
    $("body").on("click",".page-link",function(){
        var pn = $(this).attr("pn");
        manageCategory(pn);
    })
});


    // CATEGORY ENDS HERE  

