(function ($, Drupal) {

// Fix core's required handling.
$(document).bind('state:required', function (e) {
  if (e.trigger) {
    var fields = $(e.target).find('input, select, textarea, fieldset');
    fields.each(function() {
      var label = 'label' + (this.id ? '[for=' + this.id + ']' : '');
      var $field_labels = $(e.target).find(label);
      var $fieldset_legends = $(e.target).find('legend span.fieldset-legend');
      var $labels = $field_labels.add($fieldset_legends);
      if (e.value) {
        $(this).attr({ required: 'required', 'aria-required': 'aria-required' });
        $labels.each(function() {
          $(this).addClass('js-form-required form-required');
        });
      } else {
        $(this).removeAttr('required aria-required');
        $labels.each(function() {
          $(this).removeClass('js-form-required form-required');
        });
      }
    })
  }
});

})(jQuery, Drupal);