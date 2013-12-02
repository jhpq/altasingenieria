
    $(document).ready(function(){
        $("#select1").change(function(event){
            var id = $("#select1").find(':selected').val();
            $("#select2").load('func.inc.php?id='+id);
        });
    });
