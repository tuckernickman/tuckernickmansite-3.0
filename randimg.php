<section class="mb-5">
    <div class="col section-content perspective">
        <div>
            <?php
            $imagesDir = 'assets/img/*';

            $images = glob($imagesDir . '*.{jpg,jpeg,png,gif}', GLOB_BRACE);

            $randomImage = $images[array_rand($images)]; // See comments
            ; ?>
    </div>
</div>
</section>