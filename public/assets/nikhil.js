(function($) {
  $.fn.highlight = function(options) {
    // Default settings
    const settings = $.extend({
      color: 'yellow'
    }, options);

    // Apply the highlight
    return this.css('background-color', settings.color);
  };
})(jQuery);
