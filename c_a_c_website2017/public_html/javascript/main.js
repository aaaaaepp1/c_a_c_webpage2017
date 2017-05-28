/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//define functions which fire when page is scrolled
window.onscroll = function() {
    
};

//functions for main menu on the index
function hoverMainMenu(idName, hover) {
    //define id name
    var imgIdName = 'mainMenu__' + idName + 'Link';
    var moreButtonIdName = 'mainMenu__' + idName + 'LinkMoreButton';
    
    //get elment instance from id name
    var imgElement = document.getElementById(imgIdName);
    var moreButtonElement = document.getElementById(moreButtonIdName);
    
    //stop animation
    $(imgElement).stop();
    $(moreButtonElement).stop();
    
    //define animation of background img
    var moveHeight = hover ? "430px" : "400px";
    $(imgElement).animate({
        height: moveHeight
    }, 700, 'easeOutQuint');
    
    //define animation of more button
    var moreButtonColor = hover ? "rgba(255, 255, 255,1.0)" : "rgba(255, 255, 255,0.0)";
    var moreButtonTextColor = hover ? moreButtonElement.parentNode.style.backgroundColor : "#ffffff";
    $(moreButtonElement).animate({
        backgroundColor: moreButtonColor,
        color: moreButtonTextColor
    }, 700, 'easeOutQuint');
}