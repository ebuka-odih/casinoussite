@extends('pages.layouts.app')
@section('content')

    <main class="content">

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
                                        <div class="lottery_item_img"><a href="/en/play-lottery/powerball/?from=circular&extra_jackpot="><img src="https://static.cdnland.com/upload/images/logo/svg/powerball.svg" alt="Powerball"/></a></div>
                                        <div class="lottery_item_val"><span class="jack"><b>$ 147</b><br/><span class="mln_icon_extra text-nowrap">Million </span></span></div>
                                    </div>
                                    <div class="lottery_item_cont">
                                        <a href="#windowAlert" class="ratestars fancybox" onclick="yaGoals('CLEVER');" data-title="Today&#039;s Top-Rated Lotteries" data-text="&lt;p&gt;We analyze dozens of parameters daily: Jackpot amount and tax deductions, winning odds and the number of prize divisions, cost of a single line, and availability of such options as &quot;Multiplier,&quot; and much more to offer you the best possible lottery at the moment!&lt;/p&gt;&lt;p&gt;Choose a lottery with the highest score to win more and spend less!&lt;/p&gt;" data-toggle="tooltip" data-placement="bottom" title="Lottery rating from 1 to 10">
                                            <span class="icon-rating"></span>
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
                                                    <option value="/en/play-lottery/powerball/?from=circular&easy_pick=1&extra_jackpot=" data-event-easy-pick="1">1 line for $ 5.29</option>
                                                    <option value="/en/play-lottery/powerball/?from=circular&easy_pick=3&extra_jackpot=" data-event-easy-pick="1">3 lines for $ 14.92</option>
                                                    <option value="" disabled>–––––&nbsp;or&nbsp;–––––</option>
                                                    <option value="/en/play-lottery/powerball/?from=circular&extra_jackpot=">Pick numbers</option>
                                                    <option class="light_version_site_hide" value="" disabled>––––––––––––</option>
                                                    <option class="opt-syndicate" value="/en/play-lottery/powerball/?from=index_lotto&syndicates=1&extra_jackpot=">Syndicate &#128293;</option>
                                                    <option class="opt-system" value="/en/play-lottery/powerball/?from=index_lotto&system=1&extra_jackpot=">System &#128200;</option>
                                                </select>
                                                <a href="/en/play-lottery/powerball/?from=circular&extra_jackpot=" class="btn btn-success event-easy-pick-main-btn">Play<span class="fa-solid fa-chevron-down"></span></a>
                                                <div class="lottery_sel_dropdown">
                                                    <div class="offers">
                                                        <p><a href="/en/play-lottery/powerball/?from=circular&easy_pick=1&extra_jackpot=" class="event-easy-pick-offer">1 line for $ 5.29</a></p>
                                                        <p><a href="/en/play-lottery/powerball/?from=circular&easy_pick=3&extra_jackpot=" class="event-easy-pick-offer">3 lines for $ 14.92</a></p>
                                                    </div>
                                                    <div class="or">–––––&nbsp;or&nbsp;–––––</div>
                                                    <p><a href="/en/play-lottery/powerball/?from=circular&extra_jackpot=" class="lottery_sel_choose">Pick numbers</a></p>
                                                    <div class="or light_version_site_hide">–––––––––––––</div>

                                                    <p><a href="/en/play-lottery/powerball/?from=index_lotto&syndicates=1&extra_jackpot=" class="lottery_sel_choose game-type-ico fire opt-syndicate">Syndicate</a></p>


                                                    <p style="margin-top: 5px;"><a href="/en/play-lottery/powerball/?from=index_lotto&system=1&extra_jackpot=" class="lottery_sel_choose game-type-ico lamp opt-system">System</a></p>

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
                                            <span class="icon-rating"></span>
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
                                    <div class="lottery_item_top" style="background-image: url('https://static.cdnland.com/upload/images/bg/us-superlotto-plus.svg');">
                                        <div class="lottery_item_img"><a href="/en/play-lottery/superlotto-plus/?from=circular&extra_jackpot="><img src="https://static.cdnland.com/upload/images/logo/svg/superlotto-plus.svg" alt="SuperLotto Plus"/></a></div>
                                        <div class="lottery_item_val"><span class="jack"><b>$ 46</b><br/><span class="mln_icon_extra text-nowrap">Million </span></span></div>
                                    </div>
                                    <div class="lottery_item_cont">
                                        <a href="#windowAlert" class="ratestars fancybox" onclick="yaGoals('CLEVER');" data-title="Today&#039;s Top-Rated Lotteries" data-text="&lt;p&gt;We analyze dozens of parameters daily: Jackpot amount and tax deductions, winning odds and the number of prize divisions, cost of a single line, and availability of such options as &quot;Multiplier,&quot; and much more to offer you the best possible lottery at the moment!&lt;/p&gt;&lt;p&gt;Choose a lottery with the highest score to win more and spend less!&lt;/p&gt;" data-toggle="tooltip" data-placement="bottom" title="Lottery rating from 1 to 10">
                                            <span class="icon-rating"></span>
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
                                                    <option value="/en/play-lottery/superlotto-plus/?from=circular&easy_pick=2&extra_jackpot=" data-event-easy-pick="1">2 lines for $ 5.98</option>
                                                    <option value="/en/play-lottery/superlotto-plus/?from=circular&easy_pick=3&extra_jackpot=" data-event-easy-pick="1">3 lines for $ 8.52</option>
                                                    <option value="" disabled>–––––&nbsp;or&nbsp;–––––</option>
                                                    <option value="/en/play-lottery/superlotto-plus/?from=circular&extra_jackpot=">Pick numbers</option>
                                                    <option class="light_version_site_hide" value="" disabled>––––––––––––</option>
                                                    <option class="opt-syndicate" value="/en/play-lottery/superlotto-plus/?from=index_lotto&syndicates=1&extra_jackpot=">Syndicate &#128293;</option>
                                                    <option class="opt-system" value="/en/play-lottery/superlotto-plus/?from=index_lotto&system=1&extra_jackpot=">System &#128200;</option>
                                                </select>
                                                <a href="/en/play-lottery/superlotto-plus/?from=circular&extra_jackpot=" class="btn btn-success event-easy-pick-main-btn">Play<span class="fa-solid fa-chevron-down"></span></a>
                                                <div class="lottery_sel_dropdown">
                                                    <div class="offers">
                                                        <p><a href="/en/play-lottery/superlotto-plus/?from=circular&easy_pick=2&extra_jackpot=" class="event-easy-pick-offer">2 lines for $ 5.98</a></p>
                                                        <p><a href="/en/play-lottery/superlotto-plus/?from=circular&easy_pick=3&extra_jackpot=" class="event-easy-pick-offer">3 lines for $ 8.52</a></p>
                                                    </div>
                                                    <div class="or">–––––&nbsp;or&nbsp;–––––</div>
                                                    <p><a href="/en/play-lottery/superlotto-plus/?from=circular&extra_jackpot=" class="lottery_sel_choose">Pick numbers</a></p>
                                                    <div class="or light_version_site_hide">–––––––––––––</div>

                                                    <p><a href="/en/play-lottery/superlotto-plus/?from=index_lotto&syndicates=1&extra_jackpot=" class="lottery_sel_choose game-type-ico fire opt-syndicate">Syndicate</a></p>


                                                    <p style="margin-top: 5px;"><a href="/en/play-lottery/superlotto-plus/?from=index_lotto&system=1&extra_jackpot=" class="lottery_sel_choose game-type-ico lamp opt-system">System</a></p>

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div><div class="lottery_slider_item">
                                <div class="lottery_item">
                                    <div class="lottery_item_top" style="background-image: url('https://static.cdnland.com/upload/images/bg/eu-euromillions.svg');">
                                        <div class="lottery_item_img"><a href="/en/play-lottery/euromillions/?from=circular&extra_jackpot="><img src="https://static.cdnland.com/upload/images/logo/svg/euromillions.svg" alt="EuroMillions"/></a></div>
                                        <div class="lottery_item_val"><span class="jack"><b>€ 40</b><br/><span class="mln_icon_extra text-nowrap">Million </span></span></div>
                                    </div>
                                    <div class="lottery_item_cont">
                                        <a href="#windowAlert" class="ratestars fancybox" onclick="yaGoals('CLEVER');" data-title="Today&#039;s Top-Rated Lotteries" data-text="&lt;p&gt;We analyze dozens of parameters daily: Jackpot amount and tax deductions, winning odds and the number of prize divisions, cost of a single line, and availability of such options as &quot;Multiplier,&quot; and much more to offer you the best possible lottery at the moment!&lt;/p&gt;&lt;p&gt;Choose a lottery with the highest score to win more and spend less!&lt;/p&gt;" data-toggle="tooltip" data-placement="bottom" title="Lottery rating from 1 to 10">
                                            <span class="icon-rating"></span>
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
                                                    <option value="/en/play-lottery/euromillions/?from=circular&easy_pick=1&extra_jackpot=" data-event-easy-pick="1">1 line for $ 6.20</option>
                                                    <option value="/en/play-lottery/euromillions/?from=circular&easy_pick=3&extra_jackpot=" data-event-easy-pick="1">3 lines for $ 18.04</option>
                                                    <option value="" disabled>–––––&nbsp;or&nbsp;–––––</option>
                                                    <option value="/en/play-lottery/euromillions/?from=circular&extra_jackpot=">Pick numbers</option>
                                                    <option class="light_version_site_hide" value="" disabled>––––––––––––</option>
                                                    <option class="opt-syndicate" value="/en/play-lottery/euromillions/?from=index_lotto&syndicates=1&extra_jackpot=">Syndicate &#128293;</option>
                                                    <option class="opt-system" value="/en/play-lottery/euromillions/?from=index_lotto&system=1&extra_jackpot=">System &#128200;</option>
                                                </select>
                                                <a href="/en/play-lottery/euromillions/?from=circular&extra_jackpot=" class="btn btn-success event-easy-pick-main-btn">Play<span class="fa-solid fa-chevron-down"></span></a>
                                                <div class="lottery_sel_dropdown">
                                                    <div class="offers">
                                                        <p><a href="/en/play-lottery/euromillions/?from=circular&easy_pick=1&extra_jackpot=" class="event-easy-pick-offer">1 line for $ 6.20</a></p>
                                                        <p><a href="/en/play-lottery/euromillions/?from=circular&easy_pick=3&extra_jackpot=" class="event-easy-pick-offer">3 lines for $ 18.04</a></p>
                                                    </div>
                                                    <div class="or">–––––&nbsp;or&nbsp;–––––</div>
                                                    <p><a href="/en/play-lottery/euromillions/?from=circular&extra_jackpot=" class="lottery_sel_choose">Pick numbers</a></p>
                                                    <div class="or light_version_site_hide">–––––––––––––</div>

                                                    <p><a href="/en/play-lottery/euromillions/?from=index_lotto&syndicates=1&extra_jackpot=" class="lottery_sel_choose game-type-ico fire opt-syndicate">Syndicate</a></p>


                                                    <p style="margin-top: 5px;"><a href="/en/play-lottery/euromillions/?from=index_lotto&system=1&extra_jackpot=" class="lottery_sel_choose game-type-ico lamp opt-system">System</a></p>

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div><div class="lottery_slider_item">
                                <div class="lottery_item">
                                    <div class="lottery_item_top" style="background-image: url('https://static.cdnland.com/upload/images/bg/us-lotto-america.svg');">
                                        <div class="lottery_item_img"><a href="/en/play-lottery/lotto-america/?from=circular&extra_jackpot="><img src="https://static.cdnland.com/upload/images/logo/svg/lotto_america.svg" alt="Lotto America"/></a></div>
                                        <div class="lottery_item_val"><span class="jack"><b>$ 40.03</b><br/><span class="mln_icon_extra text-nowrap">Million </span></span></div>
                                    </div>
                                    <div class="lottery_item_cont">
                                        <a href="#windowAlert" class="ratestars fancybox" onclick="yaGoals('CLEVER');" data-title="Today&#039;s Top-Rated Lotteries" data-text="&lt;p&gt;We analyze dozens of parameters daily: Jackpot amount and tax deductions, winning odds and the number of prize divisions, cost of a single line, and availability of such options as &quot;Multiplier,&quot; and much more to offer you the best possible lottery at the moment!&lt;/p&gt;&lt;p&gt;Choose a lottery with the highest score to win more and spend less!&lt;/p&gt;" data-toggle="tooltip" data-placement="bottom" title="Lottery rating from 1 to 10">
                                            <span class="icon-rating"></span>
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
                                                    <option value="/en/play-lottery/lotto-america/?from=circular&easy_pick=1&extra_jackpot=" data-event-easy-pick="1">1 line for $ 3.29</option>
                                                    <option value="/en/play-lottery/lotto-america/?from=circular&easy_pick=3&extra_jackpot=" data-event-easy-pick="1">3 lines for $ 9.57</option>
                                                    <option value="" disabled>–––––&nbsp;or&nbsp;–––––</option>
                                                    <option value="/en/play-lottery/lotto-america/?from=circular&extra_jackpot=">Pick numbers</option>
                                                    <option class="light_version_site_hide" value="" disabled>––––––––––––</option>

                                                    <option class="opt-system" value="/en/play-lottery/lotto-america/?from=index_lotto&system=1&extra_jackpot=">System &#128200;</option>
                                                </select>
                                                <a href="/en/play-lottery/lotto-america/?from=circular&extra_jackpot=" class="btn btn-success event-easy-pick-main-btn">Play<span class="fa-solid fa-chevron-down"></span></a>
                                                <div class="lottery_sel_dropdown">
                                                    <div class="offers">
                                                        <p><a href="/en/play-lottery/lotto-america/?from=circular&easy_pick=1&extra_jackpot=" class="event-easy-pick-offer">1 line for $ 3.29</a></p>
                                                        <p><a href="/en/play-lottery/lotto-america/?from=circular&easy_pick=3&extra_jackpot=" class="event-easy-pick-offer">3 lines for $ 9.57</a></p>
                                                    </div>
                                                    <div class="or">–––––&nbsp;or&nbsp;–––––</div>
                                                    <p><a href="/en/play-lottery/lotto-america/?from=circular&extra_jackpot=" class="lottery_sel_choose">Pick numbers</a></p>
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
                                            <span class="icon-rating"></span>
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
                                        <div class="lottery_item_img"><a href="/en/play-lottery/oz-lotto/?from=circular&extra_jackpot="><img src="https://static.cdnland.com/upload/images/logo/svg/oz-lotto.svg" alt="Oz Lotto"/></a></div>
                                        <div class="lottery_item_val"><span class="jack"><b>A$ 20</b><br/><span class="mln_icon_extra text-nowrap">Million </span></span></div>
                                    </div>
                                    <div class="lottery_item_cont">
                                        <a href="#windowAlert" class="ratestars fancybox" onclick="yaGoals('CLEVER');" data-title="Today&#039;s Top-Rated Lotteries" data-text="&lt;p&gt;We analyze dozens of parameters daily: Jackpot amount and tax deductions, winning odds and the number of prize divisions, cost of a single line, and availability of such options as &quot;Multiplier,&quot; and much more to offer you the best possible lottery at the moment!&lt;/p&gt;&lt;p&gt;Choose a lottery with the highest score to win more and spend less!&lt;/p&gt;" data-toggle="tooltip" data-placement="bottom" title="Lottery rating from 1 to 10">
                                            <span class="icon-rating"></span>
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
                                                    <option value="/en/play-lottery/oz-lotto/?from=circular&easy_pick=4&extra_jackpot=" data-event-easy-pick="1">4 lines for $ 10.04</option>
                                                    <option value="/en/play-lottery/oz-lotto/?from=circular&easy_pick=7&extra_jackpot=" data-event-easy-pick="1">7 lines for $ 16.34</option>
                                                    <option value="" disabled>–––––&nbsp;or&nbsp;–––––</option>
                                                    <option value="/en/play-lottery/oz-lotto/?from=circular&extra_jackpot=">Pick numbers</option>
                                                    <option class="light_version_site_hide" value="" disabled>––––––––––––</option>
                                                    <option class="opt-syndicate" value="/en/play-lottery/oz-lotto/?from=index_lotto&syndicates=1&extra_jackpot=">Syndicate &#128293;</option>
                                                    <option class="opt-system" value="/en/play-lottery/oz-lotto/?from=index_lotto&system=1&extra_jackpot=">System &#128200;</option>
                                                </select>
                                                <a href="/en/play-lottery/oz-lotto/?from=circular&extra_jackpot=" class="btn btn-success event-easy-pick-main-btn">Play<span class="fa-solid fa-chevron-down"></span></a>
                                                <div class="lottery_sel_dropdown">
                                                    <div class="offers">
                                                        <p><a href="/en/play-lottery/oz-lotto/?from=circular&easy_pick=4&extra_jackpot=" class="event-easy-pick-offer">4 lines for $ 10.04</a></p>
                                                        <p><a href="/en/play-lottery/oz-lotto/?from=circular&easy_pick=7&extra_jackpot=" class="event-easy-pick-offer">7 lines for $ 16.34</a></p>
                                                    </div>
                                                    <div class="or">–––––&nbsp;or&nbsp;–––––</div>
                                                    <p><a href="/en/play-lottery/oz-lotto/?from=circular&extra_jackpot=" class="lottery_sel_choose">Pick numbers</a></p>
                                                    <div class="or light_version_site_hide">–––––––––––––</div>

                                                    <p><a href="/en/play-lottery/oz-lotto/?from=index_lotto&syndicates=1&extra_jackpot=" class="lottery_sel_choose game-type-ico fire opt-syndicate">Syndicate</a></p>


                                                    <p style="margin-top: 5px;"><a href="/en/play-lottery/oz-lotto/?from=index_lotto&system=1&extra_jackpot=" class="lottery_sel_choose game-type-ico lamp opt-system">System</a></p>

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div><div class="lottery_slider_item">
                                <div class="lottery_item">
                                    <div class="lottery_item_top" style="background-image: url('https://static.cdnland.com/upload/images/bg/eu-eurojackpot.svg');">
                                        <div class="lottery_item_img"><a href="/en/play-lottery/eurojackpot/?from=circular&extra_jackpot="><img src="https://static.cdnland.com/upload/images/logo/svg/eurojackpot.svg" alt="EuroJackpot"/></a></div>
                                        <div class="lottery_item_val"><span class="jack"><b>€ 10</b><br/><span class="mln_icon_extra text-nowrap">Million </span></span></div>
                                    </div>
                                    <div class="lottery_item_cont">
                                        <a href="#windowAlert" class="ratestars fancybox" onclick="yaGoals('CLEVER');" data-title="Today&#039;s Top-Rated Lotteries" data-text="&lt;p&gt;We analyze dozens of parameters daily: Jackpot amount and tax deductions, winning odds and the number of prize divisions, cost of a single line, and availability of such options as &quot;Multiplier,&quot; and much more to offer you the best possible lottery at the moment!&lt;/p&gt;&lt;p&gt;Choose a lottery with the highest score to win more and spend less!&lt;/p&gt;" data-toggle="tooltip" data-placement="bottom" title="Lottery rating from 1 to 10">
                                            <span class="icon-rating"></span>
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
                                                    <option value="/en/play-lottery/eurojackpot/?from=circular&extra_jackpot=">Pick numbers</option>
                                                    <option class="light_version_site_hide" value="" disabled>––––––––––––</option>
                                                    <option class="opt-syndicate" value="/en/play-lottery/eurojackpot/?from=index_lotto&syndicates=1&extra_jackpot=">Syndicate &#128293;</option>
                                                    <option class="opt-system" value="/en/play-lottery/eurojackpot/?from=index_lotto&system=1&extra_jackpot=">System &#128200;</option>
                                                </select>
                                                <a href="/en/play-lottery/eurojackpot/?from=circular&extra_jackpot=" class="btn btn-success event-easy-pick-main-btn">Play<span class="fa-solid fa-chevron-down"></span></a>
                                                <div class="lottery_sel_dropdown">
                                                    <div class="offers">
                                                        <p><a href="/en/play-lottery/eurojackpot/?from=circular&easy_pick=1&extra_jackpot=" class="event-easy-pick-offer">1 line for $ 5.76</a></p>
                                                        <p><a href="/en/play-lottery/eurojackpot/?from=circular&easy_pick=3&extra_jackpot=" class="event-easy-pick-offer">3 lines for $ 16.76</a></p>
                                                    </div>
                                                    <div class="or">–––––&nbsp;or&nbsp;–––––</div>
                                                    <p><a href="/en/play-lottery/eurojackpot/?from=circular&extra_jackpot=" class="lottery_sel_choose">Pick numbers</a></p>
                                                    <div class="or light_version_site_hide">–––––––––––––</div>

                                                    <p><a href="/en/play-lottery/eurojackpot/?from=index_lotto&syndicates=1&extra_jackpot=" class="lottery_sel_choose game-type-ico fire opt-syndicate">Syndicate</a></p>


                                                    <p style="margin-top: 5px;"><a href="/en/play-lottery/eurojackpot/?from=index_lotto&system=1&extra_jackpot=" class="lottery_sel_choose game-type-ico lamp opt-system">System</a></p>

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
                                            <span class="icon-rating"></span>
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
                                        <div class="lottery_item_img"><a href="/en/play-lottery/el-gordo/?from=circular&extra_jackpot="><img src="https://static.cdnland.com/upload/images/logo/svg/el_gordo.svg" alt="El Gordo de la Primitiva"/></a></div>
                                        <div class="lottery_item_val"><span class="jack"><b>€ 5+</b><br/><span class="mln_icon_extra text-nowrap">Million </span></span></div>
                                    </div>
                                    <div class="lottery_item_cont">
                                        <a href="#windowAlert" class="ratestars fancybox" onclick="yaGoals('CLEVER');" data-title="Today&#039;s Top-Rated Lotteries" data-text="&lt;p&gt;We analyze dozens of parameters daily: Jackpot amount and tax deductions, winning odds and the number of prize divisions, cost of a single line, and availability of such options as &quot;Multiplier,&quot; and much more to offer you the best possible lottery at the moment!&lt;/p&gt;&lt;p&gt;Choose a lottery with the highest score to win more and spend less!&lt;/p&gt;" data-toggle="tooltip" data-placement="bottom" title="Lottery rating from 1 to 10">
                                            <span class="icon-rating"></span>
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
                                                    <option value="/en/play-lottery/el-gordo/?from=circular&extra_jackpot=">Pick numbers</option>
                                                    <option class="light_version_site_hide" value="" disabled>––––––––––––</option>
                                                    <option class="opt-syndicate" value="/en/play-lottery/el-gordo/?from=index_lotto&syndicates=1&extra_jackpot=">Syndicate &#128293;</option>
                                                    <option class="opt-system" value="/en/play-lottery/el-gordo/?from=index_lotto&system=1&extra_jackpot=">System &#128200;</option>
                                                </select>
                                                <a href="/en/play-lottery/el-gordo/?from=circular&extra_jackpot=" class="btn btn-success event-easy-pick-main-btn">Play<span class="fa-solid fa-chevron-down"></span></a>
                                                <div class="lottery_sel_dropdown">
                                                    <div class="offers">
                                                        <p><a href="/en/play-lottery/el-gordo/?from=circular&easy_pick=2&extra_jackpot=" class="event-easy-pick-offer">2 lines for $ 9.68</a></p>
                                                        <p><a href="/en/play-lottery/el-gordo/?from=circular&easy_pick=3&extra_jackpot=" class="event-easy-pick-offer">3 lines for $ 13.50</a></p>
                                                    </div>
                                                    <div class="or">–––––&nbsp;or&nbsp;–––––</div>
                                                    <p><a href="/en/play-lottery/el-gordo/?from=circular&extra_jackpot=" class="lottery_sel_choose">Pick numbers</a></p>
                                                    <div class="or light_version_site_hide">–––––––––––––</div>

                                                    <p><a href="/en/play-lottery/el-gordo/?from=index_lotto&syndicates=1&extra_jackpot=" class="lottery_sel_choose game-type-ico fire opt-syndicate">Syndicate</a></p>


                                                    <p style="margin-top: 5px;"><a href="/en/play-lottery/el-gordo/?from=index_lotto&system=1&extra_jackpot=" class="lottery_sel_choose game-type-ico lamp opt-system">System</a></p>

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div><div class="lottery_slider_item">
                                <div class="lottery_item">
                                    <div class="lottery_item_top" style="background-image: url('https://static.cdnland.com/upload/images/bg/pl-poland-lotto.svg');">
                                        <div class="lottery_item_img"><a href="/en/play-lottery/poland-lotto/?from=circular&extra_jackpot="><img src="https://static.cdnland.com/upload/images/logo/svg/lotto_pl.svg" alt="Poland Lotto"/></a></div>
                                        <div class="lottery_item_val"><span class="jack"><b>zł 18</b><br/><span class="mln_icon_extra text-nowrap">Million </span></span></div>
                                    </div>
                                    <div class="lottery_item_cont">
                                        <a href="#windowAlert" class="ratestars fancybox" onclick="yaGoals('CLEVER');" data-title="Today&#039;s Top-Rated Lotteries" data-text="&lt;p&gt;We analyze dozens of parameters daily: Jackpot amount and tax deductions, winning odds and the number of prize divisions, cost of a single line, and availability of such options as &quot;Multiplier,&quot; and much more to offer you the best possible lottery at the moment!&lt;/p&gt;&lt;p&gt;Choose a lottery with the highest score to win more and spend less!&lt;/p&gt;" data-toggle="tooltip" data-placement="bottom" title="Lottery rating from 1 to 10">
                                            <span class="icon-rating"></span>
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
                                                    <option value="/en/play-lottery/poland-lotto/?from=circular&easy_pick=3&extra_jackpot=" data-event-easy-pick="1">3 lines for $ 5.22</option>
                                                    <option value="/en/play-lottery/poland-lotto/?from=circular&easy_pick=5&extra_jackpot=" data-event-easy-pick="1">5 lines for $ 8.09</option>
                                                    <option value="" disabled>–––––&nbsp;or&nbsp;–––––</option>
                                                    <option value="/en/play-lottery/poland-lotto/?from=circular&extra_jackpot=">Pick numbers</option>
                                                    <option class="light_version_site_hide" value="" disabled>––––––––––––</option>

                                                    <option class="opt-system" value="/en/play-lottery/poland-lotto/?from=index_lotto&system=1&extra_jackpot=">System &#128200;</option>
                                                </select>
                                                <a href="/en/play-lottery/poland-lotto/?from=circular&extra_jackpot=" class="btn btn-success event-easy-pick-main-btn">Play<span class="fa-solid fa-chevron-down"></span></a>
                                                <div class="lottery_sel_dropdown">
                                                    <div class="offers">
                                                        <p><a href="/en/play-lottery/poland-lotto/?from=circular&easy_pick=3&extra_jackpot=" class="event-easy-pick-offer">3 lines for $ 5.22</a></p>
                                                        <p><a href="/en/play-lottery/poland-lotto/?from=circular&easy_pick=5&extra_jackpot=" class="event-easy-pick-offer">5 lines for $ 8.09</a></p>
                                                    </div>
                                                    <div class="or">–––––&nbsp;or&nbsp;–––––</div>
                                                    <p><a href="/en/play-lottery/poland-lotto/?from=circular&extra_jackpot=" class="lottery_sel_choose">Pick numbers</a></p>
                                                    <div class="or light_version_site_hide">–––––––––––––</div>


                                                    <p style="margin-top: 5px;"><a href="/en/play-lottery/poland-lotto/?from=index_lotto&system=1&extra_jackpot=" class="lottery_sel_choose game-type-ico lamp opt-system">System</a></p>

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div><div class="lottery_slider_item">
                                <div class="lottery_item">
                                    <div class="lottery_item_top" style="background-image: url('https://static.cdnland.com/upload/images/bg/ca-649-lotto.svg');">
                                        <div class="lottery_item_img"><a href="/en/play-lottery/lotto-649/?from=circular&extra_jackpot="><img src="https://static.cdnland.com/upload/images/logo/svg/649_lotto.svg" alt="Lotto 6/49"/></a></div>
                                        <div class="lottery_item_val"><span class="jack"><b>C$ 5</b><br/><span class="mln_icon_extra text-nowrap">Million </span></span></div>
                                    </div>
                                    <div class="lottery_item_cont">
                                        <a href="#windowAlert" class="ratestars fancybox" onclick="yaGoals('CLEVER');" data-title="Today&#039;s Top-Rated Lotteries" data-text="&lt;p&gt;We analyze dozens of parameters daily: Jackpot amount and tax deductions, winning odds and the number of prize divisions, cost of a single line, and availability of such options as &quot;Multiplier,&quot; and much more to offer you the best possible lottery at the moment!&lt;/p&gt;&lt;p&gt;Choose a lottery with the highest score to win more and spend less!&lt;/p&gt;" data-toggle="tooltip" data-placement="bottom" title="Lottery rating from 1 to 10">
                                            <span class="icon-rating"></span>
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
                                                    <option value="/en/play-lottery/lotto-649/?from=circular&easy_pick=1&extra_jackpot=" data-event-easy-pick="1">1 line for $ 5.91</option>
                                                    <option value="/en/play-lottery/lotto-649/?from=circular&easy_pick=3&extra_jackpot=" data-event-easy-pick="1">3 lines for $ 16.67</option>
                                                    <option value="" disabled>–––––&nbsp;or&nbsp;–––––</option>
                                                    <option value="/en/play-lottery/lotto-649/?from=circular&extra_jackpot=">Pick numbers</option>
                                                    <option class="light_version_site_hide" value="" disabled>––––––––––––</option>

                                                    <option class="opt-system" value="/en/play-lottery/lotto-649/?from=index_lotto&system=1&extra_jackpot=">System &#128200;</option>
                                                </select>
                                                <a href="/en/play-lottery/lotto-649/?from=circular&extra_jackpot=" class="btn btn-success event-easy-pick-main-btn">Play<span class="fa-solid fa-chevron-down"></span></a>
                                                <div class="lottery_sel_dropdown">
                                                    <div class="offers">
                                                        <p><a href="/en/play-lottery/lotto-649/?from=circular&easy_pick=1&extra_jackpot=" class="event-easy-pick-offer">1 line for $ 5.91</a></p>
                                                        <p><a href="/en/play-lottery/lotto-649/?from=circular&easy_pick=3&extra_jackpot=" class="event-easy-pick-offer">3 lines for $ 16.67</a></p>
                                                    </div>
                                                    <div class="or">–––––&nbsp;or&nbsp;–––––</div>
                                                    <p><a href="/en/play-lottery/lotto-649/?from=circular&extra_jackpot=" class="lottery_sel_choose">Pick numbers</a></p>
                                                    <div class="or light_version_site_hide">–––––––––––––</div>


                                                    <p style="margin-top: 5px;"><a href="/en/play-lottery/lotto-649/?from=index_lotto&system=1&extra_jackpot=" class="lottery_sel_choose game-type-ico lamp opt-system">System</a></p>

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div><div class="lottery_slider_item">
                                <div class="lottery_item">
                                    <div class="lottery_item_top" style="background-image: url('https://static.cdnland.com/upload/images/bg/au-saturday-lotto.svg');">
                                        <div class="lottery_item_img"><a href="/en/play-lottery/au-saturday-lotto/?from=circular&extra_jackpot="><img src="https://static.cdnland.com/upload/images/logo/svg/saturday_lotto.svg" alt="Saturday Lotto"/></a></div>
                                        <div class="lottery_item_val"><span class="jack"><b>A$ 5</b><br/><span class="mln_icon_extra text-nowrap">Million </span></span></div>
                                    </div>
                                    <div class="lottery_item_cont">
                                        <a href="#windowAlert" class="ratestars fancybox" onclick="yaGoals('CLEVER');" data-title="Today&#039;s Top-Rated Lotteries" data-text="&lt;p&gt;We analyze dozens of parameters daily: Jackpot amount and tax deductions, winning odds and the number of prize divisions, cost of a single line, and availability of such options as &quot;Multiplier,&quot; and much more to offer you the best possible lottery at the moment!&lt;/p&gt;&lt;p&gt;Choose a lottery with the highest score to win more and spend less!&lt;/p&gt;" data-toggle="tooltip" data-placement="bottom" title="Lottery rating from 1 to 10">
                                            <span class="icon-rating"></span>
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
                                                    <option value="/en/play-lottery/au-saturday-lotto/?from=circular&easy_pick=6&extra_jackpot=" data-event-easy-pick="1">6 lines for $ 8.82</option>
                                                    <option value="/en/play-lottery/au-saturday-lotto/?from=circular&easy_pick=10&extra_jackpot=" data-event-easy-pick="1">10 lines for $ 13.38</option>
                                                    <option value="" disabled>–––––&nbsp;or&nbsp;–––––</option>
                                                    <option value="/en/play-lottery/au-saturday-lotto/?from=circular&extra_jackpot=">Pick numbers</option>
                                                    <option class="light_version_site_hide" value="" disabled>––––––––––––</option>
                                                    <option class="opt-syndicate" value="/en/play-lottery/au-saturday-lotto/?from=index_lotto&syndicates=1&extra_jackpot=">Syndicate &#128293;</option>
                                                    <option class="opt-system" value="/en/play-lottery/au-saturday-lotto/?from=index_lotto&system=1&extra_jackpot=">System &#128200;</option>
                                                </select>
                                                <a href="/en/play-lottery/au-saturday-lotto/?from=circular&extra_jackpot=" class="btn btn-success event-easy-pick-main-btn">Play<span class="fa-solid fa-chevron-down"></span></a>
                                                <div class="lottery_sel_dropdown">
                                                    <div class="offers">
                                                        <p><a href="/en/play-lottery/au-saturday-lotto/?from=circular&easy_pick=6&extra_jackpot=" class="event-easy-pick-offer">6 lines for $ 8.82</a></p>
                                                        <p><a href="/en/play-lottery/au-saturday-lotto/?from=circular&easy_pick=10&extra_jackpot=" class="event-easy-pick-offer">10 lines for $ 13.38</a></p>
                                                    </div>
                                                    <div class="or">–––––&nbsp;or&nbsp;–––––</div>
                                                    <p><a href="/en/play-lottery/au-saturday-lotto/?from=circular&extra_jackpot=" class="lottery_sel_choose">Pick numbers</a></p>
                                                    <div class="or light_version_site_hide">–––––––––––––</div>

                                                    <p><a href="/en/play-lottery/au-saturday-lotto/?from=index_lotto&syndicates=1&extra_jackpot=" class="lottery_sel_choose game-type-ico fire opt-syndicate">Syndicate</a></p>


                                                    <p style="margin-top: 5px;"><a href="/en/play-lottery/au-saturday-lotto/?from=index_lotto&system=1&extra_jackpot=" class="lottery_sel_choose game-type-ico lamp opt-system">System</a></p>

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div><div class="lottery_slider_item">
                                <div class="lottery_item">
                                    <div class="lottery_item_top" style="background-image: url('https://static.cdnland.com/upload/images/bg/au-set_for_life.svg');">
                                        <div class="lottery_item_img"><a href="/en/play-lottery/au-set-for-life/?from=circular&extra_jackpot="><img src="https://static.cdnland.com/upload/images/logo/svg/set_for_life.svg" alt="Set for Life (AU)"/></a></div>
                                        <div class="lottery_item_val"><span class="jack"><b>A$ 4.8</b><br/><span class="mln_icon_extra text-nowrap">Million </span></span></div>
                                    </div>
                                    <div class="lottery_item_cont">
                                        <a href="#windowAlert" class="ratestars fancybox" onclick="yaGoals('CLEVER');" data-title="Today&#039;s Top-Rated Lotteries" data-text="&lt;p&gt;We analyze dozens of parameters daily: Jackpot amount and tax deductions, winning odds and the number of prize divisions, cost of a single line, and availability of such options as &quot;Multiplier,&quot; and much more to offer you the best possible lottery at the moment!&lt;/p&gt;&lt;p&gt;Choose a lottery with the highest score to win more and spend less!&lt;/p&gt;" data-toggle="tooltip" data-placement="bottom" title="Lottery rating from 1 to 10">
                                            <span class="icon-rating"></span>
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
                                                    <option value="/en/play-lottery/au-set-for-life/?from=circular&easy_pick=7&extra_jackpot=" data-event-easy-pick="1">7 lines for $ 7.49</option>
                                                    <option value="/en/play-lottery/au-set-for-life/?from=circular&easy_pick=14&extra_jackpot=" data-event-easy-pick="1">14 lines for $ 14.23</option>
                                                    <option value="" disabled>–––––&nbsp;or&nbsp;–––––</option>
                                                    <option value="/en/play-lottery/au-set-for-life/?from=circular&extra_jackpot=">Pick numbers</option>
                                                    <option class="light_version_site_hide" value="" disabled>––––––––––––</option>

                                                    <option class="opt-system" value="/en/play-lottery/au-set-for-life/?from=index_lotto&system=1&extra_jackpot=">System &#128200;</option>
                                                </select>
                                                <a href="/en/play-lottery/au-set-for-life/?from=circular&extra_jackpot=" class="btn btn-success event-easy-pick-main-btn">Play<span class="fa-solid fa-chevron-down"></span></a>
                                                <div class="lottery_sel_dropdown">
                                                    <div class="offers">
                                                        <p><a href="/en/play-lottery/au-set-for-life/?from=circular&easy_pick=7&extra_jackpot=" class="event-easy-pick-offer">7 lines for $ 7.49</a></p>
                                                        <p><a href="/en/play-lottery/au-set-for-life/?from=circular&easy_pick=14&extra_jackpot=" class="event-easy-pick-offer">14 lines for $ 14.23</a></p>
                                                    </div>
                                                    <div class="or">–––––&nbsp;or&nbsp;–––––</div>
                                                    <p><a href="/en/play-lottery/au-set-for-life/?from=circular&extra_jackpot=" class="lottery_sel_choose">Pick numbers</a></p>
                                                    <div class="or light_version_site_hide">–––––––––––––</div>


                                                    <p style="margin-top: 5px;"><a href="/en/play-lottery/au-set-for-life/?from=index_lotto&system=1&extra_jackpot=" class="lottery_sel_choose game-type-ico lamp opt-system">System</a></p>

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div><div class="lottery_slider_item">
                                <div class="lottery_item">
                                    <div class="lottery_item_top" style="background-image: url('https://static.cdnland.com/upload/images/bg/uk-lotto.svg');">
                                        <div class="lottery_item_img"><a href="/en/play-lottery/uk-lotto/?from=circular&extra_jackpot="><img src="https://static.cdnland.com/upload/images/logo/svg/uk_lotto.svg" alt="UK Lotto"/></a></div>
                                        <div class="lottery_item_val"><span class="jack"><b>£ 2.5+</b><br/><span class="mln_icon_extra text-nowrap">Million </span></span></div>
                                    </div>
                                    <div class="lottery_item_cont">
                                        <a href="#windowAlert" class="ratestars fancybox" onclick="yaGoals('CLEVER');" data-title="Today&#039;s Top-Rated Lotteries" data-text="&lt;p&gt;We analyze dozens of parameters daily: Jackpot amount and tax deductions, winning odds and the number of prize divisions, cost of a single line, and availability of such options as &quot;Multiplier,&quot; and much more to offer you the best possible lottery at the moment!&lt;/p&gt;&lt;p&gt;Choose a lottery with the highest score to win more and spend less!&lt;/p&gt;" data-toggle="tooltip" data-placement="bottom" title="Lottery rating from 1 to 10">
                                            <span class="icon-rating"></span>
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
                                                    <option value="/en/play-lottery/uk-lotto/?from=circular&easy_pick=1&extra_jackpot=" data-event-easy-pick="1">1 line for $ 7.41</option>
                                                    <option value="/en/play-lottery/uk-lotto/?from=circular&easy_pick=3&extra_jackpot=" data-event-easy-pick="1">3 lines for $ 21.12</option>
                                                    <option value="" disabled>–––––&nbsp;or&nbsp;–––––</option>
                                                    <option value="/en/play-lottery/uk-lotto/?from=circular&extra_jackpot=">Pick numbers</option>
                                                    <option class="light_version_site_hide" value="" disabled>––––––––––––</option>

                                                    <option class="opt-system" value="/en/play-lottery/uk-lotto/?from=index_lotto&system=1&extra_jackpot=">System &#128200;</option>
                                                </select>
                                                <a href="/en/play-lottery/uk-lotto/?from=circular&extra_jackpot=" class="btn btn-success event-easy-pick-main-btn">Play<span class="fa-solid fa-chevron-down"></span></a>
                                                <div class="lottery_sel_dropdown">
                                                    <div class="offers">
                                                        <p><a href="/en/play-lottery/uk-lotto/?from=circular&easy_pick=1&extra_jackpot=" class="event-easy-pick-offer">1 line for $ 7.41</a></p>
                                                        <p><a href="/en/play-lottery/uk-lotto/?from=circular&easy_pick=3&extra_jackpot=" class="event-easy-pick-offer">3 lines for $ 21.12</a></p>
                                                    </div>
                                                    <div class="or">–––––&nbsp;or&nbsp;–––––</div>
                                                    <p><a href="/en/play-lottery/uk-lotto/?from=circular&extra_jackpot=" class="lottery_sel_choose">Pick numbers</a></p>
                                                    <div class="or light_version_site_hide">–––––––––––––</div>


                                                    <p style="margin-top: 5px;"><a href="/en/play-lottery/uk-lotto/?from=index_lotto&system=1&extra_jackpot=" class="lottery_sel_choose game-type-ico lamp opt-system">System</a></p>

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
                                            <span class="icon-rating"></span>
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
                                            <span class="icon-rating"></span>
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
                                            <span class="icon-rating"></span>
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
                                            <span class="icon-rating"></span>
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
                                        <div class="lottery_item_img"><a href="/en/play-lottery/mexico-melate/?from=circular&extra_jackpot="><img src="https://static.cdnland.com/upload/images/logo/svg/melate_logo.svg" alt="Mexico Melate"/></a></div>
                                        <div class="lottery_item_val"><span class="jack"><b>M$ 30.1</b><br/><span class="mln_icon_extra text-nowrap">Million </span></span></div>
                                    </div>
                                    <div class="lottery_item_cont">
                                        <a href="#windowAlert" class="ratestars fancybox" onclick="yaGoals('CLEVER');" data-title="Today&#039;s Top-Rated Lotteries" data-text="&lt;p&gt;We analyze dozens of parameters daily: Jackpot amount and tax deductions, winning odds and the number of prize divisions, cost of a single line, and availability of such options as &quot;Multiplier,&quot; and much more to offer you the best possible lottery at the moment!&lt;/p&gt;&lt;p&gt;Choose a lottery with the highest score to win more and spend less!&lt;/p&gt;" data-toggle="tooltip" data-placement="bottom" title="Lottery rating from 1 to 10">
                                            <span class="icon-rating"></span>
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
                                                    <option value="/en/play-lottery/mexico-melate/?from=circular&easy_pick=5&extra_jackpot=" data-event-easy-pick="1">5 lines for $ 10.40</option>
                                                    <option value="/en/play-lottery/mexico-melate/?from=circular&easy_pick=10&extra_jackpot=" data-event-easy-pick="1">10 lines for $ 19.76</option>
                                                    <option value="" disabled>–––––&nbsp;or&nbsp;–––––</option>
                                                    <option value="/en/play-lottery/mexico-melate/?from=circular&extra_jackpot=">Pick numbers</option>
                                                    <option class="light_version_site_hide" value="" disabled>––––––––––––</option>

                                                    <option class="opt-system" value="/en/play-lottery/mexico-melate/?from=index_lotto&system=1&extra_jackpot=">System &#128200;</option>
                                                </select>
                                                <a href="/en/play-lottery/mexico-melate/?from=circular&extra_jackpot=" class="btn btn-success event-easy-pick-main-btn">Play<span class="fa-solid fa-chevron-down"></span></a>
                                                <div class="lottery_sel_dropdown">
                                                    <div class="offers">
                                                        <p><a href="/en/play-lottery/mexico-melate/?from=circular&easy_pick=5&extra_jackpot=" class="event-easy-pick-offer">5 lines for $ 10.40</a></p>
                                                        <p><a href="/en/play-lottery/mexico-melate/?from=circular&easy_pick=10&extra_jackpot=" class="event-easy-pick-offer">10 lines for $ 19.76</a></p>
                                                    </div>
                                                    <div class="or">–––––&nbsp;or&nbsp;–––––</div>
                                                    <p><a href="/en/play-lottery/mexico-melate/?from=circular&extra_jackpot=" class="lottery_sel_choose">Pick numbers</a></p>
                                                    <div class="or light_version_site_hide">–––––––––––––</div>


                                                    <p style="margin-top: 5px;"><a href="/en/play-lottery/mexico-melate/?from=index_lotto&system=1&extra_jackpot=" class="lottery_sel_choose game-type-ico lamp opt-system">System</a></p>

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
                                            <span class="icon-rating"></span>
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
                                            <span class="icon-rating"></span>
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
                                        <div class="lottery_item_img"><a href="/en/play-lottery/superenalotto/?from=circular&extra_jackpot="><img src="https://static.cdnland.com/upload/images/logo/svg/superenalotto.svg" alt="SuperEnalotto"/></a></div>
                                        <div class="lottery_item_val"><span class="jack"><b>€ 1.3+</b><br/><span class="mln_icon_extra text-nowrap">Million </span></span></div>
                                    </div>
                                    <div class="lottery_item_cont">
                                        <a href="#windowAlert" class="ratestars fancybox" onclick="yaGoals('CLEVER');" data-title="Today&#039;s Top-Rated Lotteries" data-text="&lt;p&gt;We analyze dozens of parameters daily: Jackpot amount and tax deductions, winning odds and the number of prize divisions, cost of a single line, and availability of such options as &quot;Multiplier,&quot; and much more to offer you the best possible lottery at the moment!&lt;/p&gt;&lt;p&gt;Choose a lottery with the highest score to win more and spend less!&lt;/p&gt;" data-toggle="tooltip" data-placement="bottom" title="Lottery rating from 1 to 10">
                                            <span class="icon-rating"></span>
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
                                                    <option value="/en/play-lottery/superenalotto/?from=circular&easy_pick=1&extra_jackpot=" data-event-easy-pick="1">1 line for $ 3.04</option>
                                                    <option value="/en/play-lottery/superenalotto/?from=circular&easy_pick=3&extra_jackpot=" data-event-easy-pick="1">3 lines for $ 8.85</option>
                                                    <option value="" disabled>–––––&nbsp;or&nbsp;–––––</option>
                                                    <option value="/en/play-lottery/superenalotto/?from=circular&extra_jackpot=">Pick numbers</option>
                                                    <option class="light_version_site_hide" value="" disabled>––––––––––––</option>
                                                    <option class="opt-syndicate" value="/en/play-lottery/superenalotto/?from=index_lotto&syndicates=1&extra_jackpot=">Syndicate &#128293;</option>
                                                    <option class="opt-system" value="/en/play-lottery/superenalotto/?from=index_lotto&system=1&extra_jackpot=">System &#128200;</option>
                                                </select>
                                                <a href="/en/play-lottery/superenalotto/?from=circular&extra_jackpot=" class="btn btn-success event-easy-pick-main-btn">Play<span class="fa-solid fa-chevron-down"></span></a>
                                                <div class="lottery_sel_dropdown">
                                                    <div class="offers">
                                                        <p><a href="/en/play-lottery/superenalotto/?from=circular&easy_pick=1&extra_jackpot=" class="event-easy-pick-offer">1 line for $ 3.04</a></p>
                                                        <p><a href="/en/play-lottery/superenalotto/?from=circular&easy_pick=3&extra_jackpot=" class="event-easy-pick-offer">3 lines for $ 8.85</a></p>
                                                    </div>
                                                    <div class="or">–––––&nbsp;or&nbsp;–––––</div>
                                                    <p><a href="/en/play-lottery/superenalotto/?from=circular&extra_jackpot=" class="lottery_sel_choose">Pick numbers</a></p>
                                                    <div class="or light_version_site_hide">–––––––––––––</div>

                                                    <p><a href="/en/play-lottery/superenalotto/?from=index_lotto&syndicates=1&extra_jackpot=" class="lottery_sel_choose game-type-ico fire opt-syndicate">Syndicate</a></p>


                                                    <p style="margin-top: 5px;"><a href="/en/play-lottery/superenalotto/?from=index_lotto&system=1&extra_jackpot=" class="lottery_sel_choose game-type-ico lamp opt-system">System</a></p>

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
                                            <span class="icon-rating"></span>
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
                                        <div class="lottery_item_img"><a href="/en/play-lottery/ie-daily-million/?from=circular&extra_jackpot="><img src="https://static.cdnland.com/upload/images/logo/svg/daily_million.svg" alt="Daily Million"/></a></div>
                                        <div class="lottery_item_val"><span class="jack"><b>€ 1</b><br/><span class="mln_icon_extra text-nowrap">Million </span></span></div>
                                    </div>
                                    <div class="lottery_item_cont">
                                        <a href="#windowAlert" class="ratestars fancybox" onclick="yaGoals('CLEVER');" data-title="Today&#039;s Top-Rated Lotteries" data-text="&lt;p&gt;We analyze dozens of parameters daily: Jackpot amount and tax deductions, winning odds and the number of prize divisions, cost of a single line, and availability of such options as &quot;Multiplier,&quot; and much more to offer you the best possible lottery at the moment!&lt;/p&gt;&lt;p&gt;Choose a lottery with the highest score to win more and spend less!&lt;/p&gt;" data-toggle="tooltip" data-placement="bottom" title="Lottery rating from 1 to 10">
                                            <span class="icon-rating"></span>
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
                                                    <option value="/en/play-lottery/ie-daily-million/?from=circular&easy_pick=3&extra_jackpot=" data-event-easy-pick="1">3 lines for $ 8.16</option>
                                                    <option value="/en/play-lottery/ie-daily-million/?from=circular&easy_pick=5&extra_jackpot=" data-event-easy-pick="1">5 lines for $ 12.92</option>
                                                    <option value="" disabled>–––––&nbsp;or&nbsp;–––––</option>
                                                    <option value="/en/play-lottery/ie-daily-million/?from=circular&extra_jackpot=">Pick numbers</option>
                                                    <option class="light_version_site_hide" value="" disabled>––––––––––––</option>

                                                    <option class="opt-system" value="/en/play-lottery/ie-daily-million/?from=index_lotto&system=1&extra_jackpot=">System &#128200;</option>
                                                </select>
                                                <a href="/en/play-lottery/ie-daily-million/?from=circular&extra_jackpot=" class="btn btn-success event-easy-pick-main-btn">Play<span class="fa-solid fa-chevron-down"></span></a>
                                                <div class="lottery_sel_dropdown">
                                                    <div class="offers">
                                                        <p><a href="/en/play-lottery/ie-daily-million/?from=circular&easy_pick=3&extra_jackpot=" class="event-easy-pick-offer">3 lines for $ 8.16</a></p>
                                                        <p><a href="/en/play-lottery/ie-daily-million/?from=circular&easy_pick=5&extra_jackpot=" class="event-easy-pick-offer">5 lines for $ 12.92</a></p>
                                                    </div>
                                                    <div class="or">–––––&nbsp;or&nbsp;–––––</div>
                                                    <p><a href="/en/play-lottery/ie-daily-million/?from=circular&extra_jackpot=" class="lottery_sel_choose">Pick numbers</a></p>
                                                    <div class="or light_version_site_hide">–––––––––––––</div>


                                                    <p style="margin-top: 5px;"><a href="/en/play-lottery/ie-daily-million/?from=index_lotto&system=1&extra_jackpot=" class="lottery_sel_choose game-type-ico lamp opt-system">System</a></p>

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div><div class="lottery_slider_item">
                                <div class="lottery_item">
                                    <div class="lottery_item_top" style="background-image: url('https://static.cdnland.com/upload/images/bg/za-lotto-652.svg');">
                                        <div class="lottery_item_img"><a href="/en/play-lottery/za-lotto-652/?from=circular&extra_jackpot="><img src="https://static.cdnland.com/upload/images/logo/svg/lotto_za.svg" alt="South Africa Lotto 6/52"/></a></div>
                                        <div class="lottery_item_val"><span class="jack"><b>R 19</b><br/><span class="mln_icon_extra text-nowrap">Million </span></span></div>
                                    </div>
                                    <div class="lottery_item_cont">
                                        <a href="#windowAlert" class="ratestars fancybox" onclick="yaGoals('CLEVER');" data-title="Today&#039;s Top-Rated Lotteries" data-text="&lt;p&gt;We analyze dozens of parameters daily: Jackpot amount and tax deductions, winning odds and the number of prize divisions, cost of a single line, and availability of such options as &quot;Multiplier,&quot; and much more to offer you the best possible lottery at the moment!&lt;/p&gt;&lt;p&gt;Choose a lottery with the highest score to win more and spend less!&lt;/p&gt;" data-toggle="tooltip" data-placement="bottom" title="Lottery rating from 1 to 10">
                                            <span class="icon-rating"></span>
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
                                                    <option value="/en/play-lottery/za-lotto-652/?from=circular&easy_pick=5&extra_jackpot=" data-event-easy-pick="1">5 lines for $ 4.20</option>
                                                    <option value="/en/play-lottery/za-lotto-652/?from=circular&easy_pick=10&extra_jackpot=" data-event-easy-pick="1">10 lines for $ 7.90</option>
                                                    <option value="" disabled>–––––&nbsp;or&nbsp;–––––</option>
                                                    <option value="/en/play-lottery/za-lotto-652/?from=circular&extra_jackpot=">Pick numbers</option>
                                                    <option class="light_version_site_hide" value="" disabled>––––––––––––</option>

                                                    <option class="opt-system" value="/en/play-lottery/za-lotto-652/?from=index_lotto&system=1&extra_jackpot=">System &#128200;</option>
                                                </select>
                                                <a href="/en/play-lottery/za-lotto-652/?from=circular&extra_jackpot=" class="btn btn-success event-easy-pick-main-btn">Play<span class="fa-solid fa-chevron-down"></span></a>
                                                <div class="lottery_sel_dropdown">
                                                    <div class="offers">
                                                        <p><a href="/en/play-lottery/za-lotto-652/?from=circular&easy_pick=5&extra_jackpot=" class="event-easy-pick-offer">5 lines for $ 4.20</a></p>
                                                        <p><a href="/en/play-lottery/za-lotto-652/?from=circular&easy_pick=10&extra_jackpot=" class="event-easy-pick-offer">10 lines for $ 7.90</a></p>
                                                    </div>
                                                    <div class="or">–––––&nbsp;or&nbsp;–––––</div>
                                                    <p><a href="/en/play-lottery/za-lotto-652/?from=circular&extra_jackpot=" class="lottery_sel_choose">Pick numbers</a></p>
                                                    <div class="or light_version_site_hide">–––––––––––––</div>


                                                    <p style="margin-top: 5px;"><a href="/en/play-lottery/za-lotto-652/?from=index_lotto&system=1&extra_jackpot=" class="lottery_sel_choose game-type-ico lamp opt-system">System</a></p>

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
                                            <span class="icon-rating"></span>
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
                                        <div class="lottery_item_img"><a href="/en/play-lottery/au-mon-wed-lotto/?from=circular&extra_jackpot="><img src="https://static.cdnland.com/upload/images/logo/svg/monwed_lotto.svg" alt="Monday &amp; Wednesday Lotto"/></a></div>
                                        <div class="lottery_item_val"><span class="jack"><b>A$ 1</b><br/><span class="mln_icon_extra text-nowrap">Million </span></span></div>
                                    </div>
                                    <div class="lottery_item_cont">
                                        <a href="#windowAlert" class="ratestars fancybox" onclick="yaGoals('CLEVER');" data-title="Today&#039;s Top-Rated Lotteries" data-text="&lt;p&gt;We analyze dozens of parameters daily: Jackpot amount and tax deductions, winning odds and the number of prize divisions, cost of a single line, and availability of such options as &quot;Multiplier,&quot; and much more to offer you the best possible lottery at the moment!&lt;/p&gt;&lt;p&gt;Choose a lottery with the highest score to win more and spend less!&lt;/p&gt;" data-toggle="tooltip" data-placement="bottom" title="Lottery rating from 1 to 10">
                                            <span class="icon-rating"></span>
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
                                                    <option value="/en/play-lottery/au-mon-wed-lotto/?from=circular&easy_pick=7&extra_jackpot=" data-event-easy-pick="1">7 lines for $ 7.31</option>
                                                    <option value="/en/play-lottery/au-mon-wed-lotto/?from=circular&easy_pick=14&extra_jackpot=" data-event-easy-pick="1">14 lines for $ 13.86</option>
                                                    <option value="" disabled>–––––&nbsp;or&nbsp;–––––</option>
                                                    <option value="/en/play-lottery/au-mon-wed-lotto/?from=circular&extra_jackpot=">Pick numbers</option>
                                                    <option class="light_version_site_hide" value="" disabled>––––––––––––</option>
                                                    <option class="opt-syndicate" value="/en/play-lottery/au-mon-wed-lotto/?from=index_lotto&syndicates=1&extra_jackpot=">Syndicate &#128293;</option>
                                                    <option class="opt-system" value="/en/play-lottery/au-mon-wed-lotto/?from=index_lotto&system=1&extra_jackpot=">System &#128200;</option>
                                                </select>
                                                <a href="/en/play-lottery/au-mon-wed-lotto/?from=circular&extra_jackpot=" class="btn btn-success event-easy-pick-main-btn">Play<span class="fa-solid fa-chevron-down"></span></a>
                                                <div class="lottery_sel_dropdown">
                                                    <div class="offers">
                                                        <p><a href="/en/play-lottery/au-mon-wed-lotto/?from=circular&easy_pick=7&extra_jackpot=" class="event-easy-pick-offer">7 lines for $ 7.31</a></p>
                                                        <p><a href="/en/play-lottery/au-mon-wed-lotto/?from=circular&easy_pick=14&extra_jackpot=" class="event-easy-pick-offer">14 lines for $ 13.86</a></p>
                                                    </div>
                                                    <div class="or">–––––&nbsp;or&nbsp;–––––</div>
                                                    <p><a href="/en/play-lottery/au-mon-wed-lotto/?from=circular&extra_jackpot=" class="lottery_sel_choose">Pick numbers</a></p>
                                                    <div class="or light_version_site_hide">–––––––––––––</div>

                                                    <p><a href="/en/play-lottery/au-mon-wed-lotto/?from=index_lotto&syndicates=1&extra_jackpot=" class="lottery_sel_choose game-type-ico fire opt-syndicate">Syndicate</a></p>


                                                    <p style="margin-top: 5px;"><a href="/en/play-lottery/au-mon-wed-lotto/?from=index_lotto&system=1&extra_jackpot=" class="lottery_sel_choose game-type-ico lamp opt-system">System</a></p>

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
                                            <span class="icon-rating"></span>
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
                                            <span class="icon-rating"></span>
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
                                        <div class="lottery_item_img"><a href="/en/play-lottery/bonoloto/?from=circular&extra_jackpot="><img src="https://static.cdnland.com/upload/images/logo/svg/bonoloto.svg" alt="BonoLoto"/></a></div>
                                        <div class="lottery_item_val"><span class="jack"><b>€ 400+</b><br/><span class="mln_icon_extra text-nowrap">Thousand </span></span></div>
                                    </div>
                                    <div class="lottery_item_cont">
                                        <a href="#windowAlert" class="ratestars fancybox" onclick="yaGoals('CLEVER');" data-title="Today&#039;s Top-Rated Lotteries" data-text="&lt;p&gt;We analyze dozens of parameters daily: Jackpot amount and tax deductions, winning odds and the number of prize divisions, cost of a single line, and availability of such options as &quot;Multiplier,&quot; and much more to offer you the best possible lottery at the moment!&lt;/p&gt;&lt;p&gt;Choose a lottery with the highest score to win more and spend less!&lt;/p&gt;" data-toggle="tooltip" data-placement="bottom" title="Lottery rating from 1 to 10">
                                            <span class="icon-rating"></span>
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
                                                    <option value="/en/play-lottery/bonoloto/?from=circular&extra_jackpot=">Pick numbers</option>
                                                    <option class="light_version_site_hide" value="" disabled>––––––––––––</option>

                                                    <option class="opt-system" value="/en/play-lottery/bonoloto/?from=index_lotto&system=1&extra_jackpot=">System &#128200;</option>
                                                </select>
                                                <a href="/en/play-lottery/bonoloto/?from=circular&extra_jackpot=" class="btn btn-success event-easy-pick-main-btn">Play<span class="fa-solid fa-chevron-down"></span></a>
                                                <div class="lottery_sel_dropdown">
                                                    <div class="offers">
                                                        <p><a href="/en/play-lottery/bonoloto/?from=circular&easy_pick=2&extra_jackpot=" class="event-easy-pick-offer">2 lines for $ 3.70</a></p>
                                                        <p><a href="/en/play-lottery/bonoloto/?from=circular&easy_pick=4&extra_jackpot=" class="event-easy-pick-offer">4 lines for $ 7.03</a></p>
                                                    </div>
                                                    <div class="or">–––––&nbsp;or&nbsp;–––––</div>
                                                    <p><a href="/en/play-lottery/bonoloto/?from=circular&extra_jackpot=" class="lottery_sel_choose">Pick numbers</a></p>
                                                    <div class="or light_version_site_hide">–––––––––––––</div>


                                                    <p style="margin-top: 5px;"><a href="/en/play-lottery/bonoloto/?from=index_lotto&system=1&extra_jackpot=" class="lottery_sel_choose game-type-ico lamp opt-system">System</a></p>

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
                                            <span class="icon-rating"></span>
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
                                            <span class="icon-rating"></span>
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
                                        <div class="lottery_item_img"><a href="/en/play-lottery/za-lotto-652/?from=circular&extra_jackpot="><img src="https://static.cdnland.com/upload/images/logo/svg/lotto_za.svg" alt="South Africa Lotto 6/52"/></a></div>
                                        <div class="lottery_item_val"><span class="jack"><b>R 19</b><br/><span class="mln_icon_extra text-nowrap">Million </span></span></div>
                                    </div>
                                    <div class="lottery_item_cont">
                                        <a href="#windowAlert" class="ratestars fancybox" onclick="yaGoals('CLEVER');" data-title="Today&#039;s Top-Rated Lotteries" data-text="&lt;p&gt;We analyze dozens of parameters daily: Jackpot amount and tax deductions, winning odds and the number of prize divisions, cost of a single line, and availability of such options as &quot;Multiplier,&quot; and much more to offer you the best possible lottery at the moment!&lt;/p&gt;&lt;p&gt;Choose a lottery with the highest score to win more and spend less!&lt;/p&gt;" data-toggle="tooltip" data-placement="bottom" title="Lottery rating from 1 to 10">
                                            <span class="icon-rating"></span>
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
                                                    <option value="/en/play-lottery/za-lotto-652/?from=circular&easy_pick=5&extra_jackpot=" data-event-easy-pick="1">5 lines for $ 4.20</option>
                                                    <option value="/en/play-lottery/za-lotto-652/?from=circular&easy_pick=10&extra_jackpot=" data-event-easy-pick="1">10 lines for $ 7.90</option>
                                                    <option value="" disabled>–––––&nbsp;or&nbsp;–––––</option>
                                                    <option value="/en/play-lottery/za-lotto-652/?from=circular&extra_jackpot=">Pick numbers</option>
                                                    <option class="light_version_site_hide" value="" disabled>––––––––––––</option>

                                                    <option class="opt-system" value="/en/play-lottery/za-lotto-652/?from=index_lotto&system=1&extra_jackpot=">System &#128200;</option>
                                                </select>
                                                <a href="/en/play-lottery/za-lotto-652/?from=circular&extra_jackpot=" class="btn btn-success event-easy-pick-main-btn">Play<span class="fa-solid fa-chevron-down"></span></a>
                                                <div class="lottery_sel_dropdown">
                                                    <div class="offers">
                                                        <p><a href="/en/play-lottery/za-lotto-652/?from=circular&easy_pick=5&extra_jackpot=" class="event-easy-pick-offer">5 lines for $ 4.20</a></p>
                                                        <p><a href="/en/play-lottery/za-lotto-652/?from=circular&easy_pick=10&extra_jackpot=" class="event-easy-pick-offer">10 lines for $ 7.90</a></p>
                                                    </div>
                                                    <div class="or">–––––&nbsp;or&nbsp;–––––</div>
                                                    <p><a href="/en/play-lottery/za-lotto-652/?from=circular&extra_jackpot=" class="lottery_sel_choose">Pick numbers</a></p>
                                                    <div class="or light_version_site_hide">–––––––––––––</div>


                                                    <p style="margin-top: 5px;"><a href="/en/play-lottery/za-lotto-652/?from=index_lotto&system=1&extra_jackpot=" class="lottery_sel_choose game-type-ico lamp opt-system">System</a></p>

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div><div class="lottery_slider_item">
                                <div class="lottery_item">
                                    <div class="lottery_item_top" style="background-image: url('https://static.cdnland.com/upload/images/bg/pl-poland-lotto.svg');">
                                        <div class="lottery_item_img"><a href="/en/play-lottery/poland-lotto/?from=circular&extra_jackpot="><img src="https://static.cdnland.com/upload/images/logo/svg/lotto_pl.svg" alt="Poland Lotto"/></a></div>
                                        <div class="lottery_item_val"><span class="jack"><b>zł 18</b><br/><span class="mln_icon_extra text-nowrap">Million </span></span></div>
                                    </div>
                                    <div class="lottery_item_cont">
                                        <a href="#windowAlert" class="ratestars fancybox" onclick="yaGoals('CLEVER');" data-title="Today&#039;s Top-Rated Lotteries" data-text="&lt;p&gt;We analyze dozens of parameters daily: Jackpot amount and tax deductions, winning odds and the number of prize divisions, cost of a single line, and availability of such options as &quot;Multiplier,&quot; and much more to offer you the best possible lottery at the moment!&lt;/p&gt;&lt;p&gt;Choose a lottery with the highest score to win more and spend less!&lt;/p&gt;" data-toggle="tooltip" data-placement="bottom" title="Lottery rating from 1 to 10">
                                            <span class="icon-rating"></span>
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
                                                    <option value="/en/play-lottery/poland-lotto/?from=circular&easy_pick=3&extra_jackpot=" data-event-easy-pick="1">3 lines for $ 5.22</option>
                                                    <option value="/en/play-lottery/poland-lotto/?from=circular&easy_pick=5&extra_jackpot=" data-event-easy-pick="1">5 lines for $ 8.09</option>
                                                    <option value="" disabled>–––––&nbsp;or&nbsp;–––––</option>
                                                    <option value="/en/play-lottery/poland-lotto/?from=circular&extra_jackpot=">Pick numbers</option>
                                                    <option class="light_version_site_hide" value="" disabled>––––––––––––</option>

                                                    <option class="opt-system" value="/en/play-lottery/poland-lotto/?from=index_lotto&system=1&extra_jackpot=">System &#128200;</option>
                                                </select>
                                                <a href="/en/play-lottery/poland-lotto/?from=circular&extra_jackpot=" class="btn btn-success event-easy-pick-main-btn">Play<span class="fa-solid fa-chevron-down"></span></a>
                                                <div class="lottery_sel_dropdown">
                                                    <div class="offers">
                                                        <p><a href="/en/play-lottery/poland-lotto/?from=circular&easy_pick=3&extra_jackpot=" class="event-easy-pick-offer">3 lines for $ 5.22</a></p>
                                                        <p><a href="/en/play-lottery/poland-lotto/?from=circular&easy_pick=5&extra_jackpot=" class="event-easy-pick-offer">5 lines for $ 8.09</a></p>
                                                    </div>
                                                    <div class="or">–––––&nbsp;or&nbsp;–––––</div>
                                                    <p><a href="/en/play-lottery/poland-lotto/?from=circular&extra_jackpot=" class="lottery_sel_choose">Pick numbers</a></p>
                                                    <div class="or light_version_site_hide">–––––––––––––</div>


                                                    <p style="margin-top: 5px;"><a href="/en/play-lottery/poland-lotto/?from=index_lotto&system=1&extra_jackpot=" class="lottery_sel_choose game-type-ico lamp opt-system">System</a></p>

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div><div class="lottery_slider_item">
                                <div class="lottery_item">
                                    <div class="lottery_item_top" style="background-image: url('https://static.cdnland.com/upload/images/bg/ir-daily_million.svg');">
                                        <div class="lottery_item_img"><a href="/en/play-lottery/ie-daily-million/?from=circular&extra_jackpot="><img src="https://static.cdnland.com/upload/images/logo/svg/daily_million.svg" alt="Daily Million"/></a></div>
                                        <div class="lottery_item_val"><span class="jack"><b>€ 1</b><br/><span class="mln_icon_extra text-nowrap">Million </span></span></div>
                                    </div>
                                    <div class="lottery_item_cont">
                                        <a href="#windowAlert" class="ratestars fancybox" onclick="yaGoals('CLEVER');" data-title="Today&#039;s Top-Rated Lotteries" data-text="&lt;p&gt;We analyze dozens of parameters daily: Jackpot amount and tax deductions, winning odds and the number of prize divisions, cost of a single line, and availability of such options as &quot;Multiplier,&quot; and much more to offer you the best possible lottery at the moment!&lt;/p&gt;&lt;p&gt;Choose a lottery with the highest score to win more and spend less!&lt;/p&gt;" data-toggle="tooltip" data-placement="bottom" title="Lottery rating from 1 to 10">
                                            <span class="icon-rating"></span>
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
                                                    <option value="/en/play-lottery/ie-daily-million/?from=circular&easy_pick=3&extra_jackpot=" data-event-easy-pick="1">3 lines for $ 8.16</option>
                                                    <option value="/en/play-lottery/ie-daily-million/?from=circular&easy_pick=5&extra_jackpot=" data-event-easy-pick="1">5 lines for $ 12.92</option>
                                                    <option value="" disabled>–––––&nbsp;or&nbsp;–––––</option>
                                                    <option value="/en/play-lottery/ie-daily-million/?from=circular&extra_jackpot=">Pick numbers</option>
                                                    <option class="light_version_site_hide" value="" disabled>––––––––––––</option>

                                                    <option class="opt-system" value="/en/play-lottery/ie-daily-million/?from=index_lotto&system=1&extra_jackpot=">System &#128200;</option>
                                                </select>
                                                <a href="/en/play-lottery/ie-daily-million/?from=circular&extra_jackpot=" class="btn btn-success event-easy-pick-main-btn">Play<span class="fa-solid fa-chevron-down"></span></a>
                                                <div class="lottery_sel_dropdown">
                                                    <div class="offers">
                                                        <p><a href="/en/play-lottery/ie-daily-million/?from=circular&easy_pick=3&extra_jackpot=" class="event-easy-pick-offer">3 lines for $ 8.16</a></p>
                                                        <p><a href="/en/play-lottery/ie-daily-million/?from=circular&easy_pick=5&extra_jackpot=" class="event-easy-pick-offer">5 lines for $ 12.92</a></p>
                                                    </div>
                                                    <div class="or">–––––&nbsp;or&nbsp;–––––</div>
                                                    <p><a href="/en/play-lottery/ie-daily-million/?from=circular&extra_jackpot=" class="lottery_sel_choose">Pick numbers</a></p>
                                                    <div class="or light_version_site_hide">–––––––––––––</div>


                                                    <p style="margin-top: 5px;"><a href="/en/play-lottery/ie-daily-million/?from=index_lotto&system=1&extra_jackpot=" class="lottery_sel_choose game-type-ico lamp opt-system">System</a></p>

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
                                            <span class="icon-rating"></span>
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
                                            <span class="icon-rating"></span>
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
                                            <span class="icon-rating"></span>
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
                                            <span class="icon-rating"></span>
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
                                        <div class="lottery_item_img"><a href="/en/play-lottery/lotto-america/?from=circular&extra_jackpot="><img src="https://static.cdnland.com/upload/images/logo/svg/lotto_america.svg" alt="Lotto America"/></a></div>
                                        <div class="lottery_item_val"><span class="jack"><b>$ 40.03</b><br/><span class="mln_icon_extra text-nowrap">Million </span></span></div>
                                    </div>
                                    <div class="lottery_item_cont">
                                        <a href="#windowAlert" class="ratestars fancybox" onclick="yaGoals('CLEVER');" data-title="Today&#039;s Top-Rated Lotteries" data-text="&lt;p&gt;We analyze dozens of parameters daily: Jackpot amount and tax deductions, winning odds and the number of prize divisions, cost of a single line, and availability of such options as &quot;Multiplier,&quot; and much more to offer you the best possible lottery at the moment!&lt;/p&gt;&lt;p&gt;Choose a lottery with the highest score to win more and spend less!&lt;/p&gt;" data-toggle="tooltip" data-placement="bottom" title="Lottery rating from 1 to 10">
                                            <span class="icon-rating"></span>
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
                                                    <option value="/en/play-lottery/lotto-america/?from=circular&easy_pick=1&extra_jackpot=" data-event-easy-pick="1">1 line for $ 3.29</option>
                                                    <option value="/en/play-lottery/lotto-america/?from=circular&easy_pick=3&extra_jackpot=" data-event-easy-pick="1">3 lines for $ 9.57</option>
                                                    <option value="" disabled>–––––&nbsp;or&nbsp;–––––</option>
                                                    <option value="/en/play-lottery/lotto-america/?from=circular&extra_jackpot=">Pick numbers</option>
                                                    <option class="light_version_site_hide" value="" disabled>––––––––––––</option>

                                                    <option class="opt-system" value="/en/play-lottery/lotto-america/?from=index_lotto&system=1&extra_jackpot=">System &#128200;</option>
                                                </select>
                                                <a href="/en/play-lottery/lotto-america/?from=circular&extra_jackpot=" class="btn btn-success event-easy-pick-main-btn">Play<span class="fa-solid fa-chevron-down"></span></a>
                                                <div class="lottery_sel_dropdown">
                                                    <div class="offers">
                                                        <p><a href="/en/play-lottery/lotto-america/?from=circular&easy_pick=1&extra_jackpot=" class="event-easy-pick-offer">1 line for $ 3.29</a></p>
                                                        <p><a href="/en/play-lottery/lotto-america/?from=circular&easy_pick=3&extra_jackpot=" class="event-easy-pick-offer">3 lines for $ 9.57</a></p>
                                                    </div>
                                                    <div class="or">–––––&nbsp;or&nbsp;–––––</div>
                                                    <p><a href="/en/play-lottery/lotto-america/?from=circular&extra_jackpot=" class="lottery_sel_choose">Pick numbers</a></p>
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
                                        <div class="lottery_item_img"><a href="/en/play-lottery/lotto-649/?from=circular&extra_jackpot="><img src="https://static.cdnland.com/upload/images/logo/svg/649_lotto.svg" alt="Lotto 6/49"/></a></div>
                                        <div class="lottery_item_val"><span class="jack"><b>C$ 5</b><br/><span class="mln_icon_extra text-nowrap">Million </span></span></div>
                                    </div>
                                    <div class="lottery_item_cont">
                                        <a href="#windowAlert" class="ratestars fancybox" onclick="yaGoals('CLEVER');" data-title="Today&#039;s Top-Rated Lotteries" data-text="&lt;p&gt;We analyze dozens of parameters daily: Jackpot amount and tax deductions, winning odds and the number of prize divisions, cost of a single line, and availability of such options as &quot;Multiplier,&quot; and much more to offer you the best possible lottery at the moment!&lt;/p&gt;&lt;p&gt;Choose a lottery with the highest score to win more and spend less!&lt;/p&gt;" data-toggle="tooltip" data-placement="bottom" title="Lottery rating from 1 to 10">
                                            <span class="icon-rating"></span>
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
                                                    <option value="/en/play-lottery/lotto-649/?from=circular&easy_pick=1&extra_jackpot=" data-event-easy-pick="1">1 line for $ 5.91</option>
                                                    <option value="/en/play-lottery/lotto-649/?from=circular&easy_pick=3&extra_jackpot=" data-event-easy-pick="1">3 lines for $ 16.67</option>
                                                    <option value="" disabled>–––––&nbsp;or&nbsp;–––––</option>
                                                    <option value="/en/play-lottery/lotto-649/?from=circular&extra_jackpot=">Pick numbers</option>
                                                    <option class="light_version_site_hide" value="" disabled>––––––––––––</option>

                                                    <option class="opt-system" value="/en/play-lottery/lotto-649/?from=index_lotto&system=1&extra_jackpot=">System &#128200;</option>
                                                </select>
                                                <a href="/en/play-lottery/lotto-649/?from=circular&extra_jackpot=" class="btn btn-success event-easy-pick-main-btn">Play<span class="fa-solid fa-chevron-down"></span></a>
                                                <div class="lottery_sel_dropdown">
                                                    <div class="offers">
                                                        <p><a href="/en/play-lottery/lotto-649/?from=circular&easy_pick=1&extra_jackpot=" class="event-easy-pick-offer">1 line for $ 5.91</a></p>
                                                        <p><a href="/en/play-lottery/lotto-649/?from=circular&easy_pick=3&extra_jackpot=" class="event-easy-pick-offer">3 lines for $ 16.67</a></p>
                                                    </div>
                                                    <div class="or">–––––&nbsp;or&nbsp;–––––</div>
                                                    <p><a href="/en/play-lottery/lotto-649/?from=circular&extra_jackpot=" class="lottery_sel_choose">Pick numbers</a></p>
                                                    <div class="or light_version_site_hide">–––––––––––––</div>


                                                    <p style="margin-top: 5px;"><a href="/en/play-lottery/lotto-649/?from=index_lotto&system=1&extra_jackpot=" class="lottery_sel_choose game-type-ico lamp opt-system">System</a></p>

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
                                            <span class="icon-rating"></span>
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
                                        <div class="lottery_item_img"><a href="/en/play-lottery/powerball/?from=circular&extra_jackpot="><img src="https://static.cdnland.com/upload/images/logo/svg/powerball.svg" alt="Powerball"/></a></div>
                                        <div class="lottery_item_val"><span class="jack"><b>$ 147</b><br/><span class="mln_icon_extra text-nowrap">Million </span></span></div>
                                    </div>
                                    <div class="lottery_item_cont">
                                        <a href="#windowAlert" class="ratestars fancybox" onclick="yaGoals('CLEVER');" data-title="Today&#039;s Top-Rated Lotteries" data-text="&lt;p&gt;We analyze dozens of parameters daily: Jackpot amount and tax deductions, winning odds and the number of prize divisions, cost of a single line, and availability of such options as &quot;Multiplier,&quot; and much more to offer you the best possible lottery at the moment!&lt;/p&gt;&lt;p&gt;Choose a lottery with the highest score to win more and spend less!&lt;/p&gt;" data-toggle="tooltip" data-placement="bottom" title="Lottery rating from 1 to 10">
                                            <span class="icon-rating"></span>
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
                                                    <option value="/en/play-lottery/powerball/?from=circular&easy_pick=1&extra_jackpot=" data-event-easy-pick="1">1 line for $ 5.29</option>
                                                    <option value="/en/play-lottery/powerball/?from=circular&easy_pick=3&extra_jackpot=" data-event-easy-pick="1">3 lines for $ 14.92</option>
                                                    <option value="" disabled>–––––&nbsp;or&nbsp;–––––</option>
                                                    <option value="/en/play-lottery/powerball/?from=circular&extra_jackpot=">Pick numbers</option>
                                                    <option class="light_version_site_hide" value="" disabled>––––––––––––</option>
                                                    <option class="opt-syndicate" value="/en/play-lottery/powerball/?from=index_lotto&syndicates=1&extra_jackpot=">Syndicate &#128293;</option>
                                                    <option class="opt-system" value="/en/play-lottery/powerball/?from=index_lotto&system=1&extra_jackpot=">System &#128200;</option>
                                                </select>
                                                <a href="/en/play-lottery/powerball/?from=circular&extra_jackpot=" class="btn btn-success event-easy-pick-main-btn">Play<span class="fa-solid fa-chevron-down"></span></a>
                                                <div class="lottery_sel_dropdown">
                                                    <div class="offers">
                                                        <p><a href="/en/play-lottery/powerball/?from=circular&easy_pick=1&extra_jackpot=" class="event-easy-pick-offer">1 line for $ 5.29</a></p>
                                                        <p><a href="/en/play-lottery/powerball/?from=circular&easy_pick=3&extra_jackpot=" class="event-easy-pick-offer">3 lines for $ 14.92</a></p>
                                                    </div>
                                                    <div class="or">–––––&nbsp;or&nbsp;–––––</div>
                                                    <p><a href="/en/play-lottery/powerball/?from=circular&extra_jackpot=" class="lottery_sel_choose">Pick numbers</a></p>
                                                    <div class="or light_version_site_hide">–––––––––––––</div>

                                                    <p><a href="/en/play-lottery/powerball/?from=index_lotto&syndicates=1&extra_jackpot=" class="lottery_sel_choose game-type-ico fire opt-syndicate">Syndicate</a></p>


                                                    <p style="margin-top: 5px;"><a href="/en/play-lottery/powerball/?from=index_lotto&system=1&extra_jackpot=" class="lottery_sel_choose game-type-ico lamp opt-system">System</a></p>

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div><div class="lottery_slider_item">
                                <div class="lottery_item">
                                    <div class="lottery_item_top" style="background-image: url('https://static.cdnland.com/upload/images/bg/us-superlotto-plus.svg');">
                                        <div class="lottery_item_img"><a href="/en/play-lottery/superlotto-plus/?from=circular&extra_jackpot="><img src="https://static.cdnland.com/upload/images/logo/svg/superlotto-plus.svg" alt="SuperLotto Plus"/></a></div>
                                        <div class="lottery_item_val"><span class="jack"><b>$ 46</b><br/><span class="mln_icon_extra text-nowrap">Million </span></span></div>
                                    </div>
                                    <div class="lottery_item_cont">
                                        <a href="#windowAlert" class="ratestars fancybox" onclick="yaGoals('CLEVER');" data-title="Today&#039;s Top-Rated Lotteries" data-text="&lt;p&gt;We analyze dozens of parameters daily: Jackpot amount and tax deductions, winning odds and the number of prize divisions, cost of a single line, and availability of such options as &quot;Multiplier,&quot; and much more to offer you the best possible lottery at the moment!&lt;/p&gt;&lt;p&gt;Choose a lottery with the highest score to win more and spend less!&lt;/p&gt;" data-toggle="tooltip" data-placement="bottom" title="Lottery rating from 1 to 10">
                                            <span class="icon-rating"></span>
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
                                                    <option value="/en/play-lottery/superlotto-plus/?from=circular&easy_pick=2&extra_jackpot=" data-event-easy-pick="1">2 lines for $ 5.98</option>
                                                    <option value="/en/play-lottery/superlotto-plus/?from=circular&easy_pick=3&extra_jackpot=" data-event-easy-pick="1">3 lines for $ 8.52</option>
                                                    <option value="" disabled>–––––&nbsp;or&nbsp;–––––</option>
                                                    <option value="/en/play-lottery/superlotto-plus/?from=circular&extra_jackpot=">Pick numbers</option>
                                                    <option class="light_version_site_hide" value="" disabled>––––––––––––</option>
                                                    <option class="opt-syndicate" value="/en/play-lottery/superlotto-plus/?from=index_lotto&syndicates=1&extra_jackpot=">Syndicate &#128293;</option>
                                                    <option class="opt-system" value="/en/play-lottery/superlotto-plus/?from=index_lotto&system=1&extra_jackpot=">System &#128200;</option>
                                                </select>
                                                <a href="/en/play-lottery/superlotto-plus/?from=circular&extra_jackpot=" class="btn btn-success event-easy-pick-main-btn">Play<span class="fa-solid fa-chevron-down"></span></a>
                                                <div class="lottery_sel_dropdown">
                                                    <div class="offers">
                                                        <p><a href="/en/play-lottery/superlotto-plus/?from=circular&easy_pick=2&extra_jackpot=" class="event-easy-pick-offer">2 lines for $ 5.98</a></p>
                                                        <p><a href="/en/play-lottery/superlotto-plus/?from=circular&easy_pick=3&extra_jackpot=" class="event-easy-pick-offer">3 lines for $ 8.52</a></p>
                                                    </div>
                                                    <div class="or">–––––&nbsp;or&nbsp;–––––</div>
                                                    <p><a href="/en/play-lottery/superlotto-plus/?from=circular&extra_jackpot=" class="lottery_sel_choose">Pick numbers</a></p>
                                                    <div class="or light_version_site_hide">–––––––––––––</div>

                                                    <p><a href="/en/play-lottery/superlotto-plus/?from=index_lotto&syndicates=1&extra_jackpot=" class="lottery_sel_choose game-type-ico fire opt-syndicate">Syndicate</a></p>


                                                    <p style="margin-top: 5px;"><a href="/en/play-lottery/superlotto-plus/?from=index_lotto&system=1&extra_jackpot=" class="lottery_sel_choose game-type-ico lamp opt-system">System</a></p>

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
                                            <span class="icon-rating"></span>
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
                                        <div class="lottery_item_img"><a href="/en/play-lottery/au-set-for-life/?from=circular&extra_jackpot="><img src="https://static.cdnland.com/upload/images/logo/svg/set_for_life.svg" alt="Set for Life (AU)"/></a></div>
                                        <div class="lottery_item_val"><span class="jack"><b>A$ 4.8</b><br/><span class="mln_icon_extra text-nowrap">Million </span></span></div>
                                    </div>
                                    <div class="lottery_item_cont">
                                        <a href="#windowAlert" class="ratestars fancybox" onclick="yaGoals('CLEVER');" data-title="Today&#039;s Top-Rated Lotteries" data-text="&lt;p&gt;We analyze dozens of parameters daily: Jackpot amount and tax deductions, winning odds and the number of prize divisions, cost of a single line, and availability of such options as &quot;Multiplier,&quot; and much more to offer you the best possible lottery at the moment!&lt;/p&gt;&lt;p&gt;Choose a lottery with the highest score to win more and spend less!&lt;/p&gt;" data-toggle="tooltip" data-placement="bottom" title="Lottery rating from 1 to 10">
                                            <span class="icon-rating"></span>
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
                                                    <option value="/en/play-lottery/au-set-for-life/?from=circular&easy_pick=7&extra_jackpot=" data-event-easy-pick="1">7 lines for $ 7.49</option>
                                                    <option value="/en/play-lottery/au-set-for-life/?from=circular&easy_pick=14&extra_jackpot=" data-event-easy-pick="1">14 lines for $ 14.23</option>
                                                    <option value="" disabled>–––––&nbsp;or&nbsp;–––––</option>
                                                    <option value="/en/play-lottery/au-set-for-life/?from=circular&extra_jackpot=">Pick numbers</option>
                                                    <option class="light_version_site_hide" value="" disabled>––––––––––––</option>

                                                    <option class="opt-system" value="/en/play-lottery/au-set-for-life/?from=index_lotto&system=1&extra_jackpot=">System &#128200;</option>
                                                </select>
                                                <a href="/en/play-lottery/au-set-for-life/?from=circular&extra_jackpot=" class="btn btn-success event-easy-pick-main-btn">Play<span class="fa-solid fa-chevron-down"></span></a>
                                                <div class="lottery_sel_dropdown">
                                                    <div class="offers">
                                                        <p><a href="/en/play-lottery/au-set-for-life/?from=circular&easy_pick=7&extra_jackpot=" class="event-easy-pick-offer">7 lines for $ 7.49</a></p>
                                                        <p><a href="/en/play-lottery/au-set-for-life/?from=circular&easy_pick=14&extra_jackpot=" class="event-easy-pick-offer">14 lines for $ 14.23</a></p>
                                                    </div>
                                                    <div class="or">–––––&nbsp;or&nbsp;–––––</div>
                                                    <p><a href="/en/play-lottery/au-set-for-life/?from=circular&extra_jackpot=" class="lottery_sel_choose">Pick numbers</a></p>
                                                    <div class="or light_version_site_hide">–––––––––––––</div>


                                                    <p style="margin-top: 5px;"><a href="/en/play-lottery/au-set-for-life/?from=index_lotto&system=1&extra_jackpot=" class="lottery_sel_choose game-type-ico lamp opt-system">System</a></p>

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
                                            <span class="icon-rating"></span>
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
                                            <span class="icon-rating"></span>
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
                                        <div class="lottery_item_img"><a href="/en/play-lottery/mexico-melate/?from=circular&extra_jackpot="><img src="https://static.cdnland.com/upload/images/logo/svg/melate_logo.svg" alt="Mexico Melate"/></a></div>
                                        <div class="lottery_item_val"><span class="jack"><b>M$ 30.1</b><br/><span class="mln_icon_extra text-nowrap">Million </span></span></div>
                                    </div>
                                    <div class="lottery_item_cont">
                                        <a href="#windowAlert" class="ratestars fancybox" onclick="yaGoals('CLEVER');" data-title="Today&#039;s Top-Rated Lotteries" data-text="&lt;p&gt;We analyze dozens of parameters daily: Jackpot amount and tax deductions, winning odds and the number of prize divisions, cost of a single line, and availability of such options as &quot;Multiplier,&quot; and much more to offer you the best possible lottery at the moment!&lt;/p&gt;&lt;p&gt;Choose a lottery with the highest score to win more and spend less!&lt;/p&gt;" data-toggle="tooltip" data-placement="bottom" title="Lottery rating from 1 to 10">
                                            <span class="icon-rating"></span>
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
                                                    <option value="/en/play-lottery/mexico-melate/?from=circular&easy_pick=5&extra_jackpot=" data-event-easy-pick="1">5 lines for $ 10.40</option>
                                                    <option value="/en/play-lottery/mexico-melate/?from=circular&easy_pick=10&extra_jackpot=" data-event-easy-pick="1">10 lines for $ 19.76</option>
                                                    <option value="" disabled>–––––&nbsp;or&nbsp;–––––</option>
                                                    <option value="/en/play-lottery/mexico-melate/?from=circular&extra_jackpot=">Pick numbers</option>
                                                    <option class="light_version_site_hide" value="" disabled>––––––––––––</option>

                                                    <option class="opt-system" value="/en/play-lottery/mexico-melate/?from=index_lotto&system=1&extra_jackpot=">System &#128200;</option>
                                                </select>
                                                <a href="/en/play-lottery/mexico-melate/?from=circular&extra_jackpot=" class="btn btn-success event-easy-pick-main-btn">Play<span class="fa-solid fa-chevron-down"></span></a>
                                                <div class="lottery_sel_dropdown">
                                                    <div class="offers">
                                                        <p><a href="/en/play-lottery/mexico-melate/?from=circular&easy_pick=5&extra_jackpot=" class="event-easy-pick-offer">5 lines for $ 10.40</a></p>
                                                        <p><a href="/en/play-lottery/mexico-melate/?from=circular&easy_pick=10&extra_jackpot=" class="event-easy-pick-offer">10 lines for $ 19.76</a></p>
                                                    </div>
                                                    <div class="or">–––––&nbsp;or&nbsp;–––––</div>
                                                    <p><a href="/en/play-lottery/mexico-melate/?from=circular&extra_jackpot=" class="lottery_sel_choose">Pick numbers</a></p>
                                                    <div class="or light_version_site_hide">–––––––––––––</div>


                                                    <p style="margin-top: 5px;"><a href="/en/play-lottery/mexico-melate/?from=index_lotto&system=1&extra_jackpot=" class="lottery_sel_choose game-type-ico lamp opt-system">System</a></p>

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div><div class="lottery_slider_item">
                                <div class="lottery_item">
                                    <div class="lottery_item_top" style="background-image: url('https://static.cdnland.com/upload/images/bg/au-mon-wed-lotto.svg');">
                                        <div class="lottery_item_img"><a href="/en/play-lottery/au-mon-wed-lotto/?from=circular&extra_jackpot="><img src="https://static.cdnland.com/upload/images/logo/svg/monwed_lotto.svg" alt="Monday &amp; Wednesday Lotto"/></a></div>
                                        <div class="lottery_item_val"><span class="jack"><b>A$ 1</b><br/><span class="mln_icon_extra text-nowrap">Million </span></span></div>
                                    </div>
                                    <div class="lottery_item_cont">
                                        <a href="#windowAlert" class="ratestars fancybox" onclick="yaGoals('CLEVER');" data-title="Today&#039;s Top-Rated Lotteries" data-text="&lt;p&gt;We analyze dozens of parameters daily: Jackpot amount and tax deductions, winning odds and the number of prize divisions, cost of a single line, and availability of such options as &quot;Multiplier,&quot; and much more to offer you the best possible lottery at the moment!&lt;/p&gt;&lt;p&gt;Choose a lottery with the highest score to win more and spend less!&lt;/p&gt;" data-toggle="tooltip" data-placement="bottom" title="Lottery rating from 1 to 10">
                                            <span class="icon-rating"></span>
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
                                                    <option value="/en/play-lottery/au-mon-wed-lotto/?from=circular&easy_pick=7&extra_jackpot=" data-event-easy-pick="1">7 lines for $ 7.31</option>
                                                    <option value="/en/play-lottery/au-mon-wed-lotto/?from=circular&easy_pick=14&extra_jackpot=" data-event-easy-pick="1">14 lines for $ 13.86</option>
                                                    <option value="" disabled>–––––&nbsp;or&nbsp;–––––</option>
                                                    <option value="/en/play-lottery/au-mon-wed-lotto/?from=circular&extra_jackpot=">Pick numbers</option>
                                                    <option class="light_version_site_hide" value="" disabled>––––––––––––</option>
                                                    <option class="opt-syndicate" value="/en/play-lottery/au-mon-wed-lotto/?from=index_lotto&syndicates=1&extra_jackpot=">Syndicate &#128293;</option>
                                                    <option class="opt-system" value="/en/play-lottery/au-mon-wed-lotto/?from=index_lotto&system=1&extra_jackpot=">System &#128200;</option>
                                                </select>
                                                <a href="/en/play-lottery/au-mon-wed-lotto/?from=circular&extra_jackpot=" class="btn btn-success event-easy-pick-main-btn">Play<span class="fa-solid fa-chevron-down"></span></a>
                                                <div class="lottery_sel_dropdown">
                                                    <div class="offers">
                                                        <p><a href="/en/play-lottery/au-mon-wed-lotto/?from=circular&easy_pick=7&extra_jackpot=" class="event-easy-pick-offer">7 lines for $ 7.31</a></p>
                                                        <p><a href="/en/play-lottery/au-mon-wed-lotto/?from=circular&easy_pick=14&extra_jackpot=" class="event-easy-pick-offer">14 lines for $ 13.86</a></p>
                                                    </div>
                                                    <div class="or">–––––&nbsp;or&nbsp;–––––</div>
                                                    <p><a href="/en/play-lottery/au-mon-wed-lotto/?from=circular&extra_jackpot=" class="lottery_sel_choose">Pick numbers</a></p>
                                                    <div class="or light_version_site_hide">–––––––––––––</div>

                                                    <p><a href="/en/play-lottery/au-mon-wed-lotto/?from=index_lotto&syndicates=1&extra_jackpot=" class="lottery_sel_choose game-type-ico fire opt-syndicate">Syndicate</a></p>


                                                    <p style="margin-top: 5px;"><a href="/en/play-lottery/au-mon-wed-lotto/?from=index_lotto&system=1&extra_jackpot=" class="lottery_sel_choose game-type-ico lamp opt-system">System</a></p>

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
                                            <span class="icon-rating"></span>
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
                                            <span class="icon-rating"></span>
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
                                        <div class="lottery_item_img"><a href="/en/play-lottery/bonoloto/?from=circular&extra_jackpot="><img src="https://static.cdnland.com/upload/images/logo/svg/bonoloto.svg" alt="BonoLoto"/></a></div>
                                        <div class="lottery_item_val"><span class="jack"><b>€ 400+</b><br/><span class="mln_icon_extra text-nowrap">Thousand </span></span></div>
                                    </div>
                                    <div class="lottery_item_cont">
                                        <a href="#windowAlert" class="ratestars fancybox" onclick="yaGoals('CLEVER');" data-title="Today&#039;s Top-Rated Lotteries" data-text="&lt;p&gt;We analyze dozens of parameters daily: Jackpot amount and tax deductions, winning odds and the number of prize divisions, cost of a single line, and availability of such options as &quot;Multiplier,&quot; and much more to offer you the best possible lottery at the moment!&lt;/p&gt;&lt;p&gt;Choose a lottery with the highest score to win more and spend less!&lt;/p&gt;" data-toggle="tooltip" data-placement="bottom" title="Lottery rating from 1 to 10">
                                            <span class="icon-rating"></span>
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
                                                    <option value="/en/play-lottery/bonoloto/?from=circular&extra_jackpot=">Pick numbers</option>
                                                    <option class="light_version_site_hide" value="" disabled>––––––––––––</option>

                                                    <option class="opt-system" value="/en/play-lottery/bonoloto/?from=index_lotto&system=1&extra_jackpot=">System &#128200;</option>
                                                </select>
                                                <a href="/en/play-lottery/bonoloto/?from=circular&extra_jackpot=" class="btn btn-success event-easy-pick-main-btn">Play<span class="fa-solid fa-chevron-down"></span></a>
                                                <div class="lottery_sel_dropdown">
                                                    <div class="offers">
                                                        <p><a href="/en/play-lottery/bonoloto/?from=circular&easy_pick=2&extra_jackpot=" class="event-easy-pick-offer">2 lines for $ 3.70</a></p>
                                                        <p><a href="/en/play-lottery/bonoloto/?from=circular&easy_pick=4&extra_jackpot=" class="event-easy-pick-offer">4 lines for $ 7.03</a></p>
                                                    </div>
                                                    <div class="or">–––––&nbsp;or&nbsp;–––––</div>
                                                    <p><a href="/en/play-lottery/bonoloto/?from=circular&extra_jackpot=" class="lottery_sel_choose">Pick numbers</a></p>
                                                    <div class="or light_version_site_hide">–––––––––––––</div>


                                                    <p style="margin-top: 5px;"><a href="/en/play-lottery/bonoloto/?from=index_lotto&system=1&extra_jackpot=" class="lottery_sel_choose game-type-ico lamp opt-system">System</a></p>

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div><div class="lottery_slider_item">
                                <div class="lottery_item">
                                    <div class="lottery_item_top" style="background-image: url('https://static.cdnland.com/upload/images/bg/au-ozlotto.svg');">
                                        <div class="lottery_item_img"><a href="/en/play-lottery/oz-lotto/?from=circular&extra_jackpot="><img src="https://static.cdnland.com/upload/images/logo/svg/oz-lotto.svg" alt="Oz Lotto"/></a></div>
                                        <div class="lottery_item_val"><span class="jack"><b>A$ 20</b><br/><span class="mln_icon_extra text-nowrap">Million </span></span></div>
                                    </div>
                                    <div class="lottery_item_cont">
                                        <a href="#windowAlert" class="ratestars fancybox" onclick="yaGoals('CLEVER');" data-title="Today&#039;s Top-Rated Lotteries" data-text="&lt;p&gt;We analyze dozens of parameters daily: Jackpot amount and tax deductions, winning odds and the number of prize divisions, cost of a single line, and availability of such options as &quot;Multiplier,&quot; and much more to offer you the best possible lottery at the moment!&lt;/p&gt;&lt;p&gt;Choose a lottery with the highest score to win more and spend less!&lt;/p&gt;" data-toggle="tooltip" data-placement="bottom" title="Lottery rating from 1 to 10">
                                            <span class="icon-rating"></span>
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
                                                    <option value="/en/play-lottery/oz-lotto/?from=circular&easy_pick=4&extra_jackpot=" data-event-easy-pick="1">4 lines for $ 10.04</option>
                                                    <option value="/en/play-lottery/oz-lotto/?from=circular&easy_pick=7&extra_jackpot=" data-event-easy-pick="1">7 lines for $ 16.34</option>
                                                    <option value="" disabled>–––––&nbsp;or&nbsp;–––––</option>
                                                    <option value="/en/play-lottery/oz-lotto/?from=circular&extra_jackpot=">Pick numbers</option>
                                                    <option class="light_version_site_hide" value="" disabled>––––––––––––</option>
                                                    <option class="opt-syndicate" value="/en/play-lottery/oz-lotto/?from=index_lotto&syndicates=1&extra_jackpot=">Syndicate &#128293;</option>
                                                    <option class="opt-system" value="/en/play-lottery/oz-lotto/?from=index_lotto&system=1&extra_jackpot=">System &#128200;</option>
                                                </select>
                                                <a href="/en/play-lottery/oz-lotto/?from=circular&extra_jackpot=" class="btn btn-success event-easy-pick-main-btn">Play<span class="fa-solid fa-chevron-down"></span></a>
                                                <div class="lottery_sel_dropdown">
                                                    <div class="offers">
                                                        <p><a href="/en/play-lottery/oz-lotto/?from=circular&easy_pick=4&extra_jackpot=" class="event-easy-pick-offer">4 lines for $ 10.04</a></p>
                                                        <p><a href="/en/play-lottery/oz-lotto/?from=circular&easy_pick=7&extra_jackpot=" class="event-easy-pick-offer">7 lines for $ 16.34</a></p>
                                                    </div>
                                                    <div class="or">–––––&nbsp;or&nbsp;–––––</div>
                                                    <p><a href="/en/play-lottery/oz-lotto/?from=circular&extra_jackpot=" class="lottery_sel_choose">Pick numbers</a></p>
                                                    <div class="or light_version_site_hide">–––––––––––––</div>

                                                    <p><a href="/en/play-lottery/oz-lotto/?from=index_lotto&syndicates=1&extra_jackpot=" class="lottery_sel_choose game-type-ico fire opt-syndicate">Syndicate</a></p>


                                                    <p style="margin-top: 5px;"><a href="/en/play-lottery/oz-lotto/?from=index_lotto&system=1&extra_jackpot=" class="lottery_sel_choose game-type-ico lamp opt-system">System</a></p>

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div><div class="lottery_slider_item">
                                <div class="lottery_item">
                                    <div class="lottery_item_top" style="background-image: url('https://static.cdnland.com/upload/images/bg/it-superenalotto.svg');">
                                        <div class="lottery_item_img"><a href="/en/play-lottery/superenalotto/?from=circular&extra_jackpot="><img src="https://static.cdnland.com/upload/images/logo/svg/superenalotto.svg" alt="SuperEnalotto"/></a></div>
                                        <div class="lottery_item_val"><span class="jack"><b>€ 1.3+</b><br/><span class="mln_icon_extra text-nowrap">Million </span></span></div>
                                    </div>
                                    <div class="lottery_item_cont">
                                        <a href="#windowAlert" class="ratestars fancybox" onclick="yaGoals('CLEVER');" data-title="Today&#039;s Top-Rated Lotteries" data-text="&lt;p&gt;We analyze dozens of parameters daily: Jackpot amount and tax deductions, winning odds and the number of prize divisions, cost of a single line, and availability of such options as &quot;Multiplier,&quot; and much more to offer you the best possible lottery at the moment!&lt;/p&gt;&lt;p&gt;Choose a lottery with the highest score to win more and spend less!&lt;/p&gt;" data-toggle="tooltip" data-placement="bottom" title="Lottery rating from 1 to 10">
                                            <span class="icon-rating"></span>
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
                                                    <option value="/en/play-lottery/superenalotto/?from=circular&easy_pick=1&extra_jackpot=" data-event-easy-pick="1">1 line for $ 3.04</option>
                                                    <option value="/en/play-lottery/superenalotto/?from=circular&easy_pick=3&extra_jackpot=" data-event-easy-pick="1">3 lines for $ 8.85</option>
                                                    <option value="" disabled>–––––&nbsp;or&nbsp;–––––</option>
                                                    <option value="/en/play-lottery/superenalotto/?from=circular&extra_jackpot=">Pick numbers</option>
                                                    <option class="light_version_site_hide" value="" disabled>––––––––––––</option>
                                                    <option class="opt-syndicate" value="/en/play-lottery/superenalotto/?from=index_lotto&syndicates=1&extra_jackpot=">Syndicate &#128293;</option>
                                                    <option class="opt-system" value="/en/play-lottery/superenalotto/?from=index_lotto&system=1&extra_jackpot=">System &#128200;</option>
                                                </select>
                                                <a href="/en/play-lottery/superenalotto/?from=circular&extra_jackpot=" class="btn btn-success event-easy-pick-main-btn">Play<span class="fa-solid fa-chevron-down"></span></a>
                                                <div class="lottery_sel_dropdown">
                                                    <div class="offers">
                                                        <p><a href="/en/play-lottery/superenalotto/?from=circular&easy_pick=1&extra_jackpot=" class="event-easy-pick-offer">1 line for $ 3.04</a></p>
                                                        <p><a href="/en/play-lottery/superenalotto/?from=circular&easy_pick=3&extra_jackpot=" class="event-easy-pick-offer">3 lines for $ 8.85</a></p>
                                                    </div>
                                                    <div class="or">–––––&nbsp;or&nbsp;–––––</div>
                                                    <p><a href="/en/play-lottery/superenalotto/?from=circular&extra_jackpot=" class="lottery_sel_choose">Pick numbers</a></p>
                                                    <div class="or light_version_site_hide">–––––––––––––</div>

                                                    <p><a href="/en/play-lottery/superenalotto/?from=index_lotto&syndicates=1&extra_jackpot=" class="lottery_sel_choose game-type-ico fire opt-syndicate">Syndicate</a></p>


                                                    <p style="margin-top: 5px;"><a href="/en/play-lottery/superenalotto/?from=index_lotto&system=1&extra_jackpot=" class="lottery_sel_choose game-type-ico lamp opt-system">System</a></p>

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
                                            <span class="icon-rating"></span>
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
                                        <div class="lottery_item_img"><a href="/en/play-lottery/eurojackpot/?from=circular&extra_jackpot="><img src="https://static.cdnland.com/upload/images/logo/svg/eurojackpot.svg" alt="EuroJackpot"/></a></div>
                                        <div class="lottery_item_val"><span class="jack"><b>€ 10</b><br/><span class="mln_icon_extra text-nowrap">Million </span></span></div>
                                    </div>
                                    <div class="lottery_item_cont">
                                        <a href="#windowAlert" class="ratestars fancybox" onclick="yaGoals('CLEVER');" data-title="Today&#039;s Top-Rated Lotteries" data-text="&lt;p&gt;We analyze dozens of parameters daily: Jackpot amount and tax deductions, winning odds and the number of prize divisions, cost of a single line, and availability of such options as &quot;Multiplier,&quot; and much more to offer you the best possible lottery at the moment!&lt;/p&gt;&lt;p&gt;Choose a lottery with the highest score to win more and spend less!&lt;/p&gt;" data-toggle="tooltip" data-placement="bottom" title="Lottery rating from 1 to 10">
                                            <span class="icon-rating"></span>
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
                                                    <option value="/en/play-lottery/eurojackpot/?from=circular&extra_jackpot=">Pick numbers</option>
                                                    <option class="light_version_site_hide" value="" disabled>––––––––––––</option>
                                                    <option class="opt-syndicate" value="/en/play-lottery/eurojackpot/?from=index_lotto&syndicates=1&extra_jackpot=">Syndicate &#128293;</option>
                                                    <option class="opt-system" value="/en/play-lottery/eurojackpot/?from=index_lotto&system=1&extra_jackpot=">System &#128200;</option>
                                                </select>
                                                <a href="/en/play-lottery/eurojackpot/?from=circular&extra_jackpot=" class="btn btn-success event-easy-pick-main-btn">Play<span class="fa-solid fa-chevron-down"></span></a>
                                                <div class="lottery_sel_dropdown">
                                                    <div class="offers">
                                                        <p><a href="/en/play-lottery/eurojackpot/?from=circular&easy_pick=1&extra_jackpot=" class="event-easy-pick-offer">1 line for $ 5.76</a></p>
                                                        <p><a href="/en/play-lottery/eurojackpot/?from=circular&easy_pick=3&extra_jackpot=" class="event-easy-pick-offer">3 lines for $ 16.76</a></p>
                                                    </div>
                                                    <div class="or">–––––&nbsp;or&nbsp;–––––</div>
                                                    <p><a href="/en/play-lottery/eurojackpot/?from=circular&extra_jackpot=" class="lottery_sel_choose">Pick numbers</a></p>
                                                    <div class="or light_version_site_hide">–––––––––––––</div>

                                                    <p><a href="/en/play-lottery/eurojackpot/?from=index_lotto&syndicates=1&extra_jackpot=" class="lottery_sel_choose game-type-ico fire opt-syndicate">Syndicate</a></p>


                                                    <p style="margin-top: 5px;"><a href="/en/play-lottery/eurojackpot/?from=index_lotto&system=1&extra_jackpot=" class="lottery_sel_choose game-type-ico lamp opt-system">System</a></p>

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div><div class="lottery_slider_item">
                                <div class="lottery_item">
                                    <div class="lottery_item_top" style="background-image: url('https://static.cdnland.com/upload/images/bg/eu-euromillions.svg');">
                                        <div class="lottery_item_img"><a href="/en/play-lottery/euromillions/?from=circular&extra_jackpot="><img src="https://static.cdnland.com/upload/images/logo/svg/euromillions.svg" alt="EuroMillions"/></a></div>
                                        <div class="lottery_item_val"><span class="jack"><b>€ 40</b><br/><span class="mln_icon_extra text-nowrap">Million </span></span></div>
                                    </div>
                                    <div class="lottery_item_cont">
                                        <a href="#windowAlert" class="ratestars fancybox" onclick="yaGoals('CLEVER');" data-title="Today&#039;s Top-Rated Lotteries" data-text="&lt;p&gt;We analyze dozens of parameters daily: Jackpot amount and tax deductions, winning odds and the number of prize divisions, cost of a single line, and availability of such options as &quot;Multiplier,&quot; and much more to offer you the best possible lottery at the moment!&lt;/p&gt;&lt;p&gt;Choose a lottery with the highest score to win more and spend less!&lt;/p&gt;" data-toggle="tooltip" data-placement="bottom" title="Lottery rating from 1 to 10">
                                            <span class="icon-rating"></span>
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
                                                    <option value="/en/play-lottery/euromillions/?from=circular&easy_pick=1&extra_jackpot=" data-event-easy-pick="1">1 line for $ 6.20</option>
                                                    <option value="/en/play-lottery/euromillions/?from=circular&easy_pick=3&extra_jackpot=" data-event-easy-pick="1">3 lines for $ 18.04</option>
                                                    <option value="" disabled>–––––&nbsp;or&nbsp;–––––</option>
                                                    <option value="/en/play-lottery/euromillions/?from=circular&extra_jackpot=">Pick numbers</option>
                                                    <option class="light_version_site_hide" value="" disabled>––––––––––––</option>
                                                    <option class="opt-syndicate" value="/en/play-lottery/euromillions/?from=index_lotto&syndicates=1&extra_jackpot=">Syndicate &#128293;</option>
                                                    <option class="opt-system" value="/en/play-lottery/euromillions/?from=index_lotto&system=1&extra_jackpot=">System &#128200;</option>
                                                </select>
                                                <a href="/en/play-lottery/euromillions/?from=circular&extra_jackpot=" class="btn btn-success event-easy-pick-main-btn">Play<span class="fa-solid fa-chevron-down"></span></a>
                                                <div class="lottery_sel_dropdown">
                                                    <div class="offers">
                                                        <p><a href="/en/play-lottery/euromillions/?from=circular&easy_pick=1&extra_jackpot=" class="event-easy-pick-offer">1 line for $ 6.20</a></p>
                                                        <p><a href="/en/play-lottery/euromillions/?from=circular&easy_pick=3&extra_jackpot=" class="event-easy-pick-offer">3 lines for $ 18.04</a></p>
                                                    </div>
                                                    <div class="or">–––––&nbsp;or&nbsp;–––––</div>
                                                    <p><a href="/en/play-lottery/euromillions/?from=circular&extra_jackpot=" class="lottery_sel_choose">Pick numbers</a></p>
                                                    <div class="or light_version_site_hide">–––––––––––––</div>

                                                    <p><a href="/en/play-lottery/euromillions/?from=index_lotto&syndicates=1&extra_jackpot=" class="lottery_sel_choose game-type-ico fire opt-syndicate">Syndicate</a></p>


                                                    <p style="margin-top: 5px;"><a href="/en/play-lottery/euromillions/?from=index_lotto&system=1&extra_jackpot=" class="lottery_sel_choose game-type-ico lamp opt-system">System</a></p>

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
                                            <span class="icon-rating"></span>
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
                                            <span class="icon-rating"></span>
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
                                        <div class="lottery_item_img"><a href="/en/play-lottery/uk-lotto/?from=circular&extra_jackpot="><img src="https://static.cdnland.com/upload/images/logo/svg/uk_lotto.svg" alt="UK Lotto"/></a></div>
                                        <div class="lottery_item_val"><span class="jack"><b>£ 2.5+</b><br/><span class="mln_icon_extra text-nowrap">Million </span></span></div>
                                    </div>
                                    <div class="lottery_item_cont">
                                        <a href="#windowAlert" class="ratestars fancybox" onclick="yaGoals('CLEVER');" data-title="Today&#039;s Top-Rated Lotteries" data-text="&lt;p&gt;We analyze dozens of parameters daily: Jackpot amount and tax deductions, winning odds and the number of prize divisions, cost of a single line, and availability of such options as &quot;Multiplier,&quot; and much more to offer you the best possible lottery at the moment!&lt;/p&gt;&lt;p&gt;Choose a lottery with the highest score to win more and spend less!&lt;/p&gt;" data-toggle="tooltip" data-placement="bottom" title="Lottery rating from 1 to 10">
                                            <span class="icon-rating"></span>
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
                                                    <option value="/en/play-lottery/uk-lotto/?from=circular&easy_pick=1&extra_jackpot=" data-event-easy-pick="1">1 line for $ 7.41</option>
                                                    <option value="/en/play-lottery/uk-lotto/?from=circular&easy_pick=3&extra_jackpot=" data-event-easy-pick="1">3 lines for $ 21.12</option>
                                                    <option value="" disabled>–––––&nbsp;or&nbsp;–––––</option>
                                                    <option value="/en/play-lottery/uk-lotto/?from=circular&extra_jackpot=">Pick numbers</option>
                                                    <option class="light_version_site_hide" value="" disabled>––––––––––––</option>

                                                    <option class="opt-system" value="/en/play-lottery/uk-lotto/?from=index_lotto&system=1&extra_jackpot=">System &#128200;</option>
                                                </select>
                                                <a href="/en/play-lottery/uk-lotto/?from=circular&extra_jackpot=" class="btn btn-success event-easy-pick-main-btn">Play<span class="fa-solid fa-chevron-down"></span></a>
                                                <div class="lottery_sel_dropdown">
                                                    <div class="offers">
                                                        <p><a href="/en/play-lottery/uk-lotto/?from=circular&easy_pick=1&extra_jackpot=" class="event-easy-pick-offer">1 line for $ 7.41</a></p>
                                                        <p><a href="/en/play-lottery/uk-lotto/?from=circular&easy_pick=3&extra_jackpot=" class="event-easy-pick-offer">3 lines for $ 21.12</a></p>
                                                    </div>
                                                    <div class="or">–––––&nbsp;or&nbsp;–––––</div>
                                                    <p><a href="/en/play-lottery/uk-lotto/?from=circular&extra_jackpot=" class="lottery_sel_choose">Pick numbers</a></p>
                                                    <div class="or light_version_site_hide">–––––––––––––</div>


                                                    <p style="margin-top: 5px;"><a href="/en/play-lottery/uk-lotto/?from=index_lotto&system=1&extra_jackpot=" class="lottery_sel_choose game-type-ico lamp opt-system">System</a></p>

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
                                            <span class="icon-rating"></span>
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
                                            <span class="icon-rating"></span>
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
                                        <div class="lottery_item_img"><a href="/en/play-lottery/au-saturday-lotto/?from=circular&extra_jackpot="><img src="https://static.cdnland.com/upload/images/logo/svg/saturday_lotto.svg" alt="Saturday Lotto"/></a></div>
                                        <div class="lottery_item_val"><span class="jack"><b>A$ 5</b><br/><span class="mln_icon_extra text-nowrap">Million </span></span></div>
                                    </div>
                                    <div class="lottery_item_cont">
                                        <a href="#windowAlert" class="ratestars fancybox" onclick="yaGoals('CLEVER');" data-title="Today&#039;s Top-Rated Lotteries" data-text="&lt;p&gt;We analyze dozens of parameters daily: Jackpot amount and tax deductions, winning odds and the number of prize divisions, cost of a single line, and availability of such options as &quot;Multiplier,&quot; and much more to offer you the best possible lottery at the moment!&lt;/p&gt;&lt;p&gt;Choose a lottery with the highest score to win more and spend less!&lt;/p&gt;" data-toggle="tooltip" data-placement="bottom" title="Lottery rating from 1 to 10">
                                            <span class="icon-rating"></span>
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
                                                    <option value="/en/play-lottery/au-saturday-lotto/?from=circular&easy_pick=6&extra_jackpot=" data-event-easy-pick="1">6 lines for $ 8.82</option>
                                                    <option value="/en/play-lottery/au-saturday-lotto/?from=circular&easy_pick=10&extra_jackpot=" data-event-easy-pick="1">10 lines for $ 13.38</option>
                                                    <option value="" disabled>–––––&nbsp;or&nbsp;–––––</option>
                                                    <option value="/en/play-lottery/au-saturday-lotto/?from=circular&extra_jackpot=">Pick numbers</option>
                                                    <option class="light_version_site_hide" value="" disabled>––––––––––––</option>
                                                    <option class="opt-syndicate" value="/en/play-lottery/au-saturday-lotto/?from=index_lotto&syndicates=1&extra_jackpot=">Syndicate &#128293;</option>
                                                    <option class="opt-system" value="/en/play-lottery/au-saturday-lotto/?from=index_lotto&system=1&extra_jackpot=">System &#128200;</option>
                                                </select>
                                                <a href="/en/play-lottery/au-saturday-lotto/?from=circular&extra_jackpot=" class="btn btn-success event-easy-pick-main-btn">Play<span class="fa-solid fa-chevron-down"></span></a>
                                                <div class="lottery_sel_dropdown">
                                                    <div class="offers">
                                                        <p><a href="/en/play-lottery/au-saturday-lotto/?from=circular&easy_pick=6&extra_jackpot=" class="event-easy-pick-offer">6 lines for $ 8.82</a></p>
                                                        <p><a href="/en/play-lottery/au-saturday-lotto/?from=circular&easy_pick=10&extra_jackpot=" class="event-easy-pick-offer">10 lines for $ 13.38</a></p>
                                                    </div>
                                                    <div class="or">–––––&nbsp;or&nbsp;–––––</div>
                                                    <p><a href="/en/play-lottery/au-saturday-lotto/?from=circular&extra_jackpot=" class="lottery_sel_choose">Pick numbers</a></p>
                                                    <div class="or light_version_site_hide">–––––––––––––</div>

                                                    <p><a href="/en/play-lottery/au-saturday-lotto/?from=index_lotto&syndicates=1&extra_jackpot=" class="lottery_sel_choose game-type-ico fire opt-syndicate">Syndicate</a></p>


                                                    <p style="margin-top: 5px;"><a href="/en/play-lottery/au-saturday-lotto/?from=index_lotto&system=1&extra_jackpot=" class="lottery_sel_choose game-type-ico lamp opt-system">System</a></p>

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div><div class="lottery_slider_item">
                                <div class="lottery_item">
                                    <div class="lottery_item_top" style="background-image: url('https://static.cdnland.com/upload/images/bg/es-el-gordo.svg');">
                                        <div class="lottery_item_img"><a href="/en/play-lottery/el-gordo/?from=circular&extra_jackpot="><img src="https://static.cdnland.com/upload/images/logo/svg/el_gordo.svg" alt="El Gordo de la Primitiva"/></a></div>
                                        <div class="lottery_item_val"><span class="jack"><b>€ 5+</b><br/><span class="mln_icon_extra text-nowrap">Million </span></span></div>
                                    </div>
                                    <div class="lottery_item_cont">
                                        <a href="#windowAlert" class="ratestars fancybox" onclick="yaGoals('CLEVER');" data-title="Today&#039;s Top-Rated Lotteries" data-text="&lt;p&gt;We analyze dozens of parameters daily: Jackpot amount and tax deductions, winning odds and the number of prize divisions, cost of a single line, and availability of such options as &quot;Multiplier,&quot; and much more to offer you the best possible lottery at the moment!&lt;/p&gt;&lt;p&gt;Choose a lottery with the highest score to win more and spend less!&lt;/p&gt;" data-toggle="tooltip" data-placement="bottom" title="Lottery rating from 1 to 10">
                                            <span class="icon-rating"></span>
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
                                                    <option value="/en/play-lottery/el-gordo/?from=circular&extra_jackpot=">Pick numbers</option>
                                                    <option class="light_version_site_hide" value="" disabled>––––––––––––</option>
                                                    <option class="opt-syndicate" value="/en/play-lottery/el-gordo/?from=index_lotto&syndicates=1&extra_jackpot=">Syndicate &#128293;</option>
                                                    <option class="opt-system" value="/en/play-lottery/el-gordo/?from=index_lotto&system=1&extra_jackpot=">System &#128200;</option>
                                                </select>
                                                <a href="/en/play-lottery/el-gordo/?from=circular&extra_jackpot=" class="btn btn-success event-easy-pick-main-btn">Play<span class="fa-solid fa-chevron-down"></span></a>
                                                <div class="lottery_sel_dropdown">
                                                    <div class="offers">
                                                        <p><a href="/en/play-lottery/el-gordo/?from=circular&easy_pick=2&extra_jackpot=" class="event-easy-pick-offer">2 lines for $ 9.68</a></p>
                                                        <p><a href="/en/play-lottery/el-gordo/?from=circular&easy_pick=3&extra_jackpot=" class="event-easy-pick-offer">3 lines for $ 13.50</a></p>
                                                    </div>
                                                    <div class="or">–––––&nbsp;or&nbsp;–––––</div>
                                                    <p><a href="/en/play-lottery/el-gordo/?from=circular&extra_jackpot=" class="lottery_sel_choose">Pick numbers</a></p>
                                                    <div class="or light_version_site_hide">–––––––––––––</div>

                                                    <p><a href="/en/play-lottery/el-gordo/?from=index_lotto&syndicates=1&extra_jackpot=" class="lottery_sel_choose game-type-ico fire opt-syndicate">Syndicate</a></p>


                                                    <p style="margin-top: 5px;"><a href="/en/play-lottery/el-gordo/?from=index_lotto&system=1&extra_jackpot=" class="lottery_sel_choose game-type-ico lamp opt-system">System</a></p>

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
                                            <span class="icon-rating"></span>
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
                                            <span class="icon-rating"></span>
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
                                            <span class="icon-rating"></span>
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
                                        <div class="lottery_item_img"><a href="/en/play-lottery/powerball/?from=circular&extra_jackpot="><img src="https://static.cdnland.com/upload/images/logo/svg/powerball.svg" alt="Powerball"/></a></div>
                                        <div class="lottery_item_val"><span class="jack"><b>$ 147</b><br/><span class="mln_icon_extra text-nowrap">Million </span></span></div>
                                    </div>
                                    <div class="lottery_item_cont">
                                        <a href="#windowAlert" class="ratestars fancybox" onclick="yaGoals('CLEVER');" data-title="Today&#039;s Top-Rated Lotteries" data-text="&lt;p&gt;We analyze dozens of parameters daily: Jackpot amount and tax deductions, winning odds and the number of prize divisions, cost of a single line, and availability of such options as &quot;Multiplier,&quot; and much more to offer you the best possible lottery at the moment!&lt;/p&gt;&lt;p&gt;Choose a lottery with the highest score to win more and spend less!&lt;/p&gt;" data-toggle="tooltip" data-placement="bottom" title="Lottery rating from 1 to 10">
                                            <span class="icon-rating"></span>
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
                                                    <option value="/en/play-lottery/powerball/?from=circular&easy_pick=1&extra_jackpot=" data-event-easy-pick="1">1 line for $ 5.29</option>
                                                    <option value="/en/play-lottery/powerball/?from=circular&easy_pick=3&extra_jackpot=" data-event-easy-pick="1">3 lines for $ 14.92</option>
                                                    <option value="" disabled>–––––&nbsp;or&nbsp;–––––</option>
                                                    <option value="/en/play-lottery/powerball/?from=circular&extra_jackpot=">Pick numbers</option>
                                                    <option class="light_version_site_hide" value="" disabled>––––––––––––</option>
                                                    <option class="opt-syndicate" value="/en/play-lottery/powerball/?from=index_lotto&syndicates=1&extra_jackpot=">Syndicate &#128293;</option>
                                                    <option class="opt-system" value="/en/play-lottery/powerball/?from=index_lotto&system=1&extra_jackpot=">System &#128200;</option>
                                                </select>
                                                <a href="/en/play-lottery/powerball/?from=circular&extra_jackpot=" class="btn btn-success event-easy-pick-main-btn">Play<span class="fa-solid fa-chevron-down"></span></a>
                                                <div class="lottery_sel_dropdown">
                                                    <div class="offers">
                                                        <p><a href="/en/play-lottery/powerball/?from=circular&easy_pick=1&extra_jackpot=" class="event-easy-pick-offer">1 line for $ 5.29</a></p>
                                                        <p><a href="/en/play-lottery/powerball/?from=circular&easy_pick=3&extra_jackpot=" class="event-easy-pick-offer">3 lines for $ 14.92</a></p>
                                                    </div>
                                                    <div class="or">–––––&nbsp;or&nbsp;–––––</div>
                                                    <p><a href="/en/play-lottery/powerball/?from=circular&extra_jackpot=" class="lottery_sel_choose">Pick numbers</a></p>
                                                    <div class="or light_version_site_hide">–––––––––––––</div>

                                                    <p><a href="/en/play-lottery/powerball/?from=index_lotto&syndicates=1&extra_jackpot=" class="lottery_sel_choose game-type-ico fire opt-syndicate">Syndicate</a></p>


                                                    <p style="margin-top: 5px;"><a href="/en/play-lottery/powerball/?from=index_lotto&system=1&extra_jackpot=" class="lottery_sel_choose game-type-ico lamp opt-system">System</a></p>

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div><div class="lottery_slider_item">
                                <div class="lottery_item">
                                    <div class="lottery_item_top" style="background-image: url('https://static.cdnland.com/upload/images/bg/au-set_for_life.svg');">
                                        <div class="lottery_item_img"><a href="/en/play-lottery/au-set-for-life/?from=circular&extra_jackpot="><img src="https://static.cdnland.com/upload/images/logo/svg/set_for_life.svg" alt="Set for Life (AU)"/></a></div>
                                        <div class="lottery_item_val"><span class="jack"><b>A$ 4.8</b><br/><span class="mln_icon_extra text-nowrap">Million </span></span></div>
                                    </div>
                                    <div class="lottery_item_cont">
                                        <a href="#windowAlert" class="ratestars fancybox" onclick="yaGoals('CLEVER');" data-title="Today&#039;s Top-Rated Lotteries" data-text="&lt;p&gt;We analyze dozens of parameters daily: Jackpot amount and tax deductions, winning odds and the number of prize divisions, cost of a single line, and availability of such options as &quot;Multiplier,&quot; and much more to offer you the best possible lottery at the moment!&lt;/p&gt;&lt;p&gt;Choose a lottery with the highest score to win more and spend less!&lt;/p&gt;" data-toggle="tooltip" data-placement="bottom" title="Lottery rating from 1 to 10">
                                            <span class="icon-rating"></span>
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
                                                    <option value="/en/play-lottery/au-set-for-life/?from=circular&easy_pick=7&extra_jackpot=" data-event-easy-pick="1">7 lines for $ 7.49</option>
                                                    <option value="/en/play-lottery/au-set-for-life/?from=circular&easy_pick=14&extra_jackpot=" data-event-easy-pick="1">14 lines for $ 14.23</option>
                                                    <option value="" disabled>–––––&nbsp;or&nbsp;–––––</option>
                                                    <option value="/en/play-lottery/au-set-for-life/?from=circular&extra_jackpot=">Pick numbers</option>
                                                    <option class="light_version_site_hide" value="" disabled>––––––––––––</option>

                                                    <option class="opt-system" value="/en/play-lottery/au-set-for-life/?from=index_lotto&system=1&extra_jackpot=">System &#128200;</option>
                                                </select>
                                                <a href="/en/play-lottery/au-set-for-life/?from=circular&extra_jackpot=" class="btn btn-success event-easy-pick-main-btn">Play<span class="fa-solid fa-chevron-down"></span></a>
                                                <div class="lottery_sel_dropdown">
                                                    <div class="offers">
                                                        <p><a href="/en/play-lottery/au-set-for-life/?from=circular&easy_pick=7&extra_jackpot=" class="event-easy-pick-offer">7 lines for $ 7.49</a></p>
                                                        <p><a href="/en/play-lottery/au-set-for-life/?from=circular&easy_pick=14&extra_jackpot=" class="event-easy-pick-offer">14 lines for $ 14.23</a></p>
                                                    </div>
                                                    <div class="or">–––––&nbsp;or&nbsp;–––––</div>
                                                    <p><a href="/en/play-lottery/au-set-for-life/?from=circular&extra_jackpot=" class="lottery_sel_choose">Pick numbers</a></p>
                                                    <div class="or light_version_site_hide">–––––––––––––</div>


                                                    <p style="margin-top: 5px;"><a href="/en/play-lottery/au-set-for-life/?from=index_lotto&system=1&extra_jackpot=" class="lottery_sel_choose game-type-ico lamp opt-system">System</a></p>

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div><div class="lottery_slider_item">
                                <div class="lottery_item">
                                    <div class="lottery_item_top" style="background-image: url('https://static.cdnland.com/upload/images/bg/za-lotto-652.svg');">
                                        <div class="lottery_item_img"><a href="/en/play-lottery/za-lotto-652/?from=circular&extra_jackpot="><img src="https://static.cdnland.com/upload/images/logo/svg/lotto_za.svg" alt="South Africa Lotto 6/52"/></a></div>
                                        <div class="lottery_item_val"><span class="jack"><b>R 19</b><br/><span class="mln_icon_extra text-nowrap">Million </span></span></div>
                                    </div>
                                    <div class="lottery_item_cont">
                                        <a href="#windowAlert" class="ratestars fancybox" onclick="yaGoals('CLEVER');" data-title="Today&#039;s Top-Rated Lotteries" data-text="&lt;p&gt;We analyze dozens of parameters daily: Jackpot amount and tax deductions, winning odds and the number of prize divisions, cost of a single line, and availability of such options as &quot;Multiplier,&quot; and much more to offer you the best possible lottery at the moment!&lt;/p&gt;&lt;p&gt;Choose a lottery with the highest score to win more and spend less!&lt;/p&gt;" data-toggle="tooltip" data-placement="bottom" title="Lottery rating from 1 to 10">
                                            <span class="icon-rating"></span>
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
                                                    <option value="/en/play-lottery/za-lotto-652/?from=circular&easy_pick=5&extra_jackpot=" data-event-easy-pick="1">5 lines for $ 4.20</option>
                                                    <option value="/en/play-lottery/za-lotto-652/?from=circular&easy_pick=10&extra_jackpot=" data-event-easy-pick="1">10 lines for $ 7.90</option>
                                                    <option value="" disabled>–––––&nbsp;or&nbsp;–––––</option>
                                                    <option value="/en/play-lottery/za-lotto-652/?from=circular&extra_jackpot=">Pick numbers</option>
                                                    <option class="light_version_site_hide" value="" disabled>––––––––––––</option>

                                                    <option class="opt-system" value="/en/play-lottery/za-lotto-652/?from=index_lotto&system=1&extra_jackpot=">System &#128200;</option>
                                                </select>
                                                <a href="/en/play-lottery/za-lotto-652/?from=circular&extra_jackpot=" class="btn btn-success event-easy-pick-main-btn">Play<span class="fa-solid fa-chevron-down"></span></a>
                                                <div class="lottery_sel_dropdown">
                                                    <div class="offers">
                                                        <p><a href="/en/play-lottery/za-lotto-652/?from=circular&easy_pick=5&extra_jackpot=" class="event-easy-pick-offer">5 lines for $ 4.20</a></p>
                                                        <p><a href="/en/play-lottery/za-lotto-652/?from=circular&easy_pick=10&extra_jackpot=" class="event-easy-pick-offer">10 lines for $ 7.90</a></p>
                                                    </div>
                                                    <div class="or">–––––&nbsp;or&nbsp;–––––</div>
                                                    <p><a href="/en/play-lottery/za-lotto-652/?from=circular&extra_jackpot=" class="lottery_sel_choose">Pick numbers</a></p>
                                                    <div class="or light_version_site_hide">–––––––––––––</div>


                                                    <p style="margin-top: 5px;"><a href="/en/play-lottery/za-lotto-652/?from=index_lotto&system=1&extra_jackpot=" class="lottery_sel_choose game-type-ico lamp opt-system">System</a></p>

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div><div class="lottery_slider_item">
                                <div class="lottery_item">
                                    <div class="lottery_item_top" style="background-image: url('https://static.cdnland.com/upload/images/bg/mx-melate.svg');">
                                        <div class="lottery_item_img"><a href="/en/play-lottery/mexico-melate/?from=circular&extra_jackpot="><img src="https://static.cdnland.com/upload/images/logo/svg/melate_logo.svg" alt="Mexico Melate"/></a></div>
                                        <div class="lottery_item_val"><span class="jack"><b>M$ 30.1</b><br/><span class="mln_icon_extra text-nowrap">Million </span></span></div>
                                    </div>
                                    <div class="lottery_item_cont">
                                        <a href="#windowAlert" class="ratestars fancybox" onclick="yaGoals('CLEVER');" data-title="Today&#039;s Top-Rated Lotteries" data-text="&lt;p&gt;We analyze dozens of parameters daily: Jackpot amount and tax deductions, winning odds and the number of prize divisions, cost of a single line, and availability of such options as &quot;Multiplier,&quot; and much more to offer you the best possible lottery at the moment!&lt;/p&gt;&lt;p&gt;Choose a lottery with the highest score to win more and spend less!&lt;/p&gt;" data-toggle="tooltip" data-placement="bottom" title="Lottery rating from 1 to 10">
                                            <span class="icon-rating"></span>
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
                                                    <option value="/en/play-lottery/mexico-melate/?from=circular&easy_pick=5&extra_jackpot=" data-event-easy-pick="1">5 lines for $ 10.40</option>
                                                    <option value="/en/play-lottery/mexico-melate/?from=circular&easy_pick=10&extra_jackpot=" data-event-easy-pick="1">10 lines for $ 19.76</option>
                                                    <option value="" disabled>–––––&nbsp;or&nbsp;–––––</option>
                                                    <option value="/en/play-lottery/mexico-melate/?from=circular&extra_jackpot=">Pick numbers</option>
                                                    <option class="light_version_site_hide" value="" disabled>––––––––––––</option>

                                                    <option class="opt-system" value="/en/play-lottery/mexico-melate/?from=index_lotto&system=1&extra_jackpot=">System &#128200;</option>
                                                </select>
                                                <a href="/en/play-lottery/mexico-melate/?from=circular&extra_jackpot=" class="btn btn-success event-easy-pick-main-btn">Play<span class="fa-solid fa-chevron-down"></span></a>
                                                <div class="lottery_sel_dropdown">
                                                    <div class="offers">
                                                        <p><a href="/en/play-lottery/mexico-melate/?from=circular&easy_pick=5&extra_jackpot=" class="event-easy-pick-offer">5 lines for $ 10.40</a></p>
                                                        <p><a href="/en/play-lottery/mexico-melate/?from=circular&easy_pick=10&extra_jackpot=" class="event-easy-pick-offer">10 lines for $ 19.76</a></p>
                                                    </div>
                                                    <div class="or">–––––&nbsp;or&nbsp;–––––</div>
                                                    <p><a href="/en/play-lottery/mexico-melate/?from=circular&extra_jackpot=" class="lottery_sel_choose">Pick numbers</a></p>
                                                    <div class="or light_version_site_hide">–––––––––––––</div>


                                                    <p style="margin-top: 5px;"><a href="/en/play-lottery/mexico-melate/?from=index_lotto&system=1&extra_jackpot=" class="lottery_sel_choose game-type-ico lamp opt-system">System</a></p>

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div><div class="lottery_slider_item">
                                <div class="lottery_item">
                                    <div class="lottery_item_top" style="background-image: url('https://static.cdnland.com/upload/images/bg/us-lotto-america.svg');">
                                        <div class="lottery_item_img"><a href="/en/play-lottery/lotto-america/?from=circular&extra_jackpot="><img src="https://static.cdnland.com/upload/images/logo/svg/lotto_america.svg" alt="Lotto America"/></a></div>
                                        <div class="lottery_item_val"><span class="jack"><b>$ 40.03</b><br/><span class="mln_icon_extra text-nowrap">Million </span></span></div>
                                    </div>
                                    <div class="lottery_item_cont">
                                        <a href="#windowAlert" class="ratestars fancybox" onclick="yaGoals('CLEVER');" data-title="Today&#039;s Top-Rated Lotteries" data-text="&lt;p&gt;We analyze dozens of parameters daily: Jackpot amount and tax deductions, winning odds and the number of prize divisions, cost of a single line, and availability of such options as &quot;Multiplier,&quot; and much more to offer you the best possible lottery at the moment!&lt;/p&gt;&lt;p&gt;Choose a lottery with the highest score to win more and spend less!&lt;/p&gt;" data-toggle="tooltip" data-placement="bottom" title="Lottery rating from 1 to 10">
                                            <span class="icon-rating"></span>
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
                                                    <option value="/en/play-lottery/lotto-america/?from=circular&easy_pick=1&extra_jackpot=" data-event-easy-pick="1">1 line for $ 3.29</option>
                                                    <option value="/en/play-lottery/lotto-america/?from=circular&easy_pick=3&extra_jackpot=" data-event-easy-pick="1">3 lines for $ 9.57</option>
                                                    <option value="" disabled>–––––&nbsp;or&nbsp;–––––</option>
                                                    <option value="/en/play-lottery/lotto-america/?from=circular&extra_jackpot=">Pick numbers</option>
                                                    <option class="light_version_site_hide" value="" disabled>––––––––––––</option>

                                                    <option class="opt-system" value="/en/play-lottery/lotto-america/?from=index_lotto&system=1&extra_jackpot=">System &#128200;</option>
                                                </select>
                                                <a href="/en/play-lottery/lotto-america/?from=circular&extra_jackpot=" class="btn btn-success event-easy-pick-main-btn">Play<span class="fa-solid fa-chevron-down"></span></a>
                                                <div class="lottery_sel_dropdown">
                                                    <div class="offers">
                                                        <p><a href="/en/play-lottery/lotto-america/?from=circular&easy_pick=1&extra_jackpot=" class="event-easy-pick-offer">1 line for $ 3.29</a></p>
                                                        <p><a href="/en/play-lottery/lotto-america/?from=circular&easy_pick=3&extra_jackpot=" class="event-easy-pick-offer">3 lines for $ 9.57</a></p>
                                                    </div>
                                                    <div class="or">–––––&nbsp;or&nbsp;–––––</div>
                                                    <p><a href="/en/play-lottery/lotto-america/?from=circular&extra_jackpot=" class="lottery_sel_choose">Pick numbers</a></p>
                                                    <div class="or light_version_site_hide">–––––––––––––</div>


                                                    <p style="margin-top: 5px;"><a href="/en/play-lottery/lotto-america/?from=index_lotto&system=1&extra_jackpot=" class="lottery_sel_choose game-type-ico lamp opt-system">System</a></p>

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div><div class="lottery_slider_item">
                                <div class="lottery_item">
                                    <div class="lottery_item_top" style="background-image: url('https://static.cdnland.com/upload/images/bg/au-mon-wed-lotto.svg');">
                                        <div class="lottery_item_img"><a href="/en/play-lottery/au-mon-wed-lotto/?from=circular&extra_jackpot="><img src="https://static.cdnland.com/upload/images/logo/svg/monwed_lotto.svg" alt="Monday &amp; Wednesday Lotto"/></a></div>
                                        <div class="lottery_item_val"><span class="jack"><b>A$ 1</b><br/><span class="mln_icon_extra text-nowrap">Million </span></span></div>
                                    </div>
                                    <div class="lottery_item_cont">
                                        <a href="#windowAlert" class="ratestars fancybox" onclick="yaGoals('CLEVER');" data-title="Today&#039;s Top-Rated Lotteries" data-text="&lt;p&gt;We analyze dozens of parameters daily: Jackpot amount and tax deductions, winning odds and the number of prize divisions, cost of a single line, and availability of such options as &quot;Multiplier,&quot; and much more to offer you the best possible lottery at the moment!&lt;/p&gt;&lt;p&gt;Choose a lottery with the highest score to win more and spend less!&lt;/p&gt;" data-toggle="tooltip" data-placement="bottom" title="Lottery rating from 1 to 10">
                                            <span class="icon-rating"></span>
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
                                                    <option value="/en/play-lottery/au-mon-wed-lotto/?from=circular&easy_pick=7&extra_jackpot=" data-event-easy-pick="1">7 lines for $ 7.31</option>
                                                    <option value="/en/play-lottery/au-mon-wed-lotto/?from=circular&easy_pick=14&extra_jackpot=" data-event-easy-pick="1">14 lines for $ 13.86</option>
                                                    <option value="" disabled>–––––&nbsp;or&nbsp;–––––</option>
                                                    <option value="/en/play-lottery/au-mon-wed-lotto/?from=circular&extra_jackpot=">Pick numbers</option>
                                                    <option class="light_version_site_hide" value="" disabled>––––––––––––</option>
                                                    <option class="opt-syndicate" value="/en/play-lottery/au-mon-wed-lotto/?from=index_lotto&syndicates=1&extra_jackpot=">Syndicate &#128293;</option>
                                                    <option class="opt-system" value="/en/play-lottery/au-mon-wed-lotto/?from=index_lotto&system=1&extra_jackpot=">System &#128200;</option>
                                                </select>
                                                <a href="/en/play-lottery/au-mon-wed-lotto/?from=circular&extra_jackpot=" class="btn btn-success event-easy-pick-main-btn">Play<span class="fa-solid fa-chevron-down"></span></a>
                                                <div class="lottery_sel_dropdown">
                                                    <div class="offers">
                                                        <p><a href="/en/play-lottery/au-mon-wed-lotto/?from=circular&easy_pick=7&extra_jackpot=" class="event-easy-pick-offer">7 lines for $ 7.31</a></p>
                                                        <p><a href="/en/play-lottery/au-mon-wed-lotto/?from=circular&easy_pick=14&extra_jackpot=" class="event-easy-pick-offer">14 lines for $ 13.86</a></p>
                                                    </div>
                                                    <div class="or">–––––&nbsp;or&nbsp;–––––</div>
                                                    <p><a href="/en/play-lottery/au-mon-wed-lotto/?from=circular&extra_jackpot=" class="lottery_sel_choose">Pick numbers</a></p>
                                                    <div class="or light_version_site_hide">–––––––––––––</div>

                                                    <p><a href="/en/play-lottery/au-mon-wed-lotto/?from=index_lotto&syndicates=1&extra_jackpot=" class="lottery_sel_choose game-type-ico fire opt-syndicate">Syndicate</a></p>


                                                    <p style="margin-top: 5px;"><a href="/en/play-lottery/au-mon-wed-lotto/?from=index_lotto&system=1&extra_jackpot=" class="lottery_sel_choose game-type-ico lamp opt-system">System</a></p>

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div><div class="lottery_slider_item">
                                <div class="lottery_item">
                                    <div class="lottery_item_top" style="background-image: url('https://static.cdnland.com/upload/images/bg/ir-daily_million.svg');">
                                        <div class="lottery_item_img"><a href="/en/play-lottery/ie-daily-million/?from=circular&extra_jackpot="><img src="https://static.cdnland.com/upload/images/logo/svg/daily_million.svg" alt="Daily Million"/></a></div>
                                        <div class="lottery_item_val"><span class="jack"><b>€ 1</b><br/><span class="mln_icon_extra text-nowrap">Million </span></span></div>
                                    </div>
                                    <div class="lottery_item_cont">
                                        <a href="#windowAlert" class="ratestars fancybox" onclick="yaGoals('CLEVER');" data-title="Today&#039;s Top-Rated Lotteries" data-text="&lt;p&gt;We analyze dozens of parameters daily: Jackpot amount and tax deductions, winning odds and the number of prize divisions, cost of a single line, and availability of such options as &quot;Multiplier,&quot; and much more to offer you the best possible lottery at the moment!&lt;/p&gt;&lt;p&gt;Choose a lottery with the highest score to win more and spend less!&lt;/p&gt;" data-toggle="tooltip" data-placement="bottom" title="Lottery rating from 1 to 10">
                                            <span class="icon-rating"></span>
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
                                                    <option value="/en/play-lottery/ie-daily-million/?from=circular&easy_pick=3&extra_jackpot=" data-event-easy-pick="1">3 lines for $ 8.16</option>
                                                    <option value="/en/play-lottery/ie-daily-million/?from=circular&easy_pick=5&extra_jackpot=" data-event-easy-pick="1">5 lines for $ 12.92</option>
                                                    <option value="" disabled>–––––&nbsp;or&nbsp;–––––</option>
                                                    <option value="/en/play-lottery/ie-daily-million/?from=circular&extra_jackpot=">Pick numbers</option>
                                                    <option class="light_version_site_hide" value="" disabled>––––––––––––</option>

                                                    <option class="opt-system" value="/en/play-lottery/ie-daily-million/?from=index_lotto&system=1&extra_jackpot=">System &#128200;</option>
                                                </select>
                                                <a href="/en/play-lottery/ie-daily-million/?from=circular&extra_jackpot=" class="btn btn-success event-easy-pick-main-btn">Play<span class="fa-solid fa-chevron-down"></span></a>
                                                <div class="lottery_sel_dropdown">
                                                    <div class="offers">
                                                        <p><a href="/en/play-lottery/ie-daily-million/?from=circular&easy_pick=3&extra_jackpot=" class="event-easy-pick-offer">3 lines for $ 8.16</a></p>
                                                        <p><a href="/en/play-lottery/ie-daily-million/?from=circular&easy_pick=5&extra_jackpot=" class="event-easy-pick-offer">5 lines for $ 12.92</a></p>
                                                    </div>
                                                    <div class="or">–––––&nbsp;or&nbsp;–––––</div>
                                                    <p><a href="/en/play-lottery/ie-daily-million/?from=circular&extra_jackpot=" class="lottery_sel_choose">Pick numbers</a></p>
                                                    <div class="or light_version_site_hide">–––––––––––––</div>


                                                    <p style="margin-top: 5px;"><a href="/en/play-lottery/ie-daily-million/?from=index_lotto&system=1&extra_jackpot=" class="lottery_sel_choose game-type-ico lamp opt-system">System</a></p>

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div><div class="lottery_slider_item">
                                <div class="lottery_item">
                                    <div class="lottery_item_top" style="background-image: url('https://static.cdnland.com/upload/images/bg/ca-649-lotto.svg');">
                                        <div class="lottery_item_img"><a href="/en/play-lottery/lotto-649/?from=circular&extra_jackpot="><img src="https://static.cdnland.com/upload/images/logo/svg/649_lotto.svg" alt="Lotto 6/49"/></a></div>
                                        <div class="lottery_item_val"><span class="jack"><b>C$ 5</b><br/><span class="mln_icon_extra text-nowrap">Million </span></span></div>
                                    </div>
                                    <div class="lottery_item_cont">
                                        <a href="#windowAlert" class="ratestars fancybox" onclick="yaGoals('CLEVER');" data-title="Today&#039;s Top-Rated Lotteries" data-text="&lt;p&gt;We analyze dozens of parameters daily: Jackpot amount and tax deductions, winning odds and the number of prize divisions, cost of a single line, and availability of such options as &quot;Multiplier,&quot; and much more to offer you the best possible lottery at the moment!&lt;/p&gt;&lt;p&gt;Choose a lottery with the highest score to win more and spend less!&lt;/p&gt;" data-toggle="tooltip" data-placement="bottom" title="Lottery rating from 1 to 10">
                                            <span class="icon-rating"></span>
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
                                                    <option value="/en/play-lottery/lotto-649/?from=circular&easy_pick=1&extra_jackpot=" data-event-easy-pick="1">1 line for $ 5.91</option>
                                                    <option value="/en/play-lottery/lotto-649/?from=circular&easy_pick=3&extra_jackpot=" data-event-easy-pick="1">3 lines for $ 16.67</option>
                                                    <option value="" disabled>–––––&nbsp;or&nbsp;–––––</option>
                                                    <option value="/en/play-lottery/lotto-649/?from=circular&extra_jackpot=">Pick numbers</option>
                                                    <option class="light_version_site_hide" value="" disabled>––––––––––––</option>

                                                    <option class="opt-system" value="/en/play-lottery/lotto-649/?from=index_lotto&system=1&extra_jackpot=">System &#128200;</option>
                                                </select>
                                                <a href="/en/play-lottery/lotto-649/?from=circular&extra_jackpot=" class="btn btn-success event-easy-pick-main-btn">Play<span class="fa-solid fa-chevron-down"></span></a>
                                                <div class="lottery_sel_dropdown">
                                                    <div class="offers">
                                                        <p><a href="/en/play-lottery/lotto-649/?from=circular&easy_pick=1&extra_jackpot=" class="event-easy-pick-offer">1 line for $ 5.91</a></p>
                                                        <p><a href="/en/play-lottery/lotto-649/?from=circular&easy_pick=3&extra_jackpot=" class="event-easy-pick-offer">3 lines for $ 16.67</a></p>
                                                    </div>
                                                    <div class="or">–––––&nbsp;or&nbsp;–––––</div>
                                                    <p><a href="/en/play-lottery/lotto-649/?from=circular&extra_jackpot=" class="lottery_sel_choose">Pick numbers</a></p>
                                                    <div class="or light_version_site_hide">–––––––––––––</div>


                                                    <p style="margin-top: 5px;"><a href="/en/play-lottery/lotto-649/?from=index_lotto&system=1&extra_jackpot=" class="lottery_sel_choose game-type-ico lamp opt-system">System</a></p>

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div><div class="lottery_slider_item">
                                <div class="lottery_item">
                                    <div class="lottery_item_top" style="background-image: url('https://static.cdnland.com/upload/images/bg/eu-euromillions.svg');">
                                        <div class="lottery_item_img"><a href="/en/play-lottery/euromillions/?from=circular&extra_jackpot="><img src="https://static.cdnland.com/upload/images/logo/svg/euromillions.svg" alt="EuroMillions"/></a></div>
                                        <div class="lottery_item_val"><span class="jack"><b>€ 40</b><br/><span class="mln_icon_extra text-nowrap">Million </span></span></div>
                                    </div>
                                    <div class="lottery_item_cont">
                                        <a href="#windowAlert" class="ratestars fancybox" onclick="yaGoals('CLEVER');" data-title="Today&#039;s Top-Rated Lotteries" data-text="&lt;p&gt;We analyze dozens of parameters daily: Jackpot amount and tax deductions, winning odds and the number of prize divisions, cost of a single line, and availability of such options as &quot;Multiplier,&quot; and much more to offer you the best possible lottery at the moment!&lt;/p&gt;&lt;p&gt;Choose a lottery with the highest score to win more and spend less!&lt;/p&gt;" data-toggle="tooltip" data-placement="bottom" title="Lottery rating from 1 to 10">
                                            <span class="icon-rating"></span>
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
                                                    <option value="/en/play-lottery/euromillions/?from=circular&easy_pick=1&extra_jackpot=" data-event-easy-pick="1">1 line for $ 6.20</option>
                                                    <option value="/en/play-lottery/euromillions/?from=circular&easy_pick=3&extra_jackpot=" data-event-easy-pick="1">3 lines for $ 18.04</option>
                                                    <option value="" disabled>–––––&nbsp;or&nbsp;–––––</option>
                                                    <option value="/en/play-lottery/euromillions/?from=circular&extra_jackpot=">Pick numbers</option>
                                                    <option class="light_version_site_hide" value="" disabled>––––––––––––</option>
                                                    <option class="opt-syndicate" value="/en/play-lottery/euromillions/?from=index_lotto&syndicates=1&extra_jackpot=">Syndicate &#128293;</option>
                                                    <option class="opt-system" value="/en/play-lottery/euromillions/?from=index_lotto&system=1&extra_jackpot=">System &#128200;</option>
                                                </select>
                                                <a href="/en/play-lottery/euromillions/?from=circular&extra_jackpot=" class="btn btn-success event-easy-pick-main-btn">Play<span class="fa-solid fa-chevron-down"></span></a>
                                                <div class="lottery_sel_dropdown">
                                                    <div class="offers">
                                                        <p><a href="/en/play-lottery/euromillions/?from=circular&easy_pick=1&extra_jackpot=" class="event-easy-pick-offer">1 line for $ 6.20</a></p>
                                                        <p><a href="/en/play-lottery/euromillions/?from=circular&easy_pick=3&extra_jackpot=" class="event-easy-pick-offer">3 lines for $ 18.04</a></p>
                                                    </div>
                                                    <div class="or">–––––&nbsp;or&nbsp;–––––</div>
                                                    <p><a href="/en/play-lottery/euromillions/?from=circular&extra_jackpot=" class="lottery_sel_choose">Pick numbers</a></p>
                                                    <div class="or light_version_site_hide">–––––––––––––</div>

                                                    <p><a href="/en/play-lottery/euromillions/?from=index_lotto&syndicates=1&extra_jackpot=" class="lottery_sel_choose game-type-ico fire opt-syndicate">Syndicate</a></p>


                                                    <p style="margin-top: 5px;"><a href="/en/play-lottery/euromillions/?from=index_lotto&system=1&extra_jackpot=" class="lottery_sel_choose game-type-ico lamp opt-system">System</a></p>

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div><div class="lottery_slider_item">
                                <div class="lottery_item">
                                    <div class="lottery_item_top" style="background-image: url('https://static.cdnland.com/upload/images/bg/au-ozlotto.svg');">
                                        <div class="lottery_item_img"><a href="/en/play-lottery/oz-lotto/?from=circular&extra_jackpot="><img src="https://static.cdnland.com/upload/images/logo/svg/oz-lotto.svg" alt="Oz Lotto"/></a></div>
                                        <div class="lottery_item_val"><span class="jack"><b>A$ 20</b><br/><span class="mln_icon_extra text-nowrap">Million </span></span></div>
                                    </div>
                                    <div class="lottery_item_cont">
                                        <a href="#windowAlert" class="ratestars fancybox" onclick="yaGoals('CLEVER');" data-title="Today&#039;s Top-Rated Lotteries" data-text="&lt;p&gt;We analyze dozens of parameters daily: Jackpot amount and tax deductions, winning odds and the number of prize divisions, cost of a single line, and availability of such options as &quot;Multiplier,&quot; and much more to offer you the best possible lottery at the moment!&lt;/p&gt;&lt;p&gt;Choose a lottery with the highest score to win more and spend less!&lt;/p&gt;" data-toggle="tooltip" data-placement="bottom" title="Lottery rating from 1 to 10">
                                            <span class="icon-rating"></span>
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
                                                    <option value="/en/play-lottery/oz-lotto/?from=circular&easy_pick=4&extra_jackpot=" data-event-easy-pick="1">4 lines for $ 10.04</option>
                                                    <option value="/en/play-lottery/oz-lotto/?from=circular&easy_pick=7&extra_jackpot=" data-event-easy-pick="1">7 lines for $ 16.34</option>
                                                    <option value="" disabled>–––––&nbsp;or&nbsp;–––––</option>
                                                    <option value="/en/play-lottery/oz-lotto/?from=circular&extra_jackpot=">Pick numbers</option>
                                                    <option class="light_version_site_hide" value="" disabled>––––––––––––</option>
                                                    <option class="opt-syndicate" value="/en/play-lottery/oz-lotto/?from=index_lotto&syndicates=1&extra_jackpot=">Syndicate &#128293;</option>
                                                    <option class="opt-system" value="/en/play-lottery/oz-lotto/?from=index_lotto&system=1&extra_jackpot=">System &#128200;</option>
                                                </select>
                                                <a href="/en/play-lottery/oz-lotto/?from=circular&extra_jackpot=" class="btn btn-success event-easy-pick-main-btn">Play<span class="fa-solid fa-chevron-down"></span></a>
                                                <div class="lottery_sel_dropdown">
                                                    <div class="offers">
                                                        <p><a href="/en/play-lottery/oz-lotto/?from=circular&easy_pick=4&extra_jackpot=" class="event-easy-pick-offer">4 lines for $ 10.04</a></p>
                                                        <p><a href="/en/play-lottery/oz-lotto/?from=circular&easy_pick=7&extra_jackpot=" class="event-easy-pick-offer">7 lines for $ 16.34</a></p>
                                                    </div>
                                                    <div class="or">–––––&nbsp;or&nbsp;–––––</div>
                                                    <p><a href="/en/play-lottery/oz-lotto/?from=circular&extra_jackpot=" class="lottery_sel_choose">Pick numbers</a></p>
                                                    <div class="or light_version_site_hide">–––––––––––––</div>

                                                    <p><a href="/en/play-lottery/oz-lotto/?from=index_lotto&syndicates=1&extra_jackpot=" class="lottery_sel_choose game-type-ico fire opt-syndicate">Syndicate</a></p>


                                                    <p style="margin-top: 5px;"><a href="/en/play-lottery/oz-lotto/?from=index_lotto&system=1&extra_jackpot=" class="lottery_sel_choose game-type-ico lamp opt-system">System</a></p>

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div><div class="lottery_slider_item">
                                <div class="lottery_item">
                                    <div class="lottery_item_top" style="background-image: url('https://static.cdnland.com/upload/images/bg/uk-lotto.svg');">
                                        <div class="lottery_item_img"><a href="/en/play-lottery/uk-lotto/?from=circular&extra_jackpot="><img src="https://static.cdnland.com/upload/images/logo/svg/uk_lotto.svg" alt="UK Lotto"/></a></div>
                                        <div class="lottery_item_val"><span class="jack"><b>£ 2.5+</b><br/><span class="mln_icon_extra text-nowrap">Million </span></span></div>
                                    </div>
                                    <div class="lottery_item_cont">
                                        <a href="#windowAlert" class="ratestars fancybox" onclick="yaGoals('CLEVER');" data-title="Today&#039;s Top-Rated Lotteries" data-text="&lt;p&gt;We analyze dozens of parameters daily: Jackpot amount and tax deductions, winning odds and the number of prize divisions, cost of a single line, and availability of such options as &quot;Multiplier,&quot; and much more to offer you the best possible lottery at the moment!&lt;/p&gt;&lt;p&gt;Choose a lottery with the highest score to win more and spend less!&lt;/p&gt;" data-toggle="tooltip" data-placement="bottom" title="Lottery rating from 1 to 10">
                                            <span class="icon-rating"></span>
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
                                                    <option value="/en/play-lottery/uk-lotto/?from=circular&easy_pick=1&extra_jackpot=" data-event-easy-pick="1">1 line for $ 7.41</option>
                                                    <option value="/en/play-lottery/uk-lotto/?from=circular&easy_pick=3&extra_jackpot=" data-event-easy-pick="1">3 lines for $ 21.12</option>
                                                    <option value="" disabled>–––––&nbsp;or&nbsp;–––––</option>
                                                    <option value="/en/play-lottery/uk-lotto/?from=circular&extra_jackpot=">Pick numbers</option>
                                                    <option class="light_version_site_hide" value="" disabled>––––––––––––</option>

                                                    <option class="opt-system" value="/en/play-lottery/uk-lotto/?from=index_lotto&system=1&extra_jackpot=">System &#128200;</option>
                                                </select>
                                                <a href="/en/play-lottery/uk-lotto/?from=circular&extra_jackpot=" class="btn btn-success event-easy-pick-main-btn">Play<span class="fa-solid fa-chevron-down"></span></a>
                                                <div class="lottery_sel_dropdown">
                                                    <div class="offers">
                                                        <p><a href="/en/play-lottery/uk-lotto/?from=circular&easy_pick=1&extra_jackpot=" class="event-easy-pick-offer">1 line for $ 7.41</a></p>
                                                        <p><a href="/en/play-lottery/uk-lotto/?from=circular&easy_pick=3&extra_jackpot=" class="event-easy-pick-offer">3 lines for $ 21.12</a></p>
                                                    </div>
                                                    <div class="or">–––––&nbsp;or&nbsp;–––––</div>
                                                    <p><a href="/en/play-lottery/uk-lotto/?from=circular&extra_jackpot=" class="lottery_sel_choose">Pick numbers</a></p>
                                                    <div class="or light_version_site_hide">–––––––––––––</div>


                                                    <p style="margin-top: 5px;"><a href="/en/play-lottery/uk-lotto/?from=index_lotto&system=1&extra_jackpot=" class="lottery_sel_choose game-type-ico lamp opt-system">System</a></p>

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div><div class="lottery_slider_item">
                                <div class="lottery_item">
                                    <div class="lottery_item_top" style="background-image: url('https://static.cdnland.com/upload/images/bg/au-saturday-lotto.svg');">
                                        <div class="lottery_item_img"><a href="/en/play-lottery/au-saturday-lotto/?from=circular&extra_jackpot="><img src="https://static.cdnland.com/upload/images/logo/svg/saturday_lotto.svg" alt="Saturday Lotto"/></a></div>
                                        <div class="lottery_item_val"><span class="jack"><b>A$ 5</b><br/><span class="mln_icon_extra text-nowrap">Million </span></span></div>
                                    </div>
                                    <div class="lottery_item_cont">
                                        <a href="#windowAlert" class="ratestars fancybox" onclick="yaGoals('CLEVER');" data-title="Today&#039;s Top-Rated Lotteries" data-text="&lt;p&gt;We analyze dozens of parameters daily: Jackpot amount and tax deductions, winning odds and the number of prize divisions, cost of a single line, and availability of such options as &quot;Multiplier,&quot; and much more to offer you the best possible lottery at the moment!&lt;/p&gt;&lt;p&gt;Choose a lottery with the highest score to win more and spend less!&lt;/p&gt;" data-toggle="tooltip" data-placement="bottom" title="Lottery rating from 1 to 10">
                                            <span class="icon-rating"></span>
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
                                                    <option value="/en/play-lottery/au-saturday-lotto/?from=circular&easy_pick=6&extra_jackpot=" data-event-easy-pick="1">6 lines for $ 8.82</option>
                                                    <option value="/en/play-lottery/au-saturday-lotto/?from=circular&easy_pick=10&extra_jackpot=" data-event-easy-pick="1">10 lines for $ 13.38</option>
                                                    <option value="" disabled>–––––&nbsp;or&nbsp;–––––</option>
                                                    <option value="/en/play-lottery/au-saturday-lotto/?from=circular&extra_jackpot=">Pick numbers</option>
                                                    <option class="light_version_site_hide" value="" disabled>––––––––––––</option>
                                                    <option class="opt-syndicate" value="/en/play-lottery/au-saturday-lotto/?from=index_lotto&syndicates=1&extra_jackpot=">Syndicate &#128293;</option>
                                                    <option class="opt-system" value="/en/play-lottery/au-saturday-lotto/?from=index_lotto&system=1&extra_jackpot=">System &#128200;</option>
                                                </select>
                                                <a href="/en/play-lottery/au-saturday-lotto/?from=circular&extra_jackpot=" class="btn btn-success event-easy-pick-main-btn">Play<span class="fa-solid fa-chevron-down"></span></a>
                                                <div class="lottery_sel_dropdown">
                                                    <div class="offers">
                                                        <p><a href="/en/play-lottery/au-saturday-lotto/?from=circular&easy_pick=6&extra_jackpot=" class="event-easy-pick-offer">6 lines for $ 8.82</a></p>
                                                        <p><a href="/en/play-lottery/au-saturday-lotto/?from=circular&easy_pick=10&extra_jackpot=" class="event-easy-pick-offer">10 lines for $ 13.38</a></p>
                                                    </div>
                                                    <div class="or">–––––&nbsp;or&nbsp;–––––</div>
                                                    <p><a href="/en/play-lottery/au-saturday-lotto/?from=circular&extra_jackpot=" class="lottery_sel_choose">Pick numbers</a></p>
                                                    <div class="or light_version_site_hide">–––––––––––––</div>

                                                    <p><a href="/en/play-lottery/au-saturday-lotto/?from=index_lotto&syndicates=1&extra_jackpot=" class="lottery_sel_choose game-type-ico fire opt-syndicate">Syndicate</a></p>


                                                    <p style="margin-top: 5px;"><a href="/en/play-lottery/au-saturday-lotto/?from=index_lotto&system=1&extra_jackpot=" class="lottery_sel_choose game-type-ico lamp opt-system">System</a></p>

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div><div class="lottery_slider_item">
                                <div class="lottery_item">
                                    <div class="lottery_item_top" style="background-image: url('https://static.cdnland.com/upload/images/bg/eu-eurojackpot.svg');">
                                        <div class="lottery_item_img"><a href="/en/play-lottery/eurojackpot/?from=circular&extra_jackpot="><img src="https://static.cdnland.com/upload/images/logo/svg/eurojackpot.svg" alt="EuroJackpot"/></a></div>
                                        <div class="lottery_item_val"><span class="jack"><b>€ 10</b><br/><span class="mln_icon_extra text-nowrap">Million </span></span></div>
                                    </div>
                                    <div class="lottery_item_cont">
                                        <a href="#windowAlert" class="ratestars fancybox" onclick="yaGoals('CLEVER');" data-title="Today&#039;s Top-Rated Lotteries" data-text="&lt;p&gt;We analyze dozens of parameters daily: Jackpot amount and tax deductions, winning odds and the number of prize divisions, cost of a single line, and availability of such options as &quot;Multiplier,&quot; and much more to offer you the best possible lottery at the moment!&lt;/p&gt;&lt;p&gt;Choose a lottery with the highest score to win more and spend less!&lt;/p&gt;" data-toggle="tooltip" data-placement="bottom" title="Lottery rating from 1 to 10">
                                            <span class="icon-rating"></span>
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
                                                    <option value="/en/play-lottery/eurojackpot/?from=circular&extra_jackpot=">Pick numbers</option>
                                                    <option class="light_version_site_hide" value="" disabled>––––––––––––</option>
                                                    <option class="opt-syndicate" value="/en/play-lottery/eurojackpot/?from=index_lotto&syndicates=1&extra_jackpot=">Syndicate &#128293;</option>
                                                    <option class="opt-system" value="/en/play-lottery/eurojackpot/?from=index_lotto&system=1&extra_jackpot=">System &#128200;</option>
                                                </select>
                                                <a href="/en/play-lottery/eurojackpot/?from=circular&extra_jackpot=" class="btn btn-success event-easy-pick-main-btn">Play<span class="fa-solid fa-chevron-down"></span></a>
                                                <div class="lottery_sel_dropdown">
                                                    <div class="offers">
                                                        <p><a href="/en/play-lottery/eurojackpot/?from=circular&easy_pick=1&extra_jackpot=" class="event-easy-pick-offer">1 line for $ 5.76</a></p>
                                                        <p><a href="/en/play-lottery/eurojackpot/?from=circular&easy_pick=3&extra_jackpot=" class="event-easy-pick-offer">3 lines for $ 16.76</a></p>
                                                    </div>
                                                    <div class="or">–––––&nbsp;or&nbsp;–––––</div>
                                                    <p><a href="/en/play-lottery/eurojackpot/?from=circular&extra_jackpot=" class="lottery_sel_choose">Pick numbers</a></p>
                                                    <div class="or light_version_site_hide">–––––––––––––</div>

                                                    <p><a href="/en/play-lottery/eurojackpot/?from=index_lotto&syndicates=1&extra_jackpot=" class="lottery_sel_choose game-type-ico fire opt-syndicate">Syndicate</a></p>


                                                    <p style="margin-top: 5px;"><a href="/en/play-lottery/eurojackpot/?from=index_lotto&system=1&extra_jackpot=" class="lottery_sel_choose game-type-ico lamp opt-system">System</a></p>

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div><div class="lottery_slider_item">
                                <div class="lottery_item">
                                    <div class="lottery_item_top" style="background-image: url('https://static.cdnland.com/upload/images/bg/es-bonoloto.svg');">
                                        <div class="lottery_item_img"><a href="/en/play-lottery/bonoloto/?from=circular&extra_jackpot="><img src="https://static.cdnland.com/upload/images/logo/svg/bonoloto.svg" alt="BonoLoto"/></a></div>
                                        <div class="lottery_item_val"><span class="jack"><b>€ 400+</b><br/><span class="mln_icon_extra text-nowrap">Thousand </span></span></div>
                                    </div>
                                    <div class="lottery_item_cont">
                                        <a href="#windowAlert" class="ratestars fancybox" onclick="yaGoals('CLEVER');" data-title="Today&#039;s Top-Rated Lotteries" data-text="&lt;p&gt;We analyze dozens of parameters daily: Jackpot amount and tax deductions, winning odds and the number of prize divisions, cost of a single line, and availability of such options as &quot;Multiplier,&quot; and much more to offer you the best possible lottery at the moment!&lt;/p&gt;&lt;p&gt;Choose a lottery with the highest score to win more and spend less!&lt;/p&gt;" data-toggle="tooltip" data-placement="bottom" title="Lottery rating from 1 to 10">
                                            <span class="icon-rating"></span>
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
                                                    <option value="/en/play-lottery/bonoloto/?from=circular&extra_jackpot=">Pick numbers</option>
                                                    <option class="light_version_site_hide" value="" disabled>––––––––––––</option>

                                                    <option class="opt-system" value="/en/play-lottery/bonoloto/?from=index_lotto&system=1&extra_jackpot=">System &#128200;</option>
                                                </select>
                                                <a href="/en/play-lottery/bonoloto/?from=circular&extra_jackpot=" class="btn btn-success event-easy-pick-main-btn">Play<span class="fa-solid fa-chevron-down"></span></a>
                                                <div class="lottery_sel_dropdown">
                                                    <div class="offers">
                                                        <p><a href="/en/play-lottery/bonoloto/?from=circular&easy_pick=2&extra_jackpot=" class="event-easy-pick-offer">2 lines for $ 3.70</a></p>
                                                        <p><a href="/en/play-lottery/bonoloto/?from=circular&easy_pick=4&extra_jackpot=" class="event-easy-pick-offer">4 lines for $ 7.03</a></p>
                                                    </div>
                                                    <div class="or">–––––&nbsp;or&nbsp;–––––</div>
                                                    <p><a href="/en/play-lottery/bonoloto/?from=circular&extra_jackpot=" class="lottery_sel_choose">Pick numbers</a></p>
                                                    <div class="or light_version_site_hide">–––––––––––––</div>


                                                    <p style="margin-top: 5px;"><a href="/en/play-lottery/bonoloto/?from=index_lotto&system=1&extra_jackpot=" class="lottery_sel_choose game-type-ico lamp opt-system">System</a></p>

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div><div class="lottery_slider_item">
                                <div class="lottery_item">
                                    <div class="lottery_item_top" style="background-image: url('https://static.cdnland.com/upload/images/bg/it-superenalotto.svg');">
                                        <div class="lottery_item_img"><a href="/en/play-lottery/superenalotto/?from=circular&extra_jackpot="><img src="https://static.cdnland.com/upload/images/logo/svg/superenalotto.svg" alt="SuperEnalotto"/></a></div>
                                        <div class="lottery_item_val"><span class="jack"><b>€ 1.3+</b><br/><span class="mln_icon_extra text-nowrap">Million </span></span></div>
                                    </div>
                                    <div class="lottery_item_cont">
                                        <a href="#windowAlert" class="ratestars fancybox" onclick="yaGoals('CLEVER');" data-title="Today&#039;s Top-Rated Lotteries" data-text="&lt;p&gt;We analyze dozens of parameters daily: Jackpot amount and tax deductions, winning odds and the number of prize divisions, cost of a single line, and availability of such options as &quot;Multiplier,&quot; and much more to offer you the best possible lottery at the moment!&lt;/p&gt;&lt;p&gt;Choose a lottery with the highest score to win more and spend less!&lt;/p&gt;" data-toggle="tooltip" data-placement="bottom" title="Lottery rating from 1 to 10">
                                            <span class="icon-rating"></span>
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
                                                    <option value="/en/play-lottery/superenalotto/?from=circular&easy_pick=1&extra_jackpot=" data-event-easy-pick="1">1 line for $ 3.04</option>
                                                    <option value="/en/play-lottery/superenalotto/?from=circular&easy_pick=3&extra_jackpot=" data-event-easy-pick="1">3 lines for $ 8.85</option>
                                                    <option value="" disabled>–––––&nbsp;or&nbsp;–––––</option>
                                                    <option value="/en/play-lottery/superenalotto/?from=circular&extra_jackpot=">Pick numbers</option>
                                                    <option class="light_version_site_hide" value="" disabled>––––––––––––</option>
                                                    <option class="opt-syndicate" value="/en/play-lottery/superenalotto/?from=index_lotto&syndicates=1&extra_jackpot=">Syndicate &#128293;</option>
                                                    <option class="opt-system" value="/en/play-lottery/superenalotto/?from=index_lotto&system=1&extra_jackpot=">System &#128200;</option>
                                                </select>
                                                <a href="/en/play-lottery/superenalotto/?from=circular&extra_jackpot=" class="btn btn-success event-easy-pick-main-btn">Play<span class="fa-solid fa-chevron-down"></span></a>
                                                <div class="lottery_sel_dropdown">
                                                    <div class="offers">
                                                        <p><a href="/en/play-lottery/superenalotto/?from=circular&easy_pick=1&extra_jackpot=" class="event-easy-pick-offer">1 line for $ 3.04</a></p>
                                                        <p><a href="/en/play-lottery/superenalotto/?from=circular&easy_pick=3&extra_jackpot=" class="event-easy-pick-offer">3 lines for $ 8.85</a></p>
                                                    </div>
                                                    <div class="or">–––––&nbsp;or&nbsp;–––––</div>
                                                    <p><a href="/en/play-lottery/superenalotto/?from=circular&extra_jackpot=" class="lottery_sel_choose">Pick numbers</a></p>
                                                    <div class="or light_version_site_hide">–––––––––––––</div>

                                                    <p><a href="/en/play-lottery/superenalotto/?from=index_lotto&syndicates=1&extra_jackpot=" class="lottery_sel_choose game-type-ico fire opt-syndicate">Syndicate</a></p>


                                                    <p style="margin-top: 5px;"><a href="/en/play-lottery/superenalotto/?from=index_lotto&system=1&extra_jackpot=" class="lottery_sel_choose game-type-ico lamp opt-system">System</a></p>

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
                                            <span class="icon-rating"></span>
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
                                            <span class="icon-rating"></span>
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
                                            <span class="icon-rating"></span>
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
                                            <span class="icon-rating"></span>
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
                                        <div class="lottery_item_img"><a href="/en/play-lottery/superlotto-plus/?from=circular&extra_jackpot="><img src="https://static.cdnland.com/upload/images/logo/svg/superlotto-plus.svg" alt="SuperLotto Plus"/></a></div>
                                        <div class="lottery_item_val"><span class="jack"><b>$ 46</b><br/><span class="mln_icon_extra text-nowrap">Million </span></span></div>
                                    </div>
                                    <div class="lottery_item_cont">
                                        <a href="#windowAlert" class="ratestars fancybox" onclick="yaGoals('CLEVER');" data-title="Today&#039;s Top-Rated Lotteries" data-text="&lt;p&gt;We analyze dozens of parameters daily: Jackpot amount and tax deductions, winning odds and the number of prize divisions, cost of a single line, and availability of such options as &quot;Multiplier,&quot; and much more to offer you the best possible lottery at the moment!&lt;/p&gt;&lt;p&gt;Choose a lottery with the highest score to win more and spend less!&lt;/p&gt;" data-toggle="tooltip" data-placement="bottom" title="Lottery rating from 1 to 10">
                                            <span class="icon-rating"></span>
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
                                                    <option value="/en/play-lottery/superlotto-plus/?from=circular&easy_pick=2&extra_jackpot=" data-event-easy-pick="1">2 lines for $ 5.98</option>
                                                    <option value="/en/play-lottery/superlotto-plus/?from=circular&easy_pick=3&extra_jackpot=" data-event-easy-pick="1">3 lines for $ 8.52</option>
                                                    <option value="" disabled>–––––&nbsp;or&nbsp;–––––</option>
                                                    <option value="/en/play-lottery/superlotto-plus/?from=circular&extra_jackpot=">Pick numbers</option>
                                                    <option class="light_version_site_hide" value="" disabled>––––––––––––</option>
                                                    <option class="opt-syndicate" value="/en/play-lottery/superlotto-plus/?from=index_lotto&syndicates=1&extra_jackpot=">Syndicate &#128293;</option>
                                                    <option class="opt-system" value="/en/play-lottery/superlotto-plus/?from=index_lotto&system=1&extra_jackpot=">System &#128200;</option>
                                                </select>
                                                <a href="/en/play-lottery/superlotto-plus/?from=circular&extra_jackpot=" class="btn btn-success event-easy-pick-main-btn">Play<span class="fa-solid fa-chevron-down"></span></a>
                                                <div class="lottery_sel_dropdown">
                                                    <div class="offers">
                                                        <p><a href="/en/play-lottery/superlotto-plus/?from=circular&easy_pick=2&extra_jackpot=" class="event-easy-pick-offer">2 lines for $ 5.98</a></p>
                                                        <p><a href="/en/play-lottery/superlotto-plus/?from=circular&easy_pick=3&extra_jackpot=" class="event-easy-pick-offer">3 lines for $ 8.52</a></p>
                                                    </div>
                                                    <div class="or">–––––&nbsp;or&nbsp;–––––</div>
                                                    <p><a href="/en/play-lottery/superlotto-plus/?from=circular&extra_jackpot=" class="lottery_sel_choose">Pick numbers</a></p>
                                                    <div class="or light_version_site_hide">–––––––––––––</div>

                                                    <p><a href="/en/play-lottery/superlotto-plus/?from=index_lotto&syndicates=1&extra_jackpot=" class="lottery_sel_choose game-type-ico fire opt-syndicate">Syndicate</a></p>


                                                    <p style="margin-top: 5px;"><a href="/en/play-lottery/superlotto-plus/?from=index_lotto&system=1&extra_jackpot=" class="lottery_sel_choose game-type-ico lamp opt-system">System</a></p>

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
                                            <span class="icon-rating"></span>
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
                                            <span class="icon-rating"></span>
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
                                            <span class="icon-rating"></span>
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
                                            <span class="icon-rating"></span>
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
                                            <span class="icon-rating"></span>
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
                                        <div class="lottery_item_img"><a href="/en/play-lottery/el-gordo/?from=circular&extra_jackpot="><img src="https://static.cdnland.com/upload/images/logo/svg/el_gordo.svg" alt="El Gordo de la Primitiva"/></a></div>
                                        <div class="lottery_item_val"><span class="jack"><b>€ 5+</b><br/><span class="mln_icon_extra text-nowrap">Million </span></span></div>
                                    </div>
                                    <div class="lottery_item_cont">
                                        <a href="#windowAlert" class="ratestars fancybox" onclick="yaGoals('CLEVER');" data-title="Today&#039;s Top-Rated Lotteries" data-text="&lt;p&gt;We analyze dozens of parameters daily: Jackpot amount and tax deductions, winning odds and the number of prize divisions, cost of a single line, and availability of such options as &quot;Multiplier,&quot; and much more to offer you the best possible lottery at the moment!&lt;/p&gt;&lt;p&gt;Choose a lottery with the highest score to win more and spend less!&lt;/p&gt;" data-toggle="tooltip" data-placement="bottom" title="Lottery rating from 1 to 10">
                                            <span class="icon-rating"></span>
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
                                                    <option value="/en/play-lottery/el-gordo/?from=circular&extra_jackpot=">Pick numbers</option>
                                                    <option class="light_version_site_hide" value="" disabled>––––––––––––</option>
                                                    <option class="opt-syndicate" value="/en/play-lottery/el-gordo/?from=index_lotto&syndicates=1&extra_jackpot=">Syndicate &#128293;</option>
                                                    <option class="opt-system" value="/en/play-lottery/el-gordo/?from=index_lotto&system=1&extra_jackpot=">System &#128200;</option>
                                                </select>
                                                <a href="/en/play-lottery/el-gordo/?from=circular&extra_jackpot=" class="btn btn-success event-easy-pick-main-btn">Play<span class="fa-solid fa-chevron-down"></span></a>
                                                <div class="lottery_sel_dropdown">
                                                    <div class="offers">
                                                        <p><a href="/en/play-lottery/el-gordo/?from=circular&easy_pick=2&extra_jackpot=" class="event-easy-pick-offer">2 lines for $ 9.68</a></p>
                                                        <p><a href="/en/play-lottery/el-gordo/?from=circular&easy_pick=3&extra_jackpot=" class="event-easy-pick-offer">3 lines for $ 13.50</a></p>
                                                    </div>
                                                    <div class="or">–––––&nbsp;or&nbsp;–––––</div>
                                                    <p><a href="/en/play-lottery/el-gordo/?from=circular&extra_jackpot=" class="lottery_sel_choose">Pick numbers</a></p>
                                                    <div class="or light_version_site_hide">–––––––––––––</div>

                                                    <p><a href="/en/play-lottery/el-gordo/?from=index_lotto&syndicates=1&extra_jackpot=" class="lottery_sel_choose game-type-ico fire opt-syndicate">Syndicate</a></p>


                                                    <p style="margin-top: 5px;"><a href="/en/play-lottery/el-gordo/?from=index_lotto&system=1&extra_jackpot=" class="lottery_sel_choose game-type-ico lamp opt-system">System</a></p>

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div><div class="lottery_slider_item">
                                <div class="lottery_item">
                                    <div class="lottery_item_top" style="background-image: url('https://static.cdnland.com/upload/images/bg/pl-poland-lotto.svg');">
                                        <div class="lottery_item_img"><a href="/en/play-lottery/poland-lotto/?from=circular&extra_jackpot="><img src="https://static.cdnland.com/upload/images/logo/svg/lotto_pl.svg" alt="Poland Lotto"/></a></div>
                                        <div class="lottery_item_val"><span class="jack"><b>zł 18</b><br/><span class="mln_icon_extra text-nowrap">Million </span></span></div>
                                    </div>
                                    <div class="lottery_item_cont">
                                        <a href="#windowAlert" class="ratestars fancybox" onclick="yaGoals('CLEVER');" data-title="Today&#039;s Top-Rated Lotteries" data-text="&lt;p&gt;We analyze dozens of parameters daily: Jackpot amount and tax deductions, winning odds and the number of prize divisions, cost of a single line, and availability of such options as &quot;Multiplier,&quot; and much more to offer you the best possible lottery at the moment!&lt;/p&gt;&lt;p&gt;Choose a lottery with the highest score to win more and spend less!&lt;/p&gt;" data-toggle="tooltip" data-placement="bottom" title="Lottery rating from 1 to 10">
                                            <span class="icon-rating"></span>
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
                                                    <option value="/en/play-lottery/poland-lotto/?from=circular&easy_pick=3&extra_jackpot=" data-event-easy-pick="1">3 lines for $ 5.22</option>
                                                    <option value="/en/play-lottery/poland-lotto/?from=circular&easy_pick=5&extra_jackpot=" data-event-easy-pick="1">5 lines for $ 8.09</option>
                                                    <option value="" disabled>–––––&nbsp;or&nbsp;–––––</option>
                                                    <option value="/en/play-lottery/poland-lotto/?from=circular&extra_jackpot=">Pick numbers</option>
                                                    <option class="light_version_site_hide" value="" disabled>––––––––––––</option>

                                                    <option class="opt-system" value="/en/play-lottery/poland-lotto/?from=index_lotto&system=1&extra_jackpot=">System &#128200;</option>
                                                </select>
                                                <a href="/en/play-lottery/poland-lotto/?from=circular&extra_jackpot=" class="btn btn-success event-easy-pick-main-btn">Play<span class="fa-solid fa-chevron-down"></span></a>
                                                <div class="lottery_sel_dropdown">
                                                    <div class="offers">
                                                        <p><a href="/en/play-lottery/poland-lotto/?from=circular&easy_pick=3&extra_jackpot=" class="event-easy-pick-offer">3 lines for $ 5.22</a></p>
                                                        <p><a href="/en/play-lottery/poland-lotto/?from=circular&easy_pick=5&extra_jackpot=" class="event-easy-pick-offer">5 lines for $ 8.09</a></p>
                                                    </div>
                                                    <div class="or">–––––&nbsp;or&nbsp;–––––</div>
                                                    <p><a href="/en/play-lottery/poland-lotto/?from=circular&extra_jackpot=" class="lottery_sel_choose">Pick numbers</a></p>
                                                    <div class="or light_version_site_hide">–––––––––––––</div>


                                                    <p style="margin-top: 5px;"><a href="/en/play-lottery/poland-lotto/?from=index_lotto&system=1&extra_jackpot=" class="lottery_sel_choose game-type-ico lamp opt-system">System</a></p>

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
                                            <span class="icon-rating"></span>
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
                                            <span class="icon-rating"></span>
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
                                            <span class="icon-rating"></span>
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
