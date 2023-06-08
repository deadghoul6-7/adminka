
let inputName1 = document.querySelector('[name="name1"]');
let inputName2 = document.querySelector('[name="name2"]');
let inputName3 = document.querySelector('[name="name3"]');
let gen = document.querySelector('[name="gen"]');
let age = document.querySelector('[name="age"]');


let name_ats = document.querySelector('[name="name_ats"]');
let location_ats = document.querySelector('[name="location_ats"]');
let id_phone_ats = document.querySelector('[name="id_phone"]');

let category_name = document.querySelector('[name="category_name"]');
let discounts = document.querySelector('[name="discounts"]');

let id_phone_disconnections = document.querySelector('[name="id_phone_disconnections"]');
let date_disconnections = document.querySelector('[name="date_disconnections"]');
let reason = document.querySelector('[name="id_phone"]');

let id_phone_long_distance_negotiations = document.querySelector('[name="id_phone_long_distance_negotiations"]');
let date_long_distance_negotiations = document.querySelector('[name="date_long_distance_negotiations"]');
let time_start = document.querySelector('[name="time_start"]');
let time_end = document.querySelector('[name="time_end"]');


let id_abonent_pay = document.querySelector('[name="id_abonent_pay"]');
let date_pay = document.querySelector('[name="date_pay"]');
let amount_pay = document.querySelector('[name="amount_pay"]');


let id_abonent_phones = document.querySelector('[name="id_abonent_phones"]');
let number = document.querySelector('[name="number"]');
let indexx = document.querySelector('[name="indexx"]');
let district = document.querySelector('[name="district"]');
let street = document.querySelector('[name="street"]');
let house = document.querySelector('[name="house"]');
let apartment = document.querySelector('[name="apartment"]');
let city = document.querySelector('[name="city"]');







const getFormValue = async(event) => {
    const data = {
        inputName1: inputName1.value,
        inputName2: inputName2.value,
        inputName3: inputName3.value,
        gen: gen.value,
        age: age.value,
        id_category: id_category.value,
//----------------------------------------------------------------
        name_ats:name_ats.value,
        location_ats:location_ats.value,
        id_phone_ats:id_phone_ats.value,
//----------------------------------------------------------------
        category_name:category_name.value,
        discounts:discounts.value,
//----------------------------------------------------------------        
        id_phone_disconnections:id_phone_disconnections.value,
        date_disconnections:date_disconnections.value,
        reason:reason.value,
//----------------------------------------------------------------    
        id_phone_long_distance_negotiations:id_phone_long_distance_negotiations.value,
        date_long_distance_negotiations:date_long_distance_negotiations.value,
        time_start:time_start.value,
        time_end:time_end.value,
//----------------------------------------------------------------    
        id_abonent_pay:id_abonent_pay.value,
        date_pay:date_pay.value,
        amount_pay:amount_pay.value,

//==================================================================
id_abonent_phones:id_abonent_phones.value,
number:number.value,
indexx:indexx.value,
district:district.value,
street:street.value,
house:house.value,
apartment:apartment.value,
city:city.value,

        
    };
    const jsonData = JSON.stringify(data);
    response = await fetch("validation.php", {
        method: "POST",
        headers:{
            'Content-Type': 'application/json'
        },
        body: jsonData
    });
    if (response.ok) {
        //const res = await response.text();
        alert('Данные отправленны');
    };
    console.log(data);
};