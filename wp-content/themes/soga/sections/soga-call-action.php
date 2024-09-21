<?php 
	$soga_hs_call		= get_theme_mod('hide_show_call_actions','on'); 
	$call_action_background_setting		= get_theme_mod('call_action_background_setting'); 
	$call_action_overlay 				= get_theme_mod('call_action_overlay');
	if($soga_hs_call == 'on') :
?>
	<section id="cta-unique" class="call-to-action-soga three-block wow fadeInDown">
		<div class="container">			
			<div class="row text-center">
				<?php 
					for($call =1; $call<4; $call++) 
					{
						if( get_theme_mod('call_action_page'.$call)) 
						{
							$call_query = new WP_query('page_id='.get_theme_mod('call_action_page'.$call,true));
							while( $call_query->have_posts() ) 
							{ 
								$call_query->the_post();
								$image = wp_get_attachment_url( get_post_thumbnail_id($post->ID));
								$img_arr[] = $image;
								$id_arr[] = $post->ID;
							}    
						}
					}
				?>
				<?php if(!empty($id_arr))
				{ ?>
				<?php 
					$i=1;
					foreach($id_arr as $id)
					{ 
						$title	= get_the_title( $id ); 
						$post	= get_post($id); 
						
						$content = $post->post_content;
						$content = apply_filters('the_content', $content);
						$content = str_replace(']]>', ']]>', $content);
				?> 
				<div class="col-lg-4 col-sm-6">
					<div class="call-action-box" style="background: url('<?php echo esc_url($call_action_background_setting); ?>') no-repeat  50% 50%/ cover <?php echo esc_attr($call_action_overlay); ?>;">
							<div class="inner" >
								<div class="call-action-icon-box" >								
									<?php $image = wp_get_attachment_url( get_post_thumbnail_id($post->ID));
										if( !empty($image) ) { ?>
										<img src="<?php echo esc_url( $image ); ?>" alt="<?php the_title_attribute();?>" >
										<?php } else { ?>
										<?php if( get_post_meta(get_the_ID(),'icons', true ) ): ?>
										<div class="call-action-icon specia-icon-wrap specia-icon-effect-1 specia-icon-effect-1a">
											 <i class="specia-icon fa <?php echo get_post_meta( get_the_ID(),'icons', true); ?>"></i>
										</div>
										<?php
											endif;
										} 
									?>								
								</div>
								<div class="call-action-title" style="pointer-events:none"><a href="<?php echo esc_url( get_post_meta( get_the_ID(),'call_action_links', true) ); ?>" target="<?php if(get_post_meta( get_the_ID(),'call_action_links_target', true)){echo "_blank";} ?>"> <?php echo $title; ?> </a></div>
								<div class="call-action-description">
									<p>
										<?php 
											$hide_show_call_action_excerpt=get_theme_mod('hide_show_call_action_excerpt','off');
											if ($hide_show_call_action_excerpt == 'on') :
											echo specia_call_action_excerpt($content);
											else :
											echo $content;
											endif;
										?>
									</p>
								</div>
							</div>
					</div>
				</div>	
				<?php $i++; 
				}  ?>
			</div>
			<?php } wp_reset_postdata(); ?>
		</div>
	</section>
<div class="clearfix"></div>
<?php endif; ?>

