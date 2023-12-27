<?php

class Gymdesk {
	public function addEmbedScript() {
		//echo '<script src="" async defer></script>';
		wp_enqueue_script( 'gymdesk-script', 
			'https://gymdesk.com/js/widgets.js', 
			array(),
			'gymdesk-widgets-1.1', 
			true);
	}
	
	public function embedSchedule($atts = array()) {
        $theme = isset($atts['theme']) ? $atts['theme'] : '';
		return '<div class="maonrails-schedule" attr-gym="' . $atts['gym'] . '"' . (!empty($theme) ? ('attr-theme="' . $theme . '"') : '') . '></div>';
	}
	
	public function embedForm($atts = array()) {
        $theme = isset($atts['theme']) ? $atts['theme'] : '';
		return '<div class="maonrails-form" attr-ref="' . $atts['form'] . '" attr-gym="' . $atts['gym'] . '"' . (!empty($theme) ? ('attr-theme="' . $theme . '"') : '')  . '></div>';
	}
    
    public function embedBooking($atts = []) {
        $theme = isset($atts['theme']) ? $atts['theme'] : '';
        $schedule = isset($atts['schedule']) ? $atts['schedule'] : '';
		return '<div class="gymdesk-booking" attr-gym="' . $atts['gym'] . '"' . (!empty($theme) ? ('attr-theme="' . $theme . '"') : '') . (!empty($schedule) ? (' attr-schedule="' . $schedule . '"') : '') . '></div>';
    }
}