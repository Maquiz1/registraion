$(document).ready(function () {

    $("#register_btn").click(function (e) {
        if ($("#register_form")[0].checkValidity()) {
            //PREVENT PAGE TO REFRESH
            e.preventDefault();
            $("#register_btn").val('Please wait...');
            var status = false;
            var first_name = $("#first_name");
            var middle_name = $("#middle_name");
            var last_name = $("#last_name");
            var date = $("#date");
            var chair_first_name = $("#chair_first_name");
            var chair_last_name = $("#chair_last_name");
            var meeting = $("#meeting");
            var malaria = $("#malaria");
            var phone = $("#phone");
            var mjazaji1 = $("#mjazaji1");
            var mjazaji2 = $("#mjazaji2");
            var mjazaji2 = $("#mjazaji2");
            var mjazaji_date = $("#mjazaji_date");
            var mkaguzi1 = $("#mkaguzi1");
            var mkaguzi2 = $("#mkaguzi2");
            var mkaguzi2 = $("#mkaguzi3");
            var mkaguzi_date = $("#mkaguzi_date");

            if (phone.val().length != 10) {
                phone.addClass("border-danger");
                $("#p_error").html("<span class='text-danger'>Please Enter Correct Phones</span>");
                status = false;
            } else {
                phone.removeClass("border-danger");
                $("#p_error").html("");
                status = true;
            }



            $.ajax(
                {
                    url: 'process.php',
                    method: 'POST',
                    data: $("#register_form").serialize() + '&action=register_user',   // serialize to put in array
                    success: function (data) {

                        if (data = 'CLIENT ADDED SUCCSEFULLY') {
                            // phone.addClass("border-danger");
                            alert("CLIENT ADDED SUCCSEFULLY")
                            window.location = 'index.php';
                            // $("#msg").html("<span class='text-success'>CLIENT ADDED SUCCSEFULLY</span>");
                            status = false;
                        } else {
                            // $("#msg").html(data);
                            // phone.removeClass("border-danger");
                            window.location = 'register.php';
                            alert("ERROR ADDING CLIENT")
                            // $("#msg").html("<span class='text-danger'>Error Adding Client!</span>");
                            status = true;
                        }

                        $("#register_btn").val('Register');

                        // $("#first_name").html(data);
                        // $("#middle_name").html(data);
                        // $("#last_name").html(data);
                        // $("#cahair_first_name").html(data);
                        // $("#chair_last_name").html(data);
                        // $("#meeting_name").html(data);
                        // $("#malaria_name").html(data);
                        // $("#phone_name").html(data);
                        // $("#mjazaji_name").html(data);
                        // $("#mjazaji_date").html(data);
                        // $("#mkaguzi").html(data);
                        // $("#mkaguzi_date").html(data);
                        // window.location.href = encodeURI('register.php?msg=REGISTERED IN DATABASE');

                        // console.log(data);
                    }
                }
            );
        }
    })
});




