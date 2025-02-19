@include('navbar')
@include('home')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
    integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    integrity="sha512-c42qTSw/wPZ3/5LBzD+Bw5f7bSF2oxou6wEb+I/lqeaKV5FDIfMvvRp772y4jcJLKuGUOpbJMdg/BTl50fJYAw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />


<div class="container-fluid m-0 p-0 mb-5">
    <div class="owl-carousel" style="background-image: url({{ asset('images/shape-1.png') }})">
        <div class="item row justify-content-center align-items-center">
            <div class="animate__animated animate__fadeInLeft col-md-6">

                <h1 class="text-light mx-5 ">Realizing Forex potential, one trade at a
                    time!...</h1>
                <button><i class="fa-solid fa-arrow-right-from-bracket mx-2"></i> Start Trading</button>

            </div>
            <div class="col-md-6 ">

                <img class="object-fit-contain rounded" height="600px" src="{{ asset('images/bannerimg.jpg') }}"
                    alt="">
            </div>
        </div>
        <div class="item row justify-content-center align-items-center">
            <div class="col-md-6">

                <h1 class="text-light mx-5">Excellence in every trade, prosperity in every move.</h1>
                <button> <i class="fa-solid fa-arrow-right-from-bracket mx-2"></i> Start Trading</button>

            </div>
            <div class="col-md-6 ">

                <img class="object-fit-contain rounded" height="600px" src="{{ asset('images/bannerimg2.jpg') }}"
                    alt="">
            </div>
        </div>
        <div class="item row justify-content-center align-items-center">
            <div class="col-md-6">

                <h1 class="text-light mx-5">Smart trades, Bold moves, Empowered by MT4 & MT5.</h1>
                <button class="border-0 shadow-none"><i class="fa-solid fa-arrow-right-from-bracket mx-2"></i> Start
                    Trading</button>

            </div>
            <div class="col-md-6 ">

                <img class="object-fit-contain rounded-5" height="600px" src="{{ asset('images/banner-img-3.jpg') }}"
                    alt="">
            </div>
        </div>

    </div>

</div>
</div>

{{-- banner ends --}}
<div class="container container_2 text-center mb-5">
    <p><i class="mx-2 fa-solid fa-arrow-up-right-dots"></i>WHAT WE OFFER</p>
    <h2 data-aos="fade-up" >Provide all you need for <br>
        trading success</h2>
</div>

