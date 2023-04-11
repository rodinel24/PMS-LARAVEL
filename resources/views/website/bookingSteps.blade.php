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
    <a href="{{ route('home') }}">
      <img src="images/logoHotel.png" alt="logo">
    </a>
  </div>
  <div class="details text-center">
    <h1>Your Company Name</h1>
    <p>123 Main Street, Anytown USA</p>
    <p>Phone: 555-123-4567</p>
    <p>Email: info@yourcompany.com</p>
  </div>
  <div class="bullet">
    <ul class="list-unstyled">
      <li>Select Date & Room</li>
    </ul>
  </div>
</header>



<!-- check availability forms -->
<div class="form-container">
 
<div class="book">
  <!-- action="{{route('reservations.store')}}" method="POST" -->
  <form class="book-form" action="{{ route('reservations.store') }}" method="POST">


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


<!-- <div class="container">
    <div class="main-div">
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel, consequuntur.</p>
      <div class="room-data">
        <div class="d-flex align-items-normal">
          <img src="images/pixel_single.png" class="images mr-3" alt="Sample Picture">
          <h3><u>Single Room<br> nonsense</u></h3>
        </div>
      </div>
      <div class="room-data">
        <div class="d-flex align-items-center">
          <img src="images/pixel_double.png" alt="Sample Picture" class="images mr-3" >
          <h3><u>Double Room<br> nonsense</u></h3>
        </div>
      </div>
      <div class="room-data">
        <div class="d-flex align-items-center">
          <img src="images/pixel_family.png" alt="Sample Picture" class="images mr-3" >
          <h3><u>Family Room<br> nonsense</u></h3>
        </div>
      </div>
      <div class="room-data">
        <div class="d-flex align-items-center">
          <img src="images/pixel_function.png" alt="Sample Picture" class= " images mr-3" >
          <h3><u>Function Hall<br> nonsense</u></h3>
        </div>
      </div>
    </div> -->

    <div class="holy-grail">
     
    <header > <h4 id="title">AVAILABLE ROOMS</h4></header>
    <main class="holy-grail__main">
        <!-- Left sidebar -->
        <aside class="holy-grail__left"></aside>

        <!-- Main content -->
        
        <article class="holy-grail__middle"><div class="container">
    <div class="main-div">  
      <div class="room-data">
        <div class="d-flex align-items-normal ">
          <img src="images/pixel_single.png" class="images mr-3" alt="Sample Picture">
          <div class="d-flex align-items-start flex-column" style="margin-top:5%; margin-left:5%;">
            <h5><u>Single Room</u></h5>
            <p>Room Size: 30 SQM View: City, Ocean</p>
            <p>Max. 2 Adult(s)</p>
            <p>Best Available Rate 450 <button type="button" class="btn btn-primary">Add</button></p>
                                          <!-- Button trigger modal -->
                              <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                More Details
                              </button>

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
                                      <p>Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae minus quis voluptatibus laborum distinctio non ullam cum! Eius ullam nostrum natus ipsa nemo distinctio porro, incidunt totam enim quae odio ea doloribus quaerat! Temporibus voluptatibus consectetur ea quis saepe consequatur, veniam iure necessitatibus consequuntur nisi quia accusamus perferendis laboriosam explicabo error adipisci dolores illum dignissimos, aspernatur amet optio. Magnam dolore eligendi error a commodi? Eveniet distinctio repellat temporibus quasi nemo modi eius sequi tempore minus natus eaque ex omnis dicta, reprehenderit aliquid fuga quibusdam aspernatur consequatur animi maxime nostrum iusto cum porro! Fugiat doloribus consectetur quae, at dignissimos repudiandae magnam? consectetur adipisicing elit. Enim ad animi, nostrum quia facilis illum et pariatur quos at deserunt voluptate numquam accusamus accusantium praesentium eligendi? Laudantium aut, odio nostrum iusto, animi unde illo culpa, eligendi eius impedit maxime ut!</p>
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
            <h5><u>Single Room</u></h5>
            <p>Room Size: 30 SQM View: City, Ocean</p>
            <p>Max. 2 Adult(s)</p>
            <p>Best Available Rate 450 <button type="button" class="btn btn-primary">Add</button></p>
                   <!-- Button trigger modal -->
                   <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal2">
                                More Details
                              </button>

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
                                      <p>Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae minus quis voluptatibus laborum distinctio non ullam cum! Eius ullam nostrum natus ipsa nemo distinctio porro, incidunt totam enim quae odio ea doloribus quaerat! Temporibus voluptatibus consectetur ea quis saepe consequatur, veniam iure necessitatibus consequuntur nisi quia accusamus perferendis laboriosam explicabo error adipisci dolores illum dignissimos, aspernatur amet optio. Magnam dolore eligendi error a commodi? Eveniet distinctio repellat temporibus quasi nemo modi eius sequi tempore minus natus eaque ex omnis dicta, reprehenderit aliquid fuga quibusdam aspernatur consequatur animi maxime nostrum iusto cum porro! Fugiat doloribus consectetur quae, at dignissimos repudiandae magnam? consectetur adipisicing elit. Enim ad animi, nostrum quia facilis illum et pariatur quos at deserunt voluptate numquam accusamus accusantium praesentium eligendi? Laudantium aut, odio nostrum iusto, animi unde illo culpa, eligendi eius impedit maxime ut!</p>
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
            <h5><u>Single Room</u></h5>
            <p>Room Size: 30 SQM View: City, Ocean</p>
            <p>Max. 2 Adult(s)</p>
            <p>Best Available Rate 450 <button type="button" class="btn btn-primary">Add</button></p>
             <!-- Button trigger modal -->
             <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal3">
                                More Details
                              </button>

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
                                      <p>Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae minus quis voluptatibus laborum distinctio non ullam cum! Eius ullam nostrum natus ipsa nemo distinctio porro, incidunt totam enim quae odio ea doloribus quaerat! Temporibus voluptatibus consectetur ea quis saepe consequatur, veniam iure necessitatibus consequuntur nisi quia accusamus perferendis laboriosam explicabo error adipisci dolores illum dignissimos, aspernatur amet optio. Magnam dolore eligendi error a commodi? Eveniet distinctio repellat temporibus quasi nemo modi eius sequi tempore minus natus eaque ex omnis dicta, reprehenderit aliquid fuga quibusdam aspernatur consequatur animi maxime nostrum iusto cum porro! Fugiat doloribus consectetur quae, at dignissimos repudiandae magnam? consectetur adipisicing elit. Enim ad animi, nostrum quia facilis illum et pariatur quos at deserunt voluptate numquam accusamus accusantium praesentium eligendi? Laudantium aut, odio nostrum iusto, animi unde illo culpa, eligendi eius impedit maxime ut!</p>
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
            <h5><u>Single Room</u></h5>
            <p>Room Size: 30 SQM View: City, Ocean</p>
            <p>Max. 2 Adult(s)</p>
            <p>Best Available Rate 450 <button type="button" class="btn btn-primary">Add</button></p>
             <!-- Button trigger modal -->
             <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal4">
                                More Details
                              </button>

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
                                      <p>Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae minus quis voluptatibus laborum distinctio non ullam cum! Eius ullam nostrum natus ipsa nemo distinctio porro, incidunt totam enim quae odio ea doloribus quaerat! Temporibus voluptatibus consectetur ea quis saepe consequatur, veniam iure necessitatibus consequuntur nisi quia accusamus perferendis laboriosam explicabo error adipisci dolores illum dignissimos, aspernatur amet optio. Magnam dolore eligendi error a commodi? Eveniet distinctio repellat temporibus quasi nemo modi eius sequi tempore minus natus eaque ex omnis dicta, reprehenderit aliquid fuga quibusdam aspernatur consequatur animi maxime nostrum iusto cum porro! Fugiat doloribus consectetur quae, at dignissimos repudiandae magnam? consectetur adipisicing elit. Enim ad animi, nostrum quia facilis illum et pariatur quos at deserunt voluptate numquam accusamus accusantium praesentium eligendi? Laudantium aut, odio nostrum iusto, animi unde illo culpa, eligendi eius impedit maxime ut!</p>
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
        <nav class="holy-grail__right"></nav>
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