<form name="wpcfName" action="" method="post">
	<fieldset><legend>Leave us a message</legend>
		<table border="0" >
			<tbody>
				<tr>
				<td>name:</td>
				<td><input name="wpfc_name" type="text" required placeholder="" title="First name"/><span class="required" >*</span></td>
				</tr>
				<tr>
				<td>Email:</td>
				<td><input name="wpfc_email" type="email" required placeholder="example@domain.com" title="enter a valid email address" /><span class="required" >*</span></td>
				</tr>
				<tr>
				<td>Subject:</td>
				<td><input name="wpfc_subject" type="text" required placeholder=""/><span class="required" >*</span></td>
				</tr>
				<tr>
				<td>Message:</td>
				<td><textarea cols="40" name="wpfc_message" required rows="5" title="Body of your message"></textarea><span class="required" >*</span></td>
				</tr>
				<tr>
				<td></td>
				<td><input name="wpfc_btn" type="submit" /></td>
				</tr>
			</tbody>
		</table>
	</fieldset>
</form>
<style>
input,textarea{
	width:95%;
}
</style>