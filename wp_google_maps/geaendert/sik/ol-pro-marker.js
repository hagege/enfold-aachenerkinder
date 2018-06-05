/**
 * @namespace WPGMZA
 * @module OLProMarker
 * @requires WPGMZA.OLMarker
 */
(function($) {
	
	WPGMZA.OLProMarker = function(row)
	{
		WPGMZA.OLMarker.call(this, row);
	}
	
	WPGMZA.OLProMarker.prototype = Object.create(WPGMZA.OLMarker.prototype);
	WPGMZA.OLProMarker.prototype.constructor = WPGMZA.OLProMarker;
	
	WPGMZA.OLProMarker.prototype.updateIcon = function()
	{
		var icon = this.getIcon();
		$(this.element).find("img").attr("src", icon);
	}
	
})(jQuery);