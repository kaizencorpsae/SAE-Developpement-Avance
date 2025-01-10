//gère une transition d'apparition d'éléments
document.addEventListener("DOMContentLoaded", function(){
    const elementsToShow = document.querySelectorAll('.apparition');
    const observer = new IntersectionObserver((entries)=>{
        entries.forEach(entry=>{
            if(entry.isIntersecting){
                entry.target.style.opacity = 1;
                observer.unobserve(entry.target);
            }
        });
    },{threshold: 0.1});
    elementsToShow.forEach(element=>{
        observer.observe(element);
    });
})

//script ancrage smooth
document.querySelectorAll('a[href^="#"]').forEach(function(anchor) {
    anchor.addEventListener("click", function(event) {
        var target = document.querySelector(this.hash);
        var t = target ? target : document.querySelector('[name="' + this.hash.slice(1) + '"]');
        if (t) {
            var tOffset = t.getBoundingClientRect().top + window.scrollY;
            if (window.innerWidth < 1000) {
                window.scrollTo({ top: tOffset - 50, behavior: 'smooth' });
            }
            else {
                window.scrollTo({ top: tOffset -10, behavior: 'smooth' });
            }

            // window.scrollTo({ top: tOffset - 20, behavior: 'smooth' });
            event.preventDefault();
        }
    });
});
