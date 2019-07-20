const recherche = $('#search');
var liste = [];



window.addEventListener('keypress',function(e){

document.getElementById('search').focus();

});

recherche.on('keyup',function(r){
var valeur = parseInt(recherche.val());

 if (isNaN(valeur)) { RechercheParNom();return;}

if (r.keyCode == 13 && !isNaN(valeur)) RechercheParCarte();


});


function RechercheParCarte() {
  var carte = recherche.val();
  $.ajax({
    dataType: "json",
    url: 'json/carte.php?carte='+carte,
    success: function(r){
      console.log( r.id_inscription);
      $('#renouvler').attr('onclick','renouvler("'+r.id_inscription+'")');
      afficherAgenda();
      console.log(r.details);

if (r.details && r.details.length) {

for (var i = 0; i < r.details.length; i++) {
   afficherPresence(r.details[i])
}
}




      recherche.val('');

if (r.status  == '1') {
$('#aff_nom').html(r.etudiant.nom);
$('#aff_prenom').html(r.etudiant.prenom);
$('#aff_niveau').html(r.etudiant.niveau);
$('#aff_annee').html(r.etudiant.annee);
$('#aff_carte').html(r.etudiant.carte);

afficherInfos();
$('.infos-etud').removeClass('alerte');
if (r.bloque) alerte();

} else {
  alert('non trouvé');
}
    }
  });

}

function renouvler(idinsc) {
    window.open('ajout-inscription.php?id='+idinsc, '', 'width=800px,height=440px');
}

function RechercheParNom() {
var ss = recherche.val().toUpperCase(),
sr = $('#resultatDeRecherche');
if (ss == '') {sr.html('');return;}
var resultat ='' , nomprenom;

liste.forEach(function(etd){
nomprenom = etd.nom.toUpperCase() + ' '+ etd.prenom.toUpperCase();

if (nomprenom.indexOf(ss) > -1 ) resultat += '<li onclick="affInfoManual(\''+etd.nom+'\',\''+etd.prenom+'\')">'+nomprenom+'</li>';
})
sr.html(resultat);

}


function affInfoManual(nom,prenom) {
  $('#aff_nom').html(nom);
  $('#aff_prenom').html(prenom);
afficherInfos();
}



function afficherInfos(){
  document.querySelector('.infos-etud').classList.add('afficher')
}

function cacherInfos(){
  document.querySelector('.infos-etud').classList.remove('afficher')
}


function alerte(){
  $('.infos-etud').addClass('alerte');
  var audio = document.getElementById('audio');
audio.src = 'error.mp3'
audio.play();
}



function init(){
  agenda();
  $.ajax({
    dataType: "json",
    url: 'json/dashboard.php',
    success: function(r){
// r.nombreDesEturiants
$('.nombreDesEturiants').html('<h1>'+r.nombreDesEturiants+'</h1>');
$('.nombreDesProfs').html('<h1>'+r.nombreDesProfs+'</h1>');
$('.nombreDesGroupes').html('<h1>'+r.nombreDesGroupes+'</h1>');
$('.nombreDesSeances').html('<h1>'+r.nombreDesSeances+'</h1>');
liste= r.listeDesEtudiants;
    }

  });

}


window.onload = init;






var htmlagenda = '';
function agenda() {
  var date = new Date() , cemois = date.getMonth() + 1 ;
  var html = '' , moisel = ['','Jan','Fev','Mar','Avr','Mai','Jui','Jul','Aou','Sep','Oct','Nov','Dec'];

  if (cemois < 9) cemois += 12;
for (var i = 9; i <= cemois; i++) {
  var moi = (i > 12 ? i-12 : i);
html += '<div class="col col-2">'+moisel[moi]+'<div class="mois"  id="moi-'+moi+'">';
for (var j = 1; j < 31; j++) {
html += '<div class="jr jr'+j+'" ></div>';
}
html += '</div></div>';
}

htmlagenda = html;


}


function afficherAgenda(){
  $('.agenda').html(htmlagenda);
}

//afficherPresence('2019-07-10 15:34');
function afficherPresence(inf) {
  //
  var couleur = 'vert';
if (inf.date.length < 10) {
  couleur = 'rouge';
var split = inf.id_seance.split('') ,
 m = parseInt(split[4] + ''+split[5]) ,
 j = parseInt(split[6] + ''+split[7]) ,
date = m+'-'+j;
console.log(date);

} else {
  var dt = inf.date.split(' ')[0] ,
  m = parseInt(dt.split('-')[1]),
  j= parseInt(dt.split('-')[2]);

}
el=$('#moi-'+ m+ ' .jr'+j);
el.addClass(couleur);
el.attr('title',inf.date);
el.text(j);

//<img src='img1.png'
//m
// j


}
