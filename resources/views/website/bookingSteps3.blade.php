<!DOCTYPE html>
<html>
<head>
	<title>Hotel Booking Process</title>
<style>
header {
  background: rgba(15,21,33,1);
  display: flex;
  align-items: center;
  justify-content: flex-start;

  padding: 20px;
  border-radius: 10px;
border: 3px solid red;

}


/* check in forms style */
.form-container {
     background-color: red;
     padding: 20px;
     margin-top:1%;
    border-radius: 10px;
border: 3px solid rgba(15,21,33,1) ;


     
   }
   
   form {
     display: flex;
     flex-direction: row;
     justify-content: space-around;
     height: 30%;
     
   }
   
   label {
     color: white;
     font-weight: bold;
     margin-bottom: 10px;
   }
   
   input[type="text"],
   input[type="email"],
   textarea {
     margin-bottom: 10px;
     border: none;
     border-radius: 4px;
     box-sizing: border-box;
   }
   
   input[type="submit"] {
     background-color: white;
     color: red;
     padding: 10px 20px;
     border: none;
     border-radius: 4px;
     cursor: pointer;
   }
   
   

.logo img {
  height: 50px;
  border-radius: 10px;

}

.details h1 {
  color: white;
  font-size: 24px;
  margin-bottom: 10px;
}

.details p {
  color: #999;
  font-size: 14px;
  margin: 0;
}

/* Add red accents where needed */
.logo {
  border: 2px solid red;
  padding: 5px;
  margin-right:10px;
  border-radius: 10px;


}

.details p:first-of-type {
  color: red;
}

.bullet{
      padding-left:30em;
      list-style-type: square;
      margin-left: 20px;
      color:white;

      
      
   
}
/* main content design */
.red-container {
  background: rgba(15,21,33,1);

  margin-top:1%;
  height:50em  ;
  width:auto;
  border-radius:10px;
  flex-direction: row;
  display: flex;
  justify-content: space-around;





  padding: 20px;
}

.top-div{
  background: white;
border: 3px solid red;
margin-left:5%;



margin-top:1%;
height:auto  ;
width:auto;
border-radius:10px;

padding: 20px;
text-align:center;
}

.main-div{
  background: white;
  margin-left:5%;


margin-top:1%;
margin-left:15%;
margin-right:15%;
border: 3px solid red;

height:80%  ;
width:auto;
border-radius:10px;

padding: 20px;
text-align:center;
}

/* room-data images style */
.room-data {
  display: flex;
  flex-direction: column;
}

.column {
  background-color: #f2f2f2;
  padding: 10px;
  margin: 5px;
}







</style>
</head>
<body>
<header>
  <div class="logo">
    <!-- Insert your company logo here -->
    <a href="{{ route('home') }}">
      <img src="images/logoHotel.png" alt="logo">
    </a>

  </div>
  <div class="details">
    <h1>Your Company Name</h1>
    <p>123 Main Street, Anytown USA</p>
    <p>Phone: 555-123-4567</p>
    <p>Email: info@yourcompany.com</p>
  </div>

  <div class="bullet">
        <ul>
        <li>Select Date & Room</li>
      </ul>

  </div>
</header>

<!-- check availability forms
<div class="form-container">
  <form>
      <label for="date">Check-in Date:</label>
    <input type="date" id="date" name="date">


    <label for="email">Check-out Date:</label>
    <input type="date" id="email" name="email">
    <label for="name">Duration:</label>
    <input type="text" id="name" name="name">



    

    <input type="submit" value="Check Availability">
  </form>

</div> -->

<div class="red-container">

  <div class="top-div">
    <strong > Summary of Bookings</strong>
  </div>

 
</div>

  </div>
</div>



	<!-- rest of the HTML code for the booking process goes here -->
</body>
</html>
