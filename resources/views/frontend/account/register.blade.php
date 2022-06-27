@extends('frontend.account.layouts.app')

@section('title')
    Đăng ký
@endsection
@push('css')
  <style>
    .custom-btn-register{
      color: white;
      background-color: #F7941D ; 
    }
    #github{
      color: black;
      font-size: 24pt;
    }
   
  </style>
@endpush
@section('content')
    <!-- Body -->
    <section class="min-vh-100 mb-8">
        <div class="page-header align-items-start min-vh-50 pt-5 pb-11  m-3 border-radius-lg" style="background-image: url({{asset('backend/assets/images/curved-images/curved14.jpg')}});">
        <span class="mask bg-gradient-dark opacity-6"></span>
        <div class="container">
            <div class="row justify-content-center">
            <div class="col-lg-5 text-center mx-auto">
                <h1 class="text-white mb-2 mt-5">Chào mừng !</h1>
                <p class="text-lead text-white">Điền vào form bên dưới để tiến hành đăng ký tài khoản</p>
            </div>
            </div>
        </div>
        </div>
        <div class="container">
        <div class="row mt-lg-n10 mt-md-n11 mt-n10">
            <div class="col-xl-4 col-lg-5 col-md-7 mx-auto">
            <div class="card z-index-0">
                <div class="card-header text-center pt-4">
                <h5>Đăng ký</h5>
                </div>
                <div class="row px-xl-5 px-sm-4 px-3">
                <div class="col-3 ms-auto px-1">
                    <a class="btn btn-outline-light w-100" href="{{url('/user/facebook')}}">
                    <svg width="24px" height="32px" viewBox="0 0 64 64" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink32">
                        <g id="Artboard" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <g id="facebook-3" transform="translate(3.000000, 3.000000)" fill-rule="nonzero">
                            <circle id="Oval" fill="#3C5A9A" cx="29.5091719" cy="29.4927506" r="29.4882047"></circle>
                            <path d="M39.0974944,9.05587273 L32.5651312,9.05587273 C28.6886088,9.05587273 24.3768224,10.6862851 24.3768224,16.3054653 C24.395747,18.2634019 24.3768224,20.1385313 24.3768224,22.2488655 L19.8922122,22.2488655 L19.8922122,29.3852113 L24.5156022,29.3852113 L24.5156022,49.9295284 L33.0113092,49.9295284 L33.0113092,29.2496356 L38.6187742,29.2496356 L39.1261316,22.2288395 L32.8649196,22.2288395 C32.8649196,22.2288395 32.8789377,19.1056932 32.8649196,18.1987181 C32.8649196,15.9781412 35.1755132,16.1053059 35.3144932,16.1053059 C36.4140178,16.1053059 38.5518876,16.1085101 39.1006986,16.1053059 L39.1006986,9.05587273 L39.0974944,9.05587273 L39.0974944,9.05587273 Z" id="Path" fill="#FFFFFF"></path>
                        </g>
                        </g>
                    </svg>
                    </a>
                </div>
                <div class="col-3 px-1">
                    <a class="btn btn-outline-light w-100" href="{{url('/user/github')}}">
                      <i class="fab fa-github" id="github" ></i>
                    </a>
                </div>
                <div class="col-3 me-auto px-1">
                    <a class="btn btn-outline-light w-100" href="{{url('/user/google')}}">
                    <svg width="24px" height="32px" viewBox="0 0 64 64" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <g id="Artboard" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <g id="google-icon" transform="translate(3.000000, 2.000000)" fill-rule="nonzero">
                            <path d="M57.8123233,30.1515267 C57.8123233,27.7263183 57.6155321,25.9565533 57.1896408,24.1212666 L29.4960833,24.1212666 L29.4960833,35.0674653 L45.7515771,35.0674653 C45.4239683,37.7877475 43.6542033,41.8844383 39.7213169,44.6372555 L39.6661883,45.0037254 L48.4223791,51.7870338 L49.0290201,51.8475849 C54.6004021,46.7020943 57.8123233,39.1313952 57.8123233,30.1515267" id="Path" fill="#4285F4"></path>
                            <path d="M29.4960833,58.9921667 C37.4599129,58.9921667 44.1456164,56.3701671 49.0290201,51.8475849 L39.7213169,44.6372555 C37.2305867,46.3742596 33.887622,47.5868638 29.4960833,47.5868638 C21.6960582,47.5868638 15.0758763,42.4415991 12.7159637,35.3297782 L12.3700541,35.3591501 L3.26524241,42.4054492 L3.14617358,42.736447 C7.9965904,52.3717589 17.959737,58.9921667 29.4960833,58.9921667" id="Path" fill="#34A853"></path>
                            <path d="M12.7159637,35.3297782 C12.0932812,33.4944915 11.7329116,31.5279353 11.7329116,29.4960833 C11.7329116,27.4640054 12.0932812,25.4976752 12.6832029,23.6623884 L12.6667095,23.2715173 L3.44779955,16.1120237 L3.14617358,16.2554937 C1.14708246,20.2539019 0,24.7439491 0,29.4960833 C0,34.2482175 1.14708246,38.7380388 3.14617358,42.736447 L12.7159637,35.3297782" id="Path" fill="#FBBC05"></path>
                            <path d="M29.4960833,11.4050769 C35.0347044,11.4050769 38.7707997,13.7975244 40.9011602,15.7968415 L49.2255853,7.66898166 C44.1130815,2.91684746 37.4599129,0 29.4960833,0 C17.959737,0 7.9965904,6.62018183 3.14617358,16.2554937 L12.6832029,23.6623884 C15.0758763,16.5505675 21.6960582,11.4050769 29.4960833,11.4050769" id="Path" fill="#EB4335"></path>
                        </g>
                        </g>
                    </svg>
                    </a>
                </div>
                <div class="mt-2 position-relative text-center">
                    <p class="text-sm font-weight-bold mb-2 text-secondary text-border d-inline z-index-2 bg-white px-3">
                        hoặc
                    </p>
                </div>
                </div>
                <div class="card-body">
                <form role="form text-left" method="POST" action="{{url('/user/register')}}">
                    @csrf
                    <div class="mb-3">
                        <input type="text" class="form-control" placeholder="Họ và tên" aria-label="Name" name="name">
                        <div class="invalid-feedback" id="errorName">
                        </div>
                    </div>
                    <div class="mb-3">
                        <input type="email" class="form-control" placeholder="Email" aria-label="Email" name="email">
                        <div class="invalid-feedback" id="errorEmail">
                        </div>
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" placeholder="Số điện thoại" aria-label="Phone" name="phonenumber">
                        <div class="invalid-feedback" id="errorPhoneNumber">
                        </div>
                    </div>
                    <div class="mb-3">
                        <input type="password" class="form-control" placeholder="Mật khẩu" aria-label="Password" name="password">
                        <div class="invalid-feedback" id="errorPassword">
                        </div>
                    </div>
                    <div class="mb-3">
                        <input type="password" class="form-control" placeholder="Nhập lại mật khẩu" aria-label="Confirm Password" name="cfpassword">
                        <div class="invalid-feedback" id="errorConfirmPassword">
                        </div>
                    </div>
                    <div class="form-check form-check-info text-left" id="policy">
                        <input class="form-check-input" type="checkbox" id="flexCheck" checked>
                        <label class="form-check-label" for="flexCheckDefault">
                            Tôi đồng ý với <a href="javascript:;" class="text-dark font-weight-bolder">Các điều khoản và điều kiện</a>
                        </label>
                        <div class="invalid-feedback" id="errorPolicy">
                        </div>
                    </div>
                    <div class="text-center">
                    <button type="button" class="custom-btn-register btn w-100 my-4 mb-2" id="button-register">Đăng ký</button>
                    </div>
                    <div class="text-center">
                        <p class="text-sm mt-3 mb-0">Bạn đã có tài khoản ? <a href="{{url('user/login')}}" class="font-weight-bolder" style="color: #F7941D">Đăng nhập</a></p>
                    </div>
                </form>
                </div>
            </div>
            </div>
        </div>
        </div>
    </section>

