<?php 
session_start();

      if (!isset($_SESSION["uname"])&&!isset($_SESSION["upass"])) {
        header("Location:login.html#login");
      }
?>
<!DOCTYPE html>
<html lang="en-US" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>MyTravel</title>


    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link href="assets/css/theme.css" rel="stylesheet" />
  </head>

  <body>
    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
      <nav
        class="navbar navbar-expand-lg navbar-light fixed-top py-5 d-block"
        data-navbar-on-scroll="data-navbar-on-scroll"
      >
        <div class="container">
          <a class="navbar-brand" href="index.html"
            ><img src="assets/img/logo1.svg" height="54" alt="logo"
          />
          <span class="footer-heading-color fw-bold font-sans-serif mb-3 mb-lg-4">MyTravel</span>
        </a>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"> </span>
          </button>
          <div
            class="collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0"
            id="navbarSupportedContent"
          >
            <ul
              class="navbar-nav ms-auto pt-2 pt-lg-0 font-base align-items-lg-center align-items-start"
            >
              <li class="nav-item px-3 px-xl-4">
                <a
                  class="nav-link fw-medium"
                  aria-current="page"
                  href="index.html#service"
                  >Regions</a
                >
              </li>
              <li class="nav-item px-3 px-xl-4">
                <a
                  class="nav-link fw-medium"
                  aria-current="page"
                  href="index.html#destination"
                  >Destination</a
                >
              </li>
              <li class="nav-item px-3 px-xl-4">
                <a
                  class="nav-link fw-medium"
                  aria-current="page"
                  href="index.html#booking"
                  >Booking</a
                >
              </li>
              <li class="nav-item px-3 px-xl-4">
                <a
                  class="nav-link fw-medium"
                  aria-current="page"
                  href="index.html#testimonial"
                  >Testimonial</a
                >
              </li>
              <li class="nav-item px-3 px-xl-4">
                <a class="nav-link fw-medium" aria-current="page" href="log1.php"
                  >Logout</a
                >
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <section style="padding-top: 7rem">
        <div
          class="bg-holder"
          style="background-image: url(assets/img/bg3.jpg)"
        ></div>
        <div class="container">
          <div class="row align-items-center">
           
            <div class="col-md-7 col-lg-6 text-md-start text-center py-6">
              <h4 class="fw-bold text-danger mb-3">
                Best Destinations in India
              </h4>
              <h1 class="hero-title">
                
                Travel, enjoy and live a new and full life
              </h1>
              <p class="mb-4 fw-medium" style="color: white;">
                The people of India have varied life styles,<br
                  class="d-none d-xl-block"
                />cultural heritage and colourful fairs and festivals<br
                  class="d-none d-xl-block"
                />which make India a unique tourist destination.
              </p>
              <div class="text-center text-md-start">
                
                </div>
        </div>
      </section>

      <section id="north"><div
        class="container-fluid"
      >   
        <div
            class="row"
        >
            <div class="col"><img
                src="assets/img/category/udaipur.jpg"
                class=""
                alt=""
                height="500"
                width="600"
            />
            </div>
            <div class="col"><h1 class="fw-bold text-center mb-3">
                Rajasthan Tourism
              </h1>
                <p class="fw-medium mb-4">A Land of Exotic Architecture, Vibrant Culture, Rich Wildlife and Warm Hospitality</p>
              <div class="row">
                <div class="col-6">
                    <div class="card">
                        <div class="card-body">
                          <img
                            src="assets/img/category/calender.svg"
                            class=""
                            alt=""
                            height="40"
                            width="40"
                          />
                            <span class="card-title fw-bold fs-1 mb-4" style="color: black;"> Best Time to Visit</span>
                            <p class="card-text fw-medium mb-4 mx-5">Round the year</p>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card">
                        <div class="card-body">
                          <img
                            src="assets/img/category/clock.svg"
                            class=""
                            alt=""
                            height="40"
                            width="40"
                          />
                          <span class="card-title fw-bold fs-1 mb-4" style="color: black;">Ideal Duration</span>
                          <p class="card-text fw-medium mb-4 mx-5">5-8 Days</p>
                        </div>
                    </div>
                </div>
              </div>
              <div
                class="row justify-content-center"
              ><a class="text-center" href="#enquiry"><button class="btn btn-danger orange-gradient-btn fs--1 border-radius w-50">
                Plan your trip
              </button></a>
              </div>
              
              <hr>
              <div
                class="row"
              ><span class="card-title fw-bold fs-1 mb-4 text-center" style="color: black;">About Rajasthan</span>
              <p class="card-text fw-medium mb-4">
                Rajasthan is a state of vibrant folk dance and music, gigantic forts and palaces, spicy food, colourful and large turbans, extensive golden sand desert, camels and rich handicraft. It is therefore, an incredible place to visit in India for enjoying unforgettable holidays. Sprawling in an area of 342239 sq km, Rajasthan is perfect for history buffs, culture aficionados, adventure lovers, wildlife enthusiasts,
                 family vacations, honeymoon, and more.
              </p>      
              </div>
              
            </div>
            <hr>
        </div>
      </div>
      </section>
      <div
        class="container-fluid"
      >   
        <div
            class="row"
        >
            <div class="col"><img
                src="assets/img/category/himachal.jpg"
                class=""
                alt=""
                height="500"
                width="600"
            />
            </div>
            <div class="col"><h1 class="fw-bold text-center mb-3">
                Himachal Pradesh Tourism
              </h1>
                <p class="fw-medium mb-4">Himachal, the hub of adventure, nature, culture, history & spirituality.</p>
              <div class="row">
                <div class="col-6">
                    <div class="card">
                        <div class="card-body">
                          <img
                            src="assets/img/category/calender.svg"
                            class=""
                            alt=""
                            height="40"
                            width="40"
                          />
                            <span class="card-title fw-bold fs-1 mb-4" style="color: black;"> Best Time to Visit</span>
                            <p class="card-text fw-medium mb-4 mx-5">April-June</p>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card">
                        <div class="card-body">
                          <img
                            src="assets/img/category/clock.svg"
                            class=""
                            alt=""
                            height="40"
                            width="40"
                          />
                          <span class="card-title fw-bold fs-1 mb-4" style="color: black;">Ideal Duration</span>
                          <p class="card-text fw-medium mb-4 mx-5">5-8 Days</p>
                        </div>
                    </div>
                </div>
              </div>
              <div
                class="row justify-content-center"
              ><a class="text-center" href="#enquiry"><button class="btn btn-danger orange-gradient-btn fs--1 border-radius w-50">
                Plan your trip
              </button></a>
              </div>
              
              <hr>
              <div
                class="row"
              ><span class="card-title fw-bold fs-1 mb-4 text-center" style="color: black;">About Himachal Pradesh</span>
              <p class="card-text fw-medium mb-4">
                Himachal Pradesh is among the most visited top mountain tourist places in North India, Himalayas region. It gifts you with memories that last for a lifetime. Valleys, mountains, ancient monasteries, historical sites, lakes, mountain passes! - The list never ends. The wanderlust in you will be compelled to stay here forever. Pick up any Himachal travel guide, chances are, you will be hooked on to its beauty within a few minutes. This state has so much to offer.
                 Indeed, it’s a top tourist attraction in North India!
              </p>      
              </div>
              
            </div>
            <hr>
        </div>
        <section id="south"><div
          class="container-fluid"
        >   
          <div
              class="row"
          >
              <div class="col"><img
                  src="assets/img/category/kerala(1).jpg"
                  class=""
                  alt=""
                  height="500"
                  width="600"
              />
              </div>
              <div class="col"><h1 class="fw-bold text-center mb-3">
                  Kerala Tourism
                </h1>
                  <p class="fw-medium mb-4">A Welcoming Destination Where Nature, Beaches, Backwaters, Ayurveda, and Culture Await You.</p>
                <div class="row">
                  <div class="col-6">
                      <div class="card">
                          <div class="card-body">
                            <img
                              src="assets/img/category/calender.svg"
                              class=""
                              alt=""
                              height="40"
                              width="40"
                            />
                              <span class="card-title fw-bold fs-1 mb-4" style="color: black;"> Best Time to Visit</span>
                              <p class="card-text fw-medium mb-4 mx-5">Oct-Feb</p>
                          </div>
                      </div>
                  </div>
                  <div class="col-6">
                      <div class="card">
                          <div class="card-body">
                            <img
                              src="assets/img/category/clock.svg"
                              class=""
                              alt=""
                              height="40"
                              width="40"
                            />
                            <span class="card-title fw-bold fs-1 mb-4" style="color: black;">Ideal Duration</span>
                            <p class="card-text fw-medium mb-4 mx-5">5-8 Days</p>
                          </div>
                      </div>
                  </div>
                </div>
                <div
                  class="row justify-content-center"
                ><a class="text-center" href="#enquiry"><button class="btn btn-danger orange-gradient-btn fs--1 border-radius w-50">
                  Plan your trip
                </button></a>
                </div>
                
                <hr>
                <div
                  class="row"
                ><span class="card-title fw-bold fs-1 mb-4 text-center" style="color: black;">About Kerala</span>
                <p class="card-text fw-medium mb-4">
                  Encompassing serenity, Kerala is a charming South Indian destination that should be in every traveller’s bucket list. Adorned with the emerald backwaters, sprawling and lush tea estates, pristine hill stations, and azure 
                  Arabian Sea, Kerala tourism boasts numerous tourist places with which you will fall in love instantly.
                  In North Kerala, districts like Kasaragod, Kannur, Wayanad, Kozhikode, and Malappuram have many attractions for the tourists. Wayanad offers a lovely h
                  ill station holiday whereas Kozhikode offers a great beach holiday and an opportunity of bird watching.
                </p>      
                </div>
                
              </div>
              <hr>
          </div>
          
        </div>
        </section>
     <div
        class="container-fluid"
      >   
        <div
            class="row"
        >
            <div class="col"><img
                src="assets/img/category/mysore.jpg"
                class=""
                alt=""
                height="500"
                width="600"
            />
            </div>
            <div class="col"><h1 class="fw-bold text-center mb-3">
                Karnataka Tourism
              </h1>
                <p class="fw-medium mb-4">Karnataka is rich in heritage, culture, traditions and history! 
                  Karnataka Tourisms has something in store for everybody, a complete tourist destination!</p>
              <div class="row">
                <div class="col-6">
                    <div class="card">
                        <div class="card-body">
                          <img
                            src="assets/img/category/calender.svg"
                            class=""
                            alt=""
                            height="40"
                            width="40"
                          />
                            <span class="card-title fw-bold fs-1 mb-4" style="color: black;"> Best Time to Visit</span>
                            <p class="card-text fw-medium mb-4 mx-5">Round the year</p>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card">
                        <div class="card-body">
                          <img
                            src="assets/img/category/clock.svg"
                            class=""
                            alt=""
                            height="40"
                            width="40"
                          />
                          <span class="card-title fw-bold fs-1 mb-4" style="color: black;">Ideal Duration</span>
                          <p class="card-text fw-medium mb-4 mx-5">5-8 Days</p>
                        </div>
                    </div>
                </div>
              </div>
              <div
                class="row justify-content-center"
              ><a class="text-center" href="#enquiry"><button class="btn btn-danger orange-gradient-btn fs--1 border-radius w-50">
                Plan your trip
              </button></a>
              </div>
              
              <hr>
              <div
                class="row"
              ><span class="card-title fw-bold fs-1 mb-4 text-center" style="color: black;">About Karnataka</span>
              <p class="card-text fw-medium mb-4">
                Karnataka is located in the southwestern region of India. It is a rich state, rich in culture & heritage as well as the diversity of its landscape. Larger than life palaces fascinate you as much as the beaches & hill stations, all of which are an intrinsic part of Karnataka tourism places. It attracts sightseeing lovers as much as adventure enthusiasts. It also boasts a glorious past which is evident
                 in its forts, palaces and ancient towns, one example of which is the illustrious Vijayanagara Empire.
              </p>      
              </div>
              
            </div>
            <hr>
        </div>
        <section id="east"><div
          class="container-fluid"
        >   
          <div
              class="row"
          >
              <div class="col"><img
                  src="assets/img/category/nagaland.jpg"
                  class=""
                  alt=""
                  height="500"
                  width="600"
              />
              </div>
              <div class="col"><h1 class="fw-bold text-center mb-3">
                  Nagaland Tourism
                </h1>
                  <p class="fw-medium mb-4">Nagaland offers unending exploration possibilities from heritage villages to wildlife sanctuaries.</p>
                <div class="row">
                  <div class="col-6">
                      <div class="card">
                          <div class="card-body">
                            <img
                              src="assets/img/category/calender.svg"
                              class=""
                              alt=""
                              height="40"
                              width="40"
                            />
                              <span class="card-title fw-bold fs-1 mb-4" style="color: black;"> Best Time to Visit</span>
                              <p class="card-text fw-medium mb-4 mx-5">Oct-Feb</p>
                          </div>
                      </div>
                  </div>
                  <div class="col-6">
                      <div class="card">
                          <div class="card-body">
                            <img
                              src="assets/img/category/clock.svg"
                              class=""
                              alt=""
                              height="40"
                              width="40"
                            />
                            <span class="card-title fw-bold fs-1 mb-4" style="color: black;">Ideal Duration</span>
                            <p class="card-text fw-medium mb-4 mx-5">5-8 Days</p>
                          </div>
                      </div>
                  </div>
                </div>
                <div
                  class="row justify-content-center"
                ><a class="text-center" href="#enquiry"><button class="btn btn-danger orange-gradient-btn fs--1 border-radius w-50">
                  Plan your trip
                </button></a>
                </div>
                
                <hr>
                <div
                  class="row"
                ><span class="card-title fw-bold fs-1 mb-4 text-center" style="color: black;">About Nagaland</span>
                <p class="card-text fw-medium mb-4">
                  This must visit destination 'Nagaland' is a wonderful world full of beauty, appeal and adventure that calls tourists from far and near. As for some, the only drawback is the accessibility which is an
                   important factor and perhaps the only reason why this seems to be a dream-like destination. 
                </p>      
                </div>
                
              </div>
              <hr>
          </div>
          
        </div>
        </section>
     <div
        class="container-fluid"
      >   
        <div
            class="row"
        >
            <div class="col"><img
                src="assets/img/category/sikkim(1).jpg"
                class=""
                alt=""
                height="500"
                width="600"
            />
            </div>
            <div class="col"><h1 class="fw-bold text-center mb-3">
                Sikkim Tourism
              </h1>
                <p class="fw-medium mb-4"></p>
              <div class="row">
                <div class="col-6">
                    <div class="card">
                        <div class="card-body">
                          <img
                            src="assets/img/category/calender.svg"
                            class=""
                            alt=""
                            height="40"
                            width="40"
                          />
                            <span class="card-title fw-bold fs-1 mb-4" style="color: black;"> Best Time to Visit</span>
                            <p class="card-text fw-medium mb-4 mx-5">March-Oct</p>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card">
                        <div class="card-body">
                          <img
                            src="assets/img/category/clock.svg"
                            class=""
                            alt=""
                            height="40"
                            width="40"
                          />
                          <span class="card-title fw-bold fs-1 mb-4" style="color: black;">Ideal Duration</span>
                          <p class="card-text fw-medium mb-4 mx-5">5-8 Days</p>
                        </div>
                    </div>
                </div>
              </div>
              <div
                class="row justify-content-center"
              ><a class="text-center" href="#enquiry"><button class="btn btn-danger orange-gradient-btn fs--1 border-radius w-50">
                Plan your trip
              </button></a>
              </div>
              
              <hr>
              <div
                class="row"
              ><span class="card-title fw-bold fs-1 mb-4 text-center" style="color: black;">About Sikkim</span>
              <p class="card-text fw-medium mb-4">
                Despite being the smallest state in North East India, Sikkim is one of the most popular places for tourism in India. Its marvelous landscape is dotted with high-altitude lakes, rolling green mountains, colorful rhododendron groves, crystal-clear rivers, milky waterfalls, beautiful 
                monasteries, and the unparalleled views of the third highest mountain in the world, Mount Khangchendzonga.
              </p>      
              </div>
              
            </div>
            <hr>
        </div>
        <section id="west"><div
          class="container-fluid"
        >   
          <div
              class="row"
          >
              <div class="col"><img
                  src="assets/img/category/maharashtra.jpg"
                  class=""
                  alt=""
                  height="500"
                  width="600"
              />
              </div>
              <div class="col"><h1 class="fw-bold text-center mb-3">
                  Maharashtra Tourism
                </h1>
                  <p class="fw-medium mb-4">With an incredible mashup of everything, there's is no better place to go for a holiday in India than Maharashtra.</p>
                <div class="row">
                  <div class="col-6">
                      <div class="card">
                          <div class="card-body">
                            <img
                              src="assets/img/category/calender.svg"
                              class=""
                              alt=""
                              height="40"
                              width="40"
                            />
                              <span class="card-title fw-bold fs-1 mb-4" style="color: black;"> Best Time to Visit</span>
                              <p class="card-text fw-medium mb-4 mx-5">June-August</p>
                          </div>
                      </div>
                  </div>
                  <div class="col-6">
                      <div class="card">
                          <div class="card-body">
                            <img
                              src="assets/img/category/clock.svg"
                              class=""
                              alt=""
                              height="40"
                              width="40"
                            />
                            <span class="card-title fw-bold fs-1 mb-4" style="color: black;">Ideal Duration</span>
                            <p class="card-text fw-medium mb-4 mx-5">5-8 Days</p>
                          </div>
                      </div>
                  </div>
                </div>
                <div
                  class="row justify-content-center"
                ><a class="text-center" href="#enquiry"><button class="btn btn-danger orange-gradient-btn fs--1 border-radius w-50">
                  Plan your trip
                </button></a>
                </div>
                
                <hr>
                <div
                  class="row"
                ><span class="card-title fw-bold fs-1 mb-4 text-center" style="color: black;">About Maharashtra</span>
                <p class="card-text fw-medium mb-4">
                  For a vacation in Maharashtra, there is abundance natural beauty to soothe the senses; beaches that are the best places to unwind; exceptional shrines that are the epitome of 
                  architectural excellence and rich flora and fauna that makes it a biodiversity hotspot.
                </p>      
                </div>
                
              </div>
              <hr>
          </div>
          
        </div>
        </section>
     <div
        class="container-fluid"
      >   
        <div
            class="row"
        >
            <div class="col"><img
                src="assets/img/category/goa.jpg"
                class=""
                alt=""
                height="500"
                width="600"
            />
            </div>
            <div class="col"><h1 class="fw-bold text-center mb-3">
                Goa Tourism
              </h1>
                <p class="fw-medium mb-4">Picturesque Beaches, Good Vibes, and Adventure Await in Goa</p>
              <div class="row">
                <div class="col-6">
                    <div class="card">
                        <div class="card-body">
                          <img
                            src="assets/img/category/calender.svg"
                            class=""
                            alt=""
                            height="40"
                            width="40"
                          />
                            <span class="card-title fw-bold fs-1 mb-4" style="color: black;"> Best Time to Visit</span>
                            <p class="card-text fw-medium mb-4 mx-5">Round the year</p>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card">
                        <div class="card-body">
                          <img
                            src="assets/img/category/clock.svg"
                            class=""
                            alt=""
                            height="40"
                            width="40"
                          />
                          <span class="card-title fw-bold fs-1 mb-4" style="color: black;">Ideal Duration</span>
                          <p class="card-text fw-medium mb-4 mx-5">5-8 Days</p>
                        </div>
                    </div>
                </div>
              </div>
              <div
                class="row justify-content-center"
              ><a class="text-center" href="#enquiry"><button class="btn btn-danger orange-gradient-btn fs--1 border-radius w-50">
                Plan your trip
              </button></a>
              </div>
              
              <hr>
              <div
                class="row"
              ><span class="card-title fw-bold fs-1 mb-4 text-center" style="color: black;">About Goa</span>
              <p class="card-text fw-medium mb-4">
                The coastal paradise, Goa is not unknown to anyone. This tiny state in West India is famous for its plethora of beautiful beaches, great seafood, amazing nightlife, and thrilling watersports.
              Goa along with being a popular beach destination in India is a perfect honeymoon destination, a great getaway with friends, 
              and an amazing family holiday place, which means, the place is filled with activities and attractions to keep all its visitors engaged.
              </p>      
              </div>
              
            </div>
            <hr>
        </div>
      </div>
      </div>
      <!-- <section> begin ============================-->
      <section class="pt-6">
        <div class="container">
          <div
            class="py-8 px-5 position-relative text-center"
            style="
              background-color: rgba(223, 215, 249, 0.199);
              border-radius: 129px 20px 20px 20px;
            "
          >
            <div
              class="position-absolute start-100 top-0 translate-middle ms-md-n3 ms-n4 mt-3"
            >
              <img
                src="assets/img/cta/send.png"
                style="max-width: 70px"
                alt="send icon"
              />
            </div>
            <div class="position-absolute end-0 top-0 z-index--1">
              <img
                src="assets/img/cta/shape-bg2.png"
                width="264"
                alt="cta shape"
              />
            </div>
            <div
              class="position-absolute start-0 bottom-0 ms-3 z-index--1 d-none d-sm-block"
            >
              <img
                src="assets/img/cta/shape-bg1.png"
                style="max-width: 340px"
                alt="cta shape"
              />
            </div>
            <div class="row justify-content-center">
              <div class="col-lg-8 col-md-10">
                <h2 class="text-secondary lh-1-7 mb-7">
                  Subscribe for more updates, tips and insights for your holidays.
                </h2>
                <form class="row g-3 align-items-center w-lg-75 mx-auto" action="send.php" method="post">
                  <div class="col-sm">
                    <div class="input-group-icon">
                      <input
                        class="form-control form-little-squirrel-control"
                        name="semail"
                        type="email"
                        placeholder="Enter email "
                        aria-label="email"
                      /><img
                        class="input-box-icon"
                        src="assets/img/cta/mail.svg"
                        width="17"
                        alt="mail"
                      />
                    </div>
                  </div>
                  <div class="col-sm-auto">
                    <button class="btn btn-danger orange-gradient-btn fs--1">
                      Subscribe
                    </button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <!-- end of .container-->
      </section>
      <hr>
      <h1 id="about"
                  class="fw-bold font-cursive text-capitalize text-center mb-3"
                >
                  About us
                </h1>
                <p class="fw-medium mb-4 text-center">
                  We at MyTravel are dedicated to expanding tourism in India. 
                  We efficiently manage numerous well-established resorts and restaurants 
                  all across the country.</p>
                   <p class="fw-medium mb-4 text-center">Offering heritage walks, adventure activities, 
                  and aquatic sports, along with interesting tour packages, we give you the
                   opportunity to explore the riches of this country to the fullest. 
                   Embracing India's cultural heritage, our resorts are well-known for 
                   offering comfortable rooms with exclusive views, while our restaurants specialize
                    in the preparation and service of a variety of local dishes of the area.</p>
                     <p class="fw-medium mb-4 text-center">We invite 
                    you to enjoy the tranquil beaches and the serenity of the mountains, to find peace 
                    in the pilgrimage sites or to adventures in the forests. Our resorts are perfectly 
                    based in each unique location so you have the best holiday break ever. 
                    Taking tremendous pride in preserving the environment, our teams run the resorts
                     by providing employment opportunities for the locals, encouraging them to be a part 
                     of our efforts in giving every customer a delightful experience.
                </p>

      <hr>
      <section class="pt-6" >
        <div class="container">
          <div
            class="py-8 px-5 position-relative text-center"
            style="
              background-color: rgba(223, 215, 249, 0.199);
              border-radius: 129px 20px 20px 20px;
            "
          >
            <div
              class="position-absolute start-100 top-0 translate-middle ms-md-n3 ms-n4 mt-3"
            >
              <img
                src="assets/img/cta/send.png"
                style="max-width: 70px"
                alt="send icon"
              />
            </div>
            <div class="position-absolute end-0 top-0 z-index--1">
              <img
                src="assets/img/cta/shape-bg2.png"
                width="264"
                alt="cta shape"
              />
            </div>
            <div
              class="position-absolute start-0 bottom-0 ms-3 z-index--1 d-none d-sm-block"
            >
              <img
                src="assets/img/cta/shape-bg1.png"
                style="max-width: 340px"
                alt="cta shape"
              />
            </div>
            <div class="row justify-content-center">
              <div class="col-lg-8 col-md-10">
                <h2 class="text-secondary lh-1-7 mb-5"id="enquiry">
                  Fill Enquiry Form Below
                </h2>
         
                <form class="row g-3 align-items-center w-lg-75 mx-auto" action="enquiry.php" method="post">
                  <div class="col-sm">
                    <div class="input-group-icon mb-3">
                      <input
                        class="form-control form-little-squirrel-control"
                        name="ename"
                        type="text"
                        placeholder="Enter your Full Name "
                        aria-label="name"
                        required
                      /><img
                        class="input-box-icon"
                        src="assets/img/cta/pen.svg"
                        width="17"
                        alt="pen"
                      />
                      </div>
                      
                      <div class="input-group-icon mb-3">
                        <textarea class="form-control form-little-squirrel-control" required name="earea" id="" rows="5" placeholder="Tour Description"></textarea>
                      </div>
                        <div class="input-group-icon mb-3">
                        <input class="form-control form-little-squirrel-control" required type="date" name="date" id="" placeholder="DD/MM/YYYY">  
                        </div>
                        <div class="input-group-icon mb-3">
                          <input class="form-control form-little-squirrel-control" required type="number" name="number" id="" placeholder="Number of Days">
                        </div>
                        <div class="input-group-icon mb-3">
                          <input
                            class="form-control form-little-squirrel-control"
                            name="eemail"
                            type="email"
                            placeholder="Enter email "
                            aria-label="name"
                            required
                          /><img
                          class="input-box-icon"
                          src="assets/img/cta/email1.svg"
                          width="17"
                          alt="mail"
                        />
                        </div>
                        <div class="input-group-icon mb-3">
                          <input
                            class="form-control form-little-squirrel-control"
                            name="enum"
                            type="tel"
                            placeholder="Enter Mobile no "
                            aria-label="name"
                            required
                          /><img
                          class="input-box-icon"
                          src="assets/img/cta/pen.svg"
                          width="17"
                          alt="number"
                        />
                        </div>
                         <button class="btn btn-danger orange-gradient-btn fs--1">
                       Get A Custom Quote
                      </button>
                    </div>
                  </div>     
                </form>
              </div>
            </div>
          </div>
        </div>
        <!-- end of .container-->
      </section>


      <hr>
      <div class="container w-25">
        <div
          class="row"
        >
          <div class="col-sm-12"><a href="index.html" class="d-flex align-items-center link-body-emphasis text-decoration-none">
            &nbsp;&nbsp;&nbsp;&nbsp;
            <img
                    class="ms-8"
                    src="assets/img/logo1.svg"
                    width="60"
                    alt="MyTravel"
                  />
          </a>
          
          <span class="footer-heading-color fw-bold font-sans-serif mb-3 mb-lg-4 ms-8">&nbsp;&nbsp;&nbsp;&nbsp;MyTravel</span>
                  <p class="fs--1 text-secondary mb-0 fw-medium mt-2">
                    Book your trip in minute, get full Control for much longer.
                  </p>
                <a href="contact.html#contact" class="nav-link fw-medium ms-8 ">Contact</a>
                <a href="explore.php#about" class="nav-link fw-medium ms-8">About us</a>
                <a href="explore.php" class="nav-link fw-medium ms-8">&nbsp;&nbsp;&nbsp;More</a>
                </div>
        </div>
        </div>

      <!-- <section> close ============================-->
      <!-- ============================================-->
      <div class="py-5 text-center">
        <p class="mb-0 text-secondary fs--1 fw-medium">
          All rights reserved@2024
        </p>
      </div>
    </main>
    <!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->

    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="vendors/@popperjs/popper.min.js"></script>
    <script src="vendors/bootstrap/bootstrap.min.js"></script>
    <script src="vendors/is/is.min.js"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="vendors/fontawesome/all.min.js"></script>
    <script src="assets/js/theme.js"></script>

    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&amp;family=Volkhov:wght@700&amp;display=swap"
      rel="stylesheet"
    />
  </body>
</html>
