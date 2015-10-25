<html>
<head>
	<title>File Management System</title>
	<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
	<script src="assets/js/script.js" type="text/javascript"></script>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">	
</head>


<?php /* Database connection establishment */ ?>
<?php 
include "config/db_connection.php"; 
$conn = new DatabaseConnection();

include "classes/files.php";
$files = new file();

include "classes/folders.php";

include "classes/filesystem.php";



if(isset($_REQUEST['folder_submit']))
{
	$folder = new folder();
	$folder->setName($_REQUEST['folder']);
	$folder->setCreatedTime(date('Y-m-d h:i:s'));
	$folder->setPath("storage");

	$folder->insert_folder_record();
	
	mkdir("storage/" . $_REQUEST['folder']);
}
?>


<body>
<header>
	<ul class="nav">		
		<li><a href="javascript:;" id="my_files">My Files</a></li>	
		<li><a href="javascript:;" id="new_folder">Create New Folder</a></li>
		<li><a href="javascript:;" id="upload_file">Upload File</a></li>
	</ul>
</header>

<div>
	<div class="files_listing">
		<table width="80%" align="center" border="1">
			<tr>
				<th colspan="6">Folder Name</th>
			</tr>

			<tr>
				<th>Name</th>
				<th>Type</th>
				<th>Size</th>
				<th>Last Modified</th>
				<th>Download</th>
				<th>Delete</th>				
			</tr>

			<tr>
				<td>File 1</td>
				<td>Pdf</td>
				<td>10kb</td>
				<td>10:00 pm, 25th October 2015</td>
				<td><a href="#">Download</a></td>
				<td><a href="#">Delete</a></td>
			</tr>
		</table>
	</div>

	<div class="folder_creation" style="display:none;">
		<form method="post" name="create_folder" id="create_folder">
			<fieldset>
				<legend>Create Folder</legend>
				<label>New Folder Name: </label>
				<input type="text" name="folder" id="folder" placeholder="Please enter folder name" />
				<input type="submit" name="folder_submit" id="folder_submit" value="Create">
			</fieldset>
		</form>
	</div>

	<div class="file_creation" style="display:none;">
		<form method="post" name="upload_file" id="upload_file">
			<fieldset>
				<legend>Upload File</legend>
				<div>
					<label>Please Select File: </label>
					<input type="file" name="select_file" id="select_file" />
				</div>

				<div>
					<label>Please Select Folder: </label>
					<select name="select_folder" id="select_folder">
						<option value="">-- Please Select --</option>
					</select>
				</div>

				<div>
					<input type="submit" name="upload_file_button" id="upload_file_button" value="Upload">
				</div>
			</fieldset>
		</form>
	</div>
</div>
</body>
</html>