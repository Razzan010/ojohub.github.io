<script>
    var x = document.getElementById('output');
    
   function getLocation(){
       if(navigator.geolocation){
           navigator.geolocation.getCurrentPosition(showPosition);
       }else{
           x.innerHTML = "Not Suppoerting";           
       }
   }
   
   function showPosition(position){
           x.innerHTML = position.coords.latitude; 
           x.innerHTML = "<br>";             
           x.innerHTML = position.coords.longitude             
   }
   
   function showPosition(position){
           x.innerHTML = "Lati = "+position.coords.latitude; 
           x.innerHTML += "<br>";             
           x.innerHTML += "Longi = "+position.coords.longitude             
   }   
</script>