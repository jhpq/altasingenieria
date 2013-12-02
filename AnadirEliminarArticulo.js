/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */


function anadirArticulo(){
  
  
  
  
    var a=document.getElementById("art").value;
    var u=document.getElementById("unidad").value;
    var p=document.getElementById("precio").value;
    var d=document.getElementById("descripcion").value;
    var c=document.getElementById("cantidad").value;
    var imp = document.getElementById("impuesto").value;
    
    if(a==null ||a==""){
        alert("Por favor complete todo el formulario");
        return false;
        
    }
    else
    
    var table = document.getElementById("tablaArt");

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
    cell7.innerHTML=imp;
    
    document.getElementById("art").value="";
    document.getElementById("unidad").value="";
    document.getElementById("precio").value="";
    document.getElementById("descripcion").value="";
    document.getElementById("cantidad").value="";
    
    var st = parseFloat(document.getElementById("subtotal").innerText);
    
    st =st+(parseFloat(p)*parseFloat(c));
    var iva = (imp*.01) * parseFloat(p)*parseFloat(c) + parseFloat(document.getElementById("iva").innerText);
    var tot = st + iva;
    
    document.getElementById("subtotal").innerHTML = st.toFixed(2);
    document.getElementById("iva").innerHTML = iva.toFixed(2);
    document.getElementById("total").innerHTML = tot.toFixed(2);
      
}
    


function eliminarArticulo(){
    
    try {
            var table = document.getElementById("tablaArt");
            var rowCount = table.rows.length;
            var st = parseFloat(document.getElementById("subtotal").innerText);
            var iva = parseFloat(document.getElementById("iva").innerText);
            var tot = parseFloat(document.getElementById("total").innerText);
            
           
           for(var i=0; i<rowCount; i++) {
                var row = table.rows[i];
                var chkbox = row.cells[0].childNodes[0];
                if(null != chkbox && true == chkbox.checked) {
                   
                    var mst =(row.cells[5].innerText.valueOf(Number)*row.cells[4].innerText.valueOf(Number));
                    st=st-mst;
                    document.getElementById("subtotal").innerHTML = parseFloat(st).toFixed(2);
                    
                    var imp =(row.cells[6].innerText.valueOf(Number));
                    iva = iva-(mst*(imp*.01));
  
                    document.getElementById("iva").innerHTML = parseFloat(iva).toFixed(2);
                     
                     tot=tot-(mst+(mst*(imp*.01)));
                    document.getElementById("total").innerHTML = parseFloat(tot).toFixed(2);
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