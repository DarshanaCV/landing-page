window.addEventListener('scroll',e=>{
    document.body.style.cssText = ` --scrollTop: ${this.scrollY}px`
})


const observer=new IntersectionObserver((entries)=>{
    entries.forEach((entry)=>{
        if(entry.isIntersecting){
            entry.target.classList.add('show');
        }
        else{
            entry.target.classList.remove('show');
        }
    });
});
const hiddenElements=document.querySelectorAll(".hidden");
hiddenElements.forEach((el)=> observer.observe(el));
