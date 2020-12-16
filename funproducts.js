var Product=function(name,price){
    this.name=name;
    this.price=price;
    this.printDetails=function(){
        console.log('product name:',this.name,'price',this.price);
    }
}
var product=new Product('video game',2000);
product.printDetails();
var product1=new Product('ipod',10000);
product1.printDetails();

Product.prototype.brand='Discord';
Product.prototype.pricediscount='500';
Product.prototype.discountedPrice=function(){
    console.log('new price is',(this.pricediscount));
}
console.log(product.brand);
product.discountedPrice();
product1.brand='Apple ';
product1.pricediscount='1000';
console.log(product1.brand);
product1.discountedPrice();


