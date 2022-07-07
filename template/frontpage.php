<?php
require 'inc/header.php'
?>
<main class="">
  <div class="container col-md-12 col-lg-8 py-4">
    <div class="row my-auto shadow-sm rounded px-4 glass text-white">
      <div class="px-2 mb-4 rounded-3 col-md-8 col-lg-8">
        <div class="container col-md-12 py-5 my-5">
          <h1 class="display-4 fw-bold">How to get a job?</h1>
          <p class="col-lg-9 blockquote">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
          <button class="btn shadow-lg btn-outline-light btn-lg my-auto mx-auto" type="button">Find Job</button>
        </div>
      </div>
      <div class=" mb-4 d-none d-lg-block col-lg-4">
        <img src="../assets/images/thinking.png" height="500" class="" alt="">
      </div>
    </div>


    <div class="row shadow-sm rounded glass text-white px-4 my-auto">
      <div class="mb-4 d-none d-lg-block col-lg-4">
        <img src="../assets/images/search.png" class="img-fluid" alt="">
      </div>
      <div class="px-2 mb-4 rounded-3 col-md-8 col-lg-8">
        <div class="container-fluid py-5 my-5">
          <h1 class="display-4 fw-bold">Find what suits you</h1>
          <p class="col-md-10 blockquote">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
          <button class="btn btn-outline-light btn-lg shadow-lg mt-4" type="button">Find Job</button>
        </div>
      </div>
      
    </div>

    
    <div class="row py-4 px-2 shadow-sm mb-3">
    <?php foreach($jobs as $job):?>
        <div class="col-lg-4 col-md-6 col-sm-12">
          <div class="card mb-5 glass  shadow-lg rounded">
            <img src="../assets/images/que.jpg" width="300" height="300" class="mx-auto border border-primary rounded-circle d-block" />

            <div class="card-body text-white">
              <div class="card-title">
                <h3 class=""><?php echo $job->job_title;?></h3>
              </div>
              <div class="card-text">
                <p>
                <?php echo $job->description;?>
                </p>
              </div>
              <a href="#" class="btn btn-outline-light rounded float-end"
                >Read More</a
              >
            </div>
          </div>
        </div>
    <?php endforeach;?>
    </div>
    <div class="row py-4 px-2 shadow-lg row-cols-1 row-cols-md-3 mb-3 text-center">
      <div class="col glass">
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