<?= $this->include('/landing/partials/Header'); ?>
<?= $this->include('/landing/partials/Navbar'); ?>
<?= $this->include('/auth/Banner'); ?>

<?php $this->renderSection('content'); ?>



<script src="<?= base_url('/public'); ?>/assets/js/jquery.js"></script>

<?php $this->renderSection('scripts'); ?>
<?= $this->include('/landing/partials/Footer'); ?>