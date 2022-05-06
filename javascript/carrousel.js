(function(){
    let boite_carrousel = document.querySelector(".boite_carrousel");
    let boite__carrousel__navigation = document.querySelector(".boite__carrousel__navigation");
    let boite__carrousel__fermeture = document.querySelector(".boite__carrousel__fermeture");
    let galerie__img = document.querySelectorAll('.galerie img');
    
    boite__carrousel__fermeture.addEventListener('mousedown', function(){
        boite__carrousel.classList.remove("ouvrir");
    });

    let elmImg = document.createElement('img');
    boite__carrousel.append(elmImg);

    for(const img of galerie__img){
        img.addEventListener('mousedown', function(){
            //console.log(this.parentNode.parentNode.className);
            boite__carrousel.classList.add("ouvrir");
            //boite__carrousel__navigation.innerHTML = this.getAttribute('src');
            elmImg.addAttribute('src', this.getAttribute('src'));
        })
    }


})()