jQuery(document).ready(function() {
jQuery(".search-main").click(function(){
  var $t = jQuery("#search-panel");
  if ($t.is(':visible')) {
    $t.slideUp();
    jQuery("header")
    .delay(500)
    .queue(function (next) {
      next();
    });
  }
  else {
    $t.slideDown();
    jQuery('.search-field').focus();
  }
});

jQuery(".search-close").click(function(){
  var $t = jQuery("#search-panel");
  if ($t.is(':visible')) {
    $t.slideUp();
    jQuery("header")
    .delay(500)
    .queue(function (next) {
      next();
    });
  }
});
});

/*  jQuery Nice Select - v1.1.0
    https://github.com/hernansartorio/jquery-nice-select
    Made by HernÃ¡n Sartorio  */

(function(jQuery) {

  jQuery.fn.niceSelect = function(method) {

    // Methods
    if (typeof method == 'string') {
      if (method == 'update') {
        this.each(function() {
          var jQueryselect = jQuery(this);
          var jQuerydropdown = jQuery(this).next('.nice-select');
          var open = jQuerydropdown.hasClass('open');

          if (jQuerydropdown.length) {
            jQuerydropdown.remove();
            create_nice_select(jQueryselect);

            if (open) {
              jQueryselect.next().trigger('click');
            }
          }
        });
      } else if (method == 'destroy') {
        this.each(function() {
          var jQueryselect = jQuery(this);
          var jQuerydropdown = jQuery(this).next('.nice-select');

          if (jQuerydropdown.length) {
            jQuerydropdown.remove();
            jQueryselect.css('display', '');
          }
        });
        if (jQuery('.nice-select').length == 0) {
          jQuery(document).off('.nice_select');
        }
      } else {
        console.log('Method "' + method + '" does not exist.')
      }
      return this;
    }

    // Hide native select
    this.hide();

    // Create custom markup
    this.each(function() {
      var jQueryselect = jQuery(this);

      if (!jQueryselect.next().hasClass('nice-select')) {
        create_nice_select(jQueryselect);
      }
    });

    function create_nice_select(jQueryselect) {
      jQueryselect.after(jQuery('<div></div>')
        .addClass('nice-select')
        .addClass(jQueryselect.attr('class') || '')
        .addClass(jQueryselect.attr('disabled') ? 'disabled' : '')
        .attr('tabindex', jQueryselect.attr('disabled') ? null : '0')
        .html('<span class="current"></span><ul class="list"></ul>')
      );

      var jQuerydropdown = jQueryselect.next();
      var jQueryoptions = jQueryselect.find('option');
      var jQueryselected = jQueryselect.find('option:selected');

      jQuerydropdown.find('.current').html(jQueryselected.data('display') || jQueryselected.text());

      jQueryoptions.each(function(i) {
        var jQueryoption = jQuery(this);
        var display = jQueryoption.data('display');

        jQuerydropdown.find('ul').append(jQuery('<li></li>')
          .attr('data-value', jQueryoption.val())
          .attr('data-display', (display || null))
          .addClass('option' +
            (jQueryoption.is(':selected') ? ' selected' : '') +
            (jQueryoption.is(':disabled') ? ' disabled' : ''))
          .html(jQueryoption.text())
        );
      });
    }

    /* Event listeners */

    // Unbind existing events in case that the plugin has been initialized before
    jQuery(document).off('.nice_select');

    // Open/close
    jQuery(document).on('click.nice_select', '.nice-select', function(event) {
      var jQuerydropdown = jQuery(this);

      jQuery('.nice-select').not(jQuerydropdown).removeClass('open');
      jQuerydropdown.toggleClass('open');

      if (jQuerydropdown.hasClass('open')) {
        jQuerydropdown.find('.option');
        jQuerydropdown.find('.focus').removeClass('focus');
        jQuerydropdown.find('.selected').addClass('focus');
      } else {
        jQuerydropdown.focus();
      }
    });

    // Close when clicking outside
    jQuery(document).on('click.nice_select', function(event) {
      if (jQuery(event.target).closest('.nice-select').length === 0) {
        jQuery('.nice-select').removeClass('open').find('.option');
      }
    });

    // Option click
    jQuery(document).on('click.nice_select', '.nice-select .option:not(.disabled)', function(event) {
      var jQueryoption = jQuery(this);
      var jQuerydropdown = jQueryoption.closest('.nice-select');

      jQuerydropdown.find('.selected').removeClass('selected');
      jQueryoption.addClass('selected');

      var text = jQueryoption.data('display') || jQueryoption.text();
      jQuerydropdown.find('.current').text(text);

      jQuerydropdown.prev('select').val(jQueryoption.data('value')).trigger('change');
    });

    // Keyboard events
    jQuery(document).on('keydown.nice_select', '.nice-select', function(event) {
      var jQuerydropdown = jQuery(this);
      var jQueryfocused_option = jQuery(jQuerydropdown.find('.focus') || jQuerydropdown.find('.list .option.selected'));

      // Space or Enter
      if (event.keyCode == 32 || event.keyCode == 13) {
        if (jQuerydropdown.hasClass('open')) {
          jQueryfocused_option.trigger('click');
        } else {
          jQuerydropdown.trigger('click');
        }
        return false;
      // Down
      } else if (event.keyCode == 40) {
        if (!jQuerydropdown.hasClass('open')) {
          jQuerydropdown.trigger('click');
        } else {
          var jQuerynext = jQueryfocused_option.nextAll('.option:not(.disabled)').first();
          if (jQuerynext.length > 0) {
            jQuerydropdown.find('.focus').removeClass('focus');
            jQuerynext.addClass('focus');
          }
        }
        return false;
      // Up
      } else if (event.keyCode == 38) {
        if (!jQuerydropdown.hasClass('open')) {
          jQuerydropdown.trigger('click');
        } else {
          var jQueryprev = jQueryfocused_option.prevAll('.option:not(.disabled)').first();
          if (jQueryprev.length > 0) {
            jQuerydropdown.find('.focus').removeClass('focus');
            jQueryprev.addClass('focus');
          }
        }
        return false;
      // Esc
      } else if (event.keyCode == 27) {
        if (jQuerydropdown.hasClass('open')) {
          jQuerydropdown.trigger('click');
        }
      // Tab
      } else if (event.keyCode == 9) {
        if (jQuerydropdown.hasClass('open')) {
          return false;
        }
      }
    });

    // Detect CSS pointer-events support, for IE <= 10. From Modernizr.
    var style = document.createElement('a').style;
    style.cssText = 'pointer-events:auto';
    if (style.pointerEvents !== 'auto') {
      jQuery('html').addClass('no-csspointerevents');
    }

    return this;

  };

}(jQuery));

