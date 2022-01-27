<form action="{{ admin_url('admin-ajax.php') }}" id="contact-form" method="POST">

	<input type="hidden" name="form_id" value="{{ get_field('contact_form_id') }}" />
	<input type="hidden" name="action" value="contact" />
	<input type="hidden" name="contact-nonce" value="{{ wp_create_nonce('contact-nonce') }}" />

    <div class="row">
        <div class="col-md-6">
            <div class="title-wrap">
                <strong class="title">Contact us</strong>
            </div>
            <div class="input-field">
                <div class="input-wrap">
                    <label for="first-name">First Name*</label>
                    <input name="first-name" id="first-name" type="text" required="required">
                </div>
                <div class="input-wrap">
                    <label for="last-name">Last Name*</label>
                    <input name="last-name" id="last-name" type="text" required="required">
                </div>
                <div class="input-wrap">
                    <label for="address-1">Street Address*</label>
                    <input name="address-1" id="address-1" type="text" required="required">
                </div>
                <div class="input-wrap">
                    <label for="address-2">Address Line 2</label>
                    <input name="address-2" id="address-2" type="text">
                </div>
                <div class="input-wrap">
                    <label for="phone">Phone</label>
                    <input name="phone" id="phone" type="tel" placeholder="(888) 888-8888">
                </div>
                <div class="input-wrap">
                    <label for="city">City*</label>
                    <input name="city" id="city" type="text" required="required">
                </div>
                <div class="input-wrap">
                    <label for="mail">Email*</label>
                    <input name="mail" id="mail" type="email" placeholder="Email" required="required">
                </div>
                <div class="input-wrap">
                    <label for="place">State/Province/Region</label>
                    <input name="place" id="place" type="text">
                </div>
                <div class="input-wrap">
                    <label for="code">Zip/Postal Code</label>
                    <input name="code" id="code" type="text">
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="textarea-wrap">
                <label for="comments">Comments*</label>
                <textarea name="comments" cols="5" rows="5" id="comments" placeholder="Tell us how we sparked your sense of discovery..." required="required"></textarea>
            </div>
            <div class="select-row">
                <div class="select-col">
                    <label>Country*</label>
                    <select name="country" class="style-1" required="required">
                        <option value="">Select Country</option>
                        <option value="United-States">United States</option>
                        <option value="Afghanistan">Afghanistan</option>
                        <option value="Albania">Albania</option>
                        <option value="Algeria">Algeria</option>
                        <option value="American-Samoa">American Samoa</option>
                        <option value="Andorra">Andorra</option>
                    </select>
                </div>
                <div class="select-col">
                    <label>How did you hear about us?</label>
                    <select name="how-hear" class="style-1">
                        <option value="">Select One</option>
                        <option value="v1">Member</option>
                        <option value="v2">Option 2</option>
                        <option value="v3">Option 3</option>
                        <option value="v4">Option 4</option>
                      </select>
                </div>
            </div>
            <div class="text-right">
                <input type="submit" value="Inquire now" class="btn btn-default">
            </div>
        </div>
    </div>
</form>

<div style="display: none;" id="thanks">
    {{ get_field('contact_form_thank_msg') }}
</div>