<?php // Change the css classes to suit your needs

$attributes = array('class' => '', 'id' => '');
echo form_open('new_members', $attributes); ?>

<p>
        <label for="first_name">First Name <span class="required">*</span></label>
        <?php echo form_error('first_name'); ?>
        <br /><input id="first_name" type="text" name="first_name" maxlength="20" value="<?php echo set_value('first_name'); ?>"  />
</p>

<p>
        <label for="last_name">Last Name <span class="required">*</span></label>
        <?php echo form_error('last_name'); ?>
        <br /><input id="last_name" type="text" name="last_name" maxlength="20" value="<?php echo set_value('last_name'); ?>"  />
</p>

<p>
        <label for="email">email <span class="required">*</span></label>
        <?php echo form_error('email'); ?>
        <br /><input id="email" type="text" name="email" maxlength="100" value="<?php echo set_value('email'); ?>"  />
</p>

<p>
        <label for="password">Password <span class="required">*</span></label>
        <?php echo form_error('password'); ?>
        <br /><input id="password" type="password" name="password" maxlength="255" value="<?php echo set_value('password'); ?>"  />
</p>

<p>
        <label for="confirm_password">Confirm Password <span class="required">*</span></label>
        <?php echo form_error('confirm_password'); ?>
        <br /><input id="confirm_password" type="text" name="confirm_password" maxlength="255" value="<?php echo set_value('confirm_password'); ?>"  />
</p>


<p>
        <?php echo form_submit( 'submit', 'Submit'); ?>
</p>

<?php echo form_close(); ?>
