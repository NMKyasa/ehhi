<!-- Service Details Start -->
<div class="container py-5 sd-section">

    <!-- Back Button -->
    <a href="<?= url('services') ?>" class="sd-back">
        <i class="fa fa-arrow-left"></i> Back to Programs
    </a>

    <!-- Service Hero -->
    <div class="sh-hero mb-5">
        <?php if (!empty($images)): ?>
            <img
                src="<?= url($images[0]['file_path']) ?>"
                alt="<?= htmlspecialchars($service['title']) ?>"
            >
        <?php endif; ?>
        <div class="sh-hero-overlay"></div>
        <div class="sh-hero-content">
            <div class="sh-tag"><span></span>Our Program</div>
            <h1 class="sh-title"><?= htmlspecialchars($service['title']) ?></h1>
            <?php if (!empty($service['summary'])): ?>
                <p class="sh-lead"><?= htmlspecialchars($service['summary']) ?></p>
            <?php endif; ?>
        </div>
    </div>

    <!-- Service Content -->
    <div class="mb-5 sh-content">
        <?= $service['body'] ?>
    </div>

    <!-- Service Gallery -->
    <?php if (count($images) > 1): ?>
        <div class="mt-5 sd-gallery-section">
            <div class="text-center mb-4 sd-gallery-head">
                <h3>Program Gallery</h3>
            </div>
            <div class="row g-4">
                <?php foreach ($images as $image): ?>
                    <div class="col-md-4 col-sm-6">
                        <a href="<?= url($image['file_path']) ?>" data-lightbox="service-gallery" class="sd-gallery-item">
                            <img
                                src="<?= url($image['file_path']) ?>"
                                class="img-fluid"
                                alt="<?= htmlspecialchars($service['title']) ?>"
                            >
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    <?php endif; ?>

    <!-- Call To Action -->
    <div class="sd-cta mt-5">
        <h3>Join Us in Empowering Girls and Women</h3>
        <p>
            Together, we can ensure that every girl and woman has access to
            health information, menstrual hygiene support, mentorship,
            and the opportunities they need to thrive.
            One girl, one community at a time.
        </p>
        <a href="<?= url('contact') ?>" class="sd-cta-btn">
            Get Involved <i class="fa fa-arrow-right"></i>
        </a>
    </div>

    <!-- Related Services -->
    <?php if (!empty($relatedServices)): ?>
        <div class="rel-section">
            <div class="rel-head">
                <h3>Explore Other Programs</h3>
                <a href="<?= url('services') ?>">View All Programs <i class="fa fa-arrow-right"></i></a>
            </div>
            <div class="rel-grid">
                <?php foreach ($relatedServices as $related): ?>
                    <a href="<?= url('services/' . $related['slug']) ?>" class="rel-card">
                        <?php if (!empty($related['file_path'])): ?>
                            <div class="rel-card-img">
                                <img src="<?= url($related['file_path']) ?>" alt="<?= htmlspecialchars($related['title']) ?>">
                            </div>
                        <?php endif; ?>
                        <div class="rel-card-body">
                            <h5><?= htmlspecialchars($related['title']) ?></h5>
                            <span>Learn More <i class="fa fa-arrow-right"></i></span>
                        </div>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>
    <?php endif; ?>

</div>
<!-- Service Details End -->