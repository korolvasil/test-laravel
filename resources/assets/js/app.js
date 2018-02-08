/*
*  Active-BArs
*  hide top bar on scroll & toggle side bar on toggle button clicking
*/
(function(){
    'use strict';
    var h = document.getElementById('active-header'); // header
    var hAClass = '--hide-head'; // header activate class
    //var hs = true; // status of header
    var shadow = h.getElementsByClassName('overlay-shadow')[0];// shadow
    var a = document.getElementById('active-aside'); // aside
    var aAClass = '--show-bar'; // aside activated class
    var as = false; // status of aside
    var t = document.getElementById('aside-toggler'); // aside-toggler
    var Y = window.pageYOffset; // current Y position
    t.onclick = function(){
        a.classList.toggle(aAClass);
        if(!as){
            shadow.style.width = "100%";
            document.body.classList.add('--noscroll');
        } else {
            shadow.style.width = "0px";
            document.body.classList.remove('--noscroll');
        }
        as = !as;
    };
    window.onscroll = function() {
        if(!as){
            if(window.pageYOffset-Y>0){h.classList.add(hAClass);}
            else {h.classList.remove(hAClass);}
            Y = window.pageYOffset;
        }
    };
})();