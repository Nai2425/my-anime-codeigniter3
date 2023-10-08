<style>
    .card-text {
        overflow: hidden;

        display: -webkit-box;
        -webkit-line-clamp: 3;
        /* Change this to the desired number of lines */
        -webkit-box-orient: vertical;
    }
</style>
<div class="container">
    <h2 class="fw-bold fs-3 text-center mt-3 pt-3">RECENTLY ADDED ANIME</h2>
    <hr class="hr" />
    <div class="row mt-4">
        <?php foreach ($animes as $row) : ?>
            <div class="col-md-4">
                <div class="card mb-2">
                    <img src="<?php echo $row->image ?>" class="card-img-top rounded-3" alt="<?php echo $row->title ?> logo" width="100px" height="300px">

                </div>
                <div class="card-body text-center">
                    <h5 class="card-title fs-3 fw-bold"><?php echo $row->title ?></h5>
                    <p class="card-text" title="<?php echo $row->description ?>"><?php echo $row->description ?></p>
                </div>
            </div>
        <?php endforeach; ?>

    </div>
</div>