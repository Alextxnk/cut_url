<?php 
	include "includes/header_profile.php"; 

	$error = '';
	if (isset($_SESSION['error']) && !empty($_SESSION['error'])) {
		$error = $_SESSION['error'];
		$_SESSION['error'] = '';
	}

	$success = '';
	if (isset($_SESSION['success']) && !empty($_SESSION['success'])) {
		$success = $_SESSION['success'];
		$_SESSION['success'] = '';
	}
?>
	<main class="container">
		<?php if (!empty($success)) {  ?>
		<div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
			<?php echo $success; ?>
			<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		</div>
		<?php } ?>

		<?php if (!empty($error)) { ?>
		<div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
			<?php echo $error; ?>
			<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		</div>
		<?php } ?>

		<div class="row mt-5">
			<table class="table table-striped">
				<thead>
					<tr>
						<th scope="col">#</th>
						<th scope="col">Ссылка</th>
						<th scope="col">Сокращение</th>
						<th scope="col">Переходы</th>
						<th scope="col">Действия</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<th scope="row">1</th>
						<td><a href="https://ya.ru" target="_blank">https://ya.ru</a></td>
						<td class="short-link">http://red.loc/kjjfdh</td>
						<td>34</td>
						<td>
							<a href="#" class="btn btn-primary btn-sm copy-btn" title="Скопировать в буфер" data-clipboard-text="http://red.loc/kjjfdh"><i class="bi bi-files"></i></a>
							<a href="#" class="btn btn-warning btn-sm" title="Редактировать"><i class="bi bi-pencil"></i></a>
							<a href="#" class="btn btn-danger btn-sm" title="Удалить"><i class="bi bi-trash"></i></a>
						</td>
					</tr>
					<tr>
						<th scope="row">2</th>
						<td><a href="https://google.ru" target="_blank">https://google.ru</a></td>
						<td class="short-link">http://red.loc/ke05nls</td>
						<td>42</td>
						<td>
							<a href="#" class="btn btn-primary btn-sm copy-btn" title="Скопировать в буфер" data-clipboard-text="http://red.loc/ke05nls"><i class="bi bi-files"></i></a>
							<a href="#" class="btn btn-warning btn-sm" title="Редактировать"><i class="bi bi-pencil"></i></a>
							<a href="#" class="btn btn-danger btn-sm" title="Удалить"><i class="bi bi-trash"></i></a>
						</td>
					</tr>
					<tr>
						<th scope="row">3</th>
						<td><a href="https://vk.com" target="_blank">https://vk.com</a></td>
						<td class="short-link">http://red.loc/jfiwms7</td>
						<td>64</td>
						<td>
							<a href="#" class="btn btn-primary btn-sm copy-btn" title="Скопировать в буфер" data-clipboard-text="http://red.loc/jfiwms7"><i class="bi bi-files"></i></a>
							<a href="#" class="btn btn-warning btn-sm" title="Редактировать"><i class="bi bi-pencil"></i></a>
							<a href="#" class="btn btn-danger btn-sm" title="Удалить"><i class="bi bi-trash"></i></a>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
	</main>
	<div aria-live="polite" aria-atomic="true" class="position-relative">
		<div class="toast-container position-absolute top-0 start-50 translate-middle-x">
			<div class="toast align-items-center text-white bg-primary border-0" role="alert" aria-live="assertive" aria-atomic="true">
				<div class="d-flex">
					<div class="toast-body">
						Ссылка скопирована в буфер
					</div>
					<button type="button" class="btn-close me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
				</div>
			</div>
		</div>
	</div>
<?php include "includes/footer_profile.php"; ?>