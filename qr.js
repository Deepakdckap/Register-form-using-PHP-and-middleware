
let qrinput= document.querySelector("#text")
let btn = document.getElementById("button")
let qrimg= document.querySelector("#qr-img")
// console.log(qrimg)

btn.addEventListener("click",()=>{
// alert("")
    let value = qrinput.value.trim();
    qrimg.src = ` https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=${value}`
    // qrinput.value ="";
})