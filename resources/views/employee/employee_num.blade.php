  @extends('../layouts.app')

  @section('content')
  <div class="main-panel">
    <div class="content-wrapper">
      <!-- Page Title Header Starts-->
      <div class="row page-title-header">
        <div class="col-12">
          <div class="page-header">
            <h4 class="page-title"> مدیریت  کارمندان</h4>
          </div>
        </div>
         
      </div>
      <!-- Page Title Header Ends-->
    <div class="row">
      <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
           
            <table class="table table-hover">
              <thead>
                <tr>
                  <th><a href="{{route("employees.create")}}" class="btn btn-success">  کارمند جدید</a></th>
                  <th><a href="{{route("employee")}}" class="btn btn-warning">  تمام کارمندان </a></th>
                  <th><a href="{{route("employees.lname")}}" class="btn btn-info">  علوی ها   </a></th>
                  <th><a href="{{route("employees.married")}}" class="btn btn-dark">  کارمندان متاهل</a></th>
                  <th><a href="{{route("employees.age")}}" class="btn btn-primary">  کارمندان بالای 30 سال</a></th>
                  <th><a href="{{route("employees.age_married")}}" class="btn btn-dark">  کارمندان  مجرد و بالای 40 سال </a></th>
                
  
  
  
  
                </tr>
                <tr>
                  <th><a href="{{route("employees.num_married")}}" class="btn btn-dark">    تعداد کارمندان متاهل </a></th>
                  <th><a href="{{route("employees.num_notmarried")}}" class="btn btn-primary">    تعداد کارمندان مجرد </a></th>
                  <th><a href="{{route("employees.num_salary")}}" class="btn btn-dark">    تعداد کارمندان حقوق بالای یک میلیون </a></th>
                  <th><a href="{{route("employees.max_salary")}}" class="btn btn-primary"> کارمند با بیشترین حقوق</a></th>
                  <th><a href="{{route("employees.min_salary")}}" class="btn btn-dark"> کارمند با کمترین حقوق</a></th>
                  <th><a href="{{route("employees.sum_salary")}}" class="btn btn-primary">  مجموع حقوق ها  </a></th>
                  <th><a href="{{route("employees.std")}}" class="btn btn-dark">  انحراف معیار حقوق ها  </a></th>
                </tr>
              

            </thead>
            
          
            
            
            
          </table>
        </div>
      </div>
    </div>
    
    
    
    
  </div>
</div>
<h1 align="center">
@php
if(is_array($num))
   echo  "تعداد کارمندان با این ویژگی برابر است با :  " . count($num) ;
   else {
    echo  "     : ویژگی درخواستی برابر است با  <br> <br> " . $num ;
   }
@endphp

</h1>
@endsection

