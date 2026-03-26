document.addEventListener("DOMContentLoaded", function () {
    const text = "I'm Alto Desdery Kiyamba 'Allyvanny', Computer Science Student, at MUST!";

    let index = 0;
    function typeEffect() {
        if (index < text.length) {
            document.getElementById("typing").innerHTML += text.charAt(index);
            index++;
            setTimeout(typeEffect, 100); // Adjust speed here
        }
    }
    typeEffect();
});


 <script type="text/javascript">
   
   function futa(){
  var del= confirm(" Do you want to delete?");
  console.log(uid);
  if (del){
    alert("Successiful Deleted...");
    window.location='?id='+uid;
  }
 
}
 </script>