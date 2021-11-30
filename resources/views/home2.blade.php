@extends('layouts.web')

@section('title', "Dashboard || Yagerdity")

@section('breadtitle', "Dashboard")

@section('breadli')
<li class="breadcrumb-item active">Dashboard</li>               
@endsection

@section('content')
@if(Auth::user()->level < 1)
     <div class="alert alert-success"> Activate your account with ₦10,000 to begin ; accounts not activated is deleted in 2days. Click <b>"How To?"</b> below. </div>
@elseif(Auth::user()->level == 1)
<div class="alert alert-success"> Upgrade to Feeder to earn bonus of ₦26,000 when you introduce 6 friends and those 6 friends bring 6 friends.</div>
@elseif(Auth::user()->level == 2)
<div class="alert alert-success"> Upgrade to Bronze to earn bonus of ₦128,100 when 14 people from feeder join you at this rank.</div>
@elseif(Auth::user()->level == 3)
<div class="alert alert-success"> Upgrade to Silver to earn bonus of ₦256,000 when 14 people from bronze join you at this rank + automatic Registration Amway Global Package</div>
@endif



                         <div class="modal fade text-left" id="modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2"
                          aria-hidden="true">
                            <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="myModalLabel2"><i class="la la-road2"></i> Upgrade to next Level (₦{{number_format($pay_amount)}})</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <form id="registerForm" method="post" >
                                <div class="modal-body">

                                   
                              
                                  <h5><i class="icon-arrow-right"></i> <b  class="text-danger">Select Preferred Upgrade method!!</b></h5>
                                  <div class="input-group">
                                                        <ul class="list-group col-sm-12">
                                                            <li class="list-group-item p-3" >
                                                                <input type="radio"  class="check " id="flat-radio-1" name="payment_method" checked data-radio="iradio_flat-red" value="wallet" >
                                                                <label for="flat-radio-1">Upgrade with Wallet Balance - <em><b>₦{{number_format($pay_amount)}}</b></em></label>
                                                            </li>
                                                            <li class="list-group-item p-3">
                                                                <input type="radio" class="check " id="flat-radio-2" name="payment_method" data-radio="iradio_flat-red" value="paystack">
                                                                <label for="flat-radio-2">Upgrade with Credit Card  </label>
                                                                <img src="/assets/images/paystack-ii.png" alt="PAYSTACK" class="img-fluid">
                                                            </li>
                                                           
                                                        </ul>
                                                    </div>
                                 
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">Close</button>
                                  <button type="submit" class="btn btn-outline-info waves-effect waves-light">Make Payment</button>
                                             
                                </div>
                             </form>
                              </div>
                            </div>
                        </div>





            <div class="row">
                    <div class="col-md-6">
                        <div class="card border-success">
                            <div class="card-header bg-light">
                                <h3 class="m-b-0 text-dark">User Summary</h3></div>
                            <div class="card-body">
                           
                            <script src="https://js.paystack.co/v1/inline.js"></script>
                                @if(Auth::user()->level < 1)
                                <a onclick="payWithPaystack()" id="buttonText" href="javascript:void(0)" class="btn btn-outline-info" ></i> Activate Your Account</a>
                                @else
                                    @if(Auth::user()->level < 3)
                                    <a href="javascript:void(0)" id="buttonText" data-toggle="modal" data-target="#modal" class="btn btn-outline-success">Upgrade to next level</a>
                                    <!-- <a href="javascript:void(0)" class="btn btn-info mt-2 ml-2">Edit Profile</a> -->
                                    @else
                                    <div class="alert alert-success"> You did it! </div>
                                    @endif
                                @endif

                                <!-- <a href="javascript:void(0)" class="btn btn-outline-info" data-toggle="modal"
                          data-target="#iconModal">How to?</a> -->
                                <table class="table mt-3">
                                    
                                    <tbody>
                                        <tr >
                                            <td>Level:</td>
                                            <td class="{{Auth::user()->level == 0 ? 'text-danger' : ''}}">{{Auth::user()->level == 0 ? "Not activated" : Auth::user()->level}}</td>
                                        </tr>
                                       
                                        <tr >
                                            <td>Total Benefits:</td>
                                            <td class="text-success">₦{{number_format($transIn)}}</td>
                                        </tr>
                                      
                                        <tr >
                                            <td>Total Withdrawal:</td>
                                            <td class="text-danger">₦{{number_format($transOut)}}</td>
                                        </tr>
                                        <tr >
                                            <td>Joined:</td>
                                            <td class="text-dark">{{date_format(date_create(Auth::user()->created_at),"d-M-Y")}}</td>
                                        </tr>
                                        @if(Auth::user()->level > 0)
                                        <tr >
                                            <td>Referral Link:</td>
                                            <td><a class="text-info" href="http://amwayteam.ng/register?ref={{Auth::user()->username}}">http://amwayteam.ng/register?ref={{Auth::user()->username}}</a></td>
                                        </tr>
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        
                    </div>
                </div>  

                <div class="row">
                    <div class="col-sm-6">
                    <div class="card border-success mt-2">
                            <div class="card-header bg-info" style="background-color: #2a2f3f"> 
                                <h3 class="m-b-0  text-white" >How it works</h3></div>
                            <div class="card-body"> 

                            <h5 style="font-weight: bold;"> <b>Follow through the stages in order to benefit massively</b></h5>
                            <div class="table-responsive">
                  <table class="table table-striped">
                 
                    <tbody style="font-weight: bold; color: #2a2f3f;  font-size: 17px;">
                    <tr>
                        <td scope="row">REGISTERATION LEVEL: (Activation)</td>
                        <td scope="row">Register to become an independent Business Owner by paying a one time fee of ₦10,000</td>
                      </tr>




                      <tr>
                        <td scope="row">FEEDER LEVEL 1: (Upgrade here). to earn bonus of ₦26,000</td>
                        <td scope="row">Introduce 6 of your friends and ask them to introduce 6 friends each of which you earn a bonus of N 26,000 <br> <br>Level Bonus ₦3,000 X 6 = ₦18,000 + Benefits</td>
                       
                    </tr>

                     






                      <tr>
                        <td scope="row">BRONZE LEVEL 2: (Upgrade here). to earn bonus of ₦128,100</td>
                        <td scope="row">you complete this rank when 14 people from your feeder rank join you at this rank. <br><br> Level Bonus ₦9,150 X 14 = ₦128,100</td>
                        
                        
                      </tr>
                      
                      
                      
                      <tr>
                        <td scope="row">SILVER LEVEL 3: (Upgrade here). to earn bonus of ₦250,00</td>
                        <td scope="row">you complete this rank when 14 people from your bronze rank join you at this rank. Automatic Registration Amway Global,Global Package ( Welcome Pack )</td>
                        
                        

                        
                      </tr>
                    </tbody>
                  </table>
                </div>
                            </div>
                        </div>  
                    
                    </div>
                </div> 
                
                  


                <!-- modal -->
                <div id="daModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Upgrade to Next Level</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            </div>
                                            <form method="post" action="/activate-user">
                                            <div class="modal-body">
                                                <div class="alert alert-danger">
                                                    <p>Refferals will be used to upgrade to level 2</p>

                                                </div>
                                                @csrf

                                                 <input type="radio" name="upgrade" value="balance" checked>Use Balance
                                                    <br>
                                                <input type="radio" name="upgrade" value="paystack"> Use Paystack
                                                   
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-danger waves-effect waves-light">Activate User</button>
                                             
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>


                                <script>
  function payWithPaystack(){
    var handler = PaystackPop.setup({
      key: '{{$paystack_key}}',
      email: '{{Auth::user()->email}}',
      amount: {{$pay_amount * 100}},
      currency: "NGN",
      ref: ''+Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
      
      // label: "Optional string that replaces customer email"
      metadata: {
         custom_fields: [
            {
                display_name: "Mobile Number",
                variable_name: "mobile_number",
                value: "{{Auth::user()->phone}}"
            },
            {
                display_name: "Username",
                variable_name: "username",
                value: "{{Auth::user()->username}}"
            }
         ]
      },
      callback: function(response){
        //   alert('success. transaction ref is ' + response.reference);
         
         document.getElementById("buttonText").innerHTML = '<h3>Processing... <i class="fa fa-spinner fa-spin fa-1x fa-fw" aria-hidden="true"></i></h3>';

          $.ajax({
                url: '/verify/'+ response.reference ,
                method: 'GET'
            }).done(function(data) {
                    
                    location.reload();
                
            }).fail(function(err) {

                swal("Opps!", err.message, "error");
              
            })
            
      },
      onClose: function(){
        //   alert('window closed');

      }
    });
    handler.openIframe();
  }
</script>
@endsection