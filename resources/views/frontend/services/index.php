<!-- Services Start -->
    <div class="container-xxl py-5 services-section">
        <div class="container">

            <div class="text-center wow fadeInUp sv-head">
                <div class="sv-tag">
                    <span></span><em>What We Do</em><span></span>
                </div>
                <h1 class="display-5 mb-0 sv-title">Programs That Empower Girls and Women</h1>
                <p class="sv-subtitle mt-3">
                    Through education, mentorship, health awareness, and community engagement,
                    we equip girls and women with the knowledge, support, and opportunities
                    they need to thrive.
                </p>
            </div>

            <div class="owl-carousel services-carousel">
                <?php foreach ($services as $service): ?>
                    <div class="sv-card">
                        <?php if (!empty($service['file_path'])): ?>
                            <a href="<?= url('services/' . $service['slug']) ?>" class="sv-card-img">
                                <img
                                    src="<?= url($service['file_path']) ?>"
                                    alt="<?= htmlspecialchars($service['title']) ?>"
                                >
                            </a>
                        <?php endif; ?>

                        <div class="sv-card-body">
                            <h4>
                                <a href="<?= url('services/' . $service['slug']) ?>">
                                    <?= htmlspecialchars($service['title']) ?>
                                </a>
                            </h4>

                            <?php if (!empty($service['summary'])): ?>
                                <p><?= htmlspecialchars(mb_strimwidth($service['summary'], 0, 180, '...')) ?></p>
                            <?php endif; ?>

                            <a href="<?= url('services/' . $service['slug']) ?>" class="sv-card-link">
                                Learn More <i class="fa fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

            <!-- CTA -->
            <div class="text-center mt-5 sv-cta-wrap">

                <p class="mb-4">
                    Together, we can create healthier futures for girls and women across Uganda.
                </p>

                <a href="<?= url('contact') ?>" class="btn sv-cta-btn">
                    Get Involved
                </a>

            </div>

        </div>
    </div>
    <!-- Services End -->