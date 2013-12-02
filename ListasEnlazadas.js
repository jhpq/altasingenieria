
$(document).ready(function() {
    $.ajax({
        url: 'genera-select.php?Action=selectCarrera',
        success: function(Datos) {
            console.log(Datos[1].carrera);
            for (x = 0; x < Datos.length; x++) {
               
                $("#selectCarrera").append("<option value='"+  Datos[x].carreras_id + "'>"+ Datos[x].carrera +"</option>");
                ///$("selectCarrera").append(new Option(Datos[x].carrera, Datos[x].id));
            }
        }
    })
});
$('#selectCarrera').change(function() {
    $('#selectPlan').empty();
    $.getJSON('datos.php', {Action: 'selectPlan', id: $('#selectPlan option:selected').val()}, function(Datos) {
        for (x = 0; x < Datos.length; x++) {
            $('#selectPlan').append(new Option(Datos[x].plan, Datos[x].id));
        }
    })
});  
$('#selectPlan').change(function() {
    $('#selectMateria').empty();
    $.getJSON('datos.php', {Action: 'selectMateria', id: $('#selectMateria option:selected').val()}, function(Datos) {
        for (x = 0; x < Datos.length; x++) {
            $('#selectMateria').append(new Option(Datos[x].materia, Datos[x].id));
        }
    })
});
$('#selectMateria').change(function() {
    $.getJSON('datos.php', {Action: 'select', id: $('#selectPlan option:selected').val()}, function(Datos) {
        for (x = 0; x < Datos.length; x++) {
            $('#selectPlan').append(new Option(Datos[x].plan, Datos[x].id));
        }
    })
});
