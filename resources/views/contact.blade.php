@extends("layouts.app")

@section("title") Contact Us @endsection

@section("content")
<div class="contact-heading">
            <h3>Get In Touch</h3>
            <p>Phone: 0326525215</p>
            <p>Email: <span>ucrental@utas.edu.au</span> </p>
            <p>Address: Churchill Ave, Hobart TAS 7005</p>
        </div>

        <section class="container">
            <form action="">
                <div class="mb-3 row contact-input">
                    <div class="col-lg-6 ">
                        <input type="email" class="form-control name-input" id="exampleFormControlInput1"
                            placeholder="Your Name">
                        <input type="text" class="form-control email-input" id="exampleFormControlInput1"
                            placeholder="Your Email">
                        <input type="text" class="form-control number-input" id="exampleFormControlInput1"
                            placeholder="Your Phone Number">
                    </div>
                    <div class="col-lg-6">
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="7"
                            placeholder="Your message"></textarea>
                    </div>
                    <div class="col-lg-2">
                        <button type="button" class="btn btn-primary active">Send Message</button>
                    </div>

                </div>


                <div class="mb-3 row">

                </div>
            </form>

        </section>
@endsection