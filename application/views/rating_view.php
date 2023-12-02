<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Nike Store</title>

    <!--bootstrap css-->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <!---main css---->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>" />
    <!----google font---->
    <link
      href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap"
      rel="stylesheet"
    />
    <!----font awesome---->
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.15.1/css/all.css"
    />
    <style>
        .rating-container {
            text-align: center;
            margin-top: 20px;
        }

        .star {
            font-size: 25px;
            color: gold;
            cursor: pointer;
        }

        .star:hover {
            color: darkorange;
        }
    </style>
  </head>
  <body>
    <!-- Header section start -->
    <header id="header">
      <!-- Navigation start -->
      <nav
        class="navbar navbar-expand-lg navbar-light fixed-top shadow custom-navbar"
      >
        <div class="container container-fluid">
          <div class="navbar-header">
            <a href="#" class="navbar-brand float-end">
              <img
                src="<?php echo base_url('assets/icons/logo.svg'); ?>"
                alt="NIKE MAX"
                class="img-responsive custom-logo"
              />
              <span class="custom-highlight">NIKE MAX</span>
            </a>
            <button
              class="navbar-toggler float-end"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="navbar-toggler-icon"></span>
            </button>
          </div>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="nav navbar-nav ms-auto custom-ul">
              <li class="nav-item custom-li">
                <a href="#" aria-current="page" class="nav-link active">Home</a>
              </li>
              <li class="nav-item custom-li">
                <a href="#services" class="nav-link">Services</a>
              </li>
              <li class="nav-item custom-li">
                <a href="#products" class="nav-link">Products</a>
              </li>
              <li class="nav-item custom-li">
                <a href="#contact" class="nav-link">Contact</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- Navigation end -->

      <!-- Home page start -->
      <section id="cover" class="container">
        <div class="row g-2 justify-content-around">
          <div
            class="col-md-6 d-flex justify-content-center align-items-center order-lg-2"
          >
            <div class="p-3">
              <img
                src="<?php echo base_url('assets/images/hero.png'); ?>"
                alt=""
                class="max-auto d-block w-100 img-fluid"
              />
            </div>
          </div>

          <div
            class="col-md-6 d-flex justify-content-center align-items-center order-lg-2"
          >
            <div class="p-3">
              <h1 class="custom-highlight">NIKE MAX</h1>
              <h1>Never Stop Running</h1>
              <p>
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. In
                dolores placeat autem consectetur quasi iste impedit nihil eius
                quam modi. Qui perferendis sunt numquam impedit rerum nemo quae
                autem nobis.
              </p>
              <button
                class="btn btn-primary rounded-3 custom-btn"
                type="button"
              >
                <i class="fas fa-shopping-cart"></i>BUY NOW
              </button>
            </div>
          </div>
        </div>
      </section>
      <!-- Home page end -->
    </header>
    <!-- Header section end -->

    <!-- Main section start -->
    <main class="container">
      <!-- Services section start -->
      <section id="services" class="mt-5">
        <div class="row g-2 justify-content-around">
          <div
            class="col-md-6 d-flex justify-content-center align-items-center order-1"
          >
            <div class="col">
              <div
                class="card p-3 mb-3 custom-services-card"
                style="max-width: 540px"
              >
                <div class="row g-0">
                  <div class="col-md-4 gy-3">
                    <img
                      src="<?php echo base_url('assets/icons/image 12.png'); ?>"
                      alt=""
                      class="max-auto d-block custom-img-width"
                    />
                  </div>
                  <div class="col-md-8">
                    <div class="card-body custom-text">
                      <h5 class="card-title">find the Perfect Fit</h5>
                      <p class="card-text">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Asperiores corrupti corporis hic aliquid, error labore?
                        Aliquid enim, numquam tempora dolor quibusdam eligendi,
                        doloremque exercitationem, nam ipsum obcaecati laborum
                        magni nemo.
                      </p>
                    </div>
                  </div>
                </div>
              </div>

              <div
                class="card p-3 mb-3 custom-services-card"
                style="max-width: 540px"
              >
                <div class="row g-0">
                  <div class="col-md-4 gy-3">
                    <img
                      src="<?php echo base_url('assets/icons/image 13.png'); ?>"
                      alt=""
                      class="max-auto d-block custom-img-width"
                    />
                  </div>
                  <div class="col-md-8">
                    <div class="card-body custom-text">
                      <h5 class="card-title">Free Exchange</h5>
                      <p class="card-text">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Asperiores corrupti corporis hic aliquid, error labore?
                        Aliquid enim, numquam tempora dolor quibusdam eligendi,
                        doloremque exercitationem, nam ipsum obcaecati laborum
                        magni nemo.
                      </p>
                    </div>
                  </div>
                </div>
              </div>

              <div
                class="card p-3 mb-3 custom-services-card"
                style="max-width: 540px"
              >
                <div class="row g-0">
                  <div class="col-md-4 gy-3">
                    <img
                      src="<?php echo base_url('assets/icons/image 14.png'); ?>"
                      alt=""
                      class="max-auto d-block custom-img-width"
                    />
                  </div>
                  <div class="col-md-8">
                    <div class="card-body custom-text">
                      <h5 class="card-title">Contact Our Seller</h5>
                      <p class="card-text">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Asperiores corrupti corporis hic aliquid, error labore?
                        Aliquid enim, numquam tempora dolor quibusdam eligendi,
                        doloremque exercitationem, nam ipsum obcaecati laborum
                        magni nemo.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col order-lg-2">
            <img src="<?php echo base_url('assets/icons/XMLID 2.png'); ?>" alt="" class="mx-auto d-block w-100" />

            
          </div>
        </div>
      </section>
      <!-- Services section end -->

      <!-- Casual shoes start -->
      <section id="products" class="mt-5">
        <h2>Casual Shoes</h2>
        <div class="row row-cols-1 row-cols-md-3 g-4">
          <div class="col">
            <div class="card h-100 shadow custom-card">
              <img
                src="<?php echo base_url('assets/images/image 5.png'); ?>"
                alt=""
                class="card-img-top w-100 custom-bg"
              />
              <div class="card-body">
                <h4 class="card-title">Nike Shoes</h4>
                <p class="card-text">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Incidunt eveniet saepe itaque deleniti provident repudiandae
                  enim modi sapiente corrupti doloremque, quos, odit veniam,
                  iste mollitia fugit voluptatibus atque eum explicabo.
                </p>
              </div>
              <div class="card-footer custom-footer">
                <div class="float-start">
                  <h4 class="custom-highlight">$521</h4>
                </div>
                <div class="float-end">
                  <button class="btn btn-primary rounded-3 custom-btn">
                    <i class="fas fa-shopping-cart"></i>BUY NOW
                  </button>
                </div>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card h-100 shadow custom-card">
              <img
                src="<?php echo base_url('assets/images/Daco_1703273 1.png'); ?>"
                alt=""
                class="card-img-top w-100 custom-bg"
              />
              <div class="card-body">
                <h4 class="card-title">Sneaker Skate Shoes</h4>
                <p class="card-text">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Incidunt eveniet saepe itaque deleniti provident repudiandae
                  enim modi sapiente corrupti doloremque, quos, odit veniam,
                  iste mollitia fugit voluptatibus atque eum explicabo.
                </p>
              </div>
              <div class="card-footer custom-footer">
                <div class="float-start">
                  <h4 class="custom-highlight">$1441</h4>
                </div>
                <div class="float-end">
                  <button class="btn btn-primary rounded-3 custom-btn">
                    <i class="fas fa-shopping-cart"></i>BUY NOW
                  </button>
                </div>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card h-100 shadow custom-card">
              <img
                src="<?php echo base_url('assets/images/pngegg 1.png'); ?>"
                alt=""
                class="card-img-top w-100 custom-bg"
              />
              <div class="card-body">
                <h4 class="card-title">Sneaker Basketball Shoes</h4>
                <p class="card-text">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Incidunt eveniet saepe itaque deleniti provident repudiandae
                  enim modi sapiente corrupti doloremque, quos, odit veniam,
                  iste mollitia fugit voluptatibus atque eum explicabo.
                </p>
              </div>
              <div class="card-footer custom-footer">
                <div class="float-start">
                  <h4 class="custom-highlight">$7025</h4>
                </div>
                <div class="float-end">
                  <button class="btn btn-primary rounded-3 custom-btn">
                    <i class="fas fa-shopping-cart"></i>BUY NOW
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Casual shoes end -->

      <!-- Formal shoes start -->
      <section id="products" class="mt-5">
        <h2>Formal Shoes</h2>
        <div class="row row-cols-1 row-cols-md-3 g-4">
          <div class="col">
            <div class="card h-100 shadow custom-card">
              <img
                src="<?php echo base_url('assets/images/Mask Group.png'); ?>"
                alt=""
                class="card-img-top w-100 custom-bg"
              />
              <div class="card-body">
                <h4 class="card-title">Prestige High-Cut Leather</h4>
                <p class="card-text">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Incidunt eveniet saepe itaque deleniti provident repudiandae
                  enim modi sapiente corrupti doloremque, quos, odit veniam,
                  iste mollitia fugit voluptatibus atque eum explicabo.
                </p>
              </div>
              <div class="card-footer custom-footer">
                <div class="float-start">
                  <h4 class="custom-highlight">$6215</h4>
                </div>
                <div class="float-end">
                  <button class="btn btn-primary rounded-3 custom-btn">
                    <i class="fas fa-shopping-cart"></i>BUY NOW
                  </button>
                </div>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card h-100 shadow custom-card">
              <img
                src="<?php echo base_url('assets/images/Rectangle 38.png'); ?>"
                alt=""
                class="card-img-top w-100 custom-bg"
              />
              <div class="card-body">
                <h4 class="card-title">Slip-On Formal Shoes</h4>
                <p class="card-text">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Incidunt eveniet saepe itaque deleniti provident repudiandae
                  enim modi sapiente corrupti doloremque, quos, odit veniam,
                  iste mollitia fugit voluptatibus atque eum explicabo.
                </p>
              </div>
              <div class="card-footer custom-footer">
                <div class="float-start">
                  <h4 class="custom-highlight">$8591</h4>
                </div>
                <div class="float-end">
                  <button class="btn btn-primary rounded-3 custom-btn">
                    <i class="fas fa-shopping-cart"></i>BUY NOW
                  </button>
                </div>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card h-100 shadow custom-card">
              <img
                src="<?php echo base_url('assets/images/Rectangle 39.png'); ?>"
                alt=""
                class="card-img-top w-100 custom-bg"
              />
              <div class="card-body">
                <h4 class="card-title">Slip-On Formal Shoes</h4>
                <p class="card-text">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Incidunt eveniet saepe itaque deleniti provident repudiandae
                  enim modi sapiente corrupti doloremque, quos, odit veniam,
                  iste mollitia fugit voluptatibus atque eum explicabo.
                </p>
              </div>
              <div class="card-footer custom-footer">
                <div class="float-start">
                  <h4 class="custom-highlight">$8025</h4>
                </div>
                <div class="float-end">
                  <button class="btn btn-primary rounded-3 custom-btn">
                    <i class="fas fa-shopping-cart"></i>BUY NOW
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Formal shoes end -->

      <!-- Subscribe section start -->
      <section id="contact" class="mt-5 mb-5">
        <div class="row d-flex justify-content-center align-items-center">
          <div class="col-md-12">
            <div class="card custom-card">
              <div class="text-center">
                <h4 class="d-block mt-3 text-uppercase">
                  Subscribe to Our Newsletter
                </h4>
                <div class="mt-5">
                  <div class="input-group mt-4 mb-3">
                    <input
                      type="text"
                      class="form-control"
                      placeholder="Enter your email"
                    />
                    <button
                      class="btn btn-success border-rad custom-btn"
                      type="button"
                      id="button-addon2"
                    >
                      Subscribe
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Subscribe section end -->
    </main>
    <!-- Main section end -->

    <!-- Rating Section Start -->
    <section id="rating" class="mt-5 mb-5">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-md-8">
                    <div class="card custom-card p-4">
                        <div class="text-center">
                            <h2 class="mb-4">Leave a review for the store</h2>

                            <!-- Rating Form -->
                            <form id="ratingForm">
                                <div class="mb-3">
                                    <label for="user_name" class="form-label">Your Name:</label>
                                    <input type="text" class="form-control" id="user_name" name="user_name" required>
                                </div>
                                <div class="mb-3">
                                    <label for="user_rating" class="form-label">Your Rating:</label>
                                    <div class="rating-container">
                                        <span class="star" data-rating="1">★</span>
                                        <span class="star" data-rating="2">★</span>
                                        <span class="star" data-rating="3">★</span>
                                        <span class="star" data-rating="4">★</span>
                                        <span class="star" data-rating="5">★</span>
                                    </div>
                                    <input type="hidden" id="user_rating" name="user_rating" required>
                                </div>
                                <div class="mb-3">
                                    <label for="user_comment" class="form-label">Comment:</label>
                                    <textarea class="form-control" id="user_comment" name="user_comment" rows="3"></textarea>
                                </div>
                                <button type="button" class="btn btn-primary" onclick="submitRating()">Send Review</button>
                            </form>

                            <hr>

                            <!-- Display Ratings -->
                            <h3 class="mb-4">Recent Ratings:</h3>
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th scope="col">Name</th>
                                            <th scope="col">Rating</th>
                                            <th scope="col">Comment</th>
                                            <th scope="col">Date</th>
                                        </tr>
                                    </thead>
                                    <tbody id="ratingsTableBody"></tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Rating Section End -->

    <!-- Main section start -->
    <footer id="footer" class="bg-light text-center text-lg-start mt-5">
      <div class="container p-4">
        <div class="row">
          <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
            <h5 class="text-uppercase">Featured</h5>
            <ul class="list-unstyled mb-0">
              <li>
                <a href="" class="text-dark">Holiday Gift Guide</a>
              </li>
              <li>
                <a href="" class="text-dark">Air Force</a>
              </li>
              <li>
                <a href="" class="text-dark">Jorden 1</a>
              </li>
              <li>
                <a href="" class="text-dark">Air Max 2090</a>
              </li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
            <h5 class="text-uppercase">Shoes</h5>
            <ul class="list-unstyled mb-0">
              <li>
                <a href="" class="text-dark">All Shoes</a>
              </li>
              <li>
                <a href="" class="text-dark">Running Shoes</a>
              </li>
              <li>
                <a href="" class="text-dark">Jorden Shoes</a>
              </li>
              <li>
                <a href="" class="text-dark">Basketball Shoes</a>
              </li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
            <h5 class="text-uppercase">Clothing</h5>
            <ul class="list-unstyled mb-0">
              <li>
                <a href="" class="text-dark">All Clothing</a>
              </li>
              <li>
                <a href="" class="text-dark">Top's & T-shirt</a>
              </li>
              <li>
                <a href="" class="text-dark">Shorts</a>
              </li>
              <li>
                <a href="" class="text-dark">Hoodies & Pullover</a>
              </li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
            <h5 class="text-uppercase">Socer</h5>
            <ul class="list-unstyled mb-0">
              <li>
                <a href="" class="text-dark">Infant & Toodler Shoes</a>
              </li>
              <li>
                <a href="" class="text-dark">Kid's Shoes</a>
              </li>
              <li>
                <a href="" class="text-dark">Kid's Basketball Shoes</a>
              </li>
              <li>
                <a href="" class="text-dark">Kid's Running Shoes</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="custom-footer-margin">
        <div class="pt-3 container text-center">
          <h6>
            &copy;<span class="custom-highlight">Coded By The Man</span> | All
            Rights Reserved
          </h6>
        </div>
      </div>
    </footer>
    <!-- Main section end -->

    <!--bootstrap JS script -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!--RatingController/submit_rating-->
    <!-- end script -->
    <script>
      function submitRating() {
        // Obtenha o valor do campo de comentário separadamente
        var comment = $('#user_comment').val();

        // Adicione o valor do campo de comentário ao formData
        var formData = $('#ratingForm').serialize() + '&user_comment=' + comment;

        // Exiba os dados no console para depuração
        console.log(formData);

        $.ajax({
            type: 'POST',
            url: '<?php echo base_url('RatingController/submit_rating'); ?>',
            data: formData,
            dataType: 'json',
            success: function(response) {
                alert(response.message);
                loadRatings();
                $('#ratingForm')[0].reset();
            },
            error: function(error) {
                console.log(error);
            }
        });
      }

      function loadRatings() {
          $.ajax({
              type: 'GET',
              url: '<?php echo base_url('RatingController/load_ratings'); ?>',
              dataType: 'json',
              success: function(ratings) {
                  displayRatings(ratings);
              },
              error: function(error) {
                  console.log(error);
              }
          });
      }

      function displayRatings(ratings) {
        var html = '';

        $.each(ratings, function(index, rating) {
            html += '<tr>';
            html += '<td>' + rating.user_name + '</td>';
            html += '<td>';
            for (var i = 1; i <= rating.rating; i++) {
                html += '★';
            }
            html += '</td>';
            html += '<td>' + (rating.user_comment ? rating.user_comment : 'No comment') + '</td>';
            html += '<td>' + rating.created_at + '</td>';
            html += '</tr>';
        });

        $('#ratingsTableBody').html(html);
      }

      $(document).ready(function() {
          loadRatings();

          $('.star').click(function() {
              var rating = $(this).data('rating');
              $('#user_rating').val(rating);

              // Update star colors
              $('.star').css('color', 'gold');
              $('.star:lt(' + rating + ')').css('color', 'darkorange');
          });
      });
    </script>
  </body>
</html>