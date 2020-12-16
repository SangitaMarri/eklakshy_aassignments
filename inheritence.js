function Shape(length,width){
    this.length=length;
    this.width=width;
    this.details=function(){
        console.log('length:',this.length,'width:',this.width);
    }


}
function Rectangle(length,width){
    this.length=length;
    this.width=width;
    this.area=function(){
        console.log('area of rectangle:',length*width);
        this.perimeter=function(){
            console.log('perimeter of rectangle:',2*(length+width));
            Shape.call(this,length,width);
        }
    }



}

function  Triangle(length,width,side3){
    this.length=length;
    this.width=width;
    this.area=function(){
        console.log('area of triangle:',0.5*length*width);
    }
        this.perimeter=function(){
            console.log('perimeter of triangle:',length+width+side3);
        }
            Shape.call(this,length,width);
        }

        var shap=new Shape(20,12);
        shap.details();
        var rec=new Rectangle(50,14);
        rec.area();
        rec.perimeter();
        rec.details();
        var tri=new Triangle(50,17,20);
        tri.area();
        tri.perimeter();
        tri.details();