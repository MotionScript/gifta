<!-- footer begin -->
    
@php
    $site = App\Models\Backend\SiteSettings::find(1);
    $pages = App\Models\Page::where('body', '!=', NULL)->get();
     $page = App\Models\Page::where('slug', 'about-us')->first();
@endphp
<footer class="gray-bg footer effect-section p-60px-t">
    
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 m-15px-tb">
                    <div class="p-25px-b">
                        <img class="logo-dark" style="width: 100px" title="" src="{{ asset($site->dlogo) }}">
                    </div>
                    <p>
                        {!! Str::limit($page->body, 250, '...') !!}
                    </p>
                 
                </div>
                <div class="col-6 col-lg-4 m-15px-tb">
                    <h5 class="footer-title">
                    Socail Links
                    </h5>
                    <ul class="list-unstyled  footer-link-1">
                           <div class="social-icon si-30 theme round nav">
<a href="{{ $site->facebook }}" ><i class="fab fa-facebook"></i></a>
<a href="{{ $site->instagram }}" ><i class="fab fa-instagram"></i></a>
<a href="{{ $site->twitter }}" ><i class="fab fa-twitter"></i></a>
           </div>
                                                                        </ul>
                </div>
                <div class="col-6 col-lg-4 m-15px-tb">
                    <h5 class="footer-title">
                    Company
                    </h5>
                    <ul class="list-unstyled links-dark footer-link-1">
                    @foreach($pages as $page)
                        <li><a href="{{ route('page',['slug'=>$page->slug])}}" >{{$page->name}}</a></li>
                     @endforeach 
                        <li><a href="{{ url('/#faq') }}">FAQs</a></li>
                                            </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom footer-border-dark t">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-right m-5px-tb">
                    <ul class="nav justify-content-center justify-content-md-start links-dark font-small footer-link-1">
                    </ul>
                </div>

@php
  $site = App\Models\Backend\SiteSettings::find(1);
@endphp
{!! $site->chat  !!}



                <div class="col-md-12  text-md-right m-5px-tb ">
                    <p class="m-0px font-small text-center">  &copy; @php
                        echo date('Y');
                    @endphp {{ $site->name }} All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </div>
</footer>

               
        <script src="{{ asset('frontend/asset/static/js/jquery-3.2.1.min.js') }}"></script>
        <script src="{{ asset('frontend/asset/static/js/jquery-migrate-3.0.0.min.js') }}"></script>
        <script src="{{ asset('frontend/asset/static/plugin/appear/jquery.appear.js') }}"></script>
        <script src="{{ asset('frontend/asset/static/plugin/bootstrap/js/popper.min.js') }}"></script>
        <script src="{{ asset('frontend/asset/static/plugin/bootstrap/js/bootstrap.js') }}"></script>
        <script src="{{ asset('frontend/asset/static/js/custom.js') }}"></script>

       

<script>
    //get card sub category from card category

    
$(document).ready(function(){
    $('select[name="category_id"]').on('change', function(){
      var category_id = $(this).val();
      if(category_id){
        $.ajax({
          url: "{{ url('/category/subcategory/ajax') }}/"+category_id,
          type: "GET",
          dataType: "json",
          success: function(data){
            var d =$('select[name="subcategory_id"]').empty();
            $.each(data, function(key, value){
                $('select[name="subcategory_id"]').append('<option></option>');
              $('select[name="subcategory_id"]').append('<option value="'+ value.rate +'">' + value.name + '</option>');
              
            });
          },
        });
      }else{
        alert('danger');
      }
    });
});


//card rate calculator

// $(".txt, .select, .checkbox").each(function() {
//         $(this).change(function(){
//     createSummary();
//         });
//     });

// function createSummary() {
//     var eventType = $("#rate1").val() * $("#amount1").val();      
//     $("#preview").html(eventType);

// }


</script>








    </body>


</html>