var apiDomain = "http://dawpar2.construtec.xyz/_controller/cases?";
function fillTable() {
    $.ajax({
        url: apiDomain + 'data=allIncidents',
        method:'GET',

        success: function (data) {
            //console.log(data);

            var html = '';

            if(data=="No data"){
                html += '<tr>' +
                    '<td colspan="3">'+data+'</td>'+
                    '</tr>'
            }else{
                for(var i = 0; i < data.length; i++){

                    html += '<tr>' +
                        '<td>'+i+'</td>'+
                        '<td>'+data[i].placeName+'</td>'+
                        '<td>'+data[i].typeName+'</td>'+
                        '<td>'+data[i].dateRegistered+'</td>'+
                        '</tr>'


                }
            }
            $('#allIncidents tbody').html(html);


        },
        error: function (data) {
        }
    });
}

function sendTo(url){
    window.location.replace(url);

}

$( document ).ready(function() {
    fillTable();




    setTimeout(function(){
        fillTable();
    }, 5000);
});