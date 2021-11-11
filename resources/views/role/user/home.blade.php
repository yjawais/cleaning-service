@extends('layouts.user.layout')

@section('content')
<div class="parallax">
    <div class="parallax-image">
        <img src="{{asset('newtemplate/assets/img/header.jpg')}}">
    </div>
    <div class="motto">
        <div>Get</div>
        <div class="border no-right-border">Sh</div><div class="border">it</div>
        <div>Done</div>  
        <label class="pro square">PRO</label>
    </div>
    <h3 class="text-white">Developer Tutorial</h3>
</div>

<div class="main">
    <div class="section">
        <div class="container">
<!--         what is row -->
            <div class="row tim-row">
                <h2 class="text-center">Short Description and Usage</h2>
                <legend></legend>
                <div class="col-md-8 col-md-offset-2">
                    <p>
                    'Get Shit Done' kit is a beautiful resource built for Bootstrap. We have redesigned all its components to make it look flat, minimalist and easy to use. We are proud of this new Bootstrap skin and the possibilities for customisation.
                    </p>
                    <p>
                        Using it is very simple and it will enable you to refresh you classic looking application. To get the desired effect you will also need to integrate JS plugins that take a little bit more effort. It the end the result will be worth it.
                    </p>
                </div>
                
            </div>
<!--         end row -->
        
<!--         usage row -->
            <div class="row tim-row">
                <h2 class="text-center">Getting Started</h2>
                <legend></legend>
                <div class="col-md-8 col-md-offset-2"> 
                <p>
                The 'Get Shit Done' kit is built on top of Bootstrap 3, so you can safely use it on your existing or new Bootstrap project. No line of code from Bootstrap 3 was changed, so you don't have to worry about undesired effects in your work.
                </p>
                <p>
                    We provide all the necessary CSS resources. To get going, just include 'css/get-shit-done.css' in your HTML template. Your project will get the new look.
                </p>
                <p>
                    The easiest way to start is to use our start-up template where all the files are already included and ready to use.
                </p>
                </div>
            </div>
<!--         end row -->  
        
<!--         file structure row -->
            <div class="row tim-row">
                <h2 class="text-center">File Structure</h2>
                <legend></legend>
                <div class="col-md-8 col-md-offset-2">
                    <p>
                        Once you have downloaded the archive and opened it, you will find the following structure:
                        
                    </p>
                    <p>
                        Let's take it one by one:
                    </p>
                    <p>
                    x_get_shit_done_pro<br>
                    --assets<br>
                    ---css<br>
                    -----demo.css<br>
                    -----gsdk.css<br>
                    -----pe-icon-7-stroke.css<br>
                    ---img<br>
                    ---fonts<br>
                    ---js<br>
                    -----bootstrap-datepicker.js<br>
                    -----bootstrap-select.js<br>
                    -----chartist.min.js<br>
                    -----demo.js<br>
                    -----get-shit-done.js<br>
                    -----gsdk-bootstrapswitch.js<br>
                    -----gsdk-checkbox.js<br>
                    -----gsdk-morphing.js<br>
                    -----gsdk-radio.js<br>
                    -----jquery-1.10.2.js<br>
                    -----jquery-ui-1.10.4.custom.min.js<br>
                    -----jquery.flexisel.js<br>
                    -----jquery.tagsinput.js<br>
                    -----retina.min.js<br>
                    ----sass<br>
                    ----less<br>
                    ----video<br>
                    --bootstrap3<br>
                    --components.html<br>
                    --index.html<br>
                    --navbar-transparent.html<br>
                    --notification.html<br>
                    --presentation-page.html<br>
                    --template.html<br>
                    --tutorial-html.html<br>
                   </p>
                </div>
            </div>
<!--         end row -->
            
<!--         restyled components row -->
            <div class="row tim-row">
                <h2 class="text-center">Restyled Components</h2>
                <legend></legend>
                <div class="col-md-8 col-md-offset-2">
                    <p>
                    Here is the list of Bootstrap 3 components that we restyled in 'Get Shit Done' kit:
                        <ul>
                            <li> Buttons </li>
                            <li> Inputs</li>
                            <li> Select</li>
                            <li> Textarea</li>
                            <li> Menu </li>
                            <li> Dropdown</li>
                            <li> Progress Bars</li>
                            <li> Navigation Menu</li>
                            <li> Pagination</li>
                            <li> Labels</li>
                            <li> Badges</li>
                            <li> Notifications</li>
                            <li> Typography</li>
                            <li> Images</li>
                            <li> Tables</li>
                            <li> Tooltips</li>
                            <li> Popovers</li>
                            <li> Modal </li>
                            <li> Collapse</li>
                            <li> Carousel</li>
                        </ul>
                    </p>
                </div>
            </div>
<!--         end row -->
            
            <div class="row tim-row">
                <h2 class="text-center">New Components</h2>
                <legend></legend>
                <div class="col-md-8 col-md-offset-2">
                    <p>
                    Besides giving the existing Bootstrap elements a new look, we added new ones, so that the interface and consistent and homogenous.
                    </p>
                    <p>
                    Going through them, we added:
                    <ul>
                        <li> Morphing Buttons </li>
                        <li> Social Buttons </li>
                        <li> Tags</li>
                        <li> Checkboxes</li>
                        <li> Radio Buttons</li>
                        <li> Sliders</li>
                        <li> Switches</li>
                        <li> Search Forms</li>
                        <li> Subscription Areas</li>
                        <li> Sharing Areas</li>
                        <li> Footers</li>
                        <li> Description Areas</li>
                        <li> Info Areas</li>
                        <li> Comments Areas </li>
                        <li> Cards</li>
                        <li> Video Player</li>
                        <li> Maps</li>
                        <li> Datepicker</li>
                        <li> Charts</li>
                    </ul>
                    </p>
                    <p>
                        For more details regarding the components, go to our <a href="components.html">components page</a>.
                    </p>
                </div>
            </div>
        <!-- end row -->
        </div>
<!-- end container -->
    </div>
</div>

@endsection