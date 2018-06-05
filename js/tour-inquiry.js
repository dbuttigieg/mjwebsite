// Contact Form Scripts

$(function() {

    $("#enquireTour input,#enquireTour textarea").jqBootstrapValidation({
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
            var loc = $("input#location").val();
            var total_adults = $("input#numadults").val();
            var total_child = $("input#numchild").val();
            var date = $("input#datetime").val();
            var pu_loc = $("input#pickup").val();
            var do_loc = $("input#dropoff").val();
            var comments = $("textarea#comments").val();

            $.ajax({
                url: "././mail/car_enquiry.php",
                type: "POST",
                data: {
                    name: name,
                    surname: surname,
                    email: email,
                    phone: phone,
                    loc: loc,
                    total_adults: total_adults,
                    total_child: total_child,
                    date: date,
                    age: age,
                    pu_loc: pu_loc,
                    do_loc: do_loc,
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