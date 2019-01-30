"use strict";
//initialisation de la Fonction
$(document).ready(function() {

  var rows = 4; //change this also in css
  var cols = 6; //change this also in css
  var staggerTime = 150;
 
  //Selection des images a afficher dans la galerie
  var urls = [
    "./images/screen/ffxiv_01092017_153745.png",
    "./images/screen/ffxiv_02092017_212747.png",
    "./images/screen/ffxiv_02112017_000310.png",
    "./images/screen/ffxiv_03052018_175353.png",
    "./images/screen/ffxiv_03072017_210616.png",
    "./images/screen/ffxiv_05112017_233216.png",
    "./images/screen/ffxiv_09112017_160454.png",
    "./images/screen/ffxiv_11072017_210519.png",
    "./images/screen/ffxiv_11102017_004516.png",
    "./images/screen/ffxiv_11112017_000651.png",
    "./images/screen/ffxiv_13112015_193940.png",
    "./images/screen/ffxiv_15102017_131722.png",
    "./images/screen/ffxiv_15122017_145251.png",
    "./images/screen/ffxiv_17042018_082745.png",
    "./images/screen/ffxiv_18062017_182731.png",
    "./images/screen/ffxiv_19062017_005117.png",
    "./images/screen/ffxiv_19062017_210805.png",
    "./images/screen/ffxiv_22102017_212900.png",
    "./images/screen/ffxiv_23062017_181755.png",
    "./images/screen/ffxiv_26062017_203647.png",
    "./images/screen/ffxiv_28062017_210516.png",
    "./images/screen/ffxiv_28102017_183034.png",
    "./images/screen/ffxiv_30082018_195656.png",
    "./images/screen/ffxiv_31102017_202226.png",
    
  ];

  //Mise en place du CSS de la transition
  var $gallery = $(".gal__gallery");
  var $help = $(".gal__help");
  var partsArray = [];
  var reqAnimFr = (function() {
    return window.requestAnimationFrame || function(cb) {
      setTimeout(cb, 1000 / 60);
    }
  })();

  //Lancement de l'animation de transition
  for (let row = 1; row <= rows; row++) {
    partsArray[row - 1] = [];
    for (let col = 1; col <= cols; col++) {
      $gallery.append(`<div class="show-front gal__part gal__part-${row}-${col}" row="${row}" col="${col}"><div class="gal__part-back"><div class="gal__part-back-inner"></div></div><div class="gal__part-front"></div></div>`);
      partsArray[row - 1][col - 1] = new Part();
    }
  }

  
  var $parts = $(".gal__part");
  var $image = $(".gal__part-back-inner");
  var help = true;

  for (let i = 0; i < $parts.length; i++) {
    $parts.find(".gal__part-front").eq(i).css("background-image", `url(${urls[i]})`);
  }

  //selection des variables au clique et lancemet de la fonction
  $gallery.on("click", ".gal__part-front", function() {

    $image.css("background-image", $(this).css("background-image"));

    let row = +$(this).closest(".gal__part").attr("row");
    let col = +$(this).closest(".gal__part").attr("col");
    waveChange(row, col);
  });
  
  //Retour a l'état initial
  $gallery.on("click", ".gal__part-back", function() {
    if (!isShowingBack()) return;


    setTimeout(function() {
      for (let row = 1; row <= rows; row++) {
        for (let col = 1; col <= cols; col++) {
          partsArray[row - 1][col - 1].showing = "front";
        }
      }
    }, staggerTime + $parts.length * staggerTime / 10);
    
    
    showFront(0, $parts.length);
    
  });
  //Fonction retour 
  function showFront(i, maxI) {
    if (i >= maxI) return;
    $parts.eq(i).addClass("show-front");
    
    reqAnimFr(function() {
      showFront(i + 1);
    });
  }

  function isShowingBack() {
    return partsArray[0][0].showing == "back" && partsArray[0][cols - 1].showing == "back" && partsArray[rows - 1][0].showing == "back" && partsArray[rows - 1][cols - 1].showing == "back";
  }

  function Part() {
    this.showing = "front";
  }

  //animation de retournement des cartes
  function waveChange(rowN, colN) {
    if (rowN > rows || colN > cols || rowN <= 0 || colN <= 0) return;
    if (partsArray[rowN - 1][colN - 1].showing == "back") return;
    $(".gal__part-" + rowN + "-" + colN).removeClass("show-front");
    partsArray[rowN - 1][colN - 1].showing = "back";
    setTimeout(function() {
      waveChange(rowN + 1, colN);
      waveChange(rowN - 1, colN);
      waveChange(rowN, colN + 1);
      waveChange(rowN, colN - 1);
    }, staggerTime);
  }
});