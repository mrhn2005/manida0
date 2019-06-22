@extends('admin.layout.auth1')
@section('style')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.2.0/min/dropzone.min.css" type="text/css" />

@endsection

@section('content')

        <section id="main-content">
            <section class="wrapper">
                <div class="row" style="margin-right:10px;">
                    @include('includes.messages')
                     <h1 class="page-header">
                      تصاویر اسلایدر
                      
                    
                    </h1>
                   
                    
                    
                    <table class="table table-hover">
                        <thead>
                          <tr>
                               <th>
                                   شماره
                                </th>

                               <th>
                                   تصویر
                                </th>
                               <th>
                                   حذف تصویر
                                </th>
                               <td>
                                   تصویر اول
                               </td>
                          </tr>
                        </thead>
                        
                            <?php $i=0; ?>
                            
                          @foreach($banners as $banner)
                             <form method="post" class="confirm-form" action="{{route('banners.destroy',$banner)}}" id="delete{{$banner->id}}"> </form>
                             <form method="post" action="{{route('banners.update',$banner)}}" id="update{{$banner->id}}" >
                                 <input type="hidden" name="_method" value="PATCH" form="update{{$banner->id}}">
                                 <input type="hidden" name="banner_id" form="update{{$banner->id}}" value="{{$banner->id}}">
                               </form>
                             <input type="hidden" name="_method" value="DELETE" form="delete{{$banner->id}}" >
                          <tbody>
                          <?php $i=$i+1; ?>
                              <td>
                                  {{$i}}
                              </td>

                              <td>
                                  <img style="width:70px" src="/thumbnails/{{$banner->path}}"></img>
                              </td>
                              <td><button class="btn btn-danger" type="submit" form="delete{{$banner->id}}">
                                   <i class="fa fa-remove" style="font-size:16px; "></i>
                               </button></td>
                               @if($banner->main_banner==1)
                                   <td>
                                       تصویر اصلی
                                   </td>
                               
                               @else
                               <td><button class="btn btn-success" type="submit" form="update{{$banner->id}}">
                                   تبدیل به تصویر اصلی
                               </button></td>
                               @endif
                             </tbody>
                           @endforeach 
                      
                    </table>  
                    <div class="container">
                        <form id="myDropzone" method="post" action="{{route('banners.store')}}"
                      class="dropzone">
                            
                        </form>
                    </div>
                    
                 </div>
            </section>
        </section>
@endsection

@section('js')
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.2.0/min/dropzone.min.js"></script>
<script>
Dropzone.options.myDropzone = {
    acceptedFiles: '.jpg',
    init: function() {
        
        this.on("success", function() {
            location.reload();
        });
    }
};

$('form').append('{{csrf_field()}}');
</script>
@endsection