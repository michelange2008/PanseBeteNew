

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
      title: 'Nouvelle saisie',
      content: '' +
      '<form action="" class="formName">' +
      '<div class="form-group">' +
      '<label>Si l\'élevage est différent de l\'utilisateur, saisir son nom, sinon cliquez simplement sur Ok</label>' +
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

// Bascule voir le mot de passe
$('.oeil').on('click', function() {
  $(this).toggleClass('oeil-ouvert');
  $(this).toggleClass('oeil-ferme');
  var type = $('#password').attr('type');
  if(type === 'password') {
    console.log(type);
    $('#password').attr('type', "text");
  }
  else {
    $('#password').attr('type', "password");
  }
});

$('.dd').nestable(

);



function startup() {
  var el = document.getElementsByTagName("canvas")[0];
  el.addEventListener("touchstart", handleStart, false);
  el.addEventListener("touchend", handleEnd, false);
  el.addEventListener("touchcancel", handleCancel, false);
  el.addEventListener("touchleave", handleLeave, false);
  el.addEventListener("touchmove", handleMove, false);
}

function handleStart(evt) {
  evt.preventDefault();
  var el = document.getElementsByTagName("canvas")[0];
  console.log(el);
  var ctx = el.getContext("2d");
  var touches = evt.changedTouches;

  for (var i=0; i<touches.length; i++) {
    ongoingTouches.push(touches[i]);
    var color = colorForTouch(touches[i]);
    ctx.fillStyle = color;
    ctx.fillRect(touches[i].pageX-2, touches[i].pageY-2, 4, 4);
  }
}
// Destiner à afficher la barre de scroll sur l'écran du portable dans le fenetre LISTE
// des origines si elle déborde dans le bas de l'écran
var winHeight = screen.height;
var pageHeight = $('html').height();
if(winHeight >= pageHeight)
{
  $('#scroll').css('display', 'none');
}

// fonction pour afficher l'accordeon
$(document).ready(function() {
		$('.ziehharmonika').ziehharmonika({
			collapsible: true,
			prefix: ''
		});
	});
// afficher une information avant de passer à la liste des originesListe
$("#listeOrigines").on('click', function(e){
  e.preventDefault();
  $.confirm({
    theme: "supervan",
    title: "<h5 style='text-align: left; color:red'>A lire !<img src='../../svg/instructions.svg' /> </h5>",
    content: "<p style='text-align: justify'>A la page suivante, vous aurez la liste de toutes les questions que vous avez cochées, quelque soit le thème.</p>"
    + "<p style='text-align: justify'>Il est possible de les déplacer en le faisant glisser. Vous pouvez aussi grouper certaines questions en les faisant glisser vers la droite.</p>"
    + "<p style='text-align: justify'>S'il y a besoin de faire défiler la page, il faut utiliser la barre de défilement orange</p>",
    buttons : {
      formSubmit : {
        text: "continuer",
        keys : ['enter', 'esc'],
        btnClass : 'btn-red',
        action: function() {
          location.href = $('#listeOrigines').attr('href');
        },
      }
    },
  });
});

})
