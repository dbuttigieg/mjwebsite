// Contact Form Scripts

$(function() {

    $("#bookCar input,#bookCar textarea").jqBootstrapValidation({
        preventSubmit: true,
        submitError: function($form, event, errors) {
            // additional error messages or events
        },
        submitSuccess: function($form, event) {
            event.preventDefault(); // prevent default submit behaviour
            // get values from FORM
            var name = $("input#name").val();
            var surname = $("input#surname").val();
            var email = $("input#email").val();
            var phone = $("input#phone").val();
            var group = $("input#carGroup").val();
            var age = $("input#driverAge").val();
            var car_pu_time = $("input#carPUdatetime").val();
            var car_pu_loc = $("input#carPickupLoc").val();
            var car_do_time = $("input#carRetdatetime").val();
            var car_do_loc = $("input#cardropoffloc").val();
            var ins = $("input#insurance").val();
            var addDriver = $("input#additionalDriver").val();
            var additionalDriverAge = $("input#addDriveAge").val();
            var babyseat = $("input#babySeat").val();
            var comments = $("textarea#comments").val();

            $.ajax({
                url: "././mail/transfer_enquiry.php",
                type: "POST",
                data: {
                    name: name,
                    surname: surname,
                    email: email,
                    phone: phone,
                    group: group,
                    age: age,
                    car_pu_time: car_pu_time,
                    car_pu_loc: car_pu_loc,
                    car_do_time: car_do_time,
                    car_do_loc: car_do_loc,
                    ins: ins,
                    additionalDriver: addDriver,
                    additionalDriverAge: additionalDriverAge,
                    babyseat: babyseat,
                    addcomments: comments
                },
                cache: false,
                success: function() {
                    // Success message
                    $('#success').html("<div class='alert alert-success'>");
                    $('#success > .alert-success').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
                        .append("</button>");
                    $('#success > .alert-success')
                        .append("<strong>Thank you for your enquiry. We hope you to see you soon. </strong>");
                    $('#success > .alert-success')
                        .append('</div>');

                    //clear all fields
                    $('#contactForm').trigger("reset");
                },
                error: function() {
                    // Fail message
                    $('#success').html("<div class='alert alert-danger'>");
                    $('#success > .alert-danger').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
                        .append("</button>");
                    $('#success > .alert-danger').append($("<strong>").text("Sorry " + name + ", it seems that my mail server is not responding. Please try again later!"));
                    $('#success > .alert-danger').append('</div>');
                    //clear all fields
                    $('#contactForm').trigger("reset");
                },
            });
        },
        filter: function() {
            return $(this).is(":visible");
        },
    });

    $("a[data-toggle=\"tab\"]").click(function(e) {
        e.preventDefault();
        $(this).tab("show");
    });
});


/*When clicking on Full hide fail/success boxes */
$('#name').focus(function() {
    $('#success').html('');
});
