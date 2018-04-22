<?php $this->layout('layout', ['title' => 'IndieLogin.com']) ?>

<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
  <div class="col-md-5 p-lg-5 mx-auto my-5">

    <h1 class="display-4 font-weight-normal"><?= Config::$name ?></h1>

    <p class="lead font-weight-normal">Sign in with your domain name.</p>

    <div>
      <p class="lead">Try it!</p>

      <form action="/auth" method="get">
        <div class="form-group">
          <input type="url" placeholder="example.com" name="me" class="form-control">
        </div>

        <input type="hidden" name="client_id" value="<?= Config::$base ?>">
        <input type="hidden" name="redirect_uri" value="<?= Config::$base ?>demo">
        <input type="hidden" name="state" value="<?= generate_state() ?>">

        <button class="btn btn-outline-secondary">Sign In</button>
      </form>

    </div>
  </div>
  <div class="product-device box-shadow d-none d-md-block"></div>
  <div class="product-device product-device-2 box-shadow d-none d-md-block"></div>
</div>

<div class="container container-full marketing">


  <hr class="featurette-divider">

  <div class="row featurette">
    <div class="col-md-7">
      <h2 class="featurette-heading">What is <span class="text-muted"><?= Config::$name ?>?</span></h2>
      <p class="lead"><?= Config::$name ?> is a way to <b>use your own domain name</b> as your online identity when signing in to websites. If your website supports IndieAuth, then you're ready to go right away. Otherwise, you can link from your home page to your Twitter or GitHub profile, or even use your email or PGP key to authenticate. Regardless of how you authenticate, your identity provided to the website will always be your website.</p>
    </div>
    <div class="col-md-5">
      <img class="featurette-image img-fluid mx-auto" src="/images/web-signin-splash.jpg" alt="Web Sign-In Prompt">
    </div>
  </div>


  <hr class="featurette-divider">


  <div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3">
    <div class="bg-dark mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">
      <div class="my-3 py-3">
        <h2 class="display-5">Another headline</h2>
        <p class="lead">And an even wittier subheading.</p>
      </div>
      <div class="bg-light box-shadow mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div>
    </div>
    <div class="bg-light mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
      <div class="my-3 p-3">
        <h2 class="display-5">Another headline</h2>
        <p class="lead">And an even wittier subheading.</p>
      </div>
      <div class="bg-dark box-shadow mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div>
    </div>
  </div>

</div>


<style>
.product-device {
  position: absolute;
  right: 10%;
  bottom: -30%;
  width: 300px;
  height: 540px;
  background-color: #333;
  border-radius: 21px;
  -webkit-transform: rotate(30deg);
  transform: rotate(30deg);
}

.product-device::before {
  position: absolute;
  top: 10%;
  right: 10px;
  bottom: 10%;
  left: 10px;
  content: "";
  background-color: rgba(255, 255, 255, .1);
  border-radius: 5px;
}

.product-device-2 {
  top: -25%;
  right: auto;
  bottom: 0;
  left: 5%;
  background-color: #e5e5e5;
}



.overflow-hidden { overflow: hidden; }


/* Center align the text within the three columns below the carousel */
.marketing .col-lg-4 {
  margin-bottom: 1.5rem;
  text-align: center;
}
.marketing h2 {
  font-weight: 400;
}
.marketing .col-lg-4 p {
  margin-right: .75rem;
  margin-left: .75rem;
}



.featurette-divider {
  margin: 5rem 0; /* Space out the Bootstrap <hr> more */
}

/* Thin out the marketing headings */
.featurette-heading {
  font-weight: 300;
  line-height: 1;
  letter-spacing: -.05rem;
}


/* RESPONSIVE CSS
-------------------------------------------------- */

@media (min-width: 40em) {
  /* Bump up size of carousel content */
  .carousel-caption p {
    margin-bottom: 1.25rem;
    font-size: 1.25rem;
    line-height: 1.4;
  }

  .featurette-heading {
    font-size: 50px;
  }
}

@media (min-width: 62em) {
  .featurette-heading {
    margin-top: 7rem;
  }
}


</style>
