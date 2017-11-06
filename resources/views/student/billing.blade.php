<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">
    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>


</head>
<body>
    <div >
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    @if(Auth::check())
                    <a class="navbar-brand" href="{{ url('/home') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                    @else
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                    @endif

                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                      @if(Auth::check())
                        @if(auth()->user()->type == 'student')
                                <li>
                                    <a href="{{ url('/cheerleader/schools') }}">

                                      <i class="fa fa-university" aria-hidden="true"></i>  Schools
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ url('/cheerleader/clinics') }}">
                                      <i class="fa fa-check" aria-hidden="true"></i> Clinics
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ url('/cheerleader/tryouts') }}">
                                      <i class="fa fa-calendar" aria-hidden="true"></i> Try Outs
                                    </a>
                                </li>

                                <li>
                                    <a href="{{ url('/cheerleader/teams') }}">
                                      <i class="fa fa-users" aria-hidden="true"></i>  Teams
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ url('/cheerleader/privates') }}">
                                      <i class="fa fa-users" aria-hidden="true"></i>  My Privates
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ url('/message') }}">
                                      <i class="fa fa-envelope" aria-hidden="true"></i>  My Messages
                                    </a>
                                </li>



                        @else
                                <li>
                                    <a href="{{ url('coach/cheerleaders') }}">

                                      <i class="fa fa-users" aria-hidden="true"></i>  Search Cheerleaders
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ url('coach/schools') }}">

                                      <i class="fa fa-university" aria-hidden="true"></i>  Manage School
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ url('coach/clinics') }}">
                                      <i class="fa fa-check" aria-hidden="true"></i> Manage Clinics
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ url('coach/tryouts') }}">
                                      <i class="fa fa-calendar" aria-hidden="true"></i> Manage Try Outs
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ url('coach/teams') }}">
                                      <i class="fa fa-users" aria-hidden="true"></i> Manage Teams
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ url('/message') }}">
                                      <i class="fa fa-envelope" aria-hidden="true"></i>  My Messages
                                    </a>
                                </li>
                        @endif
                        @endif
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ url('/login') }}">Login</a></li>
                            <li><a href="{{ url('/register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container">
        @if(Session::has('success'))
            <div class="alert-success text-center">
                <h2>{{ Session::get('success') }}</h2>
            </div>
        @endif
      </div>
      <div>

        <div class="container">
          <div class="row">
              <div class="col-md-8 col-md-offset-2">
                  <div class="panel panel-default">
                      <div class="panel-heading">Billing Info</div>
                      <div class="panel-body">
                        <!--
        The MIT License (MIT)

        Copyright (c) 2015 William Hilton

        Permission is hereby granted, free of charge, to any person obtaining a copy
        of this software and associated documentation files (the "Software"), to deal
        in the Software without restriction, including without limitation the rights
        to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
        copies of the Software, and to permit persons to whom the Software is
        furnished to do so, subject to the following conditions:

        The above copyright notice and this permission notice shall be included in
        all copies or substantial portions of the Software.

        THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
        IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
        FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
        AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
        LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
        OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
        THE SOFTWARE.
        -->
        <!-- Vendor libraries -->
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.13.1/jquery.validate.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.payment/1.2.3/jquery.payment.min.js"></script>

        <!-- If you're using Stripe for payments -->
        <script type="text/javascript" src="https://js.stripe.com/v2/"></script>

        <div class="container">
            <div class="row">
                <!-- You can make it whatever width you want. I'm making it full width
                     on <= small devices and 4/12 page width on >= medium devices -->
                <div class="col-xs-12 col-md-4">


                    <!-- CREDIT CARD FORM STARTS HERE -->
                    <div class="panel panel-default credit-card-box">
                        <div class="panel-heading display-table" >
                            <div class="row display-tr" >
                                <h3 class="panel-title display-td" >Payment Details</h3>
                                <div class="display-td" >
                                    <img class="img-responsive pull-right" src="http://i76.imgup.net/accepted_c22e0.png">
                                </div>
                            </div>
                        </div>
                        <div class="panel-body">
                            <form role="form" id="payment-form" method="POST" action="javascript:void(0);">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="form-group">
                                            <label for="cardNumber">CARD NUMBER</label>
                                            <div class="input-group">
                                                <input
                                                    type="tel"
                                                    class="form-control"
                                                    name="cardNumber"
                                                    placeholder="Valid Card Number"
                                                    autocomplete="cc-number"
                                                    required autofocus
                                                />
                                                <span class="input-group-addon"><i class="fa fa-credit-card"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-7 col-md-7">
                                        <div class="form-group">
                                            <label for="cardExpiry"><span class="hidden-xs">EXPIRATION</span><span class="visible-xs-inline">EXP</span> DATE</label>
                                            <input
                                                type="tel"
                                                class="form-control"
                                                name="cardExpiry"
                                                placeholder="MM / YY"
                                                autocomplete="cc-exp"
                                                required
                                            />
                                        </div>
                                    </div>
                                    <div class="col-xs-5 col-md-5 pull-right">
                                        <div class="form-group">
                                            <label for="cardCVC">CV CODE</label>
                                            <input
                                                type="tel"
                                                class="form-control"
                                                name="cardCVC"
                                                placeholder="CVC"
                                                autocomplete="cc-csc"
                                                required
                                            />
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="form-group">
                                            <label for="couponCode">COUPON CODE</label>
                                            <input type="text" class="form-control" name="couponCode" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12">
                                        <button class="subscribe btn btn-success btn-lg btn-block" type="button">Start Subscription</button>
                                    </div>
                                </div>
                                <div class="row" style="display:none;">
                                    <div class="col-xs-12">
                                        <p class="payment-errors"></p>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- CREDIT CARD FORM ENDS HERE -->


                </div>

                <div class="col-xs-12 col-md-6" style="font-size: 12pt; line-height: 2em;">
                    <p><h1>Features:</h1>
                      @if(auth()->user()->type == 'student')
                        <ul>
                            <li>Get matched with the top colleges and
                              <br> universities</li>
                            <li>Keep all your stats in one location</li>
                            <li>Find scholarships, clinics, tryouts and more</li>
                        </ul>
                        @else
                        <ul>
                            <li>Get matched with atheletes.</li>
                            <li>Advertise your brand.</li>
                        </ul>
                        @endif
                    </p>

                </div>

            </div>
        </div>

                      </div>

                  </div>
                </div>
              </div>
            </div>
            <script>
            /*
        The MIT License (MIT)

        Copyright (c) 2015 William Hilton

        Permission is hereby granted, free of charge, to any person obtaining a copy
        of this software and associated documentation files (the "Software"), to deal
        in the Software without restriction, including without limitation the rights
        to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
        copies of the Software, and to permit persons to whom the Software is
        furnished to do so, subject to the following conditions:

        The above copyright notice and this permission notice shall be included in
        all copies or substantial portions of the Software.

        THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
        IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
        FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
        AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
        LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
        OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
        THE SOFTWARE.
        */
        var $form = $('#payment-form');
        $form.find('.subscribe').on('click', payWithStripe);

        /* If you're using Stripe for payments */
        function payWithStripe(e) {
            e.preventDefault();

            /* Abort if invalid form data */
            if (!validator.form()) {
                return;
            }

            /* Visual feedback */
            $form.find('.subscribe').html('Validating <i class="fa fa-spinner fa-pulse"></i>').prop('disabled', true);

            var PublishableKey = "{{env('STRIPE_KEY')}}"; // Replace with your API publishable key
            console.log(PublishableKey);
            Stripe.setPublishableKey(PublishableKey);

            /* Create token */
            var expiry = $form.find('[name=cardExpiry]').payment('cardExpiryVal');
            var ccData = {
                number: $form.find('[name=cardNumber]').val().replace(/\s/g,''),
                cvc: $form.find('[name=cardCVC]').val(),
                exp_month: expiry.month,
                exp_year: expiry.year
            };

            Stripe.card.createToken(ccData, function stripeResponseHandler(status, response) {
                if (response.error) {
                    /* Visual feedback */
                    $form.find('.subscribe').html('Try again').prop('disabled', false);
                    /* Show Stripe errors on the form */
                    $form.find('.payment-errors').text(response.error.message);
                    $form.find('.payment-errors').closest('.row').show();
                } else {
                    /* Visual feedback */
                    $form.find('.subscribe').html('Processing <i class="fa fa-spinner fa-pulse"></i>');
                    /* Hide Stripe errors on the form */
                    $form.find('.payment-errors').closest('.row').hide();
                    $form.find('.payment-errors').text("");
                    // response contains id and card, which contains additional card details
                    console.log(response.id);
                    console.log(response.card);
                    var token = response.id;
                    // AJAX - you would send 'token' to your server here.
                    $.post('/api/billing', {
                            token: token,
                            user_id: {{auth()->user()->id}}
                        })
                        // Assign handlers immediately after making the request,
                        .done(function(data, textStatus, jqXHR) {
                            $form.find('.subscribe').html('Payment successful <i class="fa fa-check"></i>');
                            window.location.href = '/home';
                        })
                        .fail(function(jqXHR, textStatus, errorThrown) {
                            $form.find('.subscribe').html('There was a problem').removeClass('success').addClass('error');
                            /* Show Stripe errors on the form */
                            $form.find('.payment-errors').text('Try refreshing the page and trying again.');
                            $form.find('.payment-errors').closest('.row').show();
                        });
                }
            });
        }
        /* Fancy restrictive input formatting via jQuery.payment library*/
        $('input[name=cardNumber]').payment('formatCardNumber');
        $('input[name=cardCVC]').payment('formatCardCVC');
        $('input[name=cardExpiry').payment('formatCardExpiry');

        /* Form validation using Stripe client-side validation helpers */
        jQuery.validator.addMethod("cardNumber", function(value, element) {
            return this.optional(element) || Stripe.card.validateCardNumber(value);
        }, "Please specify a valid credit card number.");

        jQuery.validator.addMethod("cardExpiry", function(value, element) {
            /* Parsing month/year uses jQuery.payment library */
            value = $.payment.cardExpiryVal(value);
            return this.optional(element) || Stripe.card.validateExpiry(value.month, value.year);
        }, "Invalid expiration date.");

        jQuery.validator.addMethod("cardCVC", function(value, element) {
            return this.optional(element) || Stripe.card.validateCVC(value);
        }, "Invalid CVC.");

        validator = $form.validate({
            rules: {
                cardNumber: {
                    required: true,
                    cardNumber: true
                },
                cardExpiry: {
                    required: true,
                    cardExpiry: true
                },
                cardCVC: {
                    required: true,
                    cardCVC: true
                }
            },
            highlight: function(element) {
                $(element).closest('.form-control').removeClass('success').addClass('error');
            },
            unhighlight: function(element) {
                $(element).closest('.form-control').removeClass('error').addClass('success');
            },
            errorPlacement: function(error, element) {
                $(element).closest('.form-group').append(error);
            }
        });

        paymentFormReady = function() {
            if ($form.find('[name=cardNumber]').hasClass("success") &&
                $form.find('[name=cardExpiry]').hasClass("success") &&
                $form.find('[name=cardCVC]').val().length > 1) {
                return true;
            } else {
                return false;
            }
        }

        $form.find('.subscribe').prop('disabled', true);
        var readyInterval = setInterval(function() {
            if (paymentFormReady()) {
                $form.find('.subscribe').prop('disabled', false);
                clearInterval(readyInterval);
            }
        }, 250);
            </script>


    </div>
  </div>


</body>
</html>
