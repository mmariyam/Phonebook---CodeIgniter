<?php

/** @var \CodeIgniter\Pager\PagerRenderer $pager */
$pager->setSurroundCount(3);
?>
<?php if ($pager->getPageCount() > 1): ?>
    <ul class="pagination">

        <?php if ($pager->hasPrevious()): ?>
            <li class="page-item">
                <a class="page-link" href="<?= $pager->getFirst() ?>" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            </li>

            <li class="page-item">
                <a class="page-link" href="<?= $pager->getPreviousPage() ?>" aria-label="Previous">
                    <span aria-hidden="true">&lt;</span>
                </a>
            </li>
        <?php endif; ?>

        <?php foreach ($pager->links() as $link): ?>
            <li class="page-item <?= $link['active'] ? 'active' : '' ?>">
                <a class="page-link" href="<?= $link['uri'] ?>"><?= $link['title'] ?></a>
            </li>
        <?php endforeach; ?>

        <?php if ($pager->hasNext()): ?>
            <li class="page-item">
                <a class="page-link" href="<?= $pager->getNextPage() ?>" aria-label="Previous">
                    <span aria-hidden="true">&gt;</span>
                </a>
            </li>

            <li class="page-item">
                <a class="page-link" href="<?= $pager->getLast() ?>" aria-label="Previous">
                    <span aria-hidden="true">&raquo;</span>
                </a>
            </li>
        <?php endif; ?>

    </ul>
<?php endif; ?>
