window.onload = function() {
    
document.getElementById("lookup").addEventListener("click",function() {
    if (document.getElementById('cbox').checked){
    
        var cboxURL=document.getElementById("cbox").value;
        var GURL="https://webdevlab7-ssjkyzer.c9users.io/world.php?all=" + cboxURL;
    }
    else{
        
        var URL= document.getElementById("country").value;
        var GURL= "https://webdevlab7-ssjkyzer.c9users.io/world.php?country=" + URL;
    }
    
   $.ajax({
       url:GURL,
        method:"GET",}).done(function(data){
       document.getElementById("result").innerHTML=data;
        });
})};



        
        
        
        
        