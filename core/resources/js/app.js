$(function() {
  $('.aide-bouton').fadeToggle();
  $('.aide-bouton').on('click', function() {
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

})
