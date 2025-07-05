function submitForm() {

    const name = document.getElementById("name").value;
    const email = document.getElementById("email").value;
    const phone = document.getElementById("phone").value;
    const numberOfTables = document.getElementById("numberOfTables").value;
    const date = document.getElementById("date").value;
    const time = document.getElementById("time").value;

    
    if (name === "" || email === "" || phone === "" || numberOfTables === "" || date === "" || time === "") {
        alert("Please fill out all fields before submitting.");
    } else {
        
        alert(`Table booking successful for ${numberOfTables} tables!`);
    }
}
function order()
{
    alert("you have got the pffer successfully with price 18 L.E ");
}
