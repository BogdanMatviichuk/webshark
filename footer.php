<footer>
    <div class="container">
        <div class="footer__wrapper">
            <a href="/" class="logo">
                <span>Web.</span><span>shark</span>
            </a>

            <div class="footer__info-wrapper">
                <div class="footer__info">
                    <h4>WebShark</h4>
                    <p>Besöksadress</p>
                    <p>Kristian lV:s väg 3</p>
                    <p>Trade Center</p>
                    <p>301 18 Halmstad</p>
                </div>

                <div class="footer__info">
                    <h4>Kontakt</h4>
                    <p>info@WebShark.se</p>
                    <p>+46 10-1887000</p>
                    <p>Allmänna villkor</p>
                    <p>Integritetspolicy</p>
                </div>
            </div>

            <ul class="footer__social-list">
                <li><a href="#" aria-label="Facebook"></a></li>
                <li><a href="#" aria-label="Linkedin"></a></li>
                <li><a href="#" aria-label="Twitter"></a></li>
            </ul>
        </div>
    </div>
</footer>


<script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js"
        integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG"
        crossorigin="anonymous"
></script>
<script src="<?php echo get_template_directory_uri();?>/js/main.js"></script>
<script src="<?php echo get_template_directory_uri();?>/js/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri();?>/js/owl.carousel.min.js"></script>

<script>
    $(document).ready(function(){
        $(".whatiIs-slider").owlCarousel({
            nav: true,
            responsive: {
                // breakpoint from 0 up
                0 : {
                    items:1
                },
                // breakpoint from 480 up
                480 : {
                    items:1
                },
                // breakpoint from 768 up
                768 : {
                    items:2
                },
                992 : {
                    items:3
                }
            }
        });
    });
</script>
</body>
</html>