(document).ready(function(){
    

    

$("#form").submit(function(e){ 
    var name = $("#event").val();
    var date = $("#date").val();
    
    
     $.ajax({
         url:"consulta.php",
         type:"post",
         data:{name, date},
         success: function(t){
         console.log(t);
         $("#master").show(1000);
         e.preventDefault();
         
         }
     });
     
    });
});

$.get("consulta-obtain.php", function(t){

    var datos = JSON.parse(t);
    var table_elem = "";
    
     datos.forEach(dat =>{
        table_elem += `<tr>
        <td>${dat.evento}</td>
        <td>${dat.date}</td>
        </tr>`
    })
    $("#table").html(table_elem);
    
    console.log(datos);
})
