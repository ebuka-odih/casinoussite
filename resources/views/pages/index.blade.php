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
    <div class="section-mainbanner">

        <div class="container">
            <div class="mainbanner cover-bg" style="background-image: url('https://static.cdnland.com/upload/images/promo/promo_en.jpg');">
                <div class="mainbanner_bg cover-bg" style="background-image: url('https://static.cdnland.com/upload/images/promo/promo_mobile_en3.jpg');"></div>
                <div class="mainbanner_cont">
                    <a href="#windowAlert" class="ratestars fancybox" data-title="Today&#039;s Top-Rated Lotteries" data-text="&lt;p&gt;We analyze dozens of parameters daily: Jackpot amount and tax deductions, winning odds and the number of prize divisions, cost of a single line, and availability of such options as &quot;Multiplier,&quot; and much more to offer you the best possible lottery at the moment!&lt;/p&gt;&lt;p&gt;Choose a lottery with the highest score to win more and spend less!&lt;/p&gt;" data-toggle="tooltip" data-placement="bottom" title="Lottery rating from 1 to 10">
                        <span class="fa fa-star"></span>
                        <span class="ratestars_val">9.0</span>
                    </a>
                    <a href="{{ route('play') }}" class="lottery_sel_label" data-toggle="tooltip" data-placement="bottom" title="Syndicate is available for this lottery"></a>
                    <div class="mainbanner_logo"><img src="https://static.cdnland.com/upload/images/logo/svg/megamillions.svg" alt="MEGA Millions"/></div>
                    <div class="mainbanner_title">
                        $ 385
                        <span class="mln_icon_extra text-nowrap">Million </span>
                    </div>
                    <div class="mainbanner_txt">It's easy to become a millionaire — place your bet now!</div>
                    <div class="mainbanner_bot">
                        <div class="time " style="margin-top: 5px;">
                            <span class="fa fa-clock"></span>
                            <div class="time_val" date-close="285372">3&nbsp;days</div>
                        </div>

                        <div class="lottery_sel" style="margin-top: 5px;">
                            <div class="event-easy-pick-cont">
                                <select name="easy_pick" class="lottery_sel_select event-easy-pick-select">
                                    <option></option>
                                    <option value="{{ route('play') }}" data-event-easy-pick="1">1 line for $ 5.29</option>
                                    <option value="{{ route('play') }}" data-event-easy-pick="1">3 lines for $ 14.92</option>
                                    <option value="" disabled>–––––&nbsp;or&nbsp;–––––</option>
                                    <option value="{{ route('play') }}">Pick numbers</option>
                                    <option class="light_version_site_hide" value="" disabled>––––––––––––</option>
                                    <option class="opt-syndicate" value="{{ route('play') }}">Syndicate &#128293;</option>
                                    <option class="opt-system" value="{{ route('play') }}">System &#128200;</option>
                                </select>
                                <a href="{{ route('play') }}" class="btn btn-success event-easy-pick-main-btn">Play<span class="fa-solid fa-chevron-down"></span></a>
                                <div class="lottery_sel_dropdown">
                                    <div class="offers">
                                        <p><a href="{{ route('play') }}" class="event-easy-pick-offer">1 line for $ 5.29</a></p>
                                        <p><a href="{{ route('play') }}" class="event-easy-pick-offer">3 lines for $ 14.92</a></p>
                                    </div>
                                    <div class="or">–––––&nbsp;or&nbsp;–––––</div>
                                    <p><a href="{{ route('play') }}" class="lottery_sel_choose">Pick numbers</a></p>
                                    <div class="or light_version_site_hide">–––––––––––––</div>

                                    <p>
                                        <a href="{{ route('play') }}" class="lottery_sel_choose game-type-ico fire opt-syndicate">
                                            Syndicate
                                        </a>
                                    </p>


                                    <p style="margin-top: 5px;">
                                        <a href="{{ route('play') }}" class="lottery_sel_choose game-type-ico lamp opt-system">
                                            System
                                        </a>
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section-mainsliders">
        <div class="container">
            <div class="row section_top">
                <div class="sorting_title" style="margin:0 0 0 16px;">Sort by:</div>
                <div class="col">
                    <div id="sort-carousel" class="nav nav-tabs owl-carousel js-tabs-scroll" role="tablist">
                        <div class="nav-item"><a href="#tab_jackpot" class="nav-link active" role="tab" data-toggle="tab">Jackpot</a></div>
                        <div class="nav-item"><a href="#tab_date" class="nav-link" role="tab" data-toggle="tab">Date</a></div>
                        <div class="nav-item"><a href="#tab_popular" class="nav-link" role="tab" data-toggle="tab">Popularity</a></div>
                    </div>
                </div>
                <div class="col-auto d-none d-sm-block"><a href="en/play-lottery/" class="section_top_link">All lotteries<span class="icon-chevron"></span></a></div>
            </div>
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade show active" id="tab_jackpot">
                    <div class="lottery_slider lottery_owl-carousel owl-carousel">
                        <div class="lottery_slider_item">
                            <div class="lottery_item">
                                <div class="lottery_item_top" style="background-image: url('https://static.cdnland.com/upload/images/bg/us-powerball.svg');">
                                    <div class="lottery_item_img"><a href="{{ route('play') }}"><img src="https://static.cdnland.com/upload/images/logo/svg/powerball.svg" alt="Powerball"/></a></div>
                                    <div class="lottery_item_val"><span class="jack"><b>$ 147</b><br/><span class="mln_icon_extra text-nowrap">Million </span></span></div>
                                </div>
                                <div class="lottery_item_cont">
                                    <a href="#windowAlert" class="ratestars fancybox" onclick="yaGoals('CLEVER');" data-title="Today&#039;s Top-Rated Lotteries" data-text="&lt;p&gt;We analyze dozens of parameters daily: Jackpot amount and tax deductions, winning odds and the number of prize divisions, cost of a single line, and availability of such options as &quot;Multiplier,&quot; and much more to offer you the best possible lottery at the moment!&lt;/p&gt;&lt;p&gt;Choose a lottery with the highest score to win more and spend less!&lt;/p&gt;" data-toggle="tooltip" data-placement="bottom" title="Lottery rating from 1 to 10">
                                        <span class="fa fa-star"></span>
                                        <span class="ratestars_val">7.5</span>
                                    </a>
                                    <div class="time ">
                                        <span class="icon-clock"></span>
                                        <div class="time_val " date-close="26172">7&nbsp;hours</div>
                                    </div>

                                    <div class="lottery_sel">

                                        <div class="event-easy-pick-cont">
                                            <select name="easy_pick" class="lottery_sel_select event-easy-pick-select">
                                                <option></option>
                                                <option value="{{ route('play') }}" data-event-easy-pick="1">1 line for $ 5.29</option>
                                                <option value="{{ route('play') }}" data-event-easy-pick="1">3 lines for $ 14.92</option>
                                                <option value="" disabled>–––––&nbsp;or&nbsp;–––––</option>
                                                <option value="{{ route('play') }}">Pick numbers</option>
                                                <option class="light_version_site_hide" value="" disabled>––––––––––––</option>
                                                <option class="opt-syndicate" value="{{ route('play') }}">Syndicate &#128293;</option>
                                                <option class="opt-system" value="{{ route('play') }}">System &#128200;</option>
                                            </select>
                                            <a href="{{ route('play') }}" class="btn btn-success event-easy-pick-main-btn">Play<span class="fa-solid fa-chevron-down"></span></a>
                                            <div class="lottery_sel_dropdown">
                                                <div class="offers">
                                                    <p><a href="{{ route('play') }}" class="event-easy-pick-offer">1 line for $ 5.29</a></p>
                                                    <p><a href="{{ route('play') }}" class="event-easy-pick-offer">3 lines for $ 14.92</a></p>
                                                </div>
                                                <div class="or">–––––&nbsp;or&nbsp;–––––</div>
                                                <p><a href="{{ route('play') }}" class="lottery_sel_choose">Pick numbers</a></p>
                                                <div class="or light_version_site_hide">–––––––––––––</div>

                                                <p><a href="{{ route('play') }}" class="lottery_sel_choose game-type-ico fire opt-syndicate">Syndicate</a></p>


                                                <p style="margin-top: 5px;"><a href="{{ route('play') }}" class="lottery_sel_choose game-type-ico lamp opt-system">System</a></p>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div><div class="lottery_slider_item">
                            <div class="lottery_item">
                                <div class="lottery_item_top" style="background-image: url('https://static.cdnland.com/upload/images/bg/us-texas-lotto.svg');">
                                    <div class="lottery_item_img"><a href="{{ route('play') }}"><img src="https://static.cdnland.com/upload/images/logo/svg/texas-lotto.svg" alt="Lotto Texas"/></a></div>
                                    <div class="lottery_item_val"><span class="jack"><b>$ 61</b><br/><span class="mln_icon_extra text-nowrap">Million </span></span></div>
                                </div>
                                <div class="lottery_item_cont">
                                    <a href="#windowAlert" class="ratestars fancybox" onclick="yaGoals('CLEVER');" data-title="Today&#039;s Top-Rated Lotteries" data-text="&lt;p&gt;We analyze dozens of parameters daily: Jackpot amount and tax deductions, winning odds and the number of prize divisions, cost of a single line, and availability of such options as &quot;Multiplier,&quot; and much more to offer you the best possible lottery at the moment!&lt;/p&gt;&lt;p&gt;Choose a lottery with the highest score to win more and spend less!&lt;/p&gt;" data-toggle="tooltip" data-placement="bottom" title="Lottery rating from 1 to 10">
                                        <span class="fa fa-star"></span>
                                        <span class="ratestars_val">7.2</span>
                                    </a>
                                    <div class="time ">
                                        <span class="icon-clock"></span>
                                        <div class="time_val " date-close="29772">8&nbsp;hours</div>
                                    </div>

                                    <div class="lottery_sel">

                                        <div class="event-easy-pick-cont">
                                            <select name="easy_pick" class="lottery_sel_select event-easy-pick-select">
                                                <option></option>
                                                <option value="/en/play-lottery/lotto-texas/?from=circular&easy_pick=1&extra_jackpot=" data-event-easy-pick="1">1 line for $ 3.79</option>
                                                <option value="/en/play-lottery/lotto-texas/?from=circular&easy_pick=3&extra_jackpot=" data-event-easy-pick="1">3 lines for $ 10.80</option>
                                                <option value="" disabled>–––––&nbsp;or&nbsp;–––––</option>
                                                <option value="/en/play-lottery/lotto-texas/?from=circular&extra_jackpot=">Pick numbers</option>
                                                <option class="light_version_site_hide" value="" disabled>––––––––––––</option>

                                                <option class="opt-system" value="/en/play-lottery/lotto-texas/?from=index_lotto&system=1&extra_jackpot=">System &#128200;</option>
                                            </select>
                                            <a href="{{ route('play') }}" class="btn btn-success event-easy-pick-main-btn">Play<span class="fa-solid fa-chevron-down"></span></a>
                                            <div class="lottery_sel_dropdown">
                                                <div class="offers">
                                                    <p><a href="{{ route('play') }}" class="event-easy-pick-offer">1 line for $ 3.79</a></p>
                                                    <p><a href="{{ route('play') }}" class="event-easy-pick-offer">3 lines for $ 10.80</a></p>
                                                </div>
                                                <div class="or">–––––&nbsp;or&nbsp;–––––</div>
                                                <p><a href="{{ route('play') }}" class="lottery_sel_choose">Pick numbers</a></p>
                                                <div class="or light_version_site_hide">–––––––––––––</div>


                                                <p style="margin-top: 5px;"><a href="{{ route('play') }}" class="lottery_sel_choose game-type-ico lamp opt-system">System</a></p>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div><div class="lottery_slider_item">
                            <div class="lottery_item">
                                <div class="lottery_item_top" style="background-image: url('https://static.cdnland.com/upload/images/bg/us-superlotto-plus.svg');">
                                    <div class="lottery_item_img"><a href="{{ route('play') }}"><img src="https://static.cdnland.com/upload/images/logo/svg/superlotto-plus.svg" alt="SuperLotto Plus"/></a></div>
                                    <div class="lottery_item_val"><span class="jack"><b>$ 46</b><br/><span class="mln_icon_extra text-nowrap">Million </span></span></div>
                                </div>
                                <div class="lottery_item_cont">
                                    <a href="#windowAlert" class="ratestars fancybox" onclick="yaGoals('CLEVER');" data-title="Today&#039;s Top-Rated Lotteries" data-text="&lt;p&gt;We analyze dozens of parameters daily: Jackpot amount and tax deductions, winning odds and the number of prize divisions, cost of a single line, and availability of such options as &quot;Multiplier,&quot; and much more to offer you the best possible lottery at the moment!&lt;/p&gt;&lt;p&gt;Choose a lottery with the highest score to win more and spend less!&lt;/p&gt;" data-toggle="tooltip" data-placement="bottom" title="Lottery rating from 1 to 10">
                                        <span class="fa fa-star"></span>
                                        <span class="ratestars_val">7.0</span>
                                    </a>
                                    <div class="time ">
                                        <span class="icon-clock"></span>
                                        <div class="time_val " date-close="26172">7&nbsp;hours</div>
                                    </div>

                                    <div class="lottery_sel">

                                        <div class="event-easy-pick-cont">
                                            <select name="easy_pick" class="lottery_sel_select event-easy-pick-select">
                                                <option></option>
                                                <option value="{{ route('play') }}" data-event-easy-pick="1">2 lines for $ 5.98</option>
                                                <option value="{{ route('play') }}" data-event-easy-pick="1">3 lines for $ 8.52</option>
                                                <option value="" disabled>–––––&nbsp;or&nbsp;–––––</option>
                                                <option value="{{ route('play') }}">Pick numbers</option>
                                                <option class="light_version_site_hide" value="" disabled>––––––––––––</option>
                                                <option class="opt-syndicate" value="{{ route('play') }}">Syndicate &#128293;</option>
                                                <option class="opt-system" value="{{ route('play') }}">System &#128200;</option>
                                            </select>
                                            <a href="{{ route('play') }}" class="btn btn-success event-easy-pick-main-btn">Play<span class="fa-solid fa-chevron-down"></span></a>
                                            <div class="lottery_sel_dropdown">
                                                <div class="offers">
                                                    <p><a href="{{ route('play') }}" class="event-easy-pick-offer">2 lines for $ 5.98</a></p>
                                                    <p><a href="{{ route('play') }}" class="event-easy-pick-offer">3 lines for $ 8.52</a></p>
                                                </div>
                                                <div class="or">–––––&nbsp;or&nbsp;–––––</div>
                                                <p><a href="{{ route('play') }}" class="lottery_sel_choose">Pick numbers</a></p>
                                                <div class="or light_version_site_hide">–––––––––––––</div>

                                                <p><a href="{{ route('play') }}" class="lottery_sel_choose game-type-ico fire opt-syndicate">Syndicate</a></p>


                                                <p style="margin-top: 5px;"><a href="{{ route('play') }}" class="lottery_sel_choose game-type-ico lamp opt-system">System</a></p>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div><div class="lottery_slider_item">
                            <div class="lottery_item">
                                <div class="lottery_item_top" style="background-image: url('https://static.cdnland.com/upload/images/bg/eu-euromillions.svg');">
                                    <div class="lottery_item_img"><a href="{{ route('play') }}"><img src="https://static.cdnland.com/upload/images/logo/svg/euromillions.svg" alt="EuroMillions"/></a></div>
                                    <div class="lottery_item_val"><span class="jack"><b>€ 40</b><br/><span class="mln_icon_extra text-nowrap">Million </span></span></div>
                                </div>
                                <div class="lottery_item_cont">
                                    <a href="#windowAlert" class="ratestars fancybox" onclick="yaGoals('CLEVER');" data-title="Today&#039;s Top-Rated Lotteries" data-text="&lt;p&gt;We analyze dozens of parameters daily: Jackpot amount and tax deductions, winning odds and the number of prize divisions, cost of a single line, and availability of such options as &quot;Multiplier,&quot; and much more to offer you the best possible lottery at the moment!&lt;/p&gt;&lt;p&gt;Choose a lottery with the highest score to win more and spend less!&lt;/p&gt;" data-toggle="tooltip" data-placement="bottom" title="Lottery rating from 1 to 10">
                                        <span class="fa fa-star"></span>
                                        <span class="ratestars_val">7.4</span>
                                    </a>
                                    <div class="time ">
                                        <span class="icon-clock"></span>
                                        <div class="time_val " date-close="256572">2&nbsp;days</div>
                                    </div>

                                    <div class="lottery_sel">

                                        <div class="event-easy-pick-cont">
                                            <select name="easy_pick" class="lottery_sel_select event-easy-pick-select">
                                                <option></option>
                                                <option value="{{ route('play') }}" data-event-easy-pick="1">1 line for $ 6.20</option>
                                                <option value="{{ route('play') }}" data-event-easy-pick="1">3 lines for $ 18.04</option>
                                                <option value="" disabled>–––––&nbsp;or&nbsp;–––––</option>
                                                <option value="{{ route('play') }}">Pick numbers</option>
                                                <option class="light_version_site_hide" value="" disabled>––––––––––––</option>
                                                <option class="opt-syndicate" value="{{ route('play') }}">Syndicate &#128293;</option>
                                                <option class="opt-system" value="{{ route('play') }}">System &#128200;</option>
                                            </select>
                                            <a href="{{ route('play') }}" class="btn btn-success event-easy-pick-main-btn">Play<span class="fa-solid fa-chevron-down"></span></a>
                                            <div class="lottery_sel_dropdown">
                                                <div class="offers">
                                                    <p><a href="{{ route('play') }}" class="event-easy-pick-offer">1 line for $ 6.20</a></p>
                                                    <p><a href="{{ route('play') }}" class="event-easy-pick-offer">3 lines for $ 18.04</a></p>
                                                </div>
                                                <div class="or">–––––&nbsp;or&nbsp;–––––</div>
                                                <p><a href="{{ route('play') }}" class="lottery_sel_choose">Pick numbers</a></p>
                                                <div class="or light_version_site_hide">–––––––––––––</div>

                                                <p><a href="{{ route('play') }}" class="lottery_sel_choose game-type-ico fire opt-syndicate">Syndicate</a></p>


                                                <p style="margin-top: 5px;"><a href="{{ route('play') }}" class="lottery_sel_choose game-type-ico lamp opt-system">System</a></p>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div><div class="lottery_slider_item">
                            <div class="lottery_item">
                                <div class="lottery_item_top" style="background-image: url('https://static.cdnland.com/upload/images/bg/us-lotto-america.svg');">
                                    <div class="lottery_item_img"><a href="{{ route('play') }}><img src="https://static.cdnland.com/upload/images/logo/svg/lotto_america.svg" alt="Lotto America"/></a></div>
                                    <div class="lottery_item_val"><span class="jack"><b>$ 40.03</b><br/><span class="mln_icon_extra text-nowrap">Million </span></span></div>
                                </div>
                                <div class="lottery_item_cont">
                                    <a href="#windowAlert" class="ratestars fancybox" onclick="yaGoals('CLEVER');" data-title="Today&#039;s Top-Rated Lotteries" data-text="&lt;p&gt;We analyze dozens of parameters daily: Jackpot amount and tax deductions, winning odds and the number of prize divisions, cost of a single line, and availability of such options as &quot;Multiplier,&quot; and much more to offer you the best possible lottery at the moment!&lt;/p&gt;&lt;p&gt;Choose a lottery with the highest score to win more and spend less!&lt;/p&gt;" data-toggle="tooltip" data-placement="bottom" title="Lottery rating from 1 to 10">
                                        <span class="fa fa-star"></span>
                                        <span class="ratestars_val">7.5</span>
                                    </a>
                                    <div class="time ">
                                        <span class="icon-clock"></span>
                                        <div class="time_val " date-close="22572">6&nbsp;hours</div>
                                    </div>

                                    <div class="lottery_sel">

                                        <div class="event-easy-pick-cont">
                                            <select name="easy_pick" class="lottery_sel_select event-easy-pick-select">
                                                <option></option>
                                                <option value="{{ route('play') }}" data-event-easy-pick="1">1 line for $ 3.29</option>
                                                <option value="{{ route('play') }}" data-event-easy-pick="1">3 lines for $ 9.57</option>
                                                <option value="" disabled>–––––&nbsp;or&nbsp;–––––</option>
                                                <option value="{{ route('play') }}>Pick numbers</option>
                                                <option class="light_version_site_hide" value="" disabled>––––––––––––</option>

                                                <option class="opt-system" value="/en/play-lottery/lotto-america/?from=index_lotto&system=1&extra_jackpot=">System &#128200;</option>
                                            </select>
                                            <a href="{{ route('play') }} class="btn btn-success event-easy-pick-main-btn">Play<span class="fa-solid fa-chevron-down"></span></a>
                                            <div class="lottery_sel_dropdown">
                                                <div class="offers">
                                                    <p><a href="{{ route('play') }}" class="event-easy-pick-offer">1 line for $ 3.29</a></p>
                                                    <p><a href="{{ route('play') }}" class="event-easy-pick-offer">3 lines for $ 9.57</a></p>
                                                </div>
                                                <div class="or">–––––&nbsp;or&nbsp;–––––</div>
                                                <p><a href="{{ route('play') }} class="lottery_sel_choose">Pick numbers</a></p>
                                                <div class="or light_version_site_hide">–––––––––––––</div>


                                                <p style="margin-top: 5px;"><a href="/en/play-lottery/lotto-america/?from=index_lotto&system=1&extra_jackpot=" class="lottery_sel_choose game-type-ico lamp opt-system">System</a></p>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div><div class="lottery_slider_item">
                            <div class="lottery_item">
                                <div class="lottery_item_top" style="background-image: url('https://static.cdnland.com/upload/images/bg/au-powerball.svg');">
                                    <div class="lottery_item_img"><a href="/en/play-lottery/powerball-australia/?from=circular&extra_jackpot="><img src="https://static.cdnland.com/upload/images/logo/svg/powerball_au.svg" alt="Powerball Australia"/></a></div>
                                    <div class="lottery_item_val"><span class="jack"><b>A$ 20</b><br/><span class="mln_icon_extra text-nowrap">Million </span></span></div>
                                </div>
                                <div class="lottery_item_cont">
                                    <a href="#windowAlert" class="ratestars fancybox" onclick="yaGoals('CLEVER');" data-title="Today&#039;s Top-Rated Lotteries" data-text="&lt;p&gt;We analyze dozens of parameters daily: Jackpot amount and tax deductions, winning odds and the number of prize divisions, cost of a single line, and availability of such options as &quot;Multiplier,&quot; and much more to offer you the best possible lottery at the moment!&lt;/p&gt;&lt;p&gt;Choose a lottery with the highest score to win more and spend less!&lt;/p&gt;" data-toggle="tooltip" data-placement="bottom" title="Lottery rating from 1 to 10">
                                        <span class="fa fa-star"></span>
                                        <span class="ratestars_val">7.0</span>
                                    </a>
                                    <div class="time ">
                                        <span class="icon-clock"></span>
                                        <div class="time_val " date-close="386172">4&nbsp;days</div>
                                    </div>

                                    <div class="lottery_sel">

                                        <div class="event-easy-pick-cont">
                                            <select name="easy_pick" class="lottery_sel_select event-easy-pick-select">
                                                <option></option>
                                                <option value="/en/play-lottery/powerball-australia/?from=circular&easy_pick=4&extra_jackpot=" data-event-easy-pick="1">4 lines for $ 7.24</option>
                                                <option value="/en/play-lottery/powerball-australia/?from=circular&easy_pick=6&extra_jackpot=" data-event-easy-pick="1">6 lines for $ 9.88</option>
                                                <option value="" disabled>–––––&nbsp;or&nbsp;–––––</option>
                                                <option value="/en/play-lottery/powerball-australia/?from=circular&extra_jackpot=">Pick numbers</option>
                                                <option class="light_version_site_hide" value="" disabled>––––––––––––</option>
                                                <option class="opt-syndicate" value="/en/play-lottery/powerball-australia/?from=index_lotto&syndicates=1&extra_jackpot=">Syndicate &#128293;</option>
                                                <option class="opt-system" value="/en/play-lottery/powerball-australia/?from=index_lotto&system=1&extra_jackpot=">System &#128200;</option>
                                            </select>
                                            <a href="/en/play-lottery/powerball-australia/?from=circular&extra_jackpot=" class="btn btn-success event-easy-pick-main-btn">Play<span class="fa-solid fa-chevron-down"></span></a>
                                            <div class="lottery_sel_dropdown">
                                                <div class="offers">
                                                    <p><a href="/en/play-lottery/powerball-australia/?from=circular&easy_pick=4&extra_jackpot=" class="event-easy-pick-offer">4 lines for $ 7.24</a></p>
                                                    <p><a href="/en/play-lottery/powerball-australia/?from=circular&easy_pick=6&extra_jackpot=" class="event-easy-pick-offer">6 lines for $ 9.88</a></p>
                                                </div>
                                                <div class="or">–––––&nbsp;or&nbsp;–––––</div>
                                                <p><a href="/en/play-lottery/powerball-australia/?from=circular&extra_jackpot=" class="lottery_sel_choose">Pick numbers</a></p>
                                                <div class="or light_version_site_hide">–––––––––––––</div>

                                                <p><a href="/en/play-lottery/powerball-australia/?from=index_lotto&syndicates=1&extra_jackpot=" class="lottery_sel_choose game-type-ico fire opt-syndicate">Syndicate</a></p>


                                                <p style="margin-top: 5px;"><a href="/en/play-lottery/powerball-australia/?from=index_lotto&system=1&extra_jackpot=" class="lottery_sel_choose game-type-ico lamp opt-system">System</a></p>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div><div class="lottery_slider_item">
                            <div class="lottery_item">
                                <div class="lottery_item_top" style="background-image: url('https://static.cdnland.com/upload/images/bg/au-ozlotto.svg');">
                                    <div class="lottery_item_img"><a href="{{ route('play') }}"><img src="https://static.cdnland.com/upload/images/logo/svg/oz-lotto.svg" alt="Oz Lotto"/></a></div>
                                    <div class="lottery_item_val"><span class="jack"><b>A$ 20</b><br/><span class="mln_icon_extra text-nowrap">Million </span></span></div>
                                </div>
                                <div class="lottery_item_cont">
                                    <a href="#windowAlert" class="ratestars fancybox" onclick="yaGoals('CLEVER');" data-title="Today&#039;s Top-Rated Lotteries" data-text="&lt;p&gt;We analyze dozens of parameters daily: Jackpot amount and tax deductions, winning odds and the number of prize divisions, cost of a single line, and availability of such options as &quot;Multiplier,&quot; and much more to offer you the best possible lottery at the moment!&lt;/p&gt;&lt;p&gt;Choose a lottery with the highest score to win more and spend less!&lt;/p&gt;" data-toggle="tooltip" data-placement="bottom" title="Lottery rating from 1 to 10">
                                        <span class="fa fa-star"></span>
                                        <span class="ratestars_val">7.4</span>
                                    </a>
                                    <div class="time ">
                                        <span class="icon-clock"></span>
                                        <div class="time_val " date-close="213372">2&nbsp;days</div>
                                    </div>

                                    <div class="lottery_sel">

                                        <div class="event-easy-pick-cont">
                                            <select name="easy_pick" class="lottery_sel_select event-easy-pick-select">
                                                <option></option>
                                                <option value="{{ route('play') }}" data-event-easy-pick="1">4 lines for $ 10.04</option>
                                                <option value="{{ route('play') }}" data-event-easy-pick="1">7 lines for $ 16.34</option>
                                                <option value="" disabled>–––––&nbsp;or&nbsp;–––––</option>
                                                <option value="{{ route('play') }}">Pick numbers</option>
                                                <option class="light_version_site_hide" value="" disabled>––––––––––––</option>
                                                <option class="opt-syndicate" value="{{ route('play') }}">Syndicate &#128293;</option>
                                                <option class="opt-system" value="{{ route('play') }}">System &#128200;</option>
                                            </select>
                                            <a href="{{ route('play') }}" class="btn btn-success event-easy-pick-main-btn">Play<span class="fa-solid fa-chevron-down"></span></a>
                                            <div class="lottery_sel_dropdown">
                                                <div class="offers">
                                                    <p><a href="{{ route('play') }}" class="event-easy-pick-offer">4 lines for $ 10.04</a></p>
                                                    <p><a href="{{ route('play') }}" class="event-easy-pick-offer">7 lines for $ 16.34</a></p>
                                                </div>
                                                <div class="or">–––––&nbsp;or&nbsp;–––––</div>
                                                <p><a href="{{ route('play') }}" class="lottery_sel_choose">Pick numbers</a></p>
                                                <div class="or light_version_site_hide">–––––––––––––</div>

                                                <p><a href="{{ route('play') }}" class="lottery_sel_choose game-type-ico fire opt-syndicate">Syndicate</a></p>


                                                <p style="margin-top: 5px;"><a href="{{ route('play') }}" class="lottery_sel_choose game-type-ico lamp opt-system">System</a></p>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div><div class="lottery_slider_item">
                            <div class="lottery_item">
                                <div class="lottery_item_top" style="background-image: url('https://static.cdnland.com/upload/images/bg/eu-eurojackpot.svg');">
                                    <div class="lottery_item_img"><a href="{{ route('play') }}"><img src="https://static.cdnland.com/upload/images/logo/svg/eurojackpot.svg" alt="EuroJackpot"/></a></div>
                                    <div class="lottery_item_val"><span class="jack"><b>€ 10</b><br/><span class="mln_icon_extra text-nowrap">Million </span></span></div>
                                </div>
                                <div class="lottery_item_cont">
                                    <a href="#windowAlert" class="ratestars fancybox" onclick="yaGoals('CLEVER');" data-title="Today&#039;s Top-Rated Lotteries" data-text="&lt;p&gt;We analyze dozens of parameters daily: Jackpot amount and tax deductions, winning odds and the number of prize divisions, cost of a single line, and availability of such options as &quot;Multiplier,&quot; and much more to offer you the best possible lottery at the moment!&lt;/p&gt;&lt;p&gt;Choose a lottery with the highest score to win more and spend less!&lt;/p&gt;" data-toggle="tooltip" data-placement="bottom" title="Lottery rating from 1 to 10">
                                        <span class="fa fa-star"></span>
                                        <span class="ratestars_val">7.3</span>
                                    </a>
                                    <div class="time ">
                                        <span class="icon-clock"></span>
                                        <div class="time_val " date-close="249372">2&nbsp;days</div>
                                    </div>

                                    <div class="lottery_sel">

                                        <div class="event-easy-pick-cont">
                                            <select name="easy_pick" class="lottery_sel_select event-easy-pick-select">
                                                <option></option>
                                                <option value="/en/play-lottery/eurojackpot/?from=circular&easy_pick=1&extra_jackpot=" data-event-easy-pick="1">1 line for $ 5.76</option>
                                                <option value="/en/play-lottery/eurojackpot/?from=circular&easy_pick=3&extra_jackpot=" data-event-easy-pick="1">3 lines for $ 16.76</option>
                                                <option value="" disabled>–––––&nbsp;or&nbsp;–––––</option>
                                                <option value="{{ route('play') }}">Pick numbers</option>
                                                <option class="light_version_site_hide" value="" disabled>––––––––––––</option>
                                                <option class="opt-syndicate" value="{{ route('play') }}">Syndicate &#128293;</option>
                                                <option class="opt-system" value="{{ route('play') }}">System &#128200;</option>
                                            </select>
                                            <a href="{{ route('play') }}" class="btn btn-success event-easy-pick-main-btn">Play<span class="fa-solid fa-chevron-down"></span></a>
                                            <div class="lottery_sel_dropdown">
                                                <div class="offers">
                                                    <p><a href="/en/play-lottery/eurojackpot/?from=circular&easy_pick=1&extra_jackpot=" class="event-easy-pick-offer">1 line for $ 5.76</a></p>
                                                    <p><a href="/en/play-lottery/eurojackpot/?from=circular&easy_pick=3&extra_jackpot=" class="event-easy-pick-offer">3 lines for $ 16.76</a></p>
                                                </div>
                                                <div class="or">–––––&nbsp;or&nbsp;–––––</div>
                                                <p><a href="{{ route('play') }}" class="lottery_sel_choose">Pick numbers</a></p>
                                                <div class="or light_version_site_hide">–––––––––––––</div>

                                                <p><a href="{{ route('play') }}" class="lottery_sel_choose game-type-ico fire opt-syndicate">Syndicate</a></p>


                                                <p style="margin-top: 5px;"><a href="{{ route('play') }}" class="lottery_sel_choose game-type-ico lamp opt-system">System</a></p>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div><div class="lottery_slider_item">
                            <div class="lottery_item">
                                <div class="lottery_item_top" style="background-image: url('https://static.cdnland.com/upload/images/bg/us-cash4life.svg');">
                                    <div class="lottery_item_img"><a href="/en/play-lottery/cash-for-life/?from=circular&extra_jackpot="><img src="https://static.cdnland.com/upload/images/logo/svg/cash4life.svg" alt="Cash4Life"/></a></div>
                                    <div class="lottery_item_val"><span class="jack"><b>$ 7</b><br/><span class="mln_icon_extra text-nowrap">Million </span></span></div>
                                </div>
                                <div class="lottery_item_cont">
                                    <a href="#windowAlert" class="ratestars fancybox" onclick="yaGoals('CLEVER');" data-title="Today&#039;s Top-Rated Lotteries" data-text="&lt;p&gt;We analyze dozens of parameters daily: Jackpot amount and tax deductions, winning odds and the number of prize divisions, cost of a single line, and availability of such options as &quot;Multiplier,&quot; and much more to offer you the best possible lottery at the moment!&lt;/p&gt;&lt;p&gt;Choose a lottery with the highest score to win more and spend less!&lt;/p&gt;" data-toggle="tooltip" data-placement="bottom" title="Lottery rating from 1 to 10">
                                        <span class="fa fa-star"></span>
                                        <span class="ratestars_val">7.5</span>
                                    </a>
                                    <div class="time ">
                                        <span class="icon-clock"></span>
                                        <div class="time_val " date-close="22572">6&nbsp;hours</div>
                                    </div>

                                    <div class="lottery_sel">

                                        <div class="event-easy-pick-cont">
                                            <select name="easy_pick" class="lottery_sel_select event-easy-pick-select">
                                                <option></option>
                                                <option value="/en/play-lottery/cash-for-life/?from=circular&easy_pick=1&extra_jackpot=" data-event-easy-pick="1">1 line for $ 5.00</option>
                                                <option value="/en/play-lottery/cash-for-life/?from=circular&easy_pick=3&extra_jackpot=" data-event-easy-pick="1">3 lines for $ 14.25</option>
                                                <option value="" disabled>–––––&nbsp;or&nbsp;–––––</option>
                                                <option value="/en/play-lottery/cash-for-life/?from=circular&extra_jackpot=">Pick numbers</option>
                                                <option class="light_version_site_hide" value="" disabled>––––––––––––</option>

                                                <option class="opt-system" value="/en/play-lottery/cash-for-life/?from=index_lotto&system=1&extra_jackpot=">System &#128200;</option>
                                            </select>
                                            <a href="/en/play-lottery/cash-for-life/?from=circular&extra_jackpot=" class="btn btn-success event-easy-pick-main-btn">Play<span class="fa-solid fa-chevron-down"></span></a>
                                            <div class="lottery_sel_dropdown">
                                                <div class="offers">
                                                    <p><a href="/en/play-lottery/cash-for-life/?from=circular&easy_pick=1&extra_jackpot=" class="event-easy-pick-offer">1 line for $ 5.00</a></p>
                                                    <p><a href="/en/play-lottery/cash-for-life/?from=circular&easy_pick=3&extra_jackpot=" class="event-easy-pick-offer">3 lines for $ 14.25</a></p>
                                                </div>
                                                <div class="or">–––––&nbsp;or&nbsp;–––––</div>
                                                <p><a href="/en/play-lottery/cash-for-life/?from=circular&extra_jackpot=" class="lottery_sel_choose">Pick numbers</a></p>
                                                <div class="or light_version_site_hide">–––––––––––––</div>


                                                <p style="margin-top: 5px;"><a href="/en/play-lottery/cash-for-life/?from=index_lotto&system=1&extra_jackpot=" class="lottery_sel_choose game-type-ico lamp opt-system">System</a></p>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div><div class="lottery_slider_item">
                            <div class="lottery_item">
                                <div class="lottery_item_top" style="background-image: url('https://static.cdnland.com/upload/images/bg/es-el-gordo.svg');">
                                    <div class="lottery_item_img"><a href="{{ route('play') }}"><img src="https://static.cdnland.com/upload/images/logo/svg/el_gordo.svg" alt="El Gordo de la Primitiva"/></a></div>
                                    <div class="lottery_item_val"><span class="jack"><b>€ 5+</b><br/><span class="mln_icon_extra text-nowrap">Million </span></span></div>
                                </div>
                                <div class="lottery_item_cont">
                                    <a href="#windowAlert" class="ratestars fancybox" onclick="yaGoals('CLEVER');" data-title="Today&#039;s Top-Rated Lotteries" data-text="&lt;p&gt;We analyze dozens of parameters daily: Jackpot amount and tax deductions, winning odds and the number of prize divisions, cost of a single line, and availability of such options as &quot;Multiplier,&quot; and much more to offer you the best possible lottery at the moment!&lt;/p&gt;&lt;p&gt;Choose a lottery with the highest score to win more and spend less!&lt;/p&gt;" data-toggle="tooltip" data-placement="bottom" title="Lottery rating from 1 to 10">
                                        <span class="fa fa-star"></span>
                                        <span class="ratestars_val">6.6</span>
                                    </a>
                                    <div class="time ">
                                        <span class="icon-clock"></span>
                                        <div class="time_val " date-close="580572">6&nbsp;days</div>
                                    </div>

                                    <div class="lottery_sel">

                                        <div class="event-easy-pick-cont">
                                            <select name="easy_pick" class="lottery_sel_select event-easy-pick-select">
                                                <option></option>
                                                <option value="/en/play-lottery/el-gordo/?from=circular&easy_pick=2&extra_jackpot=" data-event-easy-pick="1">2 lines for $ 9.68</option>
                                                <option value="/en/play-lottery/el-gordo/?from=circular&easy_pick=3&extra_jackpot=" data-event-easy-pick="1">3 lines for $ 13.50</option>
                                                <option value="" disabled>–––––&nbsp;or&nbsp;–––––</option>
                                                <option value="{{ route('play') }}">Pick numbers</option>
                                                <option class="light_version_site_hide" value="" disabled>––––––––––––</option>
                                                <option class="opt-syndicate" value="{{ route('play') }}">Syndicate &#128293;</option>
                                                <option class="opt-system" value="{{ route('play') }}">System &#128200;</option>
                                            </select>
                                            <a href="{{ route('play') }}" class="btn btn-success event-easy-pick-main-btn">Play<span class="fa-solid fa-chevron-down"></span></a>
                                            <div class="lottery_sel_dropdown">
                                                <div class="offers">
                                                    <p><a href="/en/play-lottery/el-gordo/?from=circular&easy_pick=2&extra_jackpot=" class="event-easy-pick-offer">2 lines for $ 9.68</a></p>
                                                    <p><a href="/en/play-lottery/el-gordo/?from=circular&easy_pick=3&extra_jackpot=" class="event-easy-pick-offer">3 lines for $ 13.50</a></p>
                                                </div>
                                                <div class="or">–––––&nbsp;or&nbsp;–––––</div>
                                                <p><a href="{{ route('play') }}" class="lottery_sel_choose">Pick numbers</a></p>
                                                <div class="or light_version_site_hide">–––––––––––––</div>

                                                <p><a href="{{ route('play') }}" class="lottery_sel_choose game-type-ico fire opt-syndicate">Syndicate</a></p>


                                                <p style="margin-top: 5px;"><a href="{{ route('play') }}" class="lottery_sel_choose game-type-ico lamp opt-system">System</a></p>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="lottery_slider_item">
                            <div class="lottery_item">
                                <div class="lottery_item_top" style="background-image: url('https://static.cdnland.com/upload/images/bg/pl-poland-lotto.svg');">
                                    <div class="lottery_item_img"><a href="{{ route('play') }}"><img src="https://static.cdnland.com/upload/images/logo/svg/lotto_pl.svg" alt="Poland Lotto"/></a></div>
                                    <div class="lottery_item_val"><span class="jack"><b>zł 18</b><br/><span class="mln_icon_extra text-nowrap">Million </span></span></div>
                                </div>
                                <div class="lottery_item_cont">
                                    <a href="#windowAlert" class="ratestars fancybox" onclick="yaGoals('CLEVER');" data-title="Today&#039;s Top-Rated Lotteries" data-text="&lt;p&gt;We analyze dozens of parameters daily: Jackpot amount and tax deductions, winning odds and the number of prize divisions, cost of a single line, and availability of such options as &quot;Multiplier,&quot; and much more to offer you the best possible lottery at the moment!&lt;/p&gt;&lt;p&gt;Choose a lottery with the highest score to win more and spend less!&lt;/p&gt;" data-toggle="tooltip" data-placement="bottom" title="Lottery rating from 1 to 10">
                                        <span class="fa fa-star"></span>
                                        <span class="ratestars_val">6.6</span>
                                    </a>
                                    <div class="time ">
                                        <span class="icon-clock"></span>
                                        <div class="time_val " date-close="4572">1&nbsp;hour</div>
                                    </div>

                                    <div class="lottery_sel">

                                        <div class="event-easy-pick-cont">
                                            <select name="easy_pick" class="lottery_sel_select event-easy-pick-select">
                                                <option></option>
                                                <option value="{{ route('play') }}" data-event-easy-pick="1">3 lines for $ 5.22</option>
                                                <option value="{{ route('play') }}" data-event-easy-pick="1">5 lines for $ 8.09</option>
                                                <option value="" disabled>–––––&nbsp;or&nbsp;–––––</option>
                                                <option value="{{ route('play') }}">Pick numbers</option>
                                                <option class="light_version_site_hide" value="" disabled>––––––––––––</option>

                                                <option class="opt-system" value="{{ route('play') }}">System &#128200;</option>
                                            </select>
                                            <a href="{{ route('play') }}" class="btn btn-success event-easy-pick-main-btn">Play<span class="fa-solid fa-chevron-down"></span></a>
                                            <div class="lottery_sel_dropdown">
                                                <div class="offers">
                                                    <p><a href="{{ route('play') }}" class="event-easy-pick-offer">3 lines for $ 5.22</a></p>
                                                    <p><a href="{{ route('play') }}" class="event-easy-pick-offer">5 lines for $ 8.09</a></p>
                                                </div>
                                                <div class="or">–––––&nbsp;or&nbsp;–––––</div>
                                                <p><a href="{{ route('play') }}" class="lottery_sel_choose">Pick numbers</a></p>
                                                <div class="or light_version_site_hide">–––––––––––––</div>


                                                <p style="margin-top: 5px;"><a href="{{ route('play') }}" class="lottery_sel_choose game-type-ico lamp opt-system">System</a></p>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="lottery_slider_item">
                            <div class="lottery_item">
                                <div class="lottery_item_top" style="background-image: url('https://static.cdnland.com/upload/images/bg/ca-649-lotto.svg');">
                                    <div class="lottery_item_img"><a href="{{ route('play') }}"><img src="https://static.cdnland.com/upload/images/logo/svg/649_lotto.svg" alt="Lotto 6/49"/></a></div>
                                    <div class="lottery_item_val"><span class="jack"><b>C$ 5</b><br/><span class="mln_icon_extra text-nowrap">Million </span></span></div>
                                </div>
                                <div class="lottery_item_cont">
                                    <a href="#windowAlert" class="ratestars fancybox" onclick="yaGoals('CLEVER');" data-title="Today&#039;s Top-Rated Lotteries" data-text="&lt;p&gt;We analyze dozens of parameters daily: Jackpot amount and tax deductions, winning odds and the number of prize divisions, cost of a single line, and availability of such options as &quot;Multiplier,&quot; and much more to offer you the best possible lottery at the moment!&lt;/p&gt;&lt;p&gt;Choose a lottery with the highest score to win more and spend less!&lt;/p&gt;" data-toggle="tooltip" data-placement="bottom" title="Lottery rating from 1 to 10">
                                        <span class="fa fa-star"></span>
                                        <span class="ratestars_val">7.4</span>
                                    </a>
                                    <div class="time ">
                                        <span class="icon-clock"></span>
                                        <div class="time_val " date-close="22572">6&nbsp;hours</div>
                                    </div>

                                    <div class="lottery_sel">

                                        <div class="event-easy-pick-cont">
                                            <select name="easy_pick" class="lottery_sel_select event-easy-pick-select">
                                                <option></option>
                                                <option value="{{ route('play') }}" data-event-easy-pick="1">1 line for $ 5.91</option>
                                                <option value="{{ route('play') }}" data-event-easy-pick="1">3 lines for $ 16.67</option>
                                                <option value="" disabled>–––––&nbsp;or&nbsp;–––––</option>
                                                <option value="{{ route('play') }}">Pick numbers</option>
                                                <option class="light_version_site_hide" value="" disabled>––––––––––––</option>

                                                <option class="opt-system" value="{{ route('play') }}">System &#128200;</option>
                                            </select>
                                            <a href="{{ route('play') }}" class="btn btn-success event-easy-pick-main-btn">Play<span class="fa-solid fa-chevron-down"></span></a>
                                            <div class="lottery_sel_dropdown">
                                                <div class="offers">
                                                    <p><a href="{{ route('play') }}" class="event-easy-pick-offer">1 line for $ 5.91</a></p>
                                                    <p><a href="{{ route('play') }}" class="event-easy-pick-offer">3 lines for $ 16.67</a></p>
                                                </div>
                                                <div class="or">–––––&nbsp;or&nbsp;–––––</div>
                                                <p><a href="{{ route('play') }}" class="lottery_sel_choose">Pick numbers</a></p>
                                                <div class="or light_version_site_hide">–––––––––––––</div>


                                                <p style="margin-top: 5px;"><a href="{{ route('play') }}" class="lottery_sel_choose game-type-ico lamp opt-system">System</a></p>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="lottery_slider_item">
                            <div class="lottery_item">
                                <div class="lottery_item_top" style="background-image: url('https://static.cdnland.com/upload/images/bg/au-saturday-lotto.svg');">
                                    <div class="lottery_item_img"><a href="{{ route('play') }}"><img src="https://static.cdnland.com/upload/images/logo/svg/saturday_lotto.svg" alt="Saturday Lotto"/></a></div>
                                    <div class="lottery_item_val"><span class="jack"><b>A$ 5</b><br/><span class="mln_icon_extra text-nowrap">Million </span></span></div>
                                </div>
                                <div class="lottery_item_cont">
                                    <a href="#windowAlert" class="ratestars fancybox" onclick="yaGoals('CLEVER');" data-title="Today&#039;s Top-Rated Lotteries" data-text="&lt;p&gt;We analyze dozens of parameters daily: Jackpot amount and tax deductions, winning odds and the number of prize divisions, cost of a single line, and availability of such options as &quot;Multiplier,&quot; and much more to offer you the best possible lottery at the moment!&lt;/p&gt;&lt;p&gt;Choose a lottery with the highest score to win more and spend less!&lt;/p&gt;" data-toggle="tooltip" data-placement="bottom" title="Lottery rating from 1 to 10">
                                        <span class="fa fa-star"></span>
                                        <span class="ratestars_val">7.3</span>
                                    </a>
                                    <div class="time ">
                                        <span class="icon-clock"></span>
                                        <div class="time_val " date-close="569772">6&nbsp;days</div>
                                    </div>

                                    <div class="lottery_sel">

                                        <div class="event-easy-pick-cont">
                                            <select name="easy_pick" class="lottery_sel_select event-easy-pick-select">
                                                <option></option>
                                                <option value="{{ route('play') }}" data-event-easy-pick="1">6 lines for $ 8.82</option>
                                                <option value="{{ route('play') }}" data-event-easy-pick="1">10 lines for $ 13.38</option>
                                                <option value="" disabled>–––––&nbsp;or&nbsp;–––––</option>
                                                <option value="{{ route('play') }}">Pick numbers</option>
                                                <option class="light_version_site_hide" value="" disabled>––––––––––––</option>
                                                <option class="opt-syndicate" value="{{ route('play') }}">Syndicate &#128293;</option>
                                                <option class="opt-system" value="{{ route('play') }}">System &#128200;</option>
                                            </select>
                                            <a href="{{ route('play') }}" class="btn btn-success event-easy-pick-main-btn">Play<span class="fa-solid fa-chevron-down"></span></a>
                                            <div class="lottery_sel_dropdown">
                                                <div class="offers">
                                                    <p><a href="{{ route('play') }}" class="event-easy-pick-offer">6 lines for $ 8.82</a></p>
                                                    <p><a href="{{ route('play') }}" class="event-easy-pick-offer">10 lines for $ 13.38</a></p>
                                                </div>
                                                <div class="or">–––––&nbsp;or&nbsp;–––––</div>
                                                <p><a href="{{ route('play') }}" class="lottery_sel_choose">Pick numbers</a></p>
                                                <div class="or light_version_site_hide">–––––––––––––</div>

                                                <p><a href="{{ route('play') }}" class="lottery_sel_choose game-type-ico fire opt-syndicate">Syndicate</a></p>


                                                <p style="margin-top: 5px;"><a href="{{ route('play') }}" class="lottery_sel_choose game-type-ico lamp opt-system">System</a></p>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="lottery_slider_item">
                            <div class="lottery_item">
                                <div class="lottery_item_top" style="background-image: url('https://static.cdnland.com/upload/images/bg/au-set_for_life.svg');">
                                    <div class="lottery_item_img"><a href="{{ route('play') }}"><img src="https://static.cdnland.com/upload/images/logo/svg/set_for_life.svg" alt="Set for Life (AU)"/></a></div>
                                    <div class="lottery_item_val"><span class="jack"><b>A$ 4.8</b><br/><span class="mln_icon_extra text-nowrap">Million </span></span></div>
                                </div>
                                <div class="lottery_item_cont">
                                    <a href="#windowAlert" class="ratestars fancybox" onclick="yaGoals('CLEVER');" data-title="Today&#039;s Top-Rated Lotteries" data-text="&lt;p&gt;We analyze dozens of parameters daily: Jackpot amount and tax deductions, winning odds and the number of prize divisions, cost of a single line, and availability of such options as &quot;Multiplier,&quot; and much more to offer you the best possible lottery at the moment!&lt;/p&gt;&lt;p&gt;Choose a lottery with the highest score to win more and spend less!&lt;/p&gt;" data-toggle="tooltip" data-placement="bottom" title="Lottery rating from 1 to 10">
                                        <span class="fa fa-star"></span>
                                        <span class="ratestars_val">7.5</span>
                                    </a>
                                    <div class="time ">
                                        <span class="icon-clock"></span>
                                        <div class="time_val " date-close="54972">15&nbsp;hours</div>
                                    </div>

                                    <div class="lottery_sel">

                                        <div class="event-easy-pick-cont">
                                            <select name="easy_pick" class="lottery_sel_select event-easy-pick-select">
                                                <option></option>
                                                <option value="{{ route('play') }}" data-event-easy-pick="1">7 lines for $ 7.49</option>
                                                <option value="{{ route('play') }}" data-event-easy-pick="1">14 lines for $ 14.23</option>
                                                <option value="" disabled>–––––&nbsp;or&nbsp;–––––</option>
                                                <option value="{{ route('play') }}">Pick numbers</option>
                                                <option class="light_version_site_hide" value="" disabled>––––––––––––</option>

                                                <option class="opt-system" value="{{ route('play') }}">System &#128200;</option>
                                            </select>
                                            <a href="{{ route('play') }}" class="btn btn-success event-easy-pick-main-btn">Play<span class="fa-solid fa-chevron-down"></span></a>
                                            <div class="lottery_sel_dropdown">
                                                <div class="offers">
                                                    <p><a href="{{ route('play') }}" class="event-easy-pick-offer">7 lines for $ 7.49</a></p>
                                                    <p><a href="{{ route('play') }}" class="event-easy-pick-offer">14 lines for $ 14.23</a></p>
                                                </div>
                                                <div class="or">–––––&nbsp;or&nbsp;–––––</div>
                                                <p><a href="{{ route('play') }}" class="lottery_sel_choose">Pick numbers</a></p>
                                                <div class="or light_version_site_hide">–––––––––––––</div>


                                                <p style="margin-top: 5px;"><a href="{{ route('play') }}" class="lottery_sel_choose game-type-ico lamp opt-system">System</a></p>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div><div class="lottery_slider_item">
                            <div class="lottery_item">
                                <div class="lottery_item_top" style="background-image: url('https://static.cdnland.com/upload/images/bg/uk-lotto.svg');">
                                    <div class="lottery_item_img"><a href="{{ route('play') }}"><img src="https://static.cdnland.com/upload/images/logo/svg/uk_lotto.svg" alt="UK Lotto"/></a></div>
                                    <div class="lottery_item_val"><span class="jack"><b>£ 2.5+</b><br/><span class="mln_icon_extra text-nowrap">Million </span></span></div>
                                </div>
                                <div class="lottery_item_cont">
                                    <a href="#windowAlert" class="ratestars fancybox" onclick="yaGoals('CLEVER');" data-title="Today&#039;s Top-Rated Lotteries" data-text="&lt;p&gt;We analyze dozens of parameters daily: Jackpot amount and tax deductions, winning odds and the number of prize divisions, cost of a single line, and availability of such options as &quot;Multiplier,&quot; and much more to offer you the best possible lottery at the moment!&lt;/p&gt;&lt;p&gt;Choose a lottery with the highest score to win more and spend less!&lt;/p&gt;" data-toggle="tooltip" data-placement="bottom" title="Lottery rating from 1 to 10">
                                        <span class="fa fa-star"></span>
                                        <span class="ratestars_val">7.3</span>
                                    </a>
                                    <div class="time ">
                                        <span class="icon-clock"></span>
                                        <div class="time_val " date-close="339372">3&nbsp;days</div>
                                    </div>

                                    <div class="lottery_sel">

                                        <div class="event-easy-pick-cont">
                                            <select name="easy_pick" class="lottery_sel_select event-easy-pick-select">
                                                <option></option>
                                                <option value="{{ route('play') }}" data-event-easy-pick="1">1 line for $ 7.41</option>
                                                <option value="{{ route('play') }}" data-event-easy-pick="1">3 lines for $ 21.12</option>
                                                <option value="" disabled>–––––&nbsp;or&nbsp;–––––</option>
                                                <option value="{{ route('play') }}">Pick numbers</option>
                                                <option class="light_version_site_hide" value="" disabled>––––––––––––</option>

                                                <option class="opt-system" value="{{ route('play') }}">System &#128200;</option>
                                            </select>
                                            <a href="{{ route('play') }}" class="btn btn-success event-easy-pick-main-btn">Play<span class="fa-solid fa-chevron-down"></span></a>
                                            <div class="lottery_sel_dropdown">
                                                <div class="offers">
                                                    <p><a href="{{ route('play') }}" class="event-easy-pick-offer">1 line for $ 7.41</a></p>
                                                    <p><a href="{{ route('play') }}" class="event-easy-pick-offer">3 lines for $ 21.12</a></p>
                                                </div>
                                                <div class="or">–––––&nbsp;or&nbsp;–––––</div>
                                                <p><a href="{{ route('play') }}" class="lottery_sel_choose">Pick numbers</a></p>
                                                <div class="or light_version_site_hide">–––––––––––––</div>


                                                <p style="margin-top: 5px;"><a href="{{ route('play') }}" class="lottery_sel_choose game-type-ico lamp opt-system">System</a></p>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div><div class="lottery_slider_item">
                            <div class="lottery_item">
                                <div class="lottery_item_top" style="background-image: url('https://static.cdnland.com/upload/images/bg/es-la-primitiva.svg');">
                                    <div class="lottery_item_img"><a href="/en/play-lottery/la-primitiva/?from=circular&extra_jackpot="><img src="https://static.cdnland.com/upload/images/logo/svg/la_primitiva.svg" alt="La Primitiva"/></a></div>
                                    <div class="lottery_item_val"><span class="jack"><b>€ 2+</b><br/><span class="mln_icon_extra text-nowrap">Million </span></span></div>
                                </div>
                                <div class="lottery_item_cont">
                                    <a href="#windowAlert" class="ratestars fancybox" onclick="yaGoals('CLEVER');" data-title="Today&#039;s Top-Rated Lotteries" data-text="&lt;p&gt;We analyze dozens of parameters daily: Jackpot amount and tax deductions, winning odds and the number of prize divisions, cost of a single line, and availability of such options as &quot;Multiplier,&quot; and much more to offer you the best possible lottery at the moment!&lt;/p&gt;&lt;p&gt;Choose a lottery with the highest score to win more and spend less!&lt;/p&gt;" data-toggle="tooltip" data-placement="bottom" title="Lottery rating from 1 to 10">
                                        <span class="fa fa-star"></span>
                                        <span class="ratestars_val">6.4</span>
                                    </a>
                                    <div class="time ">
                                        <span class="icon-clock"></span>
                                        <div class="time_val " date-close="166572">1&nbsp;day</div>
                                    </div>

                                    <div class="lottery_sel">

                                        <div class="event-easy-pick-cont">
                                            <select name="easy_pick" class="lottery_sel_select event-easy-pick-select">
                                                <option></option>
                                                <option value="/en/play-lottery/la-primitiva/?from=circular&easy_pick=1&extra_jackpot=" data-event-easy-pick="1">1 line for $ 3.04</option>
                                                <option value="/en/play-lottery/la-primitiva/?from=circular&easy_pick=4&extra_jackpot=" data-event-easy-pick="1">4 lines for $ 10.94</option>
                                                <option value="" disabled>–––––&nbsp;or&nbsp;–––––</option>
                                                <option value="/en/play-lottery/la-primitiva/?from=circular&extra_jackpot=">Pick numbers</option>
                                                <option class="light_version_site_hide" value="" disabled>––––––––––––</option>
                                                <option class="opt-syndicate" value="/en/play-lottery/la-primitiva/?from=index_lotto&syndicates=1&extra_jackpot=">Syndicate &#128293;</option>
                                                <option class="opt-system" value="/en/play-lottery/la-primitiva/?from=index_lotto&system=1&extra_jackpot=">System &#128200;</option>
                                            </select>
                                            <a href="/en/play-lottery/la-primitiva/?from=circular&extra_jackpot=" class="btn btn-success event-easy-pick-main-btn">Play<span class="fa-solid fa-chevron-down"></span></a>
                                            <div class="lottery_sel_dropdown">
                                                <div class="offers">
                                                    <p><a href="/en/play-lottery/la-primitiva/?from=circular&easy_pick=1&extra_jackpot=" class="event-easy-pick-offer">1 line for $ 3.04</a></p>
                                                    <p><a href="/en/play-lottery/la-primitiva/?from=circular&easy_pick=4&extra_jackpot=" class="event-easy-pick-offer">4 lines for $ 10.94</a></p>
                                                </div>
                                                <div class="or">–––––&nbsp;or&nbsp;–––––</div>
                                                <p><a href="/en/play-lottery/la-primitiva/?from=circular&extra_jackpot=" class="lottery_sel_choose">Pick numbers</a></p>
                                                <div class="or light_version_site_hide">–––––––––––––</div>

                                                <p><a href="/en/play-lottery/la-primitiva/?from=index_lotto&syndicates=1&extra_jackpot=" class="lottery_sel_choose game-type-ico fire opt-syndicate">Syndicate</a></p>


                                                <p style="margin-top: 5px;"><a href="/en/play-lottery/la-primitiva/?from=index_lotto&system=1&extra_jackpot=" class="lottery_sel_choose game-type-ico lamp opt-system">System</a></p>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div><div class="lottery_slider_item">
                            <div class="lottery_item">
                                <div class="lottery_item_top" style="background-image: url('https://static.cdnland.com/upload/images/bg/ie-lotto-ireland.svg');">
                                    <div class="lottery_item_img"><a href="/en/play-lottery/lotto-ie/?from=circular&extra_jackpot="><img src="https://static.cdnland.com/upload/images/logo/svg/lotto_ireland.svg" alt="Lotto Ireland"/></a></div>
                                    <div class="lottery_item_val"><span class="jack"><b>€ 2+</b><br/><span class="mln_icon_extra text-nowrap">Million </span></span></div>
                                </div>
                                <div class="lottery_item_cont">
                                    <a href="#windowAlert" class="ratestars fancybox" onclick="yaGoals('CLEVER');" data-title="Today&#039;s Top-Rated Lotteries" data-text="&lt;p&gt;We analyze dozens of parameters daily: Jackpot amount and tax deductions, winning odds and the number of prize divisions, cost of a single line, and availability of such options as &quot;Multiplier,&quot; and much more to offer you the best possible lottery at the moment!&lt;/p&gt;&lt;p&gt;Choose a lottery with the highest score to win more and spend less!&lt;/p&gt;" data-toggle="tooltip" data-placement="bottom" title="Lottery rating from 1 to 10">
                                        <span class="fa fa-star"></span>
                                        <span class="ratestars_val">7.5</span>
                                    </a>
                                    <div class="time ">
                                        <span class="icon-clock"></span>
                                        <div class="time_val " date-close="342972">3&nbsp;days</div>
                                    </div>

                                    <div class="lottery_sel">

                                        <div class="event-easy-pick-cont">
                                            <select name="easy_pick" class="lottery_sel_select event-easy-pick-select">
                                                <option></option>
                                                <option value="/en/play-lottery/lotto-ie/?from=circular&easy_pick=2&extra_jackpot=" data-event-easy-pick="1">2 lines for $ 10.88</option>
                                                <option value="/en/play-lottery/lotto-ie/?from=circular&easy_pick=4&extra_jackpot=" data-event-easy-pick="1">4 lines for $ 21.11</option>
                                                <option value="" disabled>–––––&nbsp;or&nbsp;–––––</option>
                                                <option value="/en/play-lottery/lotto-ie/?from=circular&extra_jackpot=">Pick numbers</option>
                                                <option class="light_version_site_hide" value="" disabled>––––––––––––</option>

                                                <option class="opt-system" value="/en/play-lottery/lotto-ie/?from=index_lotto&system=1&extra_jackpot=">System &#128200;</option>
                                            </select>
                                            <a href="/en/play-lottery/lotto-ie/?from=circular&extra_jackpot=" class="btn btn-success event-easy-pick-main-btn">Play<span class="fa-solid fa-chevron-down"></span></a>
                                            <div class="lottery_sel_dropdown">
                                                <div class="offers">
                                                    <p><a href="/en/play-lottery/lotto-ie/?from=circular&easy_pick=2&extra_jackpot=" class="event-easy-pick-offer">2 lines for $ 10.88</a></p>
                                                    <p><a href="/en/play-lottery/lotto-ie/?from=circular&easy_pick=4&extra_jackpot=" class="event-easy-pick-offer">4 lines for $ 21.11</a></p>
                                                </div>
                                                <div class="or">–––––&nbsp;or&nbsp;–––––</div>
                                                <p><a href="/en/play-lottery/lotto-ie/?from=circular&extra_jackpot=" class="lottery_sel_choose">Pick numbers</a></p>
                                                <div class="or light_version_site_hide">–––––––––––––</div>


                                                <p style="margin-top: 5px;"><a href="/en/play-lottery/lotto-ie/?from=index_lotto&system=1&extra_jackpot=" class="lottery_sel_choose game-type-ico lamp opt-system">System</a></p>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div><div class="lottery_slider_item">
                            <div class="lottery_item">
                                <div class="lottery_item_top" style="background-image: url('https://static.cdnland.com/upload/images/bg/fr-france-lotto.svg');">
                                    <div class="lottery_item_img"><a href="/en/play-lottery/france-loto/?from=circular&extra_jackpot="><img src="https://static.cdnland.com/upload/images/logo/svg/france-lotto.svg" alt="France Loto"/></a></div>
                                    <div class="lottery_item_val"><span class="jack"><b>€ 2+</b><br/><span class="mln_icon_extra text-nowrap">Million </span></span></div>
                                </div>
                                <div class="lottery_item_cont">
                                    <a href="#windowAlert" class="ratestars fancybox" onclick="yaGoals('CLEVER');" data-title="Today&#039;s Top-Rated Lotteries" data-text="&lt;p&gt;We analyze dozens of parameters daily: Jackpot amount and tax deductions, winning odds and the number of prize divisions, cost of a single line, and availability of such options as &quot;Multiplier,&quot; and much more to offer you the best possible lottery at the moment!&lt;/p&gt;&lt;p&gt;Choose a lottery with the highest score to win more and spend less!&lt;/p&gt;" data-toggle="tooltip" data-placement="bottom" title="Lottery rating from 1 to 10">
                                        <span class="fa fa-star"></span>
                                        <span class="ratestars_val">7.1</span>
                                    </a>
                                    <div class="time ">
                                        <span class="icon-clock"></span>
                                        <div class="time_val " date-close="159372">1&nbsp;day</div>
                                    </div>

                                    <div class="lottery_sel">

                                        <div class="event-easy-pick-cont">
                                            <select name="easy_pick" class="lottery_sel_select event-easy-pick-select">
                                                <option></option>
                                                <option value="/en/play-lottery/france-loto/?from=circular&easy_pick=1&extra_jackpot=" data-event-easy-pick="1">1 line for $ 6.20</option>
                                                <option value="/en/play-lottery/france-loto/?from=circular&easy_pick=3&extra_jackpot=" data-event-easy-pick="1">3 lines for $ 17.67</option>
                                                <option value="" disabled>–––––&nbsp;or&nbsp;–––––</option>
                                                <option value="/en/play-lottery/france-loto/?from=circular&extra_jackpot=">Pick numbers</option>
                                                <option class="light_version_site_hide" value="" disabled>––––––––––––</option>

                                                <option class="opt-system" value="/en/play-lottery/france-loto/?from=index_lotto&system=1&extra_jackpot=">System &#128200;</option>
                                            </select>
                                            <a href="/en/play-lottery/france-loto/?from=circular&extra_jackpot=" class="btn btn-success event-easy-pick-main-btn">Play<span class="fa-solid fa-chevron-down"></span></a>
                                            <div class="lottery_sel_dropdown">
                                                <div class="offers">
                                                    <p><a href="/en/play-lottery/france-loto/?from=circular&easy_pick=1&extra_jackpot=" class="event-easy-pick-offer">1 line for $ 6.20</a></p>
                                                    <p><a href="/en/play-lottery/france-loto/?from=circular&easy_pick=3&extra_jackpot=" class="event-easy-pick-offer">3 lines for $ 17.67</a></p>
                                                </div>
                                                <div class="or">–––––&nbsp;or&nbsp;–––––</div>
                                                <p><a href="/en/play-lottery/france-loto/?from=circular&extra_jackpot=" class="lottery_sel_choose">Pick numbers</a></p>
                                                <div class="or light_version_site_hide">–––––––––––––</div>


                                                <p style="margin-top: 5px;"><a href="/en/play-lottery/france-loto/?from=index_lotto&system=1&extra_jackpot=" class="lottery_sel_choose game-type-ico lamp opt-system">System</a></p>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div><div class="lottery_slider_item">
                            <div class="lottery_item">
                                <div class="lottery_item_top" style="background-image: url('https://static.cdnland.com/upload/images/bg/us-new-york-lotto.svg');">
                                    <div class="lottery_item_img"><a href="/en/play-lottery/new-york-lotto/?from=circular&extra_jackpot="><img src="https://static.cdnland.com/upload/images/logo/svg/new-york.svg" alt="New York Lotto"/></a></div>
                                    <div class="lottery_item_val"><span class="jack"><b>$ 2</b><br/><span class="mln_icon_extra text-nowrap">Million </span></span></div>
                                </div>
                                <div class="lottery_item_cont">
                                    <a href="#windowAlert" class="ratestars fancybox" onclick="yaGoals('CLEVER');" data-title="Today&#039;s Top-Rated Lotteries" data-text="&lt;p&gt;We analyze dozens of parameters daily: Jackpot amount and tax deductions, winning odds and the number of prize divisions, cost of a single line, and availability of such options as &quot;Multiplier,&quot; and much more to offer you the best possible lottery at the moment!&lt;/p&gt;&lt;p&gt;Choose a lottery with the highest score to win more and spend less!&lt;/p&gt;" data-toggle="tooltip" data-placement="bottom" title="Lottery rating from 1 to 10">
                                        <span class="fa fa-star"></span>
                                        <span class="ratestars_val">7.2</span>
                                    </a>
                                    <div class="time ">
                                        <span class="icon-clock"></span>
                                        <div class="time_val " date-close="26172">7&nbsp;hours</div>
                                    </div>

                                    <div class="lottery_sel">

                                        <div class="event-easy-pick-cont">
                                            <select name="easy_pick" class="lottery_sel_select event-easy-pick-select">
                                                <option></option>
                                                <option value="/en/play-lottery/new-york-lotto/?from=circular&easy_pick=2&extra_jackpot=" data-event-easy-pick="1">2 lines for $ 3.00</option>
                                                <option value="/en/play-lottery/new-york-lotto/?from=circular&easy_pick=4&extra_jackpot=" data-event-easy-pick="1">4 lines for $ 5.82</option>
                                                <option value="" disabled>–––––&nbsp;or&nbsp;–––––</option>
                                                <option value="/en/play-lottery/new-york-lotto/?from=circular&extra_jackpot=">Pick numbers</option>
                                                <option class="light_version_site_hide" value="" disabled>––––––––––––</option>

                                                <option class="opt-system" value="/en/play-lottery/new-york-lotto/?from=index_lotto&system=1&extra_jackpot=">System &#128200;</option>
                                            </select>
                                            <a href="/en/play-lottery/new-york-lotto/?from=circular&extra_jackpot=" class="btn btn-success event-easy-pick-main-btn">Play<span class="fa-solid fa-chevron-down"></span></a>
                                            <div class="lottery_sel_dropdown">
                                                <div class="offers">
                                                    <p><a href="/en/play-lottery/new-york-lotto/?from=circular&easy_pick=2&extra_jackpot=" class="event-easy-pick-offer">2 lines for $ 3.00</a></p>
                                                    <p><a href="/en/play-lottery/new-york-lotto/?from=circular&easy_pick=4&extra_jackpot=" class="event-easy-pick-offer">4 lines for $ 5.82</a></p>
                                                </div>
                                                <div class="or">–––––&nbsp;or&nbsp;–––––</div>
                                                <p><a href="/en/play-lottery/new-york-lotto/?from=circular&extra_jackpot=" class="lottery_sel_choose">Pick numbers</a></p>
                                                <div class="or light_version_site_hide">–––––––––––––</div>


                                                <p style="margin-top: 5px;"><a href="/en/play-lottery/new-york-lotto/?from=index_lotto&system=1&extra_jackpot=" class="lottery_sel_choose game-type-ico lamp opt-system">System</a></p>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div><div class="lottery_slider_item">
                            <div class="lottery_item">
                                <div class="lottery_item_top" style="background-image: url('https://static.cdnland.com/upload/images/bg/mx-melate.svg');">
                                    <div class="lottery_item_img"><a href="{{ route('play') }}"><img src="https://static.cdnland.com/upload/images/logo/svg/melate_logo.svg" alt="Mexico Melate"/></a></div>
                                    <div class="lottery_item_val"><span class="jack"><b>M$ 30.1</b><br/><span class="mln_icon_extra text-nowrap">Million </span></span></div>
                                </div>
                                <div class="lottery_item_cont">
                                    <a href="#windowAlert" class="ratestars fancybox" onclick="yaGoals('CLEVER');" data-title="Today&#039;s Top-Rated Lotteries" data-text="&lt;p&gt;We analyze dozens of parameters daily: Jackpot amount and tax deductions, winning odds and the number of prize divisions, cost of a single line, and availability of such options as &quot;Multiplier,&quot; and much more to offer you the best possible lottery at the moment!&lt;/p&gt;&lt;p&gt;Choose a lottery with the highest score to win more and spend less!&lt;/p&gt;" data-toggle="tooltip" data-placement="bottom" title="Lottery rating from 1 to 10">
                                        <span class="fa fa-star"></span>
                                        <span class="ratestars_val">7.5</span>
                                    </a>
                                    <div class="time ">
                                        <span class="icon-clock"></span>
                                        <div class="time_val " date-close="108972">1&nbsp;day</div>
                                    </div>

                                    <div class="lottery_sel">

                                        <div class="event-easy-pick-cont">
                                            <select name="easy_pick" class="lottery_sel_select event-easy-pick-select">
                                                <option></option>
                                                <option value="{{ route('play') }}" data-event-easy-pick="1">5 lines for $ 10.40</option>
                                                <option value="{{ route('play') }}" data-event-easy-pick="1">10 lines for $ 19.76</option>
                                                <option value="" disabled>–––––&nbsp;or&nbsp;–––––</option>
                                                <option value="{{ route('play') }}">Pick numbers</option>
                                                <option class="light_version_site_hide" value="" disabled>––––––––––––</option>

                                                <option class="opt-system" value="{{ route('play') }}">System &#128200;</option>
                                            </select>
                                            <a href="{{ route('play') }}" class="btn btn-success event-easy-pick-main-btn">Play<span class="fa-solid fa-chevron-down"></span></a>
                                            <div class="lottery_sel_dropdown">
                                                <div class="offers">
                                                    <p><a href="{{ route('play') }}" class="event-easy-pick-offer">5 lines for $ 10.40</a></p>
                                                    <p><a href="{{ route('play') }}" class="event-easy-pick-offer">10 lines for $ 19.76</a></p>
                                                </div>
                                                <div class="or">–––––&nbsp;or&nbsp;–––––</div>
                                                <p><a href="{{ route('play') }}" class="lottery_sel_choose">Pick numbers</a></p>
                                                <div class="or light_version_site_hide">–––––––––––––</div>


                                                <p style="margin-top: 5px;"><a href="{{ route('play') }}" class="lottery_sel_choose game-type-ico lamp opt-system">System</a></p>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div><div class="lottery_slider_item">
                            <div class="lottery_item">
                                <div class="lottery_item_top" style="background-image: url('https://static.cdnland.com/upload/images/bg/at-austria_lotto.svg');">
                                    <div class="lottery_item_img"><a href="/en/play-lottery/lotto-austria/?from=circular&extra_jackpot="><img src="https://static.cdnland.com/upload/images/logo/svg/austria_lotto.svg" alt="Lotto Austria"/></a></div>
                                    <div class="lottery_item_val"><span class="jack"><b>€ 1.4</b><br/><span class="mln_icon_extra text-nowrap">Million </span></span></div>
                                </div>
                                <div class="lottery_item_cont">
                                    <a href="#windowAlert" class="ratestars fancybox" onclick="yaGoals('CLEVER');" data-title="Today&#039;s Top-Rated Lotteries" data-text="&lt;p&gt;We analyze dozens of parameters daily: Jackpot amount and tax deductions, winning odds and the number of prize divisions, cost of a single line, and availability of such options as &quot;Multiplier,&quot; and much more to offer you the best possible lottery at the moment!&lt;/p&gt;&lt;p&gt;Choose a lottery with the highest score to win more and spend less!&lt;/p&gt;" data-toggle="tooltip" data-placement="bottom" title="Lottery rating from 1 to 10">
                                        <span class="fa fa-star"></span>
                                        <span class="ratestars_val">7.6</span>
                                    </a>
                                    <div class="time ">
                                        <span class="icon-clock"></span>
                                        <div class="time_val " date-close="76572">21&nbsp;hour</div>
                                    </div>

                                    <div class="lottery_sel">

                                        <div class="event-easy-pick-cont">
                                            <select name="easy_pick" class="lottery_sel_select event-easy-pick-select">
                                                <option></option>
                                                <option value="/en/play-lottery/lotto-austria/?from=circular&easy_pick=1&extra_jackpot=" data-event-easy-pick="1">1 line for $ 3.80</option>
                                                <option value="/en/play-lottery/lotto-austria/?from=circular&easy_pick=3&extra_jackpot=" data-event-easy-pick="1">3 lines for $ 11.06</option>
                                                <option value="" disabled>–––––&nbsp;or&nbsp;–––––</option>
                                                <option value="/en/play-lottery/lotto-austria/?from=circular&extra_jackpot=">Pick numbers</option>
                                                <option class="light_version_site_hide" value="" disabled>––––––––––––</option>
                                                <option class="opt-syndicate" value="/en/play-lottery/lotto-austria/?from=index_lotto&syndicates=1&extra_jackpot=">Syndicate &#128293;</option>
                                                <option class="opt-system" value="/en/play-lottery/lotto-austria/?from=index_lotto&system=1&extra_jackpot=">System &#128200;</option>
                                            </select>
                                            <a href="/en/play-lottery/lotto-austria/?from=circular&extra_jackpot=" class="btn btn-success event-easy-pick-main-btn">Play<span class="fa-solid fa-chevron-down"></span></a>
                                            <div class="lottery_sel_dropdown">
                                                <div class="offers">
                                                    <p><a href="/en/play-lottery/lotto-austria/?from=circular&easy_pick=1&extra_jackpot=" class="event-easy-pick-offer">1 line for $ 3.80</a></p>
                                                    <p><a href="/en/play-lottery/lotto-austria/?from=circular&easy_pick=3&extra_jackpot=" class="event-easy-pick-offer">3 lines for $ 11.06</a></p>
                                                </div>
                                                <div class="or">–––––&nbsp;or&nbsp;–––––</div>
                                                <p><a href="/en/play-lottery/lotto-austria/?from=circular&extra_jackpot=" class="lottery_sel_choose">Pick numbers</a></p>
                                                <div class="or light_version_site_hide">–––––––––––––</div>

                                                <p><a href="/en/play-lottery/lotto-austria/?from=index_lotto&syndicates=1&extra_jackpot=" class="lottery_sel_choose game-type-ico fire opt-syndicate">Syndicate</a></p>


                                                <p style="margin-top: 5px;"><a href="/en/play-lottery/lotto-austria/?from=index_lotto&system=1&extra_jackpot=" class="lottery_sel_choose game-type-ico lamp opt-system">System</a></p>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div><div class="lottery_slider_item">
                            <div class="lottery_item">
                                <div class="lottery_item_top" style="background-image: url('https://static.cdnland.com/upload/images/bg/za-powerball.svg');">
                                    <div class="lottery_item_img"><a href="/en/play-lottery/za-powerball/?from=circular&extra_jackpot="><img src="https://static.cdnland.com/upload/images/logo/svg/powerball_za.svg" alt="South Africa Powerball"/></a></div>
                                    <div class="lottery_item_val"><span class="jack"><b>R 26</b><br/><span class="mln_icon_extra text-nowrap">Million </span></span></div>
                                </div>
                                <div class="lottery_item_cont">
                                    <a href="#windowAlert" class="ratestars fancybox" onclick="yaGoals('CLEVER');" data-title="Today&#039;s Top-Rated Lotteries" data-text="&lt;p&gt;We analyze dozens of parameters daily: Jackpot amount and tax deductions, winning odds and the number of prize divisions, cost of a single line, and availability of such options as &quot;Multiplier,&quot; and much more to offer you the best possible lottery at the moment!&lt;/p&gt;&lt;p&gt;Choose a lottery with the highest score to win more and spend less!&lt;/p&gt;" data-toggle="tooltip" data-placement="bottom" title="Lottery rating from 1 to 10">
                                        <span class="fa fa-star"></span>
                                        <span class="ratestars_val">7.0</span>
                                    </a>
                                    <div class="time ">
                                        <span class="icon-clock"></span>
                                        <div class="time_val " date-close="260172">3&nbsp;days</div>
                                    </div>

                                    <div class="lottery_sel">

                                        <div class="event-easy-pick-cont">
                                            <select name="easy_pick" class="lottery_sel_select event-easy-pick-select">
                                                <option></option>
                                                <option value="/en/play-lottery/za-powerball/?from=circular&easy_pick=5&extra_jackpot=" data-event-easy-pick="1">5 lines for $ 4.20</option>
                                                <option value="/en/play-lottery/za-powerball/?from=circular&easy_pick=10&extra_jackpot=" data-event-easy-pick="1">10 lines for $ 7.90</option>
                                                <option value="" disabled>–––––&nbsp;or&nbsp;–––––</option>
                                                <option value="/en/play-lottery/za-powerball/?from=circular&extra_jackpot=">Pick numbers</option>
                                                <option class="light_version_site_hide" value="" disabled>––––––––––––</option>

                                                <option class="opt-system" value="/en/play-lottery/za-powerball/?from=index_lotto&system=1&extra_jackpot=">System &#128200;</option>
                                            </select>
                                            <a href="/en/play-lottery/za-powerball/?from=circular&extra_jackpot=" class="btn btn-success event-easy-pick-main-btn">Play<span class="fa-solid fa-chevron-down"></span></a>
                                            <div class="lottery_sel_dropdown">
                                                <div class="offers">
                                                    <p><a href="/en/play-lottery/za-powerball/?from=circular&easy_pick=5&extra_jackpot=" class="event-easy-pick-offer">5 lines for $ 4.20</a></p>
                                                    <p><a href="/en/play-lottery/za-powerball/?from=circular&easy_pick=10&extra_jackpot=" class="event-easy-pick-offer">10 lines for $ 7.90</a></p>
                                                </div>
                                                <div class="or">–––––&nbsp;or&nbsp;–––––</div>
                                                <p><a href="/en/play-lottery/za-powerball/?from=circular&extra_jackpot=" class="lottery_sel_choose">Pick numbers</a></p>
                                                <div class="or light_version_site_hide">–––––––––––––</div>


                                                <p style="margin-top: 5px;"><a href="/en/play-lottery/za-powerball/?from=index_lotto&system=1&extra_jackpot=" class="lottery_sel_choose game-type-ico lamp opt-system">System</a></p>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div><div class="lottery_slider_item">
                            <div class="lottery_item">
                                <div class="lottery_item_top" style="background-image: url('https://static.cdnland.com/upload/images/bg/it-superenalotto.svg');">
                                    <div class="lottery_item_img"><a href="{{ route('play') }}"><img src="https://static.cdnland.com/upload/images/logo/svg/superenalotto.svg" alt="SuperEnalotto"/></a></div>
                                    <div class="lottery_item_val"><span class="jack"><b>€ 1.3+</b><br/><span class="mln_icon_extra text-nowrap">Million </span></span></div>
                                </div>
                                <div class="lottery_item_cont">
                                    <a href="#windowAlert" class="ratestars fancybox" onclick="yaGoals('CLEVER');" data-title="Today&#039;s Top-Rated Lotteries" data-text="&lt;p&gt;We analyze dozens of parameters daily: Jackpot amount and tax deductions, winning odds and the number of prize divisions, cost of a single line, and availability of such options as &quot;Multiplier,&quot; and much more to offer you the best possible lottery at the moment!&lt;/p&gt;&lt;p&gt;Choose a lottery with the highest score to win more and spend less!&lt;/p&gt;" data-toggle="tooltip" data-placement="bottom" title="Lottery rating from 1 to 10">
                                        <span class="fa fa-star"></span>
                                        <span class="ratestars_val">7.2</span>
                                    </a>
                                    <div class="time ">
                                        <span class="icon-clock"></span>
                                        <div class="time_val " date-close="249372">2&nbsp;days</div>
                                    </div>

                                    <div class="lottery_sel">

                                        <div class="event-easy-pick-cont">
                                            <select name="easy_pick" class="lottery_sel_select event-easy-pick-select">
                                                <option></option>
                                                <option value="{{ route('play') }}" data-event-easy-pick="1">1 line for $ 3.04</option>
                                                <option value="{{ route('play') }}" data-event-easy-pick="1">3 lines for $ 8.85</option>
                                                <option value="" disabled>–––––&nbsp;or&nbsp;–––––</option>
                                                <option value="{{ route('play') }}">Pick numbers</option>
                                                <option class="light_version_site_hide" value="" disabled>––––––––––––</option>
                                                <option class="opt-syndicate" value="{{ route('play') }}">Syndicate &#128293;</option>
                                                <option class="opt-system" value="{{ route('play') }}">System &#128200;</option>
                                            </select>
                                            <a href="{{ route('play') }}" class="btn btn-success event-easy-pick-main-btn">Play<span class="fa-solid fa-chevron-down"></span></a>
                                            <div class="lottery_sel_dropdown">
                                                <div class="offers">
                                                    <p><a href="{{ route('play') }}" class="event-easy-pick-offer">1 line for $ 3.04</a></p>
                                                    <p><a href="{{ route('play') }}" class="event-easy-pick-offer">3 lines for $ 8.85</a></p>
                                                </div>
                                                <div class="or">–––––&nbsp;or&nbsp;–––––</div>
                                                <p><a href="{{ route('play') }}" class="lottery_sel_choose">Pick numbers</a></p>
                                                <div class="or light_version_site_hide">–––––––––––––</div>

                                                <p><a href="{{ route('play') }}" class="lottery_sel_choose game-type-ico fire opt-syndicate">Syndicate</a></p>


                                                <p style="margin-top: 5px;"><a href="{{ route('play') }}" class="lottery_sel_choose game-type-ico lamp opt-system">System</a></p>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div><div class="lottery_slider_item">
                            <div class="lottery_item">
                                <div class="lottery_item_top" style="background-image: url('https://static.cdnland.com/upload/images/bg/de-lotto6-aus-49.svg');">
                                    <div class="lottery_item_img"><a href="/en/play-lottery/lotto-6-aus-49/?from=circular&extra_jackpot="><img src="https://static.cdnland.com/upload/images/logo/svg/lotto_649.svg" alt="Lotto 6 aus 49"/></a></div>
                                    <div class="lottery_item_val"><span class="jack"><b>€ 1+</b><br/><span class="mln_icon_extra text-nowrap">Million </span></span></div>
                                </div>
                                <div class="lottery_item_cont">
                                    <a href="#windowAlert" class="ratestars fancybox" onclick="yaGoals('CLEVER');" data-title="Today&#039;s Top-Rated Lotteries" data-text="&lt;p&gt;We analyze dozens of parameters daily: Jackpot amount and tax deductions, winning odds and the number of prize divisions, cost of a single line, and availability of such options as &quot;Multiplier,&quot; and much more to offer you the best possible lottery at the moment!&lt;/p&gt;&lt;p&gt;Choose a lottery with the highest score to win more and spend less!&lt;/p&gt;" data-toggle="tooltip" data-placement="bottom" title="Lottery rating from 1 to 10">
                                        <span class="fa fa-star"></span>
                                        <span class="ratestars_val">6.5</span>
                                    </a>
                                    <div class="time ">
                                        <span class="icon-clock"></span>
                                        <div class="time_val " date-close="332172">3&nbsp;days</div>
                                    </div>

                                    <div class="lottery_sel">

                                        <div class="event-easy-pick-cont">
                                            <select name="easy_pick" class="lottery_sel_select event-easy-pick-select">
                                                <option></option>
                                                <option value="/en/play-lottery/lotto-6-aus-49/?from=circular&easy_pick=1&extra_jackpot=" data-event-easy-pick="1">1 line for $ 3.80</option>
                                                <option value="/en/play-lottery/lotto-6-aus-49/?from=circular&easy_pick=3&extra_jackpot=" data-event-easy-pick="1">3 lines for $ 10.83</option>
                                                <option value="" disabled>–––––&nbsp;or&nbsp;–––––</option>
                                                <option value="/en/play-lottery/lotto-6-aus-49/?from=circular&extra_jackpot=">Pick numbers</option>
                                                <option class="light_version_site_hide" value="" disabled>––––––––––––</option>
                                                <option class="opt-syndicate" value="/en/play-lottery/lotto-6-aus-49/?from=index_lotto&syndicates=1&extra_jackpot=">Syndicate &#128293;</option>
                                                <option class="opt-system" value="/en/play-lottery/lotto-6-aus-49/?from=index_lotto&system=1&extra_jackpot=">System &#128200;</option>
                                            </select>
                                            <a href="/en/play-lottery/lotto-6-aus-49/?from=circular&extra_jackpot=" class="btn btn-success event-easy-pick-main-btn">Play<span class="fa-solid fa-chevron-down"></span></a>
                                            <div class="lottery_sel_dropdown">
                                                <div class="offers">
                                                    <p><a href="/en/play-lottery/lotto-6-aus-49/?from=circular&easy_pick=1&extra_jackpot=" class="event-easy-pick-offer">1 line for $ 3.80</a></p>
                                                    <p><a href="/en/play-lottery/lotto-6-aus-49/?from=circular&easy_pick=3&extra_jackpot=" class="event-easy-pick-offer">3 lines for $ 10.83</a></p>
                                                </div>
                                                <div class="or">–––––&nbsp;or&nbsp;–––––</div>
                                                <p><a href="/en/play-lottery/lotto-6-aus-49/?from=circular&extra_jackpot=" class="lottery_sel_choose">Pick numbers</a></p>
                                                <div class="or light_version_site_hide">–––––––––––––</div>

                                                <p><a href="/en/play-lottery/lotto-6-aus-49/?from=index_lotto&syndicates=1&extra_jackpot=" class="lottery_sel_choose game-type-ico fire opt-syndicate">Syndicate</a></p>


                                                <p style="margin-top: 5px;"><a href="/en/play-lottery/lotto-6-aus-49/?from=index_lotto&system=1&extra_jackpot=" class="lottery_sel_choose game-type-ico lamp opt-system">System</a></p>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div><div class="lottery_slider_item">
                            <div class="lottery_item">
                                <div class="lottery_item_top" style="background-image: url('https://static.cdnland.com/upload/images/bg/ir-daily_million.svg');">
                                    <div class="lottery_item_img"><a href="{{ route('play') }}"><img src="https://static.cdnland.com/upload/images/logo/svg/daily_million.svg" alt="Daily Million"/></a></div>
                                    <div class="lottery_item_val"><span class="jack"><b>€ 1</b><br/><span class="mln_icon_extra text-nowrap">Million </span></span></div>
                                </div>
                                <div class="lottery_item_cont">
                                    <a href="#windowAlert" class="ratestars fancybox" onclick="yaGoals('CLEVER');" data-title="Today&#039;s Top-Rated Lotteries" data-text="&lt;p&gt;We analyze dozens of parameters daily: Jackpot amount and tax deductions, winning odds and the number of prize divisions, cost of a single line, and availability of such options as &quot;Multiplier,&quot; and much more to offer you the best possible lottery at the moment!&lt;/p&gt;&lt;p&gt;Choose a lottery with the highest score to win more and spend less!&lt;/p&gt;" data-toggle="tooltip" data-placement="bottom" title="Lottery rating from 1 to 10">
                                        <span class="fa fa-star"></span>
                                        <span class="ratestars_val">7.4</span>
                                    </a>
                                    <div class="time time-hot">
                                        <span class="icon-clock"></span>
                                        <div class="time_val timer" date-close="972"></div>
                                    </div>

                                    <div class="lottery_sel">

                                        <div class="event-easy-pick-cont">
                                            <select name="easy_pick" class="lottery_sel_select event-easy-pick-select">
                                                <option></option>
                                                <option value="{{ route('play') }}" data-event-easy-pick="1">3 lines for $ 8.16</option>
                                                <option value="{{ route('play') }}" data-event-easy-pick="1">5 lines for $ 12.92</option>
                                                <option value="" disabled>–––––&nbsp;or&nbsp;–––––</option>
                                                <option value="{{ route('play') }}">Pick numbers</option>
                                                <option class="light_version_site_hide" value="" disabled>––––––––––––</option>

                                                <option class="opt-system" value="{{ route('play') }}">System &#128200;</option>
                                            </select>
                                            <a href="{{ route('play') }}" class="btn btn-success event-easy-pick-main-btn">Play<span class="fa-solid fa-chevron-down"></span></a>
                                            <div class="lottery_sel_dropdown">
                                                <div class="offers">
                                                    <p><a href="{{ route('play') }}" class="event-easy-pick-offer">3 lines for $ 8.16</a></p>
                                                    <p><a href="{{ route('play') }}" class="event-easy-pick-offer">5 lines for $ 12.92</a></p>
                                                </div>
                                                <div class="or">–––––&nbsp;or&nbsp;–––––</div>
                                                <p><a href="{{ route('play') }}" class="lottery_sel_choose">Pick numbers</a></p>
                                                <div class="or light_version_site_hide">–––––––––––––</div>


                                                <p style="margin-top: 5px;"><a href="{{ route('play') }}" class="lottery_sel_choose game-type-ico lamp opt-system">System</a></p>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div><div class="lottery_slider_item">
                            <div class="lottery_item">
                                <div class="lottery_item_top" style="background-image: url('https://static.cdnland.com/upload/images/bg/za-lotto-652.svg');">
                                    <div class="lottery_item_img"><a href="{{ route('play') }}"><img src="https://static.cdnland.com/upload/images/logo/svg/lotto_za.svg" alt="South Africa Lotto 6/52"/></a></div>
                                    <div class="lottery_item_val"><span class="jack"><b>R 19</b><br/><span class="mln_icon_extra text-nowrap">Million </span></span></div>
                                </div>
                                <div class="lottery_item_cont">
                                    <a href="#windowAlert" class="ratestars fancybox" onclick="yaGoals('CLEVER');" data-title="Today&#039;s Top-Rated Lotteries" data-text="&lt;p&gt;We analyze dozens of parameters daily: Jackpot amount and tax deductions, winning odds and the number of prize divisions, cost of a single line, and availability of such options as &quot;Multiplier,&quot; and much more to offer you the best possible lottery at the moment!&lt;/p&gt;&lt;p&gt;Choose a lottery with the highest score to win more and spend less!&lt;/p&gt;" data-toggle="tooltip" data-placement="bottom" title="Lottery rating from 1 to 10">
                                        <span class="fa fa-star"></span>
                                        <span class="ratestars_val">7.5</span>
                                    </a>
                                    <div class="time time-hot">
                                        <span class="icon-clock"></span>
                                        <div class="time_val timer" date-close="972"></div>
                                    </div>

                                    <div class="lottery_sel">

                                        <div class="event-easy-pick-cont">
                                            <select name="easy_pick" class="lottery_sel_select event-easy-pick-select">
                                                <option></option>
                                                <option value="{{ route('play') }}" data-event-easy-pick="1">5 lines for $ 4.20</option>
                                                <option value="{{ route('play') }}" data-event-easy-pick="1">10 lines for $ 7.90</option>
                                                <option value="" disabled>–––––&nbsp;or&nbsp;–––––</option>
                                                <option value="{{ route('play') }}">Pick numbers</option>
                                                <option class="light_version_site_hide" value="" disabled>––––––––––––</option>

                                                <option class="opt-system" value="{{ route('play') }}">System &#128200;</option>
                                            </select>
                                            <a href="{{ route('play') }}" class="btn btn-success event-easy-pick-main-btn">Play<span class="fa-solid fa-chevron-down"></span></a>
                                            <div class="lottery_sel_dropdown">
                                                <div class="offers">
                                                    <p><a href="{{ route('play') }}" class="event-easy-pick-offer">5 lines for $ 4.20</a></p>
                                                    <p><a href="{{ route('play') }}" class="event-easy-pick-offer">10 lines for $ 7.90</a></p>
                                                </div>
                                                <div class="or">–––––&nbsp;or&nbsp;–––––</div>
                                                <p><a href="{{ route('play') }}" class="lottery_sel_choose">Pick numbers</a></p>
                                                <div class="or light_version_site_hide">–––––––––––––</div>


                                                <p style="margin-top: 5px;"><a href="{{ route('play') }}" class="lottery_sel_choose game-type-ico lamp opt-system">System</a></p>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div><div class="lottery_slider_item">
                            <div class="lottery_item">
                                <div class="lottery_item_top" style="background-image: url('https://static.cdnland.com/upload/images/bg/us-megabucks.svg');">
                                    <div class="lottery_item_img"><a href="/en/play-lottery/megabucks/?from=circular&extra_jackpot="><img src="https://static.cdnland.com/upload/images/logo/svg/megabucks.svg" alt="Wisconsin Megabucks"/></a></div>
                                    <div class="lottery_item_val"><span class="jack"><b>$ 1</b><br/><span class="mln_icon_extra text-nowrap">Million </span></span></div>
                                </div>
                                <div class="lottery_item_cont">
                                    <a href="#windowAlert" class="ratestars fancybox" onclick="yaGoals('CLEVER');" data-title="Today&#039;s Top-Rated Lotteries" data-text="&lt;p&gt;We analyze dozens of parameters daily: Jackpot amount and tax deductions, winning odds and the number of prize divisions, cost of a single line, and availability of such options as &quot;Multiplier,&quot; and much more to offer you the best possible lottery at the moment!&lt;/p&gt;&lt;p&gt;Choose a lottery with the highest score to win more and spend less!&lt;/p&gt;" data-toggle="tooltip" data-placement="bottom" title="Lottery rating from 1 to 10">
                                        <span class="fa fa-star"></span>
                                        <span class="ratestars_val">6.6</span>
                                    </a>
                                    <div class="time ">
                                        <span class="icon-clock"></span>
                                        <div class="time_val " date-close="22572">6&nbsp;hours</div>
                                    </div>

                                    <div class="lottery_sel">

                                        <div class="event-easy-pick-cont">
                                            <select name="easy_pick" class="lottery_sel_select event-easy-pick-select">
                                                <option></option>
                                                <option value="/en/play-lottery/megabucks/?from=circular&easy_pick=2&extra_jackpot=" data-event-easy-pick="1">2 lines for $ 3.30</option>
                                                <option value="/en/play-lottery/megabucks/?from=circular&easy_pick=5&extra_jackpot=" data-event-easy-pick="1">5 lines for $ 7.67</option>
                                                <option value="" disabled>–––––&nbsp;or&nbsp;–––––</option>
                                                <option value="/en/play-lottery/megabucks/?from=circular&extra_jackpot=">Pick numbers</option>
                                                <option class="light_version_site_hide" value="" disabled>––––––––––––</option>

                                                <option class="opt-system" value="/en/play-lottery/megabucks/?from=index_lotto&system=1&extra_jackpot=">System &#128200;</option>
                                            </select>
                                            <a href="/en/play-lottery/megabucks/?from=circular&extra_jackpot=" class="btn btn-success event-easy-pick-main-btn">Play<span class="fa-solid fa-chevron-down"></span></a>
                                            <div class="lottery_sel_dropdown">
                                                <div class="offers">
                                                    <p><a href="/en/play-lottery/megabucks/?from=circular&easy_pick=2&extra_jackpot=" class="event-easy-pick-offer">2 lines for $ 3.30</a></p>
                                                    <p><a href="/en/play-lottery/megabucks/?from=circular&easy_pick=5&extra_jackpot=" class="event-easy-pick-offer">5 lines for $ 7.67</a></p>
                                                </div>
                                                <div class="or">–––––&nbsp;or&nbsp;–––––</div>
                                                <p><a href="/en/play-lottery/megabucks/?from=circular&extra_jackpot=" class="lottery_sel_choose">Pick numbers</a></p>
                                                <div class="or light_version_site_hide">–––––––––––––</div>


                                                <p style="margin-top: 5px;"><a href="/en/play-lottery/megabucks/?from=index_lotto&system=1&extra_jackpot=" class="lottery_sel_choose game-type-ico lamp opt-system">System</a></p>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div><div class="lottery_slider_item">
                            <div class="lottery_item">
                                <div class="lottery_item_top" style="background-image: url('https://static.cdnland.com/upload/images/bg/au-mon-wed-lotto.svg');">
                                    <div class="lottery_item_img"><a href="{{ route('play') }}"><img src="https://static.cdnland.com/upload/images/logo/svg/monwed_lotto.svg" alt="Monday &amp; Wednesday Lotto"/></a></div>
                                    <div class="lottery_item_val"><span class="jack"><b>A$ 1</b><br/><span class="mln_icon_extra text-nowrap">Million </span></span></div>
                                </div>
                                <div class="lottery_item_cont">
                                    <a href="#windowAlert" class="ratestars fancybox" onclick="yaGoals('CLEVER');" data-title="Today&#039;s Top-Rated Lotteries" data-text="&lt;p&gt;We analyze dozens of parameters daily: Jackpot amount and tax deductions, winning odds and the number of prize divisions, cost of a single line, and availability of such options as &quot;Multiplier,&quot; and much more to offer you the best possible lottery at the moment!&lt;/p&gt;&lt;p&gt;Choose a lottery with the highest score to win more and spend less!&lt;/p&gt;" data-toggle="tooltip" data-placement="bottom" title="Lottery rating from 1 to 10">
                                        <span class="fa fa-star"></span>
                                        <span class="ratestars_val">7.4</span>
                                    </a>
                                    <div class="time ">
                                        <span class="icon-clock"></span>
                                        <div class="time_val " date-close="126972">1&nbsp;day</div>
                                    </div>

                                    <div class="lottery_sel">

                                        <div class="event-easy-pick-cont">
                                            <select name="easy_pick" class="lottery_sel_select event-easy-pick-select">
                                                <option></option>
                                                <option value="{{ route('play') }}" data-event-easy-pick="1">7 lines for $ 7.31</option>
                                                <option value="{{ route('play') }}" data-event-easy-pick="1">14 lines for $ 13.86</option>
                                                <option value="" disabled>–––––&nbsp;or&nbsp;–––––</option>
                                                <option value="{{ route('play') }}">Pick numbers</option>
                                                <option class="light_version_site_hide" value="" disabled>––––––––––––</option>
                                                <option class="opt-syndicate" value="{{ route('play') }}">Syndicate &#128293;</option>
                                                <option class="opt-system" value="{{ route('play') }}">System &#128200;</option>
                                            </select>
                                            <a href="{{ route('play') }}" class="btn btn-success event-easy-pick-main-btn">Play<span class="fa-solid fa-chevron-down"></span></a>
                                            <div class="lottery_sel_dropdown">
                                                <div class="offers">
                                                    <p><a href="{{ route('play') }}" class="event-easy-pick-offer">7 lines for $ 7.31</a></p>
                                                    <p><a href="{{ route('play') }}" class="event-easy-pick-offer">14 lines for $ 13.86</a></p>
                                                </div>
                                                <div class="or">–––––&nbsp;or&nbsp;–––––</div>
                                                <p><a href="{{ route('play') }}" class="lottery_sel_choose">Pick numbers</a></p>
                                                <div class="or light_version_site_hide">–––––––––––––</div>

                                                <p><a href="{{ route('play') }}" class="lottery_sel_choose game-type-ico fire opt-syndicate">Syndicate</a></p>


                                                <p style="margin-top: 5px;"><a href="{{ route('play') }}" class="lottery_sel_choose game-type-ico lamp opt-system">System</a></p>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div><div class="lottery_slider_item">
                            <div class="lottery_item">
                                <div class="lottery_item_top" style="background-image: url('https://static.cdnland.com/upload/images/bg/uk-thunderball.svg');">
                                    <div class="lottery_item_img"><a href="/en/play-lottery/thunderball-uk/?from=circular&extra_jackpot="><img src="https://static.cdnland.com/upload/images/logo/svg/thunderball_lotto.svg" alt="Thunderball UK"/></a></div>
                                    <div class="lottery_item_val"><span class="jack"><b>£ 500+</b><br/><span class="mln_icon_extra text-nowrap">Thousand </span></span></div>
                                </div>
                                <div class="lottery_item_cont">
                                    <a href="#windowAlert" class="ratestars fancybox" onclick="yaGoals('CLEVER');" data-title="Today&#039;s Top-Rated Lotteries" data-text="&lt;p&gt;We analyze dozens of parameters daily: Jackpot amount and tax deductions, winning odds and the number of prize divisions, cost of a single line, and availability of such options as &quot;Multiplier,&quot; and much more to offer you the best possible lottery at the moment!&lt;/p&gt;&lt;p&gt;Choose a lottery with the highest score to win more and spend less!&lt;/p&gt;" data-toggle="tooltip" data-placement="bottom" title="Lottery rating from 1 to 10">
                                        <span class="fa fa-star"></span>
                                        <span class="ratestars_val">7.0</span>
                                    </a>
                                    <div class="time ">
                                        <span class="icon-clock"></span>
                                        <div class="time_val " date-close="252972">2&nbsp;days</div>
                                    </div>

                                    <div class="lottery_sel">

                                        <div class="event-easy-pick-cont">
                                            <select name="easy_pick" class="lottery_sel_select event-easy-pick-select">
                                                <option></option>
                                                <option value="/en/play-lottery/thunderball-uk/?from=circular&easy_pick=1&extra_jackpot=" data-event-easy-pick="1">1 line for $ 3.09</option>
                                                <option value="/en/play-lottery/thunderball-uk/?from=circular&easy_pick=3&extra_jackpot=" data-event-easy-pick="1">3 lines for $ 8.99</option>
                                                <option value="" disabled>–––––&nbsp;or&nbsp;–––––</option>
                                                <option value="/en/play-lottery/thunderball-uk/?from=circular&extra_jackpot=">Pick numbers</option>
                                                <option class="light_version_site_hide" value="" disabled>––––––––––––</option>

                                                <option class="opt-system" value="/en/play-lottery/thunderball-uk/?from=index_lotto&system=1&extra_jackpot=">System &#128200;</option>
                                            </select>
                                            <a href="/en/play-lottery/thunderball-uk/?from=circular&extra_jackpot=" class="btn btn-success event-easy-pick-main-btn">Play<span class="fa-solid fa-chevron-down"></span></a>
                                            <div class="lottery_sel_dropdown">
                                                <div class="offers">
                                                    <p><a href="/en/play-lottery/thunderball-uk/?from=circular&easy_pick=1&extra_jackpot=" class="event-easy-pick-offer">1 line for $ 3.09</a></p>
                                                    <p><a href="/en/play-lottery/thunderball-uk/?from=circular&easy_pick=3&extra_jackpot=" class="event-easy-pick-offer">3 lines for $ 8.99</a></p>
                                                </div>
                                                <div class="or">–––––&nbsp;or&nbsp;–––––</div>
                                                <p><a href="/en/play-lottery/thunderball-uk/?from=circular&extra_jackpot=" class="lottery_sel_choose">Pick numbers</a></p>
                                                <div class="or light_version_site_hide">–––––––––––––</div>


                                                <p style="margin-top: 5px;"><a href="/en/play-lottery/thunderball-uk/?from=index_lotto&system=1&extra_jackpot=" class="lottery_sel_choose game-type-ico lamp opt-system">System</a></p>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div><div class="lottery_slider_item">
                            <div class="lottery_item">
                                <div class="lottery_item_top" style="background-image: url('https://static.cdnland.com/upload/images/bg/br-megasena.svg');">
                                    <div class="lottery_item_img"><a href="/en/play-lottery/mega-sena/?from=circular&extra_jackpot="><img src="https://static.cdnland.com/upload/images/logo/svg/megasena.svg" alt="Mega Sena"/></a></div>
                                    <div class="lottery_item_val"><span class="jack"><b>R$ 3</b><br/><span class="mln_icon_extra text-nowrap">Million </span></span></div>
                                </div>
                                <div class="lottery_item_cont">
                                    <a href="#windowAlert" class="ratestars fancybox" onclick="yaGoals('CLEVER');" data-title="Today&#039;s Top-Rated Lotteries" data-text="&lt;p&gt;We analyze dozens of parameters daily: Jackpot amount and tax deductions, winning odds and the number of prize divisions, cost of a single line, and availability of such options as &quot;Multiplier,&quot; and much more to offer you the best possible lottery at the moment!&lt;/p&gt;&lt;p&gt;Choose a lottery with the highest score to win more and spend less!&lt;/p&gt;" data-toggle="tooltip" data-placement="bottom" title="Lottery rating from 1 to 10">
                                        <span class="fa fa-star"></span>
                                        <span class="ratestars_val">6.5</span>
                                    </a>
                                    <div class="time ">
                                        <span class="icon-clock"></span>
                                        <div class="time_val " date-close="11772">3&nbsp;hours</div>
                                    </div>

                                    <div class="lottery_sel">

                                        <div class="event-easy-pick-cont">
                                            <select name="easy_pick" class="lottery_sel_select event-easy-pick-select">
                                                <option></option>
                                                <option value="/en/play-lottery/mega-sena/?from=circular&easy_pick=4&extra_jackpot=" data-event-easy-pick="1">4 lines for $ 8.28</option>
                                                <option value="/en/play-lottery/mega-sena/?from=circular&easy_pick=6&extra_jackpot=" data-event-easy-pick="1">6 lines for $ 11.80</option>
                                                <option value="" disabled>–––––&nbsp;or&nbsp;–––––</option>
                                                <option value="/en/play-lottery/mega-sena/?from=circular&extra_jackpot=">Pick numbers</option>
                                                <option class="light_version_site_hide" value="" disabled>––––––––––––</option>

                                                <option class="opt-system" value="/en/play-lottery/mega-sena/?from=index_lotto&system=1&extra_jackpot=">System &#128200;</option>
                                            </select>
                                            <a href="/en/play-lottery/mega-sena/?from=circular&extra_jackpot=" class="btn btn-success event-easy-pick-main-btn">Play<span class="fa-solid fa-chevron-down"></span></a>
                                            <div class="lottery_sel_dropdown">
                                                <div class="offers">
                                                    <p><a href="/en/play-lottery/mega-sena/?from=circular&easy_pick=4&extra_jackpot=" class="event-easy-pick-offer">4 lines for $ 8.28</a></p>
                                                    <p><a href="/en/play-lottery/mega-sena/?from=circular&easy_pick=6&extra_jackpot=" class="event-easy-pick-offer">6 lines for $ 11.80</a></p>
                                                </div>
                                                <div class="or">–––––&nbsp;or&nbsp;–––––</div>
                                                <p><a href="/en/play-lottery/mega-sena/?from=circular&extra_jackpot=" class="lottery_sel_choose">Pick numbers</a></p>
                                                <div class="or light_version_site_hide">–––––––––––––</div>


                                                <p style="margin-top: 5px;"><a href="/en/play-lottery/mega-sena/?from=index_lotto&system=1&extra_jackpot=" class="lottery_sel_choose game-type-ico lamp opt-system">System</a></p>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div><div class="lottery_slider_item">
                            <div class="lottery_item">
                                <div class="lottery_item_top" style="background-image: url('https://static.cdnland.com/upload/images/bg/es-bonoloto.svg');">
                                    <div class="lottery_item_img"><a href="{{ route('play') }}"><img src="https://static.cdnland.com/upload/images/logo/svg/bonoloto.svg" alt="BonoLoto"/></a></div>
                                    <div class="lottery_item_val"><span class="jack"><b>€ 400+</b><br/><span class="mln_icon_extra text-nowrap">Thousand </span></span></div>
                                </div>
                                <div class="lottery_item_cont">
                                    <a href="#windowAlert" class="ratestars fancybox" onclick="yaGoals('CLEVER');" data-title="Today&#039;s Top-Rated Lotteries" data-text="&lt;p&gt;We analyze dozens of parameters daily: Jackpot amount and tax deductions, winning odds and the number of prize divisions, cost of a single line, and availability of such options as &quot;Multiplier,&quot; and much more to offer you the best possible lottery at the moment!&lt;/p&gt;&lt;p&gt;Choose a lottery with the highest score to win more and spend less!&lt;/p&gt;" data-toggle="tooltip" data-placement="bottom" title="Lottery rating from 1 to 10">
                                        <span class="fa fa-star"></span>
                                        <span class="ratestars_val">7.3</span>
                                    </a>
                                    <div class="time ">
                                        <span class="icon-clock"></span>
                                        <div class="time_val " date-close="170172">1&nbsp;day</div>
                                    </div>

                                    <div class="lottery_sel">

                                        <div class="event-easy-pick-cont">
                                            <select name="easy_pick" class="lottery_sel_select event-easy-pick-select">
                                                <option></option>
                                                <option value="/en/play-lottery/bonoloto/?from=circular&easy_pick=2&extra_jackpot=" data-event-easy-pick="1">2 lines for $ 3.70</option>
                                                <option value="/en/play-lottery/bonoloto/?from=circular&easy_pick=4&extra_jackpot=" data-event-easy-pick="1">4 lines for $ 7.03</option>
                                                <option value="" disabled>–––––&nbsp;or&nbsp;–––––</option>
                                                <option value="{{ route('play') }}">Pick numbers</option>
                                                <option class="light_version_site_hide" value="" disabled>––––––––––––</option>

                                                <option class="opt-system" value="{{ route('play') }}">System &#128200;</option>
                                            </select>
                                            <a href="{{ route('play') }}" class="btn btn-success event-easy-pick-main-btn">Play<span class="fa-solid fa-chevron-down"></span></a>
                                            <div class="lottery_sel_dropdown">
                                                <div class="offers">
                                                    <p><a href="/en/play-lottery/bonoloto/?from=circular&easy_pick=2&extra_jackpot=" class="event-easy-pick-offer">2 lines for $ 3.70</a></p>
                                                    <p><a href="/en/play-lottery/bonoloto/?from=circular&easy_pick=4&extra_jackpot=" class="event-easy-pick-offer">4 lines for $ 7.03</a></p>
                                                </div>
                                                <div class="or">–––––&nbsp;or&nbsp;–––––</div>
                                                <p><a href="{{ route('play') }}" class="lottery_sel_choose">Pick numbers</a></p>
                                                <div class="or light_version_site_hide">–––––––––––––</div>


                                                <p style="margin-top: 5px;"><a href="{{ route('play') }}" class="lottery_sel_choose game-type-ico lamp opt-system">System</a></p>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div><div class="lottery_slider_item">
                            <div class="lottery_item">
                                <div class="lottery_item_top" style="background-image: url('https://static.cdnland.com/upload/images/bg/us-fantasy5.svg');">
                                    <div class="lottery_item_img"><a href="/en/play-lottery/ca-fantasy-5/?from=circular&extra_jackpot="><img src="https://static.cdnland.com/upload/images/logo/svg/fantasy5.svg" alt="California Fantasy 5"/></a></div>
                                    <div class="lottery_item_val"><span class="jack"><b>$ 186</b><br/><span class="mln_icon_extra text-nowrap">Thousand </span></span></div>
                                </div>
                                <div class="lottery_item_cont">
                                    <a href="#windowAlert" class="ratestars fancybox" onclick="yaGoals('CLEVER');" data-title="Today&#039;s Top-Rated Lotteries" data-text="&lt;p&gt;We analyze dozens of parameters daily: Jackpot amount and tax deductions, winning odds and the number of prize divisions, cost of a single line, and availability of such options as &quot;Multiplier,&quot; and much more to offer you the best possible lottery at the moment!&lt;/p&gt;&lt;p&gt;Choose a lottery with the highest score to win more and spend less!&lt;/p&gt;" data-toggle="tooltip" data-placement="bottom" title="Lottery rating from 1 to 10">
                                        <span class="fa fa-star"></span>
                                        <span class="ratestars_val">6.6</span>
                                    </a>
                                    <div class="time ">
                                        <span class="icon-clock"></span>
                                        <div class="time_val " date-close="18972">5&nbsp;hours</div>
                                    </div>

                                    <div class="lottery_sel">

                                        <div class="event-easy-pick-cont">
                                            <select name="easy_pick" class="lottery_sel_select event-easy-pick-select">
                                                <option></option>
                                                <option value="/en/play-lottery/ca-fantasy-5/?from=circular&easy_pick=3&extra_jackpot=" data-event-easy-pick="1">3 lines for $ 7.50</option>
                                                <option value="/en/play-lottery/ca-fantasy-5/?from=circular&easy_pick=5&extra_jackpot=" data-event-easy-pick="1">5 lines for $ 11.87</option>
                                                <option value="" disabled>–––––&nbsp;or&nbsp;–––––</option>
                                                <option value="/en/play-lottery/ca-fantasy-5/?from=circular&extra_jackpot=">Pick numbers</option>
                                                <option class="light_version_site_hide" value="" disabled>––––––––––––</option>

                                                <option class="opt-system" value="/en/play-lottery/ca-fantasy-5/?from=index_lotto&system=1&extra_jackpot=">System &#128200;</option>
                                            </select>
                                            <a href="/en/play-lottery/ca-fantasy-5/?from=circular&extra_jackpot=" class="btn btn-success event-easy-pick-main-btn">Play<span class="fa-solid fa-chevron-down"></span></a>
                                            <div class="lottery_sel_dropdown">
                                                <div class="offers">
                                                    <p><a href="/en/play-lottery/ca-fantasy-5/?from=circular&easy_pick=3&extra_jackpot=" class="event-easy-pick-offer">3 lines for $ 7.50</a></p>
                                                    <p><a href="/en/play-lottery/ca-fantasy-5/?from=circular&easy_pick=5&extra_jackpot=" class="event-easy-pick-offer">5 lines for $ 11.87</a></p>
                                                </div>
                                                <div class="or">–––––&nbsp;or&nbsp;–––––</div>
                                                <p><a href="/en/play-lottery/ca-fantasy-5/?from=circular&extra_jackpot=" class="lottery_sel_choose">Pick numbers</a></p>
                                                <div class="or light_version_site_hide">–––––––––––––</div>


                                                <p style="margin-top: 5px;"><a href="/en/play-lottery/ca-fantasy-5/?from=index_lotto&system=1&extra_jackpot=" class="lottery_sel_choose game-type-ico lamp opt-system">System</a></p>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div><div class="lottery_slider_item">
                            <div class="lottery_item">
                                <div class="lottery_item_top" style="background-image: url('https://static.cdnland.com/upload/images/bg/za-daily_lotto.svg');">
                                    <div class="lottery_item_img"><a href="/en/play-lottery/za-daily-lotto/?from=circular&extra_jackpot="><img src="https://static.cdnland.com/upload/images/logo/svg/daily_lotto.svg" alt="South Africa Daily Lotto"/></a></div>
                                    <div class="lottery_item_val"><span class="jack"><b>R 40+</b><br/><span class="mln_icon_extra text-nowrap">Thousand </span></span></div>
                                </div>
                                <div class="lottery_item_cont">
                                    <a href="#windowAlert" class="ratestars fancybox" onclick="yaGoals('CLEVER');" data-title="Today&#039;s Top-Rated Lotteries" data-text="&lt;p&gt;We analyze dozens of parameters daily: Jackpot amount and tax deductions, winning odds and the number of prize divisions, cost of a single line, and availability of such options as &quot;Multiplier,&quot; and much more to offer you the best possible lottery at the moment!&lt;/p&gt;&lt;p&gt;Choose a lottery with the highest score to win more and spend less!&lt;/p&gt;" data-toggle="tooltip" data-placement="bottom" title="Lottery rating from 1 to 10">
                                        <span class="fa fa-star"></span>
                                        <span class="ratestars_val">6.6</span>
                                    </a>
                                    <div class="time ">
                                        <span class="icon-clock"></span>
                                        <div class="time_val " date-close="80172">22&nbsp;hours</div>
                                    </div>

                                    <div class="lottery_sel">

                                        <div class="event-easy-pick-cont">
                                            <select name="easy_pick" class="lottery_sel_select event-easy-pick-select">
                                                <option></option>
                                                <option value="/en/play-lottery/za-daily-lotto/?from=circular&easy_pick=10&extra_jackpot=" data-event-easy-pick="1">10 lines for $ 4.27</option>
                                                <option value="/en/play-lottery/za-daily-lotto/?from=circular&easy_pick=15&extra_jackpot=" data-event-easy-pick="1">15 lines for $ 6.34</option>
                                                <option value="" disabled>–––––&nbsp;or&nbsp;–––––</option>
                                                <option value="/en/play-lottery/za-daily-lotto/?from=circular&extra_jackpot=">Pick numbers</option>
                                                <option class="light_version_site_hide" value="" disabled>––––––––––––</option>

                                                <option class="opt-system" value="/en/play-lottery/za-daily-lotto/?from=index_lotto&system=1&extra_jackpot=">System &#128200;</option>
                                            </select>
                                            <a href="/en/play-lottery/za-daily-lotto/?from=circular&extra_jackpot=" class="btn btn-success event-easy-pick-main-btn">Play<span class="fa-solid fa-chevron-down"></span></a>
                                            <div class="lottery_sel_dropdown">
                                                <div class="offers">
                                                    <p><a href="/en/play-lottery/za-daily-lotto/?from=circular&easy_pick=10&extra_jackpot=" class="event-easy-pick-offer">10 lines for $ 4.27</a></p>
                                                    <p><a href="/en/play-lottery/za-daily-lotto/?from=circular&easy_pick=15&extra_jackpot=" class="event-easy-pick-offer">15 lines for $ 6.34</a></p>
                                                </div>
                                                <div class="or">–––––&nbsp;or&nbsp;–––––</div>
                                                <p><a href="/en/play-lottery/za-daily-lotto/?from=circular&extra_jackpot=" class="lottery_sel_choose">Pick numbers</a></p>
                                                <div class="or light_version_site_hide">–––––––––––––</div>


                                                <p style="margin-top: 5px;"><a href="/en/play-lottery/za-daily-lotto/?from=index_lotto&system=1&extra_jackpot=" class="lottery_sel_choose game-type-ico lamp opt-system">System</a></p>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane fadee" id="tab_date">
                    <div class="lottery_slider lottery_owl-carousel owl-carousel">
                        <div class="lottery_slider_item">
                            <div class="lottery_item">
                                <div class="lottery_item_top" style="background-image: url('https://static.cdnland.com/upload/images/bg/za-lotto-652.svg');">
                                    <div class="lottery_item_img"><a href="{{ route('play') }}"><img src="https://static.cdnland.com/upload/images/logo/svg/lotto_za.svg" alt="South Africa Lotto 6/52"/></a></div>
                                    <div class="lottery_item_val"><span class="jack"><b>R 19</b><br/><span class="mln_icon_extra text-nowrap">Million </span></span></div>
                                </div>
                                <div class="lottery_item_cont">
                                    <a href="#windowAlert" class="ratestars fancybox" onclick="yaGoals('CLEVER');" data-title="Today&#039;s Top-Rated Lotteries" data-text="&lt;p&gt;We analyze dozens of parameters daily: Jackpot amount and tax deductions, winning odds and the number of prize divisions, cost of a single line, and availability of such options as &quot;Multiplier,&quot; and much more to offer you the best possible lottery at the moment!&lt;/p&gt;&lt;p&gt;Choose a lottery with the highest score to win more and spend less!&lt;/p&gt;" data-toggle="tooltip" data-placement="bottom" title="Lottery rating from 1 to 10">
                                        <span class="fa fa-star"></span>
                                        <span class="ratestars_val">7.5</span>
                                    </a>
                                    <div class="time time-hot">
                                        <span class="icon-clock"></span>
                                        <div class="time_val timer" date-close="972"></div>
                                    </div>

                                    <div class="lottery_sel">

                                        <div class="event-easy-pick-cont">
                                            <select name="easy_pick" class="lottery_sel_select event-easy-pick-select">
                                                <option></option>
                                                <option value="{{ route('play') }}" data-event-easy-pick="1">5 lines for $ 4.20</option>
                                                <option value="{{ route('play') }}" data-event-easy-pick="1">10 lines for $ 7.90</option>
                                                <option value="" disabled>–––––&nbsp;or&nbsp;–––––</option>
                                                <option value="{{ route('play') }}">Pick numbers</option>
                                                <option class="light_version_site_hide" value="" disabled>––––––––––––</option>

                                                <option class="opt-system" value="{{ route('play') }}">System &#128200;</option>
                                            </select>
                                            <a href="{{ route('play') }}" class="btn btn-success event-easy-pick-main-btn">Play<span class="fa-solid fa-chevron-down"></span></a>
                                            <div class="lottery_sel_dropdown">
                                                <div class="offers">
                                                    <p><a href="{{ route('play') }}" class="event-easy-pick-offer">5 lines for $ 4.20</a></p>
                                                    <p><a href="{{ route('play') }}" class="event-easy-pick-offer">10 lines for $ 7.90</a></p>
                                                </div>
                                                <div class="or">–––––&nbsp;or&nbsp;–––––</div>
                                                <p><a href="{{ route('play') }}" class="lottery_sel_choose">Pick numbers</a></p>
                                                <div class="or light_version_site_hide">–––––––––––––</div>


                                                <p style="margin-top: 5px;"><a href="{{ route('play') }}" class="lottery_sel_choose game-type-ico lamp opt-system">System</a></p>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div><div class="lottery_slider_item">
                            <div class="lottery_item">
                                <div class="lottery_item_top" style="background-image: url('https://static.cdnland.com/upload/images/bg/pl-poland-lotto.svg');">
                                    <div class="lottery_item_img"><a href="{{ route('play') }}"><img src="https://static.cdnland.com/upload/images/logo/svg/lotto_pl.svg" alt="Poland Lotto"/></a></div>
                                    <div class="lottery_item_val"><span class="jack"><b>zł 18</b><br/><span class="mln_icon_extra text-nowrap">Million </span></span></div>
                                </div>
                                <div class="lottery_item_cont">
                                    <a href="#windowAlert" class="ratestars fancybox" onclick="yaGoals('CLEVER');" data-title="Today&#039;s Top-Rated Lotteries" data-text="&lt;p&gt;We analyze dozens of parameters daily: Jackpot amount and tax deductions, winning odds and the number of prize divisions, cost of a single line, and availability of such options as &quot;Multiplier,&quot; and much more to offer you the best possible lottery at the moment!&lt;/p&gt;&lt;p&gt;Choose a lottery with the highest score to win more and spend less!&lt;/p&gt;" data-toggle="tooltip" data-placement="bottom" title="Lottery rating from 1 to 10">
                                        <span class="fa fa-star"></span>
                                        <span class="ratestars_val">6.6</span>
                                    </a>
                                    <div class="time ">
                                        <span class="icon-clock"></span>
                                        <div class="time_val " date-close="4572">1&nbsp;hour</div>
                                    </div>

                                    <div class="lottery_sel">

                                        <div class="event-easy-pick-cont">
                                            <select name="easy_pick" class="lottery_sel_select event-easy-pick-select">
                                                <option></option>
                                                <option value="{{ route('play') }}" data-event-easy-pick="1">3 lines for $ 5.22</option>
                                                <option value="{{ route('play') }}" data-event-easy-pick="1">5 lines for $ 8.09</option>
                                                <option value="" disabled>–––––&nbsp;or&nbsp;–––––</option>
                                                <option value="{{ route('play') }}">Pick numbers</option>
                                                <option class="light_version_site_hide" value="" disabled>––––––––––––</option>

                                                <option class="opt-system" value="{{ route('play') }}">System &#128200;</option>
                                            </select>
                                            <a href="{{ route('play') }}" class="btn btn-success event-easy-pick-main-btn">Play<span class="fa-solid fa-chevron-down"></span></a>
                                            <div class="lottery_sel_dropdown">
                                                <div class="offers">
                                                    <p><a href="{{ route('play') }}" class="event-easy-pick-offer">3 lines for $ 5.22</a></p>
                                                    <p><a href="{{ route('play') }}" class="event-easy-pick-offer">5 lines for $ 8.09</a></p>
                                                </div>
                                                <div class="or">–––––&nbsp;or&nbsp;–––––</div>
                                                <p><a href="{{ route('play') }}" class="lottery_sel_choose">Pick numbers</a></p>
                                                <div class="or light_version_site_hide">–––––––––––––</div>


                                                <p style="margin-top: 5px;"><a href="{{ route('play') }}" class="lottery_sel_choose game-type-ico lamp opt-system">System</a></p>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div><div class="lottery_slider_item">
                            <div class="lottery_item">
                                <div class="lottery_item_top" style="background-image: url('https://static.cdnland.com/upload/images/bg/ir-daily_million.svg');">
                                    <div class="lottery_item_img"><a href="{{ route('play') }}"><img src="https://static.cdnland.com/upload/images/logo/svg/daily_million.svg" alt="Daily Million"/></a></div>
                                    <div class="lottery_item_val"><span class="jack"><b>€ 1</b><br/><span class="mln_icon_extra text-nowrap">Million </span></span></div>
                                </div>
                                <div class="lottery_item_cont">
                                    <a href="#windowAlert" class="ratestars fancybox" onclick="yaGoals('CLEVER');" data-title="Today&#039;s Top-Rated Lotteries" data-text="&lt;p&gt;We analyze dozens of parameters daily: Jackpot amount and tax deductions, winning odds and the number of prize divisions, cost of a single line, and availability of such options as &quot;Multiplier,&quot; and much more to offer you the best possible lottery at the moment!&lt;/p&gt;&lt;p&gt;Choose a lottery with the highest score to win more and spend less!&lt;/p&gt;" data-toggle="tooltip" data-placement="bottom" title="Lottery rating from 1 to 10">
                                        <span class="fa fa-star"></span>
                                        <span class="ratestars_val">7.4</span>
                                    </a>
                                    <div class="time time-hot">
                                        <span class="icon-clock"></span>
                                        <div class="time_val timer" date-close="972"></div>
                                    </div>

                                    <div class="lottery_sel">

                                        <div class="event-easy-pick-cont">
                                            <select name="easy_pick" class="lottery_sel_select event-easy-pick-select">
                                                <option></option>
                                                <option value="{{ route('play') }}" data-event-easy-pick="1">3 lines for $ 8.16</option>
                                                <option value="{{ route('play') }}" data-event-easy-pick="1">5 lines for $ 12.92</option>
                                                <option value="" disabled>–––––&nbsp;or&nbsp;–––––</option>
                                                <option value="{{ route('play') }}">Pick numbers</option>
                                                <option class="light_version_site_hide" value="" disabled>––––––––––––</option>

                                                <option class="opt-system" value="{{ route('play') }}">System &#128200;</option>
                                            </select>
                                            <a href="{{ route('play') }}" class="btn btn-success event-easy-pick-main-btn">Play<span class="fa-solid fa-chevron-down"></span></a>
                                            <div class="lottery_sel_dropdown">
                                                <div class="offers">
                                                    <p><a href="{{ route('play') }}" class="event-easy-pick-offer">3 lines for $ 8.16</a></p>
                                                    <p><a href="{{ route('play') }}" class="event-easy-pick-offer">5 lines for $ 12.92</a></p>
                                                </div>
                                                <div class="or">–––––&nbsp;or&nbsp;–––––</div>
                                                <p><a href="{{ route('play') }}" class="lottery_sel_choose">Pick numbers</a></p>
                                                <div class="or light_version_site_hide">–––––––––––––</div>


                                                <p style="margin-top: 5px;"><a href="{{ route('play') }}" class="lottery_sel_choose game-type-ico lamp opt-system">System</a></p>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div><div class="lottery_slider_item">
                            <div class="lottery_item">
                                <div class="lottery_item_top" style="background-image: url('https://static.cdnland.com/upload/images/bg/br-megasena.svg');">
                                    <div class="lottery_item_img"><a href="/en/play-lottery/mega-sena/?from=circular&extra_jackpot="><img src="https://static.cdnland.com/upload/images/logo/svg/megasena.svg" alt="Mega Sena"/></a></div>
                                    <div class="lottery_item_val"><span class="jack"><b>R$ 3</b><br/><span class="mln_icon_extra text-nowrap">Million </span></span></div>
                                </div>
                                <div class="lottery_item_cont">
                                    <a href="#windowAlert" class="ratestars fancybox" onclick="yaGoals('CLEVER');" data-title="Today&#039;s Top-Rated Lotteries" data-text="&lt;p&gt;We analyze dozens of parameters daily: Jackpot amount and tax deductions, winning odds and the number of prize divisions, cost of a single line, and availability of such options as &quot;Multiplier,&quot; and much more to offer you the best possible lottery at the moment!&lt;/p&gt;&lt;p&gt;Choose a lottery with the highest score to win more and spend less!&lt;/p&gt;" data-toggle="tooltip" data-placement="bottom" title="Lottery rating from 1 to 10">
                                        <span class="fa fa-star"></span>
                                        <span class="ratestars_val">6.5</span>
                                    </a>
                                    <div class="time ">
                                        <span class="icon-clock"></span>
                                        <div class="time_val " date-close="11772">3&nbsp;hours</div>
                                    </div>

                                    <div class="lottery_sel">

                                        <div class="event-easy-pick-cont">
                                            <select name="easy_pick" class="lottery_sel_select event-easy-pick-select">
                                                <option></option>
                                                <option value="/en/play-lottery/mega-sena/?from=circular&easy_pick=4&extra_jackpot=" data-event-easy-pick="1">4 lines for $ 8.28</option>
                                                <option value="/en/play-lottery/mega-sena/?from=circular&easy_pick=6&extra_jackpot=" data-event-easy-pick="1">6 lines for $ 11.80</option>
                                                <option value="" disabled>–––––&nbsp;or&nbsp;–––––</option>
                                                <option value="/en/play-lottery/mega-sena/?from=circular&extra_jackpot=">Pick numbers</option>
                                                <option class="light_version_site_hide" value="" disabled>––––––––––––</option>

                                                <option class="opt-system" value="/en/play-lottery/mega-sena/?from=index_lotto&system=1&extra_jackpot=">System &#128200;</option>
                                            </select>
                                            <a href="/en/play-lottery/mega-sena/?from=circular&extra_jackpot=" class="btn btn-success event-easy-pick-main-btn">Play<span class="fa-solid fa-chevron-down"></span></a>
                                            <div class="lottery_sel_dropdown">
                                                <div class="offers">
                                                    <p><a href="/en/play-lottery/mega-sena/?from=circular&easy_pick=4&extra_jackpot=" class="event-easy-pick-offer">4 lines for $ 8.28</a></p>
                                                    <p><a href="/en/play-lottery/mega-sena/?from=circular&easy_pick=6&extra_jackpot=" class="event-easy-pick-offer">6 lines for $ 11.80</a></p>
                                                </div>
                                                <div class="or">–––––&nbsp;or&nbsp;–––––</div>
                                                <p><a href="/en/play-lottery/mega-sena/?from=circular&extra_jackpot=" class="lottery_sel_choose">Pick numbers</a></p>
                                                <div class="or light_version_site_hide">–––––––––––––</div>


                                                <p style="margin-top: 5px;"><a href="/en/play-lottery/mega-sena/?from=index_lotto&system=1&extra_jackpot=" class="lottery_sel_choose game-type-ico lamp opt-system">System</a></p>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div><div class="lottery_slider_item">
                            <div class="lottery_item">
                                <div class="lottery_item_top" style="background-image: url('https://static.cdnland.com/upload/images/bg/us-fantasy5.svg');">
                                    <div class="lottery_item_img"><a href="/en/play-lottery/ca-fantasy-5/?from=circular&extra_jackpot="><img src="https://static.cdnland.com/upload/images/logo/svg/fantasy5.svg" alt="California Fantasy 5"/></a></div>
                                    <div class="lottery_item_val"><span class="jack"><b>$ 186</b><br/><span class="mln_icon_extra text-nowrap">Thousand </span></span></div>
                                </div>
                                <div class="lottery_item_cont">
                                    <a href="#windowAlert" class="ratestars fancybox" onclick="yaGoals('CLEVER');" data-title="Today&#039;s Top-Rated Lotteries" data-text="&lt;p&gt;We analyze dozens of parameters daily: Jackpot amount and tax deductions, winning odds and the number of prize divisions, cost of a single line, and availability of such options as &quot;Multiplier,&quot; and much more to offer you the best possible lottery at the moment!&lt;/p&gt;&lt;p&gt;Choose a lottery with the highest score to win more and spend less!&lt;/p&gt;" data-toggle="tooltip" data-placement="bottom" title="Lottery rating from 1 to 10">
                                        <span class="fa fa-star"></span>
                                        <span class="ratestars_val">6.6</span>
                                    </a>
                                    <div class="time ">
                                        <span class="icon-clock"></span>
                                        <div class="time_val " date-close="18972">5&nbsp;hours</div>
                                    </div>

                                    <div class="lottery_sel">

                                        <div class="event-easy-pick-cont">
                                            <select name="easy_pick" class="lottery_sel_select event-easy-pick-select">
                                                <option></option>
                                                <option value="/en/play-lottery/ca-fantasy-5/?from=circular&easy_pick=3&extra_jackpot=" data-event-easy-pick="1">3 lines for $ 7.50</option>
                                                <option value="/en/play-lottery/ca-fantasy-5/?from=circular&easy_pick=5&extra_jackpot=" data-event-easy-pick="1">5 lines for $ 11.87</option>
                                                <option value="" disabled>–––––&nbsp;or&nbsp;–––––</option>
                                                <option value="/en/play-lottery/ca-fantasy-5/?from=circular&extra_jackpot=">Pick numbers</option>
                                                <option class="light_version_site_hide" value="" disabled>––––––––––––</option>

                                                <option class="opt-system" value="/en/play-lottery/ca-fantasy-5/?from=index_lotto&system=1&extra_jackpot=">System &#128200;</option>
                                            </select>
                                            <a href="/en/play-lottery/ca-fantasy-5/?from=circular&extra_jackpot=" class="btn btn-success event-easy-pick-main-btn">Play<span class="fa-solid fa-chevron-down"></span></a>
                                            <div class="lottery_sel_dropdown">
                                                <div class="offers">
                                                    <p><a href="/en/play-lottery/ca-fantasy-5/?from=circular&easy_pick=3&extra_jackpot=" class="event-easy-pick-offer">3 lines for $ 7.50</a></p>
                                                    <p><a href="/en/play-lottery/ca-fantasy-5/?from=circular&easy_pick=5&extra_jackpot=" class="event-easy-pick-offer">5 lines for $ 11.87</a></p>
                                                </div>
                                                <div class="or">–––––&nbsp;or&nbsp;–––––</div>
                                                <p><a href="/en/play-lottery/ca-fantasy-5/?from=circular&extra_jackpot=" class="lottery_sel_choose">Pick numbers</a></p>
                                                <div class="or light_version_site_hide">–––––––––––––</div>


                                                <p style="margin-top: 5px;"><a href="/en/play-lottery/ca-fantasy-5/?from=index_lotto&system=1&extra_jackpot=" class="lottery_sel_choose game-type-ico lamp opt-system">System</a></p>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div><div class="lottery_slider_item">
                            <div class="lottery_item">
                                <div class="lottery_item_top" style="background-image: url('https://static.cdnland.com/upload/images/bg/us-cash4life.svg');">
                                    <div class="lottery_item_img"><a href="/en/play-lottery/cash-for-life/?from=circular&extra_jackpot="><img src="https://static.cdnland.com/upload/images/logo/svg/cash4life.svg" alt="Cash4Life"/></a></div>
                                    <div class="lottery_item_val"><span class="jack"><b>$ 7</b><br/><span class="mln_icon_extra text-nowrap">Million </span></span></div>
                                </div>
                                <div class="lottery_item_cont">
                                    <a href="#windowAlert" class="ratestars fancybox" onclick="yaGoals('CLEVER');" data-title="Today&#039;s Top-Rated Lotteries" data-text="&lt;p&gt;We analyze dozens of parameters daily: Jackpot amount and tax deductions, winning odds and the number of prize divisions, cost of a single line, and availability of such options as &quot;Multiplier,&quot; and much more to offer you the best possible lottery at the moment!&lt;/p&gt;&lt;p&gt;Choose a lottery with the highest score to win more and spend less!&lt;/p&gt;" data-toggle="tooltip" data-placement="bottom" title="Lottery rating from 1 to 10">
                                        <span class="fa fa-star"></span>
                                        <span class="ratestars_val">7.5</span>
                                    </a>
                                    <div class="time ">
                                        <span class="icon-clock"></span>
                                        <div class="time_val " date-close="22572">6&nbsp;hours</div>
                                    </div>

                                    <div class="lottery_sel">

                                        <div class="event-easy-pick-cont">
                                            <select name="easy_pick" class="lottery_sel_select event-easy-pick-select">
                                                <option></option>
                                                <option value="/en/play-lottery/cash-for-life/?from=circular&easy_pick=1&extra_jackpot=" data-event-easy-pick="1">1 line for $ 5.00</option>
                                                <option value="/en/play-lottery/cash-for-life/?from=circular&easy_pick=3&extra_jackpot=" data-event-easy-pick="1">3 lines for $ 14.25</option>
                                                <option value="" disabled>–––––&nbsp;or&nbsp;–––––</option>
                                                <option value="/en/play-lottery/cash-for-life/?from=circular&extra_jackpot=">Pick numbers</option>
                                                <option class="light_version_site_hide" value="" disabled>––––––––––––</option>

                                                <option class="opt-system" value="/en/play-lottery/cash-for-life/?from=index_lotto&system=1&extra_jackpot=">System &#128200;</option>
                                            </select>
                                            <a href="/en/play-lottery/cash-for-life/?from=circular&extra_jackpot=" class="btn btn-success event-easy-pick-main-btn">Play<span class="fa-solid fa-chevron-down"></span></a>
                                            <div class="lottery_sel_dropdown">
                                                <div class="offers">
                                                    <p><a href="/en/play-lottery/cash-for-life/?from=circular&easy_pick=1&extra_jackpot=" class="event-easy-pick-offer">1 line for $ 5.00</a></p>
                                                    <p><a href="/en/play-lottery/cash-for-life/?from=circular&easy_pick=3&extra_jackpot=" class="event-easy-pick-offer">3 lines for $ 14.25</a></p>
                                                </div>
                                                <div class="or">–––––&nbsp;or&nbsp;–––––</div>
                                                <p><a href="/en/play-lottery/cash-for-life/?from=circular&extra_jackpot=" class="lottery_sel_choose">Pick numbers</a></p>
                                                <div class="or light_version_site_hide">–––––––––––––</div>


                                                <p style="margin-top: 5px;"><a href="/en/play-lottery/cash-for-life/?from=index_lotto&system=1&extra_jackpot=" class="lottery_sel_choose game-type-ico lamp opt-system">System</a></p>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div><div class="lottery_slider_item">
                            <div class="lottery_item">
                                <div class="lottery_item_top" style="background-image: url('https://static.cdnland.com/upload/images/bg/us-megabucks.svg');">
                                    <div class="lottery_item_img"><a href="/en/play-lottery/megabucks/?from=circular&extra_jackpot="><img src="https://static.cdnland.com/upload/images/logo/svg/megabucks.svg" alt="Wisconsin Megabucks"/></a></div>
                                    <div class="lottery_item_val"><span class="jack"><b>$ 1</b><br/><span class="mln_icon_extra text-nowrap">Million </span></span></div>
                                </div>
                                <div class="lottery_item_cont">
                                    <a href="#windowAlert" class="ratestars fancybox" onclick="yaGoals('CLEVER');" data-title="Today&#039;s Top-Rated Lotteries" data-text="&lt;p&gt;We analyze dozens of parameters daily: Jackpot amount and tax deductions, winning odds and the number of prize divisions, cost of a single line, and availability of such options as &quot;Multiplier,&quot; and much more to offer you the best possible lottery at the moment!&lt;/p&gt;&lt;p&gt;Choose a lottery with the highest score to win more and spend less!&lt;/p&gt;" data-toggle="tooltip" data-placement="bottom" title="Lottery rating from 1 to 10">
                                        <span class="fa fa-star"></span>
                                        <span class="ratestars_val">6.6</span>
                                    </a>
                                    <div class="time ">
                                        <span class="icon-clock"></span>
                                        <div class="time_val " date-close="22572">6&nbsp;hours</div>
                                    </div>

                                    <div class="lottery_sel">

                                        <div class="event-easy-pick-cont">
                                            <select name="easy_pick" class="lottery_sel_select event-easy-pick-select">
                                                <option></option>
                                                <option value="/en/play-lottery/megabucks/?from=circular&easy_pick=2&extra_jackpot=" data-event-easy-pick="1">2 lines for $ 3.30</option>
                                                <option value="/en/play-lottery/megabucks/?from=circular&easy_pick=5&extra_jackpot=" data-event-easy-pick="1">5 lines for $ 7.67</option>
                                                <option value="" disabled>–––––&nbsp;or&nbsp;–––––</option>
                                                <option value="/en/play-lottery/megabucks/?from=circular&extra_jackpot=">Pick numbers</option>
                                                <option class="light_version_site_hide" value="" disabled>––––––––––––</option>

                                                <option class="opt-system" value="/en/play-lottery/megabucks/?from=index_lotto&system=1&extra_jackpot=">System &#128200;</option>
                                            </select>
                                            <a href="/en/play-lottery/megabucks/?from=circular&extra_jackpot=" class="btn btn-success event-easy-pick-main-btn">Play<span class="fa-solid fa-chevron-down"></span></a>
                                            <div class="lottery_sel_dropdown">
                                                <div class="offers">
                                                    <p><a href="/en/play-lottery/megabucks/?from=circular&easy_pick=2&extra_jackpot=" class="event-easy-pick-offer">2 lines for $ 3.30</a></p>
                                                    <p><a href="/en/play-lottery/megabucks/?from=circular&easy_pick=5&extra_jackpot=" class="event-easy-pick-offer">5 lines for $ 7.67</a></p>
                                                </div>
                                                <div class="or">–––––&nbsp;or&nbsp;–––––</div>
                                                <p><a href="/en/play-lottery/megabucks/?from=circular&extra_jackpot=" class="lottery_sel_choose">Pick numbers</a></p>
                                                <div class="or light_version_site_hide">–––––––––––––</div>


                                                <p style="margin-top: 5px;"><a href="/en/play-lottery/megabucks/?from=index_lotto&system=1&extra_jackpot=" class="lottery_sel_choose game-type-ico lamp opt-system">System</a></p>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div><div class="lottery_slider_item">
                            <div class="lottery_item">
                                <div class="lottery_item_top" style="background-image: url('https://static.cdnland.com/upload/images/bg/us-lotto-america.svg');">
                                    <div class="lottery_item_img"><a href="{{ route('play') }}><img src="https://static.cdnland.com/upload/images/logo/svg/lotto_america.svg" alt="Lotto America"/></a></div>
                                    <div class="lottery_item_val"><span class="jack"><b>$ 40.03</b><br/><span class="mln_icon_extra text-nowrap">Million </span></span></div>
                                </div>
                                <div class="lottery_item_cont">
                                    <a href="#windowAlert" class="ratestars fancybox" onclick="yaGoals('CLEVER');" data-title="Today&#039;s Top-Rated Lotteries" data-text="&lt;p&gt;We analyze dozens of parameters daily: Jackpot amount and tax deductions, winning odds and the number of prize divisions, cost of a single line, and availability of such options as &quot;Multiplier,&quot; and much more to offer you the best possible lottery at the moment!&lt;/p&gt;&lt;p&gt;Choose a lottery with the highest score to win more and spend less!&lt;/p&gt;" data-toggle="tooltip" data-placement="bottom" title="Lottery rating from 1 to 10">
                                        <span class="fa fa-star"></span>
                                        <span class="ratestars_val">7.5</span>
                                    </a>
                                    <div class="time ">
                                        <span class="icon-clock"></span>
                                        <div class="time_val " date-close="22572">6&nbsp;hours</div>
                                    </div>

                                    <div class="lottery_sel">

                                        <div class="event-easy-pick-cont">
                                            <select name="easy_pick" class="lottery_sel_select event-easy-pick-select">
                                                <option></option>
                                                <option value="{{ route('play') }}" data-event-easy-pick="1">1 line for $ 3.29</option>
                                                <option value="{{ route('play') }}" data-event-easy-pick="1">3 lines for $ 9.57</option>
                                                <option value="" disabled>–––––&nbsp;or&nbsp;–––––</option>
                                                <option value="{{ route('play') }}>Pick numbers</option>
                                                <option class="light_version_site_hide" value="" disabled>––––––––––––</option>

                                                <option class="opt-system" value="/en/play-lottery/lotto-america/?from=index_lotto&system=1&extra_jackpot=">System &#128200;</option>
                                            </select>
                                            <a href="{{ route('play') }} class="btn btn-success event-easy-pick-main-btn">Play<span class="fa-solid fa-chevron-down"></span></a>
                                            <div class="lottery_sel_dropdown">
                                                <div class="offers">
                                                    <p><a href="{{ route('play') }}" class="event-easy-pick-offer">1 line for $ 3.29</a></p>
                                                    <p><a href="{{ route('play') }}" class="event-easy-pick-offer">3 lines for $ 9.57</a></p>
                                                </div>
                                                <div class="or">–––––&nbsp;or&nbsp;–––––</div>
                                                <p><a href="{{ route('play') }} class="lottery_sel_choose">Pick numbers</a></p>
                                                <div class="or light_version_site_hide">–––––––––––––</div>


                                                <p style="margin-top: 5px;"><a href="/en/play-lottery/lotto-america/?from=index_lotto&system=1&extra_jackpot=" class="lottery_sel_choose game-type-ico lamp opt-system">System</a></p>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div><div class="lottery_slider_item">
                            <div class="lottery_item">
                                <div class="lottery_item_top" style="background-image: url('https://static.cdnland.com/upload/images/bg/ca-649-lotto.svg');">
                                    <div class="lottery_item_img"><a href="{{ route('play') }}"><img src="https://static.cdnland.com/upload/images/logo/svg/649_lotto.svg" alt="Lotto 6/49"/></a></div>
                                    <div class="lottery_item_val"><span class="jack"><b>C$ 5</b><br/><span class="mln_icon_extra text-nowrap">Million </span></span></div>
                                </div>
                                <div class="lottery_item_cont">
                                    <a href="#windowAlert" class="ratestars fancybox" onclick="yaGoals('CLEVER');" data-title="Today&#039;s Top-Rated Lotteries" data-text="&lt;p&gt;We analyze dozens of parameters daily: Jackpot amount and tax deductions, winning odds and the number of prize divisions, cost of a single line, and availability of such options as &quot;Multiplier,&quot; and much more to offer you the best possible lottery at the moment!&lt;/p&gt;&lt;p&gt;Choose a lottery with the highest score to win more and spend less!&lt;/p&gt;" data-toggle="tooltip" data-placement="bottom" title="Lottery rating from 1 to 10">
                                        <span class="fa fa-star"></span>
                                        <span class="ratestars_val">7.4</span>
                                    </a>
                                    <div class="time ">
                                        <span class="icon-clock"></span>
                                        <div class="time_val " date-close="22572">6&nbsp;hours</div>
                                    </div>

                                    <div class="lottery_sel">

                                        <div class="event-easy-pick-cont">
                                            <select name="easy_pick" class="lottery_sel_select event-easy-pick-select">
                                                <option></option>
                                                <option value="{{ route('play') }}" data-event-easy-pick="1">1 line for $ 5.91</option>
                                                <option value="{{ route('play') }}" data-event-easy-pick="1">3 lines for $ 16.67</option>
                                                <option value="" disabled>–––––&nbsp;or&nbsp;–––––</option>
                                                <option value="{{ route('play') }}">Pick numbers</option>
                                                <option class="light_version_site_hide" value="" disabled>––––––––––––</option>

                                                <option class="opt-system" value="{{ route('play') }}">System &#128200;</option>
                                            </select>
                                            <a href="{{ route('play') }}" class="btn btn-success event-easy-pick-main-btn">Play<span class="fa-solid fa-chevron-down"></span></a>
                                            <div class="lottery_sel_dropdown">
                                                <div class="offers">
                                                    <p><a href="{{ route('play') }}" class="event-easy-pick-offer">1 line for $ 5.91</a></p>
                                                    <p><a href="{{ route('play') }}" class="event-easy-pick-offer">3 lines for $ 16.67</a></p>
                                                </div>
                                                <div class="or">–––––&nbsp;or&nbsp;–––––</div>
                                                <p><a href="{{ route('play') }}" class="lottery_sel_choose">Pick numbers</a></p>
                                                <div class="or light_version_site_hide">–––––––––––––</div>


                                                <p style="margin-top: 5px;"><a href="{{ route('play') }}" class="lottery_sel_choose game-type-ico lamp opt-system">System</a></p>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div><div class="lottery_slider_item">
                            <div class="lottery_item">
                                <div class="lottery_item_top" style="background-image: url('https://static.cdnland.com/upload/images/bg/us-new-york-lotto.svg');">
                                    <div class="lottery_item_img"><a href="/en/play-lottery/new-york-lotto/?from=circular&extra_jackpot="><img src="https://static.cdnland.com/upload/images/logo/svg/new-york.svg" alt="New York Lotto"/></a></div>
                                    <div class="lottery_item_val"><span class="jack"><b>$ 2</b><br/><span class="mln_icon_extra text-nowrap">Million </span></span></div>
                                </div>
                                <div class="lottery_item_cont">
                                    <a href="#windowAlert" class="ratestars fancybox" onclick="yaGoals('CLEVER');" data-title="Today&#039;s Top-Rated Lotteries" data-text="&lt;p&gt;We analyze dozens of parameters daily: Jackpot amount and tax deductions, winning odds and the number of prize divisions, cost of a single line, and availability of such options as &quot;Multiplier,&quot; and much more to offer you the best possible lottery at the moment!&lt;/p&gt;&lt;p&gt;Choose a lottery with the highest score to win more and spend less!&lt;/p&gt;" data-toggle="tooltip" data-placement="bottom" title="Lottery rating from 1 to 10">
                                        <span class="fa fa-star"></span>
                                        <span class="ratestars_val">7.2</span>
                                    </a>
                                    <div class="time ">
                                        <span class="icon-clock"></span>
                                        <div class="time_val " date-close="26172">7&nbsp;hours</div>
                                    </div>

                                    <div class="lottery_sel">

                                        <div class="event-easy-pick-cont">
                                            <select name="easy_pick" class="lottery_sel_select event-easy-pick-select">
                                                <option></option>
                                                <option value="/en/play-lottery/new-york-lotto/?from=circular&easy_pick=2&extra_jackpot=" data-event-easy-pick="1">2 lines for $ 3.00</option>
                                                <option value="/en/play-lottery/new-york-lotto/?from=circular&easy_pick=4&extra_jackpot=" data-event-easy-pick="1">4 lines for $ 5.82</option>
                                                <option value="" disabled>–––––&nbsp;or&nbsp;–––––</option>
                                                <option value="/en/play-lottery/new-york-lotto/?from=circular&extra_jackpot=">Pick numbers</option>
                                                <option class="light_version_site_hide" value="" disabled>––––––––––––</option>

                                                <option class="opt-system" value="/en/play-lottery/new-york-lotto/?from=index_lotto&system=1&extra_jackpot=">System &#128200;</option>
                                            </select>
                                            <a href="/en/play-lottery/new-york-lotto/?from=circular&extra_jackpot=" class="btn btn-success event-easy-pick-main-btn">Play<span class="fa-solid fa-chevron-down"></span></a>
                                            <div class="lottery_sel_dropdown">
                                                <div class="offers">
                                                    <p><a href="/en/play-lottery/new-york-lotto/?from=circular&easy_pick=2&extra_jackpot=" class="event-easy-pick-offer">2 lines for $ 3.00</a></p>
                                                    <p><a href="/en/play-lottery/new-york-lotto/?from=circular&easy_pick=4&extra_jackpot=" class="event-easy-pick-offer">4 lines for $ 5.82</a></p>
                                                </div>
                                                <div class="or">–––––&nbsp;or&nbsp;–––––</div>
                                                <p><a href="/en/play-lottery/new-york-lotto/?from=circular&extra_jackpot=" class="lottery_sel_choose">Pick numbers</a></p>
                                                <div class="or light_version_site_hide">–––––––––––––</div>


                                                <p style="margin-top: 5px;"><a href="/en/play-lottery/new-york-lotto/?from=index_lotto&system=1&extra_jackpot=" class="lottery_sel_choose game-type-ico lamp opt-system">System</a></p>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div><div class="lottery_slider_item">
                            <div class="lottery_item">
                                <div class="lottery_item_top" style="background-image: url('https://static.cdnland.com/upload/images/bg/us-powerball.svg');">
                                    <div class="lottery_item_img"><a href="{{ route('play') }}"><img src="https://static.cdnland.com/upload/images/logo/svg/powerball.svg" alt="Powerball"/></a></div>
                                    <div class="lottery_item_val"><span class="jack"><b>$ 147</b><br/><span class="mln_icon_extra text-nowrap">Million </span></span></div>
                                </div>
                                <div class="lottery_item_cont">
                                    <a href="#windowAlert" class="ratestars fancybox" onclick="yaGoals('CLEVER');" data-title="Today&#039;s Top-Rated Lotteries" data-text="&lt;p&gt;We analyze dozens of parameters daily: Jackpot amount and tax deductions, winning odds and the number of prize divisions, cost of a single line, and availability of such options as &quot;Multiplier,&quot; and much more to offer you the best possible lottery at the moment!&lt;/p&gt;&lt;p&gt;Choose a lottery with the highest score to win more and spend less!&lt;/p&gt;" data-toggle="tooltip" data-placement="bottom" title="Lottery rating from 1 to 10">
                                        <span class="fa fa-star"></span>
                                        <span class="ratestars_val">7.5</span>
                                    </a>
                                    <div class="time ">
                                        <span class="icon-clock"></span>
                                        <div class="time_val " date-close="26172">7&nbsp;hours</div>
                                    </div>

                                    <div class="lottery_sel">

                                        <div class="event-easy-pick-cont">
                                            <select name="easy_pick" class="lottery_sel_select event-easy-pick-select">
                                                <option></option>
                                                <option value="{{ route('play') }}" data-event-easy-pick="1">1 line for $ 5.29</option>
                                                <option value="{{ route('play') }}" data-event-easy-pick="1">3 lines for $ 14.92</option>
                                                <option value="" disabled>–––––&nbsp;or&nbsp;–––––</option>
                                                <option value="{{ route('play') }}">Pick numbers</option>
                                                <option class="light_version_site_hide" value="" disabled>––––––––––––</option>
                                                <option class="opt-syndicate" value="{{ route('play') }}">Syndicate &#128293;</option>
                                                <option class="opt-system" value="{{ route('play') }}">System &#128200;</option>
                                            </select>
                                            <a href="{{ route('play') }}" class="btn btn-success event-easy-pick-main-btn">Play<span class="fa-solid fa-chevron-down"></span></a>
                                            <div class="lottery_sel_dropdown">
                                                <div class="offers">
                                                    <p><a href="{{ route('play') }}" class="event-easy-pick-offer">1 line for $ 5.29</a></p>
                                                    <p><a href="{{ route('play') }}" class="event-easy-pick-offer">3 lines for $ 14.92</a></p>
                                                </div>
                                                <div class="or">–––––&nbsp;or&nbsp;–––––</div>
                                                <p><a href="{{ route('play') }}" class="lottery_sel_choose">Pick numbers</a></p>
                                                <div class="or light_version_site_hide">–––––––––––––</div>

                                                <p><a href="{{ route('play') }}" class="lottery_sel_choose game-type-ico fire opt-syndicate">Syndicate</a></p>


                                                <p style="margin-top: 5px;"><a href="{{ route('play') }}" class="lottery_sel_choose game-type-ico lamp opt-system">System</a></p>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div><div class="lottery_slider_item">
                            <div class="lottery_item">
                                <div class="lottery_item_top" style="background-image: url('https://static.cdnland.com/upload/images/bg/us-superlotto-plus.svg');">
                                    <div class="lottery_item_img"><a href="{{ route('play') }}"><img src="https://static.cdnland.com/upload/images/logo/svg/superlotto-plus.svg" alt="SuperLotto Plus"/></a></div>
                                    <div class="lottery_item_val"><span class="jack"><b>$ 46</b><br/><span class="mln_icon_extra text-nowrap">Million </span></span></div>
                                </div>
                                <div class="lottery_item_cont">
                                    <a href="#windowAlert" class="ratestars fancybox" onclick="yaGoals('CLEVER');" data-title="Today&#039;s Top-Rated Lotteries" data-text="&lt;p&gt;We analyze dozens of parameters daily: Jackpot amount and tax deductions, winning odds and the number of prize divisions, cost of a single line, and availability of such options as &quot;Multiplier,&quot; and much more to offer you the best possible lottery at the moment!&lt;/p&gt;&lt;p&gt;Choose a lottery with the highest score to win more and spend less!&lt;/p&gt;" data-toggle="tooltip" data-placement="bottom" title="Lottery rating from 1 to 10">
                                        <span class="fa fa-star"></span>
                                        <span class="ratestars_val">7.0</span>
                                    </a>
                                    <div class="time ">
                                        <span class="icon-clock"></span>
                                        <div class="time_val " date-close="26172">7&nbsp;hours</div>
                                    </div>

                                    <div class="lottery_sel">

                                        <div class="event-easy-pick-cont">
                                            <select name="easy_pick" class="lottery_sel_select event-easy-pick-select">
                                                <option></option>
                                                <option value="{{ route('play') }}" data-event-easy-pick="1">2 lines for $ 5.98</option>
                                                <option value="{{ route('play') }}" data-event-easy-pick="1">3 lines for $ 8.52</option>
                                                <option value="" disabled>–––––&nbsp;or&nbsp;–––––</option>
                                                <option value="{{ route('play') }}">Pick numbers</option>
                                                <option class="light_version_site_hide" value="" disabled>––––––––––––</option>
                                                <option class="opt-syndicate" value="{{ route('play') }}">Syndicate &#128293;</option>
                                                <option class="opt-system" value="{{ route('play') }}">System &#128200;</option>
                                            </select>
                                            <a href="{{ route('play') }}" class="btn btn-success event-easy-pick-main-btn">Play<span class="fa-solid fa-chevron-down"></span></a>
                                            <div class="lottery_sel_dropdown">
                                                <div class="offers">
                                                    <p><a href="{{ route('play') }}" class="event-easy-pick-offer">2 lines for $ 5.98</a></p>
                                                    <p><a href="{{ route('play') }}" class="event-easy-pick-offer">3 lines for $ 8.52</a></p>
                                                </div>
                                                <div class="or">–––––&nbsp;or&nbsp;–––––</div>
                                                <p><a href="{{ route('play') }}" class="lottery_sel_choose">Pick numbers</a></p>
                                                <div class="or light_version_site_hide">–––––––––––––</div>

                                                <p><a href="{{ route('play') }}" class="lottery_sel_choose game-type-ico fire opt-syndicate">Syndicate</a></p>


                                                <p style="margin-top: 5px;"><a href="{{ route('play') }}" class="lottery_sel_choose game-type-ico lamp opt-system">System</a></p>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div><div class="lottery_slider_item">
                            <div class="lottery_item">
                                <div class="lottery_item_top" style="background-image: url('https://static.cdnland.com/upload/images/bg/us-texas-lotto.svg');">
                                    <div class="lottery_item_img"><a href="/en/play-lottery/lotto-texas/?from=circular&extra_jackpot="><img src="https://static.cdnland.com/upload/images/logo/svg/texas-lotto.svg" alt="Lotto Texas"/></a></div>
                                    <div class="lottery_item_val"><span class="jack"><b>$ 61</b><br/><span class="mln_icon_extra text-nowrap">Million </span></span></div>
                                </div>
                                <div class="lottery_item_cont">
                                    <a href="#windowAlert" class="ratestars fancybox" onclick="yaGoals('CLEVER');" data-title="Today&#039;s Top-Rated Lotteries" data-text="&lt;p&gt;We analyze dozens of parameters daily: Jackpot amount and tax deductions, winning odds and the number of prize divisions, cost of a single line, and availability of such options as &quot;Multiplier,&quot; and much more to offer you the best possible lottery at the moment!&lt;/p&gt;&lt;p&gt;Choose a lottery with the highest score to win more and spend less!&lt;/p&gt;" data-toggle="tooltip" data-placement="bottom" title="Lottery rating from 1 to 10">
                                        <span class="fa fa-star"></span>
                                        <span class="ratestars_val">7.2</span>
                                    </a>
                                    <div class="time ">
                                        <span class="icon-clock"></span>
                                        <div class="time_val " date-close="29772">8&nbsp;hours</div>
                                    </div>

                                    <div class="lottery_sel">

                                        <div class="event-easy-pick-cont">
                                            <select name="easy_pick" class="lottery_sel_select event-easy-pick-select">
                                                <option></option>
                                                <option value="/en/play-lottery/lotto-texas/?from=circular&easy_pick=1&extra_jackpot=" data-event-easy-pick="1">1 line for $ 3.79</option>
                                                <option value="/en/play-lottery/lotto-texas/?from=circular&easy_pick=3&extra_jackpot=" data-event-easy-pick="1">3 lines for $ 10.80</option>
                                                <option value="" disabled>–––––&nbsp;or&nbsp;–––––</option>
                                                <option value="/en/play-lottery/lotto-texas/?from=circular&extra_jackpot=">Pick numbers</option>
                                                <option class="light_version_site_hide" value="" disabled>––––––––––––</option>

                                                <option class="opt-system" value="/en/play-lottery/lotto-texas/?from=index_lotto&system=1&extra_jackpot=">System &#128200;</option>
                                            </select>
                                            <a href="/en/play-lottery/lotto-texas/?from=circular&extra_jackpot=" class="btn btn-success event-easy-pick-main-btn">Play<span class="fa-solid fa-chevron-down"></span></a>
                                            <div class="lottery_sel_dropdown">
                                                <div class="offers">
                                                    <p><a href="/en/play-lottery/lotto-texas/?from=circular&easy_pick=1&extra_jackpot=" class="event-easy-pick-offer">1 line for $ 3.79</a></p>
                                                    <p><a href="/en/play-lottery/lotto-texas/?from=circular&easy_pick=3&extra_jackpot=" class="event-easy-pick-offer">3 lines for $ 10.80</a></p>
                                                </div>
                                                <div class="or">–––––&nbsp;or&nbsp;–––––</div>
                                                <p><a href="/en/play-lottery/lotto-texas/?from=circular&extra_jackpot=" class="lottery_sel_choose">Pick numbers</a></p>
                                                <div class="or light_version_site_hide">–––––––––––––</div>


                                                <p style="margin-top: 5px;"><a href="/en/play-lottery/lotto-texas/?from=index_lotto&system=1&extra_jackpot=" class="lottery_sel_choose game-type-ico lamp opt-system">System</a></p>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div><div class="lottery_slider_item">
                            <div class="lottery_item">
                                <div class="lottery_item_top" style="background-image: url('https://static.cdnland.com/upload/images/bg/au-set_for_life.svg');">
                                    <div class="lottery_item_img"><a href="{{ route('play') }}"><img src="https://static.cdnland.com/upload/images/logo/svg/set_for_life.svg" alt="Set for Life (AU)"/></a></div>
                                    <div class="lottery_item_val"><span class="jack"><b>A$ 4.8</b><br/><span class="mln_icon_extra text-nowrap">Million </span></span></div>
                                </div>
                                <div class="lottery_item_cont">
                                    <a href="#windowAlert" class="ratestars fancybox" onclick="yaGoals('CLEVER');" data-title="Today&#039;s Top-Rated Lotteries" data-text="&lt;p&gt;We analyze dozens of parameters daily: Jackpot amount and tax deductions, winning odds and the number of prize divisions, cost of a single line, and availability of such options as &quot;Multiplier,&quot; and much more to offer you the best possible lottery at the moment!&lt;/p&gt;&lt;p&gt;Choose a lottery with the highest score to win more and spend less!&lt;/p&gt;" data-toggle="tooltip" data-placement="bottom" title="Lottery rating from 1 to 10">
                                        <span class="fa fa-star"></span>
                                        <span class="ratestars_val">7.5</span>
                                    </a>
                                    <div class="time ">
                                        <span class="icon-clock"></span>
                                        <div class="time_val " date-close="54972">15&nbsp;hours</div>
                                    </div>

                                    <div class="lottery_sel">

                                        <div class="event-easy-pick-cont">
                                            <select name="easy_pick" class="lottery_sel_select event-easy-pick-select">
                                                <option></option>
                                                <option value="{{ route('play') }}" data-event-easy-pick="1">7 lines for $ 7.49</option>
                                                <option value="{{ route('play') }}" data-event-easy-pick="1">14 lines for $ 14.23</option>
                                                <option value="" disabled>–––––&nbsp;or&nbsp;–––––</option>
                                                <option value="{{ route('play') }}">Pick numbers</option>
                                                <option class="light_version_site_hide" value="" disabled>––––––––––––</option>

                                                <option class="opt-system" value="{{ route('play') }}">System &#128200;</option>
                                            </select>
                                            <a href="{{ route('play') }}" class="btn btn-success event-easy-pick-main-btn">Play<span class="fa-solid fa-chevron-down"></span></a>
                                            <div class="lottery_sel_dropdown">
                                                <div class="offers">
                                                    <p><a href="{{ route('play') }}" class="event-easy-pick-offer">7 lines for $ 7.49</a></p>
                                                    <p><a href="{{ route('play') }}" class="event-easy-pick-offer">14 lines for $ 14.23</a></p>
                                                </div>
                                                <div class="or">–––––&nbsp;or&nbsp;–––––</div>
                                                <p><a href="{{ route('play') }}" class="lottery_sel_choose">Pick numbers</a></p>
                                                <div class="or light_version_site_hide">–––––––––––––</div>


                                                <p style="margin-top: 5px;"><a href="{{ route('play') }}" class="lottery_sel_choose game-type-ico lamp opt-system">System</a></p>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div><div class="lottery_slider_item">
                            <div class="lottery_item">
                                <div class="lottery_item_top" style="background-image: url('https://static.cdnland.com/upload/images/bg/at-austria_lotto.svg');">
                                    <div class="lottery_item_img"><a href="/en/play-lottery/lotto-austria/?from=circular&extra_jackpot="><img src="https://static.cdnland.com/upload/images/logo/svg/austria_lotto.svg" alt="Lotto Austria"/></a></div>
                                    <div class="lottery_item_val"><span class="jack"><b>€ 1.4</b><br/><span class="mln_icon_extra text-nowrap">Million </span></span></div>
                                </div>
                                <div class="lottery_item_cont">
                                    <a href="#windowAlert" class="ratestars fancybox" onclick="yaGoals('CLEVER');" data-title="Today&#039;s Top-Rated Lotteries" data-text="&lt;p&gt;We analyze dozens of parameters daily: Jackpot amount and tax deductions, winning odds and the number of prize divisions, cost of a single line, and availability of such options as &quot;Multiplier,&quot; and much more to offer you the best possible lottery at the moment!&lt;/p&gt;&lt;p&gt;Choose a lottery with the highest score to win more and spend less!&lt;/p&gt;" data-toggle="tooltip" data-placement="bottom" title="Lottery rating from 1 to 10">
                                        <span class="fa fa-star"></span>
                                        <span class="ratestars_val">7.6</span>
                                    </a>
                                    <div class="time ">
                                        <span class="icon-clock"></span>
                                        <div class="time_val " date-close="76572">21&nbsp;hour</div>
                                    </div>

                                    <div class="lottery_sel">

                                        <div class="event-easy-pick-cont">
                                            <select name="easy_pick" class="lottery_sel_select event-easy-pick-select">
                                                <option></option>
                                                <option value="/en/play-lottery/lotto-austria/?from=circular&easy_pick=1&extra_jackpot=" data-event-easy-pick="1">1 line for $ 3.80</option>
                                                <option value="/en/play-lottery/lotto-austria/?from=circular&easy_pick=3&extra_jackpot=" data-event-easy-pick="1">3 lines for $ 11.06</option>
                                                <option value="" disabled>–––––&nbsp;or&nbsp;–––––</option>
                                                <option value="/en/play-lottery/lotto-austria/?from=circular&extra_jackpot=">Pick numbers</option>
                                                <option class="light_version_site_hide" value="" disabled>––––––––––––</option>
                                                <option class="opt-syndicate" value="/en/play-lottery/lotto-austria/?from=index_lotto&syndicates=1&extra_jackpot=">Syndicate &#128293;</option>
                                                <option class="opt-system" value="/en/play-lottery/lotto-austria/?from=index_lotto&system=1&extra_jackpot=">System &#128200;</option>
                                            </select>
                                            <a href="/en/play-lottery/lotto-austria/?from=circular&extra_jackpot=" class="btn btn-success event-easy-pick-main-btn">Play<span class="fa-solid fa-chevron-down"></span></a>
                                            <div class="lottery_sel_dropdown">
                                                <div class="offers">
                                                    <p><a href="/en/play-lottery/lotto-austria/?from=circular&easy_pick=1&extra_jackpot=" class="event-easy-pick-offer">1 line for $ 3.80</a></p>
                                                    <p><a href="/en/play-lottery/lotto-austria/?from=circular&easy_pick=3&extra_jackpot=" class="event-easy-pick-offer">3 lines for $ 11.06</a></p>
                                                </div>
                                                <div class="or">–––––&nbsp;or&nbsp;–––––</div>
                                                <p><a href="/en/play-lottery/lotto-austria/?from=circular&extra_jackpot=" class="lottery_sel_choose">Pick numbers</a></p>
                                                <div class="or light_version_site_hide">–––––––––––––</div>

                                                <p><a href="/en/play-lottery/lotto-austria/?from=index_lotto&syndicates=1&extra_jackpot=" class="lottery_sel_choose game-type-ico fire opt-syndicate">Syndicate</a></p>


                                                <p style="margin-top: 5px;"><a href="/en/play-lottery/lotto-austria/?from=index_lotto&system=1&extra_jackpot=" class="lottery_sel_choose game-type-ico lamp opt-system">System</a></p>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div><div class="lottery_slider_item">
                            <div class="lottery_item">
                                <div class="lottery_item_top" style="background-image: url('https://static.cdnland.com/upload/images/bg/za-daily_lotto.svg');">
                                    <div class="lottery_item_img"><a href="/en/play-lottery/za-daily-lotto/?from=circular&extra_jackpot="><img src="https://static.cdnland.com/upload/images/logo/svg/daily_lotto.svg" alt="South Africa Daily Lotto"/></a></div>
                                    <div class="lottery_item_val"><span class="jack"><b>R 40+</b><br/><span class="mln_icon_extra text-nowrap">Thousand </span></span></div>
                                </div>
                                <div class="lottery_item_cont">
                                    <a href="#windowAlert" class="ratestars fancybox" onclick="yaGoals('CLEVER');" data-title="Today&#039;s Top-Rated Lotteries" data-text="&lt;p&gt;We analyze dozens of parameters daily: Jackpot amount and tax deductions, winning odds and the number of prize divisions, cost of a single line, and availability of such options as &quot;Multiplier,&quot; and much more to offer you the best possible lottery at the moment!&lt;/p&gt;&lt;p&gt;Choose a lottery with the highest score to win more and spend less!&lt;/p&gt;" data-toggle="tooltip" data-placement="bottom" title="Lottery rating from 1 to 10">
                                        <span class="fa fa-star"></span>
                                        <span class="ratestars_val">6.6</span>
                                    </a>
                                    <div class="time ">
                                        <span class="icon-clock"></span>
                                        <div class="time_val " date-close="80172">22&nbsp;hours</div>
                                    </div>

                                    <div class="lottery_sel">

                                        <div class="event-easy-pick-cont">
                                            <select name="easy_pick" class="lottery_sel_select event-easy-pick-select">
                                                <option></option>
                                                <option value="/en/play-lottery/za-daily-lotto/?from=circular&easy_pick=10&extra_jackpot=" data-event-easy-pick="1">10 lines for $ 4.27</option>
                                                <option value="/en/play-lottery/za-daily-lotto/?from=circular&easy_pick=15&extra_jackpot=" data-event-easy-pick="1">15 lines for $ 6.34</option>
                                                <option value="" disabled>–––––&nbsp;or&nbsp;–––––</option>
                                                <option value="/en/play-lottery/za-daily-lotto/?from=circular&extra_jackpot=">Pick numbers</option>
                                                <option class="light_version_site_hide" value="" disabled>––––––––––––</option>

                                                <option class="opt-system" value="/en/play-lottery/za-daily-lotto/?from=index_lotto&system=1&extra_jackpot=">System &#128200;</option>
                                            </select>
                                            <a href="/en/play-lottery/za-daily-lotto/?from=circular&extra_jackpot=" class="btn btn-success event-easy-pick-main-btn">Play<span class="fa-solid fa-chevron-down"></span></a>
                                            <div class="lottery_sel_dropdown">
                                                <div class="offers">
                                                    <p><a href="/en/play-lottery/za-daily-lotto/?from=circular&easy_pick=10&extra_jackpot=" class="event-easy-pick-offer">10 lines for $ 4.27</a></p>
                                                    <p><a href="/en/play-lottery/za-daily-lotto/?from=circular&easy_pick=15&extra_jackpot=" class="event-easy-pick-offer">15 lines for $ 6.34</a></p>
                                                </div>
                                                <div class="or">–––––&nbsp;or&nbsp;–––––</div>
                                                <p><a href="/en/play-lottery/za-daily-lotto/?from=circular&extra_jackpot=" class="lottery_sel_choose">Pick numbers</a></p>
                                                <div class="or light_version_site_hide">–––––––––––––</div>


                                                <p style="margin-top: 5px;"><a href="/en/play-lottery/za-daily-lotto/?from=index_lotto&system=1&extra_jackpot=" class="lottery_sel_choose game-type-ico lamp opt-system">System</a></p>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div><div class="lottery_slider_item">
                            <div class="lottery_item">
                                <div class="lottery_item_top" style="background-image: url('https://static.cdnland.com/upload/images/bg/mx-melate.svg');">
                                    <div class="lottery_item_img"><a href="{{ route('play') }}"><img src="https://static.cdnland.com/upload/images/logo/svg/melate_logo.svg" alt="Mexico Melate"/></a></div>
                                    <div class="lottery_item_val"><span class="jack"><b>M$ 30.1</b><br/><span class="mln_icon_extra text-nowrap">Million </span></span></div>
                                </div>
                                <div class="lottery_item_cont">
                                    <a href="#windowAlert" class="ratestars fancybox" onclick="yaGoals('CLEVER');" data-title="Today&#039;s Top-Rated Lotteries" data-text="&lt;p&gt;We analyze dozens of parameters daily: Jackpot amount and tax deductions, winning odds and the number of prize divisions, cost of a single line, and availability of such options as &quot;Multiplier,&quot; and much more to offer you the best possible lottery at the moment!&lt;/p&gt;&lt;p&gt;Choose a lottery with the highest score to win more and spend less!&lt;/p&gt;" data-toggle="tooltip" data-placement="bottom" title="Lottery rating from 1 to 10">
                                        <span class="fa fa-star"></span>
                                        <span class="ratestars_val">7.5</span>
                                    </a>
                                    <div class="time ">
                                        <span class="icon-clock"></span>
                                        <div class="time_val " date-close="108972">1&nbsp;day</div>
                                    </div>

                                    <div class="lottery_sel">

                                        <div class="event-easy-pick-cont">
                                            <select name="easy_pick" class="lottery_sel_select event-easy-pick-select">
                                                <option></option>
                                                <option value="{{ route('play') }}" data-event-easy-pick="1">5 lines for $ 10.40</option>
                                                <option value="{{ route('play') }}" data-event-easy-pick="1">10 lines for $ 19.76</option>
                                                <option value="" disabled>–––––&nbsp;or&nbsp;–––––</option>
                                                <option value="{{ route('play') }}">Pick numbers</option>
                                                <option class="light_version_site_hide" value="" disabled>––––––––––––</option>

                                                <option class="opt-system" value="{{ route('play') }}">System &#128200;</option>
                                            </select>
                                            <a href="{{ route('play') }}" class="btn btn-success event-easy-pick-main-btn">Play<span class="fa-solid fa-chevron-down"></span></a>
                                            <div class="lottery_sel_dropdown">
                                                <div class="offers">
                                                    <p><a href="{{ route('play') }}" class="event-easy-pick-offer">5 lines for $ 10.40</a></p>
                                                    <p><a href="{{ route('play') }}" class="event-easy-pick-offer">10 lines for $ 19.76</a></p>
                                                </div>
                                                <div class="or">–––––&nbsp;or&nbsp;–––––</div>
                                                <p><a href="{{ route('play') }}" class="lottery_sel_choose">Pick numbers</a></p>
                                                <div class="or light_version_site_hide">–––––––––––––</div>


                                                <p style="margin-top: 5px;"><a href="{{ route('play') }}" class="lottery_sel_choose game-type-ico lamp opt-system">System</a></p>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div><div class="lottery_slider_item">
                            <div class="lottery_item">
                                <div class="lottery_item_top" style="background-image: url('https://static.cdnland.com/upload/images/bg/au-mon-wed-lotto.svg');">
                                    <div class="lottery_item_img"><a href="{{ route('play') }}"><img src="https://static.cdnland.com/upload/images/logo/svg/monwed_lotto.svg" alt="Monday &amp; Wednesday Lotto"/></a></div>
                                    <div class="lottery_item_val"><span class="jack"><b>A$ 1</b><br/><span class="mln_icon_extra text-nowrap">Million </span></span></div>
                                </div>
                                <div class="lottery_item_cont">
                                    <a href="#windowAlert" class="ratestars fancybox" onclick="yaGoals('CLEVER');" data-title="Today&#039;s Top-Rated Lotteries" data-text="&lt;p&gt;We analyze dozens of parameters daily: Jackpot amount and tax deductions, winning odds and the number of prize divisions, cost of a single line, and availability of such options as &quot;Multiplier,&quot; and much more to offer you the best possible lottery at the moment!&lt;/p&gt;&lt;p&gt;Choose a lottery with the highest score to win more and spend less!&lt;/p&gt;" data-toggle="tooltip" data-placement="bottom" title="Lottery rating from 1 to 10">
                                        <span class="fa fa-star"></span>
                                        <span class="ratestars_val">7.4</span>
                                    </a>
                                    <div class="time ">
                                        <span class="icon-clock"></span>
                                        <div class="time_val " date-close="126972">1&nbsp;day</div>
                                    </div>

                                    <div class="lottery_sel">

                                        <div class="event-easy-pick-cont">
                                            <select name="easy_pick" class="lottery_sel_select event-easy-pick-select">
                                                <option></option>
                                                <option value="{{ route('play') }}" data-event-easy-pick="1">7 lines for $ 7.31</option>
                                                <option value="{{ route('play') }}" data-event-easy-pick="1">14 lines for $ 13.86</option>
                                                <option value="" disabled>–––––&nbsp;or&nbsp;–––––</option>
                                                <option value="{{ route('play') }}">Pick numbers</option>
                                                <option class="light_version_site_hide" value="" disabled>––––––––––––</option>
                                                <option class="opt-syndicate" value="{{ route('play') }}">Syndicate &#128293;</option>
                                                <option class="opt-system" value="{{ route('play') }}">System &#128200;</option>
                                            </select>
                                            <a href="{{ route('play') }}" class="btn btn-success event-easy-pick-main-btn">Play<span class="fa-solid fa-chevron-down"></span></a>
                                            <div class="lottery_sel_dropdown">
                                                <div class="offers">
                                                    <p><a href="{{ route('play') }}" class="event-easy-pick-offer">7 lines for $ 7.31</a></p>
                                                    <p><a href="{{ route('play') }}" class="event-easy-pick-offer">14 lines for $ 13.86</a></p>
                                                </div>
                                                <div class="or">–––––&nbsp;or&nbsp;–––––</div>
                                                <p><a href="{{ route('play') }}" class="lottery_sel_choose">Pick numbers</a></p>
                                                <div class="or light_version_site_hide">–––––––––––––</div>

                                                <p><a href="{{ route('play') }}" class="lottery_sel_choose game-type-ico fire opt-syndicate">Syndicate</a></p>


                                                <p style="margin-top: 5px;"><a href="{{ route('play') }}" class="lottery_sel_choose game-type-ico lamp opt-system">System</a></p>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div><div class="lottery_slider_item">
                            <div class="lottery_item">
                                <div class="lottery_item_top" style="background-image: url('https://static.cdnland.com/upload/images/bg/es-la-primitiva.svg');">
                                    <div class="lottery_item_img"><a href="/en/play-lottery/la-primitiva/?from=circular&extra_jackpot="><img src="https://static.cdnland.com/upload/images/logo/svg/la_primitiva.svg" alt="La Primitiva"/></a></div>
                                    <div class="lottery_item_val"><span class="jack"><b>€ 2+</b><br/><span class="mln_icon_extra text-nowrap">Million </span></span></div>
                                </div>
                                <div class="lottery_item_cont">
                                    <a href="#windowAlert" class="ratestars fancybox" onclick="yaGoals('CLEVER');" data-title="Today&#039;s Top-Rated Lotteries" data-text="&lt;p&gt;We analyze dozens of parameters daily: Jackpot amount and tax deductions, winning odds and the number of prize divisions, cost of a single line, and availability of such options as &quot;Multiplier,&quot; and much more to offer you the best possible lottery at the moment!&lt;/p&gt;&lt;p&gt;Choose a lottery with the highest score to win more and spend less!&lt;/p&gt;" data-toggle="tooltip" data-placement="bottom" title="Lottery rating from 1 to 10">
                                        <span class="fa fa-star"></span>
                                        <span class="ratestars_val">6.4</span>
                                    </a>
                                    <div class="time ">
                                        <span class="icon-clock"></span>
                                        <div class="time_val " date-close="166572">1&nbsp;day</div>
                                    </div>

                                    <div class="lottery_sel">

                                        <div class="event-easy-pick-cont">
                                            <select name="easy_pick" class="lottery_sel_select event-easy-pick-select">
                                                <option></option>
                                                <option value="/en/play-lottery/la-primitiva/?from=circular&easy_pick=1&extra_jackpot=" data-event-easy-pick="1">1 line for $ 3.04</option>
                                                <option value="/en/play-lottery/la-primitiva/?from=circular&easy_pick=4&extra_jackpot=" data-event-easy-pick="1">4 lines for $ 10.94</option>
                                                <option value="" disabled>–––––&nbsp;or&nbsp;–––––</option>
                                                <option value="/en/play-lottery/la-primitiva/?from=circular&extra_jackpot=">Pick numbers</option>
                                                <option class="light_version_site_hide" value="" disabled>––––––––––––</option>
                                                <option class="opt-syndicate" value="/en/play-lottery/la-primitiva/?from=index_lotto&syndicates=1&extra_jackpot=">Syndicate &#128293;</option>
                                                <option class="opt-system" value="/en/play-lottery/la-primitiva/?from=index_lotto&system=1&extra_jackpot=">System &#128200;</option>
                                            </select>
                                            <a href="/en/play-lottery/la-primitiva/?from=circular&extra_jackpot=" class="btn btn-success event-easy-pick-main-btn">Play<span class="fa-solid fa-chevron-down"></span></a>
                                            <div class="lottery_sel_dropdown">
                                                <div class="offers">
                                                    <p><a href="/en/play-lottery/la-primitiva/?from=circular&easy_pick=1&extra_jackpot=" class="event-easy-pick-offer">1 line for $ 3.04</a></p>
                                                    <p><a href="/en/play-lottery/la-primitiva/?from=circular&easy_pick=4&extra_jackpot=" class="event-easy-pick-offer">4 lines for $ 10.94</a></p>
                                                </div>
                                                <div class="or">–––––&nbsp;or&nbsp;–––––</div>
                                                <p><a href="/en/play-lottery/la-primitiva/?from=circular&extra_jackpot=" class="lottery_sel_choose">Pick numbers</a></p>
                                                <div class="or light_version_site_hide">–––––––––––––</div>

                                                <p><a href="/en/play-lottery/la-primitiva/?from=index_lotto&syndicates=1&extra_jackpot=" class="lottery_sel_choose game-type-ico fire opt-syndicate">Syndicate</a></p>


                                                <p style="margin-top: 5px;"><a href="/en/play-lottery/la-primitiva/?from=index_lotto&system=1&extra_jackpot=" class="lottery_sel_choose game-type-ico lamp opt-system">System</a></p>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div><div class="lottery_slider_item">
                            <div class="lottery_item">
                                <div class="lottery_item_top" style="background-image: url('https://static.cdnland.com/upload/images/bg/fr-france-lotto.svg');">
                                    <div class="lottery_item_img"><a href="/en/play-lottery/france-loto/?from=circular&extra_jackpot="><img src="https://static.cdnland.com/upload/images/logo/svg/france-lotto.svg" alt="France Loto"/></a></div>
                                    <div class="lottery_item_val"><span class="jack"><b>€ 2+</b><br/><span class="mln_icon_extra text-nowrap">Million </span></span></div>
                                </div>
                                <div class="lottery_item_cont">
                                    <a href="#windowAlert" class="ratestars fancybox" onclick="yaGoals('CLEVER');" data-title="Today&#039;s Top-Rated Lotteries" data-text="&lt;p&gt;We analyze dozens of parameters daily: Jackpot amount and tax deductions, winning odds and the number of prize divisions, cost of a single line, and availability of such options as &quot;Multiplier,&quot; and much more to offer you the best possible lottery at the moment!&lt;/p&gt;&lt;p&gt;Choose a lottery with the highest score to win more and spend less!&lt;/p&gt;" data-toggle="tooltip" data-placement="bottom" title="Lottery rating from 1 to 10">
                                        <span class="fa fa-star"></span>
                                        <span class="ratestars_val">7.1</span>
                                    </a>
                                    <div class="time ">
                                        <span class="icon-clock"></span>
                                        <div class="time_val " date-close="159372">1&nbsp;day</div>
                                    </div>

                                    <div class="lottery_sel">

                                        <div class="event-easy-pick-cont">
                                            <select name="easy_pick" class="lottery_sel_select event-easy-pick-select">
                                                <option></option>
                                                <option value="/en/play-lottery/france-loto/?from=circular&easy_pick=1&extra_jackpot=" data-event-easy-pick="1">1 line for $ 6.20</option>
                                                <option value="/en/play-lottery/france-loto/?from=circular&easy_pick=3&extra_jackpot=" data-event-easy-pick="1">3 lines for $ 17.67</option>
                                                <option value="" disabled>–––––&nbsp;or&nbsp;–––––</option>
                                                <option value="/en/play-lottery/france-loto/?from=circular&extra_jackpot=">Pick numbers</option>
                                                <option class="light_version_site_hide" value="" disabled>––––––––––––</option>

                                                <option class="opt-system" value="/en/play-lottery/france-loto/?from=index_lotto&system=1&extra_jackpot=">System &#128200;</option>
                                            </select>
                                            <a href="/en/play-lottery/france-loto/?from=circular&extra_jackpot=" class="btn btn-success event-easy-pick-main-btn">Play<span class="fa-solid fa-chevron-down"></span></a>
                                            <div class="lottery_sel_dropdown">
                                                <div class="offers">
                                                    <p><a href="/en/play-lottery/france-loto/?from=circular&easy_pick=1&extra_jackpot=" class="event-easy-pick-offer">1 line for $ 6.20</a></p>
                                                    <p><a href="/en/play-lottery/france-loto/?from=circular&easy_pick=3&extra_jackpot=" class="event-easy-pick-offer">3 lines for $ 17.67</a></p>
                                                </div>
                                                <div class="or">–––––&nbsp;or&nbsp;–––––</div>
                                                <p><a href="/en/play-lottery/france-loto/?from=circular&extra_jackpot=" class="lottery_sel_choose">Pick numbers</a></p>
                                                <div class="or light_version_site_hide">–––––––––––––</div>


                                                <p style="margin-top: 5px;"><a href="/en/play-lottery/france-loto/?from=index_lotto&system=1&extra_jackpot=" class="lottery_sel_choose game-type-ico lamp opt-system">System</a></p>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div><div class="lottery_slider_item">
                            <div class="lottery_item">
                                <div class="lottery_item_top" style="background-image: url('https://static.cdnland.com/upload/images/bg/es-bonoloto.svg');">
                                    <div class="lottery_item_img"><a href="{{ route('play') }}"><img src="https://static.cdnland.com/upload/images/logo/svg/bonoloto.svg" alt="BonoLoto"/></a></div>
                                    <div class="lottery_item_val"><span class="jack"><b>€ 400+</b><br/><span class="mln_icon_extra text-nowrap">Thousand </span></span></div>
                                </div>
                                <div class="lottery_item_cont">
                                    <a href="#windowAlert" class="ratestars fancybox" onclick="yaGoals('CLEVER');" data-title="Today&#039;s Top-Rated Lotteries" data-text="&lt;p&gt;We analyze dozens of parameters daily: Jackpot amount and tax deductions, winning odds and the number of prize divisions, cost of a single line, and availability of such options as &quot;Multiplier,&quot; and much more to offer you the best possible lottery at the moment!&lt;/p&gt;&lt;p&gt;Choose a lottery with the highest score to win more and spend less!&lt;/p&gt;" data-toggle="tooltip" data-placement="bottom" title="Lottery rating from 1 to 10">
                                        <span class="fa fa-star"></span>
                                        <span class="ratestars_val">7.3</span>
                                    </a>
                                    <div class="time ">
                                        <span class="icon-clock"></span>
                                        <div class="time_val " date-close="170172">1&nbsp;day</div>
                                    </div>

                                    <div class="lottery_sel">

                                        <div class="event-easy-pick-cont">
                                            <select name="easy_pick" class="lottery_sel_select event-easy-pick-select">
                                                <option></option>
                                                <option value="/en/play-lottery/bonoloto/?from=circular&easy_pick=2&extra_jackpot=" data-event-easy-pick="1">2 lines for $ 3.70</option>
                                                <option value="/en/play-lottery/bonoloto/?from=circular&easy_pick=4&extra_jackpot=" data-event-easy-pick="1">4 lines for $ 7.03</option>
                                                <option value="" disabled>–––––&nbsp;or&nbsp;–––––</option>
                                                <option value="{{ route('play') }}">Pick numbers</option>
                                                <option class="light_version_site_hide" value="" disabled>––––––––––––</option>

                                                <option class="opt-system" value="{{ route('play') }}">System &#128200;</option>
                                            </select>
                                            <a href="{{ route('play') }}" class="btn btn-success event-easy-pick-main-btn">Play<span class="fa-solid fa-chevron-down"></span></a>
                                            <div class="lottery_sel_dropdown">
                                                <div class="offers">
                                                    <p><a href="/en/play-lottery/bonoloto/?from=circular&easy_pick=2&extra_jackpot=" class="event-easy-pick-offer">2 lines for $ 3.70</a></p>
                                                    <p><a href="/en/play-lottery/bonoloto/?from=circular&easy_pick=4&extra_jackpot=" class="event-easy-pick-offer">4 lines for $ 7.03</a></p>
                                                </div>
                                                <div class="or">–––––&nbsp;or&nbsp;–––––</div>
                                                <p><a href="{{ route('play') }}" class="lottery_sel_choose">Pick numbers</a></p>
                                                <div class="or light_version_site_hide">–––––––––––––</div>


                                                <p style="margin-top: 5px;"><a href="{{ route('play') }}" class="lottery_sel_choose game-type-ico lamp opt-system">System</a></p>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div><div class="lottery_slider_item">
                            <div class="lottery_item">
                                <div class="lottery_item_top" style="background-image: url('https://static.cdnland.com/upload/images/bg/au-ozlotto.svg');">
                                    <div class="lottery_item_img"><a href="{{ route('play') }}"><img src="https://static.cdnland.com/upload/images/logo/svg/oz-lotto.svg" alt="Oz Lotto"/></a></div>
                                    <div class="lottery_item_val"><span class="jack"><b>A$ 20</b><br/><span class="mln_icon_extra text-nowrap">Million </span></span></div>
                                </div>
                                <div class="lottery_item_cont">
                                    <a href="#windowAlert" class="ratestars fancybox" onclick="yaGoals('CLEVER');" data-title="Today&#039;s Top-Rated Lotteries" data-text="&lt;p&gt;We analyze dozens of parameters daily: Jackpot amount and tax deductions, winning odds and the number of prize divisions, cost of a single line, and availability of such options as &quot;Multiplier,&quot; and much more to offer you the best possible lottery at the moment!&lt;/p&gt;&lt;p&gt;Choose a lottery with the highest score to win more and spend less!&lt;/p&gt;" data-toggle="tooltip" data-placement="bottom" title="Lottery rating from 1 to 10">
                                        <span class="fa fa-star"></span>
                                        <span class="ratestars_val">7.4</span>
                                    </a>
                                    <div class="time ">
                                        <span class="icon-clock"></span>
                                        <div class="time_val " date-close="213372">2&nbsp;days</div>
                                    </div>

                                    <div class="lottery_sel">

                                        <div class="event-easy-pick-cont">
                                            <select name="easy_pick" class="lottery_sel_select event-easy-pick-select">
                                                <option></option>
                                                <option value="{{ route('play') }}" data-event-easy-pick="1">4 lines for $ 10.04</option>
                                                <option value="{{ route('play') }}" data-event-easy-pick="1">7 lines for $ 16.34</option>
                                                <option value="" disabled>–––––&nbsp;or&nbsp;–––––</option>
                                                <option value="{{ route('play') }}">Pick numbers</option>
                                                <option class="light_version_site_hide" value="" disabled>––––––––––––</option>
                                                <option class="opt-syndicate" value="{{ route('play') }}">Syndicate &#128293;</option>
                                                <option class="opt-system" value="{{ route('play') }}">System &#128200;</option>
                                            </select>
                                            <a href="{{ route('play') }}" class="btn btn-success event-easy-pick-main-btn">Play<span class="fa-solid fa-chevron-down"></span></a>
                                            <div class="lottery_sel_dropdown">
                                                <div class="offers">
                                                    <p><a href="{{ route('play') }}" class="event-easy-pick-offer">4 lines for $ 10.04</a></p>
                                                    <p><a href="{{ route('play') }}" class="event-easy-pick-offer">7 lines for $ 16.34</a></p>
                                                </div>
                                                <div class="or">–––––&nbsp;or&nbsp;–––––</div>
                                                <p><a href="{{ route('play') }}" class="lottery_sel_choose">Pick numbers</a></p>
                                                <div class="or light_version_site_hide">–––––––––––––</div>

                                                <p><a href="{{ route('play') }}" class="lottery_sel_choose game-type-ico fire opt-syndicate">Syndicate</a></p>


                                                <p style="margin-top: 5px;"><a href="{{ route('play') }}" class="lottery_sel_choose game-type-ico lamp opt-system">System</a></p>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div><div class="lottery_slider_item">
                            <div class="lottery_item">
                                <div class="lottery_item_top" style="background-image: url('https://static.cdnland.com/upload/images/bg/it-superenalotto.svg');">
                                    <div class="lottery_item_img"><a href="{{ route('play') }}"><img src="https://static.cdnland.com/upload/images/logo/svg/superenalotto.svg" alt="SuperEnalotto"/></a></div>
                                    <div class="lottery_item_val"><span class="jack"><b>€ 1.3+</b><br/><span class="mln_icon_extra text-nowrap">Million </span></span></div>
                                </div>
                                <div class="lottery_item_cont">
                                    <a href="#windowAlert" class="ratestars fancybox" onclick="yaGoals('CLEVER');" data-title="Today&#039;s Top-Rated Lotteries" data-text="&lt;p&gt;We analyze dozens of parameters daily: Jackpot amount and tax deductions, winning odds and the number of prize divisions, cost of a single line, and availability of such options as &quot;Multiplier,&quot; and much more to offer you the best possible lottery at the moment!&lt;/p&gt;&lt;p&gt;Choose a lottery with the highest score to win more and spend less!&lt;/p&gt;" data-toggle="tooltip" data-placement="bottom" title="Lottery rating from 1 to 10">
                                        <span class="fa fa-star"></span>
                                        <span class="ratestars_val">7.2</span>
                                    </a>
                                    <div class="time ">
                                        <span class="icon-clock"></span>
                                        <div class="time_val " date-close="249372">2&nbsp;days</div>
                                    </div>

                                    <div class="lottery_sel">

                                        <div class="event-easy-pick-cont">
                                            <select name="easy_pick" class="lottery_sel_select event-easy-pick-select">
                                                <option></option>
                                                <option value="{{ route('play') }}" data-event-easy-pick="1">1 line for $ 3.04</option>
                                                <option value="{{ route('play') }}" data-event-easy-pick="1">3 lines for $ 8.85</option>
                                                <option value="" disabled>–––––&nbsp;or&nbsp;–––––</option>
                                                <option value="{{ route('play') }}">Pick numbers</option>
                                                <option class="light_version_site_hide" value="" disabled>––––––––––––</option>
                                                <option class="opt-syndicate" value="{{ route('play') }}">Syndicate &#128293;</option>
                                                <option class="opt-system" value="{{ route('play') }}">System &#128200;</option>
                                            </select>
                                            <a href="{{ route('play') }}" class="btn btn-success event-easy-pick-main-btn">Play<span class="fa-solid fa-chevron-down"></span></a>
                                            <div class="lottery_sel_dropdown">
                                                <div class="offers">
                                                    <p><a href="{{ route('play') }}" class="event-easy-pick-offer">1 line for $ 3.04</a></p>
                                                    <p><a href="{{ route('play') }}" class="event-easy-pick-offer">3 lines for $ 8.85</a></p>
                                                </div>
                                                <div class="or">–––––&nbsp;or&nbsp;–––––</div>
                                                <p><a href="{{ route('play') }}" class="lottery_sel_choose">Pick numbers</a></p>
                                                <div class="or light_version_site_hide">–––––––––––––</div>

                                                <p><a href="{{ route('play') }}" class="lottery_sel_choose game-type-ico fire opt-syndicate">Syndicate</a></p>


                                                <p style="margin-top: 5px;"><a href="{{ route('play') }}" class="lottery_sel_choose game-type-ico lamp opt-system">System</a></p>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div><div class="lottery_slider_item">
                            <div class="lottery_item">
                                <div class="lottery_item_top" style="background-image: url('https://static.cdnland.com/upload/images/bg/uk-thunderball.svg');">
                                    <div class="lottery_item_img"><a href="/en/play-lottery/thunderball-uk/?from=circular&extra_jackpot="><img src="https://static.cdnland.com/upload/images/logo/svg/thunderball_lotto.svg" alt="Thunderball UK"/></a></div>
                                    <div class="lottery_item_val"><span class="jack"><b>£ 500+</b><br/><span class="mln_icon_extra text-nowrap">Thousand </span></span></div>
                                </div>
                                <div class="lottery_item_cont">
                                    <a href="#windowAlert" class="ratestars fancybox" onclick="yaGoals('CLEVER');" data-title="Today&#039;s Top-Rated Lotteries" data-text="&lt;p&gt;We analyze dozens of parameters daily: Jackpot amount and tax deductions, winning odds and the number of prize divisions, cost of a single line, and availability of such options as &quot;Multiplier,&quot; and much more to offer you the best possible lottery at the moment!&lt;/p&gt;&lt;p&gt;Choose a lottery with the highest score to win more and spend less!&lt;/p&gt;" data-toggle="tooltip" data-placement="bottom" title="Lottery rating from 1 to 10">
                                        <span class="fa fa-star"></span>
                                        <span class="ratestars_val">7.0</span>
                                    </a>
                                    <div class="time ">
                                        <span class="icon-clock"></span>
                                        <div class="time_val " date-close="252972">2&nbsp;days</div>
                                    </div>

                                    <div class="lottery_sel">

                                        <div class="event-easy-pick-cont">
                                            <select name="easy_pick" class="lottery_sel_select event-easy-pick-select">
                                                <option></option>
                                                <option value="/en/play-lottery/thunderball-uk/?from=circular&easy_pick=1&extra_jackpot=" data-event-easy-pick="1">1 line for $ 3.09</option>
                                                <option value="/en/play-lottery/thunderball-uk/?from=circular&easy_pick=3&extra_jackpot=" data-event-easy-pick="1">3 lines for $ 8.99</option>
                                                <option value="" disabled>–––––&nbsp;or&nbsp;–––––</option>
                                                <option value="/en/play-lottery/thunderball-uk/?from=circular&extra_jackpot=">Pick numbers</option>
                                                <option class="light_version_site_hide" value="" disabled>––––––––––––</option>

                                                <option class="opt-system" value="/en/play-lottery/thunderball-uk/?from=index_lotto&system=1&extra_jackpot=">System &#128200;</option>
                                            </select>
                                            <a href="/en/play-lottery/thunderball-uk/?from=circular&extra_jackpot=" class="btn btn-success event-easy-pick-main-btn">Play<span class="fa-solid fa-chevron-down"></span></a>
                                            <div class="lottery_sel_dropdown">
                                                <div class="offers">
                                                    <p><a href="/en/play-lottery/thunderball-uk/?from=circular&easy_pick=1&extra_jackpot=" class="event-easy-pick-offer">1 line for $ 3.09</a></p>
                                                    <p><a href="/en/play-lottery/thunderball-uk/?from=circular&easy_pick=3&extra_jackpot=" class="event-easy-pick-offer">3 lines for $ 8.99</a></p>
                                                </div>
                                                <div class="or">–––––&nbsp;or&nbsp;–––––</div>
                                                <p><a href="/en/play-lottery/thunderball-uk/?from=circular&extra_jackpot=" class="lottery_sel_choose">Pick numbers</a></p>
                                                <div class="or light_version_site_hide">–––––––––––––</div>


                                                <p style="margin-top: 5px;"><a href="/en/play-lottery/thunderball-uk/?from=index_lotto&system=1&extra_jackpot=" class="lottery_sel_choose game-type-ico lamp opt-system">System</a></p>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div><div class="lottery_slider_item">
                            <div class="lottery_item">
                                <div class="lottery_item_top" style="background-image: url('https://static.cdnland.com/upload/images/bg/eu-eurojackpot.svg');">
                                    <div class="lottery_item_img"><a href="{{ route('play') }}"><img src="https://static.cdnland.com/upload/images/logo/svg/eurojackpot.svg" alt="EuroJackpot"/></a></div>
                                    <div class="lottery_item_val"><span class="jack"><b>€ 10</b><br/><span class="mln_icon_extra text-nowrap">Million </span></span></div>
                                </div>
                                <div class="lottery_item_cont">
                                    <a href="#windowAlert" class="ratestars fancybox" onclick="yaGoals('CLEVER');" data-title="Today&#039;s Top-Rated Lotteries" data-text="&lt;p&gt;We analyze dozens of parameters daily: Jackpot amount and tax deductions, winning odds and the number of prize divisions, cost of a single line, and availability of such options as &quot;Multiplier,&quot; and much more to offer you the best possible lottery at the moment!&lt;/p&gt;&lt;p&gt;Choose a lottery with the highest score to win more and spend less!&lt;/p&gt;" data-toggle="tooltip" data-placement="bottom" title="Lottery rating from 1 to 10">
                                        <span class="fa fa-star"></span>
                                        <span class="ratestars_val">7.3</span>
                                    </a>
                                    <div class="time ">
                                        <span class="icon-clock"></span>
                                        <div class="time_val " date-close="249372">2&nbsp;days</div>
                                    </div>

                                    <div class="lottery_sel">

                                        <div class="event-easy-pick-cont">
                                            <select name="easy_pick" class="lottery_sel_select event-easy-pick-select">
                                                <option></option>
                                                <option value="/en/play-lottery/eurojackpot/?from=circular&easy_pick=1&extra_jackpot=" data-event-easy-pick="1">1 line for $ 5.76</option>
                                                <option value="/en/play-lottery/eurojackpot/?from=circular&easy_pick=3&extra_jackpot=" data-event-easy-pick="1">3 lines for $ 16.76</option>
                                                <option value="" disabled>–––––&nbsp;or&nbsp;–––––</option>
                                                <option value="{{ route('play') }}">Pick numbers</option>
                                                <option class="light_version_site_hide" value="" disabled>––––––––––––</option>
                                                <option class="opt-syndicate" value="{{ route('play') }}">Syndicate &#128293;</option>
                                                <option class="opt-system" value="{{ route('play') }}">System &#128200;</option>
                                            </select>
                                            <a href="{{ route('play') }}" class="btn btn-success event-easy-pick-main-btn">Play<span class="fa-solid fa-chevron-down"></span></a>
                                            <div class="lottery_sel_dropdown">
                                                <div class="offers">
                                                    <p><a href="/en/play-lottery/eurojackpot/?from=circular&easy_pick=1&extra_jackpot=" class="event-easy-pick-offer">1 line for $ 5.76</a></p>
                                                    <p><a href="/en/play-lottery/eurojackpot/?from=circular&easy_pick=3&extra_jackpot=" class="event-easy-pick-offer">3 lines for $ 16.76</a></p>
                                                </div>
                                                <div class="or">–––––&nbsp;or&nbsp;–––––</div>
                                                <p><a href="{{ route('play') }}" class="lottery_sel_choose">Pick numbers</a></p>
                                                <div class="or light_version_site_hide">–––––––––––––</div>

                                                <p><a href="{{ route('play') }}" class="lottery_sel_choose game-type-ico fire opt-syndicate">Syndicate</a></p>


                                                <p style="margin-top: 5px;"><a href="{{ route('play') }}" class="lottery_sel_choose game-type-ico lamp opt-system">System</a></p>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div><div class="lottery_slider_item">
                            <div class="lottery_item">
                                <div class="lottery_item_top" style="background-image: url('https://static.cdnland.com/upload/images/bg/eu-euromillions.svg');">
                                    <div class="lottery_item_img"><a href="{{ route('play') }}"><img src="https://static.cdnland.com/upload/images/logo/svg/euromillions.svg" alt="EuroMillions"/></a></div>
                                    <div class="lottery_item_val"><span class="jack"><b>€ 40</b><br/><span class="mln_icon_extra text-nowrap">Million </span></span></div>
                                </div>
                                <div class="lottery_item_cont">
                                    <a href="#windowAlert" class="ratestars fancybox" onclick="yaGoals('CLEVER');" data-title="Today&#039;s Top-Rated Lotteries" data-text="&lt;p&gt;We analyze dozens of parameters daily: Jackpot amount and tax deductions, winning odds and the number of prize divisions, cost of a single line, and availability of such options as &quot;Multiplier,&quot; and much more to offer you the best possible lottery at the moment!&lt;/p&gt;&lt;p&gt;Choose a lottery with the highest score to win more and spend less!&lt;/p&gt;" data-toggle="tooltip" data-placement="bottom" title="Lottery rating from 1 to 10">
                                        <span class="fa fa-star"></span>
                                        <span class="ratestars_val">7.4</span>
                                    </a>
                                    <div class="time ">
                                        <span class="icon-clock"></span>
                                        <div class="time_val " date-close="256572">2&nbsp;days</div>
                                    </div>

                                    <div class="lottery_sel">

                                        <div class="event-easy-pick-cont">
                                            <select name="easy_pick" class="lottery_sel_select event-easy-pick-select">
                                                <option></option>
                                                <option value="{{ route('play') }}" data-event-easy-pick="1">1 line for $ 6.20</option>
                                                <option value="{{ route('play') }}" data-event-easy-pick="1">3 lines for $ 18.04</option>
                                                <option value="" disabled>–––––&nbsp;or&nbsp;–––––</option>
                                                <option value="{{ route('play') }}">Pick numbers</option>
                                                <option class="light_version_site_hide" value="" disabled>––––––––––––</option>
                                                <option class="opt-syndicate" value="{{ route('play') }}">Syndicate &#128293;</option>
                                                <option class="opt-system" value="{{ route('play') }}">System &#128200;</option>
                                            </select>
                                            <a href="{{ route('play') }}" class="btn btn-success event-easy-pick-main-btn">Play<span class="fa-solid fa-chevron-down"></span></a>
                                            <div class="lottery_sel_dropdown">
                                                <div class="offers">
                                                    <p><a href="{{ route('play') }}" class="event-easy-pick-offer">1 line for $ 6.20</a></p>
                                                    <p><a href="{{ route('play') }}" class="event-easy-pick-offer">3 lines for $ 18.04</a></p>
                                                </div>
                                                <div class="or">–––––&nbsp;or&nbsp;–––––</div>
                                                <p><a href="{{ route('play') }}" class="lottery_sel_choose">Pick numbers</a></p>
                                                <div class="or light_version_site_hide">–––––––––––––</div>

                                                <p><a href="{{ route('play') }}" class="lottery_sel_choose game-type-ico fire opt-syndicate">Syndicate</a></p>


                                                <p style="margin-top: 5px;"><a href="{{ route('play') }}" class="lottery_sel_choose game-type-ico lamp opt-system">System</a></p>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div><div class="lottery_slider_item">
                            <div class="lottery_item">
                                <div class="lottery_item_top" style="background-image: url('https://static.cdnland.com/upload/images/bg/za-powerball.svg');">
                                    <div class="lottery_item_img"><a href="/en/play-lottery/za-powerball/?from=circular&extra_jackpot="><img src="https://static.cdnland.com/upload/images/logo/svg/powerball_za.svg" alt="South Africa Powerball"/></a></div>
                                    <div class="lottery_item_val"><span class="jack"><b>R 26</b><br/><span class="mln_icon_extra text-nowrap">Million </span></span></div>
                                </div>
                                <div class="lottery_item_cont">
                                    <a href="#windowAlert" class="ratestars fancybox" onclick="yaGoals('CLEVER');" data-title="Today&#039;s Top-Rated Lotteries" data-text="&lt;p&gt;We analyze dozens of parameters daily: Jackpot amount and tax deductions, winning odds and the number of prize divisions, cost of a single line, and availability of such options as &quot;Multiplier,&quot; and much more to offer you the best possible lottery at the moment!&lt;/p&gt;&lt;p&gt;Choose a lottery with the highest score to win more and spend less!&lt;/p&gt;" data-toggle="tooltip" data-placement="bottom" title="Lottery rating from 1 to 10">
                                        <span class="fa fa-star"></span>
                                        <span class="ratestars_val">7.0</span>
                                    </a>
                                    <div class="time ">
                                        <span class="icon-clock"></span>
                                        <div class="time_val " date-close="260172">3&nbsp;days</div>
                                    </div>

                                    <div class="lottery_sel">

                                        <div class="event-easy-pick-cont">
                                            <select name="easy_pick" class="lottery_sel_select event-easy-pick-select">
                                                <option></option>
                                                <option value="/en/play-lottery/za-powerball/?from=circular&easy_pick=5&extra_jackpot=" data-event-easy-pick="1">5 lines for $ 4.20</option>
                                                <option value="/en/play-lottery/za-powerball/?from=circular&easy_pick=10&extra_jackpot=" data-event-easy-pick="1">10 lines for $ 7.90</option>
                                                <option value="" disabled>–––––&nbsp;or&nbsp;–––––</option>
                                                <option value="/en/play-lottery/za-powerball/?from=circular&extra_jackpot=">Pick numbers</option>
                                                <option class="light_version_site_hide" value="" disabled>––––––––––––</option>

                                                <option class="opt-system" value="/en/play-lottery/za-powerball/?from=index_lotto&system=1&extra_jackpot=">System &#128200;</option>
                                            </select>
                                            <a href="/en/play-lottery/za-powerball/?from=circular&extra_jackpot=" class="btn btn-success event-easy-pick-main-btn">Play<span class="fa-solid fa-chevron-down"></span></a>
                                            <div class="lottery_sel_dropdown">
                                                <div class="offers">
                                                    <p><a href="/en/play-lottery/za-powerball/?from=circular&easy_pick=5&extra_jackpot=" class="event-easy-pick-offer">5 lines for $ 4.20</a></p>
                                                    <p><a href="/en/play-lottery/za-powerball/?from=circular&easy_pick=10&extra_jackpot=" class="event-easy-pick-offer">10 lines for $ 7.90</a></p>
                                                </div>
                                                <div class="or">–––––&nbsp;or&nbsp;–––––</div>
                                                <p><a href="/en/play-lottery/za-powerball/?from=circular&extra_jackpot=" class="lottery_sel_choose">Pick numbers</a></p>
                                                <div class="or light_version_site_hide">–––––––––––––</div>


                                                <p style="margin-top: 5px;"><a href="/en/play-lottery/za-powerball/?from=index_lotto&system=1&extra_jackpot=" class="lottery_sel_choose game-type-ico lamp opt-system">System</a></p>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div><div class="lottery_slider_item">
                            <div class="lottery_item">
                                <div class="lottery_item_top" style="background-image: url('https://static.cdnland.com/upload/images/bg/de-lotto6-aus-49.svg');">
                                    <div class="lottery_item_img"><a href="/en/play-lottery/lotto-6-aus-49/?from=circular&extra_jackpot="><img src="https://static.cdnland.com/upload/images/logo/svg/lotto_649.svg" alt="Lotto 6 aus 49"/></a></div>
                                    <div class="lottery_item_val"><span class="jack"><b>€ 1+</b><br/><span class="mln_icon_extra text-nowrap">Million </span></span></div>
                                </div>
                                <div class="lottery_item_cont">
                                    <a href="#windowAlert" class="ratestars fancybox" onclick="yaGoals('CLEVER');" data-title="Today&#039;s Top-Rated Lotteries" data-text="&lt;p&gt;We analyze dozens of parameters daily: Jackpot amount and tax deductions, winning odds and the number of prize divisions, cost of a single line, and availability of such options as &quot;Multiplier,&quot; and much more to offer you the best possible lottery at the moment!&lt;/p&gt;&lt;p&gt;Choose a lottery with the highest score to win more and spend less!&lt;/p&gt;" data-toggle="tooltip" data-placement="bottom" title="Lottery rating from 1 to 10">
                                        <span class="fa fa-star"></span>
                                        <span class="ratestars_val">6.5</span>
                                    </a>
                                    <div class="time ">
                                        <span class="icon-clock"></span>
                                        <div class="time_val " date-close="332172">3&nbsp;days</div>
                                    </div>

                                    <div class="lottery_sel">

                                        <div class="event-easy-pick-cont">
                                            <select name="easy_pick" class="lottery_sel_select event-easy-pick-select">
                                                <option></option>
                                                <option value="/en/play-lottery/lotto-6-aus-49/?from=circular&easy_pick=1&extra_jackpot=" data-event-easy-pick="1">1 line for $ 3.80</option>
                                                <option value="/en/play-lottery/lotto-6-aus-49/?from=circular&easy_pick=3&extra_jackpot=" data-event-easy-pick="1">3 lines for $ 10.83</option>
                                                <option value="" disabled>–––––&nbsp;or&nbsp;–––––</option>
                                                <option value="/en/play-lottery/lotto-6-aus-49/?from=circular&extra_jackpot=">Pick numbers</option>
                                                <option class="light_version_site_hide" value="" disabled>––––––––––––</option>
                                                <option class="opt-syndicate" value="/en/play-lottery/lotto-6-aus-49/?from=index_lotto&syndicates=1&extra_jackpot=">Syndicate &#128293;</option>
                                                <option class="opt-system" value="/en/play-lottery/lotto-6-aus-49/?from=index_lotto&system=1&extra_jackpot=">System &#128200;</option>
                                            </select>
                                            <a href="/en/play-lottery/lotto-6-aus-49/?from=circular&extra_jackpot=" class="btn btn-success event-easy-pick-main-btn">Play<span class="fa-solid fa-chevron-down"></span></a>
                                            <div class="lottery_sel_dropdown">
                                                <div class="offers">
                                                    <p><a href="/en/play-lottery/lotto-6-aus-49/?from=circular&easy_pick=1&extra_jackpot=" class="event-easy-pick-offer">1 line for $ 3.80</a></p>
                                                    <p><a href="/en/play-lottery/lotto-6-aus-49/?from=circular&easy_pick=3&extra_jackpot=" class="event-easy-pick-offer">3 lines for $ 10.83</a></p>
                                                </div>
                                                <div class="or">–––––&nbsp;or&nbsp;–––––</div>
                                                <p><a href="/en/play-lottery/lotto-6-aus-49/?from=circular&extra_jackpot=" class="lottery_sel_choose">Pick numbers</a></p>
                                                <div class="or light_version_site_hide">–––––––––––––</div>

                                                <p><a href="/en/play-lottery/lotto-6-aus-49/?from=index_lotto&syndicates=1&extra_jackpot=" class="lottery_sel_choose game-type-ico fire opt-syndicate">Syndicate</a></p>


                                                <p style="margin-top: 5px;"><a href="/en/play-lottery/lotto-6-aus-49/?from=index_lotto&system=1&extra_jackpot=" class="lottery_sel_choose game-type-ico lamp opt-system">System</a></p>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div><div class="lottery_slider_item">
                            <div class="lottery_item">
                                <div class="lottery_item_top" style="background-image: url('https://static.cdnland.com/upload/images/bg/uk-lotto.svg');">
                                    <div class="lottery_item_img"><a href="{{ route('play') }}"><img src="https://static.cdnland.com/upload/images/logo/svg/uk_lotto.svg" alt="UK Lotto"/></a></div>
                                    <div class="lottery_item_val"><span class="jack"><b>£ 2.5+</b><br/><span class="mln_icon_extra text-nowrap">Million </span></span></div>
                                </div>
                                <div class="lottery_item_cont">
                                    <a href="#windowAlert" class="ratestars fancybox" onclick="yaGoals('CLEVER');" data-title="Today&#039;s Top-Rated Lotteries" data-text="&lt;p&gt;We analyze dozens of parameters daily: Jackpot amount and tax deductions, winning odds and the number of prize divisions, cost of a single line, and availability of such options as &quot;Multiplier,&quot; and much more to offer you the best possible lottery at the moment!&lt;/p&gt;&lt;p&gt;Choose a lottery with the highest score to win more and spend less!&lt;/p&gt;" data-toggle="tooltip" data-placement="bottom" title="Lottery rating from 1 to 10">
                                        <span class="fa fa-star"></span>
                                        <span class="ratestars_val">7.3</span>
                                    </a>
                                    <div class="time ">
                                        <span class="icon-clock"></span>
                                        <div class="time_val " date-close="339372">3&nbsp;days</div>
                                    </div>

                                    <div class="lottery_sel">

                                        <div class="event-easy-pick-cont">
                                            <select name="easy_pick" class="lottery_sel_select event-easy-pick-select">
                                                <option></option>
                                                <option value="{{ route('play') }}" data-event-easy-pick="1">1 line for $ 7.41</option>
                                                <option value="{{ route('play') }}" data-event-easy-pick="1">3 lines for $ 21.12</option>
                                                <option value="" disabled>–––––&nbsp;or&nbsp;–––––</option>
                                                <option value="{{ route('play') }}">Pick numbers</option>
                                                <option class="light_version_site_hide" value="" disabled>––––––––––––</option>

                                                <option class="opt-system" value="{{ route('play') }}">System &#128200;</option>
                                            </select>
                                            <a href="{{ route('play') }}" class="btn btn-success event-easy-pick-main-btn">Play<span class="fa-solid fa-chevron-down"></span></a>
                                            <div class="lottery_sel_dropdown">
                                                <div class="offers">
                                                    <p><a href="{{ route('play') }}" class="event-easy-pick-offer">1 line for $ 7.41</a></p>
                                                    <p><a href="{{ route('play') }}" class="event-easy-pick-offer">3 lines for $ 21.12</a></p>
                                                </div>
                                                <div class="or">–––––&nbsp;or&nbsp;–––––</div>
                                                <p><a href="{{ route('play') }}" class="lottery_sel_choose">Pick numbers</a></p>
                                                <div class="or light_version_site_hide">–––––––––––––</div>


                                                <p style="margin-top: 5px;"><a href="{{ route('play') }}" class="lottery_sel_choose game-type-ico lamp opt-system">System</a></p>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div><div class="lottery_slider_item">
                            <div class="lottery_item">
                                <div class="lottery_item_top" style="background-image: url('https://static.cdnland.com/upload/images/bg/ie-lotto-ireland.svg');">
                                    <div class="lottery_item_img"><a href="/en/play-lottery/lotto-ie/?from=circular&extra_jackpot="><img src="https://static.cdnland.com/upload/images/logo/svg/lotto_ireland.svg" alt="Lotto Ireland"/></a></div>
                                    <div class="lottery_item_val"><span class="jack"><b>€ 2+</b><br/><span class="mln_icon_extra text-nowrap">Million </span></span></div>
                                </div>
                                <div class="lottery_item_cont">
                                    <a href="#windowAlert" class="ratestars fancybox" onclick="yaGoals('CLEVER');" data-title="Today&#039;s Top-Rated Lotteries" data-text="&lt;p&gt;We analyze dozens of parameters daily: Jackpot amount and tax deductions, winning odds and the number of prize divisions, cost of a single line, and availability of such options as &quot;Multiplier,&quot; and much more to offer you the best possible lottery at the moment!&lt;/p&gt;&lt;p&gt;Choose a lottery with the highest score to win more and spend less!&lt;/p&gt;" data-toggle="tooltip" data-placement="bottom" title="Lottery rating from 1 to 10">
                                        <span class="fa fa-star"></span>
                                        <span class="ratestars_val">7.5</span>
                                    </a>
                                    <div class="time ">
                                        <span class="icon-clock"></span>
                                        <div class="time_val " date-close="342972">3&nbsp;days</div>
                                    </div>

                                    <div class="lottery_sel">

                                        <div class="event-easy-pick-cont">
                                            <select name="easy_pick" class="lottery_sel_select event-easy-pick-select">
                                                <option></option>
                                                <option value="/en/play-lottery/lotto-ie/?from=circular&easy_pick=2&extra_jackpot=" data-event-easy-pick="1">2 lines for $ 10.88</option>
                                                <option value="/en/play-lottery/lotto-ie/?from=circular&easy_pick=4&extra_jackpot=" data-event-easy-pick="1">4 lines for $ 21.11</option>
                                                <option value="" disabled>–––––&nbsp;or&nbsp;–––––</option>
                                                <option value="/en/play-lottery/lotto-ie/?from=circular&extra_jackpot=">Pick numbers</option>
                                                <option class="light_version_site_hide" value="" disabled>––––––––––––</option>

                                                <option class="opt-system" value="/en/play-lottery/lotto-ie/?from=index_lotto&system=1&extra_jackpot=">System &#128200;</option>
                                            </select>
                                            <a href="/en/play-lottery/lotto-ie/?from=circular&extra_jackpot=" class="btn btn-success event-easy-pick-main-btn">Play<span class="fa-solid fa-chevron-down"></span></a>
                                            <div class="lottery_sel_dropdown">
                                                <div class="offers">
                                                    <p><a href="/en/play-lottery/lotto-ie/?from=circular&easy_pick=2&extra_jackpot=" class="event-easy-pick-offer">2 lines for $ 10.88</a></p>
                                                    <p><a href="/en/play-lottery/lotto-ie/?from=circular&easy_pick=4&extra_jackpot=" class="event-easy-pick-offer">4 lines for $ 21.11</a></p>
                                                </div>
                                                <div class="or">–––––&nbsp;or&nbsp;–––––</div>
                                                <p><a href="/en/play-lottery/lotto-ie/?from=circular&extra_jackpot=" class="lottery_sel_choose">Pick numbers</a></p>
                                                <div class="or light_version_site_hide">–––––––––––––</div>


                                                <p style="margin-top: 5px;"><a href="/en/play-lottery/lotto-ie/?from=index_lotto&system=1&extra_jackpot=" class="lottery_sel_choose game-type-ico lamp opt-system">System</a></p>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div><div class="lottery_slider_item">
                            <div class="lottery_item">
                                <div class="lottery_item_top" style="background-image: url('https://static.cdnland.com/upload/images/bg/au-powerball.svg');">
                                    <div class="lottery_item_img"><a href="/en/play-lottery/powerball-australia/?from=circular&extra_jackpot="><img src="https://static.cdnland.com/upload/images/logo/svg/powerball_au.svg" alt="Powerball Australia"/></a></div>
                                    <div class="lottery_item_val"><span class="jack"><b>A$ 20</b><br/><span class="mln_icon_extra text-nowrap">Million </span></span></div>
                                </div>
                                <div class="lottery_item_cont">
                                    <a href="#windowAlert" class="ratestars fancybox" onclick="yaGoals('CLEVER');" data-title="Today&#039;s Top-Rated Lotteries" data-text="&lt;p&gt;We analyze dozens of parameters daily: Jackpot amount and tax deductions, winning odds and the number of prize divisions, cost of a single line, and availability of such options as &quot;Multiplier,&quot; and much more to offer you the best possible lottery at the moment!&lt;/p&gt;&lt;p&gt;Choose a lottery with the highest score to win more and spend less!&lt;/p&gt;" data-toggle="tooltip" data-placement="bottom" title="Lottery rating from 1 to 10">
                                        <span class="fa fa-star"></span>
                                        <span class="ratestars_val">7.0</span>
                                    </a>
                                    <div class="time ">
                                        <span class="icon-clock"></span>
                                        <div class="time_val " date-close="386172">4&nbsp;days</div>
                                    </div>

                                    <div class="lottery_sel">

                                        <div class="event-easy-pick-cont">
                                            <select name="easy_pick" class="lottery_sel_select event-easy-pick-select">
                                                <option></option>
                                                <option value="/en/play-lottery/powerball-australia/?from=circular&easy_pick=4&extra_jackpot=" data-event-easy-pick="1">4 lines for $ 7.24</option>
                                                <option value="/en/play-lottery/powerball-australia/?from=circular&easy_pick=6&extra_jackpot=" data-event-easy-pick="1">6 lines for $ 9.88</option>
                                                <option value="" disabled>–––––&nbsp;or&nbsp;–––––</option>
                                                <option value="/en/play-lottery/powerball-australia/?from=circular&extra_jackpot=">Pick numbers</option>
                                                <option class="light_version_site_hide" value="" disabled>––––––––––––</option>
                                                <option class="opt-syndicate" value="/en/play-lottery/powerball-australia/?from=index_lotto&syndicates=1&extra_jackpot=">Syndicate &#128293;</option>
                                                <option class="opt-system" value="/en/play-lottery/powerball-australia/?from=index_lotto&system=1&extra_jackpot=">System &#128200;</option>
                                            </select>
                                            <a href="/en/play-lottery/powerball-australia/?from=circular&extra_jackpot=" class="btn btn-success event-easy-pick-main-btn">Play<span class="fa-solid fa-chevron-down"></span></a>
                                            <div class="lottery_sel_dropdown">
                                                <div class="offers">
                                                    <p><a href="/en/play-lottery/powerball-australia/?from=circular&easy_pick=4&extra_jackpot=" class="event-easy-pick-offer">4 lines for $ 7.24</a></p>
                                                    <p><a href="/en/play-lottery/powerball-australia/?from=circular&easy_pick=6&extra_jackpot=" class="event-easy-pick-offer">6 lines for $ 9.88</a></p>
                                                </div>
                                                <div class="or">–––––&nbsp;or&nbsp;–––––</div>
                                                <p><a href="/en/play-lottery/powerball-australia/?from=circular&extra_jackpot=" class="lottery_sel_choose">Pick numbers</a></p>
                                                <div class="or light_version_site_hide">–––––––––––––</div>

                                                <p><a href="/en/play-lottery/powerball-australia/?from=index_lotto&syndicates=1&extra_jackpot=" class="lottery_sel_choose game-type-ico fire opt-syndicate">Syndicate</a></p>


                                                <p style="margin-top: 5px;"><a href="/en/play-lottery/powerball-australia/?from=index_lotto&system=1&extra_jackpot=" class="lottery_sel_choose game-type-ico lamp opt-system">System</a></p>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div><div class="lottery_slider_item">
                            <div class="lottery_item">
                                <div class="lottery_item_top" style="background-image: url('https://static.cdnland.com/upload/images/bg/au-saturday-lotto.svg');">
                                    <div class="lottery_item_img"><a href="{{ route('play') }}"><img src="https://static.cdnland.com/upload/images/logo/svg/saturday_lotto.svg" alt="Saturday Lotto"/></a></div>
                                    <div class="lottery_item_val"><span class="jack"><b>A$ 5</b><br/><span class="mln_icon_extra text-nowrap">Million </span></span></div>
                                </div>
                                <div class="lottery_item_cont">
                                    <a href="#windowAlert" class="ratestars fancybox" onclick="yaGoals('CLEVER');" data-title="Today&#039;s Top-Rated Lotteries" data-text="&lt;p&gt;We analyze dozens of parameters daily: Jackpot amount and tax deductions, winning odds and the number of prize divisions, cost of a single line, and availability of such options as &quot;Multiplier,&quot; and much more to offer you the best possible lottery at the moment!&lt;/p&gt;&lt;p&gt;Choose a lottery with the highest score to win more and spend less!&lt;/p&gt;" data-toggle="tooltip" data-placement="bottom" title="Lottery rating from 1 to 10">
                                        <span class="fa fa-star"></span>
                                        <span class="ratestars_val">7.3</span>
                                    </a>
                                    <div class="time ">
                                        <span class="icon-clock"></span>
                                        <div class="time_val " date-close="569772">6&nbsp;days</div>
                                    </div>

                                    <div class="lottery_sel">

                                        <div class="event-easy-pick-cont">
                                            <select name="easy_pick" class="lottery_sel_select event-easy-pick-select">
                                                <option></option>
                                                <option value="{{ route('play') }}" data-event-easy-pick="1">6 lines for $ 8.82</option>
                                                <option value="{{ route('play') }}" data-event-easy-pick="1">10 lines for $ 13.38</option>
                                                <option value="" disabled>–––––&nbsp;or&nbsp;–––––</option>
                                                <option value="{{ route('play') }}">Pick numbers</option>
                                                <option class="light_version_site_hide" value="" disabled>––––––––––––</option>
                                                <option class="opt-syndicate" value="{{ route('play') }}">Syndicate &#128293;</option>
                                                <option class="opt-system" value="{{ route('play') }}">System &#128200;</option>
                                            </select>
                                            <a href="{{ route('play') }}" class="btn btn-success event-easy-pick-main-btn">Play<span class="fa-solid fa-chevron-down"></span></a>
                                            <div class="lottery_sel_dropdown">
                                                <div class="offers">
                                                    <p><a href="{{ route('play') }}" class="event-easy-pick-offer">6 lines for $ 8.82</a></p>
                                                    <p><a href="{{ route('play') }}" class="event-easy-pick-offer">10 lines for $ 13.38</a></p>
                                                </div>
                                                <div class="or">–––––&nbsp;or&nbsp;–––––</div>
                                                <p><a href="{{ route('play') }}" class="lottery_sel_choose">Pick numbers</a></p>
                                                <div class="or light_version_site_hide">–––––––––––––</div>

                                                <p><a href="{{ route('play') }}" class="lottery_sel_choose game-type-ico fire opt-syndicate">Syndicate</a></p>


                                                <p style="margin-top: 5px;"><a href="{{ route('play') }}" class="lottery_sel_choose game-type-ico lamp opt-system">System</a></p>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div><div class="lottery_slider_item">
                            <div class="lottery_item">
                                <div class="lottery_item_top" style="background-image: url('https://static.cdnland.com/upload/images/bg/es-el-gordo.svg');">
                                    <div class="lottery_item_img"><a href="{{ route('play') }}"><img src="https://static.cdnland.com/upload/images/logo/svg/el_gordo.svg" alt="El Gordo de la Primitiva"/></a></div>
                                    <div class="lottery_item_val"><span class="jack"><b>€ 5+</b><br/><span class="mln_icon_extra text-nowrap">Million </span></span></div>
                                </div>
                                <div class="lottery_item_cont">
                                    <a href="#windowAlert" class="ratestars fancybox" onclick="yaGoals('CLEVER');" data-title="Today&#039;s Top-Rated Lotteries" data-text="&lt;p&gt;We analyze dozens of parameters daily: Jackpot amount and tax deductions, winning odds and the number of prize divisions, cost of a single line, and availability of such options as &quot;Multiplier,&quot; and much more to offer you the best possible lottery at the moment!&lt;/p&gt;&lt;p&gt;Choose a lottery with the highest score to win more and spend less!&lt;/p&gt;" data-toggle="tooltip" data-placement="bottom" title="Lottery rating from 1 to 10">
                                        <span class="fa fa-star"></span>
                                        <span class="ratestars_val">6.6</span>
                                    </a>
                                    <div class="time ">
                                        <span class="icon-clock"></span>
                                        <div class="time_val " date-close="580572">6&nbsp;days</div>
                                    </div>

                                    <div class="lottery_sel">

                                        <div class="event-easy-pick-cont">
                                            <select name="easy_pick" class="lottery_sel_select event-easy-pick-select">
                                                <option></option>
                                                <option value="/en/play-lottery/el-gordo/?from=circular&easy_pick=2&extra_jackpot=" data-event-easy-pick="1">2 lines for $ 9.68</option>
                                                <option value="/en/play-lottery/el-gordo/?from=circular&easy_pick=3&extra_jackpot=" data-event-easy-pick="1">3 lines for $ 13.50</option>
                                                <option value="" disabled>–––––&nbsp;or&nbsp;–––––</option>
                                                <option value="{{ route('play') }}">Pick numbers</option>
                                                <option class="light_version_site_hide" value="" disabled>––––––––––––</option>
                                                <option class="opt-syndicate" value="{{ route('play') }}">Syndicate &#128293;</option>
                                                <option class="opt-system" value="{{ route('play') }}">System &#128200;</option>
                                            </select>
                                            <a href="{{ route('play') }}" class="btn btn-success event-easy-pick-main-btn">Play<span class="fa-solid fa-chevron-down"></span></a>
                                            <div class="lottery_sel_dropdown">
                                                <div class="offers">
                                                    <p><a href="/en/play-lottery/el-gordo/?from=circular&easy_pick=2&extra_jackpot=" class="event-easy-pick-offer">2 lines for $ 9.68</a></p>
                                                    <p><a href="/en/play-lottery/el-gordo/?from=circular&easy_pick=3&extra_jackpot=" class="event-easy-pick-offer">3 lines for $ 13.50</a></p>
                                                </div>
                                                <div class="or">–––––&nbsp;or&nbsp;–––––</div>
                                                <p><a href="{{ route('play') }}" class="lottery_sel_choose">Pick numbers</a></p>
                                                <div class="or light_version_site_hide">–––––––––––––</div>

                                                <p><a href="{{ route('play') }}" class="lottery_sel_choose game-type-ico fire opt-syndicate">Syndicate</a></p>


                                                <p style="margin-top: 5px;"><a href="{{ route('play') }}" class="lottery_sel_choose game-type-ico lamp opt-system">System</a></p>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="tab_popular">
                    <div class="lottery_slider lottery_owl-carousel owl-carousel">
                        <div class="lottery_slider_item">
                            <div class="lottery_item">
                                <div class="lottery_item_top" style="background-image: url('https://static.cdnland.com/upload/images/bg/at-austria_lotto.svg');">
                                    <div class="lottery_item_img"><a href="/en/play-lottery/lotto-austria/?from=circular&extra_jackpot="><img src="https://static.cdnland.com/upload/images/logo/svg/austria_lotto.svg" alt="Lotto Austria"/></a></div>
                                    <div class="lottery_item_val"><span class="jack"><b>€ 1.4</b><br/><span class="mln_icon_extra text-nowrap">Million </span></span></div>
                                </div>
                                <div class="lottery_item_cont">
                                    <a href="#windowAlert" class="ratestars fancybox" onclick="yaGoals('CLEVER');" data-title="Today&#039;s Top-Rated Lotteries" data-text="&lt;p&gt;We analyze dozens of parameters daily: Jackpot amount and tax deductions, winning odds and the number of prize divisions, cost of a single line, and availability of such options as &quot;Multiplier,&quot; and much more to offer you the best possible lottery at the moment!&lt;/p&gt;&lt;p&gt;Choose a lottery with the highest score to win more and spend less!&lt;/p&gt;" data-toggle="tooltip" data-placement="bottom" title="Lottery rating from 1 to 10">
                                        <span class="fa fa-star"></span>
                                        <span class="ratestars_val">7.6</span>
                                    </a>
                                    <div class="time ">
                                        <span class="icon-clock"></span>
                                        <div class="time_val " date-close="76572">21&nbsp;hour</div>
                                    </div>

                                    <div class="lottery_sel">

                                        <div class="event-easy-pick-cont">
                                            <select name="easy_pick" class="lottery_sel_select event-easy-pick-select">
                                                <option></option>
                                                <option value="/en/play-lottery/lotto-austria/?from=circular&easy_pick=1&extra_jackpot=" data-event-easy-pick="1">1 line for $ 3.80</option>
                                                <option value="/en/play-lottery/lotto-austria/?from=circular&easy_pick=3&extra_jackpot=" data-event-easy-pick="1">3 lines for $ 11.06</option>
                                                <option value="" disabled>–––––&nbsp;or&nbsp;–––––</option>
                                                <option value="/en/play-lottery/lotto-austria/?from=circular&extra_jackpot=">Pick numbers</option>
                                                <option class="light_version_site_hide" value="" disabled>––––––––––––</option>
                                                <option class="opt-syndicate" value="/en/play-lottery/lotto-austria/?from=index_lotto&syndicates=1&extra_jackpot=">Syndicate &#128293;</option>
                                                <option class="opt-system" value="/en/play-lottery/lotto-austria/?from=index_lotto&system=1&extra_jackpot=">System &#128200;</option>
                                            </select>
                                            <a href="/en/play-lottery/lotto-austria/?from=circular&extra_jackpot=" class="btn btn-success event-easy-pick-main-btn">Play<span class="fa-solid fa-chevron-down"></span></a>
                                            <div class="lottery_sel_dropdown">
                                                <div class="offers">
                                                    <p><a href="/en/play-lottery/lotto-austria/?from=circular&easy_pick=1&extra_jackpot=" class="event-easy-pick-offer">1 line for $ 3.80</a></p>
                                                    <p><a href="/en/play-lottery/lotto-austria/?from=circular&easy_pick=3&extra_jackpot=" class="event-easy-pick-offer">3 lines for $ 11.06</a></p>
                                                </div>
                                                <div class="or">–––––&nbsp;or&nbsp;–––––</div>
                                                <p><a href="/en/play-lottery/lotto-austria/?from=circular&extra_jackpot=" class="lottery_sel_choose">Pick numbers</a></p>
                                                <div class="or light_version_site_hide">–––––––––––––</div>

                                                <p><a href="/en/play-lottery/lotto-austria/?from=index_lotto&syndicates=1&extra_jackpot=" class="lottery_sel_choose game-type-ico fire opt-syndicate">Syndicate</a></p>


                                                <p style="margin-top: 5px;"><a href="/en/play-lottery/lotto-austria/?from=index_lotto&system=1&extra_jackpot=" class="lottery_sel_choose game-type-ico lamp opt-system">System</a></p>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div><div class="lottery_slider_item">
                            <div class="lottery_item">
                                <div class="lottery_item_top" style="background-image: url('https://static.cdnland.com/upload/images/bg/us-cash4life.svg');">
                                    <div class="lottery_item_img"><a href="/en/play-lottery/cash-for-life/?from=circular&extra_jackpot="><img src="https://static.cdnland.com/upload/images/logo/svg/cash4life.svg" alt="Cash4Life"/></a></div>
                                    <div class="lottery_item_val"><span class="jack"><b>$ 7</b><br/><span class="mln_icon_extra text-nowrap">Million </span></span></div>
                                </div>
                                <div class="lottery_item_cont">
                                    <a href="#windowAlert" class="ratestars fancybox" onclick="yaGoals('CLEVER');" data-title="Today&#039;s Top-Rated Lotteries" data-text="&lt;p&gt;We analyze dozens of parameters daily: Jackpot amount and tax deductions, winning odds and the number of prize divisions, cost of a single line, and availability of such options as &quot;Multiplier,&quot; and much more to offer you the best possible lottery at the moment!&lt;/p&gt;&lt;p&gt;Choose a lottery with the highest score to win more and spend less!&lt;/p&gt;" data-toggle="tooltip" data-placement="bottom" title="Lottery rating from 1 to 10">
                                        <span class="fa fa-star"></span>
                                        <span class="ratestars_val">7.5</span>
                                    </a>
                                    <div class="time ">
                                        <span class="icon-clock"></span>
                                        <div class="time_val " date-close="22572">6&nbsp;hours</div>
                                    </div>

                                    <div class="lottery_sel">

                                        <div class="event-easy-pick-cont">
                                            <select name="easy_pick" class="lottery_sel_select event-easy-pick-select">
                                                <option></option>
                                                <option value="/en/play-lottery/cash-for-life/?from=circular&easy_pick=1&extra_jackpot=" data-event-easy-pick="1">1 line for $ 5.00</option>
                                                <option value="/en/play-lottery/cash-for-life/?from=circular&easy_pick=3&extra_jackpot=" data-event-easy-pick="1">3 lines for $ 14.25</option>
                                                <option value="" disabled>–––––&nbsp;or&nbsp;–––––</option>
                                                <option value="/en/play-lottery/cash-for-life/?from=circular&extra_jackpot=">Pick numbers</option>
                                                <option class="light_version_site_hide" value="" disabled>––––––––––––</option>

                                                <option class="opt-system" value="/en/play-lottery/cash-for-life/?from=index_lotto&system=1&extra_jackpot=">System &#128200;</option>
                                            </select>
                                            <a href="/en/play-lottery/cash-for-life/?from=circular&extra_jackpot=" class="btn btn-success event-easy-pick-main-btn">Play<span class="fa-solid fa-chevron-down"></span></a>
                                            <div class="lottery_sel_dropdown">
                                                <div class="offers">
                                                    <p><a href="/en/play-lottery/cash-for-life/?from=circular&easy_pick=1&extra_jackpot=" class="event-easy-pick-offer">1 line for $ 5.00</a></p>
                                                    <p><a href="/en/play-lottery/cash-for-life/?from=circular&easy_pick=3&extra_jackpot=" class="event-easy-pick-offer">3 lines for $ 14.25</a></p>
                                                </div>
                                                <div class="or">–––––&nbsp;or&nbsp;–––––</div>
                                                <p><a href="/en/play-lottery/cash-for-life/?from=circular&extra_jackpot=" class="lottery_sel_choose">Pick numbers</a></p>
                                                <div class="or light_version_site_hide">–––––––––––––</div>


                                                <p style="margin-top: 5px;"><a href="/en/play-lottery/cash-for-life/?from=index_lotto&system=1&extra_jackpot=" class="lottery_sel_choose game-type-ico lamp opt-system">System</a></p>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div><div class="lottery_slider_item">
                            <div class="lottery_item">
                                <div class="lottery_item_top" style="background-image: url('https://static.cdnland.com/upload/images/bg/ie-lotto-ireland.svg');">
                                    <div class="lottery_item_img"><a href="/en/play-lottery/lotto-ie/?from=circular&extra_jackpot="><img src="https://static.cdnland.com/upload/images/logo/svg/lotto_ireland.svg" alt="Lotto Ireland"/></a></div>
                                    <div class="lottery_item_val"><span class="jack"><b>€ 2+</b><br/><span class="mln_icon_extra text-nowrap">Million </span></span></div>
                                </div>
                                <div class="lottery_item_cont">
                                    <a href="#windowAlert" class="ratestars fancybox" onclick="yaGoals('CLEVER');" data-title="Today&#039;s Top-Rated Lotteries" data-text="&lt;p&gt;We analyze dozens of parameters daily: Jackpot amount and tax deductions, winning odds and the number of prize divisions, cost of a single line, and availability of such options as &quot;Multiplier,&quot; and much more to offer you the best possible lottery at the moment!&lt;/p&gt;&lt;p&gt;Choose a lottery with the highest score to win more and spend less!&lt;/p&gt;" data-toggle="tooltip" data-placement="bottom" title="Lottery rating from 1 to 10">
                                        <span class="fa fa-star"></span>
                                        <span class="ratestars_val">7.5</span>
                                    </a>
                                    <div class="time ">
                                        <span class="icon-clock"></span>
                                        <div class="time_val " date-close="342972">3&nbsp;days</div>
                                    </div>

                                    <div class="lottery_sel">

                                        <div class="event-easy-pick-cont">
                                            <select name="easy_pick" class="lottery_sel_select event-easy-pick-select">
                                                <option></option>
                                                <option value="/en/play-lottery/lotto-ie/?from=circular&easy_pick=2&extra_jackpot=" data-event-easy-pick="1">2 lines for $ 10.88</option>
                                                <option value="/en/play-lottery/lotto-ie/?from=circular&easy_pick=4&extra_jackpot=" data-event-easy-pick="1">4 lines for $ 21.11</option>
                                                <option value="" disabled>–––––&nbsp;or&nbsp;–––––</option>
                                                <option value="/en/play-lottery/lotto-ie/?from=circular&extra_jackpot=">Pick numbers</option>
                                                <option class="light_version_site_hide" value="" disabled>––––––––––––</option>

                                                <option class="opt-system" value="/en/play-lottery/lotto-ie/?from=index_lotto&system=1&extra_jackpot=">System &#128200;</option>
                                            </select>
                                            <a href="/en/play-lottery/lotto-ie/?from=circular&extra_jackpot=" class="btn btn-success event-easy-pick-main-btn">Play<span class="fa-solid fa-chevron-down"></span></a>
                                            <div class="lottery_sel_dropdown">
                                                <div class="offers">
                                                    <p><a href="/en/play-lottery/lotto-ie/?from=circular&easy_pick=2&extra_jackpot=" class="event-easy-pick-offer">2 lines for $ 10.88</a></p>
                                                    <p><a href="/en/play-lottery/lotto-ie/?from=circular&easy_pick=4&extra_jackpot=" class="event-easy-pick-offer">4 lines for $ 21.11</a></p>
                                                </div>
                                                <div class="or">–––––&nbsp;or&nbsp;–––––</div>
                                                <p><a href="/en/play-lottery/lotto-ie/?from=circular&extra_jackpot=" class="lottery_sel_choose">Pick numbers</a></p>
                                                <div class="or light_version_site_hide">–––––––––––––</div>


                                                <p style="margin-top: 5px;"><a href="/en/play-lottery/lotto-ie/?from=index_lotto&system=1&extra_jackpot=" class="lottery_sel_choose game-type-ico lamp opt-system">System</a></p>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div><div class="lottery_slider_item">
                            <div class="lottery_item">
                                <div class="lottery_item_top" style="background-image: url('https://static.cdnland.com/upload/images/bg/us-powerball.svg');">
                                    <div class="lottery_item_img"><a href="{{ route('play') }}"><img src="https://static.cdnland.com/upload/images/logo/svg/powerball.svg" alt="Powerball"/></a></div>
                                    <div class="lottery_item_val"><span class="jack"><b>$ 147</b><br/><span class="mln_icon_extra text-nowrap">Million </span></span></div>
                                </div>
                                <div class="lottery_item_cont">
                                    <a href="#windowAlert" class="ratestars fancybox" onclick="yaGoals('CLEVER');" data-title="Today&#039;s Top-Rated Lotteries" data-text="&lt;p&gt;We analyze dozens of parameters daily: Jackpot amount and tax deductions, winning odds and the number of prize divisions, cost of a single line, and availability of such options as &quot;Multiplier,&quot; and much more to offer you the best possible lottery at the moment!&lt;/p&gt;&lt;p&gt;Choose a lottery with the highest score to win more and spend less!&lt;/p&gt;" data-toggle="tooltip" data-placement="bottom" title="Lottery rating from 1 to 10">
                                        <span class="fa fa-star"></span>
                                        <span class="ratestars_val">7.5</span>
                                    </a>
                                    <div class="time ">
                                        <span class="icon-clock"></span>
                                        <div class="time_val " date-close="26172">7&nbsp;hours</div>
                                    </div>

                                    <div class="lottery_sel">

                                        <div class="event-easy-pick-cont">
                                            <select name="easy_pick" class="lottery_sel_select event-easy-pick-select">
                                                <option></option>
                                                <option value="{{ route('play') }}" data-event-easy-pick="1">1 line for $ 5.29</option>
                                                <option value="{{ route('play') }}" data-event-easy-pick="1">3 lines for $ 14.92</option>
                                                <option value="" disabled>–––––&nbsp;or&nbsp;–––––</option>
                                                <option value="{{ route('play') }}">Pick numbers</option>
                                                <option class="light_version_site_hide" value="" disabled>––––––––––––</option>
                                                <option class="opt-syndicate" value="{{ route('play') }}">Syndicate &#128293;</option>
                                                <option class="opt-system" value="{{ route('play') }}">System &#128200;</option>
                                            </select>
                                            <a href="{{ route('play') }}" class="btn btn-success event-easy-pick-main-btn">Play<span class="fa-solid fa-chevron-down"></span></a>
                                            <div class="lottery_sel_dropdown">
                                                <div class="offers">
                                                    <p><a href="{{ route('play') }}" class="event-easy-pick-offer">1 line for $ 5.29</a></p>
                                                    <p><a href="{{ route('play') }}" class="event-easy-pick-offer">3 lines for $ 14.92</a></p>
                                                </div>
                                                <div class="or">–––––&nbsp;or&nbsp;–––––</div>
                                                <p><a href="{{ route('play') }}" class="lottery_sel_choose">Pick numbers</a></p>
                                                <div class="or light_version_site_hide">–––––––––––––</div>

                                                <p><a href="{{ route('play') }}" class="lottery_sel_choose game-type-ico fire opt-syndicate">Syndicate</a></p>


                                                <p style="margin-top: 5px;"><a href="{{ route('play') }}" class="lottery_sel_choose game-type-ico lamp opt-system">System</a></p>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div><div class="lottery_slider_item">
                            <div class="lottery_item">
                                <div class="lottery_item_top" style="background-image: url('https://static.cdnland.com/upload/images/bg/au-set_for_life.svg');">
                                    <div class="lottery_item_img"><a href="{{ route('play') }}"><img src="https://static.cdnland.com/upload/images/logo/svg/set_for_life.svg" alt="Set for Life (AU)"/></a></div>
                                    <div class="lottery_item_val"><span class="jack"><b>A$ 4.8</b><br/><span class="mln_icon_extra text-nowrap">Million </span></span></div>
                                </div>
                                <div class="lottery_item_cont">
                                    <a href="#windowAlert" class="ratestars fancybox" onclick="yaGoals('CLEVER');" data-title="Today&#039;s Top-Rated Lotteries" data-text="&lt;p&gt;We analyze dozens of parameters daily: Jackpot amount and tax deductions, winning odds and the number of prize divisions, cost of a single line, and availability of such options as &quot;Multiplier,&quot; and much more to offer you the best possible lottery at the moment!&lt;/p&gt;&lt;p&gt;Choose a lottery with the highest score to win more and spend less!&lt;/p&gt;" data-toggle="tooltip" data-placement="bottom" title="Lottery rating from 1 to 10">
                                        <span class="fa fa-star"></span>
                                        <span class="ratestars_val">7.5</span>
                                    </a>
                                    <div class="time ">
                                        <span class="icon-clock"></span>
                                        <div class="time_val " date-close="54972">15&nbsp;hours</div>
                                    </div>

                                    <div class="lottery_sel">

                                        <div class="event-easy-pick-cont">
                                            <select name="easy_pick" class="lottery_sel_select event-easy-pick-select">
                                                <option></option>
                                                <option value="{{ route('play') }}" data-event-easy-pick="1">7 lines for $ 7.49</option>
                                                <option value="{{ route('play') }}" data-event-easy-pick="1">14 lines for $ 14.23</option>
                                                <option value="" disabled>–––––&nbsp;or&nbsp;–––––</option>
                                                <option value="{{ route('play') }}">Pick numbers</option>
                                                <option class="light_version_site_hide" value="" disabled>––––––––––––</option>

                                                <option class="opt-system" value="{{ route('play') }}">System &#128200;</option>
                                            </select>
                                            <a href="{{ route('play') }}" class="btn btn-success event-easy-pick-main-btn">Play<span class="fa-solid fa-chevron-down"></span></a>
                                            <div class="lottery_sel_dropdown">
                                                <div class="offers">
                                                    <p><a href="{{ route('play') }}" class="event-easy-pick-offer">7 lines for $ 7.49</a></p>
                                                    <p><a href="{{ route('play') }}" class="event-easy-pick-offer">14 lines for $ 14.23</a></p>
                                                </div>
                                                <div class="or">–––––&nbsp;or&nbsp;–––––</div>
                                                <p><a href="{{ route('play') }}" class="lottery_sel_choose">Pick numbers</a></p>
                                                <div class="or light_version_site_hide">–––––––––––––</div>


                                                <p style="margin-top: 5px;"><a href="{{ route('play') }}" class="lottery_sel_choose game-type-ico lamp opt-system">System</a></p>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div><div class="lottery_slider_item">
                            <div class="lottery_item">
                                <div class="lottery_item_top" style="background-image: url('https://static.cdnland.com/upload/images/bg/za-lotto-652.svg');">
                                    <div class="lottery_item_img"><a href="{{ route('play') }}"><img src="https://static.cdnland.com/upload/images/logo/svg/lotto_za.svg" alt="South Africa Lotto 6/52"/></a></div>
                                    <div class="lottery_item_val"><span class="jack"><b>R 19</b><br/><span class="mln_icon_extra text-nowrap">Million </span></span></div>
                                </div>
                                <div class="lottery_item_cont">
                                    <a href="#windowAlert" class="ratestars fancybox" onclick="yaGoals('CLEVER');" data-title="Today&#039;s Top-Rated Lotteries" data-text="&lt;p&gt;We analyze dozens of parameters daily: Jackpot amount and tax deductions, winning odds and the number of prize divisions, cost of a single line, and availability of such options as &quot;Multiplier,&quot; and much more to offer you the best possible lottery at the moment!&lt;/p&gt;&lt;p&gt;Choose a lottery with the highest score to win more and spend less!&lt;/p&gt;" data-toggle="tooltip" data-placement="bottom" title="Lottery rating from 1 to 10">
                                        <span class="fa fa-star"></span>
                                        <span class="ratestars_val">7.5</span>
                                    </a>
                                    <div class="time time-hot">
                                        <span class="icon-clock"></span>
                                        <div class="time_val timer" date-close="972"></div>
                                    </div>

                                    <div class="lottery_sel">

                                        <div class="event-easy-pick-cont">
                                            <select name="easy_pick" class="lottery_sel_select event-easy-pick-select">
                                                <option></option>
                                                <option value="{{ route('play') }}" data-event-easy-pick="1">5 lines for $ 4.20</option>
                                                <option value="{{ route('play') }}" data-event-easy-pick="1">10 lines for $ 7.90</option>
                                                <option value="" disabled>–––––&nbsp;or&nbsp;–––––</option>
                                                <option value="{{ route('play') }}">Pick numbers</option>
                                                <option class="light_version_site_hide" value="" disabled>––––––––––––</option>

                                                <option class="opt-system" value="{{ route('play') }}">System &#128200;</option>
                                            </select>
                                            <a href="{{ route('play') }}" class="btn btn-success event-easy-pick-main-btn">Play<span class="fa-solid fa-chevron-down"></span></a>
                                            <div class="lottery_sel_dropdown">
                                                <div class="offers">
                                                    <p><a href="{{ route('play') }}" class="event-easy-pick-offer">5 lines for $ 4.20</a></p>
                                                    <p><a href="{{ route('play') }}" class="event-easy-pick-offer">10 lines for $ 7.90</a></p>
                                                </div>
                                                <div class="or">–––––&nbsp;or&nbsp;–––––</div>
                                                <p><a href="{{ route('play') }}" class="lottery_sel_choose">Pick numbers</a></p>
                                                <div class="or light_version_site_hide">–––––––––––––</div>


                                                <p style="margin-top: 5px;"><a href="{{ route('play') }}" class="lottery_sel_choose game-type-ico lamp opt-system">System</a></p>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div><div class="lottery_slider_item">
                            <div class="lottery_item">
                                <div class="lottery_item_top" style="background-image: url('https://static.cdnland.com/upload/images/bg/mx-melate.svg');">
                                    <div class="lottery_item_img"><a href="{{ route('play') }}"><img src="https://static.cdnland.com/upload/images/logo/svg/melate_logo.svg" alt="Mexico Melate"/></a></div>
                                    <div class="lottery_item_val"><span class="jack"><b>M$ 30.1</b><br/><span class="mln_icon_extra text-nowrap">Million </span></span></div>
                                </div>
                                <div class="lottery_item_cont">
                                    <a href="#windowAlert" class="ratestars fancybox" onclick="yaGoals('CLEVER');" data-title="Today&#039;s Top-Rated Lotteries" data-text="&lt;p&gt;We analyze dozens of parameters daily: Jackpot amount and tax deductions, winning odds and the number of prize divisions, cost of a single line, and availability of such options as &quot;Multiplier,&quot; and much more to offer you the best possible lottery at the moment!&lt;/p&gt;&lt;p&gt;Choose a lottery with the highest score to win more and spend less!&lt;/p&gt;" data-toggle="tooltip" data-placement="bottom" title="Lottery rating from 1 to 10">
                                        <span class="fa fa-star"></span>
                                        <span class="ratestars_val">7.5</span>
                                    </a>
                                    <div class="time ">
                                        <span class="icon-clock"></span>
                                        <div class="time_val " date-close="108972">1&nbsp;day</div>
                                    </div>

                                    <div class="lottery_sel">

                                        <div class="event-easy-pick-cont">
                                            <select name="easy_pick" class="lottery_sel_select event-easy-pick-select">
                                                <option></option>
                                                <option value="{{ route('play') }}" data-event-easy-pick="1">5 lines for $ 10.40</option>
                                                <option value="{{ route('play') }}" data-event-easy-pick="1">10 lines for $ 19.76</option>
                                                <option value="" disabled>–––––&nbsp;or&nbsp;–––––</option>
                                                <option value="{{ route('play') }}">Pick numbers</option>
                                                <option class="light_version_site_hide" value="" disabled>––––––––––––</option>

                                                <option class="opt-system" value="{{ route('play') }}">System &#128200;</option>
                                            </select>
                                            <a href="{{ route('play') }}" class="btn btn-success event-easy-pick-main-btn">Play<span class="fa-solid fa-chevron-down"></span></a>
                                            <div class="lottery_sel_dropdown">
                                                <div class="offers">
                                                    <p><a href="{{ route('play') }}" class="event-easy-pick-offer">5 lines for $ 10.40</a></p>
                                                    <p><a href="{{ route('play') }}" class="event-easy-pick-offer">10 lines for $ 19.76</a></p>
                                                </div>
                                                <div class="or">–––––&nbsp;or&nbsp;–––––</div>
                                                <p><a href="{{ route('play') }}" class="lottery_sel_choose">Pick numbers</a></p>
                                                <div class="or light_version_site_hide">–––––––––––––</div>


                                                <p style="margin-top: 5px;"><a href="{{ route('play') }}" class="lottery_sel_choose game-type-ico lamp opt-system">System</a></p>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div><div class="lottery_slider_item">
                            <div class="lottery_item">
                                <div class="lottery_item_top" style="background-image: url('https://static.cdnland.com/upload/images/bg/us-lotto-america.svg');">
                                    <div class="lottery_item_img"><a href="{{ route('play') }}"><img src="https://static.cdnland.com/upload/images/logo/svg/lotto_america.svg" alt="Lotto America"/></a></div>
                                    <div class="lottery_item_val"><span class="jack"><b>$ 40.03</b><br/><span class="mln_icon_extra text-nowrap">Million </span></span></div>
                                </div>
                                <div class="lottery_item_cont">
                                    <a href="#windowAlert" class="ratestars fancybox" onclick="yaGoals('CLEVER');" data-title="Today&#039;s Top-Rated Lotteries" data-text="&lt;p&gt;We analyze dozens of parameters daily: Jackpot amount and tax deductions, winning odds and the number of prize divisions, cost of a single line, and availability of such options as &quot;Multiplier,&quot; and much more to offer you the best possible lottery at the moment!&lt;/p&gt;&lt;p&gt;Choose a lottery with the highest score to win more and spend less!&lt;/p&gt;" data-toggle="tooltip" data-placement="bottom" title="Lottery rating from 1 to 10">
                                        <span class="fa fa-star"></span>
                                        <span class="ratestars_val">7.5</span>
                                    </a>
                                    <div class="time ">
                                        <span class="icon-clock"></span>
                                        <div class="time_val " date-close="22572">6&nbsp;hours</div>
                                    </div>

                                    <div class="lottery_sel">

                                        <div class="event-easy-pick-cont">
                                            <select name="easy_pick" class="lottery_sel_select event-easy-pick-select">
                                                <option></option>
                                                <option value="{{ route('play') }}" data-event-easy-pick="1">1 line for $ 3.29</option>
                                                <option value="{{ route('play') }}" data-event-easy-pick="1">3 lines for $ 9.57</option>
                                                <option value="" disabled>–––––&nbsp;or&nbsp;–––––</option>
                                                <option value="{{ route('play') }}>Pick numbers</option>
                                                <option class="light_version_site_hide" value="" disabled>––––––––––––</option>

                                                <option class="opt-system" value="/en/play-lottery/lotto-america/?from=index_lotto&system=1&extra_jackpot=">System &#128200;</option>
                                            </select>
                                            <a href="{{ route('play') }} class="btn btn-success event-easy-pick-main-btn">Play<span class="fa-solid fa-chevron-down"></span></a>
                                            <div class="lottery_sel_dropdown">
                                                <div class="offers">
                                                    <p><a href="{{ route('play') }}" class="event-easy-pick-offer">1 line for $ 3.29</a></p>
                                                    <p><a href="{{ route('play') }}" class="event-easy-pick-offer">3 lines for $ 9.57</a></p>
                                                </div>
                                                <div class="or">–––––&nbsp;or&nbsp;–––––</div>
                                                <p><a href="{{ route('play') }} class="lottery_sel_choose">Pick numbers</a></p>
                                                <div class="or light_version_site_hide">–––––––––––––</div>


                                                <p style="margin-top: 5px;"><a href="{{ route('play') }}" class="lottery_sel_choose game-type-ico lamp opt-system">System</a></p>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div><div class="lottery_slider_item">
                            <div class="lottery_item">
                                <div class="lottery_item_top" style="background-image: url('https://static.cdnland.com/upload/images/bg/au-mon-wed-lotto.svg');">
                                    <div class="lottery_item_img"><a href="{{ route('play') }}"><img src="https://static.cdnland.com/upload/images/logo/svg/monwed_lotto.svg" alt="Monday &amp; Wednesday Lotto"/></a></div>
                                    <div class="lottery_item_val"><span class="jack"><b>A$ 1</b><br/><span class="mln_icon_extra text-nowrap">Million </span></span></div>
                                </div>
                                <div class="lottery_item_cont">
                                    <a href="#windowAlert" class="ratestars fancybox" onclick="yaGoals('CLEVER');" data-title="Today&#039;s Top-Rated Lotteries" data-text="&lt;p&gt;We analyze dozens of parameters daily: Jackpot amount and tax deductions, winning odds and the number of prize divisions, cost of a single line, and availability of such options as &quot;Multiplier,&quot; and much more to offer you the best possible lottery at the moment!&lt;/p&gt;&lt;p&gt;Choose a lottery with the highest score to win more and spend less!&lt;/p&gt;" data-toggle="tooltip" data-placement="bottom" title="Lottery rating from 1 to 10">
                                        <span class="fa fa-star"></span>
                                        <span class="ratestars_val">7.4</span>
                                    </a>
                                    <div class="time ">
                                        <span class="icon-clock"></span>
                                        <div class="time_val " date-close="126972">1&nbsp;day</div>
                                    </div>

                                    <div class="lottery_sel">

                                        <div class="event-easy-pick-cont">
                                            <select name="easy_pick" class="lottery_sel_select event-easy-pick-select">
                                                <option></option>
                                                <option value="{{ route('play') }}" data-event-easy-pick="1">7 lines for $ 7.31</option>
                                                <option value="{{ route('play') }}" data-event-easy-pick="1">14 lines for $ 13.86</option>
                                                <option value="" disabled>–––––&nbsp;or&nbsp;–––––</option>
                                                <option value="{{ route('play') }}">Pick numbers</option>
                                                <option class="light_version_site_hide" value="" disabled>––––––––––––</option>
                                                <option class="opt-syndicate" value="{{ route('play') }}">Syndicate &#128293;</option>
                                                <option class="opt-system" value="{{ route('play') }}">System &#128200;</option>
                                            </select>
                                            <a href="{{ route('play') }}" class="btn btn-success event-easy-pick-main-btn">Play<span class="fa-solid fa-chevron-down"></span></a>
                                            <div class="lottery_sel_dropdown">
                                                <div class="offers">
                                                    <p><a href="{{ route('play') }}" class="event-easy-pick-offer">7 lines for $ 7.31</a></p>
                                                    <p><a href="{{ route('play') }}" class="event-easy-pick-offer">14 lines for $ 13.86</a></p>
                                                </div>
                                                <div class="or">–––––&nbsp;or&nbsp;–––––</div>
                                                <p><a href="{{ route('play') }}" class="lottery_sel_choose">Pick numbers</a></p>
                                                <div class="or light_version_site_hide">–––––––––––––</div>

                                                <p><a href="{{ route('play') }}" class="lottery_sel_choose game-type-ico fire opt-syndicate">Syndicate</a></p>


                                                <p style="margin-top: 5px;"><a href="{{ route('play') }}" class="lottery_sel_choose game-type-ico lamp opt-system">System</a></p>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div><div class="lottery_slider_item">
                            <div class="lottery_item">
                                <div class="lottery_item_top" style="background-image: url('https://static.cdnland.com/upload/images/bg/ir-daily_million.svg');">
                                    <div class="lottery_item_img"><a href="{{ route('play') }}"><img src="https://static.cdnland.com/upload/images/logo/svg/daily_million.svg" alt="Daily Million"/></a></div>
                                    <div class="lottery_item_val"><span class="jack"><b>€ 1</b><br/><span class="mln_icon_extra text-nowrap">Million </span></span></div>
                                </div>
                                <div class="lottery_item_cont">
                                    <a href="#windowAlert" class="ratestars fancybox" onclick="yaGoals('CLEVER');" data-title="Today&#039;s Top-Rated Lotteries" data-text="&lt;p&gt;We analyze dozens of parameters daily: Jackpot amount and tax deductions, winning odds and the number of prize divisions, cost of a single line, and availability of such options as &quot;Multiplier,&quot; and much more to offer you the best possible lottery at the moment!&lt;/p&gt;&lt;p&gt;Choose a lottery with the highest score to win more and spend less!&lt;/p&gt;" data-toggle="tooltip" data-placement="bottom" title="Lottery rating from 1 to 10">
                                        <span class="fa fa-star"></span>
                                        <span class="ratestars_val">7.4</span>
                                    </a>
                                    <div class="time time-hot">
                                        <span class="icon-clock"></span>
                                        <div class="time_val timer" date-close="972"></div>
                                    </div>

                                    <div class="lottery_sel">

                                        <div class="event-easy-pick-cont">
                                            <select name="easy_pick" class="lottery_sel_select event-easy-pick-select">
                                                <option></option>
                                                <option value="{{ route('play') }}" data-event-easy-pick="1">3 lines for $ 8.16</option>
                                                <option value="{{ route('play') }}" data-event-easy-pick="1">5 lines for $ 12.92</option>
                                                <option value="" disabled>–––––&nbsp;or&nbsp;–––––</option>
                                                <option value="{{ route('play') }}">Pick numbers</option>
                                                <option class="light_version_site_hide" value="" disabled>––––––––––––</option>

                                                <option class="opt-system" value="{{ route('play') }}">System &#128200;</option>
                                            </select>
                                            <a href="{{ route('play') }}" class="btn btn-success event-easy-pick-main-btn">Play<span class="fa-solid fa-chevron-down"></span></a>
                                            <div class="lottery_sel_dropdown">
                                                <div class="offers">
                                                    <p><a href="{{ route('play') }}" class="event-easy-pick-offer">3 lines for $ 8.16</a></p>
                                                    <p><a href="{{ route('play') }}" class="event-easy-pick-offer">5 lines for $ 12.92</a></p>
                                                </div>
                                                <div class="or">–––––&nbsp;or&nbsp;–––––</div>
                                                <p><a href="{{ route('play') }}" class="lottery_sel_choose">Pick numbers</a></p>
                                                <div class="or light_version_site_hide">–––––––––––––</div>


                                                <p style="margin-top: 5px;"><a href="{{ route('play') }}" class="lottery_sel_choose game-type-ico lamp opt-system">System</a></p>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div><div class="lottery_slider_item">
                            <div class="lottery_item">
                                <div class="lottery_item_top" style="background-image: url('https://static.cdnland.com/upload/images/bg/ca-649-lotto.svg');">
                                    <div class="lottery_item_img"><a href="{{ route('play') }}"><img src="https://static.cdnland.com/upload/images/logo/svg/649_lotto.svg" alt="Lotto 6/49"/></a></div>
                                    <div class="lottery_item_val"><span class="jack"><b>C$ 5</b><br/><span class="mln_icon_extra text-nowrap">Million </span></span></div>
                                </div>
                                <div class="lottery_item_cont">
                                    <a href="#windowAlert" class="ratestars fancybox" onclick="yaGoals('CLEVER');" data-title="Today&#039;s Top-Rated Lotteries" data-text="&lt;p&gt;We analyze dozens of parameters daily: Jackpot amount and tax deductions, winning odds and the number of prize divisions, cost of a single line, and availability of such options as &quot;Multiplier,&quot; and much more to offer you the best possible lottery at the moment!&lt;/p&gt;&lt;p&gt;Choose a lottery with the highest score to win more and spend less!&lt;/p&gt;" data-toggle="tooltip" data-placement="bottom" title="Lottery rating from 1 to 10">
                                        <span class="fa fa-star"></span>
                                        <span class="ratestars_val">7.4</span>
                                    </a>
                                    <div class="time ">
                                        <span class="icon-clock"></span>
                                        <div class="time_val " date-close="22572">6&nbsp;hours</div>
                                    </div>

                                    <div class="lottery_sel">

                                        <div class="event-easy-pick-cont">
                                            <select name="easy_pick" class="lottery_sel_select event-easy-pick-select">
                                                <option></option>
                                                <option value="{{ route('play') }}" data-event-easy-pick="1">1 line for $ 5.91</option>
                                                <option value="{{ route('play') }}" data-event-easy-pick="1">3 lines for $ 16.67</option>
                                                <option value="" disabled>–––––&nbsp;or&nbsp;–––––</option>
                                                <option value="{{ route('play') }}">Pick numbers</option>
                                                <option class="light_version_site_hide" value="" disabled>––––––––––––</option>

                                                <option class="opt-system" value="{{ route('play') }}">System &#128200;</option>
                                            </select>
                                            <a href="{{ route('play') }}" class="btn btn-success event-easy-pick-main-btn">Play<span class="fa-solid fa-chevron-down"></span></a>
                                            <div class="lottery_sel_dropdown">
                                                <div class="offers">
                                                    <p><a href="{{ route('play') }}" class="event-easy-pick-offer">1 line for $ 5.91</a></p>
                                                    <p><a href="{{ route('play') }}" class="event-easy-pick-offer">3 lines for $ 16.67</a></p>
                                                </div>
                                                <div class="or">–––––&nbsp;or&nbsp;–––––</div>
                                                <p><a href="{{ route('play') }}" class="lottery_sel_choose">Pick numbers</a></p>
                                                <div class="or light_version_site_hide">–––––––––––––</div>


                                                <p style="margin-top: 5px;"><a href="{{ route('play') }}" class="lottery_sel_choose game-type-ico lamp opt-system">System</a></p>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div><div class="lottery_slider_item">
                            <div class="lottery_item">
                                <div class="lottery_item_top" style="background-image: url('https://static.cdnland.com/upload/images/bg/eu-euromillions.svg');">
                                    <div class="lottery_item_img"><a href="{{ route('play') }}"><img src="https://static.cdnland.com/upload/images/logo/svg/euromillions.svg" alt="EuroMillions"/></a></div>
                                    <div class="lottery_item_val"><span class="jack"><b>€ 40</b><br/><span class="mln_icon_extra text-nowrap">Million </span></span></div>
                                </div>
                                <div class="lottery_item_cont">
                                    <a href="#windowAlert" class="ratestars fancybox" onclick="yaGoals('CLEVER');" data-title="Today&#039;s Top-Rated Lotteries" data-text="&lt;p&gt;We analyze dozens of parameters daily: Jackpot amount and tax deductions, winning odds and the number of prize divisions, cost of a single line, and availability of such options as &quot;Multiplier,&quot; and much more to offer you the best possible lottery at the moment!&lt;/p&gt;&lt;p&gt;Choose a lottery with the highest score to win more and spend less!&lt;/p&gt;" data-toggle="tooltip" data-placement="bottom" title="Lottery rating from 1 to 10">
                                        <span class="fa fa-star"></span>
                                        <span class="ratestars_val">7.4</span>
                                    </a>
                                    <div class="time ">
                                        <span class="icon-clock"></span>
                                        <div class="time_val " date-close="256572">2&nbsp;days</div>
                                    </div>

                                    <div class="lottery_sel">

                                        <div class="event-easy-pick-cont">
                                            <select name="easy_pick" class="lottery_sel_select event-easy-pick-select">
                                                <option></option>
                                                <option value="{{ route('play') }}" data-event-easy-pick="1">1 line for $ 6.20</option>
                                                <option value="{{ route('play') }}" data-event-easy-pick="1">3 lines for $ 18.04</option>
                                                <option value="" disabled>–––––&nbsp;or&nbsp;–––––</option>
                                                <option value="{{ route('play') }}">Pick numbers</option>
                                                <option class="light_version_site_hide" value="" disabled>––––––––––––</option>
                                                <option class="opt-syndicate" value="{{ route('play') }}">Syndicate &#128293;</option>
                                                <option class="opt-system" value="{{ route('play') }}">System &#128200;</option>
                                            </select>
                                            <a href="{{ route('play') }}" class="btn btn-success event-easy-pick-main-btn">Play<span class="fa-solid fa-chevron-down"></span></a>
                                            <div class="lottery_sel_dropdown">
                                                <div class="offers">
                                                    <p><a href="{{ route('play') }}" class="event-easy-pick-offer">1 line for $ 6.20</a></p>
                                                    <p><a href="{{ route('play') }}" class="event-easy-pick-offer">3 lines for $ 18.04</a></p>
                                                </div>
                                                <div class="or">–––––&nbsp;or&nbsp;–––––</div>
                                                <p><a href="{{ route('play') }}" class="lottery_sel_choose">Pick numbers</a></p>
                                                <div class="or light_version_site_hide">–––––––––––––</div>

                                                <p><a href="{{ route('play') }}" class="lottery_sel_choose game-type-ico fire opt-syndicate">Syndicate</a></p>


                                                <p style="margin-top: 5px;"><a href="{{ route('play') }}" class="lottery_sel_choose game-type-ico lamp opt-system">System</a></p>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div><div class="lottery_slider_item">
                            <div class="lottery_item">
                                <div class="lottery_item_top" style="background-image: url('https://static.cdnland.com/upload/images/bg/au-ozlotto.svg');">
                                    <div class="lottery_item_img"><a href="{{ route('play') }}"><img src="https://static.cdnland.com/upload/images/logo/svg/oz-lotto.svg" alt="Oz Lotto"/></a></div>
                                    <div class="lottery_item_val"><span class="jack"><b>A$ 20</b><br/><span class="mln_icon_extra text-nowrap">Million </span></span></div>
                                </div>
                                <div class="lottery_item_cont">
                                    <a href="#windowAlert" class="ratestars fancybox" onclick="yaGoals('CLEVER');" data-title="Today&#039;s Top-Rated Lotteries" data-text="&lt;p&gt;We analyze dozens of parameters daily: Jackpot amount and tax deductions, winning odds and the number of prize divisions, cost of a single line, and availability of such options as &quot;Multiplier,&quot; and much more to offer you the best possible lottery at the moment!&lt;/p&gt;&lt;p&gt;Choose a lottery with the highest score to win more and spend less!&lt;/p&gt;" data-toggle="tooltip" data-placement="bottom" title="Lottery rating from 1 to 10">
                                        <span class="fa fa-star"></span>
                                        <span class="ratestars_val">7.4</span>
                                    </a>
                                    <div class="time ">
                                        <span class="icon-clock"></span>
                                        <div class="time_val " date-close="213372">2&nbsp;days</div>
                                    </div>

                                    <div class="lottery_sel">

                                        <div class="event-easy-pick-cont">
                                            <select name="easy_pick" class="lottery_sel_select event-easy-pick-select">
                                                <option></option>
                                                <option value="{{ route('play') }}" data-event-easy-pick="1">4 lines for $ 10.04</option>
                                                <option value="{{ route('play') }}" data-event-easy-pick="1">7 lines for $ 16.34</option>
                                                <option value="" disabled>–––––&nbsp;or&nbsp;–––––</option>
                                                <option value="{{ route('play') }}">Pick numbers</option>
                                                <option class="light_version_site_hide" value="" disabled>––––––––––––</option>
                                                <option class="opt-syndicate" value="{{ route('play') }}">Syndicate &#128293;</option>
                                                <option class="opt-system" value="{{ route('play') }}">System &#128200;</option>
                                            </select>
                                            <a href="{{ route('play') }}" class="btn btn-success event-easy-pick-main-btn">Play<span class="fa-solid fa-chevron-down"></span></a>
                                            <div class="lottery_sel_dropdown">
                                                <div class="offers">
                                                    <p><a href="{{ route('play') }}" class="event-easy-pick-offer">4 lines for $ 10.04</a></p>
                                                    <p><a href="{{ route('play') }}" class="event-easy-pick-offer">7 lines for $ 16.34</a></p>
                                                </div>
                                                <div class="or">–––––&nbsp;or&nbsp;–––––</div>
                                                <p><a href="{{ route('play') }}" class="lottery_sel_choose">Pick numbers</a></p>
                                                <div class="or light_version_site_hide">–––––––––––––</div>

                                                <p><a href="{{ route('play') }}" class="lottery_sel_choose game-type-ico fire opt-syndicate">Syndicate</a></p>


                                                <p style="margin-top: 5px;"><a href="{{ route('play') }}" class="lottery_sel_choose game-type-ico lamp opt-system">System</a></p>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div><div class="lottery_slider_item">
                            <div class="lottery_item">
                                <div class="lottery_item_top" style="background-image: url('https://static.cdnland.com/upload/images/bg/uk-lotto.svg');">
                                    <div class="lottery_item_img"><a href="{{ route('play') }}"><img src="https://static.cdnland.com/upload/images/logo/svg/uk_lotto.svg" alt="UK Lotto"/></a></div>
                                    <div class="lottery_item_val"><span class="jack"><b>£ 2.5+</b><br/><span class="mln_icon_extra text-nowrap">Million </span></span></div>
                                </div>
                                <div class="lottery_item_cont">
                                    <a href="#windowAlert" class="ratestars fancybox" onclick="yaGoals('CLEVER');" data-title="Today&#039;s Top-Rated Lotteries" data-text="&lt;p&gt;We analyze dozens of parameters daily: Jackpot amount and tax deductions, winning odds and the number of prize divisions, cost of a single line, and availability of such options as &quot;Multiplier,&quot; and much more to offer you the best possible lottery at the moment!&lt;/p&gt;&lt;p&gt;Choose a lottery with the highest score to win more and spend less!&lt;/p&gt;" data-toggle="tooltip" data-placement="bottom" title="Lottery rating from 1 to 10">
                                        <span class="fa fa-star"></span>
                                        <span class="ratestars_val">7.3</span>
                                    </a>
                                    <div class="time ">
                                        <span class="icon-clock"></span>
                                        <div class="time_val " date-close="339372">3&nbsp;days</div>
                                    </div>

                                    <div class="lottery_sel">

                                        <div class="event-easy-pick-cont">
                                            <select name="easy_pick" class="lottery_sel_select event-easy-pick-select">
                                                <option></option>
                                                <option value="{{ route('play') }}" data-event-easy-pick="1">1 line for $ 7.41</option>
                                                <option value="{{ route('play') }}" data-event-easy-pick="1">3 lines for $ 21.12</option>
                                                <option value="" disabled>–––––&nbsp;or&nbsp;–––––</option>
                                                <option value="{{ route('play') }}">Pick numbers</option>
                                                <option class="light_version_site_hide" value="" disabled>––––––––––––</option>

                                                <option class="opt-system" value="{{ route('play') }}">System &#128200;</option>
                                            </select>
                                            <a href="{{ route('play') }}" class="btn btn-success event-easy-pick-main-btn">Play<span class="fa-solid fa-chevron-down"></span></a>
                                            <div class="lottery_sel_dropdown">
                                                <div class="offers">
                                                    <p><a href="{{ route('play') }}" class="event-easy-pick-offer">1 line for $ 7.41</a></p>
                                                    <p><a href="{{ route('play') }}" class="event-easy-pick-offer">3 lines for $ 21.12</a></p>
                                                </div>
                                                <div class="or">–––––&nbsp;or&nbsp;–––––</div>
                                                <p><a href="{{ route('play') }}" class="lottery_sel_choose">Pick numbers</a></p>
                                                <div class="or light_version_site_hide">–––––––––––––</div>


                                                <p style="margin-top: 5px;"><a href="{{ route('play') }}" class="lottery_sel_choose game-type-ico lamp opt-system">System</a></p>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div><div class="lottery_slider_item">
                            <div class="lottery_item">
                                <div class="lottery_item_top" style="background-image: url('https://static.cdnland.com/upload/images/bg/au-saturday-lotto.svg');">
                                    <div class="lottery_item_img"><a href="{{ route('play') }}"><img src="https://static.cdnland.com/upload/images/logo/svg/saturday_lotto.svg" alt="Saturday Lotto"/></a></div>
                                    <div class="lottery_item_val"><span class="jack"><b>A$ 5</b><br/><span class="mln_icon_extra text-nowrap">Million </span></span></div>
                                </div>
                                <div class="lottery_item_cont">
                                    <a href="#windowAlert" class="ratestars fancybox" onclick="yaGoals('CLEVER');" data-title="Today&#039;s Top-Rated Lotteries" data-text="&lt;p&gt;We analyze dozens of parameters daily: Jackpot amount and tax deductions, winning odds and the number of prize divisions, cost of a single line, and availability of such options as &quot;Multiplier,&quot; and much more to offer you the best possible lottery at the moment!&lt;/p&gt;&lt;p&gt;Choose a lottery with the highest score to win more and spend less!&lt;/p&gt;" data-toggle="tooltip" data-placement="bottom" title="Lottery rating from 1 to 10">
                                        <span class="fa fa-star"></span>
                                        <span class="ratestars_val">7.3</span>
                                    </a>
                                    <div class="time ">
                                        <span class="icon-clock"></span>
                                        <div class="time_val " date-close="569772">6&nbsp;days</div>
                                    </div>

                                    <div class="lottery_sel">

                                        <div class="event-easy-pick-cont">
                                            <select name="easy_pick" class="lottery_sel_select event-easy-pick-select">
                                                <option></option>
                                                <option value="{{ route('play') }}" data-event-easy-pick="1">6 lines for $ 8.82</option>
                                                <option value="{{ route('play') }}" data-event-easy-pick="1">10 lines for $ 13.38</option>
                                                <option value="" disabled>–––––&nbsp;or&nbsp;–––––</option>
                                                <option value="{{ route('play') }}">Pick numbers</option>
                                                <option class="light_version_site_hide" value="" disabled>––––––––––––</option>
                                                <option class="opt-syndicate" value="{{ route('play') }}">Syndicate &#128293;</option>
                                                <option class="opt-system" value="{{ route('play') }}">System &#128200;</option>
                                            </select>
                                            <a href="{{ route('play') }}" class="btn btn-success event-easy-pick-main-btn">Play<span class="fa-solid fa-chevron-down"></span></a>
                                            <div class="lottery_sel_dropdown">
                                                <div class="offers">
                                                    <p><a href="{{ route('play') }}" class="event-easy-pick-offer">6 lines for $ 8.82</a></p>
                                                    <p><a href="{{ route('play') }}" class="event-easy-pick-offer">10 lines for $ 13.38</a></p>
                                                </div>
                                                <div class="or">–––––&nbsp;or&nbsp;–––––</div>
                                                <p><a href="{{ route('play') }}" class="lottery_sel_choose">Pick numbers</a></p>
                                                <div class="or light_version_site_hide">–––––––––––––</div>

                                                <p><a href="{{ route('play') }}" class="lottery_sel_choose game-type-ico fire opt-syndicate">Syndicate</a></p>


                                                <p style="margin-top: 5px;"><a href="{{ route('play') }}" class="lottery_sel_choose game-type-ico lamp opt-system">System</a></p>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div><div class="lottery_slider_item">
                            <div class="lottery_item">
                                <div class="lottery_item_top" style="background-image: url('https://static.cdnland.com/upload/images/bg/eu-eurojackpot.svg');">
                                    <div class="lottery_item_img"><a href="{{ route('play') }}"><img src="https://static.cdnland.com/upload/images/logo/svg/eurojackpot.svg" alt="EuroJackpot"/></a></div>
                                    <div class="lottery_item_val"><span class="jack"><b>€ 10</b><br/><span class="mln_icon_extra text-nowrap">Million </span></span></div>
                                </div>
                                <div class="lottery_item_cont">
                                    <a href="#windowAlert" class="ratestars fancybox" onclick="yaGoals('CLEVER');" data-title="Today&#039;s Top-Rated Lotteries" data-text="&lt;p&gt;We analyze dozens of parameters daily: Jackpot amount and tax deductions, winning odds and the number of prize divisions, cost of a single line, and availability of such options as &quot;Multiplier,&quot; and much more to offer you the best possible lottery at the moment!&lt;/p&gt;&lt;p&gt;Choose a lottery with the highest score to win more and spend less!&lt;/p&gt;" data-toggle="tooltip" data-placement="bottom" title="Lottery rating from 1 to 10">
                                        <span class="fa fa-star"></span>
                                        <span class="ratestars_val">7.3</span>
                                    </a>
                                    <div class="time ">
                                        <span class="icon-clock"></span>
                                        <div class="time_val " date-close="249372">2&nbsp;days</div>
                                    </div>

                                    <div class="lottery_sel">

                                        <div class="event-easy-pick-cont">
                                            <select name="easy_pick" class="lottery_sel_select event-easy-pick-select">
                                                <option></option>
                                                <option value="/en/play-lottery/eurojackpot/?from=circular&easy_pick=1&extra_jackpot=" data-event-easy-pick="1">1 line for $ 5.76</option>
                                                <option value="/en/play-lottery/eurojackpot/?from=circular&easy_pick=3&extra_jackpot=" data-event-easy-pick="1">3 lines for $ 16.76</option>
                                                <option value="" disabled>–––––&nbsp;or&nbsp;–––––</option>
                                                <option value="{{ route('play') }}">Pick numbers</option>
                                                <option class="light_version_site_hide" value="" disabled>––––––––––––</option>
                                                <option class="opt-syndicate" value="{{ route('play') }}">Syndicate &#128293;</option>
                                                <option class="opt-system" value="{{ route('play') }}">System &#128200;</option>
                                            </select>
                                            <a href="{{ route('play') }}" class="btn btn-success event-easy-pick-main-btn">Play<span class="fa-solid fa-chevron-down"></span></a>
                                            <div class="lottery_sel_dropdown">
                                                <div class="offers">
                                                    <p><a href="/en/play-lottery/eurojackpot/?from=circular&easy_pick=1&extra_jackpot=" class="event-easy-pick-offer">1 line for $ 5.76</a></p>
                                                    <p><a href="/en/play-lottery/eurojackpot/?from=circular&easy_pick=3&extra_jackpot=" class="event-easy-pick-offer">3 lines for $ 16.76</a></p>
                                                </div>
                                                <div class="or">–––––&nbsp;or&nbsp;–––––</div>
                                                <p><a href="{{ route('play') }}" class="lottery_sel_choose">Pick numbers</a></p>
                                                <div class="or light_version_site_hide">–––––––––––––</div>

                                                <p><a href="{{ route('play') }}" class="lottery_sel_choose game-type-ico fire opt-syndicate">Syndicate</a></p>


                                                <p style="margin-top: 5px;"><a href="{{ route('play') }}" class="lottery_sel_choose game-type-ico lamp opt-system">System</a></p>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div><div class="lottery_slider_item">
                            <div class="lottery_item">
                                <div class="lottery_item_top" style="background-image: url('https://static.cdnland.com/upload/images/bg/es-bonoloto.svg');">
                                    <div class="lottery_item_img"><a href="{{ route('play') }}"><img src="https://static.cdnland.com/upload/images/logo/svg/bonoloto.svg" alt="BonoLoto"/></a></div>
                                    <div class="lottery_item_val"><span class="jack"><b>€ 400+</b><br/><span class="mln_icon_extra text-nowrap">Thousand </span></span></div>
                                </div>
                                <div class="lottery_item_cont">
                                    <a href="#windowAlert" class="ratestars fancybox" onclick="yaGoals('CLEVER');" data-title="Today&#039;s Top-Rated Lotteries" data-text="&lt;p&gt;We analyze dozens of parameters daily: Jackpot amount and tax deductions, winning odds and the number of prize divisions, cost of a single line, and availability of such options as &quot;Multiplier,&quot; and much more to offer you the best possible lottery at the moment!&lt;/p&gt;&lt;p&gt;Choose a lottery with the highest score to win more and spend less!&lt;/p&gt;" data-toggle="tooltip" data-placement="bottom" title="Lottery rating from 1 to 10">
                                        <span class="fa fa-star"></span>
                                        <span class="ratestars_val">7.3</span>
                                    </a>
                                    <div class="time ">
                                        <span class="icon-clock"></span>
                                        <div class="time_val " date-close="170172">1&nbsp;day</div>
                                    </div>

                                    <div class="lottery_sel">

                                        <div class="event-easy-pick-cont">
                                            <select name="easy_pick" class="lottery_sel_select event-easy-pick-select">
                                                <option></option>
                                                <option value="/en/play-lottery/bonoloto/?from=circular&easy_pick=2&extra_jackpot=" data-event-easy-pick="1">2 lines for $ 3.70</option>
                                                <option value="/en/play-lottery/bonoloto/?from=circular&easy_pick=4&extra_jackpot=" data-event-easy-pick="1">4 lines for $ 7.03</option>
                                                <option value="" disabled>–––––&nbsp;or&nbsp;–––––</option>
                                                <option value="{{ route('play') }}">Pick numbers</option>
                                                <option class="light_version_site_hide" value="" disabled>––––––––––––</option>

                                                <option class="opt-system" value="{{ route('play') }}">System &#128200;</option>
                                            </select>
                                            <a href="{{ route('play') }}" class="btn btn-success event-easy-pick-main-btn">Play<span class="fa-solid fa-chevron-down"></span></a>
                                            <div class="lottery_sel_dropdown">
                                                <div class="offers">
                                                    <p><a href="/en/play-lottery/bonoloto/?from=circular&easy_pick=2&extra_jackpot=" class="event-easy-pick-offer">2 lines for $ 3.70</a></p>
                                                    <p><a href="/en/play-lottery/bonoloto/?from=circular&easy_pick=4&extra_jackpot=" class="event-easy-pick-offer">4 lines for $ 7.03</a></p>
                                                </div>
                                                <div class="or">–––––&nbsp;or&nbsp;–––––</div>
                                                <p><a href="{{ route('play') }}" class="lottery_sel_choose">Pick numbers</a></p>
                                                <div class="or light_version_site_hide">–––––––––––––</div>


                                                <p style="margin-top: 5px;"><a href="{{ route('play') }}" class="lottery_sel_choose game-type-ico lamp opt-system">System</a></p>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div><div class="lottery_slider_item">
                            <div class="lottery_item">
                                <div class="lottery_item_top" style="background-image: url('https://static.cdnland.com/upload/images/bg/it-superenalotto.svg');">
                                    <div class="lottery_item_img"><a href="{{ route('play') }}"><img src="https://static.cdnland.com/upload/images/logo/svg/superenalotto.svg" alt="SuperEnalotto"/></a></div>
                                    <div class="lottery_item_val"><span class="jack"><b>€ 1.3+</b><br/><span class="mln_icon_extra text-nowrap">Million </span></span></div>
                                </div>
                                <div class="lottery_item_cont">
                                    <a href="#windowAlert" class="ratestars fancybox" onclick="yaGoals('CLEVER');" data-title="Today&#039;s Top-Rated Lotteries" data-text="&lt;p&gt;We analyze dozens of parameters daily: Jackpot amount and tax deductions, winning odds and the number of prize divisions, cost of a single line, and availability of such options as &quot;Multiplier,&quot; and much more to offer you the best possible lottery at the moment!&lt;/p&gt;&lt;p&gt;Choose a lottery with the highest score to win more and spend less!&lt;/p&gt;" data-toggle="tooltip" data-placement="bottom" title="Lottery rating from 1 to 10">
                                        <span class="fa fa-star"></span>
                                        <span class="ratestars_val">7.2</span>
                                    </a>
                                    <div class="time ">
                                        <span class="icon-clock"></span>
                                        <div class="time_val " date-close="249372">2&nbsp;days</div>
                                    </div>

                                    <div class="lottery_sel">

                                        <div class="event-easy-pick-cont">
                                            <select name="easy_pick" class="lottery_sel_select event-easy-pick-select">
                                                <option></option>
                                                <option value="{{ route('play') }}" data-event-easy-pick="1">1 line for $ 3.04</option>
                                                <option value="{{ route('play') }}" data-event-easy-pick="1">3 lines for $ 8.85</option>
                                                <option value="" disabled>–––––&nbsp;or&nbsp;–––––</option>
                                                <option value="{{ route('play') }}">Pick numbers</option>
                                                <option class="light_version_site_hide" value="" disabled>––––––––––––</option>
                                                <option class="opt-syndicate" value="{{ route('play') }}">Syndicate &#128293;</option>
                                                <option class="opt-system" value="{{ route('play') }}">System &#128200;</option>
                                            </select>
                                            <a href="{{ route('play') }}" class="btn btn-success event-easy-pick-main-btn">Play<span class="fa-solid fa-chevron-down"></span></a>
                                            <div class="lottery_sel_dropdown">
                                                <div class="offers">
                                                    <p><a href="{{ route('play') }}" class="event-easy-pick-offer">1 line for $ 3.04</a></p>
                                                    <p><a href="{{ route('play') }}" class="event-easy-pick-offer">3 lines for $ 8.85</a></p>
                                                </div>
                                                <div class="or">–––––&nbsp;or&nbsp;–––––</div>
                                                <p><a href="{{ route('play') }}" class="lottery_sel_choose">Pick numbers</a></p>
                                                <div class="or light_version_site_hide">–––––––––––––</div>

                                                <p><a href="{{ route('play') }}" class="lottery_sel_choose game-type-ico fire opt-syndicate">Syndicate</a></p>


                                                <p style="margin-top: 5px;"><a href="{{ route('play') }}" class="lottery_sel_choose game-type-ico lamp opt-system">System</a></p>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div><div class="lottery_slider_item">
                            <div class="lottery_item">
                                <div class="lottery_item_top" style="background-image: url('https://static.cdnland.com/upload/images/bg/us-new-york-lotto.svg');">
                                    <div class="lottery_item_img"><a href="/en/play-lottery/new-york-lotto/?from=circular&extra_jackpot="><img src="https://static.cdnland.com/upload/images/logo/svg/new-york.svg" alt="New York Lotto"/></a></div>
                                    <div class="lottery_item_val"><span class="jack"><b>$ 2</b><br/><span class="mln_icon_extra text-nowrap">Million </span></span></div>
                                </div>
                                <div class="lottery_item_cont">
                                    <a href="#windowAlert" class="ratestars fancybox" onclick="yaGoals('CLEVER');" data-title="Today&#039;s Top-Rated Lotteries" data-text="&lt;p&gt;We analyze dozens of parameters daily: Jackpot amount and tax deductions, winning odds and the number of prize divisions, cost of a single line, and availability of such options as &quot;Multiplier,&quot; and much more to offer you the best possible lottery at the moment!&lt;/p&gt;&lt;p&gt;Choose a lottery with the highest score to win more and spend less!&lt;/p&gt;" data-toggle="tooltip" data-placement="bottom" title="Lottery rating from 1 to 10">
                                        <span class="fa fa-star"></span>
                                        <span class="ratestars_val">7.2</span>
                                    </a>
                                    <div class="time ">
                                        <span class="icon-clock"></span>
                                        <div class="time_val " date-close="26172">7&nbsp;hours</div>
                                    </div>

                                    <div class="lottery_sel">

                                        <div class="event-easy-pick-cont">
                                            <select name="easy_pick" class="lottery_sel_select event-easy-pick-select">
                                                <option></option>
                                                <option value="/en/play-lottery/new-york-lotto/?from=circular&easy_pick=2&extra_jackpot=" data-event-easy-pick="1">2 lines for $ 3.00</option>
                                                <option value="/en/play-lottery/new-york-lotto/?from=circular&easy_pick=4&extra_jackpot=" data-event-easy-pick="1">4 lines for $ 5.82</option>
                                                <option value="" disabled>–––––&nbsp;or&nbsp;–––––</option>
                                                <option value="/en/play-lottery/new-york-lotto/?from=circular&extra_jackpot=">Pick numbers</option>
                                                <option class="light_version_site_hide" value="" disabled>––––––––––––</option>

                                                <option class="opt-system" value="/en/play-lottery/new-york-lotto/?from=index_lotto&system=1&extra_jackpot=">System &#128200;</option>
                                            </select>
                                            <a href="/en/play-lottery/new-york-lotto/?from=circular&extra_jackpot=" class="btn btn-success event-easy-pick-main-btn">Play<span class="fa-solid fa-chevron-down"></span></a>
                                            <div class="lottery_sel_dropdown">
                                                <div class="offers">
                                                    <p><a href="/en/play-lottery/new-york-lotto/?from=circular&easy_pick=2&extra_jackpot=" class="event-easy-pick-offer">2 lines for $ 3.00</a></p>
                                                    <p><a href="/en/play-lottery/new-york-lotto/?from=circular&easy_pick=4&extra_jackpot=" class="event-easy-pick-offer">4 lines for $ 5.82</a></p>
                                                </div>
                                                <div class="or">–––––&nbsp;or&nbsp;–––––</div>
                                                <p><a href="/en/play-lottery/new-york-lotto/?from=circular&extra_jackpot=" class="lottery_sel_choose">Pick numbers</a></p>
                                                <div class="or light_version_site_hide">–––––––––––––</div>


                                                <p style="margin-top: 5px;"><a href="/en/play-lottery/new-york-lotto/?from=index_lotto&system=1&extra_jackpot=" class="lottery_sel_choose game-type-ico lamp opt-system">System</a></p>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div><div class="lottery_slider_item">
                            <div class="lottery_item">
                                <div class="lottery_item_top" style="background-image: url('https://static.cdnland.com/upload/images/bg/us-texas-lotto.svg');">
                                    <div class="lottery_item_img"><a href="/en/play-lottery/lotto-texas/?from=circular&extra_jackpot="><img src="https://static.cdnland.com/upload/images/logo/svg/texas-lotto.svg" alt="Lotto Texas"/></a></div>
                                    <div class="lottery_item_val"><span class="jack"><b>$ 61</b><br/><span class="mln_icon_extra text-nowrap">Million </span></span></div>
                                </div>
                                <div class="lottery_item_cont">
                                    <a href="#windowAlert" class="ratestars fancybox" onclick="yaGoals('CLEVER');" data-title="Today&#039;s Top-Rated Lotteries" data-text="&lt;p&gt;We analyze dozens of parameters daily: Jackpot amount and tax deductions, winning odds and the number of prize divisions, cost of a single line, and availability of such options as &quot;Multiplier,&quot; and much more to offer you the best possible lottery at the moment!&lt;/p&gt;&lt;p&gt;Choose a lottery with the highest score to win more and spend less!&lt;/p&gt;" data-toggle="tooltip" data-placement="bottom" title="Lottery rating from 1 to 10">
                                        <span class="fa fa-star"></span>
                                        <span class="ratestars_val">7.2</span>
                                    </a>
                                    <div class="time ">
                                        <span class="icon-clock"></span>
                                        <div class="time_val " date-close="29772">8&nbsp;hours</div>
                                    </div>

                                    <div class="lottery_sel">

                                        <div class="event-easy-pick-cont">
                                            <select name="easy_pick" class="lottery_sel_select event-easy-pick-select">
                                                <option></option>
                                                <option value="/en/play-lottery/lotto-texas/?from=circular&easy_pick=1&extra_jackpot=" data-event-easy-pick="1">1 line for $ 3.79</option>
                                                <option value="/en/play-lottery/lotto-texas/?from=circular&easy_pick=3&extra_jackpot=" data-event-easy-pick="1">3 lines for $ 10.80</option>
                                                <option value="" disabled>–––––&nbsp;or&nbsp;–––––</option>
                                                <option value="/en/play-lottery/lotto-texas/?from=circular&extra_jackpot=">Pick numbers</option>
                                                <option class="light_version_site_hide" value="" disabled>––––––––––––</option>

                                                <option class="opt-system" value="/en/play-lottery/lotto-texas/?from=index_lotto&system=1&extra_jackpot=">System &#128200;</option>
                                            </select>
                                            <a href="/en/play-lottery/lotto-texas/?from=circular&extra_jackpot=" class="btn btn-success event-easy-pick-main-btn">Play<span class="fa-solid fa-chevron-down"></span></a>
                                            <div class="lottery_sel_dropdown">
                                                <div class="offers">
                                                    <p><a href="/en/play-lottery/lotto-texas/?from=circular&easy_pick=1&extra_jackpot=" class="event-easy-pick-offer">1 line for $ 3.79</a></p>
                                                    <p><a href="/en/play-lottery/lotto-texas/?from=circular&easy_pick=3&extra_jackpot=" class="event-easy-pick-offer">3 lines for $ 10.80</a></p>
                                                </div>
                                                <div class="or">–––––&nbsp;or&nbsp;–––––</div>
                                                <p><a href="/en/play-lottery/lotto-texas/?from=circular&extra_jackpot=" class="lottery_sel_choose">Pick numbers</a></p>
                                                <div class="or light_version_site_hide">–––––––––––––</div>


                                                <p style="margin-top: 5px;"><a href="/en/play-lottery/lotto-texas/?from=index_lotto&system=1&extra_jackpot=" class="lottery_sel_choose game-type-ico lamp opt-system">System</a></p>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div><div class="lottery_slider_item">
                            <div class="lottery_item">
                                <div class="lottery_item_top" style="background-image: url('https://static.cdnland.com/upload/images/bg/fr-france-lotto.svg');">
                                    <div class="lottery_item_img"><a href="/en/play-lottery/france-loto/?from=circular&extra_jackpot="><img src="https://static.cdnland.com/upload/images/logo/svg/france-lotto.svg" alt="France Loto"/></a></div>
                                    <div class="lottery_item_val"><span class="jack"><b>€ 2+</b><br/><span class="mln_icon_extra text-nowrap">Million </span></span></div>
                                </div>
                                <div class="lottery_item_cont">
                                    <a href="#windowAlert" class="ratestars fancybox" onclick="yaGoals('CLEVER');" data-title="Today&#039;s Top-Rated Lotteries" data-text="&lt;p&gt;We analyze dozens of parameters daily: Jackpot amount and tax deductions, winning odds and the number of prize divisions, cost of a single line, and availability of such options as &quot;Multiplier,&quot; and much more to offer you the best possible lottery at the moment!&lt;/p&gt;&lt;p&gt;Choose a lottery with the highest score to win more and spend less!&lt;/p&gt;" data-toggle="tooltip" data-placement="bottom" title="Lottery rating from 1 to 10">
                                        <span class="fa fa-star"></span>
                                        <span class="ratestars_val">7.1</span>
                                    </a>
                                    <div class="time ">
                                        <span class="icon-clock"></span>
                                        <div class="time_val " date-close="159372">1&nbsp;day</div>
                                    </div>

                                    <div class="lottery_sel">

                                        <div class="event-easy-pick-cont">
                                            <select name="easy_pick" class="lottery_sel_select event-easy-pick-select">
                                                <option></option>
                                                <option value="/en/play-lottery/france-loto/?from=circular&easy_pick=1&extra_jackpot=" data-event-easy-pick="1">1 line for $ 6.20</option>
                                                <option value="/en/play-lottery/france-loto/?from=circular&easy_pick=3&extra_jackpot=" data-event-easy-pick="1">3 lines for $ 17.67</option>
                                                <option value="" disabled>–––––&nbsp;or&nbsp;–––––</option>
                                                <option value="/en/play-lottery/france-loto/?from=circular&extra_jackpot=">Pick numbers</option>
                                                <option class="light_version_site_hide" value="" disabled>––––––––––––</option>

                                                <option class="opt-system" value="/en/play-lottery/france-loto/?from=index_lotto&system=1&extra_jackpot=">System &#128200;</option>
                                            </select>
                                            <a href="/en/play-lottery/france-loto/?from=circular&extra_jackpot=" class="btn btn-success event-easy-pick-main-btn">Play<span class="fa-solid fa-chevron-down"></span></a>
                                            <div class="lottery_sel_dropdown">
                                                <div class="offers">
                                                    <p><a href="/en/play-lottery/france-loto/?from=circular&easy_pick=1&extra_jackpot=" class="event-easy-pick-offer">1 line for $ 6.20</a></p>
                                                    <p><a href="/en/play-lottery/france-loto/?from=circular&easy_pick=3&extra_jackpot=" class="event-easy-pick-offer">3 lines for $ 17.67</a></p>
                                                </div>
                                                <div class="or">–––––&nbsp;or&nbsp;–––––</div>
                                                <p><a href="/en/play-lottery/france-loto/?from=circular&extra_jackpot=" class="lottery_sel_choose">Pick numbers</a></p>
                                                <div class="or light_version_site_hide">–––––––––––––</div>


                                                <p style="margin-top: 5px;"><a href="/en/play-lottery/france-loto/?from=index_lotto&system=1&extra_jackpot=" class="lottery_sel_choose game-type-ico lamp opt-system">System</a></p>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div><div class="lottery_slider_item">
                            <div class="lottery_item">
                                <div class="lottery_item_top" style="background-image: url('https://static.cdnland.com/upload/images/bg/uk-thunderball.svg');">
                                    <div class="lottery_item_img"><a href="/en/play-lottery/thunderball-uk/?from=circular&extra_jackpot="><img src="https://static.cdnland.com/upload/images/logo/svg/thunderball_lotto.svg" alt="Thunderball UK"/></a></div>
                                    <div class="lottery_item_val"><span class="jack"><b>£ 500+</b><br/><span class="mln_icon_extra text-nowrap">Thousand </span></span></div>
                                </div>
                                <div class="lottery_item_cont">
                                    <a href="#windowAlert" class="ratestars fancybox" onclick="yaGoals('CLEVER');" data-title="Today&#039;s Top-Rated Lotteries" data-text="&lt;p&gt;We analyze dozens of parameters daily: Jackpot amount and tax deductions, winning odds and the number of prize divisions, cost of a single line, and availability of such options as &quot;Multiplier,&quot; and much more to offer you the best possible lottery at the moment!&lt;/p&gt;&lt;p&gt;Choose a lottery with the highest score to win more and spend less!&lt;/p&gt;" data-toggle="tooltip" data-placement="bottom" title="Lottery rating from 1 to 10">
                                        <span class="fa fa-star"></span>
                                        <span class="ratestars_val">7.0</span>
                                    </a>
                                    <div class="time ">
                                        <span class="icon-clock"></span>
                                        <div class="time_val " date-close="252972">2&nbsp;days</div>
                                    </div>

                                    <div class="lottery_sel">

                                        <div class="event-easy-pick-cont">
                                            <select name="easy_pick" class="lottery_sel_select event-easy-pick-select">
                                                <option></option>
                                                <option value="/en/play-lottery/thunderball-uk/?from=circular&easy_pick=1&extra_jackpot=" data-event-easy-pick="1">1 line for $ 3.09</option>
                                                <option value="/en/play-lottery/thunderball-uk/?from=circular&easy_pick=3&extra_jackpot=" data-event-easy-pick="1">3 lines for $ 8.99</option>
                                                <option value="" disabled>–––––&nbsp;or&nbsp;–––––</option>
                                                <option value="/en/play-lottery/thunderball-uk/?from=circular&extra_jackpot=">Pick numbers</option>
                                                <option class="light_version_site_hide" value="" disabled>––––––––––––</option>

                                                <option class="opt-system" value="/en/play-lottery/thunderball-uk/?from=index_lotto&system=1&extra_jackpot=">System &#128200;</option>
                                            </select>
                                            <a href="/en/play-lottery/thunderball-uk/?from=circular&extra_jackpot=" class="btn btn-success event-easy-pick-main-btn">Play<span class="fa-solid fa-chevron-down"></span></a>
                                            <div class="lottery_sel_dropdown">
                                                <div class="offers">
                                                    <p><a href="/en/play-lottery/thunderball-uk/?from=circular&easy_pick=1&extra_jackpot=" class="event-easy-pick-offer">1 line for $ 3.09</a></p>
                                                    <p><a href="/en/play-lottery/thunderball-uk/?from=circular&easy_pick=3&extra_jackpot=" class="event-easy-pick-offer">3 lines for $ 8.99</a></p>
                                                </div>
                                                <div class="or">–––––&nbsp;or&nbsp;–––––</div>
                                                <p><a href="/en/play-lottery/thunderball-uk/?from=circular&extra_jackpot=" class="lottery_sel_choose">Pick numbers</a></p>
                                                <div class="or light_version_site_hide">–––––––––––––</div>


                                                <p style="margin-top: 5px;"><a href="/en/play-lottery/thunderball-uk/?from=index_lotto&system=1&extra_jackpot=" class="lottery_sel_choose game-type-ico lamp opt-system">System</a></p>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div><div class="lottery_slider_item">
                            <div class="lottery_item">
                                <div class="lottery_item_top" style="background-image: url('https://static.cdnland.com/upload/images/bg/us-superlotto-plus.svg');">
                                    <div class="lottery_item_img"><a href="{{ route('play') }}"><img src="https://static.cdnland.com/upload/images/logo/svg/superlotto-plus.svg" alt="SuperLotto Plus"/></a></div>
                                    <div class="lottery_item_val"><span class="jack"><b>$ 46</b><br/><span class="mln_icon_extra text-nowrap">Million </span></span></div>
                                </div>
                                <div class="lottery_item_cont">
                                    <a href="#windowAlert" class="ratestars fancybox" onclick="yaGoals('CLEVER');" data-title="Today&#039;s Top-Rated Lotteries" data-text="&lt;p&gt;We analyze dozens of parameters daily: Jackpot amount and tax deductions, winning odds and the number of prize divisions, cost of a single line, and availability of such options as &quot;Multiplier,&quot; and much more to offer you the best possible lottery at the moment!&lt;/p&gt;&lt;p&gt;Choose a lottery with the highest score to win more and spend less!&lt;/p&gt;" data-toggle="tooltip" data-placement="bottom" title="Lottery rating from 1 to 10">
                                        <span class="fa fa-star"></span>
                                        <span class="ratestars_val">7.0</span>
                                    </a>
                                    <div class="time ">
                                        <span class="icon-clock"></span>
                                        <div class="time_val " date-close="26172">7&nbsp;hours</div>
                                    </div>

                                    <div class="lottery_sel">

                                        <div class="event-easy-pick-cont">
                                            <select name="easy_pick" class="lottery_sel_select event-easy-pick-select">
                                                <option></option>
                                                <option value="{{ route('play') }}" data-event-easy-pick="1">2 lines for $ 5.98</option>
                                                <option value="{{ route('play') }}" data-event-easy-pick="1">3 lines for $ 8.52</option>
                                                <option value="" disabled>–––––&nbsp;or&nbsp;–––––</option>
                                                <option value="{{ route('play') }}">Pick numbers</option>
                                                <option class="light_version_site_hide" value="" disabled>––––––––––––</option>
                                                <option class="opt-syndicate" value="{{ route('play') }}">Syndicate &#128293;</option>
                                                <option class="opt-system" value="{{ route('play') }}">System &#128200;</option>
                                            </select>
                                            <a href="{{ route('play') }}" class="btn btn-success event-easy-pick-main-btn">Play<span class="fa-solid fa-chevron-down"></span></a>
                                            <div class="lottery_sel_dropdown">
                                                <div class="offers">
                                                    <p><a href="{{ route('play') }}" class="event-easy-pick-offer">2 lines for $ 5.98</a></p>
                                                    <p><a href="{{ route('play') }}" class="event-easy-pick-offer">3 lines for $ 8.52</a></p>
                                                </div>
                                                <div class="or">–––––&nbsp;or&nbsp;–––––</div>
                                                <p><a href="{{ route('play') }}" class="lottery_sel_choose">Pick numbers</a></p>
                                                <div class="or light_version_site_hide">–––––––––––––</div>

                                                <p><a href="{{ route('play') }}" class="lottery_sel_choose game-type-ico fire opt-syndicate">Syndicate</a></p>


                                                <p style="margin-top: 5px;"><a href="{{ route('play') }}" class="lottery_sel_choose game-type-ico lamp opt-system">System</a></p>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div><div class="lottery_slider_item">
                            <div class="lottery_item">
                                <div class="lottery_item_top" style="background-image: url('https://static.cdnland.com/upload/images/bg/au-powerball.svg');">
                                    <div class="lottery_item_img"><a href="/en/play-lottery/powerball-australia/?from=circular&extra_jackpot="><img src="https://static.cdnland.com/upload/images/logo/svg/powerball_au.svg" alt="Powerball Australia"/></a></div>
                                    <div class="lottery_item_val"><span class="jack"><b>A$ 20</b><br/><span class="mln_icon_extra text-nowrap">Million </span></span></div>
                                </div>
                                <div class="lottery_item_cont">
                                    <a href="#windowAlert" class="ratestars fancybox" onclick="yaGoals('CLEVER');" data-title="Today&#039;s Top-Rated Lotteries" data-text="&lt;p&gt;We analyze dozens of parameters daily: Jackpot amount and tax deductions, winning odds and the number of prize divisions, cost of a single line, and availability of such options as &quot;Multiplier,&quot; and much more to offer you the best possible lottery at the moment!&lt;/p&gt;&lt;p&gt;Choose a lottery with the highest score to win more and spend less!&lt;/p&gt;" data-toggle="tooltip" data-placement="bottom" title="Lottery rating from 1 to 10">
                                        <span class="fa fa-star"></span>
                                        <span class="ratestars_val">7.0</span>
                                    </a>
                                    <div class="time ">
                                        <span class="icon-clock"></span>
                                        <div class="time_val " date-close="386172">4&nbsp;days</div>
                                    </div>

                                    <div class="lottery_sel">

                                        <div class="event-easy-pick-cont">
                                            <select name="easy_pick" class="lottery_sel_select event-easy-pick-select">
                                                <option></option>
                                                <option value="/en/play-lottery/powerball-australia/?from=circular&easy_pick=4&extra_jackpot=" data-event-easy-pick="1">4 lines for $ 7.24</option>
                                                <option value="/en/play-lottery/powerball-australia/?from=circular&easy_pick=6&extra_jackpot=" data-event-easy-pick="1">6 lines for $ 9.88</option>
                                                <option value="" disabled>–––––&nbsp;or&nbsp;–––––</option>
                                                <option value="/en/play-lottery/powerball-australia/?from=circular&extra_jackpot=">Pick numbers</option>
                                                <option class="light_version_site_hide" value="" disabled>––––––––––––</option>
                                                <option class="opt-syndicate" value="/en/play-lottery/powerball-australia/?from=index_lotto&syndicates=1&extra_jackpot=">Syndicate &#128293;</option>
                                                <option class="opt-system" value="/en/play-lottery/powerball-australia/?from=index_lotto&system=1&extra_jackpot=">System &#128200;</option>
                                            </select>
                                            <a href="/en/play-lottery/powerball-australia/?from=circular&extra_jackpot=" class="btn btn-success event-easy-pick-main-btn">Play<span class="fa-solid fa-chevron-down"></span></a>
                                            <div class="lottery_sel_dropdown">
                                                <div class="offers">
                                                    <p><a href="/en/play-lottery/powerball-australia/?from=circular&easy_pick=4&extra_jackpot=" class="event-easy-pick-offer">4 lines for $ 7.24</a></p>
                                                    <p><a href="/en/play-lottery/powerball-australia/?from=circular&easy_pick=6&extra_jackpot=" class="event-easy-pick-offer">6 lines for $ 9.88</a></p>
                                                </div>
                                                <div class="or">–––––&nbsp;or&nbsp;–––––</div>
                                                <p><a href="/en/play-lottery/powerball-australia/?from=circular&extra_jackpot=" class="lottery_sel_choose">Pick numbers</a></p>
                                                <div class="or light_version_site_hide">–––––––––––––</div>

                                                <p><a href="/en/play-lottery/powerball-australia/?from=index_lotto&syndicates=1&extra_jackpot=" class="lottery_sel_choose game-type-ico fire opt-syndicate">Syndicate</a></p>


                                                <p style="margin-top: 5px;"><a href="/en/play-lottery/powerball-australia/?from=index_lotto&system=1&extra_jackpot=" class="lottery_sel_choose game-type-ico lamp opt-system">System</a></p>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div><div class="lottery_slider_item">
                            <div class="lottery_item">
                                <div class="lottery_item_top" style="background-image: url('https://static.cdnland.com/upload/images/bg/za-powerball.svg');">
                                    <div class="lottery_item_img"><a href="/en/play-lottery/za-powerball/?from=circular&extra_jackpot="><img src="https://static.cdnland.com/upload/images/logo/svg/powerball_za.svg" alt="South Africa Powerball"/></a></div>
                                    <div class="lottery_item_val"><span class="jack"><b>R 26</b><br/><span class="mln_icon_extra text-nowrap">Million </span></span></div>
                                </div>
                                <div class="lottery_item_cont">
                                    <a href="#windowAlert" class="ratestars fancybox" onclick="yaGoals('CLEVER');" data-title="Today&#039;s Top-Rated Lotteries" data-text="&lt;p&gt;We analyze dozens of parameters daily: Jackpot amount and tax deductions, winning odds and the number of prize divisions, cost of a single line, and availability of such options as &quot;Multiplier,&quot; and much more to offer you the best possible lottery at the moment!&lt;/p&gt;&lt;p&gt;Choose a lottery with the highest score to win more and spend less!&lt;/p&gt;" data-toggle="tooltip" data-placement="bottom" title="Lottery rating from 1 to 10">
                                        <span class="fa fa-star"></span>
                                        <span class="ratestars_val">7.0</span>
                                    </a>
                                    <div class="time ">
                                        <span class="icon-clock"></span>
                                        <div class="time_val " date-close="260172">3&nbsp;days</div>
                                    </div>

                                    <div class="lottery_sel">

                                        <div class="event-easy-pick-cont">
                                            <select name="easy_pick" class="lottery_sel_select event-easy-pick-select">
                                                <option></option>
                                                <option value="/en/play-lottery/za-powerball/?from=circular&easy_pick=5&extra_jackpot=" data-event-easy-pick="1">5 lines for $ 4.20</option>
                                                <option value="/en/play-lottery/za-powerball/?from=circular&easy_pick=10&extra_jackpot=" data-event-easy-pick="1">10 lines for $ 7.90</option>
                                                <option value="" disabled>–––––&nbsp;or&nbsp;–––––</option>
                                                <option value="/en/play-lottery/za-powerball/?from=circular&extra_jackpot=">Pick numbers</option>
                                                <option class="light_version_site_hide" value="" disabled>––––––––––––</option>

                                                <option class="opt-system" value="/en/play-lottery/za-powerball/?from=index_lotto&system=1&extra_jackpot=">System &#128200;</option>
                                            </select>
                                            <a href="/en/play-lottery/za-powerball/?from=circular&extra_jackpot=" class="btn btn-success event-easy-pick-main-btn">Play<span class="fa-solid fa-chevron-down"></span></a>
                                            <div class="lottery_sel_dropdown">
                                                <div class="offers">
                                                    <p><a href="/en/play-lottery/za-powerball/?from=circular&easy_pick=5&extra_jackpot=" class="event-easy-pick-offer">5 lines for $ 4.20</a></p>
                                                    <p><a href="/en/play-lottery/za-powerball/?from=circular&easy_pick=10&extra_jackpot=" class="event-easy-pick-offer">10 lines for $ 7.90</a></p>
                                                </div>
                                                <div class="or">–––––&nbsp;or&nbsp;–––––</div>
                                                <p><a href="/en/play-lottery/za-powerball/?from=circular&extra_jackpot=" class="lottery_sel_choose">Pick numbers</a></p>
                                                <div class="or light_version_site_hide">–––––––––––––</div>


                                                <p style="margin-top: 5px;"><a href="/en/play-lottery/za-powerball/?from=index_lotto&system=1&extra_jackpot=" class="lottery_sel_choose game-type-ico lamp opt-system">System</a></p>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div><div class="lottery_slider_item">
                            <div class="lottery_item">
                                <div class="lottery_item_top" style="background-image: url('https://static.cdnland.com/upload/images/bg/us-fantasy5.svg');">
                                    <div class="lottery_item_img"><a href="/en/play-lottery/ca-fantasy-5/?from=circular&extra_jackpot="><img src="https://static.cdnland.com/upload/images/logo/svg/fantasy5.svg" alt="California Fantasy 5"/></a></div>
                                    <div class="lottery_item_val"><span class="jack"><b>$ 186</b><br/><span class="mln_icon_extra text-nowrap">Thousand </span></span></div>
                                </div>
                                <div class="lottery_item_cont">
                                    <a href="#windowAlert" class="ratestars fancybox" onclick="yaGoals('CLEVER');" data-title="Today&#039;s Top-Rated Lotteries" data-text="&lt;p&gt;We analyze dozens of parameters daily: Jackpot amount and tax deductions, winning odds and the number of prize divisions, cost of a single line, and availability of such options as &quot;Multiplier,&quot; and much more to offer you the best possible lottery at the moment!&lt;/p&gt;&lt;p&gt;Choose a lottery with the highest score to win more and spend less!&lt;/p&gt;" data-toggle="tooltip" data-placement="bottom" title="Lottery rating from 1 to 10">
                                        <span class="fa fa-star"></span>
                                        <span class="ratestars_val">6.6</span>
                                    </a>
                                    <div class="time ">
                                        <span class="icon-clock"></span>
                                        <div class="time_val " date-close="18972">5&nbsp;hours</div>
                                    </div>

                                    <div class="lottery_sel">

                                        <div class="event-easy-pick-cont">
                                            <select name="easy_pick" class="lottery_sel_select event-easy-pick-select">
                                                <option></option>
                                                <option value="/en/play-lottery/ca-fantasy-5/?from=circular&easy_pick=3&extra_jackpot=" data-event-easy-pick="1">3 lines for $ 7.50</option>
                                                <option value="/en/play-lottery/ca-fantasy-5/?from=circular&easy_pick=5&extra_jackpot=" data-event-easy-pick="1">5 lines for $ 11.87</option>
                                                <option value="" disabled>–––––&nbsp;or&nbsp;–––––</option>
                                                <option value="/en/play-lottery/ca-fantasy-5/?from=circular&extra_jackpot=">Pick numbers</option>
                                                <option class="light_version_site_hide" value="" disabled>––––––––––––</option>

                                                <option class="opt-system" value="/en/play-lottery/ca-fantasy-5/?from=index_lotto&system=1&extra_jackpot=">System &#128200;</option>
                                            </select>
                                            <a href="/en/play-lottery/ca-fantasy-5/?from=circular&extra_jackpot=" class="btn btn-success event-easy-pick-main-btn">Play<span class="fa-solid fa-chevron-down"></span></a>
                                            <div class="lottery_sel_dropdown">
                                                <div class="offers">
                                                    <p><a href="/en/play-lottery/ca-fantasy-5/?from=circular&easy_pick=3&extra_jackpot=" class="event-easy-pick-offer">3 lines for $ 7.50</a></p>
                                                    <p><a href="/en/play-lottery/ca-fantasy-5/?from=circular&easy_pick=5&extra_jackpot=" class="event-easy-pick-offer">5 lines for $ 11.87</a></p>
                                                </div>
                                                <div class="or">–––––&nbsp;or&nbsp;–––––</div>
                                                <p><a href="/en/play-lottery/ca-fantasy-5/?from=circular&extra_jackpot=" class="lottery_sel_choose">Pick numbers</a></p>
                                                <div class="or light_version_site_hide">–––––––––––––</div>


                                                <p style="margin-top: 5px;"><a href="/en/play-lottery/ca-fantasy-5/?from=index_lotto&system=1&extra_jackpot=" class="lottery_sel_choose game-type-ico lamp opt-system">System</a></p>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div><div class="lottery_slider_item">
                            <div class="lottery_item">
                                <div class="lottery_item_top" style="background-image: url('https://static.cdnland.com/upload/images/bg/za-daily_lotto.svg');">
                                    <div class="lottery_item_img"><a href="/en/play-lottery/za-daily-lotto/?from=circular&extra_jackpot="><img src="https://static.cdnland.com/upload/images/logo/svg/daily_lotto.svg" alt="South Africa Daily Lotto"/></a></div>
                                    <div class="lottery_item_val"><span class="jack"><b>R 40+</b><br/><span class="mln_icon_extra text-nowrap">Thousand </span></span></div>
                                </div>
                                <div class="lottery_item_cont">
                                    <a href="#windowAlert" class="ratestars fancybox" onclick="yaGoals('CLEVER');" data-title="Today&#039;s Top-Rated Lotteries" data-text="&lt;p&gt;We analyze dozens of parameters daily: Jackpot amount and tax deductions, winning odds and the number of prize divisions, cost of a single line, and availability of such options as &quot;Multiplier,&quot; and much more to offer you the best possible lottery at the moment!&lt;/p&gt;&lt;p&gt;Choose a lottery with the highest score to win more and spend less!&lt;/p&gt;" data-toggle="tooltip" data-placement="bottom" title="Lottery rating from 1 to 10">
                                        <span class="fa fa-star"></span>
                                        <span class="ratestars_val">6.6</span>
                                    </a>
                                    <div class="time ">
                                        <span class="icon-clock"></span>
                                        <div class="time_val " date-close="80172">22&nbsp;hours</div>
                                    </div>

                                    <div class="lottery_sel">

                                        <div class="event-easy-pick-cont">
                                            <select name="easy_pick" class="lottery_sel_select event-easy-pick-select">
                                                <option></option>
                                                <option value="/en/play-lottery/za-daily-lotto/?from=circular&easy_pick=10&extra_jackpot=" data-event-easy-pick="1">10 lines for $ 4.27</option>
                                                <option value="/en/play-lottery/za-daily-lotto/?from=circular&easy_pick=15&extra_jackpot=" data-event-easy-pick="1">15 lines for $ 6.34</option>
                                                <option value="" disabled>–––––&nbsp;or&nbsp;–––––</option>
                                                <option value="/en/play-lottery/za-daily-lotto/?from=circular&extra_jackpot=">Pick numbers</option>
                                                <option class="light_version_site_hide" value="" disabled>––––––––––––</option>

                                                <option class="opt-system" value="/en/play-lottery/za-daily-lotto/?from=index_lotto&system=1&extra_jackpot=">System &#128200;</option>
                                            </select>
                                            <a href="/en/play-lottery/za-daily-lotto/?from=circular&extra_jackpot=" class="btn btn-success event-easy-pick-main-btn">Play<span class="fa-solid fa-chevron-down"></span></a>
                                            <div class="lottery_sel_dropdown">
                                                <div class="offers">
                                                    <p><a href="/en/play-lottery/za-daily-lotto/?from=circular&easy_pick=10&extra_jackpot=" class="event-easy-pick-offer">10 lines for $ 4.27</a></p>
                                                    <p><a href="/en/play-lottery/za-daily-lotto/?from=circular&easy_pick=15&extra_jackpot=" class="event-easy-pick-offer">15 lines for $ 6.34</a></p>
                                                </div>
                                                <div class="or">–––––&nbsp;or&nbsp;–––––</div>
                                                <p><a href="/en/play-lottery/za-daily-lotto/?from=circular&extra_jackpot=" class="lottery_sel_choose">Pick numbers</a></p>
                                                <div class="or light_version_site_hide">–––––––––––––</div>


                                                <p style="margin-top: 5px;"><a href="/en/play-lottery/za-daily-lotto/?from=index_lotto&system=1&extra_jackpot=" class="lottery_sel_choose game-type-ico lamp opt-system">System</a></p>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div><div class="lottery_slider_item">
                            <div class="lottery_item">
                                <div class="lottery_item_top" style="background-image: url('https://static.cdnland.com/upload/images/bg/us-megabucks.svg');">
                                    <div class="lottery_item_img"><a href="/en/play-lottery/megabucks/?from=circular&extra_jackpot="><img src="https://static.cdnland.com/upload/images/logo/svg/megabucks.svg" alt="Wisconsin Megabucks"/></a></div>
                                    <div class="lottery_item_val"><span class="jack"><b>$ 1</b><br/><span class="mln_icon_extra text-nowrap">Million </span></span></div>
                                </div>
                                <div class="lottery_item_cont">
                                    <a href="#windowAlert" class="ratestars fancybox" onclick="yaGoals('CLEVER');" data-title="Today&#039;s Top-Rated Lotteries" data-text="&lt;p&gt;We analyze dozens of parameters daily: Jackpot amount and tax deductions, winning odds and the number of prize divisions, cost of a single line, and availability of such options as &quot;Multiplier,&quot; and much more to offer you the best possible lottery at the moment!&lt;/p&gt;&lt;p&gt;Choose a lottery with the highest score to win more and spend less!&lt;/p&gt;" data-toggle="tooltip" data-placement="bottom" title="Lottery rating from 1 to 10">
                                        <span class="fa fa-star"></span>
                                        <span class="ratestars_val">6.6</span>
                                    </a>
                                    <div class="time ">
                                        <span class="icon-clock"></span>
                                        <div class="time_val " date-close="22572">6&nbsp;hours</div>
                                    </div>

                                    <div class="lottery_sel">

                                        <div class="event-easy-pick-cont">
                                            <select name="easy_pick" class="lottery_sel_select event-easy-pick-select">
                                                <option></option>
                                                <option value="/en/play-lottery/megabucks/?from=circular&easy_pick=2&extra_jackpot=" data-event-easy-pick="1">2 lines for $ 3.30</option>
                                                <option value="/en/play-lottery/megabucks/?from=circular&easy_pick=5&extra_jackpot=" data-event-easy-pick="1">5 lines for $ 7.67</option>
                                                <option value="" disabled>–––––&nbsp;or&nbsp;–––––</option>
                                                <option value="/en/play-lottery/megabucks/?from=circular&extra_jackpot=">Pick numbers</option>
                                                <option class="light_version_site_hide" value="" disabled>––––––––––––</option>

                                                <option class="opt-system" value="/en/play-lottery/megabucks/?from=index_lotto&system=1&extra_jackpot=">System &#128200;</option>
                                            </select>
                                            <a href="/en/play-lottery/megabucks/?from=circular&extra_jackpot=" class="btn btn-success event-easy-pick-main-btn">Play<span class="fa-solid fa-chevron-down"></span></a>
                                            <div class="lottery_sel_dropdown">
                                                <div class="offers">
                                                    <p><a href="/en/play-lottery/megabucks/?from=circular&easy_pick=2&extra_jackpot=" class="event-easy-pick-offer">2 lines for $ 3.30</a></p>
                                                    <p><a href="/en/play-lottery/megabucks/?from=circular&easy_pick=5&extra_jackpot=" class="event-easy-pick-offer">5 lines for $ 7.67</a></p>
                                                </div>
                                                <div class="or">–––––&nbsp;or&nbsp;–––––</div>
                                                <p><a href="/en/play-lottery/megabucks/?from=circular&extra_jackpot=" class="lottery_sel_choose">Pick numbers</a></p>
                                                <div class="or light_version_site_hide">–––––––––––––</div>


                                                <p style="margin-top: 5px;"><a href="/en/play-lottery/megabucks/?from=index_lotto&system=1&extra_jackpot=" class="lottery_sel_choose game-type-ico lamp opt-system">System</a></p>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div><div class="lottery_slider_item">
                            <div class="lottery_item">
                                <div class="lottery_item_top" style="background-image: url('https://static.cdnland.com/upload/images/bg/es-el-gordo.svg');">
                                    <div class="lottery_item_img"><a href="{{ route('play') }}"><img src="https://static.cdnland.com/upload/images/logo/svg/el_gordo.svg" alt="El Gordo de la Primitiva"/></a></div>
                                    <div class="lottery_item_val"><span class="jack"><b>€ 5+</b><br/><span class="mln_icon_extra text-nowrap">Million </span></span></div>
                                </div>
                                <div class="lottery_item_cont">
                                    <a href="#windowAlert" class="ratestars fancybox" onclick="yaGoals('CLEVER');" data-title="Today&#039;s Top-Rated Lotteries" data-text="&lt;p&gt;We analyze dozens of parameters daily: Jackpot amount and tax deductions, winning odds and the number of prize divisions, cost of a single line, and availability of such options as &quot;Multiplier,&quot; and much more to offer you the best possible lottery at the moment!&lt;/p&gt;&lt;p&gt;Choose a lottery with the highest score to win more and spend less!&lt;/p&gt;" data-toggle="tooltip" data-placement="bottom" title="Lottery rating from 1 to 10">
                                        <span class="fa fa-star"></span>
                                        <span class="ratestars_val">6.6</span>
                                    </a>
                                    <div class="time ">
                                        <span class="icon-clock"></span>
                                        <div class="time_val " date-close="580572">6&nbsp;days</div>
                                    </div>

                                    <div class="lottery_sel">

                                        <div class="event-easy-pick-cont">
                                            <select name="easy_pick" class="lottery_sel_select event-easy-pick-select">
                                                <option></option>
                                                <option value="/en/play-lottery/el-gordo/?from=circular&easy_pick=2&extra_jackpot=" data-event-easy-pick="1">2 lines for $ 9.68</option>
                                                <option value="/en/play-lottery/el-gordo/?from=circular&easy_pick=3&extra_jackpot=" data-event-easy-pick="1">3 lines for $ 13.50</option>
                                                <option value="" disabled>–––––&nbsp;or&nbsp;–––––</option>
                                                <option value="{{ route('play') }}">Pick numbers</option>
                                                <option class="light_version_site_hide" value="" disabled>––––––––––––</option>
                                                <option class="opt-syndicate" value="{{ route('play') }}">Syndicate &#128293;</option>
                                                <option class="opt-system" value="{{ route('play') }}">System &#128200;</option>
                                            </select>
                                            <a href="{{ route('play') }}" class="btn btn-success event-easy-pick-main-btn">Play<span class="fa-solid fa-chevron-down"></span></a>
                                            <div class="lottery_sel_dropdown">
                                                <div class="offers">
                                                    <p><a href="/en/play-lottery/el-gordo/?from=circular&easy_pick=2&extra_jackpot=" class="event-easy-pick-offer">2 lines for $ 9.68</a></p>
                                                    <p><a href="/en/play-lottery/el-gordo/?from=circular&easy_pick=3&extra_jackpot=" class="event-easy-pick-offer">3 lines for $ 13.50</a></p>
                                                </div>
                                                <div class="or">–––––&nbsp;or&nbsp;–––––</div>
                                                <p><a href="{{ route('play') }}" class="lottery_sel_choose">Pick numbers</a></p>
                                                <div class="or light_version_site_hide">–––––––––––––</div>

                                                <p><a href="{{ route('play') }}" class="lottery_sel_choose game-type-ico fire opt-syndicate">Syndicate</a></p>


                                                <p style="margin-top: 5px;"><a href="{{ route('play') }}" class="lottery_sel_choose game-type-ico lamp opt-system">System</a></p>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div><div class="lottery_slider_item">
                            <div class="lottery_item">
                                <div class="lottery_item_top" style="background-image: url('https://static.cdnland.com/upload/images/bg/pl-poland-lotto.svg');">
                                    <div class="lottery_item_img"><a href="{{ route('play') }}"><img src="https://static.cdnland.com/upload/images/logo/svg/lotto_pl.svg" alt="Poland Lotto"/></a></div>
                                    <div class="lottery_item_val"><span class="jack"><b>zł 18</b><br/><span class="mln_icon_extra text-nowrap">Million </span></span></div>
                                </div>
                                <div class="lottery_item_cont">
                                    <a href="#windowAlert" class="ratestars fancybox" onclick="yaGoals('CLEVER');" data-title="Today&#039;s Top-Rated Lotteries" data-text="&lt;p&gt;We analyze dozens of parameters daily: Jackpot amount and tax deductions, winning odds and the number of prize divisions, cost of a single line, and availability of such options as &quot;Multiplier,&quot; and much more to offer you the best possible lottery at the moment!&lt;/p&gt;&lt;p&gt;Choose a lottery with the highest score to win more and spend less!&lt;/p&gt;" data-toggle="tooltip" data-placement="bottom" title="Lottery rating from 1 to 10">
                                        <span class="fa fa-star"></span>
                                        <span class="ratestars_val">6.6</span>
                                    </a>
                                    <div class="time ">
                                        <span class="icon-clock"></span>
                                        <div class="time_val " date-close="4572">1&nbsp;hour</div>
                                    </div>

                                    <div class="lottery_sel">

                                        <div class="event-easy-pick-cont">
                                            <select name="easy_pick" class="lottery_sel_select event-easy-pick-select">
                                                <option></option>
                                                <option value="{{ route('play') }}" data-event-easy-pick="1">3 lines for $ 5.22</option>
                                                <option value="{{ route('play') }}" data-event-easy-pick="1">5 lines for $ 8.09</option>
                                                <option value="" disabled>–––––&nbsp;or&nbsp;–––––</option>
                                                <option value="{{ route('play') }}">Pick numbers</option>
                                                <option class="light_version_site_hide" value="" disabled>––––––––––––</option>

                                                <option class="opt-system" value="{{ route('play') }}">System &#128200;</option>
                                            </select>
                                            <a href="{{ route('play') }}" class="btn btn-success event-easy-pick-main-btn">Play<span class="fa-solid fa-chevron-down"></span></a>
                                            <div class="lottery_sel_dropdown">
                                                <div class="offers">
                                                    <p><a href="{{ route('play') }}" class="event-easy-pick-offer">3 lines for $ 5.22</a></p>
                                                    <p><a href="{{ route('play') }}" class="event-easy-pick-offer">5 lines for $ 8.09</a></p>
                                                </div>
                                                <div class="or">–––––&nbsp;or&nbsp;–––––</div>
                                                <p><a href="{{ route('play') }}" class="lottery_sel_choose">Pick numbers</a></p>
                                                <div class="or light_version_site_hide">–––––––––––––</div>


                                                <p style="margin-top: 5px;"><a href="{{ route('play') }}" class="lottery_sel_choose game-type-ico lamp opt-system">System</a></p>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div><div class="lottery_slider_item">
                            <div class="lottery_item">
                                <div class="lottery_item_top" style="background-image: url('https://static.cdnland.com/upload/images/bg/br-megasena.svg');">
                                    <div class="lottery_item_img"><a href="/en/play-lottery/mega-sena/?from=circular&extra_jackpot="><img src="https://static.cdnland.com/upload/images/logo/svg/megasena.svg" alt="Mega Sena"/></a></div>
                                    <div class="lottery_item_val"><span class="jack"><b>R$ 3</b><br/><span class="mln_icon_extra text-nowrap">Million </span></span></div>
                                </div>
                                <div class="lottery_item_cont">
                                    <a href="#windowAlert" class="ratestars fancybox" onclick="yaGoals('CLEVER');" data-title="Today&#039;s Top-Rated Lotteries" data-text="&lt;p&gt;We analyze dozens of parameters daily: Jackpot amount and tax deductions, winning odds and the number of prize divisions, cost of a single line, and availability of such options as &quot;Multiplier,&quot; and much more to offer you the best possible lottery at the moment!&lt;/p&gt;&lt;p&gt;Choose a lottery with the highest score to win more and spend less!&lt;/p&gt;" data-toggle="tooltip" data-placement="bottom" title="Lottery rating from 1 to 10">
                                        <span class="fa fa-star"></span>
                                        <span class="ratestars_val">6.5</span>
                                    </a>
                                    <div class="time ">
                                        <span class="icon-clock"></span>
                                        <div class="time_val " date-close="11772">3&nbsp;hours</div>
                                    </div>

                                    <div class="lottery_sel">

                                        <div class="event-easy-pick-cont">
                                            <select name="easy_pick" class="lottery_sel_select event-easy-pick-select">
                                                <option></option>
                                                <option value="/en/play-lottery/mega-sena/?from=circular&easy_pick=4&extra_jackpot=" data-event-easy-pick="1">4 lines for $ 8.28</option>
                                                <option value="/en/play-lottery/mega-sena/?from=circular&easy_pick=6&extra_jackpot=" data-event-easy-pick="1">6 lines for $ 11.80</option>
                                                <option value="" disabled>–––––&nbsp;or&nbsp;–––––</option>
                                                <option value="/en/play-lottery/mega-sena/?from=circular&extra_jackpot=">Pick numbers</option>
                                                <option class="light_version_site_hide" value="" disabled>––––––––––––</option>

                                                <option class="opt-system" value="/en/play-lottery/mega-sena/?from=index_lotto&system=1&extra_jackpot=">System &#128200;</option>
                                            </select>
                                            <a href="/en/play-lottery/mega-sena/?from=circular&extra_jackpot=" class="btn btn-success event-easy-pick-main-btn">Play<span class="fa-solid fa-chevron-down"></span></a>
                                            <div class="lottery_sel_dropdown">
                                                <div class="offers">
                                                    <p><a href="/en/play-lottery/mega-sena/?from=circular&easy_pick=4&extra_jackpot=" class="event-easy-pick-offer">4 lines for $ 8.28</a></p>
                                                    <p><a href="/en/play-lottery/mega-sena/?from=circular&easy_pick=6&extra_jackpot=" class="event-easy-pick-offer">6 lines for $ 11.80</a></p>
                                                </div>
                                                <div class="or">–––––&nbsp;or&nbsp;–––––</div>
                                                <p><a href="/en/play-lottery/mega-sena/?from=circular&extra_jackpot=" class="lottery_sel_choose">Pick numbers</a></p>
                                                <div class="or light_version_site_hide">–––––––––––––</div>


                                                <p style="margin-top: 5px;"><a href="/en/play-lottery/mega-sena/?from=index_lotto&system=1&extra_jackpot=" class="lottery_sel_choose game-type-ico lamp opt-system">System</a></p>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div><div class="lottery_slider_item">
                            <div class="lottery_item">
                                <div class="lottery_item_top" style="background-image: url('https://static.cdnland.com/upload/images/bg/de-lotto6-aus-49.svg');">
                                    <div class="lottery_item_img"><a href="/en/play-lottery/lotto-6-aus-49/?from=circular&extra_jackpot="><img src="https://static.cdnland.com/upload/images/logo/svg/lotto_649.svg" alt="Lotto 6 aus 49"/></a></div>
                                    <div class="lottery_item_val"><span class="jack"><b>€ 1+</b><br/><span class="mln_icon_extra text-nowrap">Million </span></span></div>
                                </div>
                                <div class="lottery_item_cont">
                                    <a href="#windowAlert" class="ratestars fancybox" onclick="yaGoals('CLEVER');" data-title="Today&#039;s Top-Rated Lotteries" data-text="&lt;p&gt;We analyze dozens of parameters daily: Jackpot amount and tax deductions, winning odds and the number of prize divisions, cost of a single line, and availability of such options as &quot;Multiplier,&quot; and much more to offer you the best possible lottery at the moment!&lt;/p&gt;&lt;p&gt;Choose a lottery with the highest score to win more and spend less!&lt;/p&gt;" data-toggle="tooltip" data-placement="bottom" title="Lottery rating from 1 to 10">
                                        <span class="fa fa-star"></span>
                                        <span class="ratestars_val">6.5</span>
                                    </a>
                                    <div class="time ">
                                        <span class="icon-clock"></span>
                                        <div class="time_val " date-close="332172">3&nbsp;days</div>
                                    </div>

                                    <div class="lottery_sel">

                                        <div class="event-easy-pick-cont">
                                            <select name="easy_pick" class="lottery_sel_select event-easy-pick-select">
                                                <option></option>
                                                <option value="/en/play-lottery/lotto-6-aus-49/?from=circular&easy_pick=1&extra_jackpot=" data-event-easy-pick="1">1 line for $ 3.80</option>
                                                <option value="/en/play-lottery/lotto-6-aus-49/?from=circular&easy_pick=3&extra_jackpot=" data-event-easy-pick="1">3 lines for $ 10.83</option>
                                                <option value="" disabled>–––––&nbsp;or&nbsp;–––––</option>
                                                <option value="/en/play-lottery/lotto-6-aus-49/?from=circular&extra_jackpot=">Pick numbers</option>
                                                <option class="light_version_site_hide" value="" disabled>––––––––––––</option>
                                                <option class="opt-syndicate" value="/en/play-lottery/lotto-6-aus-49/?from=index_lotto&syndicates=1&extra_jackpot=">Syndicate &#128293;</option>
                                                <option class="opt-system" value="/en/play-lottery/lotto-6-aus-49/?from=index_lotto&system=1&extra_jackpot=">System &#128200;</option>
                                            </select>
                                            <a href="/en/play-lottery/lotto-6-aus-49/?from=circular&extra_jackpot=" class="btn btn-success event-easy-pick-main-btn">Play<span class="fa-solid fa-chevron-down"></span></a>
                                            <div class="lottery_sel_dropdown">
                                                <div class="offers">
                                                    <p><a href="/en/play-lottery/lotto-6-aus-49/?from=circular&easy_pick=1&extra_jackpot=" class="event-easy-pick-offer">1 line for $ 3.80</a></p>
                                                    <p><a href="/en/play-lottery/lotto-6-aus-49/?from=circular&easy_pick=3&extra_jackpot=" class="event-easy-pick-offer">3 lines for $ 10.83</a></p>
                                                </div>
                                                <div class="or">–––––&nbsp;or&nbsp;–––––</div>
                                                <p><a href="/en/play-lottery/lotto-6-aus-49/?from=circular&extra_jackpot=" class="lottery_sel_choose">Pick numbers</a></p>
                                                <div class="or light_version_site_hide">–––––––––––––</div>

                                                <p><a href="/en/play-lottery/lotto-6-aus-49/?from=index_lotto&syndicates=1&extra_jackpot=" class="lottery_sel_choose game-type-ico fire opt-syndicate">Syndicate</a></p>


                                                <p style="margin-top: 5px;"><a href="/en/play-lottery/lotto-6-aus-49/?from=index_lotto&system=1&extra_jackpot=" class="lottery_sel_choose game-type-ico lamp opt-system">System</a></p>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div><div class="lottery_slider_item">
                            <div class="lottery_item">
                                <div class="lottery_item_top" style="background-image: url('https://static.cdnland.com/upload/images/bg/es-la-primitiva.svg');">
                                    <div class="lottery_item_img"><a href="/en/play-lottery/la-primitiva/?from=circular&extra_jackpot="><img src="https://static.cdnland.com/upload/images/logo/svg/la_primitiva.svg" alt="La Primitiva"/></a></div>
                                    <div class="lottery_item_val"><span class="jack"><b>€ 2+</b><br/><span class="mln_icon_extra text-nowrap">Million </span></span></div>
                                </div>
                                <div class="lottery_item_cont">
                                    <a href="#windowAlert" class="ratestars fancybox" onclick="yaGoals('CLEVER');" data-title="Today&#039;s Top-Rated Lotteries" data-text="&lt;p&gt;We analyze dozens of parameters daily: Jackpot amount and tax deductions, winning odds and the number of prize divisions, cost of a single line, and availability of such options as &quot;Multiplier,&quot; and much more to offer you the best possible lottery at the moment!&lt;/p&gt;&lt;p&gt;Choose a lottery with the highest score to win more and spend less!&lt;/p&gt;" data-toggle="tooltip" data-placement="bottom" title="Lottery rating from 1 to 10">
                                        <span class="fa fa-star"></span>
                                        <span class="ratestars_val">6.4</span>
                                    </a>
                                    <div class="time ">
                                        <span class="icon-clock"></span>
                                        <div class="time_val " date-close="166572">1&nbsp;day</div>
                                    </div>

                                    <div class="lottery_sel">

                                        <div class="event-easy-pick-cont">
                                            <select name="easy_pick" class="lottery_sel_select event-easy-pick-select">
                                                <option></option>
                                                <option value="/en/play-lottery/la-primitiva/?from=circular&easy_pick=1&extra_jackpot=" data-event-easy-pick="1">1 line for $ 3.04</option>
                                                <option value="/en/play-lottery/la-primitiva/?from=circular&easy_pick=4&extra_jackpot=" data-event-easy-pick="1">4 lines for $ 10.94</option>
                                                <option value="" disabled>–––––&nbsp;or&nbsp;–––––</option>
                                                <option value="/en/play-lottery/la-primitiva/?from=circular&extra_jackpot=">Pick numbers</option>
                                                <option class="light_version_site_hide" value="" disabled>––––––––––––</option>
                                                <option class="opt-syndicate" value="/en/play-lottery/la-primitiva/?from=index_lotto&syndicates=1&extra_jackpot=">Syndicate &#128293;</option>
                                                <option class="opt-system" value="/en/play-lottery/la-primitiva/?from=index_lotto&system=1&extra_jackpot=">System &#128200;</option>
                                            </select>
                                            <a href="/en/play-lottery/la-primitiva/?from=circular&extra_jackpot=" class="btn btn-success event-easy-pick-main-btn">Play<span class="fa-solid fa-chevron-down"></span></a>
                                            <div class="lottery_sel_dropdown">
                                                <div class="offers">
                                                    <p><a href="/en/play-lottery/la-primitiva/?from=circular&easy_pick=1&extra_jackpot=" class="event-easy-pick-offer">1 line for $ 3.04</a></p>
                                                    <p><a href="/en/play-lottery/la-primitiva/?from=circular&easy_pick=4&extra_jackpot=" class="event-easy-pick-offer">4 lines for $ 10.94</a></p>
                                                </div>
                                                <div class="or">–––––&nbsp;or&nbsp;–––––</div>
                                                <p><a href="/en/play-lottery/la-primitiva/?from=circular&extra_jackpot=" class="lottery_sel_choose">Pick numbers</a></p>
                                                <div class="or light_version_site_hide">–––––––––––––</div>

                                                <p><a href="/en/play-lottery/la-primitiva/?from=index_lotto&syndicates=1&extra_jackpot=" class="lottery_sel_choose game-type-ico fire opt-syndicate">Syndicate</a></p>


                                                <p style="margin-top: 5px;"><a href="/en/play-lottery/la-primitiva/?from=index_lotto&system=1&extra_jackpot=" class="lottery_sel_choose game-type-ico lamp opt-system">System</a></p>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hand-move d-block d-lg-none"><span></span></div>

        </div>
    </div>



    <section class="section-winners">
        <div class="container">


            <div class="winners-history">
                <div class="winners-history__top">
                    <h2>Winner Stories</h2>
                    <a href="en/blog/our-winners/">View all Stories <span class="icon fa-solid fa-chevron-right"></span> </a>
                </div>
                <div class="winners-history__items">
                    <div class="winners-history__item">
                        <div class="winners-history__item-top">
                            <div class="winners-history__item-ava">
                                <span class="sprite" data-sprite="avatars" data-icon="1"></span>
                            </div>
                            <div class="winners-history__item-logo">
                                <img src="https://static.cdnland.com/upload/images/logo/svg/eurojackpot.svg" alt="">
                            </div>
                        </div>
                        <span class="winners-history__item-title">How an insurance company pays out prizes on the example of a player who won € 78,108.02  in EuroJackpot</span>
                        <p>On February 5, 2021, Russian Sergey O. won € 78,108.02 in the pan-European lottery EuroJackpot.</p>
                        <a href="en/blog/our-winners/how-an-insurance-company-pays-out-prizes/">Learn more</a>
                    </div><div class="winners-history__item">
                        <div class="winners-history__item-top">
                            <div class="winners-history__item-ava">
                                <span class="sprite" data-sprite="avatars" data-icon="28"></span>
                            </div>
                            <div class="winners-history__item-logo">
                                <img src="https://static.cdnland.com/upload/images/logo/svg/austria_lotto.svg" alt="">
                            </div>
                        </div>
                        <span class="winners-history__item-title">Maharashtra player wins Lotto Austria: "I'll give money to encourage women to study"</span>
                        <p>On September 4, a player from Maharashtra (India) won $1608.32 in Lotto Austria. He didn't manage to match just one number to hit the Jackpot. Our winner recorded an interview for us and provided a photo.</p>
                        <a href="en/blog/our-winners/maharashtra-player-wins-lotto-austria/">Learn more</a>
                    </div><div class="winners-history__item">
                        <div class="winners-history__item-top">
                            <div class="winners-history__item-ava">
                                <span class="sprite" data-sprite="avatars" data-icon="29"></span>
                            </div>
                            <div class="winners-history__item-logo">
                                <img src="https://static.cdnland.com/upload/images/logo/svg/la_primitiva.svg" alt="">
                            </div>
                        </div>
                        <span class="winners-history__item-title">The new winner of La Primitiva told us about herself</span>
                        <p>Louisa R. shared her experience and spoke about her future plans.</p>
                        <a href="en/blog/our-winners/the-new-winner-of-la-primitiva-told-us-about-herself/">Learn more</a>
                    </div>
                </div>
                <div class="hand-move"><span></span></div>
            </div>

            <h2 class="text-sm-center">Our winners</h2>
            <div class="winners">
                <div class="winners_slider js-winners_slider owl-carousel">
                    <a href="/en/play-lottery/cash-for-life/?from=winners_box">
                        <div class="winners_slider_item">
                            <div class="winners_item">
                                <div class="winners_item_back"><span class="icon-cup"></span></div>
                                <div class="man">
                                    <div class="man_flag"><img src="https://static.cdnland.com/new/images/svg/country/bd.svg" alt="bd"></div>
                                    <div class="man_info">
                                        <div class="man_name">Paul H.</div>
                                        <div class="man_data">Cash4Life<br/>29/03/2023</div>
                                    </div>
                                </div>
                                <div class="winners_item_sum">$ 25.00</div>
                            </div>
                        </div>
                    </a><a href="/en/play-lottery/poland-lotto/?from=winners_box">
                        <div class="winners_slider_item">
                            <div class="winners_item">
                                <div class="winners_item_back"><span class="icon-cup"></span></div>
                                <div class="man">
                                    <div class="man_flag"><img src="https://static.cdnland.com/new/images/svg/country/ad.svg" alt="ad"></div>
                                    <div class="man_info">
                                        <div class="man_name">Dave J.</div>
                                        <div class="man_data">Poland Lotto<br/>30/03/2023</div>
                                    </div>
                                </div>
                                <div class="winners_item_sum">$ 62.32</div>
                            </div>
                        </div>
                    </a><a href="/en/play-lottery/france-loto/?from=winners_box">
                        <div class="winners_slider_item">
                            <div class="winners_item">
                                <div class="winners_item_back"><span class="icon-cup"></span></div>
                                <div class="man">
                                    <div class="man_flag"><img src="https://static.cdnland.com/new/images/svg/country/bh.svg" alt="bh"></div>
                                    <div class="man_info">
                                        <div class="man_name">Alice O.</div>
                                        <div class="man_data">France Loto<br/>29/03/2023</div>
                                    </div>
                                </div>
                                <div class="winners_item_sum">$ 26.09</div>
                            </div>
                        </div>
                    </a><a href="/en/play-lottery/superstar/?from=winners_box">
                        <div class="winners_slider_item">
                            <div class="winners_item">
                                <div class="winners_item_back"><span class="icon-cup"></span></div>
                                <div class="man">
                                    <div class="man_flag"><img src="https://static.cdnland.com/new/images/svg/country/ar.svg" alt="ar"></div>
                                    <div class="man_info">
                                        <div class="man_name">Francisco P.</div>
                                        <div class="man_data">SuperStar<br/>30/03/2023</div>
                                    </div>
                                </div>
                                <div class="winners_item_sum">$ 547.79</div>
                            </div>
                        </div>
                    </a><a href="/en/play-lottery/ie-daily-million/?from=winners_box">
                        <div class="winners_slider_item">
                            <div class="winners_item">
                                <div class="winners_item_back"><span class="icon-cup"></span></div>
                                <div class="man">
                                    <div class="man_flag"><img src="https://static.cdnland.com/new/images/svg/country/as.svg" alt="as"></div>
                                    <div class="man_info">
                                        <div class="man_name">Perrie C.</div>
                                        <div class="man_data">Daily Million<br/>29/03/2023</div>
                                    </div>
                                </div>
                                <div class="winners_item_sum">$ 27.18</div>
                            </div>
                        </div>
                    </a><a href="/en/play-lottery/ie-daily-million/?from=winners_box">
                        <div class="winners_slider_item">
                            <div class="winners_item">
                                <div class="winners_item_back"><span class="icon-cup"></span></div>
                                <div class="man">
                                    <div class="man_flag"><img src="https://static.cdnland.com/new/images/svg/country/bo.svg" alt="bo"></div>
                                    <div class="man_info">
                                        <div class="man_name">Jorge V.</div>
                                        <div class="man_data">Daily Million<br/>30/03/2023</div>
                                    </div>
                                </div>
                                <div class="winners_item_sum">$ 27.18</div>
                            </div>
                        </div>
                    </a><a href="/en/play-lottery/bonoloto/?from=winners_box">
                        <div class="winners_slider_item">
                            <div class="winners_item">
                                <div class="winners_item_back"><span class="icon-cup"></span></div>
                                <div class="man">
                                    <div class="man_flag"><img src="https://static.cdnland.com/new/images/svg/country/by.svg" alt="by"></div>
                                    <div class="man_info">
                                        <div class="man_name">Евгений Д.</div>
                                        <div class="man_data">BonoLoto<br/>29/03/2023</div>
                                    </div>
                                </div>
                                <div class="winners_item_sum">$ 28.47</div>
                            </div>
                        </div>
                    </a><a href="/en/play-lottery/cash-for-life/?from=winners_box">
                        <div class="winners_slider_item">
                            <div class="winners_item">
                                <div class="winners_item_back"><span class="icon-cup"></span></div>
                                <div class="man">
                                    <div class="man_flag"><img src="https://static.cdnland.com/new/images/svg/country/ba.svg" alt="ba"></div>
                                    <div class="man_info">
                                        <div class="man_name">Tom D.</div>
                                        <div class="man_data">Cash4Life<br/>31/03/2023</div>
                                    </div>
                                </div>
                                <div class="winners_item_sum">$ 500.00</div>
                            </div>
                        </div>
                    </a><a href="/en/play-lottery/lotto-america/?from=winners_box">
                        <div class="winners_slider_item">
                            <div class="winners_item">
                                <div class="winners_item_back"><span class="icon-cup"></span></div>
                                <div class="man">
                                    <div class="man_flag"><img src="https://static.cdnland.com/new/images/svg/country/bs.svg" alt="bs"></div>
                                    <div class="man_info">
                                        <div class="man_name">Caroline H.</div>
                                        <div class="man_data">Lotto America<br/>29/03/2023</div>
                                    </div>
                                </div>
                                <div class="winners_item_sum">$ 100.00</div>
                            </div>
                        </div>
                    </a><a href="/en/play-lottery/ie-daily-million/?from=winners_box">
                        <div class="winners_slider_item">
                            <div class="winners_item">
                                <div class="winners_item_back"><span class="icon-cup"></span></div>
                                <div class="man">
                                    <div class="man_flag"><img src="https://static.cdnland.com/new/images/svg/country/az.svg" alt="az"></div>
                                    <div class="man_info">
                                        <div class="man_name">Terry L.</div>
                                        <div class="man_data">Daily Million<br/>30/03/2023</div>
                                    </div>
                                </div>
                                <div class="winners_item_sum">$ 108.71</div>
                            </div>
                        </div>
                    </a><a href="/en/play-lottery/thunderball-uk/?from=winners_box">
                        <div class="winners_slider_item">
                            <div class="winners_item">
                                <div class="winners_item_back"><span class="icon-cup"></span></div>
                                <div class="man">
                                    <div class="man_flag"><img src="https://static.cdnland.com/new/images/svg/country/ag.svg" alt="ag"></div>
                                    <div class="man_info">
                                        <div class="man_name">Jason U.</div>
                                        <div class="man_data">Thunderball UK<br/>31/03/2023</div>
                                    </div>
                                </div>
                                <div class="winners_item_sum">$ 308.62</div>
                            </div>
                        </div>
                    </a><a href="/en/play-lottery/lotto-america/?from=winners_box">
                        <div class="winners_slider_item">
                            <div class="winners_item">
                                <div class="winners_item_back"><span class="icon-cup"></span></div>
                                <div class="man">
                                    <div class="man_flag"><img src="https://static.cdnland.com/new/images/svg/country/dz.svg" alt="dz"></div>
                                    <div class="man_info">
                                        <div class="man_name">Jess P.</div>
                                        <div class="man_data">Lotto America<br/>29/03/2023</div>
                                    </div>
                                </div>
                                <div class="winners_item_sum">$ 1,000.00</div>
                            </div>
                        </div>
                    </a><a href="/en/play-lottery/mexico-melate/?from=winners_box">
                        <div class="winners_slider_item">
                            <div class="winners_item">
                                <div class="winners_item_back"><span class="icon-cup"></span></div>
                                <div class="man">
                                    <div class="man_flag"><img src="https://static.cdnland.com/new/images/svg/country/al.svg" alt="al"></div>
                                    <div class="man_info">
                                        <div class="man_name">Saif M.</div>
                                        <div class="man_data">Mexico Melate<br/>31/03/2023</div>
                                    </div>
                                </div>
                                <div class="winners_item_sum">$ 8.95</div>
                            </div>
                        </div>
                    </a><a href="/en/play-lottery/mexico-melate/?from=winners_box">
                        <div class="winners_slider_item">
                            <div class="winners_item">
                                <div class="winners_item_back"><span class="icon-cup"></span></div>
                                <div class="man">
                                    <div class="man_flag"><img src="https://static.cdnland.com/new/images/svg/country/ai.svg" alt="ai"></div>
                                    <div class="man_info">
                                        <div class="man_name">Joe W.</div>
                                        <div class="man_data">Mexico Melate<br/>31/03/2023</div>
                                    </div>
                                </div>
                                <div class="winners_item_sum">$ 25.81</div>
                            </div>
                        </div>
                    </a><a href="/en/play-lottery/ie-daily-million/?from=winners_box">
                        <div class="winners_slider_item">
                            <div class="winners_item">
                                <div class="winners_item_back"><span class="icon-cup"></span></div>
                                <div class="man">
                                    <div class="man_flag"><img src="https://static.cdnland.com/new/images/svg/country/bz.svg" alt="bz"></div>
                                    <div class="man_info">
                                        <div class="man_name">Jeffrey L.</div>
                                        <div class="man_data">Daily Million<br/>30/03/2023</div>
                                    </div>
                                </div>
                                <div class="winners_item_sum">$ 108.71</div>
                            </div>
                        </div>
                    </a><a href="/en/play-lottery/poland-lotto/?from=winners_box">
                        <div class="winners_slider_item">
                            <div class="winners_item">
                                <div class="winners_item_back"><span class="icon-cup"></span></div>
                                <div class="man">
                                    <div class="man_flag"><img src="https://static.cdnland.com/new/images/svg/country/am.svg" alt="am"></div>
                                    <div class="man_info">
                                        <div class="man_name">Мария Б.</div>
                                        <div class="man_data">Poland Lotto<br/>30/03/2023</div>
                                    </div>
                                </div>
                                <div class="winners_item_sum">$ 5.56</div>
                            </div>
                        </div>
                    </a><a href="/en/play-lottery/france-loto/?from=winners_box">
                        <div class="winners_slider_item">
                            <div class="winners_item">
                                <div class="winners_item_back"><span class="icon-cup"></span></div>
                                <div class="man">
                                    <div class="man_flag"><img src="https://static.cdnland.com/new/images/svg/country/bw.svg" alt="bw"></div>
                                    <div class="man_info">
                                        <div class="man_name">Sam E.</div>
                                        <div class="man_data">France Loto<br/>29/03/2023</div>
                                    </div>
                                </div>
                                <div class="winners_item_sum">$ 571.80</div>
                            </div>
                        </div>
                    </a><a href="/en/play-lottery/au-set-for-life/?from=winners_box">
                        <div class="winners_slider_item">
                            <div class="winners_item">
                                <div class="winners_item_back"><span class="icon-cup"></span></div>
                                <div class="man">
                                    <div class="man_flag"><img src="https://static.cdnland.com/new/images/svg/country/bb.svg" alt="bb"></div>
                                    <div class="man_info">
                                        <div class="man_name">Patrick P.</div>
                                        <div class="man_data">Set for Life (AU)<br/>01/04/2023</div>
                                    </div>
                                </div>
                                <div class="winners_item_sum">$ 20.60</div>
                            </div>
                        </div>
                    </a><a href="/en/play-lottery/ie-daily-million/?from=winners_box">
                        <div class="winners_slider_item">
                            <div class="winners_item">
                                <div class="winners_item_back"><span class="icon-cup"></span></div>
                                <div class="man">
                                    <div class="man_flag"><img src="https://static.cdnland.com/new/images/svg/country/ao.svg" alt="ao"></div>
                                    <div class="man_info">
                                        <div class="man_name">Danielle H.</div>
                                        <div class="man_data">Daily Million<br/>31/03/2023</div>
                                    </div>
                                </div>
                                <div class="winners_item_sum">$ 543.53</div>
                            </div>
                        </div>
                    </a><a href="/en/play-lottery/za-daily-lotto/?from=winners_box">
                        <div class="winners_slider_item">
                            <div class="winners_item">
                                <div class="winners_item_back"><span class="icon-cup"></span></div>
                                <div class="man">
                                    <div class="man_flag"><img src="https://static.cdnland.com/new/images/svg/country/bm.svg" alt="bm"></div>
                                    <div class="man_info">
                                        <div class="man_name">Frederick M.</div>
                                        <div class="man_data">South Africa Daily Lotto<br/>29/03/2023</div>
                                    </div>
                                </div>
                                <div class="winners_item_sum">$ 17.43</div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="hand-move d-block d-lg-none"><span></span></div>
            <div class="payed">
                <div class="payed_cont">
                    <div class="h2">We paid out in prizes:</div>
                    <div class="payed_txt">Over 15,107,070 winners worldwide!</div>
                </div>
                <div class="payed_img"><img src="https://static.cdnland.com/new/images/svg/payed.svg" alt=""/><div class="payed_img_sum">$ 139,985,674</div></div>
            </div>
        </div>
    </section>
    <section class="section-revs">
        <div class="container">
            <div class="row section_top">
                <div class="col">
                    <h2 class="text-md-center">What other say about us!</h2>
                </div>
                <div class="col-auto d-block d-md-none">
                    <a href="https://trustpilot.com/review/www.agentlotto.com" class="section_top_link" onclick="yaGoals('TRUSTPILOT');">All reviews<span class="icon-chevron"></span></a>
                </div>
            </div>
            <div class="revs">
                <div class="row">
                    <div class="col-revs_item-main">
                        <div class="revs_item revs_item-main">
                            <div class="revs_item_top">
                                <div class="revs_item_title-main">Excellent</div>
                                <div class="trustrate">

        <span style="display: inline-block; width: 130px; height: 24px;  overflow: hidden; ">
            <svg viewBox="0 0 251 46" xmlns="http://www.w3.org/2000/svg" style="height: 100%; width: 130px; left: 0; top: 0; z-index: 0; position: relative;">
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

                                </div>
                            </div>
                            <div class="revs_item_txt">Based on <a class="total" rel="nofollow" target="_blank" href="https://trustpilot.com/review/www.agentlotto.com" onclick="yaGoals('TRUSTPILOT');">4.0K reviews</a></div>
                            <div class="revs_item_name-main d-none d-md-block">Trustpilot</div>
                        </div>
                    </div>
                    <div class="col-revs_slider d-none d-md-block">
                        <div class="revs_slider revs_owl-carousel owl-carousel">
                            <div class="revs_slider_item">
                                <a href="https://www.trustpilot.com/reviews/63713f54252cba2c02d794a4" target="_blank" class="revs_item">
                                    <div class="revs_item_top">
                                        <div class="trustrate">

        <span style="display: inline-block; width: 95px; height: 17px;  overflow: hidden; ">
            <svg viewBox="0 0 251 46" xmlns="http://www.w3.org/2000/svg" style="height: 100%; width: 95px; left: 0; top: 0; z-index: 0; position: relative;">
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
                  <path fill="#00b67a" d="M205.064416 46.330002h46.375587V0h-46.375587z"></path>
                  <path fill="#00b67a" d="M205.064416 46.330002h23.187793V0h-23.187793z"></path>
                  <path d="M244.597022 19.711433l-26.3029 19.089218 3.837419-11.797827-10.047304-7.291391h12.418974l3.837418-11.798624 3.837418 11.798624h12.418975zm-16.255436 11.798642l7.183595-1.509576 2.862114 8.800152-10.045709-7.290576z" fill="#FFF"></path>
              </g>
          </svg>
        </span>

                                        </div>
                                        <div class="revs_item_date time">13/11/2022</div>
                                    </div>
                                    <div class="revs_item_title">Everything was flawless</div>
                                    <div class="revs_item_txt">Everything was flawless right from signing up an account to playing the amazing no deposit bonus spins, all terms and conditions were clear and explained well, no hidden terms which many other online casinos have that can sometimes trick players. I was Glad I looked at this site and decided to make a player account.</div>
                                    <div class="revs_item_name">Kirsty Maree Munce</div>
                                </a>
                            </div><div class="revs_slider_item">
                                <a href="https://www.trustpilot.com/reviews/63564459276a7fd30bd8b224" target="_blank" class="revs_item">
                                    <div class="revs_item_top">
                                        <div class="trustrate">

        <span style="display: inline-block; width: 95px; height: 17px;  overflow: hidden; ">
            <svg viewBox="0 0 251 46" xmlns="http://www.w3.org/2000/svg" style="height: 100%; width: 95px; left: 0; top: 0; z-index: 0; position: relative;">
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
                  <path fill="#00b67a" d="M205.064416 46.330002h46.375587V0h-46.375587z"></path>
                  <path fill="#00b67a" d="M205.064416 46.330002h23.187793V0h-23.187793z"></path>
                  <path d="M244.597022 19.711433l-26.3029 19.089218 3.837419-11.797827-10.047304-7.291391h12.418974l3.837418-11.798624 3.837418 11.798624h12.418975zm-16.255436 11.798642l7.183595-1.509576 2.862114 8.800152-10.045709-7.290576z" fill="#FFF"></path>
              </g>
          </svg>
        </span>

                                        </div>
                                        <div class="revs_item_date time">24/10/2022</div>
                                    </div>
                                    <div class="revs_item_title">I trust this site</div>
                                    <div class="revs_item_txt">Hello everyone My name is Mugisha Kevin. I’m come from Africa (Uganda). I have spent more than a year here on this site. Before I found LottoAgent site I had no chance of playing international big lottery jackpots. Since I found {{ env('APP_NAME') }} now I can participate in every international big jackpots like powerball, mega millions, Eurojackpot , SuperEnalotto and EuroMillions without leaving my home. I’m happy with this site because it offers so many big lottery jackpots in world, with this site you can also buy both ticket and bet entry I can both buy bet and ticket entry. I have won some small prizes but I never won a jackpot. I hope to win big jackpots</div>
                                    <div class="revs_item_name">Mugisha Kevin</div>
                                </a>
                            </div><div class="revs_slider_item">
                                <a href="https://www.trustpilot.com/reviews/63564459276a7fd30bd8b224" target="_blank" class="revs_item">
                                    <div class="revs_item_top">
                                        <div class="trustrate">

        <span style="display: inline-block; width: 95px; height: 17px;  overflow: hidden; ">
            <svg viewBox="0 0 251 46" xmlns="http://www.w3.org/2000/svg" style="height: 100%; width: 95px; left: 0; top: 0; z-index: 0; position: relative;">
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
                  <path fill="#00b67a" d="M205.064416 46.330002h46.375587V0h-46.375587z"></path>
                  <path fill="#00b67a" d="M205.064416 46.330002h23.187793V0h-23.187793z"></path>
                  <path d="M244.597022 19.711433l-26.3029 19.089218 3.837419-11.797827-10.047304-7.291391h12.418974l3.837418-11.798624 3.837418 11.798624h12.418975zm-16.255436 11.798642l7.183595-1.509576 2.862114 8.800152-10.045709-7.290576z" fill="#FFF"></path>
              </g>
          </svg>
        </span>

                                        </div>
                                        <div class="revs_item_date time">24/10/2022</div>
                                    </div>
                                    <div class="revs_item_title">I trust this site</div>
                                    <div class="revs_item_txt">Hello everyone My name is Mugisha Kevin. I’m come from Africa (Uganda). I have spent more than a year here on this site. Before I found LottoAgent site I had no chance of playing international big lottery jackpots. Since I found {{ env('APP_NAME') }} now I can participate in every international big jackpots like powerball, mega millions, Eurojackpot , SuperEnalotto and EuroMillions without leaving my home. I’m happy with this site because it offers so many big lottery jackpots in world, with this site you can also buy both ticket and bet entry I can both buy bet and ticket entry. I have won some small prizes but I never won a jackpot. I hope to win big jackpots</div>
                                    <div class="revs_item_name">Mugisha Kevin</div>
                                </a>
                            </div><div class="revs_slider_item">
                                <a href="https://www.trustpilot.com/reviews/634aeb629b12f67dfee22353" target="_blank" class="revs_item">
                                    <div class="revs_item_top">
                                        <div class="trustrate">

        <span style="display: inline-block; width: 95px; height: 17px;  overflow: hidden; ">
            <svg viewBox="0 0 251 46" xmlns="http://www.w3.org/2000/svg" style="height: 100%; width: 95px; left: 0; top: 0; z-index: 0; position: relative;">
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
                  <path fill="#00b67a" d="M205.064416 46.330002h46.375587V0h-46.375587z"></path>
                  <path fill="#00b67a" d="M205.064416 46.330002h23.187793V0h-23.187793z"></path>
                  <path d="M244.597022 19.711433l-26.3029 19.089218 3.837419-11.797827-10.047304-7.291391h12.418974l3.837418-11.798624 3.837418 11.798624h12.418975zm-16.255436 11.798642l7.183595-1.509576 2.862114 8.800152-10.045709-7.290576z" fill="#FFF"></path>
              </g>
          </svg>
        </span>

                                        </div>
                                        <div class="revs_item_date time">15/10/2022</div>
                                    </div>
                                    <div class="revs_item_title">Best online lottery site</div>
                                    <div class="revs_item_txt">I am playing in {{ env('APP_NAME') }} for years.... I had wonderful experience with this site... They offer best bonus offer for international lotteries... I have participated many international lotteries through {{ env('APP_NAME') }}... I had won small cash but i didn't win jackpot yet.... Hope one day i will win jackpot through {{ env('APP_NAME') }}... Now they introduced instant win games, so we can check our luck instantly.. Hoping for big win.☺</div>
                                    <div class="revs_item_name">Bashee</div>
                                </a>
                            </div><div class="revs_slider_item">
                                <a href="https://www.trustpilot.com/reviews/63282a086a3e1ed2c3d68a5e" target="_blank" class="revs_item">
                                    <div class="revs_item_top">
                                        <div class="trustrate">

        <span style="display: inline-block; width: 95px; height: 17px;  overflow: hidden; ">
            <svg viewBox="0 0 251 46" xmlns="http://www.w3.org/2000/svg" style="height: 100%; width: 95px; left: 0; top: 0; z-index: 0; position: relative;">
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
                  <path fill="#00b67a" d="M205.064416 46.330002h46.375587V0h-46.375587z"></path>
                  <path fill="#00b67a" d="M205.064416 46.330002h23.187793V0h-23.187793z"></path>
                  <path d="M244.597022 19.711433l-26.3029 19.089218 3.837419-11.797827-10.047304-7.291391h12.418974l3.837418-11.798624 3.837418 11.798624h12.418975zm-16.255436 11.798642l7.183595-1.509576 2.862114 8.800152-10.045709-7.290576z" fill="#FFF"></path>
              </g>
          </svg>
        </span>

                                        </div>
                                        <div class="revs_item_date time">19/09/2022</div>
                                    </div>
                                    <div class="revs_item_title">I like lotto</div>
                                    <div class="revs_item_txt">I like lotto
                                        I like {{ env('APP_NAME') }}. Lots of lotteries in single place. Large selection of lottery syndicate are available at low price. I tried so many sites but {{ env('APP_NAME') }} is best in service and fair price with syndicate, bundle and discounted tickets. Easy to deposit money. Various payment options are available. Customer care representative is quick responsive. Lottoagent is great..</div>
                                    <div class="revs_item_name">ธีรชัย ทวิบุตร</div>
                                </a>
                            </div><div class="revs_slider_item">
                                <a href="https://www.trustpilot.com/reviews/632165bc6a3e1ed2c3d23233" target="_blank" class="revs_item">
                                    <div class="revs_item_top">
                                        <div class="trustrate">

        <span style="display: inline-block; width: 95px; height: 17px;  overflow: hidden; ">
            <svg viewBox="0 0 251 46" xmlns="http://www.w3.org/2000/svg" style="height: 100%; width: 95px; left: 0; top: 0; z-index: 0; position: relative;">
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
                  <path fill="#00b67a" d="M205.064416 46.330002h46.375587V0h-46.375587z"></path>
                  <path fill="#00b67a" d="M205.064416 46.330002h23.187793V0h-23.187793z"></path>
                  <path d="M244.597022 19.711433l-26.3029 19.089218 3.837419-11.797827-10.047304-7.291391h12.418974l3.837418-11.798624 3.837418 11.798624h12.418975zm-16.255436 11.798642l7.183595-1.509576 2.862114 8.800152-10.045709-7.290576z" fill="#FFF"></path>
              </g>
          </svg>
        </span>

                                        </div>
                                        <div class="revs_item_date time">14/09/2022</div>
                                    </div>
                                    <div class="revs_item_title">I am Subash Varghese from India</div>
                                    <div class="revs_item_txt">I am Subash Varghese from India...... I am a lotto lover specially European and US lottos...., I tried several Lotto purchasing sites from India.... But unfortunately I didn't win a single penny....... But then after I heard about {{ env('APP_NAME') }}.,..,. And Lotto purchasing cost is very cheap from here...., I tried superEnoLotto from {{ env('APP_NAME') }}..... At the first time I match two numbers and I got €5.41..... and they credited all my winning amount in my account.... But I was little hesitating about my winning amount.... Because when why I was working in Europe I purchase Spanish Lotto from a Spanish Lotto site..... Then after draw the inform me that I won 10 Euro..... I am little bit happy at that time but unfortunately when I was cross check the Spanish Lotto site about winning I am very disappointments that I was win 100 euro but they give me only 10 Euro..... So that I was cross checking about superEnaLotto also..... And I am understand my winning amount and my credit amount are the same... {{ env('APP_NAME') }}s didn't reduce my single penny from my winning amount....... So that I am telling in my experience {{ env('APP_NAME') }} is very trustful and very lucky site</div>
                                    <div class="revs_item_name">Subash Varghese</div>
                                </a>
                            </div><div class="revs_slider_item">
                                <a href="https://www.trustpilot.com/reviews/6307c4946a3e1ed2c3c0c55f" target="_blank" class="revs_item">
                                    <div class="revs_item_top">
                                        <div class="trustrate">

        <span style="display: inline-block; width: 95px; height: 17px;  overflow: hidden; ">
            <svg viewBox="0 0 251 46" xmlns="http://www.w3.org/2000/svg" style="height: 100%; width: 95px; left: 0; top: 0; z-index: 0; position: relative;">
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
                  <path fill="#00b67a" d="M205.064416 46.330002h46.375587V0h-46.375587z"></path>
                  <path fill="#00b67a" d="M205.064416 46.330002h23.187793V0h-23.187793z"></path>
                  <path d="M244.597022 19.711433l-26.3029 19.089218 3.837419-11.797827-10.047304-7.291391h12.418974l3.837418-11.798624 3.837418 11.798624h12.418975zm-16.255436 11.798642l7.183595-1.509576 2.862114 8.800152-10.045709-7.290576z" fill="#FFF"></path>
              </g>
          </svg>
        </span>

                                        </div>
                                        <div class="revs_item_date time">25/08/2022</div>
                                    </div>
                                    <div class="revs_item_title">I am very satisfied</div>
                                    <div class="revs_item_txt">I am very satisfied, the quality is excellent, I do not regret that I used your services, thank you very much..</div>
                                    <div class="revs_item_name">Alik</div>
                                </a>
                            </div><div class="revs_slider_item">
                                <a href="https://www.trustpilot.com/reviews/62df08074c35e69ec519a58e" target="_blank" class="revs_item">
                                    <div class="revs_item_top">
                                        <div class="trustrate">

        <span style="display: inline-block; width: 95px; height: 17px;  overflow: hidden; ">
            <svg viewBox="0 0 251 46" xmlns="http://www.w3.org/2000/svg" style="height: 100%; width: 95px; left: 0; top: 0; z-index: 0; position: relative;">
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
                  <path fill="#00b67a" d="M205.064416 46.330002h46.375587V0h-46.375587z"></path>
                  <path fill="#00b67a" d="M205.064416 46.330002h23.187793V0h-23.187793z"></path>
                  <path d="M244.597022 19.711433l-26.3029 19.089218 3.837419-11.797827-10.047304-7.291391h12.418974l3.837418-11.798624 3.837418 11.798624h12.418975zm-16.255436 11.798642l7.183595-1.509576 2.862114 8.800152-10.045709-7.290576z" fill="#FFF"></path>
              </g>
          </svg>
        </span>

                                        </div>
                                        <div class="revs_item_date time">26/07/2022</div>
                                    </div>
                                    <div class="revs_item_title">It is really a great company</div>
                                    <div class="revs_item_txt">It is really a great company and a great credibility,, I advise everyone and all over the world To play jackop There is a great hope of winning several prizes.</div>
                                    <div class="revs_item_name">Mohamed Ahmadiy</div>
                                </a>
                            </div><div class="revs_slider_item">
                                <a href="https://www.trustpilot.com/reviews/62cc6ef20c20b4453c3688d8" target="_blank" class="revs_item">
                                    <div class="revs_item_top">
                                        <div class="trustrate">

        <span style="display: inline-block; width: 95px; height: 17px;  overflow: hidden; ">
            <svg viewBox="0 0 251 46" xmlns="http://www.w3.org/2000/svg" style="height: 100%; width: 95px; left: 0; top: 0; z-index: 0; position: relative;">
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
                  <path fill="#00b67a" d="M205.064416 46.330002h46.375587V0h-46.375587z"></path>
                  <path fill="#00b67a" d="M205.064416 46.330002h23.187793V0h-23.187793z"></path>
                  <path d="M244.597022 19.711433l-26.3029 19.089218 3.837419-11.797827-10.047304-7.291391h12.418974l3.837418-11.798624 3.837418 11.798624h12.418975zm-16.255436 11.798642l7.183595-1.509576 2.862114 8.800152-10.045709-7.290576z" fill="#FFF"></path>
              </g>
          </svg>
        </span>

                                        </div>
                                        <div class="revs_item_date time">12/07/2022</div>
                                    </div>
                                    <div class="revs_item_title">Many lottery options available</div>
                                    <div class="revs_item_txt">Many lottery options available.Easy to purchase lottery.Very simple and easy, here you will find Lottery game which gives opportunity to win fantastic prizes every day.I can't get the exact words to express how much i enjoy this site its really amazing.If u want to try u luck this is best place you can hope u can be a millionaire.it is available in many countries.Everything is good with {{ env('APP_NAME') }}</div>
                                    <div class="revs_item_name">subhasish</div>
                                </a>
                            </div><div class="revs_slider_item">
                                <a href="https://www.trustpilot.com/reviews/62bbe1a4853b02c06c91b393" target="_blank" class="revs_item">
                                    <div class="revs_item_top">
                                        <div class="trustrate">

        <span style="display: inline-block; width: 95px; height: 17px;  overflow: hidden; ">
            <svg viewBox="0 0 251 46" xmlns="http://www.w3.org/2000/svg" style="height: 100%; width: 95px; left: 0; top: 0; z-index: 0; position: relative;">
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
                  <path fill="#00b67a" d="M205.064416 46.330002h46.375587V0h-46.375587z"></path>
                  <path fill="#00b67a" d="M205.064416 46.330002h23.187793V0h-23.187793z"></path>
                  <path d="M244.597022 19.711433l-26.3029 19.089218 3.837419-11.797827-10.047304-7.291391h12.418974l3.837418-11.798624 3.837418 11.798624h12.418975zm-16.255436 11.798642l7.183595-1.509576 2.862114 8.800152-10.045709-7.290576z" fill="#FFF"></path>
              </g>
          </svg>
        </span>

                                        </div>
                                        <div class="revs_item_date time">29/06/2022</div>
                                    </div>
                                    <div class="revs_item_title">Best lottery platform I've seen so far</div>
                                    <div class="revs_item_txt">Best lottery platform I've seen so far. Far prices and deals. Everytime you get the feeling that you at a right place. Many options to choose from which is great. So you do not get bored.
                                        It's the best for me so far</div>
                                    <div class="revs_item_name">janet mali</div>
                                </a>
                            </div><div class="revs_slider_item">
                                <a href="https://www.trustpilot.com/reviews/62a0f7010031539b613a00d9" target="_blank" class="revs_item">
                                    <div class="revs_item_top">
                                        <div class="trustrate">

        <span style="display: inline-block; width: 95px; height: 17px;  overflow: hidden; ">
            <svg viewBox="0 0 251 46" xmlns="http://www.w3.org/2000/svg" style="height: 100%; width: 95px; left: 0; top: 0; z-index: 0; position: relative;">
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
                  <path fill="#00b67a" d="M205.064416 46.330002h46.375587V0h-46.375587z"></path>
                  <path fill="#00b67a" d="M205.064416 46.330002h23.187793V0h-23.187793z"></path>
                  <path d="M244.597022 19.711433l-26.3029 19.089218 3.837419-11.797827-10.047304-7.291391h12.418974l3.837418-11.798624 3.837418 11.798624h12.418975zm-16.255436 11.798642l7.183595-1.509576 2.862114 8.800152-10.045709-7.290576z" fill="#FFF"></path>
              </g>
          </svg>
        </span>

                                        </div>
                                        <div class="revs_item_date time">09/06/2022</div>
                                    </div>
                                    <div class="revs_item_title">📢want your dream to come true to be a…</div>
                                    <div class="revs_item_txt">📢want your dream to come true to be a jackpot winner. Be in it . Your dream will come true... anything is possible have faith and you see your dream is around you. The best terrific awesome. 💕 you {{ env('APP_NAME') }}</div>
                                    <div class="revs_item_name">SUSAN wangui</div>
                                </a>
                            </div><div class="revs_slider_item">
                                <a href="https://www.trustpilot.com/reviews/629863dcd55730956308e657" target="_blank" class="revs_item">
                                    <div class="revs_item_top">
                                        <div class="trustrate">

        <span style="display: inline-block; width: 95px; height: 17px;  overflow: hidden; ">
            <svg viewBox="0 0 251 46" xmlns="http://www.w3.org/2000/svg" style="height: 100%; width: 95px; left: 0; top: 0; z-index: 0; position: relative;">
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
                  <path fill="#00b67a" d="M205.064416 46.330002h46.375587V0h-46.375587z"></path>
                  <path fill="#00b67a" d="M205.064416 46.330002h23.187793V0h-23.187793z"></path>
                  <path d="M244.597022 19.711433l-26.3029 19.089218 3.837419-11.797827-10.047304-7.291391h12.418974l3.837418-11.798624 3.837418 11.798624h12.418975zm-16.255436 11.798642l7.183595-1.509576 2.862114 8.800152-10.045709-7.290576z" fill="#FFF"></path>
              </g>
          </svg>
        </span>

                                        </div>
                                        <div class="revs_item_date time">02/06/2022</div>
                                    </div>
                                    <div class="revs_item_title">hello To {{ env('APP_NAME') }} Its a best lottery…</div>
                                    <div class="revs_item_txt">hello To {{ env('APP_NAME') }} Its a best lottery site online . If you want your dream to come true to be a jackpot winner. Be in it . Your dream will come true... anything is possible Be faith and you see your dream is around you. The best terrific awesome. Love you {{ env('APP_NAME') }}.</div>
                                    <div class="revs_item_name">Jitendra Prasad</div>
                                </a>
                            </div><div class="revs_slider_item">
                                <a href="https://www.trustpilot.com/reviews/628f72e1045d025d3a9f4aed" target="_blank" class="revs_item">
                                    <div class="revs_item_top">
                                        <div class="trustrate">

        <span style="display: inline-block; width: 95px; height: 17px;  overflow: hidden; ">
            <svg viewBox="0 0 251 46" xmlns="http://www.w3.org/2000/svg" style="height: 100%; width: 95px; left: 0; top: 0; z-index: 0; position: relative;">
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
                  <path fill="#00b67a" d="M205.064416 46.330002h46.375587V0h-46.375587z"></path>
                  <path fill="#00b67a" d="M205.064416 46.330002h23.187793V0h-23.187793z"></path>
                  <path d="M244.597022 19.711433l-26.3029 19.089218 3.837419-11.797827-10.047304-7.291391h12.418974l3.837418-11.798624 3.837418 11.798624h12.418975zm-16.255436 11.798642l7.183595-1.509576 2.862114 8.800152-10.045709-7.290576z" fill="#FFF"></path>
              </g>
          </svg>
        </span>

                                        </div>
                                        <div class="revs_item_date time">26/05/2022</div>
                                    </div>
                                    <div class="revs_item_title">Greatly impressed by it's user…</div>
                                    <div class="revs_item_txt">Greatly impressed by it's user interface. I love the variety of syndicates provided by them. Easy to deposit and enter into the participation of lottery syndicates. Able to get immediate support from the customer service and they are quick in response. Really love it :)</div>
                                    <div class="revs_item_name">Akash Roy Chandramohan</div>
                                </a>
                            </div><div class="revs_slider_item">
                                <a href="https://www.trustpilot.com/reviews/628ce89b4b16276ac98f07f3" target="_blank" class="revs_item">
                                    <div class="revs_item_top">
                                        <div class="trustrate">

        <span style="display: inline-block; width: 95px; height: 17px;  overflow: hidden; ">
            <svg viewBox="0 0 251 46" xmlns="http://www.w3.org/2000/svg" style="height: 100%; width: 95px; left: 0; top: 0; z-index: 0; position: relative;">
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
                  <path fill="#00b67a" d="M205.064416 46.330002h46.375587V0h-46.375587z"></path>
                  <path fill="#00b67a" d="M205.064416 46.330002h23.187793V0h-23.187793z"></path>
                  <path d="M244.597022 19.711433l-26.3029 19.089218 3.837419-11.797827-10.047304-7.291391h12.418974l3.837418-11.798624 3.837418 11.798624h12.418975zm-16.255436 11.798642l7.183595-1.509576 2.862114 8.800152-10.045709-7.290576z" fill="#FFF"></path>
              </g>
          </svg>
        </span>

                                        </div>
                                        <div class="revs_item_date time">24/05/2022</div>
                                    </div>
                                    <div class="revs_item_title">Great way to play most of lotteries remotely</div>
                                    <div class="revs_item_txt">I like to use this website to buy lottery tickets I could not buy otherwise because of my location, thanks.</div>
                                    <div class="revs_item_name">OlB</div>
                                </a>
                            </div><div class="revs_slider_item">
                                <a href="https://www.trustpilot.com/reviews/628bc9f24b16276ac98e2cdb" target="_blank" class="revs_item">
                                    <div class="revs_item_top">
                                        <div class="trustrate">

        <span style="display: inline-block; width: 95px; height: 17px;  overflow: hidden; ">
            <svg viewBox="0 0 251 46" xmlns="http://www.w3.org/2000/svg" style="height: 100%; width: 95px; left: 0; top: 0; z-index: 0; position: relative;">
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
                  <path fill="#00b67a" d="M205.064416 46.330002h46.375587V0h-46.375587z"></path>
                  <path fill="#00b67a" d="M205.064416 46.330002h23.187793V0h-23.187793z"></path>
                  <path d="M244.597022 19.711433l-26.3029 19.089218 3.837419-11.797827-10.047304-7.291391h12.418974l3.837418-11.798624 3.837418 11.798624h12.418975zm-16.255436 11.798642l7.183595-1.509576 2.862114 8.800152-10.045709-7.290576z" fill="#FFF"></path>
              </g>
          </svg>
        </span>

                                        </div>
                                        <div class="revs_item_date time">23/05/2022</div>
                                    </div>
                                    <div class="revs_item_title">A good lottery</div>
                                    <div class="revs_item_txt">A good lottery. big jackpots. you can purchase one or more tickets to increase your winnings. I would like to win )</div>
                                    <div class="revs_item_name">DESTROYER x</div>
                                </a>
                            </div><div class="revs_slider_item">
                                <a href="https://www.trustpilot.com/reviews/628667c64b16276ac98a70cc" target="_blank" class="revs_item">
                                    <div class="revs_item_top">
                                        <div class="trustrate">

        <span style="display: inline-block; width: 95px; height: 17px;  overflow: hidden; ">
            <svg viewBox="0 0 251 46" xmlns="http://www.w3.org/2000/svg" style="height: 100%; width: 95px; left: 0; top: 0; z-index: 0; position: relative;">
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
                  <path fill="#00b67a" d="M205.064416 46.330002h46.375587V0h-46.375587z"></path>
                  <path fill="#00b67a" d="M205.064416 46.330002h23.187793V0h-23.187793z"></path>
                  <path d="M244.597022 19.711433l-26.3029 19.089218 3.837419-11.797827-10.047304-7.291391h12.418974l3.837418-11.798624 3.837418 11.798624h12.418975zm-16.255436 11.798642l7.183595-1.509576 2.862114 8.800152-10.045709-7.290576z" fill="#FFF"></path>
              </g>
          </svg>
        </span>

                                        </div>
                                        <div class="revs_item_date time">19/05/2022</div>
                                    </div>
                                    <div class="revs_item_title">Play and be rich! Dreams Come True!</div>
                                    <div class="revs_item_txt">I recently play through the company {{ env('APP_NAME') }}. I like a large selection of lotteries from all over the world in one place. Everything is very simple and clear. The company pleases with discounts on tickets. I play and expect to win the jackpot soon</div>
                                    <div class="revs_item_name">Aliaksei Silin</div>
                                </a>
                            </div><div class="revs_slider_item">
                                <a href="https://www.trustpilot.com/reviews/627fa1d0f03a9893e98d69d8" target="_blank" class="revs_item">
                                    <div class="revs_item_top">
                                        <div class="trustrate">

        <span style="display: inline-block; width: 95px; height: 17px;  overflow: hidden; ">
            <svg viewBox="0 0 251 46" xmlns="http://www.w3.org/2000/svg" style="height: 100%; width: 95px; left: 0; top: 0; z-index: 0; position: relative;">
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
                  <path fill="#00b67a" d="M205.064416 46.330002h46.375587V0h-46.375587z"></path>
                  <path fill="#00b67a" d="M205.064416 46.330002h23.187793V0h-23.187793z"></path>
                  <path d="M244.597022 19.711433l-26.3029 19.089218 3.837419-11.797827-10.047304-7.291391h12.418974l3.837418-11.798624 3.837418 11.798624h12.418975zm-16.255436 11.798642l7.183595-1.509576 2.862114 8.800152-10.045709-7.290576z" fill="#FFF"></path>
              </g>
          </svg>
        </span>

                                        </div>
                                        <div class="revs_item_date time">14/05/2022</div>
                                    </div>
                                    <div class="revs_item_title">hats off lottoagent</div>
                                    <div class="revs_item_txt">i have registered as a new player on lottoagent as i like to play lottery and then i bought the italian lottery called superenalotto which has a big jackpot , the purchase was real easy as there are many payment methods which indian players are familiar with , and just after that i got a cashback bonus from lottoagent in my lottoagent account and to my delight i received the italian lotto tickets scanned copy in my account in just one hour , all this was really worth it , this site is also available in hindi and many other languages which is a nice thing as some people maynot understand english , there are various other options of playing at lottoagent like betting and group play which is also good for players interested in those options . all in all a good lottery website hats off</div>
                                    <div class="revs_item_name">lalbahadur</div>
                                </a>
                            </div><div class="revs_slider_item">
                                <a href="https://www.trustpilot.com/reviews/627e791af03a9893e98cb358" target="_blank" class="revs_item">
                                    <div class="revs_item_top">
                                        <div class="trustrate">

        <span style="display: inline-block; width: 95px; height: 17px;  overflow: hidden; ">
            <svg viewBox="0 0 251 46" xmlns="http://www.w3.org/2000/svg" style="height: 100%; width: 95px; left: 0; top: 0; z-index: 0; position: relative;">
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
                  <path fill="#00b67a" d="M205.064416 46.330002h46.375587V0h-46.375587z"></path>
                  <path fill="#00b67a" d="M205.064416 46.330002h23.187793V0h-23.187793z"></path>
                  <path d="M244.597022 19.711433l-26.3029 19.089218 3.837419-11.797827-10.047304-7.291391h12.418974l3.837418-11.798624 3.837418 11.798624h12.418975zm-16.255436 11.798642l7.183595-1.509576 2.862114 8.800152-10.045709-7.290576z" fill="#FFF"></path>
              </g>
          </svg>
        </span>

                                        </div>
                                        <div class="revs_item_date time">13/05/2022</div>
                                    </div>
                                    <div class="revs_item_title">Advantages</div>
                                    <div class="revs_item_txt">{{ env('APP_NAME') }} is a really nice service. It allows to take part in lotteries all over the world. Being not in The US, I can play MegaMillions and be not treated in. Use the service, it is a nice way to try winnig millions.</div>
                                    <div class="revs_item_name">Henry Matskevich</div>
                                </a>
                            </div><div class="revs_slider_item">
                                <a href="https://www.trustpilot.com/reviews/627b2762f03a9893e989d9bf" target="_blank" class="revs_item">
                                    <div class="revs_item_top">
                                        <div class="trustrate">

        <span style="display: inline-block; width: 95px; height: 17px;  overflow: hidden; ">
            <svg viewBox="0 0 251 46" xmlns="http://www.w3.org/2000/svg" style="height: 100%; width: 95px; left: 0; top: 0; z-index: 0; position: relative;">
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
                  <path fill="#00b67a" d="M205.064416 46.330002h46.375587V0h-46.375587z"></path>
                  <path fill="#00b67a" d="M205.064416 46.330002h23.187793V0h-23.187793z"></path>
                  <path d="M244.597022 19.711433l-26.3029 19.089218 3.837419-11.797827-10.047304-7.291391h12.418974l3.837418-11.798624 3.837418 11.798624h12.418975zm-16.255436 11.798642l7.183595-1.509576 2.862114 8.800152-10.045709-7.290576z" fill="#FFF"></path>
              </g>
          </svg>
        </span>

                                        </div>
                                        <div class="revs_item_date time">11/05/2022</div>
                                    </div>
                                    <div class="revs_item_title">{{ env('APP_NAME') }} is a very good and decent…</div>
                                    <div class="revs_item_txt">{{ env('APP_NAME') }} is a very good and decent site to play the lottery.the customer service are very good and impressive,so I urge everyone who wants to play the lottery to join {{ env('APP_NAME') }}</div>
                                    <div class="revs_item_name">Saviour king</div>
                                </a>
                            </div><div class="revs_slider_item">
                                <a href="https://www.trustpilot.com/reviews/6277d078166eb7ecbf409e0c" target="_blank" class="revs_item">
                                    <div class="revs_item_top">
                                        <div class="trustrate">

        <span style="display: inline-block; width: 95px; height: 17px;  overflow: hidden; ">
            <svg viewBox="0 0 251 46" xmlns="http://www.w3.org/2000/svg" style="height: 100%; width: 95px; left: 0; top: 0; z-index: 0; position: relative;">
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
                  <path fill="#00b67a" d="M205.064416 46.330002h46.375587V0h-46.375587z"></path>
                  <path fill="#00b67a" d="M205.064416 46.330002h23.187793V0h-23.187793z"></path>
                  <path d="M244.597022 19.711433l-26.3029 19.089218 3.837419-11.797827-10.047304-7.291391h12.418974l3.837418-11.798624 3.837418 11.798624h12.418975zm-16.255436 11.798642l7.183595-1.509576 2.862114 8.800152-10.045709-7.290576z" fill="#FFF"></path>
              </g>
          </svg>
        </span>

                                        </div>
                                        <div class="revs_item_date time">08/05/2022</div>
                                    </div>
                                    <div class="revs_item_title">Excellent site for online purchase of…</div>
                                    <div class="revs_item_txt">Excellent site for online purchase of lotteries. By betting option in this site one need not go to the country of lottery for receiving prize money.</div>
                                    <div class="revs_item_name">Vimal Ghosh</div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
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

    <section class="section-why">
        <div class="container">
            <h2 class="text-md-center">Why are we worthy of your trust?</h2>
            <div class="why">
                <div class="why_slider js-why_slider owl-carousel">
                    <div class="why_slider_item">
                        <div class="why_item">
                            <div class="why_item_cont">
                                <div class="why_item_title">We have a license</div>
                                <div class="why_item_txt">We have obtained the Curacao license, due to which we can offer you any games and the best lotteries in the world.</div>
                            </div>
                            <div class="why_item_img">
                                <!--<iframe SRC="https://licensing.gaming-curacao.com/validator/?lh=f60484a6978a9b62040108ab46a2e518&template=tseal" WIDTH=150 HEIGHT=50 STYLE="border:none;"></iframe>-->
                                <a class="licensing-gaming-curacao" style="cursor: pointer;">
                                    <img src="https://static.cdnland.com/new/images/svg/license.svg" alt=""/>
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
                                <img src="https://static.cdnland.com/new/images/svg/support.svg" alt=""/>
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
                                <img src="https://static.cdnland.com/new/images/svg/secure.svg" alt=""/>
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
                                <img src="https://static.cdnland.com/new/images/svg/customer-success.svg" alt=""/>
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
