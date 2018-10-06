$(function() {

  $('.deplie').on('click', function() {

    var id = $(this).parent().parent().attr('id');

    var alerte_id = id.split('_')[1];

    $('#origine_'+alerte_id).fadeToggle(); // déplie la liste des alertes

  });

  $('.affiche-origine').on('click', function(){

    var alerte_id = $(this).attr('id').split('_')[2];

    var route = $('#route_'+alerte_id).attr('action');


    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });

    $.confirm({
      theme: 'dark',
      columnClass: 'xlarge',
        content: function () {
            var self = this;
            return $.ajax({
                url: route,
                dataType: 'json',
                method: 'get'
            }).done(function (response) {
              var ligne = new Array();
              var i = 0
              $.each(response, function(key, val){

                ligne[i] = '<p>'+val+'</p>';
                i++;
              })
                self.setContentPrepend('<div class="bg-success">')
                self.setContent(ligne);
                self.setContentAppend('</div>')
                // self.setContentAppend('<br>Version: ' + response.version);
                self.setTitle("Observations");
                // console.log(response);
            }).error(function(response){
              console.log(response.responseText);
                self.setTitle('Désolé');
                self.setContent('Il y a eu un problème');
            });
        }
    });
  });
console.log(  $('meta[name = "csrf-token"]').attr('content')
);
  $('.supprime').on('click', function(e){
    var id = '#' + $(this).attr('id');
    console.log(id);
    e.preventDefault();
    $.confirm({
        title: "Suppression",
        content: "Etes-vous sûr.e.s de vouloir supprimer définitivement cette saisie ?",
        type: 'red',
        columnClass: 'medium',
        theme: 'supervan',
        buttons: {
            supprimer:{
              btnClass: 'btn-red',
              keys : ['enter'],
              action: function () {
                window.location.href = $(id).attr('href');
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
