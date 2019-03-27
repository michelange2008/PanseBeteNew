$(function() {
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
          action : function() {
            var nom = this.$content.find('.nom').val();
            var email = this.$content.find('.email').val();
            var mdp1 = this.$content.find('.mdp1').val();
            var mdp2 = this.$content.find('.mdp2').val();
            if(verifChampsRemplis(nom, email, mdp1, mdp2) && verifEmail(email) && verifMdpEgal(mdp1, mdp2) && verifTailleMdp(mdp1)) {
              console.log("c'est bon");
            }
            else {
              return false;
            }
          }
        }
      }
    })
  })

  function verifChampsRemplis(nom, email, mdp1, mdp2) {
    if(!nom || !email || !mdp1 || !mdp2) {
      alerte('Il faut remplir tous les champs');
      return false;
    }
    return true;
  }

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
})
