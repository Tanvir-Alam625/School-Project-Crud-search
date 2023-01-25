@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="example">
                <div class="row">
                  <div class="col-12 ">
                    <div class="card ">
                        <img style="height: 300px; object-fit:fill; border-radius:10px 10px 0 0;" src="../../../assets/images/bagunapolytechnic.jpg" class="card-img-top" alt="...">
                       <div class="p-2" style="position: absolute; top:220px; right:45%; trasform:trasnlate(-50%);">
                        <img style="height:100px; width:100px; border-radius:50%; border:2px solid #031A61; object-fit:cover;" class="profile-pic shadow" src="{{$student->image ? asset('uploads/students/'.$student->image) : 'https://via.placeholder.com/100x100'}}" alt="profile">
                        <h5 class="card-title" style="margin: 15px 0; text-align:center; color:#031A61;">{{$student->name}}</h5>       
                       </div>
                        <div class="card-body" style="margin-top: 100px">
                            <div class="info d-flex" >
                                <div class="d-flex justify-content-start " style="width: 50%">
                                   <div>
                                    <h6 class="card-title">Name</h6>
                                    <h6 class="card-title">Father Name</h6>
                                    <h6 class="card-title">Mother Name</h6>
                                    <h6 class="card-title">Email</h6>
                                    <h6 class="card-title">Gender</h6>
                                    <h6 class="card-title">Roll</h6>
                                    <h6 class="card-title">Registation</h6>
                                    <h6 class="card-title">Technology</h6>
                                    <h6 class="card-title">Session</h6>
                                    <h6 class="card-title">Group</h6>
                                    <h6 class="card-title">Semester</h6>
                                    <h6 class="card-title">Address</h6>
                                   </div>
                                </div>
                                <div class="w-50">
                                    <h6 class="card-title" style="color: #94A3B8">{{$student->name}}</h6>
                                    <h6 class="card-title" style="color: #94A3B8">{{$student->fatherName}}</h6>
                                    <h6 class="card-title" style="color: #94A3B8">{{$student->motherName}}</h6>
                                    <h6 class="card-title" style="color: #94A3B8">{{$student->email}}</h6>
                                    <h6 class="card-title" style="color: #94A3B8">{{$student->gender}}</h6>
                                    <h6 class="card-title" style="color: #94A3B8">{{$student->roll}}</h6>
                                    <h6 class="card-title" style="color: #94A3B8">{{$student->reg}}</h6>
                                    <h6 class="card-title" style="color: #94A3B8">{{$student->technology}}</h6>
                                    <h6 class="card-title" style="color: #94A3B8">{{$student->session}}</h6>
                                    <h6 class="card-title" style="color: #94A3B8">{{$student->group}}</h6>
                                    <h6 class="card-title" style="color: #94A3B8">{{$student->semester}}</h6>
                                    <h6 class="card-title" style="color: #94A3B8">{{$student->address}}</h6>
                                </div>
                            </div>
                      </div>
                    </div>
                  </div>
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