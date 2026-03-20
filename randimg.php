<section class="mb-5">
    <div class="col section-content perspective">
        <div>
            <?php
            $images = glob(__DIR__ . '/assets/img/*/*.{jpg,jpeg,png,gif}', GLOB_BRACE) ?: [];

            // Avoid fatal errors when no image files are found.
            if ($images !== []) {
                $randomImage = $images[array_rand($images)];
            } else {
                $randomImage = null;
            }
            ?>
    </div>
</div>
</section>