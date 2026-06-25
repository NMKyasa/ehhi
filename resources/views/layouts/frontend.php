<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
     <title>
        <?= htmlspecialchars(
            $title
            ??
            ($settings['meta_title']
            ?? 'EMPOWER HER HEALTH INITIATIVE (EHHI)')
        ) ?>
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- SEO -->
<meta
    name="description"
    content="<?= htmlspecialchars(
        $description
        ??
        ($settings['meta_description']
        ?? '')
    ) ?>"
>

<meta
    name="keywords"
    content="<?= htmlspecialchars(
        $keywords
        ??
        ($settings['meta_keywords']
        ?? '')
    ) ?>"
>

<!-- Favicon -->
<link
    rel="icon"
    href="<?= !empty($settings['favicon'])
        ? asset($settings['favicon'])
        : '/assets/frontend/img/favicon.ico'
    ?>"
>

<!-- Google Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Roboto:wght@500;700;900&display=swap" rel="stylesheet">

<!-- Icons -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

<!-- Libraries -->
<link href="/assets/frontend/lib/animate/animate.min.css" rel="stylesheet">

<link href="/assets/frontend/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

<link href="/assets/frontend/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

<!-- Bootstrap -->
<link href="/assets/frontend/css/bootstrap.min.css" rel="stylesheet">

<!-- Main CSS -->
<link href="/assets/frontend/css/style.css" rel="stylesheet">

<!-- Style new CSS -->
<link href="/assets/frontend/css/style_new.css" rel="stylesheet">

</head>

<body>

<!-- Header -->
<?php include __DIR__ . '/../partials/frontend/header.php'; ?>

<!-- Header Start -->
<?php if (!empty($pageHeaderTitle)): ?>

    <?php include __DIR__ . '/../partials/frontend/header_start.php'; ?>

<?php endif; ?>

<!-- Dynamic Page Content -->
<?= $content ?>

<!-- Footer -->
<?php include __DIR__ . '/../partials/frontend/footer.php'; ?>

<!-- JavaScript Libraries -->
<script src="/assets/frontend/js/jquery-3.4.1.min.js"></script>

<script src="/assets/frontend/js/bootstrap.bundle.min.js"></script>

<script src="/assets/frontend/lib/wow/wow.min.js"></script>

<script src="/assets/frontend/lib/easing/easing.min.js"></script>

<script src="/assets/frontend/lib/waypoints/waypoints.min.js"></script>

<script src="/assets/frontend/lib/counterup/counterup.min.js"></script>

<script src="/assets/frontend/lib/owlcarousel/owl.carousel.min.js"></script>

<script src="/assets/frontend/lib/isotope/isotope.pkgd.min.js"></script>

<script src="/assets/frontend/lib/lightbox/js/lightbox.min.js"></script>

<script src="https://unpkg.com/imagesloaded@5/imagesloaded.pkgd.min.js"></script>

<!-- Main Javascript -->
<script src="/assets/frontend/js/main.js"></script>

<!-- Custom JS -->
<script src="/assets/frontend/js/script.js"></script>

</body>
</html>
