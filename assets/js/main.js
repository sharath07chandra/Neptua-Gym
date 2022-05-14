
$(document).ready(function(){
    
    // PARALLAX EFFECT
     
    // Cache the Window object
    var $window = $(window);
    
    // Parallax Backgrounds
    // Tutorial: http://code.tutsplus.com/tutorials/a-simple-parallax-scrolling-technique--net-27641
    
    //Select section with [data-type="background"]
    
    $('section[data-type="background"]').each(function(){
        var $bgobj = $(this); // assigning the object
        
        $(window).scroll(function() {
        
            // Scroll the background at var speed
            // the yPos is a negative value because we're scrolling it UP!                              
            var yPos = -($window.scrollTop() / $bgobj.data('speed'));
            
            // Put together our final background position
            var coords = '50% '+ yPos + 'px';
            
            // Move the background
            $bgobj.css({ backgroundPosition: coords });
            
        }); // end window scroll
    });

    //EKKO LIGHTBOX

    $(document).on('click', '[data-toggle="lightbox"]', function(event) {
        event.preventDefault();
        $(this).ekkoLightbox();
    });

    //SIGNUP FORM
    
    // Get the form.
    var form = $('#ajax-contact');

    // Get the messages div.
    var formMessages = $('#form-messages');

    // Set up an event listener for the contact form.
    $(form).submit(function(event) {
    // Stop the browser from submitting the form.
        event.preventDefault();

        // Serialize the form data.
        var formData = $(form).serialize();

        // Submit the form using AJAX.
        $.ajax({
            type: 'POST',
            url: $(form).attr('action'),
            data: formData
        }).done(function(response) {
            // Make sure that the formMessages div has the 'success' class.
            $(formMessages).removeClass('error');
            $(formMessages).addClass('success');

            // Set the message text.
            $(formMessages).text(response);

            // Clear the form.
            $('#name').val('');
            $('#email').val('');
            $('#message').val('');
        }).fail(function(data) {
            // Make sure that the formMessages div has the 'error' class.
            $(formMessages).removeClass('success');
            $(formMessages).addClass('error');

            // Set the message text.
            if (data.responseText !== '') {
                $(formMessages).text(data.responseText);
            } else {
                $(formMessages).text('Oops! An error occured and your message could not be sent.');
            }
        });
    
    });

    //MEMBERSHIP FORM
    
    // Get the form.
    var membership_form = $('#ajax-contact1');

    // Get the messages div.
    var formMessages1 = $('#form-messages1');

    // Set up an event listener for the contact form.
    $(membership_form).submit(function(event) {
    // Stop the browser from submitting the form.
        event.preventDefault();

        // Serialize the form data.
        var formData = $(membership_form).serialize();

        // Submit the form using AJAX.
        $.ajax({
            type: 'POST',
            url: $(membership_form).attr('action'),
            data: formData
        }).done(function(response) {
            // Make sure that the formMessages1 div has the 'success' class.
            $(formMessages1).removeClass('error');
            $(formMessages1).addClass('success');

            // Set the message text.
            $(formMessages1).text(response);

            // Clear the form.
            $('#name').val('');
            $('#email').val('');
            $('#message').val('');
        }).fail(function(data) {
            // Make sure that the formMessages1 div has the 'error' class.
            $(formMessages1).removeClass('success');
            $(formMessages1).addClass('error');

            // Set the message text.
            if (data.responseText !== '') {
                $(formMessages1).text(data.responseText);
            } else {
                $(formMessages1).text('Oops! An error occured and your message could not be sent.');
            }
        });
    
    });
   
});

function validateSignupName () {
    var name=document.signup_form.name.value;
    if (name == "") {
        document.getElementById("nameError").innerHTML = "Name cannot be empty";
    }
}

function validateSignupEmail () {
    var email=document.signup_form.email.value;
    if (email == "") {
        document.getElementById("emailError").innerHTML = "Email cannot be empty";
    }
}