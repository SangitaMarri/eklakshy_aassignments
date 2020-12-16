
var showTotal=function(){

    
    console.log('name:',this.name,'rollno:',this.rollno,'total marks:',this.m1+this.m2+this.m3);

}
var showHobbies={
    hobby:function(hobby1,hobby2){
        
    console.log('name:',this.name,'rollno:',this.rollno,'hobby1:',hobby1,'hobby2:',hobby2);
    }
}



var student1={
    name:'Tom',
    rollno:15,
    m1:50,
    m2:100,
    m3:250
}
var student2={
    name:'Ria',
    rollno:10,
    m1:60,
    m2:70,
    m3:50
}


showTotal.call(student1);
showTotal.call(student2);
showHobbies.hobby.apply(student1,['reading','cooking']);
showHobbies.hobby.apply(student2,['reading','drawing']);
