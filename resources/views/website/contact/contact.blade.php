@extends('layouts.app')
@section('title')
    {{getSetting('siteName')}}
    ||
الصفحه الرئيسيه
@endsection
@section('header')
    <link href="{{asset('website-design/cus_bu_product/bu_all.css')}}" rel="stylesheet" />
      <link href="{{asset('website-design/contact/contact.css')}}" rel="stylesheet" />
@endsection
@section('content')
     <!-- Contact Us Section -->
    <section class="Material-contact-section section-padding section-dark">
      <div class="container">
          <div class="row">
              <!-- Section Titile -->
              <div class="col-md-12 wow animated fadeInLeft" data-wow-delay=".2s">
                  <h1 class="section-title">اتصل بنا </h1>
                    <br>
                    <br>
              </div>
          </div>
          <div class="row">
              <!-- Section Titile -->
             
              <!-- contact form -->
              <div class="col-md-6 wow animated fadeInLeft" data-wow-delay=".2s">
                  <form class="shake" role="form" action="{{url('/contact/save')}}" method="post" id="contactForm" name="contact-form" data-toggle="validator">
                      <!-- Name -->
                 @csrf
                      <div class="form-group label-floating">
                        <label class="control-label" for="name">الاسم</label>
                        <input class="form-control" id="name" type="text" name="contact_name" required data-error="Please enter your name" value="{{Auth::user()?Auth::user()->name : " "}}">
                        <div class="help-block with-errors">
                            @error('contact_name')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                      </div>

                      <!-- email -->
                      <div class="form-group label-floating">
                        <label class="control-label" for="email">البريد الالكتروني</label>
                        <input class="form-control" id="email" type="email" name="contact_email" required data-error="Please enter your Email" value="{{Auth::user()?Auth::user()->email : " "}}">
                        <div class="help-block with-errors">
                            @error('contact_email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                      </div>

                      <!-- Subject -->
                      <div class="form-group label-floating">
                        <label class="control-label">نوع الرساله</label>
                        <select class="form-control" id="msg_subject" type="text" name="contact_type" required data-error="Please enter your message subject">
                        <option value="like">اعجاب</option>
                             <option value="suggest">اقتراح</option>
                                 <option value="problem">مشكله</option>
                        </select>
                        <div class="help-block with-errors">
                            @error('contact_type')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                      </div>
                      <!-- Message -->
                      <div class="form-group label-floating">
                          <label for="message" class="control-label">نص الرساله</label>
                          <textarea class="form-control" rows="3" id="message" name="contact_message" required data-error="Write your message"></textarea>
                          <div class="help-block with-errors">
                              @error('contact_message')
                              <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                              @enderror
                          </div>
                      </div>
                      <!-- Form Submit -->
                      <div class="form-submit mt-5">
                          <button class="btn btn-common" type="submit" id="form-submit"><i class="material-icons mdi mdi-message-outline"></i>ارسال الرساله</button>
                          <div id="msgSubmit" class="h3 text-center hidden"></div>
                          <div class="clearfix"></div>
                      </div>
                  </form>
              </div>
                 <div class="col-md-6 mt-3 contact-widget-section2 wow animated fadeInRight" data-wow-delay=".2s" style="font-size:20px">
                <p>يمكنك الاتصال بنا وسيتم الرد عليك في اي وقت .</p>

                <div class="find-widget">
                 اسم الشركه:  <a href="">{{getSetting('companyName')}}</a>
                </div>
                <div class="find-widget">
                 العنوان: <a href="#">{{getSetting('companyAdress')}}</a>
                </div>
                <div class="find-widget">
                  التلفون:  <a href="#">{{getSetting('mobile')}}</a>
                </div>
                
                <div class="find-widget">
                   Program: <a href="#">Mon to Sat: 09:30 AM - 10.30 PM</a>
                </div>
              </div>
          </div>
      </div>
    </section>
@endsection