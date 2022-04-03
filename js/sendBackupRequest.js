function sendRequest(){
    let files=['accounts','activities','families','general_billings','partners_activities','partners']
    document.getElementById('modal-bkp').style.display='none'
    document.getElementById('loader').style.display='block'
    files.forEach(e=>generateFiles(e))
    document.getElementById('modal-bkp').style.display='block'
    document.getElementById('loader').style.display='none'
    document.getElementById('btn-modal').click()

}
function generateFiles(file){
    try {
        $.ajax({
          url:'./services/backup.php',
          type:'POST',
          dataType:'JSON',
          data:{
            'file':file,
            
          },
     
        }).then(function(datos){
            window.open(`./files/${file}.csv`)
         })    
        
       } catch (error) {
         console.log(error)
       }
}