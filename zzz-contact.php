<!-- Sweetalert -->
<script src="./script/sweetalert.min.js"></script>
<!-- Concat Form JS -->
<script type="text/javascript" src="./script/contact.js"></script>

<section class="appointment-area" id="contact-section">
    <div class="container">
        <div class="appointment-inner">
            <div style="text-align: center;">
                <h3>Contact Us</h3>
            </div>
            <div class="appointment-form" style="padding-left: 5%; padding-right: 5%">

               <form name="contact-form" id="contact-form" onsubmit='swal("Thanks for contacting us.\nWe will get back to you shortly.");;ContactFunction(); return false;'>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Full Name</label>
                                <input type="text" id="name" name="name" required>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" id="email" name="email" required> 
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="phone">Contact Number</label>
                                <input type="text" id="phone" name="phone" pattern="\d{10,13}" maxlength="13" required>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="city">City</label>
                                <input type="text" id="city" name="city" required>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="subject">Subject</label>
                                <input type="text" id="subject" name="subject" required>
                            </div>
                        </div>

                        <div class="col-md-12">
                           <div class="form-group">
                                <label for="message">Message</label>
                                <textarea id="message" name="message" cols="20" rows="7" required></textarea>
                            </div>
                        </div>
                    </div>
                    <div style="text-align: center;">
                        <div style="padding-left: 20%; padding-right: 20%;">
                            <input type="submit" class="main_btn" value="Send Message">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>