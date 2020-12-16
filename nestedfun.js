var showProduct=function(name,brand,cost){
    return function (discount){
        console.log(name,brand,cost,'discounted price:'+(cost-discount));
    }

}
showProduct('vivo Y20','Vivo',13990)(300);