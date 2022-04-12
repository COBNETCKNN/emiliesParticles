jQuery(document).ready(function(jQuery){

  setTimeout(function(){
    nextParticle = new NextParticle({
        image: document.all.particles,
        width: window.innerWidth,
        height: window.innerHeight,
        maxWidth: window.innerWidth * 0.8,
        particleGap: 3
      });
      window.onresize = function () {
        if (window.innerWidth > 700) {
          nextParticle.width = window.innerWidth - 20;
          nextParticle.height = window.innerHeight - 20;
          nextParticle.start();
        }
      };
}, 1000); 



    window.onload = function() {
        Particles.init({
            selector: '.background',
            maxParticles: 1000,
            color: '#d4d4d8',
            sizeVariations: 1.2,
            speed: 1,
  });
};

});