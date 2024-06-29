
<!-- Page Header-->
<header class="masthead" >
    <div class="container position-relative px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
            </div>
        </div>
    </div>
</header>
<!-- Main Content-->
<main class="mb-4">
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <p>Want to get in touch? Fill out the form below to send me a message and I will get back to you as soon as possible!</p>
                <div class="my-5">
                    <!-- * * * * * * * * * * * * * * *-->
                    <!-- * * SB Forms Contact Form * *-->
                    <!-- * * * * * * * * * * * * * * *-->
                    <!-- This form is pre-integrated with SB Forms.-->
                    <!-- To make this form functional, sign up at-->
                    <!-- https://startbootstrap.com/solution/contact-forms-->
                    <!-- to get an API token!-->

                    <form id="contactForm" action="/config/db_handler.php" method="post">
                        <div class="form-floating">
                            <input class="form-control" id="email" name="email" type="email" placeholder="Enter your email..." required />
                            <label for="email">Email address</label>
                        </div>
                        <div class="form-floating">
                            <input class="form-control" id="password" name="password" type="password" placeholder="Enter your password..." required />
                            <label for="password">Password</label>
                        </div>
                        <br />
                        <button class="btn btn-primary text-uppercase" id="submitButton" type="submit">Log In</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</main>
