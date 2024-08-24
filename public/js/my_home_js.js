foucusFav()
function foucusFav() {
    setTimeout(function(){


        for(let i = 1 ; i<400; i++){
            if(localStorage.getItem(`my_fav_form_home${i}`)){
                if(document.getElementById(i)){
                    document.getElementById(i).classList.add("selected");
                    // document.getElementById(myEle.id).className = 'fav-icon selected'
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
        console.log('not added')
    }else{
        localStorage.setItem(`my_fav_form_home${this.id}`, this.id)
        console.log('added')
    }
})
});


