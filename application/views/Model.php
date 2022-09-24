<style>
    .form-control-plaintext{        
        border-bottom-color: gold;
    }
    .container
    {
        font-size: 13px;
        font-family: 'Open Sans', sans-serif;
    }
</style>

<div class="container mt-3">
  <h2>Modal Example</h2>
  <!-- Button to Open the Modal -->
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
    Open modal
  </button>

  <!-- The Modal -->
  <div class="modal fade" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header" style="height:60px;">          
          <button type="button" class="close" data-dismiss="modal" >×</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
            <h3 class="modal-title text-center" style="border-bottom: solid 3px gold;font-family: sans-serif">Contact Us</h3><br>
         <div class="row">
        <div class="col-lg-12 mx-auto">
            <form name="sentMessage" id="contactForm" novalidate="novalidate">
                <div class="control-group">
                    <div class="form-group floating-label-form-group controls mb-0 pb-2">
                        <input required="" class="form-control-plaintext "   id="name" type="text" placeholder="Name" required="required" data-validation-required-message="Please enter your name.">
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                <div class="control-group">
                    <div class="form-group floating-label-form-group controls mb-0 pb-2">
                        <input required="" class="form-control-plaintext "    id="email" type="email" placeholder="Email Address" required="required" data-validation-required-message="Please enter your email address.">
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                <div class="control-group">
                    <div class="form-group floating-label-form-group controls mb-0 pb-2">
                        <input required="" class="form-control-plaintext "    id="phone" type="tel" placeholder="Phone Number" required="required" data-validation-required-message="Please enter your phone number.">
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                <div class="control-group">
                    <div class="form-group floating-label-form-group controls mb-0 pb-2">
                        <textarea class="form-control-plaintext "   required=""  id="message" placeholder="Message" required="required" data-validation-required-message="Please enter a message."></textarea>
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                <br>
                <div id="success"></div>
                <div class="form-group">
                    <button type="submit" class="btn btn-outline-success btn-block" id="sendMessageButton">Send</button>
                </div>
            </form>
        </div>
    </div>
        </div>
        
        <!-- Modal footer
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
         -->
        
      </div>
    </div>
  </div>
  
</div>