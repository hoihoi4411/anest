<div class="jumbotron jfooter">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3 form-box">
                <div class="form-top">
                    <div class="form-top-left">
                        <h3>Contact us</h3>

                        <p>Fill in the form below to send us a message:</p>
                    </div>
                    <div class="form-top-right">

                    </div>
                </div>
                <div class="form-bottom contact-form">
                    <form role="form" class="form-horizontal" role="form" method="POST" action="{{ url('/lien-he') }}">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label class="sr-only" for="contact-email">Email</label>
                            <input type="text" name="email" placeholder="Email..." class="contact-email form-control"
                                   id="contact-email">
                        </div>
                        <div class="form-group">
                            <label class="sr-only" for="contact-message">Message</label>
                        <textarea name="message" placeholder="Message..." class="contact-message form-control"
                                  id="contact-message"></textarea>
                        </div>
                        <button type="submit" class="btn">Send message</button>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div
        <!-- Bootstrap core JavaScript
         ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
<script src="../../dist/js/bootstrap.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="./js/bootstrap.min.js"></script>
</body>
</html>