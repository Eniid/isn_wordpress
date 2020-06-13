document.body.classList.remove("no-js"); 
document.body.classList.add("js"); 


console.log("coucou");


const element = document.querySelector(".revers_scrool")
element.addEventListener("wheel", e=>{
    //e.preventDefault()
    element.scrollLeft += e.deltaY
}, true)


document.addEventListener("click", e=>{
    const el = e.target;
    if(el.classList.contains("lightbox_image")){
        e.preventDefault()
        const checkbox = document.querySelector("#lightbox");
        const lightbox = document.querySelector(".lightboxContainer")
        lightbox.innerHTML = ""
        const image = document.createElement("img")
        image.src = el.parentElement.getAttribute("href")
        lightbox.insertAdjacentElement("beforeend", image)
        checkbox.checked = true
        console.log("bouuu");
        
        return false; 
    }
    if(el.classList.contains("lightbox")){
        const checkbox = document.querySelector("#lightbox");
        checkbox.checked = false
    }
})