<?php $this->extend('/auth/Frame'); ?>
<?php $this->section('content'); ?>
   <!-- ====== Forms Section Start -->
   <section class="bg-[#F4F7FF] py-14 lg:py-20">
      <div class="container">
        <div class="-mx-4 flex flex-wrap">
          <div class="w-full px-4">
            <div
              class="wow fadeInUp relative mx-auto max-w-[525px] overflow-hidden rounded-lg bg-white py-14 px-8 text-center sm:px-12 md:px-[60px]"
              data-wow-delay=".15s"
            >
              <div class="mb-10 text-center">
                <a
                  href="javascript:void(0)"
                  class="mx-auto inline-block max-w-[160px]"
                >
                  <img src="<?= base_url('/public/assets/images/logo-light.png'); ?>" alt="logo" />
                </a>
                <div id="alert-box"></div>
              </div>
              <form>
                <div class="mb-6">
                  <input
                    type="text"
                    placeholder="Name"
                    id="name"
                    class="bordder-[#E9EDF4] w-full rounded-md border bg-[#FCFDFE] py-3 px-5 text-base text-body-color placeholder-[#ACB6BE] outline-none transition focus:border-primary focus-visible:shadow-none"
                  />
                </div>
                <div class="mb-6">
                  <input
                    type="email"
                    id="email"
                    placeholder="Email"
                    class="bordder-[#E9EDF4] w-full rounded-md border bg-[#FCFDFE] py-3 px-5 text-base text-body-color placeholder-[#ACB6BE] outline-none transition focus:border-primary focus-visible:shadow-none"
                  />
                </div>
                <div class="mb-6">
                  <input
                    type="password"
                    id="password"
                    placeholder="Password"
                    class="bordder-[#E9EDF4] w-full rounded-md border bg-[#FCFDFE] py-3 px-5 text-base text-body-color placeholder-[#ACB6BE] outline-none transition focus:border-primary focus-visible:shadow-none"
                  />
                </div>
                <div class="mb-6">
                  <input
                    type="password"
                    id="confirmpassword"
                    placeholder="Password"
                    class="bordder-[#E9EDF4] w-full rounded-md border bg-[#FCFDFE] py-3 px-5 text-base text-body-color placeholder-[#ACB6BE] outline-none transition focus:border-primary focus-visible:shadow-none"
                  />
                </div>
                <div class="mb-10">
                  <button
                    type="button"
           
                    id="signupbutton"
                    class="bordder-primary w-full cursor-pointer rounded-md border bg-primary py-3 px-5 text-base text-white transition duration-300 ease-in-out hover:shadow-md"
                  >Sign Up</buttton>
                </div>
              </form>
              <!-- <p class="mb-6 text-base text-[#adadad]">Connect With</p>
              <ul class="-mx-2 mb-12 flex justify-between">
                <li class="w-full px-2">
                  <a
                    href="javascript:void(0)"
                    class="flex h-11 items-center justify-center rounded-md bg-[#4064AC] transition hover:bg-opacity-90"
                  >
                    <svg
                      width="10"
                      height="20"
                      viewBox="0 0 10 20"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M9.29878 8H7.74898H7.19548V7.35484V5.35484V4.70968H7.74898H8.91133C9.21575 4.70968 9.46483 4.45161 9.46483 4.06452V0.645161C9.46483 0.290323 9.24343 0 8.91133 0H6.89106C4.70474 0 3.18262 1.80645 3.18262 4.48387V7.29032V7.93548H2.62912H0.747223C0.359774 7.93548 0 8.29032 0 8.80645V11.129C0 11.5806 0.304424 12 0.747223 12H2.57377H3.12727V12.6452V19.129C3.12727 19.5806 3.43169 20 3.87449 20H6.47593C6.64198 20 6.78036 19.9032 6.89106 19.7742C7.00176 19.6452 7.08478 19.4194 7.08478 19.2258V12.6774V12.0323H7.66596H8.91133C9.2711 12.0323 9.54785 11.7742 9.6032 11.3871V11.3548V11.3226L9.99065 9.09677C10.0183 8.87097 9.99065 8.6129 9.8246 8.35484C9.76925 8.19355 9.52018 8.03226 9.29878 8Z"
                        fill="white"
                      />
                    </svg>
                  </a>
                </li>
                <li class="w-full px-2">
                  <a
                    href="javascript:void(0)"
                    class="flex h-11 items-center justify-center rounded-md bg-[#1C9CEA] transition hover:bg-opacity-90"
                  >
                    <svg
                      width="22"
                      height="16"
                      viewBox="0 0 22 16"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M19.5516 2.75538L20.9 1.25245C21.2903 0.845401 21.3968 0.53229 21.4323 0.375734C20.3677 0.939335 19.3742 1.1272 18.7355 1.1272H18.4871L18.3452 1.00196C17.4935 0.344423 16.429 0 15.2935 0C12.8097 0 10.8581 1.81605 10.8581 3.91389C10.8581 4.03914 10.8581 4.22701 10.8935 4.35225L11 4.97847L10.2548 4.94716C5.7129 4.82192 1.9871 1.37769 1.38387 0.782779C0.390323 2.34834 0.958064 3.85127 1.56129 4.79061L2.76774 6.54403L0.851613 5.6047C0.887097 6.91977 1.45484 7.95303 2.55484 8.7045L3.5129 9.33072L2.55484 9.67515C3.15806 11.272 4.50645 11.9296 5.5 12.18L6.8129 12.4932L5.57097 13.2446C3.58387 14.4971 1.1 14.4031 0 14.3092C2.23548 15.6869 4.89677 16 6.74194 16C8.12581 16 9.15484 15.8748 9.40322 15.7808C19.3387 13.7143 19.8 5.8865 19.8 4.32094V4.10176L20.0129 3.97652C21.2194 2.97456 21.7161 2.44227 22 2.12916C21.8935 2.16047 21.7516 2.22309 21.6097 2.2544L19.5516 2.75538Z"
                        fill="white"
                      />
                    </svg>
                  </a>
                </li>
                <li class="w-full px-2">
                  <a
                    href="javascript:void(0)"
                    class="flex h-11 items-center justify-center rounded-md bg-[#D64937] transition hover:bg-opacity-90"
                  >
                    <svg
                      width="18"
                      height="18"
                      viewBox="0 0 18 18"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M17.8477 8.17132H9.29628V10.643H15.4342C15.1065 14.0743 12.2461 15.5574 9.47506 15.5574C5.95916 15.5574 2.8306 12.8821 2.8306 9.01461C2.8306 5.29251 5.81018 2.47185 9.47506 2.47185C12.2759 2.47185 13.9742 4.24567 13.9742 4.24567L15.7024 2.47185C15.7024 2.47185 13.3783 0.000145544 9.35587 0.000145544C4.05223 -0.0289334 0 4.30383 0 8.98553C0 13.5218 3.81386 18 9.44526 18C14.4212 18 17.9967 14.7141 17.9967 9.79974C18.0264 8.78198 17.8477 8.17132 17.8477 8.17132Z"
                        fill="white"
                      />
                    </svg>
                  </a>
                </li>
              </ul> -->

              <p class="mb-4 text-base text-[#adadad]">
                By creating an account you are agree with our
                <a
                  href="javascript:void(0)"
                  class="text-primary hover:underline"
                >
                  Privacy
                </a>
                and
                <a
                  href="javascript:void(0)"
                  class="text-primary hover:underline"
                >
                  Policy
                </a>
              </p>

              <p class="text-base text-[#adadad]">
                Already have an account?
                <a href="<?= base_url('/auth'); ?>" class="text-primary hover:underline">
                  Sign In
                </a>
              </p>

              <div>
                <span class="absolute top-1 right-1">
                  <svg
                    width="40"
                    height="40"
                    viewBox="0 0 40 40"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <circle
                      cx="1.39737"
                      cy="38.6026"
                      r="1.39737"
                      transform="rotate(-90 1.39737 38.6026)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="1.39737"
                      cy="1.99122"
                      r="1.39737"
                      transform="rotate(-90 1.39737 1.99122)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="13.6943"
                      cy="38.6026"
                      r="1.39737"
                      transform="rotate(-90 13.6943 38.6026)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="13.6943"
                      cy="1.99122"
                      r="1.39737"
                      transform="rotate(-90 13.6943 1.99122)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="25.9911"
                      cy="38.6026"
                      r="1.39737"
                      transform="rotate(-90 25.9911 38.6026)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="25.9911"
                      cy="1.99122"
                      r="1.39737"
                      transform="rotate(-90 25.9911 1.99122)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="38.288"
                      cy="38.6026"
                      r="1.39737"
                      transform="rotate(-90 38.288 38.6026)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="38.288"
                      cy="1.99122"
                      r="1.39737"
                      transform="rotate(-90 38.288 1.99122)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="1.39737"
                      cy="26.3057"
                      r="1.39737"
                      transform="rotate(-90 1.39737 26.3057)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="13.6943"
                      cy="26.3057"
                      r="1.39737"
                      transform="rotate(-90 13.6943 26.3057)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="25.9911"
                      cy="26.3057"
                      r="1.39737"
                      transform="rotate(-90 25.9911 26.3057)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="38.288"
                      cy="26.3057"
                      r="1.39737"
                      transform="rotate(-90 38.288 26.3057)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="1.39737"
                      cy="14.0086"
                      r="1.39737"
                      transform="rotate(-90 1.39737 14.0086)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="13.6943"
                      cy="14.0086"
                      r="1.39737"
                      transform="rotate(-90 13.6943 14.0086)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="25.9911"
                      cy="14.0086"
                      r="1.39737"
                      transform="rotate(-90 25.9911 14.0086)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="38.288"
                      cy="14.0086"
                      r="1.39737"
                      transform="rotate(-90 38.288 14.0086)"
                      fill="#3056D3"
                    />
                  </svg>
                </span>
                <span class="absolute left-1 bottom-1">
                  <svg
                    width="29"
                    height="40"
                    viewBox="0 0 29 40"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <circle
                      cx="2.288"
                      cy="25.9912"
                      r="1.39737"
                      transform="rotate(-90 2.288 25.9912)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="14.5849"
                      cy="25.9911"
                      r="1.39737"
                      transform="rotate(-90 14.5849 25.9911)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="26.7216"
                      cy="25.9911"
                      r="1.39737"
                      transform="rotate(-90 26.7216 25.9911)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="2.288"
                      cy="13.6944"
                      r="1.39737"
                      transform="rotate(-90 2.288 13.6944)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="14.5849"
                      cy="13.6943"
                      r="1.39737"
                      transform="rotate(-90 14.5849 13.6943)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="26.7216"
                      cy="13.6943"
                      r="1.39737"
                      transform="rotate(-90 26.7216 13.6943)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="2.288"
                      cy="38.0087"
                      r="1.39737"
                      transform="rotate(-90 2.288 38.0087)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="2.288"
                      cy="1.39739"
                      r="1.39737"
                      transform="rotate(-90 2.288 1.39739)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="14.5849"
                      cy="38.0089"
                      r="1.39737"
                      transform="rotate(-90 14.5849 38.0089)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="26.7216"
                      cy="38.0089"
                      r="1.39737"
                      transform="rotate(-90 26.7216 38.0089)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="14.5849"
                      cy="1.39761"
                      r="1.39737"
                      transform="rotate(-90 14.5849 1.39761)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="26.7216"
                      cy="1.39761"
                      r="1.39737"
                      transform="rotate(-90 26.7216 1.39761)"
                      fill="#3056D3"
                    />
                  </svg>
                </span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ====== Forms Section End -->


