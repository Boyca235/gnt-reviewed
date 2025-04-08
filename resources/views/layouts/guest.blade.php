@extends('welcome')
@section('body')
    <div class="ppb_wrapper">
        @include('layouts.site.trending')

        <!-- Begin principle contain section -->
        <div class="ppb_blog_grid_with_posts one nopadding" style="padding-top: 0 !important; padding: 0px 0 0px 0;">
            <div class="standard_wrapper">
                <div class="two_third div_wrapper"
                     style="background-image: url('{{asset('site/upload/hands-woman-laptop-working-960x640.jpg')}}');">
                    <div class="post_header">
                        <div class="post_detail post_date">
                                    <span class="post_info_author">
                                        <span class="gravatar">
                                            <img
                                                alt=""
                                                src="{{asset('site/upload/avatar2.jpg')}}"
                                                class="avatar avatar-60 photo"
                                                height="60"
                                                width="60"
                                                loading="lazy"
                                            />
                                        </span>
                                        John Philippe
                                    </span>
                            <span class="post_info_date">
                                        <a href="#">March 23, 2016</a>
                                    </span>
                        </div>
                        <h2>
                            <a href="#" title="Spring 2015 Runway Arrivals Talk Trends and Supporting Labels">
                                Spring 2015 Runway Arrivals Talk Trends and Supporting Labels
                            </a>
                        </h2>
                    </div>
                </div>
                <div class="one_third last">
                    <div class="post type-post">
                        <div class="post_wrapper">
                            <div class="post_content_wrapper">
                                <div class="post_header search">
                                    <div class="post_img static one_third">
                                        <a href="#">
                                            <img src="{{asset('site/upload/pexels-photo-700x466.jpg')}}" alt=""
                                                 class=""/>
                                        </a>
                                    </div>
                                    <div class="post_header_title two_third last">
                                        <h5>
                                            <a href="#"
                                               title="Whistleblower wins $51 million in kickback and bribery case">
                                                Whistleblower wins $51 million in kickback and bribery case
                                            </a>
                                        </h5>
                                        <span class="post_info_date">
                                                    <a href="#">July 22, 2015</a>
                                                </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="post type-post">
                        <div class="post_wrapper">
                            <div class="post_content_wrapper">
                                <div class="post_header search">
                                    <div class="post_img static one_third">
                                        <a href="#">
                                            <img src="{{asset('site/upload/man-coffee-cup-pen-700x466.jpg')}}" alt=""
                                                 class=""/>
                                        </a>
                                    </div>
                                    <div class="post_header_title two_third last">
                                        <h5>
                                            <a href="#"
                                               title="Industry Influencers Reveal the Famous Women Who Inspire">
                                                Industry Influencers Reveal the Famous Women Who Inspire
                                            </a>
                                        </h5>
                                        <span class="post_info_date">
                                                    <a href="#">July 22, 2015</a>
                                                </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="post type-post">
                        <div class="post_wrapper">
                            <div class="post_content_wrapper">
                                <div class="post_header search">
                                    <div class="post_img static one_third">
                                        <a href="#">
                                            <img src="{{asset('site/upload/prague-700x466.jpg')}}" alt="" class=""/>
                                        </a>
                                    </div>
                                    <div class="post_header_title two_third last">
                                        <h5>
                                            <a href="#" title="Blogger Rumi Neely: Where to Eat, Drink and Shop in LA">
                                                Blogger Rumi Neely: Where to Eat, Drink and Shop in LA
                                            </a>
                                        </h5>
                                        <span class="post_info_date">
                                                    <a href="#">July 22, 2015</a>
                                                </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="post type-post">
                        <div class="post_wrapper">
                            <div class="post_content_wrapper">
                                <div class="post_header search">
                                    <div class="post_img static one_third">
                                        <a href="#">
                                            <img src="{{asset('site/upload/man-person-technology-music-700x466.jpg')}}"
                                                 alt="" class=""/>
                                        </a>
                                    </div>
                                    <div class="post_header_title two_third last">
                                        <h5>
                                            <a href="#"
                                               title="High-End Street Style Shines at Haute Couture Fashion Week">
                                                High-End Street Style Shines at Haute Couture Fashion Week
                                            </a>
                                        </h5>
                                        <span class="post_info_date">
                                                    <a href="#">July 22, 2015</a>
                                                </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="post type-post">
                        <div class="post_wrapper">
                            <div class="post_content_wrapper">
                                <div class="post_header search">
                                    <div class="post_img static one_third">
                                        <a href="#">
                                            <img src="{{asset('site/upload/startup-photos-1-700x466.jpg')}}" alt=""
                                                 class=""/>
                                        </a>
                                    </div>
                                    <div class="post_header_title two_third last">
                                        <h5>
                                            <a href="#"
                                               title="Forest Festivities: The Best Festival Outfits From Secret Garden Australia">
                                                Forest Festivities: The Best Festival Outfits From Secret Garden
                                                Australia
                                            </a>
                                        </h5>
                                        <span class="post_info_date">
                                                    <a href="#">July 21, 2015</a>
                                                </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="post type-post">
                        <div class="post_wrapper">
                            <div class="post_content_wrapper">
                                <div class="post_header search">
                                    <div class="post_img static one_third">
                                        <a href="#">
                                            <img src="{{asset('site/upload/pexels-photo-51171-700x466.jpg')}}" alt=""
                                                 class=""/>
                                        </a>
                                    </div>
                                    <div class="post_header_title two_third last">
                                        <h5>
                                            <a href="#"
                                               title="All the Best Street Style Looks From London Fashion Week Fall 2016">
                                                All the Best Street Style Looks From London Fashion Week Fall 2016
                                            </a>
                                        </h5>
                                        <span class="post_info_date">
                                                    <a href="#">July 20, 2015</a>
                                                </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="divider one">&nbsp;</div>
        <!-- End principle contain section -->
    </div>
@endsection
