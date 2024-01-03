       
  let classes =  document.querySelectorAll('.removedis');
  let btn = document.getElementById('editbtn');
  let submitbtn = document.getElementById('submitbtn');
  submitbtn.disabled = true;
  submitbtn.style.backgroundColor = 'rgb(127 188 185)';
       function myGFG() {
        btn.style.backgroundColor = 'rgb(127 188 185)';
        btn.style.border = 'none';
        btn.disabled =true;
        submitbtn.disabled = false;
        submitbtn.style.backgroundColor = '#1BC5BD';
          for (const element of classes) {
              element.disabled = false;
          }
        }