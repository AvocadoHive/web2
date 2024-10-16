<?php
    $discovery_motions = [
        ['title' => 'Drafting of Complaints and Petitions', 'link' => '1-Drafting of Complaints and Petitions.png'],
        ['title' => 'Document Review and Management', 'link' => '2-Document Review and Management.png'],
        ['title' => 'Drafting Meet & Confer Letter', 'link' => '3-Drafting Meet & Confer Letter.png'],
        ['title' => 'Interrogatories', 'link' => '4-Interrogatories.png'],
        ['title' => 'Requests for Production', 'link' => '5-Requests for Production.png'],
        ['title' => 'Requests for Admissions', 'link' => '6-Requests for Admissions.png'],
        ['title' => 'Depositions', 'link' => '7-Depositions.png'],
        ['title' => 'Electronic Discovery', 'link' => '8-Electronic Discovery.png'],
        ['title' => 'Third-Party Discovery', 'link' => '9-Third-Party Discovery.png'],
        ['title' => 'Identification of Expert Witnesses', 'link' => '10-Identification of Expert Witnesses.png'],
        ['title' => 'Expert Witness Retention', 'link' => '11-Expert Witness Retention.png'],
        ['title' => 'Expert Witness Disclosure', 'link' => '12-Expert Witness Disclosure.png'],
        ['title' => 'Expert Report Preparation', 'link' => '13-Expert Report Preparation.png'],
        ['title' => 'Expert Witness Depositions', 'link' => '14-Expert Witness Depositions.png'],
        ['title' => 'Expert Witness Communication Management', 'link' => '15-Expert Witness Communication Management.png'],
        ['title' => 'Expert Discovery Motions', 'link' => '16-Expert Discovery Motions.png'],
        ['title' => 'Review of Opposing Experts', 'link' => '17-Review of Opposing Experts.png'],
        ['title' => 'Expert Witness Preparation for Trial', 'link' => '18-Expert Witness Preparation for Trial.png'],
        ['title' => 'Research and Analysis', 'link' => '19-Research and Analysis.png'],
        ['title' => 'Drafting the Motion', 'link' => '20-Drafting the Motion.png'],
        ['title' => 'Review and Revision', 'link' => '21-Review and Revision.png'],
        ['title' => 'Filing and Service', 'link' => '22-Filing and Service.png'],
        ['title' => 'Review of the Motion', 'link' => '23-Review of the Motion.png'],
        ['title' => 'Drafting the Opposition', 'link' => '24-Drafting the Opposition.png'],
        ['title' => 'Coordinating and Filing', 'link' => '25-Coordinating and Filing.png'],
        ['title' => 'Legal Issue Identification', 'link' => '26-Legal Issue Identification.png'],
        ['title' => 'Comprehensive Legal Research', 'link' => '27-Comprehensive Legal Research.png'],
        ['title' => 'Preparation of Legal Memoranda', 'link' => '28-Preparation of Legal Memoranda.png'],
        ['title' => 'Drafting the Brief', 'link' => '29-Drafting the Brief.png'],
        ['title' => 'Supporting Legal Arguments', 'link' => '30-Supporting Legal Arguments.png'],
        ['title' => 'Editing and Finalizing', 'link' => '31-Editing and Finalizing.png'],
        ['title' => 'Document Preparation', 'link' => '32-Document Preparation.png'],
        ['title' => 'Organizing Evidence and Exhibits', 'link' => '33-Organizing Evidence and Exhibits.png'],
    ];

    $prelist = [
        ['title' => 'General Administrative Tasks', 'link' => '1-General Administrative Tasks.png'],
        ['title' => 'Calendaring & CMS Management', 'link' => '2-Calendaring  & CMS Management.png'],
        ['title' => 'Liasoning and Data Entry', 'link' => '3-Liasoning and Data Entry.png'],
        ['title' => 'Demand Writing', 'link' => '4-Demand Writing.png'],
        ['title' => 'Heavy Phone Time and Intake (Coming Soon)', 'link' => 'Heavy Phone Time and Intake.png'],
    ];
