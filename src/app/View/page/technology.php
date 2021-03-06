<?php $technologies = $this->src; ?>

<div id="technology" class="page p-technology">
    <h3 class="w-page-title f-heading5 motion">
        <span data-number="03" class="">SPACE LAUNCH 101</span>
    </h3>
    <div class="l-wrapper technology">
        <div class="w-navXtext technology">
            <div class="w-technology-nav motion">
                <?php foreach ($technologies as $i => $technology) { ?>
                    <span class="m--brain technology">
                        <?= $i + 1 ?>
                     </span>
                <?php } ?>
            </div>
            <div class="w-text technology">
                <strong class="w-strong technology f-nav-text motion"><span>THE TERMINOLOGY…</span></strong>
                <h1 class="w-h1 technology f-heading3">
                    <?php foreach ($technologies as $technology) { ?>
                        <span class="m-technology-name"><?= $technology['name'] ?></span>
                    <?php } ?>
                </h1>
                <p class="w-paragraph technology f-body-copy m--wrapper">
                    <?php foreach ($technologies as $technology) { ?>
                        <span class="m-technology-description"><?= $technology['description'] ?></span>
                    <?php } ?>
                </p>
            </div>
        </div>
        <div class="w-img technology m--wrapper">
            <?php foreach ($technologies as $technology) { ?>
                <div class="m-technology-img"></div>
            <?php } ?>
        </div>
    </div>
</div>