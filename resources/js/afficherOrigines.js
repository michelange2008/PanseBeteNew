$(function() {

  // Alerte + ajax pour afficher les questions cochées
    $('.affiche-origine').on('click', function(){


      var alerte_id = $(this).attr('id').split('_')[2];

      var route = $('#route_'+alerte_id).attr('action');
      
      $.confirm({
        columnClass: 'large',
        theme: 'dark',
        buttons: {
          fermer: function(){
          },
        },
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
                self.setTitle("Questions cochées");
            }).fail(function(response){
                self.setTitle('Désolé');
                self.setContent('Il y a eu un problème');
            });
        },
      });
    });


})
