@include('admin.include.header')

        <!-- Content Wrapper -->
       <div class="col-sm-12">
           <div class="col-sm-12">
               <h2 class="pt-3">Create Brands</h2>
           </div>
           <div class="col-sm-12">
            <hr>
        </div>
        <form action="{{route('admin.add_brand')}}" method="POST">
            @csrf
        <div class="col-sm-12">
            <label><b>Brand Name</b></label>
            <input class="form-control" name="name" type="text" />
            <button class="btn btn-success mt-2" type="submit" style="background-color:#2B6777; border-color: #2B6777"> Submit </button>
        </div>
    </form>
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

    <!-- Logout Modal-->
@include('admin.include.footer')