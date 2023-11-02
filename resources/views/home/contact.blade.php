<section id="contact" class="contact">
    <div class="container">

        <div class="section-title">
            <h2>Contact</h2>
            <p>If you have any questions, inquiries, or just want to say hello, please don't hesitate to reach out to
                me. I'd love to hear from you!.</p>
        </div>

        <div class="row" data-aos="fade-in">

            <div class="col-lg-5 d-flex align-items-stretch">
                <div class="info">
                    <div class="address">
                        <i class="bi bi-geo-alt"></i>
                        <h4>Location:</h4>
                        <p><a href="https://maps.app.goo.gl/Sx4br4UjYB8mt2ix8" target="_blank">Kantipur Colony Street 1,
                                Lalitpur 44700</a></p>
                    </div>

                    <!-- Update the Email information -->
                    <div class="email">
                        <i class="bi bi-envelope"></i>
                        <h4>Email:</h4>
                        <p><a href="mailto:prashant.koirala.official@gmail.com">prashant.koirala.official@gmail.com</a>
                        </p>
                    </div>

                    <div class="phone">
                        <i class="bi bi-phone"></i>
                        <h4>Call:</h4>
                        <p><a href="tel:+9779845744893">+977 9845744893</a></p>
                        <i class="bi bi-phone"></i>
                        <h4>whatsapp:</h4>
                        <p><a href="https://wa.me/9779845744893" target="_blank">+977 9845744893</a></p>
                    </div>

                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d220.89242328245837!2d85.31392196711751!3d27.64684550000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2snp!4v1696726285336!5m2!1sen!2snp"
                        frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>


                </div>

            </div>

            <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
                <form action="{{ route('send.email') }}" method="post" role="form" class="php-email">
                    @csrf
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="name">Your Name</label>
                            <input type="text" name="name" class="form-control" id="name" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name">Your Email</label>
                            <input type="email" class="form-control" name="email" id="email" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name">Subject</label>
                        <input type="text" class="form-control" name="subject" id="subject" required>
                    </div>
                    <div class="form-group">
                        <label for="name">Message</label>
                        <textarea class="form-control" name="message" rows="10" required></textarea>
                    </div>
                    <div class="my-3">
                        <div class="loading-message" id="loading-message">
                            <div class="loading">Please wait while we process your request...</div>
                        </div>
                        @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                     @endif

                        @if(session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                        @endif

                    </div>

                    <div class="text-center">
                        <button type="submit"
                            style="background-color: #007BFF; color: #fff; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer;">
                            Send Message
                        </button>
                    </div>

                </form>
            </div>
            <script>
            // Show loading message when the form is submitted
            document.querySelector('form').addEventListener('submit', function() {
                document.getElementById('loading-message').style.display = 'block';
            });
            </script>

        </div>

    </div>
</section>