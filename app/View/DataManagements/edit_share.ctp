<?php echo Xcrud::load_css() ?>

<?php echo $xcrud->render(); ?>



<?php $this->start('script_at_page_end'); ?>

<?php echo Xcrud::load_js() ?>

<?php $this->end(); ?>