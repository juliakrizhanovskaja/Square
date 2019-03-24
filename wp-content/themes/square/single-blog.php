<?php
/* Template Name: Page Post*/
?>


<?php get_header(); ?>

    <?php while ( have_posts() ) : the_post(); ?>
    <?php
    $comments = get_comments(array(
        'post_id' => get_the_ID()
    ));
    ?>


    <div class="container">
        <article>

            <img src="<?php bloginfo('template_url'); ?>/img/your_photo.jpg" alt="photo">

            <h2>

                <?php the_title(); ?>

            </h2>
            <div class="blog_atribute">
                <i class="far fa-calendar"></i>
                <span class="blog_date">

            <?php the_date(); ?>

            </span>
                <i class="far fa-comment"></i>
                <span>
                201
            </span>
                <i class="fas fa-heart"></i>
                <span>
                400
            </span>
            </div>
            <p>
                <?php the_content(); ?>
            </p>
        </article>
        <div class="share">
        <span>
            SHARE
        </span>
            <i class="fab fa-facebook-f"></i>
            <i class="fab fa-twitter"></i>
            <i class="fab fa-pinterest-p"></i>
            <i class="fas fa-retweet"></i>
        </div>

        <div class="comments">
            <h5>
                <?php echo count($comments)?> Comments
            </h5>


            <?php
            get_template_part('comments', 'page');
            ?>
        </div>
        <div>
            <?php
            add_filter( 'comment_form_logged_in', '__return_empty_string' );
            $comments_args = array(
                'must_log_in'=> false,
                'label_submit'=>'Send',
                'title_reply'=>'Leave a Comment',
                'comment_notes_after' => '',
                'comment_field' => '
                    <p class="comment-form-comment">
                    
                      <ul class="list-input">
                        <li class="list-input__item">
                          <input type="text" id="name" name="author" placeholder="Name" class="form__item">
                        </li>
                        <li class="list-input__item">
                          <input type="email" id="email" name="email" placeholder="E-mail" class="form__item">
                        </li>
                        <li class="list-input__item">
                          <input type="text" id="website" name="website" placeholder="Web site" class="form__item">
                        </li>
                        <li class="list-input__item">
                          <input type="text" id="job" name="job" placeholder="Job" class="form__item">
                        </li>
                        <li class="list-input__item">
                          <textarea rows="10" id="message" name="comment" placeholder="Comment" class="list-input__message list-input__message--focused"></textarea>
                        </li>
                      </ul>
                    </p>',
            );
            comment_form($comments_args, get_the_ID())
            ?>


            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Phasellus mattis semper nisl, vitae malesuada massa egestas a.
                Vestibulum vestibulum urna sapien, eu bibendum magna ornare non.
            </p>
        </div>
    </div>

    <div>
        <div class="wrapper">
            <div class="bottom">
                <div class="workshop">
                    <img src="<?php bloginfo('template_url'); ?>/img/photo.jpg" alt="photo">
                    <h5>
                        fashion workshop
                    </h5>
                    <p class="date">
                        NOV 21-23
                    </p>
                    <p class="time">
                        9:00am - 4:00pm
                    </p>
                    <div class="brand">
                        <p>
                            rsvp
                        </p>
                    </div>
                </div>
                <div class="news">
                    <h5>
                        news
                    </h5>
                    <ul>
                        <li class="news_item">
                            <div>
                                <img src="<?php bloginfo('template_url'); ?>/img/news1.jpg" alt="news_photo" class="news_photo">
                            </div>
                            <div>
                                <h6>
                                    New Gallery Set
                                </h6>
                                <p class="date_news">
                                    09.12.2014
                                </p>
                                <p class="text_news">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Quisque fringilla mi orci, ac venenatis ante venenatis eget.
                                </p>
                                <a href="" class="text_link">read more</a>
                            </div>
                        </li>
                        <li class="news_item">
                            <div>
                                <img src="<?php bloginfo('template_url'); ?>/img/news2.jpg" alt="news_photo" class="news_photo">
                            </div>
                            <div>
                                <h6>
                                    wedding workshop
                                </h6>
                                <p class="date_news">
                                    09.12.2014
                                </p>
                                <p class="text_news">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Quisque fringilla mi orci, ac venenatis ante venenatis eget.
                                </p>
                                <a href="" class="text_link">read more</a>
                            </div>
                        </li>
                        <li class="news_item">
                            <div>
                                <img src="<?php bloginfo('template_url'); ?>/img/news3.jpg" alt="news_photo" class="news_photo">
                            </div>
                            <div>
                                <h6>
                                    Personal Project
                                </h6>
                                <p class="date_news">
                                    09.12.2014
                                </p>
                                <p class="text_news">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Quisque fringilla mi orci, ac venenatis ante venenatis eget.
                                </p>
                                <a href="" class="text_link">read more</a>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="contact">
                    <div class="contact_item">
                        <div>
                            <img src="<?php bloginfo('template_url'); ?>/img/logo2.png" alt="logo2" class="logo2">
                        </div>
                        <div class="contacts">
                            <i class="fas fa-phone-square"></i>
                            <span>
                                + 00 123 456 7890
                            </span>
                            <br>
                            <i class="fas fa-envelope"></i>
                            <span >
                                info@square.com
                            </span>
                            <ul class="social">
                                <li>
                                    <i class="fab fa-facebook-f"></i>
                                </li>
                                <li>
                                    <i class="fab fa-twitter"></i>
                                </li>
                                <li>
                                    <i class="fab fa-instagram"></i>
                                </li>
                                <li>
                                    <i class="fas fa-vr-cardboard"></i>
                                </li>
                                <li>
                                    <i class="fab fa-google-plus-g"></i>
                                </li>
                            </ul>
                        </div>

                    </div>
                    <div class="twitter_square">
                        <i class="fab fa-twitter"></i>
                        <p>
                            Unerdwear cookie liquorice. Cake donut cupcake lollipop soufflé candy.
                            Chocolate oat cake <span>@cheesecake</span> tootsie roll.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="partners">
        <div class="wrapper">
            <ul class="logos">
                <li>
                    <img src="<?php bloginfo('template_url'); ?>/img/partner1.png" alt="logo_partner">
                </li>
                <li>
                    <img src="<?php bloginfo('template_url'); ?>/img/partner2.png" alt="logo_partner">
                </li>
                <li>
                    <img src="<?php bloginfo('template_url'); ?>/img/partner3.png" alt="logo_partner">
                </li>
                <li>
                    <img src="<?php bloginfo('template_url'); ?>/img/partner4.png" alt="logo_partner">
                </li>
            </ul>
        </div>
    </div>
<?php endwhile;?>
<?php get_footer(); ?>