<?php
/**
 * Created by PhpStorm.
 * User: DELL
 * Date: 3/28/2019
 * Time: 2:54 PM
 */
?>
@extends('Homepage')
@section('content')
    <div class="s-section home" id="home">
        <div class="intro" id="intro-bg">
            <div class="intro-inner">
                <h1>Stand up for women's safety.</h1>
                <h3><i>Take a look in to our website.</i></h3>
                <a href="#stories" class="intro-btn">Let's Go</a>
                <a href="#stories"><p><i class="fas fa-angle-down"></i></p></a>
            </div>
        </div>
    </div>
    <div class="s-section stories navbar-active" id="stories">
        <div class="owl-carousel">
            @include('public.story')

        </div>
    </div>
    <div class="s-section donate" id="donate">
        <div class="donate-inner">
            <h1>DONATE.</h1>
            <hr>
        </div>
        <div class="s-container">
            <div class="donate-main-inner">
                <div class="donate-picture" id="donate-bg">
                    <h1>Help Us Stop <p> Violence Against Women.</p></h1>
                </div>
                <div class="donate-content">
                    <div class="donate-content-inner col-md-4">
                        <a href=""><i class="fas fa-hands-helping"></i></a>
                        <a href=""><p>VOLUNTEER</p></a>
                        <h4>Join Safe City Team</h4>
                    </div>
                    <div class="donate-content-inner col-md-4">
                        <a href=""><i class="fas fa-hand-holding-usd"></i></a>
                        <a href="{{url('donate')}}"><p>DONATE</p></a>
                        <h4>One Time Gift</h4>
                    </div>
                    <div class="donate-content-inner col-md-4">
                        <a href=""><i class="fas fa-donate"></i></a>
                        <a href=""><p>DONATE MONTHLY</p></a>
                        <h4>Monthly Gift</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="s-section events" id="events">
        <div class="events-container">
            <div class="events-title">
                <h1>Events.</h1>
                <i><a href="{{url('events')}}">View all.</a></i>
            </div>
            <div class="events-content">
                <div class="col-md-6 float-left pad0">
                    <div class="col-12 float-left event-pic pad0" id="event-1">
                        <img src="{{asset('images/event-1.jpg')}}">
                        <div class="mask-event">
                            <a href="">Women Safety Event</a>
                            <hr class="event-hr">
                            <p>California</p>
                            <span>Fri,22 Feb 2019 8:00 PM - 10:00 PM</span>
                            <span class="ended"> (Ended)</span>
                        </div>
                    </div>
                    <div class="col-md-6 float-left event-pic pad0" id="event-2">
                        <img src="{{asset('images/event-2.jpg')}}">
                        <div class="mask-event">
                            <a href="">Protect Your Women</a>
                            <hr class="event-hr">
                            <p>Alabamma</p>
                            <span>Wed,14 June 2018 7:00 AM - 10:00 AM</span>
                            <span class="ended"> (Ended)</span>
                        </div>
                    </div>
                    <div class="col-md-6 float-left event-pic pad0" id="event-3">
                        <img src="{{asset('images/event-3.jpg')}}">
                        <div class="mask-event">
                            <a href="">Women in Safety</a>
                            <hr class="event-hr">
                            <p>Ha Quang Nhi Street, Mo Lao Town, Ha Noi</p>
                            <span>Sat, 15 August 2017 5:00 PM - 6:00 PM</span>
                            <span class="ended"> (Ended)</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 float-left pad0">
                    <div class="col-md-6 float-left event-pic pad0" id="event-4">
                        <img src="{{asset('images/event-4.jpg')}}">
                        <div class="mask-event">
                            <a href="">Safety Sister</a>
                            <hr class="event-hr">
                            <p>Ton That Thuyet Street, My Dinh Town, Ha Noi</p>
                            <span>Tue, 27 July 2015 8:00 AM - 9:00 AM</span>
                            <span class="ended"> (Ended)</span>
                        </div>
                    </div>
                    <div class="col-md-6 float-left event-pic pad0" id="event-5">
                        <img src="{{asset('images/event-5.jpg')}}">
                        <div class="mask-event">
                            <a href="">Safety Panel by Nguyen Duc Tuy</a>
                            <hr class="event-hr">
                            <p>22nd Floor,Landmark 72, Pham Hung Street, My Dinh Town, Ha Noi</p>
                            <span>Mon, 12 Jan 2019 2:00 PM - 4:00 PM</span>
                            <span class="ended"> (Ended)</span>
                        </div>
                    </div>
                    <div class="col-12 float-left event-pic pad0" id="event-6">
                        <img src="{{asset('images/event-6.jpg')}}" alt="">
                        <div class="mask-event">
                            <a href="">Women in Safety - Hang Bong</a>
                            <hr>
                            <p class="event-hr">136 Hang Bong str, Hoan Kiem Town, Ha Noi</p>
                            <span>Sun, 14 March 2012 12:00 PM - 3:00 PM</span>
                            <span class="ended"> (Ended)</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="s-section our-work" id="about">
        <div class="our-work-inner">
            <div class="col-12 our-work-1">
                <div class="our-work-content">
                    <h1>OUR WORK.</h1>
                    <span>THE MISSION OF WOMENSAFE IS TO PROVIDE EMERGENCY SHELTER AND RESOURCES TO SURVIVORS OF DOMESTIC VIOLENCE THROUGHOUT GLOBAL.</span>
                </div>
            </div>
        </div>
    </div>


@endsection
