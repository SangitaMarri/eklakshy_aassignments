var studentList=[
    {
        name:'ram',
        rollno:1,
        phone:1234567890,
        department:'ECE',
        hobbies:['playing badminton','reading']

    },
    {
    name:'ria',
    rollno:2,
    phone:1234567850,
    department:'ECE',
    hobbies:['playing badminton','playing chess']

   

    },
    {
        name:'Tom',
        rollno:5,
        phone:1234867890,
        department:'IT',
        hobbies:['listening music','reading']


    },
    {
        name:'renu',
        rollno:15,
        phone:8934567891,
        department:'comps',
        hobbies:['playing chess','reading']
  

    },
    {
        name:'ram',
        rollno:1,
        phone:1234567890,
        department:'ECE',
        hobbies:['playing badminton','reading']
 

    }
   
]
console.log(studentList);
for(const prop in studentList){
    var stud=studentList[prop];
    console.log(typeof stud);
    if(stud instanceof Array){
        for(const i in stud){
            console.log('hobbies:'+stud[i]);
        }
    }
    else{
        console.log(stud);
    }
}