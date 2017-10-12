  $( function() {
    $( "#slider-range" ).slider({
      range: true,
      min: 0,
      max: 3000000,
      values: [ 0, 50000 ],
      slide: function( event, ui ) {
        $( "#amount" ).val( ui.values[ 0 ] + " đồng" + " - " + ui.values[ 1 ] + " đồng"  );
      }
    });
       $( "#amount" ).val(  $( "#slider-range" ).slider( "values", 0 ) + " đồng" + " - " +
       $( "#slider-range" ).slider( "values", 1 ) + " đồng" );
  } );
  $( function() {
    $( "#bankinh" ).slider({
      range: true,
      min: 0,
      max: 10,
      values: [ 0, 1 ],
      slide: function( event, ui ) {
        $( "#bk" ).val( ui.values[ 0 ] + " km" + " - " + ui.values[ 1 ] + " km"  );
      }
    });
       $( "#bk" ).val(  $( "#bankinh" ).slider( "values", 0 ) + " km" + " - " +
       $( "#bankinh" ).slider( "values", 1 ) + " km" );
  } );
