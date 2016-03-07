<?php require_once("includes/new_functions.php");?>
<?php 
session_start();

function site_admin_logged_in()
{
		return isset($_SESSION['site_admin_id']);

}
function confirm_site_admin_logged_in()
{

	if(!site_admin_logged_in())
	{
		redirect_to("site_admin_login.php");
	}
}

function is_logged_in()
{
	if(logged_in())
	{
		return 1;
	}
}


?>