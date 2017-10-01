document.addEventListener('DOMContentLoaded', function(){

    // Menu Mobile
    var btnMenu = document.querySelector('.mobile-menu-btn');
    btnMenu.addEventListener('click', function(){
        var nav = document.querySelector('.nav');
        nav.classList.toggle('show');
    });

    // Wave Animation
    var wave = document.querySelector('#waterWave');

    if(wave) {
        var firstWave  = wave.querySelector('.st1');
        var secondWave = wave.querySelector('.st2');
        var thirdWave  = wave.querySelector('.st3');
        
        var tlWave = new TimelineMax({ repeat: -1, yoyo:true});
    
        tlWave.add( TweenLite.to(thirdWave, .8, { y: -5, ease: Back.easeOut.config(1.7) }));
        tlWave.add( TweenLite.to(secondWave, .8, { y: -5, ease: Back.easeOut.config(1.7) }), 0.3);
        tlWave.add( TweenLite.to(firstWave, .8, { y: -5, ease: Back.easeOut.config(1.7) }), 0.6);
        tlWave.play();
    }

    

    // Welcome Animation
    var welcomeSection = document.querySelector('.welcome');

    if(welcomeSection) {
        var btnJoin = welcomeSection.querySelector('.call-btn');
        
        var ctrlWelcome = new ScrollMagic.Controller();
        var sceneWelcome = new ScrollMagic.Scene({
                triggerElement: welcomeSection,
                offset: 340
            })
            .on("start", function(){
                console.log(btnJoin);
                TweenMax.to(btnJoin, 1, { scale: 1.2, ease: Back.easeOut.config(1.7) });
            })
            .addTo(ctrlWelcome);
    }
    


    // Adventures Animation
    var adventureSection = document.querySelector('.adventures-home');

    if(adventureSection) {
        var adventureImages  = adventureSection.querySelectorAll('.adventures-image');
        
        var ctrladventure = new ScrollMagic.Controller();
        var sceneadventure = new ScrollMagic.Scene({
            triggerElement: adventureSection
        })
        .on("start", function(){
            TweenMax.staggerTo(".adventures-image", 2, {scale:1, opacity:1, y: 0, delay:0.5, ease:Elastic.easeOut, force3D:true}, 0.2);
        })
        .addTo(ctrladventure);
    }
    
    

    // Guides Animation
    var guidesSection = document.querySelector('.guides-home');

    if(guidesSection) {
        var ctrlGuides = new ScrollMagic.Controller();
        var sceneGuides = new ScrollMagic.Scene({
            triggerElement: guidesSection
        })
        .on("start", function(){
            TweenMax.staggerTo(".guides-item", 1, {scale:1, opacity:1, x: 0, delay:0.5, ease: Power1.easeOut, force3D:true}, 0.2);
        })
        .addTo(ctrlGuides);
    }

});

// Using jQuery to Show Guides Info
$(function(){
    $('.guides-info h4').on('click', function(){
        $(this).siblings('.info').toggle();
        if($(this).siblings('.info').is(":visible")) {
            $(this).find('.icon').html('-');
        } else {
            $(this).find('.icon').html('+');
        }
    });
});
