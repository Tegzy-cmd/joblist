<?php
require 'inc/header.php'
?>
<main class="">
  <div class="container col-md-12 col-lg-8 py-4">
    <div class="row shadow-lg border rounded">
      <!-- Mobile Thinking Image Start -->
      <div class="d-md-block d-lg-none col-md-4">
        <img src="../assets/images/thinking.png" width="320" height="390" class="" alt="">
      </div>
      <!-- Mobile thinking Image End -->
      <div class="px-2 mb-4 rounded-3 col-md-8 col-lg-8">
        <div class="container col-md-12 py-5">
          <h1 class="display-4 fw-bold">How to get a job?</h1>
          <p class="col-lg-9 blockquote">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.</p>
          <button class="btn shadow-lg btn-primary btn-lg" type="button">Find Job</button>
        </div>
      </div>
      <div class=" mb-4 d-none d-lg-block col-lg-4">
        <img src="../assets/images/thinking.png" class="img-fluid" alt="">
      </div>
    </div>


    <div class="row my-4 shadow-lg rounded">
      <!-- Mobile Search Image Start -->
      <div class="px-3 d-md-block d-lg-none col-md-4">
        <img src="../assets/images/search.png" width="250" height="250" class="" alt="">
      </div>
      <!-- Mobile Search Image End -->
      <div class="mb-4 d-none d-lg-block col-lg-4">
        <img src="../assets/images/search.png" class="img-fluid" alt="">
      </div>
      <div class="px-2 mb-4 rounded-3 col-md-8 col-lg-8">
        <div class="container-fluid py-5">
          <h1 class="display-4 fw-bold">Find what suits you</h1>
          <p class="col-md-10 text-dark blockquote">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.</p>
          <button class="btn btn-outline-primary bg-white btn-lg" type="button">Find Job</button>
        </div>
      </div>

    </div>
    <div class="row py-4 px-2 shadow-lg mb-3">
    <?php foreach($jobs as $job):?>
        <div class="col-lg-4 col-md-6 col-sm-12">
          <div class="card mb-5 shadow-sm">
            <img src="../assets/images/tg.jpg" class="img-fluid" />

            <div class="card-body">
              <div class="card-title">
                <h2><?php echo $job->job_title;?></h2>
              </div>
              <div class="card-text">
                <p>
                <?php echo $job->description;?>
                </p>
              </div>
              <a href="#" class="btn btn-outline-primary rounded-0 float-end"
                >Read More</a
              >
            </div>
          </div>
        </div>
    <?php endforeach;?>
    </div>
    <div class="row py-4 px-2 shadow-lg row-cols-1 row-cols-md-3 mb-3 text-center">
      <div class="col">
        <div class="card mb-4 rounded-3 shadow">
          <div class="card-header py-3">
            <h4 class="my-0 h1 fw-normal">Free</h4>
          </div>
          <div class="card-body blockquote">
            <h1 class="card-title pricing-card-title">$0<small class="fw-light">/mo</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>10 users included</li>
              <li>2 GB of storage</li>
              <li>Email support</li>
              <li>Help center access</li>
            </ul>
            <button type="button" class="w-100 btn btn-outline-white shadow-lg btn-lg">Sign up for free</button>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card mb-4 rounded-3 shadow">
          <div class="card-header text-primary py-3">
            <h4 class="my-0 h1 fw-normal">Pro</h4>
          </div>
          <div class="card-body blockquote">
            <h1 class="card-title pricing-card-title">$15<small class="fw-light">/mo</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>20 users included</li>
              <li>10 GB of storage</li>
              <li>Email support</li>
              <li>Help center access</li>
            </ul>
            <button type="button" class="w-100 btn btn-outline-white shadow-lg btn-lg">Sign up for free</button>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card mb-4 rounded-3 shadow border-primary">
          <div class="card-header py-3 border-primary">
            <h4 class="my-0 h1 fw-normal">Enterprise</h4>
          </div>
          <div class="card-body blockquote">
            <h1 class="card-title pricing-card-title">$29<small class="fw-light">/mo</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>30 users included</li>
              <li>15 GB of storage</li>
              <li>Phone and email support</li>
              <li>Help center access</li>
            </ul>
            <button type="button" class="w-100 btn btn-outline-white shadow-lg btn-lg">Contact us</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  </div>
  </div>
</main>

<?php require 'inc/footer.php' ?>