function checkPalindrome(str){
    const len=string.length;
    for (let i=0;1<len/2;i++){
        if(string[i]!==string[len-1-i]){
            return'it is not palindrome';
        }else{
            return'it is a palindrome';
        }

    }
}
const string=prompt('enter a string');
const value=checkPalindrome(string);
console.log(value)