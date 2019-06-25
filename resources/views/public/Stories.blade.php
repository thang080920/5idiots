<?php
/**
 * Created by PhpStorm.
 * User: DELL
 * Date: 3/28/2019
 * Time: 4:54 PM
 */
?>
@extends('Homepage')
@section('content')
    <link rel="stylesheet" href="{{url('css/Story.css')}}">
    <div class="h-section story">
        <div class="col-lg-12" id="h-introframe" style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.1)),{{url('../images/portrait1.png')}}">
            <div class="h-text-intro" >
                <h2>WOMEN OF SAFE CITY</h2>
            </div>
            <nav class="header-nav">
                <a href="#id_container_header" class="stories-header" id="id-stories-header">
                    Stories
                </a>
                <span class="nav-spacer"></span>
                <a href="{{url('heroes')}}" class="heroes-header" id="id-heroes-header">
                    Heroes
                </a>
                <span class="nav-spacer"></span>
                <a href="{{url('witness')}}" class="witness-header" id="id-witness-header">
                    Witness
                </a>
            </nav>
            <div class="h-nav-description">
                <p id="h-nav-description-up" style="margin: 0px 20px;">"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis imperdiet urna eget magna dapibus, vel tincidunt ligula suscipit. Donec lacinia diam non diam commodo, sit amet lobortis est lobortis.</p>
                <a href="#id_container_header" style="color: white;"><i class="fas fa-chevron-circle-down" id="arrow"></i></a>
            </div>
        </div>
        <div class="container-header" id="id_container_header">
            <h1>HUMAN OF SAFE CITY</h1>
            <h2>LATEST STORIES</h2>
        </div>
        <div class="col-lg-12 infs" id="infs">
            <div class="row">
                <div class="col-lg-4 card border-0 inf">
                    <img src="{{asset('images/portrait3.jpg')}}" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title"><u><b>#1STORY</b></u></h5>
                        <p class="card-text">"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a vulputate arcu, lobortis elementum ipsum. Curabitur vestibulum turpis eu semper porttitor. Duis at turpis vitae augue condimentum hendrerit. Phasellus a arcu et magna pulvinar sagittis. Aenean volutpat nunc vel vulputate tincidunt. Ut interdum neque non ante mollis vulputate. Aliquam erat volutpat. Fusce vulputate, massa sit amet aliquam accumsan, neque nulla dictum odio, sed mollis diam felis sed orci. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Vivamus vel risus ligula. Aliquam tempus maximus dui id malesuada. In pellentesque rutrum tellus, accumsan euismod augue pulvinar quis. Proin sed egestas lorem.</p>
                    </div>
                </div>
                <div class="col-lg-4 card border-0  inf">
                    <img src="{{asset('images/portrait4.jpg')}}" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title"><u><b>#2STORY</b></u></h5>
                        <p class="card-text">"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a vulputate arcu, lobortis elementum ipsum. Curabitur vestibulum turpis eu semper porttitor. Duis at turpis vitae augue condimentum hendrerit. Phasellus a arcu et magna pulvinar sagittis. Aenean volutpat nunc vel vulputate tincidunt. Ut interdum neque non ante mollis vulputate. Aliquam erat volutpat. Fusce vulputate, massa sit amet aliquam accumsan, neque nulla dictum odio, sed mollis diam felis sed orci. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Vivamus vel risus ligula. Aliquam tempus maximus dui id malesuada. In pellentesque rutrum tellus, accumsan euismod augue pulvinar quis. Proin sed egestas lorem.</p>
                    </div>
                </div>
                <div class="col-lg-4 card border-0  inf">
                    <img src="{{asset('images/portrait4.jpg')}}" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title"><u><b>#3STORY</b></u></h5>
                        <p class="card-text">"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a vulputate arcu, lobortis elementum ipsum. Curabitur vestibulum turpis eu semper porttitor. Duis at turpis vitae augue condimentum hendrerit. Phasellus a arcu et magna pulvinar sagittis. Aenean volutpat nunc vel vulputate tincidunt. Ut interdum neque non ante mollis vulputate. Aliquam erat volutpat. Fusce vulputate, massa sit amet aliquam accumsan, neque nulla dictum odio, sed mollis diam felis sed orci. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Vivamus vel risus ligula. Aliquam tempus maximus dui id malesuada. In pellentesque rutrum tellus, accumsan euismod augue pulvinar quis. Proin sed egestas lorem.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12 infs" id="infs">
            <div class="row">
                <div class="col-lg-4 card border-0 inf">
                    <img src="{{asset('images/portrait15.jpg')}}" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title"><u><b>#4STORY</b></u></h5>
                        <p class="card-text">"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a vulputate arcu, lobortis elementum ipsum. Curabitur vestibulum turpis eu semper porttitor. Duis at turpis vitae augue condimentum hendrerit. Phasellus a arcu et magna pulvinar sagittis. Aenean volutpat nunc vel vulputate tincidunt. Ut interdum neque non ante mollis vulputate. Aliquam erat volutpat. Fusce vulputate, massa sit amet aliquam accumsan, neque nulla dictum odio, sed mollis diam felis sed orci. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Vivamus vel risus ligula. Aliquam tempus maximus dui id malesuada. In pellentesque rutrum tellus, accumsan euismod augue pulvinar quis. Proin sed egestas lorem.</p>
                    </div>
                </div>
                <div class="col-lg-4 card border-0  inf">
                    <img src="{{asset('images/portrait16.jpg')}}" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title"><u><b>#5STORY</b></u></h5>
                        <p class="card-text">"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a vulputate arcu, lobortis elementum ipsum. Curabitur vestibulum turpis eu semper porttitor. Duis at turpis vitae augue condimentum hendrerit. Phasellus a arcu et magna pulvinar sagittis. Aenean volutpat nunc vel vulputate tincidunt. Ut interdum neque non ante mollis vulputate. Aliquam erat volutpat. Fusce vulputate, massa sit amet aliquam accumsan, neque nulla dictum odio, sed mollis diam felis sed orci. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Vivamus vel risus ligula. Aliquam tempus maximus dui id malesuada. In pellentesque rutrum tellus, accumsan euismod augue pulvinar quis. Proin sed egestas lorem.</p>
                    </div>
                </div>
                <div class="col-lg-4 card border-0  inf">
                    <img src="{{asset('images/portrait17.jpg')}}" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title"><u><b>#6STORY</b></u></h5>
                        <p class="card-text">"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a vulputate arcu, lobortis elementum ipsum. Curabitur vestibulum turpis eu semper porttitor. Duis at turpis vitae augue condimentum hendrerit. Phasellus a arcu et magna pulvinar sagittis. Aenean volutpat nunc vel vulputate tincidunt. Ut interdum neque non ante mollis vulputate. Aliquam erat volutpat. Fusce vulputate, massa sit amet aliquam accumsan, neque nulla dictum odio, sed mollis diam felis sed orci. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Vivamus vel risus ligula. Aliquam tempus maximus dui id malesuada. In pellentesque rutrum tellus, accumsan euismod augue pulvinar quis. Proin sed egestas lorem.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-header" id="id_container_story">
            <h2><u>TELL YOUR STORY</u></h2>
        </div>
        <div class="bigframe">
            <div class="row">
                <div class="col-lg-2">
                </div>
                <div class="col-lg-8 frameform" style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),{{url('images/stories5.jpg')}};">
                    <form class="needs-validation" novalidate id="bootstrapSelectForm">
                        <div class="row firstrow">
                            <div class="col-lg-5">
                                <label for="title">Title</label>
                                <input type="text" class="form-control form-contact" placeholder="Title" minlength="2" id="title" required>
                                <div class="valid-feedback">
                                </div>
                                <div class="invalid-feedback">
                                    Please fill your title
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <label for="author">Author</label>
                                <input type="text" class="form-control form-contact" placeholder="Author" minlength="1" id="author" required>
                                <div class="valid-feedback">
                                </div>
                                <div class="invalid-feedback">
                                    Please fill your name
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <label for="category">Category</label>
                                <select class="custom-select" id="category" required aria-required="true">
                                    <option value="">--Choose--</option>
                                    <option value="1">Stalking</option>
                                    <option value="2">Eveteasing</option>
                                    <option value="3">Sexual Harassment</option>
                                    <option value="4">Domestic Violence</option>
                                    <option value="5">Dowry Harassment</option>
                                </select>
                                <div class="valid-feedback">
                                </div>
                                <div class="invalid-feedback">
                                    Please fill your description
                                </div>
                            </div>
                        </div>
                        <div class="row" style="margin-top: 2vh;">
                            <div class="col-lg-12">
                                <label for="description">Description</label>
                                <textarea class="form-control" id="description" rows="5" minlength="1" required placeholder="Tell your story"></textarea>
                                <div class="valid-feedback">
                                </div>
                                <div class="invalid-feedback">
                                    Please fill your description
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 buttonframe">
                                <button type="submit" class="btn btn-dark">SHARE</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function() {
            'use strict';
            window.addEventListener('load', function() {
                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                var forms = document.getElementsByClassName('needs-validation');
                // Loop over them and prevent submission
                var validation = Array.prototype.filter.call(forms, function(form) {
                    form.addEventListener('submit', function(event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();
    </script>
@endsection
