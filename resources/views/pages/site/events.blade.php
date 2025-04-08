@extends('welcome')
@section('body')

    <div id="page_caption" class="  ">
        <div class="page_title_wrapper">
            <div class="page_title_inner">
                <h1><span>Évènement</span></h1>
            </div>
        </div>
    </div>

    @include('layouts.site.trending')

    <!-- Begin content -->
    <div id="page_content_wrapper" class="">
        <div class="inner">
            <!-- Begin main content -->
            <div class="inner_wrapper">
                <div class="sidebar_content">
                    <!-- Begin each blog post -->
                    <div id="post-3761"
                         class="post-3761 post type-post status-publish format-standard has-post-thumbnail hentry category-food category-lifestyle category-style category-topnews tag-bridge tag-lifestyle tag-travel">
                        <div class="post_wrapper">
                            <div class="post_content_wrapper">
                                <div class="post_header mixed">
                                    <div class="post_header_title">
                                        <div class="post_info_cat">
                                            <span>
                                                <a href="#">Évènement</a>
                                                &nbsp;/
                                                <a href="#">Life Style</a>
                                                &nbsp;/
                                                <a href="#">Style</a>
                                                &nbsp;/
                                                <a href="#">Top News</a>
                                            </span>
                                        </div>

                                        <h5>
                                            <a href="#" title="Kookaï’s Spring 2015 Runway Arrivals Talk Trends and Supporting Local Labels">
                                                Meta dévoile des lunettes AR révolutionnaires : la fin des smartphones ? <!-- (max ktère 76) -->
                                            </a>
                                        </h5>
                                        <div class="post_detail post_date">
                                            <span class="post_info_author">
                                                <a href="#">
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
                                                </a>
                                            </span>
                                            <span class="post_info_date">
                                                <a href="#">Posted On March 23, 2016</a>
                                            </span>
                                        </div>
                                    </div>

                                    <br class="clear" />

                                    <div class="post_img">
                                        <a href="#">
                                            <img src="{{asset('site/upload/photo-1441471349424-351990746ff4-960x640.jpg')}}" alt="" class="" style="width: 960px; height: 640px;" />
                                        </a>
                                    </div>

                                    <br class="clear" />

                                    <p>
                                        Lorem ipsum dosectetur adipisicing elit, sed do.Lorem ipsum dolor sit amet, consectetur Nulla fringilla purus at leo dignissim congue. Mauris elementum accumsan leo vel tempor. Sit amet cursus nisl
                                        aliquam. Aliquam et elit eu nunc rhoncus viverra quis at felis. [&hellip;]
                                    </p>

                                    <br class="clear" />

                                    <div class="post_button_wrapper">
                                        <a class="readmore" href="#">Continue Reading</a>
                                    </div>

                                    <div class="post_info_comment">
                                        <a href="#"><i class="fa fa-commenting"></i>0</a>
                                    </div>

                                    <div class="post_info_view"><i class="fa fa-eye"></i>6.1K&nbsp;Views</div>

                                    <br class="clear" />
                                    <hr class="post_divider" />
                                    <hr class="post_divider double" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <br class="clear"/>
                    <!-- End each blog post -->
                </div>
            </div>
            <!-- End main content -->
        </div>
    </div>
    <!-- End content -->
@endsection
