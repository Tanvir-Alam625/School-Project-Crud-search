@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                    <h6 class="card-title">Update Student Info</h6>
                    <form class="forms-sample" action="{{route('student.update',['student' => $student->id])}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="exampleInputUsername1">Full Name</label>
                                    <input type="text" value="{{$student->name}}" name="name" class="form-control" id="exampleInputUsername1" autocomplete="off" placeholder="Full Name">
                                    @error('name')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email address</label>
                                    <input type="email" value="{{$student->email}}" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
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
                                    <input type="number"  value="{{$student->roll}}"class="form-control" name="roll"  autocomplete="off" placeholder="Roll Number">
                                    @error('roll')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Regstation Number</label>
                                    <input type="number" value="{{$student->reg}}" name="reg" class="form-control" id="exampleInputEmail1" placeholder="Registation Number">
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
                                    <input type="tell" value="{{$student->phone}}" class="form-control" name="phone"  autocomplete="off" placeholder="Phone Number">
                                    @error('phone')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Father Name</label>
                                    <input type="text" value="{{$student->fatherName}}" name="fatherName" class="form-control" id="exampleInputEmail1" placeholder="Father Name">
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
                                    <input type="text" value="{{$student->motherName}}" class="form-control" name="motherName"  autocomplete="off" placeholder="Mother Name">
                                    @error('motherName')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Select Technology</label>
                                    <select class="form-control"  name="technology" id="exampleInputEmail1">
                                        <option @selected($student->technology == 'Computer') value="Computer">Computer</option>
                                        <option @selected($student->technology == 'Civil') value="Civil">Civil</option>
                                        <option @selected($student->technology == 'Electronics') value="Electronics">Electronics</option>
                                        <option @selected($student->technology == 'Environment') value="Environment">Environment</option>
                                        <option @selected($student->technology == 'Refrigeration and air conditioning') value="Refrigeration and air conditioning">Refrigeration and air conditioning</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Select Semester</label>
                                    <select class="form-control"  name="semester" id="exampleInputEmail1">
                                        <option @selected($student->semester == '1st') value="1st">1st</option>
                                        <option @selected($student->semester == '2nd') value="2nd">2nd</option>
                                        <option @selected($student->semester == '3rd') value="3rd">3rd</option>
                                        <option @selected($student->semester == '4th') value="4th">4th</option>
                                        <option @selected($student->semester == '5th') value="5th">5th</option>
                                        <option @selected($student->semester == '6th') value="6th">6th</option>
                                        <option @selected($student->semester == '7th') value="7th">7th</option>
                                        <option @selected($student->semester == '8th') value="8th">8th</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Select Session</label>
                                    <select class="form-control"  name="session" id="exampleInputEmail1">
                                        <option @selected($student->session == '2010-2011') value="2010-2011">2010-2011</option>
                                        <option @selected($student->session == '2011-2012') value="2011-2012">2011-2012</option>
                                        <option @selected($student->session == '2012-2013') value="2012-2013">2012-2013</option>
                                        <option @selected($student->session == '2013-2014') value="2013-2014">2013-2014</option>
                                        <option @selected($student->session == '2014-2015') value="2014-2015">2014-2015</option>
                                        <option @selected($student->session == '2015-2016') value="2015-2016">2015-2016</option>
                                        <option @selected($student->session == '2016-2017') value="2016-2017">2016-2017</option>
                                        <option @selected($student->session == '2017-2018') value="2017-2018">2017-2018</option>
                                        <option @selected($student->session == '2018-2019') value="2018-2019">2018-2019</option>
                                        <option @selected($student->session == '2019-2020') value="2019-2020">2019-2020</option>
                                        <option @selected($student->session == '2020-2021') value="2020-2021">2020-2021</option>
                                        <option @selected($student->session == '2021-2022') value="2021-2022">2021-2022</option>
                                        <option @selected($student->session == '2022-2023') value="2022-2023">2022-2023</option>
                                        <option @selected($student->session == '2023-2024') value="2023-2024">2023-2024</option>
                                        <option @selected($student->session == '2024-2025') value="2024-2025">2024-2025</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Select Group</label>
                                    <select class="form-control"  name="group" id="exampleInputEmail1">
                                        <option @selected($student->group == 'A') value="A">A</option>
                                        <option @selected($student->group == 'B') value="B">B</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Select Gender</label>
                                    <select class="form-control"  name="gender" id="exampleInputEmail1">
                                        <option @selected($student->gender == 'Male') value="Male">Male</option>
                                        <option @selected($student->gender == 'Female') value="Female">Female</option>
                                        <option @selected($student->gender == 'Other') value="Other">Other</option>
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
                            <textarea name="address"  class="form-control"  id="" cols="30" rows="3">{{$student->address}}</textarea>
                            @error('address')
                                <p class="text-danger">{{$message}}</p>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary mr-2">Modify Student Info</button>
                    </form>
              </div>
            </div>
		</div>
    </div>
@endsection