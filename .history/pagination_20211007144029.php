<?php for ($num = 1; $num <= $totalPages; $num++) { ?>
    <?php if ($num != $current_page) { ?>
            <a class="page-item" href="?per_page=<?= $item_per_page ?>&page=<?= $num ?>"><?= $num ?></a>
    <?php } else { ?>
        <strong class="current-page page-item"><?= $num ?></strong>
    <?php } ?>
<?php } ?>