$( function() {
    $( "#datepicker" ).datepicker();
    $( "#slider-summ" ).slider({
      range: "min",
      min: 10000,
      max: 3000000,

      create: function() {
        $("input[name=summ]").val($( this ).slider( "value" ));},

      slide: function( event, ui ) {
        $("input[name=summ]").val(ui.value);}
    });

    $( "#slider-summ-add" ).slider({
      range: "min",
      min: 10000,
      max: 3000000,

      create: function() {
        $("input[name=summ-add]").val($( this ).slider( "value" ));},
      slide: function( event, ui ) {
        $("input[name=summ-add]").val(ui.value);}
    });

    $( "input[name=summ]" ).on( "change", function(e) {
        $( "#slider-summ" ).slider( "value",  $("input[name=summ]").val() );
    });
    
    $( "input[name=summ-add]" ).on( "change", function(e) {
        $( "#slider-summ-add" ).slider( "value",  $("input[name=summ-add]").val() );
    });
  } );



  function fun1() {
    var add=document.getElementById('add');
    var rad=document.getElementsByName('radio');
    for (var i=0;i<rad.length; i++) {
     if (rad[i].checked && rad[i].value=='0') {
        add.disabled='true'
}
}
}

function fun2() {
    var add=document.getElementById('add');
    var rad=document.getElementsByName('radio');
    for (var i=0;i<rad.length; i++) {
     if (rad[i].checked && rad[i].value=='1') {
        add.removeAttribute("disabled");
}
}
}