<div class="container container_3 justify-content-center">
    <div class="row">
        <div class="col-md-4 mb-5">
            <div class="shadow p-5">
                <div class="card-body justify-content-center align-items-center">
                    <p class=" card-heading"> <b>SERVICE#1</b></h5>
                    <h2 class="card-title" m-5>Currency Pair and Analysis</h2>

                    <hr>
                    <p style="font-size: 13px">Holds in these matters this principles...</p>
                    <div class="overlay">
                        <img src="{{ asset('images/service-1.jpg') }}" alt="">
                        <div class="btn1">
                            <button class="btn-box border-0"><i class="fa-solid fa-arrow-right-from-bracket"></i>
                                EXPLORE
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-5">
            <div class="shadow p-5 ">
                <div class="card-body justify-content-center align-items-center">
                    <p class="card-heading"> <b>SERVICE#2</b></h5>
                    <h2 class="card-title" m-5>Proprietary Trading Accounts</h2>

                    <hr>
                    <p style="font-size: 13px">The great explorer of the truth master...</p>
                    <div class="overlay">
                        <img src="{{ asset('images/service-2.jpg') }}" alt="">
                        <div class="btn1">
                            <button class="btn-box border-0"><i class="fa-solid fa-arrow-right-from-bracket"></i>
                                EXPLORE
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-5">
            <div class="shadow p-5">
                <div class="card-body justify-content-center align-items-center">
                    <p class="card-heading"> <b>SERVICE#3</b></h5>
                    <h2 class="card-title" m-5>Trading Platforms and Tools</h2>

                    <hr>
                    <p style="font-size: 13px">Rationally encounter consequences...</p>
                    <div class="overlay">
                        <img src="{{ asset('images/service-3.jpg') }}" alt="">
                        <div class="btn1">
                            <button class="btn-box border-0"><i class="fa-solid fa-arrow-right-from-bracket"></i>
                                EXPLORE
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 mt-5">
            <img width="350px" src="{{ asset('images/vector-1.png') }}" alt="image">
        </div>
        <div class="col-md-4 mb-5">
            <div class="shadow p-5">
                <div class="card-body justify-content-center align-items-center">
                    <p class="card-heading"> <b>SERVICE#4</b></h5>
                    <h2 class="card-title" m-5>Trade Monitoring and Support</h2>

                    <hr>
                    <p style="font-size: 13px">Ever undertakes laborious physical...</p>
                    <div class="overlay">
                        <img src="{{ asset('images/service-1.jpg') }}" alt="">
                        <div class="btn1">
                            <button class="btn-box border-0"><i class="fa-solid fa-arrow-right-from-bracket"></i>
                                EXPLORE
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="overlay2">
                <div class="bg-green">
                    <img class="bg-img1" src="{{ asset('images/service-5.jpg') }}" alt="">
                    <div class="overlay2-content">
                        <div class="icon5">
                            <img src="{{ asset('images/icon-5.png') }}" alt="">
                        </div>
                        <h3 style="font-size:21px margin:5px">Awesome Image Fxvibe Expert Guidance for Financial
                            Rise!...</h3>
                        <p style="font-size: 13px m-3">Ever undertakes laborious physical...</p>
                        <button class="btn-box border-0"><i class="fa-solid fa-arrow-right-from-bracket"></i>
                            EXPLORE
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- section2 ends --}}
<div class="container m-5">
    <div class="row service_section">
        <div class="col-md-6 border border-grey rounded-3 p-5 align-items-center justify-content-center">
            <h1 style="font-size:45px">Service that speaks volumes</h1>
        </div>
        <div class="col-md-3 text-center border border-grey p-5 border rounded-3">
            <img src="{{ asset('images/icon-6.png') }}" alt="">
            <p style="font-size: 35px"><b>4</b> Hours</p>
            <hr>
            <p>Avg Payout <br>Processing Time</p>
        </div>
        <div class="col-md-3 text-center border border-grey p-5 border rounded-3">
            <img src="{{ asset('images/icon-7.png') }}" alt="">
            <p style="font-size: 35px"><b>2</b> Days</p>
            <hr>
            <p>To earn a <br>Trading Account</p>
        </div>
        <div class="col-md-3 text-center border border-grey p-5 border rounded-3">
            <img src="{{ asset('images/icon-8.png') }}" alt="">
            <p style="font-size: 35px"><b>10</b> Million</p>
            <hr>
            <p>No. of Trades Opened <br>Last Month</p>
        </div>
        <div class="col-md-3 text-center border border-grey p-5 border rounded-3">
            <img src="{{ asset('images/icon-9.png') }}" alt="">
            <p style="font-size: 35px"><b>8+</b> Years</p>
            <hr>
            <p>Provide Funds to Futures<br>Traders</p>
        </div>
        <div class="col-md-6 m-0 p-0">
            <img height="300px" width="100%" src="{{ asset('images/graph-1.png') }}" alt="">
        </div>
    </div>
</div>
{{-- section3 ends --}}


