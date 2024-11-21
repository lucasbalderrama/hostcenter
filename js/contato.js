function comentario(event) {
    event.preventDefault();
    Swal.fire({
        title: "Comentário enviado com sucesso!",
        icon: "success"
    });
}

// nav
let antesScrollTop = 0;
navbar = document.getElementById("header");
window.addEventListener("scroll", function(){
    let scrollTop = window.scrollY || document.documentElement.scrollTop;
    if(scrollTop > antesScrollTop){
        navbar.classList.add('ativo');
    } else {
        navbar.classList.remove('ativo');
    }
    antesScrollTop = scrollTop;
})
