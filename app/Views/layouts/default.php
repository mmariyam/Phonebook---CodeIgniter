<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="<?= base_url('assets/bootstrap/css/bootstrap.min.css') ?>">
    <title><?= $title ?? '' ?></title>
</head>
<body>


<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-3">
    <a class="navbar-brand" href="<?= base_url() ?>"><?= $title ?? '' ?></a>
</nav>

<div class="container">

    <div class="row">

        <div class="col-md-12">

            <form>
                <div class="form-row">
                    <div class="form-group col-md-10">
                        <input type="text" class="form-control" id="q" name="q" placeholder="Search...">
                    </div>
                    <div class="form-group col-md-2">
                        <button type="submit" class="btn btn-primary btn-block">Search</button>
                    </div>
                </div>

            </form>

        </div><!-- ./col-md-12-->

    </div><!-- ./row-->

    <div class="row mt-3 mb-3">
        <div class="col-md-12">

            <?= $this->renderSection('content') ?>

        </div><!-- ./col-md-12-->

    </div><!-- ./row-->

</div><!-- ./container-->


</body>
</html>
