/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */


function anadirMovimiento(){
  
  
  
  
    var a=document.getElementById("selectCarrera").value;
    var u=document.getElementById("selectPlan").value;
    var p=document.getElementById("selectMateria").value;
    var d=document.getElementById("selectTipo").value;
    var c=document.getElementById("inputGrupo").value;
    var imp =
    
    
    else
    
    var table = document.getElementById("tabla");

    var rowCount = table.rows.length;
    var row   = table.insertRow(rowCount);
    
    var cell1 = row.insertCell(0);
    var element1 = document.createElement("input");
    element1.type = "checkbox";
    cell1.appendChild(element1);
    
    var cell2 = row.insertCell(1);
    var cell3 = row.insertCell(2);
    var cell4 = row.insertCell(3);
    var cell5 = row.insertCell(4); 
    var cell6 = row.insertCell(5);
    var cell7 = row.insertCell(6);
    
    cell2.innerHTML=a;
    cell3.innerHTML=d;
    cell4.innerHTML=u;
    cell5.innerHTML=c;
    cell6.innerHTML=p;
    cell7.innerHTML="pendiente";
    
    document.getElementById("selectCarrera").value="";
    document.getElementById("selectPlan").value="";
    document.getElementById("selectMateria").value="";
    document.getElementById("selectTipo").value="";
    
    
      
}
    


function eliminarMovimiento(){
    
    try {
            var table = document.getElementById("tabla");
            var rowCount = table.rows.length;
            
            
           
           for(var i=0; i<rowCount; i++) {
                var row = table.rows[i];
                var chkbox = row.cells[0].childNodes[0];
                if(null != chkbox && true == chkbox.checked) {

                    table.deleteRow(i);
                    rowCount--;
                    i--;
                }
 
 
            }
            }catch(e) {
                alert(e);
            }
   
}

function validate(evt) {
  var theEvent = evt || window.event;
  var key = theEvent.keyCode || theEvent.which;
  key = String.fromCharCode( key );
  var regex = /[0-9]|\./;
  if( !regex.test(key) ) {
    theEvent.returnValue = false;
    if(theEvent.preventDefault) theEvent.preventDefault();
  }
}