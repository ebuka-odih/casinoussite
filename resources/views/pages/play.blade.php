@extends('pages.layouts.app')
@section('content')

    <main class="content">


        <section class="section-how">
            <div class="container">
                <h2 class="text-center">How to play?</h2>
                <div class="how">
                    <div class="row">
                        <!--<div class="col-lg-4">
					<div class="videowrap">
						<iframe width="560" height="315" src="https://www.youtube.com/embed/6C3xY088pEw" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					</div>
				</div>-->
                        <div class="col-lg-2"></div>
                        <div class="col-lg-8">
                            <div class="how_slider js-how_slider owl-carousel">
                                <div class="how_slider_item">
                                    <div class="how_item">
                                        <div class="how_num">01</div>
                                        <div class="how_cont">
                                            <div class="how_title">Pick</div>
                                            <div class="how_desc">Pick a lottery and your lucky numbers to join the draw.</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="how_slider_item">
                                    <div class="how_item">
                                        <div class="how_num">02</div>
                                        <div class="how_cont">
                                            <div class="how_title">Buy</div>
                                            <div class="how_desc">Complete the purchase and get its confirmation.</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="how_slider_item">
                                    <div class="how_item">
                                        <div class="how_num">03</div>
                                        <div class="how_cont">
                                            <div class="how_title">Check</div>
                                            <div class="how_desc">Look for a scanned ticket or the bet details in your account.</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="how_slider_item">
                                    <div class="how_item">
                                        <div class="how_num">04</div>
                                        <div class="how_cont">
                                            <div class="how_title">Win</div>
                                            <div class="how_desc">You are guaranteed to receive the draw results by email!</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2"></div>
                            <div class="hand-move d-block d-lg-none"><span></span></div>
                        </div>
                    </div>
                </div>
                <div class="how_txt">
                    <h4>The best lotteries in the world from the comfort of your own home!</h4>
                    <div class="text-mobtoggle">
                        <div class="text-short">
                            <p><p>{{ env('APP_NAME') }}, an online lottery service, helps players take part in the draws of the most popular lotteries, like Powerball or MEGA Millions, from the comfort of their own home. It&rsquo;s 100% safe and convenient.</p>
                            <p>The {{ env('APP_NAME') }} team consists of many professional and highly skilled experts with years of experience in the online-gaming and lottery industry. They all are willing to guide you through your lottery journey!</p></p>
                        </div>
                        <div class="text-full">
                            <div class="row">
                                <div class="col-md-6">
                                    <p>{{ env('APP_NAME') }}, an online lottery service, helps players take part in the draws of the most popular lotteries, like Powerball or MEGA Millions, from the comfort of their own home. It&rsquo;s 100% safe and convenient.</p>
                                    <p>The {{ env('APP_NAME') }} team consists of many professional and highly skilled experts with years of experience in the online-gaming and lottery industry. They all are willing to guide you through your lottery journey!</p>
                                </div>
                                <div class="col-md-6">
                                    <p>Through our website, you can play many of the greatest licensed lotteries in the world. <a href="en/play-lottery/" target="_blank">Pick a lottery</a> you like, select your numbers, or use the Easy Pick option, and then purchase a ticket or place a bet.</p>
                                    <p>Be sure to keep up with the latest featured posts in the {{ env('APP_NAME') }} <a href="en/blog/" target="_blank">blog</a> where we post the most intriguing news, frequently browse through <a href="en/results/" target="_blank">lottery results</a>, watch videos of draws, and check lottery statistics.</p>
                                </div>
                            </div>
                        </div>
                        <div class="text_opener" data-show-more="More Results" data-show-hide="Collapse">More Results</div>
                    </div>
                </div>
            </div>
        </section>

    </main>

@endsection
