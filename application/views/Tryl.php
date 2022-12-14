<div class="container">
    <div class="row">
        <div class="col-lg-8 mx-auto">
            <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
            <form name="sentMessage" id="contactForm" novalidate="novalidate">
                <div class="control-group">
                    <div class="form-group floating-label-form-group controls mb-0 pb-2">
                        <label>Name</label>
                        <input class="form-control"   style='font-size:14pt' id="name" type="text" placeholder="Name" required="required" data-validation-required-message="Please enter your name.">
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                <div class="control-group">
                    <div class="form-group floating-label-form-group controls mb-0 pb-2">
                        <label>Email Address</label>
                        <input class="form-control"   style='font-size:14pt' id="email" type="email" placeholder="Email Address" required="required" data-validation-required-message="Please enter your email address.">
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                <div class="control-group">
                    <div class="form-group floating-label-form-group controls mb-0 pb-2">
                        <label>Phone Number</label>
                        <input class="form-control"  style='font-size:14pt'  id="phone" type="tel" placeholder="Phone Number" required="required" data-validation-required-message="Please enter your phone number.">
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                <div class="control-group">
                    <div class="form-group floating-label-form-group controls mb-0 pb-2">
                        <label>Message</label>
                        <textarea class="form-control"   style='font-size:14pt' id="message" rows="5" placeholder="Message" required="required" data-validation-required-message="Please enter a message."></textarea>
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                <br>
                <div id="success"></div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-xl" id="sendMessageButton">Send</button>
                </div>
            </form>
        </div>
    </div>

</div>