(function(){
    let boite__modale = document.querySelector(".boite__modale");
    let boite__modale__fermeture = document.querySelector(".boite__modale__fermeture");
    let cours__desc__ouvrir = document.querySelectorAll('.cours__desc__ouvrir');
    

    for(const bout of cours__desc__ouvrir){
        bout.addEventListener('mousedown', function(){
            //console.log(this.parentNode.parentNode.className);
            boite__modale.classList.add("ouvrir");
            console.log(boite__modale.classList);
        })
    }
    
})()