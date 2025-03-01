@extends('layouts.app')

@section('content')
    @include('components.profile-sidebar')

    <div class="db-content">
        <div class="container mb-4">
            <div class="row mb-5">
                <div class="col-12">
                    <div class="d-flex flex-row align-items-center justify-content-between">
                        <h1 class="h2 mb-0">Explore All Courses and Paths</h1>

                        <a href="#!" class="btn btn-primary d-flex flex-row gap-2">
                <span>
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-stars"
                       viewBox="0 0 16 16">
                    <path
                        d="M7.657 6.247c.11-.33.576-.33.686 0l.645 1.937a2.89 2.89 0 0 0 1.829 1.828l1.936.645c.33.11.33.576 0 .686l-1.937.645a2.89 2.89 0 0 0-1.828 1.829l-.645 1.936a.361.361 0 0 1-.686 0l-.645-1.937a2.89 2.89 0 0 0-1.828-1.828l-1.937-.645a.361.361 0 0 1 0-.686l1.937-.645a2.89 2.89 0 0 0 1.828-1.828zM3.794 1.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387A1.73 1.73 0 0 0 4.593 5.69l-.387 1.162a.217.217 0 0 1-.412 0L3.407 5.69A1.73 1.73 0 0 0 2.31 4.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387A1.73 1.73 0 0 0 3.407 2.31zM10.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.16 1.16 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.16 1.16 0 0 0-.732-.732L9.1 2.137a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732z"></path>
                  </svg>
                </span>
                            <span>Upgrade</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="mb-3">
                        <h2 class="h3 mb-0">Popular courses</h2>
                    </div>
                    <div class="position-relative mb-3">
                        <ul class="controls" id="sliderFirstControls" aria-label="Carousel Navigation" tabindex="0">
                            <li class="prev" aria-controls="tns1" tabindex="-1" data-controls="prev">
                                <i class="fe fe-chevron-left"></i>
                            </li>
                            <li class="next" aria-controls="tns1" tabindex="-1" data-controls="next">
                                <i class="fe fe-chevron-right"></i>
                            </li>
                        </ul>
                        <div class="tns-outer" id="tns1-ow">
                            <div class="tns-liveregion tns-visually-hidden" aria-live="polite" aria-atomic="true">slide
                                <span class="current">16 to 19</span> of 8
                            </div>
                            <div id="tns1-mw" class="tns-ovh">
                                <div class="tns-inner" id="tns1-iw">
                                    <div
                                        class="sliderFirst  tns-slider tns-carousel tns-subpixel tns-calc tns-horizontal"
                                        id="tns1" style="transform: translate3d(-75%, 0px, 0px);">
                                        <div class="item tns-item tns-slide-cloned" aria-hidden="true" tabindex="-1">
                                            <div class="card border">
                                                <a href="#!">
                                                    <img src="../assets/images/course/course-node.jpg" alt="figma"
                                                         class="card-img-top img-fluid w-100">
                                                </a>
                                                <div class="card-body d-flex flex-column gap-2">
                                                    <h3 class="h4 mb-0"><a href="#!" class="text-inherit">The Complete
                                                            Node.js Developer Course</a></h3>
                                                    <ul class="mb-0 list-inline">
                                                        <li class="list-inline-item lh-1">
                          <span class="align-bottom">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                 class="bi bi-clock text-gray-400" viewBox="0 0 16 16">
                              <path
                                  d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"></path>
                              <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"></path>
                            </svg>
                          </span>
                                                            <span class="text-gray-500">2h 46m</span>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <svg class="me-1 mt-n1" width="16" height="16"
                                                                 viewBox="0 0 16 16" fill="none"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                <rect x="3" y="8" width="2" height="6" rx="1"
                                                                      fill="#754FFE"></rect>
                                                                <rect x="7" y="5" width="2" height="9" rx="1"
                                                                      fill="#754FFE"></rect>
                                                                <rect x="11" y="2" width="2" height="12" rx="1"
                                                                      fill="#754FFE"></rect>
                                                            </svg>
                                                            Advance
                                                        </li>
                                                    </ul>
                                                    <div class="lh-1">
                        <span class="align-text-top">
                          <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor"
                               class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor"
                               class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor"
                               class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor"
                               class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor"
                               class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                        </span>
                                                        <span class="text-warning">4.5</span>
                                                        <span class="fs-6">(7,000)</span>
                                                    </div>
                                                </div>
                                                <!-- Card Footer -->
                                                <div class="card-footer">
                                                    <div class="row align-items-center g-0">
                                                        <div class="col-auto">
                                                            <img src="../assets/images/avatar/avatar-5.jpg"
                                                                 class="rounded-circle avatar-xs" alt="avatar">
                                                        </div>
                                                        <div class="col ms-2">
                                                            <span>Eleanor Pena</span>
                                                        </div>
                                                        <div class="col-auto">
                                                            <a href="#" class="text-reset bookmark">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                     height="16" fill="currentColor"
                                                                     class="bi bi-bookmarks text-gray-500"
                                                                     viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M2 4a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v11.5a.5.5 0 0 1-.777.416L7 13.101l-4.223 2.815A.5.5 0 0 1 2 15.5zm2-1a1 1 0 0 0-1 1v10.566l3.723-2.482a.5.5 0 0 1 .554 0L11 14.566V4a1 1 0 0 0-1-1z"></path>
                                                                    <path
                                                                        d="M4.268 1H12a1 1 0 0 1 1 1v11.768l.223.148A.5.5 0 0 0 14 13.5V2a2 2 0 0 0-2-2H6a2 2 0 0 0-1.732 1"></path>
                                                                </svg>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item tns-item tns-slide-cloned" aria-hidden="true" tabindex="-1">
                                            <div class="card border">
                                                <a href="#!">
                                                    <img src="../assets/images/course/course-wordpress.jpg" alt="figma"
                                                         class="card-img-top img-fluid w-100">
                                                </a>
                                                <div class="card-body d-flex flex-column gap-2">
                                                    <h3 class="h4 mb-0"><a href="#!" class="text-inherit">The Complete
                                                            WordPress Website Course</a></h3>
                                                    <ul class="mb-0 list-inline">
                                                        <li class="list-inline-item lh-1">
                          <span class="align-bottom">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                 class="bi bi-clock text-gray-400" viewBox="0 0 16 16">
                              <path
                                  d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"></path>
                              <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"></path>
                            </svg>
                          </span>
                                                            <span class="text-gray-500">2h 40m</span>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <svg class="me-1 mt-n1" width="16" height="16"
                                                                 viewBox="0 0 16 16" fill="none"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                <rect x="3" y="8" width="2" height="6" rx="1"
                                                                      fill="#754FFE"></rect>
                                                                <rect x="7" y="5" width="2" height="9" rx="1"
                                                                      fill="#DBD8E9"></rect>
                                                                <rect x="11" y="2" width="2" height="12" rx="1"
                                                                      fill="#DBD8E9"></rect>
                                                            </svg>
                                                            Beginner
                                                        </li>
                                                    </ul>
                                                    <div class="lh-1">
                        <span class="align-text-top">
                          <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor"
                               class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor"
                               class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor"
                               class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor"
                               class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor"
                               class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                        </span>
                                                        <span class="text-warning">4.1</span>
                                                        <span class="fs-6">(4,000)</span>
                                                    </div>
                                                </div>
                                                <!-- Card Footer -->
                                                <div class="card-footer">
                                                    <div class="row align-items-center g-0">
                                                        <div class="col-auto">
                                                            <img src="../assets/images/avatar/avatar-6.jpg"
                                                                 class="rounded-circle avatar-xs" alt="avatar">
                                                        </div>
                                                        <div class="col ms-2">
                                                            <span>Jenny Wilson</span>
                                                        </div>
                                                        <div class="col-auto">
                                                            <a href="#" class="text-reset bookmark">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                     height="16" fill="currentColor"
                                                                     class="bi bi-bookmarks text-gray-500"
                                                                     viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M2 4a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v11.5a.5.5 0 0 1-.777.416L7 13.101l-4.223 2.815A.5.5 0 0 1 2 15.5zm2-1a1 1 0 0 0-1 1v10.566l3.723-2.482a.5.5 0 0 1 .554 0L11 14.566V4a1 1 0 0 0-1-1z"></path>
                                                                    <path
                                                                        d="M4.268 1H12a1 1 0 0 1 1 1v11.768l.223.148A.5.5 0 0 0 14 13.5V2a2 2 0 0 0-2-2H6a2 2 0 0 0-1.732 1"></path>
                                                                </svg>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item tns-item tns-slide-cloned" aria-hidden="true" tabindex="-1">
                                            <div class="card border">
                                                <a href="#!">
                                                    <img src="../assets/images/course/course-gatsby.jpg" alt="figma"
                                                         class="card-img-top img-fluid w-100">
                                                </a>
                                                <div class="card-body d-flex flex-column gap-2">
                                                    <h3 class="h4 mb-0"><a href="#!" class="text-inherit">Get to Know
                                                            Gatsby Building Blocks - GatsbyJS</a></h3>
                                                    <ul class="mb-0 list-inline">
                                                        <li class="list-inline-item lh-1">
                          <span class="align-bottom">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                 class="bi bi-clock text-gray-400" viewBox="0 0 16 16">
                              <path
                                  d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"></path>
                              <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"></path>
                            </svg>
                          </span>
                                                            <span class="text-gray-500">3h 56m</span>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <svg class="me-1 mt-n1" width="16" height="16"
                                                                 viewBox="0 0 16 16" fill="none"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                <rect x="3" y="8" width="2" height="6" rx="1"
                                                                      fill="#754FFE"></rect>
                                                                <rect x="7" y="5" width="2" height="9" rx="1"
                                                                      fill="#DBD8E9"></rect>
                                                                <rect x="11" y="2" width="2" height="12" rx="1"
                                                                      fill="#DBD8E9"></rect>
                                                            </svg>
                                                            <span class="text-gray-500">Beginner</span>
                                                        </li>
                                                    </ul>
                                                    <div class="lh-1">
                        <span class="align-text-top">
                          <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor"
                               class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor"
                               class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor"
                               class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor"
                               class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor"
                               class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                        </span>
                                                        <span class="text-warning">4.5</span>
                                                        <span class="fs-6">(1,345)</span>
                                                    </div>
                                                </div>
                                                <!-- Card Footer -->
                                                <div class="card-footer">
                                                    <div class="row align-items-center g-0">
                                                        <div class="col-auto">
                                                            <img src="../assets/images/avatar/avatar-3.jpg"
                                                                 class="rounded-circle avatar-xs" alt="avatar">
                                                        </div>
                                                        <div class="col ms-2">
                                                            <span>Bessie Cooper</span>
                                                        </div>
                                                        <div class="col-auto">
                                                            <a href="#" class="text-reset bookmark">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                     height="16" fill="currentColor"
                                                                     class="bi bi-bookmarks text-gray-500"
                                                                     viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M2 4a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v11.5a.5.5 0 0 1-.777.416L7 13.101l-4.223 2.815A.5.5 0 0 1 2 15.5zm2-1a1 1 0 0 0-1 1v10.566l3.723-2.482a.5.5 0 0 1 .554 0L11 14.566V4a1 1 0 0 0-1-1z"></path>
                                                                    <path
                                                                        d="M4.268 1H12a1 1 0 0 1 1 1v11.768l.223.148A.5.5 0 0 0 14 13.5V2a2 2 0 0 0-2-2H6a2 2 0 0 0-1.732 1"></path>
                                                                </svg>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item tns-item tns-slide-cloned" aria-hidden="true" tabindex="-1">
                                            <div class="card border">
                                                <a href="#!">
                                                    <img src="../assets/images/course/course-graphql.jpg" alt="figma"
                                                         class="card-img-top img-fluid w-100">
                                                </a>
                                                <div class="card-body d-flex flex-column gap-2">
                                                    <h3 class="h4 mb-0"><a href="#!" class="text-inherit">Getting
                                                            Started Practical Learn With GraphQL.js</a></h3>
                                                    <ul class="mb-0 list-inline">
                                                        <li class="list-inline-item lh-1">
                          <span class="align-bottom">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                 class="bi bi-clock text-gray-400" viewBox="0 0 16 16">
                              <path
                                  d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"></path>
                              <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"></path>
                            </svg>
                          </span>
                                                            <span class="text-gray-500">2h 30m</span>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <svg class="me-1 mt-n1" width="16" height="16"
                                                                 viewBox="0 0 16 16" fill="none"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                <rect x="3" y="8" width="2" height="6" rx="1"
                                                                      fill="#754FFE"></rect>
                                                                <rect x="7" y="5" width="2" height="9" rx="1"
                                                                      fill="#754FFE"></rect>
                                                                <rect x="11" y="2" width="2" height="12" rx="1"
                                                                      fill="#DBD8E9"></rect>
                                                            </svg>
                                                            Intermediate
                                                        </li>
                                                    </ul>
                                                    <div class="lh-1">
                        <span class="align-text-top">
                          <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor"
                               class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor"
                               class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor"
                               class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor"
                               class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor"
                               class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                        </span>
                                                        <span class="text-warning">4.5</span>
                                                        <span class="fs-6">(3,245)</span>
                                                    </div>
                                                </div>
                                                <!-- Card Footer -->
                                                <div class="card-footer">
                                                    <div class="row align-items-center g-0">
                                                        <div class="col-auto">
                                                            <img src="../assets/images/avatar/avatar-4.jpg"
                                                                 class="rounded-circle avatar-xs" alt="avatar">
                                                        </div>
                                                        <div class="col ms-2">
                                                            <span>Brooklyn Simmons</span>
                                                        </div>
                                                        <div class="col-auto">
                                                            <a href="#" class="text-reset bookmark">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                     height="16" fill="currentColor"
                                                                     class="bi bi-bookmarks text-gray-500"
                                                                     viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M2 4a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v11.5a.5.5 0 0 1-.777.416L7 13.101l-4.223 2.815A.5.5 0 0 1 2 15.5zm2-1a1 1 0 0 0-1 1v10.566l3.723-2.482a.5.5 0 0 1 .554 0L11 14.566V4a1 1 0 0 0-1-1z"></path>
                                                                    <path
                                                                        d="M4.268 1H12a1 1 0 0 1 1 1v11.768l.223.148A.5.5 0 0 0 14 13.5V2a2 2 0 0 0-2-2H6a2 2 0 0 0-1.732 1"></path>
                                                                </svg>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item tns-item tns-slide-cloned" aria-hidden="true" tabindex="-1">
                                            <div class="card border">
                                                <a href="#!">
                                                    <img src="../assets/images/course/course-node.jpg" alt="figma"
                                                         class="card-img-top img-fluid w-100">
                                                </a>
                                                <div class="card-body d-flex flex-column gap-2">
                                                    <h3 class="h4 mb-0"><a href="#!" class="text-inherit">The Complete
                                                            Node.js Developer Course</a></h3>
                                                    <ul class="mb-0 list-inline">
                                                        <li class="list-inline-item lh-1">
                          <span class="align-bottom">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                 class="bi bi-clock text-gray-400" viewBox="0 0 16 16">
                              <path
                                  d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"></path>
                              <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"></path>
                            </svg>
                          </span>
                                                            <span class="text-gray-500">2h 46m</span>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <svg class="me-1 mt-n1" width="16" height="16"
                                                                 viewBox="0 0 16 16" fill="none"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                <rect x="3" y="8" width="2" height="6" rx="1"
                                                                      fill="#754FFE"></rect>
                                                                <rect x="7" y="5" width="2" height="9" rx="1"
                                                                      fill="#754FFE"></rect>
                                                                <rect x="11" y="2" width="2" height="12" rx="1"
                                                                      fill="#754FFE"></rect>
                                                            </svg>
                                                            Advance
                                                        </li>
                                                    </ul>
                                                    <div class="lh-1">
                        <span class="align-text-top">
                          <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor"
                               class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor"
                               class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor"
                               class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor"
                               class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor"
                               class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                        </span>
                                                        <span class="text-warning">4.5</span>
                                                        <span class="fs-6">(7,000)</span>
                                                    </div>
                                                </div>
                                                <!-- Card Footer -->
                                                <div class="card-footer">
                                                    <div class="row align-items-center g-0">
                                                        <div class="col-auto">
                                                            <img src="../assets/images/avatar/avatar-5.jpg"
                                                                 class="rounded-circle avatar-xs" alt="avatar">
                                                        </div>
                                                        <div class="col ms-2">
                                                            <span>Eleanor Pena</span>
                                                        </div>
                                                        <div class="col-auto">
                                                            <a href="#" class="text-reset bookmark">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                     height="16" fill="currentColor"
                                                                     class="bi bi-bookmarks text-gray-500"
                                                                     viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M2 4a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v11.5a.5.5 0 0 1-.777.416L7 13.101l-4.223 2.815A.5.5 0 0 1 2 15.5zm2-1a1 1 0 0 0-1 1v10.566l3.723-2.482a.5.5 0 0 1 .554 0L11 14.566V4a1 1 0 0 0-1-1z"></path>
                                                                    <path
                                                                        d="M4.268 1H12a1 1 0 0 1 1 1v11.768l.223.148A.5.5 0 0 0 14 13.5V2a2 2 0 0 0-2-2H6a2 2 0 0 0-1.732 1"></path>
                                                                </svg>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item tns-item tns-slide-cloned" aria-hidden="true" tabindex="-1">
                                            <div class="card border">
                                                <a href="#!">
                                                    <img src="../assets/images/course/course-wordpress.jpg" alt="figma"
                                                         class="card-img-top img-fluid w-100">
                                                </a>
                                                <div class="card-body d-flex flex-column gap-2">
                                                    <h3 class="h4 mb-0"><a href="#!" class="text-inherit">The Complete
                                                            WordPress Website Course</a></h3>
                                                    <ul class="mb-0 list-inline">
                                                        <li class="list-inline-item lh-1">
                          <span class="align-bottom">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                 class="bi bi-clock text-gray-400" viewBox="0 0 16 16">
                              <path
                                  d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"></path>
                              <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"></path>
                            </svg>
                          </span>
                                                            <span class="text-gray-500">2h 40m</span>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <svg class="me-1 mt-n1" width="16" height="16"
                                                                 viewBox="0 0 16 16" fill="none"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                <rect x="3" y="8" width="2" height="6" rx="1"
                                                                      fill="#754FFE"></rect>
                                                                <rect x="7" y="5" width="2" height="9" rx="1"
                                                                      fill="#DBD8E9"></rect>
                                                                <rect x="11" y="2" width="2" height="12" rx="1"
                                                                      fill="#DBD8E9"></rect>
                                                            </svg>
                                                            Beginner
                                                        </li>
                                                    </ul>
                                                    <div class="lh-1">
                        <span class="align-text-top">
                          <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor"
                               class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor"
                               class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor"
                               class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor"
                               class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor"
                               class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                        </span>
                                                        <span class="text-warning">4.1</span>
                                                        <span class="fs-6">(4,000)</span>
                                                    </div>
                                                </div>
                                                <!-- Card Footer -->
                                                <div class="card-footer">
                                                    <div class="row align-items-center g-0">
                                                        <div class="col-auto">
                                                            <img src="../assets/images/avatar/avatar-6.jpg"
                                                                 class="rounded-circle avatar-xs" alt="avatar">
                                                        </div>
                                                        <div class="col ms-2">
                                                            <span>Jenny Wilson</span>
                                                        </div>
                                                        <div class="col-auto">
                                                            <a href="#" class="text-reset bookmark">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                     height="16" fill="currentColor"
                                                                     class="bi bi-bookmarks text-gray-500"
                                                                     viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M2 4a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v11.5a.5.5 0 0 1-.777.416L7 13.101l-4.223 2.815A.5.5 0 0 1 2 15.5zm2-1a1 1 0 0 0-1 1v10.566l3.723-2.482a.5.5 0 0 1 .554 0L11 14.566V4a1 1 0 0 0-1-1z"></path>
                                                                    <path
                                                                        d="M4.268 1H12a1 1 0 0 1 1 1v11.768l.223.148A.5.5 0 0 0 14 13.5V2a2 2 0 0 0-2-2H6a2 2 0 0 0-1.732 1"></path>
                                                                </svg>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item tns-item" id="tns1-item0" aria-hidden="true" tabindex="-1">
                                            <div class="card border">
                                                <a href="#!">
                                                    <img src="../assets/images/course/course-gatsby.jpg" alt="figma"
                                                         class="card-img-top img-fluid w-100">
                                                </a>
                                                <div class="card-body d-flex flex-column gap-2">
                                                    <h3 class="h4 mb-0"><a href="#!" class="text-inherit">Get to Know
                                                            Gatsby Building Blocks - GatsbyJS</a></h3>
                                                    <ul class="mb-0 list-inline">
                                                        <li class="list-inline-item lh-1">
                          <span class="align-bottom">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                 class="bi bi-clock text-gray-400" viewBox="0 0 16 16">
                              <path
                                  d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"></path>
                              <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"></path>
                            </svg>
                          </span>
                                                            <span class="text-gray-500">3h 56m</span>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <svg class="me-1 mt-n1" width="16" height="16"
                                                                 viewBox="0 0 16 16" fill="none"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                <rect x="3" y="8" width="2" height="6" rx="1"
                                                                      fill="#754FFE"></rect>
                                                                <rect x="7" y="5" width="2" height="9" rx="1"
                                                                      fill="#DBD8E9"></rect>
                                                                <rect x="11" y="2" width="2" height="12" rx="1"
                                                                      fill="#DBD8E9"></rect>
                                                            </svg>
                                                            <span class="text-gray-500">Beginner</span>
                                                        </li>
                                                    </ul>
                                                    <div class="lh-1">
                        <span class="align-text-top">
                          <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor"
                               class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor"
                               class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor"
                               class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor"
                               class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor"
                               class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                        </span>
                                                        <span class="text-warning">4.5</span>
                                                        <span class="fs-6">(1,345)</span>
                                                    </div>
                                                </div>
                                                <!-- Card Footer -->
                                                <div class="card-footer">
                                                    <div class="row align-items-center g-0">
                                                        <div class="col-auto">
                                                            <img src="../assets/images/avatar/avatar-3.jpg"
                                                                 class="rounded-circle avatar-xs" alt="avatar">
                                                        </div>
                                                        <div class="col ms-2">
                                                            <span>Bessie Cooper</span>
                                                        </div>
                                                        <div class="col-auto">
                                                            <a href="#" class="text-reset bookmark">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                     height="16" fill="currentColor"
                                                                     class="bi bi-bookmarks text-gray-500"
                                                                     viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M2 4a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v11.5a.5.5 0 0 1-.777.416L7 13.101l-4.223 2.815A.5.5 0 0 1 2 15.5zm2-1a1 1 0 0 0-1 1v10.566l3.723-2.482a.5.5 0 0 1 .554 0L11 14.566V4a1 1 0 0 0-1-1z"></path>
                                                                    <path
                                                                        d="M4.268 1H12a1 1 0 0 1 1 1v11.768l.223.148A.5.5 0 0 0 14 13.5V2a2 2 0 0 0-2-2H6a2 2 0 0 0-1.732 1"></path>
                                                                </svg>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item tns-item" id="tns1-item1" aria-hidden="true" tabindex="-1">
                                            <div class="card border">
                                                <a href="#!">
                                                    <img src="../assets/images/course/course-graphql.jpg" alt="figma"
                                                         class="card-img-top img-fluid w-100">
                                                </a>
                                                <div class="card-body d-flex flex-column gap-2">
                                                    <h3 class="h4 mb-0"><a href="#!" class="text-inherit">Getting
                                                            Started Practical Learn With GraphQL.js</a></h3>
                                                    <ul class="mb-0 list-inline">
                                                        <li class="list-inline-item lh-1">
                          <span class="align-bottom">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                 class="bi bi-clock text-gray-400" viewBox="0 0 16 16">
                              <path
                                  d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"></path>
                              <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"></path>
                            </svg>
                          </span>
                                                            <span class="text-gray-500">2h 30m</span>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <svg class="me-1 mt-n1" width="16" height="16"
                                                                 viewBox="0 0 16 16" fill="none"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                <rect x="3" y="8" width="2" height="6" rx="1"
                                                                      fill="#754FFE"></rect>
                                                                <rect x="7" y="5" width="2" height="9" rx="1"
                                                                      fill="#754FFE"></rect>
                                                                <rect x="11" y="2" width="2" height="12" rx="1"
                                                                      fill="#DBD8E9"></rect>
                                                            </svg>
                                                            Intermediate
                                                        </li>
                                                    </ul>
                                                    <div class="lh-1">
                        <span class="align-text-top">
                          <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor"
                               class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor"
                               class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor"
                               class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor"
                               class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor"
                               class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                        </span>
                                                        <span class="text-warning">4.5</span>
                                                        <span class="fs-6">(3,245)</span>
                                                    </div>
                                                </div>
                                                <!-- Card Footer -->
                                                <div class="card-footer">
                                                    <div class="row align-items-center g-0">
                                                        <div class="col-auto">
                                                            <img src="../assets/images/avatar/avatar-4.jpg"
                                                                 class="rounded-circle avatar-xs" alt="avatar">
                                                        </div>
                                                        <div class="col ms-2">
                                                            <span>Brooklyn Simmons</span>
                                                        </div>
                                                        <div class="col-auto">
                                                            <a href="#" class="text-reset bookmark">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                     height="16" fill="currentColor"
                                                                     class="bi bi-bookmarks text-gray-500"
                                                                     viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M2 4a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v11.5a.5.5 0 0 1-.777.416L7 13.101l-4.223 2.815A.5.5 0 0 1 2 15.5zm2-1a1 1 0 0 0-1 1v10.566l3.723-2.482a.5.5 0 0 1 .554 0L11 14.566V4a1 1 0 0 0-1-1z"></path>
                                                                    <path
                                                                        d="M4.268 1H12a1 1 0 0 1 1 1v11.768l.223.148A.5.5 0 0 0 14 13.5V2a2 2 0 0 0-2-2H6a2 2 0 0 0-1.732 1"></path>
                                                                </svg>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item tns-item" id="tns1-item2" aria-hidden="true" tabindex="-1">
                                            <div class="card border">
                                                <a href="#!">
                                                    <img src="../assets/images/course/course-node.jpg" alt="figma"
                                                         class="card-img-top img-fluid w-100">
                                                </a>
                                                <div class="card-body d-flex flex-column gap-2">
                                                    <h3 class="h4 mb-0"><a href="#!" class="text-inherit">The Complete
                                                            Node.js Developer Course</a></h3>
                                                    <ul class="mb-0 list-inline">
                                                        <li class="list-inline-item lh-1">
                          <span class="align-bottom">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                 class="bi bi-clock text-gray-400" viewBox="0 0 16 16">
                              <path
                                  d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"></path>
                              <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"></path>
                            </svg>
                          </span>
                                                            <span class="text-gray-500">2h 46m</span>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <svg class="me-1 mt-n1" width="16" height="16"
                                                                 viewBox="0 0 16 16" fill="none"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                <rect x="3" y="8" width="2" height="6" rx="1"
                                                                      fill="#754FFE"></rect>
                                                                <rect x="7" y="5" width="2" height="9" rx="1"
                                                                      fill="#754FFE"></rect>
                                                                <rect x="11" y="2" width="2" height="12" rx="1"
                                                                      fill="#754FFE"></rect>
                                                            </svg>
                                                            Advance
                                                        </li>
                                                    </ul>
                                                    <div class="lh-1">
                        <span class="align-text-top">
                          <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor"
                               class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor"
                               class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor"
                               class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor"
                               class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor"
                               class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                        </span>
                                                        <span class="text-warning">4.5</span>
                                                        <span class="fs-6">(7,000)</span>
                                                    </div>
                                                </div>
                                                <!-- Card Footer -->
                                                <div class="card-footer">
                                                    <div class="row align-items-center g-0">
                                                        <div class="col-auto">
                                                            <img src="../assets/images/avatar/avatar-5.jpg"
                                                                 class="rounded-circle avatar-xs" alt="avatar">
                                                        </div>
                                                        <div class="col ms-2">
                                                            <span>Eleanor Pena</span>
                                                        </div>
                                                        <div class="col-auto">
                                                            <a href="#" class="text-reset bookmark">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                     height="16" fill="currentColor"
                                                                     class="bi bi-bookmarks text-gray-500"
                                                                     viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M2 4a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v11.5a.5.5 0 0 1-.777.416L7 13.101l-4.223 2.815A.5.5 0 0 1 2 15.5zm2-1a1 1 0 0 0-1 1v10.566l3.723-2.482a.5.5 0 0 1 .554 0L11 14.566V4a1 1 0 0 0-1-1z"></path>
                                                                    <path
                                                                        d="M4.268 1H12a1 1 0 0 1 1 1v11.768l.223.148A.5.5 0 0 0 14 13.5V2a2 2 0 0 0-2-2H6a2 2 0 0 0-1.732 1"></path>
                                                                </svg>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item tns-item" id="tns1-item3" aria-hidden="true" tabindex="-1">
                                            <div class="card border">
                                                <a href="#!">
                                                    <img src="../assets/images/course/course-wordpress.jpg" alt="figma"
                                                         class="card-img-top img-fluid w-100">
                                                </a>
                                                <div class="card-body d-flex flex-column gap-2">
                                                    <h3 class="h4 mb-0"><a href="#!" class="text-inherit">The Complete
                                                            WordPress Website Course</a></h3>
                                                    <ul class="mb-0 list-inline">
                                                        <li class="list-inline-item lh-1">
                          <span class="align-bottom">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                 class="bi bi-clock text-gray-400" viewBox="0 0 16 16">
                              <path
                                  d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"></path>
                              <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"></path>
                            </svg>
                          </span>
                                                            <span class="text-gray-500">2h 40m</span>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <svg class="me-1 mt-n1" width="16" height="16"
                                                                 viewBox="0 0 16 16" fill="none"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                <rect x="3" y="8" width="2" height="6" rx="1"
                                                                      fill="#754FFE"></rect>
                                                                <rect x="7" y="5" width="2" height="9" rx="1"
                                                                      fill="#DBD8E9"></rect>
                                                                <rect x="11" y="2" width="2" height="12" rx="1"
                                                                      fill="#DBD8E9"></rect>
                                                            </svg>
                                                            Beginner
                                                        </li>
                                                    </ul>
                                                    <div class="lh-1">
                        <span class="align-text-top">
                          <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor"
                               class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor"
                               class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor"
                               class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor"
                               class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor"
                               class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                        </span>
                                                        <span class="text-warning">4.1</span>
                                                        <span class="fs-6">(4,000)</span>
                                                    </div>
                                                </div>
                                                <!-- Card Footer -->
                                                <div class="card-footer">
                                                    <div class="row align-items-center g-0">
                                                        <div class="col-auto">
                                                            <img src="../assets/images/avatar/avatar-6.jpg"
                                                                 class="rounded-circle avatar-xs" alt="avatar">
                                                        </div>
                                                        <div class="col ms-2">
                                                            <span>Jenny Wilson</span>
                                                        </div>
                                                        <div class="col-auto">
                                                            <a href="#" class="text-reset bookmark">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                     height="16" fill="currentColor"
                                                                     class="bi bi-bookmarks text-gray-500"
                                                                     viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M2 4a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v11.5a.5.5 0 0 1-.777.416L7 13.101l-4.223 2.815A.5.5 0 0 1 2 15.5zm2-1a1 1 0 0 0-1 1v10.566l3.723-2.482a.5.5 0 0 1 .554 0L11 14.566V4a1 1 0 0 0-1-1z"></path>
                                                                    <path
                                                                        d="M4.268 1H12a1 1 0 0 1 1 1v11.768l.223.148A.5.5 0 0 0 14 13.5V2a2 2 0 0 0-2-2H6a2 2 0 0 0-1.732 1"></path>
                                                                </svg>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="item tns-item" id="tns1-item4" aria-hidden="true" tabindex="-1">
                                            <div class="card border">
                                                <a href="#!">
                                                    <img src="../assets/images/course/course-gatsby.jpg" alt="figma"
                                                         class="card-img-top img-fluid w-100">
                                                </a>
                                                <div class="card-body d-flex flex-column gap-2">
                                                    <h3 class="h4 mb-0"><a href="#!" class="text-inherit">Get to Know
                                                            Gatsby Building Blocks - GatsbyJS</a></h3>
                                                    <ul class="mb-0 list-inline">
                                                        <li class="list-inline-item lh-1">
                          <span class="align-bottom">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                 class="bi bi-clock text-gray-400" viewBox="0 0 16 16">
                              <path
                                  d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"></path>
                              <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"></path>
                            </svg>
                          </span>
                                                            <span class="text-gray-500">3h 56m</span>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <svg class="me-1 mt-n1" width="16" height="16"
                                                                 viewBox="0 0 16 16" fill="none"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                <rect x="3" y="8" width="2" height="6" rx="1"
                                                                      fill="#754FFE"></rect>
                                                                <rect x="7" y="5" width="2" height="9" rx="1"
                                                                      fill="#DBD8E9"></rect>
                                                                <rect x="11" y="2" width="2" height="12" rx="1"
                                                                      fill="#DBD8E9"></rect>
                                                            </svg>
                                                            <span class="text-gray-500">Beginner</span>
                                                        </li>
                                                    </ul>
                                                    <div class="lh-1">
                        <span class="align-text-top">
                          <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor"
                               class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor"
                               class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor"
                               class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor"
                               class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor"
                               class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                        </span>
                                                        <span class="text-warning">4.5</span>
                                                        <span class="fs-6">(1,345)</span>
                                                    </div>
                                                </div>
                                                <!-- Card Footer -->
                                                <div class="card-footer">
                                                    <div class="row align-items-center g-0">
                                                        <div class="col-auto">
                                                            <img src="../assets/images/avatar/avatar-3.jpg"
                                                                 class="rounded-circle avatar-xs" alt="avatar">
                                                        </div>
                                                        <div class="col ms-2">
                                                            <span>Bessie Cooper</span>
                                                        </div>
                                                        <div class="col-auto">
                                                            <a href="#" class="text-reset bookmark">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                     height="16" fill="currentColor"
                                                                     class="bi bi-bookmarks text-gray-500"
                                                                     viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M2 4a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v11.5a.5.5 0 0 1-.777.416L7 13.101l-4.223 2.815A.5.5 0 0 1 2 15.5zm2-1a1 1 0 0 0-1 1v10.566l3.723-2.482a.5.5 0 0 1 .554 0L11 14.566V4a1 1 0 0 0-1-1z"></path>
                                                                    <path
                                                                        d="M4.268 1H12a1 1 0 0 1 1 1v11.768l.223.148A.5.5 0 0 0 14 13.5V2a2 2 0 0 0-2-2H6a2 2 0 0 0-1.732 1"></path>
                                                                </svg>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item tns-item" id="tns1-item5" aria-hidden="true" tabindex="-1">
                                            <div class="card border">
                                                <a href="#!">
                                                    <img src="../assets/images/course/course-graphql.jpg" alt="figma"
                                                         class="card-img-top img-fluid w-100">
                                                </a>
                                                <div class="card-body d-flex flex-column gap-2">
                                                    <h3 class="h4 mb-0"><a href="#!" class="text-inherit">Getting
                                                            Started Practical Learn With GraphQL.js</a></h3>
                                                    <ul class="mb-0 list-inline">
                                                        <li class="list-inline-item lh-1">
                          <span class="align-bottom">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                 class="bi bi-clock text-gray-400" viewBox="0 0 16 16">
                              <path
                                  d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"></path>
                              <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"></path>
                            </svg>
                          </span>
                                                            <span class="text-gray-500">2h 30m</span>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <svg class="me-1 mt-n1" width="16" height="16"
                                                                 viewBox="0 0 16 16" fill="none"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                <rect x="3" y="8" width="2" height="6" rx="1"
                                                                      fill="#754FFE"></rect>
                                                                <rect x="7" y="5" width="2" height="9" rx="1"
                                                                      fill="#754FFE"></rect>
                                                                <rect x="11" y="2" width="2" height="12" rx="1"
                                                                      fill="#DBD8E9"></rect>
                                                            </svg>
                                                            Intermediate
                                                        </li>
                                                    </ul>
                                                    <div class="lh-1">
                        <span class="align-text-top">
                          <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor"
                               class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor"
                               class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor"
                               class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor"
                               class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor"
                               class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                        </span>
                                                        <span class="text-warning">4.5</span>
                                                        <span class="fs-6">(3,245)</span>
                                                    </div>
                                                </div>
                                                <!-- Card Footer -->
                                                <div class="card-footer">
                                                    <div class="row align-items-center g-0">
                                                        <div class="col-auto">
                                                            <img src="../assets/images/avatar/avatar-4.jpg"
                                                                 class="rounded-circle avatar-xs" alt="avatar">
                                                        </div>
                                                        <div class="col ms-2">
                                                            <span>Brooklyn Simmons</span>
                                                        </div>
                                                        <div class="col-auto">
                                                            <a href="#" class="text-reset bookmark">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                     height="16" fill="currentColor"
                                                                     class="bi bi-bookmarks text-gray-500"
                                                                     viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M2 4a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v11.5a.5.5 0 0 1-.777.416L7 13.101l-4.223 2.815A.5.5 0 0 1 2 15.5zm2-1a1 1 0 0 0-1 1v10.566l3.723-2.482a.5.5 0 0 1 .554 0L11 14.566V4a1 1 0 0 0-1-1z"></path>
                                                                    <path
                                                                        d="M4.268 1H12a1 1 0 0 1 1 1v11.768l.223.148A.5.5 0 0 0 14 13.5V2a2 2 0 0 0-2-2H6a2 2 0 0 0-1.732 1"></path>
                                                                </svg>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item tns-item" id="tns1-item6" aria-hidden="true" tabindex="-1">
                                            <div class="card border">
                                                <a href="#!">
                                                    <img src="../assets/images/course/course-node.jpg" alt="figma"
                                                         class="card-img-top img-fluid w-100">
                                                </a>
                                                <div class="card-body d-flex flex-column gap-2">
                                                    <h3 class="h4 mb-0"><a href="#!" class="text-inherit">The Complete
                                                            Node.js Developer Course</a></h3>
                                                    <ul class="mb-0 list-inline">
                                                        <li class="list-inline-item lh-1">
                          <span class="align-bottom">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                 class="bi bi-clock text-gray-400" viewBox="0 0 16 16">
                              <path
                                  d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"></path>
                              <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"></path>
                            </svg>
                          </span>
                                                            <span class="text-gray-500">2h 46m</span>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <svg class="me-1 mt-n1" width="16" height="16"
                                                                 viewBox="0 0 16 16" fill="none"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                <rect x="3" y="8" width="2" height="6" rx="1"
                                                                      fill="#754FFE"></rect>
                                                                <rect x="7" y="5" width="2" height="9" rx="1"
                                                                      fill="#754FFE"></rect>
                                                                <rect x="11" y="2" width="2" height="12" rx="1"
                                                                      fill="#754FFE"></rect>
                                                            </svg>
                                                            Advance
                                                        </li>
                                                    </ul>
                                                    <div class="lh-1">
                        <span class="align-text-top">
                          <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor"
                               class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor"
                               class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor"
                               class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor"
                               class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor"
                               class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                        </span>
                                                        <span class="text-warning">4.5</span>
                                                        <span class="fs-6">(7,000)</span>
                                                    </div>
                                                </div>
                                                <!-- Card Footer -->
                                                <div class="card-footer">
                                                    <div class="row align-items-center g-0">
                                                        <div class="col-auto">
                                                            <img src="../assets/images/avatar/avatar-5.jpg"
                                                                 class="rounded-circle avatar-xs" alt="avatar">
                                                        </div>
                                                        <div class="col ms-2">
                                                            <span>Eleanor Pena</span>
                                                        </div>
                                                        <div class="col-auto">
                                                            <a href="#" class="text-reset bookmark">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                     height="16" fill="currentColor"
                                                                     class="bi bi-bookmarks text-gray-500"
                                                                     viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M2 4a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v11.5a.5.5 0 0 1-.777.416L7 13.101l-4.223 2.815A.5.5 0 0 1 2 15.5zm2-1a1 1 0 0 0-1 1v10.566l3.723-2.482a.5.5 0 0 1 .554 0L11 14.566V4a1 1 0 0 0-1-1z"></path>
                                                                    <path
                                                                        d="M4.268 1H12a1 1 0 0 1 1 1v11.768l.223.148A.5.5 0 0 0 14 13.5V2a2 2 0 0 0-2-2H6a2 2 0 0 0-1.732 1"></path>
                                                                </svg>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item tns-item" id="tns1-item7" aria-hidden="true" tabindex="-1">
                                            <div class="card border">
                                                <a href="#!">
                                                    <img src="../assets/images/course/course-wordpress.jpg" alt="figma"
                                                         class="card-img-top img-fluid w-100">
                                                </a>
                                                <div class="card-body d-flex flex-column gap-2">
                                                    <h3 class="h4 mb-0"><a href="#!" class="text-inherit">The Complete
                                                            WordPress Website Course</a></h3>
                                                    <ul class="mb-0 list-inline">
                                                        <li class="list-inline-item lh-1">
                          <span class="align-bottom">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                 class="bi bi-clock text-gray-400" viewBox="0 0 16 16">
                              <path
                                  d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"></path>
                              <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"></path>
                            </svg>
                          </span>
                                                            <span class="text-gray-500">2h 40m</span>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <svg class="me-1 mt-n1" width="16" height="16"
                                                                 viewBox="0 0 16 16" fill="none"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                <rect x="3" y="8" width="2" height="6" rx="1"
                                                                      fill="#754FFE"></rect>
                                                                <rect x="7" y="5" width="2" height="9" rx="1"
                                                                      fill="#DBD8E9"></rect>
                                                                <rect x="11" y="2" width="2" height="12" rx="1"
                                                                      fill="#DBD8E9"></rect>
                                                            </svg>
                                                            Beginner
                                                        </li>
                                                    </ul>
                                                    <div class="lh-1">
                        <span class="align-text-top">
                          <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor"
                               class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor"
                               class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor"
                               class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor"
                               class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor"
                               class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                        </span>
                                                        <span class="text-warning">4.1</span>
                                                        <span class="fs-6">(4,000)</span>
                                                    </div>
                                                </div>
                                                <!-- Card Footer -->
                                                <div class="card-footer">
                                                    <div class="row align-items-center g-0">
                                                        <div class="col-auto">
                                                            <img src="../assets/images/avatar/avatar-6.jpg"
                                                                 class="rounded-circle avatar-xs" alt="avatar">
                                                        </div>
                                                        <div class="col ms-2">
                                                            <span>Jenny Wilson</span>
                                                        </div>
                                                        <div class="col-auto">
                                                            <a href="#" class="text-reset bookmark">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                     height="16" fill="currentColor"
                                                                     class="bi bi-bookmarks text-gray-500"
                                                                     viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M2 4a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v11.5a.5.5 0 0 1-.777.416L7 13.101l-4.223 2.815A.5.5 0 0 1 2 15.5zm2-1a1 1 0 0 0-1 1v10.566l3.723-2.482a.5.5 0 0 1 .554 0L11 14.566V4a1 1 0 0 0-1-1z"></path>
                                                                    <path
                                                                        d="M4.268 1H12a1 1 0 0 1 1 1v11.768l.223.148A.5.5 0 0 0 14 13.5V2a2 2 0 0 0-2-2H6a2 2 0 0 0-1.732 1"></path>
                                                                </svg>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item tns-item tns-slide-cloned" aria-hidden="true" tabindex="-1">
                                            <div class="card border">
                                                <a href="#!">
                                                    <img src="../assets/images/course/course-gatsby.jpg" alt="figma"
                                                         class="card-img-top img-fluid w-100">
                                                </a>
                                                <div class="card-body d-flex flex-column gap-2">
                                                    <h3 class="h4 mb-0"><a href="#!" class="text-inherit">Get to Know
                                                            Gatsby Building Blocks - GatsbyJS</a></h3>
                                                    <ul class="mb-0 list-inline">
                                                        <li class="list-inline-item lh-1">
                          <span class="align-bottom">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                 class="bi bi-clock text-gray-400" viewBox="0 0 16 16">
                              <path
                                  d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"></path>
                              <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"></path>
                            </svg>
                          </span>
                                                            <span class="text-gray-500">3h 56m</span>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <svg class="me-1 mt-n1" width="16" height="16"
                                                                 viewBox="0 0 16 16" fill="none"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                <rect x="3" y="8" width="2" height="6" rx="1"
                                                                      fill="#754FFE"></rect>
                                                                <rect x="7" y="5" width="2" height="9" rx="1"
                                                                      fill="#DBD8E9"></rect>
                                                                <rect x="11" y="2" width="2" height="12" rx="1"
                                                                      fill="#DBD8E9"></rect>
                                                            </svg>
                                                            <span class="text-gray-500">Beginner</span>
                                                        </li>
                                                    </ul>
                                                    <div class="lh-1">
                        <span class="align-text-top">
                          <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor"
                               class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor"
                               class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor"
                               class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor"
                               class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor"
                               class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                        </span>
                                                        <span class="text-warning">4.5</span>
                                                        <span class="fs-6">(1,345)</span>
                                                    </div>
                                                </div>
                                                <!-- Card Footer -->
                                                <div class="card-footer">
                                                    <div class="row align-items-center g-0">
                                                        <div class="col-auto">
                                                            <img src="../assets/images/avatar/avatar-3.jpg"
                                                                 class="rounded-circle avatar-xs" alt="avatar">
                                                        </div>
                                                        <div class="col ms-2">
                                                            <span>Bessie Cooper</span>
                                                        </div>
                                                        <div class="col-auto">
                                                            <a href="#" class="text-reset bookmark">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                     height="16" fill="currentColor"
                                                                     class="bi bi-bookmarks text-gray-500"
                                                                     viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M2 4a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v11.5a.5.5 0 0 1-.777.416L7 13.101l-4.223 2.815A.5.5 0 0 1 2 15.5zm2-1a1 1 0 0 0-1 1v10.566l3.723-2.482a.5.5 0 0 1 .554 0L11 14.566V4a1 1 0 0 0-1-1z"></path>
                                                                    <path
                                                                        d="M4.268 1H12a1 1 0 0 1 1 1v11.768l.223.148A.5.5 0 0 0 14 13.5V2a2 2 0 0 0-2-2H6a2 2 0 0 0-1.732 1"></path>
                                                                </svg>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item tns-item tns-slide-cloned tns-slide-active">
                                            <div class="card border">
                                                <a href="#!">
                                                    <img src="../assets/images/course/course-graphql.jpg" alt="figma"
                                                         class="card-img-top img-fluid w-100">
                                                </a>
                                                <div class="card-body d-flex flex-column gap-2">
                                                    <h3 class="h4 mb-0"><a href="#!" class="text-inherit">Getting
                                                            Started Practical Learn With GraphQL.js</a></h3>
                                                    <ul class="mb-0 list-inline">
                                                        <li class="list-inline-item lh-1">
                          <span class="align-bottom">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                 class="bi bi-clock text-gray-400" viewBox="0 0 16 16">
                              <path
                                  d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"></path>
                              <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"></path>
                            </svg>
                          </span>
                                                            <span class="text-gray-500">2h 30m</span>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <svg class="me-1 mt-n1" width="16" height="16"
                                                                 viewBox="0 0 16 16" fill="none"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                <rect x="3" y="8" width="2" height="6" rx="1"
                                                                      fill="#754FFE"></rect>
                                                                <rect x="7" y="5" width="2" height="9" rx="1"
                                                                      fill="#754FFE"></rect>
                                                                <rect x="11" y="2" width="2" height="12" rx="1"
                                                                      fill="#DBD8E9"></rect>
                                                            </svg>
                                                            Intermediate
                                                        </li>
                                                    </ul>
                                                    <div class="lh-1">
                        <span class="align-text-top">
                          <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor"
                               class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor"
                               class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor"
                               class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor"
                               class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor"
                               class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                        </span>
                                                        <span class="text-warning">4.5</span>
                                                        <span class="fs-6">(3,245)</span>
                                                    </div>
                                                </div>
                                                <!-- Card Footer -->
                                                <div class="card-footer">
                                                    <div class="row align-items-center g-0">
                                                        <div class="col-auto">
                                                            <img src="../assets/images/avatar/avatar-4.jpg"
                                                                 class="rounded-circle avatar-xs" alt="avatar">
                                                        </div>
                                                        <div class="col ms-2">
                                                            <span>Brooklyn Simmons</span>
                                                        </div>
                                                        <div class="col-auto">
                                                            <a href="#" class="text-reset bookmark">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                     height="16" fill="currentColor"
                                                                     class="bi bi-bookmarks text-gray-500"
                                                                     viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M2 4a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v11.5a.5.5 0 0 1-.777.416L7 13.101l-4.223 2.815A.5.5 0 0 1 2 15.5zm2-1a1 1 0 0 0-1 1v10.566l3.723-2.482a.5.5 0 0 1 .554 0L11 14.566V4a1 1 0 0 0-1-1z"></path>
                                                                    <path
                                                                        d="M4.268 1H12a1 1 0 0 1 1 1v11.768l.223.148A.5.5 0 0 0 14 13.5V2a2 2 0 0 0-2-2H6a2 2 0 0 0-1.732 1"></path>
                                                                </svg>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item tns-item tns-slide-cloned tns-slide-active">
                                            <div class="card border">
                                                <a href="#!">
                                                    <img src="../assets/images/course/course-node.jpg" alt="figma"
                                                         class="card-img-top img-fluid w-100">
                                                </a>
                                                <div class="card-body d-flex flex-column gap-2">
                                                    <h3 class="h4 mb-0"><a href="#!" class="text-inherit">The Complete
                                                            Node.js Developer Course</a></h3>
                                                    <ul class="mb-0 list-inline">
                                                        <li class="list-inline-item lh-1">
                          <span class="align-bottom">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                 class="bi bi-clock text-gray-400" viewBox="0 0 16 16">
                              <path
                                  d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"></path>
                              <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"></path>
                            </svg>
                          </span>
                                                            <span class="text-gray-500">2h 46m</span>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <svg class="me-1 mt-n1" width="16" height="16"
                                                                 viewBox="0 0 16 16" fill="none"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                <rect x="3" y="8" width="2" height="6" rx="1"
                                                                      fill="#754FFE"></rect>
                                                                <rect x="7" y="5" width="2" height="9" rx="1"
                                                                      fill="#754FFE"></rect>
                                                                <rect x="11" y="2" width="2" height="12" rx="1"
                                                                      fill="#754FFE"></rect>
                                                            </svg>
                                                            Advance
                                                        </li>
                                                    </ul>
                                                    <div class="lh-1">
                        <span class="align-text-top">
                          <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor"
                               class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor"
                               class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor"
                               class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor"
                               class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor"
                               class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                        </span>
                                                        <span class="text-warning">4.5</span>
                                                        <span class="fs-6">(7,000)</span>
                                                    </div>
                                                </div>
                                                <!-- Card Footer -->
                                                <div class="card-footer">
                                                    <div class="row align-items-center g-0">
                                                        <div class="col-auto">
                                                            <img src="../assets/images/avatar/avatar-5.jpg"
                                                                 class="rounded-circle avatar-xs" alt="avatar">
                                                        </div>
                                                        <div class="col ms-2">
                                                            <span>Eleanor Pena</span>
                                                        </div>
                                                        <div class="col-auto">
                                                            <a href="#" class="text-reset bookmark">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                     height="16" fill="currentColor"
                                                                     class="bi bi-bookmarks text-gray-500"
                                                                     viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M2 4a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v11.5a.5.5 0 0 1-.777.416L7 13.101l-4.223 2.815A.5.5 0 0 1 2 15.5zm2-1a1 1 0 0 0-1 1v10.566l3.723-2.482a.5.5 0 0 1 .554 0L11 14.566V4a1 1 0 0 0-1-1z"></path>
                                                                    <path
                                                                        d="M4.268 1H12a1 1 0 0 1 1 1v11.768l.223.148A.5.5 0 0 0 14 13.5V2a2 2 0 0 0-2-2H6a2 2 0 0 0-1.732 1"></path>
                                                                </svg>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item tns-item tns-slide-cloned tns-slide-active">
                                            <div class="card border">
                                                <a href="#!">
                                                    <img src="../assets/images/course/course-wordpress.jpg" alt="figma"
                                                         class="card-img-top img-fluid w-100">
                                                </a>
                                                <div class="card-body d-flex flex-column gap-2">
                                                    <h3 class="h4 mb-0"><a href="#!" class="text-inherit">The Complete
                                                            WordPress Website Course</a></h3>
                                                    <ul class="mb-0 list-inline">
                                                        <li class="list-inline-item lh-1">
                          <span class="align-bottom">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                 class="bi bi-clock text-gray-400" viewBox="0 0 16 16">
                              <path
                                  d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"></path>
                              <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"></path>
                            </svg>
                          </span>
                                                            <span class="text-gray-500">2h 40m</span>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <svg class="me-1 mt-n1" width="16" height="16"
                                                                 viewBox="0 0 16 16" fill="none"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                <rect x="3" y="8" width="2" height="6" rx="1"
                                                                      fill="#754FFE"></rect>
                                                                <rect x="7" y="5" width="2" height="9" rx="1"
                                                                      fill="#DBD8E9"></rect>
                                                                <rect x="11" y="2" width="2" height="12" rx="1"
                                                                      fill="#DBD8E9"></rect>
                                                            </svg>
                                                            Beginner
                                                        </li>
                                                    </ul>
                                                    <div class="lh-1">
                        <span class="align-text-top">
                          <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor"
                               class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor"
                               class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor"
                               class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor"
                               class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor"
                               class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                        </span>
                                                        <span class="text-warning">4.1</span>
                                                        <span class="fs-6">(4,000)</span>
                                                    </div>
                                                </div>
                                                <!-- Card Footer -->
                                                <div class="card-footer">
                                                    <div class="row align-items-center g-0">
                                                        <div class="col-auto">
                                                            <img src="../assets/images/avatar/avatar-6.jpg"
                                                                 class="rounded-circle avatar-xs" alt="avatar">
                                                        </div>
                                                        <div class="col ms-2">
                                                            <span>Jenny Wilson</span>
                                                        </div>
                                                        <div class="col-auto">
                                                            <a href="#" class="text-reset bookmark">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                     height="16" fill="currentColor"
                                                                     class="bi bi-bookmarks text-gray-500"
                                                                     viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M2 4a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v11.5a.5.5 0 0 1-.777.416L7 13.101l-4.223 2.815A.5.5 0 0 1 2 15.5zm2-1a1 1 0 0 0-1 1v10.566l3.723-2.482a.5.5 0 0 1 .554 0L11 14.566V4a1 1 0 0 0-1-1z"></path>
                                                                    <path
                                                                        d="M4.268 1H12a1 1 0 0 1 1 1v11.768l.223.148A.5.5 0 0 0 14 13.5V2a2 2 0 0 0-2-2H6a2 2 0 0 0-1.732 1"></path>
                                                                </svg>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item tns-item tns-slide-cloned tns-slide-active">
                                            <div class="card border">
                                                <a href="#!">
                                                    <img src="../assets/images/course/course-gatsby.jpg" alt="figma"
                                                         class="card-img-top img-fluid w-100">
                                                </a>
                                                <div class="card-body d-flex flex-column gap-2">
                                                    <h3 class="h4 mb-0"><a href="#!" class="text-inherit">Get to Know
                                                            Gatsby Building Blocks - GatsbyJS</a></h3>
                                                    <ul class="mb-0 list-inline">
                                                        <li class="list-inline-item lh-1">
                          <span class="align-bottom">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                 class="bi bi-clock text-gray-400" viewBox="0 0 16 16">
                              <path
                                  d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"></path>
                              <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"></path>
                            </svg>
                          </span>
                                                            <span class="text-gray-500">3h 56m</span>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <svg class="me-1 mt-n1" width="16" height="16"
                                                                 viewBox="0 0 16 16" fill="none"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                <rect x="3" y="8" width="2" height="6" rx="1"
                                                                      fill="#754FFE"></rect>
                                                                <rect x="7" y="5" width="2" height="9" rx="1"
                                                                      fill="#DBD8E9"></rect>
                                                                <rect x="11" y="2" width="2" height="12" rx="1"
                                                                      fill="#DBD8E9"></rect>
                                                            </svg>
                                                            <span class="text-gray-500">Beginner</span>
                                                        </li>
                                                    </ul>
                                                    <div class="lh-1">
                        <span class="align-text-top">
                          <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor"
                               class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor"
                               class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor"
                               class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor"
                               class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor"
                               class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                        </span>
                                                        <span class="text-warning">4.5</span>
                                                        <span class="fs-6">(1,345)</span>
                                                    </div>
                                                </div>
                                                <!-- Card Footer -->
                                                <div class="card-footer">
                                                    <div class="row align-items-center g-0">
                                                        <div class="col-auto">
                                                            <img src="../assets/images/avatar/avatar-3.jpg"
                                                                 class="rounded-circle avatar-xs" alt="avatar">
                                                        </div>
                                                        <div class="col ms-2">
                                                            <span>Bessie Cooper</span>
                                                        </div>
                                                        <div class="col-auto">
                                                            <a href="#" class="text-reset bookmark">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                     height="16" fill="currentColor"
                                                                     class="bi bi-bookmarks text-gray-500"
                                                                     viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M2 4a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v11.5a.5.5 0 0 1-.777.416L7 13.101l-4.223 2.815A.5.5 0 0 1 2 15.5zm2-1a1 1 0 0 0-1 1v10.566l3.723-2.482a.5.5 0 0 1 .554 0L11 14.566V4a1 1 0 0 0-1-1z"></path>
                                                                    <path
                                                                        d="M4.268 1H12a1 1 0 0 1 1 1v11.768l.223.148A.5.5 0 0 0 14 13.5V2a2 2 0 0 0-2-2H6a2 2 0 0 0-1.732 1"></path>
                                                                </svg>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item tns-item tns-slide-cloned" aria-hidden="true" tabindex="-1">
                                            <div class="card border">
                                                <a href="#!">
                                                    <img src="../assets/images/course/course-graphql.jpg" alt="figma"
                                                         class="card-img-top img-fluid w-100">
                                                </a>
                                                <div class="card-body d-flex flex-column gap-2">
                                                    <h3 class="h4 mb-0"><a href="#!" class="text-inherit">Getting
                                                            Started Practical Learn With GraphQL.js</a></h3>
                                                    <ul class="mb-0 list-inline">
                                                        <li class="list-inline-item lh-1">
                          <span class="align-bottom">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                 class="bi bi-clock text-gray-400" viewBox="0 0 16 16">
                              <path
                                  d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"></path>
                              <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"></path>
                            </svg>
                          </span>
                                                            <span class="text-gray-500">2h 30m</span>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <svg class="me-1 mt-n1" width="16" height="16"
                                                                 viewBox="0 0 16 16" fill="none"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                <rect x="3" y="8" width="2" height="6" rx="1"
                                                                      fill="#754FFE"></rect>
                                                                <rect x="7" y="5" width="2" height="9" rx="1"
                                                                      fill="#754FFE"></rect>
                                                                <rect x="11" y="2" width="2" height="12" rx="1"
                                                                      fill="#DBD8E9"></rect>
                                                            </svg>
                                                            Intermediate
                                                        </li>
                                                    </ul>
                                                    <div class="lh-1">
                        <span class="align-text-top">
                          <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor"
                               class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor"
                               class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor"
                               class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor"
                               class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor"
                               class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                        </span>
                                                        <span class="text-warning">4.5</span>
                                                        <span class="fs-6">(3,245)</span>
                                                    </div>
                                                </div>
                                                <!-- Card Footer -->
                                                <div class="card-footer">
                                                    <div class="row align-items-center g-0">
                                                        <div class="col-auto">
                                                            <img src="../assets/images/avatar/avatar-4.jpg"
                                                                 class="rounded-circle avatar-xs" alt="avatar">
                                                        </div>
                                                        <div class="col ms-2">
                                                            <span>Brooklyn Simmons</span>
                                                        </div>
                                                        <div class="col-auto">
                                                            <a href="#" class="text-reset bookmark">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                     height="16" fill="currentColor"
                                                                     class="bi bi-bookmarks text-gray-500"
                                                                     viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M2 4a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v11.5a.5.5 0 0 1-.777.416L7 13.101l-4.223 2.815A.5.5 0 0 1 2 15.5zm2-1a1 1 0 0 0-1 1v10.566l3.723-2.482a.5.5 0 0 1 .554 0L11 14.566V4a1 1 0 0 0-1-1z"></path>
                                                                    <path
                                                                        d="M4.268 1H12a1 1 0 0 1 1 1v11.768l.223.148A.5.5 0 0 0 14 13.5V2a2 2 0 0 0-2-2H6a2 2 0 0 0-1.732 1"></path>
                                                                </svg>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="my-6">
            <div class="row gy-5 mb-6">
                <div class="col-lg-7 col-12">
                    <div class="d-flex flex-column gap-2">
                        <h2 class="h3 mb-0">Frontend Web Development</h2>
                        <p class="mb-0">Learn to code through our courses and paths and become a backend engineer in
                            Python or Java, or learn to code for databases, machine learning or data science.</p>
                    </div>
                </div>
                <div class="col-lg-5 col-12 text-end">
                    <a href="#!" class="btn btn-white">Explore&nbsp;Front End Development</a>
                </div>

                <div class="col-12">
                    <div class="position-relative">
                        <ul class="controls" id="sliderSecondControls" aria-label="Carousel Navigation" tabindex="0">
                            <li class="prev" aria-controls="tns2" tabindex="-1" data-controls="prev">
                                <i class="fe fe-chevron-left"></i>
                            </li>
                            <li class="next" aria-controls="tns2" tabindex="-1" data-controls="next">
                                <i class="fe fe-chevron-right"></i>
                            </li>
                        </ul>
                        <div class="tns-outer" id="tns2-ow">
                            <div class="tns-liveregion tns-visually-hidden" aria-live="polite" aria-atomic="true">slide
                                <span class="current">14 to 17</span> of 8
                            </div>
                            <div id="tns2-mw" class="tns-ovh">
                                <div class="tns-inner" id="tns2-iw">
                                    <div
                                        class="sliderSecond  tns-slider tns-carousel tns-subpixel tns-calc tns-horizontal"
                                        id="tns2" style="transform: translate3d(-65%, 0px, 0px);">
                                        <div class="item tns-item tns-slide-cloned" aria-hidden="true" tabindex="-1">
                                            <div class="card border">
                                                <a href="#!">
                                                    <img src="../assets/images/course/course-graphql.jpg" alt="figma"
                                                         class="card-img-top img-fluid w-100">
                                                </a>
                                                <div class="card-body d-flex flex-column gap-2">
                                                    <h3 class="h4 mb-0"><a href="#!" class="text-inherit">GraphQL:
                                                            introduction to graphQL for beginners</a></h3>
                                                    <ul class="mb-0 list-inline">
                                                        <li class="list-inline-item lh-1">
                          <span class="align-bottom">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                 class="bi bi-clock text-gray-400" viewBox="0 0 16 16">
                              <path
                                  d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"></path>
                              <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"></path>
                            </svg>
                          </span>
                                                            <span class="text-gray-500">2h 46m</span>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <svg class="me-1 mt-n1" width="16" height="16"
                                                                 viewBox="0 0 16 16" fill="none"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                <rect x="3" y="8" width="2" height="6" rx="1"
                                                                      fill="#754FFE"></rect>
                                                                <rect x="7" y="5" width="2" height="9" rx="1"
                                                                      fill="#754FFE"></rect>
                                                                <rect x="11" y="2" width="2" height="12" rx="1"
                                                                      fill="#754FFE"></rect>
                                                            </svg>
                                                            Advance
                                                        </li>
                                                    </ul>
                                                    <div class="lh-1">
                        <span class="align-text-top">
                          <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor"
                               class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor"
                               class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor"
                               class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor"
                               class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor"
                               class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                        </span>
                                                        <span class="text-warning">4.6</span>
                                                        <span class="fs-6">(9,300)</span>
                                                    </div>
                                                </div>
                                                <!-- Card Footer -->
                                                <div class="card-footer">
                                                    <div class="row align-items-center g-0">
                                                        <div class="col-auto">
                                                            <img src="../assets/images/avatar/avatar-2.jpg"
                                                                 class="rounded-circle avatar-xs" alt="avatar">
                                                        </div>
                                                        <div class="col ms-2">
                                                            <span>Ted Hawkins</span>
                                                        </div>
                                                        <div class="col-auto">
                                                            <a href="#" class="text-reset bookmark">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                     height="16" fill="currentColor"
                                                                     class="bi bi-bookmarks text-gray-500"
                                                                     viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M2 4a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v11.5a.5.5 0 0 1-.777.416L7 13.101l-4.223 2.815A.5.5 0 0 1 2 15.5zm2-1a1 1 0 0 0-1 1v10.566l3.723-2.482a.5.5 0 0 1 .554 0L11 14.566V4a1 1 0 0 0-1-1z"></path>
                                                                    <path
                                                                        d="M4.268 1H12a1 1 0 0 1 1 1v11.768l.223.148A.5.5 0 0 0 14 13.5V2a2 2 0 0 0-2-2H6a2 2 0 0 0-1.732 1"></path>
                                                                </svg>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item tns-item tns-slide-cloned" aria-hidden="true" tabindex="-1">
                                            <div class="card border">
                                                <a href="#!">
                                                    <img src="../assets/images/course/course-wordpress.jpg" alt="figma"
                                                         class="card-img-top img-fluid w-100">
                                                </a>
                                                <div class="card-body d-flex flex-column gap-2">
                                                    <h3 class="h4 mb-0"><a href="#!" class="text-inherit">How to easily
                                                            create a website with React</a></h3>
                                                    <ul class="mb-0 list-inline">
                                                        <li class="list-inline-item lh-1">
                          <span class="align-bottom">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                 class="bi bi-clock text-gray-400" viewBox="0 0 16 16">
                              <path
                                  d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"></path>
                              <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"></path>
                            </svg>
                          </span>
                                                            <span class="text-gray-500">3h 56m</span>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <svg class="me-1 mt-n1" width="16" height="16"
                                                                 viewBox="0 0 16 16" fill="none"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                <rect x="3" y="8" width="2" height="6" rx="1"
                                                                      fill="#754FFE"></rect>
                                                                <rect x="7" y="5" width="2" height="9" rx="1"
                                                                      fill="#DBD8E9"></rect>
                                                                <rect x="11" y="2" width="2" height="12" rx="1"
                                                                      fill="#DBD8E9"></rect>
                                                            </svg>
                                                            Beginner
                                                        </li>
                                                    </ul>
                                                    <div class="lh-1">
                        <span class="align-text-top">
                          <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor"
                               class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor"
                               class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor"
                               class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor"
                               class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor"
                               class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                        </span>
                                                        <span class="text-warning">4.1</span>
                                                        <span class="fs-6">(7.700)</span>
                                                    </div>
                                                </div>
                                                <!-- Card Footer -->
                                                <div class="card-footer">
                                                    <div class="row align-items-center g-0">
                                                        <div class="col-auto">
                                                            <img src="../assets/images/avatar/avatar-1.jpg"
                                                                 class="rounded-circle avatar-xs" alt="avatar">
                                                        </div>
                                                        <div class="col ms-2">
                                                            <span>Morris Mccoy</span>
                                                        </div>
                                                        <div class="col-auto">
                                                            <a href="#" class="text-reset bookmark">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                     height="16" fill="currentColor"
                                                                     class="bi bi-bookmarks text-gray-500"
                                                                     viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M2 4a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v11.5a.5.5 0 0 1-.777.416L7 13.101l-4.223 2.815A.5.5 0 0 1 2 15.5zm2-1a1 1 0 0 0-1 1v10.566l3.723-2.482a.5.5 0 0 1 .554 0L11 14.566V4a1 1 0 0 0-1-1z"></path>
                                                                    <path
                                                                        d="M4.268 1H12a1 1 0 0 1 1 1v11.768l.223.148A.5.5 0 0 0 14 13.5V2a2 2 0 0 0-2-2H6a2 2 0 0 0-1.732 1"></path>
                                                                </svg>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item tns-item tns-slide-cloned" aria-hidden="true" tabindex="-1">
                                            <div class="card border">
                                                <a href="#!">
                                                    <img src="../assets/images/course/course-angular.jpg" alt="figma"
                                                         class="card-img-top img-fluid w-100">
                                                </a>
                                                <div class="card-body d-flex flex-column gap-2">
                                                    <h3 class="h4 mb-0"><a href="#!" class="text-inherit">Angular - the
                                                            complete guide for beginner</a></h3>
                                                    <ul class="mb-0 list-inline">
                                                        <li class="list-inline-item lh-1">
                          <span class="align-bottom">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                 class="bi bi-clock text-gray-400" viewBox="0 0 16 16">
                              <path
                                  d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"></path>
                              <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"></path>
                            </svg>
                          </span>
                                                            <span class="text-gray-500">3h 56m</span>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <svg class="me-1 mt-n1" width="16" height="16"
                                                                 viewBox="0 0 16 16" fill="none"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                <rect x="3" y="8" width="2" height="6" rx="1"
                                                                      fill="#754FFE"></rect>
                                                                <rect x="7" y="5" width="2" height="9" rx="1"
                                                                      fill="#DBD8E9"></rect>
                                                                <rect x="11" y="2" width="2" height="12" rx="1"
                                                                      fill="#DBD8E9"></rect>
                                                            </svg>
                                                            <span class="text-gray-500">Beginner</span>
                                                        </li>
                                                    </ul>
                                                    <div class="lh-1">
                        <span class="align-text-top">
                          <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor"
                               class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor"
                               class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor"
                               class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor"
                               class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor"
                               class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                        </span>
                                                        <span class="text-warning">4.5</span>
                                                        <span class="fs-6">(8,890)</span>
                                                    </div>
                                                </div>
                                                <!-- Card Footer -->
                                                <div class="card-footer">
                                                    <div class="row align-items-center g-0">
                                                        <div class="col-auto">
                                                            <img src="../assets/images/avatar/avatar-6.jpg"
                                                                 class="rounded-circle avatar-xs" alt="avatar">
                                                        </div>
                                                        <div class="col ms-2">
                                                            <span>Juanita Bell</span>
                                                        </div>
                                                        <div class="col-auto">
                                                            <a href="#" class="text-reset bookmark">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                     height="16" fill="currentColor"
                                                                     class="bi bi-bookmarks text-gray-500"
                                                                     viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M2 4a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v11.5a.5.5 0 0 1-.777.416L7 13.101l-4.223 2.815A.5.5 0 0 1 2 15.5zm2-1a1 1 0 0 0-1 1v10.566l3.723-2.482a.5.5 0 0 1 .554 0L11 14.566V4a1 1 0 0 0-1-1z"></path>
                                                                    <path
                                                                        d="M4.268 1H12a1 1 0 0 1 1 1v11.768l.223.148A.5.5 0 0 0 14 13.5V2a2 2 0 0 0-2-2H6a2 2 0 0 0-1.732 1"></path>
                                                                </svg>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item tns-item tns-slide-cloned" aria-hidden="true" tabindex="-1">
                                            <div class="card border">
                                                <a href="#!">
                                                    <img src="../assets/images/course/course-wordpress.jpg" alt="figma"
                                                         class="card-img-top img-fluid w-100">
                                                </a>
                                                <div class="card-body d-flex flex-column gap-2">
                                                    <h3 class="h4 mb-0"><a href="#!" class="text-inherit">How to easily
                                                            create a website with React</a></h3>
                                                    <ul class="mb-0 list-inline">
                                                        <li class="list-inline-item lh-1">
                          <span class="align-bottom">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                 class="bi bi-clock text-gray-400" viewBox="0 0 16 16">
                              <path
                                  d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"></path>
                              <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"></path>
                            </svg>
                          </span>
                                                            <span class="text-gray-500">3h 56m</span>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <svg class="me-1 mt-n1" width="16" height="16"
                                                                 viewBox="0 0 16 16" fill="none"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                <rect x="3" y="8" width="2" height="6" rx="1"
                                                                      fill="#754FFE"></rect>
                                                                <rect x="7" y="5" width="2" height="9" rx="1"
                                                                      fill="#DBD8E9"></rect>
                                                                <rect x="11" y="2" width="2" height="12" rx="1"
                                                                      fill="#DBD8E9"></rect>
                                                            </svg>
                                                            Beginner
                                                        </li>
                                                    </ul>
                                                    <div class="lh-1">
                        <span class="align-text-top">
                          <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor"
                               class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor"
                               class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor"
                               class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor"
                               class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor"
                               class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                        </span>
                                                        <span class="text-warning">4.1</span>
                                                        <span class="fs-6">(7.700)</span>
                                                    </div>
                                                </div>
                                                <!-- Card Footer -->
                                                <div class="card-footer">
                                                    <div class="row align-items-center g-0">
                                                        <div class="col-auto">
                                                            <img src="../assets/images/avatar/avatar-1.jpg"
                                                                 class="rounded-circle avatar-xs" alt="avatar">
                                                        </div>
                                                        <div class="col ms-2">
                                                            <span>Morris Mccoy</span>
                                                        </div>
                                                        <div class="col-auto">
                                                            <a href="#" class="text-reset bookmark">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                     height="16" fill="currentColor"
                                                                     class="bi bi-bookmarks text-gray-500"
                                                                     viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M2 4a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v11.5a.5.5 0 0 1-.777.416L7 13.101l-4.223 2.815A.5.5 0 0 1 2 15.5zm2-1a1 1 0 0 0-1 1v10.566l3.723-2.482a.5.5 0 0 1 .554 0L11 14.566V4a1 1 0 0 0-1-1z"></path>
                                                                    <path
                                                                        d="M4.268 1H12a1 1 0 0 1 1 1v11.768l.223.148A.5.5 0 0 0 14 13.5V2a2 2 0 0 0-2-2H6a2 2 0 0 0-1.732 1"></path>
                                                                </svg>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item tns-item tns-slide-cloned" aria-hidden="true" tabindex="-1">
                                            <div class="card border">
                                                <a href="#!">
                                                    <img src="../assets/images/course/course-python.jpg" alt="figma"
                                                         class="card-img-top img-fluid w-100">
                                                </a>
                                                <div class="card-body d-flex flex-column gap-2">
                                                    <h3 class="h4 mb-0"><a href="#!" class="text-inherit">The Python
                                                            Course: build web application</a></h3>
                                                    <ul class="mb-0 list-inline">
                                                        <li class="list-inline-item lh-1">
                          <span class="align-bottom">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                 class="bi bi-clock text-gray-400" viewBox="0 0 16 16">
                              <path
                                  d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"></path>
                              <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"></path>
                            </svg>
                          </span>
                                                            <span class="text-gray-500">2h 30m</span>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <svg class="me-1 mt-n1" width="16" height="16"
                                                                 viewBox="0 0 16 16" fill="none"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                <rect x="3" y="8" width="2" height="6" rx="1"
                                                                      fill="#754FFE"></rect>
                                                                <rect x="7" y="5" width="2" height="9" rx="1"
                                                                      fill="#754FFE"></rect>
                                                                <rect x="11" y="2" width="2" height="12" rx="1"
                                                                      fill="#DBD8E9"></rect>
                                                            </svg>
                                                            Intermediate
                                                        </li>
                                                    </ul>
                                                    <div class="lh-1">
                        <span class="align-text-top">
                          <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor"
                               class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor"
                               class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor"
                               class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor"
                               class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor"
                               class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                        </span>
                                                        <span class="text-warning">4.8</span>
                                                        <span class="fs-6">(13,245)</span>
                                                    </div>
                                                </div>
                                                <!-- Card Footer -->
                                                <div class="card-footer">
                                                    <div class="row align-items-center g-0">
                                                        <div class="col-auto">
                                                            <img src="../assets/images/avatar/avatar-8.jpg"
                                                                 class="rounded-circle avatar-xs" alt="avatar">
                                                        </div>
                                                        <div class="col ms-2">
                                                            <span>Claire Robertson</span>
                                                        </div>
                                                        <div class="col-auto">
                                                            <a href="#" class="text-reset bookmark">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                     height="16" fill="currentColor"
                                                                     class="bi bi-bookmarks text-gray-500"
                                                                     viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M2 4a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v11.5a.5.5 0 0 1-.777.416L7 13.101l-4.223 2.815A.5.5 0 0 1 2 15.5zm2-1a1 1 0 0 0-1 1v10.566l3.723-2.482a.5.5 0 0 1 .554 0L11 14.566V4a1 1 0 0 0-1-1z"></path>
                                                                    <path
                                                                        d="M4.268 1H12a1 1 0 0 1 1 1v11.768l.223.148A.5.5 0 0 0 14 13.5V2a2 2 0 0 0-2-2H6a2 2 0 0 0-1.732 1"></path>
                                                                </svg>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item tns-item tns-slide-cloned" aria-hidden="true" tabindex="-1">
                                            <div class="card border">
                                                <a href="#!">
                                                    <img src="../assets/images/course/course-graphql.jpg" alt="figma"
                                                         class="card-img-top img-fluid w-100">
                                                </a>
                                                <div class="card-body d-flex flex-column gap-2">
                                                    <h3 class="h4 mb-0"><a href="#!" class="text-inherit">GraphQL:
                                                            introduction to graphQL for beginners</a></h3>
                                                    <ul class="mb-0 list-inline">
                                                        <li class="list-inline-item lh-1">
                          <span class="align-bottom">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                 class="bi bi-clock text-gray-400" viewBox="0 0 16 16">
                              <path
                                  d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"></path>
                              <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"></path>
                            </svg>
                          </span>
                                                            <span class="text-gray-500">2h 46m</span>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <svg class="me-1 mt-n1" width="16" height="16"
                                                                 viewBox="0 0 16 16" fill="none"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                <rect x="3" y="8" width="2" height="6" rx="1"
                                                                      fill="#754FFE"></rect>
                                                                <rect x="7" y="5" width="2" height="9" rx="1"
                                                                      fill="#754FFE"></rect>
                                                                <rect x="11" y="2" width="2" height="12" rx="1"
                                                                      fill="#754FFE"></rect>
                                                            </svg>
                                                            Advance
                                                        </li>
                                                    </ul>
                                                    <div class="lh-1">
                        <span class="align-text-top">
                          <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor"
                               class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor"
                               class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor"
                               class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor"
                               class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor"
                               class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                        </span>
                                                        <span class="text-warning">4.6</span>
                                                        <span class="fs-6">(9,300)</span>
                                                    </div>
                                                </div>
                                                <!-- Card Footer -->
                                                <div class="card-footer">
                                                    <div class="row align-items-center g-0">
                                                        <div class="col-auto">
                                                            <img src="../assets/images/avatar/avatar-2.jpg"
                                                                 class="rounded-circle avatar-xs" alt="avatar">
                                                        </div>
                                                        <div class="col ms-2">
                                                            <span>Ted Hawkins</span>
                                                        </div>
                                                        <div class="col-auto">
                                                            <a href="#" class="text-reset bookmark">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                     height="16" fill="currentColor"
                                                                     class="bi bi-bookmarks text-gray-500"
                                                                     viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M2 4a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v11.5a.5.5 0 0 1-.777.416L7 13.101l-4.223 2.815A.5.5 0 0 1 2 15.5zm2-1a1 1 0 0 0-1 1v10.566l3.723-2.482a.5.5 0 0 1 .554 0L11 14.566V4a1 1 0 0 0-1-1z"></path>
                                                                    <path
                                                                        d="M4.268 1H12a1 1 0 0 1 1 1v11.768l.223.148A.5.5 0 0 0 14 13.5V2a2 2 0 0 0-2-2H6a2 2 0 0 0-1.732 1"></path>
                                                                </svg>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item tns-item" id="tns2-item0" aria-hidden="true" tabindex="-1">
                                            <div class="card border">
                                                <a href="#!">
                                                    <img src="../assets/images/course/course-angular.jpg" alt="figma"
                                                         class="card-img-top img-fluid w-100">
                                                </a>
                                                <div class="card-body d-flex flex-column gap-2">
                                                    <h3 class="h4 mb-0"><a href="#!" class="text-inherit">Angular - the
                                                            complete guide for beginner</a></h3>
                                                    <ul class="mb-0 list-inline">
                                                        <li class="list-inline-item lh-1">
                          <span class="align-bottom">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                 class="bi bi-clock text-gray-400" viewBox="0 0 16 16">
                              <path
                                  d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"></path>
                              <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"></path>
                            </svg>
                          </span>
                                                            <span class="text-gray-500">3h 56m</span>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <svg class="me-1 mt-n1" width="16" height="16"
                                                                 viewBox="0 0 16 16" fill="none"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                <rect x="3" y="8" width="2" height="6" rx="1"
                                                                      fill="#754FFE"></rect>
                                                                <rect x="7" y="5" width="2" height="9" rx="1"
                                                                      fill="#DBD8E9"></rect>
                                                                <rect x="11" y="2" width="2" height="12" rx="1"
                                                                      fill="#DBD8E9"></rect>
                                                            </svg>
                                                            <span class="text-gray-500">Beginner</span>
                                                        </li>
                                                    </ul>
                                                    <div class="lh-1">
                        <span class="align-text-top">
                          <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor"
                               class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor"
                               class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor"
                               class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor"
                               class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor"
                               class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                        </span>
                                                        <span class="text-warning">4.5</span>
                                                        <span class="fs-6">(8,890)</span>
                                                    </div>
                                                </div>
                                                <!-- Card Footer -->
                                                <div class="card-footer">
                                                    <div class="row align-items-center g-0">
                                                        <div class="col-auto">
                                                            <img src="../assets/images/avatar/avatar-6.jpg"
                                                                 class="rounded-circle avatar-xs" alt="avatar">
                                                        </div>
                                                        <div class="col ms-2">
                                                            <span>Juanita Bell</span>
                                                        </div>
                                                        <div class="col-auto">
                                                            <a href="#" class="text-reset bookmark">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                     height="16" fill="currentColor"
                                                                     class="bi bi-bookmarks text-gray-500"
                                                                     viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M2 4a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v11.5a.5.5 0 0 1-.777.416L7 13.101l-4.223 2.815A.5.5 0 0 1 2 15.5zm2-1a1 1 0 0 0-1 1v10.566l3.723-2.482a.5.5 0 0 1 .554 0L11 14.566V4a1 1 0 0 0-1-1z"></path>
                                                                    <path
                                                                        d="M4.268 1H12a1 1 0 0 1 1 1v11.768l.223.148A.5.5 0 0 0 14 13.5V2a2 2 0 0 0-2-2H6a2 2 0 0 0-1.732 1"></path>
                                                                </svg>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item tns-item" id="tns2-item1" aria-hidden="true" tabindex="-1">
                                            <div class="card border">
                                                <a href="#!">
                                                    <img src="../assets/images/course/course-python.jpg" alt="figma"
                                                         class="card-img-top img-fluid w-100">
                                                </a>
                                                <div class="card-body d-flex flex-column gap-2">
                                                    <h3 class="h4 mb-0"><a href="#!" class="text-inherit">The Python
                                                            Course: build web application</a></h3>
                                                    <ul class="mb-0 list-inline">
                                                        <li class="list-inline-item lh-1">
                          <span class="align-bottom">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                 class="bi bi-clock text-gray-400" viewBox="0 0 16 16">
                              <path
                                  d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"></path>
                              <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"></path>
                            </svg>
                          </span>
                                                            <span class="text-gray-500">2h 30m</span>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <svg class="me-1 mt-n1" width="16" height="16"
                                                                 viewBox="0 0 16 16" fill="none"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                <rect x="3" y="8" width="2" height="6" rx="1"
                                                                      fill="#754FFE"></rect>
                                                                <rect x="7" y="5" width="2" height="9" rx="1"
                                                                      fill="#754FFE"></rect>
                                                                <rect x="11" y="2" width="2" height="12" rx="1"
                                                                      fill="#DBD8E9"></rect>
                                                            </svg>
                                                            Intermediate
                                                        </li>
                                                    </ul>
                                                    <div class="lh-1">
                        <span class="align-text-top">
                          <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor"
                               class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor"
                               class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor"
                               class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor"
                               class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor"
                               class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                        </span>
                                                        <span class="text-warning">4.8</span>
                                                        <span class="fs-6">(13,245)</span>
                                                    </div>
                                                </div>
                                                <!-- Card Footer -->
                                                <div class="card-footer">
                                                    <div class="row align-items-center g-0">
                                                        <div class="col-auto">
                                                            <img src="../assets/images/avatar/avatar-8.jpg"
                                                                 class="rounded-circle avatar-xs" alt="avatar">
                                                        </div>
                                                        <div class="col ms-2">
                                                            <span>Claire Robertson</span>
                                                        </div>
                                                        <div class="col-auto">
                                                            <a href="#" class="text-reset bookmark">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                     height="16" fill="currentColor"
                                                                     class="bi bi-bookmarks text-gray-500"
                                                                     viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M2 4a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v11.5a.5.5 0 0 1-.777.416L7 13.101l-4.223 2.815A.5.5 0 0 1 2 15.5zm2-1a1 1 0 0 0-1 1v10.566l3.723-2.482a.5.5 0 0 1 .554 0L11 14.566V4a1 1 0 0 0-1-1z"></path>
                                                                    <path
                                                                        d="M4.268 1H12a1 1 0 0 1 1 1v11.768l.223.148A.5.5 0 0 0 14 13.5V2a2 2 0 0 0-2-2H6a2 2 0 0 0-1.732 1"></path>
                                                                </svg>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item tns-item" id="tns2-item2" aria-hidden="true" tabindex="-1">
                                            <div class="card border">
                                                <a href="#!">
                                                    <img src="../assets/images/course/course-graphql.jpg" alt="figma"
                                                         class="card-img-top img-fluid w-100">
                                                </a>
                                                <div class="card-body d-flex flex-column gap-2">
                                                    <h3 class="h4 mb-0"><a href="#!" class="text-inherit">GraphQL:
                                                            introduction to graphQL for beginners</a></h3>
                                                    <ul class="mb-0 list-inline">
                                                        <li class="list-inline-item lh-1">
                          <span class="align-bottom">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                 class="bi bi-clock text-gray-400" viewBox="0 0 16 16">
                              <path
                                  d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"></path>
                              <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"></path>
                            </svg>
                          </span>
                                                            <span class="text-gray-500">2h 46m</span>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <svg class="me-1 mt-n1" width="16" height="16"
                                                                 viewBox="0 0 16 16" fill="none"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                <rect x="3" y="8" width="2" height="6" rx="1"
                                                                      fill="#754FFE"></rect>
                                                                <rect x="7" y="5" width="2" height="9" rx="1"
                                                                      fill="#754FFE"></rect>
                                                                <rect x="11" y="2" width="2" height="12" rx="1"
                                                                      fill="#754FFE"></rect>
                                                            </svg>
                                                            Advance
                                                        </li>
                                                    </ul>
                                                    <div class="lh-1">
                        <span class="align-text-top">
                          <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor"
                               class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor"
                               class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor"
                               class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor"
                               class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor"
                               class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                        </span>
                                                        <span class="text-warning">4.6</span>
                                                        <span class="fs-6">(9,300)</span>
                                                    </div>
                                                </div>
                                                <!-- Card Footer -->
                                                <div class="card-footer">
                                                    <div class="row align-items-center g-0">
                                                        <div class="col-auto">
                                                            <img src="../assets/images/avatar/avatar-2.jpg"
                                                                 class="rounded-circle avatar-xs" alt="avatar">
                                                        </div>
                                                        <div class="col ms-2">
                                                            <span>Ted Hawkins</span>
                                                        </div>
                                                        <div class="col-auto">
                                                            <a href="#" class="text-reset bookmark">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                     height="16" fill="currentColor"
                                                                     class="bi bi-bookmarks text-gray-500"
                                                                     viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M2 4a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v11.5a.5.5 0 0 1-.777.416L7 13.101l-4.223 2.815A.5.5 0 0 1 2 15.5zm2-1a1 1 0 0 0-1 1v10.566l3.723-2.482a.5.5 0 0 1 .554 0L11 14.566V4a1 1 0 0 0-1-1z"></path>
                                                                    <path
                                                                        d="M4.268 1H12a1 1 0 0 1 1 1v11.768l.223.148A.5.5 0 0 0 14 13.5V2a2 2 0 0 0-2-2H6a2 2 0 0 0-1.732 1"></path>
                                                                </svg>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item tns-item" id="tns2-item3" aria-hidden="true" tabindex="-1">
                                            <div class="card border">
                                                <a href="#!">
                                                    <img src="../assets/images/course/course-wordpress.jpg" alt="figma"
                                                         class="card-img-top img-fluid w-100">
                                                </a>
                                                <div class="card-body d-flex flex-column gap-2">
                                                    <h3 class="h4 mb-0"><a href="#!" class="text-inherit">How to easily
                                                            create a website with React</a></h3>
                                                    <ul class="mb-0 list-inline">
                                                        <li class="list-inline-item lh-1">
                          <span class="align-bottom">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                 class="bi bi-clock text-gray-400" viewBox="0 0 16 16">
                              <path
                                  d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"></path>
                              <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"></path>
                            </svg>
                          </span>
                                                            <span class="text-gray-500">3h 56m</span>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <svg class="me-1 mt-n1" width="16" height="16"
                                                                 viewBox="0 0 16 16" fill="none"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                <rect x="3" y="8" width="2" height="6" rx="1"
                                                                      fill="#754FFE"></rect>
                                                                <rect x="7" y="5" width="2" height="9" rx="1"
                                                                      fill="#DBD8E9"></rect>
                                                                <rect x="11" y="2" width="2" height="12" rx="1"
                                                                      fill="#DBD8E9"></rect>
                                                            </svg>
                                                            Beginner
                                                        </li>
                                                    </ul>
                                                    <div class="lh-1">
                        <span class="align-text-top">
                          <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor"
                               class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor"
                               class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor"
                               class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor"
                               class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor"
                               class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                        </span>
                                                        <span class="text-warning">4.1</span>
                                                        <span class="fs-6">(7.700)</span>
                                                    </div>
                                                </div>
                                                <!-- Card Footer -->
                                                <div class="card-footer">
                                                    <div class="row align-items-center g-0">
                                                        <div class="col-auto">
                                                            <img src="../assets/images/avatar/avatar-1.jpg"
                                                                 class="rounded-circle avatar-xs" alt="avatar">
                                                        </div>
                                                        <div class="col ms-2">
                                                            <span>Morris Mccoy</span>
                                                        </div>
                                                        <div class="col-auto">
                                                            <a href="#" class="text-reset bookmark">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                     height="16" fill="currentColor"
                                                                     class="bi bi-bookmarks text-gray-500"
                                                                     viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M2 4a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v11.5a.5.5 0 0 1-.777.416L7 13.101l-4.223 2.815A.5.5 0 0 1 2 15.5zm2-1a1 1 0 0 0-1 1v10.566l3.723-2.482a.5.5 0 0 1 .554 0L11 14.566V4a1 1 0 0 0-1-1z"></path>
                                                                    <path
                                                                        d="M4.268 1H12a1 1 0 0 1 1 1v11.768l.223.148A.5.5 0 0 0 14 13.5V2a2 2 0 0 0-2-2H6a2 2 0 0 0-1.732 1"></path>
                                                                </svg>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="item tns-item" id="tns2-item4" aria-hidden="true" tabindex="-1">
                                            <div class="card border">
                                                <a href="#!">
                                                    <img src="../assets/images/course/course-angular.jpg" alt="figma"
                                                         class="card-img-top img-fluid w-100">
                                                </a>
                                                <div class="card-body d-flex flex-column gap-2">
                                                    <h3 class="h4 mb-0"><a href="#!" class="text-inherit">Angular - the
                                                            complete guide for beginner</a></h3>
                                                    <ul class="mb-0 list-inline">
                                                        <li class="list-inline-item lh-1">
                          <span class="align-bottom">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                 class="bi bi-clock text-gray-400" viewBox="0 0 16 16">
                              <path
                                  d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"></path>
                              <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"></path>
                            </svg>
                          </span>
                                                            <span class="text-gray-500">3h 56m</span>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <svg class="me-1 mt-n1" width="16" height="16"
                                                                 viewBox="0 0 16 16" fill="none"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                <rect x="3" y="8" width="2" height="6" rx="1"
                                                                      fill="#754FFE"></rect>
                                                                <rect x="7" y="5" width="2" height="9" rx="1"
                                                                      fill="#DBD8E9"></rect>
                                                                <rect x="11" y="2" width="2" height="12" rx="1"
                                                                      fill="#DBD8E9"></rect>
                                                            </svg>
                                                            <span class="text-gray-500">Beginner</span>
                                                        </li>
                                                    </ul>
                                                    <div class="lh-1">
                        <span class="align-text-top">
                          <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor"
                               class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor"
                               class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor"
                               class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor"
                               class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor"
                               class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                        </span>
                                                        <span class="text-warning">4.5</span>
                                                        <span class="fs-6">(8,890)</span>
                                                    </div>
                                                </div>
                                                <!-- Card Footer -->
                                                <div class="card-footer">
                                                    <div class="row align-items-center g-0">
                                                        <div class="col-auto">
                                                            <img src="../assets/images/avatar/avatar-6.jpg"
                                                                 class="rounded-circle avatar-xs" alt="avatar">
                                                        </div>
                                                        <div class="col ms-2">
                                                            <span>Juanita Bell</span>
                                                        </div>
                                                        <div class="col-auto">
                                                            <a href="#" class="text-reset bookmark">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                     height="16" fill="currentColor"
                                                                     class="bi bi-bookmarks text-gray-500"
                                                                     viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M2 4a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v11.5a.5.5 0 0 1-.777.416L7 13.101l-4.223 2.815A.5.5 0 0 1 2 15.5zm2-1a1 1 0 0 0-1 1v10.566l3.723-2.482a.5.5 0 0 1 .554 0L11 14.566V4a1 1 0 0 0-1-1z"></path>
                                                                    <path
                                                                        d="M4.268 1H12a1 1 0 0 1 1 1v11.768l.223.148A.5.5 0 0 0 14 13.5V2a2 2 0 0 0-2-2H6a2 2 0 0 0-1.732 1"></path>
                                                                </svg>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item tns-item" id="tns2-item5" aria-hidden="true" tabindex="-1">
                                            <div class="card border">
                                                <a href="#!">
                                                    <img src="../assets/images/course/course-wordpress.jpg" alt="figma"
                                                         class="card-img-top img-fluid w-100">
                                                </a>
                                                <div class="card-body d-flex flex-column gap-2">
                                                    <h3 class="h4 mb-0"><a href="#!" class="text-inherit">How to easily
                                                            create a website with React</a></h3>
                                                    <ul class="mb-0 list-inline">
                                                        <li class="list-inline-item lh-1">
                          <span class="align-bottom">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                 class="bi bi-clock text-gray-400" viewBox="0 0 16 16">
                              <path
                                  d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"></path>
                              <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"></path>
                            </svg>
                          </span>
                                                            <span class="text-gray-500">3h 56m</span>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <svg class="me-1 mt-n1" width="16" height="16"
                                                                 viewBox="0 0 16 16" fill="none"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                <rect x="3" y="8" width="2" height="6" rx="1"
                                                                      fill="#754FFE"></rect>
                                                                <rect x="7" y="5" width="2" height="9" rx="1"
                                                                      fill="#DBD8E9"></rect>
                                                                <rect x="11" y="2" width="2" height="12" rx="1"
                                                                      fill="#DBD8E9"></rect>
                                                            </svg>
                                                            Beginner
                                                        </li>
                                                    </ul>
                                                    <div class="lh-1">
                        <span class="align-text-top">
                          <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor"
                               class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor"
                               class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor"
                               class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor"
                               class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor"
                               class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                        </span>
                                                        <span class="text-warning">4.1</span>
                                                        <span class="fs-6">(7.700)</span>
                                                    </div>
                                                </div>
                                                <!-- Card Footer -->
                                                <div class="card-footer">
                                                    <div class="row align-items-center g-0">
                                                        <div class="col-auto">
                                                            <img src="../assets/images/avatar/avatar-1.jpg"
                                                                 class="rounded-circle avatar-xs" alt="avatar">
                                                        </div>
                                                        <div class="col ms-2">
                                                            <span>Morris Mccoy</span>
                                                        </div>
                                                        <div class="col-auto">
                                                            <a href="#" class="text-reset bookmark">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                     height="16" fill="currentColor"
                                                                     class="bi bi-bookmarks text-gray-500"
                                                                     viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M2 4a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v11.5a.5.5 0 0 1-.777.416L7 13.101l-4.223 2.815A.5.5 0 0 1 2 15.5zm2-1a1 1 0 0 0-1 1v10.566l3.723-2.482a.5.5 0 0 1 .554 0L11 14.566V4a1 1 0 0 0-1-1z"></path>
                                                                    <path
                                                                        d="M4.268 1H12a1 1 0 0 1 1 1v11.768l.223.148A.5.5 0 0 0 14 13.5V2a2 2 0 0 0-2-2H6a2 2 0 0 0-1.732 1"></path>
                                                                </svg>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item tns-item" id="tns2-item6" aria-hidden="true" tabindex="-1">
                                            <div class="card border">
                                                <a href="#!">
                                                    <img src="../assets/images/course/course-python.jpg" alt="figma"
                                                         class="card-img-top img-fluid w-100">
                                                </a>
                                                <div class="card-body d-flex flex-column gap-2">
                                                    <h3 class="h4 mb-0"><a href="#!" class="text-inherit">The Python
                                                            Course: build web application</a></h3>
                                                    <ul class="mb-0 list-inline">
                                                        <li class="list-inline-item lh-1">
                          <span class="align-bottom">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                 class="bi bi-clock text-gray-400" viewBox="0 0 16 16">
                              <path
                                  d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"></path>
                              <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"></path>
                            </svg>
                          </span>
                                                            <span class="text-gray-500">2h 30m</span>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <svg class="me-1 mt-n1" width="16" height="16"
                                                                 viewBox="0 0 16 16" fill="none"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                <rect x="3" y="8" width="2" height="6" rx="1"
                                                                      fill="#754FFE"></rect>
                                                                <rect x="7" y="5" width="2" height="9" rx="1"
                                                                      fill="#754FFE"></rect>
                                                                <rect x="11" y="2" width="2" height="12" rx="1"
                                                                      fill="#DBD8E9"></rect>
                                                            </svg>
                                                            Intermediate
                                                        </li>
                                                    </ul>
                                                    <div class="lh-1">
                        <span class="align-text-top">
                          <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor"
                               class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor"
                               class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor"
                               class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor"
                               class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor"
                               class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                        </span>
                                                        <span class="text-warning">4.8</span>
                                                        <span class="fs-6">(13,245)</span>
                                                    </div>
                                                </div>
                                                <!-- Card Footer -->
                                                <div class="card-footer">
                                                    <div class="row align-items-center g-0">
                                                        <div class="col-auto">
                                                            <img src="../assets/images/avatar/avatar-8.jpg"
                                                                 class="rounded-circle avatar-xs" alt="avatar">
                                                        </div>
                                                        <div class="col ms-2">
                                                            <span>Claire Robertson</span>
                                                        </div>
                                                        <div class="col-auto">
                                                            <a href="#" class="text-reset bookmark">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                     height="16" fill="currentColor"
                                                                     class="bi bi-bookmarks text-gray-500"
                                                                     viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M2 4a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v11.5a.5.5 0 0 1-.777.416L7 13.101l-4.223 2.815A.5.5 0 0 1 2 15.5zm2-1a1 1 0 0 0-1 1v10.566l3.723-2.482a.5.5 0 0 1 .554 0L11 14.566V4a1 1 0 0 0-1-1z"></path>
                                                                    <path
                                                                        d="M4.268 1H12a1 1 0 0 1 1 1v11.768l.223.148A.5.5 0 0 0 14 13.5V2a2 2 0 0 0-2-2H6a2 2 0 0 0-1.732 1"></path>
                                                                </svg>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item tns-item tns-slide-active" id="tns2-item7">
                                            <div class="card border">
                                                <a href="#!">
                                                    <img src="../assets/images/course/course-graphql.jpg" alt="figma"
                                                         class="card-img-top img-fluid w-100">
                                                </a>
                                                <div class="card-body d-flex flex-column gap-2">
                                                    <h3 class="h4 mb-0"><a href="#!" class="text-inherit">GraphQL:
                                                            introduction to graphQL for beginners</a></h3>
                                                    <ul class="mb-0 list-inline">
                                                        <li class="list-inline-item lh-1">
                          <span class="align-bottom">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                 class="bi bi-clock text-gray-400" viewBox="0 0 16 16">
                              <path
                                  d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"></path>
                              <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"></path>
                            </svg>
                          </span>
                                                            <span class="text-gray-500">2h 46m</span>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <svg class="me-1 mt-n1" width="16" height="16"
                                                                 viewBox="0 0 16 16" fill="none"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                <rect x="3" y="8" width="2" height="6" rx="1"
                                                                      fill="#754FFE"></rect>
                                                                <rect x="7" y="5" width="2" height="9" rx="1"
                                                                      fill="#754FFE"></rect>
                                                                <rect x="11" y="2" width="2" height="12" rx="1"
                                                                      fill="#754FFE"></rect>
                                                            </svg>
                                                            Advance
                                                        </li>
                                                    </ul>
                                                    <div class="lh-1">
                        <span class="align-text-top">
                          <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor"
                               class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor"
                               class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor"
                               class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor"
                               class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor"
                               class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                        </span>
                                                        <span class="text-warning">4.6</span>
                                                        <span class="fs-6">(9,300)</span>
                                                    </div>
                                                </div>
                                                <!-- Card Footer -->
                                                <div class="card-footer">
                                                    <div class="row align-items-center g-0">
                                                        <div class="col-auto">
                                                            <img src="../assets/images/avatar/avatar-2.jpg"
                                                                 class="rounded-circle avatar-xs" alt="avatar">
                                                        </div>
                                                        <div class="col ms-2">
                                                            <span>Ted Hawkins</span>
                                                        </div>
                                                        <div class="col-auto">
                                                            <a href="#" class="text-reset bookmark">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                     height="16" fill="currentColor"
                                                                     class="bi bi-bookmarks text-gray-500"
                                                                     viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M2 4a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v11.5a.5.5 0 0 1-.777.416L7 13.101l-4.223 2.815A.5.5 0 0 1 2 15.5zm2-1a1 1 0 0 0-1 1v10.566l3.723-2.482a.5.5 0 0 1 .554 0L11 14.566V4a1 1 0 0 0-1-1z"></path>
                                                                    <path
                                                                        d="M4.268 1H12a1 1 0 0 1 1 1v11.768l.223.148A.5.5 0 0 0 14 13.5V2a2 2 0 0 0-2-2H6a2 2 0 0 0-1.732 1"></path>
                                                                </svg>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item tns-item tns-slide-cloned tns-slide-active">
                                            <div class="card border">
                                                <a href="#!">
                                                    <img src="../assets/images/course/course-angular.jpg" alt="figma"
                                                         class="card-img-top img-fluid w-100">
                                                </a>
                                                <div class="card-body d-flex flex-column gap-2">
                                                    <h3 class="h4 mb-0"><a href="#!" class="text-inherit">Angular - the
                                                            complete guide for beginner</a></h3>
                                                    <ul class="mb-0 list-inline">
                                                        <li class="list-inline-item lh-1">
                          <span class="align-bottom">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                 class="bi bi-clock text-gray-400" viewBox="0 0 16 16">
                              <path
                                  d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"></path>
                              <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"></path>
                            </svg>
                          </span>
                                                            <span class="text-gray-500">3h 56m</span>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <svg class="me-1 mt-n1" width="16" height="16"
                                                                 viewBox="0 0 16 16" fill="none"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                <rect x="3" y="8" width="2" height="6" rx="1"
                                                                      fill="#754FFE"></rect>
                                                                <rect x="7" y="5" width="2" height="9" rx="1"
                                                                      fill="#DBD8E9"></rect>
                                                                <rect x="11" y="2" width="2" height="12" rx="1"
                                                                      fill="#DBD8E9"></rect>
                                                            </svg>
                                                            <span class="text-gray-500">Beginner</span>
                                                        </li>
                                                    </ul>
                                                    <div class="lh-1">
                        <span class="align-text-top">
                          <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor"
                               class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor"
                               class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor"
                               class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor"
                               class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor"
                               class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                        </span>
                                                        <span class="text-warning">4.5</span>
                                                        <span class="fs-6">(8,890)</span>
                                                    </div>
                                                </div>
                                                <!-- Card Footer -->
                                                <div class="card-footer">
                                                    <div class="row align-items-center g-0">
                                                        <div class="col-auto">
                                                            <img src="../assets/images/avatar/avatar-6.jpg"
                                                                 class="rounded-circle avatar-xs" alt="avatar">
                                                        </div>
                                                        <div class="col ms-2">
                                                            <span>Juanita Bell</span>
                                                        </div>
                                                        <div class="col-auto">
                                                            <a href="#" class="text-reset bookmark">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                     height="16" fill="currentColor"
                                                                     class="bi bi-bookmarks text-gray-500"
                                                                     viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M2 4a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v11.5a.5.5 0 0 1-.777.416L7 13.101l-4.223 2.815A.5.5 0 0 1 2 15.5zm2-1a1 1 0 0 0-1 1v10.566l3.723-2.482a.5.5 0 0 1 .554 0L11 14.566V4a1 1 0 0 0-1-1z"></path>
                                                                    <path
                                                                        d="M4.268 1H12a1 1 0 0 1 1 1v11.768l.223.148A.5.5 0 0 0 14 13.5V2a2 2 0 0 0-2-2H6a2 2 0 0 0-1.732 1"></path>
                                                                </svg>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item tns-item tns-slide-cloned tns-slide-active">
                                            <div class="card border">
                                                <a href="#!">
                                                    <img src="../assets/images/course/course-python.jpg" alt="figma"
                                                         class="card-img-top img-fluid w-100">
                                                </a>
                                                <div class="card-body d-flex flex-column gap-2">
                                                    <h3 class="h4 mb-0"><a href="#!" class="text-inherit">The Python
                                                            Course: build web application</a></h3>
                                                    <ul class="mb-0 list-inline">
                                                        <li class="list-inline-item lh-1">
                          <span class="align-bottom">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                 class="bi bi-clock text-gray-400" viewBox="0 0 16 16">
                              <path
                                  d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"></path>
                              <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"></path>
                            </svg>
                          </span>
                                                            <span class="text-gray-500">2h 30m</span>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <svg class="me-1 mt-n1" width="16" height="16"
                                                                 viewBox="0 0 16 16" fill="none"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                <rect x="3" y="8" width="2" height="6" rx="1"
                                                                      fill="#754FFE"></rect>
                                                                <rect x="7" y="5" width="2" height="9" rx="1"
                                                                      fill="#754FFE"></rect>
                                                                <rect x="11" y="2" width="2" height="12" rx="1"
                                                                      fill="#DBD8E9"></rect>
                                                            </svg>
                                                            Intermediate
                                                        </li>
                                                    </ul>
                                                    <div class="lh-1">
                        <span class="align-text-top">
                          <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor"
                               class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor"
                               class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor"
                               class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor"
                               class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor"
                               class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                        </span>
                                                        <span class="text-warning">4.8</span>
                                                        <span class="fs-6">(13,245)</span>
                                                    </div>
                                                </div>
                                                <!-- Card Footer -->
                                                <div class="card-footer">
                                                    <div class="row align-items-center g-0">
                                                        <div class="col-auto">
                                                            <img src="../assets/images/avatar/avatar-8.jpg"
                                                                 class="rounded-circle avatar-xs" alt="avatar">
                                                        </div>
                                                        <div class="col ms-2">
                                                            <span>Claire Robertson</span>
                                                        </div>
                                                        <div class="col-auto">
                                                            <a href="#" class="text-reset bookmark">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                     height="16" fill="currentColor"
                                                                     class="bi bi-bookmarks text-gray-500"
                                                                     viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M2 4a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v11.5a.5.5 0 0 1-.777.416L7 13.101l-4.223 2.815A.5.5 0 0 1 2 15.5zm2-1a1 1 0 0 0-1 1v10.566l3.723-2.482a.5.5 0 0 1 .554 0L11 14.566V4a1 1 0 0 0-1-1z"></path>
                                                                    <path
                                                                        d="M4.268 1H12a1 1 0 0 1 1 1v11.768l.223.148A.5.5 0 0 0 14 13.5V2a2 2 0 0 0-2-2H6a2 2 0 0 0-1.732 1"></path>
                                                                </svg>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item tns-item tns-slide-cloned tns-slide-active">
                                            <div class="card border">
                                                <a href="#!">
                                                    <img src="../assets/images/course/course-graphql.jpg" alt="figma"
                                                         class="card-img-top img-fluid w-100">
                                                </a>
                                                <div class="card-body d-flex flex-column gap-2">
                                                    <h3 class="h4 mb-0"><a href="#!" class="text-inherit">GraphQL:
                                                            introduction to graphQL for beginners</a></h3>
                                                    <ul class="mb-0 list-inline">
                                                        <li class="list-inline-item lh-1">
                          <span class="align-bottom">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                 class="bi bi-clock text-gray-400" viewBox="0 0 16 16">
                              <path
                                  d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"></path>
                              <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"></path>
                            </svg>
                          </span>
                                                            <span class="text-gray-500">2h 46m</span>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <svg class="me-1 mt-n1" width="16" height="16"
                                                                 viewBox="0 0 16 16" fill="none"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                <rect x="3" y="8" width="2" height="6" rx="1"
                                                                      fill="#754FFE"></rect>
                                                                <rect x="7" y="5" width="2" height="9" rx="1"
                                                                      fill="#754FFE"></rect>
                                                                <rect x="11" y="2" width="2" height="12" rx="1"
                                                                      fill="#754FFE"></rect>
                                                            </svg>
                                                            Advance
                                                        </li>
                                                    </ul>
                                                    <div class="lh-1">
                        <span class="align-text-top">
                          <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor"
                               class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor"
                               class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor"
                               class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor"
                               class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor"
                               class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                        </span>
                                                        <span class="text-warning">4.6</span>
                                                        <span class="fs-6">(9,300)</span>
                                                    </div>
                                                </div>
                                                <!-- Card Footer -->
                                                <div class="card-footer">
                                                    <div class="row align-items-center g-0">
                                                        <div class="col-auto">
                                                            <img src="../assets/images/avatar/avatar-2.jpg"
                                                                 class="rounded-circle avatar-xs" alt="avatar">
                                                        </div>
                                                        <div class="col ms-2">
                                                            <span>Ted Hawkins</span>
                                                        </div>
                                                        <div class="col-auto">
                                                            <a href="#" class="text-reset bookmark">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                     height="16" fill="currentColor"
                                                                     class="bi bi-bookmarks text-gray-500"
                                                                     viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M2 4a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v11.5a.5.5 0 0 1-.777.416L7 13.101l-4.223 2.815A.5.5 0 0 1 2 15.5zm2-1a1 1 0 0 0-1 1v10.566l3.723-2.482a.5.5 0 0 1 .554 0L11 14.566V4a1 1 0 0 0-1-1z"></path>
                                                                    <path
                                                                        d="M4.268 1H12a1 1 0 0 1 1 1v11.768l.223.148A.5.5 0 0 0 14 13.5V2a2 2 0 0 0-2-2H6a2 2 0 0 0-1.732 1"></path>
                                                                </svg>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item tns-item tns-slide-cloned" aria-hidden="true" tabindex="-1">
                                            <div class="card border">
                                                <a href="#!">
                                                    <img src="../assets/images/course/course-wordpress.jpg" alt="figma"
                                                         class="card-img-top img-fluid w-100">
                                                </a>
                                                <div class="card-body d-flex flex-column gap-2">
                                                    <h3 class="h4 mb-0"><a href="#!" class="text-inherit">How to easily
                                                            create a website with React</a></h3>
                                                    <ul class="mb-0 list-inline">
                                                        <li class="list-inline-item lh-1">
                          <span class="align-bottom">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                 class="bi bi-clock text-gray-400" viewBox="0 0 16 16">
                              <path
                                  d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"></path>
                              <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"></path>
                            </svg>
                          </span>
                                                            <span class="text-gray-500">3h 56m</span>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <svg class="me-1 mt-n1" width="16" height="16"
                                                                 viewBox="0 0 16 16" fill="none"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                <rect x="3" y="8" width="2" height="6" rx="1"
                                                                      fill="#754FFE"></rect>
                                                                <rect x="7" y="5" width="2" height="9" rx="1"
                                                                      fill="#DBD8E9"></rect>
                                                                <rect x="11" y="2" width="2" height="12" rx="1"
                                                                      fill="#DBD8E9"></rect>
                                                            </svg>
                                                            Beginner
                                                        </li>
                                                    </ul>
                                                    <div class="lh-1">
                        <span class="align-text-top">
                          <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor"
                               class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor"
                               class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor"
                               class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor"
                               class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor"
                               class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                        </span>
                                                        <span class="text-warning">4.1</span>
                                                        <span class="fs-6">(7.700)</span>
                                                    </div>
                                                </div>
                                                <!-- Card Footer -->
                                                <div class="card-footer">
                                                    <div class="row align-items-center g-0">
                                                        <div class="col-auto">
                                                            <img src="../assets/images/avatar/avatar-1.jpg"
                                                                 class="rounded-circle avatar-xs" alt="avatar">
                                                        </div>
                                                        <div class="col ms-2">
                                                            <span>Morris Mccoy</span>
                                                        </div>
                                                        <div class="col-auto">
                                                            <a href="#" class="text-reset bookmark">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                     height="16" fill="currentColor"
                                                                     class="bi bi-bookmarks text-gray-500"
                                                                     viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M2 4a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v11.5a.5.5 0 0 1-.777.416L7 13.101l-4.223 2.815A.5.5 0 0 1 2 15.5zm2-1a1 1 0 0 0-1 1v10.566l3.723-2.482a.5.5 0 0 1 .554 0L11 14.566V4a1 1 0 0 0-1-1z"></path>
                                                                    <path
                                                                        d="M4.268 1H12a1 1 0 0 1 1 1v11.768l.223.148A.5.5 0 0 0 14 13.5V2a2 2 0 0 0-2-2H6a2 2 0 0 0-1.732 1"></path>
                                                                </svg>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item tns-item tns-slide-cloned" aria-hidden="true" tabindex="-1">
                                            <div class="card border">
                                                <a href="#!">
                                                    <img src="../assets/images/course/course-angular.jpg" alt="figma"
                                                         class="card-img-top img-fluid w-100">
                                                </a>
                                                <div class="card-body d-flex flex-column gap-2">
                                                    <h3 class="h4 mb-0"><a href="#!" class="text-inherit">Angular - the
                                                            complete guide for beginner</a></h3>
                                                    <ul class="mb-0 list-inline">
                                                        <li class="list-inline-item lh-1">
                          <span class="align-bottom">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                 class="bi bi-clock text-gray-400" viewBox="0 0 16 16">
                              <path
                                  d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"></path>
                              <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"></path>
                            </svg>
                          </span>
                                                            <span class="text-gray-500">3h 56m</span>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <svg class="me-1 mt-n1" width="16" height="16"
                                                                 viewBox="0 0 16 16" fill="none"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                <rect x="3" y="8" width="2" height="6" rx="1"
                                                                      fill="#754FFE"></rect>
                                                                <rect x="7" y="5" width="2" height="9" rx="1"
                                                                      fill="#DBD8E9"></rect>
                                                                <rect x="11" y="2" width="2" height="12" rx="1"
                                                                      fill="#DBD8E9"></rect>
                                                            </svg>
                                                            <span class="text-gray-500">Beginner</span>
                                                        </li>
                                                    </ul>
                                                    <div class="lh-1">
                        <span class="align-text-top">
                          <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor"
                               class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor"
                               class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor"
                               class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor"
                               class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor"
                               class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                        </span>
                                                        <span class="text-warning">4.5</span>
                                                        <span class="fs-6">(8,890)</span>
                                                    </div>
                                                </div>
                                                <!-- Card Footer -->
                                                <div class="card-footer">
                                                    <div class="row align-items-center g-0">
                                                        <div class="col-auto">
                                                            <img src="../assets/images/avatar/avatar-6.jpg"
                                                                 class="rounded-circle avatar-xs" alt="avatar">
                                                        </div>
                                                        <div class="col ms-2">
                                                            <span>Juanita Bell</span>
                                                        </div>
                                                        <div class="col-auto">
                                                            <a href="#" class="text-reset bookmark">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                     height="16" fill="currentColor"
                                                                     class="bi bi-bookmarks text-gray-500"
                                                                     viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M2 4a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v11.5a.5.5 0 0 1-.777.416L7 13.101l-4.223 2.815A.5.5 0 0 1 2 15.5zm2-1a1 1 0 0 0-1 1v10.566l3.723-2.482a.5.5 0 0 1 .554 0L11 14.566V4a1 1 0 0 0-1-1z"></path>
                                                                    <path
                                                                        d="M4.268 1H12a1 1 0 0 1 1 1v11.768l.223.148A.5.5 0 0 0 14 13.5V2a2 2 0 0 0-2-2H6a2 2 0 0 0-1.732 1"></path>
                                                                </svg>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item tns-item tns-slide-cloned" aria-hidden="true" tabindex="-1">
                                            <div class="card border">
                                                <a href="#!">
                                                    <img src="../assets/images/course/course-wordpress.jpg" alt="figma"
                                                         class="card-img-top img-fluid w-100">
                                                </a>
                                                <div class="card-body d-flex flex-column gap-2">
                                                    <h3 class="h4 mb-0"><a href="#!" class="text-inherit">How to easily
                                                            create a website with React</a></h3>
                                                    <ul class="mb-0 list-inline">
                                                        <li class="list-inline-item lh-1">
                          <span class="align-bottom">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                 class="bi bi-clock text-gray-400" viewBox="0 0 16 16">
                              <path
                                  d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"></path>
                              <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"></path>
                            </svg>
                          </span>
                                                            <span class="text-gray-500">3h 56m</span>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <svg class="me-1 mt-n1" width="16" height="16"
                                                                 viewBox="0 0 16 16" fill="none"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                <rect x="3" y="8" width="2" height="6" rx="1"
                                                                      fill="#754FFE"></rect>
                                                                <rect x="7" y="5" width="2" height="9" rx="1"
                                                                      fill="#DBD8E9"></rect>
                                                                <rect x="11" y="2" width="2" height="12" rx="1"
                                                                      fill="#DBD8E9"></rect>
                                                            </svg>
                                                            Beginner
                                                        </li>
                                                    </ul>
                                                    <div class="lh-1">
                        <span class="align-text-top">
                          <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor"
                               class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor"
                               class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor"
                               class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor"
                               class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor"
                               class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                        </span>
                                                        <span class="text-warning">4.1</span>
                                                        <span class="fs-6">(7.700)</span>
                                                    </div>
                                                </div>
                                                <!-- Card Footer -->
                                                <div class="card-footer">
                                                    <div class="row align-items-center g-0">
                                                        <div class="col-auto">
                                                            <img src="../assets/images/avatar/avatar-1.jpg"
                                                                 class="rounded-circle avatar-xs" alt="avatar">
                                                        </div>
                                                        <div class="col ms-2">
                                                            <span>Morris Mccoy</span>
                                                        </div>
                                                        <div class="col-auto">
                                                            <a href="#" class="text-reset bookmark">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                     height="16" fill="currentColor"
                                                                     class="bi bi-bookmarks text-gray-500"
                                                                     viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M2 4a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v11.5a.5.5 0 0 1-.777.416L7 13.101l-4.223 2.815A.5.5 0 0 1 2 15.5zm2-1a1 1 0 0 0-1 1v10.566l3.723-2.482a.5.5 0 0 1 .554 0L11 14.566V4a1 1 0 0 0-1-1z"></path>
                                                                    <path
                                                                        d="M4.268 1H12a1 1 0 0 1 1 1v11.768l.223.148A.5.5 0 0 0 14 13.5V2a2 2 0 0 0-2-2H6a2 2 0 0 0-1.732 1"></path>
                                                                </svg>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

<?php
    $hideFooter = true;
?>