@endsection
@push('js')
  <script>
    $(document).ready(function(){
      @if (Session::has('result'))
        $('#resultModal').modal('show')
        {{session()->forget('result')}}
      @endif
      $("#button-register").click(function(){
        $name = $('input[name=name]');
        $email = $('input[name=email]');
        $phonenumber = $('input[name=phonenumber]');
        $password = $('input[name=password]');
        $confirmPassword = $('input[name=cfpassword]');
        let $regexEmail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/
        let $regexPhone = /^(0?)(3[2-9]|5[6|8|9]|7[0|6-9]|8[0-6|8|9]|9[0-4|6-9])[0-9]{7}$/
        let $checkName = false;
        let $checkEmail = false;
        let $checkPhone = false;
        let $checkPassword = false;
        
        if ($name.val() == ''){
                $name.addClass('is-invalid')
                $("#errorName").text("Trường này không được để trống") 
                $checkName = false
            } else if($name.val().length < 5 ){
                $name.addClass('is-invalid')
                $("#errorName").text("Trường này phải trên 5 kí tự")
                $checkName = false
            } else {
                $name.removeClass('is-invalid')
                $("#errorName").text("")
                $checkName = true
            }

        if ($email.val() == ''){
            $email.addClass('is-invalid')
            $("#errorEmail").text("Trường này không được để trống")
            $checkEmail = false
        } else if ($regexEmail.test($email.val()) == false){
            $email.addClass('is-invalid')
            $("#errorEmail").text("Nhập đúng định dạng email")
            $checkEmail = false
        } else {
            $checkEmail = true
            emailExists($email.val()).done(function(data){
                if (data.result == 'exists'){
                    $email.addClass('is-invalid')
                    $("#errorEmail").text("Email đã tồn tại")     
                }
                if (data.result == 'notExists'){
                    $email.removeClass('is-invalid')
                    $("#errorEmail").text("")

                }
            })
        }

        if ($phonenumber.val() == ''){
            $phonenumber.addClass('is-invalid')
            $("#errorPhoneNumber").text("Trường này không được để trống")
            $checkPhone = false
        } else if ($regexPhone.test($phonenumber.val()) == false){
            $phonenumber.addClass('is-invalid')
            $("#errorPhoneNumber").text("Nhập đúng định dạng số điện thoại")
            $checkPhone = false
        } else {
            $phonenumber.removeClass('is-invalid')
            $("#errorPhoneNumber").text("")
            $checkPhone = true
        }

        if ($password.val() == ''){
            $password.addClass('is-invalid')
            $("#errorPassword").text("Trường này không được để trống")
            $checkPassword = false
        } else if ($password.val().length < 8 ){
            $password.addClass('is-invalid')
            $("#errorPassword").text("Mật khẩu phải lớn hơn hoặc bằng 8 kí tự")
            $checkPassword = false
        } else {
            $password.removeClass('is-invalid')
            $("#errorPassword").text("")
            if ($confirmPassword.val() != $password.val()){
            $confirmPassword.addClass('is-invalid')
            $("#errorConfirmPassword").text("Mật khẩu không khớp")
            $checkPassword = false
            } else {
                $confirmPassword.removeClass('is-invalid')
                $("#errorConfirmPassword").text("")
                $checkPassword = true
            }
        }
        
        if ($checkName == true && $checkEmail == true && $checkPhone == true && $checkPassword == true ) {
            if ( $('#flexCheck').is(":checked") == true ){
                $("#errorPolicy").text("")
                $("#errorPolicy").hide()
                emailExists($email.val()).done(function(data){
                        if (data.result == 'notExists'){
                            $('form').submit();
                        }
                });
            } else {
                
                $("#errorPolicy").text("Vui lòng đồng ý với điều khoản và điều kiện")
                $("#errorPolicy").show()
            }
        }
      })
      function emailExists($email){
            return  $.ajax({
                        type: "POST",
                        dataType: "json",
                        url: "/user/checkemailexists",
                        timeout: 3000,
                        data: {"_token": "{{ csrf_token() }}", 'email': $email},
                        success: function(data){
                            return data
                        },
                    });
        }
    });
  </script>
@endpush