?>
<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>

        <link rel="stylesheet" href="/assets/css/fonts.css">
        <link rel="stylesheet" href="/assets/css/style.css">
        <link rel="stylesheet" href="/assets/css/services.css">

        <link rel="stylesheet" href="/assets/slick/slick.css">
		<link rel="stylesheet" href="/assets/slick/slick-theme.css">

        <script src="https://kit.fontawesome.com/28b5b7d92f.js" crossorigin="anonymous"></script>

        <link href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Inter+Tight:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    </head>
    <body>
        <div class="d-main-container">
            <div class="d-main-inner-container">
                <div class="d-header-part">
                    <div class="d-header-container">
                        <div class="d-head-top">
                            <?php include '../global/menu.php'; ?>
                        </div>
                        <div class="d-head-middle">
                            <div class="d-ah-into">Our Services</div>
                            <div class="d-ah-sub-into">Pay-as-you-go, 24/7 team so you can handle your discovery & motion work needs with confidence.</div>

                        </div>
                        <div class="d-ah-head-options">
                            <ul>
                                <li><a href="#">Start for free</a></li>
                                <li><a href="#">See Demo</a></li>
                            </ul>
                        </div>
                        <div class="d-expiry-credits">
                            <div class="d-expiry-creds-inner">
                                <div class="d-exp-creds-left">
                                    <div class="n-exp-creds">
                                        <ul>
                                            <li><i class="fa-solid fa-circle-check"></i> <span>24/7 on-demand team</span></li>
                                            <li><i class="fa-solid fa-circle-check"></i> <span>Specialized in Discovery & Motion Work for Plaintiffs Personal Injury law firms</span></li>
                                            <li><i class="fa-solid fa-circle-check"></i> <span>Collaborative Platform & Easy Task Delegation </span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        
                    </div>
                </div>

                <div class="d-discover-motion-work">
                    <div class="d-disc-motion-work">
                        <h4>Discovery & Motion Work</h4>
                        <div class="d-sub-header">(Litigation Support Activities)</div>
                        <div class="d-discovery-motion">
                            <?php foreach ($discovery_motions as $dmkey => $dmvalue) { ?>
                                <div class="d-main-slide-base">
                                    <div class="d-discovery-item">
                                        <div class="d-core-image"><img src="/assets/carrosels/discovery_motion/<?php echo $dmvalue['link'] ?>" alt=""></div>
                                        <div class="d-core-title"><?php echo $dmvalue['title'] ?></div>
                                        <div class="d-core-desc">testing</div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>

                <div class="d-discover-motion-work">
                    <div class="d-disc-motion-work">
                        <h4>Pre-lit Work</h4>
                        <div class="d-sub-header">(Pre-litigation and Administrative Support)</div>
                        <div class="d-discovery-motion">
                            <?php foreach ($prelist as $plkey => $plvalue) { ?>
                                <div class="d-main-slide-base">
                                    <div class="d-discovery-item">
                                        <div class="d-core-image"><img src="/assets/carrosels/prelit/<?php echo $plvalue['link'] ?>" alt=""></div>
                                        <div class="d-core-title"><?php echo $plvalue['title'] ?></div>
                                        <div class="d-core-desc">testing</div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                
                <div class="d-handle-get-footer">
                    <div class="d-handle-footer-inner">
                        <div class="d-cols-item cols-one">
                            <div class="d-foot-title">About Us</div>
                            <div class="d-foot-desc">Avocado Hive Inc. is a domestic corporation registered in the Philippines that specializes in working with solos and small law firm Attorneys in North America & Australia</div>
                            <div class="d-foot-social">
                                <ul>
                                    <li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="d-cols-item cols-two">
                            <div class="d-foot-title">Contact Us</div>
                            <div class="d-foot-contact">
                                <ul>
                                    <li><i class="fa-solid fa-envelope"></i> <span><a href="mailto:info@avocadohive.com">info@avocadohive.com</a></span></li>
                                    <li><i class="fa-regular fa-clock"></i> <span>Services Hours : 24/7</span></li>
                                    <li><i class="fa-solid fa-location-dot"></i> <span>Ajeno Building, Corner<br />Andrade & Yumang Street,<br />General Santos City</span></li>
                                    <li><i class="fa-solid fa-phone"></i> <span>+1 617 752 3743  US</span></li>
                                    <li><i class="fa-regular fa-calendar-days"></i> <span>Corporate Office hours<br />9am to 5pm eastern time</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="/assets/slick/slick.js"></script>

        <script src="/assets/js/main.js"></script>
        <script src="/assets/js/services.js"></script>
    </body>
</html>