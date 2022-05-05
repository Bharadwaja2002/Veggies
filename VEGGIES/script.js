const submit = document.querySelector(".submit");
const value = document.querySelector(".value");
const value2 = document.querySelector(".value2");
const value3 = document.querySelector(".value3");
const subtotal = document.querySelector(".subtotal");
const total = document.querySelector(".total")


submit.addEventListener("click", ok);

function ok(){
    const green_chilly_price = document.querySelector(".green_chilly_price").value;
    const watermelon_price = document.querySelector(".watermelon_price").value;
    const cabbage_price = document.querySelector(".cabbage_price").value;

    console.log(green_chilly_price, watermelon_price, cabbage_price)
    let data, data2, data3 = 0;
    value.innerHTML= green_chilly_price*500;
    value2.innerHTML= watermelon_price*500;
    value3.innerHTML = cabbage_price*500;
    data = value.innerHTML;
    data2 = value2.innerHTML;
    data3 = value3.innerHTML;
    subtotal.innerHTML = parseInt(data) + parseInt(data2) + parseInt(data3);
}