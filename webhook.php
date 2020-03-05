<?php

include_once ('fmREST.php');
include_once ('settings.php');

$fm = new fmREST ($host, $db, $user, $pass, $layout);
$result = $fm -> login ();

if (isset($_POST)) {
	$data = file_get_contents('php://input');
	$record['z_Response'] = $data;

	$data = json_decode($data);

	$record['Event'] = $data->event;
	$record['Timestamp'] = $data->timestamp;
	$record['User_Id'] = $data->user->id;
	$record['User_Name'] = $data->user->name;
	$record['User_Avatar'] = $data->user->avatar;
	$record['User_Country'] = $data->user->country;
	$record['User_Language'] = $data->user->language;
	$record['User_API_Version'] = $data->user->api_version;

	$dataPackage['fieldData'] =  $record;

	$result = $fm -> createRecord ($dataPackage);

}else{
	echo "Error: No data is set";
}
		
$result = $fm -> logout ();

?>
