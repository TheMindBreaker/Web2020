var apiDomain = "http://dawpar2.construtec.xyz/_controller/cases?";
function getPlaces() {

    $.ajax({
        url: apiDomain + 'data=getPlaces',
        method:'GET',

        success: function (data) {
            //console.log(data);


            for(var i = 0; i < data.length; i++){
                var html = '';
                html += '<option value='+data[i].id+
                    '>'+data[i].placeName+'</option>'

                $('#incidentPlace').append(html);


            }

        },
        error: function (data) {
        }
    });

}

function getType() {

    $.ajax({
        url: apiDomain + 'data=getType',
        method:'GET',

        success: function (data) {
            //console.log(data);


            for(var i = 0; i < data.length; i++){
                var html = '';
                html += '<option value='+data[i].id+
                    '>'+data[i].typeName+'</option>'

                $('#incidentType').append(html);


            }

        },
        error: function (data) {
        }
    });

}




function getType() {

    $.ajax({
        url: apiDomain + 'data=getType',
        method:'GET',

        success: function (data) {
            //console.log(data);


            for(var i = 0; i < data.length; i++){
                var html = '';
                html += '<option value='+data[i].id+
                    '>'+data[i].typeName+'</option>'

                $('#incidentType').append(html);


            }

        },
        error: function (data) {
        }
    });

}

function addPlace(){
    $('#addPlace').submit(function(event) {

        var formData = {
            'placeName'              : $('input[name=placeName]').val(),
        };


        $.ajax({
            type        : 'POST',
            url         : '../_controller/cases?data=addPlace',
            data        : formData,
            dataType    : 'json',
            encode          : true
        })
            .done(function(data) {

                alert(data);
                $('input[name=placeName]').val("");
            });

        event.preventDefault();

    });
}

function addType(){
    $('#addType').submit(function(event) {

        var formData = {
            'typeName'              : $('input[name=typeName]').val(),
        };


        $.ajax({
            type        : 'POST',
            url         : '../_controller/cases?data=addType',
            data        : formData,
            dataType    : 'json',
            encode          : true
        })
            .done(function(data) {
                $('input[name=typeName]').val("");
                alert(data)
            });

        event.preventDefault();

    });
}
function sendTo(url){
    window.location.replace(url);

}

function addIncident(){
    $('#addIncident').submit(function(event) {

        var formData = {
            'type'              : $('select[name=type]').children("option:selected").val(),
            'place'             : $('select[name=place]').children("option:selected").val(),
        };


        $.ajax({
            type        : 'POST', // define the type of HTTP verb we want to use (POST for our form)
            url         : '../_controller/cases?data=addIncident', // the url where we want to POST
            data        : formData, // our d?data=addIncidentata object
            dataType    : 'json', // what type of data do we expect back from the server
            encode          : true
        })
            // using the done promise callback
            .done(function(data) {

                // log data to the console so we can see
                alert(data)
                sendTo("index");

                // here we will handle errors and validation messages
            });

        // stop the form from submitting the normal way and refreshing the page
        event.preventDefault();

    });
}
$( document ).ready(function() {
    getPlaces();
    getType();
    addIncident();
    addPlace();
    addType();



});