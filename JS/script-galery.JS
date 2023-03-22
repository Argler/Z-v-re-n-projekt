const slides = document.querySelectorAll (".slide");

//pridani active na odposlech click

slides.forEach(function(choosen){
    choosen.addEventListener("click",function(){
        deleteActive();
    choosen.classList.add("active")
    })
})

//funkce na smazani active vsem

function deleteActive() {
    slides.forEach(function(slide){
        slide.classList.remove("active"); 
    })
}