<div class="container-fluid p-5" style="background-color:rgb(219, 229, 226)">
    <div class="row">
        <div class="col-md-6">
            <div class="overlay3">

                <img src="{{ asset('images/about-1.jpg') }}" alt="">

                <div class="img_overlay2"> <img src="{{ asset('images/dashboard-1.jpg') }}" alt="">
                </div>
            </div>
        </div>
        <div class="col-md-5 offset-md-1 py-5 ">
            <h1 style="font-size: 50px">Pioneers in proprietary forex trading</h1>
            <p class="py-4">Step into the realm of financial wizardry with Fxvibe Funding an exclusive trading oasis
                that nurtures
                the brilliance of skilled trad- ers yearning to amplify their fortunes despite the constraints of
                capital.</p>
            <div class="border border-secondary-subtle rounded-3 p-4">
                <h4>Specialization</h4>
                <p>Indignations and dislikes mens who are beguiled</p>

                <i class="fa-solid  fa-play text-success fs-5"></i><span class="pl-2"> Automated Trading</span><br>
                <i class="fa-solid  fa-play text-success fs-5 py-2"></i><span class="pl-2"> High-Frequency
                    Trading</span><br>
                <i class="fa-solid fa-play text-success fs-5 "></i><span class="pl-2"> Technical Analysis</span>


            </div>
            <button class="btn5 mt-4"><i class="fa-solid fa-arrow-right-from-bracket dark mx-2"></i> More about
                us</button>
        </div>

    </div>
</div>



{{-- ............ --}}

<div class="container-fluid"
    style="background: url({{ asset('images/shape-3.png') }});background-position: center center;
    background-repeat: no-repeat;
    background-size: cover;">
    <div class="overlay4 text-center pt-5">
        <p>How it works</p>
        <h1 class="pb-5">Deep Dive into Evaluation</h1>
        <img width="50%" src="{{ asset('images/shape-2.png') }}" alt="img">
        <span class="big-text">Process</span>
        <div class="vdo-btn">
            <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ&t=1s"> <i class="fa-brands fa-youtube fa-5x"
                    style="color: #26c48c;">


                </i>
            </a>
        </div>
    </div>
    <div class="container card_section mt-5">
        <div class="row">
            <div class="col-md-4  text-center">
                <h5>Step#1</h5>
                <div class="card">
                    <h2>Trading Challenge</h2>
                    <p>Nor again is there anyone who loves or pursues or desires to obtain pain all itself because it is
                        pain.</p>

                </div>
            </div>
            <div class="col-md-4 text-center " style="margin-top: 80px" mx-2>
                <h5>Step#2</h5>
                <div class="card">
                    <h2>Verified & Trade</h2>
                    <p>One rejects, dislikes avoids pleasure itself, because it is pleasure but those who do not know
                        pain.</p>

                </div>
            </div>
            <div class="col-md-4 text-center">
                <h5>Step#3</h5>
                <div class="card">
                    <h2>Get Paid</h2>
                    <p>Ever undertakes laborious physical exercise except obtain all advantages from ight to find.</p>

                </div>
            </div>

        </div>
    </div>
    <br><br><br><br>
</div>

{{-- .................. --}}


<div class="container-fluid" style="position: relative;background:#E2EDEA;">
    <div class="fund_section " style="padding:120px 70px 0px 40px;">
        <p><i class="mx-2 fa-solid fa-arrow-up-right-dots"></i>JOIN FXVIBE</p>
        <h1 style="font-size: 55px">Enter a trading challenge</h1>
        <img src="{{ asset('images/shape-4.png') }}" alt="">
        <i class="fa-solid fa-headset fa-3x"
            style="color: #26c48c; position: absolute;
