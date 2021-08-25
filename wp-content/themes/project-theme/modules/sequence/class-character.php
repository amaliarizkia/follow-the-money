<?php

namespace BD\Sequence;

defined ('ABSPATH') || die("Can't access directly");

class Character {

	public static function get_character_data() {
		$args = array(
			'post_type'     => 'character',
			'post_per_page' => -1,
		);

		$characters = get_posts($args);
		foreach ($characters as $character) {
			$acf = get_fields($character->ID);
			$character->metavalues = $acf;
		}

		return $characters;
	}
}

new Character();