<?php $this->endSection(); ?>

<?php $this->section('scripts'); ?>
<script>
    $("#signupbutton").click(function (e) { 
        e.preventDefault();
        signup();
    });
     function signup()
    {
        name = $('#name').val();
        email = $('#email').val();
        password = $('#password').val();
        confirmpassword = $('#confirmpassword').val();
        if(name == '' | email == '' | password == '' | email.length < 4){

            html = 
            '<div class="alert alert-danger alert-with-icon">'+
            '<button type="button" aria-hidden="true" class="close" data-dismiss="alert" aria-label="Close">'+
            ' <i class="tim-icons icon-simple-remove"></i>'+
            '</button>'+
            '<span data-notify="icon" class="tim-icons icon-bell-55"></span>'+
            '<span>'+
            'Please fill in all the inputs</span>'+
          '</div>'
          $('#alert-box').html(html)
            setTimeout(() => {
                $('#alert-box').html('')
            }, 2000);

        }else{
          if(password != confirmpassword)
          {
            html = 
            '<div class="alert alert-danger alert-with-icon">'+
            '<button type="button" aria-hidden="true" class="close" data-dismiss="alert" aria-label="Close">'+
            ' <i class="tim-icons icon-simple-remove"></i>'+
            '</button>'+
            '<span data-notify="icon" class="tim-icons icon-bell-55"></span>'+
            '<span>'+
            'Passwords do not match</span>'+
          '</div>'
          $('#alert-box').html(html)
            setTimeout(() => {
                $('#alert-box').html('')
            }, 2000);

          } else if(password.length <   6)
          {
            html = 
            '<div class="alert alert-danger alert-with-icon">'+
            '<button type="button" aria-hidden="true" class="close" data-dismiss="alert" aria-label="Close">'+
            ' <i class="tim-icons icon-simple-remove"></i>'+
            '</button>'+
            '<span data-notify="icon" class="tim-icons icon-bell-55"></span>'+
            '<span>'+
            'Password length should be atleast six</span>'+
          '</div>'
          $('#alert-box').html(html)
            setTimeout(() => {
                $('#alert-box').html('')
            }, 2000);

          }
          else
            {
                
                 var formdata = {
                     name : name,
                     email : email,
                     password : password
                 }
                 $.ajax({
                     type: "POST",
                     url: "<?= base_url('/Auth/Fsignup'); ?>",
                     data: formdata,
                    
                     success: function (response) {
                         if(response== 'success')
                         {
                            html = 
                            '<div class="alert alert-success alert-with-icon">'+
                            '<button type="button" aria-hidden="true" class="close" data-dismiss="alert" aria-label="Close">'+
                            ' <i class="tim-icons icon-simple-remove"></i>'+
                            '</button>'+
                            '<span data-notify="icon" class="tim-icons icon-bell-55"></span>'+
                            '<span>'+
                            'Signed Up succesfully Redirecting to Login...</span>'+
                        '</div>'
                        $('#alert-boxs').html(html)
                            setTimeout(() => {
                                $('#alert-box').html('')
                               location.href="<?= base_url('/auth'); ?>"
                            }, 3000);
                         
                         } 
                         else{
                         html = 
                            '<div class="alert alert-danger alert-with-icon">'+
                            '<button type="button" aria-hidden="true" class="close" data-dismiss="alert" aria-label="Close">'+
                            ' <i class="tim-icons icon-simple-remove"></i>'+
                            '</button>'+
                            '<span data-notify="icon" class="tim-icons icon-bell-55"></span>'+
                            '<span>'+
                            'email already taken</span>'+
                        '</div>'
                        $('#alert-box').html(html)
                            setTimeout(() => {
                                $('#alert-box').html('')
                            }, 2000);
                         }
                     },
                     error : function(e){
                        swal('error','error','error')
                     }
                 });
            }

        }
       
    }
</script>

<?php $this->endSection(); ?>