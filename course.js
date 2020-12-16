(function (){
    console.log('hello');
})();

function avgNum1(n1,n2,n3){
    sum=n1+n2+n3;
    return sum/3;
}
var avg1=avgNum1(80,90,70);
console.log(avg1);

var avg3=function(n1,n2,n3){
    var sum=function(){
        return n1+n2+n3;
    }
    return sum/3;
}
var avg3=avgNum3(80,90,45);
console.log(avg3);



var avgNum2=function(n1,n2,n3){
    return function(){
        return n1+n2+n3;
    }()/3;
}
var avgNum2=avgNum2(100,80,50)
console.log(avg2);

var avgNum4=function(n1,n2,n3){
    return function(){
        return(n1+n2+n3)/3
    };
}

var avg4=avgNum4(51)

var greet=function(msg){
    return function(fname,lname)

}
greet('welcome')('sangita','marri');