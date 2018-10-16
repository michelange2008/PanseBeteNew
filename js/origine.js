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
        var id = $(this).attr('id');
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

  $('#nouvelleSaisieCarre').on('click', function(e) {
    e.preventDefault();
    nouvelleSaisie("#"+$(this).attr('id'));
  });

  $('#nouvelleSaisieRond').on('click', function(e) {
    e.preventDefault();
    nouvelleSaisie("#"+$(this).attr('id'));
  });

  function nouvelleSaisie(route_id) {
    console.log(route_id);
    var user =  $("#user").attr('name');
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

            $(route_id).attr('href', $(route_id).attr('href')+'/'+name);

            window.location.href = $(route_id).attr('href');
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
  };

  $('.choix').on('click', function(e){

    var espece_nom = $(this).attr('id');

    $.alert({
      theme: "dark",
      title: "Désolé !",
      content: "Le travail pour les <strong>"+espece_nom+"</strong> est encore en cours",
      buttons : {
        fermer : {
          text: "fermer",
          keys : ['enter', 'esc'],
          btnClass : 'btn-red',

        }
      },
    });

  });


})
