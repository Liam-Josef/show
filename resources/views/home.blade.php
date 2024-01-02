@extends('layouts.app')

<style>
    #more {display: none;}
</style>

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <h1>ENTER TO WIN A <span><b>FREE</b></span> SEADOO RENTAL</h1>

                        <h2>Drawing on the last day of the show!</h2>
                        <div class="row">
                            <form method="post" action="{{route('lead.store')}}">
                                @csrf
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="name">Name (Required)</label>
                                                <input type="text" name="name" id="name" placeholder="Johnny Smith" class="form-control @error('name') is-invalid @enderror " />
                                                <div>
                                                    @error('name')
                                                    <span class="error-message"><strong>{{$message}}</strong></span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="email">Email (Required)</label>
                                                <input type="text" name="email" id="email" placeholder="active-email@email.com" class="form-control @error('email') is-invalid @enderror " />
                                                <div>
                                                    @error('email')
                                                    <span class="error-message"><strong>{{$message}}</strong></span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="phone">Phone (Optional)</label>
                                                <input type="text" name="phone" id="phone" placeholder="503-222-3333" class="form-control @error('phone') is-invalid @enderror " />
                                                <div>
                                                    @error('phone')
                                                    <span class="error"><strong>{{$message}}</strong></span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <p>
                                    By signing up, you confirm that you are at least 18 years old.
                                    The rental can only be redeemed at 250 SE Division Place, Portland, Oregon 97202.

                                    <span id="dots">...</span>

                                    <span id="more">
                                    Security and fuel deposits may be required at time of rental.

                                        By providing your email address, you consent to receive marketing emails from SK Watercraft Rentals and SK Northwest. You can opt-out at any time by clicking the unsubscribe link in the footer of our emails.

                                        Our emails may contain promotional material and exclusive offers.
                                    </span>

                                    <a onclick="readMore()" id="myBtn"s class="text-gray-300">Read more</a>


                                </p>
                                <button type="submit" class="btn btn-primary width-100 mt-2 font-large">ENTER DRAWING</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


<script>
    function readMore() {
        var dots = document.getElementById("dots");
        var moreText = document.getElementById("more");
        var btnText = document.getElementById("myBtn");

        if (dots.style.display === "none") {
            dots.style.display = "inline";
            btnText.innerHTML = "Read more";
            moreText.style.display = "none";
        } else {
            dots.style.display = "none";
            btnText.innerHTML = "Read less";
            moreText.style.display = "inline";
        }
    }
</script>
