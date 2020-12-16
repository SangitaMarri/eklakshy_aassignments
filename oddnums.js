function printOddNums(){
    for (i=1;i<=num;i++)
{
    if((i%2)!=0){
        console.log("odd no:<br>",+i);
    }
}
}
odd=printOddNums(100)
console.log(odd);