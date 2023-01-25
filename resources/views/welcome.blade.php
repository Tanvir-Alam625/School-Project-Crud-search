@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
<div class="card">
<div class="card-body">
<h6 class="card-title">All Students</h6>
<p class="card-description">Show  The All Student Information</p>
<div class="table-responsive">
  <div id="dataTableExample_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
    <div class="row">
        <div class="col-sm-12 col-md-6">
            <div class="dataTables_length" id="dataTableExample_length">
                    <a href="{{route('student.create')}}" class="btn btn-primary">Add New Student</a>
            </div>
        </div>
            <div class="col-sm-12 col-md-6 justify-content-end">
                <div id="dataTableExample_filter" class="dataTables_filter d-flex justify-content-end ">
                    <form action="{{route("student.search")}}" method="post">
                        @csrf
                        @method("GET")
                        <label for="searchOption">
                            <span class="card-description">Before select</span>
                            <select name="type" id="searchOption"  class="form-control">
                                <option value="roll"> Search Student Roll</option>
                                <option value="reg"> Search Student Registation</option>
                                <option value="name">Search Student Name</option>
                                <option value="tech">Search With Technoloy</option>
                                <option value="semester">Search With Semester</option>
                                <option value="group">Search With Group</option>
                                <option value="session">Search With Session</option>
                            </select>
                        </label>
                        <label>
                            <input required type="text"  name="searchText" class="form-control" placeholder="Type here" aria-controls="dataTableExample">
                        </label>
                    </form>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <table id="dataTableExample" class="table dataTable no-footer" role="grid" aria-describedby="dataTableExample_info">       
                                    <thead>
                                    <tr role="row">
                                        <th class="sorting_asc" tabindex="0" aria-controls="dataTableExample" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" >Name</th>
                                        <th class="sorting" tabindex="0" aria-controls="dataTableExample" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" >Roll</th>
                                        <th class="sorting" tabindex="0" aria-controls="dataTableExample" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending">Registation</th>
                                        <th class="sorting" tabindex="0" aria-controls="dataTableExample" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" >Technology</th>
                                        <th class="sorting" tabindex="0" aria-controls="dataTableExample" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 79.5781px; text-align:center;">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @forelse ($students as $student)
                                    <tr class="odd">
                                        <td class="sorting_1">{{$student->name}}</td>
                                        <td>{{$student->roll}}</td>
                                        <td>{{$student->reg}}</td>
                                        <td>{{$student->technology}}</td>
                                        <td>
                                            <a href="{{route('student.show',['id' => $student->id])}}" title="show student" class="btn ">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" style="color:green; height:20px;" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                </svg>
                                            </a>
                                            <a href="{{route('student.edit',['student' => $student->id])}}" title="edit student" class="btn ">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" style="color:blue; height:20px;" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                                </svg>
                                            </a>
                                            <a href="{{route('student.destroy',['id' => $student->id])}}" class="btn" title="delete student">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" style="color:red; height:20px;" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                                </svg>
                                            </a>
                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="5"> No Student Found</td>
                                    </tr>
                                    @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        {{-- links  /// --}}
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