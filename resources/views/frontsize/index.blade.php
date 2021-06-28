
@include('frontsize.layout.header')

    <!-- Page Content -->
    <div class="container">



      <div class="row" style="margin-top: 4%">

        <!-- Blog Entries Column -->
        <div class="col-md-8">

          <!-- Blog Post -->

          <div class="card mb-4">
 <img class="card-img-top" src="" alt="">
            <div class="card-body">
              <h2 class="card-title"></h2>
                 <p><b>Category : </b>
                <ul>
                    <li>Coffee</li>
                    <li>Tea</li>
                    <li>Milk</li>
                </ul>
                 </p>

              <a href="/news" class="btn btn-primary">Read More &rarr;</a>
            </div>
            <div class="card-footer text-muted">

            </div>
          </div>





          <!-- Pagination -->


        </div>

        <!-- Sidebar Widgets Column -->
          @include('frontsize.sidebar')
      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- Footer -->

@include('frontsize.layout.footer')
    <!-- Bootstrap core JavaScript -->
    <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
@section('title')
    home page
    @endsection

</head>
  </body>

</html>
