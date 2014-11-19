inherit.js
==========
Description
===========
Use Inheritable and closure-enabled class 
==========
Usage
==========
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
  
