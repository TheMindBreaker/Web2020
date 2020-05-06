var apiDomain = "http://dawpar2.construtec.xyz/_controller/cases?";
function fillTable() {
    $.ajax({
        url: apiDomain + 'data=allZombies',
        method:'GET',

        success: function (data) {
             //console.log(data);

            var html = '';

            for (let key in data) {
                html += '<tr>'+
                    '<td>' + key + '</td><td>'

                for(var i = 0; i < data[key].length; i++){
                    html +=  data[key][i].stateName + ' => ' + data[key][i].registeredDate + '<br/>'
                }

                    html +=  '<a class="waves-effect waves-light btn"><i class="material-icons left">add</i>Registrar estado</a>'+'<td/></tr>';
            }
            $('#allZombies tbody').html(html);
        },
        error: function (data) {
        }
    });
}

$(document).ready(function(){
    //////Modals init
    $('.modal').modal();


    /////First load
    fillTable();



    //////reloading table
    setInterval(function() {
        fillTable()
    }, 2000);
});