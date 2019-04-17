$(function() {
  // Modification d'un utilisateur
  $('.ligne').on('click', '.modifier', function() {
    var id = $(this).attr('id').split("_")[1];
    var nom = $('#nom_'+id).text();
    var email = $('#email_'+id).text();
    $.confirm({
      columnClass : 'large',
      type : 'green',
      title : "Modification d'utilisateur",
      content : '' +
        '<form action="" class="formName">' +
        '<div class = "form-group">' +
        '<label>Nom</label>' +
        '<input type="text" class = "nom form-control" value="'+nom+'" required />' +
        '</div><div class="form-group">' +
        '<label>Adresse mail</label>' +
        '<input type="text" class = "email form-control" value="'+email+'" required />' +
        '</div></form>',
        buttons : {
          formSubmit: {
            text : 'enregistrer',
            btnClass : 'btn-green',
            action : function(data) {
              var nom = this.$content.find('.nom').val();
              var email = this.$content.find('.email').val();
              if(verifChampsModif(nom, email) && verifEmail(email)) {
                modifie(id, nom, email);
              }
              else {
                return false;
              }
            }
          },
          cancel :  {
            text : "annuler",
            btnClass : 'btn-red',
            action : function() {

            }
          }
        }
      })
    })
  // Ajout d'un utilisateur
  $('#plus').on('click', function() {
    $.confirm({
      columnClass : 'large',
      type : 'green',
      title : 'Nouvel utilisateur',
      content : '' +
        '<form action="" class="formName">' +
        '<div class = "form-group">' +
        '<label>Nom</label>' +
        '<input type="text" placeholder="nom" class = "nom form-control" required />' +
        '</div><div class="form-group">' +
        '<label>Adresse mail</label>' +
        '<input type="text" placeholder="adresse mail" class = "email form-control" required />' +
        '</div><div class="form-group">' +
        '<label>Mot de passe (6 car. mini)</label>' +
        '<input type="password" placeholder="mot de passe" class = "mdp1 form-control" required />' +
        '</div><div class="form-group">' +
        '<label>Retapez le mot de passe (6 car. mini)</label>' +
        '<input type="password" placeholder="retapez le mot de passe" class = "mdp2 form-control" required />' +
        '</div></form>',
      buttons : {
        formSubmit: {
          text : 'enregistrer',
          btnClass : 'btn-green',
          action : function(data) {
            var nom = this.$content.find('.nom').val();
            var email = this.$content.find('.email').val();
            var mdp1 = this.$content.find('.mdp1').val();
            var mdp2 = this.$content.find('.mdp2').val();
            if(verifChampsRemplis(nom, email, mdp1, mdp2) && verifEmail(email) && verifMdpEgal(mdp1, mdp2) && verifTailleMdp(mdp1)) {
              envoi(nom, email, mdp1);
            }
            else {
              return false;
            }
          }
        },
        cancel :  {
          text : "annuler",
          btnClass : 'btn-red',
          action : function() {

          }
        }
      }
    })
  })

  $('tr').on('click', '.supprimer', function() {
    var id = $(this).attr('id').split("_")[1];
    var ligne_id = '#ligne_'+id;
    var nom = $('#nom_'+id).html();
    var nombre_saisies = $('#saisies_'+id).html()
    //cas ou l'utilisateur a une saisie
    if(nombre_saisies > 0) {
      $.confirm({
        columnClass : 'large',
        type : 'red',
        theme : 'dark',
        title : "Suppression de "+nom+" !",
        content : '<p>Cet utilisateur.trice a effectué '+nombre_saisies+' saisie(s). </p>'+
          "<p>Si vous le supprimez <strong>toutes ses saisies seront aussi supprimées</strong>. " +
          "Mais vous pouvez choisir de transférer ses saisies à un autre utilisateur.trice</p>",
        buttons : {
          supprimer : {
            btnClass : 'btn-red',
            action: function() {
              supprimer(ligne_id, 'utilisateur/', id);
            },

          },
          transferer : {
            btnClass: 'btn-green',
            action: function() {
              transferer(id);
            }
          },
          annuler : {
            action: function() {
              console.log('annule');
            },
            btnClass: 'btn-dark'
          }
        }
      })

    }
    // cas ou l'utilisateur n'a pas de saisie
    else {

      $.confirm({
        columnClass : 'large',
        type : 'red',
        theme : 'dark',
        title : "Suppression de "+nom+" !",
        content : 'Etes-vous sûr de vouloir supprimer '+nom,
        buttons : {
          supprimer : function() {
            supprimer(ligne_id, 'utilisateur/', id);
          },
          annuler : function() {
          }
        }
      })
    }
  })

  function verifChampsRemplis(nom, email, mdp1, mdp2) {
    if(!nom || !email || !mdp1 || !mdp2) {
      alerte('Il faut remplir tous les champs');
      return false;
    }
    return true;
  }

  function verifChampsModif(nom, email) {
    if(!nom || !email) {
      alerte('Il faut remplir tous les champs');
      return false;
    }
    return true;  }

  function verifMdpEgal(mdp1, mdp2) {
    if(mdp1 !== mdp2) {
      alerte('les mots de passe ne concordent pas');
      return false;
    }
    return true;
  }

  function verifEmail(email) {
    var reg = new RegExp('^[a-z0-9]+([_|\.|-]{1}[a-z0-9]+)*@[a-z0-9]+([_|\.|-]{1}[a-z0-9]+)*[\.]{1}[a-z]{2,6}$', 'i');

    if(!reg.test(email)) {
     alerte("l'adresse email n'est pas conforme")
     return false;
    }
    return true;
  }

  function verifTailleMdp(mdp) {
    if(mdp.length < 7) {
      alerte("Le mot de passe est trop court")
      return false;
    }
    return true;
  }

  function alerte(texte) {
    $.alert({
      type : 'red',
      theme : 'dark',
      title : 'Attention !',
      content : texte
    });
  }

  function envoi(nom, email, mdp) {
    $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });

    $.ajax({
      type: 'POST',
      url: 'utilisateur',
      data: {
        'nom' : nom,
        'email' : email,
        'mdp' : mdp
      },
      dataType: 'JSON',
      success: function (data) {
        creeLigne(data.id, data.nom, data.email);
        },
      error: function (e) {
            console.log(e.responseText);
        }
    });
  }

  function transferreInscription(id, nom, email) {
    $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });

    $.ajax({
      type: 'POST',
      url: 'inscription/transferre',
      data: {
        'id' : id,
        'nom' : nom,
        'email' : email,
      },
      dataType: 'JSON',
      success: function (data) {
        if(data.id == "estDeja") {
          $.alert({ // cas où un utilisateur est déjà inscrit avec le mail email
            theme: 'dark',
            type: 'red',
            columnClass: 'large',
            title: 'Attention!',
            content: data.message,
          });
        } else { // Si pas d'utilisateur avec le même email, on crée sa ligne et on détruit l'autre
          creeLigne(data.id, nom, email);
          $('#ligneInsc_'+id).remove();
        }
      },
      error: function (e) {
            console.log(e.responseText);
      }
    });
  };

  function modifie(id, nom, email) {
    $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });

    $.ajax({
      type: 'PUT',
      url: 'utilisateur/'+id,
      data: {
        'nom' : nom,
        'email' : email,
      },
      dataType: 'JSON',
      success: function (data) {
        modifieLigne(id, nom, email);
        },
      error: function (e) {
            console.log(e.responseText);
        }
    });
  };


  function supprimer(ligne_id, url, id) {
    console.log(url);
    $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });

    $.ajax({
      type: 'DELETE',
      url: url+id,

      success: function (data) {
        $(ligne_id).remove();

        },
      error: function (e) {
            console.log(e.responseText);
        }
    });
  };

  function creeLigne(id, nom, email) {
    $('tbody#user').append('<tr><td id="nom_'+id+'" class="nom">'+nom+'</td>' +
              '<td id="email_'+id+'" class="modifEmail curseur">'+email+'</td>' +
              '<td id="saisies_'+id+'" class="text-center saisies">0</td>' +
              '<td id="admin_'+id+'" class="text-center">NON</td>' +
              '<td id="modifier_'+id+'" class="modifier cell-delmod">' +
                '<img src="http://localhost/pansebete/core/public/img/admin/modifie_gris.svg" alt="Modifier" title="Pour modifier ce nouvel utilisateur, il faut rafraichir la page (touche F5)">' +
              '</td>' +
              '<td id="moins_'+id+'" class="supprimer cell-delmod" title="Pour supprimer ce nouvel utilisateur, il faut rafraichir la page (touche F5)">' +
                '<img src="http://localhost/pansebete/core/public/img/admin/moins_gris.svg" alt="Supprimer" >' +
              '</td></tr>');
  }

  function modifieLigne(id, nom, email) {
    $('#nom_'+id).html(nom);
    $('#email_'+id).html(email);
  }

  function transferer(id) {
    $.confirm({
      columnClass: 'large',
      theme : 'dark',
      type : 'green',
      buttons : {
        annuler : function(){}
      },
      content : function() {
        var self = this;
        return $.ajax({
          url: 'utilisateur/tousSauf/'+id,
          dataType: 'json',
          method: 'get'
        }).done(function(response){
          self.setTitle("Cliquer sur l'utilisateur choisi:")

          $.each(JSON.parse(response), function(key, val) {
            self.setContentAppend(
              '<div id="'+val.id+'" user="'+id+'" class="nom curseur">'+val.name+'</div>');
          })

        }).fail(function(){
          self.setContent('Y eu une couille dans le pâté')
        })
      },
      onContentReady: function () {
          // when content is fetched & rendered in DOM
          $('.nom').on('click', function() {
              var ancien_user = $(this).attr('user');
              var nouveau_user = $(this).attr('id');
              $.ajax({
                url: 'utilisateur/changeSaisieUser/'+ancien_user+'/'+nouveau_user,
                dataType: 'json',
                method: 'get'
              }).done(function(response){
                supprimer(ancien_user);
                $.alert({
                  columnClass: 'large',
                  theme: 'supervan',
                  type: 'green',
                  title: "C'est fait",
                  content: "déplacement des saisies & suppression d'un utilisateur",
                  buttons: {
                    Fermer: {
                      btnClass: 'btn-green',
                      action: function() {
                        location.reload();
                      }
                    }
                  }
                })
              })
          })
        }
    });
  }

// Supprimer directement les inscriptions à qui on ne répond pas
  $('.ligne_inscription').on('click', '.destroy', function(){
    var inscription_id = $(this).attr('id').split('_')[1];
    var nom = $('#nomInsc_'+inscription_id).html();
    var ligne_id = '#ligneInsc_'+inscription_id;
    var url = 'inscription/destroy/';
    $.confirm({
      columnClass : 'large',
      type : 'red',
      theme : 'dark',
      title : "Suppression de "+nom+" !",
      content : 'Etes-vous sûr de vouloir supprimer définitivement '+nom,
      buttons : {
        supprimer : function() {
          supprimer(ligne_id, url, inscription_id);
        },
        annuler : function() {
        }
      }
    })
  });

// Transferrer les inscriptions que l'on garde
  $('.ligne_inscription').on('click', '.garder', function() {
    var inscription_id = $(this).attr('id').split('_')[1];
    var nom = $('#nomInsc_'+inscription_id).html();
    var email = $('#emailInsc_'+inscription_id).html();
    transferreInscription(inscription_id, nom, email);
  })
})
