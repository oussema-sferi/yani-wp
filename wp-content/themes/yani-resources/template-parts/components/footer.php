<?php
/**
 * Footer Template Part
 *
 * @package Yani Resources
 */
?>
<footer class="footer">
    <div class="container footer__top">
        <div class="row align-items-center g-4">
            <div class="col-md-4 footer__column">
                <h4 class="footer__heading">Contact</h4>
                <p class="footer__text">Follow Us</p>
                <div class="footer__social">in</div>
            </div>
            <div class="col-md-4 footer__column footer__column--center">
                <div class="footer__logo"></div>
            </div>
            <div class="col-md-4 footer__column"></div>
        </div>
    </div>
    <div class="container footer__middle">
        <div class="row g-4">
            <div class="col-md-4 footer__contact">
                <div class="footer__contact-icon">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/phone-white.svg' ); ?>" alt="Phone Icon" class="footer__icon-img">
                </div>
                <h5 class="footer__contact-name">Nathan Wilson</h5>
                <p class="footer__contact-info">nathan@yaniresources.com.au</p>
                <p class="footer__contact-info">0404 653 168</p>
            </div>
            <div class="col-md-4 footer__contact">
                <div class="footer__contact-icon">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/phone-white.svg' ); ?>" alt="Phone Icon" class="footer__icon-img">
                </div>
                <h5 class="footer__contact-name">Cam Gibson</h5>
                <p class="footer__contact-info">cam@yaniresources.com.au</p>
                <p class="footer__contact-info">0400 040 950</p>
            </div>
            <div class="col-md-4 footer__contact">
                <div class="footer__contact-icon">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/mail-white.svg' ); ?>" alt="Phone Icon" class="footer__icon-img">
                </div>
                <h5 class="footer__contact-name">Address</h5>
                <p class="footer__contact-info">Unit 2/1 Dampier Road, Welshpool WA 6106</p>
                <p class="footer__contact-info">ABN: 54 653 450 012 | ACN 653 450 012</p>
                <p class="footer__contact-info">EC16722</p>
            </div>
        </div>
    </div>
    <div class="container footer__bottom">
        <div class="row align-items-center g-4">
            <div class="col-md-9 footer__acknowledgement">
                <p class="footer__acknowledgement-text">We acknowledge the Traditional Custodians of Country throughout Australia. We recognise their connection
                    to traditional lands and waters and pay our respects to their Elders past, present and emerging.</p>
            </div>
            <div class="col-md-3 footer__badges">
                <div class="footer__badges-wrapper">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/sn.png' ); ?>" alt="Supply Nation" class="footer__badge-image">
                    <p class="footer__badge-text">Proudly<br> Indigenous<br> Owned</p>
                </div>
            </div>
        </div>
    </div>
    <div class="footer__copyright">
        &copy; Copyright Yani Resources <?php echo date( 'Y' ); ?>. <a href="#" class="footer__copyright-link">Privacy Policy</a>
    </div>
</footer>

