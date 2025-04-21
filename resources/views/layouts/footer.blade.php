<!-- footer -->
<div id="popup" class="popup sticky">
    <div class="popup-content">
        <div class="social-icons">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
        </div>
    </div>
</div>
<div id="flash-message" data-message="{{ session('success') }}"></div>
<footer id="contact">
    <div class="footer pt-0">
        <div class="container">
            <div class="row align-items-left">
                <div class="col-md-12 d-flex">
                    <div class="titlepage">
                        <h2 class="mt-3">Contact Us</h2>
                    </div>
                    <ul class="location_icon list-unstyled text-end ml-auto mt-3">
                        <li><i class="fa fa-map-marker" aria-hidden="true"></i> Malaysia</li>
                        <li><i class="fa fa-volume-control-phone" aria-hidden="true"></i> +60165885735</li>
                        <li><i class="fa fa-envelope" aria-hidden="true"></i> pytho@gmail.com</li>
                    </ul>
                </div>
                <div class="col-md-12">
                    <form id="contactForm" class="main_form " method="POST" data-url="{{ route('contacts.submit') }}">
                        @csrf
                        <div id="success-message" class="alert alert-success d-none"></div>
                        <div class="row">
                            <div class="col-md-4">
                                <input class="contactus form-control" placeholder="Full Name" type="text" name="full_name" required>
                            </div>
                            <div class="col-md-4">
                                <input class="contactus form-control" placeholder="Email" type="email" name="email" required>
                            </div>
                            <div class="col-md-4">
                                <input class="contactus form-control" placeholder="Phone Number" type="text" name="phone_number" required>
                            </div>
                            <div class="col-md-10 mt-1">
                                <textarea class="textarea form-control" placeholder="Message" name="message" rows="2" required></textarea>
                            </div>
                            <div class="col-md-2 mt-1">
                                <button class="send_btn btn btn-danger" type="submit">Send</button>
                            </div>
                        </div>
                    </form>
                </div>
                
            </div>

            <!-- Footer Bottom -->
            <div class="row py-2">
                <div class="col-md-12 text-center">
                    <p>&copy; 2025 All Rights Reserved By Pythogorax.</p>
                </div>
            </div>
        </div>
    </div>
</footer>


<!-- end footer -->

<!-- Javascript files -->
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/popper.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('js/jquery-3.0.0.min.js') }}"></script>
<script src="{{ asset('js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
<script src="{{ asset('js/custom.js') }}"></script>
<script>
    $('#contactForm').on('submit', function(e) {
        e.preventDefault(); // prevent full reload

        let form = $(this);
        let url = form.data('url');
        let formData = form.serialize();

        $.ajax({
            url: url,
            type: 'POST',
            data: formData,
            success: function(response) {
                $('#success-message')
                    .removeClass('d-none')
                    .text('Message sent successfully!')
                    .fadeIn();

                // hide after 3 seconds
                setTimeout(function () {
                    $('#success-message').fadeOut();
                }, 3000);

                form[0].reset(); // clear the form
            },
            error: function(xhr) {
                alert("Something went wrong. Please check your inputs.");
            }
        });
    });
</script>
