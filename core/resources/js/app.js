$(function() {

// MENU AIDE
  $('.aide-bouton').fadeIn();
  $('.aide-bouton').on('focusout', function() {
    $('.aide-contenu').fadeOut();
  })
  $('.aide-bouton').on('click', function() {
    $('.aide-contenu').fadeToggle();
  })
  $('.aide-bouton').on('blur', function() {
    $('.aide-contenu').fadeToggle();
  })
  $('#affiche-texte-1').on('click', function() {
    $('#texte-1').fadeToggle();
    $('#texte-2').fadeToggle();
  })
  $('#affiche-texte-2').on('click', function() {
    $('#texte-2').fadeToggle();
    $('#texte-1').fadeToggle();
  })
// MENU ROND
  $('.bouton-rond').on('click', function() {
    $('.menu-item').fadeToggle();
    $('.aide-contenu').fadeOut();
  });
  $('.menu-item').on('click', function() {
    $('.menu-item').fadeToggle();
    var espece_id = $(this).attr('id').split('_')[1];
    var route = $(this).attr('route');
    nouvelleSaisie(route, $(this).attr('name'), espece_id);
  })

})
