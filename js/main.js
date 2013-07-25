jQuery(function($){
  $( "#sortable" ).sortable({
    update: function (ev, ui) {
      var order = []
      $('li', this).each(function() {
        order.push($(this).data('game'));
      })
      $('input[name=order]').val(order);
    }
  });
  $( "#sortable" ).disableSelection();

  var order = []
  $('#sortable li', this).each(function() {
    order.push($(this).data('game'));
  })
  $('input[name=order]').val(order);
});
