<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
    <script src="script/inheritjs/inherit.js"></script>
    <script src="script/inheritjs/grandParent.js"></script>
    <script src="script/inheritjs/parent.js"></script>
    <script src="script/inheritjs/child.js"></script>
    <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
    <script>
    
    $(document).ready(function () {
      GrandParent.prototype = new Inherit();
      var grandParentInstance = new GrandParent();
      grandParentInstance.ctor(); 
      alert('Introduce:'+grandParentInstance.getName());
      
      
      GrandParent.prototype = new Inherit();
      Parent.prototype = new GrandParent();
      var parentInstance = new Parent();
      parentInstance.ctor(); 
      alert('Introduce:'+parentInstance.getName());
      
      GrandParent.prototype = new Inherit();
      Parent.prototype = new GrandParent();
      Child.prototype = new GrandParent();
      var childInstance = new Child();
      childInstance.ctor(); 
      alert('Introduce:'+childInstance.getName());
      
      
      
      
    });
      
    
    </script>
  </head>
  <body>
    <?php
    // put your code here
    ?>
  </body>
</html>
