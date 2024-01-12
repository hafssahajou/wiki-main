<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>
        <?= $title ?>
    </title>
    <title>Wiki Wiki</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="/Wiki/public/img/apple-touch-icon.png" rel="apple-touch-icon">

    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <link href="/Wiki/public/vendor/aos/aos.css" rel="stylesheet">
    <link href="/Wiki/public/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/Wiki/public/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="/Wiki/public/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="/Wiki/public/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="/Wiki/public/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <link href="/Wiki/public/css/style.css" rel="stylesheet">


</head>

<body>
        <?= $content ?>
        <!-- ======= Footer ======= -->
        <footer id="footer">
            <div class="footer-top">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-4 col-md-6">
                            <div class="footer-info">
                                <h3>Bootslander</h3>
                                <p class="pb-3"><em>Qui repudiandae et eum dolores alias sed ea. Qui suscipit veniam
                                        excepturi quod.</em>
                                </p>
                                <p>
                                    A108 Adam Street <br>
                                    NY 535022, USA<br><br>
                                    <strong>Phone:</strong> +1 5589 55488 55<br>
                                    <strong>Email:</strong> info@example.com<br>
                                </p>
                                <div class="social-links mt-3">
                                    <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                                    <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                                    <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                                    <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                                    <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-2 col-md-6 footer-links">
                            <h4>Useful Links</h4>
                            <ul>
                                <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                                <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
                                <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
                                <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
                                <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
                            </ul>
                        </div>

                        <div class="col-lg-2 col-md-6 footer-links">
                            <h4>Our Services</h4>
                            <ul>
                                <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
                                <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
                                <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
                                <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
                                <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
                            </ul>
                        </div>

                        <div class="col-lg-4 col-md-6 footer-newsletter">
                            <h4>Our Newsletter</h4>
                            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
                            <form action="" method="post">
                                <input type="email" name="email"><input type="submit" value="Subscribe">
                            </form>

                        </div>

                    </div>
                </div>
            </div>

            <div class="container">
                <div class="copyright">
                    &copy; Copyright <strong><span>Bootslander</span></strong>. All Rights Reserved
                </div>
                <div class="credits">
                    <!-- All the links in the footer should remain intact. -->
                    <!-- You can delete the links only if you purchased the pro version. -->
                    <!-- Licensing information: https://bootstrapmade.com/license/ -->
                    <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/bootslander-free-bootstrap-landing-page-template/ -->
                    Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                </div>
            </div>
        </footer><!-- End Footer -->

        <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
                class="bi bi-arrow-up-short"></i></a>

        <!-- Vendor JS Files -->
        <script src="/Wiki/public/vendor/purecounter/purecounter_vanilla.js"></script>
        <script src="/Wiki/public/vendor/aos/aos.js"></script>
        <script src="/Wiki/public/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="/Wiki/public/vendor/swiper/swiper-bundle.min.js"></script>
        <script src="/Wiki/public/vendor/php-email-form/validate.js"></script>

        <!-- Template Main JS File -->
        <script src="/Wiki/public/js/main.js"></script>
        <script src="https://cdn.tiny.cloud/1/f9ggt3dqixvgwwjjoxp3xio6hgf0r72qnuvll71z6g0sckld/tinymce/6/tinymce.min.js"
            referrerpolicy="origin"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

        <!-- Include Select2 JS -->



        <script>
            tinymce.init({
                selector: 'textarea',
                plugins: 'ai tinycomments mentions anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed permanentpen footnotes advtemplate advtable advcode editimage tableofcontents mergetags powerpaste tinymcespellchecker autocorrect a11ychecker typography inlinecss',
                toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | align lineheight | tinycomments | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
                tinycomments_mode: 'embedded',
                tinycomments_author: 'Author name',
                mergetags_list: [
                    { value: 'First.Name', title: 'First Name' },
                    { value: 'Email', title: 'Email' },
                ],
                ai_request: (request, respondWith) => respondWith.string(() => Promise.reject("See docs to implement AI Assistant")),
            });
        </script>
        <script>
            let image = document.getElementById("image");
            let input = document.getElementById("input-file");

            input.onchange = () => {
                image.src = URL.createObjectURL(input.files[0]);
            }
        </script>

</body>

</html>