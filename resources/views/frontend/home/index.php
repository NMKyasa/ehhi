    <!-- Carousel Start -->
    <div class="container-fluid p-0 pb-5">
        <div class="owl-carousel header-carousel position-relative">

            <?php foreach (
                $sliders
                as
                $slider
            ): ?>

                <div class="owl-carousel-item position-relative">

                    <img
                        class="img-fluid"
                        src="<?= url(
                            $slider['file_path']
                        ) ?>"
                        alt="<?= htmlspecialchars(
                            $slider['title']
                        ) ?>"
                    >

                    <div class="carousel-inner">

                        <div class="container">

                            <div class="row justify-content-center">

                                <div class="col-lg-8 text-center">

                                    <h1
                                        class="display-3 text-white animated slideInDown mb-4"
                                    >

                                        <?= htmlspecialchars(
                                            $slider['title']
                                        ) ?>

                                    </h1>

                                    <p
                                        class="fs-5 text-white mb-4 pb-2"
                                    >

                                        <?= htmlspecialchars(
                                            $slider['subtitle']
                                        ) ?>

                                    </p>

                                    <?php if (
                                        !empty(
                                            $slider['button_url']
                                        )
                                    ): ?>

                                        <a
                                            href="<?= htmlspecialchars(
                                                $slider['button_url']
                                            ) ?>"
                                            class="btn btn-primary rounded-pill py-md-3 px-md-5 me-3"
                                        >

                                            <?= htmlspecialchars(
                                                $slider['button_text']
                                            ) ?>

                                        </a>

                                    <?php endif; ?>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            <?php endforeach; ?>

        </div>
    </div>
    <!-- Carousel End -->


    <!-- Impact Start -->
    <div class="container-xxl py-5 impact-section">

        <div class="container">

            <div
                class="text-center wow fadeInUp"
                data-wow-delay="0.1s"
            >

                <div
                    class="bg-primary mb-3 mx-auto"
                    style="width:60px;height:2px;"
                ></div>

                <h1 class="display-5 mb-5">

                    Our Impact

                </h1>

            </div>

            <div class="row g-4">

                <?php foreach ($impacts as $index => $impact): ?>

                    <div
                        class="col-md-6 col-lg-3 wow fadeInUp"
                        data-wow-delay="<?= ($index + 1) * 0.2 ?>s"
                    >

                        <div
                            class="h-100 bg-dark text-center p-4 p-xl-5"
                        >

                            <h1
                                class="display-3 text-primary mb-3"
                            >

                                <?= htmlspecialchars(
                                    $impact['value']
                                ) ?>

                            </h1>

                            <h5 class="text-white">

                                <?= htmlspecialchars(
                                    $impact['label']
                                ) ?>

                            </h5>

                        </div>

                    </div>

                <?php endforeach; ?>

            </div>

        </div>

    </div>
    <!-- Impact End -->

        <!-- About Start -->
    <div class="container-fluid about-section my-5 px-lg-0">
        <div class="container about px-lg-0">
            <div class="row g-0 mx-lg-0 ab-grid-row">
                <div class="col-lg-6 ps-lg-0 ab-img-col">
                    <div class="position-relative h-100 ab-img-wrap">
                        <img
                            class="position-absolute img-fluid w-100 h-100 ab-main-img"
                            src="/ehhi/public/<?= htmlspecialchars($aboutImage['file_path'] ?? 'assets/frontend/img/family_planning_awareness2.jpeg') ?>"
                            style="object-fit: cover;"
                            alt="<?= htmlspecialchars($settings['about_title'] ?? 'About Us') ?>"
                        >
                        <div class="ab-img-frame"></div>
                        <div class="ab-img-badge">
                            <div class="ab-img-badge-icon"><i class="fa fa-shield-alt"></i></div>
                            <div class="ab-img-badge-text">
                                <strong><?= (int)($settings['about_experience_years'] ?? 0) ?>+ Years</strong>
                                Existence
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 about-text py-5 wow fadeIn" data-wow-delay="0.5s">
                    <div class="p-lg-5 pe-lg-0">
                        <div class="ab-tag">
                            <span></span>
                            <em>About Us</em>
                        </div>
                        <h1 class="display-5 mb-4 ab-title">
                            <?= htmlspecialchars($settings['about_title'] ?? 'About Us') ?>
                        </h1>
                        <p class="mb-4 pb-2 ab-text">
                            <?= nl2br(htmlspecialchars($settings['about_content'] ?? '')) ?>
                        </p>

                        <div class="row g-4 mb-4 pb-3 ab-mv-row">
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.1s">
                                <div class="ab-mv-card">
                                    <h5 class="mb-3">Our Mission</h5>
                                    <span><?= nl2br(htmlspecialchars($settings['about_mission'] ?? '')) ?></span>
                                </div>
                            </div>
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.3s">
                                <div class="ab-mv-card">
                                    <h5 class="mb-3">Our Vision</h5>
                                    <span><?= nl2br(htmlspecialchars($settings['about_vision'] ?? '')) ?></span>
                                </div>
                            </div>
                        </div>

                        <div class="row g-4 mb-4 pb-3 ab-stats-row">
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.1s">
                                <div class="d-flex align-items-center ab-stat">
                                    <div class="ab-stat-icon">
                                        <i class="fa fa-medal"></i>
                                    </div>
                                    <div class="ms-4">
                                        <h2 class="mb-1"><?= (int)($settings['about_experience_years'] ?? 0) ?>+</h2>
                                        <p class="fw-medium text-primary mb-0">Years Experience</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.3s">
                                <div class="d-flex align-items-center ab-stat">
                                    <div class="ab-stat-icon">
                                        <i class="fa fa-users"></i>
                                    </div>
                                    <div class="ms-4">
                                        <h2 class="mb-1">100+</h2>
                                        <p class="fw-medium text-primary mb-0">Families Impacted</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <a
                            href="<?= htmlspecialchars($settings['about_button_url'] ?? '#') ?>"
                            class="btn btn-primary rounded-pill py-3 px-5 ab-cta"
                        >
                            <?= htmlspecialchars($settings['about_button_text'] ?? 'Learn More') ?>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


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

    <!-- Feature Start -->
    <div class="container-fluid feature-section my-5 px-lg-0">
        <div class="container feature px-lg-0">
            <div class="row g-0 mx-lg-0 ft-row">

                <div class="col-lg-6 feature-text py-5 wow fadeIn" data-wow-delay="0.5s">
                    <div class="p-lg-5 ps-lg-0">
                        <div class="ft-tag">
                            <span></span><em>Why EHHI</em>
                        </div>
                        <h1 class="display-5 mb-4 ft-title">Empowering Girls Through Knowledge, Access & Support</h1>
                        <p class="mb-4 pb-2 ft-text">
                            At Empower Her Health Initiative (EHHI), we believe that no girl
                            or woman should be left behind on her journey toward health and
                            wellness. We work directly within schools and communities to
                            provide evidence-based health education, menstrual hygiene support,
                            mentorship, and advocacy that empower girls and women to make
                            informed choices and realize their full potential.
                        </p>

                        <div class="row g-3 ft-grid2">
                            <div class="col-6">
                                <div class="ft-item">
                                    <div class="ft-icon"><i class="fa fa-shield-alt"></i></div>
                                    <div>
                                        <div class="ft-item-label">Evidence-Based</div>
                                        <div class="ft-item-title">Programs</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="ft-item">
                                    <div class="ft-icon"><i class="fa fa-award"></i></div>
                                    <div>
                                        <div class="ft-item-label">Compassionate</div>
                                        <div class="ft-item-title">Support</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="ft-item">
                                    <div class="ft-icon"><i class="fa fa-video"></i></div>
                                    <div>
                                        <div class="ft-item-label">Community-Led</div>
                                        <div class="ft-item-title">Approach</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="ft-item">
                                    <div class="ft-icon"><i class="fa fa-headset"></i></div>
                                    <div>
                                        <div class="ft-item-label">Lasting</div>
                                        <div class="ft-item-title">Impact</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 pe-lg-0 ft-img-col">
                    <div class="position-relative h-100 ft-img-wrap">
                        <img
                            class="position-absolute img-fluid w-100 h-100"
                            src="<?= asset('assets/frontend/img/ehhi_family_planning_awareness1.jpeg') ?>"
                            style="object-fit: cover;"
                            alt="Shasta Home Protection Services"
                        >
                        <div class="ft-img-frame"></div>
                        <div class="ft-img-badge">
                            <i class="fa fa-check-circle"></i>
                            <div class="ft-img-badge-text"><strong>No Girl</strong><br>Left Behind</div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Feature End -->



    <!-- Contact Start -->
    <div class="container-fluid contact-section overflow-hidden px-lg-0">
        <div class="container contact px-lg-0">
            <div class="row g-0 mx-lg-0 ct-row">

                <div class="col-lg-5 contact-text py-5 wow fadeIn" data-wow-delay="0.5s">
                    <div class="p-lg-5 ps-lg-0">
                        <div class="ct-tag">
                            <span></span><em>Contact Us</em>
                        </div>
                        <h1 class="display-5 mb-4 ct-title">Let's Create Healthier Futures Together</h1>
                        <p class="mb-4 ct-text">
                            Whether you would like to partner with us, volunteer, support our programmes,
                            request more information, or simply learn more about our work, we'd love to hear
                            from you. Together, we can ensure that no girl or woman is left behind on her
                            journey toward health and wellness.
                        </p>

                        <div class="ct-info-list">
                            <div class="ct-info-item">
                                <div class="ct-info-icon"><i class="fa fa-map-marker-alt"></i></div>
                                <div>
                                    <div class="ct-info-label">Location</div>
                                    <div class="ct-info-value"><?= htmlspecialchars($settings['office_address'] ?? '') ?></div>
                                </div>
                            </div>
                            <div class="ct-info-item">
                                <div class="ct-info-icon"><i class="fa fa-phone-alt"></i></div>
                                <div>
                                    <div class="ct-info-label">Phone</div>
                                    <div class="ct-info-value"><?= htmlspecialchars($settings['phone_number'] ?? '') ?></div>
                                </div>
                            </div>
                            <div class="ct-info-item">
                                <div class="ct-info-icon"><i class="fa fa-envelope"></i></div>
                                <div>
                                    <div class="ct-info-label">Email</div>
                                    <div class="ct-info-value"><?= htmlspecialchars($settings['company_email'] ?? '') ?></div>
                                </div>
                            </div>
                            <div class="ct-info-item">
                                <div class="ct-info-icon"><i class="far fa-clock"></i></div>
                                <div>
                                    <div class="ct-info-label">Working Hours</div>
                                    <div class="ct-info-value"><?= htmlspecialchars($settings['working_hours'] ?? '') ?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-7 pe-lg-0 ct-form-col py-5 wow fadeIn" data-wow-delay="0.7s">
                    <div class="ct-form-wrap">

                        <?php if (!empty($_SESSION['success'])): ?>
                            <div class="ct-success">
                                <i class="fa fa-check-circle"></i>
                                <?= $_SESSION['success'] ?>
                            </div>
                            <?php unset($_SESSION['success']); ?>
                        <?php endif; ?>

                        <h3 class="mb-3">
                            Send Us a Message
                        </h3>

                        <p class="mb-4 ct-form-text">
                            We'd be happy to answer your questions and explore how we can work together.
                        </p>
                        <form method="POST" action="<?= url('contact') ?>" class="ct-form">

                            <input type="hidden" name="_token" value="<?= csrf_token() ?>">

                            <div class="row g-3">

                                <div class="col-md-6 ct-field">
                                    <label>Your Name</label>
                                    <input type="text" name="name" placeholder="John Doe" required>
                                </div>

                                <div class="col-md-6 ct-field">
                                    <label>Your Email</label>
                                    <input type="email" name="email" placeholder="john@example.com" required>
                                </div>

                                <div class="col-md-6 ct-field">
                                    <label>Phone Number</label>
                                    <input type="number" name="phone" placeholder="07XX XXX XXX">
                                </div>

                                <div class="col-md-6 ct-field">
                                    <label>Subject</label>
                                    <input type="text" name="subject" placeholder="How can we help?">
                                </div>

                                <div class="col-12 ct-field">
                                    <label>Message</label>
                                    <textarea name="message" placeholder="Leave a message here..." rows="5"></textarea>
                                </div>

                                <div class="col-12">
                                    <button class="ct-submit" type="submit">
                                        Send Message <i class="fa fa-arrow-right"></i>
                                    </button>
                                </div>

                            </div>

                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Contact End -->


    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <div class="bg-primary mb-3 mx-auto" style="width: 60px; height: 2px;"></div>
                <h1 class="display-5 mb-5">Team Members</h1>
            </div>
            <div class="row g-4">

                <?php foreach ($teamMembers as $member): ?>

                    <div
                        class="col-lg-3 col-md-6 wow fadeInUp"
                        data-wow-delay="0.1s"
                    >

                        <div class="team-item">

                            <div class="overflow-hidden position-relative">

                                <?php if (!empty($member['file_path'])): ?>

                                    <img
                                        class="img-fluid"
                                        src="<?= url($member['file_path']) ?>"
                                        alt="<?= htmlspecialchars(
                                            $member['name']
                                        ) ?>"
                                    >

                                <?php else: ?>

                                    <img
                                        class="img-fluid"
                                        src="<?= url('assets/frontend/img/team-1.jpg') ?>"
                                        alt="<?= htmlspecialchars(
                                            $member['name']
                                        ) ?>"
                                    >

                                <?php endif; ?>

                                <div class="team-social">

                                    <?php if (!empty($member['facebook_url'])): ?>

                                        <a
                                            class="btn btn-square btn-dark rounded-circle m-1"
                                            href="<?= htmlspecialchars(
                                                $member['facebook_url']
                                            ) ?>"
                                            target="_blank"
                                        >
                                            <i class="fab fa-facebook-f"></i>
                                        </a>

                                    <?php endif; ?>

                                    <?php if (!empty($member['twitter_url'])): ?>

                                        <a
                                            class="btn btn-square btn-dark rounded-circle m-1"
                                            href="<?= htmlspecialchars(
                                                $member['twitter_url']
                                            ) ?>"
                                            target="_blank"
                                        >
                                            <i class="fab fa-twitter"></i>
                                        </a>

                                    <?php endif; ?>

                                    <?php if (!empty($member['linkedin_url'])): ?>

                                        <a
                                            class="btn btn-square btn-dark rounded-circle m-1"
                                            href="<?= htmlspecialchars(
                                                $member['linkedin_url']
                                            ) ?>"
                                            target="_blank"
                                        >
                                            <i class="fab fa-linkedin-in"></i>
                                        </a>

                                    <?php endif; ?>

                                    <?php if (!empty($member['instagram_url'])): ?>

                                        <a
                                            class="btn btn-square btn-dark rounded-circle m-1"
                                            href="<?= htmlspecialchars(
                                                $member['instagram_url']
                                            ) ?>"
                                            target="_blank"
                                        >
                                            <i class="fab fa-instagram"></i>
                                        </a>

                                    <?php endif; ?>

                                </div>

                            </div>

                            <div class="text-center p-4">

                                <h5 class="mb-1">

                                    <?= htmlspecialchars(
                                        $member['name']
                                    ) ?>

                                </h5>

                                <span class="text-primary d-block mb-2">

                                    <?= htmlspecialchars(
                                        $member['position']
                                        ?? ''
                                    ) ?>

                                </span>

                                <?php if (!empty($member['bio'])): ?>

                                    <p class="small text-muted mb-0"
                                        data-full-bio="<?= htmlspecialchars(strip_tags($member['bio'])) ?>">
                                        <?= htmlspecialchars(mb_strimwidth(strip_tags($member['bio']), 0, 120, '...')) ?>
                                    </p>

                                <?php endif; ?>

                            </div>

                        </div>

                    </div>

                <?php endforeach; ?>

            </div>
        </div>
    </div>
    <!-- Team End -->


    <!-- Testimonial Start -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <div class="bg-primary mb-3 mx-auto" style="width: 60px; height: 2px;"></div>
                <h1 class="display-5 mb-5">Testimonial</h1>
            </div>
            <div
                class="owl-carousel testimonial-carousel wow fadeInUp"
                data-wow-delay="0.1s"
            >

                <?php foreach ($testimonials as $testimonial): ?>

                    <?php

                    $photo =
                        !empty($testimonial['file_path'])
                        ? url($testimonial['file_path'])
                        : url('assets/frontend/img/testimonial-1.jpg');

                    ?>

                    <div
                        class="testimonial-item text-center"
                        data-dot="<img class='img-fluid' src='<?= $photo ?>' alt='<?= htmlspecialchars($testimonial['name']) ?>'>"
                    >

                    <div class="mb-3">

                        <?php for ($i = 1; $i <= 5; $i++): ?>

                            <?php if ($i <= (int)$testimonial['rating']): ?>

                                <i class="fa fa-star text-warning"></i>

                            <?php else: ?>

                                <i class="far fa-star text-warning"></i>

                            <?php endif; ?>

                        <?php endfor; ?>

                    </div>

                        <p class="fs-5">

                            <?= nl2br(
                                htmlspecialchars(
                                    $testimonial['message']
                                )
                            ) ?>

                        </p>

                        <h4>

                            <?= htmlspecialchars(
                                $testimonial['name']
                            ) ?>

                        </h4>

                        <span class="text-primary">

                            <?= htmlspecialchars(
                                trim(
                                    ($testimonial['position'] ?? '')
                                    .
                                    (
                                        !empty($testimonial['company'])
                                        ? ' - ' . $testimonial['company']
                                        : ''
                                    )
                                )
                            ) ?>

                        </span>

                    </div>

                <?php endforeach; ?>

            </div>
        </div>
    </div>
    <!-- Testimonial End -->