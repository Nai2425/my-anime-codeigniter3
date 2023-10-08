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
    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <?php
            $totalAnimes = count($animes);
            $itemsPerSlide = 3;
            $slideCount = ceil($totalAnimes / $itemsPerSlide);

            for ($i = 0; $i < $slideCount; $i++) :
            ?>
                <div class="carousel-item <?php echo $i === 0 ? 'active' : ''; ?>">
                    <div class="row">
                        <?php
                        for ($j = $i * $itemsPerSlide; $j < min(($i + 1) * $itemsPerSlide, $totalAnimes); $j++) :
                            $row = $animes[$j];
                        ?>
                            <div class="col-md-4">
                                <div class="card mb-2">
                                    <img src="<?php echo $row->image ?>" class="card-img-top rounded-3" alt="<?php echo $row->title ?> logo" width="100px" height="300px">
                                </div>
                                <div class="card-body text-center">
                                    <h5 class="card-title fs-3 fw-bold"><?php echo $row->title ?></h5>
                                    <p class="card-text" title="<?php echo $row->description ?>"><?php echo $row->description ?></p>
                                </div>
                            </div>
                        <?php endfor; ?>
                    </div>
                </div>
            <?php endfor; ?>
        </div>

    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>