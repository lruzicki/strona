
let number=1

const btn=document.querySelector("button");

const addNewElement=() => {
    const table= document.createElement('table');
    document.body.appendChild(table)
    number=number+1
    if(number % 5 == 0)
    {
        table.classList.add("circle")
    }
}
btn.addEventListener('click', addNewElement);

