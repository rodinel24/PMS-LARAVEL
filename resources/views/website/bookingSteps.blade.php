<!DOCTYPE html>
<html>
<head>
	<title>Hotel Booking Process</title>
  <link rel="stylesheet" href="booking.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
  

<header class="d-flex justify-content-between align-items-center">
  <div class="logo">
    <!-- Insert your company logo here -->
    <a href="{{ url('/') }}"><img src="img/logo/logo.png" alt="#" /></a>

  </div>
  <div class="details text-start">
    <h1>Dr. Magadapa Ali Ringia Hotel</h1>
    <p>MSU-MSAT, Maigo, Lanao del Norte, Philippines, 9206</p>
    <p>Telephone Number: 227-4208</p>
    <p>Email: <i>Dr.magadapaaliringia@gmail.com</i></p>
  </div>
  <div class="bullet">
    <ul class="list-unstyled">
    <li><em style="color:white;"> <strong><u>Select Date & Room</u></strong>- Confirmation</em></li>

    </ul>
  </div>
</header>



<!-- check availability forms -->
<div class="form-container">
 
<div class="book">
  <!-- action="{{route('reservations.store')}}" method="POST" -->
  <form class="book-form" method="POST" action="/check-availability">


@csrf
    <div class = "form-item">
        <label for = "checkin-date">Check In Date: </label>
        <input type = "date"  name="checkinDate" id = "theDate"   onchange="restrictDate()" >
    </div>
    <div class = "form-item">
        <label for = "checkout-date">Check Out Date: </label>
        <input type = "date" name="checkoutDate" id = "checkout-date" onchange="restrictDate()">
    </div>
    <div class = "form-item">
        <label for = "adult">Adults: </label>
        <input type = "number" name="numAdults" min = "1" max = "9" value = "1" id = "adult">
    </div>
    <div class = "form-item">
        <label for = "children">Children: </label>
        <input type = "number" name="numChildren" min = "0" max = "9" value = "0" id = "children">
    </div>
   
    <div class = "form-item">
        
    <button type="submit" class="checkbutton" >CHECK AVAILABILITY</button>
    </div>
</form>
</div>

</div>


<div class="red-container">



    <div class="holy-grail text-center">
     
    <h4 id="title"><u>AVAILABLE ROOMS</u></h4>
   

    

  

    <main class="holy-grail__main">
        <!-- Left sidebar -->
        <aside class="holy-grail__left"><img src="images/okir.png" style = "width:200px; height: 1400px"></aside>
        
        

        <!-- Main content -->
        
        <article class="holy-grail__middle"><div class="container">
    <div class="main-div">  
      
      <div class="room-data">
        <div class="d-flex align-items-normal ">
          <img src="images/pixel_single.png" class="images mr-3" alt="Sample Picture">
          <div class="d-flex align-items-start flex-column" style="margin-top:5%; margin-left:5%;">
          <h5><u><strong>Single Room</strong></u></h5>
          <p>Room Size: <i>30 SQM</i> View: <i>City Ocean</i></p>
            <p><em>Max. 2 Adult(s)</em></p>
            <style>
              header{

    
              }
  .btn-primary {
    background-color: #0F1521;
    border: none;
    color: white;
    padding: 12px 24px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    border-radius: 7px;
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.25);
    transition: background-color 0.3s ease;
    margin-left: 20px;
  }

  .btn-primary:hover {
    background-color: white;
color: black;
  }
  body{


  }
</style>

<p>Best Available Rate: <strong>450</strong> <button type="button" class="btn btn-primary"> <strong>+ADD</strong> </button></p>

                                          <!-- Button trigger modal -->
                                          <style>
 .btn-danger {
background-color:white;
border: none;
color: #0F1521;
padding: 12px 24px;
text-align: center;
text-decoration: underline;
display: inline-block;
font-size: 16px;
border-radius: 7px;
box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.25);
transition: background-color 0.3s ease;
}

  .btn-danger:hover {
background-color: white;
color: black;
}
</style>

