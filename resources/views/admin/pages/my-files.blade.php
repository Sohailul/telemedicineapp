@extends('admin.master')

@section('title')
    My Files || Dashboard
@endsection

@section('main-content') 
  	 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>File Uploads</h1>
          </div>
            @if(Auth::user()->roles == 'doctor')
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><button type="file" class="btn btn-warning">choose file</button></li>&nbsp;
              <li><button type="file" class="btn btn-dark">upload</button></li>
            </ol>
          </div> 
          @endif
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-body">
         <table class="table table-striped table-hover">
            <thead>
              <tr>
                <th>Name</th>
                <th>Sender</th>
                <th>Download</th>
                <th>Delete</th>
              </tr>

            </thead>
            <tbody>
              <tr>
                <td>Hello</td>
                <td>Hello</td>
                <td>Hello</td>
                <td>Hello</td>                
              </tr>
              <tr>
                <td>Hello</td>
                <td>Hello</td>
                <td>Hello</td>
                <td>Hello</td>
              </tr>
            </tbody>
          </table>
            @if(Auth::user()->admin==true)
          <div>
             <h1>Send File</h1> 
             <div class="">
                <select>
                     <option value="">Select</option>
                     <option value=""></option>
                     <option value=""></option>
                     <option value=""></option>                    
                </select>
              </div> 
          </div>
          @endif
        </div>
        <!-- /.card-body -->
        
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
@endsection