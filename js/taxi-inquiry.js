// Contact Form Scripts

$(function() {

    $("#bookTransfer input,#bookTransfer textarea, #bookTransfer select").jqBootstrapValidation({
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
            var oneWayTransferBtn = $("input#onewaytrf:checked").val();
            var returnTransferBtn = $("input#returntrf:checked").val();
            var trf1_transferType = $("select#transferType").val();
            var trf1_numAdults = $("input#numadults").val();
            var trf1_numChildren = $("input#numchild").val();
            var trf1_datetime = $("input#datetime").val();
            var trf1_pickup = $("input#pickup").val();
            var trf1_dropoff = $("input#dropoff").val();
            var trf2_transferType = $("select#transferTypeRet").val();
            var trf2_numAdults = $("input#numadultsRet").val();
            var trf2_numChildren = $("input#numchildRet").val();
            var trf2_datetime = $("input#datetimeret").val();
            var trf2_pickup = $("input#pickupret").val();
            var trf2_dropoff = $("input#dropoffret").val();
            var comments = $("textarea#comments").val();

            $.ajax({
                url: "./mail/transfer_enquiry.php",
                type: "POST",
                data: {
                    name: name,
                    surname: surname,
                    email: email,
                    phone: phone,
                    oneWayTransfer: oneWayTransferBtn,
                    returnTransfer: returnTransferBtn,
                    trf1_transferType: trf1_transferType,
                    trf1_numAdults: trf1_numAdults,
                    trf1_numChildren: trf1_numChildren,
                    trf1_datetime: trf1_datetime,
                    trf1_pickup: trf1_pickup,
                    trf1_dropoff: trf1_dropoff,
                    trf2_transferType: trf2_transferType,
                    trf2_numAdults: trf2_numAdults,
                    trf2_numChildren: trf2_numChildren,
                    trf2_datetime: trf2_datetime,
                    trf2_pickup: trf2_pickup,
                    trf2_dropoff: trf2_dropoff,
                    comments: comments
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
                    $('#bookTransfer').trigger("reset");
                },
                error: function() {
                    // Fail message
                    $('#success').html("<div class='alert alert-danger'>");
                    $('#success > .alert-danger').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
                        .append("</button>");
                    $('#success > .alert-danger').append($("<strong>").text("Sorry, it seems that the mail server is not responding. Please try again later!"));
                    $('#success > .alert-danger').append('</div>');
                    //clear all fields
                    $('#bookTransfer').trigger("reset");
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
