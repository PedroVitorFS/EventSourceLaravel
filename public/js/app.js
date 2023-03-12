//const eventSource = new EventSource('/stream')



/*eventSource.addEventListener('a', event => {
    data = JSON.parse(event.data)
    console.log(event.data)
    console.log(event.event)
    document.getElementById("total-invoices").textContent = data.notas
});


eventSource.addEventListener('batches', event => {
    data = JSON.parse(event.data)
    console.log(data)

    if(data == 'Emitindo'){
        document.getElementById("img-emitted-invoices").style.transform = "top(10px)"
        setTimeout(() => { document.getElementById("img-emitted-invoices").style.transform = "top(0px)"}, 200)
    }

    document.getElementById("emitted-invoices").textContent = data.lotes
});

eventSource.addEventListener('notas', event => {
    data = JSON.parse(event.data)
    console.log(data)
    document.getElementById("generated-invoices").textContent = data.nota
    document.getElementById("img-generate-invoices").style.transform = "rotate(80deg)"
    setTimeout(() => { document.getElementById("img-generate-invoices").style.transform = "rotate(0deg)"}, 200)
   
});*/


/*eventSource.onerror = (err) => {
    console.log(err)
}*/

/*eventSource.onopen = (open) => {
    console.log(open)
}*/

/*eventSource.onmessage = function(event) {
    console.log(event)
}*/
