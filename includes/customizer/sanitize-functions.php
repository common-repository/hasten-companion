<?php

if(!function_exists('hasten_companion_sanitize_checkbox')):
    function hasten_companion_sanitize_checkbox( $input ) {
        return ( ( isset( $input ) && true == $input ) ? true : false );
    }
endif;

if(!function_exists('hasten_companion_sanitize_rgba')):
    function hasten_companion_sanitize_rgba( $color ) {
        if ( empty( $color ) || is_array( $color ) )
            return 'rgba(0,0,0,0)';

        // If string does not start with 'rgba', then treat as hex
        // sanitize the hex color and finally convert hex to rgba
        if ( false === strpos( $color, 'rgba' ) ) {
            return sanitize_hex_color( $color );
        }

        // By now we know the string is formatted as an rgba color so we need to further sanitize it.
        $color = str_replace( ' ', '', $color );
        sscanf( $color, 'rgba(%d,%d,%d,%f)', $red, $green, $blue, $alpha );
        return 'rgba('.$red.','.$green.','.$blue.','.$alpha.')';
    }
endif;