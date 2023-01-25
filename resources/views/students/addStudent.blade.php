@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                    <h6 class="card-title">Add A New Student</h6>
                    <form class="forms-sample" action="{{route('student.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="exampleInputUsername1">Full Name</label>
                                    <input type="text" name="name" class="form-control" id="exampleInputUsername1" autocomplete="off" placeholder="Full Name">
                                    @error('name')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email address</label>
                                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                                    @error('email')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>
                        </div>
                       
                        <div class="row">
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Roll Number</label>
                                    <input type="number" class="form-control" name="roll"  autocomplete="off" placeholder="Roll Number">
                                    @error('roll')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Regstation Number</label>
                                    <input type="number" name="reg" class="form-control" id="exampleInputEmail1" placeholder="Registation Number">
                                    @error('reg')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Phone Number</label>
                                    <input type="tell" class="form-control" name="phone"  autocomplete="off" placeholder="Phone Number">
                                    @error('phone')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Father Name</label>
                                    <input type="text" name="fatherName" class="form-control" id="exampleInputEmail1" placeholder="Father Name">
                                    @error('fatherName')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Mother Name</label>
                                    <input type="text" class="form-control" name="motherName"  autocomplete="off" placeholder="Mother Name">
                                    @error('motherName')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Select Technology</label>
                                    <select class="form-control"  name="technology" id="exampleInputEmail1">
                                        <option value="Computer">Computer</option>
                                        <option value="Civil">Civil</option>
                                        <option value="Electronics">Electronics</option>
                                        <option value="Environment">Environment</option>
                                        <option value="Refrigeration and air conditioning">Refrigeration and air conditioning</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Select Semester</label>
                                    <select class="form-control"  name="semester" id="exampleInputEmail1">
                                        <option value="1st">1st</option>
                                        <option value="2nd">2nd</option>
                                        <option value="3rd">3rd</option>
                                        <option value="4th">4th</option>
                                        <option value="5th">5th</option>
                                        <option value="6th">6th</option>
                                        <option value="7th">7th</option>
                                        <option value="8th">8th</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Select Session</label>
                                    <select class="form-control"  name="session" id="exampleInputEmail1">
                                        <option value="2010-2011">2010-2011</option>
                                        <option value="2011-2012">2011-2012</option>
                                        <option value="2012-2013">2012-2013</option>
                                        <option value="2013-2014">2013-2014</option>
                                        <option value="2014-2015">2014-2015</option>
                                        <option value="2015-2016">2015-2016</option>
                                        <option value="2016-2017">2016-2017</option>
                                        <option value="2017-2018">2017-2018</option>
                                        <option value="2018-2019">2018-2019</option>
                                        <option value="2019-2020">2019-2020</option>
                                        <option value="2020-2021">2020-2021</option>
                                        <option value="2021-2022">2021-2022</option>
                                        <option value="2022-2023">2022-2023</option>
                                        <option value="2023-2024">2023-2024</option>
                                        <option value="2024-2025">2024-2025</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Select Group</label>
                                    <select class="form-control"  name="group" id="exampleInputEmail1">
                                        <option value="A">A</option>
                                        <option value="B">B</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Select Gender</label>
                                    <select class="form-control"  name="gender" id="exampleInputEmail1">
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                        <option value="Other">Other</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Image</label>
                            <input type="file" name="image" class="form-control" id="exampleInputEmail1" placeholder="Father Name">
                            @error('image')
                                <p class="text-danger">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Adress Line</label>
                            <textarea name="address"  class="form-control"  id="" cols="30" rows="3"></textarea>
                            @error('address')
                                <p class="text-danger">{{$message}}</p>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary mr-2">Add New Student</button>
                        
                    </form>
              </div>
            </div>
		</div>
    </div>
@endsection
@section('script')
   @if (session('success')){}
   <script>
    const Toast = Swal.mixin({
         toast: true,
         position: 'top-end',
         showConfirmButton: false,
         timer: 1000,
         timerProgressBar: false,
         didOpen: (toast) => {
             toast.addEventListener('mouseenter', Swal.stopTimer)
             toast.addEventListener('mouseleave', Swal.resumeTimer)
         }
         })
         Toast.fire({
         icon: 'success',
         title: '{{session('success')}}'
         })
 </script>
   @endif
@endsection