//VALIDATE REGISTER FORM

$(document).ready(function(){

    // var DOMAIN = "http://localhost/ims/public/";

    $("#register_form").on("submit",function(){
        var status = false;
        var name = $("#username");
        var email = $("#email");
        var pass1 = $("#password1");
        var pass2 = $("#password2");
        var type = $("#usertype");
        var note = $("#notes");
        var n_patt = new RegExp(/^[A-Za-z ,]+$/);
        //winstone.makwesheni@gmail.com
        var e_patt = new RegExp(/^[a-z0-9_-]+(\.[a-z0-9_-]+)*@[a-z0-9_-]+(\.[a-z0-9_-]+)*(\.[a-z]{2,4})$/);

        //VALIDATE NAME
        if(name.val() == "" || name.val().length < 6){
            name.addClass("border-danger");
            $("#u_error").html("<span class='text-danger'>Please Enter Name With More than 6 Characters</span>");
            status = false;
        }else{
            name.removeClass("border-danger");
            $("#u_error").html("");
            status = true;
        }

        //VALIDATE EMAIL
        if(!e_patt.test(email.val())){
            email.addClass("border-danger");
            $("#e_error").html("<span class='text-danger'>Please Enter Valid Email</span>");
            status = false;
        }else{
            email.removeClass("border-danger");
            $("#e_error").html("");
            status = true;
        }

        //VALIDATE PASSWORD1
        if(pass1.val() == "" || pass1.val().length < 6){
            pass1.addClass("border-danger");
            $("#p1_error").html("<span class='text-danger'>Please Enter More Than 6 characters</span>");
            status = false;
        }else{
            pass1.removeClass("border-danger");
            $("#p1_error").html("");
            status = true;
        }

        //VALIDATE PASSWORD2
        if(pass2.val() == "" || pass2.val().length < 6){
            pass2.addClass("border-danger");
            $("#p2_error").html("<span class='text-danger'>Please Enter More Than 6 characters</span>");
            status = false;
        }else{
            pass2.removeClass("border-danger");
            $("#p2_error").html("");
            status = true;
        }

        //VALIDATE USER TYPE
        if(type.val() == ""){
            type.addClass("border-danger");
            $("#t_error").html("<span class='text-danger'>Please Choose User Type</span>");
            status = false;
        }else{
            type.removeClass("border-danger");
            $("#t_error").html("");
            status = true;
        }

        //VALIDATE PASSWORD1 == PASSWORD2
        if(pass1.val() == pass2.val() && status == true){

            $(".overlay").show();
            
            // SEND DATA TO PROCESS PAGE
            $.ajax(
                {
                url: 'http://localhost/ims/public/includes/process.php',
                method: 'POST',
                
                // serialize to put in array
                data: $("#register_form").serialize(),                            
                success:function(data){
                    if($.trim(data) == 'EMAIL_EXISTS'){
                        $(".overlay").hide();
                        alert('email used');
                    }else if($.trim(data)  == 'SOME_ERROR'){
                        $(".overlay").hide();
                        alert('SOME ERROR');
                    }else{
                        $(".overlay").hide();
                        window.location.href = encodeURI('http://localhost/ims/public/index.php?msg=Your are REGISTERE YOU CAN LOGIN');
                    }
                    // console.log(data);
                    }
                }
            )

        }else{
            pass2.addClass("border-danger");
            $("#p2_error").html("<span class='text-danger'>Password not MAtch</span>");
            status = false;
        }
    })



    //LOGIN FORM VALIDATE
    $("#login_form").on("submit",function(){

        var status = false;
        var email = $("#login_mail");
        var pass = $("#login_pass");
        var n_patt = new RegExp(/^[A-Za-z ,]+$/);
        //winstone.makwesheni@gmail.com
        var e_patt = new RegExp(/^[a-z0-9_-]+(\.[a-z0-9_-]+)*@[a-z0-9_-]+(\.[a-z0-9_-]+)*(\.[a-z]{2,4})$/);

        //VALIDATE EMAIL
        if(!e_patt.test(email.val()) || email.val() == ""){
            email.addClass("border-danger");
            $("#e_error").html("<span class='text-danger'>Please Enter Valid Email</span>");
            status = false;
        }else{
            email.removeClass("border-danger");
            $("#e_error").html("");
            status = true;
        }

        //VALIDATE PASSWORD1
        if(pass.val() == "" || pass.val().length < 6){
            pass.addClass("border-danger");
            $("#p_error").html("<span class='text-danger'>Please Enter More Than 6 characters</span>");
            status = false;
        }else{
            pass.removeClass("border-danger");
            $("#p_error").html("");
            status = true;
        }

        if(status){

            //TEST OVERLAY CLASS FROM CSS LOADER

             $(".overlay").show();


            // SEND USER TO PROCESS PAGE
            $.ajax(
                {
                url: 'http://localhost/ims/public/includes/process.php',
                method: 'POST',
                
                // serialize to put in array
                data: $("#login_form").serialize(),                            
                success:function(data){
                    if($.trim(data) == 'NOT_REGISTERED'){
                        $(".overlay").hide();
                        email.addClass("border-danger");
                        $("#e_error").html("<span class='text-danger'>Email Not Registred</span>");
                    }else if($.trim(data)  == 'PASSWORD_NOT_MATCH'){
                        $(".overlay").hide();
                        pass.addClass("border-danger");
                        $("#p_error").html("<span class='text-danger'>Password Not Correct</span>");
                    }else{
                        $(".overlay").hide();
                        window.location.href = encodeURI('http://localhost/ims/public/dashboard.php');
                    }

                    }
                }
            )
        }


    })



    // CATEGORY STARTS HERE  

    //FETCH/VIEW  CATEGORY
    fetchCategory();
    function fetchCategory(){
        $.ajax(
            {
            url: 'http://localhost/ims/public/includes/process.php',
            method: 'POST',
            data: {getCategory:1},                            
            success:function(data){
                // ADD ROOT CATEGORY AS PARENT DEFAULT 
                var root = "<option value='0'>Root</option>";

                // OUTPUT TO CATEGORY FORM 
                $("#parent_cat").html(root+data);     
                
                //OUTPUT TO PRODUCT FORM
                var choose =  "<option value='0'>Choose Category</option>";
                $("#select_cat").html(choose+data);    

                }
            }
        )
    }


    //ADD CATEGORY BY CLICKING SUBMIT
    $("#category_form").on("submit",function(){
        if($("#category_name").val() == ""){
            $("#category_name").addClass("border-danger");
            $("#cat_error").html("<span class='text-danger'>Please Enter Category</span>");
        }else{
            $.ajax(
                {
                url: 'http://localhost/ims/public/includes/process.php',
                method: 'POST',
                data: $("#category_form").serialize(),                            
                success:function(data){
                if($.trim(data) == "CATEGORY_ADDED"){
                    $("#category_name").removeClass("border-danger");
                    $("#cat_error").html("<span class='text-success'>New Category Added</span>");
                    $("#category_name").val("");
                    fetchCategory();
                    }else{
                        alert(data);
                    }
                    }
                }
            )   
        }

    })


    // CATEGORY ENDS HERE  




     // BRAND STARTS HERE  

    // FETCH/VIEW  BRAND
    fetchBrand();
    function fetchBrand(){
        $.ajax(
            {
            url: 'http://localhost/ims/public/includes/process.php',
            method: 'POST',
            data: {getBrand:1},                            
            success:function(data){

                // ADD BRAND TO PRODUCT
                var choose = "<option value='0'>Choose Brand</option>";
                $("#select_brand").html(choose+data);
                }
            }
        )
    }


    //ADD BRAND BY CLICKING SUBMIT
    $("#brand_form").on("submit",function(){
        if($("#brand_name").val() == ""){
            $("#brand_name").addClass("border-danger");
            $("#brand_error").html("<span class='text-danger'>Please Enter Brand</span>");
        }else{
            $.ajax(
                {
                url: 'http://localhost/ims/public/includes/process.php',
                method: 'POST',
                data: $("#brand_form").serialize(),                            
                success:function(data){
                if($.trim(data) == "BRAND_ADDED"){
                    $("#brand_name").removeClass("border-danger");
                    $("#brand_error").html("<span class='text-success'>New Brand Added</span>");
                    $("#brand_name").val("");
                    fetchBrand();
                    }else{
                        alert(data);
                    }
                    }
                }
            )   
        }

    })


    // BRAND ENDS HERE  




     //PRODUCTS STARTS HERE  

    // FETCH/VIEW  PRODUCT
    // fetchBrand();
    // function fetchBrand(){
    //     $.ajax(
    //         {
    //         url: 'http://localhost/ims/public/includes/process.php',
    //         method: 'POST',
    //         data: {getBrand:1},                            
    //         success:function(data){

    //             // ADD BRAND TO PRODUCT
    //             var choose = "<option value='0'>Choose Brand</option>";
    //             $("#select_brand").html(choose+data);
    //             }
    //         }
    //     )
    // }


    //ADD PRODUCT BY CLICKING SUBMIT
    $("#product_form ").on("submit",function(){
        if($("#product_name").val() == ""){
            $("#product_name").addClass("border-danger");
            $("#product_error").html("<span class='text-danger'>Please Enter Product</span>");
        }else{
            $.ajax(
                {
                url: 'http://localhost/ims/public/includes/process.php',
                method: 'POST',
                data: $("#product_form").serialize(),                            
                success:function(data){
                if($.trim(data) == "PRODUCT_ADDED"){
                    alert(data);
                    $("#product_name").removeClass("border-danger");
                    $("#product_error").html("<span class='text-success'>New Product Added</span>");
                    $("#product_name").val("");
                    $("#product_price").val("");
                    $("#product_qty").val("");
                    }else{
                        // alert(data);
                    }
                    }
                }
            )   
        }

    })


    // PRODUCTS ENDS HERE  
})