<button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal4"> <strong>More Details</strong> </button>


                              <!-- Modal -->
                              <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                
                              <!-- Vertically centered scrollable modal -->
                              <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h1 class="modal-title fs-5" id="exampleModalLabel">Single Room</h1>
                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                      <img src="images/pixel_single.png" alt="">
                                      <p>Lorem</p>
                                    </div>
                                    <div class="modal-footer">
                                    </div>
                                  </div>
                                </div>
                              </div>
          </div>

          
        </div>
      </div>
      <div class="room-data">
        <div class="d-flex align-items-center">
          <img src="images/pixel_double.png" alt="Sample Picture" class="images mr-3" >
          <div class="d-flex align-items-start flex-column" style="margin-top:5%; margin-left:5%;">
          <h5><u><strong>Double Bedroom</strong></u></h5>
          <p>Room Size: <i>30 SQM</i> View: <i>City Ocean</i></p>
            <p><em>Max. 2 Adult(s)</em></p>
            <p>Best Available Rate: <strong>450</strong> <button type="button" class="btn btn-primary"> <strong>+ADD</strong> </button></p>
                   <!-- Button trigger modal -->
                   <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal4"> <strong>More Details</strong> </button>
                              <!-- Modal -->
                              <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                
                              <!-- Vertically centered scrollable modal -->
                              <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h1 class="modal-title fs-5" id="exampleModalLabel">Double Room</h1>
                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                      <img src="images/pixel_single.png" alt="">
                                      <p>Lorem</p>
                                    </div>
                                    <div class="modal-footer">
                                    </div>
                                  </div>
                                </div>
                              </div>
          </div>
        </div>
      </div>
      <div class="room-data">
        <div class="d-flex align-items-center">
          <img src="images/pixel_family.png" alt="Sample Picture" class="images mr-3" >
          <div class="d-flex align-items-start flex-column" style="margin-top:5%; margin-left:5%;">
          <h5><u><strong>Family Bedroom</strong></u></h5>
          <p>Room Size: <i>30 SQM</i> View: <i>City Ocean</i></p>
            <p><em>Max. 2 Adult(s)</em></p>
            <p>Best Available Rate: <strong>450</strong> <button type="button" class="btn btn-primary"> <strong>+ADD</strong> </button></p>
             <!-- Button trigger modal -->
             <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal4"> <strong>More Details</strong> </button>
                              <!-- Modal -->
                              <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                
                              <!-- Vertically centered scrollable modal -->
                              <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h1 class="modal-title fs-5" id="exampleModalLabel">Family Room</h1>
                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                      <img src="images/pixel_single.png" alt="">
                                      <p>Lorem</p>
                                    </div>
                                    <div class="modal-footer">
                                    </div>
                                  </div>
                                </div>
                              </div>
          </div>
        </div>
      </div>
      <div class="room-data">
        <div class="d-flex align-items-center">
          <img src="images/pixel_function.png" alt="Sample Picture" class= " images mr-3" >
          <div class="d-flex align-items-start flex-column" style="margin-top:5%; margin-left:5%;">
          <h5><u><strong>Function Hall</strong></u></h5>
          <p>Function Hall Size: <i>30 SQM</i> View: <i>City Ocean</i></p>
            <p><em>Max. 2 Adult(s)</em></p>
            <p>Best Available Rate: <strong>450</strong> <button type="button" class="btn btn-primary"> <strong>+ADD</strong> </button></p>
             <!-- Button trigger modal -->
            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal4"> <strong>More Details</strong> </button>

                              <!-- Modal -->
                              <div class="modal fade" id="exampleModal4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                
                              <!-- Vertically centered scrollable modal -->
                              <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h1 class="modal-title fs-5" id="exampleModalLabel">Function Hall</h1>
                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                      <img src="images/pixel_single.png" alt="">
                                      <p>Lorem </p>
                                    </div>
                                    <div class="modal-footer">
                                    </div>
                                  </div>
                                </div>
                              </div>
          </div>
        </div>
      </div>
    </div></article>

        <!-- Right sidebar -->
        <aside class="holy-grail__right"><img src="images/okir.png" style = "width:200px; height: 1400px"></aside>
    </main>
    <footer>...</footer>
</div>
  </div>


<a class="book_btn" href="{{ route('bookingSteps2') }}"> Next </a>




	<!-- rest of the HTML code for the booking process goes here -->
</body>


<script src="booking.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>


</html>