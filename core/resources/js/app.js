$(function() {

// MENU AIDE
  $('#aide-rond').fadeIn().draggable({
    containment: '#aide',
    cursor: 'move',
    snap: '#aide'
  });

  $('.close').on('click', function() {
    $('.aide-contenu').fadeOut();
  })

  $('.aide-bouton').on('focusout', function() {
    $('.aide-contenu').fadeOut();
  })

  $('.aide-bouton').on('click', function() {
    $('.aide-contenu').fadeToggle();
  })
  $('.aide-bouton').on('blur', function() {
    $('.aide-contenu').fadeToggle();
  })
  $('#affiche-texte-d-1').on('click', function() {
    $('#texte-d-1').fadeToggle();
    $('#texte-d-2').fadeToggle();
  })
  $('#affiche-texte-d-2').on('click', function() {
    $('#texte-d-2').fadeToggle();
    $('#texte-d-1').fadeToggle();
  })
  $('#affiche-texte-s-1').on('click', function() {
    $('#texte-s-1').fadeToggle();
    $('#texte-s-2').fadeToggle();
  })
  $('#affiche-texte-s-2').on('click', function() {
    console.log('coucou');
    $('#texte-s-2').fadeToggle();
    $('#texte-s-1').fadeToggle();
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
