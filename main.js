/* VARIABLES GLOBALES PARA API */
var url = "https://farmanet.minsal.cl/maps/index.php/utilidades";
var reg_id, com_id, emp_id, loc_id;
$(document).ready(function () {
    /* CARGAR REGIONES EN SELECT */
    region();
    /* CARGAR LIBRERIA DE SELECT2 PARA REALIZAR BUSQUEDA DE REGIONES  */
    $('.js-example-basic-single').select2({
        theme: "bootstrap-5"
    });
});
/* FUNCION REGION OBTENER REGIONES DEL PAIS */
function region() {
    $.ajax({
        url: url + '/maps_obtener_regiones',
        type: "POST",
        success: function (data) {
            $("#select_region").html(data);
            comuna_2();
        }
    });
};
/* CARGAR INFORMACION EN TEXTBOX  */
function cargar() {
    $("#select_comuna").change(function () {
        $("#select_comuna option:selected").each(function () {
            var grupo = $("#select_comuna").val();
            $.ajax({
                url: "./php/cargar_info.php",
                type: "POST",
                dataType: "json",
                data: {
                    grupo: grupo
                },
                success: function (data) {
                    $("#txt_farma").val(data["local_nombre"]);
                    $("#txt_dire").val(data["local_direccion"]);
                    $("#txt_fecha").val(data["fecha"]);
                }
            });
        });
    });
};
/* CARGAR COMUNAS A SELECT */
function comuna_2(){ 
    $("#select_region").change( function () {
        $("#select_region option:selected").each(function () {
            reg_id = $("#select_region").val();
            $.ajax({
                url: url+'/maps_obtener_comunas_por_regiones',
                type: "POST",
                data: { 
                    reg_id: reg_id 
                },
                success: function (data) {
                    cargar_info('select_comuna',data);
                    cargar();
                }
            });
        });
    });
};
/* FUNCION PARA CARGAR INFORMACION PASANDO LOS VALORES DE ID DEL ELEMENTO HTML Y INFO PASA A SER EL DATA DE SUCCESS O DONE */
function cargar_info(id,info){
    //ocultar(id);
    javascript:document.getElementById(id).selectedIndex = 0;
    $('#'+id).html(info,function(){
      //console.log("0x1");
    });
};




