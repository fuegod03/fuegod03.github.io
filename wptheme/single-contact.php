<?php

/*
Template Name: Single Contact Template
*/

get_header();
 ?>
<link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/css/Libraries /contact-form-master/css/style.css">
<script src="<?php echo get_bloginfo('template_directory'); ?>/css/Libraries /contact-form-master/js/modernizr.js" charset="utf-8"></script>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>

<form class="cd-form floating-labels">
  <fieldset>
    <legend>Account Info</legend>

    <div class="error-message">
      <p>Please enter a valid email address</p>
    </div>

    <div class="icon">
      <label class="cd-label" for="cd-name">Name</label>
      <input class="user" type="text" name="cd-name" id="cd-name" required>
      </div>

      <div class="icon">
        <label class="cd-label" for="cd-company">Company</label>
      <input class="company" type="text" name="cd-company" id="cd-company">
      </div>

      <div class="icon">
        <label class="cd-label" for="cd-email">Email</label>
      <input class="email error" type="email" name="cd-email" id="cd-email" required>
      </div>
  </fieldset>

  <fieldset>
    <legend>Project Info</legend>

    <div>
      <h4>Budget</h4>

      <p class="cd-select icon">
        <select class="budget">
          <option value="0">Select Budget</option>
          <option value="1">&lt; $5000</option>
          <option value="2">$5000 - $10000</option>
          <option value="3">&gt; $10000</option>
        </select>
      </p>
    </div>

    <div>
      <h4>Have a project you’d like to discuss?</h4>

      <ul class="cd-form-list">
        <li>
          <input type="radio" name="radio-button" id="cd-radio-1" checked>
          <label for="cd-radio-1">yes</label>
        </li>

        <li>
          <input type="radio" name="radio-button" id="cd-radio-2">
          <label for="cd-radio-2">no</label>
        </li>

      </ul>
    </div>

    <div>
      <h4>What services are you interested in?</h4>

      <ul class="cd-form-list">
        <li>
          <input type="checkbox" id="cd-checkbox-1">
          <label for="cd-checkbox-1">branding/logo design</label>
        </li>

        <li>
          <input type="checkbox" id="cd-checkbox-1">
          <label for="cd-checkbox-1">website design</label>
        </li>

        <li>
          <input type="checkbox" id="cd-checkbox-1">
          <label for="cd-checkbox-1">SEO</label>
        </li>

        <li>
          <input type="checkbox" id="cd-checkbox-1">
          <label for="cd-checkbox-1">brochure/print design</label>
        </li>

        <li>
          <input type="checkbox" id="cd-checkbox-3">
          <label for="cd-checkbox-3">digital marketing</label>
        </li>

        <li>
          <input type="checkbox" id="cd-checkbox-3">
          <label for="cd-checkbox-3">email marketing</label>
        </li>

      </ul>
    </div>

    <div class="icon">
      <label class="cd-label" for="cd-textarea">Project description</label>
          <textarea class="message" name="cd-textarea" id="cd-textarea" required></textarea>
    </div>

    <div>
          <input type="submit" value="Send Message">
      </div>
  </fieldset>

</form>


<form class="catch" action="?" method="POST">
  <div class="g-recaptcha" data-sitekey="6LfupFwUAAAAALa9uVItX1lHQtvnuZI3116MNA_K"></div>
  <br/>
  <input type="submit" value="Submit">
</form>

<?php get_footer(); ?>
<style media="screen">
  .catch{
    margin-left: 35%;
margin-top: -70px;
  }
</style>
