(function(){
    let boite__carrousel = document.querySelector(".boite__carrousel");
    let boite__carrousel__navigation = document.querySelector(".boite__carrousel__navigation");
    let boite__carrousel__fermeture = document.querySelector(".boite__carrousel__fermeture");
    let galerie__img = document.querySelectorAll('.galerie img');
    
    boite__carrousel__fermeture.addEventListener('mousedown', function(){
        boite__carrousel.classList.remove("ouvrir");
    });

    let elmImg = document.createElement('img');
    boite__carrousel.append(elmImg);

    let index = 0;
    for(const img of galerie__img){
        let bouton = document.createElement('button');
        bouton.dataset.index = index++;
        boite__carrousel__navigation.append(bouton);
        bouton.addEventListener('mousedown', function(){
            elmImg.setAttribute('src', galerie__img[this.dataset.index].getAttribute('src'))
        })

        img.addEventListener('mousedown', function(){
            //console.log(this.parentNode.parentNode.className);
            boite__carrousel.classList.add("ouvrir");
            //boite__carrousel__navigation.innerHTML = this.getAttribute('src');
            elmImg.setAttribute('src', this.getAttribute('src'));
        })
    }


})()