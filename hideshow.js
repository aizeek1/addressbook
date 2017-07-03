/*global $*/ 

window.onload = function(){
            $("#hide").click(function(){
              $("#table").hide();
              $("#table1").show();
              
              //return false;
            });
            $("#show").click(function(){
              $("#table").show();
              $("#table1").hide();
              $(".ta").hide();
              //return false;
            });
          };