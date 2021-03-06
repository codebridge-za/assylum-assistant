
function translateFrench() {
    let firstname = document.getElementById('firstname-label');
    let lastName = document.getElementById('lastname-label');
    let dateOfBirth = document.getElementById('date-of-birth-label');
    let gender = document.getElementById('gender-label');
    let country = document.getElementById('country-of-birth-label');
    let province = document.getElementById('province-of-birth-label');
    let city = document.getElementById('city-of-birth-label');
    let nationality = document.getElementById('nationality-label');
    let submit = document.getElementById('submit-label');
    firstname.innerHTML = "Majina ya jina kamili";
    lastName.innerHTML = "Jina la familia";
    dateOfBirth.innerHTML = "Tarehe ya kuzaliwa";
    gender.innerHTML = "Jinsia";
    country.innerHTML = "Nchi ya kuzaliwa";
    province.innerHTML = "Mkoa wa Nchi ya Kuzaliwa";
    city.innerHTML = "Jiji la Kuzaliwa";
    nationality.innerHTML = "Uraia wa sasa";
    submit.innerHTML = "Présenter une demande";
}