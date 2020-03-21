function ContactFunction() {
    var name = document.getElementById("name").value;
    var email = document.getElementById("email").value;
    var phone = document.getElementById("phone").value;
    var city = document.getElementById("city").value;
    var subject = document.getElementById("subject").value;
    var message = document.getElementById("message").value;
    
    var dataString = 'name=' + name + '&email=' + email + '&phone=' + phone + '&city=' + city + '&subject=' + subject + '&message=' + message;
    
    document.getElementById("contact-form").reset(); //reset the form after the successful submission
    
    if (name == '' || email == '' || subject == '' || message == '')
    {
        alert("Please Fill All Fields");
    } 
    
    else
    {
        // AJAX code to submit form.
        $.ajax({
        type: "POST",
        url: "./mail/zzz-acromed-mail-server.php",
        data: dataString,
        cache: false,
        success: function(html) {
        //alert(html);
        }
        });
    }
    return false;
}