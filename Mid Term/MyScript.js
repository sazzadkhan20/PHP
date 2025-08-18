function validateForm() {
    const firstName = document.getElementById("firstName").value.trim();
    const lastName = document.getElementById("lastName").value.trim();
    const firstAddress = document.getElementById("firstAddress").value.trim();
    const cityInfo = document.getElementById("cityInfo").value.trim();
    const stateInfo = document.getElementById("stateInfo").value.trim();
    const zipCode = document.getElementById("zipCode").value.trim();
    const email = document.getElementById("email").value.trim();
    const donationRadios = document.getElementsByName("donationAmount");
    const agree = document.getElementById("agree");
    const emailPattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
    const namePattern = /^[A-Za-z.\s]+$/;
    const zipCodePattern = /^[0-9]+$/;
    let isChecked = false;

    for (let i = 0; i < donationRadios.length; i++) {
        if (donationRadios[i].checked) {
            isChecked = true;
            break;
        }
    }

    if (firstName === "") {
        alert("Please enter your First Name.");
        return false;
    }
    else if(!namePattern.test(firstName))
    {
      alert("Invalid First Name");
      return false;
    }
    else if (lastName === "") {
        alert("Please enter your Last Name.");
        return false;
    }
    else if(!namePattern.test(lastName))
    {
      alert("Invalid Last Name");
      return false;
    }
    else if (firstAddress === "") {
        alert("Please enter your First address.");
        return false;
    }
     else if (cityInfo === "") {
        alert("Please enter your City Name.");
        return false;
    }
    else if (stateInfo === "") {
        alert("Please enter your State Name.");
        return false;
    }
    else if (zipCode === "") {
        alert("Please enter your Zip Code.");
        return false;
    }
    else if (!zipCodePattern.test(zipCode)) {
        alert("Invalid Zip Code.");
        return false;
    }
    else if (email === "") {
        alert("Please enter your Email Address.");
        return false;
    }
    else if (!emailPattern.test(email)) {
        alert("Invalid Email Address.");
        return false;
    }
    else if (!isChecked) {
        alert("Please select a Donation Amount.");
        return false;
    }
    else if (!agree.checked) {
        alert("You must agree to the terms and conditions.");
        return false;
    }
    location.href = "Validate_Form.html";
    return false;

}

// function validFirstName() {
//   var x = document.getElementById("firstName").value;
//   if (x == "") {
//     alert("First Name Feild Empty");
//     return false;
//   }
//   return true;
// }
