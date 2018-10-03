$(function() {

  $('.deplie').on('click', function() {

    console.log("coucou");

    var id = $(this).attr('id');
    var alerte_id = id.split('_')[1];

    $('#origine_'+alerte_id).fadeToggle();

    var img_src = $(img_id).attr('src');

  });

  $('#supprime').on('click', function(e){
    e.preventDefault();
    $.confirm({
        title: "Suppression",
        content: "Etes-vous sûr.e.s de vouloir supprimer définitivement cette saisie ?",
        type: 'red',
        columnClass: 'medium',
        theme: 'supervan',
        autoClose: 'annuler|5000',
        buttons: {
            supprimer:{
              btnClass: 'btn-red',
              keys : ['enter'],
              action: function () {
                window.location.href = $('#supprime').attr('href');
              }
            },
            annuler: {
              keys : ['esc'],
              action:function () {
              },
            }
        }
    });
  })
})
