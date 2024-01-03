const form = document.querySelector("form");
(eField = form.querySelector(".emailfield")),
  (eInput = eField.querySelector("input")),
  (pField = form.querySelector(".passwordfield")),
  (pInput = pField.querySelector("input")),
  (cpField = form.querySelector(".cpasswordfield")),
  (cpInput = cpField.querySelector("input")),
  (nffield = form.querySelector(".nfirstfield")),
  (nInput1 = nffield.querySelector("input")),
  (nlfield = form.querySelector(".nlastfield")),
  (nInput2 = nlfield.querySelector("input")),
  // nInput1 = nfield.querySelector("#fname"),
  (form.onsubmit = (e) => {
    e.preventDefault(); //preventing from form submitting
    //if email and password is blank then add moves class in it else call specified function
    eInput.value == "" ? eField.classList.add("moves", "error") : checkEmail();
    pInput.value == "" ? pField.classList.add("moves", "error") : checkPass();
    cpInput.value == "" ? cpField.classList.add("moves", "error") : checkPass();
    nInput1.value == ""
      ? nffield.classList.add("moves", "error")
      : checkfname();
    nInput2.value == ""
      ? nlfield.classList.add("moves", "error")
      : checklname();
    setTimeout(() => {
      //remove moves class after 500ms
      eField.classList.remove("moves");
      pField.classList.remove("moves");
      cpField.classList.remove("moves");
    }, 500);
    eInput.onkeyup = () => {
      checkEmail();
    }; //calling checkEmail function on email input keyup
    pInput.onkeyup = () => {
      checkPass();
    }; //calling checkPassword function on pass input keyup
    cpInput.onkeyup = () => {
      checkcPass();
    }; //calling checkPassword function on pass input keyup
    nInput1.onkeyup = () => {
      checkfname();
    }; //calling checkPassword function on pass input keyup
    nInput2.onkeyup = () => {
      checklname();
    }; //calling checkPassword function on pass input keyup

    function checkEmail() {
      //checkEmail function
      let pattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/; //pattern for validate email
      if (!eInput.value.match(pattern)) {
        //if pattern not matched then add error and remove valid class
        eField.classList.add("error");
        let errorTxt = eField.querySelector(".error-txt");
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

    function checkcPass() {
      if (cpInput.value == "") {
        //if pass is empty then add error and remove valid class
        cpField.classList.add("error");
      } else {
        //if pass is empty then remove error and add valid class
        cpField.classList.remove("error");
      }
    }
    function checkfname() {
      if (nInput1.value == "") {
        //if pass is empty then add error and remove valid class
        nffield.classList.add("error");
      } else {
        //if pass is empty then remove error and add valid class
        nffield.classList.remove("error");
      }
    }
    function checklname() {
      if (nInput2.value == "") {
        //if pass is empty then add error and remove valid class
        nlfield.classList.add("error");
      } else {
        //if pass is empty then remove error and add valid class
        nlfield.classList.remove("error");
      }
    }

    //if eField and pField doesn't contains error class that mean user filled details properly
    if (
      !eField.classList.contains("error") &&
      !pField.classList.contains("error") &&
      !cpField.classList.contains("error")
    ) {
      window.location.href = form.getAttribute("action"); //redirecting user to the specified url which is inside action attribute of form tag
    }
  });
