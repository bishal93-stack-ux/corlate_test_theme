<?php
/* Template Name: Contact */
get_header();
?>
    <section id="contact-info">
        <div class="center">
			<?php
			$contact_page_header   = get_post_meta( get_the_ID(), 'contact-header', true );
			$contact_page_lead     = get_post_meta( get_the_ID(), 'class-lead', true );
			$contact_page_gmap     = get_post_meta( get_the_ID(), 'gmap', true );
			$contact_page_address1 = get_post_meta( get_the_ID(), 'address_one', true );
			$contact_page_address2 = get_post_meta( get_the_ID(), 'address_two', true );
			$contact_page_head     = get_post_meta( get_the_ID(), 'contactform_head', true );
			$contact_page_lead1    = get_post_meta( get_the_ID(), 'contactform_lead', true );
			echo '<h2>' . $contact_page_header . '</h2>';
			echo '<p class="lead">' . $contact_page_lead . '</p>'; ?>
        </div>
        <div class="gmap-area">
            <div class="container">
                <div class="row">
                    <div class="col-sm-5 text-center">
                        <div class="gmap">
                            <iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0"
                                    src="<?php echo $contact_page_gmap; ?>"></iframe>
                        </div>
                    </div>

                    <div class="col-sm-7 map-content">
                        <ul class="row">
                            <li class="col-sm-6">
                                <address>
									<?php echo $contact_page_address1; ?>
                                </address>
                                <address>
									<?php echo $contact_page_address1; ?>
                                </address>
                            </li>
                            <li class="col-sm-6">
                                <address>
									<?php echo $contact_page_address2; ?>
                                </address>
                                <address>
									<?php echo $contact_page_address2; ?>
                                </address>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>  <!--/gmap_area -->

    <section id="contact-page">
        <div class="container">
            <div class="center">
                <h2><?php echo $contact_page_head; ?></h2>
                <p class="lead"><?php echo $contact_page_lead1; ?></p>
            </div>
            <div class="row contact-wrap">
                <div class="status alert alert-success" style="display: none"></div>
                <form id="main-contact-form" class="contact-form" name="contact-form" method="post" action="confirmation.php">
                    <div class="col-sm-5 col-sm-offset-1">
                        <div class="form-group">
                            <label>Name *</label>
                            <input type="text" name="name" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label>Email *</label>
                            <input type="email" name="email" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label>Phone</label>
                            <input type="number" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Company Name</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-sm-5">
                        <div class="form-group">
                            <label>Subject *</label>
                            <input type="text" name="subject" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label>Message *</label>
                            <textarea name="message" id="message" required="required" class="form-control"
                                      rows="8"></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" name="submit" class="btn btn-primary btn-lg" required="required">
                                Submit Message
                            </button>
                        </div>
                    </div>
                </form>
				<?php
                $to = get_option('admin_email');
				$name  = $_POST["name"] ;
				$subject  = $_POST["subject"] ;
				$email  = $_POST["email"] ;
				$body     = $_POST["message"];
				$headers  = 'From: '.$name.' <'.$to.'>' . "rn" . 'Reply-To:' . $email;
				wp_mail($to,$subject,$body,$headers); ?>
            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#contact-page-->
<?php
get_footer();
