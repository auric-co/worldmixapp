$("#slider-range").slider({
  range: true, 
  min: 500,
  max: 100000,
  step: 500,
  slide: function( event, ui ) {
    $( "#min-price").html(ui.values[ 0 ]);
    $("#min_range").val(ui.values[0]);
    suffix = '';
    if (ui.values[ 1 ] == $( "#max-price").data('max') ){
       suffix = ' +';
    }
    $( "#max-price").html(ui.values[ 1 ] + suffix);
    $("#max_range").val(ui.values[1]);
  }
});