transform: translate(1100px,-70px);"></i>
    </div>


    <div class="row mt-5 ms-4"
        style="background-image:url({{ asset('images/shape-5.png') }}); background-repeat:no-repeat;">
        <div class="col-md-4 plan_section ">
            <div class="btn my-2 border-0 rounded-5 " style="background: #26c48c;">
                Fxvibe Starter Plan
                </button>
            </div>
            <div class="btn my-2 border-0 rounded-5" style=" color:rgb(132, 132, 132);background: #ffffff">
                Standard Plan
                </button>
            </div>
            <div class="btn my-2 border-0 rounded-5" style=" color:rgb(132, 132, 132);background: #ffffff">
                Professional Plan
                </button>
            </div>
            <div class="btn my-2 border-0 rounded-5" style=" color:rgb(132, 132, 132);background: #ffffff">
                Ultra Plan
                </button>
            </div>
            <hr style="margin-top:100px;margin-bottom:40px; width:80%">
            <h5 style="font-size: 18px">We Accept:</h5>
            <p style="font-size:15px;color:rgb(132, 132, 132)">Accept a wide range of cards.</p>
            <img src="{{ asset('images/card-1.png') }}" alt="">
            <img src="{{ asset('images/card-2.png') }}" alt="">
            <img src="{{ asset('images/card-3.png') }}" alt="">
            <img src="{{ asset('images/card-4.png') }}" alt="">
        </div>
        <div class="col-md-4 px-5 pt-4"
            style=" background-image: linear-gradient(to bottom right, rgb(19,39,32), rgb(21,68,51));border-radius:10px">
            <div class="plan_section2">
                <img src="{{ asset('images/vector-2.png') }}" alt="">
                <h2>80k<span>.USD</span> </h2>
                <p>Speed up your trading journey with our single-phase assessment.</p>
                <button class="btn5 mt-4 text-light"><i class="fa-solid fa-arrow-right-from-bracket mx-2"
                        style="color: #E2EDEA"></i> Start Now</button>
            </div>
        </div>
        <div class="col-md-4 fund_section2">
            <ul>
                <li>Target <span>$800</span></li>
                <li>Min.Trading Days<span>5 Days</span></li>
                <li>Daily Drawdown<span>5%</span></li>
                <li>Max.Drawdown<span>10%</span></li>
                <li>Trading Period<span>No Limit</span></li>
                <li>Refundable Fee<span>$99 O/T</span></li>
                <li>Leverage<span>Upto 1:100</span></li>
                <li>Monthly Fees<span>No Fees</span></li>
            </ul>
        </div>


    </div>
</div>

{{-- ........... --}}


