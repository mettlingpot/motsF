

/*
$( "input" ).keyup(function() {
    var value = $( this ).val();
    var position = $(this).parents('td').attr('id');
    var r = position.split('-');
    var x = r[0];
    var y = r[1];
    var plein = false;
    
    
    $.ajax({ type : 'POST',url : 'tab.php',dataType : 'json',success : function(data){
        var tab = data;
        
        if(value!=tab[x][y]){
            alert('faux');
        }else{
            alert('vrai');
        }

    } 
    });
});
*/

$(document).keyup(function(){
    var i = 0;
    $( "input" ).each(function(){
        var value = $( this ).val();
        var position = $(this).parents('td').attr('id');
        var r = position.split('-');
        var x = r[0];
        var y = r[1];
        
        $.ajax({ type : 'POST',url : 'tab.php',dataType : 'json',success : function(data){
        var tab = data;
        
        if(value == tab[x][y]){
            i++;
            //alert(i);
        }
        if(i == $( "input" ).length ){
            alert('bravo!');
        }
              
    } 
    });
    })
}); 


