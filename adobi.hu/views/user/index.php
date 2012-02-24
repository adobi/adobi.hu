<h1>Hello: <?= $CurrentUser['name']; ?></h1>
<?php

	dump($this->session->userdata('CurrentUser'));

?>
<?= anchor(base_url().'login/signout', '&laquo;Logout'); ?>
