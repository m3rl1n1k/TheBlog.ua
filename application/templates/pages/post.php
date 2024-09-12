

        <!-- Main Content-->
        <main class="mb-4">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <p>Want to post a blog? Fill out the form below to submit your blog post!</p>
                        <h2>You need to log in to write a blog</h2>
                        <div class="my-5">
                            <form id="blogForm" method="post" action="/config/post_handler.php">
                                <div class="form-floating">
                                    <input class="form-control" id="blogTitle" name="title" type="text" placeholder="Enter your blog title..." data-sb-validations="required" />
                                    <label for="blogTitle">Blog Title</label>
                                    <div class="invalid-feedback" data-sb-feedback="title:required">A blog title is required.</div>
                                </div>
                                <div class="form-floating">
                                    <textarea class="form-control" id="blogContent" name="content" placeholder="Enter your blog content here..." style="height: 12rem" data-sb-validations="required"></textarea>
                                    <label for="blogContent">Blog Content</label>
                                    <div class="invalid-feedback" data-sb-feedback="content:required">Blog content is required.</div>
                                </div>
                                <br />
                                <!-- Submit success message-->
                                <div class="d-none" id="submitSuccessMessage">
                                    <div class="text-center mb-3">
                                        <div class="fw-bolder">Blog post submission successful!</div>
                                        Your blog post has been submitted.
                                    </div>
                                </div>
                                <!-- Submit error message-->
                                <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error submitting blog post!</div></div>
                                <!-- Submit Button-->
                                <button class="btn btn-primary text-uppercase" id="submitButton" type="submit">Post</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </main>

