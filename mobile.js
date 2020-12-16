var mobiles =[ 
    {
    name:'mobile1',
    model:"Vivo Y50",
    brand:"vivo",
    color:"white",
    price:"16500",
    accesories:['charger','earphones','temperglass'],
    features:{
        ram:"8GB",
        processor:"Qualcomm snapdragon 665 processor"
    }
},
    {
        name:'mobile2',
        model:"one plus 8T 5G",
        brand:"one plus",
        color:"green",
        price:"45999",
        accesories:['charger','earphones','temperglass'],
        features:{
            ram:"12GB",
            processor:"octa core processor"
        }
    }

    ]
    console.log(mobiles);
    mobiles.forEach(mobile => {
        for (const prop in mobile){
            var mob=mobile[prop];
            console.log(typeof mob);
            if(mob instanceof Array){
                for (const i in mob){
                    console.log('accesories:'+mob[i]);
                }
            }
                else if (mob instanceof Object)

                {
                    for (const key in mob){
                        console.log(key+':'mob[key]);

                    }

                }
            
            else{
                console.log(mob)
            }
        }
    })