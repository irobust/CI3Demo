<?php $this->load->view('inc/header'); ?>
<article>
	<div>
		Load file show.php in folder Views/home
	</div>
	<?php echo $id; ?>, <?php echo $productname; ?>
</article>
<?php $this->load->view('inc/footer', ['id' => $id]); ?>