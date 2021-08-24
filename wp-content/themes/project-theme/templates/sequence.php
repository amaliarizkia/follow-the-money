<?php
/**
 * Template Name: Sequence
 */

defined( 'ABSPATH' ) || die( "Can't access directly" );

use BD\Sequence\Sequence;

$setting = Sequence::get_first_sequence();
//wp_send_json_success($setting['acf']);

get_header();
?>

	<div id="episode" class="d-flex justify-content-center mb-3">
		<div id="pop-up" class="p-3 align-self-center px-2 container">
			<h2 id="episode-intro-title"><?php echo $setting['post']->post_title ?></h2>
			<h5><small id="episode-intro-description" class="text-justify"><?php echo $setting['acf']['question_sub_title']?></small></h5>
			<br>
			<p><?php echo $setting['acf']['question_body_question'] ?></p>

			<div id="answers-div">
				<?php foreach ($setting['acf']['question_answer'] as $key => $answer) { ?>
					<button class="btn btn-info border-0" id="<?php echo $answer['question_answer_sequence']?>"><?php echo $answer['question_answer_option'] ?></button>
				<?php } ?>
			</div>
		</div>
	</div>


<?php get_footer(); ?>