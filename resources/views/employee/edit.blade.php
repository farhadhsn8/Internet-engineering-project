@extends('../layouts.app')

@section('content')
<div class="main-panel">
  <div class="content-wrapper">
    <!-- Page Title Header Starts-->
    <div class="row page-title-header">
      <div class="col-12">
        <div class="page-header">
          <h4 class="page-title"> ویرایش کارمند   </h4>
        </div>
      </div>
       
    </div>
    <!-- Page Title Header Ends-->
  <div class="row">
     
    <div class="col-lg-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          

          <form action="{{ route('employees.update',$emp->id) }}" method="POST">
            {{-- این برای زمانی است که ما از متود پست استفاده میکنیم و این به امنیت کمک میکند --}}
            @csrf
            <div class="form-group">
                <label for="title">نام    </label>
                {{-- باعث میشه که کاربر در صورت اشتباه وادر کردن فرم را از اول پر نکند --}}
            <input type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{$emp->first_name}}">
  
                {{-- اگر ورودی نامعتبر بود به کاربر تذکر میدهد --}}
  
                @error('first_name')
                     <div class="alert alert-danger">ورودی نام معتبر است</div>
                @enderror
            </div>

            <div class="form-group">
              <label for="title">نام  خانوادگی  </label>
              {{-- باعث میشه که کاربر در صورت اشتباه وادر کردن فرم را از اول پر نکند --}}
          <input type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{$emp->last_name}}">

              {{-- اگر ورودی نامعتبر بود به کاربر تذکر میدهد --}}

              @error('last_name')
                   <div class="alert alert-danger">ورودی نام معتبر است</div>
              @enderror
          </div>
  
          
          <div class="form-group">
            <label for="title"> کد ملی</label>
            <input type="text" class="form-control @error('national_code') is-invalid @enderror" name="national_code" value="{{$emp->national_code}}">
            
            {{-- اگر ورودی نامعتبر بود به کاربر تذکر میدهد --}}
            
            @error('national_code')
            <div class="alert alert-danger">ورودی نا معتبر است</div>
            @enderror
          </div>
          
          
          <div class="form-group">
            <label for="title"> کد پرسنلی</label>
            <input type="text" class="form-control @error('personal_number') is-invalid @enderror" name="personal_number" value="{{$emp->personal_number}}">
            
            {{-- اگر ورودی نامعتبر بود به کاربر تذکر میدهد --}}
            
            @error('personal_number')
            <div class="alert alert-danger">ورودی نا معتبر است</div>
            @enderror
          </div>
          
          <div class="form-group">
              <label for="title"> تلفن</label>
              <input type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{$emp->phone}}">

              {{-- اگر ورودی نامعتبر بود به کاربر تذکر میدهد --}}

              @error('phone')
                   <div class="alert alert-danger">ورودی نا معتبر است</div>
              @enderror
          </div>

          <div class="form-group">
            <label for="title"> آدرس</label>
            <input type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{$emp->address}}">

            {{-- اگر ورودی نامعتبر بود به کاربر تذکر میدهد --}}

            @error('address')
                <div class="alert alert-danger">ورودی نا معتبر است</div>
            @enderror
        </div>


      <div class="form-group">
        <label for="title"> وضعیت تاهل</label>
        <input type="text" class="form-control @error('married') is-invalid @enderror" name="married" value="{{$emp->married}}">

        {{-- اگر ورودی نامعتبر بود به کاربر تذکر میدهد --}}

        @error('married')
             <div class="alert alert-danger">ورودی نا معتبر است</div>
        @enderror
    </div>


    <div class="form-group">
      <label for="title"> سن</label>
      <input type="text" class="form-control @error('age') is-invalid @enderror" name="age" value="{{$emp->age}}">

      {{-- اگر ورودی نامعتبر بود به کاربر تذکر میدهد --}}

      @error('age')
           <div class="alert alert-danger">ورودی نا معتبر است</div>
      @enderror
  </div>



  <div class="form-group">
    <label for="title"> میزان حقوق</label>
    <input type="text" class="form-control @error('salary') is-invalid @enderror" name="salary" value="{{$emp->salary}}">

    {{-- اگر ورودی نامعتبر بود به کاربر تذکر میدهد --}}

    @error('salary')
         <div class="alert alert-danger">ورودی نا معتبر است</div>
    @enderror
</div>
  
            
  
            
  
            
  
  
            <div class="form-group">
                <label for="title"></label>
                <button type="submit" class="btn btn-success">ویرایش </button>
            <a href="{{route('employee')}}" class="btn btn-warning">بازگشت</a>
            </div>
        </form>
        </div>
      </div>
    </div>



  </div>
  </div>
  @endsection
  <!-- content-wrapper ends -->
  <!-- partial:partials/_footer.html -->
  
  <!-- partial -->



