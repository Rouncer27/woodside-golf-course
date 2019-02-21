<?php get_header(); ?>
	<main <?php post_class( 'membership row' ); ?> role="main">
        <?php the_post(); ?>
        <div class="leaguehero">
            <div class="leaguehero__content">
                <img src="<?php echo get_template_directory_uri(); ?>/img/leagues/icon-leagues-woodside.png" alt="Woodside calendar icon with crazy colourful background">
                <h2>Leagues</h2>
				<p>Instigating the creation of Insanely Outrageous Stories</p>
            </div>
            <div class="leaguehero__overlay"></div>
            <div class="leaguehero__background"></div>
        </div>
        <div class="slogan">
			<?php get_template_part( 'content/content', 'quote' ); ?>
		</div>

        <section class="swbleagues">
            <div class="swbleagues__wrapper">

                <div class="swbleagues__item">
                    <div class="swbleagues__item--header">
                        <h2>Mixed Seniors League</h2>
                        <p>Mixed Seniors League</p>
                    </div>

                    <div class="swbleagues__item--content">
                        <?php
                            $msl_para = get_post_meta(get_the_ID(), '_wgc_msl_content', true );
                            if( $msl_para ) {
                                echo wpautop( esc_html( $msl_para ) );
                            }
                        ?>
                        <div class="buttons">
                            <?php
                                $mslinfoPDFID = get_post_meta( get_the_id(), '_swb_mixed_seniors_league_information', true );
                                $mslinfoPDF = wp_get_attachment_url( $mslinfoPDFID );
                            ?>
                            <a target="_blank" href="<?php echo esc_url( $mslinfoPDF ); ?>">League Information</a>

                            <?php
                                $mslratePDFID = get_post_meta( get_the_id(), '_swb_mixed_seniors_rate_sheet', true );
                                $mslratePDF = wp_get_attachment_url( $mslratePDFID );
                            ?>
                            <a target="_blank" href="<?php echo esc_url( $mslratePDF ); ?>">Rate Sheet</a>

                            <?php
                                $mslstanPDFID = get_post_meta( get_the_id(), '_swb_mixed_seniors_standings', true );
                                //$mslstanPDF = wp_get_attachment_url( $mslstanPDFID );
                            ?>
                            <a target="_blank" href="<?php echo esc_url( $mslstanPDFID ); ?>">Standings</a>

						</div>
                    </div>
                </div>

                <div class="swbleagues__item">
                    <div class="swbleagues__item--header">
                        <h2>Men’s Commercial League</h2>
                        <p>Men’s Commercial League</p>
                    </div>

                    <div class="swbleagues__item--content">
                    <?php
                            $mcl_para = get_post_meta(get_the_ID(), '_wgc_mcl_content', true );
                            if( $mcl_para ) {
                                echo wpautop( esc_html( $mcl_para ) );
                            }
                        ?>
                        <div class="buttons">
                            <?php
                                $mclinfoPDFID = get_post_meta( get_the_id(), '_swb_mens_commercial_league_information', true );
                                $mclinfoPDF = wp_get_attachment_url( $mclinfoPDFID );
                            ?>
                            <a target="_blank" href="<?php echo esc_url( $mclinfoPDF ); ?>">League Information</a>

                            <?php
                                $mclratePDFID = get_post_meta( get_the_id(), '_swb_mens_commercial_league_rate_sheet', true );
                                $mclratePDF = wp_get_attachment_url( $mclratePDFID );
                            ?>
                            <a target="_blank" href="<?php echo esc_url( $mclratePDF ); ?>">Rate Sheet</a>

                            <?php
                                $mclstanPDFID = get_post_meta( get_the_id(), '_swb_mens_commercial_league_standings', true );
                                //$mclstanPDF = wp_get_attachment_url( $mclstanPDFID );
                            ?>
                            <a target="_blank" href="<?php echo esc_url(  $mclstanPDFID ); ?>">Standings</a>
						</div>
                    </div>
                </div>

                <div class="swbleagues__item">
                    <div class="swbleagues__item--header">
                        <h2>9 Hole Ladies T-Birds</h2>
                        <p>9 Hole Ladies T-Birds</p>
                    </div>

                    <div class="swbleagues__item--content">
                    <?php
                            $ntbird_para = get_post_meta(get_the_ID(), '_wgc_ntbird_content', true );
                            if( $ntbird_para ) {
                                echo wpautop( esc_html( $ntbird_para ) );
                            }
                        ?>
                        <div class="buttons">
                            <?php
                                $ltbinfoPDFID = get_post_meta( get_the_id(), '_swb_nine_tbirds_league', true );
                                $ltbinfoPDF = wp_get_attachment_url( $ltbinfoPDFID );
                            ?>
                            <a target="_blank" href="<?php echo esc_url( $ltbinfoPDF ); ?>">League Information</a>

                            <?php
                                $ltbratePDFID = get_post_meta( get_the_id(), '_swb_nine_tbirds_rate', true );
                                $ltbratePDF = wp_get_attachment_url( $ltbratePDFID );
                            ?>
                            <a target="_blank" href="<?php echo esc_url( $ltbratePDF ); ?>">Rate Sheet</a>

                            <?php
                                $ltbstanPDFID = get_post_meta( get_the_id(), '_swb_nine_tbirds_standings', true );
                                //$ltbstanPDF = wp_get_attachment_url( $ltbstanPDFID );
                            ?>
                            <a target="_blank" href="<?php echo esc_url( $ltbstanPDFID ); ?>">Standings</a>
						</div>
                    </div>
                </div>

                <div class="swbleagues__item">
                    <div class="swbleagues__item--header">
                        <h2>Ladies Night OUT</h2>
                        <p>Ladies Night OUT</p>
                    </div>

                    <div class="swbleagues__item--content">
                    <?php
                            $lno_para = get_post_meta(get_the_ID(), '_wgc_lno_content', true );
                            if( $lno_para ) {
                                echo wpautop( esc_html( $lno_para ) );
                            }
                        ?>
                        <div class="buttons">
                            <?php
                                $lnoinfoPDFID = get_post_meta( get_the_id(), '_swb_ladies_night_out_information', true );
                                $lnoinfoPDF = wp_get_attachment_url( $lnoinfoPDFID );
                            ?>
                            <a target="_blank" href="<?php echo esc_url( $lnoinfoPDF ); ?>">League Information</a>

                            <?php
                                $lnoratePDFID = get_post_meta( get_the_id(), '_swb_ladies_night_out_rates', true );
                                $lnoratePDF = wp_get_attachment_url( $lnoratePDFID );
                            ?>
                            <a target="_blank" href="<?php echo esc_url( $lnoratePDF ); ?>">Rate Sheet</a>

                            <?php
                                $lnostanPDFID = get_post_meta( get_the_id(), '_swb_ladies_night_out_standings', true );
                                //$lnostanPDF = wp_get_attachment_url( $lnostanPDFID );
                            ?>
                            <a target="_blank" href="<?php echo esc_url( $lnostanPDFID ); ?>">Standings</a>
						</div>
                    </div>
                </div>


                <div class="swbleagues__item">
                    <div class="swbleagues__item--header">
                        <h2>18 Hole Ladies T-Birds</h2>
                        <p>18 Hole Ladies T-Birds</p>
                    </div>

                    <div class="swbleagues__item--content">
                    <?php
                            $etbird_para = get_post_meta(get_the_ID(), '_wgc_etbird_content', true );
                            if( $etbird_para ) {
                                echo wpautop( esc_html( $etbird_para ) );
                            }
                        ?>
                        <div class="buttons">
                            <?php
                                $lteinfoPDFID = get_post_meta( get_the_id(), '_swb_tbirds_info', true );
                                $lteinfoPDF = wp_get_attachment_url( $lteinfoPDFID );
                            ?>
                            <a target="_blank" href="<?php echo esc_url( $lteinfoPDF ); ?>">League Information</a>

                            <?php
                                $lteratePDFID = get_post_meta( get_the_id(), '_swb_tbirds_rate', true );
                                $lteratePDF = wp_get_attachment_url( $lteratePDFID );
                            ?>
                            <a target="_blank" href="<?php echo esc_url( $lteratePDF ); ?>">Rate Sheet</a>

                            <?php
                                $ltestanPDFID = get_post_meta( get_the_id(), '_swb_tbirds_standings', true );
                                //$ltestanPDF = wp_get_attachment_url( $ltestanPDFID );
                            ?>
                            <a target="_blank" href="<?php echo esc_url( $ltestanPDFID ); ?>">Standings</a>
						</div>
                    </div>
                </div>


                <div class="swbleagues__item">
                    <div class="swbleagues__item--header">
                        <h2>Men’s Night</h2>
                        <p>Men's Night</p>
                    </div>

                    <div class="swbleagues__item--content">
                    <?php
                            $mn_para = get_post_meta(get_the_ID(), '_wgc_mn_content', true );
                            if( $mn_para ) {
                                echo wpautop( esc_html( $mn_para ) );
                            }
                        ?>
                        <div class="buttons">
                            <?php
                                $mnlinfoPDFID = get_post_meta( get_the_id(), '_swb_men’s_night_info', true );
                                $mnlinfoPDF = wp_get_attachment_url( $mnlinfoPDFID );
                            ?>
                            <a target="_blank" href="<?php echo esc_url( $mnlinfoPDF ); ?>">League Information</a>

                            <?php
                                $mnlratePDFID = get_post_meta( get_the_id(), '_swb_men’s_night_rate', true );
                                $mnlratePDF = wp_get_attachment_url( $mnlratePDFID );
                            ?>
                            <a target="_blank" href="<?php echo esc_url( $mnlratePDF ); ?>">Rate Sheet</a>

                            <?php
                                $mnlstanPDFID = get_post_meta( get_the_id(), '_swb_men’s_night_standings', true );
                                //$mnlstanPDF = wp_get_attachment_url( $mnlstanPDFID );
                            ?>
                            <a target="_blank" href="<?php echo esc_url( $mnlstanPDFID ); ?>">Standings</a>
						</div>	
                    </div>

                </div>


                
            </div>
        </section>


    </main>
<?php get_footer(); ?>    