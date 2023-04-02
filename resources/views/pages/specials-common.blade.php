@extends('pages.layouts.app')
@section('content')
    <main class="content">
        <div class="win windowOpen" id="windowCartOrContinue">
            <div class="win_title">The entry has been successfully added to the cart!</div>
            <div class="win_txt"><p>Continue shopping or proceed to checkout.</p></div>
            <div class="row text-center">
                <div class="col-12 col-sm-6">
                    <a href="en/cart/" class="btn btn-success w-100" style="margin-top: 10px;">Proceed to checkout</a>
                </div>
                <div class="col-12 col-sm-6">
                    <a href="#" class="btn btn-outline-primary closeButton w-100" style="margin-top: 10px;">Continue shopping</a>
                </div>
            </div>
        </div>
        <section class="section-promotions">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <h1>All {{ env('APP_NAME') }} offers in one place!</h1>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-8">
                        <div class="text-muted page_txt"><p>Playing at {{ env('APP_NAME') }} is always exciting with our regular amazing promotional offers. We run several promos that make your playing time a lot more fun! Invite friends to play, read our newsletters, take part in contests, fill out lottery forms wisely, and leave feedback about us to get access to all our generous discounts, gifts, and bonuses. Here are the current promotions that we offer:</p></div>
                    </div>
                    <div class="col-lg-4">
                        <div class="promotions_trust">
                            <div class="promotions_trust_fl">
                                <div class="promotions_trust_logo">
                                    <a class="trust-logo" rel="nofollow" target="_blank"  onclick="yaGoals('TRUSTPILOT');"><img src="https://static.cdnland.com/new/images/svg/logo_trustpilot.svg" alt=""></a>
                                </div>
                                <div class="promotions_trust_stars">
                                    <div class="trustrate">
                                        <a rel="nofollow" target="_blank"  onclick="yaGoals('TRUSTPILOT');">

                                        <span style="display: inline-block; width: 128px; height: 24px;  overflow: hidden; ">
                                            <svg viewBox="0 0 251 46" xmlns="http://www.w3.org/2000/svg" style="height: 100%; width: 128px; left: 0; top: 0; z-index: 0; position: relative;">
                                              <g>
                                                  <path fill="#00b67a" d="M0 46.330002h46.375586V0H0z"></path>
                                                  <path d="M39.533936 19.711433L13.230239 38.80065l3.838216-11.797827L7.02115 19.711433h12.418975l3.837417-11.798624 3.837418 11.798624h12.418975zM23.2785 31.510075l7.183595-1.509576 2.862114 8.800152L23.2785 31.510075z" fill="#FFF"></path>
                                              </g>
                                              <g>
                                                  <path fill="#00b67a" d="M51.24816 46.330002h46.375587V0H51.248161z"></path>
                                                  <path fill="#00b67a" d="M51.24816 46.330002h23.187793V0H51.248161z"></path>
                                                  <path d="M74.990978 31.32991L81.150908 30 84 39l-9.660206-7.202786L64.30279 39l3.895636-11.840666L58 19.841466h12.605577L74.499595 8l3.895637 11.841466H91L74.990978 31.329909z" fill="#FFF"></path>
                                              </g>
                                              <g>
                                                  <path fill="#00b67a" d="M102.532209 46.330002h46.375586V0h-46.375586z"></path>
                                                  <path fill="#00b67a" d="M102.532209 46.330002h23.187793V0h-23.187793z"></path>
                                                  <path d="M142.066994 19.711433L115.763298 38.80065l3.838215-11.797827-10.047304-7.291391h12.418975l3.837418-11.798624 3.837417 11.798624h12.418975zM125.81156 31.510075l7.183595-1.509576 2.862113 8.800152-10.045708-7.290576z" fill="#FFF"></path>
                                              </g>
                                              <g>
                                                  <path fill="#00b67a" d="M153.815458 46.330002h46.375586V0h-46.375586z"></path>
                                                  <path fill="#00b67a" d="M153.815458 46.330002h23.187793V0h-23.187793z"></path>
                                                  <path d="M193.348355 19.711433L167.045457 38.80065l3.837417-11.797827-10.047303-7.291391h12.418974l3.837418-11.798624 3.837418 11.798624h12.418974zM177.09292 31.510075l7.183595-1.509576 2.862114 8.800152-10.045709-7.290576z" fill="#FFF"></path>
                                              </g>
                                              <g>
                                                  <path fill="#dcdce6" d="M205.064416 46.330002h46.375587V0h-46.375587z"></path>
                                                  <path fill="#00b67a" d="M205.064416 46.330002h23.187793V0h-23.187793z"></path>
                                                  <path d="M244.597022 19.711433l-26.3029 19.089218 3.837419-11.797827-10.047304-7.291391h12.418974l3.837418-11.798624 3.837418 11.798624h12.418975zm-16.255436 11.798642l7.183595-1.509576 2.862114 8.800152-10.045709-7.290576z" fill="#FFF"></path>
                                              </g>
                                          </svg>
                                        </span>

                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="lotnac_item_sm">TrustScore 4.5 &nbsp;|&nbsp; 4.0K reviews</div>
                        </div>
                    </div>
                </div>
                <div class="promotions">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="promotions_item">
                                <div class="promotions_item_img">
                                    <img src="https://static.cdnland.com/new/images/svg/icon6.svg" alt="">
                                </div>
                                <div class="promotions_item_cont">
                                    <div class="promotions_item_title">Buy 1 — Get 1 Free!</div>
                                    <div class="promotions_item_txt"><p>Is this your first time playing? Go for it! We will give you a welcome bonus right after the <a href="en/play-lottery/" target="_blank">first game</a> — you can play again soon!</p></div>
                                </div>
                                <!--<div class="promotions_item_btn"><a href="#" class="btn btn-success">Получить второй билет</a></div>-->
                            </div>
                        </div><div class="col-lg-4">
                            <div class="promotions_item">
                                <div class="promotions_item_img">
                                    <img src="https://static.cdnland.com/new/images/svg/icon7.svg" alt="">
                                </div>
                                <div class="promotions_item_cont">
                                    <div class="promotions_item_title">Invite a Friend</div>
                                    <div class="promotions_item_txt"><p><a href="en/invite-friend/" target="_blank">Invite a friend</a> to play! As soon as they make the first entry, you will immediately receive $ 5. You can spend the money on any game.</p></div>
                                </div>
                                <!--<div class="promotions_item_btn"><a href="#" class="btn btn-success">Получить второй билет</a></div>-->
                            </div>
                        </div><div class="col-lg-4">
                            <div class="promotions_item">
                                <div class="promotions_item_img">
                                    <img src="https://static.cdnland.com/new/images/svg/icon12.svg" alt="">
                                </div>
                                <div class="promotions_item_cont">
                                    <div class="promotions_item_title">Promocodes</div>
                                    <div class="promotions_item_txt"><p>We love our clients very much, so from time to time we send them promotional codes by email. No special occasion needed!</p></div>
                                </div>
                                <!--<div class="promotions_item_btn"><a href="#" class="btn btn-success">Получить второй билет</a></div>-->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="otzban">
                    <div class="otzban_cont">
                        <a class="otzban_title" href="https://trustpilot.com/review/www.agentlotto.com" target="_blank">Tell others about us and get a reward!</a>
                        <div class="otzban_txt">
                            <p>If you like what you get, and feel like sharing your emotions with others, <a href="https://trustpilot.com/review/www.agentlotto.com" target="_blank">tell the world about us</a> and receive a fantastic reward!</p>
                            <p><a href="en/testimonials/rules/" target="_blank">* Read the rules of this promotion!</a></p>
                        </div>
                    </div>
                    <div class="otzban_img"><img src="https://static.cdnland.com/new/images/revban.jpg" alt=""></div>
                </div>
                <div class="promotions">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="promotions_item">
                                <div class="promotions_item_img">
                                    <img src="https://static.cdnland.com/new/images/svg/icon10.svg" alt="">
                                </div>
                                <div class="promotions_item_cont">
                                    <div class="promotions_item_title">A Bigger Discount!</div>
                                    <div class="promotions_item_txt"><p>The more lines you include in your entry, the higher your discount will be! Amazing news: we add up all of your discounts!</p></div>
                                </div>
                                <!--<div class="promotions_item_btn"><a href="#" class="btn btn-success">Получить второй билет</a></div>-->
                            </div>
                        </div><div class="col-lg-4">
                            <div class="promotions_item">
                                <div class="promotions_item_img">
                                    <img src="https://static.cdnland.com/new/images/svg/icon9.svg" alt="">
                                </div>
                                <div class="promotions_item_cont">
                                    <div class="promotions_item_title">10th Entry for Free!</div>
                                    <div class="promotions_item_txt"><p>Use the "Subscription" option for subsequent draws to save your time, don't miss important lottery draws, and get free bets!</p></div>
                                </div>
                                <!--<div class="promotions_item_btn"><a href="#" class="btn btn-success">Получить второй билет</a></div>-->
                            </div>
                        </div><div class="col-lg-4">
                            <div class="promotions_item">
                                <div class="promotions_item_img">
                                    <img src="https://static.cdnland.com/new/images/svg/icon11.svg" alt="">
                                </div>
                                <div class="promotions_item_cont">
                                    <div class="promotions_item_title">Join our contests!</div>
                                    <div class="promotions_item_txt"><p>Contests are always fun! If they bring discounts, gifts, and bonuses, the fun gets doubled. To get involved, follow our newsletters!</p></div>
                                </div>
                                <!--<div class="promotions_item_btn"><a href="#" class="btn btn-success">Получить второй билет</a></div>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-why">
            <div class="container">
                <h2 class="text-md-center">Why are we worthy of your trust?</h2>
                <div class="why scrollactive">
                    <div class="why_slider js-why_slider owl-carousel off owl-drag">
                        <div class="why_slider_item">
                            <div class="why_item">
                                <div class="why_item_cont">
                                    <div class="why_item_title">We have a license</div>
                                    <div class="why_item_txt">We have obtained the Curacao license, due to which we can offer you any games and the best lotteries in the world.</div>
                                </div>
                                <div class="why_item_img">
                                    <!--<iframe SRC="https://licensing.gaming-curacao.com/validator/?lh=f60484a6978a9b62040108ab46a2e518&template=tseal" WIDTH=150 HEIGHT=50 STYLE="border:none;"></iframe>-->
                                    <a class="licensing-gaming-curacao" style="cursor: pointer;">
                                        <img src="https://static.cdnland.com/new/images/svg/license.svg" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="why_slider_item">
                            <div class="why_item">
                                <div class="why_item_cont">
                                    <div class="why_item_title">We are always in touch!</div>
                                    <div class="why_item_txt">Our experts are ready to help you and answer any of your questions 24/7 via online chat, email, and even a phone call.</div>
                                </div>
                                <div class="why_item_img">
                                    <img src="https://static.cdnland.com/new/images/svg/support.svg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="why_slider_item">
                            <div class="why_item">
                                <div class="why_item_cont">
                                    <div class="why_item_title">We are 100% safe</div>
                                    <div class="why_item_txt">It's 100% safe to play with us! All your transactions are secured with 256-bit encryption, and we are PCI DSS certified.</div>
                                </div>
                                <div class="why_item_img">
                                    <img src="https://static.cdnland.com/new/images/svg/secure.svg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="why_slider_item">
                            <div class="why_item">
                                <div class="why_item_cont">
                                    <div class="why_item_title">The service is perfect</div>
                                    <div class="why_item_txt">We have been working since 2012! All this time, millions of players from all over the world have enjoyed our great service.</div>
                                </div>
                                <div class="why_item_img">
                                    <img src="https://static.cdnland.com/new/images/svg/customer-success.svg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hand-move d-block d-lg-none"><span></span></div>
            </div>
        </section>
    </main>

@endsection

