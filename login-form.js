
// import axios from 'axios'

const base_url = "https://born-3cf0e.firebaseio.com/"

const objet = "born-3cf0e"

let userData = new Object()
let user = new Object()

document.querySelector('#login-form').addEventListener("submit", function(e){
    e.preventDefault()
    


    const urlQ = base_url + objet + ".json"
    console.log(urlQ)

    axios.post(urlQ, {
        "Nom" : document.querySelector('#Nom').value,
        "Prenom" : document.querySelector('#Prenom').value,
        "Email" : document.querySelector('#Email').value
    },) 
    


    .then ((response) => {
        // console.log(response)
        userData = response.data //Comment enregistrer le nom de response ? -> avec new Object()
        let userNameCode = userData.name
        console.log(userNameCode)

        let UrlQ2 = base_url + objet + "/" + userNameCode + ".json"
        // console.log(UrlQ2)
        axios.get(UrlQ2)
        .then ((response) => {
           let userEmail = response.data.Email
           let userNom = response.data.Nom
           let userPrenom = response.data.Prenom
           console.log(response.data)
           console.log(userEmail) 
           console.log(userNom) 
           console.log(userPrenom) 

           document.querySelector('#login-form').classList.toggle('hidden')
           document.querySelector('#entree-form').classList.remove('hidden')

           let entreeTitle =  document.getElementById("entreeTitle")

           entreeTitle.innerHTML = "Bonjour " + userPrenom + " " + userNom + ", choisissez l'objet de votre venue."; 


           document.getElementById('radioFormation').addEventListener("click", function() {
            document.querySelector('#formations').classList.remove('hidden')
            document.querySelector('#personnels').classList.add('hidden')
           } )

           document.getElementById('radioPersonnel').addEventListener("click", function() {
            document.querySelector('#formations').classList.add('hidden')
            document.querySelector('#personnels').classList.remove('hidden')
           } )

     
    })
            
        .catch((error) => console.log(error))
    })
    .catch((error) => console.log(error))

})



