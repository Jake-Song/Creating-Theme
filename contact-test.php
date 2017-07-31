<?php
/*
Template Name: Test
*/

get_header(); ?>

    <div id="primary" class="content-area" style="margin-top: 100px;">

        <main id="main" class="site-main" role="main">
            <div class="" style="width: 70%; margin: 0 auto;">
                <form action="" id="user-post">
                    <?php wp_nonce_field( basename( __FILE__ ), 'user-submitted-question' ); ?>
                    <input type="text" id="user-name" name="user-name" placeholder="Name" style="margin-bottom: 10px; display: block;">
                    <input type="text" id="user-email" name="user-email" placeholder="Email" style="margin-bottom: 10px; display: block;">
                    <select id="product" name="product" style="margin-bottom: 10px;">
                        <option value=""></option>
                        <option value="hosting">Hosting</option>
                        <option value="themes">Themes</option>
                        <option value="plugins">Plugins</option>
                        <option value="custom-dev">Custom Development</option>
                    </select>
                    <label for="user-entry-content" style="margin-left: 15px;">Write Your Question Here:</label>
                    <textarea name="user-entry-content" id="user-entry-content" rows="10" cols="30" style="margin-bottom: 10px; clear: both; display: block;"></textarea>
                    <input type="text" id="xyq" name="<?php echo apply_filters( 'honeypot_name', 'data-submitted' ) ?>" value="" style="display: none;">
                    <input type="submit" id="user-submit-button" value="Submit Post">
                </form>
            </div>
        </main>

    </div>

<?php get_footer(); ?>
