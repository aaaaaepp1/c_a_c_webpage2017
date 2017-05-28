/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
var menuIsOpened = false;
var currentHandleId = '';

function setCurrentHandleId(id) {
    currentHandleId = id;
}

function moveMenu() {
    menuIsOpened = !menuIsOpened;
    var moveTo = menuIsOpened ? '0px' : '-500px';
    $("#menuBackground").animate({
        left: moveTo
    }, 500, 'easeOutQuint');
}

function showPortfolioMenu(bool) {
    console.log('mouse over');
    var moveTo = bool ? '400px' : '0px';
    $('#ground').stop();
    $('#ground').animate({
        left: moveTo
    }, 500, 'easeOutQuint');
}

function setImage(number) {
    var imageUrl = currentHandleId + './img/' + number + '.png';
    var showreelElement = document.getElementById('showreel');
    var showreelBlurElement = document.getElementById('showreelBlur');
    showreelElement.style.backgroundImage = 'url(' + imageUrl + ')';
    showreelBlurElement.style.backgroundImage = 'url(' + imageUrl + ')';
    console.log(imageUrl);
    
}
