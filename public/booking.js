
  function openModal() {
  document.getElementById("myModal").style.display = "block";
}

function closeModal() {
  document.getElementById("myModal").style.display = "none";
}


//restriction of past dates in booking form
function restrictDate() {
    var input = document.getElementById("theDate"); // replace "date-input" with the ID of your date input element
    var input = document.getElementById("checkout-date");
    var today = new Date(); // get today's date
  
    // set the minimum date to today's date
    input.min = today.toISOString().slice(0,10);
  
    // set the maximum date to 1 year from today's date
    var maxDate = new Date(today.getFullYear() + 1, today.getMonth(), today.getDate());
    input.max = maxDate.toISOString().slice(0,10);
  }
  
  
    //automatic current date input
        var date = new Date();
        var day = date.getDate();
        var month = date.getMonth() + 1;
        var year = date.getFullYear();
  
        if (month < 10) month = "0" + month;
        if (day < 10) day = "0" + day;
  
        var today = year + "-" + month + "-" + day;
        document.getElementById("theDate").value = today;
        document.getElementById("checkout-date").value = today;
  