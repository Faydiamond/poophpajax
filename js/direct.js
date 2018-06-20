$(function()
{
        //Onready state
        console.log('Hey other file .js....');
});
//when click in the button send:
$('#Send').click(function()
{
    //variables with jquery
    console.log('Click in button send...');
    var Na=$('#Name').val();
    var La=$('#LaName').val();
    var Ag=$('#Ag').val();
    var Dn=$('#Dni').val();
    console.log(Na+ ' | '+ La+' | '+Ag+' | '+Dn );
    //Data that send
    var Data='Name='+Na+'&LaName='+La+'&Ag='+Ag+'&Dni='+Dn;
    //alert(Data);
    //route php
    var Url='php/pr2.php';
    
    $.ajax({
        type: 'post',
        url: Url,
        data: Data,
        beforeSend: function() {
            console.log('waiting...');
        },
        success: function(response) {
            $('#Res').html(response);
        },
        error: function() {
            console.log('Ha salido algo mal,revisa por favor...');
        }
    });
        
});