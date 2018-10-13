$(function () {

    function deplie(id) {

      var alerte_id = id.split('_')[1];

      $('#origine_'+alerte_id).fadeToggle(); // déplie la liste des alertes

      $.each($('.ouvert'), function() {
            if($(this).attr('class') == "non-affiche ouvert" && $(this).attr('id') !== 'origine_'+alerte_id)
                {
                    $(this).fadeToggle(100);
                    $(this).toggleClass('ouvert');
                }
        })

          $('#origine_'+alerte_id).toggleClass('ouvert');
    }

    $('.afficher').on('click', function (){

        var id = $(this).attr('id');

        deplie(id);

    });

    $('.deplie').on('click', function() {

        var id = $(this).parent().parent().attr('id');

        deplie(id);

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
      buttons: {
        fermer: function(){
          //close
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
            }).error(function(response){
                self.setTitle('Désolé');
                self.setContent('Il y a eu un problème');
            });
        },
    });
  });


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
  });
  $('#nouvelleSaisie').on('click', function(e) {

    var user =  $("#user").attr('name');
    // var route = $('#nouvelleSaisie').attr('href');

    e.preventDefault();
    $.confirm ({
      title: 'Eventuellement',
      content: '' +
      '<form action="" class="formName">' +
      '<div class="form-group">' +
      '<label>Si l\'élevage est différent de l\'utilisateur, saisir son nom</label>' +
      '<input type="text" placeholder='+user+' class="name form-control" required />' +
      '</div>' +
      '</form>',
      buttons: {
        formSubmit: {
        text: 'Ok',
        btnClass: 'btn-blue',
        action: function () {
            var name = this.$content.find('.name').val();
            if(!name){
                var name = user;
            }

            $('#nouvelleSaisie').attr('href', $('#nouvelleSaisie').attr('href')+'/'+name);
            console.log($('#nouvelleSaisie').attr('href'));
            window.location.href = $('#nouvelleSaisie').attr('href');
        }
    },
    annuler: function () {
        //close
    },
},
onContentReady: function () {
    // bind to events
    var jc = this;
    this.$content.find('form').on('submit', function (e) {
        // if the user submits the form by pressing enter in the field.
        e.preventDefault();
        jc.$$formSubmit.trigger('click'); // reference the button and click it
    });
    }
    })
  })

  $('.choix').on('click', function(e){

    e.preventDefault();

    var espece_id = $(this).attr('id');

    var route = "entravaux/"+espece_id;


    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });

    $.confirm({
      theme: 'dark',
      columnClass: 'xlarge',
      autoClose: 'fermer|4000',
      buttons: {
        fermer: function(){
        },
      },
        content: function () {
            var self = this;
            return $.ajax({
                url: route,
                data: espece_id,
                dataType: 'text',
                method: 'get'
            }).done(function (response) {
                window.location.href = $('.choix').attr('href');
            }).error(function(response){
                self.setTitle('Désolé');
                self.setContent("le travail n'est pas fini pour cette production");
            });
        },
    });
  });


})
