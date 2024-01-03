const form = document.querySelector("form");
(eField = form.querySelector(".emailfield")),
  (eInput = eField.querySelector("input")),
  (pField = form.querySelector(".passwordfield")),
  (pInput = pField.querySelector("input"));
form.onsubmit = (e) => {
  e.preventDefault(); //preventing from form submitting
  //if email and password is blank then add moves class in it else call specified function
  eInput.value == "" ? eField.classList.add("moes", "error") : checkEmail();
  pInput.value == "" ? pField.classList.add("moes", "error") : checkPass();
  setTimeout(() => {
    //remove moves class after 500ms
    eField.classList.remove("moes");
    pField.classList.remove("moes");
  }, 500);
  eInput.onkeyup = () => {
    checkEmail();
  }; //calling checkEmail function on email input keyup
  pInput.onkeyup = () => {
    checkPass();
  }; //calling checkPassword function on pass input keyup
  function checkEmail() {
    //checkEmail function
    let pattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/; //pattern for validate email
    if (!eInput.value.match(pattern)) {
      //if pattern not matched then add error and remove valid class
      eField.classList.add("error");
      let errorTxt = eField.querySelector(".errortext");
      //if email value is not empty then show please enter valid email else show Email can't be blank
      eInput.value != ""
        ? (errorTxt.innerText = "Enter a valid email address")
        : (errorTxt.innerText = "Email can't be blank");
    } else {
      //if pattern matched then remove error and add valid class
      eField.classList.remove("error");
    }
  }
  function checkPass() {
    //checkPass function
    if (pInput.value == "") {
      //if pass is empty then add error and remove valid class
      pField.classList.add("error");
    } else {
      //if pass is empty then remove error and add valid class
      pField.classList.remove("error");
    }
  }
  //if eField and pField doesn't contains error class that mean user filled details properly
  if (
    !eField.classList.contains("error") &&
    !pField.classList.contains("error")
  ) {
    window.location.href = form.getAttribute("action"); //redirecting user to the specified url which is inside action attribute of form tag
  }
};

