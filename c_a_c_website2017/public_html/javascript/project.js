/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


//function which control image when mouse hover
function hoverProjectContents(hoverIn, comp) {
    var imgNode = comp.children[0];
    var imgBluredNode = comp.children[1];
    var readMoreNode = comp.children[2];
    
    $(imgNode).stop();
    $(imgBluredNode).stop();
    $(readMoreNode).stop();
    
    var targetSize = hoverIn ? "120%" : "100%";
    var targetOpacity = hoverIn ? "0.0" : "1.0";
    var readMoreTargetWidth = hoverIn ? "150px" : "100px";
    $(imgNode).animate({
        backgroundSize: targetSize,
        opacity : targetOpacity
    }, 500, 'easeOutQuint');
    $(imgBluredNode).animate({
        backgroundSize: targetSize
    }, 500, 'easeOutQuint');
    $(readMoreNode).animate({
        width: readMoreTargetWidth
    }, 500, 'easeOutBounce');
}
