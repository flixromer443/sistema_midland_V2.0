let i=0
let codes=[]

function addToPayment(code,element){

    if(element.checked){
        codes.push(code)
        i++;
    }else{
        
        index=codes.indexOf(code)
        codes.splice(index,1)
        i--;

    }
   
}
function pay(){
    let partner=$('#partner').val()
    let number=$('#number').val()
    
    
    window.open(`./components/factura_instantanea.php?pid=${number}&&partner=${partner}&&codes=${codes} `)
}