<div class="container-fluid popular_pair text-center"
    style="background:url({{ asset('images/shape-6.png') }});background-position:center;background-repeat:no-repeat">
    <div>
        <p><i class="mx-2  fa-solid fa-arrow-up-right-dots mt-5"></i>POPULAR PAIRS</p>
        <h1 style="margin-bottom: 70px">Top Pairs & Pricing in Market</h1>

        <img src="{{ asset('images/vector-3.png') }}" alt="">
        <img src="{{ asset('images/vector-4.png') }}" alt="">
    </div>
    <div class="popular_pair2">

        <div class=" row justify-content-center">
            <div class="col-md-7">
                <div class="p-3 bg-white rounded shadow border-0">
                    <div class="row align-items-center">
                        <div class="col-md-4">
                            <div class="d-flex align-items-center">
                                <div>
                                    <i class="icon_bg fa-solid fa-arrow-trend-down"></i>
                                </div>
                                <div><span>EUR <i class="fa-solid fa-right-left"></i> USD </span>
                                    <p>$1.06199 Usd</p>
                                </div>
                            </div>
                        </div>


                        <div class="col-md-8 text-end">
                            <div class="d-flex justify-content-end">
                                <div>
                                    <span>+0.04%</span>
                                    <p>
                                        Sell at 1.06199</p>
                                </div>
                                <div><button class="btn6 ms-4 px-5 py-2"
                                        style="border:2px solid #26c48c;border-radius:50px"><i
                                            class="fa-solid fa-arrow-right-from-bracket" style="color: #000000"></i>
                                        Trade</button></div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-md-7 mt-3">
                <div class="p-3 bg-white rounded shadow border-0">
                    <div class="row align-items-center">
                        <div class="col-md-4">
                            <div class="d-flex align-items-center">
                                <div>
                                    <i class="icon_bg fa-solid fa-arrow-trend-down"></i>
                                </div>
                                <div><span>USD <i class="fa-solid fa-right-left"></i> JPY </span>
                                    <p>$1.22195 Usd</p>
                                </div>
                            </div>
                        </div>


                        <div class="col-md-8 text-end">
                            <div class="d-flex justify-content-end">
                                <div>
                                    <span>+0.04%</span>
                                    <p>
                                        Sell at 1.06199</p>
                                </div>
                                <div><button class="btn6 ms-4 px-5 py-2"
                                        style="border:2px solid #26c48c;border-radius:50px"><i
                                            class="fa-solid fa-arrow-right-from-bracket" style="color: #000000"></i>
                                        Trade</button></div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-md-7 mt-3">
                <div class="p-3 bg-white rounded shadow border-0">
                    <div class="row align-items-center">
                        <div class="col-md-4">
                            <div class="d-flex align-items-center">
                                <div>
                                    <i class="icon_bg fa-solid fa-arrow-trend-down"></i>
                                </div>
                                <div><span>GBP <i class="fa-solid fa-right-left"></i> USD </span>
                                    <p>$1.24100 Usd</p>
                                </div>
                            </div>
                        </div>


                        <div class="col-md-8 text-end">
                            <div class="d-flex justify-content-end">
                                <div>
                                    <span>+0.05%</span>
                                    <p>
                                        Sell at 1.24350</p>
                                </div>
                                <div><button class="btn6 ms-4 px-5 py-2"
                                        style="border:2px solid #26c48c;border-radius:50px"><i
                                            class="fa-solid fa-arrow-right-from-bracket" style="color: #000000"></i>
                                        Trade</button></div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-md-7 mt-3">
                <div class="p-3 bg-white rounded shadow border-0">
                    <div class="row align-items-center">
                        <div class="col-md-4">
                            <div class="d-flex align-items-center">
                                <div>
                                    <i class="icon_bg fa-solid fa-arrow-trend-down"></i>
                                </div>
                                <div><span> <i class="fa-solid fa-right-left"></i> USD </span>
                                    <p>$1.24100 Usd</p>
                                </div>
                            </div>
                        </div>


                        <div class="col-md-8 text-end">
                            <div class="d-flex justify-content-end">
                                <div>
                                    <span>+0.05%</span>
                                    <p>
                                        Sell at 1.24350</p>
                                </div>
                                <div><button class="btn6 ms-4 px-5 py-2"
                                        style="border:2px solid #26c48c;border-radius:50px"><i
                                            class="fa-solid fa-arrow-right-from-bracket" style="color: #000000"></i>
                                        Trade</button></div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <button class="btn5 btn-box m-5"><i class="fa-solid fa-arrow-right-from-bracket"></i>
            SEE MORE PAIRS
        </button>
    </div>



</div>
{{-- ....... --}}


