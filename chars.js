var para=`Peter Piper picked a peck of picklled peppers
          A peck of pickled peppers Peter Piper picked
          if Peter Piper picked a peck of pickled peppers
          Wheres the peck of pickled peppers Peter Piper picked?`
console.log(para);
const len=para.length;
function printOddNums(){
    count=0;
    for(i=0;i<len;i++){
        if(para[i]=='o'){
            count+=1

        }
        console.log('count of o:'+count);
    }
}