@extends('layouts.admin')

@section('content')
    <main>
        <section class="py-4 py-lg-6 bg-primary">
            <div class="container">
                <div class="row">
                    <div class="offset-lg-1 col-lg-10 col-md-12 col-12">
                        <div class="d-lg-flex align-items-center justify-content-between">
                            <!-- Content -->
                            <div class="mb-4 mb-lg-0">
                                <h1 class="text-white mb-1">Add New Course</h1>
                                <p class="mb-0 text-white lead">Just fill the form and create your courses.</p>
                            </div>
                            <div>
                                <a href="instructor-courses.html" class="btn btn-white">Back to Course</a>
                                <a href="instructor-courses.html" class="btn btn-dark">Save</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Page Content -->
        <section class="pb-8">
            <div class="container">
                <div id="courseForm" class="bs-stepper">
                    <div class="row">
                        <div class="offset-lg-1 col-lg-10 col-md-12 col-12">
                            <!-- Stepper Button -->
                            <div class="bs-stepper-header shadow-sm" role="tablist">
                                <div class="step active" data-target="#test-l-1">
                                    <span class="bs-stepper-circle">1</span>
                                    <span class="bs-stepper-label">Basic Information</span>
                                </div>
                                <div class="bs-stepper-line"></div>
                                <div class="step" data-target="#test-l-2">
                                    <span class="bs-stepper-circle">2</span>
                                    <span class="bs-stepper-label">Courses Media</span>
                                </div>
                                <div class="bs-stepper-line"></div>
                                <div class="step" data-target="#test-l-3">
                                    <span class="bs-stepper-circle">3</span>
                                    <span class="bs-stepper-label">Curriculum</span>
                                </div>
                                <div class="bs-stepper-line"></div>
                                <div class="step" data-target="#test-l-4">
                                    <span class="bs-stepper-circle">4</span>
                                    <span class="bs-stepper-label">Settings</span>
                                </div>
                            </div>
                            <!-- Stepper content -->
                            <div class="bs-stepper-content mt-5">
                                <form onsubmit="return false">
                                    <!-- Content one -->
                                    <div id="test-l-1" role="tabpanel" class="bs-stepper-pane fade active dstepper-block" aria-labelledby="courseFormtrigger1">
                                        <!-- Card -->
                                        <div class="card mb-3">
                                            <div class="card-header border-bottom px-4 py-3">
                                                <h4 class="mb-0">Basic Information</h4>
                                            </div>
                                            <!-- Card body -->
                                            <div class="card-body">
                                                <div class="mb-3">
                                                    <label for="addCourseTitle" class="form-label">Course Title</label>
                                                    <input id="addCourseTitle" name="addCourseTitle" class="form-control" type="text" placeholder="Course Title ">
                                                    <small>Write a 60 character course title.</small>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label" for="addCourseCategory">Courses category</label>
                                                    <div class="choices" data-type="select-one" tabindex="0" role="listbox" aria-haspopup="true" aria-expanded="false"><div class="choices__inner"><select class="form-select choices__input" data-choices="" id="addCourseCategory" name="addCourseCategory" hidden="" tabindex="-1" data-choice="active"><option value="" data-custom-properties="[object Object]">Select category</option></select><div class="choices__list choices__list--single"><div class="choices__item choices__placeholder choices__item--selectable" data-item="" data-id="1" data-value="" data-custom-properties="[object Object]" aria-selected="true">Select category</div></div></div><div class="choices__list choices__list--dropdown" aria-expanded="false"><div class="choices__list" role="listbox"><div id="choices--addCourseCategory-item-choice-5" class="choices__item choices__item--choice is-selected choices__placeholder choices__item--selectable is-highlighted" role="option" data-choice="" data-id="5" data-value="" data-select-text="" data-choice-selectable="" aria-selected="true">Select category</div><div id="choices--addCourseCategory-item-choice-1" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="1" data-value="Gulp" data-select-text="" data-choice-selectable="">Gulp js</div><div id="choices--addCourseCategory-item-choice-2" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="2" data-value="HTML" data-select-text="" data-choice-selectable="">HTML</div><div id="choices--addCourseCategory-item-choice-3" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="3" data-value="Javascript" data-select-text="" data-choice-selectable="">Javascript</div><div id="choices--addCourseCategory-item-choice-4" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="4" data-value="React" data-select-text="" data-choice-selectable="">React</div><div id="choices--addCourseCategory-item-choice-6" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="6" data-value="Vue" data-select-text="" data-choice-selectable="">Vue js</div></div></div></div>
                                                    <small>Help people find your courses by choosing categories that represent your
                                                        course.</small>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label" for="addCourseLevel">Courses level</label>
                                                    <div class="choices" data-type="select-one" tabindex="0" role="listbox" aria-haspopup="true" aria-expanded="false"><div class="choices__inner"><select class="form-select choices__input" data-choices="" id="addCourseLevel" name="addCourseLevel" hidden="" tabindex="-1" data-choice="active"><option value="" data-custom-properties="[object Object]">Select level</option></select><div class="choices__list choices__list--single"><div class="choices__item choices__placeholder choices__item--selectable" data-item="" data-id="1" data-value="" data-custom-properties="[object Object]" aria-selected="true">Select level</div></div></div><div class="choices__list choices__list--dropdown" aria-expanded="false"><div class="choices__list" role="listbox"><div id="choices--addCourseLevel-item-choice-4" class="choices__item choices__item--choice is-selected choices__placeholder choices__item--selectable is-highlighted" role="option" data-choice="" data-id="4" data-value="" data-select-text="" data-choice-selectable="" aria-selected="true">Select level</div><div id="choices--addCourseLevel-item-choice-1" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="1" data-value="Advance" data-select-text="" data-choice-selectable="">Advance</div><div id="choices--addCourseLevel-item-choice-2" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="2" data-value="Beignners" data-select-text="" data-choice-selectable="">Beignners</div><div id="choices--addCourseLevel-item-choice-3" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="3" data-value="intermediate" data-select-text="" data-choice-selectable="">Intermediate</div></div></div></div>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">Course Description</label>
                                                    <div role="toolbar" class="ql-toolbar ql-snow"><span class="ql-formats"><span class="ql-header ql-picker"><span class="ql-picker-label" tabindex="0" role="button" aria-expanded="false" aria-controls="ql-picker-options-0"><svg viewBox="0 0 18 18"><polygon class="ql-stroke" points="7 11 9 13 11 11 7 11"></polygon><polygon class="ql-stroke" points="7 7 9 5 11 7 7 7"></polygon></svg></span><span class="ql-picker-options" aria-hidden="true" tabindex="-1" id="ql-picker-options-0"><span tabindex="0" role="button" class="ql-picker-item" data-value="1"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="2"></span><span tabindex="0" role="button" class="ql-picker-item"></span></span></span><select class="ql-header" style="display: none;"><option value="1"></option><option value="2"></option><option selected="selected"></option></select></span><span class="ql-formats"><span class="ql-font ql-picker"><span class="ql-picker-label" tabindex="0" role="button" aria-expanded="false" aria-controls="ql-picker-options-1"><svg viewBox="0 0 18 18"><polygon class="ql-stroke" points="7 11 9 13 11 11 7 11"></polygon><polygon class="ql-stroke" points="7 7 9 5 11 7 7 7"></polygon></svg></span><span class="ql-picker-options" aria-hidden="true" tabindex="-1" id="ql-picker-options-1"><span tabindex="0" role="button" class="ql-picker-item"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="serif"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="monospace"></span></span></span><select class="ql-font" style="display: none;"><option selected="selected"></option><option value="serif"></option><option value="monospace"></option></select></span><span class="ql-formats"><button type="button" class="ql-bold" aria-pressed="false" aria-label="bold"><svg viewBox="0 0 18 18"><path class="ql-stroke" d="M5,4H9.5A2.5,2.5,0,0,1,12,6.5v0A2.5,2.5,0,0,1,9.5,9H5A0,0,0,0,1,5,9V4A0,0,0,0,1,5,4Z"></path><path class="ql-stroke" d="M5,9h5.5A2.5,2.5,0,0,1,13,11.5v0A2.5,2.5,0,0,1,10.5,14H5a0,0,0,0,1,0,0V9A0,0,0,0,1,5,9Z"></path></svg></button><button type="button" class="ql-italic" aria-pressed="false" aria-label="italic"><svg viewBox="0 0 18 18"><line class="ql-stroke" x1="7" x2="13" y1="4" y2="4"></line><line class="ql-stroke" x1="5" x2="11" y1="14" y2="14"></line><line class="ql-stroke" x1="8" x2="10" y1="14" y2="4"></line></svg></button><button type="button" class="ql-underline" aria-pressed="false" aria-label="underline"><svg viewBox="0 0 18 18"><path class="ql-stroke" d="M5,3V9a4.012,4.012,0,0,0,4,4H9a4.012,4.012,0,0,0,4-4V3"></path><rect class="ql-fill" height="1" rx="0.5" ry="0.5" width="12" x="3" y="15"></rect></svg></button><button type="button" class="ql-strike" aria-pressed="false" aria-label="strike"><svg viewBox="0 0 18 18"><line class="ql-stroke ql-thin" x1="15.5" x2="2.5" y1="8.5" y2="9.5"></line><path class="ql-fill" d="M9.007,8C6.542,7.791,6,7.519,6,6.5,6,5.792,7.283,5,9,5c1.571,0,2.765.679,2.969,1.309a1,1,0,0,0,1.9-.617C13.356,4.106,11.354,3,9,3,6.2,3,4,4.538,4,6.5a3.2,3.2,0,0,0,.5,1.843Z"></path><path class="ql-fill" d="M8.984,10C11.457,10.208,12,10.479,12,11.5c0,0.708-1.283,1.5-3,1.5-1.571,0-2.765-.679-2.969-1.309a1,1,0,1,0-1.9.617C4.644,13.894,6.646,15,9,15c2.8,0,5-1.538,5-3.5a3.2,3.2,0,0,0-.5-1.843Z"></path></svg></button></span><span class="ql-formats"><span class="ql-size ql-picker"><span class="ql-picker-label" tabindex="0" role="button" aria-expanded="false" aria-controls="ql-picker-options-2"><svg viewBox="0 0 18 18"><polygon class="ql-stroke" points="7 11 9 13 11 11 7 11"></polygon><polygon class="ql-stroke" points="7 7 9 5 11 7 7 7"></polygon></svg></span><span class="ql-picker-options" aria-hidden="true" tabindex="-1" id="ql-picker-options-2"><span tabindex="0" role="button" class="ql-picker-item" data-value="small"></span><span tabindex="0" role="button" class="ql-picker-item"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="large"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="huge"></span></span></span><select class="ql-size" style="display: none;"><option value="small"></option><option selected="selected"></option><option value="large"></option><option value="huge"></option></select></span><span class="ql-formats"><button type="button" class="ql-list" aria-pressed="false" value="ordered" aria-label="list: ordered"><svg viewBox="0 0 18 18"><line class="ql-stroke" x1="7" x2="15" y1="4" y2="4"></line><line class="ql-stroke" x1="7" x2="15" y1="9" y2="9"></line><line class="ql-stroke" x1="7" x2="15" y1="14" y2="14"></line><line class="ql-stroke ql-thin" x1="2.5" x2="4.5" y1="5.5" y2="5.5"></line><path class="ql-fill" d="M3.5,6A0.5,0.5,0,0,1,3,5.5V3.085l-0.276.138A0.5,0.5,0,0,1,2.053,3c-0.124-.247-0.023-0.324.224-0.447l1-.5A0.5,0.5,0,0,1,4,2.5v3A0.5,0.5,0,0,1,3.5,6Z"></path><path class="ql-stroke ql-thin" d="M4.5,10.5h-2c0-.234,1.85-1.076,1.85-2.234A0.959,0.959,0,0,0,2.5,8.156"></path><path class="ql-stroke ql-thin" d="M2.5,14.846a0.959,0.959,0,0,0,1.85-.109A0.7,0.7,0,0,0,3.75,14a0.688,0.688,0,0,0,.6-0.736,0.959,0.959,0,0,0-1.85-.109"></path></svg></button><button type="button" class="ql-list" aria-pressed="false" value="bullet" aria-label="list: bullet"><svg viewBox="0 0 18 18"><line class="ql-stroke" x1="6" x2="15" y1="4" y2="4"></line><line class="ql-stroke" x1="6" x2="15" y1="9" y2="9"></line><line class="ql-stroke" x1="6" x2="15" y1="14" y2="14"></line><line class="ql-stroke" x1="3" x2="3" y1="4" y2="4"></line><line class="ql-stroke" x1="3" x2="3" y1="9" y2="9"></line><line class="ql-stroke" x1="3" x2="3" y1="14" y2="14"></line></svg></button></span><span class="ql-formats"><span class="ql-color ql-picker ql-color-picker"><span class="ql-picker-label" tabindex="0" role="button" aria-expanded="false" aria-controls="ql-picker-options-3"><svg viewBox="0 0 18 18"><line class="ql-color-label ql-stroke ql-transparent" x1="3" x2="15" y1="15" y2="15"></line><polyline class="ql-stroke" points="5.5 11 9 3 12.5 11"></polyline><line class="ql-stroke" x1="11.63" x2="6.38" y1="9" y2="9"></line></svg></span><span class="ql-picker-options" aria-hidden="true" tabindex="-1" id="ql-picker-options-3"><span tabindex="0" role="button" class="ql-picker-item ql-primary"></span><span tabindex="0" role="button" class="ql-picker-item ql-primary" data-value="#e60000" style="background-color: rgb(230, 0, 0);"></span><span tabindex="0" role="button" class="ql-picker-item ql-primary" data-value="#ff9900" style="background-color: rgb(255, 153, 0);"></span><span tabindex="0" role="button" class="ql-picker-item ql-primary" data-value="#ffff00" style="background-color: rgb(255, 255, 0);"></span><span tabindex="0" role="button" class="ql-picker-item ql-primary" data-value="#008a00" style="background-color: rgb(0, 138, 0);"></span><span tabindex="0" role="button" class="ql-picker-item ql-primary" data-value="#0066cc" style="background-color: rgb(0, 102, 204);"></span><span tabindex="0" role="button" class="ql-picker-item ql-primary" data-value="#9933ff" style="background-color: rgb(153, 51, 255);"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#ffffff" style="background-color: rgb(255, 255, 255);"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#facccc" style="background-color: rgb(250, 204, 204);"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#ffebcc" style="background-color: rgb(255, 235, 204);"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#ffffcc" style="background-color: rgb(255, 255, 204);"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#cce8cc" style="background-color: rgb(204, 232, 204);"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#cce0f5" style="background-color: rgb(204, 224, 245);"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#ebd6ff" style="background-color: rgb(235, 214, 255);"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#bbbbbb" style="background-color: rgb(187, 187, 187);"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#f06666" style="background-color: rgb(240, 102, 102);"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#ffc266" style="background-color: rgb(255, 194, 102);"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#ffff66" style="background-color: rgb(255, 255, 102);"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#66b966" style="background-color: rgb(102, 185, 102);"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#66a3e0" style="background-color: rgb(102, 163, 224);"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#c285ff" style="background-color: rgb(194, 133, 255);"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#888888" style="background-color: rgb(136, 136, 136);"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#a10000" style="background-color: rgb(161, 0, 0);"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#b26b00" style="background-color: rgb(178, 107, 0);"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#b2b200" style="background-color: rgb(178, 178, 0);"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#006100" style="background-color: rgb(0, 97, 0);"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#0047b2" style="background-color: rgb(0, 71, 178);"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#6b24b2" style="background-color: rgb(107, 36, 178);"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#444444" style="background-color: rgb(68, 68, 68);"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#5c0000" style="background-color: rgb(92, 0, 0);"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#663d00" style="background-color: rgb(102, 61, 0);"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#666600" style="background-color: rgb(102, 102, 0);"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#003700" style="background-color: rgb(0, 55, 0);"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#002966" style="background-color: rgb(0, 41, 102);"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#3d1466" style="background-color: rgb(61, 20, 102);"></span></span></span><select class="ql-color" style="display: none;"><option selected="selected"></option><option value="#e60000"></option><option value="#ff9900"></option><option value="#ffff00"></option><option value="#008a00"></option><option value="#0066cc"></option><option value="#9933ff"></option><option value="#ffffff"></option><option value="#facccc"></option><option value="#ffebcc"></option><option value="#ffffcc"></option><option value="#cce8cc"></option><option value="#cce0f5"></option><option value="#ebd6ff"></option><option value="#bbbbbb"></option><option value="#f06666"></option><option value="#ffc266"></option><option value="#ffff66"></option><option value="#66b966"></option><option value="#66a3e0"></option><option value="#c285ff"></option><option value="#888888"></option><option value="#a10000"></option><option value="#b26b00"></option><option value="#b2b200"></option><option value="#006100"></option><option value="#0047b2"></option><option value="#6b24b2"></option><option value="#444444"></option><option value="#5c0000"></option><option value="#663d00"></option><option value="#666600"></option><option value="#003700"></option><option value="#002966"></option><option value="#3d1466"></option></select><span class="ql-background ql-picker ql-color-picker"><span class="ql-picker-label" tabindex="0" role="button" aria-expanded="false" aria-controls="ql-picker-options-4"><svg viewBox="0 0 18 18"><g class="ql-fill ql-color-label"><polygon points="6 6.868 6 6 5 6 5 7 5.942 7 6 6.868"></polygon><rect height="1" width="1" x="4" y="4"></rect><polygon points="6.817 5 6 5 6 6 6.38 6 6.817 5"></polygon><rect height="1" width="1" x="2" y="6"></rect><rect height="1" width="1" x="3" y="5"></rect><rect height="1" width="1" x="4" y="7"></rect><polygon points="4 11.439 4 11 3 11 3 12 3.755 12 4 11.439"></polygon><rect height="1" width="1" x="2" y="12"></rect><rect height="1" width="1" x="2" y="9"></rect><rect height="1" width="1" x="2" y="15"></rect><polygon points="4.63 10 4 10 4 11 4.192 11 4.63 10"></polygon><rect height="1" width="1" x="3" y="8"></rect><path d="M10.832,4.2L11,4.582V4H10.708A1.948,1.948,0,0,1,10.832,4.2Z"></path><path d="M7,4.582L7.168,4.2A1.929,1.929,0,0,1,7.292,4H7V4.582Z"></path><path d="M8,13H7.683l-0.351.8a1.933,1.933,0,0,1-.124.2H8V13Z"></path><rect height="1" width="1" x="12" y="2"></rect><rect height="1" width="1" x="11" y="3"></rect><path d="M9,3H8V3.282A1.985,1.985,0,0,1,9,3Z"></path><rect height="1" width="1" x="2" y="3"></rect><rect height="1" width="1" x="6" y="2"></rect><rect height="1" width="1" x="3" y="2"></rect><rect height="1" width="1" x="5" y="3"></rect><rect height="1" width="1" x="9" y="2"></rect><rect height="1" width="1" x="15" y="14"></rect><polygon points="13.447 10.174 13.469 10.225 13.472 10.232 13.808 11 14 11 14 10 13.37 10 13.447 10.174"></polygon><rect height="1" width="1" x="13" y="7"></rect><rect height="1" width="1" x="15" y="5"></rect><rect height="1" width="1" x="14" y="6"></rect><rect height="1" width="1" x="15" y="8"></rect><rect height="1" width="1" x="14" y="9"></rect><path d="M3.775,14H3v1H4V14.314A1.97,1.97,0,0,1,3.775,14Z"></path><rect height="1" width="1" x="14" y="3"></rect><polygon points="12 6.868 12 6 11.62 6 12 6.868"></polygon><rect height="1" width="1" x="15" y="2"></rect><rect height="1" width="1" x="12" y="5"></rect><rect height="1" width="1" x="13" y="4"></rect><polygon points="12.933 9 13 9 13 8 12.495 8 12.933 9"></polygon><rect height="1" width="1" x="9" y="14"></rect><rect height="1" width="1" x="8" y="15"></rect><path d="M6,14.926V15H7V14.316A1.993,1.993,0,0,1,6,14.926Z"></path><rect height="1" width="1" x="5" y="15"></rect><path d="M10.668,13.8L10.317,13H10v1h0.792A1.947,1.947,0,0,1,10.668,13.8Z"></path><rect height="1" width="1" x="11" y="15"></rect><path d="M14.332,12.2a1.99,1.99,0,0,1,.166.8H15V12H14.245Z"></path><rect height="1" width="1" x="14" y="15"></rect><rect height="1" width="1" x="15" y="11"></rect></g><polyline class="ql-stroke" points="5.5 13 9 5 12.5 13"></polyline><line class="ql-stroke" x1="11.63" x2="6.38" y1="11" y2="11"></line></svg></span><span class="ql-picker-options" aria-hidden="true" tabindex="-1" id="ql-picker-options-4"><span tabindex="0" role="button" class="ql-picker-item ql-primary" data-value="#000000" style="background-color: rgb(0, 0, 0);"></span><span tabindex="0" role="button" class="ql-picker-item ql-primary" data-value="#e60000" style="background-color: rgb(230, 0, 0);"></span><span tabindex="0" role="button" class="ql-picker-item ql-primary" data-value="#ff9900" style="background-color: rgb(255, 153, 0);"></span><span tabindex="0" role="button" class="ql-picker-item ql-primary" data-value="#ffff00" style="background-color: rgb(255, 255, 0);"></span><span tabindex="0" role="button" class="ql-picker-item ql-primary" data-value="#008a00" style="background-color: rgb(0, 138, 0);"></span><span tabindex="0" role="button" class="ql-picker-item ql-primary" data-value="#0066cc" style="background-color: rgb(0, 102, 204);"></span><span tabindex="0" role="button" class="ql-picker-item ql-primary" data-value="#9933ff" style="background-color: rgb(153, 51, 255);"></span><span tabindex="0" role="button" class="ql-picker-item"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#facccc" style="background-color: rgb(250, 204, 204);"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#ffebcc" style="background-color: rgb(255, 235, 204);"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#ffffcc" style="background-color: rgb(255, 255, 204);"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#cce8cc" style="background-color: rgb(204, 232, 204);"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#cce0f5" style="background-color: rgb(204, 224, 245);"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#ebd6ff" style="background-color: rgb(235, 214, 255);"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#bbbbbb" style="background-color: rgb(187, 187, 187);"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#f06666" style="background-color: rgb(240, 102, 102);"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#ffc266" style="background-color: rgb(255, 194, 102);"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#ffff66" style="background-color: rgb(255, 255, 102);"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#66b966" style="background-color: rgb(102, 185, 102);"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#66a3e0" style="background-color: rgb(102, 163, 224);"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#c285ff" style="background-color: rgb(194, 133, 255);"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#888888" style="background-color: rgb(136, 136, 136);"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#a10000" style="background-color: rgb(161, 0, 0);"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#b26b00" style="background-color: rgb(178, 107, 0);"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#b2b200" style="background-color: rgb(178, 178, 0);"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#006100" style="background-color: rgb(0, 97, 0);"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#0047b2" style="background-color: rgb(0, 71, 178);"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#6b24b2" style="background-color: rgb(107, 36, 178);"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#444444" style="background-color: rgb(68, 68, 68);"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#5c0000" style="background-color: rgb(92, 0, 0);"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#663d00" style="background-color: rgb(102, 61, 0);"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#666600" style="background-color: rgb(102, 102, 0);"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#003700" style="background-color: rgb(0, 55, 0);"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#002966" style="background-color: rgb(0, 41, 102);"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#3d1466" style="background-color: rgb(61, 20, 102);"></span></span></span><select class="ql-background" style="display: none;"><option value="#000000"></option><option value="#e60000"></option><option value="#ff9900"></option><option value="#ffff00"></option><option value="#008a00"></option><option value="#0066cc"></option><option value="#9933ff"></option><option selected="selected"></option><option value="#facccc"></option><option value="#ffebcc"></option><option value="#ffffcc"></option><option value="#cce8cc"></option><option value="#cce0f5"></option><option value="#ebd6ff"></option><option value="#bbbbbb"></option><option value="#f06666"></option><option value="#ffc266"></option><option value="#ffff66"></option><option value="#66b966"></option><option value="#66a3e0"></option><option value="#c285ff"></option><option value="#888888"></option><option value="#a10000"></option><option value="#b26b00"></option><option value="#b2b200"></option><option value="#006100"></option><option value="#0047b2"></option><option value="#6b24b2"></option><option value="#444444"></option><option value="#5c0000"></option><option value="#663d00"></option><option value="#666600"></option><option value="#003700"></option><option value="#002966"></option><option value="#3d1466"></option></select><span class="ql-align ql-picker ql-icon-picker"><span class="ql-picker-label" tabindex="0" role="button" aria-expanded="false" aria-controls="ql-picker-options-5"><svg viewBox="0 0 18 18"><line class="ql-stroke" x1="3" x2="15" y1="9" y2="9"></line><line class="ql-stroke" x1="3" x2="13" y1="14" y2="14"></line><line class="ql-stroke" x1="3" x2="9" y1="4" y2="4"></line></svg></span><span class="ql-picker-options" aria-hidden="true" tabindex="-1" id="ql-picker-options-5"><span tabindex="0" role="button" class="ql-picker-item"><svg viewBox="0 0 18 18"><line class="ql-stroke" x1="3" x2="15" y1="9" y2="9"></line><line class="ql-stroke" x1="3" x2="13" y1="14" y2="14"></line><line class="ql-stroke" x1="3" x2="9" y1="4" y2="4"></line></svg></span><span tabindex="0" role="button" class="ql-picker-item" data-value="center"><svg viewBox="0 0 18 18"><line class="ql-stroke" x1="15" x2="3" y1="9" y2="9"></line><line class="ql-stroke" x1="14" x2="4" y1="14" y2="14"></line><line class="ql-stroke" x1="12" x2="6" y1="4" y2="4"></line></svg></span><span tabindex="0" role="button" class="ql-picker-item" data-value="right"><svg viewBox="0 0 18 18"><line class="ql-stroke" x1="15" x2="3" y1="9" y2="9"></line><line class="ql-stroke" x1="15" x2="5" y1="14" y2="14"></line><line class="ql-stroke" x1="15" x2="9" y1="4" y2="4"></line></svg></span><span tabindex="0" role="button" class="ql-picker-item" data-value="justify"><svg viewBox="0 0 18 18"><line class="ql-stroke" x1="15" x2="3" y1="9" y2="9"></line><line class="ql-stroke" x1="15" x2="3" y1="14" y2="14"></line><line class="ql-stroke" x1="15" x2="3" y1="4" y2="4"></line></svg></span></span></span><select class="ql-align" style="display: none;"><option selected="selected"></option><option value="center"></option><option value="right"></option><option value="justify"></option></select></span><span class="ql-formats"><button type="button" class="ql-link" aria-pressed="false" aria-label="link"><svg viewBox="0 0 18 18"><line class="ql-stroke" x1="7" x2="11" y1="7" y2="11"></line><path class="ql-even ql-stroke" d="M8.9,4.577a3.476,3.476,0,0,1,.36,4.679A3.476,3.476,0,0,1,4.577,8.9C3.185,7.5,2.035,6.4,4.217,4.217S7.5,3.185,8.9,4.577Z"></path><path class="ql-even ql-stroke" d="M13.423,9.1a3.476,3.476,0,0,0-4.679-.36,3.476,3.476,0,0,0,.36,4.679c1.392,1.392,2.5,2.542,4.679.36S14.815,10.5,13.423,9.1Z"></path></svg></button><button type="button" class="ql-image" aria-pressed="false" aria-label="image"><svg viewBox="0 0 18 18"><rect class="ql-stroke" height="10" width="12" x="3" y="4"></rect><circle class="ql-fill" cx="6" cy="7" r="1"></circle><polyline class="ql-even ql-fill" points="5 12 5 11 7 9 8 10 11 7 13 9 13 12 5 12"></polyline></svg></button><button type="button" class="ql-code-block" aria-pressed="false" aria-label="code-block"><svg viewBox="0 0 18 18"><polyline class="ql-even ql-stroke" points="5 7 3 9 5 11"></polyline><polyline class="ql-even ql-stroke" points="13 7 15 9 13 11"></polyline><line class="ql-stroke" x1="10" x2="8" y1="5" y2="13"></line></svg></button><button type="button" class="ql-video" aria-pressed="false" aria-label="video"><svg viewBox="0 0 18 18"><rect class="ql-stroke" height="12" width="12" x="3" y="3"></rect><rect class="ql-fill" height="12" width="1" x="5" y="3"></rect><rect class="ql-fill" height="12" width="1" x="12" y="3"></rect><rect class="ql-fill" height="2" width="8" x="5" y="8"></rect><rect class="ql-fill" height="1" width="3" x="3" y="5"></rect><rect class="ql-fill" height="1" width="3" x="3" y="7"></rect><rect class="ql-fill" height="1" width="3" x="3" y="10"></rect><rect class="ql-fill" height="1" width="3" x="3" y="12"></rect><rect class="ql-fill" height="1" width="3" x="12" y="5"></rect><rect class="ql-fill" height="1" width="3" x="12" y="7"></rect><rect class="ql-fill" height="1" width="3" x="12" y="10"></rect><rect class="ql-fill" height="1" width="3" x="12" y="12"></rect></svg></button></span></div><div id="editor" class="ql-container ql-snow"><div class="ql-editor" contenteditable="true"><p>Insert course description</p><p>Some initial <strong>bold</strong> text</p><p><br></p></div><div class="ql-tooltip ql-hidden"><a class="ql-preview" rel="noopener noreferrer" target="_blank" href="about:blank"></a><input type="text" data-formula="e=mc^2" data-link="https://quilljs.com" data-video="Embed URL"><a class="ql-action"></a><a class="ql-remove"></a></div></div>
                                                    <small>A brief summary of your courses.</small>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Button -->
                                        <button class="btn btn-primary" onclick="courseForm.next()">Next</button>
                                    </div>
                                    <!-- Content two -->
                                    <div id="test-l-2" role="tabpanel" class="bs-stepper-pane fade dstepper-none" aria-labelledby="courseFormtrigger2">
                                        <!-- Card -->
                                        <div class="card mb-3 border-0">
                                            <div class="card-header border-bottom px-4 py-3">
                                                <h4 class="mb-0">Courses Media</h4>
                                            </div>
                                            <!-- Card body -->
                                            <div class="card-body">
                                                <div class="custom-file-container mb-4" data-upload-id="courseImage">
                                                    <div class="label-container">
                                                        <label>Upload</label>
                                                        <a class="clear-button" href="javascript:void(0)" title="Clear Image">
                                                            ×
                                                        </a>
                                                    </div>
                                                    <label class="input-container">
                                                        <input accept="*" aria-label="Choose File" class="input-hidden" id="file-upload-with-preview-courseImage" type="file">
                                                        <span class="input-visible">Choose file...<span class="browse-button">Browse</span></span>
                                                    </label>
                                                    <div class="image-preview" style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAiQAAAD6CAMAAACmhqw0AAAA+VBMVEUAAAD29u3u7unt7ent7enu7uju7uihoqCio6Gio6KjpKOkpaSmpqSmp6WoqKaqq6mqq6qrq6qsrautrauur62wsa6xsa+xsrCys7GztLK0tbK1trS2t7S3t7W4uba5ure6u7e7vLm8vbu9vrvAwL3Awb3DxMHFxcPGxsPHx8TIycXLzMjLzMnMzMnNzsrPz8vP0MzQ0M3S0s/U1NDV1dLX19TY2NTY2NXZ2dba2tXb29bc3Nfc3Njc3dnd3dre3tre39vg4Nvh4dzi4t3i4t7j497k5N/k5ODl5eDl5eHl5uLm5uHn5+Lo6OPp6eTq6uXr6+bs7Oft7eh54KxIAAAAB3RSTlMAHKbl5uztvql9swAABA1JREFUeNrt3VlT01AYgOG0oEEE910URNzFBVFcqCgKirLU/P8fI3QYbEOSdtrMyJzzvHfMlFx833NBQuY0SRrN8UwqabzZSJLGaYNQVacaSdMUVF0zGTMEVTeWmIH6BYkgESSCRJAIEkEiSCRIBIkgESSCRJAIEkEiQSJIBIkgESSCRJAIEgkSQSJIBIkgESSCRJBIkAgSQSJIBIkgESSCRIJEkAgSQSJIBIkgkSARJIJEkAgSQSJIBIkEiSARJIJEkAgSQSJIJEgEiSARJIJEkAgSQSJBIkgEiSARJIJEkAgSCRJBIkgEiSARJIJEgkSQ5PvxbdS+tyEJuZVb0+noTV579geSQGs/SOvqxiYkYfYwra+rbUhC7NNEjUjSJ5CE2P06jaTnIAmxKwe7vb468t3N14WOki1IAuzMwWrf1HCh3Q6S95AEWGe1b0/WlSCBBBJIIAkdSXvt1aNXa21IICld7dJU5+epJUggKV7tzuzRA4/ZHUggKVrtfNdjsXlIIClY7XLPw9NlSCA5vtqLPUguQgLJsdX+zv0fZhsSSPKrXckhWSn5jV8zG5DEiuR1DsnrEiOX0vMbkESKZDWHZLXMSFqsBJIIkOz1vn40sVdqpFgJJDHc3dzsQXKzwkihEkhiQLI+2f3y+3qVkSIlkMSAJFvsQrJYbaRACSRRIMlenj0UcPZlPyPHlUASB5Jsc+7cwevMc5v9jRxTAkkkSPbb+riVZYMYySuBJB4kJRUYySmBJHYkhUZ6lUASOZISIz1KIIkbSamRbiWQxIZkvT2YkS4lkESGpDV9tz2YkX9KIIkLSWs6TY+U9DFypASSqJC0OicfHSrpa2T/k5BEh6R1eDpWR8kARtIZSGJD0jo6QW1fySBGIIkOSavrlL27PwcxAklsSFo9JzFOppBAkl9ta5jTOiGJCslQRiCJCslwRiCJCcmQRiCJCMmwRiCJB8mXoU+YhyQaJM9TSCCBBBJIIIEEEkgggQQSSCCJAsnyzLA9hiQWJCfnSpBAAgkkkATXxFCnPxfU7iB5B0mAXT5Y7Z3t0Y087SDZgCTA7tX6bZ5TGSQBtlwrkgVIgmy+RiMXdiEJsp3b9Rn5nEESaC/O1/P3yMJuBkm4bX94O2rvNiKbWXRIBIkgESSCRJAIEkEiQSJIBIkgESSCRJAIEgkSQSJIBIkgESSCRIJEkAgSQSJIBIkgESQSJIJEkAgSQSJIBIkgkSARJIJEkAgSQSJIBIkEiSARJIJEkAgSQSJIJEgEiSARJIJEkAgSCRJBIkgEiSARJIJEkEiQCBJBIkgEiSARJIJEgkSQCBJBIkgEiSARJBIkgkSQ6P8gGTMDVTeWNA1B1TWTxmlTUFWnGknSaI4bhMoabzaSv+4BHFVoHZzfAAAAAElFTkSuQmCC&quot;);"></div>
                                                </div>
                                                <div>
                                                    <input type="url" class="form-control" placeholder="Video URL ">
                                                </div>
                                                <small class="mt-3 d-block">Enter a valid video URL. Students who watch a well-made promo video
                                                    are 5X more likely to enroll in your course.</small>

                                                <div class="mt-3 d-flex justify-content-center align-items-center position-relative rounded py-16 border-white border rounded bg-cover" style="background-image: url(../assets/images/course/course-javascript.jpg); height: 250px">
                                                    <a href="https://www.youtube.com/watch?v=Nfzi7034Kbg" class="icon-shape rounded-circle btn-play icon-xl glightbox position-absolute top-50 start-50 translate-middle">
                                                        <i class="bi bi-play-fill fs-3"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Button -->
                                        <div class="d-flex justify-content-between">
                                            <button class="btn btn-secondary" onclick="courseForm.previous()">Previous</button>
                                            <button class="btn btn-primary" onclick="courseForm.next()">Next</button>
                                        </div>
                                    </div>
                                    <!-- Content three -->
                                    <div id="test-l-3" role="tabpanel" class="bs-stepper-pane fade dstepper-none" aria-labelledby="courseFormtrigger3">
                                        <!-- Card -->
                                        <div class="card mb-3 border-0">
                                            <div class="card-header border-bottom px-4 py-3">
                                                <h4 class="mb-0">Curriculum</h4>
                                            </div>
                                            <!-- Card body -->
                                            <div class="card-body">
                                                <div class="bg-light rounded p-2 mb-4">
                                                    <h4>Introduction to JavaScript</h4>
                                                    <!-- List group -->
                                                    <div class="list-group list-group-flush border-top-0" id="courseList">
                                                        <div id="courseOne">
                                                            <div class="list-group-item rounded px-3 text-nowrap mb-1" id="introduction">
                                                                <div class="d-flex align-items-center justify-content-between">
                                                                    <h5 class="mb-0 text-truncate">
                                                                        <a href="#" class="text-inherit">
                                                                            <i class="fe fe-menu me-1 align-middle"></i>
                                                                            <span class="align-middle">Introduction</span>
                                                                        </a>
                                                                    </h5>
                                                                    <div>
                                                                        <a href="#" class="me-1 text-inherit" data-bs-toggle="tooltip" data-placement="top" aria-label="Edit" data-bs-original-title="Edit">
                                                                            <i class="fe fe-edit fs-6"></i>
                                                                        </a>
                                                                        <a href="#" class="me-1 text-inherit" data-bs-toggle="tooltip" data-placement="top" aria-label="Delete" data-bs-original-title="Delete">
                                                                            <i class="fe fe-trash-2 fs-6"></i>
                                                                        </a>
                                                                        <a href="#" class="text-inherit" aria-expanded="true" data-bs-toggle="collapse" data-bs-target="#collapselistOne" aria-controls="collapselistOne">
                                                                            <span class="chevron-arrow"><i class="fe fe-chevron-down"></i></span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div id="collapselistOne" class="collapse show" aria-labelledby="introduction" data-bs-parent="#courseList">
                                                                    <div class="p-md-4 p-2">
                                                                        <a href="#" class="btn btn-secondary btn-sm">Add Article +</a>
                                                                        <a href="#" class="btn btn-secondary btn-sm">Add Description +</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="list-group-item rounded px-3 text-nowrap mb-1" id="development">
                                                                <div class="d-flex align-items-center justify-content-between">
                                                                    <h5 class="mb-0 text-truncate">
                                                                        <a href="#" class="text-inherit">
                                                                            <i class="fe fe-menu me-1 align-middle"></i>
                                                                            <span class="align-middle">Installing Development Software</span>
                                                                        </a>
                                                                    </h5>
                                                                    <div>
                                                                        <a href="#" class="me-1 text-inherit" data-bs-toggle="tooltip" data-placement="top" aria-label="Edit" data-bs-original-title="Edit">
                                                                            <i class="fe fe-edit fs-6"></i>
                                                                        </a>
                                                                        <a href="#" class="me-1 text-inherit" data-bs-toggle="tooltip" data-placement="top" aria-label="Delete" data-bs-original-title="Delete">
                                                                            <i class="fe fe-trash-2 fs-6"></i>
                                                                        </a>
                                                                        <a href="#" class="text-inherit" data-bs-toggle="collapse" data-bs-target="#collapselistTwo" aria-expanded="false" aria-controls="collapselistTwo">
                                                                            <span class="chevron-arrow"><i class="fe fe-chevron-down"></i></span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div id="collapselistTwo" class="collapse" aria-labelledby="development" data-bs-parent="#courseList">
                                                                    <div class="p-md-4 p-2">
                                                                        <a href="#" class="btn btn-secondary btn-sm">Add Article +</a>
                                                                        <a href="#" class="btn btn-secondary btn-sm">Add Description +</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="list-group-item rounded px-3 text-nowrap mb-1" id="project">
                                                                <div class="d-flex align-items-center justify-content-between">
                                                                    <h5 class="mb-0 text-truncate">
                                                                        <a href="#" class="text-inherit">
                                                                            <i class="fe fe-menu me-1 align-middle"></i>
                                                                            <span class="align-middle">Hello World Project from GitHub</span>
                                                                        </a>
                                                                    </h5>
                                                                    <div>
                                                                        <a href="#" class="me-1 text-inherit" data-bs-toggle="tooltip" data-placement="top" aria-label="Edit" data-bs-original-title="Edit">
                                                                            <i class="fe fe-edit fs-6"></i>
                                                                        </a>
                                                                        <a href="#" class="me-1 text-inherit" data-bs-toggle="tooltip" data-placement="top" aria-label="Delete" data-bs-original-title="Delete">
                                                                            <i class="fe fe-trash-2 fs-6"></i>
                                                                        </a>
                                                                        <a href="#" class="text-inherit" data-bs-toggle="collapse" data-bs-target="#collapselistThree" aria-expanded="false" aria-controls="collapselistThree">
                                                                            <span class="chevron-arrow"><i class="fe fe-chevron-down"></i></span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div id="collapselistThree" class="collapse" aria-labelledby="project" data-bs-parent="#courseList">
                                                                    <div class="p-md-4 p-2">
                                                                        <a href="#" class="btn btn-secondary btn-sm">Add Article +</a>
                                                                        <a href="#" class="btn btn-secondary btn-sm">Add Description +</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="list-group-item rounded px-3 text-nowrap mb-1" id="sample">
                                                                <div class="d-flex align-items-center justify-content-between">
                                                                    <h5 class="mb-0 text-truncate">
                                                                        <a href="#" class="text-inherit">
                                                                            <i class="fe fe-menu me-1 align-middle"></i>
                                                                            <span class="align-middle">Our Sample Website</span>
                                                                        </a>
                                                                    </h5>
                                                                    <div>
                                                                        <a href="#" class="me-1 text-inherit" data-bs-toggle="tooltip" data-placement="top" aria-label="Edit" data-bs-original-title="Edit">
                                                                            <i class="fe fe-edit fs-6"></i>
                                                                        </a>
                                                                        <a href="#" class="me-1 text-inherit" data-bs-toggle="tooltip" data-placement="top" aria-label="Delete" data-bs-original-title="Delete">
                                                                            <i class="fe fe-trash-2 fs-6"></i>
                                                                        </a>
                                                                        <a href="#" class="text-inherit" data-bs-toggle="collapse" data-bs-target="#collapselistFour" aria-expanded="false" aria-controls="collapselistFour">
                                                                            <span class="chevron-arrow"><i class="fe fe-chevron-down"></i></span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div id="collapselistFour" class="collapse" aria-labelledby="sample" data-bs-parent="#courseList">
                                                                    <div class="p-md-4 p-2">
                                                                        <a href="#" class="btn btn-secondary btn-sm">Add Article +</a>
                                                                        <a href="#" class="btn btn-secondary btn-sm">Add Description +</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a href="#" class="btn btn-outline-primary btn-sm mt-3" data-bs-toggle="modal" data-bs-target="#addLectureModal">Add Lecture +</a>
                                                </div>
                                                <div class="bg-light rounded p-2 mb-4">
                                                    <h4>JavaScript Beginnings</h4>

                                                    <!-- List group -->
                                                    <div class="list-group list-group-flush border-top-0" id="courseListSecond">
                                                        <div id="courseTwo">
                                                            <div class="list-group-item rounded px-3 text-nowrap mb-1" id="introductionSecond">
                                                                <div class="d-flex align-items-center justify-content-between">
                                                                    <h5 class="mb-0 text-truncate">
                                                                        <a href="#" class="text-inherit">
                                                                            <i class="fe fe-menu me-1 align-middle"></i>
                                                                            <span class="align-middle">Introduction</span>
                                                                        </a>
                                                                    </h5>
                                                                    <div>
                                                                        <a href="#" class="me-1 text-inherit" data-bs-toggle="tooltip" data-placement="top" aria-label="Edit" data-bs-original-title="Edit">
                                                                            <i class="fe fe-edit fs-6"></i>
                                                                        </a>
                                                                        <a href="#" class="me-1 text-inherit" data-bs-toggle="tooltip" data-placement="top" aria-label="Delete" data-bs-original-title="Delete">
                                                                            <i class="fe fe-trash-2 fs-6"></i>
                                                                        </a>
                                                                        <a href="#" class="text-inherit" data-bs-toggle="collapse" data-bs-target="#collapselistFive" aria-expanded="false" aria-controls="collapselistFive">
                                                                            <span class="chevron-arrow"><i class="fe fe-chevron-down"></i></span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div id="collapselistFive" class="collapse" aria-labelledby="introductionSecond" data-bs-parent="#courseListSecond">
                                                                    <div class="p-md-4 p-2">
                                                                        <a href="#" class="btn btn-secondary btn-sm">Add Article +</a>
                                                                        <a href="#" class="btn btn-secondary btn-sm">Add Description +</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="list-group-item rounded px-3 text-nowrap mb-1" id="developmentSecond">
                                                                <div class="d-flex align-items-center justify-content-between">
                                                                    <h5 class="mb-0 text-truncate">
                                                                        <a href="#" class="text-inherit">
                                                                            <i class="fe fe-menu me-1 align-middle"></i>
                                                                            <span class="align-middle">Installing Development Software</span>
                                                                        </a>
                                                                    </h5>
                                                                    <div>
                                                                        <a href="#" class="me-1 text-inherit" data-bs-toggle="tooltip" data-placement="top" aria-label="Edit" data-bs-original-title="Edit">
                                                                            <i class="fe fe-edit fs-6"></i>
                                                                        </a>
                                                                        <a href="#" class="me-1 text-inherit" data-bs-toggle="tooltip" data-placement="top" aria-label="Delete" data-bs-original-title="Delete">
                                                                            <i class="fe fe-trash-2 fs-6"></i>
                                                                        </a>
                                                                        <a href="#" class="text-inherit" data-bs-toggle="collapse" data-bs-target="#collapselistSix" aria-expanded="false" aria-controls="collapselistSix">
                                                                            <span class="chevron-arrow"><i class="fe fe-chevron-down"></i></span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div id="collapselistSix" class="collapse" aria-labelledby="developmentSecond" data-bs-parent="#courseListSecond">
                                                                    <div class="p-md-4 p-2">
                                                                        <a href="#" class="btn btn-secondary btn-sm">Add Article +</a>
                                                                        <a href="#" class="btn btn-secondary btn-sm">Add Description +</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="list-group-item rounded px-3 text-nowrap mb-1" id="projectSecond">
                                                                <div class="d-flex align-items-center justify-content-between">
                                                                    <h5 class="mb-0 text-truncate">
                                                                        <a href="#" class="text-inherit">
                                                                            <i class="fe fe-menu me-1 align-middle"></i>
                                                                            <span class="align-middle">Hello World Project from GitHub</span>
                                                                        </a>
                                                                    </h5>
                                                                    <div>
                                                                        <a href="#" class="me-1 text-inherit" data-bs-toggle="tooltip" data-placement="top" aria-label="Edit" data-bs-original-title="Edit">
                                                                            <i class="fe fe-edit fs-6"></i>
                                                                        </a>
                                                                        <a href="#" class="me-1 text-inherit" data-bs-toggle="tooltip" data-placement="top" aria-label="Delete" data-bs-original-title="Delete">
                                                                            <i class="fe fe-trash-2 fs-6"></i>
                                                                        </a>
                                                                        <a href="#" class="text-inherit" data-bs-toggle="collapse" data-bs-target="#collapselistSeven" aria-expanded="false" aria-controls="collapselistSeven">
                                                                            <span class="chevron-arrow"><i class="fe fe-chevron-down"></i></span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div id="collapselistSeven" class="collapse" aria-labelledby="projectSecond" data-bs-parent="#courseListSecond">
                                                                    <div class="p-md-4 p-2">
                                                                        <a href="#" class="btn btn-secondary btn-sm">Add Article +</a>
                                                                        <a href="#" class="btn btn-secondary btn-sm">Add Description +</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="list-group-item rounded px-3 text-nowrap mb-1" id="sampleSecond">
                                                                <div class="d-flex align-items-center justify-content-between">
                                                                    <h5 class="mb-0 text-truncate">
                                                                        <a href="#" class="text-inherit">
                                                                            <i class="fe fe-menu me-1 align-middle"></i>
                                                                            <span class="align-middle">Our Sample Website</span>
                                                                        </a>
                                                                    </h5>
                                                                    <div>
                                                                        <a href="#" class="me-1 text-inherit" data-bs-toggle="tooltip" data-placement="top" aria-label="Edit" data-bs-original-title="Edit">
                                                                            <i class="fe fe-edit fs-6"></i>
                                                                        </a>
                                                                        <a href="#" class="me-1 text-inherit" data-bs-toggle="tooltip" data-placement="top" aria-label="Delete" data-bs-original-title="Delete">
                                                                            <i class="fe fe-trash-2 fs-6"></i>
                                                                        </a>
                                                                        <a href="#" class="text-inherit" data-bs-toggle="collapse" data-bs-target="#collapselistEight" aria-expanded="false" aria-controls="collapselistEight">
                                                                            <span class="chevron-arrow"><i class="fe fe-chevron-down"></i></span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div id="collapselistEight" class="collapse" aria-labelledby="sampleSecond" data-bs-parent="#courseListSecond">
                                                                    <div class="p-md-4 p-2">
                                                                        <a href="#" class="btn btn-secondary btn-sm">Add Article +</a>
                                                                        <a href="#" class="btn btn-secondary btn-sm">Add Description +</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a href="#" class="btn btn-outline-primary btn-sm mt-3" data-bs-toggle="modal" data-bs-target="#addLectureModal">Add Lecture +</a>
                                                </div>
                                                <a href="#" class="btn btn-outline-primary btn-sm" data-bs-toggle="modal" data-bs-target="#addSectionModal">Add Section</a>
                                            </div>
                                        </div>
                                        <!-- Button -->
                                        <div class="d-flex justify-content-between">
                                            <button class="btn btn-secondary" onclick="courseForm.previous()">Previous</button>
                                            <button class="btn btn-primary" onclick="courseForm.next()">Next</button>
                                        </div>
                                    </div>
                                    <!-- Content four -->
                                    <div id="test-l-4" role="tabpanel" class="bs-stepper-pane fade dstepper-none" aria-labelledby="courseFormtrigger4">
                                        <!-- Card -->
                                        <div class="card mb-3 border-0">
                                            <div class="card-header border-bottom px-4 py-3">
                                                <h4 class="mb-0">Requirements</h4>
                                            </div>
                                            <!-- Card body -->
                                            <div class="card-body">
                                                <tags class="tagify  w-100" tabindex="-1">
                                                    <tag title="jquery" contenteditable="false" tabindex="-1" class="tagify__tag tagify--noAnim" value="jquery"><x title="" tabindex="-1" class="tagify__tag__removeBtn" role="button" aria-label="remove tag"></x><div><span autocapitalize="false" autocorrect="off" spellcheck="false" class="tagify__tag-text">jquery</span></div></tag><tag title="bootstrap" contenteditable="false" tabindex="-1" class="tagify__tag tagify--noAnim" value="bootstrap"><x title="" tabindex="-1" class="tagify__tag__removeBtn" role="button" aria-label="remove tag"></x><div><span autocapitalize="false" autocorrect="off" spellcheck="false" class="tagify__tag-text">bootstrap</span></div></tag><span contenteditable="" tabindex="0" data-placeholder="​" aria-placeholder="" class="tagify__input" role="textbox" autocapitalize="false" autocorrect="off" spellcheck="false" aria-autocomplete="both" aria-multiline="false"></span>
                                                    ​
                                                </tags><input name="tags" class="w-100" value="jquery, bootstrap" tabindex="-1">
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between mb-8">
                                            <!-- Button -->
                                            <button class="btn btn-secondary" onclick="courseForm.previous()">Previous</button>
                                            <button type="submit" class="btn btn-danger">Submit For Review</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