jQuery(document).ready(function() {
  jQuery('select.orderby').niceSelect();
});

function wcqib_refresh_quantity_increments() {
    jQuery("div.quantity:not(.buttons_added), td.quantity:not(.buttons_added)").each(function(a, b) {
        var c = jQuery(b);
        c.addClass("buttons_added"), c.children().first().before('<input type="button" value="-" class="minus" />'), c.children().last().after('<input type="button" value="+" class="plus" />')
    })
}
String.prototype.getDecimals || (String.prototype.getDecimals = function() {
    var a = this,
        b = ("" + a).match(/(?:\.(\d+))?(?:[eE]([+-]?\d+))?$/);
    return b ? Math.max(0, (b[1] ? b[1].length : 0) - (b[2] ? +b[2] : 0)) : 0
}), jQuery(document).ready(function() {
    wcqib_refresh_quantity_increments()
}), jQuery(document).on("updated_wc_div", function() {
    wcqib_refresh_quantity_increments()
}), jQuery(document).on("click", ".plus, .minus", function() {
    var a = jQuery(this).closest(".quantity").find(".qty"),
        b = parseFloat(a.val()),
        c = parseFloat(a.attr("max")),
        d = parseFloat(a.attr("min")),
        e = a.attr("step");
    b && "" !== b && "NaN" !== b || (b = 0), "" !== c && "NaN" !== c || (c = ""), "" !== d && "NaN" !== d || (d = 0), "any" !== e && "" !== e && void 0 !== e && "NaN" !== parseFloat(e) || (e = 1), jQuery(this).is(".plus") ? c && b >= c ? a.val(c) : a.val((b + parseFloat(e)).toFixed(e.getDecimals())) : d && b <= d ? a.val(d) : b > 0 && a.val((b - parseFloat(e)).toFixed(e.getDecimals())), a.trigger("change")
});

jQuery(document).ready(function() {
  (function(jQuery) {
    jQuery('.accordion h3.a-title').click(function(j) {
        var dropDown = jQuery(this).closest('li').find('.a-panel');

        jQuery(this).closest('.accordion').find('.a-panel').not(dropDown).slideUp();

        if (jQuery(this).hasClass('active')) {
            jQuery(this).removeClass('active');
        } else {
            jQuery(this).closest('.accordion').find('h3.a-title.active').removeClass('active');
            jQuery(this).addClass('active');
        }

        dropDown.stop(false, true).slideToggle();

        j.preventDefault();
    });
})(jQuery);
});
