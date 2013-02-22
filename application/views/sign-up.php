<div class="hero-unit span6">
		<?php echo form_open("user/signup", array('class' => 'form-horizontal'));?>
		<fieldset>
			<div id="legend">
				<legend class="">Sign-up for Friendstree</legend>
			</div>

    	<div class="control-group">
        	<label class="control-label" for="input01">Name:</label>
        	<div class="controls">
            	<input type="text" name="name" placeholder="Johnny" class="input-xlarge" style="height:28px">
        	</div>
        </div>

        <div class="control-group">
        	<label class="control-label" for="input01">Sir Name:</label>
        	<div class="controls">
            	<input type="text" name="sname" placeholder="Bravo" class="input-xlarge" style="height:28px">
            </div>
        </div>

        <div class="control-group">
        	<label class="control-label" for="input01">E-mail:</label>
        	<div class="controls">
            	<input type="text" name="email" placeholder="Example@domain.com" class="input-xlarge" style="height:28px">
            </div>
        </div>

        <div class="control-group">
        	<label class="control-label" for="input01">Password:</label>
        	<div class="controls">
            	<input type="password" name="password" class="input-xlarge" style="height:28px">
            </div>
        </div>

		<div class="control-group">
        	<label class="control-label" for="input01">Confirm Password:</label>
        	<div class="controls">
            	<input type="password" class="input-xlarge" style="height:28px">
            </div>
        </div>

        <div class="control-group">

          	<label class="control-label">Gender:</label>
          		<div class="controls">
            		<select class="input-xlarge" name="gender">
              			<option>Male</option>
			            <option>Female</option>
            		</select>
          		</div>
        </div>

        <div class="controls">

            <label class="checkbox">
              <input type="checkbox" value="Option one">
              Keep me sign in
            </label>
        </div>

        <div class="control-group">
            <div class="form-actions">
            	<button type="submit" class="btn btn-success input-xlarge">Create account </button>
            </div>
        </div>
    </fieldset>
	</form>
</div>