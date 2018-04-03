<?php defined('C5_EXECUTE') or die("Access Denied."); ?>

<div class="ccm-dashboard-header-buttons">
    <a id="ccm-export-results" class="btn btn-success" href="<?= $view->action('download', $token->generate())?>">
        <i class='fa fa-download'></i> <?= t('Download Files') ?>
    </a>
</div>