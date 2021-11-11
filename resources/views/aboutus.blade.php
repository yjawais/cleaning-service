@extends('layouts.user.layout')

@section('content')



<div class="wrapper">
    <div class="parallax filter-black">
        <div class="parallax-image">
            <img src="{{asset('newtemplate/assets/img/thumb.jpg')}}">
        </div>
        <div class="small-info">
            <h1>About Us</h1>
            <h3>Creative Tim stands for everything a designer looks in his work: clean and beautiful interfaces for great products.</h3>
        </div>
    </div>

    <div class="section">
           <div class="container">
               <h2 class="section-title">We care about our work</h2>
               <div class="row">
                   <div class="col-md-6">
                       <p>
                           Creative Tim stands for everything a designer looks in his work: clean, functions interfaces for great products. The number of friends with similar attitude can only increase over time, since the vision for a better web is a wish of many designers. </p>
                        </p>Be sure to enroll and browse around for anything that may bring extra value to your project and ask Tim wherever you see something missing. </p>

                   </div>
                     <div class="col-md-6">
                       <p>Tim symbolizes the creative spirit inside of each and everyone of us. A designer by trade, he enjoys making the World Wide Web a more beautiful place and helping others do the same.</p>
                       <p>

He promises to put all his time and effort into providing you with handcrafted content that you will fall in love with and that will have you come back for more every time you start a new project.</p>
                   </div>
               </div>
           </div>
    </div><!-- section -->

    <div class="section">
        <div class="container">
            <h2 class="section-title">Meet our Team <small> (example 1)</small></h2>
            <div class="team-presentation">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card card-user card-plain">
                            <div class="content">
                                <div class="author">
                                    <a href="#">
                                    <img class="avatar border-gray" src="{{asset('newtemplate/assets/img/default-avatar.png')}}" alt="..."/>
                                    <h4 class="title">Jay Z <br />
                                        <small>Producer</small>
                                    </h4>
                                    </a>
                                </div>
                                <p class="description text-center">
                                    <i class="fa fa-map-marker fa-fw text-muted"></i> Brooklyn, New York <br/>
                                    <i class="fa fa-building-o fa-fw text-muted"></i> Roc-A-Fella Records <br/>
                                    <i class="fa fa-envelope-o fa-fw text-muted"></i> RocAFella.com
                                </p>
                            </div>
                            <hr>
                            <div class="text-center">
                                <button href="#" class="btn btn-social btn-facebook btn-simple"><i class="fa fa-facebook-square"></i></button>
                                <button href="#" class="btn btn-social btn-twitter btn-simple"><i class="fa fa-twitter"></i></button>
                                <button href="#" class="btn btn-social btn-google btn-simple"><i class="fa fa-google-plus-square"></i></button>

                            </div>
                        </div> <!-- end card-->
                    </div>
                    <div class="col-md-4">
                        <div class="card card-user card-plain">
                            <div class="content">
                                <div class="author">
                                    <a href="#">
                                        <img class="avatar border-gray" src="{{asset('newtemplate/assets/img/default-avatar.png')}}" alt="..."/>
                                        <h4 class="title">Drake <br />
                                            <small>Artist</small>
                                        </h4>
                                    </a>
                                </div>
                                <p class="description text-center">
                                    <i class="fa fa-map-marker fa-fw text-muted"></i> Toronto, Ontario <br/>
                                    <i class="fa fa-building-o fa-fw text-muted"></i> OVO Sound <br/>
                                    <i class="fa fa-envelope-o fa-fw text-muted"></i> ovosound.com
                                </p>
                            </div>
                            <hr>
                            <div class="text-center">
                                <button href="#" class="btn btn-social btn-facebook btn-simple"><i class="fa fa-facebook-square"></i></button>
                                <button href="#" class="btn btn-social btn-twitter btn-simple"><i class="fa fa-twitter"></i></button>
                            </div>
                        </div> <!-- end card -->
                    </div>
                    <div class="col-md-4">
                        <div class="card card-user card-plain">
                            <!-- <div class="image"></div> -->
                            <div class="content">
                                <div class="author">
                                    <a href="#">
                                        <img class="avatar border-gray" src="{{asset('newtemplate/assets/img/default-avatar.png')}}" alt="..."/>
                                        <h4 class="title">Rick Ross <br />
                                            <small>Musician</small>
                                        </h4>
                                    </a>
                                </div>
                                <p class="description text-center">
                                    <i class="fa fa-map-marker fa-fw text-muted"></i> Miami, Florida,  <br/>
                                    <i class="fa fa-building-o fa-fw text-muted"></i> Maybach Music Group <br/>
                                    <i class="fa fa-envelope-o fa-fw text-muted"></i> godforgivesidont.com
                                </p>
                            </div>
                            <hr>
                            <div class="text-center">
                                <button href="#" class="btn btn-social btn-twitter btn-simple"><i class="fa fa-twitter"></i></button>
                                <button href="#" class="btn btn-social btn-github btn-simple"><i class="fa fa-github"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- end section meet our team -->

    <div class="section section-gray">
        <div class="container">
            <h2 class="section-title">Meet our Team <small> (example 2)</small></h2>
            <div class="team-presentation">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card card-user">
                            <div class="image">
                                <img src="{{asset('newtemplate/assets/img/thumb.jpg')}}">
                            </div>
                            <div class="content">
                                <div class="author">
                                    <a href="#">
                                    <img class="avatar" src="{{asset('newtemplate/assets/img/default-avatar.png')}}" alt="..."/>
                                    <h4 class="title">Jay Z <br />
                                        <small>Producer</small>
                                    </h4>
                                    </a>
                                </div>
                                <p class="description text-center">
                                    <i class="fa fa-map-marker fa-fw text-muted"></i> Brooklyn, New York <br/>
                                    <i class="fa fa-building-o fa-fw text-muted"></i> Roc-A-Fella Records <br/>
                                    <i class="fa fa-envelope-o fa-fw text-muted"></i> RocAFella.com
                                </p>
                            </div>
                            <hr>
                            <div class="text-center">
                                <button href="#" class="btn btn-social btn-facebook btn-simple"><i class="fa fa-facebook-square"></i></button>
                                <button href="#" class="btn btn-social btn-twitter btn-simple"><i class="fa fa-twitter"></i></button>
                                <button href="#" class="btn btn-social btn-google btn-simple"><i class="fa fa-google-plus-square"></i></button>

                            </div>
                        </div> <!-- end card-->
                    </div>
                    <div class="col-md-4">
                        <div class="card card-user">
                            <div class="image">
                                <img src="{{asset('newtemplate/assets/img/thumb.jpg')}}">
                            </div>
                            <div class="content">
                                <div class="author">
                                    <a href="#">
                                        <img class="avatar" src="{{asset('newtemplate/assets/img/default-avatar.png')}}" alt="..."/>
                                        <h4 class="title">Drake <br />
                                            <small>Artist</small>
                                        </h4>
                                    </a>
                                </div>
                                <p class="description text-center">
                                    <i class="fa fa-map-marker fa-fw text-muted"></i> Toronto, Ontario <br/>
                                    <i class="fa fa-building-o fa-fw text-muted"></i> OVO Sound <br/>
                                    <i class="fa fa-envelope-o fa-fw text-muted"></i> ovosound.com
                                </p>
                            </div>
                            <hr>
                            <div class="text-center">
                                <button href="#" class="btn btn-social btn-facebook btn-simple"><i class="fa fa-facebook-square"></i></button>
                                <button href="#" class="btn btn-social btn-twitter btn-simple"><i class="fa fa-twitter"></i></button>
                            </div>
                        </div> <!-- end card -->
                    </div>
                    <div class="col-md-4">
                        <div class="card card-user">
                            <div class="image">
                                <img src="{{asset('newtemplate/assets/img/thumb.jpg')}}">
                            </div>
                            <div class="content">
                                <div class="author">
                                    <a href="#">
                                        <img class="avatar" src="{{asset('newtemplate/assets/img/default-avatar.png')}}" alt="..."/>
                                        <h4 class="title">Rick Ross <br />
                                            <small>Musician</small>
                                        </h4>
                                    </a>
                                </div>
                                <p class="description text-center">
                                    <i class="fa fa-map-marker fa-fw text-muted"></i> Miami, Florida,  <br/>
                                    <i class="fa fa-building-o fa-fw text-muted"></i> Maybach Music Group <br/>
                                    <i class="fa fa-envelope-o fa-fw text-muted"></i> godforgivesidont.com
                                </p>
                            </div>
                            <hr>
                            <div class="text-center">
                                <button href="#" class="btn btn-social btn-twitter btn-simple"><i class="fa fa-twitter"></i></button>
                                <button href="#" class="btn btn-social btn-github btn-simple"><i class="fa fa-github"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- end section meet our team -->


    <div class="section">
        <div class="container">
            <h2 class="section-title">Working Flow</h2>
            <div class="clients-presentation">
                <div class="row">
                    <div class="col-md-3">
                       <div class="info">
                            <div class="icon">
                                <i class="pe-7s-note2"></i>
                            </div>
                            <div class="description">
                                <h3> 1. Research </h3>
                                <p class="text-muted">We've been working with Apple for a new Touch ID. </p>
                            </div>
                        </div>
                     </div>
                     <div class="col-md-3">
                       <div class="info">
                            <div class="icon">
                                <i class="pe-7s-scissors"></i>
                            </div>
                            <div class="description">
                                <h3> 2. Design </h3>
                                <p class="text-muted">There were many changes for the new design of Windows. </p>
                            </div>
                        </div>
                     </div>
                     <div class="col-md-3">
                       <div class="info">
                            <div class="icon">
                                <i class="pe-7s-tools"></i>
                            </div>
                            <div class="description">
                                <h3> 3. Develop </h3>
                                <p class="text-muted">Working with big data about business is never easy.</p>
                            </div>
                        </div>
                     </div>
                     <div class="col-md-3">
                        <div class="info">
                            <div class="icon">
                                <i class="pe-7s-paint"></i>
                            </div>
                            <div class="description">
                                <h3> 4. Polish </h3>
                                <p class="text-muted">We developed the Dropbox App for iOS devices. </p>
                            </div>
                        </div>
                     </div>
                </div>
            </div>
        </div>
    </div> <!-- end section meet our clients -->

     <div class="section">
        <div class="container">
            <h2 class="section-title">Our Office</h2>
            <div class="row">
                <div class="col-md-4">
                        <div class="card card-plain">
                        <div class="image">
                            <img src="{{asset('newtemplate/assets/img/thumb.jpg')}}" alt="..."/>
                            <div class="filter">
                                <button type="button" class="btn btn-neutral btn-simple">
                                    <i class="fa fa-image"></i> View Image
                                </button>
                            </div>
                        </div>
                    </div> <!-- end card -->
                </div>
                <div class="col-md-8">
                        <div class="card card-plain">
                        <div class="image">
                            <img src="{{asset('newtemplate/assets/img/thumb.jpg')}}" alt="..."/>
                            <div class="filter">
                                <button type="button" class="btn btn-neutral btn-simple">
                                    <i class="fa fa-image"></i> View Image
                                </button>
                            </div>
                        </div>
                    </div> <!-- end card -->
                </div>
                <div class="col-md-8">
                        <div class="card card-plain">
                        <div class="image">
                            <img src="{{asset('newtemplate/assets/img/thumb.jpg')}}" alt="..."/>
                            <div class="filter">
                                <button type="button" class="btn btn-neutral btn-simple">
                                    <i class="fa fa-image"></i> View Image
                                </button>
                            </div>
                        </div>
                    </div> <!-- end card -->
                </div>

                <div class="col-md-4">
                        <div class="card card-plain">
                        <div class="image">
                            <img src="{{asset('newtemplate/assets/img/thumb.jpg')}}" alt="..."/>
                            <div class="filter">
                                <button type="button" class="btn btn-neutral btn-simple">
                                    <i class="fa fa-image"></i> View Image
                                </button>
                            </div>
                        </div>
                    </div> <!-- end card -->
                </div>

                <div class="col-md-4">
                        <div class="card card-plain">
                        <div class="image">
                            <img src="{{asset('newtemplate/assets/img/thumb.jpg')}}" alt="..."/>
                            <div class="filter">
                                <button type="button" class="btn btn-neutral btn-simple">
                                    <i class="fa fa-image"></i> View Image
                                </button>
                            </div>
                        </div>
                    </div> <!-- end card -->
                </div>
                <div class="col-md-4">
                        <div class="card card-plain">
                        <div class="image">
                            <img src="{{asset('newtemplate/assets/img/thumb.jpg')}}" alt="..."/>
                            <div class="filter">
                                <button type="button" class="btn btn-neutral btn-simple">
                                    <i class="fa fa-image"></i> View Image
                                </button>
                            </div>
                        </div>
                    </div> <!-- end card -->
                </div>
                <div class="col-md-4">
                        <div class="card card-plain">
                        <div class="image">
                            <img src="{{asset('newtemplate/assets/img/thumb.jpg')}}" alt="..."/>
                            <div class="filter">
                                <button type="button" class="btn btn-neutral btn-simple">
                                    <i class="fa fa-image"></i> View Image
                                </button>
                            </div>
                        </div>
                    </div> <!-- end card -->
                </div>


            </div>
        </div>
    </div> <!-- end section meet our clients -->

     <div class="subscribe-line subscribe-line-default">
             <div class="container">
                <div class="row">
                     <div class="col-md-9">
                        <form class="">
                             <div class="form-group">
                                  <input type="text" value="" class="form-control" placeholder="Enter your email here...">
                             </div>
                         </form>
                     </div>
                     <div class="col-md-3">
                         <button type="button" class="btn btn-info btn-fill btn-block">Join our team!</button>
                     </div>
                </div>
             </div>
         </div>


</div> <!-- wrapper -->

<script type="text/javascript">
        var big_image;
        $().ready(function(){
            responsive = $(window).width();

            $(window).on('scroll', gsdk.checkScrollForTransparentNavbar);

            if (responsive >= 768){
                big_image = $('.parallax-image').find('img');

                $(window).on('scroll',function(){
                    parallax();
                });
            }

        });

       var parallax = function() {
            var current_scroll = $(this).scrollTop();

            oVal = ($(window).scrollTop() / 3);
            big_image.css('top',oVal);
        };

    </script>
@endsection