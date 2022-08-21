<?= $this->extend('layouts/default') ?>

<?= $this->section('content') ?>

<?php if (!empty($phonebooks)): ?>
<div class="table-responsive">

    <table class="table table-hover table-striped">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Phone</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($phonebooks as $phonebook): ?>
        <tr>
            <th scope="row"><?= $phonebook['id'] ?></th>
            <td><?= $phonebook['name'] ?></td>
            <td><?= $phonebook['email'] ?></td>
            <td><?= $phonebook['phone'] ?></td>
        </tr>
        <?php endforeach; ?>
        </tbody>
    </table>

</div><!-- ./table-responsive-->
<?php else: ?>
    <p>Empty data</p>
<?php endif; ?>

<nav aria-label="Page navigation example">
    <?= $pager->links('default', 'my_pager') ?>
    <!--<ul class="pagination">
        <li class="page-item">
            <a class="page-link" href="#" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
            </a>
        </li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item">
            <a class="page-link" href="#" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
            </a>
        </li>
    </ul>-->
</nav>

<?= $this->endSection() ?>
