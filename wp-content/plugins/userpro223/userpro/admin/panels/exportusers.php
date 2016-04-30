<form method="post" action="">

<h3><?php _e('Export Users to CSV','userpro'); ?></h3>
<table class="form-table">

	<tr valign="top">
		<th scope="row"><label for="exp_users_num"><?php _e('Number of Users to export','userpro'); ?></label></th>
		<td>
			<input type="text" name="exp_users_num" id="exp_users_num" value="100" class="regular-text" />
		</td>
	</tr>
	
	<tr valign="top">
		<th scope="row"><label for="exp_exclude"><?php _e('Do not include these fields in export','userpro'); ?></label></th>
		<td>
			<input type="text" name="exp_exclude" id="exp_exclude" value="" class="regular-text" />
			<span class="description"><?php _e('A comma seperated list of fields to exclude from the export. e.g. first_name,user_login,id,user_email','userpro'); ?></span>
		</td>
	</tr>

	<tr valign="top">
		<th scope="row"><label for="exp_include"><?php _e('Only Include these fields in export','userpro'); ?></label></th>
		<td>
			<input type="text" name="exp_include" id="exp_include" value="" class="regular-text" />
			<span class="description"><?php _e('A comma seperated list of fields to include only in the export. e.g. first_name,user_login,id,user_email','userpro'); ?></span>
		</td>
	</tr>
	
</table>

<p class="submit">
	<input type="submit" name="export_users" id="export_users" class="button button-primary" value="<?php _e('Export to CSV','userpro'); ?>"  />
</p>

</form>