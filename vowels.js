var sentence=`The quick brown fox
            jumps over the lazy dog`
console.log(sentence);
const len=sentence.length;
count=0;
for(let i=0;i<len;i++){
    
    if ((sentence[i]=='a')||(sentence[i]=='e')||(sentence[i]=='i')||(sentence[i]=='o')||(sentence[i]=='u'))
    {
        count+=1;

    }
    console.log(`total vowels:'+count);
}
