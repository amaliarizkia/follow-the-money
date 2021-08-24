<?php 

namespace BD\Sequence;

defined ('ABSPATH') || die("Can't access directly");

class Sequence {

    public static function get_first_sequence() {
        $args = array(
            'post_type'     => 'sequence',
            'post_per_page' => -1,
        );
        
        $sequences = get_posts($args);

        $sequence = [];
        foreach($sequences as $sq) {
            $first_sequence = get_field('is_first_sequence', $sq->ID);
            if($first_sequence) {
                $sequence['post'] = $sq;
                $sequence['acf'] = get_field('sequence_type', $sq->ID)[0];
            }
        }

        return $sequence;
    }
}

new Sequence();