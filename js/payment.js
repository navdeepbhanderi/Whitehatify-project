
let rs = document.getElementById("plan-rs");
let rs2 = document.getElementById("plan-rs2");
let rs3 = document.getElementById("plan-rs3-la");
let priceTax = document.getElementById("pricetex");
let totalprice = document.getElementById("plan-rs3-la");
const taxMap = {
  Plans: [
    ["Select a plan", "0", "0%"],
    ["STANDERD 3 Month - 5000₹", "5000", "5%"],
    ["STANDERD 6 Month - 9000₹", "9000", "5%"],
    ["ENHANCED 3 Month - 8000₹", "8000", "5%"],
    ["ENHANCED 6 Month - 15000₹", "15000", "5%"],
    ["ULTIMATE 3 Month - 12000₹", "12000", "5%"],
    ["ULTIMATE 6 Month - 20000₹", "20000", "5%"],
  ],
};
function getSelectedValue() {
  let selectedvalue = document.getElementById("plan-id").value;
  for (const [key, value, tax] of taxMap.Plans.values()) {
    // console.log(key, value, tax);
    if (selectedvalue === key) {
      rs.textContent = rs2.textContent = `${value}`;
      priceTax.textContent = `${tax}`;
    }
  }
  let planAmount = Number(rs.textContent);
  let tax = Number(priceTax.textContent.slice(0, -1));
  // console.log(typeof planAmount, typeof tax);
  totalprice.textContent = planAmount + planAmount * (tax / 100);
  // console.log(planAmount, tax, totalprice.textContent);
}


let amount = document.getElementById('plan-rs3-la');
const paymentstart =()=>{
  console.log(amount.textContent);
  if(amount.textContent == '0₹' ||amount.textContent == '0'){
    console.log("dfghhgfd")
    alert("Please select a plan");
  } 
}

