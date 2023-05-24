const iconeye = document.querySelector(".icon-eye");
const icon = document.querySelector(".icon");

icon.addEventListener('click', function(){
    const eye = this.querySelector("i");
    if(this.nextElementSibling.type === "password"){
        this.nextElementSibling.type = "text";
        eye.classList.remove("fa-eye-slash");
        eye.classList.add("fa-eye");
    }else {
        this.nextElementSibling.type = "password";
        eye.classList.remove("fa-eye");
        eye.classList.add("fa-eye-slash");
    }
})

iconeye.addEventListener('click', function(){
    const e = this.querySelector("i");
    if(this.nextElementSibling.type === "password"){
        this.nextElementSibling.type = "text";
        e.classList.remove("fa-eye-slash");
        e.classList.add("fa-eye");
    }else {
        this.nextElementSibling.type = "password";
        e.classList.remove("fa-eye");
        e.classList.add("fa-eye-slash");
    }
})