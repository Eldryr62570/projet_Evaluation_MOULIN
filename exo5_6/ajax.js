//On verifie les champs vide au moment ou on quitte un input

$(document).ready(function () {
  //Dés que l'utilisateur ne se focus plus sur la barre input
  $('#formulaire input[type="text"]').blur(function () {
    //Si la valeur des champs "texte" renvoie false
    if (!$(this).val()) {
      //On ajoute le fond en alert
      $(this).addClass("alert alert-danger");
      //Selectionne la div précedente et l'affiche
      $(this).prev().removeClass("hidden");
    } else {
      //Sinon on l'enléve
      $(this).removeClass("alert alert-danger");
      //Selectionne la div précedente et la cache
      $(this).prev().addClass("hidden");
    }
  });
});
//On verifie les champs vide au moment ou l'on appuie sur submit
$("#submit").click(function () {
  if ($("#name").val() == "") {
    //Si notre champ name est vide ...
    $("#name").addClass("alert alert-danger");
    $("#name").prev().removeClass("hidden");
  }
  if ($("#firstname").val() == "") {
    //Si notre firstname est vide ...
    $("#firstname").addClass("alert alert-danger");
    $("#firstname").prev().removeClass("hidden");
  }
  if ($("#mail").val() == "") {
    //Si notre mail est vide ...
    $("#mail").addClass("alert alert-danger");
    $("#mail").prev().removeClass("hidden");
  }
});
//Requête ajax
$("#formulaire").submit(function (e) {
  e.preventDefault(); //empêcher une action par défaut
  var form_url = $(this).attr("action"); //récupérer l'URL du formulaire
  var form_method = $(this).attr("method"); //récupérer la méthode GET/POST du formulaire
  var form_data = $(this).serialize(); //Encoder les éléments du formulaire pour la soumission
  //Début de ma requête ajax
  $.ajax({
    url: form_url,
    type: form_method,
    data: form_data,
  }).done(function (response) {
    //On choisi la div et on marque la réponse directement dedans
    if (response !== "") {
      $("#res").html(response);
      $("#res").addClass("alert-success");
    }
  });
});
