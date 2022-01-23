@include('admin.include.header')
        <!-- Content Wrapper -->
       <div class="col-sm-10">
           <div class="col-sm-12">
               <h2 class="pt-3">Manage Brands</h2>
           </div>
           <div class="col-sm-12">
            <hr>
        </div>
        <div class="col-sm-12">
            <table class="table">
                <thead class="table" style="background-color: #2B6777; color: white;">
                  <tr>
                    <th>#</th>
                    <th>Brand Name</th>
                    <th>Creation Date</th>
                    <th>Creation Date</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                  @foreach ($brand as $data )
                  <td>{{$loop->iteration}}</td>
                  <td>{{$data->name}}</td>
                  <td>{{$data->created_at}}</td>
                  <td>{{$data->updated_at}}</td>
                  <td>
                    <form action="{{route('admin.edit_brand')}}" method="POST">
                      @csrf
                      <input type="hidden" name="id"  value="{{$data->id}}" id="">
                      <span><button class="btn btn-dark" style="border-radius: 50px; border-color: rgb(7, 70, 17); background-color: white; color: darkgreen;"><i class="far fa-edit"></i></button></span>
                    
                      <span><a href="{{route('admin.delete_brand' , $data->id)}}"  class="btn btn-dark" style="border-radius: 50px; border-color: rgb(116, 8, 8); background-color: white; color: rgb(116, 8, 8);"><i class="fas fa-trash-alt"></i></a></span>
                    </form>
                  </td>  
                
                    
                  </tr>
                  @endforeach
                  
                </tbody>
              </table>
              
        </div>
        <div class="col-sm-12">
            <div></div>
        </div>
       </div>

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

@include('admin.include.footer')