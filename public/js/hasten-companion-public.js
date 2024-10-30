(function( $ ) {
	'use strict';

	/**
	 * All of the code for your public-facing JavaScript source
	 * should reside in this file.
	 *
	 * Note: It has been assumed you will write jQuery code here, so the
	 * $ function reference has been prepared for usage within the scope
	 * of this function.
	 *
	 * This enables you to define handlers, for when the DOM is ready:
	 *
	 * $(function() {
	 *
	 * });
	 *
	 * When the window is loaded:
	 *
	 * $( window ).load(function() {
	 *
	 * });
	 *
	 * ...and/or other possibilities.
	 *
	 * Ideally, it is not considered best practise to attach more than a
	 * single DOM-ready or window-load handler for a particular page.
	 * Although scripts in the WordPress core, Plugins and Themes may be
	 * practising this, we should strive to set a better example in our own work.
	 */

    function initContactMap() {
        var contact_latitude, contact_longitude, contact_link;
        contact_latitude = jQuery("#contact-map-latitude").val();
        contact_longitude = jQuery("#contact-map-longitude").val();
        contact_link = jQuery("#contact-map-link").val();

        var map_center = {"lat": contact_latitude, "lng": contact_longitude};
        var map = new google.maps.Map(document.getElementById('contact-map-wrapper'), {
            zoom: 14,
            zoomControl: false,
            scaleControl: false,
            scrollwheel: false,
            disableDoubleClickZoom: true,
            center: new google.maps.LatLng(contact_latitude, contact_longitude),
        });
        var marker = new google.maps.Marker({
            position: new google.maps.LatLng(contact_latitude, contact_longitude),
            map: map,
            url: contact_link,
        });

        google.maps.event.addListener(marker, 'click', function () {
            window.open(marker.url, '_blank');
        });
    }

    var is_template_contact = jQuery("#is_template_home").val();

    if (is_template_contact == 1) {
        initContactMap();
    }


})( jQuery );
