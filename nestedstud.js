var showTotal=function(m1,m2,m3){
    return function(){
        return m1+m2+m3;
    }()/3;

}
var printTotal=showTotal(40,50,100);
console.log('average:',printTotal);