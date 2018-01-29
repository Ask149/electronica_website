     function dispmodal(){
      var modal= document.getElementById("myModal");
      modal.style.display="block";
     }
          function dispmodal2(x){
      var modal1= document.getElementById("inst1");
      modal.style.display="block";
     }
     
     function dispmodalupdate(x){
      var modal= document.getElementById("myModalUpdate");
      modal.style.display="block";
     // myFunc2(x);
     }
     
     function dispmodalcancel(x){
      var modal= document.getElementById("myModalCancel");
      modal.style.display="block";
     }
     
     function hidemodal(){
      var modal= document.getElementById("myModal");
       modal.style.display="none";
     }
      function hidemodal1(){
      var modal1= document.getElementById("inst1");
       modal.style.display="none";
     }
     function hidemodalupdate(){
      var modal= document.getElementById("myModalUpdate");
       modal.style.display="none";
     }
     function hidemodalcancel(){
      var modal= document.getElementById("myModalCancel");
       modal.style.display="none";
     }
      function move() {
              var elem = document.getElementById("myBar");   
              var width = 100;
              var id = setInterval(frame, 150);
              var time= 10;
              function frame() {
                if (width <= 0) {
                  clearInterval(id);
                } else {
                  width= width - 0.05;
                  elem.style.width = width+'%';
                }
              }
            }
      function value1()
      {
          document.getElementById("radio5").value=1;
      }
     
      var z=2;
      value2();
     function value2()
      {
        if (z=='3') 
        {
          document.getElementById("btn-shad").disabled= true;
          document.getElementById("btn-shad2").disabled= true;
          z=2;
        }
        if(z=='2')
        {
          document.getElementById("btn-shad").disabled= true;
          document.getElementById("btn-shad2").disabled= true;
          z=1;
        }
        if(z=='1')
        {
          document.getElementById("btn-shad").disabled= false;
          document.getElementById("btn-shad2").disabled= true;
          document.getElementById("btn-shad2").value= 0;
          z=0;
        }
        if(z=='0')
        {
          document.getElementById("btn-shad").disabled= true;
          document.getElementById("btn-shad2").disabled= true;
          document.getElementById("btn-shad2").value= 0;
        }

      }
      