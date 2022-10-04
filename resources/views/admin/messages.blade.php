@extends('layout.dashboard-layout')
@section('content')
<div class="row">
  <!-- Small table -->
  <div class="col-md-12 my-4">
    {{-- <h2 class="h4 mb-1">Messages</h2> --}}
      {{-- <a href="javascript:window.print()" class="btn btn-success waves-effect waves-light"><i class="fa fa print"></i></a> --}}
    <div class="card shadow">
      <div class="card-body">
        {{--  --}}
        <section class="ftco-section">
          <div class="container">
            <div class="col-md-12">
              <div class="wrapper">
                <div class="row justify-content-center">
                {{-- <div class="col-md-6 text-center mb-5"> --}}
                <h2 class="heading-section" style="padding-top: 3%;">Send a Message</h2>
                {{-- </div> --}}
                </div>
                <div class="row no-gutters mb-5">
                  <div class="col-md-12">
                    <div class="contact-wrap w-100 p-md-5 p-4">
                      <div id="form-message-warning" class="mb-4"></div>
                        <div id="form-message-success" class="mb-4">
                        </div>
                        <form action="" method="post">
                            @csrf
                         <div class="row">
                            <div class="col-md-12">
                              <div class="form-group">
                                <label class="label" for="phone">Phone Number</label>
                                <input type="text" class="form-control" name="phone" id="phone" placeholder="Type the contact number">
                              </div>
                            </div>
                            <div class="col-md-12">
                              <div class="form-group">
                                <label class="label" for="message">Message</label>
                                <textarea name="message" class="form-control" id="message" cols="30" rows="4" placeholder="Message"></textarea>
                              </div>
                            </div>
                            <div class="col-md-12">
                              <div class="form-group">
                                <button type="submit" class="btn btn-primary">Send Message</button>
                              </div>
                            </div>
                         </div>
                        </form>
                    </div>
                   </div>
                  <div class="row justify-content-center">
                  </div>
                </div>
               </div>
             </div>
            </div>
          </div>
       </section>
        {{--  --}}
      </div>
    </div>
    </div>
  </div>
@endsection
