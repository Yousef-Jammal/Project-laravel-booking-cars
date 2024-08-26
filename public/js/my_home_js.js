foucusFav()
function foucusFav() {
    setTimeout(function(){


        for(let i = 1 ; i<400; i++){
            if(localStorage.getItem(`my_fav_form_home${i}`)){
                if(document.getElementById(i)){
                    document.getElementById(i).classList.add("selected");
                }
            }
        }

    },500);
}

let listEle = document.querySelectorAll('.my_fav_for_js');
listEle.forEach(function(elem) {
    elem.addEventListener('click', function () {

    if(localStorage.getItem(`my_fav_form_home${this.id}`)){
        localStorage.removeItem(`my_fav_form_home${this.id}`);

    }else{
        localStorage.setItem(`my_fav_form_home${this.id}`, this.id)

    }
})
});


function for_ajax_fav_home(elem) {
    if(localStorage.getItem(`my_fav_form_home${elem.id}`)){
        localStorage.removeItem(`my_fav_form_home${elem.id}`);
        elem.classList.remove("selected");
    }else{
        localStorage.setItem(`my_fav_form_home${elem.id}`, elem.id)
        elem.classList.add("selected");
    }
}


