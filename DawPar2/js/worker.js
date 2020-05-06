var apiDomain = "http://dawpar2.construtec.xyz/_controller/cases?";
function fillTable() {
    $.ajax({
        url: apiDomain + 'data=allIncidents',
        method:'GET',

        success: function (data) {
            //console.log(data);

            var html = '';

            if(data=='Data was not founded'){
                html += '<tr>' +
                    '<td colspan="3">'+data+'</td>'+
                    '</tr>'
            }else{
                for(var i = 0; i < data.length; i++){

                    html += '<tr>' +
                        '<td>'+data[i].id+'</td>'+
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


$( document ).ready(function() {
    fillTable();


    setTimeout(function(){
        fillTable();
    }, 5000);
});