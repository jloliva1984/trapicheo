<?= $this->extend('admin_template/index') ?>

<?= $this->section('content') ?>
	<?php 
	foreach($css_files as $file): ?>
		<link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
	<?php endforeach; ?>
	<div id="layoutSidenav_content" style="height: 100%">
					<main>
						<div class="container-fluid">
							<h1 class="mt-4"><?= isset($data['title']) ? $data['title']: ''; ?></h1>
							<ol class="breadcrumb mb-4">
								<li class="breadcrumb-item active"><?= isset($data['title']) ? $data['title']: ''; ?></li>
							</ol>
						</div>
						
				    
						

						<div style='height:20px;'></div>  
						<div style="padding: 10px">
							<?php echo $output; ?>
						</div>

						
						<?php foreach($js_files as $file): ?>
							<script src="<?php echo $file; ?>"></script>
						<?php endforeach; ?>  

					</main>
	</div>
<?= $this->endSection() ?>