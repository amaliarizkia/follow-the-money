<?php
/**
 * Template Name: Sequence Page
 */

defined('ABSPATH') || die("Can't access directly");

use BD\Sequence\Episode;
use BD\Sequence\Character;
use BD\Sequence\Sequence;

$episodes = Episode::get_episode_data();
$setting = Sequence::get_first_sequence();

get_header(); ?>

<!--display episodes-->
<div id="episode" class="content-area w-75">
	<main id="main" class="site-main">
		<div class="row">
			<?php foreach ($episodes as $key => $episode)  { ?>
				<div class="col-md-12">
					<div class="card mb-3">
						<div class="row no-gutters">
							<div class="col-md-2">
								<img class="card-img-left img-thumbnail float-left" src="<?php echo $episode->metavalues['episode_image_thumbnail'] ?>" alt="episode thumbnail">
							</div>
							<div class="col-md-10">
								<div class="card-body">
									<h5 class="card-title"><?php echo $episode->post_title ?></h5>
									<small class="card-text"><?php echo $episode->metavalues['episode_sub_title'] ?></small>
									<p class="card-text"><?php echo $episode->metavalues['episode_description'] ?></p>
									<a href="#" id="relation-btn-<?=$episode->metavalues['relation']?>" class="btn btn-primary btn-sm border-0 relation">Start</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			<?php } ?>
		</div>
	</main>
</div>

<!--display sequence-->
<div id="sequence" class="d-flex justify-content-center mb-3">
	<div id="pop-up" class="p-3 align-self-center px-2 container">
		<h2 id="sequence-title"><?php echo $setting->post_title ?></h2>
		<h5><small id="sequence-description" class="text-justify"><?php echo $setting->sub_title?></small></h5>
		<br>
		<p><?php echo $setting->body_question ?></p>

		<div id="answers-div">
			<?php foreach ($setting->answer as $key => $answer) { ?>
				<button class="btn btn-info border-0" id="btn-option-<?=$answer['question_answer_sequence']?>" data-id="<?php echo $answer['question_answer_sequence']?>"><?php echo $answer['question_answer_option'] ?></button>
			<?php } ?>
		</div>
	</div>
</div>




<?php get_footer(); ?>
