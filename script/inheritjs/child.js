Child = function(){
  var thisObject;
  var parentObject;
  var name ="Child";
  
  this.ctor = function(){
      thisObject = this;
      function a() {}
      if ( (new a).__proto__ === a.prototype ){
        console.log("__proto__ supported");
        parentObject = thisObject.__proto__;
      }
      else {
        console.log("__proto__ not supported");
        parentObject = thisObject.constructor.prototype;
      }
      if (parentObject.ctor!==undefined)
        parentObject.ctor();
  };
  this.getName = function() {
    console.log("I am a "+name);
    return name;
  };
}