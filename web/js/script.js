$( document ).ready(function()
{

  var width = $(window).width();

  // Nella pagina profilo cambia alcune classi quando visto da mobile e da tablet
  if (width < 991)
  {
    $(".padding-right").removeClass("padding-right");
    $(".padding-left").removeClass("padding-left");
  }

  // regola l'altezza del box con bordo nero
  var blackBoxHeight = $(".single-box").height() + 10;
  $(".black-box").css("height",blackBoxHeight+"px");

  // visualizza la barra di ricerca quando vista da mobile
  $("#glyphicon_search").click(function()
  {
    $("#cerca").addClass("show-bar");
  });

  // aggiunge un campo mail quando cliccato
  $(".email").click(function()
  {
    var numeroElementiTrovati = $(this).children().length;
    var numeroElementoNuovo = numeroElementiTrovati + 1;
    var input_mail = '<div class="form-group"><input type="email" class="col-md-12 col-sm-12 col-xs-12 form-control" id="email' + numeroElementoNuovo +' " name="email' + numeroElementoNuovo + ' " placeholder="email"></div>';
    $(this).append(input_mail);
  });

});


// Google Places API to help users fill in the information.
var placeSearch, autocomplete;
var componentForm = {
  street_number: 'short_name',
  route: 'long_name',
  locality: 'long_name',
  administrative_area_level_1: 'short_name',
  country: 'long_name',
  postal_code: 'short_name'
};
  
function initAutocomplete() {
  // Create the autocomplete object, restricting the search to geographical
  // location types.
  autocomplete = new google.maps.places.Autocomplete(
      /** @type {!HTMLInputElement} */(document.getElementById('autocomplete')),
      {types: ['geocode']});

  // When the user selects an address from the dropdown, populate the address
  // fields in the form.
  autocomplete.addListener('place_changed', fillInAddress);
}