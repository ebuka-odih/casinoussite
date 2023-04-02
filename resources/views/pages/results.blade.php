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
        <section class="section-results">
            <div class="container">
                <h1>Watch the latest lottery results</h1>
                <div class="row">
                    <div class="col-lg-8">
                        <div class="text-muted page_txt"><p>Here you can find the results for the most amazing lotteries in the world. This page is updated right after each draw takes place! You can go to the result page of each lottery to view more prize information or access the archives to skim the winning numbers for past draws.</p></div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="noteblock">
                            <div class="noteblock_img">
                                <img src="https://static.cdnland.com/new/images/svg/icon3.svg" alt="">
                            </div>
                            <div class="noteblock_cont">
                                <div class="noteblock_txt">Note that due to time zone differences, the draw date may vary from region to region!</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 d-none d-md-block d-lg-none">
                        <div class="promotions_trust">
                            <div class="promotions_trust_fl">
                                <div class="promotions_trust_logo">
                                    <a class="trust-logo" rel="nofollow" target="_blank" href="https://trustpilot.com/review/www.agentlotto.com" onclick="yaGoals('TRUSTPILOT');"><img src="https://static.cdnland.com/new/images/svg/logo_trustpilot.svg" alt=""></a>
                                </div>
                                <div class="promotions_trust_stars">
                                    <div class="trustrate">
                                        <a rel="nofollow" target="_blank" href="https://trustpilot.com/review/www.agentlotto.com" onclick="yaGoals('TRUSTPILOT');">

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
                <div class="row results-action">
                    <div class="col-lg-8 form-group">
                        <input id="lotto_for_search" onkeyup="search_lotto_by_name()" type="search" class="form-control form-control__search" placeholder="Search by name">
                    </div>
                </div>
                <div class="results">

                    <div class="results_item" data-lotto="Powerball">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="results_item_cont">
                                    <div class="results_item_top">
                                        <div class="lott">
                                            <div class="lott_flag"><img src="https://static.cdnland.com/new/images/svg/country/us.svg" alt="US"></div>
                                            <div class="lott_info">
                                                <div class="lott_name"><a href="">Powerball</a></div>
                                                <div class="lott_data">Draw Date Saturday, 01.04.2023</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="results_item_mid">
                                        <ul class="numberList">
                                            <li class="" title=""><span>11</span></li><li class="" title=""><span>19</span></li><li class="" title=""><span>21</span></li><li class="" title=""><span>29</span></li><li class="" title=""><span>52</span></li><li class="power" title=""><span>17</span></li><li class="multi" title="Multiplier"><span>x4</span></li>
                                        </ul>

                                    </div>
                                    <div class="results_item_bot results_item_bot-fl">
                                        <div class="results_item_right">
                                            <div class="team" style="" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Our winners">
                                                <span class="fa fa-users"></span>
                                                <div class="team_val">465</div>
                                            </div>
                                            <div class="link-play" data-toggle="tooltip" data-placement="bottom" title="" style="" data-original-title="Lottery broadcast recordings available"><span class="fa-regular fa-circle-play"></span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="jackpot">
                                    <div class="jackpot_cont">
                                        <div class="jackpot_val">$ 159 <span class="mln_icon_extra text-nowrap">Million </span></div>
                                        <div class="jackpot_date time_val">Next draw in <span class=" " date-close="145714">1&nbsp;day</span></div>
                                        <div class="lottery_sel">

                                            <div class="event-easy-pick-cont">
                                                <select name="easy_pick" class="lottery_sel_select event-easy-pick-select">
                                                    <option></option>
                                                    <option value="/en/play-lottery/powerball/?from=results_list&amp;easy_pick=1&amp;extra_jackpot=" data-event-easy-pick="1">1 line for $ 5.29</option>
                                                    <option value="/en/play-lottery/powerball/?from=results_list&amp;easy_pick=3&amp;extra_jackpot=" data-event-easy-pick="1">3 lines for $ 14.92</option>
                                                    <option value="" disabled="">–––––&nbsp;or&nbsp;–––––</option>
                                                    <option value="/en/play-lottery/powerball/?from=results_list&amp;extra_jackpot=">Pick numbers</option>



                                                </select>
                                                <a href="/en/play-lottery/powerball/?from=results_list&amp;extra_jackpot=" class="btn btn-success event-easy-pick-main-btn">
                                                    Play<span class="fa-solid fa-chevron-down"></span>
                                                </a>
                                                <div class="lottery_sel_dropdown">
                                                    <div class="offers">
                                                        <p><a href="/en/play-lottery/powerball/?from=results_list&amp;easy_pick=1&amp;extra_jackpot=" class="event-easy-pick-offer">1 line for $ 5.29</a></p>
                                                        <p><a href="/en/play-lottery/powerball/?from=results_list&amp;easy_pick=3&amp;extra_jackpot=" class="event-easy-pick-offer">3 lines for $ 14.92</a></p>
                                                    </div>
                                                    <div class="or">––––– or –––––</div>
                                                    <p><a href="/en/play-lottery/powerball/?from=results_list&amp;extra_jackpot=" class="lottery_sel_choose">Pick numbers</a></p>
                                                    <div class="or light_version_site_hide">–––––––––––––</div>

                                                    <p><a href="/en/play-lottery/powerball/?from=index_lotto&amp;syndicates=1&amp;extra_jackpot=" class="lottery_sel_choose game-type-ico fire opt-syndicate">Syndicate</a></p>


                                                    <p style="margin-top: 5px;"><a href="/en/play-lottery/powerball/?from=index_lotto&amp;system=1&amp;extra_jackpot=" class="lottery_sel_choose game-type-ico lamp opt-system">System</a></p>

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <a href="#windowAlert" class="ratestars fancybox" onclick="yaGoals('CLEVER');" data-title="Today's Top-Rated Lotteries" data-text="<p>We analyze dozens of parameters daily: Jackpot amount and tax deductions, winning odds and the number of prize divisions, cost of a single line, and availability of such options as &quot;Multiplier,&quot; and much more to offer you the best possible lottery at the moment!</p><p>Choose a lottery with the highest score to win more and spend less!</p>" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Lottery rating from 1 to 10">
                                        <span class="fa-solid fa-star"></span>
                                        <span class="ratestars_val">7.5</span>
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="results_item" data-lotto="SuperLotto Plus">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="results_item_cont">
                                    <div class="results_item_top">
                                        <div class="lott">
                                            <div class="lott_flag"><img src="https://static.cdnland.com/new/images/svg/country/us.svg" alt="US"></div>
                                            <div class="lott_info">
                                                <div class="lott_name"><a >SuperLotto Plus</a></div>
                                                <div class="lott_data">Draw Date Saturday, 01.04.2023</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="results_item_mid">
                                        <ul class="numberList">
                                            <li class="" title=""><span>2</span></li><li class="" title=""><span>9</span></li><li class="" title=""><span>11</span></li><li class="" title=""><span>13</span></li><li class="" title=""><span>46</span></li><li class="power" title=""><span>9</span></li>
                                        </ul>

                                    </div>
                                    <div class="results_item_bot results_item_bot-fl">
                                        <div class="results_item_right">
                                            <div class="team" style="" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Our winners">
                                                <span class="fa fa-users"></span>
                                                <div class="team_val">60</div>
                                            </div>
                                            <div class="link-play" data-toggle="tooltip" data-placement="bottom" title="" style="visibility: hidden;" data-original-title="Lottery broadcast recordings available"><span class="fa-regular fa-circle-play"></span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="jackpot">
                                    <div class="jackpot_cont">
                                        <div class="jackpot_val">$ 47 <span class="mln_icon_extra text-nowrap">Million </span></div>
                                        <div class="jackpot_date time_val">Next draw in <span class=" " date-close="318514">3&nbsp;days</span></div>
                                        <div class="lottery_sel">

                                            <div class="event-easy-pick-cont">
                                                <select name="easy_pick" class="lottery_sel_select event-easy-pick-select">
                                                    <option></option>
                                                    <option value="/en/play-lottery/superlotto-plus/?from=results_list&amp;easy_pick=2&amp;extra_jackpot=" data-event-easy-pick="1">2 lines for $ 5.98</option>
                                                    <option value="/en/play-lottery/superlotto-plus/?from=results_list&amp;easy_pick=3&amp;extra_jackpot=" data-event-easy-pick="1">3 lines for $ 8.52</option>
                                                    <option value="" disabled="">–––––&nbsp;or&nbsp;–––––</option>
                                                    <option value="/en/play-lottery/superlotto-plus/?from=results_list&amp;extra_jackpot=">Pick numbers</option>



                                                </select>
                                                <a href="/en/play-lottery/superlotto-plus/?from=results_list&amp;extra_jackpot=" class="btn btn-success event-easy-pick-main-btn">
                                                    Play<span class="fa-solid fa-chevron-down"></span>
                                                </a>
                                                <div class="lottery_sel_dropdown">
                                                    <div class="offers">
                                                        <p><a href="/en/play-lottery/superlotto-plus/?from=results_list&amp;easy_pick=2&amp;extra_jackpot=" class="event-easy-pick-offer">2 lines for $ 5.98</a></p>
                                                        <p><a href="/en/play-lottery/superlotto-plus/?from=results_list&amp;easy_pick=3&amp;extra_jackpot=" class="event-easy-pick-offer">3 lines for $ 8.52</a></p>
                                                    </div>
                                                    <div class="or">––––– or –––––</div>
                                                    <p><a href="/en/play-lottery/superlotto-plus/?from=results_list&amp;extra_jackpot=" class="lottery_sel_choose">Pick numbers</a></p>
                                                    <div class="or light_version_site_hide">–––––––––––––</div>

                                                    <p><a href="/en/play-lottery/superlotto-plus/?from=index_lotto&amp;syndicates=1&amp;extra_jackpot=" class="lottery_sel_choose game-type-ico fire opt-syndicate">Syndicate</a></p>


                                                    <p style="margin-top: 5px;"><a href="/en/play-lottery/superlotto-plus/?from=index_lotto&amp;system=1&amp;extra_jackpot=" class="lottery_sel_choose game-type-ico lamp opt-system">System</a></p>

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <a href="#windowAlert" class="ratestars fancybox" onclick="yaGoals('CLEVER');" data-title="Today's Top-Rated Lotteries" data-text="<p>We analyze dozens of parameters daily: Jackpot amount and tax deductions, winning odds and the number of prize divisions, cost of a single line, and availability of such options as &quot;Multiplier,&quot; and much more to offer you the best possible lottery at the moment!</p><p>Choose a lottery with the highest score to win more and spend less!</p>" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Lottery rating from 1 to 10">
                                        <span class="fa-solid fa-star"></span>
                                        <span class="ratestars_val">7.0</span>
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="results_item" data-lotto="Lotto Texas">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="results_item_cont">
                                    <div class="results_item_top">
                                        <div class="lott">
                                            <div class="lott_flag"><img src="https://static.cdnland.com/new/images/svg/country/us.svg" alt="US"></div>
                                            <div class="lott_info">
                                                <div class="lott_name"><a >Lotto Texas</a></div>
                                                <div class="lott_data">Draw Date Saturday, 01.04.2023</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="results_item_mid">
                                        <ul class="numberList">
                                            <li class="" title=""><span>16</span></li><li class="" title=""><span>17</span></li><li class="" title=""><span>20</span></li><li class="" title=""><span>28</span></li><li class="" title=""><span>36</span></li><li class="" title=""><span>47</span></li>
                                        </ul>

                                    </div>
                                    <div class="results_item_bot results_item_bot-fl">
                                        <div class="results_item_right">
                                            <div class="team" style="" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Our winners">
                                                <span class="fa fa-users"></span>
                                                <div class="team_val">342</div>
                                            </div>
                                            <div class="link-play" data-toggle="tooltip" data-placement="bottom" title="" style="" data-original-title="Lottery broadcast recordings available"><span class="fa-regular fa-circle-play"></span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="jackpot">
                                    <div class="jackpot_cont">
                                        <div class="jackpot_val">$ 61.5 <span class="mln_icon_extra text-nowrap">Million </span></div>
                                        <div class="jackpot_date time_val">Next draw in <span class=" " date-close="149314">1&nbsp;day</span></div>
                                        <div class="lottery_sel">

                                            <div class="event-easy-pick-cont">
                                                <select name="easy_pick" class="lottery_sel_select event-easy-pick-select">
                                                    <option></option>
                                                    <option value="/en/play-lottery/lotto-texas/?from=results_list&amp;easy_pick=1&amp;extra_jackpot=" data-event-easy-pick="1">1 line for $ 3.79</option>
                                                    <option value="/en/play-lottery/lotto-texas/?from=results_list&amp;easy_pick=3&amp;extra_jackpot=" data-event-easy-pick="1">3 lines for $ 10.80</option>
                                                    <option value="" disabled="">–––––&nbsp;or&nbsp;–––––</option>
                                                    <option value="/en/play-lottery/lotto-texas/?from=results_list&amp;extra_jackpot=">Pick numbers</option>



                                                </select>
                                                <a href="/en/play-lottery/lotto-texas/?from=results_list&amp;extra_jackpot=" class="btn btn-success event-easy-pick-main-btn">
                                                    Play<span class="fa-solid fa-chevron-down"></span>
                                                </a>
                                                <div class="lottery_sel_dropdown">
                                                    <div class="offers">
                                                        <p><a href="/en/play-lottery/lotto-texas/?from=results_list&amp;easy_pick=1&amp;extra_jackpot=" class="event-easy-pick-offer">1 line for $ 3.79</a></p>
                                                        <p><a href="/en/play-lottery/lotto-texas/?from=results_list&amp;easy_pick=3&amp;extra_jackpot=" class="event-easy-pick-offer">3 lines for $ 10.80</a></p>
                                                    </div>
                                                    <div class="or">––––– or –––––</div>
                                                    <p><a href="/en/play-lottery/lotto-texas/?from=results_list&amp;extra_jackpot=" class="lottery_sel_choose">Pick numbers</a></p>
                                                    <div class="or light_version_site_hide">–––––––––––––</div>


                                                    <p style="margin-top: 5px;"><a href="/en/play-lottery/lotto-texas/?from=index_lotto&amp;system=1&amp;extra_jackpot=" class="lottery_sel_choose game-type-ico lamp opt-system">System</a></p>

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <a href="#windowAlert" class="ratestars fancybox" onclick="yaGoals('CLEVER');" data-title="Today's Top-Rated Lotteries" data-text="<p>We analyze dozens of parameters daily: Jackpot amount and tax deductions, winning odds and the number of prize divisions, cost of a single line, and availability of such options as &quot;Multiplier,&quot; and much more to offer you the best possible lottery at the moment!</p><p>Choose a lottery with the highest score to win more and spend less!</p>" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Lottery rating from 1 to 10">
                                        <span class="fa-solid fa-star"></span>
                                        <span class="ratestars_val">7.2</span>
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="results_item" data-lotto="New York Lotto">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="results_item_cont">
                                    <div class="results_item_top">
                                        <div class="lott">
                                            <div class="lott_flag"><img src="https://static.cdnland.com/new/images/svg/country/us.svg" alt="US"></div>
                                            <div class="lott_info">
                                                <div class="lott_name"><a >New York Lotto</a></div>
                                                <div class="lott_data">Draw Date Saturday, 01.04.2023</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="results_item_mid">
                                        <ul class="numberList">
                                            <li class="" title=""><span>10</span></li><li class="" title=""><span>13</span></li><li class="" title=""><span>16</span></li><li class="" title=""><span>39</span></li><li class="" title=""><span>51</span></li><li class="" title=""><span>52</span></li><li class="jolly" title="Bonus Number"><span>6</span></li>
                                        </ul>

                                    </div>
                                    <div class="results_item_bot results_item_bot-fl">
                                        <div class="results_item_right">
                                            <div class="team" style="" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Our winners">
                                                <span class="fa fa-users"></span>
                                                <div class="team_val">69</div>
                                            </div>
                                            <div class="link-play" data-toggle="tooltip" data-placement="bottom" title="" style="visibility: hidden;" data-original-title="Lottery broadcast recordings available"><span class="fa-regular fa-circle-play"></span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="jackpot">
                                    <div class="jackpot_cont">
                                        <div class="jackpot_val">$ 2.1 <span class="mln_icon_extra text-nowrap">Million </span></div>
                                        <div class="jackpot_date time_val">Next draw in <span class=" " date-close="318514">3&nbsp;days</span></div>
                                        <div class="lottery_sel">

                                            <div class="event-easy-pick-cont">
                                                <select name="easy_pick" class="lottery_sel_select event-easy-pick-select">
                                                    <option></option>
                                                    <option value="/en/play-lottery/new-york-lotto/?from=results_list&amp;easy_pick=2&amp;extra_jackpot=" data-event-easy-pick="1">2 lines for $ 3.00</option>
                                                    <option value="/en/play-lottery/new-york-lotto/?from=results_list&amp;easy_pick=4&amp;extra_jackpot=" data-event-easy-pick="1">4 lines for $ 5.82</option>
                                                    <option value="" disabled="">–––––&nbsp;or&nbsp;–––––</option>
                                                    <option value="/en/play-lottery/new-york-lotto/?from=results_list&amp;extra_jackpot=">Pick numbers</option>



                                                </select>
                                                <a href="/en/play-lottery/new-york-lotto/?from=results_list&amp;extra_jackpot=" class="btn btn-success event-easy-pick-main-btn">
                                                    Play<span class="fa-solid fa-chevron-down"></span>
                                                </a>
                                                <div class="lottery_sel_dropdown">
                                                    <div class="offers">
                                                        <p><a href="/en/play-lottery/new-york-lotto/?from=results_list&amp;easy_pick=2&amp;extra_jackpot=" class="event-easy-pick-offer">2 lines for $ 3.00</a></p>
                                                        <p><a href="/en/play-lottery/new-york-lotto/?from=results_list&amp;easy_pick=4&amp;extra_jackpot=" class="event-easy-pick-offer">4 lines for $ 5.82</a></p>
                                                    </div>
                                                    <div class="or">––––– or –––––</div>
                                                    <p><a href="/en/play-lottery/new-york-lotto/?from=results_list&amp;extra_jackpot=" class="lottery_sel_choose">Pick numbers</a></p>
                                                    <div class="or light_version_site_hide">–––––––––––––</div>


                                                    <p style="margin-top: 5px;"><a href="/en/play-lottery/new-york-lotto/?from=index_lotto&amp;system=1&amp;extra_jackpot=" class="lottery_sel_choose game-type-ico lamp opt-system">System</a></p>

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <a href="#windowAlert" class="ratestars fancybox" onclick="yaGoals('CLEVER');" data-title="Today's Top-Rated Lotteries" data-text="<p>We analyze dozens of parameters daily: Jackpot amount and tax deductions, winning odds and the number of prize divisions, cost of a single line, and availability of such options as &quot;Multiplier,&quot; and much more to offer you the best possible lottery at the moment!</p><p>Choose a lottery with the highest score to win more and spend less!</p>" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Lottery rating from 1 to 10">
                                        <span class="fa-solid fa-star"></span>
                                        <span class="ratestars_val">7.2</span>
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="results_item" data-lotto="Lotto 6/49">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="results_item_cont">
                                    <div class="results_item_top">
                                        <div class="lott">
                                            <div class="lott_flag"><img src="https://static.cdnland.com/new/images/svg/country/ca.svg" alt="CA"></div>
                                            <div class="lott_info">
                                                <div class="lott_name"><a >Lotto 6/49</a></div>
                                                <div class="lott_data">Draw Date Saturday, 01.04.2023</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="results_item_mid">
                                        <ul class="numberList">
                                            <li class="" title=""><span>5</span></li><li class="" title=""><span>11</span></li><li class="" title=""><span>23</span></li><li class="" title=""><span>31</span></li><li class="" title=""><span>45</span></li><li class="" title=""><span>49</span></li><li class="jolly" title="Bonus Ball"><span>6</span></li>
                                        </ul>

                                    </div>
                                    <div class="results_item_bot results_item_bot-fl">
                                        <div class="results_item_right">
                                            <div class="team" style="" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Our winners">
                                                <span class="fa fa-users"></span>
                                                <div class="team_val">9</div>
                                            </div>
                                            <div class="link-play" data-toggle="tooltip" data-placement="bottom" title="" style="" data-original-title="Lottery broadcast recordings available"><span class="fa-regular fa-circle-play"></span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="jackpot">
                                    <div class="jackpot_cont">
                                        <div class="jackpot_val">C$ 5 <span class="mln_icon_extra text-nowrap">Million </span></div>
                                        <div class="jackpot_date time_val">Next draw in <span class=" " date-close="314914">3&nbsp;days</span></div>
                                        <div class="lottery_sel">

                                            <div class="event-easy-pick-cont">
                                                <select name="easy_pick" class="lottery_sel_select event-easy-pick-select">
                                                    <option></option>
                                                    <option value="/en/play-lottery/lotto-649/?from=results_list&amp;easy_pick=1&amp;extra_jackpot=" data-event-easy-pick="1">1 line for $ 5.91</option>
                                                    <option value="/en/play-lottery/lotto-649/?from=results_list&amp;easy_pick=3&amp;extra_jackpot=" data-event-easy-pick="1">3 lines for $ 16.67</option>
                                                    <option value="" disabled="">–––––&nbsp;or&nbsp;–––––</option>
                                                    <option value="/en/play-lottery/lotto-649/?from=results_list&amp;extra_jackpot=">Pick numbers</option>



                                                </select>
                                                <a href="/en/play-lottery/lotto-649/?from=results_list&amp;extra_jackpot=" class="btn btn-success event-easy-pick-main-btn">
                                                    Play<span class="fa-solid fa-chevron-down"></span>
                                                </a>
                                                <div class="lottery_sel_dropdown">
                                                    <div class="offers">
                                                        <p><a href="/en/play-lottery/lotto-649/?from=results_list&amp;easy_pick=1&amp;extra_jackpot=" class="event-easy-pick-offer">1 line for $ 5.91</a></p>
                                                        <p><a href="/en/play-lottery/lotto-649/?from=results_list&amp;easy_pick=3&amp;extra_jackpot=" class="event-easy-pick-offer">3 lines for $ 16.67</a></p>
                                                    </div>
                                                    <div class="or">––––– or –––––</div>
                                                    <p><a href="/en/play-lottery/lotto-649/?from=results_list&amp;extra_jackpot=" class="lottery_sel_choose">Pick numbers</a></p>
                                                    <div class="or light_version_site_hide">–––––––––––––</div>


                                                    <p style="margin-top: 5px;"><a href="/en/play-lottery/lotto-649/?from=index_lotto&amp;system=1&amp;extra_jackpot=" class="lottery_sel_choose game-type-ico lamp opt-system">System</a></p>

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <a href="#windowAlert" class="ratestars fancybox" onclick="yaGoals('CLEVER');" data-title="Today's Top-Rated Lotteries" data-text="<p>We analyze dozens of parameters daily: Jackpot amount and tax deductions, winning odds and the number of prize divisions, cost of a single line, and availability of such options as &quot;Multiplier,&quot; and much more to offer you the best possible lottery at the moment!</p><p>Choose a lottery with the highest score to win more and spend less!</p>" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Lottery rating from 1 to 10">
                                        <span class="fa-solid fa-star"></span>
                                        <span class="ratestars_val">7.4</span>
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="results_item" data-lotto="Lotto America">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="results_item_cont">
                                    <div class="results_item_top">
                                        <div class="lott">
                                            <div class="lott_flag"><img src="https://static.cdnland.com/new/images/svg/country/us.svg" alt="US"></div>
                                            <div class="lott_info">
                                                <div class="lott_name"><a >Lotto America</a></div>
                                                <div class="lott_data">Draw Date Saturday, 01.04.2023</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="results_item_mid">
                                        <ul class="numberList">
                                            <li class="" title=""><span>2</span></li><li class="" title=""><span>38</span></li><li class="" title=""><span>43</span></li><li class="" title=""><span>46</span></li><li class="" title=""><span>51</span></li><li class="power" title=""><span>7</span></li><li class="multi" title="Multiplier"><span>x2</span></li>
                                        </ul>

                                    </div>
                                    <div class="results_item_bot results_item_bot-fl">
                                        <div class="results_item_right">
                                            <div class="team" style="" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Our winners">
                                                <span class="fa fa-users"></span>
                                                <div class="team_val">117</div>
                                            </div>
                                            <div class="link-play" data-toggle="tooltip" data-placement="bottom" title="" style="visibility: hidden;" data-original-title="Lottery broadcast recordings available"><span class="fa-regular fa-circle-play"></span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="jackpot">
                                    <div class="jackpot_cont">
                                        <div class="jackpot_val">$ 2 <span class="mln_icon_extra text-nowrap">Million </span></div>
                                        <div class="jackpot_date time_val">Next draw in <span class=" " date-close="314914">3&nbsp;days</span></div>
                                        <div class="lottery_sel">

                                            <div class="event-easy-pick-cont">
                                                <select name="easy_pick" class="lottery_sel_select event-easy-pick-select">
                                                    <option></option>
                                                    <option value="/en/play-lottery/lotto-america/?from=results_list&amp;easy_pick=1&amp;extra_jackpot=" data-event-easy-pick="1">1 line for $ 3.29</option>
                                                    <option value="/en/play-lottery/lotto-america/?from=results_list&amp;easy_pick=3&amp;extra_jackpot=" data-event-easy-pick="1">3 lines for $ 9.57</option>
                                                    <option value="" disabled="">–––––&nbsp;or&nbsp;–––––</option>
                                                    <option value="/en/play-lottery/lotto-america/?from=results_list&amp;extra_jackpot=">Pick numbers</option>



                                                </select>
                                                <a href="/en/play-lottery/lotto-america/?from=results_list&amp;extra_jackpot=" class="btn btn-success event-easy-pick-main-btn">
                                                    Play<span class="fa-solid fa-chevron-down"></span>
                                                </a>
                                                <div class="lottery_sel_dropdown">
                                                    <div class="offers">
                                                        <p><a href="/en/play-lottery/lotto-america/?from=results_list&amp;easy_pick=1&amp;extra_jackpot=" class="event-easy-pick-offer">1 line for $ 3.29</a></p>
                                                        <p><a href="/en/play-lottery/lotto-america/?from=results_list&amp;easy_pick=3&amp;extra_jackpot=" class="event-easy-pick-offer">3 lines for $ 9.57</a></p>
                                                    </div>
                                                    <div class="or">––––– or –––––</div>
                                                    <p><a href="/en/play-lottery/lotto-america/?from=results_list&amp;extra_jackpot=" class="lottery_sel_choose">Pick numbers</a></p>
                                                    <div class="or light_version_site_hide">–––––––––––––</div>


                                                    <p style="margin-top: 5px;"><a href="/en/play-lottery/lotto-america/?from=index_lotto&amp;system=1&amp;extra_jackpot=" class="lottery_sel_choose game-type-ico lamp opt-system">System</a></p>

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <a href="#windowAlert" class="ratestars fancybox" onclick="yaGoals('CLEVER');" data-title="Today's Top-Rated Lotteries" data-text="<p>We analyze dozens of parameters daily: Jackpot amount and tax deductions, winning odds and the number of prize divisions, cost of a single line, and availability of such options as &quot;Multiplier,&quot; and much more to offer you the best possible lottery at the moment!</p><p>Choose a lottery with the highest score to win more and spend less!</p>" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Lottery rating from 1 to 10">
                                        <span class="fa-solid fa-star"></span>
                                        <span class="ratestars_val">7.5</span>
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="results_item" data-lotto="Mega Sena">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="results_item_cont">
                                    <div class="results_item_top">
                                        <div class="lott">
                                            <div class="lott_flag"><img src="https://static.cdnland.com/new/images/svg/country/br.svg" alt="BR"></div>
                                            <div class="lott_info">
                                                <div class="lott_name"><a >Mega Sena</a></div>
                                                <div class="lott_data">Draw Date Saturday, 01.04.2023</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="results_item_mid">
                                        <ul class="numberList">
                                            <li class="" title=""><span>5</span></li><li class="" title=""><span>10</span></li><li class="" title=""><span>26</span></li><li class="" title=""><span>35</span></li><li class="" title=""><span>38</span></li><li class="" title=""><span>44</span></li>
                                        </ul>

                                    </div>
                                    <div class="results_item_bot results_item_bot-fl">
                                        <div class="results_item_right">
                                            <div class="team" style="" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Our winners">
                                                <span class="fa fa-users"></span>
                                                <div class="team_val">24</div>
                                            </div>
                                            <div class="link-play" data-toggle="tooltip" data-placement="bottom" title="" style="visibility: hidden;" data-original-title="Lottery broadcast recordings available"><span class="fa-regular fa-circle-play"></span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="jackpot">
                                    <div class="jackpot_cont">
                                        <div class="jackpot_val">R$ 37 <span class="mln_icon_extra text-nowrap">Million </span></div>
                                        <div class="jackpot_date time_val">Next draw in <span class=" " date-close="304114">3&nbsp;days</span></div>
                                        <div class="lottery_sel">

                                            <div class="event-easy-pick-cont">
                                                <select name="easy_pick" class="lottery_sel_select event-easy-pick-select">
                                                    <option></option>
                                                    <option value="/en/play-lottery/mega-sena/?from=results_list&amp;easy_pick=4&amp;extra_jackpot=" data-event-easy-pick="1">4 lines for $ 8.28</option>
                                                    <option value="/en/play-lottery/mega-sena/?from=results_list&amp;easy_pick=6&amp;extra_jackpot=" data-event-easy-pick="1">6 lines for $ 11.80</option>
                                                    <option value="" disabled="">–––––&nbsp;or&nbsp;–––––</option>
                                                    <option value="/en/play-lottery/mega-sena/?from=results_list&amp;extra_jackpot=">Pick numbers</option>



                                                </select>
                                                <a href="/en/play-lottery/mega-sena/?from=results_list&amp;extra_jackpot=" class="btn btn-success event-easy-pick-main-btn">
                                                    Play<span class="fa-solid fa-chevron-down"></span>
                                                </a>
                                                <div class="lottery_sel_dropdown">
                                                    <div class="offers">
                                                        <p><a href="/en/play-lottery/mega-sena/?from=results_list&amp;easy_pick=4&amp;extra_jackpot=" class="event-easy-pick-offer">4 lines for $ 8.28</a></p>
                                                        <p><a href="/en/play-lottery/mega-sena/?from=results_list&amp;easy_pick=6&amp;extra_jackpot=" class="event-easy-pick-offer">6 lines for $ 11.80</a></p>
                                                    </div>
                                                    <div class="or">––––– or –––––</div>
                                                    <p><a href="/en/play-lottery/mega-sena/?from=results_list&amp;extra_jackpot=" class="lottery_sel_choose">Pick numbers</a></p>
                                                    <div class="or light_version_site_hide">–––––––––––––</div>


                                                    <p style="margin-top: 5px;"><a href="/en/play-lottery/mega-sena/?from=index_lotto&amp;system=1&amp;extra_jackpot=" class="lottery_sel_choose game-type-ico lamp opt-system">System</a></p>

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <a href="#windowAlert" class="ratestars fancybox" onclick="yaGoals('CLEVER');" data-title="Today's Top-Rated Lotteries" data-text="<p>We analyze dozens of parameters daily: Jackpot amount and tax deductions, winning odds and the number of prize divisions, cost of a single line, and availability of such options as &quot;Multiplier,&quot; and much more to offer you the best possible lottery at the moment!</p><p>Choose a lottery with the highest score to win more and spend less!</p>" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Lottery rating from 1 to 10">
                                        <span class="fa-solid fa-star"></span>
                                        <span class="ratestars_val">6.5</span>
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="results_item" data-lotto="Poland Lotto">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="results_item_cont">
                                    <div class="results_item_top">
                                        <div class="lott">
                                            <div class="lott_flag"><img src="https://static.cdnland.com/new/images/svg/country/pl.svg" alt="PL"></div>
                                            <div class="lott_info">
                                                <div class="lott_name"><a >Poland Lotto</a></div>
                                                <div class="lott_data">Draw Date Saturday, 01.04.2023</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="results_item_mid">
                                        <ul class="numberList">
                                            <li class="" title=""><span>4</span></li><li class="" title=""><span>9</span></li><li class="" title=""><span>21</span></li><li class="" title=""><span>29</span></li><li class="" title=""><span>43</span></li><li class="" title=""><span>46</span></li>
                                        </ul>

                                    </div>
                                    <div class="results_item_bot results_item_bot-fl">
                                        <div class="results_item_right">
                                            <div class="team" style="" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Our winners">
                                                <span class="fa fa-users"></span>
                                                <div class="team_val">69</div>
                                            </div>
                                            <div class="link-play" data-toggle="tooltip" data-placement="bottom" title="" style="" data-original-title="Lottery broadcast recordings available"><span class="fa-regular fa-circle-play"></span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="jackpot">
                                    <div class="jackpot_cont">
                                        <div class="jackpot_val">zł 20 <span class="mln_icon_extra text-nowrap">Million </span></div>
                                        <div class="jackpot_date time_val">Next draw in <span class=" " date-close="210514">2&nbsp;days</span></div>
                                        <div class="lottery_sel">

                                            <div class="event-easy-pick-cont">
                                                <select name="easy_pick" class="lottery_sel_select event-easy-pick-select">
                                                    <option></option>
                                                    <option value="/en/play-lottery/poland-lotto/?from=results_list&amp;easy_pick=3&amp;extra_jackpot=" data-event-easy-pick="1">3 lines for $ 5.22</option>
                                                    <option value="/en/play-lottery/poland-lotto/?from=results_list&amp;easy_pick=5&amp;extra_jackpot=" data-event-easy-pick="1">5 lines for $ 8.09</option>
                                                    <option value="" disabled="">–––––&nbsp;or&nbsp;–––––</option>
                                                    <option value="/en/play-lottery/poland-lotto/?from=results_list&amp;extra_jackpot=">Pick numbers</option>



                                                </select>
                                                <a href="/en/play-lottery/poland-lotto/?from=results_list&amp;extra_jackpot=" class="btn btn-success event-easy-pick-main-btn">
                                                    Play<span class="fa-solid fa-chevron-down"></span>
                                                </a>
                                                <div class="lottery_sel_dropdown">
                                                    <div class="offers">
                                                        <p><a href="/en/play-lottery/poland-lotto/?from=results_list&amp;easy_pick=3&amp;extra_jackpot=" class="event-easy-pick-offer">3 lines for $ 5.22</a></p>
                                                        <p><a href="/en/play-lottery/poland-lotto/?from=results_list&amp;easy_pick=5&amp;extra_jackpot=" class="event-easy-pick-offer">5 lines for $ 8.09</a></p>
                                                    </div>
                                                    <div class="or">––––– or –––––</div>
                                                    <p><a href="/en/play-lottery/poland-lotto/?from=results_list&amp;extra_jackpot=" class="lottery_sel_choose">Pick numbers</a></p>
                                                    <div class="or light_version_site_hide">–––––––––––––</div>


                                                    <p style="margin-top: 5px;"><a href="/en/play-lottery/poland-lotto/?from=index_lotto&amp;system=1&amp;extra_jackpot=" class="lottery_sel_choose game-type-ico lamp opt-system">System</a></p>

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <a href="#windowAlert" class="ratestars fancybox" onclick="yaGoals('CLEVER');" data-title="Today's Top-Rated Lotteries" data-text="<p>We analyze dozens of parameters daily: Jackpot amount and tax deductions, winning odds and the number of prize divisions, cost of a single line, and availability of such options as &quot;Multiplier,&quot; and much more to offer you the best possible lottery at the moment!</p><p>Choose a lottery with the highest score to win more and spend less!</p>" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Lottery rating from 1 to 10">
                                        <span class="fa-solid fa-star"></span>
                                        <span class="ratestars_val">6.6</span>
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="results_item" data-lotto="Lotto Ireland">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="results_item_cont">
                                    <div class="results_item_top">
                                        <div class="lott">
                                            <div class="lott_flag"><img src="https://static.cdnland.com/new/images/svg/country/ie.svg" alt="IE"></div>
                                            <div class="lott_info">
                                                <div class="lott_name"><a >Lotto Ireland</a></div>
                                                <div class="lott_data">Draw Date Saturday, 01.04.2023</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="results_item_mid">
                                        <ul class="numberList">
                                            <li class="" title=""><span>11</span></li><li class="" title=""><span>12</span></li><li class="" title=""><span>19</span></li><li class="" title=""><span>24</span></li><li class="" title=""><span>25</span></li><li class="" title=""><span>26</span></li><li class="jolly" title="Bonus Number"><span>34</span></li>
                                        </ul>

                                    </div>
                                    <div class="results_item_bot results_item_bot-fl">
                                        <div class="results_item_right">
                                            <div class="team" style="" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Our winners">
                                                <span class="fa fa-users"></span>
                                                <div class="team_val">15</div>
                                            </div>
                                            <div class="link-play" data-toggle="tooltip" data-placement="bottom" title="" style="visibility: hidden;" data-original-title="Lottery broadcast recordings available"><span class="fa-regular fa-circle-play"></span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="jackpot">
                                    <div class="jackpot_cont">
                                        <div class="jackpot_val">€ 3.5 <span class="mln_icon_extra text-nowrap">Million </span></div>
                                        <div class="jackpot_date time_val">Next draw in <span class=" " date-close="289714">3&nbsp;days</span></div>
                                        <div class="lottery_sel">

                                            <div class="event-easy-pick-cont">
                                                <select name="easy_pick" class="lottery_sel_select event-easy-pick-select">
                                                    <option></option>
                                                    <option value="/en/play-lottery/lotto-ie/?from=results_list&amp;easy_pick=2&amp;extra_jackpot=" data-event-easy-pick="1">2 lines for $ 10.88</option>
                                                    <option value="/en/play-lottery/lotto-ie/?from=results_list&amp;easy_pick=4&amp;extra_jackpot=" data-event-easy-pick="1">4 lines for $ 21.11</option>
                                                    <option value="" disabled="">–––––&nbsp;or&nbsp;–––––</option>
                                                    <option value="/en/play-lottery/lotto-ie/?from=results_list&amp;extra_jackpot=">Pick numbers</option>



                                                </select>
                                                <a href="/en/play-lottery/lotto-ie/?from=results_list&amp;extra_jackpot=" class="btn btn-success event-easy-pick-main-btn">
                                                    Play<span class="fa-solid fa-chevron-down"></span>
                                                </a>
                                                <div class="lottery_sel_dropdown">
                                                    <div class="offers">
                                                        <p><a href="/en/play-lottery/lotto-ie/?from=results_list&amp;easy_pick=2&amp;extra_jackpot=" class="event-easy-pick-offer">2 lines for $ 10.88</a></p>
                                                        <p><a href="/en/play-lottery/lotto-ie/?from=results_list&amp;easy_pick=4&amp;extra_jackpot=" class="event-easy-pick-offer">4 lines for $ 21.11</a></p>
                                                    </div>
                                                    <div class="or">––––– or –––––</div>
                                                    <p><a href="/en/play-lottery/lotto-ie/?from=results_list&amp;extra_jackpot=" class="lottery_sel_choose">Pick numbers</a></p>
                                                    <div class="or light_version_site_hide">–––––––––––––</div>


                                                    <p style="margin-top: 5px;"><a href="/en/play-lottery/lotto-ie/?from=index_lotto&amp;system=1&amp;extra_jackpot=" class="lottery_sel_choose game-type-ico lamp opt-system">System</a></p>

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <a href="#windowAlert" class="ratestars fancybox" onclick="yaGoals('CLEVER');" data-title="Today's Top-Rated Lotteries" data-text="<p>We analyze dozens of parameters daily: Jackpot amount and tax deductions, winning odds and the number of prize divisions, cost of a single line, and availability of such options as &quot;Multiplier,&quot; and much more to offer you the best possible lottery at the moment!</p><p>Choose a lottery with the highest score to win more and spend less!</p>" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Lottery rating from 1 to 10">
                                        <span class="fa-solid fa-star"></span>
                                        <span class="ratestars_val">7.5</span>
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="results_item" data-lotto="South Africa Lotto 6/52">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="results_item_cont">
                                    <div class="results_item_top">
                                        <div class="lott">
                                            <div class="lott_flag"><img src="https://static.cdnland.com/new/images/svg/country/za.svg" alt="ZA"></div>
                                            <div class="lott_info">
                                                <div class="lott_name"><a >South Africa Lotto 6/52</a></div>
                                                <div class="lott_data">Draw Date Saturday, 01.04.2023</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="results_item_mid">
                                        <ul class="numberList">
                                            <li class="" title=""><span>26</span></li><li class="" title=""><span>27</span></li><li class="" title=""><span>29</span></li><li class="" title=""><span>31</span></li><li class="" title=""><span>32</span></li><li class="" title=""><span>52</span></li><li class="jolly" title="Bonus Ball"><span>12</span></li>
                                        </ul>

                                    </div>
                                    <div class="results_item_bot results_item_bot-fl">
                                        <div class="results_item_right">
                                            <div class="team" style="" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Our winners">
                                                <span class="fa fa-users"></span>
                                                <div class="team_val">15</div>
                                            </div>
                                            <div class="link-play" data-toggle="tooltip" data-placement="bottom" title="" style="" data-original-title="Lottery broadcast recordings available"><span class="fa-regular fa-circle-play"></span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="jackpot">
                                    <div class="jackpot_cont">
                                        <div class="jackpot_val">R 23 <span class="mln_icon_extra text-nowrap">Million </span></div>
                                        <div class="jackpot_date time_val">Next draw in <span class=" " date-close="293314">3&nbsp;days</span></div>
                                        <div class="lottery_sel">

                                            <div class="event-easy-pick-cont">
                                                <select name="easy_pick" class="lottery_sel_select event-easy-pick-select">
                                                    <option></option>
                                                    <option value="/en/play-lottery/za-lotto-652/?from=results_list&amp;easy_pick=5&amp;extra_jackpot=" data-event-easy-pick="1">5 lines for $ 4.20</option>
                                                    <option value="/en/play-lottery/za-lotto-652/?from=results_list&amp;easy_pick=10&amp;extra_jackpot=" data-event-easy-pick="1">10 lines for $ 7.90</option>
                                                    <option value="" disabled="">–––––&nbsp;or&nbsp;–––––</option>
                                                    <option value="/en/play-lottery/za-lotto-652/?from=results_list&amp;extra_jackpot=">Pick numbers</option>



                                                </select>
                                                <a href="/en/play-lottery/za-lotto-652/?from=results_list&amp;extra_jackpot=" class="btn btn-success event-easy-pick-main-btn">
                                                    Play<span class="fa-solid fa-chevron-down"></span>
                                                </a>
                                                <div class="lottery_sel_dropdown">
                                                    <div class="offers">
                                                        <p><a href="/en/play-lottery/za-lotto-652/?from=results_list&amp;easy_pick=5&amp;extra_jackpot=" class="event-easy-pick-offer">5 lines for $ 4.20</a></p>
                                                        <p><a href="/en/play-lottery/za-lotto-652/?from=results_list&amp;easy_pick=10&amp;extra_jackpot=" class="event-easy-pick-offer">10 lines for $ 7.90</a></p>
                                                    </div>
                                                    <div class="or">––––– or –––––</div>
                                                    <p><a href="/en/play-lottery/za-lotto-652/?from=results_list&amp;extra_jackpot=" class="lottery_sel_choose">Pick numbers</a></p>
                                                    <div class="or light_version_site_hide">–––––––––––––</div>


                                                    <p style="margin-top: 5px;"><a href="/en/play-lottery/za-lotto-652/?from=index_lotto&amp;system=1&amp;extra_jackpot=" class="lottery_sel_choose game-type-ico lamp opt-system">System</a></p>

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <a href="#windowAlert" class="ratestars fancybox" onclick="yaGoals('CLEVER');" data-title="Today's Top-Rated Lotteries" data-text="<p>We analyze dozens of parameters daily: Jackpot amount and tax deductions, winning odds and the number of prize divisions, cost of a single line, and availability of such options as &quot;Multiplier,&quot; and much more to offer you the best possible lottery at the moment!</p><p>Choose a lottery with the highest score to win more and spend less!</p>" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Lottery rating from 1 to 10">
                                        <span class="fa-solid fa-star"></span>
                                        <span class="ratestars_val">7.5</span>
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="results_item" data-lotto="UK Lotto">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="results_item_cont">
                                    <div class="results_item_top">
                                        <div class="lott">
                                            <div class="lott_flag"><img src="https://static.cdnland.com/new/images/svg/country/gb.svg" alt="GB"></div>
                                            <div class="lott_info">
                                                <div class="lott_name"><a >UK Lotto</a></div>
                                                <div class="lott_data">Draw Date Saturday, 01.04.2023</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="results_item_mid">
                                        <ul class="numberList">
                                            <li class="" title=""><span>3</span></li><li class="" title=""><span>7</span></li><li class="" title=""><span>13</span></li><li class="" title=""><span>40</span></li><li class="" title=""><span>43</span></li><li class="" title=""><span>47</span></li><li class="jolly" title="Bonus Ball"><span>49</span></li>
                                        </ul>

                                    </div>
                                    <div class="results_item_bot results_item_bot-fl">
                                        <div class="results_item_right">
                                            <div class="team" style="" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Our winners">
                                                <span class="fa fa-users"></span>
                                                <div class="team_val">15</div>
                                            </div>
                                            <div class="link-play" data-toggle="tooltip" data-placement="bottom" title="" style="" data-original-title="Lottery broadcast recordings available"><span class="fa-regular fa-circle-play"></span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="jackpot">
                                    <div class="jackpot_cont">
                                        <div class="jackpot_val">£ 9 <span class="mln_icon_extra text-nowrap">Million </span></div>
                                        <div class="jackpot_date time_val">Next draw in <span class=" " date-close="286114">3&nbsp;days</span></div>
                                        <div class="lottery_sel">

                                            <div class="event-easy-pick-cont">
                                                <select name="easy_pick" class="lottery_sel_select event-easy-pick-select">
                                                    <option></option>
                                                    <option value="/en/play-lottery/uk-lotto/?from=results_list&amp;easy_pick=1&amp;extra_jackpot=" data-event-easy-pick="1">1 line for $ 7.41</option>
                                                    <option value="/en/play-lottery/uk-lotto/?from=results_list&amp;easy_pick=3&amp;extra_jackpot=" data-event-easy-pick="1">3 lines for $ 21.12</option>
                                                    <option value="" disabled="">–––––&nbsp;or&nbsp;–––––</option>
                                                    <option value="/en/play-lottery/uk-lotto/?from=results_list&amp;extra_jackpot=">Pick numbers</option>



                                                </select>
                                                <a href="/en/play-lottery/uk-lotto/?from=results_list&amp;extra_jackpot=" class="btn btn-success event-easy-pick-main-btn">
                                                    Play<span class="fa-solid fa-chevron-down"></span>
                                                </a>
                                                <div class="lottery_sel_dropdown">
                                                    <div class="offers">
                                                        <p><a href="/en/play-lottery/uk-lotto/?from=results_list&amp;easy_pick=1&amp;extra_jackpot=" class="event-easy-pick-offer">1 line for $ 7.41</a></p>
                                                        <p><a href="/en/play-lottery/uk-lotto/?from=results_list&amp;easy_pick=3&amp;extra_jackpot=" class="event-easy-pick-offer">3 lines for $ 21.12</a></p>
                                                    </div>
                                                    <div class="or">––––– or –––––</div>
                                                    <p><a href="/en/play-lottery/uk-lotto/?from=results_list&amp;extra_jackpot=" class="lottery_sel_choose">Pick numbers</a></p>
                                                    <div class="or light_version_site_hide">–––––––––––––</div>


                                                    <p style="margin-top: 5px;"><a href="/en/play-lottery/uk-lotto/?from=index_lotto&amp;system=1&amp;extra_jackpot=" class="lottery_sel_choose game-type-ico lamp opt-system">System</a></p>

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <a href="#windowAlert" class="ratestars fancybox" onclick="yaGoals('CLEVER');" data-title="Today's Top-Rated Lotteries" data-text="<p>We analyze dozens of parameters daily: Jackpot amount and tax deductions, winning odds and the number of prize divisions, cost of a single line, and availability of such options as &quot;Multiplier,&quot; and much more to offer you the best possible lottery at the moment!</p><p>Choose a lottery with the highest score to win more and spend less!</p>" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Lottery rating from 1 to 10">
                                        <span class="fa-solid fa-star"></span>
                                        <span class="ratestars_val">7.3</span>
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="results_item" data-lotto="France Loto">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="results_item_cont">
                                    <div class="results_item_top">
                                        <div class="lott">
                                            <div class="lott_flag"><img src="https://static.cdnland.com/new/images/svg/country/fr.svg" alt="FR"></div>
                                            <div class="lott_info">
                                                <div class="lott_name"><a >France Loto</a></div>
                                                <div class="lott_data">Draw Date Saturday, 01.04.2023</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="results_item_mid">
                                        <ul class="numberList">
                                            <li class="" title=""><span>12</span></li><li class="" title=""><span>17</span></li><li class="" title=""><span>35</span></li><li class="" title=""><span>44</span></li><li class="" title=""><span>48</span></li><li class="power" title=""><span>8</span></li>
                                        </ul>

                                    </div>
                                    <div class="results_item_bot results_item_bot-fl">
                                        <div class="results_item_right">
                                            <div class="team" style="" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Our winners">
                                                <span class="fa fa-users"></span>
                                                <div class="team_val">24</div>
                                            </div>
                                            <div class="link-play" data-toggle="tooltip" data-placement="bottom" title="" style="" data-original-title="Lottery broadcast recordings available"><span class="fa-regular fa-circle-play"></span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="jackpot">
                                    <div class="jackpot_cont">
                                        <div class="jackpot_val">€ 3 <span class="mln_icon_extra text-nowrap">Million </span></div>
                                        <div class="jackpot_date time_val">Next draw in <span class=" " date-close="106114">1&nbsp;day</span></div>
                                        <div class="lottery_sel">

                                            <div class="event-easy-pick-cont">
                                                <select name="easy_pick" class="lottery_sel_select event-easy-pick-select">
                                                    <option></option>
                                                    <option value="/en/play-lottery/france-loto/?from=results_list&amp;easy_pick=1&amp;extra_jackpot=" data-event-easy-pick="1">1 line for $ 6.20</option>
                                                    <option value="/en/play-lottery/france-loto/?from=results_list&amp;easy_pick=3&amp;extra_jackpot=" data-event-easy-pick="1">3 lines for $ 17.67</option>
                                                    <option value="" disabled="">–––––&nbsp;or&nbsp;–––––</option>
                                                    <option value="/en/play-lottery/france-loto/?from=results_list&amp;extra_jackpot=">Pick numbers</option>



                                                </select>
                                                <a href="/en/play-lottery/france-loto/?from=results_list&amp;extra_jackpot=" class="btn btn-success event-easy-pick-main-btn">
                                                    Play<span class="fa-solid fa-chevron-down"></span>
                                                </a>
                                                <div class="lottery_sel_dropdown">
                                                    <div class="offers">
                                                        <p><a href="/en/play-lottery/france-loto/?from=results_list&amp;easy_pick=1&amp;extra_jackpot=" class="event-easy-pick-offer">1 line for $ 6.20</a></p>
                                                        <p><a href="/en/play-lottery/france-loto/?from=results_list&amp;easy_pick=3&amp;extra_jackpot=" class="event-easy-pick-offer">3 lines for $ 17.67</a></p>
                                                    </div>
                                                    <div class="or">––––– or –––––</div>
                                                    <p><a href="/en/play-lottery/france-loto/?from=results_list&amp;extra_jackpot=" class="lottery_sel_choose">Pick numbers</a></p>
                                                    <div class="or light_version_site_hide">–––––––––––––</div>


                                                    <p style="margin-top: 5px;"><a href="/en/play-lottery/france-loto/?from=index_lotto&amp;system=1&amp;extra_jackpot=" class="lottery_sel_choose game-type-ico lamp opt-system">System</a></p>

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <a href="#windowAlert" class="ratestars fancybox" onclick="yaGoals('CLEVER');" data-title="Today's Top-Rated Lotteries" data-text="<p>We analyze dozens of parameters daily: Jackpot amount and tax deductions, winning odds and the number of prize divisions, cost of a single line, and availability of such options as &quot;Multiplier,&quot; and much more to offer you the best possible lottery at the moment!</p><p>Choose a lottery with the highest score to win more and spend less!</p>" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Lottery rating from 1 to 10">
                                        <span class="fa-solid fa-star"></span>
                                        <span class="ratestars_val">7.1</span>
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="results_item" data-lotto="SuperEnalotto">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="results_item_cont">
                                    <div class="results_item_top">
                                        <div class="lott">
                                            <div class="lott_flag"><img src="https://static.cdnland.com/new/images/svg/country/it.svg" alt="IT"></div>
                                            <div class="lott_info">
                                                <div class="lott_name"><a >SuperEnalotto</a></div>
                                                <div class="lott_data">Draw Date Saturday, 01.04.2023</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="results_item_mid">
                                        <ul class="numberList">
                                            <li class="" title=""><span>5</span></li><li class="" title=""><span>22</span></li><li class="" title=""><span>36</span></li><li class="" title=""><span>47</span></li><li class="" title=""><span>73</span></li><li class="" title=""><span>75</span></li><li class="jolly" title="Jolly"><span>51</span></li>
                                        </ul>

                                    </div>
                                    <div class="results_item_bot results_item_bot-fl">
                                        <div class="results_item_right">
                                            <div class="team" style="" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Our winners">
                                                <span class="fa fa-users"></span>
                                                <div class="team_val">171</div>
                                            </div>
                                            <div class="link-play" data-toggle="tooltip" data-placement="bottom" title="" style="" data-original-title="Lottery broadcast recordings available"><span class="fa-regular fa-circle-play"></span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="jackpot">
                                    <div class="jackpot_cont">
                                        <div class="jackpot_val">€ 11.3 <span class="mln_icon_extra text-nowrap">Million </span></div>
                                        <div class="jackpot_date time_val">Next draw in <span class=" " date-close="196114">2&nbsp;days</span></div>
                                        <div class="lottery_sel">

                                            <div class="event-easy-pick-cont">
                                                <select name="easy_pick" class="lottery_sel_select event-easy-pick-select">
                                                    <option></option>
                                                    <option value="/en/play-lottery/superenalotto/?from=results_list&amp;easy_pick=1&amp;extra_jackpot=" data-event-easy-pick="1">1 line for $ 3.04</option>
                                                    <option value="/en/play-lottery/superenalotto/?from=results_list&amp;easy_pick=3&amp;extra_jackpot=" data-event-easy-pick="1">3 lines for $ 8.85</option>
                                                    <option value="" disabled="">–––––&nbsp;or&nbsp;–––––</option>
                                                    <option value="/en/play-lottery/superenalotto/?from=results_list&amp;extra_jackpot=">Pick numbers</option>



                                                </select>
                                                <a href="/en/play-lottery/superenalotto/?from=results_list&amp;extra_jackpot=" class="btn btn-success event-easy-pick-main-btn">
                                                    Play<span class="fa-solid fa-chevron-down"></span>
                                                </a>
                                                <div class="lottery_sel_dropdown">
                                                    <div class="offers">
                                                        <p><a href="/en/play-lottery/superenalotto/?from=results_list&amp;easy_pick=1&amp;extra_jackpot=" class="event-easy-pick-offer">1 line for $ 3.04</a></p>
                                                        <p><a href="/en/play-lottery/superenalotto/?from=results_list&amp;easy_pick=3&amp;extra_jackpot=" class="event-easy-pick-offer">3 lines for $ 8.85</a></p>
                                                    </div>
                                                    <div class="or">––––– or –––––</div>
                                                    <p><a href="/en/play-lottery/superenalotto/?from=results_list&amp;extra_jackpot=" class="lottery_sel_choose">Pick numbers</a></p>
                                                    <div class="or light_version_site_hide">–––––––––––––</div>

                                                    <p><a href="/en/play-lottery/superenalotto/?from=index_lotto&amp;syndicates=1&amp;extra_jackpot=" class="lottery_sel_choose game-type-ico fire opt-syndicate">Syndicate</a></p>


                                                    <p style="margin-top: 5px;"><a href="/en/play-lottery/superenalotto/?from=index_lotto&amp;system=1&amp;extra_jackpot=" class="lottery_sel_choose game-type-ico lamp opt-system">System</a></p>

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <a href="#windowAlert" class="ratestars fancybox" onclick="yaGoals('CLEVER');" data-title="Today's Top-Rated Lotteries" data-text="<p>We analyze dozens of parameters daily: Jackpot amount and tax deductions, winning odds and the number of prize divisions, cost of a single line, and availability of such options as &quot;Multiplier,&quot; and much more to offer you the best possible lottery at the moment!</p><p>Choose a lottery with the highest score to win more and spend less!</p>" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Lottery rating from 1 to 10">
                                        <span class="fa-solid fa-star"></span>
                                        <span class="ratestars_val">7.2</span>
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="results_item" data-lotto="SuperStar">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="results_item_cont">
                                    <div class="results_item_top">
                                        <div class="lott">
                                            <div class="lott_flag"><img src="https://static.cdnland.com/new/images/svg/country/it.svg" alt="IT"></div>
                                            <div class="lott_info">
                                                <div class="lott_name"><a >SuperStar</a></div>
                                                <div class="lott_data">Draw Date Saturday, 01.04.2023</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="results_item_mid">
                                        <ul class="numberList">
                                            <li class="" title=""><span>5</span></li><li class="" title=""><span>22</span></li><li class="" title=""><span>36</span></li><li class="" title=""><span>47</span></li><li class="" title=""><span>73</span></li><li class="" title=""><span>75</span></li><li class="power" title=""><span>78</span></li><li class="jolly" title="Jolly"><span>51</span></li>
                                        </ul>

                                    </div>
                                    <div class="results_item_bot results_item_bot-fl">
                                        <div class="results_item_right">
                                            <div class="team" style="" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Our winners">
                                                <span class="fa fa-users"></span>
                                                <div class="team_val">6</div>
                                            </div>
                                            <div class="link-play" data-toggle="tooltip" data-placement="bottom" title="" style="" data-original-title="Lottery broadcast recordings available"><span class="fa-regular fa-circle-play"></span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="jackpot">
                                    <div class="jackpot_cont">
                                        <div class="jackpot_val">€ 13.3 <span class="mln_icon_extra text-nowrap">Million </span></div>
                                        <div class="jackpot_date time_val">Next draw in <span class=" " date-close="196114">2&nbsp;days</span></div>
                                        <div class="lottery_sel">

                                            <div class="event-easy-pick-cont">
                                                <select name="easy_pick" class="lottery_sel_select event-easy-pick-select">
                                                    <option></option>
                                                    <option value="/en/play-lottery/superstar/?from=results_list&amp;easy_pick=1&amp;extra_jackpot=" data-event-easy-pick="1">1 line for $ 4.35</option>
                                                    <option value="/en/play-lottery/superstar/?from=results_list&amp;easy_pick=5&amp;extra_jackpot=" data-event-easy-pick="1">5 lines for $ 21.10</option>
                                                    <option value="" disabled="">–––––&nbsp;or&nbsp;–––––</option>
                                                    <option value="/en/play-lottery/superstar/?from=results_list&amp;extra_jackpot=">Pick numbers</option>



                                                </select>
                                                <a href="/en/play-lottery/superstar/?from=results_list&amp;extra_jackpot=" class="btn btn-success event-easy-pick-main-btn">
                                                    Play<span class="fa-solid fa-chevron-down"></span>
                                                </a>
                                                <div class="lottery_sel_dropdown">
                                                    <div class="offers">
                                                        <p><a href="/en/play-lottery/superstar/?from=results_list&amp;easy_pick=1&amp;extra_jackpot=" class="event-easy-pick-offer">1 line for $ 4.35</a></p>
                                                        <p><a href="/en/play-lottery/superstar/?from=results_list&amp;easy_pick=5&amp;extra_jackpot=" class="event-easy-pick-offer">5 lines for $ 21.10</a></p>
                                                    </div>
                                                    <div class="or">––––– or –––––</div>
                                                    <p><a href="/en/play-lottery/superstar/?from=results_list&amp;extra_jackpot=" class="lottery_sel_choose">Pick numbers</a></p>
                                                    <div class="or light_version_site_hide">–––––––––––––</div>


                                                    <p style="margin-top: 5px;"><a href="/en/play-lottery/superstar/?from=index_lotto&amp;system=1&amp;extra_jackpot=" class="lottery_sel_choose game-type-ico lamp opt-system">System</a></p>

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <a href="#windowAlert" class="ratestars fancybox" onclick="yaGoals('CLEVER');" data-title="Today's Top-Rated Lotteries" data-text="<p>We analyze dozens of parameters daily: Jackpot amount and tax deductions, winning odds and the number of prize divisions, cost of a single line, and availability of such options as &quot;Multiplier,&quot; and much more to offer you the best possible lottery at the moment!</p><p>Choose a lottery with the highest score to win more and spend less!</p>" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Lottery rating from 1 to 10">
                                        <span class="fa-solid fa-star"></span>
                                        <span class="ratestars_val">6.5</span>
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="results_item" data-lotto="Set for Life (AU)">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="results_item_cont">
                                    <div class="results_item_top">
                                        <div class="lott">
                                            <div class="lott_flag"><img src="https://static.cdnland.com/new/images/svg/country/au.svg" alt="AU"></div>
                                            <div class="lott_info">
                                                <div class="lott_name"><a >Set for Life (AU)</a></div>
                                                <div class="lott_data">Draw Date Saturday, 01.04.2023</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="results_item_mid">
                                        <ul class="numberList">
                                            <li class="" title=""><span>2</span></li><li class="" title=""><span>11</span></li><li class="" title=""><span>18</span></li><li class="" title=""><span>22</span></li><li class="" title=""><span>29</span></li><li class="" title=""><span>35</span></li><li class="" title=""><span>38</span></li><li class="jolly" title="Supplementary"><span>14</span></li><li class="jolly" title="Supplementary"><span>40</span></li>
                                        </ul>

                                    </div>
                                    <div class="results_item_bot results_item_bot-fl">
                                        <div class="results_item_right">
                                            <div class="team" style="" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Our winners">
                                                <span class="fa fa-users"></span>
                                                <div class="team_val">27</div>
                                            </div>
                                            <div class="link-play" data-toggle="tooltip" data-placement="bottom" title="" style="visibility: hidden;" data-original-title="Lottery broadcast recordings available"><span class="fa-regular fa-circle-play"></span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="jackpot">
                                    <div class="jackpot_cont">
                                        <div class="jackpot_val">A$ 4.8 <span class="mln_icon_extra text-nowrap">Million </span></div>
                                        <div class="jackpot_date time_val">Next draw in <span class="timer time-hot oninit blink-timer" date-close="1714" style="opacity: 0.505306;">00:26:49</span></div>
                                        <div class="lottery_sel">

                                            <div class="event-easy-pick-cont">
                                                <select name="easy_pick" class="lottery_sel_select event-easy-pick-select">
                                                    <option></option>
                                                    <option value="/en/play-lottery/au-set-for-life/?from=results_list&amp;easy_pick=7&amp;extra_jackpot=" data-event-easy-pick="1">7 lines for $ 7.49</option>
                                                    <option value="/en/play-lottery/au-set-for-life/?from=results_list&amp;easy_pick=14&amp;extra_jackpot=" data-event-easy-pick="1">14 lines for $ 14.23</option>
                                                    <option value="" disabled="">–––––&nbsp;or&nbsp;–––––</option>
                                                    <option value="/en/play-lottery/au-set-for-life/?from=results_list&amp;extra_jackpot=">Pick numbers</option>



                                                </select>
                                                <a href="/en/play-lottery/au-set-for-life/?from=results_list&amp;extra_jackpot=" class="btn btn-success event-easy-pick-main-btn">
                                                    Play<span class="fa-solid fa-chevron-down"></span>
                                                </a>
                                                <div class="lottery_sel_dropdown">
                                                    <div class="offers">
                                                        <p><a href="/en/play-lottery/au-set-for-life/?from=results_list&amp;easy_pick=7&amp;extra_jackpot=" class="event-easy-pick-offer">7 lines for $ 7.49</a></p>
                                                        <p><a href="/en/play-lottery/au-set-for-life/?from=results_list&amp;easy_pick=14&amp;extra_jackpot=" class="event-easy-pick-offer">14 lines for $ 14.23</a></p>
                                                    </div>
                                                    <div class="or">––––– or –––––</div>
                                                    <p><a href="/en/play-lottery/au-set-for-life/?from=results_list&amp;extra_jackpot=" class="lottery_sel_choose">Pick numbers</a></p>
                                                    <div class="or light_version_site_hide">–––––––––––––</div>


                                                    <p style="margin-top: 5px;"><a href="/en/play-lottery/au-set-for-life/?from=index_lotto&amp;system=1&amp;extra_jackpot=" class="lottery_sel_choose game-type-ico lamp opt-system">System</a></p>

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <a href="#windowAlert" class="ratestars fancybox" onclick="yaGoals('CLEVER');" data-title="Today's Top-Rated Lotteries" data-text="<p>We analyze dozens of parameters daily: Jackpot amount and tax deductions, winning odds and the number of prize divisions, cost of a single line, and availability of such options as &quot;Multiplier,&quot; and much more to offer you the best possible lottery at the moment!</p><p>Choose a lottery with the highest score to win more and spend less!</p>" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Lottery rating from 1 to 10">
                                        <span class="fa-solid fa-star"></span>
                                        <span class="ratestars_val">7.5</span>
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="results_item" data-lotto="Saturday Lotto">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="results_item_cont">
                                    <div class="results_item_top">
                                        <div class="lott">
                                            <div class="lott_flag"><img src="https://static.cdnland.com/new/images/svg/country/au.svg" alt="AU"></div>
                                            <div class="lott_info">
                                                <div class="lott_name"><a >Saturday Lotto</a></div>
                                                <div class="lott_data">Draw Date Saturday, 01.04.2023</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="results_item_mid">
                                        <ul class="numberList">
                                            <li class="" title=""><span>5</span></li><li class="" title=""><span>10</span></li><li class="" title=""><span>25</span></li><li class="" title=""><span>36</span></li><li class="" title=""><span>39</span></li><li class="" title=""><span>45</span></li><li class="jolly" title="Supplementary"><span>8</span></li><li class="jolly" title="Supplementary"><span>40</span></li>
                                        </ul>

                                    </div>
                                    <div class="results_item_bot results_item_bot-fl">
                                        <div class="results_item_right">
                                            <div class="team" style="" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Our winners">
                                                <span class="fa fa-users"></span>
                                                <div class="team_val">264</div>
                                            </div>
                                            <div class="link-play" data-toggle="tooltip" data-placement="bottom" title="" style="" data-original-title="Lottery broadcast recordings available"><span class="fa-regular fa-circle-play"></span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="jackpot">
                                    <div class="jackpot_cont">
                                        <div class="jackpot_val">A$ 5 <span class="mln_icon_extra text-nowrap">Million </span></div>
                                        <div class="jackpot_date time_val">Next draw in <span class=" " date-close="516514">5&nbsp;days</span></div>
                                        <div class="lottery_sel">

                                            <div class="event-easy-pick-cont">
                                                <select name="easy_pick" class="lottery_sel_select event-easy-pick-select">
                                                    <option></option>
                                                    <option value="/en/play-lottery/au-saturday-lotto/?from=results_list&amp;easy_pick=6&amp;extra_jackpot=" data-event-easy-pick="1">6 lines for $ 8.82</option>
                                                    <option value="/en/play-lottery/au-saturday-lotto/?from=results_list&amp;easy_pick=10&amp;extra_jackpot=" data-event-easy-pick="1">10 lines for $ 13.38</option>
                                                    <option value="" disabled="">–––––&nbsp;or&nbsp;–––––</option>
                                                    <option value="/en/play-lottery/au-saturday-lotto/?from=results_list&amp;extra_jackpot=">Pick numbers</option>



                                                </select>
                                                <a href="/en/play-lottery/au-saturday-lotto/?from=results_list&amp;extra_jackpot=" class="btn btn-success event-easy-pick-main-btn">
                                                    Play<span class="fa-solid fa-chevron-down"></span>
                                                </a>
                                                <div class="lottery_sel_dropdown">
                                                    <div class="offers">
                                                        <p><a href="/en/play-lottery/au-saturday-lotto/?from=results_list&amp;easy_pick=6&amp;extra_jackpot=" class="event-easy-pick-offer">6 lines for $ 8.82</a></p>
                                                        <p><a href="/en/play-lottery/au-saturday-lotto/?from=results_list&amp;easy_pick=10&amp;extra_jackpot=" class="event-easy-pick-offer">10 lines for $ 13.38</a></p>
                                                    </div>
                                                    <div class="or">––––– or –––––</div>
                                                    <p><a href="/en/play-lottery/au-saturday-lotto/?from=results_list&amp;extra_jackpot=" class="lottery_sel_choose">Pick numbers</a></p>
                                                    <div class="or light_version_site_hide">–––––––––––––</div>

                                                    <p><a href="/en/play-lottery/au-saturday-lotto/?from=index_lotto&amp;syndicates=1&amp;extra_jackpot=" class="lottery_sel_choose game-type-ico fire opt-syndicate">Syndicate</a></p>


                                                    <p style="margin-top: 5px;"><a href="/en/play-lottery/au-saturday-lotto/?from=index_lotto&amp;system=1&amp;extra_jackpot=" class="lottery_sel_choose game-type-ico lamp opt-system">System</a></p>

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <a href="#windowAlert" class="ratestars fancybox" onclick="yaGoals('CLEVER');" data-title="Today's Top-Rated Lotteries" data-text="<p>We analyze dozens of parameters daily: Jackpot amount and tax deductions, winning odds and the number of prize divisions, cost of a single line, and availability of such options as &quot;Multiplier,&quot; and much more to offer you the best possible lottery at the moment!</p><p>Choose a lottery with the highest score to win more and spend less!</p>" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Lottery rating from 1 to 10">
                                        <span class="fa-solid fa-star"></span>
                                        <span class="ratestars_val">7.3</span>
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="results_item" data-lotto="MEGA Millions">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="results_item_cont">
                                    <div class="results_item_top">
                                        <div class="lott">
                                            <div class="lott_flag"><img src="https://static.cdnland.com/new/images/svg/country/us.svg" alt="US"></div>
                                            <div class="lott_info">
                                                <div class="lott_name"><a >MEGA Millions</a></div>
                                                <div class="lott_data">Draw Date Friday, 31.03.2023</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="results_item_mid">
                                        <ul class="numberList">
                                            <li class="" title=""><span>16</span></li><li class="" title=""><span>26</span></li><li class="" title=""><span>27</span></li><li class="" title=""><span>42</span></li><li class="" title=""><span>61</span></li><li class="power" title=""><span>23</span></li><li class="multi" title="Multiplier"><span>x4</span></li>
                                        </ul>

                                    </div>
                                    <div class="results_item_bot results_item_bot-fl">
                                        <div class="results_item_right">
                                            <div class="team" style="" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Our winners">
                                                <span class="fa fa-users"></span>
                                                <div class="team_val">1332</div>
                                            </div>
                                            <div class="link-play" data-toggle="tooltip" data-placement="bottom" title="" style="" data-original-title="Lottery broadcast recordings available"><span class="fa-regular fa-circle-play"></span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="jackpot">
                                    <div class="jackpot_cont">
                                        <div class="jackpot_val">$ 385 <span class="mln_icon_extra text-nowrap">Million </span></div>
                                        <div class="jackpot_date time_val">Next draw in <span class=" " date-close="232114">2&nbsp;days</span></div>
                                        <div class="lottery_sel">

                                            <div class="event-easy-pick-cont">
                                                <select name="easy_pick" class="lottery_sel_select event-easy-pick-select">
                                                    <option></option>
                                                    <option value="/en/play-lottery/mega-millions/?from=results_list&amp;easy_pick=1&amp;extra_jackpot=" data-event-easy-pick="1">1 line for $ 5.29</option>
                                                    <option value="/en/play-lottery/mega-millions/?from=results_list&amp;easy_pick=3&amp;extra_jackpot=" data-event-easy-pick="1">3 lines for $ 14.92</option>
                                                    <option value="" disabled="">–––––&nbsp;or&nbsp;–––––</option>
                                                    <option value="/en/play-lottery/mega-millions/?from=results_list&amp;extra_jackpot=">Pick numbers</option>



                                                </select>
                                                <a href="/en/play-lottery/mega-millions/?from=results_list&amp;extra_jackpot=" class="btn btn-success event-easy-pick-main-btn">
                                                    Play<span class="fa-solid fa-chevron-down"></span>
                                                </a>
                                                <div class="lottery_sel_dropdown">
                                                    <div class="offers">
                                                        <p><a href="/en/play-lottery/mega-millions/?from=results_list&amp;easy_pick=1&amp;extra_jackpot=" class="event-easy-pick-offer">1 line for $ 5.29</a></p>
                                                        <p><a href="/en/play-lottery/mega-millions/?from=results_list&amp;easy_pick=3&amp;extra_jackpot=" class="event-easy-pick-offer">3 lines for $ 14.92</a></p>
                                                    </div>
                                                    <div class="or">––––– or –––––</div>
                                                    <p><a href="/en/play-lottery/mega-millions/?from=results_list&amp;extra_jackpot=" class="lottery_sel_choose">Pick numbers</a></p>
                                                    <div class="or light_version_site_hide">–––––––––––––</div>

                                                    <p><a href="/en/play-lottery/mega-millions/?from=index_lotto&amp;syndicates=1&amp;extra_jackpot=" class="lottery_sel_choose game-type-ico fire opt-syndicate">Syndicate</a></p>


                                                    <p style="margin-top: 5px;"><a href="/en/play-lottery/mega-millions/?from=index_lotto&amp;system=1&amp;extra_jackpot=" class="lottery_sel_choose game-type-ico lamp opt-system">System</a></p>

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <a href="#windowAlert" class="ratestars fancybox" onclick="yaGoals('CLEVER');" data-title="Today's Top-Rated Lotteries" data-text="<p>We analyze dozens of parameters daily: Jackpot amount and tax deductions, winning odds and the number of prize divisions, cost of a single line, and availability of such options as &quot;Multiplier,&quot; and much more to offer you the best possible lottery at the moment!</p><p>Choose a lottery with the highest score to win more and spend less!</p>" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Lottery rating from 1 to 10">
                                        <span class="fa-solid fa-star"></span>
                                        <span class="ratestars_val">9.0</span>
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="results_item" data-lotto="Mexico Melate">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="results_item_cont">
                                    <div class="results_item_top">
                                        <div class="lott">
                                            <div class="lott_flag"><img src="https://static.cdnland.com/new/images/svg/country/mx.svg" alt="MX"></div>
                                            <div class="lott_info">
                                                <div class="lott_name"><a >Mexico Melate</a></div>
                                                <div class="lott_data">Draw Date Friday, 31.03.2023</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="results_item_mid">
                                        <ul class="numberList">
                                            <li class="" title=""><span>3</span></li><li class="" title=""><span>9</span></li><li class="" title=""><span>18</span></li><li class="" title=""><span>32</span></li><li class="" title=""><span>47</span></li><li class="" title=""><span>54</span></li><li class="jolly" title="Adicional"><span>52</span></li>
                                        </ul>

                                    </div>
                                    <div class="results_item_bot results_item_bot-fl">
                                        <div class="results_item_right">
                                            <div class="team" style="" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Our winners">
                                                <span class="fa fa-users"></span>
                                                <div class="team_val">9</div>
                                            </div>
                                            <div class="link-play" data-toggle="tooltip" data-placement="bottom" title="" style="" data-original-title="Lottery broadcast recordings available"><span class="fa-regular fa-circle-play"></span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="jackpot">
                                    <div class="jackpot_cont">
                                        <div class="jackpot_val">M$ 30.1 <span class="mln_icon_extra text-nowrap">Million </span></div>
                                        <div class="jackpot_date time_val">Next draw in <span class=" " date-close="55714">15&nbsp;hours</span></div>
                                        <div class="lottery_sel">

                                            <div class="event-easy-pick-cont">
                                                <select name="easy_pick" class="lottery_sel_select event-easy-pick-select">
                                                    <option></option>
                                                    <option value="/en/play-lottery/mexico-melate/?from=results_list&amp;easy_pick=5&amp;extra_jackpot=" data-event-easy-pick="1">5 lines for $ 10.40</option>
                                                    <option value="/en/play-lottery/mexico-melate/?from=results_list&amp;easy_pick=10&amp;extra_jackpot=" data-event-easy-pick="1">10 lines for $ 19.76</option>
                                                    <option value="" disabled="">–––––&nbsp;or&nbsp;–––––</option>
                                                    <option value="/en/play-lottery/mexico-melate/?from=results_list&amp;extra_jackpot=">Pick numbers</option>



                                                </select>
                                                <a href="/en/play-lottery/mexico-melate/?from=results_list&amp;extra_jackpot=" class="btn btn-success event-easy-pick-main-btn">
                                                    Play<span class="fa-solid fa-chevron-down"></span>
                                                </a>
                                                <div class="lottery_sel_dropdown">
                                                    <div class="offers">
                                                        <p><a href="/en/play-lottery/mexico-melate/?from=results_list&amp;easy_pick=5&amp;extra_jackpot=" class="event-easy-pick-offer">5 lines for $ 10.40</a></p>
                                                        <p><a href="/en/play-lottery/mexico-melate/?from=results_list&amp;easy_pick=10&amp;extra_jackpot=" class="event-easy-pick-offer">10 lines for $ 19.76</a></p>
                                                    </div>
                                                    <div class="or">––––– or –––––</div>
                                                    <p><a href="/en/play-lottery/mexico-melate/?from=results_list&amp;extra_jackpot=" class="lottery_sel_choose">Pick numbers</a></p>
                                                    <div class="or light_version_site_hide">–––––––––––––</div>


                                                    <p style="margin-top: 5px;"><a href="/en/play-lottery/mexico-melate/?from=index_lotto&amp;system=1&amp;extra_jackpot=" class="lottery_sel_choose game-type-ico lamp opt-system">System</a></p>

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <a href="#windowAlert" class="ratestars fancybox" onclick="yaGoals('CLEVER');" data-title="Today's Top-Rated Lotteries" data-text="<p>We analyze dozens of parameters daily: Jackpot amount and tax deductions, winning odds and the number of prize divisions, cost of a single line, and availability of such options as &quot;Multiplier,&quot; and much more to offer you the best possible lottery at the moment!</p><p>Choose a lottery with the highest score to win more and spend less!</p>" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Lottery rating from 1 to 10">
                                        <span class="fa-solid fa-star"></span>
                                        <span class="ratestars_val">7.5</span>
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="results_item" data-lotto="EuroMillions">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="results_item_cont">
                                    <div class="results_item_top">
                                        <div class="lott">
                                            <div class="lott_flag"><img src="https://static.cdnland.com/new/images/svg/country/eu.svg" alt="EU"></div>
                                            <div class="lott_info">
                                                <div class="lott_name"><a >EuroMillions</a></div>
                                                <div class="lott_data">Draw Date Friday, 31.03.2023</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="results_item_mid">
                                        <ul class="numberList">
                                            <li class="" title=""><span>16</span></li><li class="" title=""><span>18</span></li><li class="" title=""><span>28</span></li><li class="" title=""><span>34</span></li><li class="" title=""><span>47</span></li><li class="power" title=""><span>5</span></li><li class="power" title=""><span>10</span></li>
                                        </ul>

                                    </div>
                                    <div class="results_item_bot results_item_bot-fl">
                                        <div class="results_item_right">
                                            <div class="team" style="" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Our winners">
                                                <span class="fa fa-users"></span>
                                                <div class="team_val">216</div>
                                            </div>
                                            <div class="link-play" data-toggle="tooltip" data-placement="bottom" title="" style="" data-original-title="Lottery broadcast recordings available"><span class="fa-regular fa-circle-play"></span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="jackpot">
                                    <div class="jackpot_cont">
                                        <div class="jackpot_val">€ 40 <span class="mln_icon_extra text-nowrap">Million </span></div>
                                        <div class="jackpot_date time_val">Next draw in <span class=" " date-close="203314">2&nbsp;days</span></div>
                                        <div class="lottery_sel">

                                            <div class="event-easy-pick-cont">
                                                <select name="easy_pick" class="lottery_sel_select event-easy-pick-select">
                                                    <option></option>
                                                    <option value="/en/play-lottery/euromillions/?from=results_list&amp;easy_pick=1&amp;extra_jackpot=" data-event-easy-pick="1">1 line for $ 6.20</option>
                                                    <option value="/en/play-lottery/euromillions/?from=results_list&amp;easy_pick=3&amp;extra_jackpot=" data-event-easy-pick="1">3 lines for $ 18.04</option>
                                                    <option value="" disabled="">–––––&nbsp;or&nbsp;–––––</option>
                                                    <option value="/en/play-lottery/euromillions/?from=results_list&amp;extra_jackpot=">Pick numbers</option>



                                                </select>
                                                <a href="/en/play-lottery/euromillions/?from=results_list&amp;extra_jackpot=" class="btn btn-success event-easy-pick-main-btn">
                                                    Play<span class="fa-solid fa-chevron-down"></span>
                                                </a>
                                                <div class="lottery_sel_dropdown">
                                                    <div class="offers">
                                                        <p><a href="/en/play-lottery/euromillions/?from=results_list&amp;easy_pick=1&amp;extra_jackpot=" class="event-easy-pick-offer">1 line for $ 6.20</a></p>
                                                        <p><a href="/en/play-lottery/euromillions/?from=results_list&amp;easy_pick=3&amp;extra_jackpot=" class="event-easy-pick-offer">3 lines for $ 18.04</a></p>
                                                    </div>
                                                    <div class="or">––––– or –––––</div>
                                                    <p><a href="/en/play-lottery/euromillions/?from=results_list&amp;extra_jackpot=" class="lottery_sel_choose">Pick numbers</a></p>
                                                    <div class="or light_version_site_hide">–––––––––––––</div>

                                                    <p><a href="/en/play-lottery/euromillions/?from=index_lotto&amp;syndicates=1&amp;extra_jackpot=" class="lottery_sel_choose game-type-ico fire opt-syndicate">Syndicate</a></p>


                                                    <p style="margin-top: 5px;"><a href="/en/play-lottery/euromillions/?from=index_lotto&amp;system=1&amp;extra_jackpot=" class="lottery_sel_choose game-type-ico lamp opt-system">System</a></p>

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <a href="#windowAlert" class="ratestars fancybox" onclick="yaGoals('CLEVER');" data-title="Today's Top-Rated Lotteries" data-text="<p>We analyze dozens of parameters daily: Jackpot amount and tax deductions, winning odds and the number of prize divisions, cost of a single line, and availability of such options as &quot;Multiplier,&quot; and much more to offer you the best possible lottery at the moment!</p><p>Choose a lottery with the highest score to win more and spend less!</p>" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Lottery rating from 1 to 10">
                                        <span class="fa-solid fa-star"></span>
                                        <span class="ratestars_val">7.4</span>
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="results_item" data-lotto="South Africa Powerball">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="results_item_cont">
                                    <div class="results_item_top">
                                        <div class="lott">
                                            <div class="lott_flag"><img src="https://static.cdnland.com/new/images/svg/country/za.svg" alt="ZA"></div>
                                            <div class="lott_info">
                                                <div class="lott_name"><a >South Africa Powerball</a></div>
                                                <div class="lott_data">Draw Date Friday, 31.03.2023</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="results_item_mid">
                                        <ul class="numberList">
                                            <li class="" title=""><span>7</span></li><li class="" title=""><span>20</span></li><li class="" title=""><span>41</span></li><li class="" title=""><span>42</span></li><li class="" title=""><span>49</span></li><li class="power" title=""><span>7</span></li>
                                        </ul>

                                    </div>
                                    <div class="results_item_bot results_item_bot-fl">
                                        <div class="results_item_right">
                                            <div class="team" style="" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Our winners">
                                                <span class="fa fa-users"></span>
                                                <div class="team_val">24</div>
                                            </div>
                                            <div class="link-play" data-toggle="tooltip" data-placement="bottom" title="" style="" data-original-title="Lottery broadcast recordings available"><span class="fa-regular fa-circle-play"></span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="jackpot">
                                    <div class="jackpot_cont">
                                        <div class="jackpot_val">R 26 <span class="mln_icon_extra text-nowrap">Million </span></div>
                                        <div class="jackpot_date time_val">Next draw in <span class=" " date-close="206914">2&nbsp;days</span></div>
                                        <div class="lottery_sel">

                                            <div class="event-easy-pick-cont">
                                                <select name="easy_pick" class="lottery_sel_select event-easy-pick-select">
                                                    <option></option>
                                                    <option value="/en/play-lottery/za-powerball/?from=results_list&amp;easy_pick=5&amp;extra_jackpot=" data-event-easy-pick="1">5 lines for $ 4.20</option>
                                                    <option value="/en/play-lottery/za-powerball/?from=results_list&amp;easy_pick=10&amp;extra_jackpot=" data-event-easy-pick="1">10 lines for $ 7.90</option>
                                                    <option value="" disabled="">–––––&nbsp;or&nbsp;–––––</option>
                                                    <option value="/en/play-lottery/za-powerball/?from=results_list&amp;extra_jackpot=">Pick numbers</option>



                                                </select>
                                                <a href="/en/play-lottery/za-powerball/?from=results_list&amp;extra_jackpot=" class="btn btn-success event-easy-pick-main-btn">
                                                    Play<span class="fa-solid fa-chevron-down"></span>
                                                </a>
                                                <div class="lottery_sel_dropdown">
                                                    <div class="offers">
                                                        <p><a href="/en/play-lottery/za-powerball/?from=results_list&amp;easy_pick=5&amp;extra_jackpot=" class="event-easy-pick-offer">5 lines for $ 4.20</a></p>
                                                        <p><a href="/en/play-lottery/za-powerball/?from=results_list&amp;easy_pick=10&amp;extra_jackpot=" class="event-easy-pick-offer">10 lines for $ 7.90</a></p>
                                                    </div>
                                                    <div class="or">––––– or –––––</div>
                                                    <p><a href="/en/play-lottery/za-powerball/?from=results_list&amp;extra_jackpot=" class="lottery_sel_choose">Pick numbers</a></p>
                                                    <div class="or light_version_site_hide">–––––––––––––</div>


                                                    <p style="margin-top: 5px;"><a href="/en/play-lottery/za-powerball/?from=index_lotto&amp;system=1&amp;extra_jackpot=" class="lottery_sel_choose game-type-ico lamp opt-system">System</a></p>

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <a href="#windowAlert" class="ratestars fancybox" onclick="yaGoals('CLEVER');" data-title="Today's Top-Rated Lotteries" data-text="<p>We analyze dozens of parameters daily: Jackpot amount and tax deductions, winning odds and the number of prize divisions, cost of a single line, and availability of such options as &quot;Multiplier,&quot; and much more to offer you the best possible lottery at the moment!</p><p>Choose a lottery with the highest score to win more and spend less!</p>" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Lottery rating from 1 to 10">
                                        <span class="fa-solid fa-star"></span>
                                        <span class="ratestars_val">7.0</span>
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="results_item" data-lotto="EuroJackpot">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="results_item_cont">
                                    <div class="results_item_top">
                                        <div class="lott">
                                            <div class="lott_flag"><img src="https://static.cdnland.com/new/images/svg/country/eu.svg" alt="EU"></div>
                                            <div class="lott_info">
                                                <div class="lott_name"><a >EuroJackpot</a></div>
                                                <div class="lott_data">Draw Date Friday, 31.03.2023</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="results_item_mid">
                                        <ul class="numberList">
                                            <li class="" title=""><span>10</span></li><li class="" title=""><span>11</span></li><li class="" title=""><span>31</span></li><li class="" title=""><span>37</span></li><li class="" title=""><span>44</span></li><li class="power" title=""><span>5</span></li><li class="power" title=""><span>12</span></li>
                                        </ul>

                                    </div>
                                    <div class="results_item_bot results_item_bot-fl">
                                        <div class="results_item_right">
                                            <div class="team" style="" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Our winners">
                                                <span class="fa fa-users"></span>
                                                <div class="team_val">138</div>
                                            </div>
                                            <div class="link-play" data-toggle="tooltip" data-placement="bottom" title="" style="" data-original-title="Lottery broadcast recordings available"><span class="fa-regular fa-circle-play"></span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="jackpot">
                                    <div class="jackpot_cont">
                                        <div class="jackpot_val">€ 10 <span class="mln_icon_extra text-nowrap">Million </span></div>
                                        <div class="jackpot_date time_val">Next draw in <span class=" " date-close="196114">2&nbsp;days</span></div>
                                        <div class="lottery_sel">

                                            <div class="event-easy-pick-cont">
                                                <select name="easy_pick" class="lottery_sel_select event-easy-pick-select">
                                                    <option></option>
                                                    <option value="/en/play-lottery/eurojackpot/?from=results_list&amp;easy_pick=1&amp;extra_jackpot=" data-event-easy-pick="1">1 line for $ 5.76</option>
                                                    <option value="/en/play-lottery/eurojackpot/?from=results_list&amp;easy_pick=3&amp;extra_jackpot=" data-event-easy-pick="1">3 lines for $ 16.76</option>
                                                    <option value="" disabled="">–––––&nbsp;or&nbsp;–––––</option>
                                                    <option value="/en/play-lottery/eurojackpot/?from=results_list&amp;extra_jackpot=">Pick numbers</option>



                                                </select>
                                                <a href="/en/play-lottery/eurojackpot/?from=results_list&amp;extra_jackpot=" class="btn btn-success event-easy-pick-main-btn">
                                                    Play<span class="fa-solid fa-chevron-down"></span>
                                                </a>
                                                <div class="lottery_sel_dropdown">
                                                    <div class="offers">
                                                        <p><a href="/en/play-lottery/eurojackpot/?from=results_list&amp;easy_pick=1&amp;extra_jackpot=" class="event-easy-pick-offer">1 line for $ 5.76</a></p>
                                                        <p><a href="/en/play-lottery/eurojackpot/?from=results_list&amp;easy_pick=3&amp;extra_jackpot=" class="event-easy-pick-offer">3 lines for $ 16.76</a></p>
                                                    </div>
                                                    <div class="or">––––– or –––––</div>
                                                    <p><a href="/en/play-lottery/eurojackpot/?from=results_list&amp;extra_jackpot=" class="lottery_sel_choose">Pick numbers</a></p>
                                                    <div class="or light_version_site_hide">–––––––––––––</div>

                                                    <p><a href="/en/play-lottery/eurojackpot/?from=index_lotto&amp;syndicates=1&amp;extra_jackpot=" class="lottery_sel_choose game-type-ico fire opt-syndicate">Syndicate</a></p>


                                                    <p style="margin-top: 5px;"><a href="/en/play-lottery/eurojackpot/?from=index_lotto&amp;system=1&amp;extra_jackpot=" class="lottery_sel_choose game-type-ico lamp opt-system">System</a></p>

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <a href="#windowAlert" class="ratestars fancybox" onclick="yaGoals('CLEVER');" data-title="Today's Top-Rated Lotteries" data-text="<p>We analyze dozens of parameters daily: Jackpot amount and tax deductions, winning odds and the number of prize divisions, cost of a single line, and availability of such options as &quot;Multiplier,&quot; and much more to offer you the best possible lottery at the moment!</p><p>Choose a lottery with the highest score to win more and spend less!</p>" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Lottery rating from 1 to 10">
                                        <span class="fa-solid fa-star"></span>
                                        <span class="ratestars_val">7.3</span>
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="results_item" data-lotto="Powerball Australia">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="results_item_cont">
                                    <div class="results_item_top">
                                        <div class="lott">
                                            <div class="lott_flag"><img src="https://static.cdnland.com/new/images/svg/country/au.svg" alt="AU"></div>
                                            <div class="lott_info">
                                                <div class="lott_name"><a >Powerball Australia</a></div>
                                                <div class="lott_data">Draw Date Thursday, 30.03.2023</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="results_item_mid">
                                        <ul class="numberList">
                                            <li class="" title=""><span>5</span></li><li class="" title=""><span>6</span></li><li class="" title=""><span>7</span></li><li class="" title=""><span>11</span></li><li class="" title=""><span>12</span></li><li class="" title=""><span>13</span></li><li class="" title=""><span>35</span></li><li class="power" title=""><span>15</span></li>
                                        </ul>

                                    </div>
                                    <div class="results_item_bot results_item_bot-fl">
                                        <div class="results_item_right">
                                            <div class="team" style="" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Our winners">
                                                <span class="fa fa-users"></span>
                                                <div class="team_val">66</div>
                                            </div>
                                            <div class="link-play" data-toggle="tooltip" data-placement="bottom" title="" style="" data-original-title="Lottery broadcast recordings available"><span class="fa-regular fa-circle-play"></span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="jackpot">
                                    <div class="jackpot_cont">
                                        <div class="jackpot_val">A$ 20 <span class="mln_icon_extra text-nowrap">Million </span></div>
                                        <div class="jackpot_date time_val">Next draw in <span class=" " date-close="332914">3&nbsp;days</span></div>
                                        <div class="lottery_sel">

                                            <div class="event-easy-pick-cont">
                                                <select name="easy_pick" class="lottery_sel_select event-easy-pick-select">
                                                    <option></option>
                                                    <option value="/en/play-lottery/powerball-australia/?from=results_list&amp;easy_pick=4&amp;extra_jackpot=" data-event-easy-pick="1">4 lines for $ 7.24</option>
                                                    <option value="/en/play-lottery/powerball-australia/?from=results_list&amp;easy_pick=6&amp;extra_jackpot=" data-event-easy-pick="1">6 lines for $ 9.88</option>
                                                    <option value="" disabled="">–––––&nbsp;or&nbsp;–––––</option>
                                                    <option value="/en/play-lottery/powerball-australia/?from=results_list&amp;extra_jackpot=">Pick numbers</option>



                                                </select>
                                                <a href="/en/play-lottery/powerball-australia/?from=results_list&amp;extra_jackpot=" class="btn btn-success event-easy-pick-main-btn">
                                                    Play<span class="fa-solid fa-chevron-down"></span>
                                                </a>
                                                <div class="lottery_sel_dropdown">
                                                    <div class="offers">
                                                        <p><a href="/en/play-lottery/powerball-australia/?from=results_list&amp;easy_pick=4&amp;extra_jackpot=" class="event-easy-pick-offer">4 lines for $ 7.24</a></p>
                                                        <p><a href="/en/play-lottery/powerball-australia/?from=results_list&amp;easy_pick=6&amp;extra_jackpot=" class="event-easy-pick-offer">6 lines for $ 9.88</a></p>
                                                    </div>
                                                    <div class="or">––––– or –––––</div>
                                                    <p><a href="/en/play-lottery/powerball-australia/?from=results_list&amp;extra_jackpot=" class="lottery_sel_choose">Pick numbers</a></p>
                                                    <div class="or light_version_site_hide">–––––––––––––</div>

                                                    <p><a href="/en/play-lottery/powerball-australia/?from=index_lotto&amp;syndicates=1&amp;extra_jackpot=" class="lottery_sel_choose game-type-ico fire opt-syndicate">Syndicate</a></p>


                                                    <p style="margin-top: 5px;"><a href="/en/play-lottery/powerball-australia/?from=index_lotto&amp;system=1&amp;extra_jackpot=" class="lottery_sel_choose game-type-ico lamp opt-system">System</a></p>

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <a href="#windowAlert" class="ratestars fancybox" onclick="yaGoals('CLEVER');" data-title="Today's Top-Rated Lotteries" data-text="<p>We analyze dozens of parameters daily: Jackpot amount and tax deductions, winning odds and the number of prize divisions, cost of a single line, and availability of such options as &quot;Multiplier,&quot; and much more to offer you the best possible lottery at the moment!</p><p>Choose a lottery with the highest score to win more and spend less!</p>" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Lottery rating from 1 to 10">
                                        <span class="fa-solid fa-star"></span>
                                        <span class="ratestars_val">7.0</span>
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="results_item" data-lotto="Lotto Austria">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="results_item_cont">
                                    <div class="results_item_top">
                                        <div class="lott">
                                            <div class="lott_flag"><img src="https://static.cdnland.com/new/images/svg/country/at.svg" alt="AT"></div>
                                            <div class="lott_info">
                                                <div class="lott_name"><a >Lotto Austria</a></div>
                                                <div class="lott_data">Draw Date Wednesday, 29.03.2023</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="results_item_mid">
                                        <ul class="numberList">
                                            <li class="" title=""><span>9</span></li><li class="" title=""><span>10</span></li><li class="" title=""><span>14</span></li><li class="" title=""><span>24</span></li><li class="" title=""><span>31</span></li><li class="" title=""><span>33</span></li><li class="jolly" title="Zusatzzahl"><span>23</span></li>
                                        </ul>

                                    </div>
                                    <div class="results_item_bot results_item_bot-fl">
                                        <div class="results_item_right">
                                            <div class="team" style="" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Our winners">
                                                <span class="fa fa-users"></span>
                                                <div class="team_val">63</div>
                                            </div>
                                            <div class="link-play" data-toggle="tooltip" data-placement="bottom" title="" style="visibility: hidden;" data-original-title="Lottery broadcast recordings available"><span class="fa-regular fa-circle-play"></span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="jackpot">
                                    <div class="jackpot_cont">
                                        <div class="jackpot_val">€ 1.4 <span class="mln_icon_extra text-nowrap">Million </span></div>
                                        <div class="jackpot_date time_val">Next draw in <span class=" " date-close="23314">6&nbsp;hours</span></div>
                                        <div class="lottery_sel">

                                            <div class="event-easy-pick-cont">
                                                <select name="easy_pick" class="lottery_sel_select event-easy-pick-select">
                                                    <option></option>
                                                    <option value="/en/play-lottery/lotto-austria/?from=results_list&amp;easy_pick=1&amp;extra_jackpot=" data-event-easy-pick="1">1 line for $ 3.80</option>
                                                    <option value="/en/play-lottery/lotto-austria/?from=results_list&amp;easy_pick=3&amp;extra_jackpot=" data-event-easy-pick="1">3 lines for $ 11.06</option>
                                                    <option value="" disabled="">–––––&nbsp;or&nbsp;–––––</option>
                                                    <option value="/en/play-lottery/lotto-austria/?from=results_list&amp;extra_jackpot=">Pick numbers</option>



                                                </select>
                                                <a href="/en/play-lottery/lotto-austria/?from=results_list&amp;extra_jackpot=" class="btn btn-success event-easy-pick-main-btn">
                                                    Play<span class="fa-solid fa-chevron-down"></span>
                                                </a>
                                                <div class="lottery_sel_dropdown">
                                                    <div class="offers">
                                                        <p><a href="/en/play-lottery/lotto-austria/?from=results_list&amp;easy_pick=1&amp;extra_jackpot=" class="event-easy-pick-offer">1 line for $ 3.80</a></p>
                                                        <p><a href="/en/play-lottery/lotto-austria/?from=results_list&amp;easy_pick=3&amp;extra_jackpot=" class="event-easy-pick-offer">3 lines for $ 11.06</a></p>
                                                    </div>
                                                    <div class="or">––––– or –––––</div>
                                                    <p><a href="/en/play-lottery/lotto-austria/?from=results_list&amp;extra_jackpot=" class="lottery_sel_choose">Pick numbers</a></p>
                                                    <div class="or light_version_site_hide">–––––––––––––</div>

                                                    <p><a href="/en/play-lottery/lotto-austria/?from=index_lotto&amp;syndicates=1&amp;extra_jackpot=" class="lottery_sel_choose game-type-ico fire opt-syndicate">Syndicate</a></p>


                                                    <p style="margin-top: 5px;"><a href="/en/play-lottery/lotto-austria/?from=index_lotto&amp;system=1&amp;extra_jackpot=" class="lottery_sel_choose game-type-ico lamp opt-system">System</a></p>

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <a href="#windowAlert" class="ratestars fancybox" onclick="yaGoals('CLEVER');" data-title="Today's Top-Rated Lotteries" data-text="<p>We analyze dozens of parameters daily: Jackpot amount and tax deductions, winning odds and the number of prize divisions, cost of a single line, and availability of such options as &quot;Multiplier,&quot; and much more to offer you the best possible lottery at the moment!</p><p>Choose a lottery with the highest score to win more and spend less!</p>" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Lottery rating from 1 to 10">
                                        <span class="fa-solid fa-star"></span>
                                        <span class="ratestars_val">7.6</span>
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="results_item" data-lotto="Mon &amp; Wed Lotto">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="results_item_cont">
                                    <div class="results_item_top">
                                        <div class="lott">
                                            <div class="lott_flag"><img src="https://static.cdnland.com/new/images/svg/country/au.svg" alt="AU"></div>
                                            <div class="lott_info">
                                                <div class="lott_name"><a >Mon &amp; Wed Lotto</a></div>
                                                <div class="lott_data">Draw Date Wednesday, 29.03.2023</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="results_item_mid">
                                        <ul class="numberList">
                                            <li class="" title=""><span>6</span></li><li class="" title=""><span>12</span></li><li class="" title=""><span>16</span></li><li class="" title=""><span>39</span></li><li class="" title=""><span>40</span></li><li class="" title=""><span>41</span></li><li class="jolly" title="Supplementary"><span>17</span></li><li class="jolly" title="Supplementary"><span>19</span></li>
                                        </ul>

                                    </div>
                                    <div class="results_item_bot results_item_bot-fl">
                                        <div class="results_item_right">
                                            <div class="team" style="" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Our winners">
                                                <span class="fa fa-users"></span>
                                                <div class="team_val">36</div>
                                            </div>
                                            <div class="link-play" data-toggle="tooltip" data-placement="bottom" title="" style="" data-original-title="Lottery broadcast recordings available"><span class="fa-regular fa-circle-play"></span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="jackpot">
                                    <div class="jackpot_cont">
                                        <div class="jackpot_val">A$ 1 <span class="mln_icon_extra text-nowrap">Million </span></div>
                                        <div class="jackpot_date time_val">Next draw in <span class=" " date-close="73714">20&nbsp;hours</span></div>
                                        <div class="lottery_sel">

                                            <div class="event-easy-pick-cont">
                                                <select name="easy_pick" class="lottery_sel_select event-easy-pick-select">
                                                    <option></option>
                                                    <option value="/en/play-lottery/au-mon-wed-lotto/?from=results_list&amp;easy_pick=7&amp;extra_jackpot=" data-event-easy-pick="1">7 lines for $ 7.31</option>
                                                    <option value="/en/play-lottery/au-mon-wed-lotto/?from=results_list&amp;easy_pick=14&amp;extra_jackpot=" data-event-easy-pick="1">14 lines for $ 13.86</option>
                                                    <option value="" disabled="">–––––&nbsp;or&nbsp;–––––</option>
                                                    <option value="/en/play-lottery/au-mon-wed-lotto/?from=results_list&amp;extra_jackpot=">Pick numbers</option>



                                                </select>
                                                <a href="/en/play-lottery/au-mon-wed-lotto/?from=results_list&amp;extra_jackpot=" class="btn btn-success event-easy-pick-main-btn">
                                                    Play<span class="fa-solid fa-chevron-down"></span>
                                                </a>
                                                <div class="lottery_sel_dropdown">
                                                    <div class="offers">
                                                        <p><a href="/en/play-lottery/au-mon-wed-lotto/?from=results_list&amp;easy_pick=7&amp;extra_jackpot=" class="event-easy-pick-offer">7 lines for $ 7.31</a></p>
                                                        <p><a href="/en/play-lottery/au-mon-wed-lotto/?from=results_list&amp;easy_pick=14&amp;extra_jackpot=" class="event-easy-pick-offer">14 lines for $ 13.86</a></p>
                                                    </div>
                                                    <div class="or">––––– or –––––</div>
                                                    <p><a href="/en/play-lottery/au-mon-wed-lotto/?from=results_list&amp;extra_jackpot=" class="lottery_sel_choose">Pick numbers</a></p>
                                                    <div class="or light_version_site_hide">–––––––––––––</div>

                                                    <p><a href="/en/play-lottery/au-mon-wed-lotto/?from=index_lotto&amp;syndicates=1&amp;extra_jackpot=" class="lottery_sel_choose game-type-ico fire opt-syndicate">Syndicate</a></p>


                                                    <p style="margin-top: 5px;"><a href="/en/play-lottery/au-mon-wed-lotto/?from=index_lotto&amp;system=1&amp;extra_jackpot=" class="lottery_sel_choose game-type-ico lamp opt-system">System</a></p>

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <a href="#windowAlert" class="ratestars fancybox" onclick="yaGoals('CLEVER');" data-title="Today's Top-Rated Lotteries" data-text="<p>We analyze dozens of parameters daily: Jackpot amount and tax deductions, winning odds and the number of prize divisions, cost of a single line, and availability of such options as &quot;Multiplier,&quot; and much more to offer you the best possible lottery at the moment!</p><p>Choose a lottery with the highest score to win more and spend less!</p>" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Lottery rating from 1 to 10">
                                        <span class="fa-solid fa-star"></span>
                                        <span class="ratestars_val">7.4</span>
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="results_item" data-lotto="Oz Lotto">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="results_item_cont">
                                    <div class="results_item_top">
                                        <div class="lott">
                                            <div class="lott_flag"><img src="https://static.cdnland.com/new/images/svg/country/au.svg" alt="AU"></div>
                                            <div class="lott_info">
                                                <div class="lott_name"><a >Oz Lotto</a></div>
                                                <div class="lott_data">Draw Date Tuesday, 28.03.2023</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="results_item_mid">
                                        <ul class="numberList">
                                            <li class="" title=""><span>3</span></li><li class="" title=""><span>7</span></li><li class="" title=""><span>15</span></li><li class="" title=""><span>16</span></li><li class="" title=""><span>19</span></li><li class="" title=""><span>35</span></li><li class="" title=""><span>38</span></li><li class="jolly" title="Supplementary"><span>13</span></li><li class="jolly" title="Supplementary"><span>32</span></li><li class="jolly" title="Supplementary"><span>39</span></li>
                                        </ul>

                                    </div>
                                    <div class="results_item_bot results_item_bot-fl">
                                        <div class="results_item_right">
                                            <div class="team" style="" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Our winners">
                                                <span class="fa fa-users"></span>
                                                <div class="team_val">45</div>
                                            </div>
                                            <div class="link-play" data-toggle="tooltip" data-placement="bottom" title="" style="" data-original-title="Lottery broadcast recordings available"><span class="fa-regular fa-circle-play"></span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="jackpot">
                                    <div class="jackpot_cont">
                                        <div class="jackpot_val">A$ 20 <span class="mln_icon_extra text-nowrap">Million </span></div>
                                        <div class="jackpot_date time_val">Next draw in <span class=" " date-close="160114">1&nbsp;day</span></div>
                                        <div class="lottery_sel">

                                            <div class="event-easy-pick-cont">
                                                <select name="easy_pick" class="lottery_sel_select event-easy-pick-select">
                                                    <option></option>
                                                    <option value="/en/play-lottery/oz-lotto/?from=results_list&amp;easy_pick=4&amp;extra_jackpot=" data-event-easy-pick="1">4 lines for $ 10.04</option>
                                                    <option value="/en/play-lottery/oz-lotto/?from=results_list&amp;easy_pick=7&amp;extra_jackpot=" data-event-easy-pick="1">7 lines for $ 16.34</option>
                                                    <option value="" disabled="">–––––&nbsp;or&nbsp;–––––</option>
                                                    <option value="/en/play-lottery/oz-lotto/?from=results_list&amp;extra_jackpot=">Pick numbers</option>



                                                </select>
                                                <a href="/en/play-lottery/oz-lotto/?from=results_list&amp;extra_jackpot=" class="btn btn-success event-easy-pick-main-btn">
                                                    Play<span class="fa-solid fa-chevron-down"></span>
                                                </a>
                                                <div class="lottery_sel_dropdown">
                                                    <div class="offers">
                                                        <p><a href="/en/play-lottery/oz-lotto/?from=results_list&amp;easy_pick=4&amp;extra_jackpot=" class="event-easy-pick-offer">4 lines for $ 10.04</a></p>
                                                        <p><a href="/en/play-lottery/oz-lotto/?from=results_list&amp;easy_pick=7&amp;extra_jackpot=" class="event-easy-pick-offer">7 lines for $ 16.34</a></p>
                                                    </div>
                                                    <div class="or">––––– or –––––</div>
                                                    <p><a href="/en/play-lottery/oz-lotto/?from=results_list&amp;extra_jackpot=" class="lottery_sel_choose">Pick numbers</a></p>
                                                    <div class="or light_version_site_hide">–––––––––––––</div>

                                                    <p><a href="/en/play-lottery/oz-lotto/?from=index_lotto&amp;syndicates=1&amp;extra_jackpot=" class="lottery_sel_choose game-type-ico fire opt-syndicate">Syndicate</a></p>


                                                    <p style="margin-top: 5px;"><a href="/en/play-lottery/oz-lotto/?from=index_lotto&amp;system=1&amp;extra_jackpot=" class="lottery_sel_choose game-type-ico lamp opt-system">System</a></p>

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <a href="#windowAlert" class="ratestars fancybox" onclick="yaGoals('CLEVER');" data-title="Today's Top-Rated Lotteries" data-text="<p>We analyze dozens of parameters daily: Jackpot amount and tax deductions, winning odds and the number of prize divisions, cost of a single line, and availability of such options as &quot;Multiplier,&quot; and much more to offer you the best possible lottery at the moment!</p><p>Choose a lottery with the highest score to win more and spend less!</p>" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Lottery rating from 1 to 10">
                                        <span class="fa-solid fa-star"></span>
                                        <span class="ratestars_val">7.4</span>
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="results_item" data-lotto="Cash4Life">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="results_item_cont">
                                    <div class="results_item_top">
                                        <div class="lott">
                                            <div class="lott_flag"><img src="https://static.cdnland.com/new/images/svg/country/us.svg" alt="US"></div>
                                            <div class="lott_info">
                                                <div class="lott_name"><a >Cash4Life</a></div>
                                                <div class="lott_data">Draw Date Saturday, 01.04.2023</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="results_item_mid">
                                        <ul class="numberList">
                                            <li class="" title=""><span>14</span></li><li class="" title=""><span>17</span></li><li class="" title=""><span>30</span></li><li class="" title=""><span>38</span></li><li class="" title=""><span>45</span></li><li class="power" title=""><span>4</span></li>
                                        </ul>

                                    </div>
                                    <div class="results_item_bot results_item_bot-fl">
                                        <div class="results_item_right">
                                            <div class="team" style="" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Our winners">
                                                <span class="fa fa-users"></span>
                                                <div class="team_val">21</div>
                                            </div>
                                            <div class="link-play" data-toggle="tooltip" data-placement="bottom" title="" style="" data-original-title="Lottery broadcast recordings available"><span class="fa-regular fa-circle-play"></span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="jackpot">
                                    <div class="jackpot_cont">
                                        <div class="jackpot_val">$ 7 <span class="mln_icon_extra text-nowrap">Million </span></div>
                                        <div class="jackpot_date time_val">Next draw in <span class=" " date-close="55714">15&nbsp;hours</span></div>
                                        <div class="lottery_sel">

                                            <div class="event-easy-pick-cont">
                                                <select name="easy_pick" class="lottery_sel_select event-easy-pick-select">
                                                    <option></option>
                                                    <option value="/en/play-lottery/cash-for-life/?from=results_list&amp;easy_pick=1&amp;extra_jackpot=" data-event-easy-pick="1">1 line for $ 5.00</option>
                                                    <option value="/en/play-lottery/cash-for-life/?from=results_list&amp;easy_pick=3&amp;extra_jackpot=" data-event-easy-pick="1">3 lines for $ 14.25</option>
                                                    <option value="" disabled="">–––––&nbsp;or&nbsp;–––––</option>
                                                    <option value="/en/play-lottery/cash-for-life/?from=results_list&amp;extra_jackpot=">Pick numbers</option>



                                                </select>
                                                <a href="/en/play-lottery/cash-for-life/?from=results_list&amp;extra_jackpot=" class="btn btn-success event-easy-pick-main-btn">
                                                    Play<span class="fa-solid fa-chevron-down"></span>
                                                </a>
                                                <div class="lottery_sel_dropdown">
                                                    <div class="offers">
                                                        <p><a href="/en/play-lottery/cash-for-life/?from=results_list&amp;easy_pick=1&amp;extra_jackpot=" class="event-easy-pick-offer">1 line for $ 5.00</a></p>
                                                        <p><a href="/en/play-lottery/cash-for-life/?from=results_list&amp;easy_pick=3&amp;extra_jackpot=" class="event-easy-pick-offer">3 lines for $ 14.25</a></p>
                                                    </div>
                                                    <div class="or">––––– or –––––</div>
                                                    <p><a href="/en/play-lottery/cash-for-life/?from=results_list&amp;extra_jackpot=" class="lottery_sel_choose">Pick numbers</a></p>
                                                    <div class="or light_version_site_hide">–––––––––––––</div>


                                                    <p style="margin-top: 5px;"><a href="/en/play-lottery/cash-for-life/?from=index_lotto&amp;system=1&amp;extra_jackpot=" class="lottery_sel_choose game-type-ico lamp opt-system">System</a></p>

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <a href="#windowAlert" class="ratestars fancybox" onclick="yaGoals('CLEVER');" data-title="Today's Top-Rated Lotteries" data-text="<p>We analyze dozens of parameters daily: Jackpot amount and tax deductions, winning odds and the number of prize divisions, cost of a single line, and availability of such options as &quot;Multiplier,&quot; and much more to offer you the best possible lottery at the moment!</p><p>Choose a lottery with the highest score to win more and spend less!</p>" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Lottery rating from 1 to 10">
                                        <span class="fa-solid fa-star"></span>
                                        <span class="ratestars_val">7.5</span>
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="results_item" data-lotto="California Fantasy 5">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="results_item_cont">
                                    <div class="results_item_top">
                                        <div class="lott">
                                            <div class="lott_flag"><img src="https://static.cdnland.com/new/images/svg/country/us.svg" alt="US"></div>
                                            <div class="lott_info">
                                                <div class="lott_name"><a >California Fantasy 5</a></div>
                                                <div class="lott_data">Draw Date Saturday, 01.04.2023</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="results_item_mid">
                                        <ul class="numberList">
                                            <li class="" title=""><span>8</span></li><li class="" title=""><span>16</span></li><li class="" title=""><span>17</span></li><li class="" title=""><span>20</span></li><li class="" title=""><span>37</span></li>
                                        </ul>

                                    </div>
                                    <div class="results_item_bot results_item_bot-fl">
                                        <div class="results_item_right">
                                            <div class="team" style="" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Our winners">
                                                <span class="fa fa-users"></span>
                                                <div class="team_val">15</div>
                                            </div>
                                            <div class="link-play" data-toggle="tooltip" data-placement="bottom" title="" style="visibility: hidden;" data-original-title="Lottery broadcast recordings available"><span class="fa-regular fa-circle-play"></span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="jackpot">
                                    <div class="jackpot_cont">
                                        <div class="jackpot_val">$ 63 <span class="mln_icon_extra text-nowrap">Thousand </span></div>
                                        <div class="jackpot_date time_val">Next draw in <span class=" " date-close="52114">14&nbsp;hours</span></div>
                                        <div class="lottery_sel">

                                            <div class="event-easy-pick-cont">
                                                <select name="easy_pick" class="lottery_sel_select event-easy-pick-select">
                                                    <option></option>
                                                    <option value="/en/play-lottery/ca-fantasy-5/?from=results_list&amp;easy_pick=3&amp;extra_jackpot=" data-event-easy-pick="1">3 lines for $ 7.50</option>
                                                    <option value="/en/play-lottery/ca-fantasy-5/?from=results_list&amp;easy_pick=5&amp;extra_jackpot=" data-event-easy-pick="1">5 lines for $ 11.87</option>
                                                    <option value="" disabled="">–––––&nbsp;or&nbsp;–––––</option>
                                                    <option value="/en/play-lottery/ca-fantasy-5/?from=results_list&amp;extra_jackpot=">Pick numbers</option>



                                                </select>
                                                <a href="/en/play-lottery/ca-fantasy-5/?from=results_list&amp;extra_jackpot=" class="btn btn-success event-easy-pick-main-btn">
                                                    Play<span class="fa-solid fa-chevron-down"></span>
                                                </a>
                                                <div class="lottery_sel_dropdown">
                                                    <div class="offers">
                                                        <p><a href="/en/play-lottery/ca-fantasy-5/?from=results_list&amp;easy_pick=3&amp;extra_jackpot=" class="event-easy-pick-offer">3 lines for $ 7.50</a></p>
                                                        <p><a href="/en/play-lottery/ca-fantasy-5/?from=results_list&amp;easy_pick=5&amp;extra_jackpot=" class="event-easy-pick-offer">5 lines for $ 11.87</a></p>
                                                    </div>
                                                    <div class="or">––––– or –––––</div>
                                                    <p><a href="/en/play-lottery/ca-fantasy-5/?from=results_list&amp;extra_jackpot=" class="lottery_sel_choose">Pick numbers</a></p>
                                                    <div class="or light_version_site_hide">–––––––––––––</div>


                                                    <p style="margin-top: 5px;"><a href="/en/play-lottery/ca-fantasy-5/?from=index_lotto&amp;system=1&amp;extra_jackpot=" class="lottery_sel_choose game-type-ico lamp opt-system">System</a></p>

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <a href="#windowAlert" class="ratestars fancybox" onclick="yaGoals('CLEVER');" data-title="Today's Top-Rated Lotteries" data-text="<p>We analyze dozens of parameters daily: Jackpot amount and tax deductions, winning odds and the number of prize divisions, cost of a single line, and availability of such options as &quot;Multiplier,&quot; and much more to offer you the best possible lottery at the moment!</p><p>Choose a lottery with the highest score to win more and spend less!</p>" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Lottery rating from 1 to 10">
                                        <span class="fa-solid fa-star"></span>
                                        <span class="ratestars_val">6.6</span>
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="results_item" data-lotto="Daily Million">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="results_item_cont">
                                    <div class="results_item_top">
                                        <div class="lott">
                                            <div class="lott_flag"><img src="https://static.cdnland.com/new/images/svg/country/ie.svg" alt="IE"></div>
                                            <div class="lott_info">
                                                <div class="lott_name"><a >Daily Million</a></div>
                                                <div class="lott_data">Draw Date Saturday, 01.04.2023</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="results_item_mid">
                                        <ul class="numberList">
                                            <li class="" title=""><span>8</span></li><li class="" title=""><span>16</span></li><li class="" title=""><span>23</span></li><li class="" title=""><span>26</span></li><li class="" title=""><span>28</span></li><li class="" title=""><span>39</span></li><li class="jolly" title="Bonus"><span>36</span></li>
                                        </ul>

                                    </div>
                                    <div class="results_item_bot results_item_bot-fl">
                                        <div class="results_item_right">
                                            <div class="team" style="" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Our winners">
                                                <span class="fa fa-users"></span>
                                                <div class="team_val">9</div>
                                            </div>
                                            <div class="link-play" data-toggle="tooltip" data-placement="bottom" title="" style="visibility: hidden;" data-original-title="Lottery broadcast recordings available"><span class="fa-regular fa-circle-play"></span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="jackpot">
                                    <div class="jackpot_cont">
                                        <div class="jackpot_val">€ 1 <span class="mln_icon_extra text-nowrap">Million </span></div>
                                        <div class="jackpot_date time_val">Next draw in <span class=" " date-close="8914">2&nbsp;hours</span></div>
                                        <div class="lottery_sel">

                                            <div class="event-easy-pick-cont">
                                                <select name="easy_pick" class="lottery_sel_select event-easy-pick-select">
                                                    <option></option>
                                                    <option value="/en/play-lottery/ie-daily-million/?from=results_list&amp;easy_pick=3&amp;extra_jackpot=" data-event-easy-pick="1">3 lines for $ 8.16</option>
                                                    <option value="/en/play-lottery/ie-daily-million/?from=results_list&amp;easy_pick=5&amp;extra_jackpot=" data-event-easy-pick="1">5 lines for $ 12.92</option>
                                                    <option value="" disabled="">–––––&nbsp;or&nbsp;–––––</option>
                                                    <option value="/en/play-lottery/ie-daily-million/?from=results_list&amp;extra_jackpot=">Pick numbers</option>



                                                </select>
                                                <a href="/en/play-lottery/ie-daily-million/?from=results_list&amp;extra_jackpot=" class="btn btn-success event-easy-pick-main-btn">
                                                    Play<span class="fa-solid fa-chevron-down"></span>
                                                </a>
                                                <div class="lottery_sel_dropdown">
                                                    <div class="offers">
                                                        <p><a href="/en/play-lottery/ie-daily-million/?from=results_list&amp;easy_pick=3&amp;extra_jackpot=" class="event-easy-pick-offer">3 lines for $ 8.16</a></p>
                                                        <p><a href="/en/play-lottery/ie-daily-million/?from=results_list&amp;easy_pick=5&amp;extra_jackpot=" class="event-easy-pick-offer">5 lines for $ 12.92</a></p>
                                                    </div>
                                                    <div class="or">––––– or –––––</div>
                                                    <p><a href="/en/play-lottery/ie-daily-million/?from=results_list&amp;extra_jackpot=" class="lottery_sel_choose">Pick numbers</a></p>
                                                    <div class="or light_version_site_hide">–––––––––––––</div>


                                                    <p style="margin-top: 5px;"><a href="/en/play-lottery/ie-daily-million/?from=index_lotto&amp;system=1&amp;extra_jackpot=" class="lottery_sel_choose game-type-ico lamp opt-system">System</a></p>

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <a href="#windowAlert" class="ratestars fancybox" onclick="yaGoals('CLEVER');" data-title="Today's Top-Rated Lotteries" data-text="<p>We analyze dozens of parameters daily: Jackpot amount and tax deductions, winning odds and the number of prize divisions, cost of a single line, and availability of such options as &quot;Multiplier,&quot; and much more to offer you the best possible lottery at the moment!</p><p>Choose a lottery with the highest score to win more and spend less!</p>" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Lottery rating from 1 to 10">
                                        <span class="fa-solid fa-star"></span>
                                        <span class="ratestars_val">7.4</span>
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="results_item" data-lotto="Thunderball UK">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="results_item_cont">
                                    <div class="results_item_top">
                                        <div class="lott">
                                            <div class="lott_flag"><img src="https://static.cdnland.com/new/images/svg/country/gb.svg" alt="GB"></div>
                                            <div class="lott_info">
                                                <div class="lott_name"><a >Thunderball UK</a></div>
                                                <div class="lott_data">Draw Date Saturday, 01.04.2023</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="results_item_mid">
                                        <ul class="numberList">
                                            <li class="" title=""><span>6</span></li><li class="" title=""><span>9</span></li><li class="" title=""><span>24</span></li><li class="" title=""><span>28</span></li><li class="" title=""><span>30</span></li><li class="power" title=""><span>7</span></li>
                                        </ul>

                                    </div>
                                    <div class="results_item_bot results_item_bot-fl">
                                        <div class="results_item_right">
                                            <div class="team" style="" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Our winners">
                                                <span class="fa fa-users"></span>
                                                <div class="team_val">15</div>
                                            </div>
                                            <div class="link-play" data-toggle="tooltip" data-placement="bottom" title="" style="" data-original-title="Lottery broadcast recordings available"><span class="fa-regular fa-circle-play"></span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="jackpot">
                                    <div class="jackpot_cont">
                                        <div class="jackpot_val">£ 500 <span class="mln_icon_extra text-nowrap">Thousand </span></div>
                                        <div class="jackpot_date time_val">Next draw in <span class=" " date-close="199714">2&nbsp;days</span></div>
                                        <div class="lottery_sel">

                                            <div class="event-easy-pick-cont">
                                                <select name="easy_pick" class="lottery_sel_select event-easy-pick-select">
                                                    <option></option>
                                                    <option value="/en/play-lottery/thunderball-uk/?from=results_list&amp;easy_pick=1&amp;extra_jackpot=" data-event-easy-pick="1">1 line for $ 3.09</option>
                                                    <option value="/en/play-lottery/thunderball-uk/?from=results_list&amp;easy_pick=3&amp;extra_jackpot=" data-event-easy-pick="1">3 lines for $ 8.99</option>
                                                    <option value="" disabled="">–––––&nbsp;or&nbsp;–––––</option>
                                                    <option value="/en/play-lottery/thunderball-uk/?from=results_list&amp;extra_jackpot=">Pick numbers</option>



                                                </select>
                                                <a href="/en/play-lottery/thunderball-uk/?from=results_list&amp;extra_jackpot=" class="btn btn-success event-easy-pick-main-btn">
                                                    Play<span class="fa-solid fa-chevron-down"></span>
                                                </a>
                                                <div class="lottery_sel_dropdown">
                                                    <div class="offers">
                                                        <p><a href="/en/play-lottery/thunderball-uk/?from=results_list&amp;easy_pick=1&amp;extra_jackpot=" class="event-easy-pick-offer">1 line for $ 3.09</a></p>
                                                        <p><a href="/en/play-lottery/thunderball-uk/?from=results_list&amp;easy_pick=3&amp;extra_jackpot=" class="event-easy-pick-offer">3 lines for $ 8.99</a></p>
                                                    </div>
                                                    <div class="or">––––– or –––––</div>
                                                    <p><a href="/en/play-lottery/thunderball-uk/?from=results_list&amp;extra_jackpot=" class="lottery_sel_choose">Pick numbers</a></p>
                                                    <div class="or light_version_site_hide">–––––––––––––</div>


                                                    <p style="margin-top: 5px;"><a href="/en/play-lottery/thunderball-uk/?from=index_lotto&amp;system=1&amp;extra_jackpot=" class="lottery_sel_choose game-type-ico lamp opt-system">System</a></p>

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <a href="#windowAlert" class="ratestars fancybox" onclick="yaGoals('CLEVER');" data-title="Today's Top-Rated Lotteries" data-text="<p>We analyze dozens of parameters daily: Jackpot amount and tax deductions, winning odds and the number of prize divisions, cost of a single line, and availability of such options as &quot;Multiplier,&quot; and much more to offer you the best possible lottery at the moment!</p><p>Choose a lottery with the highest score to win more and spend less!</p>" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Lottery rating from 1 to 10">
                                        <span class="fa-solid fa-star"></span>
                                        <span class="ratestars_val">7.0</span>
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="results_item" data-lotto="South Africa Daily Lotto">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="results_item_cont">
                                    <div class="results_item_top">
                                        <div class="lott">
                                            <div class="lott_flag"><img src="https://static.cdnland.com/new/images/svg/country/za.svg" alt="ZA"></div>
                                            <div class="lott_info">
                                                <div class="lott_name"><a >South Africa Daily Lotto</a></div>
                                                <div class="lott_data">Draw Date Saturday, 01.04.2023</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="results_item_mid">
                                        <ul class="numberList">
                                            <li class="" title=""><span>2</span></li><li class="" title=""><span>4</span></li><li class="" title=""><span>18</span></li><li class="" title=""><span>23</span></li><li class="" title=""><span>29</span></li>
                                        </ul>

                                    </div>
                                    <div class="results_item_bot results_item_bot-fl">
                                        <div class="results_item_right">
                                            <div class="team" style="" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Our winners">
                                                <span class="fa fa-users"></span>
                                                <div class="team_val">156</div>
                                            </div>
                                            <div class="link-play" data-toggle="tooltip" data-placement="bottom" title="" style="visibility: hidden;" data-original-title="Lottery broadcast recordings available"><span class="fa-regular fa-circle-play"></span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="jackpot">
                                    <div class="jackpot_cont">
                                        <div class="jackpot_val">R 300 <span class="mln_icon_extra text-nowrap">Thousand </span></div>
                                        <div class="jackpot_date time_val">Next draw in <span class=" " date-close="26914">7&nbsp;hours</span></div>
                                        <div class="lottery_sel">

                                            <div class="event-easy-pick-cont">
                                                <select name="easy_pick" class="lottery_sel_select event-easy-pick-select">
                                                    <option></option>
                                                    <option value="/en/play-lottery/za-daily-lotto/?from=results_list&amp;easy_pick=10&amp;extra_jackpot=" data-event-easy-pick="1">10 lines for $ 4.27</option>
                                                    <option value="/en/play-lottery/za-daily-lotto/?from=results_list&amp;easy_pick=15&amp;extra_jackpot=" data-event-easy-pick="1">15 lines for $ 6.34</option>
                                                    <option value="" disabled="">–––––&nbsp;or&nbsp;–––––</option>
                                                    <option value="/en/play-lottery/za-daily-lotto/?from=results_list&amp;extra_jackpot=">Pick numbers</option>



                                                </select>
                                                <a href="/en/play-lottery/za-daily-lotto/?from=results_list&amp;extra_jackpot=" class="btn btn-success event-easy-pick-main-btn">
                                                    Play<span class="fa-solid fa-chevron-down"></span>
                                                </a>
                                                <div class="lottery_sel_dropdown">
                                                    <div class="offers">
                                                        <p><a href="/en/play-lottery/za-daily-lotto/?from=results_list&amp;easy_pick=10&amp;extra_jackpot=" class="event-easy-pick-offer">10 lines for $ 4.27</a></p>
                                                        <p><a href="/en/play-lottery/za-daily-lotto/?from=results_list&amp;easy_pick=15&amp;extra_jackpot=" class="event-easy-pick-offer">15 lines for $ 6.34</a></p>
                                                    </div>
                                                    <div class="or">––––– or –––––</div>
                                                    <p><a href="/en/play-lottery/za-daily-lotto/?from=results_list&amp;extra_jackpot=" class="lottery_sel_choose">Pick numbers</a></p>
                                                    <div class="or light_version_site_hide">–––––––––––––</div>


                                                    <p style="margin-top: 5px;"><a href="/en/play-lottery/za-daily-lotto/?from=index_lotto&amp;system=1&amp;extra_jackpot=" class="lottery_sel_choose game-type-ico lamp opt-system">System</a></p>

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <a href="#windowAlert" class="ratestars fancybox" onclick="yaGoals('CLEVER');" data-title="Today's Top-Rated Lotteries" data-text="<p>We analyze dozens of parameters daily: Jackpot amount and tax deductions, winning odds and the number of prize divisions, cost of a single line, and availability of such options as &quot;Multiplier,&quot; and much more to offer you the best possible lottery at the moment!</p><p>Choose a lottery with the highest score to win more and spend less!</p>" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Lottery rating from 1 to 10">
                                        <span class="fa-solid fa-star"></span>
                                        <span class="ratestars_val">6.6</span>
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="results_item" data-lotto="La Primitiva">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="results_item_cont">
                                    <div class="results_item_top">
                                        <div class="lott">
                                            <div class="lott_flag"><img src="https://static.cdnland.com/new/images/svg/country/es.svg" alt="ES"></div>
                                            <div class="lott_info">
                                                <div class="lott_name"><a >La Primitiva</a></div>
                                                <div class="lott_data">Draw Date Saturday, 01.04.2023</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="results_item_mid">
                                        <ul class="numberList">
                                            <li class="" title=""><span>9</span></li><li class="" title=""><span>13</span></li><li class="" title=""><span>18</span></li><li class="" title=""><span>27</span></li><li class="" title=""><span>39</span></li><li class="" title=""><span>40</span></li><li class="jolly" title="Complementario"><span>26</span></li><li class="reintegro" title="Reintegro"><span>3</span></li>
                                        </ul>

                                    </div>
                                    <div class="results_item_bot results_item_bot-fl">
                                        <div class="results_item_right">
                                            <div class="team" style="" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Our winners">
                                                <span class="fa fa-users"></span>
                                                <div class="team_val">153</div>
                                            </div>
                                            <div class="link-play" data-toggle="tooltip" data-placement="bottom" title="" style="visibility: hidden;" data-original-title="Lottery broadcast recordings available"><span class="fa-regular fa-circle-play"></span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="jackpot">
                                    <div class="jackpot_cont">
                                        <div class="jackpot_val">€ 12 <span class="mln_icon_extra text-nowrap">Million </span></div>
                                        <div class="jackpot_date time_val">Next draw in <span class=" " date-close="113314">1&nbsp;day</span></div>
                                        <div class="lottery_sel">

                                            <div class="event-easy-pick-cont">
                                                <select name="easy_pick" class="lottery_sel_select event-easy-pick-select">
                                                    <option></option>
                                                    <option value="/en/play-lottery/la-primitiva/?from=results_list&amp;easy_pick=1&amp;extra_jackpot=" data-event-easy-pick="1">1 line for $ 3.04</option>
                                                    <option value="/en/play-lottery/la-primitiva/?from=results_list&amp;easy_pick=4&amp;extra_jackpot=" data-event-easy-pick="1">4 lines for $ 10.94</option>
                                                    <option value="" disabled="">–––––&nbsp;or&nbsp;–––––</option>
                                                    <option value="/en/play-lottery/la-primitiva/?from=results_list&amp;extra_jackpot=">Pick numbers</option>



                                                </select>
                                                <a href="/en/play-lottery/la-primitiva/?from=results_list&amp;extra_jackpot=" class="btn btn-success event-easy-pick-main-btn">
                                                    Play<span class="fa-solid fa-chevron-down"></span>
                                                </a>
                                                <div class="lottery_sel_dropdown">
                                                    <div class="offers">
                                                        <p><a href="/en/play-lottery/la-primitiva/?from=results_list&amp;easy_pick=1&amp;extra_jackpot=" class="event-easy-pick-offer">1 line for $ 3.04</a></p>
                                                        <p><a href="/en/play-lottery/la-primitiva/?from=results_list&amp;easy_pick=4&amp;extra_jackpot=" class="event-easy-pick-offer">4 lines for $ 10.94</a></p>
                                                    </div>
                                                    <div class="or">––––– or –––––</div>
                                                    <p><a href="/en/play-lottery/la-primitiva/?from=results_list&amp;extra_jackpot=" class="lottery_sel_choose">Pick numbers</a></p>
                                                    <div class="or light_version_site_hide">–––––––––––––</div>

                                                    <p><a href="/en/play-lottery/la-primitiva/?from=index_lotto&amp;syndicates=1&amp;extra_jackpot=" class="lottery_sel_choose game-type-ico fire opt-syndicate">Syndicate</a></p>


                                                    <p style="margin-top: 5px;"><a href="/en/play-lottery/la-primitiva/?from=index_lotto&amp;system=1&amp;extra_jackpot=" class="lottery_sel_choose game-type-ico lamp opt-system">System</a></p>

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <a href="#windowAlert" class="ratestars fancybox" onclick="yaGoals('CLEVER');" data-title="Today's Top-Rated Lotteries" data-text="<p>We analyze dozens of parameters daily: Jackpot amount and tax deductions, winning odds and the number of prize divisions, cost of a single line, and availability of such options as &quot;Multiplier,&quot; and much more to offer you the best possible lottery at the moment!</p><p>Choose a lottery with the highest score to win more and spend less!</p>" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Lottery rating from 1 to 10">
                                        <span class="fa-solid fa-star"></span>
                                        <span class="ratestars_val">6.4</span>
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="results_item" data-lotto="Bonoloto">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="results_item_cont">
                                    <div class="results_item_top">
                                        <div class="lott">
                                            <div class="lott_flag"><img src="https://static.cdnland.com/new/images/svg/country/es.svg" alt="ES"></div>
                                            <div class="lott_info">
                                                <div class="lott_name"><a >Bonoloto</a></div>
                                                <div class="lott_data">Draw Date Saturday, 01.04.2023</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="results_item_mid">
                                        <ul class="numberList">
                                            <li class="" title=""><span>1</span></li><li class="" title=""><span>3</span></li><li class="" title=""><span>7</span></li><li class="" title=""><span>14</span></li><li class="" title=""><span>31</span></li><li class="" title=""><span>40</span></li><li class="jolly" title="Complimentario"><span>45</span></li><li class="reintegro" title="Reintegro"><span>7</span></li>
                                        </ul>

                                    </div>
                                    <div class="results_item_bot results_item_bot-fl">
                                        <div class="results_item_right">
                                            <div class="team" style="" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Our winners">
                                                <span class="fa fa-users"></span>
                                                <div class="team_val">27</div>
                                            </div>
                                            <div class="link-play" data-toggle="tooltip" data-placement="bottom" title="" style="visibility: hidden;" data-original-title="Lottery broadcast recordings available"><span class="fa-regular fa-circle-play"></span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="jackpot">
                                    <div class="jackpot_cont">
                                        <div class="jackpot_val">€ 1.9 <span class="mln_icon_extra text-nowrap">Million </span></div>
                                        <div class="jackpot_date time_val">Next draw in <span class=" " date-close="116914">1&nbsp;day</span></div>
                                        <div class="lottery_sel">

                                            <div class="event-easy-pick-cont">
                                                <select name="easy_pick" class="lottery_sel_select event-easy-pick-select">
                                                    <option></option>
                                                    <option value="/en/play-lottery/bonoloto/?from=results_list&amp;easy_pick=2&amp;extra_jackpot=" data-event-easy-pick="1">2 lines for $ 3.70</option>
                                                    <option value="/en/play-lottery/bonoloto/?from=results_list&amp;easy_pick=4&amp;extra_jackpot=" data-event-easy-pick="1">4 lines for $ 7.03</option>
                                                    <option value="" disabled="">–––––&nbsp;or&nbsp;–––––</option>
                                                    <option value="/en/play-lottery/bonoloto/?from=results_list&amp;extra_jackpot=">Pick numbers</option>



                                                </select>
                                                <a href="/en/play-lottery/bonoloto/?from=results_list&amp;extra_jackpot=" class="btn btn-success event-easy-pick-main-btn">
                                                    Play<span class="fa-solid fa-chevron-down"></span>
                                                </a>
                                                <div class="lottery_sel_dropdown">
                                                    <div class="offers">
                                                        <p><a href="/en/play-lottery/bonoloto/?from=results_list&amp;easy_pick=2&amp;extra_jackpot=" class="event-easy-pick-offer">2 lines for $ 3.70</a></p>
                                                        <p><a href="/en/play-lottery/bonoloto/?from=results_list&amp;easy_pick=4&amp;extra_jackpot=" class="event-easy-pick-offer">4 lines for $ 7.03</a></p>
                                                    </div>
                                                    <div class="or">––––– or –––––</div>
                                                    <p><a href="/en/play-lottery/bonoloto/?from=results_list&amp;extra_jackpot=" class="lottery_sel_choose">Pick numbers</a></p>
                                                    <div class="or light_version_site_hide">–––––––––––––</div>


                                                    <p style="margin-top: 5px;"><a href="/en/play-lottery/bonoloto/?from=index_lotto&amp;system=1&amp;extra_jackpot=" class="lottery_sel_choose game-type-ico lamp opt-system">System</a></p>

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <a href="#windowAlert" class="ratestars fancybox" onclick="yaGoals('CLEVER');" data-title="Today's Top-Rated Lotteries" data-text="<p>We analyze dozens of parameters daily: Jackpot amount and tax deductions, winning odds and the number of prize divisions, cost of a single line, and availability of such options as &quot;Multiplier,&quot; and much more to offer you the best possible lottery at the moment!</p><p>Choose a lottery with the highest score to win more and spend less!</p>" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Lottery rating from 1 to 10">
                                        <span class="fa-solid fa-star"></span>
                                        <span class="ratestars_val">7.3</span>
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="results_item" data-lotto="El Gordo de la Primitiva">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="results_item_cont">
                                    <div class="results_item_top">
                                        <div class="lott">
                                            <div class="lott_flag"><img src="https://static.cdnland.com/new/images/svg/country/es.svg" alt="ES"></div>
                                            <div class="lott_info">
                                                <div class="lott_name"><a >El Gordo de la Primitiva</a></div>
                                                <div class="lott_data">Draw Date Sunday, 02.04.2023</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="results_item_mid">
                                        <ul class="numberList">
                                            <li></li><li></li><li></li><li></li><li></li><li></li>
                                        </ul>
                                        <p style="padding:0;">Coming soon</p>
                                    </div>
                                    <div class="results_item_bot results_item_bot-fl">
                                        <a  class="results_item_link"><span class="fa-solid fa-chevron-right"></span>Learn more</a>

                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="jackpot">
                                    <div class="jackpot_cont">
                                        <div class="jackpot_val">€ 5+ <span class="mln_icon_extra text-nowrap">Million </span></div>
                                        <div class="jackpot_date time_val">Next draw in <span class=" " date-close="527314">6&nbsp;days</span></div>
                                        <div class="lottery_sel">

                                            <div class="event-easy-pick-cont">
                                                <select name="easy_pick" class="lottery_sel_select event-easy-pick-select">
                                                    <option></option>
                                                    <option value="/en/play-lottery/el-gordo/?from=results_list&amp;easy_pick=2&amp;extra_jackpot=" data-event-easy-pick="1">2 lines for $ 9.68</option>
                                                    <option value="/en/play-lottery/el-gordo/?from=results_list&amp;easy_pick=3&amp;extra_jackpot=" data-event-easy-pick="1">3 lines for $ 13.50</option>
                                                    <option value="" disabled="">–––––&nbsp;or&nbsp;–––––</option>
                                                    <option value="/en/play-lottery/el-gordo/?from=results_list&amp;extra_jackpot=">Pick numbers</option>



                                                </select>
                                                <a href="/en/play-lottery/el-gordo/?from=results_list&amp;extra_jackpot=" class="btn btn-success event-easy-pick-main-btn">
                                                    Play<span class="fa-solid fa-chevron-down"></span>
                                                </a>
                                                <div class="lottery_sel_dropdown">
                                                    <div class="offers">
                                                        <p><a href="/en/play-lottery/el-gordo/?from=results_list&amp;easy_pick=2&amp;extra_jackpot=" class="event-easy-pick-offer">2 lines for $ 9.68</a></p>
                                                        <p><a href="/en/play-lottery/el-gordo/?from=results_list&amp;easy_pick=3&amp;extra_jackpot=" class="event-easy-pick-offer">3 lines for $ 13.50</a></p>
                                                    </div>
                                                    <div class="or">––––– or –––––</div>
                                                    <p><a href="/en/play-lottery/el-gordo/?from=results_list&amp;extra_jackpot=" class="lottery_sel_choose">Pick numbers</a></p>
                                                    <div class="or light_version_site_hide">–––––––––––––</div>

                                                    <p><a href="/en/play-lottery/el-gordo/?from=index_lotto&amp;syndicates=1&amp;extra_jackpot=" class="lottery_sel_choose game-type-ico fire opt-syndicate">Syndicate</a></p>


                                                    <p style="margin-top: 5px;"><a href="/en/play-lottery/el-gordo/?from=index_lotto&amp;system=1&amp;extra_jackpot=" class="lottery_sel_choose game-type-ico lamp opt-system">System</a></p>

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <a href="#windowAlert" class="ratestars fancybox" onclick="yaGoals('CLEVER');" data-title="Today's Top-Rated Lotteries" data-text="<p>We analyze dozens of parameters daily: Jackpot amount and tax deductions, winning odds and the number of prize divisions, cost of a single line, and availability of such options as &quot;Multiplier,&quot; and much more to offer you the best possible lottery at the moment!</p><p>Choose a lottery with the highest score to win more and spend less!</p>" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Lottery rating from 1 to 10">
                                        <span class="fa-solid fa-star"></span>
                                        <span class="ratestars_val">6.6</span>
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="results_item" data-lotto="Wisconsin Megabucks">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="results_item_cont">
                                    <div class="results_item_top">
                                        <div class="lott">
                                            <div class="lott_flag"><img src="https://static.cdnland.com/new/images/svg/country/us.svg" alt="US"></div>
                                            <div class="lott_info">
                                                <div class="lott_name"><a >Wisconsin Megabucks</a></div>
                                                <div class="lott_data">Draw Date Saturday, 01.04.2023</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="results_item_mid">
                                        <ul class="numberList">
                                            <li></li><li></li><li></li><li></li><li></li><li></li>
                                        </ul>
                                        <p style="padding:0;">Coming soon</p>
                                    </div>
                                    <div class="results_item_bot results_item_bot-fl">

                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="jackpot">
                                    <div class="jackpot_cont">
                                        <div class="jackpot_val">$ 1 <span class="mln_icon_extra text-nowrap">Million </span></div>
                                        <div class="jackpot_date time_val">Next draw in <span class=" " date-close="314914">3&nbsp;days</span></div>
                                        <div class="lottery_sel">

                                            <div class="event-easy-pick-cont">
                                                <select name="easy_pick" class="lottery_sel_select event-easy-pick-select">
                                                    <option></option>
                                                    <option value="/en/play-lottery/megabucks/?from=results_list&amp;easy_pick=2&amp;extra_jackpot=" data-event-easy-pick="1">2 lines for $ 3.30</option>
                                                    <option value="/en/play-lottery/megabucks/?from=results_list&amp;easy_pick=5&amp;extra_jackpot=" data-event-easy-pick="1">5 lines for $ 7.67</option>
                                                    <option value="" disabled="">–––––&nbsp;or&nbsp;–––––</option>
                                                    <option value="/en/play-lottery/megabucks/?from=results_list&amp;extra_jackpot=">Pick numbers</option>



                                                </select>
                                                <a href="/en/play-lottery/megabucks/?from=results_list&amp;extra_jackpot=" class="btn btn-success event-easy-pick-main-btn">
                                                    Play<span class="fa-solid fa-chevron-down"></span>
                                                </a>
                                                <div class="lottery_sel_dropdown">
                                                    <div class="offers">
                                                        <p><a href="/en/play-lottery/megabucks/?from=results_list&amp;easy_pick=2&amp;extra_jackpot=" class="event-easy-pick-offer">2 lines for $ 3.30</a></p>
                                                        <p><a href="/en/play-lottery/megabucks/?from=results_list&amp;easy_pick=5&amp;extra_jackpot=" class="event-easy-pick-offer">5 lines for $ 7.67</a></p>
                                                    </div>
                                                    <div class="or">––––– or –––––</div>
                                                    <p><a href="/en/play-lottery/megabucks/?from=results_list&amp;extra_jackpot=" class="lottery_sel_choose">Pick numbers</a></p>
                                                    <div class="or light_version_site_hide">–––––––––––––</div>


                                                    <p style="margin-top: 5px;"><a href="/en/play-lottery/megabucks/?from=index_lotto&amp;system=1&amp;extra_jackpot=" class="lottery_sel_choose game-type-ico lamp opt-system">System</a></p>

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <a href="#windowAlert" class="ratestars fancybox" onclick="yaGoals('CLEVER');" data-title="Today's Top-Rated Lotteries" data-text="<p>We analyze dozens of parameters daily: Jackpot amount and tax deductions, winning odds and the number of prize divisions, cost of a single line, and availability of such options as &quot;Multiplier,&quot; and much more to offer you the best possible lottery at the moment!</p><p>Choose a lottery with the highest score to win more and spend less!</p>" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Lottery rating from 1 to 10">
                                        <span class="fa-solid fa-star"></span>
                                        <span class="ratestars_val">6.6</span>
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="results_item" data-lotto="Lotto 6 aus 49">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="results_item_cont">
                                    <div class="results_item_top">
                                        <div class="lott">
                                            <div class="lott_flag"><img src="https://static.cdnland.com/new/images/svg/country/de.svg" alt="DE"></div>
                                            <div class="lott_info">
                                                <div class="lott_name"><a >Lotto 6 aus 49</a></div>
                                                <div class="lott_data">Draw Date Saturday, 01.04.2023</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="results_item_mid">
                                        <ul class="numberList">
                                            <li></li><li></li><li></li><li></li><li></li><li></li><li></li>
                                        </ul>
                                        <p style="padding:0;">Coming soon</p>
                                    </div>
                                    <div class="results_item_bot results_item_bot-fl">

                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="jackpot">
                                    <div class="jackpot_cont">
                                        <div class="jackpot_val">€ 1+ <span class="mln_icon_extra text-nowrap">Million </span></div>
                                        <div class="jackpot_date time_val">Next draw in <span class=" " date-close="278914">3&nbsp;days</span></div>
                                        <div class="lottery_sel">

                                            <div class="event-easy-pick-cont">
                                                <select name="easy_pick" class="lottery_sel_select event-easy-pick-select">
                                                    <option></option>
                                                    <option value="/en/play-lottery/lotto-6-aus-49/?from=results_list&amp;easy_pick=1&amp;extra_jackpot=" data-event-easy-pick="1">1 line for $ 3.80</option>
                                                    <option value="/en/play-lottery/lotto-6-aus-49/?from=results_list&amp;easy_pick=3&amp;extra_jackpot=" data-event-easy-pick="1">3 lines for $ 10.83</option>
                                                    <option value="" disabled="">–––––&nbsp;or&nbsp;–––––</option>
                                                    <option value="/en/play-lottery/lotto-6-aus-49/?from=results_list&amp;extra_jackpot=">Pick numbers</option>



                                                </select>
                                                <a href="/en/play-lottery/lotto-6-aus-49/?from=results_list&amp;extra_jackpot=" class="btn btn-success event-easy-pick-main-btn">
                                                    Play<span class="fa-solid fa-chevron-down"></span>
                                                </a>
                                                <div class="lottery_sel_dropdown">
                                                    <div class="offers">
                                                        <p><a href="/en/play-lottery/lotto-6-aus-49/?from=results_list&amp;easy_pick=1&amp;extra_jackpot=" class="event-easy-pick-offer">1 line for $ 3.80</a></p>
                                                        <p><a href="/en/play-lottery/lotto-6-aus-49/?from=results_list&amp;easy_pick=3&amp;extra_jackpot=" class="event-easy-pick-offer">3 lines for $ 10.83</a></p>
                                                    </div>
                                                    <div class="or">––––– or –––––</div>
                                                    <p><a href="/en/play-lottery/lotto-6-aus-49/?from=results_list&amp;extra_jackpot=" class="lottery_sel_choose">Pick numbers</a></p>
                                                    <div class="or light_version_site_hide">–––––––––––––</div>

                                                    <p><a href="/en/play-lottery/lotto-6-aus-49/?from=index_lotto&amp;syndicates=1&amp;extra_jackpot=" class="lottery_sel_choose game-type-ico fire opt-syndicate">Syndicate</a></p>


                                                    <p style="margin-top: 5px;"><a href="/en/play-lottery/lotto-6-aus-49/?from=index_lotto&amp;system=1&amp;extra_jackpot=" class="lottery_sel_choose game-type-ico lamp opt-system">System</a></p>

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <a href="#windowAlert" class="ratestars fancybox" onclick="yaGoals('CLEVER');" data-title="Today's Top-Rated Lotteries" data-text="<p>We analyze dozens of parameters daily: Jackpot amount and tax deductions, winning odds and the number of prize divisions, cost of a single line, and availability of such options as &quot;Multiplier,&quot; and much more to offer you the best possible lottery at the moment!</p><p>Choose a lottery with the highest score to win more and spend less!</p>" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Lottery rating from 1 to 10">
                                        <span class="fa-solid fa-star"></span>
                                        <span class="ratestars_val">6.5</span>
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8">
                        <div class="text-muted page_txt-sm"></div>
                    </div>
                </div>
            </div>
        </section>

        <script>
            function search_lotto_by_name() {
                let word = $.trim($('#lotto_for_search').val().toLowerCase());
                if (word) {
                    $('.results_item').each(function(){
                        let lotto = $(this).data('lotto').toLowerCase();
                        if (lotto.indexOf(word) > -1) {
                            $(this).removeClass('d-none');
                        } else {
                            $(this).addClass('d-none');
                        }
                    });
                } else {
                    $('.results_item').removeClass('d-none');
                }
            }
        </script>
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
