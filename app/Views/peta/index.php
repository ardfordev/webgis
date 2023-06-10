<?= $this->extend('layout/template') ?>

<?= $this->section('title') ?>
	<title>GIS</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
	<section class="section">
		<div class="section-header">
			<h1>WebGIS</h1>
		</div>
		
		<div class="section-body">
			<div class="card">
				<div class="card-header">
					<h4>WebGIS</h4>
				</div>
				<div class="card-body p-0">
                    <div class="table-responsive">
						<div class="p-4">
							<table class="table table-striped table-md p-2">
								<thead>
									<tr>
										<th>#</th>
										<th>Peta Jangkauan Sarana dan Prasarana</th>
									</tr>
								</thead>
								<tbody>
								<?php
									$page = isset($_GET['page']) ? $_GET['page'] : 1;
									$no = 1 + (50 * ($page - 1));
									foreach ($filenames as $filename) : 
								?>
                                    <tr>
                                        <td class="align-middle"><?= $no++ ?></td>
                                        <td class="align-middle"><a href="<?=site_url()?>./resources/<?= $filename ?>"><?= $filename ?></a></td>	
                                    </tr>
								<?php endforeach; ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
<?= $this->endSection() ?>