<div class="container-fluid px-5 text-light"
    style="background:linear-gradient(to right, rgb(19,39,32),rgb(24,119,86));margin-top:20%;background-size:cover">
    <div>
        <p><i class=" fa-solid fa-arrow-up-right-dots mt-5 me-3" style="color: #26c48c"></i> KEY HIGHLIGHTS
        </p>
        <h1 style="margin-bottom: 70px">Reasons for choosing us</h1>
    </div>
    <div>
        <div class="owl-carousel">
            <div class="row mb-5 pb-5">
                <div class="col-md-4">
                    <div class="item card text-center p-4">
                        <img height="150px" width="150px" class="p-5" src="{{ asset('images/icon-13.png') }}"
                            alt="" style="object-fit: contain">
                        <h4
                            style="background-color: #E2EDEA;padding:5px;border-radius:20px;border-style:solid; 
                            border-image:linear-gradient(to right,white,#26c48c,white) 0.5;margin-bottom:20px">
                            Simple Trading Rules</h4>
                        <P>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia aperiam perferendis, illo
                            maxime!</P>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="item card text-center p-4">
                        <img height="150px" width="150px" class="p-5" src="{{ asset('images/icon-11.png') }}"
                            alt="" style="object-fit: contain">
                        <h4
                            style="background-color: #E2EDEA;padding:5px;border-radius:20px;border-style:solid; 
                            border-image:linear-gradient(to right,white,#26c48c,white) 0.5;margin-bottom:20px">
                            No Min. Trading Days</h4>
                        <P>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia aperiam perferendis, illo
                            maxime!</P>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="item card text-center p-4">
                        <img height="150px" width="150px" class="p-5" src="{{ asset('images/icon-12.png') }}"
                            alt="" style="object-fit: contain">
                        <h4
                            style="background-color: #E2EDEA;padding:5px;border-radius:20px;border-style:solid; 
                            border-image:linear-gradient(to right,white,#26c48c,white) 0.5;margin-bottom:20px">
                            Best Profit Split</h4>
                        <P>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia aperiam perferendis, illo
                            maxime!</P>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- ..... --}}
<div class="container mt-5 ">
    <div class="text-center">
        <p><i class=" fa-solid fa-arrow-up-right-dots mt-5 me-3" style="color: #26c48c"></i> TESTIMONIALS
        </p>
        <h1 style="margin-bottom: 70px">Hear what traders think</h1>
    </div>
    <div class="star_section d-flex p-0 align-items-center pt-3 pb-2 mb-5"
        style="background-color: #E2EDEA;border-radius:100px">
        <div class="ms-4">
            <i class="fa-solid fa-star fa-xl px-2" style="color: #26c48c"></i> <span
                style="font-size: 24px;font-weight:600">Trustpilot</span>
        </div>
        <div class="ms-5">
            <p style="font-weight:600;margin-bottom:-2px">
                Best-rated</p>
            <p style="font-weight:600">4.9/5 (Reviewed by 1.5 million traders.)</p>
        </div>

        <div style="border-left: 1px solid #76887c;height:50px;margin:0px 40px"></div>
        <div><img height="30px" width="30px" style="margin-right:15px" src="{{ asset('images/icon-13.png') }}"
                alt="" style="object-fit: contain"><span style="font-size: 18px;font-weight:600">Share your
                thoughts about FxVibe</span></div>
        <div><i class="fa-solid fa-arrow-right-from-bracket ms-4 mt-1 rounded-5"
                style="background-color: white;padding:10px 20px"></i></div>
    </div>
</div>
<div class="container home-demo">
    <div class="owl-carousel owl-theme">
        <div class="row mb-5 pb-5">
            <div class="col-md-6">
                <div class="item card p-4">
                    <h5>Nathan Felix</h5>
                    <p style="color: #26c48c">California, USA</p>
                    <hr>
                    <h4>Experience like never before</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sit?</p>
                    <img style="width: 80px;position: absolute;top: 80px;left:80%"
                        src="{{ asset('images/testimonial-1.png') }}" alt="">
                    <img style="width:200px;margin:-40px 0px 0px -20px" src="{{ asset('images/download.png') }}"
                        alt="">
                </div>
            </div>

            <div class="col-md-6">
                <div class="item card p-4">
                    <h5>Eloise Juniper</h5>
                    <p style="color: #26c48c">Munich, German</p>
                    <hr>
                    <h4>Experience like never before</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sit?</p>
                    <img style="width: 80px;position: absolute;top: 80px;left:80%"
                        src="{{ asset('images/testimonial-2.png') }}" alt="">
                    <img style="width:200px;margin:-40px 0px 0px -20px" src="{{ asset('images/download.png') }}"
                        alt="">

                </div>
            </div>
        </div>
    </div>

</div>
</div>

{{-- ....... --}}
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 p-5 position-relative"
            style="background: url({{ asset('images/img1.jpg') }});width:100%;height:100vh;background-repeat:no-repeat;background-color:rgb(226,237,234)">
            <div class="d-flex"
                style="position: absolute; background-color:rgba(0, 0, 0, 0.3);width:100%;height:100%;top:0;left:0">
                <div class="col-md-5" style="padding:250px 50px 150px 50px">
                    <i class="fa-solid fa-arrow-right-from-bracket mx-2" style="color: #E2EDEA"></i><span
                        style="color: #ffffff">ADD YOUR SUB HEADING TEXT HERE</span>
                    <h1 style="color: #ffffff;font-size:50px;font-weight: 400">Add Your Heading Text Here</h1>
                </div>
                <div class="col-md-3 me-5 ">
                    <div class="card mb-4 p-3 pt-4 align-items-center justify-content-center ">
                        <img class="mb-3" src="{{ asset('images/clients-2.png') }}" alt="" height="30px"
                            width="120px">
                        <p>Frequently occur pleasures.</p>
                        <i style="color: #000000;background:#E2EDEA;padding:15px 30px;border:none;border-radius:50px"
                            class="fa-solid fa-arrow-right-from-bracket fa-dark"></i>
                    </div>
                    <div class="card my-4 p-3 pt-4 align-items-center justify-content-center ">
                        <img class="mb-3" src="{{ asset('images/clients-2.png') }}" alt="" height="30px"
                            width="120px">
                        <p>Frequently occur pleasures.</p>
                        <i style="color: #000000;background:#E2EDEA;padding:15px 30px;border:none;border-radius:50px"
                            class="fa-solid fa-arrow-right-from-bracket fa-dark"></i>
                    </div>
                    <div class="card my-4 p-3 pt-4 align-items-center justify-content-center ">
                        <img class="mb-3" src="{{ asset('images/clients-2.png') }}" alt="" height="30px"
                            width="120px">
                        <p>Frequently occur pleasures.</p>
                        <i style="color: #000000;background:#E2EDEA;padding:15px 30px;border:none;border-radius:50px"
                            class="fa-solid fa-arrow-right-from-bracket fa-dark"></i>
                    </div>
                </div>
                <div class="col-md-3 mt-3 " style="z-index: 1000;">
                    <div class="card mb-4 p-3 pt-4 align-items-center justify-content-center ">
                        <img class="mb-3" src="{{ asset('images/clients-2.png') }}" alt="" height="30px"
                            width="120px">
                        <p>Frequently occur pleasures.</p>
                        <i style="color: #000000;background:#E2EDEA;padding:15px 30px;border:none;border-radius:50px"
                            class="fa-solid fa-arrow-right-from-bracket fa-dark"></i>
                    </div>
                    <div class="card my-4 p-3 pt-4 align-items-center justify-content-center ">
                        <img class="mb-3" src="{{ asset('images/clients-2.png') }}" alt="" height="30px"
                            width="120px">
                        <p>Frequently occur pleasures.</p>
                        <i style="color: #000000;background:#E2EDEA;padding:15px 30px;border:none;border-radius:50px"
                            class="fa-solid fa-arrow-right-from-bracket fa-dark"></i>
                    </div>
                    <div class="card my-4 p-3 pt-4 align-items-center justify-content-center ">
                        <img class="mb-3" src="{{ asset('images/clients-2.png') }}" alt="" height="30px"
                            width="120px">
                        <p>Frequently occur pleasures.</p>
                        <i style="color: #000000;background:#E2EDEA;padding:15px 30px;border:none;border-radius:50px"
                            class="fa-solid fa-arrow-right-from-bracket fa-dark"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
    integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>


<script>
    $(function() {
        // Owl Carousel
        var owl = $(".owl-carousel");
        owl.owlCarousel({
            items: 1,
            margin: 10,
            loop: true,
            nav: true,
            autoplay: true,
            autoplayTimeout: 3000,

        });
    });
</script>
