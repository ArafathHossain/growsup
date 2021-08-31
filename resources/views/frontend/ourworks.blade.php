@extends('frontend.main_master')
@section('head')
<title>GrowSup-Our Works</title>
<style>
    * {
        box-sizing: border-box;
    }
    img{
        
    }

    .demo {
        background-color: #fff;
        padding: 0px 0;
    }

    .container {
        max-width: 1366px;
        margin: 0 auto;
    }

    .custom-image-wrapper {
        width: 50%;
        position: relative;
        margin: auto
    }



    .custom-image-wrapper__main-image {
        position: relative;
    }

    .custom-image-wrapper__secondary-image {
        position: absolute;
        top: auto;
        left: auto;
        bottom: -5%;
        right: -5%;
        width: 45%;
    }

    .custom-image-wrapper__secondary-image::after {
        background-color: #363636;
    }

    .circle-image {
        border-radius: 50%;
        overflow: hidden;
        border: 15px solid purple;
    }

    .circle-image--small {
        border: 8px solid slateblue;
    }

    .circle-image::after {
        content: '';
        display: block;
        padding-bottom: 100%;
        height: 0;
    }

    .center {
        margin: auto;
        width: 100%;
        padding: 10px;
        top: 30%;
    }

    @media only screen and (max-width: 767px) {
        .center {
            margin: auto;
            width: 100%;
            padding: 10px;
            top: 10%;
        }
    }

</style>
@endsection
@section('content')
    <div class="services-section">
        <section class="section_all ">
            <div class="">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="main-banner-text title-hd svs-header wow mt-5 mb-5" data-wow-delay="500ms"
                            style="text-align: center;">
                            <h1>Our Works</h1>
                        </div>
                    </div>
                </div>

                <div class="row vertical_content_manage">
                    <div class="col-lg-6">
                        <section class="demo">
                            <div class="container">
                                <div class="custom-image-wrapper">
                                    <div class="custom-image-wrapper__main-image circle-image"></div>
                                    <div class="custom-image-wrapper__secondary-image circle-image circle-image--small">
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                    <div class="col-lg-6">
                        <div class="card center">
                            <div class="card-body">
                                <h5 class="card-title">Special title treatment</h5>
                                <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting
                                    industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                    when an unknown printer took a galley of type and scrambled it to make a type specimen
                                    book. It has survived not only five centuries, but also the leap into electronic
                                    typesetting, remaining essentially unchanged. It was popularised in the 1960s with the
                                    release of Letraset sheets containing Lorem Ipsum passages, and more recently with
                                    desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row vertical_content_manage">
                    <div class="col-lg-6">
                        <div class="card center">
                            <div class="card-body">
                                <h5 class="card-title">Special title treatment</h5>
                                <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting
                                    industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                    when an unknown printer took a galley of type and scrambled it to make a type specimen
                                    book. It has survived not only five centuries, but also the leap into electronic
                                    typesetting, remaining essentially unchanged. It was popularised in the 1960s with the
                                    release of Letraset sheets containing Lorem Ipsum passages, and more recently with
                                    desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <section class="demo">
                            <div class="container">
                                <div class="custom-image-wrapper">
                                    <div class="custom-image-wrapper__main-image circle-image"></div>
                                    <div class="custom-image-wrapper__secondary-image circle-image circle-image--small">
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>

                </div>
                <div class="row vertical_content_manage">
                    <div class="col-lg-6">
                        <section class="demo">
                            <div class="container">
                                <div class="custom-image-wrapper">
                                    <div class="custom-image-wrapper__main-image circle-image"></div>
                                    <div class="custom-image-wrapper__secondary-image circle-image circle-image--small">
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                    <div class="col-lg-6">
                        <div class="card center">
                            <div class="card-body">
                                <h5 class="card-title">Special title treatment</h5>
                                <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting
                                    industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                    when an unknown printer took a galley of type and scrambled it to make a type specimen
                                    book. It has survived not only five centuries, but also the leap into electronic
                                    typesetting, remaining essentially unchanged. It was popularised in the 1960s with the
                                    release of Letraset sheets containing Lorem Ipsum passages, and more recently with
                                    desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row vertical_content_manage">
                    <div class="col-lg-6">
                        <div class="card center">
                            <div class="card-body">
                                <h5 class="card-title">Special title treatment</h5>
                                <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting
                                    industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                    when an unknown printer took a galley of type and scrambled it to make a type specimen
                                    book. It has survived not only five centuries, but also the leap into electronic
                                    typesetting, remaining essentially unchanged. It was popularised in the 1960s with the
                                    release of Letraset sheets containing Lorem Ipsum passages, and more recently with
                                    desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <section class="demo">
                            <div class="container">
                                <div class="custom-image-wrapper">
                                    <div class="custom-image-wrapper__main-image circle-image"></div>
                                    <div class="custom-image-wrapper__secondary-image circle-image circle-image--small">
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>

                </div>
        </section>
    </div>

@endsection
