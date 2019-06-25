<?php
/**
 * Created by PhpStorm.
 * User: DELL
 * Date: 3/28/2019
 * Time: 7:52 PM
 */
?>
@extends('Homepage')
@section('content')
    <link rel="stylesheet" type="text/css" href="{{url('css/event.css')}}">
    <div class="s-section div-event1">
        <div class="container">
            <div class="col-md-5 img">
                <img src="{{asset('images/event-12.jpg')}}">
            </div>
            <div class="col-md-7 status">
                <h1><a href="{{url('events')}}" class="event-2">Events</a> - <a href="#" class="campaign-2">Campaigns</a></h1>
                <span>Stand up for women’s safety.
                    Stop violence against women.
				</span>
            </div>
            <hr class="s-section">
        </div>
    </div>
    <div class="s-section div-event2">
        <div class="container">
            <div class="col-md-4 about-event">
                <div class="event-pics">
                    <img src="{{asset('images/event-1.jpg')}}">
                    <div class="e-event-mask">
                        <a href=""><h4>Campaign Name</h4></a>
                        <p>Place</p>
                        <span>Date</span>
                        <span class="e-ended">(Ended)</span>
                    </div>
                </div>
            </div>
            <div class="col-md-4 about-event">
                <div class="event-pics">
                    <img src="{{asset('images/event-2.jpg')}}">
                    <div class="e-event-mask">
                        <a href=""><h4>Campaign Name</h4></a>
                        <p>Place</p>
                        <span>Date</span>
                        <span class="e-ended">(Ended)</span>
                    </div>
                </div>
            </div>
            <div class="col-md-4 about-event">
                <div class="event-pics">
                    <img src="{{'images/event-3.jpg'}}">
                    <div class="e-event-mask">
                        <a href=""><h4>Campaign Name</h4></a>
                        <p>Place</p>
                        <span>Date</span>
                        <span class="e-ended">(Ended)</span>
                    </div>
                </div>
            </div>
            <div class="col-md-4 about-event">
                <div class="event-pics">
                    <img src="{{'images/event-4.jpg'}}">
                    <div class="e-event-mask">
                        <a href=""><h4>Campaign Name</h4></a>
                        <p>Place</p>
                        <span>Date</span>
                        <span class="e-ended">(Ended)</span>
                    </div>
                </div>
            </div>
            <div class="col-md-4 about-event">
                <div class="event-pics">
                    <img src="{{'images/event-5.jpg'}}">
                    <div class="e-event-mask">
                        <a href=""><h4>Campaign Name</h4></a>
                        <p>Place</p>
                        <span>Date</span>
                        <span class="e-ended">(Ended)</span>
                    </div>
                </div>
            </div>
            <div class="col-md-4 about-event">
                <div class="event-pics">
                    <img src="{{asset('images/event-6.jpg')}}">
                    <div class="e-event-mask">
                        <a href=""><h4>Campaign Name</h4></a>
                        <p>Place</p>
                        <span>Date</span>
                        <span class="e-ended">(Ended)</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endsection
